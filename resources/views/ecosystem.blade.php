@extends('layouts.app')

@section('title', 'Our Ecosystem - Aksepta Network')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/90 to-transparent"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white">{{ site_content('eco_hero_title', 'The Aksepta Ecosystem') }}</h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                {{ site_content('eco_hero_desc', 'A highly integrated network of strategic business units working in synergy to deliver comprehensive value.') }}
            </p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-xl mb-2">{{ site_content('eco_core_title', 'Aksepta (Core)') }}</h4>
                                <p class="text-gray-700">{{ site_content('eco_core_desc', 'Pusat strategi dan research utama yang mengkoordinasikan seluruh ekosistem.') }}</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-6 bg-gray-50 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-xl mb-2">Struktur Organisasi</h4>
                                <p class="text-gray-700">Struktur organisasi yang agile dan terintegrasi untuk eksekusi
                                    cepat.</p>
                            </div>
                     <!-- Business Units Grid -->
    <section class="py-32 bg-slate-50" x-data="{ 
        activeUnit: '{{ $unit ?? '' }}',
        scrollTo(id) {
            const el = document.getElementById(id);
            if (el) el.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }" x-init="if(activeUnit) setTimeout(() => scrollTo(activeUnit), 500)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
                <h2 class="text-sm font-bold text-primary-600 uppercase tracking-[0.2em]">Our Business Core</h2>
                <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900">Specialized Strategic Units</h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- ADMA -->
                <a href="{{ route('ecosystem.adma') }}" id="adma" :class="activeUnit === 'adma' ? 'ring-4 ring-primary-500 shadow-2xl scale-[1.02]' : ''" class="group bg-white p-10 rounded-[40px] shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-[60px] -mr-12 -mt-12 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 text-center space-y-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:rotate-12 transition-transform">
                            <span class="text-white font-extrabold text-sm">ADMA</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-slate-900">Performance Marketing & Brand Management</h5>
                            <p class="text-xs text-slate-500">Pemasaran Berbasis Kinerja</p>
                        </div>
                        <div class="text-blue-600 opacity-0 group-hover:opacity-100 transition-opacity pt-2">
                             <i data-lucide="arrow-right" class="w-5 h-5 mx-auto"></i>
                        </div>
                    </div>
                </a>

                <!-- ADMO -->
                <a href="{{ route('ecosystem.admo') }}" id="admo" :class="activeUnit === 'admo' ? 'ring-4 ring-emerald-500 shadow-2xl scale-[1.02]' : ''" class="group bg-white p-10 rounded-[40px] shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50 rounded-bl-[60px] -mr-12 -mt-12 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 text-center space-y-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:rotate-12 transition-transform">
                            <span class="text-white font-extrabold text-sm">ADMO</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-slate-900">Pengelolaan Aset Media & Monetisasi Digital</h5>
                            <p class="text-xs text-slate-500">Revenue & Yield Optimization</p>
                        </div>
                        <div class="text-emerald-600 opacity-0 group-hover:opacity-100 transition-opacity pt-2">
                             <i data-lucide="arrow-right" class="w-5 h-5 mx-auto"></i>
                        </div>
                    </div>
                </a>

                <!-- APEX -->
                <a href="{{ route('ecosystem.apex') }}" id="apex" :class="activeUnit === 'apex' ? 'ring-4 ring-purple-500 shadow-2xl scale-[1.02]' : ''" class="group bg-white p-10 rounded-[40px] shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-purple-50 rounded-bl-[60px] -mr-12 -mt-12 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 text-center space-y-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:rotate-12 transition-transform">
                            <span class="text-white font-extrabold text-sm">APEX</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-slate-900">Eksekusi Visual Premium & Penyelenggaraan Acara (MICE)</h5>
                            <p class="text-xs text-slate-500">Premium Creative Production</p>
                        </div>
                        <div class="text-purple-600 opacity-0 group-hover:opacity-100 transition-opacity pt-2">
                             <i data-lucide="arrow-right" class="w-5 h-5 mx-auto"></i>
                        </div>
                    </div>
                </a>

                <!-- ADDS -->
                <a href="{{ route('ecosystem.adds') }}" id="adds" :class="activeUnit === 'adds' ? 'ring-4 ring-indigo-500 shadow-2xl scale-[1.02]' : ''" class="group bg-white p-10 rounded-[40px] shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-indigo-50 rounded-bl-[60px] -mr-12 -mt-12 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 text-center space-y-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:rotate-12 transition-transform">
                            <span class="text-white font-extrabold text-sm">ADDS</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-slate-900">Rekayasa Perangkat Lunak & Infrastruktur IT</h5>
                            <p class="text-xs text-slate-500">Tech Stack & Engineering</p>
                        </div>
                        <div class="text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity pt-2">
                             <i data-lucide="arrow-right" class="w-5 h-5 mx-auto"></i>
                        </div>
                    </div>
                </a>

                <!-- ABCO -->
                <a href="{{ route('ecosystem.abco') }}" id="abco" :class="activeUnit === 'abco' ? 'ring-4 ring-amber-500 shadow-2xl scale-[1.02]' : ''" class="group bg-white p-10 rounded-[40px] shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-bl-[60px] -mr-12 -mt-12 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 text-center space-y-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:rotate-12 transition-transform">
                            <span class="text-white font-extrabold text-sm">ABCO</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-slate-900">Riset, Strategi, & Perizinan Bisnis</h5>
                            <p class="text-xs text-slate-500">Strategic Advisory</p>
                        </div>
                        <div class="text-amber-600 opacity-0 group-hover:opacity-100 transition-opacity pt-2">
                             <i data-lucide="arrow-right" class="w-5 h-5 mx-auto"></i>
                        </div>
                    </div>
                </a>

                <!-- ARIO -->
                <a href="{{ route('ecosystem.ario') }}" id="ario" :class="activeUnit === 'ario' ? 'ring-4 ring-rose-500 shadow-2xl scale-[1.02]' : ''" class="group bg-white p-10 rounded-[40px] shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-rose-50 rounded-bl-[60px] -mr-12 -mt-12 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="relative z-10 text-center space-y-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg group-hover:rotate-12 transition-transform">
                            <span class="text-white font-extrabold text-sm">ARIO</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-slate-900">Perdagangan Sektor Riil & Pengadaan B2B</h5>
                            <p class="text-xs text-slate-500">Retail Operations</p>
                        </div>
                        <div class="text-rose-600 opacity-0 group-hover:opacity-100 transition-opacity pt-2">
                             <i data-lucide="arrow-right" class="w-5 h-5 mx-auto"></i>
                        </div>
                    </div>
                </a>
            </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/contact"
                    class="inline-flex items-center gap-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold py-6 px-12 rounded-2xl text-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 shadow-2xl">
                    Partner with Our Ecosystem
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
