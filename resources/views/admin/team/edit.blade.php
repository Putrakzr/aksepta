@extends('layouts.admin_frame')

@section('title', 'Manage Team - Admin Control')

@section('content')
<div class="min-h-screen bg-slate-50 p-6 pb-20">
    <div class="max-w-[1000px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Back Button -->
        <a href="{{ route('admin.team.index') }}" class="inline-flex items-center gap-3 px-6 py-3 bg-white text-slate-600 rounded-2xl font-bold border border-slate-200 hover:bg-slate-100 transition-all mb-10 group shadow-sm">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Struktur
        </a>

        <!-- Main Form Area -->
        <div class="bg-white rounded-[40px] border border-slate-200 overflow-hidden shadow-2xl">
            <div class="bg-slate-900 p-12 text-white relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-emerald-600/20 to-transparent"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-display font-black tracking-tight">{{ isset($member) ? 'Edit' : 'Tambah' }} Anggota Tim.</h1>
                        <p class="text-slate-400 mt-2">Kelola pimpinan dan staf di ekosistem Aksepta.</p>
                    </div>
                </div>
            </div>

            <form action="{{ isset($member) ? route('admin.team.update', $member) : route('admin.team.store') }}" method="POST" enctype="multipart/form-data" class="p-12 space-y-8">
                @csrf
                @isset($member) @method('PUT') @endisset

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name', $member->name ?? '') }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold"
                               placeholder="contoh: Dastyargo Hartono, ST">
                    </div>
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Jabatan</label>
                        <input type="text" name="position" value="{{ old('position', $member->position ?? '') }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold"
                               placeholder="contoh: Founder, PT Aksepta Strategi Indonesia">
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Tipe Anggota</label>
                        <select name="type" 
                                class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold">
                            <option value="founder" {{ old('type', $member->type ?? '') == 'founder' ? 'selected' : '' }}>Founder</option>
                            <option value="leadership" {{ old('type', $member->type ?? '') == 'leadership' ? 'selected' : '' }}>Leadership</option>
                            <option value="support" {{ old('type', $member->type ?? '') == 'support' ? 'selected' : '' }}>Support</option>
                        </select>
                    </div>
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Ikon Lucide (Optional)</label>
                        <input type="text" name="icon" value="{{ old('icon', $member->icon ?? '') }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-mono text-sm"
                               placeholder="user, search, video, clapperboard">
                    </div>
                    <div class="space-y-3">
                        <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Urutan Tampilan</label>
                        <input type="number" name="order" value="{{ old('order', $member->order ?? '0') }}" 
                               class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold">
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Foto Profil (Optional)</label>
                    @if(isset($member) && $member->photo)
                        <div class="p-4 bg-slate-50 rounded-3xl border border-slate-100">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">Foto Saat Ini</p>
                            <img src="{{ $member->photo }}" class="w-32 h-32 object-cover rounded-2xl shadow-sm">
                        </div>
                    @endif
                    <div class="relative">
                        <label for="team-photo-upload"
                            class="flex flex-col items-center justify-center w-full h-36 bg-slate-50 border-2 border-dashed border-slate-200 rounded-3xl cursor-pointer hover:bg-slate-100 hover:border-emerald-300 transition-all group"
                            id="drop-zone">
                            <div class="flex flex-col items-center justify-center py-3" id="upload-placeholder">
                                <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                    <i data-lucide="upload-cloud" class="w-6 h-6 text-emerald-500"></i>
                                </div>
                                <p class="mb-1 text-sm font-bold text-slate-500">
                                    @if(isset($member) && $member->photo)
                                        Upload foto baru <span class="text-emerald-500">(opsional)</span>
                                    @else
                                        Klik untuk pilih foto <span class="text-emerald-500">atau drag & drop</span>
                                    @endif
                                </p>
                                <p class="text-xs text-slate-400">PNG, JPG, GIF, WEBP (Maks. 5MB)</p>
                            </div>
                            <img id="image-preview" class="hidden w-full h-full object-cover rounded-3xl" />
                        </label>
                        <input id="team-photo-upload" type="file" name="photo" accept="image/*" class="hidden" onchange="previewFile(this)" />
                    </div>
                    @error('photo')
                        <p class="text-sm text-red-500 font-medium px-4">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-3">
                    <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Keahlian / Tags (Pisahkan dengan koma)</label>
                    <input type="text" name="tags" value="{{ old('tags', $member->tags ?? '') }}" 
                           class="w-full bg-slate-50 border-2 border-slate-100 rounded-3xl px-6 py-4 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-bold"
                           placeholder="Digital Marketing, Business Logic, Creative">
                </div>

                <div class="space-y-3">
                    <label class="px-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Bio Singkat (Optional)</label>
                    <textarea name="bio" rows="6" 
                              class="w-full bg-slate-50 border-2 border-slate-100 rounded-[32px] px-8 py-6 text-slate-900 focus:ring-8 focus:ring-emerald-500/5 focus:border-emerald-500 transition-all font-medium leading-relaxed"
                              placeholder="Ceritakan latar belakang profesional anggota ini...">{{ old('bio', $member->bio ?? '') }}</textarea>
                </div>

                <div class="pt-6 border-t border-slate-100 flex justify-end">
                    <button type="submit" class="inline-flex items-center gap-3 px-10 py-5 bg-slate-900 text-white rounded-3xl font-black transition-all hover:scale-110 hover:shadow-2xl hover:bg-emerald-600">
                        <i data-lucide="check-circle" class="w-5 h-5"></i>
                        {{ isset($member) ? 'Simpan Perubahan' : 'Tambah Anggota' }}
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
    const fileInput = document.getElementById('team-photo-upload');

    ['dragenter', 'dragover'].forEach(evt => {
        dropZone.addEventListener(evt, e => {
            e.preventDefault();
            dropZone.classList.add('border-emerald-400', 'bg-emerald-50');
        });
    });

    ['dragleave', 'drop'].forEach(evt => {
        dropZone.addEventListener(evt, e => {
            e.preventDefault();
            dropZone.classList.remove('border-emerald-400', 'bg-emerald-50');
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
