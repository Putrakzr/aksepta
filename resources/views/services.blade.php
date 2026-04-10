@extends('layouts.app')

@section('PT. Aksepta Strategi Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 py-32 overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=2072')] bg-cover bg-center opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary-900/90 to-slate-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white">{{ site_content('ser_hero_title', 'Layanan Pilihan') }}</h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                {{ site_content('ser_hero_desc', 'Memberdayakan bisnis melalui pemasaran modern, produksi kreatif, dan solusi teknologi mutakhir.') }}
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-32 bg-slate-50" x-data="{ 
        activeCategory: '{{ $category ?? '' }}',
        scrollTo(id) {
            const el = document.getElementById(id);
            if (el) el.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }" x-init="if(activeCategory) setTimeout(() => scrollTo(activeCategory), 500)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Digital Marketing -->
                <div id="digital-marketing" :class="activeCategory === 'digital-marketing' ? 'ring-4 ring-primary-500 shadow-2xl scale-[1.02]' : ''" class="group bg-white rounded-[40px] p-12 shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-primary-200 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary-50 rounded-bl-[100px] -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="relative z-10 space-y-8">
                        <div class="w-20 h-20 bg-primary-600 rounded-3xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">
                            <i data-lucide="trending-up" class="text-white w-10 h-10"></i>
                        </div>
                        
                        <div class="space-y-4">
                            <h2 class="text-3xl font-display font-bold text-slate-900">{{ site_content('ser_marketing_title', 'Digital Marketing') }}</h2>
                            <p class="text-slate-600 leading-relaxed text-lg">{{ site_content('ser_marketing_desc', 'Kami membangun mesin pertumbuhan untuk mendapatkan prospek berkualitas tinggi melalui strategi berbasis data.') }}</p>
                        </div>
                        
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500"></i>
                                Strategi SEO & SEM
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500"></i>
                                Optimasi Media Sosial
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500"></i>
                                Performance Marketing (PPC)
                            </li>
                        </ul>
                        
                        <a href="{{ route('services.digital-marketing') }}" class="inline-flex items-center gap-2 text-primary-600 font-bold hover:gap-4 transition-all duration-300">
                            Pelajari Selengkapnya
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Creative Production -->
                <div class="group bg-white rounded-[40px] p-12 shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-accent-rose/20 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-accent-rose/10 rounded-bl-[100px] -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="relative z-10 space-y-8">
                        <div class="w-20 h-20 bg-accent-rose rounded-3xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">
                            <i data-lucide="video" class="text-white w-10 h-10"></i>
                        </div>
                        
                        <div class="space-y-4">
                            <h2 class="text-3xl font-display font-bold text-slate-900">{{ site_content('ser_creative_title', 'Creative Production') }}</h2>
                            <p class="text-slate-600 leading-relaxed text-lg">{{ site_content('ser_creative_desc', 'Bercerita yang memikat. Kami memproduksi visual tingkat tinggi yang beresonansi dengan target audiens Anda.') }}</p>
                        </div>
                        
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-accent-rose"></i>
                                Produksi Video & Animasi
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-accent-rose"></i>
                                Branding & Identitas Visual
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-accent-rose"></i>
                                Motion Graphics & VFX
                            </li>
                        </ul>
                        
                        <a href="{{ route('services.creative-production') }}" class="inline-flex items-center gap-2 text-accent-rose font-bold hover:gap-4 transition-all duration-300">
                            Lihat Galeri Kreatif
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Website Development -->
                <div class="md:col-span-2 group bg-slate-900 rounded-[48px] p-12 md:p-20 shadow-2xl relative overflow-hidden transition-all duration-500">
                    <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-primary-600/20 rounded-full blur-[100px]"></div>
                    
                    <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                        <div class="space-y-8">
                            <div class="w-20 h-20 bg-primary-600 rounded-3xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="code-2" class="text-white w-10 h-10"></i>
                            </div>
                            
                            <h2 class="text-4xl font-display font-bold text-white">{{ site_content('ser_tech_title', 'Website & Web App Development') }}</h2>
                            <p class="text-slate-400 text-xl leading-relaxed">{{ site_content('ser_tech_desc', 'Dari portofolio sederhana hingga platform skala perusahaan yang kompleks. Kami membangun solusi cepat, aman, dan skalabel.') }}</p>
                            
                            <div class="flex flex-wrap gap-4">
                                <span class="px-4 py-2 bg-slate-800 rounded-xl text-primary-400 font-bold border border-slate-700">Laravel</span>
                                <span class="px-4 py-2 bg-slate-800 rounded-xl text-primary-400 font-bold border border-slate-700">React.js</span>
                                <span class="px-4 py-2 bg-slate-800 rounded-xl text-primary-400 font-bold border border-slate-700">Tailwind CSS</span>
                            </div>
                        </div>
                        
                        <div class="bg-slate-800/50 backdrop-blur-md rounded-3xl p-8 border border-slate-700 space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-primary-900/50 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="command" class="text-primary-400 w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-lg">Integrasi API</h4>
                                    <p class="text-slate-400">Hubungkan sistem lama Anda secara mulus dengan arsitektur frontend modern.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-primary-900/50 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="shield-check" class="text-primary-400 w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-lg">Aman secara Desain</h4>
                                    <p class="text-slate-400">Protokol keamanan tingkat lanjut untuk melindungi bisnis dan data pengguna Anda.</p>
                                </div>
                            </div>
                            <a href="{{ route('services.website-development') }}" class="block w-full py-4 bg-primary-600 text-white text-center font-bold rounded-2xl hover:bg-primary-500 transition-all duration-300 mt-4">
                                Mulai Membangun
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Training & Certification -->
                <div class="group bg-white rounded-[40px] p-12 shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-accent-amber/20 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-accent-amber/10 rounded-bl-[100px] -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="relative z-10 space-y-8">
                        <div class="w-20 h-20 bg-accent-amber rounded-3xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-300">
                            <i data-lucide="award" class="text-white w-10 h-10"></i>
                        </div>
                        
                        <div class="space-y-4">
                            <h2 class="text-3xl font-display font-bold text-slate-900">{{ site_content('ser_training_title', 'Training & Certification') }}</h2>
                            <p class="text-slate-600 leading-relaxed text-lg">{{ site_content('ser_training_desc', 'Memberdayakan tenaga kerja Anda. Kami menyediakan pelatihan profesional dan sertifikasi yang diakui.') }}</p>
                        </div>
                        
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-accent-amber"></i>
                                Sertifikasi Bisnis Berbasis Digital
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-accent-amber"></i>
                                Program Upskilling Perusahaan
                            </li>
                        </ul>
                        
                        <a href="{{ route('services.training') }}" class="inline-flex items-center gap-2 text-accent-amber font-bold hover:gap-4 transition-all duration-300">
                            Jadwalkan Workshop
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="py-32 bg-slate-900 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-8">Not sure which service you need?</h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-12">Talk to our experts. We'll analyze your current business state and recommend the best roadmap for growth.</p>
            <a href="/contact" class="px-10 py-6 bg-primary-600 text-white font-bold rounded-2xl shadow-xl hover:bg-primary-700 hover:shadow-primary-200/50 transition-all duration-300">
                Book Free Consultation
            </a>
        </div>
    </section>
@endsection
