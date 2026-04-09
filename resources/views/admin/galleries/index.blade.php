@extends('layouts.admin_frame')

@section('content')
<div class="p-6 space-y-8">
    <div class="bg-slate-900 rounded-3xl p-10 text-white relative overflow-hidden shadow-xl">
        <div class="absolute inset-0 bg-gradient-to-tr from-rose-600/30 to-transparent"></div>
        <div class="relative z-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full border border-white/20 text-[10px] font-bold uppercase tracking-widest text-rose-300">
                    <i data-lucide="image" class="w-3 h-3"></i>
                    Creative Showcase
                </div>
                <h1 class="text-4xl font-bold tracking-tight">Galeri <span class="text-rose-400">Foto.</span></h1>
                <p class="text-slate-400 text-sm max-w-xl">Kelola aset visual berdampak tinggi dari portofolio dan kegiatan Aksepta.</p>
            </div>
            <a href="{{ route('admin.galleries.create') }}" class="inline-flex items-center gap-2 px-6 py-4 bg-white text-slate-900 rounded-2xl font-bold text-sm transition-all hover:scale-105 active:scale-95 shadow-lg">
                <i data-lucide="plus" class="w-4 h-4"></i>
                Tambah Foto
            </a>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @foreach($images as $image)
        <div class="group relative aspect-square bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500">
            <img src="{{ $image->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
                <a href="{{ route('admin.galleries.edit', $image) }}" class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-slate-900 hover:bg-primary-500 hover:text-white transition-all scale-75 group-hover:scale-100 duration-300">
                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                </a>
                <form action="{{ route('admin.galleries.destroy', $image) }}" method="POST" onsubmit="return confirm('Hapus foto ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-rose-500 hover:bg-rose-500 hover:text-white transition-all scale-75 group-hover:scale-100 duration-300">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
