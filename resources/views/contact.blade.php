@extends('layouts.app')



@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_-20%,#334C9E55,transparent_70%)]"></div>
        <div
            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2070')] bg-cover opacity-20">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8 animate-fade-in">
            <div
                class="inline-flex items-center gap-3 px-4 py-2 bg-primary-500/10 rounded-full border border-primary-500/20 mb-4">
                <i data-lucide="message-square" class="w-4 h-4 text-primary-400"></i>
                <span class="text-xs font-bold text-primary-400 uppercase tracking-widest">Hubungi Kami</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">
                {!! site_content('contact_hero_title', "Let's Build Your<br><span class=\"text-primary-400\">Digital Future</span>") !!}
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed">
                {{ site_content('contact_hero_desc', 'Ready to scale your business? Our team of strategic experts is just one message away from transforming your project goals into reality.') }}
            </p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20 items-stretch">
                <!-- Contact Info Panels -->
                <div class="space-y-10 flex flex-col justify-center">
                    <div class="space-y-4">
                        <h2 class="text-4xl font-display font-bold text-slate-900">
                            {{ site_content('contact_info_title', 'Reach Out Anytime') }}
                        </h2>
                        <p class="text-lg text-slate-600">
                            {{ site_content('contact_info_desc', 'Choose the channel that works best for you. We typically respond within 12 business hours.') }}
                        </p>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <!-- Phone Card -->
                        <div
                            class="group p-8 rounded-[32px] bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                            <div
                                class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg mb-6 group-hover:rotate-6 transition-transform">
                                <i data-lucide="phone" class="w-7 h-7"></i>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900 mb-2">Hubungi Kami</h4>
                            <p class="text-slate-500 text-sm mb-4">Senin-Jumat dari jam 9 pagi sampai 5 sore.</p>
                            <a href="https://wa.me/628115842277"
                                class="text-blue-600 font-bold hover:underline transition-all">+62 811 5842 277</a>
                        </div>

                        <!-- Email Card -->
                        <div
                            class="group p-8 rounded-[32px] bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                            <div
                                class="w-14 h-14 bg-emerald-600 rounded-2xl flex items-center justify-center text-white shadow-lg mb-6 group-hover:-rotate-6 transition-transform">
                                <i data-lucide="mail" class="w-7 h-7"></i>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900 mb-2">Alamat Email</h4>
                            <p class="text-slate-500 text-sm mb-4">Untuk semua pertanyaan umum.</p>
                            <a href="mailto:info@aksepta.co.id"
                                class="text-emerald-600 font-bold hover:underline transition-all">info@aksepta.co.id</a>
                        </div>
                    </div>

                    <!-- Location Panel (Glassmorphism) -->
                    <div class="p-10 rounded-[40px] bg-slate-900 text-white relative overflow-hidden group shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-600/20 to-transparent"></div>
                        <div class="relative z-10 space-y-6">
                            <div
                                class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20">
                                <i data-lucide="map-pin" class="w-8 h-8 text-primary-400"></i>
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-2xl font-bold">Kantor Kami</h4>
                                <p class="text-slate-400 leading-relaxed">
                                    {!! site_content('contact_address', 'Jl. Aminah Syukur, Samarinda<br>Kalimantan Timur') !!}
                                </p>
                            </div>
                            <div class="flex gap-4">
                                <span
                                    class="px-4 py-1.5 bg-white/10 rounded-full text-[10px] font-bold uppercase tracking-widest border border-white/10">Samarinda,
                                    Kalimantan Timur</span>
                                <span
                                    class="px-4 py-1.5 bg-white/10 rounded-full text-[10px] font-bold uppercase tracking-widest border border-white/10">Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="flex flex-col justify-center">
                    <div
                        class="bg-white rounded-[48px] p-8 md:p-12 shadow-[0_32px_80px_rgba(0,0,0,0.08)] border border-slate-100 relative">
                        <h3 class="text-3xl font-display font-bold mb-10 text-slate-900">Kirim Pesan</h3>

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 ml-1">Nama Panjang</label>
                                    <input type="text" name="name" required
                                        class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 focus:bg-white transition-all duration-300"
                                        placeholder="John Doe">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 ml-1">Email</label>
                                    <input type="email" name="email" required
                                        class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 focus:bg-white transition-all duration-300"
                                        placeholder="john@company.com">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 ml-1">Subjek</label>
                                <select name="subject"
                                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 focus:bg-white transition-all duration-300">
                                    <option value="General Inquiry">Digital Marketing</option>
                                    <option value="Project Proposal">Creative Production</option>
                                    <option value="Strategic Partnership">Website Development</option>
                                    <option value="Careers">Training</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 ml-1">Isi Pesan</label>
                                <textarea name="message" rows="5" required
                                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 focus:bg-white transition-all duration-300 resize-none"
                                    placeholder="Bagaimana kami dapat membantu Anda?"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full py-6 bg-slate-900 text-white font-bold rounded-2xl shadow-2xl hover:bg-primary-600 transition-all duration-500 flex items-center justify-center gap-3 group">
                                <span>Kirim Pesan</span>
                                <i data-lucide="send"
                                    class="w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="text-center space-y-4">
                <h2 class="text-4xl font-display font-bold text-slate-900">Kunjungi Pusat Strategis Kami</h2>
                <p class="text-slate-600 max-w-xl mx-auto">Berlokasi di pusat bisnis kota ini.</p>
            </div>

            <div class="w-full h-[500px] rounded-[48px] overflow-hidden shadow-2xl border-8 border-white group relative">
                <!-- Map Placeholder / Embed -->
                <iframe class="w-full h-full grayscale hover:grayscale-0 transition-all duration-700"
                    src="https://www.google.com/maps/place/Aksepta/@-0.4976643,117.1540664,17z/data=!3m1!4b1!4m6!3m5!1s0x2df6815780d97e55:0x3792d3720ef3a184!8m2!3d-0.4976697!4d117.1566413!16s%2Fg%2F11k0sj44jj?entry=ttu&g_ep=EgoyMDI2MDQwOC4wIKXMDSoASAFQAw%3D%3D"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <!-- Floating Map Overlay -->
                <div
                    class="absolute bottom-10 left-10 p-6 bg-white/80 backdrop-blur-xl rounded-3xl border border-white/40 shadow-2xl hidden md:block animate-bounce-slow">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white">
                            <i data-lucide="navigation" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest leading-none mb-1">Navigasi
                            </p>
                            <p class="text-sm font-bold text-slate-900 leading-none">Buka di Google Maps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .text-glow {
            text-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-bounce-slow {
            animation: bounce-slow 4s ease-in-out infinite;
        }
    </style>
@endsection