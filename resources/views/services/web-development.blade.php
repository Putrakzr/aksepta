@extends('layouts.app')

@section('title', 'Web Development - Solusi Enterprise')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-primary-500/10 to-transparent"></div>
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-fixed opacity-10"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-500/10 rounded-full border border-primary-500/20 mb-4 animate-fade-in">
                <i data-lucide="code-2" class="w-4 h-4 text-primary-400"></i>
                <span class="text-xs font-bold text-primary-400 uppercase tracking-widest">Keunggulan Teknis</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">Merancang<br><span class="text-gradient bg-gradient-to-r from-primary-400 to-indigo-400">Masa Depan Digital.</span></h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Kami membangun aplikasi web yang skalabel, aman, dan berkinerja tinggi untuk mendorong efisiensi bisnis serta memuaskan pengguna.
            </p>
            <div class="flex flex-wrap justify-center gap-4 pt-4">
                <a href="#stack" class="px-8 py-4 bg-primary-600 text-white font-bold rounded-2xl shadow-xl hover:bg-primary-700 transition-all duration-300 flex items-center gap-2">
                    <i data-lucide="zap" class="w-5 h-5"></i> Mulai Proyek
                </a>
                <a href="/portfolio" class="px-8 py-4 bg-white/10 text-white font-bold rounded-2xl border border-white/20 hover:bg-white/20 transition-all duration-300">Lihat Portofolio Teknis</a>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="py-24 bg-white" id="stack">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
                <h2 class="text-sm font-bold text-primary-600 uppercase tracking-[0.2em]">Teknologi Kami</h2>
                <h3 class="text-4xl font-display font-bold text-slate-900">Teknologi Modern untuk Tantangan Modern</h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-8 bg-slate-50 rounded-[32px] border border-slate-100 space-y-6 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center">
                        <i data-lucide="layout" class="text-primary-600 w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-900 mb-2">Penguasaan Frontend</h4>
                        <p class="text-sm text-slate-600">Membangun antarmuka pengguna yang imersif dengan React, Vue, dan sistem Tailwind CSS berkinerja tinggi.</p>
                    </div>
                </div>

                <div class="p-8 bg-slate-50 rounded-[32px] border border-slate-100 space-y-6 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center">
                        <i data-lucide="server" class="text-primary-600 w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-900 mb-2">Backend yang Tangguh</h4>
                        <p class="text-sm text-slate-600">Memberdayakan logika sistem dengan Modern PHP Framework, Node.js, dan database SQL/NoSQL yang sangat teroptimasi.</p>
                    </div>
                </div>

                <div class="p-8 bg-slate-50 rounded-[32px] border border-slate-100 space-y-6 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center">
                        <i data-lucide="cloud" class="text-primary-600 w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-900 mb-2">Cloud Native</h4>
                        <p class="text-sm text-slate-600">Penyebaran sistem di AWS dan Google Cloud dengan arsitektur auto-scaling maupun serverless.</p>
                    </div>
                </div>

                <div class="p-8 bg-slate-50 rounded-[32px] border border-slate-100 space-y-6 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center">
                        <i data-lucide="shield-check" class="text-primary-600 w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-900 mb-2">Keamanan Enterprise</h4>
                        <p class="text-sm text-slate-600">Menerapkan enkripsi standar industri, otentikasi OAuth2, dan pengujian penetrasi (pen-testing) yang ketat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Spesifik Web Dev -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 space-y-4">
                <h2 class="text-xs font-bold text-primary-600 uppercase tracking-[0.2em]">Solusi Spesialis</h2>
                <h3 class="text-3xl font-display font-bold text-slate-900">Layanan Pengembangan Web Kami</h3>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- 1. Layanan Company Profile Website -->
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-[32px] hover:bg-white hover:shadow-xl hover:border-primary-100 transition-all duration-500 group flex flex-col h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-primary-500/5 rounded-full blur-[40px] group-hover:bg-primary-500/10 transition-all"></div>
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="building-2" class="text-primary-600 w-7 h-7 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-3 relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-1 leading-snug">Layanan Company Profile Website</h3>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6 flex-1 relative z-10">
                        Mengubah profil perusahaan Anda menjadi instrumen validasi yang meyakinkan. Kami merancang arsitektur informasi yang elegan untuk menonjolkan portofolio, laporan tahunan, dan nilai perusahaan guna memenangkan kepercayaan mitra B2B, investor, maupun instansi pemerintah.
                    </p>
                    <ul class="flex flex-wrap gap-2 mb-2 relative z-10">
                        <li class="px-3 py-1 bg-white rounded-lg border border-slate-100 text-[10px] font-bold text-primary-600 text-center shadow-sm">Starter</li>
                        <li class="px-3 py-1 bg-white rounded-lg border border-slate-100 text-[10px] font-bold text-primary-600 text-center shadow-sm">Growth</li>
                        <li class="px-3 py-1 bg-white rounded-lg border border-slate-100 text-[10px] font-bold text-primary-600 text-center shadow-sm">Strategic</li>
                    </ul>
                </div>

                <!-- 2. Layanan E-Commerce & Digital Catalog -->
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-[32px] hover:bg-white hover:shadow-xl hover:border-primary-100 transition-all duration-500 group flex flex-col h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-primary-500/5 rounded-full blur-[40px] group-hover:bg-primary-500/10 transition-all"></div>
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="shopping-cart" class="text-primary-600 w-7 h-7 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-3 relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-1 leading-snug">Layanan E-Commerce & Digital Catalog</h3>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed relative z-10">
                        Membuka jalur pendapatan baru yang beroperas 24/7. Kami membangun sistem toko online mandiri yang terintegrasi penuh dengan manajemen inventaris, perhitungan ongkos kirim otomatis, dan gerbang pembayaran (payment gateway) yang aman, memberikan Anda kontrol penuh atas data pelanggan.
                    </p>
                </div>

                <!-- 3. Layanan Media & News Portal -->
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-[32px] hover:bg-white hover:shadow-xl hover:border-primary-100 transition-all duration-500 group flex flex-col h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-primary-500/5 rounded-full blur-[40px] group-hover:bg-primary-500/10 transition-all"></div>
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="newspaper" class="text-primary-600 w-7 h-7 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-3 relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-1 leading-snug">Layanan Media & News Portal</h3>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed relative z-10">
                        Infrastruktur web yang dirancang khusus untuk menangani lalu lintas data (traffic) yang masif. Sangat ideal untuk media massa lokal, majalah digital, atau portal publikasi internal Pemda/Korporat. Dilengkapi dengan sistem manajemen konten (CMS) yang ramah redaksi dan siap dimonetisasi.
                    </p>
                </div>

                <!-- 4. Layanan Custom Web Application -->
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-[32px] hover:bg-white hover:shadow-xl hover:border-primary-100 transition-all duration-500 group flex flex-col h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-primary-500/5 rounded-full blur-[40px] group-hover:bg-primary-500/10 transition-all"></div>
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="terminal" class="text-primary-600 w-7 h-7 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-3 relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-1 leading-snug">Layanan Custom Web Application</h3>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed relative z-10">
                        Menerjemahkan kerumitan operasional Anda ke dalam sistem digital yang efisien. Kami mengembangkan aplikasi berbasis web yang dirancang spesifik (Tailor-made) untuk memecahkan masalah unik bisnis Anda, seperti sistem e-Absensi, ERP mini, atau dasbor pemantauan proyek (Command Center).
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Final CTA -->
    <section class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="bg-slate-900 rounded-[48px] p-10 lg:p-16 relative overflow-hidden text-center group">
                 <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary-600/20 via-transparent to-transparent group-hover:from-primary-600/30 transition-all duration-700"></div>
                 <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white mb-6 relative z-10 leading-tight">
                    Butuh Sistem Digital yang<br>Dirancang Khusus untuk Masalah Anda?
                 </h2>
                 <p class="text-lg text-slate-400 max-w-2xl mx-auto mb-10 relative z-10 leading-relaxed">
                    Ceritakan alur bisnis atau masalah operasional Anda. Tim arsitek IT kami akan merumuskan spesifikasi teknis dan estimasi investasi yang tepat untuk proyek Anda.
                 </p>
                 <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="https://wa.me/6281234567890?text=Halo%20Aksepta,%20saya%20ingin%20menjadwalkan%20meeting%20untuk%20diskusi%20proyek%20IT" target="_blank" class="w-full sm:w-auto px-8 py-4 bg-white text-slate-900 font-bold text-base rounded-2xl shadow-xl hover:-translate-y-1 transition-all group/btn flex items-center justify-center gap-3">
                        <i data-lucide="calendar" class="w-5 h-5"></i> Jadwalkan Meeting
                    </a>
                    <a href="/contact" class="w-full sm:w-auto px-8 py-4 bg-white/10 text-white font-bold text-base rounded-2xl border border-white/20 hover:bg-white/20 hover:-translate-y-1 transition-all flex items-center justify-center gap-3 backdrop-blur-md">
                        <i data-lucide="file-text" class="w-5 h-5"></i> Ajukan Permintaan Proposal
                    </a>
                 </div>
             </div>
        </div>
    </section>
@endsection
