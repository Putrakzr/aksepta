@extends('layouts.admin_frame')

@section('content')
<div class="p-8">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-display font-black text-slate-900 tracking-tight">Setelan Umum Situs</h1>
            <p class="text-sm text-slate-500">Kelola semua konten statis dan konfigurasi visual situs Anda.</p>
        </div>
        <button type="submit" form="settings-form" class="px-6 py-2.5 bg-primary-600 text-white text-sm font-bold rounded-xl hover:bg-primary-700 transition-all active:scale-95 shadow-lg shadow-primary-600/20">
            Simpan Perubahan
        </button>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 rounded-2xl flex items-center gap-3 text-emerald-700 animate-fade-in text-sm font-medium">
        <i data-lucide="check-circle" class="w-5 h-5"></i>
        {{ session('success') }}
    </div>
    @endif

    <form id="settings-form" action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        
        @php
            $groupedContents = $contents->groupBy('group');
        @endphp

        <div class="space-y-8">
            @foreach($groupedContents as $group => $items)
            <div class="bg-white border border-slate-200 rounded-[32px] overflow-hidden shadow-sm">
                <div class="px-8 py-5 bg-slate-50 border-b border-slate-200">
                    <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">{{ $group ?: 'Lainnya' }}</h3>
                </div>
                <div class="p-8 space-y-6">
                    @foreach($items as $content)
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label class="text-sm font-bold text-slate-700">{{ $content->label ?: $content->key }}</label>
                            <span class="text-[10px] font-mono text-slate-300 uppercase select-all">{{ $content->key }}</span>
                        </div>
                        
                        @if($content->key == 'site_logo')
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-slate-100 rounded-xl overflow-hidden border border-slate-200 flex items-center justify-center p-2">
                                    <img src="{{ $content->value }}" alt="Logo Cleanup" class="w-full h-full object-contain">
                                </div>
                                <input type="text" name="content[{{ $content->key }}]" value="{{ $content->value }}" 
                                    class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all">
                            </div>
                        @elseif(strlen($content->value) > 100)
                            <textarea name="content[{{ $content->key }}]" rows="3"
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all resize-none">{{ $content->value }}</textarea>
                        @else
                            <input type="text" name="content[{{ $content->key }}]" value="{{ $content->value }}"
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition-all">
                        @endif
                        
                        @if($content->hint)
                        <p class="text-[10px] text-slate-400 italic ml-1">{{ $content->hint }}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </form>
</div>
@endsection
