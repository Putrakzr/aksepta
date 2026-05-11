@extends('layouts.admin_frame')



@section('content')
    <div class="min-h-screen bg-slate-50 p-6 pb-20">
        <div class="max-w-[800px] mx-auto px-4 sm:px-6 lg:px-8">

            <a href="{{ route('admin.galleries.index') }}"
                class="inline-flex items-center gap-3 px-6 py-3 bg-white text-slate-600 rounded-2xl font-bold border border-slate-200 hover:bg-slate-100 transition-all mb-10 group shadow-sm">
                <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
                Kembali ke Galeri
            </a>

            <div class="bg-white rounded-[40px] border border-slate-200 overflow-hidden shadow-2xl">
                <div class="bg-slate-900 p-12 text-white relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-rose-600/20 to-transparent"></div>
                    <div class="relative z-10">
                        <h1 class="text-4xl font-display font-black tracking-tight">
                            {{ isset($gallery) ? 'Edit' : 'Tambah' }} Gambar Baru.
                        </h1>
                        <p class="text-slate-400 mt-2">Kelola aset visual cerita Anda.</p>
                    </div>
                </div>

                <form
                    action="{{ isset($gallery) ? route('admin.galleries.update', $gallery) : route('admin.galleries.store') }}"
                    method="POST" enctype="multipart/form-data" class="p-12 space-y-8">
                    @csrf
                    @isset($gallery) @method('PUT') @endisset

                    <div class="space-y-4">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Upload
                            Gambar</label>
                        <div class="relative">
                            <label for="image-upload"
                                class="flex flex-col items-center justify-center w-full h-64 bg-slate-50 border-2 border-dashed border-slate-200 rounded-3xl cursor-pointer hover:bg-slate-100 hover:border-rose-300 transition-all group"
                                id="drop-zone">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6" id="upload-placeholder">
                                    <div
                                        class="w-16 h-16 bg-rose-100 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                        <i data-lucide="upload-cloud" class="w-8 h-8 text-rose-500"></i>
                                    </div>
                                    <p class="mb-2 text-sm font-bold text-slate-500">Klik untuk pilih gambar <span
                                            class="text-rose-500">atau drag & drop</span></p>
                                    <p class="text-xs text-slate-400">PNG, JPG, GIF, WEBP (Maks. 5MB)</p>
                                </div>
                                <img id="image-preview" class="hidden w-full h-full object-cover rounded-3xl" />
                            </label>
                            <input id="image-upload" type="file" name="image" accept="image/*" class="hidden"
                                onchange="previewFile(this)" />
                        </div>
                        @error('image')
                            <p class="text-sm text-red-500 font-medium px-4">{{ $message }}</p>
                        @enderror
                    </div>

                    @if(isset($gallery))
                        <div class="p-6 bg-slate-50 rounded-3xl border border-slate-100">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Pratinjau Saat Ini</p>
                            <img src="{{ $gallery->image }}" class="w-full h-48 object-cover rounded-2xl shadow-sm">
                        </div>
                    @endif

                    <div class="pt-6 border-t border-slate-100 flex justify-end">
                        <button type="submit"
                            class="inline-flex items-center gap-3 px-10 py-5 bg-slate-900 text-white rounded-3xl font-black transition-all hover:scale-110 hover:shadow-2xl hover:bg-rose-600">
                            <i data-lucide="image" class="w-5 h-5"></i>
                            {{ isset($gallery) ? 'Simpan Gambar' : 'Tambah ke Galeri' }}
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
                reader.onload = function (e) {
                    const preview = document.getElementById('image-preview');
                    const placeholder = document.getElementById('upload-placeholder');
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Drag and drop
        const dropZone = document.getElementById('drop-zone');
        const fileInput = document.getElementById('image-upload');

        ['dragenter', 'dragover'].forEach(evt => {
            dropZone.addEventListener(evt, e => {
                e.preventDefault();
                dropZone.classList.add('border-rose-400', 'bg-rose-50');
            });
        });

        ['dragleave', 'drop'].forEach(evt => {
            dropZone.addEventListener(evt, e => {
                e.preventDefault();
                dropZone.classList.remove('border-rose-400', 'bg-rose-50');
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