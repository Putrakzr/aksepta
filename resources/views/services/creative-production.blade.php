@extends('layouts.app')

@section('title', 'Creative Production - Visual Storytelling')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1492724441997-5dc865305da7?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center opacity-30"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-rose-500/10 rounded-full border border-rose-500/20 mb-4 animate-fade-in">
                <i data-lucide="video" class="w-4 h-4 text-rose-400"></i>
                <span class="text-xs font-bold text-rose-400 uppercase tracking-widest">PREMIUM VISUAL CREATIVE</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">Produksi<br><span class="text-rose-400">Kreatif Premium.</span></h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Visual yang Anda tampilkan adalah wajah perusahaan Anda di mata dunia. Tim produksi internal kami memadukan penceritaan (storytelling) yang kuat dengan kualitas sinematik untuk menciptakan aset kreatif yang mendongkrak citra brand.
            </p>
            <div class="flex flex-wrap justify-center gap-4 pt-4">
                <a href="#showreel" class="px-8 py-4 bg-rose-600 text-white font-bold rounded-2xl shadow-xl hover:bg-rose-700 transition-all duration-300 flex items-center gap-2">
                    <i data-lucide="play" class="w-5 h-5 fill-current"></i> Konsultasikan Proyek Kreatif
                </a>
                <a href="/portfolio" class="px-8 py-4 bg-white/10 text-white font-bold rounded-2xl border border-white/20 hover:bg-white/20 transition-all duration-300">Lihat Portofolio</a>
            </div>
        </div>
    </section>

    <!-- Layanan Creative Production Section -->
    <section class="py-24 bg-slate-50 relative" id="services">
        <!-- Background Decorative Element to separate from dark hero if needed, but hero is slate-900, so a straight cut or wave is fine, sticking to straight cut by default -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 space-y-4">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900">Layanan Kreatif Utama Kami</h2>
                <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">Solusi visual end-to-end yang dirancang untuk menceritakan kisah brand Anda dengan standar estetika tertinggi.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Layanan Photography -->
                <div class="bg-white border border-slate-100 p-10 rounded-[40px] hover:border-rose-200 transition-all duration-300 group flex flex-col h-full shadow-lg hover:shadow-2xl hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-rose-500/5 rounded-full blur-[50px] group-hover:bg-rose-500/10 transition-all"></div>
                    <div class="w-16 h-16 bg-rose-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-rose-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="camera" class="text-rose-600 w-8 h-8 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-4 relative z-10">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2 leading-snug">Layanan Photography</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-8 flex-1 relative z-10">Menangkap esensi profesionalisme bisnis Anda dalam setiap bingkai. Gambar dengan resolusi tinggi dan pencahayaan presisi sangat krusial untuk membangun rasa percaya (trust) investor maupun konsumen saat melihat katalog atau presentasi Anda.</p>
                    <ul class="space-y-3 mb-10 relative z-10 flex-1 flex flex-col">
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Foto Profil Jajaran Direksi/Eksekutif</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Fotografi Produk High-End</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Dokumentasi Infrastruktur/Proyek</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Aset Visual Website</span>
                        </li>
                    </ul>
                </div>

                <!-- Layanan Videography -->
                <div class="bg-white border border-slate-100 p-10 rounded-[40px] hover:border-rose-200 transition-all duration-300 group flex flex-col h-full shadow-lg hover:shadow-2xl hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-rose-500/5 rounded-full blur-[50px] group-hover:bg-rose-500/10 transition-all"></div>
                    <div class="w-16 h-16 bg-rose-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-rose-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="video" class="text-rose-600 w-8 h-8 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-4 relative z-10">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2 leading-snug">Layanan Videography</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-8 flex-1 relative z-10">Menyampaikan pesan kompleks melalui medium audio-visual yang menggugah emosi. Kami menangani produksi end-to-end—mulai dari penulisan naskah (scripting), storyboard, penyutradaraan, hingga pasca-produksi (editing & color grading).</p>
                    <ul class="space-y-3 mb-10 relative z-10 flex-1 flex flex-col">
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Company Profile Video</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Iklan Komersial (TVC)</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Video Safety Induction (K3) Tambang</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Aftermovie Event berskala besar</span>
                        </li>
                    </ul>
                </div>

                <!-- Layanan Animasi & Motion Graphics -->
                <div class="bg-white border border-slate-100 p-10 rounded-[40px] hover:border-rose-200 transition-all duration-300 group flex flex-col h-full shadow-lg hover:shadow-2xl hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-rose-500/5 rounded-full blur-[50px] group-hover:bg-rose-500/10 transition-all"></div>
                    <div class="w-16 h-16 bg-rose-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-rose-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="play-square" class="text-rose-600 w-8 h-8 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-4 relative z-10">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2 leading-snug">Layanan Animasi & Motion Graphics</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-8 flex-1 relative z-10">Menghidupkan data dan konsep abstrak menjadi visual yang dinamis dan mudah dicerna. Sangat efektif untuk menjelaskan cara kerja produk digital atau mempresentasikan laporan kinerja kepada pemangku kepentingan (stakeholders).</p>
                    <ul class="space-y-3 mb-10 relative z-10 flex-1 flex flex-col">
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Video Explainer Aplikasi/Sistem</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Infografis Bergerak</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Bumper Video</span>
                        </li>
                    </ul>
                </div>

                <!-- Layanan Desain Grafis -->
                <div class="bg-white border border-slate-100 p-10 rounded-[40px] hover:border-rose-200 transition-all duration-300 group flex flex-col h-full shadow-lg hover:shadow-2xl hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-rose-500/5 rounded-full blur-[50px] group-hover:bg-rose-500/10 transition-all"></div>
                    <div class="w-16 h-16 bg-rose-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-rose-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="pen-tool" class="text-rose-600 w-8 h-8 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-4 relative z-10">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2 leading-snug">Layanan Desain Grafis & Visual Branding</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-8 flex-1 relative z-10">Membangun konsistensi wajah perusahaan Anda di semua titik interaksi. Kami merancang aset visual yang tidak hanya estetis, tetapi juga mematuhi psikologi desain untuk memastikan pesan kampanye Anda tersampaikan dengan tegas dan profesional.</p>
                    <ul class="space-y-3 mb-10 relative z-10 flex-1 flex flex-col">
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Desain Logo & Brand Guidelines</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Desain Company Profile / Buku</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-rose-500 flex-shrink-0 mt-0.5"></i>
                            <span>Desain Materi Promosi</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Memikat CTA Section -->
    <section class="py-24 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-slate-900 rounded-[64px] overflow-hidden shadow-2xl py-20 px-4 sm:px-8 text-center group">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1550684848-fac1c5b4e853?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center opacity-20 mix-blend-overlay group-hover:scale-105 transition-transform duration-1000"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
                <!-- Subtle glow effects -->
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-rose-500/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-500/10 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/2"></div>
                
                <div class="relative z-10 max-w-4xl mx-auto">
                    <h2 class="text-4xl md:text-5xl lg:text-5xl font-display font-extrabold text-white mb-6 leading-tight">
                        Punya Visi Besar?<br>Mari Wujudkan dalam <span class="text-rose-400">Visual yang Memukau.</span>
                    </h2>
                    <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto mb-12 leading-relaxed">
                        Diskusikan ide kampanye, kebutuhan video profil, atau desain identitas perusahaan Anda dengan produser kreatif kami.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
                        <a href="https://wa.me/6281234567890?text=Halo%20Aksepta,%20saya%20tertarik%20dengan%20layanan%20produksi%20kreatif" target="_blank" class="w-full sm:w-auto px-10 py-5 bg-rose-600 text-white font-extrabold text-lg rounded-2xl shadow-xl hover:bg-rose-700 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-3">
                            <i data-lucide="message-square" class="w-6 h-6"></i> Hubungi Tim Produksi Sekarang
                        </a>
                        <a href="#" class="w-full sm:w-auto px-10 py-5 bg-white/10 text-white font-bold text-lg rounded-2xl border border-white/20 hover:bg-white/20 hover:border-white/30 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-3 backdrop-blur-md">
                            <i data-lucide="download" class="w-6 h-6"></i> Unduh Brosur Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
