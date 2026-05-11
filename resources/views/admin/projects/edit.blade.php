@extends('layouts.admin_frame')

@section('content')
<div class="p-6">
    <div class="max-w-4xl mx-auto py-8">
        <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center gap-3 px-5 py-2.5 bg-white text-slate-600 rounded-xl font-bold border border-slate-200 hover:bg-slate-100 transition-all mb-8 group shadow-sm text-sm">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Daftar Proyek
        </a>

        <!-- Main Form Area -->
        <div class="bg-white rounded-[40px] border border-slate-200 overflow-hidden shadow-2xl">
            <div class="bg-slate-900 p-12 text-white relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-transparent"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-display font-black tracking-tight">Edit Proyek.</h1>
                        <p class="text-slate-400 mt-2">Ubah detail proyek yang ada dengan akurat untuk tampilan publik.</p>
                    </div>
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20">
                        <i data-lucide="edit" class="w-8 h-8 text-blue-400"></i>
                    </div>
                </div>
            </div>

            <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="p-12 space-y-10">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-10">
                    <!-- Project Title -->
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Judul Proyek</label>
                        <input type="text" name="title" value="{{ old('title', $project->title) }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-blue-500/5 focus:border-blue-500 transition-all font-bold"
                               placeholder="contoh: Ekspansi E-commerce Global">
                    </div>

                    <!-- Category -->
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Kategori</label>
                        <select name="category" class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-blue-500/5 focus:border-blue-500 transition-all font-bold">
                            <option value="marketing" {{ (old('category', $project->category) == 'marketing') ? 'selected' : '' }}>Pemasaran</option>
                            <option value="dev" {{ (old('category', $project->category) == 'dev') ? 'selected' : '' }}>Pengembangan</option>
                            <option value="creative" {{ (old('category', $project->category) == 'creative') ? 'selected' : '' }}>Kreatif</option>
                            <option value="consulting" {{ (old('category', $project->category) == 'consulting') ? 'selected' : '' }}>Konsultasi</option>
                        </select>
                    </div>

                    <!-- Image Upload -->
                    <div class="space-y-3 md:col-span-2">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Aset Visual (Upload Gambar)</label>
                        @if($project->image)
                            <div class="p-4 bg-slate-50 rounded-3xl border border-slate-100">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">Gambar Saat Ini</p>
                                <img src="{{ asset($project->image) }}" class="w-full h-40 object-cover rounded-2xl shadow-sm">
                            </div>
                        @endif
                        <div class="relative">
                            <label for="project-image-upload"
                                class="flex flex-col items-center justify-center w-full h-36 bg-slate-50 border-2 border-dashed border-slate-200 rounded-3xl cursor-pointer hover:bg-slate-100 hover:border-blue-300 transition-all group"
                                id="drop-zone">
                                <div class="flex flex-col items-center justify-center py-3" id="upload-placeholder">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                        <i data-lucide="upload-cloud" class="w-6 h-6 text-blue-500"></i>
                                    </div>
                                    <p class="mb-1 text-sm font-bold text-slate-500">Upload gambar baru <span class="text-blue-500">(opsional)</span></p>
                                    <p class="text-xs text-slate-400">PNG, JPG, GIF, WEBP (Maks. 5MB)</p>
                                </div>
                                <img id="image-preview" class="hidden w-full h-full object-cover rounded-3xl" />
                            </label>
                            <input id="project-image-upload" type="file" name="image" accept="image/*" class="hidden" onchange="previewFile(this)" />
                        </div>
                        @error('image')
                            <p class="text-sm text-red-500 font-medium px-4">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="space-y-3 md:col-span-2">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Deskripsi Operasional</label>
                        <textarea name="description" rows="5" 
                                  class="w-full bg-slate-50 border-2 border-slate-100 rounded-[40px] p-8 text-slate-900 focus:ring-8 focus:ring-blue-500/5 focus:border-blue-500 transition-all font-medium leading-relaxed italic"
                                  placeholder="Jelaskan dampak 10x lipat...">{{ old('description', $project->description) }}</textarea>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 flex justify-end gap-6">
                    <button type="submit" class="inline-flex items-center gap-3 px-10 py-5 bg-slate-900 text-white rounded-3xl font-black transition-all hover:scale-110 hover:shadow-2xl hover:bg-blue-600">
                        <i data-lucide="save" class="w-5 h-5"></i>
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewFile(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('image-preview');
                const placeholder = document.getElementById('upload-placeholder');
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    const dropZone = document.getElementById('drop-zone');
    const fileInput = document.getElementById('project-image-upload');

    ['dragenter', 'dragover'].forEach(evt => {
        dropZone.addEventListener(evt, e => {
            e.preventDefault();
            dropZone.classList.add('border-blue-400', 'bg-blue-50');
        });
    });

    ['dragleave', 'drop'].forEach(evt => {
        dropZone.addEventListener(evt, e => {
            e.preventDefault();
            dropZone.classList.remove('border-blue-400', 'bg-blue-50');
        });
    });

    dropZone.addEventListener('drop', e => {
        const files = e.dataTransfer.files;
        if (files.length) {
            fileInput.files = files;
            previewFile(fileInput);
        }
    });
</script>
@endsection
