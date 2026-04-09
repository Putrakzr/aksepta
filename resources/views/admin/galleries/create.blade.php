@extends('layouts.admin_frame')

@section('title', 'Manage Gallery - Admin Control')

@section('content')
<div class="min-h-screen bg-slate-50 p-6 pb-20">
    <div class="max-w-[800px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <a href="{{ route('admin.galleries.index') }}" class="inline-flex items-center gap-3 px-6 py-3 bg-white text-slate-600 rounded-2xl font-bold border border-slate-200 hover:bg-slate-100 transition-all mb-10 group shadow-sm">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Galeri
        </a>

        <div class="bg-white rounded-[40px] border border-slate-200 overflow-hidden shadow-2xl">
            <div class="bg-slate-900 p-12 text-white relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-rose-600/20 to-transparent"></div>
                <div class="relative z-10">
                    <h1 class="text-4xl font-display font-black tracking-tight">{{ isset($gallery) ? 'Edit' : 'Tambah' }} Gambar Baru.</h1>
                    <p class="text-slate-400 mt-2">Kelola aset visual cerita Anda.</p>
                </div>
            </div>

            <form action="{{ isset($gallery) ? route('admin.galleries.update', $gallery) : route('admin.galleries.store') }}" method="POST" class="p-12 space-y-8">
                @csrf
                @isset($gallery) @method('PUT') @endisset

                <div class="space-y-4">
                    <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">URL Gambar</label>
                    <div class="relative">
                        <input type="text" name="image" value="{{ old('image', $gallery->image ?? '') }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-8 text-slate-900 focus:ring-8 focus:ring-rose-500/5 focus:border-rose-500 transition-all font-mono text-sm"
                               placeholder="https://images.unsplash.com/photo-...">
                    </div>
                </div>

                @if(isset($gallery))
                <div class="p-6 bg-slate-50 rounded-3xl border border-slate-100">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Pratinjau Saat Ini</p>
                    <img src="{{ $gallery->image }}" class="w-full h-48 object-cover rounded-2xl shadow-sm">
                </div>
                @endif

                <div class="pt-6 border-t border-slate-100 flex justify-end">
                    <button type="submit" class="inline-flex items-center gap-3 px-10 py-5 bg-slate-900 text-white rounded-3xl font-black transition-all hover:scale-110 hover:shadow-2xl hover:bg-rose-600">
                        <i data-lucide="image" class="w-5 h-5"></i>
                        {{ isset($gallery) ? 'Simpan Gambar' : 'Tambah ke Galeri' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
