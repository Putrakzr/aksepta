@extends('layouts.app')

@section('title', 'ABCO - Riset, Strategi, & Perizinan Bisnis')

@section('content')
    <!-- Unit Hero: High-Impact Consulting -->
    <section class="relative min-h-[60vh] flex items-center pt-24 pb-20 overflow-hidden bg-[#020617]">
        <!-- Modern Background Architecture -->
        <div class="absolute inset-0 z-0">
            <!-- Base Gradient Mesh -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,rgba(245,158,11,0.15)_0%,transparent_50%)]"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_70%,rgba(217,119,6,0.08)_0%,transparent_50%)]"></div>
            
            <!-- Strategic Grid Overlay -->
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none" 
                 style="background-image: linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px); background-size: 60px 60px;">
            </div>

            <!-- Dynamic Glows -->
            <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-amber-600/10 blur-[120px] rounded-full animate-pulse"></div>
            <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-yellow-600/10 blur-[100px] rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl space-y-10">
                <!-- Unit Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white/5 backdrop-blur-2xl rounded-full border border-white/10 shadow-2xl animate-fade-in translate-y-4 opacity-0" style="animation-fill-mode: forwards;">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-500"></span>
                    </span>
                    <span class="text-[10px] font-black text-amber-300 uppercase tracking-[0.4em]">Strategic Advisory SBU</span>
                </div>
                
                <!-- High-Impact Heading -->
                <div class="space-y-4 animate-slide-up opacity-0" style="animation-delay: 200ms; animation-fill-mode: forwards;">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-black text-white leading-[0.95] tracking-tighter">
                        {!! site_content('abco_hero_title', 'ABCO<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-300">Strategy</span> <br>Intelligence.') !!}
                    </h1>
                </div>
                
                <!-- Refined Description -->
                <p class="text-lg md:text-xl text-slate-400 leading-relaxed max-w-2xl animate-slide-up opacity-0" style="animation-delay: 400ms; animation-fill-mode: forwards;">
                    {!! site_content('abco_hero_desc', 'Fondasi dari setiap keputusan besar. Kami memastikan kebijakan instansi/perusahaan Anda didasari oleh <span class="text-white font-medium">data yang presisi</span>, bukan sekadar asumsi.') !!}
                </p>

                <!-- Modern Action Buttons -->
                <div class="flex flex-wrap gap-5 pt-6 animate-slide-up opacity-0" style="animation-delay: 600ms; animation-fill-mode: forwards;">
                    <a href="#focus" class="group relative px-8 py-4 bg-amber-600 text-white font-black text-lg rounded-2xl shadow-[0_0_40px_-5px_rgba(245,158,11,0.4)] hover:shadow-[0_0_50px_-5px_rgba(245,158,11,0.6)] hover:bg-amber-500 transition-all duration-500 flex items-center gap-3 overflow-hidden">
                        <span class="relative z-10">Jelajahi Solusi</span>
                        <i data-lucide="line-chart" class="w-5 h-5 relative z-10 transition-transform duration-500 group-hover:scale-110"></i>
                        <div class="absolute inset-0 bg-gradient-to-r from-amber-400/0 via-white/10 to-amber-400/0 -translate-x-[100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out"></div>
                    </a>
                    
                    <a href="/contact" class="px-8 py-4 bg-white/5 backdrop-blur-md text-white font-black text-lg rounded-2xl border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 flex items-center gap-2">
                        Konsultasi Strategis
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce opacity-30">
            <div class="w-px h-12 bg-gradient-to-b from-transparent via-white to-transparent"></div>
        </div>
    </section>

    <!-- Strategic Focus Section -->
    <section id="focus" class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-24 items-start">
                <div class="space-y-12 sticky top-32">
                    <div class="space-y-6">
                        <h2 class="text-sm font-bold text-amber-600 uppercase tracking-[0.3em]">STRATEGIC FOCUS</h2>
                        <h3 class="text-3xl md:text-5xl font-display font-black text-slate-900 leading-tight">
                            {!! site_content('abco_focus_title', 'Navigasi Bisnis Berbasis <span class="text-amber-600 underline decoration-amber-500/30 decoration-8 underline-offset-8">Data.</span>') !!}
                        </h3>
                    </div>
                    <p class="text-lg text-slate-600 leading-relaxed max-w-lg">
                        {{ site_content('abco_focus_desc', 'Kami menyediakan jasa konsultasi manajemen, penyusunan Renstra, hingga riset intelijen pasar untuk memastikan akurasi dalam setiap kebijakan.') }}
                    </p>
                    
                    <div class="p-6 bg-amber-50 rounded-[32px] border border-amber-100 flex items-center gap-5 group hover:bg-white hover:shadow-2xl transition-all duration-500">
                        <div class="w-14 h-14 bg-amber-600 text-white rounded-xl flex items-center justify-center flex-shrink-0 animate-pulse">
                            <i data-lucide="shield-check" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <div class="text-xl font-display font-bold text-slate-900">Precision Insight</div>
                            <p class="text-slate-500 text-sm">Menghilangkan bias dalah pengambilan keputusan.</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6">
                    <!-- Service Glass Cards -->
                    <div class="p-8 bg-slate-50 border border-slate-100 rounded-[40px] hover:bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                        <div class="flex gap-6 items-start">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all duration-500">
                                <i data-lucide="scroll" class="w-8 h-8"></i>
                            </div>
                            <div class="space-y-3">
                                <h4 class="text-2xl font-bold text-slate-900 tracking-tight">Business Plan</h4>
                                <p class="text-slate-600 leading-relaxed">Penyusunan Rencana Strategis (Renstra) dan proposal bisnis yang komprehensif bagi korporasi dan pemerintah.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 bg-slate-50 border border-slate-100 rounded-[40px] hover:bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                        <div class="flex gap-6 items-start">
                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center text-yellow-600 group-hover:bg-yellow-600 group-hover:text-white transition-all duration-500">
                                <i data-lucide="search" class="w-8 h-8"></i>
                            </div>
                            <div class="space-y-3">
                                <h4 class="text-2xl font-bold text-slate-900 tracking-tight">Market Research</h4>
                                <p class="text-slate-600 leading-relaxed">Kajian Kelayakan (Feasibility Study) dan riset intelijen pasar untuk memitigasi risiko investasi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 bg-slate-50 border border-slate-100 rounded-[40px] hover:bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                        <div class="flex gap-6 items-start">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all duration-500">
                                <i data-lucide="settings" class="w-8 h-8"></i>
                            </div>
                            <div class="space-y-3">
                                <h4 class="text-2xl font-bold text-slate-900 tracking-tight">SOP Development</h4>
                                <p class="text-slate-600 leading-relaxed">Perancangan tata kelola organisasi dan Standard Operating Procedure (SOP) untuk efisiensi operasional.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 bg-slate-50 border border-slate-100 rounded-[40px] hover:bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                        <div class="flex gap-6 items-start">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-all duration-500">
                                <i data-lucide="gavel" class="w-8 h-8"></i>
                            </div>
                            <div class="space-y-3">
                                <h4 class="text-2xl font-bold text-slate-900 tracking-tight">Legal & Compliance</h4>
                                <p class="text-slate-600 leading-relaxed">Konsultasi perizinan bisnis dan kepatuhan hukum untuk memastikan keamanan operasional jangka panjang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advisory Performance Dashboard -->
    <section class="py-16 bg-slate-900 relative overflow-hidden">
        <!-- Abstract Decoration -->
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_80%_20%,#451a03_0%,transparent_50%)]"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-20">
            <div class="max-w-3xl mx-auto space-y-6">
                <h2 class="text-sm font-bold text-amber-400 uppercase tracking-[0.4em]">ADVISORY METRICS</h2>
                <h3 class="text-4xl md:text-5xl font-display font-black text-white">Precision Decision Making.</h3>
            </div>

            <div class="relative bg-white/5 backdrop-blur-2xl border border-white/10 rounded-[48px] p-10 md:p-14 shadow-3xl group overflow-hidden">
                <!-- Background Accent -->
                <div class="absolute inset-0 bg-gradient-to-br from-amber-600/10 to-transparent pointer-events-none"></div>
                
                <div class="grid md:grid-cols-3 gap-10 relative z-10">
                    <div class="space-y-4">
                        <div class="text-5xl md:text-7xl font-display font-black text-white leading-none tracking-tighter group-hover:text-amber-400 transition-colors duration-700">50+</div>
                        <div class="w-12 h-1 bg-amber-500 mx-auto rounded-full"></div>
                        <p class="text-slate-400 text-lg">Kajian Strategis dan Feasibility Study yang telah kami selesaikan.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="text-5xl md:text-7xl font-display font-black text-white leading-none tracking-tighter group-hover:text-amber-400 transition-colors duration-700">100%</div>
                        <div class="w-12 h-1 bg-amber-500 mx-auto rounded-full"></div>
                        <p class="text-slate-400 text-lg">Akurasi data riset primer yang dihimpun langsung dari intelijen pasar.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="text-5xl md:text-7xl font-display font-black text-white leading-none tracking-tighter group-hover:text-amber-400 transition-colors duration-700">200+</div>
                        <div class="w-12 h-1 bg-amber-500 mx-auto rounded-full"></div>
                        <p class="text-slate-400 text-lg">Rekomendasi kebijakan strategis yang telah diimplementasikan klien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ecosystem Synergy: The Flow -->
    <section class="py-32 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center space-y-4">
                <h2 class="text-sm font-bold text-slate-500 uppercase tracking-[0.4em]">ECOSYSTEM SYNERGY</h2>
                <h3 class="text-3xl md:text-4xl font-display font-black text-slate-900">Unified Strategic Flow.</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="group relative p-8 bg-white rounded-[40px] shadow-sm border border-slate-100 hover:shadow-2xl transition-all duration-700 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-amber-50 rounded-bl-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 space-y-6">
                        <div class="text-amber-600 italic font-black text-sm tracking-widest uppercase">ABCO + ADMA</div>
                        <p class="text-slate-600 text-lg leading-relaxed">
                            <span class="text-slate-900 font-bold">ABCO</span> memberikan intelijen pasar yang menjadi basis bagi <span class="text-slate-900 font-bold">ADMA</span> untuk merancang strategi pemasaran.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-[40px] shadow-sm border border-slate-100 hover:shadow-2xl transition-all duration-700 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-rose-50 rounded-bl-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 space-y-6">
                        <div class="text-rose-600 italic font-black text-sm tracking-widest uppercase">ABCO + ARIO</div>
                        <p class="text-slate-600 text-lg leading-relaxed">
                            Riset kelayakan dari <span class="text-slate-900 font-bold">ABCO</span> memandu <span class="text-slate-900 font-bold">ARIO</span> dalam pengambilan keputusan investasi sektor riil.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 bg-white rounded-[40px] shadow-sm border border-slate-100 hover:shadow-2xl transition-all duration-700 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-bl-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 space-y-6">
                        <div class="text-indigo-600 italic font-black text-sm tracking-widest uppercase">ABCO + ADDS</div>
                        <p class="text-slate-600 text-lg leading-relaxed">
                            <span class="text-slate-900 font-bold">ABCO</span> merancang SOP bisnis, yang kemudian didigitalisasi oleh <span class="text-slate-900 font-bold">ADDS</span> ke dalam sistem manajemen kustom.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .shadow-3xl {
            box-shadow: 0 40px 100px -20px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
