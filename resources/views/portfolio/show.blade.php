@extends('layouts.app')

@section('title', $article->title)

@section('content')
<!-- Import Playfair Display Font for Magazine Feel -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Lora:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<div class="min-h-screen bg-[#F3F3F1] py-20 px-4">
    <!-- Main Magazine Container -->
    <article class="max-w-[1000px] mx-auto bg-white shadow-[0_0_50px_rgba(0,0,0,0.05)] border border-slate-100 p-8 md:p-16 relative overflow-hidden">
        
        <!-- Magazine Top Header -->
        <div class="border-t-2 border-b border-slate-900 py-2 mb-12 flex justify-between items-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">
            <span>ARTIKEL MODE // AKSEPTA INSIGHT</span>
            <span>LICERIA & CO. // VOL. 2026</span>
        </div>

        <!-- Title & Hero Section Grid -->
        <div class="grid md:grid-cols-12 gap-12 mb-12">
            <!-- Left Side: Title & Lead Text -->
            <div class="md:col-span-7 space-y-8">
                <h1 class="text-5xl md:text-7xl font-['Playfair_Display'] font-black text-slate-900 leading-[1.1] tracking-tight">
                    {{ $article->title }}
                </h1>

                <!-- Red Subtitle Bar -->
                <div class="bg-[#964B4B] text-white px-6 py-3 text-xl font-['Playfair_Display'] font-bold inline-block w-full">
                    {{ $article->meta }}
                </div>

                <div class="font-['Lora'] text-lg text-slate-700 leading-relaxed text-justify first-letter:text-7xl first-letter:font-black first-letter:mr-3 first-letter:float-left first-letter:text-slate-900">
                    @php 
                        $paragraphs = explode("\n", $article->content);
                        $firstPara = array_shift($paragraphs);
                    @endphp
                    {!! nl2br(e($firstPara)) !!}
                </div>
            </div>

            <!-- Right Side: Vertical Main Image -->
            <div class="md:col-span-5">
                <div class="relative h-full min-h-[500px]">
                    <img src="{{ asset($article->image) }}" class="w-full h-full object-cover grayscale-[20%] hover:grayscale-0 transition-all duration-700 shadow-xl">
                </div>
            </div>
        </div>

        <!-- Middle Section: Content & Image 2 -->
        <div class="grid md:grid-cols-12 gap-12 mb-12">
            <!-- Content Continue -->
            <div class="md:col-span-7 font-['Lora'] text-lg text-slate-700 leading-relaxed text-justify space-y-6">
                @foreach($paragraphs as $para)
                    @if(trim($para))
                        <p>{!! nl2br(e($para)) !!}</p>
                    @endif
                @endforeach
            </div>

            <!-- Image 2 & 3 Side -->
            <div class="md:col-span-5 space-y-12">
                @if($article->image_2)
                <div class="relative pt-4">
                    <!-- Red decorative box behind image -->
                    <div class="absolute -top-4 -right-4 w-full h-full bg-[#964B4B]/10 -z-10"></div>
                    <img src="{{ asset($article->image_2) }}" class="w-full aspect-square object-cover shadow-2xl border-4 border-white">
                </div>
                @endif

                @if($article->image_3)
                <div class="relative">
                    <img src="{{ asset($article->image_3) }}" class="w-full aspect-[3/4] object-cover shadow-xl grayscale">
                    <p class="mt-4 font-['Lora'] italic text-sm text-slate-500 border-l-2 border-[#964B4B] pl-4">
                        "Eksplorasi visual dan dokumentasi strategis dalam setiap langkah operasional Aksepta."
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

<style>
    /* Magazine specific overrides */
    p {
        hyphens: auto;
    }
</style>
@endsection