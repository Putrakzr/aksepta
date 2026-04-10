@extends('layouts.app')

@section('title', 'Admin Dashboard - Aksepta')

@section('content')
<div class="h-screen bg-slate-50 flex overflow-hidden" x-data="{ sidebarOpen: window.innerWidth > 768 }">
    <!-- Mobile Backdrop -->
    <div x-show="sidebarOpen" 
         class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 md:hidden"
         @click="sidebarOpen = false"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"></div>

    <!-- Sidebar -->
    <div class="bg-slate-900 text-slate-400 flex-shrink-0 transition-all duration-300 flex flex-col fixed inset-y-0 left-0 z-50 md:relative md:translate-x-0"
         :class="sidebarOpen ? 'translate-x-0 w-72' : '-translate-x-full md:translate-x-0 md:w-20'">
        
        <div class="p-6 flex items-center gap-3 border-b border-slate-800/50">
            <div class="w-8 h-8 rounded-lg bg-primary-600 flex items-center justify-center text-white font-bold">A</div>
            <span class="text-white font-bold tracking-tight" x-show="sidebarOpen">Aksepta Admin</span>
            <!-- Mobile Close Button -->
            <button @click="sidebarOpen = false" class="md:hidden ml-auto text-slate-400 hover:text-white">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </div>

        <nav class="flex-1 p-4 space-y-8 overflow-y-auto">
            @foreach($navigation as $group => $items)
            <div>
                <h3 class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-4" x-show="sidebarOpen">
                    {{ $group }}
                </h3>
                <div class="space-y-1">
                    @foreach($items as $item)
                    <a href="{{ isset($item['route']) ? route($item['route']) : '#' }}" 
                       target="admin-content"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group hover:bg-slate-800 hover:text-white">
                        <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5 group-hover:text-primary-400 transition-colors"></i>
                        <span class="text-sm font-medium" x-show="sidebarOpen">{{ $item['label'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </nav>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-slate-800/50">
            <a href="/" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition-colors text-slate-500 hover:text-slate-300">
                <i data-lucide="external-link" class="w-5 h-5"></i>
                <span class="text-sm font-medium" x-show="sidebarOpen">Lihat Website</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- Header -->
        <header class="bg-white border-b border-slate-200 h-16 flex items-center justify-between px-8 shrink-0">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = !sidebarOpen" class="p-2 hover:bg-slate-100 rounded-lg transition-colors">
                    <i data-lucide="menu" class="w-5 h-5 text-slate-600"></i>
                </button>
                <div class="h-6 w-px bg-slate-200 mx-2"></div>
                <h2 class="text-sm font-bold text-slate-400 uppercase tracking-widest hidden sm:block">Control Center</h2>
            </div>

            <div class="flex items-center gap-4">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-slate-900">{{ Auth::user()->name }}</p>
                    <p class="text-[10px] text-slate-500 capitalize">Superadmin</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="p-2.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-xl transition-all">
                        <i data-lucide="log-out" class="w-5 h-5"></i>
                    </button>
                </form>
            </div>
        </header>

        <!-- Iframe Content Area -->
        <div class="flex-1 relative bg-slate-50">
            <!-- Loading Spinner (Visible while frame is loading) -->
            <div id="frame-loader" class="absolute inset-0 flex flex-col items-center justify-center z-10 bg-slate-50 transition-opacity duration-300 pointer-events-none">
                <div class="w-12 h-12 border-4 border-primary-200 border-t-primary-600 rounded-full animate-spin mb-4"></div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest animate-pulse">Memuat Data...</p>
            </div>

            <!-- The Magic Window -->
            <iframe 
                name="admin-content" 
                id="admin-content"
                src="{{ route('admin.projects.index') }}" 
                class="w-full h-full border-none transition-opacity duration-300 opacity-0"
                onload="onFrameLoad()"
            ></iframe>
        </div>
    </div>
</div>

<script>
    function onFrameLoad() {
        const loader = document.getElementById('frame-loader');
        const frame = document.getElementById('admin-content');
        
        // Hide loader and show frame
        loader.classList.add('opacity-0');
        frame.classList.remove('opacity-0');
        
        // Keep Lucide icons in sync if the child has them
        lucide.createIcons();
    }

    // Intercept link clicks to show loader immediately
    document.querySelectorAll('a[target="admin-content"]').forEach(link => {
        link.addEventListener('click', () => {
            const loader = document.getElementById('frame-loader');
            const frame = document.getElementById('admin-content');
            loader.classList.remove('opacity-0');
            frame.classList.add('opacity-0');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
    });
</script>

<style>
    /* Prevent body scroll to keep the dashboard wrapper fixed */
    body { overflow: hidden !important; }
</style>
@endsection
