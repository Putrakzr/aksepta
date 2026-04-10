@extends('layouts.app')



@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_-20%,#6366f133,transparent_70%)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8 animate-fade-in">
            <div
                class="inline-flex items-center gap-3 px-4 py-2 bg-indigo-500/10 rounded-full border border-indigo-500/20 mb-4">
                <i data-lucide="file-text" class="w-4 h-4 text-indigo-400"></i>
                <span class="text-xs font-bold text-indigo-400 uppercase tracking-widest">Pusat Teknis</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">Dokumentasi <br><span
                    class="text-indigo-500 text-glow-indigo">Proyek Strategis</span></h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Spesifikasi teknis mendalam, cetak biru arsitektur, dan standar implementasi untuk berbagai intervensi
                unggulan kami.
            </p>
        </div>
    </section>

    <!-- Documentation Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-4 gap-12">
                <!-- Sidebar Navigation -->
                <aside class="lg:col-span-1 space-y-8">
                    <div class="space-y-4">
                        <h4 class="text-xs font-black text-slate-400 uppercase tracking-widest">Kategori</h4>
                        <nav class="space-y-2">
                            <a href="#"
                                class="block px-4 py-3 rounded-xl bg-indigo-50 text-indigo-700 font-bold border border-indigo-100 transition-all">Semua
                                Dokumen</a>
                            <a href="#"
                                class="block px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 font-medium transition-all">Arsitektur</a>
                            <a href="#"
                                class="block px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 font-medium transition-all">Standar</a>
                            <a href="#"
                                class="block px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 font-medium transition-all">Panduan</a>
                        </nav>
                    </div>

                    <div class="p-8 bg-slate-900 rounded-3xl text-white space-y-4">
                        <i data-lucide="help-circle" class="w-8 h-8 text-indigo-400"></i>
                        <h5 class="font-bold">Butuh Bantuan?</h5>
                        <p class="text-xs text-slate-400">Tidak menemukan spesifikasi teknis yang Anda cari?</p>
                        <a href="/contact" class="text-xs font-bold text-indigo-400 hover:underline">Hubungi Tim Teknis</a>
                    </div>
                </aside>

                <!-- Doc Grid -->
                <div class="lg:col-span-3 space-y-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach ($documentations as $doc)
                            <div
                                class="p-8 bg-slate-50 border border-slate-100 rounded-[32px] hover:bg-white hover:shadow-2xl transition-all duration-500 group">
                                <div
                                    class="w-12 h-12 bg-white rounded-2xl shadow-md flex items-center justify-center text-indigo-600 mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                                    <i data-lucide="file-code" class="w-6 h-6"></i>
                                </div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">{{ $doc->title }}</h4>
                                <p class="text-sm text-slate-500 leading-relaxed mb-6">Dokumentasi teknis untuk infrastruktur
                                    digital Aksepta.</p>
                                <div class="flex items-center justify-between pt-6 border-t border-slate-200">
                                    <span
                                        class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ $doc->date }}</span>
                                    <a href="{{ $doc->link }}"
                                        class="w-10 h-10 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all">
                                        <i data-lucide="download" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .text-glow-indigo {
            text-shadow: 0 0 20px rgba(99, 102, 241, 0.4);
        }
    </style>
@endsection