@extends('layouts.admin_frame')

@section('content')
<div class="p-6 space-y-8">
    <div class="bg-slate-900 rounded-3xl p-10 text-white relative overflow-hidden shadow-xl">
        <div class="absolute inset-0 bg-gradient-to-tr from-emerald-600/30 to-transparent"></div>
        <div class="relative z-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full border border-white/20 text-[10px] font-bold uppercase tracking-widest text-emerald-300">
                    <i data-lucide="book-open" class="w-3 h-3"></i>
                    Thought Leadership
                </div>
                <h1 class="text-4xl font-bold tracking-tight">Artikel & <span class="text-emerald-400">Blog.</span></h1>
                <p class="text-slate-400 text-sm max-w-xl">Kelola wawasan strategis dan publikasi berita terbaru untuk audiens Anda.</p>
            </div>
            <a href="{{ route('admin.articles.create') }}" class="inline-flex items-center gap-2 px-6 py-4 bg-white text-slate-900 rounded-2xl font-bold text-sm transition-all hover:scale-105 active:scale-95 shadow-lg">
                <i data-lucide="plus" class="w-4 h-4"></i>
                Tambah Artikel
            </a>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Gambar</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Judul & Meta</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($articles as $article)
                    <tr class="group hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="w-16 h-16 rounded-xl border border-slate-200 shadow-sm overflow-hidden bg-slate-100">
                                <img src="{{ $article->image }}" class="w-full h-full object-cover">
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <div class="flex flex-col">
                                <span class="font-bold text-slate-900 mb-1">{{ $article->title }}</span>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ $article->meta }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-end gap-2 translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
                                <a href="{{ route('admin.articles.edit', $article) }}" class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:text-emerald-600 hover:border-emerald-200 hover:shadow-md transition-all">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </a>
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-rose-500 hover:bg-rose-50 hover:border-rose-200 hover:shadow-md transition-all">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
