@extends('layouts.app')

@section('title', 'PT. Aksepta Strategi Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_-20%,#3b82f633,transparent_70%)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8 animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight">Strategic Insights</h1>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">Exploring the intersection of technology, design, and
                business strategy.</p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($articles as $article)
                    <div
                        class="group bg-white rounded-[40px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100 flex flex-col">
                        <!-- Thumbnail with Overlay Badge -->
                        <div class="relative aspect-video overflow-hidden">
                            <img src="{{ $article->image }}" alt="{{ $article->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                            <div class="absolute top-6 left-6">
                                <span
                                    class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-black text-white uppercase tracking-[0.2em] border border-white/20 shadow-xl">
                                    {{ $article->type === 'link' ? 'Pranala Luar' : 'Studi Kasus' }}
                                </span>
                            </div>
                        </div>

                        <!-- Content Details -->
                        <div class="p-8 md:p-10 flex-1 flex flex-col space-y-6">
                            <div class="space-y-4">
                                <div
                                    class="flex items-center gap-3 text-[10px] font-black text-primary-600 uppercase tracking-widest">
                                    <i data-lucide="calendar" class="w-3 h-3"></i>
                                    {{ $article->created_at->format('M d, Y') }}
                                </div>
                                <h3
                                    class="text-2xl font-display font-bold text-slate-900 group-hover:text-primary-600 transition-colors line-clamp-2 leading-tight">
                                    {{ $article->title }}
                                </h3>
                                <p class="text-slate-500 leading-relaxed text-sm line-clamp-3 font-medium">
                                    {{ $article->meta }}
                                </p>
                            </div>

                            <!-- CTA Button -->
                            <div class="pt-6 mt-auto">
                                <a href="{{ $article->type === 'link' ? $article->external_url : route('portfolio.articles.show', $article) }}"
                                    {{ $article->type === 'link' ? 'target="_blank"' : '' }}
                                    class="inline-flex items-center gap-3 w-full justify-center px-8 py-4 bg-slate-900 text-white rounded-2xl font-bold text-sm hover:bg-primary-600 hover:scale-105 transition-all shadow-lg hover:shadow-primary-600/30">
                                    {{ $article->type === 'link' ? 'Kunjungi Artikel' : 'Baca Selengkapnya' }}
                                    <i data-lucide="{{ $article->type === 'link' ? 'external-link' : 'arrow-right' }}"
                                        class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Placeholder -->
            <div class="mt-20 flex justify-center">
                <nav class="flex items-center gap-2">
                    <a href="#"
                        class="w-12 h-12 rounded-xl bg-primary-600 text-white flex items-center justify-center font-bold">1</a>
                </nav>
            </div>
        </div>
    </section>

    <style>
        .text-glow {
            text-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
        }
    </style>
@endsection