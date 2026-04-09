@extends('layouts.admin_frame')

@section('title', 'Manage Documentation - Admin Control')

@section('content')
<div class="min-h-screen bg-slate-50 p-6 pb-20">
    <div class="max-w-[1000px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <a href="{{ route('admin.documentations.index') }}" class="inline-flex items-center gap-3 px-6 py-3 bg-white text-slate-600 rounded-2xl font-bold border border-slate-200 hover:bg-slate-100 transition-all mb-10 group shadow-sm">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Repositori
        </a>

        <div class="bg-white rounded-[40px] border border-slate-200 overflow-hidden shadow-2xl">
            <div class="bg-slate-900 p-12 text-white relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-amber-600/20 to-transparent"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-display font-black tracking-tight">Edit Dokumen.</h1>
                        <p class="text-slate-400 mt-2">Kelola aset repositori teknis dan strategis.</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('admin.documentations.update', $documentation) }}" method="POST" class="p-12 space-y-8">
                @csrf
                @method('PUT')

                <div class="space-y-3">
                    <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Judul Dokumen</label>
                    <input type="text" name="title" value="{{ old('title', $documentation->title) }}" 
                           class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-amber-500/5 focus:border-amber-500 transition-all font-bold"
                           placeholder="contoh: Kerangka Spesifikasi Teknis V1.2">
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Info Revisi / Tanggal</label>
                        <input type="text" name="date" value="{{ old('date', $documentation->date) }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-amber-500/5 focus:border-amber-500 transition-all font-bold"
                               placeholder="contoh: Diperbarui Feb 2024">
                    </div>
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">URL File / Link</label>
                        <input type="text" name="link" value="{{ old('link', $documentation->link) }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-amber-500/5 focus:border-amber-500 transition-all font-mono text-sm"
                               placeholder="https://s3.amazonaws.com/aksepta/docs/...">
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 flex justify-end">
                    <button type="submit" class="inline-flex items-center gap-3 px-10 py-5 bg-slate-900 text-white rounded-3xl font-black transition-all hover:scale-110 hover:shadow-2xl hover:bg-amber-600">
                        <i data-lucide="save" class="w-5 h-5"></i>
                        Perbarui Dokumen
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
