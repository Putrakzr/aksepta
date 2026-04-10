@extends('layouts.app')

@section('title', 'PT. Aksepta Strategi Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center overflow-hidden pt-20">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-brand-offwhite"></div>
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary-200/30 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-accent-violet/20 rounded-full blur-[120px]"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8 animate-slide-up">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-50 rounded-full border border-primary-100">
                        <span class="relative flex h-3 w-3">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-primary-500"></span>
                        </span>
                        <span class="text-xs font-bold text-primary-700 uppercase tracking-widest">{{ site_content('home_hero_badge', 'Research | Digital | Investment') }}</span>
                    </div>
                    
                    <h1 class="text-6xl md:text-7xl font-display font-extrabold text-slate-900 leading-[1.1]">
                        {!! site_content('home_hero_title', 'Digital <span class="text-primary-600">Marketing</span> Samarinda.') !!}
                    </h1>
                    
                    <p class="text-xl text-slate-600 leading-relaxed max-w-xl">
                        {!! site_content('home_hero_desc', 'Aksepta Strategi Indonesia mengintegrasikan <span class="font-semibold text-slate-900">Riset Bisnis</span>, <span class="font-semibold text-slate-900"> Pengembangan Sistem</span>, <span class="font-semibold text-slate-900">Pemasaran Digital</span>, hingga <span class="font-semibold text-slate-900">Eksekusi Kreatif </span>tingkat tinggi.') !!}
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="/contact" class="px-8 py-5 bg-primary-600 text-white font-bold rounded-2xl shadow-xl hover:bg-primary-700 hover:shadow-primary-200/50 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
                            {{ site_content('home_cta_primary', 'Konsultasi') }}
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="/services" class="px-8 py-5 bg-white text-slate-700 font-bold rounded-2xl border border-slate-200 hover:border-primary-300 hover:bg-primary-50 transition-all duration-300 flex items-center justify-center gap-2">
                            {{ site_content('home_cta_secondary', 'Jelajahi Layanan') }}
                        </a>
                    </div>
                </div>
                
                <div class="relative hidden lg:block animate-fade-in" style="animation-delay: 0.3s">
                    <!-- Modern Visual Representation -->
                    <div class="relative z-10 p-4">
                        <div class="bg-white rounded-[40px] shadow-2xl border border-slate-100 overflow-hidden group">
                           <div class="relative h-[500px] w-full bg-gradient-to-br from-primary-600 to-indigo-700 flex items-center justify-center">
                                <i data-lucide="rocket" class="w-48 h-48 text-white/20 absolute -bottom-10 -right-10 group-hover:rotate-12 transition-transform duration-700"></i>
                                <div class="relative z-10 text-center space-y-4 px-12">
                                    <div class="w-20 h-20 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center mx-auto mb-6">
                                        <i data-lucide="sparkles" class="text-white w-10 h-10"></i>
                                    </div>
                                    <h3 class="text-3xl font-display font-bold text-white">{{ site_content('home_visual_title', 'Dari Strategi Hingga Eksekusi') }}</h3>
                                    <p class="text-primary-100 text-lg">{{ site_content('home_visual_desc', 'Kami memadukan riset bisnis, rekayasa teknologi, dan eksekusi visual premium dalam satu ekosistem untuk hasil yang terukur.') }}</p>
                                </div>
                           </div>
                        </div>
                        
                        <!-- Floating Cards -->
                        <div class="absolute top-20 -left-12 p-6 glass rounded-2xl shadow-xl animate-bounce" style="animation-duration: 4s">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-accent-amber rounded-lg flex items-center justify-center">
                                    <i data-lucide="trending-up" class="text-white w-5 h-5"></i>
                                </div>
                                <div class="pr-4">
                                    <div class="text-xs font-bold text-slate-400">ROI Terukur</div>
                                    <div class="text-lg font-bold text-slate-800">+142%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-32 py-12 border-t border-slate-200">
                <div class="text-center group">
                    <div class="text-4xl font-display font-extrabold text-primary-600 group-hover:scale-110 transition-transform">500+</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider mt-1">Projects</div>
                </div>
                <div class="text-center group">
                    <div class="text-4xl font-display font-extrabold text-accent-violet group-hover:scale-110 transition-transform">98%</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider mt-1">Satisfaction</div>
                </div>
                <div class="text-center group">
                    <div class="text-4xl font-display font-extrabold text-primary-600 group-hover:scale-110 transition-transform">10+</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider mt-1">Years</div>
                </div>
                <div class="text-center group">
                    <div class="text-4xl font-display font-extrabold text-accent-rose group-hover:scale-110 transition-transform">50+</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider mt-1">Expert Team</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
                <h2 class="text-sm font-bold text-primary-600 uppercase tracking-[0.2em]">{{ site_content('home_why_badge', 'METODOLOGI KAMI') }}</h2>
                <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900">{{ site_content('home_why_title', 'Mengapa Harus Aksepta?') }}</h3>
                <p class="text-lg text-slate-600">{{ site_content('home_why_desc', 'Kami menciptakan keunggulan kompetitif jangka panjang bagi instansi dan perusahaan Anda.') }}</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-10 rounded-[32px] bg-slate-50 border border-slate-100 hover:border-primary-200 hover:bg-white hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-16 h-16 bg-white shadow-lg rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary-600 transition-colors duration-500">
                        <i data-lucide="bar-chart-big" class="text-primary-600 w-8 h-8 group-hover:text-white transition-colors duration-500"></i>
                    </div>
                    <h4 class="text-2xl font-display font-bold text-slate-900 mb-4 text-gradient bg-gradient-to-r from-slate-900 to-slate-700">{{ site_content('home_feat1_title', 'Strategi Berbasis Data') }}</h4>
                    <p class="text-slate-600 leading-relaxed">{{ site_content('home_feat1_desc', 'Setiap keputusan strategis dibangun di atas data ilmiah yang valid dan terukur.') }}</p>
                </div>

                <div class="p-10 rounded-[32px] bg-slate-50 border border-slate-100 hover:border-accent-rose/20 hover:bg-white hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-16 h-16 bg-white shadow-lg rounded-2xl flex items-center justify-center mb-8 group-hover:bg-accent-rose transition-colors duration-500">
                        <i data-lucide="milestone" class="text-accent-rose w-8 h-8 group-hover:text-white transition-colors duration-500"></i>
                    </div>
                    <h4 class="text-2xl font-display font-bold text-slate-900 mb-4 text-gradient bg-gradient-to-r from-slate-900 to-slate-700">{{ site_content('home_feat2_title', 'Eksekusi Digital Komprehensif') }}</h4>
                    <p class="text-slate-600 leading-relaxed">{{ site_content('home_feat2_desc', 'Lebih dari sekadar desain. Kami membangun ekosistem digital mulai dari otomasi sistem hingga kampanye pemasaran.') }}</p>
                </div>

                <div class="p-10 rounded-[32px] bg-slate-50 border border-slate-100 hover:border-accent-amber/20 hover:bg-white hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-16 h-16 bg-white shadow-lg rounded-2xl flex items-center justify-center mb-8 group-hover:bg-accent-amber transition-colors duration-500">
                        <i data-lucide="briefcase" class="text-accent-amber w-8 h-8 group-hover:text-white transition-colors duration-500"></i>
                    </div>
                    <h4 class="text-2xl font-display font-bold text-slate-900 mb-4 text-gradient bg-gradient-to-r from-slate-900 to-slate-700">{{ site_content('home_feat3_title', 'Optimasi Aset Digital') }}</h4>
                    <p class="text-slate-600 leading-relaxed">{{ site_content('home_feat3_desc', 'Mengubah aset diam menjadi profit center melalui monetisasi aset media digital untuk pertumbuhan pendapatan.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end gap-8 mb-20">
                <div class="space-y-4 max-w-2xl text-left">
                    <h2 class="text-sm font-bold text-primary-600 uppercase tracking-[0.2em]">{{ site_content('home_feat_proj_badge', 'KARYA UNGGULAN') }}</h2>
                    <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900">{{ site_content('home_feat_proj_title', 'Bukti Eksekusi Nyata Kami.') }}</h3>
                    <p class="text-lg text-slate-600">{{ site_content('home_feat_proj_desc', 'Eksplorasi pilihan intervensi strategis dan transformasi digital yang telah kami eksekusi.') }}</p>
                </div>
                <a href="/portfolio" class="px-8 py-4 bg-slate-100 text-slate-900 font-bold rounded-2xl hover:bg-primary-600 hover:text-white transition-all duration-300">
                    Lihat Semua Proyek
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="group bg-white rounded-[40px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-1.5 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-widest border border-white/20">{{ $project->category }}</span>
                        </div>
                    </div>
                    <div class="p-10 space-y-4">
                        <h3 class="text-2xl font-display font-bold text-slate-900">{{ $project->title }}</h3>
                        <p class="text-slate-500 leading-relaxed text-sm line-clamp-2">{{ $project->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Latest Insights -->
    <section class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
                <h2 class="text-sm font-bold text-accent-rose uppercase tracking-[0.2em]">{{ site_content('home_blog_badge', 'WAWASAN TERBARU') }}</h2>
                <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900">{{ site_content('home_blog_title', 'Strategi & Riset Digital.') }}</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($articles as $article)
                <a href="{{ $article->type === 'link' ? $article->external_url : route('portfolio.articles.show', $article) }}" 
                   {{ $article->type === 'link' ? 'target="_blank"' : '' }}
                   class="group bg-white p-8 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                    <div class="aspect-video rounded-3xl overflow-hidden mb-8">
                        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="space-y-4">
                        <div class="text-xs font-bold text-primary-600 uppercase tracking-widest">{{ $article->meta }}</div>
                        <h4 class="text-2xl font-display font-bold text-slate-900 group-hover:text-primary-600 transition-colors">{{ $article->title }}</h4>
                        <div class="flex items-center gap-2 text-slate-400 font-bold text-sm pt-4">
                            {{ $article->type === 'link' ? 'Kunjungi Artikel' : 'Baca Selengkapnya' }}
                            <i data-lucide="{{ $article->type === 'link' ? 'external-link' : 'arrow-right' }}" class="w-4 h-4 group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-12">
            <h2 class="text-5xl md:text-6xl font-display font-extrabold text-slate-900 leading-[1.1]">
                {!! site_content('home_cta_banner_title', 'Siap Memulai <span class="text-gradient bg-gradient-to-r from-primary-600 to-accent-rose">Transformasi Digital Bisnis</span> Anda?') !!}
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                {{ site_content('home_cta_banner_desc', 'Bergabung dengan berbagai instansi dan perusahaan yang telah beralih dari operasional tradisional menuju efisiensi digital terintegrasi bersama Aksepta. Mari diskusikan kebutuhan Anda.') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center pt-8">
                <a href="/contact" class="px-10 py-6 bg-primary-600 text-white font-bold text-lg rounded-2xl shadow-2xl hover:bg-primary-700 hover:shadow-primary-200 hover:-translate-y-2 transition-all duration-300">
                    {{ site_content('home_cta_banner_primary', 'Konsultasi Gratis') }}
                </a>
                <a href="/portfolio" class="px-10 py-6 bg-white text-slate-900 font-bold text-lg rounded-2xl border border-slate-200 hover:border-primary-300 hover:shadow-lg hover:-translate-y-2 transition-all duration-300">
                    {{ site_content('home_cta_banner_secondary', 'Lihat Portfolio Kami') }}
                </a>
            </div>
        </div>
    </section>
@endsection
