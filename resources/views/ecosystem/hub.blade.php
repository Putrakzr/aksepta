@extends('layouts.app')

@section('title', 'PT. Aksepta Strategi Indonesia')

@section('content')
    <!-- Hero Section: The Evolution -->
    <section class="relative min-h-[85vh] flex items-center pt-32 pb-20 overflow-hidden bg-[#020617]">
        <!-- Premium Background Architecture -->
        <div class="absolute inset-0 z-0">
            <!-- Base Gradient Mesh -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,rgba(51,76,158,0.15)_0%,transparent_50%)]">
            </div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_70%,rgba(244,63,94,0.08)_0%,transparent_50%)]">
            </div>

            <!-- Animated Blobs -->
            <div
                class="absolute top-[-10%] right-[-10%] w-[600px] h-[600px] bg-primary-600/20 blur-[120px] rounded-full animate-pulse-slow">
            </div>
            <div
                class="absolute bottom-[-10%] left-[-10%] w-[400px] h-[400px] bg-accent-rose/10 blur-[100px] rounded-full animate-pulse-slow px-delay-2000">
            </div>

            <!-- Strategic Grid Overlay -->
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
                style="background-image: linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px); background-size: 60px 60px;">
            </div>

            <!-- Subtle Vignette -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#020617]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl space-y-10">
                <!-- Premium Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white/5 backdrop-blur-2xl rounded-full border border-white/10 shadow-2xl animate-fade-in translate-y-4 opacity-0"
                    style="animation-fill-mode: forwards;">
                    <span class="relative flex h-2.5 w-2.5">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary-500"></span>
                    </span>
                    <span class="text-[10px] font-black text-primary-300 uppercase tracking-[0.4em]">Corporate
                        Profile</span>
                </div>

                <!-- High-Impact Heading -->
                <div class="space-y-4 animate-slide-up opacity-0"
                    style="animation-delay: 200ms; animation-fill-mode: forwards;">
                    <h1
                        class="text-6xl md:text-8xl lg:text-[7rem] font-display font-black text-white leading-[0.95] tracking-tighter">
                        Strategic <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 via-indigo-400 to-primary-300">Holding</span>
                        <br>
                        Company.
                    </h1>
                </div>

                <!-- Refined Description -->
                <p class="text-xl md:text-2xl text-slate-400 leading-relaxed max-w-2xl animate-slide-up opacity-0"
                    style="animation-delay: 400ms; animation-fill-mode: forwards;">
                    Aksepta mentransformasi tantangan fragmentasi bisnis menjadi <span
                        class="text-white font-medium">ekosistem pertumbuhan</span> yang tangguh dan terintegrasi secara
                    strategis.
                </p>

                <!-- Modern Action Buttons -->
                <div class="flex flex-wrap gap-5 pt-6 animate-slide-up opacity-0"
                    style="animation-delay: 600ms; animation-fill-mode: forwards;">
                    <a href="#sejarah"
                        class="group relative px-10 py-5 bg-primary-600 text-white font-black text-lg rounded-2xl shadow-[0_0_40px_-5px_rgba(51,76,158,0.4)] hover:shadow-[0_0_50px_-5px_rgba(51,76,158,0.6)] hover:bg-primary-500 transition-all duration-500 flex items-center gap-3 overflow-hidden">
                        <span class="relative z-10">Pelajari Sejarah Kami</span>
                        <i data-lucide="chevron-down"
                            class="w-5 h-5 relative z-10 transition-transform duration-500 group-hover:translate-y-1"></i>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-primary-400/0 via-white/10 to-primary-400/0 -translate-x-[100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out">
                        </div>
                    </a>

                    <a href="#founder"
                        class="px-10 py-5 bg-white/5 backdrop-blur-md text-white font-black text-lg rounded-2xl border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 flex items-center gap-2">
                        Sambutan Founder
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce opacity-30 group">
            <div class="w-px h-12 bg-gradient-to-b from-transparent via-white to-transparent"></div>
        </div>
    </section>

    <!-- Section: Tentang Aksepta (Timeline) -->
    <section id="sejarah" class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-16 items-start">
                <div class="lg:col-span-5 space-y-8 sticky top-32">
                    <h2 class="text-sm font-bold text-primary-600 uppercase tracking-[0.3em]">TENTANG AKSEPTA</h2>
                    <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900 leading-tight">
                        Transformasi Dari <span class="text-primary-600">Agensi</span> Menuju <span
                            class="text-slate-500">Holding.</span>
                    </h3>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Perjalanan kami adalah bukti adaptasi terhadap disrupsi digital dan komitmen untuk menyelesaikan
                        akar masalah bisnis di Indonesia.
                    </p>
                    <div class="p-6 bg-slate-50 rounded-3xl border border-slate-100 italic text-slate-500 text-sm">
                        "Kami berhenti menjadi sekadar 'agensi pelaksana' dan bertransformasi menjadi Strategic Holding
                        Company."
                    </div>
                </div>

                <div class="lg:col-span-7 space-y-12 relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-8 top-0 bottom-0 w-px bg-slate-200 hidden md:block"></div>

                    <!-- 2020 -->
                    <div class="relative pl-0 md:pl-20 group">
                        <div
                            class="absolute left-6 top-0 w-4 h-4 bg-primary-600 rounded-full border-4 border-white shadow-lg hidden md:block z-10 transition-transform group-hover:scale-150">
                        </div>
                        <div
                            class="p-10 bg-slate-50 rounded-[40px] border border-slate-100 group-hover:bg-white group-hover:shadow-2xl transition-all duration-500">
                            <div class="text-primary-600 font-display font-black text-4xl mb-4">2020</div>
                            <h4 class="text-2xl font-bold text-slate-900 mb-4">Berdiri di Tengah Perubahan</h4>
                            <p class="text-slate-600 leading-relaxed">
                                PT Aksepta Strategi Indonesia resmi didirikan tepat saat dunia dipaksa beradaptasi dengan
                                disrupsi digital. Kami melangkah membantu pelaku usaha di Kalimantan Timur mendigitalkan
                                layanan melalui pendekatan periklanan dan desain visual.
                            </p>
                        </div>
                    </div>

                    <!-- 2021-2024 -->
                    <div class="relative pl-0 md:pl-20 group">
                        <div
                            class="absolute left-6 top-0 w-4 h-4 bg-accent-amber rounded-full border-4 border-white shadow-lg hidden md:block z-10 transition-transform group-hover:scale-150">
                        </div>
                        <div
                            class="p-10 bg-slate-50 rounded-[40px] border border-slate-100 group-hover:bg-white group-hover:shadow-2xl transition-all duration-500">
                            <div class="text-accent-amber font-display font-black text-4xl mb-4">2021 - 2024</div>
                            <h4 class="text-2xl font-bold text-slate-900 mb-4">Menemukan Akar Masalah</h4>
                            <p class="text-slate-600 leading-relaxed">
                                Kami menemukan pola: Pemasaran digital tidak bisa menyelamatkan sistem operasional yang
                                manual. Klien seringkali kelelahan mengelola banyak vendor terpisah (riset, programmer,
                                production house), yang mengakibatkan inefisiensi dan miskomunikasi.
                            </p>
                        </div>
                    </div>

                    <!-- 2025-Sekarang -->
                    <div class="relative pl-0 md:pl-20 group">
                        <div
                            class="absolute left-6 top-0 w-4 h-4 bg-emerald-500 rounded-full border-4 border-white shadow-lg hidden md:block z-10 transition-transform group-hover:scale-150">
                        </div>
                        <div class="p-10 bg-primary-900 text-white rounded-[40px] shadow-2xl relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-8 opacity-10">
                                <i data-lucide="rocket" class="w-24 h-24 text-white"></i>
                            </div>
                            <div class="text-emerald-400 font-display font-black text-4xl mb-4">2025 - Sekarang</div>
                            <h4 class="text-2xl font-bold mb-4 text-white">Lahirnya Ekosistem Aksepta</h4>
                            <p class="text-primary-100 leading-relaxed">
                                Melakukan restrukturisasi besar-besaran menjadi **Strategic Holding Company**. Kami
                                membangun 6 pilar utama (ABCO, ADDS, ADMA, APEX, ADMO, dan ARIO) sebagai solusi "satu pintu"
                                (end-to-end partner) bagi Pemerintah maupun Korporasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Visi & Misi -->
    <section class="py-32 bg-slate-900 relative overflow-hidden">
        <!-- Visual Accents -->
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,#1e293b_0%,transparent_50%)]">
        </div>
        <div
            class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(circle_at_80%_70%,#0f172a_0%,transparent_50%)]">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="space-y-12">
                    <div class="space-y-6">
                        <h2 class="text-sm font-bold text-primary-400 uppercase tracking-[0.3em]">VISI & MISI</h2>
                        <h3 class="text-5xl md:text-6xl font-display font-extrabold text-white leading-tight">
                            Menjadi <span
                                class="text-gradient bg-gradient-to-r from-primary-400 to-emerald-400">Katalisator</span>
                            Transformasi.
                        </h3>
                    </div>

                    <div class="p-10 glass rounded-[40px] border-white/10 bg-white/5 space-y-6">
                        <i data-lucide="quote" class="w-12 h-12 text-primary-400 opacity-50"></i>
                        <p class="text-2xl font-medium text-white italic leading-relaxed">
                            "Menjadi katalisator utama dalam transformasi digital dan pertumbuhan bisnis strategis di
                            Indonesia, dengan menghadirkan solusi terintegrasi yang memadukan riset, teknologi, dan
                            kreativitas."
                        </p>
                        <div class="h-1 w-20 bg-primary-500 rounded-full"></div>
                        <div class="text-sm font-bold text-primary-400 uppercase tracking-widest">VISI KAMI</div>
                    </div>
                </div>

                <div class="grid gap-6">
                    <!-- Mission Items -->
                    <div
                        class="p-8 bg-white/5 border border-white/10 rounded-3xl hover:bg-white/10 transition-all duration-300 group">
                        <div class="flex gap-6 items-start">
                            <div
                                class="w-14 h-14 bg-primary-500/20 rounded-2xl flex items-center justify-center text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-all">
                                <i data-lucide="bar-chart-3" class="w-7 h-7"></i>
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-xl font-bold text-white uppercase tracking-tight">Pendekatan Berbasis Data
                                </h4>
                                <p class="text-slate-400 text-sm leading-relaxed">Menghilangkan asumsi dalam setiap
                                    pengambilan keputusan melalui riset dan analisis intelijen pasar yang akurat.</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="p-8 bg-white/5 border border-white/10 rounded-3xl hover:bg-white/10 transition-all duration-300 group">
                        <div class="flex gap-6 items-start">
                            <div
                                class="w-14 h-14 bg-indigo-500/20 rounded-2xl flex items-center justify-center text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition-all">
                                <i data-lucide="cpu" class="w-7 h-7"></i>
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-xl font-bold text-white uppercase tracking-tight">Infrastruktur
                                    Berkelanjutan</h4>
                                <p class="text-slate-400 text-sm leading-relaxed">Merancang dan membangun sistem perangkat
                                    lunak skala enterprise yang aman, adaptif, dan berorientasi pada efisiensi.</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="p-8 bg-white/5 border border-white/10 rounded-3xl hover:bg-white/10 transition-all duration-300 group">
                        <div class="flex gap-6 items-start">
                            <div
                                class="w-14 h-14 bg-accent-rose/20 rounded-2xl flex items-center justify-center text-accent-rose group-hover:bg-accent-rose group-hover:text-white transition-all">
                                <i data-lucide="sparkles" class="w-7 h-7"></i>
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-xl font-bold text-white uppercase tracking-tight">Eksekusi Premium</h4>
                                <p class="text-slate-400 text-sm leading-relaxed">Memberikan standar produksi visual dan
                                    kampanye pemasaran tingkat tinggi untuk mendongkrak wibawa dan konversi klien.</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="p-8 bg-white/5 border border-white/10 rounded-3xl hover:bg-white/10 transition-all duration-300 group">
                        <div class="flex gap-6 items-start">
                            <div
                                class="w-14 h-14 bg-emerald-500/20 rounded-2xl flex items-center justify-center text-emerald-400 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                                <i data-lucide="layers" class="w-7 h-7"></i>
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-xl font-bold text-white uppercase tracking-tight">Pemberdayaan Ekosistem
                                </h4>
                                <p class="text-slate-400 text-sm leading-relaxed">Mengelola aset digital dan investasi
                                    sektor riil untuk menciptakan pertumbuhan pendapatan pasif (passive income) jangka
                                    panjang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Sambutan Founder -->
    <section id="founder" class="py-32 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-[64px] shadow-3xl border border-slate-100 overflow-hidden relative">
                <!-- Abstract Design -->
                <div class="absolute top-0 right-0 w-1/3 h-full bg-primary-600/5 -skew-x-12 translate-x-20"></div>

                <div class="grid lg:grid-cols-12 gap-0 relative z-10">
                    <div class="lg:col-span-4 bg-slate-100 relative">
                        <!-- Headshot Placeholder: Suggest high quality creative headshot here -->
                        <div
                            class="h-full min-h-[400px] w-full bg-gradient-to-br from-slate-200 to-slate-300 flex items-center justify-center relative overflow-hidden group">
                            <i data-lucide="user"
                                class="w-32 h-32 text-slate-400 opacity-50 group-hover:scale-110 transition-transform duration-700"></i>
                            <!-- Tag -->
                            <div class="absolute bottom-10 left-0 right-0 text-center">
                                <div class="inline-block px-6 py-3 bg-white shadow-xl rounded-full">
                                    <div class="text-sm font-bold text-slate-900 leading-none">Dastyargo Hartono</div>
                                    <div class="text-[10px] text-primary-600 font-bold uppercase tracking-widest mt-1">
                                        Founder & Managing Director</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-8 p-12 md:p-20 space-y-12">
                        <div class="space-y-6">
                            <div
                                class="inline-block px-4 py-1.5 bg-primary-100 text-primary-700 rounded-full text-xs font-bold uppercase tracking-widest">
                                The Leadership Voice</div>
                            <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 leading-tight">Selamat
                                Datang di Ekosistem <br>PT Aksepta Strategi Indonesia.</h2>
                        </div>

                        <div class="prose prose-lg text-slate-600 leading-relaxed max-w-none space-y-6">
                            <p>
                                Di era di mana perubahan teknologi dan perilaku pasar terjadi begitu cepat, cara-cara
                                konvensional tidak lagi cukup untuk mempertahankan relevansi. Transformasi digital kini
                                bukan sekadar tentang memiliki media sosial atau membangun sebuah website; ini adalah
                                tentang bagaimana menyelaraskan seluruh operasional bisnis ke dalam satu sistem yang efisien
                                dan terukur.
                            </p>
                            <p>
                                Selama perjalanan kami mendampingi berbagai instansi pemerintahan dan korporasi, kami
                                menemukan satu benang merah yang menjadi tantangan terbesar para pemimpin bisnis:
                                **Fragmentasi**. Banyak perusahaan kelelahan karena harus mengelola strategi, teknologi, dan
                                eksekusi kreatif melalui vendor yang berbeda-beda.
                            </p>
                            <p>
                                Berangkat dari keresahan itulah, Aksepta mengambil langkah berani untuk bertransformasi dari
                                sekadar agensi pelaksana menjadi sebuah **Strategic Holding Company**. Kami menyatukan para
                                ahli riset bisnis, arsitek perangkat lunak, penyusun strategi digital, dan produser kreatif
                                ke dalam satu atap, satu ekosistem, dan satu komando.
                            </p>
                            <p class="font-semibold text-slate-900">
                                Kesuksesan kami diukur secara mutlak dari seberapa jauh efisiensi yang bisa instansi Anda
                                capai, dan seberapa besar ROI (Return on Investment) yang bisnis Anda dapatkan.
                            </p>
                            <p>
                                Terima kasih atas kepercayaan Anda. Mari berhenti membuang waktu pada solusi yang terpisah,
                                dan mulailah membangun ekosistem pertumbuhan yang tangguh bersama Aksepta.
                            </p>
                        </div>

                        <div class="pt-8 border-t border-slate-100 flex items-center justify-between">
                            <div class="space-y-1">
                                <div class="text-xl font-display font-extrabold text-slate-900">Dastyargo Hartono</div>
                                <div class="text-sm text-slate-500 font-bold">Founder, PT Aksepta Strategi Indonesia</div>
                            </div>
                            <!-- Styled Signature SVG placeholder -->
                            <div class="hidden md:block opacity-20">
                                <i data-lucide="check-check" class="w-12 h-12 text-slate-900"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: CTA to Ecosystem -->
    <section class="py-32 bg-white text-center sm:text-left">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-primary-900 rounded-[48px] p-12 md:p-20 relative overflow-hidden shadow-3xl flex flex-col md:flex-row items-center justify-between gap-12">
                <!-- Background Decoration -->
                <div class="absolute inset-0 z-0">
                    <div
                        class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_70%_20%,rgba(51,76,158,0.4),transparent)]">
                    </div>
                </div>

                <div class="relative z-10 space-y-6 max-w-2xl">
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white leading-tight">Jelajahi 6 Pilar
                        Strategis Ekosistem Kami.</h2>
                    <p class="text-xl text-primary-100 italic">Mulai dari riset di hulu hingga eksekusi di hilir.</p>
                </div>

                <div class="relative z-10 w-full lg:w-auto">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <a href="{{ route('ecosystem.adma') }}"
                            class="px-6 py-4 bg-white/10 backdrop-blur-md text-white font-bold text-center rounded-2xl border border-white/10 hover:bg-blue-500 hover:border-blue-400 hover:shadow-[0_0_20px_rgba(59,130,246,0.5)] transition-all duration-300">ADMA</a>
                        <a href="{{ route('ecosystem.apex') }}"
                            class="px-6 py-4 bg-white/10 backdrop-blur-md text-white font-bold text-center rounded-2xl border border-white/10 hover:bg-purple-500 hover:border-purple-400 hover:shadow-[0_0_20px_rgba(168,85,247,0.5)] transition-all duration-300">APEX</a>
                        <a href="{{ route('ecosystem.adds') }}"
                            class="px-6 py-4 bg-white/10 backdrop-blur-md text-white font-bold text-center rounded-2xl border border-white/10 hover:bg-indigo-500 hover:border-indigo-400 hover:shadow-[0_0_20px_rgba(99,102,241,0.5)] transition-all duration-300">ADDS</a>
                        <a href="{{ route('ecosystem.admo') }}"
                            class="px-6 py-4 bg-white/10 backdrop-blur-md text-white font-bold text-center rounded-2xl border border-white/10 hover:bg-emerald-500 hover:border-emerald-400 hover:shadow-[0_0_20px_rgba(16,185,129,0.5)] transition-all duration-300">ADMO</a>
                        <a href="{{ route('ecosystem.abco') }}"
                            class="px-6 py-4 bg-white/10 backdrop-blur-md text-white font-bold text-center rounded-2xl border border-white/10 hover:bg-amber-500 hover:border-amber-400 hover:shadow-[0_0_20px_rgba(245,158,11,0.5)] transition-all duration-300">ABCO</a>
                        <a href="{{ route('ecosystem.ario') }}"
                            class="px-6 py-4 bg-white/10 backdrop-blur-md text-white font-bold text-center rounded-2xl border border-white/10 hover:bg-rose-500 hover:border-rose-400 hover:shadow-[0_0_20px_rgba(244,63,94,0.5)] transition-all duration-300">ARIO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .shadow-3xl {
            box-shadow: 0 40px 100px -20px rgba(0, 0, 0, 0.1);
        }

        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.3;
                transform: scale(1);
            }

            50% {
                opacity: 0.6;
                transform: scale(1.1);
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 8s ease-in-out infinite;
        }

        .px-delay-2000 {
            animation-delay: 2s;
        }
    </style>
@endsection