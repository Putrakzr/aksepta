@extends('layouts.admin_frame')

@section('title', 'Manage Articles - Admin Control')

@section('content')
<div class="min-h-screen bg-slate-50 p-6 pb-20">
    <div class="max-w-[1000px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Back Button -->
        <a href="{{ route('admin.articles.index') }}" class="inline-flex items-center gap-3 px-6 py-3 bg-white text-slate-600 rounded-2xl font-bold border border-slate-200 hover:bg-slate-100 transition-all mb-10 group shadow-sm">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Artikel
        </a>

        <!-- Main Form Area -->
        <div class="bg-white rounded-[40px] border border-slate-200 overflow-hidden shadow-2xl">
            <div class="bg-slate-900 p-12 text-white relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-emerald-600/20 to-transparent"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-display font-black tracking-tight">Edit Artikel.</h1>
                        <p class="text-slate-400 mt-2">Ubah wawasan strategis Anda.</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('admin.articles.update', $article) }}" method="POST" class="p-12 space-y-8">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Tipe Artikel</label>
                        <select name="type" id="article_type" 
                                class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold">
                            <option value="manual" {{ old('type', $article->type) == 'manual' ? 'selected' : '' }}>Konten Manual</option>
                            <option value="link" {{ old('type', $article->type) == 'link' ? 'selected' : '' }}>Link Eksternal</option>
                        </select>
                    </div>
                    <div class="md:col-span-2 space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Judul Artikel</label>
                        <input type="text" name="title" value="{{ old('title', $article->title) }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold"
                               placeholder="contoh: Masa Depan AI dalam Supply Chain Modern">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Info Meta (Tag • Waktu Baca)</label>
                        <input type="text" name="meta" value="{{ old('meta', $article->meta) }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold"
                               placeholder="contoh: Whitepaper • 12 menit baca">
                    </div>
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">URL Gambar Thumbnail</label>
                        <input type="text" name="image" value="{{ old('image', $article->image) }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-mono text-sm"
                               placeholder="https://images.unsplash.com/photo-...">
                    </div>
                </div>

                <!-- Conditional Fields -->
                <div id="manual_field" class="space-y-3 {{ old('type', $article->type) == 'link' ? 'hidden' : '' }}">
                    <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Konten Artikel (Mendukung Markdown/HTML)</label>
                    <textarea name="content" rows="12" 
                              class="w-full bg-slate-50 border-2 border-slate-100 rounded-[32px] px-8 py-6 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-medium leading-relaxed"
                              placeholder="Tulis wawasan strategis Anda di sini...">{{ old('content', $article->content) }}</textarea>
                </div>

                <div id="link_field" class="space-y-3 {{ old('type', $article->type) == 'manual' ? 'hidden' : '' }}">
                    <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">URL Artikel Eksternal</label>
                    <input type="text" name="external_url" value="{{ old('external_url', $article->external_url) }}" 
                           class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-mono text-sm"
                           placeholder="https://medium.com/@username/article-slug">
                </div>

                <div class="pt-6 border-t border-slate-100 flex justify-end">
                    <button type="submit" class="inline-flex items-center gap-3 px-10 py-5 bg-slate-900 text-white rounded-3xl font-black transition-all hover:scale-110 hover:shadow-2xl hover:bg-emerald-600">
                        <i data-lucide="save" class="w-5 h-5"></i>
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('article_type');
        const manualField = document.getElementById('manual_field');
        const linkField = document.getElementById('link_field');

        function toggleFields() {
            if (typeSelect.value === 'manual') {
                manualField.classList.remove('hidden');
                linkField.classList.add('hidden');
            } else {
                manualField.classList.add('hidden');
                linkField.classList.remove('hidden');
            }
        }

        typeSelect.addEventListener('change', toggleFields);
        toggleFields(); // Initial call
    });
</script>
@endsection
