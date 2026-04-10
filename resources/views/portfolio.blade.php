@extends('layouts.app')

@section('PT. Aksepta Strategi Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_-20%,#334C9E55,transparent_70%)]"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2069')] bg-cover opacity-20"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8 animate-fade-in">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-primary-500/10 rounded-full border border-primary-500/20 mb-4">
                <i data-lucide="briefcase" class="w-4 h-4 text-primary-400"></i>
                <span class="text-xs font-bold text-primary-400 uppercase tracking-widest">Our Work</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">{!! site_content('portfolio_hero_title', "Proof of <br><span class=\"text-primary-400\">Operational Excellence</span>") !!}</h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed">
                {{ site_content('portfolio_hero_desc', 'Explore our portfolio of strategic interventions, digital transformations, and high-impact creative productions.') }}
            </p>
        </div>
    </section>

    <!-- Main Portfolio Interface -->
    <section class="py-24 bg-white" x-data="{ 
        activeTab: 'all',
        projects: {{ $projects->toJson() }}
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Filter Tabs -->
            <div class="flex flex-wrap justify-center gap-4 mb-20">
                <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'bg-primary-600 text-white shadow-xl translate-y-[-2px]' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-8 py-3 rounded-2xl font-bold transition-all duration-300">Semua Proyek</button>
                <button @click="activeTab = 'marketing'" :class="activeTab === 'marketing' ? 'bg-primary-600 text-white shadow-xl' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-8 py-3 rounded-2xl font-bold transition-all duration-300">Marketing</button>
                <button @click="activeTab = 'dev'" :class="activeTab === 'dev' ? 'bg-primary-600 text-white shadow-xl' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-8 py-3 rounded-2xl font-bold transition-all duration-300">Development</button>
                <button @click="activeTab = 'creative'" :class="activeTab === 'creative' ? 'bg-primary-600 text-white shadow-xl' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-8 py-3 rounded-2xl font-bold transition-all duration-300">Creative</button>
                <button @click="activeTab = 'consulting'" :class="activeTab === 'consulting' ? 'bg-primary-600 text-white shadow-xl' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'" class="px-8 py-3 rounded-2xl font-bold transition-all duration-300">Consulting</button>
            </div>

            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <template x-for="project in projects" :key="project.id">
                    <div x-show="activeTab === 'all' || activeTab === project.category" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                         class="group bg-white rounded-[40px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                        <div class="relative aspect-[4/3] overflow-hidden">
                            <img :src="project.image" :alt="project.title" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                            <div class="absolute top-6 left-6">
                                <span class="px-4 py-1.5 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-widest border border-white/20" x-text="project.category"></span>
                            </div>
                        </div>
                        <div class="p-10 space-y-4">
                            <h3 class="text-2xl font-display font-bold text-slate-900" x-text="project.title"></h3>
                            <p class="text-slate-500 leading-relaxed text-sm" x-text="project.description"></p>
                            <div class="pt-4 flex items-center justify-between">
                                <a href="#" class="inline-flex items-center gap-2 text-primary-600 font-bold hover:gap-4 transition-all group/link">
                                    Studi Kasus
                                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                </a>
                                <div class="flex -space-x-3">
                                     <div class="w-10 h-10 rounded-full border-4 border-white bg-slate-200"></div>
                                     <div class="w-10 h-10 rounded-full border-4 border-white bg-slate-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- Deep Dive Sections -->
    <section class="py-32 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20">
                <!-- Articles Block -->
                <div class="space-y-12">
                     <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-2xl shadow-lg flex items-center justify-center text-primary-600">
                            <i data-lucide="book-open" class="w-6 h-6"></i>
                        </div>
                        <h2 class="text-3xl font-display font-bold">Riset & Artikel</h2>
                     </div>
                     <div class="space-y-6">
                         @foreach ($articles->take(3) as $article)
                         <a href="#" class="flex gap-6 p-6 bg-white rounded-3xl border border-slate-100 hover:shadow-xl transition-all group">
                             <div class="w-24 h-24 bg-slate-100 rounded-2xl flex-shrink-0 overflow-hidden">
                                 <img src="{{ $article->image }}" class="w-full h-full object-cover">
                             </div>
                             <div class="space-y-2">
                                 <h4 class="font-bold text-slate-900 group-hover:text-primary-600 transition-colors">{{ $article->title }}</h4>
                                 <p class="text-xs text-slate-500 uppercase tracking-widest font-bold">{{ $article->meta }}</p>
                             </div>
                         </a>
                         @endforeach
                     </div>
                </div>

                <!-- Gallery Block -->
                <div class="space-y-12">
                     <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-2xl shadow-lg flex items-center justify-center text-accent-rose">
                            <i data-lucide="image" class="w-6 h-6"></i>
                        </div>
                        <h2 class="text-3xl font-display font-bold">Galeri Kreatif</h2>
                     </div>
                     <div class="grid grid-cols-2 gap-4">
                         @foreach($galleries->take(4) as $index => $item)
                         <div class="bg-white rounded-[32px] overflow-hidden group shadow-md hover:shadow-xl transition-all {{ $index % 2 != 0 ? 'pt-8' : '' }}">
                             <div class="{{ $index % 2 == 0 ? 'aspect-square' : 'aspect-[3/4]' }}">
                                <img src="{{ $item->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                             </div>
                         </div>
                         @endforeach
                     </div>
                </div>
            </div>

            <!-- Documentation Section -->
            <div class="mt-32 pt-32 border-t border-slate-200">
                <div class="text-center space-y-4 mb-20">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-amber-500/10 rounded-full border border-amber-500/20">
                        <i data-lucide="file-text" class="w-4 h-4 text-amber-600"></i>
                        <span class="text-xs font-bold text-amber-600 uppercase tracking-widest">Repositori</span>
                    </div>
                    <h2 class="text-4xl font-display font-bold text-slate-900">Dokumentasi Proyek</h2>
                    <p class="text-slate-500 max-w-2xl mx-auto">Akses kerangka kerja strategis, spesifikasi teknis, dan basis data riset internal kami.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($documentations as $doc)
                    <div class="group bg-white p-8 rounded-[40px] border border-slate-100 hover:shadow-2xl transition-all duration-500">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-amber-500 group-hover:text-white transition-colors duration-500">
                            <i data-lucide="file-down" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2">{{ $doc->title }}</h4>
                        <p class="text-sm text-slate-400 mb-6">{{ $doc->date }}</p>
                        <a href="{{ $doc->link }}" class="flex items-center gap-2 text-amber-600 font-bold text-sm hover:gap-4 transition-all">
                            Unduh Dokumen
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-32 bg-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 p-16 md:p-24 bg-slate-900 rounded-[64px] relative overflow-hidden text-white">
            <div class="absolute inset-0 bg-gradient-to-tr from-primary-600/20 to-transparent"></div>
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-8 relative z-10">Mulai Cerita Sukses Anda Hari Ini.</h2>
            <p class="text-xl text-slate-400 mb-12 relative z-10">{{ site_content('portfolio_cta_desc', 'Bergabunglah dengan jajaran pemimpin pasar yang telah mentransformasi bisnis mereka bersama Aksepta.') }}</p>
            <div class="flex flex-col md:flex-row justify-center gap-6 relative z-10">
                <a href="/contact" class="px-12 py-6 bg-primary-600 text-white font-bold text-lg rounded-2xl shadow-2xl hover:bg-primary-700 transition-all">Bekerja Sama</a>
                <a href="/" class="px-12 py-6 bg-white/10 text-white font-bold text-lg rounded-2xl border border-white/20 hover:bg-white/20 transition-all">Kembali ke Beranda</a>
            </div>
        </div>
    </section>

    <style>
        .text-glow {
            text-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
@endsection
