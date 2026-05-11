@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="min-h-screen bg-white">
        <!-- Premium Hero Header -->
        <header class="relative h-[70vh] flex items-end pb-24 overflow-hidden">
            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}"
                class="absolute inset-0 w-full h-full object-cover scale-105 animate-slow-zoom">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
            
            <!-- Abstract Shapes for Premium Feel -->
            <div class="absolute top-0 right-0 w-1/3 h-full bg-primary-600/10 blur-[120px] rounded-full translate-x-1/2 -translate-y-1/2"></div>

            <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="space-y-8 animate-fade-in-up">
                    <a href="{{ route('portfolio.articles') }}"
                        class="inline-flex items-center gap-3 px-6 py-3 bg-white/10 backdrop-blur-xl rounded-2xl text-white text-xs font-black uppercase tracking-[0.2em] border border-white/20 hover:bg-primary-600 hover:border-primary-500 transition-all mb-4 group shadow-2xl">
                        <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
                        Kembali ke Artikel
                    </a>

                    <div class="flex flex-col gap-6">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-emerald-500/20 backdrop-blur-md rounded-full border border-emerald-500/30 text-emerald-400 text-[10px] font-black uppercase tracking-[0.3em] w-fit">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                            {{ $article->meta }}
                        </div>

                        <h1 class="text-5xl md:text-7xl font-display font-black text-white leading-[1.1] max-w-4xl tracking-tight text-glow">
                            {{ $article->title }}
                        </h1>

                        <div class="flex items-center gap-8 pt-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white">
                                    <i data-lucide="calendar" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Diterbitkan pada</p>
                                    <p class="text-white font-bold text-sm">{{ $article->created_at->format('d F, Y') }}</p>
                                </div>
                            </div>
                            <div class="h-10 w-px bg-white/10"></div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white">
                                    <i data-lucide="user" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Penulis</p>
                                    <p class="text-white font-bold text-sm">Aksepta Strategy Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Article Content and Mosaic Gallery -->
        <main class="relative bg-white -mt-16 rounded-t-[60px] z-20 shadow-[0_-20px_50px_rgba(0,0,0,0.1)]">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                
                <!-- Main Content -->
                <div class="grid lg:grid-cols-12 gap-16">
                    <div class="lg:col-span-8 space-y-12">
                        <div class="prose prose-slate prose-xl max-w-none">
                            <div class="text-slate-800 leading-[2.2] text-xl font-medium whitespace-pre-wrap selection:bg-primary-100">
                                {!! nl2br(e($article->content)) !!}
                            </div>
                        </div>

                        <!-- Visual Mosaic Gallery -->
                        @if($article->image_2 || $article->image_3)
                        <div class="space-y-10 pt-16">
                            <div class="flex items-center gap-6">
                                <h3 class="text-2xl font-display font-black text-slate-900 tracking-tight">Eksplorasi Visual.</h3>
                                <div class="h-px flex-1 bg-slate-100"></div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-8">
                                @if($article->image_2)
                                <div class="relative group rounded-[40px] overflow-hidden shadow-2xl border border-slate-100 aspect-[4/3]">
                                    <img src="{{ asset($article->image_2) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s] ease-out">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                        <p class="text-white font-bold text-xs uppercase tracking-widest">Visual Asset 02</p>
                                    </div>
                                </div>
                                @endif

                                @if($article->image_3)
                                <div class="relative group rounded-[40px] overflow-hidden shadow-2xl border border-slate-100 aspect-[4/3]">
                                    <img src="{{ asset($article->image_3) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s] ease-out">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                        <p class="text-white font-bold text-xs uppercase tracking-widest">Visual Asset 03</p>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <!-- Final Featured Banner (Optional Full Width) -->
                            <div class="w-full aspect-video rounded-[48px] overflow-hidden shadow-2xl border border-slate-100 bg-slate-50 relative group">
                                <img src="{{ asset($article->image) }}" class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-[2s]">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="px-8 py-4 bg-white/10 backdrop-blur-2xl rounded-2xl border border-white/20 text-white font-black uppercase tracking-[0.5em] text-[10px]">Featured Insight</div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- Sidebar Info -->
                    <aside class="lg:col-span-4">
                        <div class="sticky top-32 space-y-8">
                            <div class="p-10 bg-slate-50 rounded-[48px] border border-slate-100 space-y-8 shadow-sm">
                                <div class="space-y-6">
                                    <div class="w-20 h-20 rounded-3xl bg-primary-600 flex items-center justify-center text-white shadow-xl shadow-primary-600/20">
                                        <i data-lucide="layers" class="w-10 h-10"></i>
                                    </div>
                                    <div class="space-y-2">
                                        <h4 class="text-lg font-black text-slate-900">Aksepta Strategy</h4>
                                        <p class="text-sm text-slate-500 leading-relaxed font-bold">Memberikan perspektif baru dalam transformasi operasional dan kreativitas digital.</p>
                                    </div>
                                </div>

                                <div class="pt-8 border-t border-slate-200 space-y-4">
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Bagikan Wawasan</p>
                                    <div class="flex gap-4">
                                        <button class="w-12 h-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-primary-600 hover:text-white hover:scale-110 transition-all shadow-sm">
                                            <i data-lucide="share-2" class="w-5 h-5"></i>
                                        </button>
                                        <button class="w-12 h-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-primary-600 hover:text-white hover:scale-110 transition-all shadow-sm">
                                            <i data-lucide="linkedin" class="w-5 h-5"></i>
                                        </button>
                                        <button class="w-12 h-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-primary-600 hover:text-white hover:scale-110 transition-all shadow-sm">
                                            <i data-lucide="copy" class="w-5 h-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Newsletter / CTA -->
                            <div class="p-10 bg-slate-900 rounded-[48px] text-white space-y-6 relative overflow-hidden shadow-2xl">
                                <div class="absolute inset-0 bg-gradient-to-br from-primary-600/30 to-transparent"></div>
                                <div class="relative z-10 space-y-6">
                                    <h4 class="text-xl font-bold font-display">Ingin diskusi strategi?</h4>
                                    <p class="text-sm text-slate-400 leading-relaxed font-medium">Tim ahli kami siap membantu mentransformasi tantangan bisnis Anda.</p>
                                    <a href="/contact" class="block w-full py-4 bg-white text-slate-900 rounded-2xl font-black text-sm text-center hover:scale-105 transition-all shadow-xl">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
    </div>

    <style>
        .animate-slow-zoom {
            animation: slowZoom 20s ease-in-out infinite alternate;
        }
        @keyframes slowZoom {
            from { transform: scale(1); }
            to { transform: scale(1.15); }
        }
        .text-glow {
            text-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
        }
        .animate-fade-in-up {
            animation: fadeInUp 1.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endsection