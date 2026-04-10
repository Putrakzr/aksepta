@extends('layouts.app')



@section('content')
    <!-- Hero Section: The Visionaries -->
    <section class="relative min-h-[60vh] flex items-center pt-32 pb-20 overflow-hidden bg-[#020617]">
        <!-- Premium Background Architecture -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,rgba(16,185,129,0.1)_0%,transparent_50%)]"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_70%,rgba(51,76,158,0.1)_0%,transparent_50%)]"></div>
            <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-emerald-500/10 blur-[100px] rounded-full animate-pulse-slow"></div>
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none" 
                 style="background-image: linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px); background-size: 50px 50px;">
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#020617]"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
            <div class="inline-flex items-center gap-3 px-5 py-2 bg-white/5 backdrop-blur-2xl rounded-full border border-white/10 shadow-2xl animate-fade-in">
                <i data-lucide="users" class="w-4 h-4 text-emerald-400"></i>
                <span class="text-[10px] font-black text-emerald-300 uppercase tracking-[0.4em]">Core Team</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-black text-white leading-tight animate-slide-up opacity-0" style="animation-delay: 200ms; animation-fill-mode: forwards;">
                The Architects of <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-primary-400">Strategic Agility.</span>
            </h1>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed animate-slide-up opacity-0" style="animation-delay: 400ms; animation-fill-mode: forwards;">
                Menggabungkan riset mendalam, keahlian teknis, dan eksekusi kreatif untuk mentransformasi tantangan menjadi keunggulan kompetitif.
            </p>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="py-24 bg-[#020617] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-32">
                @if($founders->count() > 0)
                <!-- Founders Section -->
                <div class="space-y-16">
                    @foreach($founders as $founder)
                    <div class="group relative bg-white/5 backdrop-blur-md rounded-[48px] border border-white/10 p-12 md:p-20 shadow-2xl overflow-hidden transition-all duration-700 hover:border-emerald-500/30">
                        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-emerald-500/5 to-transparent pointer-events-none"></div>
                        <div class="grid lg:grid-cols-2 gap-16 items-center relative z-10">
                            <div class="space-y-8">
                                <div class="space-y-4">
                                    <h2 class="text-4xl md:text-5xl font-display font-black text-white leading-none">{{ $founder->name }}</h2>
                                    <p class="text-xl text-emerald-400 font-bold">{{ $founder->position }}</p>
                                </div>
                                
                                @if($founder->tags)
                                <div class="flex flex-wrap gap-3">
                                    @foreach(explode(',', $founder->tags) as $tag)
                                    <span class="px-4 py-2 bg-emerald-500/10 border border-emerald-500/20 rounded-xl text-emerald-400 text-xs font-bold uppercase tracking-widest">{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                                @endif

                                @if($founder->bio)
                                <p class="text-lg text-slate-400 leading-relaxed italic">
                                    {{ $founder->bio }}
                                </p>
                                @endif
                            </div>
                            <div class="relative">
                                <div class="aspect-square bg-gradient-to-br from-white/10 to-transparent rounded-[40px] flex items-center justify-center border border-white/5 overflow-hidden">
                                    @if($founder->photo)
                                        <img src="{{ $founder->photo }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    @else
                                        <i data-lucide="{{ $founder->icon ?: 'user' }}" class="w-32 h-32 text-slate-700 opacity-50 group-hover:scale-110 transition-transform duration-700"></i>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @if($leadership->count() > 0)
                <!-- Core Leadership Grid -->
                <div class="grid md:grid-cols-2 gap-12">
                    @php 
                        $firstLeader = $leadership->first(); 
                        $otherLeaders = $leadership->skip(1);
                    @endphp

                    <!-- First Leadership Member (Larger Card) -->
                    @if($firstLeader)
                    <div class="p-10 rounded-[48px] bg-white/5 border border-white/10 hover:border-emerald-500/30 transition-all duration-500 group">
                        <div class="space-y-8">
                            <div class="w-16 h-16 bg-emerald-500/20 rounded-2xl flex items-center justify-center text-emerald-400 overflow-hidden">
                                @if($firstLeader->photo)
                                    <img src="{{ $firstLeader->photo }}" class="w-full h-full object-cover">
                                @else
                                    <i data-lucide="{{ $firstLeader->icon ?: 'search' }}" class="w-8 h-8"></i>
                                @endif
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-3xl font-display font-bold text-white">{{ $firstLeader->name }}</h3>
                                @if($firstLeader->tags)
                                <div class="flex flex-wrap gap-2">
                                    @foreach(explode(',', $firstLeader->tags) as $tag)
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-[0.2em] px-2 py-1 bg-white/5 rounded-md italic">{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            @if($firstLeader->bio)
                            <p class="text-slate-400 text-sm leading-relaxed">
                                {{ $firstLeader->bio }}
                            </p>
                            @endif
                        </div>
                    </div>
                    @endif

                    <!-- Other Leadership Members (Smaller Stacked Cards) -->
                    <div class="space-y-12">
                        @foreach($otherLeaders as $leader)
                        <div class="p-8 rounded-[40px] bg-white/5 border border-white/10 hover:border-primary-500/30 transition-all duration-500 group">
                            <div class="flex flex-col sm:flex-row gap-6">
                                <div class="w-14 h-14 bg-primary-500/20 rounded-2xl flex-shrink-0 flex items-center justify-center text-primary-400 overflow-hidden">
                                    @if($leader->photo)
                                        <img src="{{ $leader->photo }}" class="w-full h-full object-cover">
                                    @else
                                        <i data-lucide="{{ $leader->icon ?: 'video' }}" class="w-7 h-7"></i>
                                    @endif
                                </div>
                                <div class="space-y-4">
                                    <h4 class="text-2xl font-bold text-white">{{ $leader->name }}</h4>
                                    @if($leader->tags)
                                    <p class="text-xs text-slate-500 italic">{{ str_replace(',', ' • ', $leader->tags) }}</p>
                                    @endif
                                    @if($leader->bio)
                                    <p class="text-slate-400 text-xs leading-relaxed">
                                        {{ $leader->bio }}
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                @if($support->count() > 0)
                <!-- Support Team Grid -->
                <div class="pt-16 border-t border-white/10">
                    <div class="text-center mb-12">
                        <h4 class="text-sm font-black text-emerald-400 uppercase tracking-[0.5em] mb-4">The Collective Excellence</h4>
                        <h3 class="text-3xl font-display font-bold text-white">Operational & Creative Support</h3>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        @foreach($support as $member)
                        <div class="px-6 py-8 bg-white/5 border border-white/5 rounded-3xl text-center group hover:bg-white/10 transition-all duration-300">
                            <div class="w-10 h-10 {{ $member->photo ? '' : 'bg-slate-800' }} rounded-lg mx-auto mb-4 flex items-center justify-center text-slate-500 group-hover:text-emerald-400 overflow-hidden">
                                @if($member->photo)
                                    <img src="{{ $member->photo }}" class="w-full h-full object-cover">
                                @else
                                    <i data-lucide="{{ $member->icon ?: 'user-check' }}" class="w-5 h-5"></i>
                                @endif
                            </div>
                            <span class="text-white font-bold text-sm tracking-tight">{{ $member->name }}</span>
                            <p class="text-[10px] text-slate-500 mt-1 uppercase tracking-widest">{{ $member->position }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Operational Methodology -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-16">
            <div class="space-y-4">
                <h2 class="text-xs font-black text-emerald-600 uppercase tracking-[0.5em]">METHODOLOGY</h2>
                <h3 class="text-4xl font-display font-bold text-slate-900">How We Synchronize</h3>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <div class="p-10 bg-slate-50 rounded-[40px] space-y-6">
                    <div class="text-emerald-600">
                        <i data-lucide="search" class="w-12 h-12 mx-auto"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 uppercase tracking-widest">1. Insights</h4>
                    <p class="text-slate-600 text-sm">Tim Riset kami menarik data intelijen pasar untuk mendasari setiap keputusan strategis.</p>
                </div>
                <div class="p-10 bg-slate-50 rounded-[40px] space-y-6">
                    <div class="text-emerald-600">
                        <i data-lucide="git-merge" class="w-12 h-12 mx-auto"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 uppercase tracking-widest">2. Alignment</h4>
                    <p class="text-slate-600 text-sm">Pimpinan unit berkolaborasi untuk menyinkronkan keahlian lintas sektor dalam satu komando.</p>
                </div>
                <div class="p-10 bg-slate-50 rounded-[40px] space-y-6">
                    <div class="text-emerald-600">
                        <i data-lucide="rocket" class="w-12 h-12 mx-auto"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 uppercase tracking-widest">3. Execution</h4>
                    <p class="text-slate-600 text-sm">Penyelesaian proyek dengan standar kualitas ultra-premium dan berfokus pada hasil nyata.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-32 bg-slate-900 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(51,76,158,0.2),transparent)]"></div>
        <div class="relative z-10 max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            <h2 class="text-4xl font-display font-black text-white">Join the Collective Excellence.</h2>
            <p class="text-lg text-slate-400">Ingin tahu lebih banyak bagaimana struktur kami dapat berkolaborasi dengan instansi Anda?</p>
            <a href="/contact" class="inline-block px-12 py-6 bg-emerald-500 text-[#020617] font-black rounded-2xl shadow-2xl hover:bg-emerald-400 hover:scale-105 transition-all duration-300">Hubungi Kami Strategis</a>
        </div>
    </section>

    <style>
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(1.1); }
        }
        .animate-pulse-slow {
            animation: pulse-slow 8s ease-in-out infinite;
        }
    </style>
@endsection
