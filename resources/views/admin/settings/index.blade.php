@extends('layouts.admin_frame')

@section('content')
<div class="h-full flex flex-col" x-data="{ searchQuery: '', activeGroup: 'all' }">
    @php
        $groups = $contents->pluck('group')->unique()->sort()->values();
    @endphp

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

        <!-- Mobile Horizontal Categories -->
        <div class="lg:hidden mt-6 -mx-8 px-8 overflow-x-auto no-scrollbar flex items-center gap-2 pb-2">
            <button @click="activeGroup = 'all'" 
                :class="activeGroup === 'all' ? 'bg-primary-600 text-white border-primary-600 shadow-md' : 'bg-white text-slate-500 border-slate-200 hover:border-primary-300'"
                class="whitespace-nowrap px-4 py-2 text-xs font-bold rounded-full border transition-all">
                Semua Kategori
            </button>
            @foreach($groups as $group)
            <button @click="activeGroup = @js($group)" 
                :class="activeGroup === @js($group) ? 'bg-primary-600 text-white border-primary-600 shadow-md' : 'bg-white text-slate-500 border-slate-200 hover:border-primary-300'"
                class="whitespace-nowrap px-4 py-2 text-xs font-bold rounded-full border transition-all">
                {{ $group ?: 'Lainnya' }}
            </button>
            @endforeach
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
                <button @click="activeGroup = @js($group)" 
                    :class="activeGroup === @js($group) ? 'bg-primary-50 text-primary-600 border-primary-200' : 'text-slate-500 hover:bg-slate-50 border-transparent'"
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
            <div class="mt-8 mb-6 p-4 bg-emerald-50 border border-emerald-100 rounded-2xl flex items-center gap-3 text-emerald-700 text-sm font-medium">
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
                    <!-- Group Section -->
                    <div x-show="activeGroup === 'all' || activeGroup === @js($group)" class="space-y-6">
                        <div class="flex items-center gap-4">
                            <h3 class="text-sm font-black text-slate-900 uppercase tracking-[0.2em]">{{ $group ?: 'Lainnya' }}</h3>
                            <div class="h-px flex-1 bg-slate-200"></div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            @foreach($items as $content)
                            @php
                                $searchKey = strtolower($content->key);
                                $searchLabel = strtolower($content->label ?: $content->key);
                            @endphp
                            <!-- Settings Card -->
                            <div x-show="!searchQuery || @js($searchKey).includes(searchQuery.toLowerCase()) || @js($searchLabel).includes(searchQuery.toLowerCase())" 
                                class="bg-white border border-slate-200 rounded-[32px] p-8 shadow-sm hover:shadow-md transition-shadow">
                                <div class="space-y-4">
                                    <div class="flex items-start justify-between">
                                        <div class="space-y-1">
                                            <label class="text-sm font-bold text-slate-700">{{ $content->label ?: $content->key }}</label>
                                            <p class="text-[10px] font-mono text-slate-300 uppercase select-all">{{ $content->key }}</p>
                                        </div>
                                    </div>

                                    @if($content->key == 'site_logo')
                                        <div class="flex flex-col md:flex-row gap-6 items-center">
                                            <div class="w-32 h-32 bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 flex items-center justify-center p-4 shrink-0">
                                                <img src="{{ $content->value }}" alt="Logo" class="w-full h-full object-contain">
                                            </div>
                                            <div class="flex-1 w-full space-y-2">
                                                <div class="relative">
                                                    <i data-lucide="link" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"></i>
                                                    <input type="text" name="content[{{ $content->key }}]" value="{{ $content->value }}" 
                                                        class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all">
                                                </div>
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
                                    <div class="pt-2 text-[10px] text-slate-400 font-medium italic">
                                        * {{ $content->hint }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </form>
        </main>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        lucide.createIcons();
    });
</script>
<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endsection
