@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <!-- Import Playfair Display Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Lora:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <div class="min-h-screen bg-[#F3F3F1] py-20 px-4">
        <article
            class="max-w-[1000px] mx-auto bg-white shadow-[0_0_50px_rgba(0,0,0,0.05)] border border-slate-100 p-8 md:p-16 relative overflow-hidden">

            <!-- Magazine Top Header -->
            <div
                class="border-t-2 border-b border-slate-900 py-2 mb-12 flex justify-between items-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">
                <span>ARTIKEL MODE // AKSEPTA INSIGHT</span>
                <span>AKSEPTA & CO. // VOL. 2026</span>
            </div>

            <!-- Title & Stacked Photos Section -->
            <div class="grid md:grid-cols-12 gap-12 mb-12">
                <!-- Left Side: Title & Content -->
                <div class="md:col-span-7 space-y-8">
                    <h1
                        class="text-5xl md:text-7xl font-['Playfair_Display'] font-black text-slate-900 leading-[1.1] tracking-tight">
                        {{ $article->title }}
                    </h1>

                    <!-- Red Subtitle Bar -->
                    <div
                        class="bg-[#964B4B] text-white px-6 py-3 text-xl font-['Playfair_Display'] font-bold inline-block w-full">
                        {{ $article->meta }}
                    </div>

                    <div
                        class="font-['Lora'] text-lg text-slate-700 leading-relaxed text-justify first-letter:text-7xl first-letter:font-black first-letter:mr-3 first-letter:float-left first-letter:text-slate-900">
                        @php 
                                                    $paragraphs = explode("\n", $article->content);
                            $firstPara = array_shift($paragraphs);
                        @endphp
                        {!! nl2br(e($firstPara)) !!}
                    </div>

                <!-- Sisa Konten di bawah dropcap -->
            <div class="font-['Lora'] text-lg text-slate-700 leading-relaxed text-justify space-y-6 pt-4">
                        @foreach($paragraphs as $para)
                            @if(trim($para))
                                <p>{!! nl2br(e($para)) !!}</p>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Right Side: Two Photos Stacked (Atas-Bawah) -->
                <div class="md:col-span-5 flex flex-col gap-8">
                    <!-- Fot
                          o  1 (Atas) -->
                    <div class="relative w-full aspect-[3/4] overflow-hidden shadow-xl">
                        <img src="{{ asset($article->image) }}" class="w-full h-full object-cover">
                        <div class="absolute bottom-4 right-4 bg-white/20 backdrop-blur-md px-3 py-1 text-[8px] font-black text-white uppercase tracking-widest">
                            Fig. 01
                        </div>
                    </div>

                    <!-- Foto 2 (Bawah) -->

                                           @if($article->image_2)
                                            <div class="relative w-full aspect-[3/4] overflow-hidden shadow-xl">
                                                <img src="{{ asset($article->image_2) }}" class="w-full h-full object-cover grayscale-[30%] hover:grayscale-0 transition-all duration-700">
                                                <div class="absolute bottom-4 right-4 bg-white/20 backdrop-blur-md px-3 py-1 text-[8px] font-black text-white uppercase tracking-widest">
                                                    Fig. 02
                                                </div>
                                            </div>
                                        @endif

                    <!-- Foto 3 (Jika ada) -->

                                           @if($article->image_3)
                                            <div class="relative pt-4 border-t border-slate-100">
                                                <img src="{{ asset($article->image_3) }}" class="w-full aspect-video object-cover shadow-sm grayscale">
                                                <p class="mt-4 font-['Lora'] italic text-xs text-slate-400">
                                                    *Dokumentasi tambahan terkait "{{ $article->title }}"
                                                </p>
                                            </div>
                                        @endif
                </div>
            </div>
            <!-- Bottom Red Footer Bar -->
            <div class="h-4 bg-[#964B4B] -mx-8 md:-mx-16 mt-20"></div>

            <!-- Page Number / Date -->
            <div class="mt-6 flex justify-between text-[10px] font-bold text-slate-400 uppercase tracking-widest font-mono">
                <span>{{ $article->created_at->format('M Y') }}</span>
                <span>Page 01</span>
            </div>
        </article>
    </div>
@endsection