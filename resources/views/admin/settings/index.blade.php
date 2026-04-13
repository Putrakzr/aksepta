@extends('layouts.admin_frame')

@section('content')
<div class="h-full flex flex-col" x-data="{ 
    searchQuery: '', 
    activeGroup: 'all',
    @php
        $groups = $contents->pluck('group')->unique()->sort()->values();
    @endphp
    groups: @js($groups),
    
    matchItem(itemKey, itemLabel, itemGroup) {
        if (this.searchQuery === '') {
            return this.activeGroup === 'all' || itemGroup === this.activeGroup;
        }
        const query = this.searchQuery.toLowerCase();
        const matchesSearch = itemKey.toLowerCase().includes(query) || 
                            itemLabel.toLowerCase().includes(query);
        const matchesGroup = this.activeGroup === 'all' || itemGroup === this.activeGroup;
        return matchesSearch && matchesGroup;
    },
    
    isGroupVisible(groupName, items) {
        if (this.activeGroup !== 'all' && groupName !== this.activeGroup) return false;
        if (this.searchQuery === '') return true;
        
        // Count matching items in this group
        let matchCount = 0;
        items.forEach(item => {
            if (item.key.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                (item.label && item.label.toLowerCase().includes(this.searchQuery.toLowerCase()))) {
                matchCount++;
            }
        });
        return matchCount > 0;
    }
}">
    <!-- Header with Search -->
    <div class="shrink-0 bg-white border-b border-slate-200 px-8 py-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h1 class="text-2xl font-display font-black text-slate-900 tracking-tight">Setelan Umum Situs</h1>
                <p class="text-sm text-slate-500">Kelola semua konten statis dan konfigurasi visual situs Anda.</p>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="relative group">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400 group-focus-within:text-primary-500 transition-colors"></i>
                    <input type="text" x-model="searchQuery" placeholder="Cari kunci atau label..." 
                        class="pl-11 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all w-64">
                </div>
                <button type="submit" form="settings-form" class="px-6 py-2.5 bg-primary-600 text-white text-sm font-bold rounded-xl hover:bg-primary-700 transition-all active:scale-95 shadow-lg shadow-primary-600/20 flex items-center gap-2">
                    <i data-lucide="save" class="w-4 h-4"></i>
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>

    <!-- Main Dynamic Layout -->
    <div class="flex-1 flex overflow-hidden">
        <!-- Sidebar Selection -->
        <aside class="w-64 border-r border-slate-200 bg-white overflow-y-auto shrink-0 hidden lg:block">
            <div class="p-4 space-y-1">
                <button @click="activeGroup = 'all'" 
                    :class="activeGroup === 'all' ? 'bg-primary-50 text-primary-600 border-primary-200' : 'text-slate-500 hover:bg-slate-50 border-transparent'"
                    class="w-full flex items-center justify-between px-4 py-3 text-sm font-bold rounded-xl border transition-all text-left">
                    Semua Kategori
                    <i data-lucide="layers" class="w-4 h-4" :class="activeGroup === 'all' ? 'opacity-100' : 'opacity-30'"></i>
                </button>
                
                <div class="my-4 border-t border-slate-100"></div>
                
                @foreach($groups as $group)
                <button @click="activeGroup = '{{ $group }}'" 
                    :class="activeGroup === '{{ $group }}' ? 'bg-primary-50 text-primary-600 border-primary-200' : 'text-slate-500 hover:bg-slate-50 border-transparent'"
                    class="w-full flex items-center justify-between px-4 py-3 text-sm font-bold rounded-xl border transition-all text-left">
                    {{ $group ?: 'Lainnya' }}
                    @if(in_array(strtolower($group), ['abco', 'adds', 'adma', 'admo', 'apex', 'ario']))
                        <span class="px-1.5 py-0.5 bg-blue-100 text-blue-600 text-[8px] rounded uppercase tracking-tighter">SBU</span>
                    @endif
                </button>
                @endforeach
            </div>
        </aside>

        <!-- Dynamic Content Area -->
        <main class="flex-1 overflow-y-auto p-8 pt-0">
            @if(session('success'))
            <div class="mt-8 mb-6 p-4 bg-emerald-50 border border-emerald-100 rounded-2xl flex items-center gap-3 text-emerald-700 animate-fade-in text-sm font-medium">
                <i data-lucide="check-circle" class="w-5 h-5"></i>
                {{ session('success') }}
            </div>
            @endif

            <form id="settings-form" action="{{ route('admin.settings.update') }}" method="POST" class="mt-8">
                @csrf
                
                @php
                    $groupedContents = $contents->groupBy('group');
                @endphp

                <div class="space-y-10 pb-20">
                    @foreach($groupedContents as $group => $items)
                    <div x-show="isGroupVisible('{{ $group }}', @js($items))" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                        <div class="flex items-center gap-4">
                            <h3 class="text-sm font-black text-slate-900 uppercase tracking-[0.2em]">{{ $group ?: 'Lainnya' }}</h3>
                            <div class="h-px flex-1 bg-slate-200"></div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            @foreach($items as $content)
                            <div x-show="searchQuery === '' || '{{ strtolower($content->key) }}'.includes(searchQuery.toLowerCase()) || '{{ strtolower($content->label ?: $content->key) }}'.includes(searchQuery.toLowerCase())" 
                                class="bg-white border border-slate-200 rounded-[32px] p-8 shadow-sm hover:shadow-md transition-shadow group/card">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between">
                                        <div class="space-y-1">
                                            <label class="text-sm font-bold text-slate-700">{{ $content->label ?: $content->key }}</label>
                                            <p class="text-[10px] font-mono text-slate-300 uppercase select-all">{{ $content->key }}</p>
                                        </div>
                                        @if($content->hint)
                                            <div class="p-2 bg-slate-50 rounded-lg group-hover/card:bg-primary-50 transition-colors" title="{{ $content->hint }}">
                                                <i data-lucide="info" class="w-4 h-4 text-slate-400 group-hover/card:text-primary-500 transition-colors"></i>
                                            </div>
                                        @endif
                                    </div>

                                    @if($content->key == 'site_logo')
                                        <div class="flex flex-col md:flex-row gap-6 items-center">
                                            <div class="w-32 h-32 bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 flex items-center justify-center p-4 relative group/logo shrink-0">
                                                <img src="{{ $content->value }}" alt="Logo" class="w-full h-full object-contain relative z-10">
                                                <div class="absolute inset-0 bg-slate-100 opacity-0 group-hover/logo:opacity-100 transition-opacity flex items-center justify-center z-20">
                                                    <span class="text-[8px] font-bold text-slate-400 uppercase tracking-widest">Logo Preview</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 w-full space-y-2">
                                                <div class="relative">
                                                    <i data-lucide="link" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"></i>
                                                    <input type="text" name="content[{{ $content->key }}]" value="{{ $content->value }}" 
                                                        class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all">
                                                </div>
                                                <p class="text-[10px] text-slate-400 ml-1">Gunakan URL relatif seperti <code>/api/media/logo.png</code></p>
                                            </div>
                                        </div>
                                    @elseif(strlen($content->value) > 100)
                                        <textarea name="content[{{ $content->key }}]" rows="4"
                                            class="w-full bg-slate-50 border border-slate-200 rounded-[24px] px-6 py-4 text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all resize-none leading-relaxed">{{ $content->value }}</textarea>
                                    @else
                                        <input type="text" name="content[{{ $content->key }}]" value="{{ $content->value }}"
                                            class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all">
                                    @endif
                                    
                                    @if($content->hint)
                                    <div class="pt-2 flex items-center gap-2 text-[10px] text-slate-400 font-medium">
                                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                        {{ $content->hint }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Empty State -->
                <div x-show="searchQuery !== '' && document.querySelectorAll('.group/card:not([style*=\'display: none\'])').length === 0" 
                    class="py-20 text-center animate-fade-in" style="display: none;">
                    <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="search-slash" class="w-10 h-10 text-slate-300"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-2">Tidak ditemukan</h4>
                    <p class="text-sm text-slate-500">Coba kata kunci lain untuk menemukan pengaturan yang dimaksud.</p>
                </div>
            </form>
        </main>
    </div>
</div>

<script>
    // Refresh Lucide icons after Alpine updates
    document.addEventListener('alpine:init', () => {
        Alpine.watch(() => searchQuery, () => {
            setTimeout(() => lucide.createIcons(), 50);
        });
        Alpine.watch(() => activeGroup, () => {
            setTimeout(() => lucide.createIcons(), 50);
        });
    });
</script>
@endsection
