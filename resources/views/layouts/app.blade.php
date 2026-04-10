<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Aksepta') }} - @yield('title', 'Empowering Growth')</title>
    <meta name="description"
        content="Aksepta Strategi Indonesia - Strategic partner for Research, Digital Transformation, and Investment.">

    <!-- Fonts: Outfit for headings, Inter for body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind 4 CDN (Beta/Early Release style) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff2fb',
                            100: '#dee4f7',
                            200: '#b8c4ed',
                            300: '#90a3de',
                            400: '#6b82cc',
                            500: '#4d66b8',
                            600: '#334C9E',
                            700: '#283b7d',
                            800: '#1b2a5c',
                            900: '#101a3d',
                        },
                        brand: {
                            offwhite: '#FAF7F7',
                            orange: '#ff6600',
                            'orange-hover': '#e65c00',
                        },
                        accent: {
                            amber: '#f59e0b',
                            rose: '#f43f5e',
                            violet: '#8b5cf6',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out forwards',
                        'slide-up': 'slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body
    class="antialiased bg-brand-offwhite text-slate-900 font-sans selection:bg-primary-100 selection:text-primary-900">
    <!-- Skip to content -->
    <a href="#main"
        class="sr-only focus:not-sr-only focus:absolute focus:z-[100] focus:p-4 focus:bg-white focus:text-primary-600">Skip
        to content</a>

    @if(!request()->is('admin*'))
        <!-- Navigation -->
        <nav class="sticky top-0 z-[60] w-full transition-all duration-300 glass" x-data="{ 
                mobileMenuOpen: false, 
                scrolled: false,
                servicesOpen: false,
                ecosystemOpen: false,
                portfolioOpen: false,
                mobileServicesOpen: false,
                mobileEcosystemOpen: false,
                mobilePortfolioOpen: false
             }" @scroll.window="scrolled = window.pageYOffset > 20" :class="scrolled ? 'shadow-md py-1' : 'py-2'">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="flex items-center gap-3">
                            <img src="{{ asset('Desain_tanpa_judul-removebg-preview (1).png') }}" alt="Aksepta Logo"
                                class="h-10 w-auto object-contain transition-transform duration-300 hover:scale-105">
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-1 lg:space-x-4">
                        <a href="/"
                            class="px-4 py-2 text-sm font-medium text-slate-700 hover:text-primary-600 rounded-lg transition-colors">{{ site_content('nav_home', 'Beranda') }}</a>

                        <div class="relative" x-data="{ servicesOpen: false }">
                            <button @click="servicesOpen = !servicesOpen; ecosystemOpen = false"
                                @click.away="servicesOpen = false"
                                class="px-4 py-2 text-sm font-bold text-slate-600 hover:text-primary-600 hover:bg-primary-50/50 rounded-xl flex items-center gap-2 transition-all duration-300 active:scale-95 group">
                                {{ site_content('nav_services', 'Services') }}
                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-500"
                                    :class="servicesOpen ? 'rotate-180 text-primary-500' : ''"></i>
                            </button>
                            <div x-show="servicesOpen" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="absolute top-full left-0 mt-1 w-64 bg-white rounded-2xl shadow-2xl border border-slate-100 py-3 overflow-hidden">
                                <a href="{{ route('services.digital-marketing') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="trending-up" class="w-5 h-5 text-primary-500"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            Digital Marketing</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_services_sub1', 'Strategi berorientasi pertumbuhan') }}
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('services.creative-production') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="video" class="w-5 h-5 text-accent-rose"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            Creative Production</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_services_sub2', 'Penceritaan visual') }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('services.website-development') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="code-2" class="w-5 h-5 text-primary-600"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            Website Development</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_services_sub3', 'Aplikasi kelas enterprise') }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('services.training') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="award" class="w-5 h-5 text-accent-amber"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            Training</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_services_sub4', 'Meningkatkan skill tim Anda') }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="relative" x-data="{ ecosystemOpen: false }">
                            <button @click="ecosystemOpen = !ecosystemOpen; servicesOpen = false"
                                @click.away="ecosystemOpen = false"
                                class="px-4 py-2 text-sm font-bold text-slate-600 hover:text-primary-600 hover:bg-primary-50/50 rounded-xl flex items-center gap-2 transition-all duration-300 active:scale-95 group">
                                {{ site_content('nav_ecosystem', 'Ecosystem') }}
                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-500"
                                    :class="ecosystemOpen ? 'rotate-180 text-primary-500' : ''"></i>
                            </button>
                            <div x-show="ecosystemOpen" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="absolute top-full left-0 mt-1 w-64 bg-white rounded-2xl shadow-2xl border border-slate-100 py-3 overflow-hidden">
                                <a href="{{ route('ecosystem.hub') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="globe" class="w-5 h-5 text-primary-500"></i>
                                    <span
                                        class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">Aksepta</span>
                                </a>
                                <a href="{{ route('ecosystem.structure') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="git-branch" class="w-5 h-5 text-slate-500"></i>
                                    <span
                                        class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">{{ site_content('nav_ecosystem_structure', 'Struktur') }}</span>
                                </a>
                                <div
                                    class="px-4 py-2 text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-2 border-t border-slate-50">
                                    Business Hub</div>
                                <div class="grid grid-cols-2 gap-2 p-3">
                                    <a href="{{ route('ecosystem.adma') }}"
                                        class="px-2 py-2 text-[10px] font-bold text-center rounded-lg bg-blue-50 text-blue-700 hover:bg-blue-100 transition-colors">ADMA</a>
                                    <a href="{{ route('ecosystem.apex') }}"
                                        class="px-2 py-2 text-[10px] font-bold text-center rounded-lg bg-purple-50 text-purple-700 hover:bg-purple-100 transition-colors">APEX</a>
                                    <a href="{{ route('ecosystem.adds') }}"
                                        class="px-2 py-2 text-[10px] font-bold text-center rounded-lg bg-indigo-50 text-indigo-700 hover:bg-indigo-100 transition-colors">ADDS</a>
                                    <a href="{{ route('ecosystem.admo') }}"
                                        class="px-2 py-2 text-[10px] font-bold text-center rounded-lg bg-emerald-50 text-emerald-700 hover:bg-emerald-100 transition-colors">ADMO</a>
                                    <a href="{{ route('ecosystem.abco') }}"
                                        class="px-2 py-2 text-[10px] font-bold text-center rounded-lg bg-amber-50 text-amber-700 hover:bg-amber-100 transition-colors">ABCO</a>
                                    <a href="{{ route('ecosystem.ario') }}"
                                        class="px-2 py-2 text-[10px] font-bold text-center rounded-lg bg-rose-50 text-rose-700 hover:bg-rose-100 transition-colors">ARIO</a>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Dropdown -->
                        <div class="relative" x-data="{ portfolioOpen: false }">
                            <button @click="portfolioOpen = !portfolioOpen; servicesOpen = false; ecosystemOpen = false"
                                @click.away="portfolioOpen = false"
                                class="px-4 py-2 text-sm font-bold text-slate-600 hover:text-primary-600 hover:bg-primary-50/50 rounded-xl flex items-center gap-2 transition-all duration-300 active:scale-95 group">
                                {{ site_content('nav_portfolio', 'Portfolio') }}
                                <i data-lucide="chevron-down"
                                    class="w-4 h-4 transition-transform duration-500 group-hover:text-primary-500"
                                    :class="portfolioOpen ? 'rotate-180 text-primary-500' : ''"></i>
                            </button>
                            <div x-show="portfolioOpen" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="absolute top-full left-0 mt-1 w-64 bg-white rounded-2xl shadow-2xl border border-slate-100 py-3 overflow-hidden">
                                <a href="{{ route('portfolio.index') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="briefcase" class="w-5 h-5 text-slate-500"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            {{ site_content('nav_portfolio_item1', 'Karya Kami') }}</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_portfolio_sub1', 'Keunggulan operasional') }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('portfolio.articles') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="book-open" class="w-5 h-5 text-primary-500"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            {{ site_content('nav_portfolio_item2', 'Artikel') }}</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_portfolio_sub2', 'Wawasan strategis') }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('portfolio.gallery') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="image" class="w-5 h-5 text-rose-500"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            {{ site_content('nav_portfolio_item3', 'Galeri') }}</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_portfolio_sub3', 'Showcase kreatif') }}</div>
                                    </div>
                                </a>
                                <a href="{{ route('portfolio.documentation') }}"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-primary-50 transition-colors group">
                                    <i data-lucide="file-text" class="w-5 h-5 text-indigo-500"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-slate-900 group-hover:text-primary-600">
                                            {{ site_content('nav_portfolio_item4', 'Dokumentasi') }}</div>
                                        <div class="text-xs text-slate-500">
                                            {{ site_content('nav_portfolio_sub4', 'Cetak biru teknis') }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <a href="/contact"
                            class="ml-4 px-6 py-2.5 bg-brand-orange text-white text-sm font-bold rounded-xl hover:bg-brand-orange-hover hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 active:scale-95">
                            {{ site_content('nav_get_started', 'Get Started') }}
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button @click="mobileMenuOpen = !mobileMenuOpen"
                            class="p-2 rounded-xl text-slate-600 hover:bg-slate-100 transition-colors">
                            <i x-show="!mobileMenuOpen" data-lucide="menu" class="w-6 h-6"></i>
                            <i x-show="mobileMenuOpen" data-lucide="x" class="w-6 h-6"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Panel -->
            <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                class="md:hidden bg-white border-t border-slate-100 overflow-hidden">
                <div class="px-4 pt-2 pb-6 space-y-1">
                    <a href="/"
                        class="block px-4 py-3 text-base font-semibold text-slate-900 hover:bg-primary-50 rounded-xl">Home</a>

                    <!-- Mobile Services Dropdown -->
                    <div class="space-y-1">
                        <button @click="mobileServicesOpen = !mobileServicesOpen"
                            class="w-full flex items-center justify-between px-4 py-3 text-base font-semibold text-slate-900 hover:bg-primary-50 rounded-xl">
                            Our Services
                            <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"
                                :class="mobileServicesOpen ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="mobileServicesOpen" x-collapse class="pl-4 pr-2 space-y-1">
                            <a href="{{ route('services.digital-marketing') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="trending-up" class="w-4 h-4 text-primary-500"></i> Digital Marketing
                            </a>
                            <a href="{{ route('services.creative-production') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="video" class="w-4 h-4 text-accent-rose"></i> Creative Production
                            </a>
                            <a href="{{ route('services.website-development') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="code-2" class="w-4 h-4 text-primary-600"></i> Web Development
                            </a>
                            <a href="{{ route('services.training') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="award" class="w-4 h-4 text-accent-amber"></i> Training
                            </a>
                        </div>
                    </div>

                    <!-- Mobile Ecosystem Dropdown -->
                    <div class="space-y-1">
                        <button @click="mobileEcosystemOpen = !mobileEcosystemOpen"
                            class="w-full flex items-center justify-between px-4 py-3 text-base font-semibold text-slate-900 hover:bg-primary-50 rounded-xl">
                            Ecosystem
                            <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"
                                :class="mobileEcosystemOpen ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="mobileEcosystemOpen" x-collapse class="pl-4 pr-2 space-y-2">
                            <a href="{{ route('ecosystem.hub') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="globe" class="w-4 h-4 text-primary-500"></i> Aksepta Hub
                            </a>
                            <div class="grid grid-cols-2 gap-2 p-2">
                                <a href="{{ route('ecosystem.adma') }}"
                                    class="p-2 bg-slate-50 rounded-lg text-[10px] font-bold text-center">ADMA</a>
                                <a href="{{ route('ecosystem.admo') }}"
                                    class="p-2 bg-slate-50 rounded-lg text-[10px] font-bold text-center">ADMO</a>
                                <a href="{{ route('ecosystem.apex') }}"
                                    class="p-2 bg-slate-50 rounded-lg text-[10px] font-bold text-center">APEX</a>
                                <a href="{{ route('ecosystem.adds') }}"
                                    class="p-2 bg-slate-50 rounded-lg text-[10px] font-bold text-center">ADDS</a>
                                <a href="{{ route('ecosystem.abco') }}"
                                    class="p-2 bg-slate-50 rounded-lg text-[10px] font-bold text-center">ABCO</a>
                                <a href="{{ route('ecosystem.ario') }}"
                                    class="p-2 bg-slate-50 rounded-lg text-[10px] font-bold text-center">ARIO</a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Portfolio Dropdown -->
                    <div class="space-y-1">
                        <button @click="mobilePortfolioOpen = !mobilePortfolioOpen"
                            class="w-full flex items-center justify-between px-4 py-3 text-base font-semibold text-slate-900 hover:bg-primary-50 rounded-xl">
                            Portfolio
                            <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"
                                :class="mobilePortfolioOpen ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="mobilePortfolioOpen" x-collapse class="pl-4 pr-2 space-y-1">
                            <a href="{{ route('portfolio.index') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="briefcase" class="w-4 h-4 text-slate-500"></i> Our Work
                            </a>
                            <a href="{{ route('portfolio.articles') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="book-open" class="w-4 h-4 text-primary-500"></i> Articles
                            </a>
                            <a href="{{ route('portfolio.gallery') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="image" class="w-4 h-4 text-rose-500"></i> Gallery
                            </a>
                            <a href="{{ route('portfolio.documentation') }}"
                                class="flex items-center gap-3 p-3 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                                <i data-lucide="file-text" class="w-4 h-4 text-indigo-500"></i> Documentation
                            </a>
                        </div>
                    </div>

                    <div class="px-4 pt-4">
                        <a href="/contact"
                            class="block w-full py-4 bg-brand-orange text-white text-center font-bold rounded-2xl shadow-lg hover:bg-brand-orange-hover transition-colors">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    @endif

    <!-- Main Content -->
    <main id="main" class="min-h-[60vh]">
        @yield('content')
    </main>

    @if(!request()->is('admin*'))
        <!-- Footer -->
        <footer class="bg-slate-900 text-slate-300 pt-20 pb-10 mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    <div class="space-y-6">
                        <a href="/" class="flex items-center gap-2">
                            <img src="{{ asset('Desain_tanpa_judul-removebg-preview (1).png') }}" alt="Aksepta Logo"
                                class="h-12 w-auto object-contain">
                        </a>
                        <p class="text-sm leading-relaxed text-slate-400">
                            {{ site_content('footer_about', 'Bridging the gap between business potential and digital reality. We provide expert research and innovative digital solutions.') }}
                        </p>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-10 h-10 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all duration-300">
                                <i data-lucide="linkedin" class="w-5 h-5"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all duration-300">
                                <i data-lucide="instagram" class="w-5 h-5"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all duration-300">
                                <i data-lucide="twitter" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-white font-bold mb-6 font-display">
                            {{ site_content('footer_heading_services', 'Layanan') }}</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a href="/services/digital-marketing"
                                    class="hover:text-primary-400 transition-colors">Digital Marketing</a></li>
                            <li><a href="/services/creative-production"
                                    class="hover:text-primary-400 transition-colors">Creative Production</a></li>
                            <li><a href="/services/website-development" class="hover:text-primary-400 transition-colors">Web
                                    Development</a></li>
                            <li><a href="/services/training-certification"
                                    class="hover:text-primary-400 transition-colors">Training & Certification</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-white font-bold mb-6 font-display">
                            {{ site_content('footer_heading_company', 'Perusahaan') }}</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a href="/ecosystem" class="hover:text-primary-400 transition-colors">The Ecosystem</a></li>
                            <li><a href="/portfolio" class="hover:text-primary-400 transition-colors">Our Portfolio</a></li>
                            <li><a href="/contact" class="hover:text-primary-400 transition-colors">Contact Support</a></li>
                            <li><a href="#" class="hover:text-primary-400 transition-colors">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-white font-bold mb-6 font-display">
                            {{ site_content('footer_heading_contact', 'Kontak') }}</h4>
                        <ul class="space-y-4 text-sm">
                            <li class="flex items-start gap-3">
                                <i data-lucide="mail" class="w-5 h-5 text-primary-500 flex-shrink-0"></i>
                                <span>hello@aksepta.co.id</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="phone" class="w-5 h-5 text-primary-500 flex-shrink-0"></i>
                                <span>+62 21 0000 0000</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="map-pin" class="w-5 h-5 text-primary-500 flex-shrink-0"></i>
                                <span>Jakarta, Indonesia</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 text-center">
                    <p>&copy; {{ date('Y') }}
                        {{ site_content('footer_copyright', 'PT. Aksepta Strategi Indonesia. All rights reserved.') }}</p>
                    <p>Built with ❤️ by Aksepta Dev Solutions</p>
                </div>
            </div>
        </footer>
    @endif

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>

</html>