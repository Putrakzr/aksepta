@extends('layouts.app')



@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_-20%,#f43f5e33,transparent_70%)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8 animate-fade-in">
            <div
                class="inline-flex items-center gap-3 px-4 py-2 bg-rose-500/10 rounded-full border border-rose-500/20 mb-4">
                <i data-lucide="image" class="w-4 h-4 text-rose-400"></i>
                <span class="text-xs font-bold text-rose-400 uppercase tracking-widest">Showcase Visual</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">Galeri <br><span
                    class="text-rose-500 text-glow-rose">Ekselensi Kreatif</span></h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Pilihan kurasi dari produksi visual berdampak tinggi, kampanye sinematik, dan intervensi seni digital kami.
            </p>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($galleries as $gallery)
                    <div
                        class="group relative aspect-[4/5] rounded-[40px] overflow-hidden shadow-sm hover:shadow-3xl transition-all duration-700 border border-slate-100 cursor-pointer">
                        <img src="{{ asset($gallery->image) }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s] ease-out">

                        <!-- Sophisticated Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent opacity-40 group-hover:opacity-80 transition-opacity duration-700">
                        </div>

                        <div
                            class="absolute inset-0 p-10 flex flex-col justify-end translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                            <div class="space-y-4 opacity-0 group-hover:opacity-100 transition-all duration-700 delay-100">
                                <div
                                    class="inline-flex items-center gap-2 px-3 py-1 bg-rose-500/20 backdrop-blur-md rounded-full border border-rose-500/30">
                                    <span class="w-1.5 h-1.5 bg-rose-500 rounded-full animate-pulse"></span>
                                    <span class="text-[10px] font-black text-rose-300 uppercase tracking-[0.2em]">Produksi
                                        Kreatif</span>
                                </div>
                                <h4 class="text-2xl font-display font-bold text-white leading-tight">{{ $gallery->title }}</h4>

                                <div
                                    class="pt-4 flex items-center gap-2 text-rose-400 font-bold text-xs uppercase tracking-widest">
                                    <span>Lihat Detail</span>
                                    <i data-lucide="arrow-right"
                                        class="w-4 h-4 translate-x-[-10px] group-hover:translate-x-0 transition-transform duration-700"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .text-glow-rose {
            text-shadow: 0 0 20px rgba(244, 63, 94, 0.4);
        }
    </style>
@endsection