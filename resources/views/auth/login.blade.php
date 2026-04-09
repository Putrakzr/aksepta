@extends('layouts.app')

@section('title', 'Login - Aksepta Admin')

@section('content')
<div class="min-h-screen bg-[#020617] flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Abstract Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-blue-600/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-indigo-600/10 blur-[100px] rounded-full"></div>
    </div>

    <div class="relative z-10 w-full max-w-md animate-fade-in">
        <div class="bg-white/5 backdrop-blur-2xl border border-white/10 rounded-[48px] p-10 md:p-14 shadow-3xl">
            <div class="text-center mb-10 space-y-2">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-6 shadow-lg shadow-blue-600/20">
                    <i data-lucide="lock" class="w-8 h-8 text-white"></i>
                </div>
                <h1 class="text-3xl font-display font-black text-white tracking-tight">Admin Login</h1>
                <p class="text-slate-400 text-sm">Secure access to the Aksepta ecosystem.</p>
            </div>

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white placeholder:text-slate-600 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none"
                        placeholder="admin@aksepta.com">
                    @error('email')
                        <p class="text-rose-400 text-xs mt-1 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white placeholder:text-slate-600 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none"
                        placeholder="••••••••">
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full py-4 bg-blue-600 text-white font-black text-lg rounded-2xl shadow-xl shadow-blue-600/20 hover:bg-blue-500 hover:shadow-blue-600/40 active:scale-[0.98] transition-all duration-300">
                        Sign In
                    </button>
                </div>
            </form>

            <div class="mt-10 text-center">
                <a href="/" class="text-slate-500 hover:text-white transition-colors text-xs font-bold uppercase tracking-widest flex items-center justify-center gap-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
