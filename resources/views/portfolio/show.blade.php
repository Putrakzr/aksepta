@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="min-h-screen bg-white">
        <!-- Hero Header -->
        <header class="relative h-[40vh] min-h-[300px] flex items-end pb-12 overflow-hidden">
            <img src="{{ $article->image }}" alt="{{ $article->title }}"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>

            <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="space-y-6 animate-fade-in-up">
                    <a href="{{ route('portfolio.articles') }}"
                        class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-xl text-white text-sm font-bold border border-white/20 hover:bg-white/20 transition-all mb-4">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i>
                        Kembali ke Artikel
                    </a>

                    <div
                        class="inline-flex items-center gap-3 px-4 py-1.5 bg-primary-500/20 backdrop-blur-md rounded-full border border-primary-500/30 text-primary-400 text-xs font-black uppercase tracking-widest">
                        <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                        {{ $article->meta }}
                    </div>

                    <h1
                        class="text-4xl md:text-6xl font-display font-black text-white leading-tight max-w-4xl tracking-tight">
                        {{ $article->title }}
                    </h1>

                    <div class="flex items-center gap-6 text-slate-300 text-sm font-bold">
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            {{ $article->created_at->format('d M, Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Body -->
        <main class="py-24 relative">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-slate prose-lg max-w-none">
                    <div class="text-slate-700 leading-[2] text-lg font-medium whitespace-pre-wrap">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </div>

                <!-- Footer Action -->
                <div
                    class="mt-24 pt-12 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-primary-600 flex items-center justify-center text-white font-black">
                            A</div>
                        <div>
                            <div class="font-bold text-slate-900 leading-tight">Aksepta Strategy Team</div>
                            <div class="text-sm text-slate-500 font-bold">Insight & Research Division</div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <button
                            class="w-12 h-12 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all text-slate-600">
                            <i data-lucide="share-2" class="w-5 h-5"></i>
                        </button>
                        <button
                            class="w-12 h-12 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all text-slate-600">
                            <i data-lucide="bookmark" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <style>
        .animate-fade-in-up {
            animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection