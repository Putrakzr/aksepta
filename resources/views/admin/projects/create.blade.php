@extends('layouts.admin_frame')



@section('content')
    <div class="p-6">
        <div class="max-w-4xl mx-auto py-8">

            <!-- Back Button -->
            <a href="{{ route('admin.projects.index') }}"
                class="inline-flex items-center gap-3 px-5 py-2.5 bg-white text-slate-600 rounded-xl font-bold border border-slate-200 hover:bg-slate-100 transition-all mb-8 group shadow-sm text-sm">
                <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
                Kembali ke Daftar Proyek
            </a>

            <!-- Main Form Area -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xl">
                <div class="bg-slate-900 p-10 text-white relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-transparent"></div>
                    <div class="relative z-10 flex items-center justify-between">
                        <div>
                            <h1 class="text-4xl font-display font-black tracking-tight">
                                {{ isset($project) ? 'Edit' : 'Buat' }} Proyek.</h1>
                            <p class="text-slate-400 mt-2">Masukkan detail proyek dengan akurat untuk tampilan publik.</p>
                        </div>
                        <div
                            class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20">
                            <i data-lucide="folder-plus" class="w-8 h-8 text-blue-400"></i>
                        </div>
                    </div>
                </div>

                <form
                    action="{{ isset($project) ? route('admin.projects.update', $project) : route('admin.projects.store') }}"
                    method="POST" class="p-12 space-y-10">
                    @csrf
                    @isset($project) @method('PUT') @endisset

                    <div class="grid md:grid-cols-2 gap-10">
                        <!-- Project Title -->
                        <div class="space-y-3">
                            <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Judul
                                Proyek</label>
                            <input type="text" name="title" value="{{ old('title', $project->title ?? '') }}"
                                class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-blue-500/5 focus:border-blue-500 transition-all font-bold"
                                placeholder="contoh: Ekspansi E-commerce Global">
                        </div>

                        <!-- Category -->
                        <div class="space-y-3">
                            <label
                                class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Kategori</label>
                            <select name="category"
                                class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-blue-500/5 focus:border-blue-500 transition-all font-bold">
                                <option value="marketing" {{ (old('category', $project->category ?? '') == 'marketing') ? 'selected' : '' }}>Pemasaran</option>
                                <option value="dev" {{ (old('category', $project->category ?? '') == 'dev') ? 'selected' : '' }}>Pengembangan</option>
                                <option value="creative" {{ (old('category', $project->category ?? '') == 'creative') ? 'selected' : '' }}>Kreatif</option>
                                <option value="consulting" {{ (old('category', $project->category ?? '') == 'consulting') ? 'selected' : '' }}>Konsultasi</option>
                            </select>
                        </div>

                        <!-- Image URL -->
                        <div class="space-y-3 md:col-span-2">
                            <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Aset Visual
                                (URL Gambar)</label>
                            <div class="relative">
                                <input type="text" name="image" value="{{ old('image', $project->image ?? '') }}"
                                    class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-8 text-slate-900 focus:ring-8 focus:ring-blue-500/5 focus:border-blue-500 transition-all font-medium font-mono text-sm"
                                    placeholder="https://images.unsplash.com/photo-...">
                                <div
                                    class="absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center">
                                    <i data-lucide="image" class="w-5 h-5 text-slate-400"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="space-y-3 md:col-span-2">
                            <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Deskripsi
                                Operasional</label>
                            <textarea name="description" rows="5"
                                class="w-full bg-slate-50 border-2 border-slate-100 rounded-[40px] p-8 text-slate-900 focus:ring-8 focus:ring-blue-500/5 focus:border-blue-500 transition-all font-medium leading-relaxed italic"
                                placeholder="Jelaskan dampak 10x lipat..."></textarea>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-100 flex justify-end gap-6">
                        <button type="submit"
                            class="inline-flex items-center gap-3 px-10 py-5 bg-slate-900 text-white rounded-3xl font-black transition-all hover:scale-110 hover:shadow-2xl hover:bg-blue-600">
                            <i data-lucide="save" class="w-5 h-5"></i>
                            {{ isset($project) ? 'Simpan Perubahan' : 'Simpan Proyek' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection