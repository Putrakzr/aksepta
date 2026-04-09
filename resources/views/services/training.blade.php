@extends('layouts.app')

@section('title', 'Training & Certification - Empowering Teams')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-tr from-accent-amber/20 via-slate-900/90 to-slate-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent-amber/10 rounded-full border border-accent-amber/20 mb-4 animate-fade-in">
                <i data-lucide="award" class="w-4 h-4 text-accent-amber"></i>
                <span class="text-xs font-bold text-accent-amber uppercase tracking-widest">PUSAT PENGEMBANGAN SDM & SERTIFIKASI</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">Tingkatkan Kapasitas Tim Anda dengan<br><span class="text-accent-amber">Pelatihan Berstandar Nasional.</span></h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Investasi terbaik perusahaan ada pada sumber daya manusianya. Kami merancang program pelatihan korporat (in-house), bimbingan teknis, hingga uji kompetensi resmi untuk memastikan tim Anda memiliki kapabilitas eksekusi yang tajam dan diakui secara sah.
            </p>
            <div class="flex flex-wrap justify-center gap-4 pt-4">
                <a href="#programs" class="px-8 py-4 bg-accent-amber text-slate-900 font-bold rounded-2xl shadow-xl hover:bg-amber-500 transition-all duration-300">Rancang Program Pelatihan</a>
                <a href="#custom" class="px-8 py-4 bg-white/10 text-white font-bold rounded-2xl border border-white/20 hover:bg-white/20 transition-all duration-300">Lihat Daftar Sertifikasi</a>
            </div>
        </div>
    </section>

    <!-- Value Prop -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="grid grid-cols-2 gap-6">
                    <div class="p-8 bg-slate-50 rounded-[40px] border border-slate-100 space-y-4">
                        <div class="text-3xl font-display font-bold text-accent-amber">50+</div>
                        <p class="text-slate-600 font-semibold">Modul Spesialis</p>
                    </div>
                    <div class="p-8 bg-slate-50 rounded-[40px] border border-slate-100 space-y-4 translate-y-8">
                        <div class="text-3xl font-display font-bold text-accent-amber">10k+</div>
                        <p class="text-slate-600 font-semibold">Profesional Tersertifikasi</p>
                    </div>
                </div>
                <div class="space-y-8">
                    <h2 class="text-4xl font-display font-bold text-slate-900">Mengapa Memilih Pelatihan di Aksepta?</h2>
                    <p class="text-lg text-slate-600 leading-relaxed">Kurikulum kami disusun oleh praktisi industri, bukan sekadar akademisi. Kami berfokus pada penerapan dunia nyata, memastikan tim Anda dapat langsung mengeksekusi apa yang mereka pelajari.</p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex items-center gap-3 text-slate-700 font-medium">
                            <i data-lucide="check" class="text-accent-amber w-5 h-5"></i> Studi Kasus Praktis
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 font-medium">
                            <i data-lucide="check" class="text-accent-amber w-5 h-5"></i> Pengakuan Industri
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 font-medium">
                            <i data-lucide="check" class="text-accent-amber w-5 h-5"></i> Workshop Praktis
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 font-medium">
                            <i data-lucide="check" class="text-accent-amber w-5 h-5"></i> Dukungan Pasca-Pelatihan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Grid -->
    <section class="py-20 bg-slate-50" id="programs">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left mb-12 space-y-4">
                <h3 class="text-3xl font-display font-bold text-slate-900">Layanan</h3>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- 1. Layanan Training -->
                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl hover:-translate-y-1 transition-all group flex flex-col h-full">
                    <div class="bg-amber-50 w-14 h-14 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent-amber transition-colors">
                        <i data-lucide="graduation-cap" class="text-accent-amber w-7 h-7 group-hover:text-white"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-4 underline decoration-accent-amber/30 decoration-4 underline-offset-8">Layanan Training</h4>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6 flex-1">
                        Program pelatihan intensif dan praktikal (seperti Bootcamp atau Workshop) yang dirancang untuk meng-upgrade keahlian teknis SDM Anda. Kurikulum kami berfokus pada eksekusi nyata, mulai dari Digital Marketing, Web Development, hingga Creative Production, berdasarkan studi kasus industri terkini.
                    </p>
                    <a href="/contact" class="text-sm text-accent-amber font-bold flex items-center gap-2 group/link">
                        Konsultasi Program <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- 2. Layanan Corporate In House Training -->
                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl hover:-translate-y-1 transition-all group flex flex-col h-full">
                    <div class="bg-blue-50 w-14 h-14 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                        <i data-lucide="building-2" class="text-blue-600 w-7 h-7 group-hover:text-white"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-4 underline decoration-blue-600/30 decoration-4 underline-offset-8">Layanan Corporate In House Training</h4>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6 flex-1">
                        Solusi pelatihan eksklusif yang didatangkan langsung ke instansi atau perusahaan Anda. Materi, durasi, dan metode pembelajaran dirancang khusus (custom) untuk memecahkan tantangan operasional spesifik tim Anda, seperti pelatihan kepemimpinan (Leadership), penyusunan SOP, atau adaptasi teknologi baru.
                    </p>
                    <a href="/contact" class="text-sm text-blue-600 font-bold flex items-center gap-2 group/link">
                        Ajukan Pelatihan Kustom <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- 3. Layanan Sertifikasi Kompetensi -->
                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl hover:-translate-y-1 transition-all group flex flex-col h-full">
                    <div class="bg-emerald-50 w-14 h-14 rounded-xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 transition-colors">
                        <i data-lucide="award" class="text-emerald-600 w-7 h-7 group-hover:text-white"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-4 underline decoration-emerald-600/30 decoration-4 underline-offset-8">Layanan Sertifikasi Kompetensi</h4>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6 flex-1">
                        Program validasi keahlian berstandar nasional untuk membuktikan kredibilitas profesional tim Anda. Kami memfasilitasi bimbingan teknis dan penyelenggaraan uji kompetensi resmi (bekerja sama dengan LSP berlisensi BNSP), memastikan SDM Anda diakui secara sah oleh negara.
                    </p>
                    <a href="/contact" class="text-sm text-emerald-600 font-bold flex items-center gap-2 group/link">
                        Daftar Sertifikasi <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- 4. Layanan MICE -->
                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl hover:-translate-y-1 transition-all group flex flex-col h-full">
                    <div class="bg-rose-50 w-14 h-14 rounded-xl flex items-center justify-center mb-6 group-hover:bg-rose-600 transition-colors">
                        <i data-lucide="presentation" class="text-rose-600 w-7 h-7 group-hover:text-white"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-4 underline decoration-rose-600/30 decoration-4 underline-offset-8">Layanan MICE</h4>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6 flex-1">
                        (Meetings, Incentives, Conferences, and Exhibitions). Penyelenggaraan acara korporat dan pemerintahan berskala besar secara end-to-end. Kami menangani manajemen logistik, perancangan rundown, hingga dokumentasi premium untuk memastikan Rapat Koordinasi, Seminar Nasional, atau Corporate Gathering Anda berjalan sempurna dan berwibawa.
                    </p>
                    <a href="/contact" class="text-sm text-rose-600 font-bold flex items-center gap-2 group/link">
                        Manajemen Acara <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
        </div>
    </section>

    <!-- Custom Training CTA -->
    <section class="py-24 bg-white" id="custom">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 rounded-[48px] p-10 md:p-16 relative overflow-hidden flex flex-col items-center text-center space-y-6 group">
                <div class="absolute inset-0 bg-gradient-to-r from-accent-amber/10 to-transparent group-hover:from-accent-amber/20 transition-all duration-700"></div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white relative z-10 leading-tight">Solusi Korporat Kustom</h2>
                <p class="text-lg text-slate-400 max-w-2xl relative z-10 leading-relaxed">Kami merancang kurikulum pelatihan kustom yang disesuaikan dengan tantangan spesifik dan ekosistem teknologi organisasi Anda.</p>
                <div class="pt-6 relative z-10">
                    <a href="/contact" class="px-10 py-5 bg-accent-amber text-slate-900 font-bold text-lg rounded-2xl shadow-2xl hover:bg-amber-500 hover:-translate-y-1 transition-all">Ajukan Workshop</a>
                </div>
            </div>
        </div>
    </section>
@endsection
