@extends('layouts.app')

@section('title', 'Digital Marketing - Growth Strategies')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=2426')] bg-cover bg-center opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-primary-900/90 via-slate-900/90 to-slate-900"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-500/10 rounded-full border border-primary-500/20 mb-4 animate-fade-in">
                <i data-lucide="trending-up" class="w-4 h-4 text-primary-400"></i>
                <span class="text-xs font-bold text-primary-400 uppercase tracking-widest">SOLUSI STRATEGIS</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-tight">Digital Marketing yang<br><span class="text-primary-400">Berorientasi Hasil.</span></h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Tinggalkan metrik yang tidak relevan. Kami menggabungkan riset data dengan eksekusi visual tingkat tinggi untuk memperluas skala bisnis dan mendominasi pasar.
            </p>
            <div class="flex flex-wrap justify-center gap-4 pt-4">
                <a href="https://wa.me/628115842277?text=Halo%20Aksepta,%20saya%20ingin%20konsultasi%20tentang%20layanan%20Digital%20Marketing" target="_blank" class="px-8 py-4 bg-primary-600 text-white font-bold rounded-2xl shadow-xl hover:bg-primary-700 transition-all duration-300">Konsultasi Sekarang</a>
                <a href="#services" class="px-8 py-4 bg-white/10 text-white font-bold rounded-2xl border border-white/20 hover:bg-white/20 transition-all duration-300">Jelajahi Kapabilitas</a>
            </div>
        </div>
    </section>

    <!-- Pricing Section: Sophisticated Bento Redesign -->
    <section class="py-32 bg-[#F8FAFC] relative overflow-hidden" id="pricing">
        <!-- Minimalist Background Accent -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_50%_0%,rgba(59,130,246,0.03)_0%,transparent_50%)]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16">
                <div class="max-w-2xl space-y-4">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-primary-100 text-primary-700 rounded-lg text-[10px] font-bold uppercase tracking-widest">
                        <span class="w-1.5 h-1.5 bg-primary-600 rounded-full animate-pulse"></span>
                        Q2 2026 Strategic Rates
                    </div>
                    <h2 class="text-4xl md:text-5xl font-display font-black text-slate-900 tracking-tight">Pilihan Paket <span class="text-primary-600">Terbaik.</span></h2>
                    <p class="text-lg text-slate-500 font-medium">Investasi yang terukur untuk hasil yang nyata. Pilih rencana yang sesuai dengan skala ambisi bisnis Anda.</p>
                </div>
                <div class="hidden md:block">
                    <div class="p-1 bg-white border border-slate-200 rounded-xl shadow-sm inline-flex">
                        <button class="px-6 py-2 bg-slate-900 text-white rounded-lg text-xs font-bold transition-all">Bulanan</button>
                        <button class="px-6 py-2 text-slate-400 text-xs font-bold hover:text-slate-600 transition-all">Tahunan <span class="text-primary-500 font-black text-[10px] ml-1">-15%</span></button>
                    </div>
                </div>
            </div>

            <!-- Bento Grid - Main Packages -->
            <div class="grid lg:grid-cols-3 gap-6 mb-12">
                <!-- Starter: Minimalist Bento -->
                <div class="group bg-white rounded-3xl border border-slate-200 p-8 shadow-sm hover:shadow-xl hover:border-primary-100 transition-all duration-500 flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-slate-50 rounded-full -mr-16 -mt-16 group-hover:bg-primary-50 transition-colors"></div>
                    <div class="relative z-10 flex-1">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl font-display font-black text-slate-900 uppercase tracking-tighter">Starter</h3>
                            <div class="bg-slate-50 p-3 rounded-2xl group-hover:bg-primary-50 transition-colors">
                                <i data-lucide="layers" class="w-5 h-5 text-slate-400 group-hover:text-primary-500"></i>
                            </div>
                        </div>
                        <p class="text-slate-500 text-sm font-medium mb-6 leading-relaxed">Membangun fondasi digital yang kuat untuk bisnis baru atau berkembang.</p>
                        
                        <div class="mb-10">
                            <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Mulai Dari</div>
                            <div class="text-4xl font-display font-black text-slate-900 tracking-tighter">Rp 4.000.000<span class="text-sm font-bold text-slate-400 ml-1 tracking-normal">/ bln</span></div>
                        </div>

                        <ul class="space-y-4 mb-10">

                            <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                                <span class="w-5 h-5 rounded-full bg-slate-100 flex items-center justify-center text-[10px] text-slate-500">1</span> Kelola 3 Platform Utama
                            </li>
                            <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                                <span class="w-5 h-5 rounded-full bg-slate-100 flex items-center justify-center text-[10px] text-slate-500">2</span> Admin Posting & Respon
                            </li>
                        </ul>
                    </div>
                    <a href="https://wa.me/628115842277" class="relative z-10 w-full py-4 bg-slate-900 text-white text-center rounded-2xl font-black text-xs hover:bg-black transition-all shadow-lg active:scale-95">Pilih Starter</a>
                </div>

                <!-- Growth: The Primary Bento -->
                <div class="group bg-primary-900 rounded-[40px] p-10 shadow-2xl shadow-primary-900/20 flex flex-col relative overflow-hidden transform lg:-translate-y-4 lg:scale-105 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary-400 via-blue-400 to-primary-400"></div>
                    <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary-800 rounded-full blur-3xl -mr-32 -mb-32 opacity-50"></div>
                    
                    <div class="relative z-10 flex-1">
                        <div class="flex items-center justify-between mb-8">
                            <div>
                                <h3 class="text-3xl font-display font-black text-white uppercase tracking-tighter">Growth</h3>
                                <div class="inline-block mt-2 px-3 py-1 bg-primary-500 text-white text-[9px] font-black uppercase tracking-widest rounded-md">Best Value</div>
                            </div>
                            <div class="bg-white/10 p-4 rounded-3xl backdrop-blur-sm border border-white/20">
                                <i data-lucide="trending-up" class="w-7 h-7 text-white"></i>
                            </div>
                        </div>
                        <p class="text-primary-100 text-sm font-medium mb-8 leading-relaxed opacity-80">Ideal untuk bisnis yang agresif mengejar pertumbuhan dan interaksi audiens.</p>
                        
                        <div class="mb-10">
                            <div class="text-[10px] font-black text-primary-300 uppercase tracking-widest mb-1">Mulai Dari</div>
                            <div class="text-5xl font-display font-black text-white tracking-tighter">Rp 8.500.000<span class="text-sm font-bold text-primary-300 ml-1 tracking-normal">/ bln</span></div>
                        </div>

                        <ul class="space-y-4 mb-10">

                            <li class="flex items-center gap-3 text-sm font-bold text-white">
                                <span class="w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-[10px]">1</span> Admin Interaktif (Komen & DM)
                            </li>
                            <li class="flex items-center gap-3 text-sm font-bold text-white">
                                <span class="w-5 h-5 rounded-full bg-primary-500 flex items-center justify-center text-[10px]">2</span> Ads & KOL Management
                            </li>
                        </ul>
                    </div>
                    <a href="https://wa.me/628115842277" class="relative z-10 w-full py-5 bg-primary-500 text-white text-center rounded-3xl font-black text-sm hover:bg-white hover:text-primary-900 transition-all shadow-xl active:scale-95">Ambil Paket Growth</a>
                </div>

                <!-- Strategic: Executive Bento -->
                <div class="group bg-white rounded-3xl border border-slate-200 p-8 shadow-sm hover:shadow-xl hover:border-primary-100 transition-all duration-500 flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-slate-50 rounded-full -mr-16 -mt-16 group-hover:bg-primary-50 transition-colors"></div>
                    <div class="relative z-10 flex-1">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl font-display font-black text-slate-900 uppercase tracking-tighter">Strategic</h3>
                            <div class="bg-slate-50 p-3 rounded-2xl group-hover:bg-primary-50 transition-colors">
                                <i data-lucide="crown" class="w-5 h-5 text-slate-400 group-hover:text-primary-500"></i>
                            </div>
                        </div>
                        <p class="text-slate-500 text-sm font-medium mb-6 leading-relaxed">Solusi lengkap untuk dominasi market demi ROI yang berkelanjutan.</p>
                        
                        <div class="mb-10">
                            <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Mulai Dari</div>
                            <div class="text-4xl font-display font-black text-slate-900 tracking-tighter">Rp 15.000.000<span class="text-sm font-bold text-slate-400 ml-1 tracking-normal">/ bln</span></div>
                        </div>

                        <ul class="space-y-4 mb-10">

                            <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                                <span class="w-5 h-5 rounded-full bg-slate-100 flex items-center justify-center text-[10px] text-slate-500">1</span> Full Executive Reporting
                            </li>
                            <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                                <span class="w-5 h-5 rounded-full bg-slate-100 flex items-center justify-center text-[10px] text-slate-500">2</span> Strategi Multi-Platform Terpadu
                            </li>
                        </ul>
                    </div>
                    <a href="https://wa.me/628115842277" class="relative z-10 w-full py-4 bg-slate-900 text-white text-center rounded-2xl font-black text-xs hover:bg-black transition-all shadow-lg active:scale-95">Pesan Strategic</a>
                </div>
            </div>

            <!-- Detailed Comparison Grid (Dynamic) -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-8 border-b border-slate-100 flex items-center justify-between">
                    <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter">Matriks Komparasi</h4>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest hidden md:block">Scroll ke bawah untuk melihat detail spesifik</span>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[900px]">
                        <thead class="bg-slate-50/50">
                            <tr>
                                <th class="py-6 px-10 text-left text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] border-r border-slate-100">Kategori</th>
                                <th class="py-6 px-8 text-center text-sm font-black text-slate-900 uppercase">Starter</th>
                                <th class="py-6 px-8 text-center text-sm font-black text-primary-600 bg-primary-50/50 uppercase">Growth</th>
                                <th class="py-6 px-8 text-center text-sm font-black text-slate-900 uppercase">Strategic</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 font-medium">
                            @php
                                $matrixRows = [
                                    ['label' => 'Administrator', 'starter' => 'Posting & Respon Terjadwal', 'growth' => 'Admin Interaktif (Komen & DM)', 'strategic' => 'Proaktif dengan Target Leads'],
                                    ['label' => 'Konten Story', 'starter' => '12 Kali Publish', 'growth' => '20 Kali (Interaktif & Survey)', 'strategic' => 'Min 30 Kali (Real-time)'],
                                    ['label' => 'Desain Grafis', 'starter' => '15 Slide (Statis)', 'growth' => '35 Slide (High-Res Photo)', 'strategic' => '60 Slide (Motion Premium)'],
                                    ['label' => 'Produksi Video', 'starter' => '5 Video (Simple)', 'growth' => '12 Video (Intermediate)', 'strategic' => '20 Video (Advance)'],
                                    ['label' => 'Ads & KOL', 'starter' => 'Tidak Termasuk', 'growth' => 'Termasuk Management', 'strategic' => 'Optimasi Leads Bulanan'],
                                    ['label' => 'Evaluasi', 'starter' => 'Performance Summary', 'growth' => 'Laporan & Meeting Bulanan', 'strategic' => 'Daily Monitoring & Riset'],
                                ];
                            @endphp
                            @foreach($matrixRows as $row)
                            <tr class="hover:bg-slate-50/30 transition-colors">
                                <td class="py-6 px-10 border-r border-slate-100">
                                    <span class="text-xs font-bold text-slate-600 uppercase tracking-wider">{{ $row['label'] }}</span>
                                </td>
                                <td class="py-6 px-8 text-center text-sm text-slate-500">{{ $row['starter'] }}</td>
                                <td class="py-6 px-8 text-center text-sm text-primary-900 font-bold bg-primary-50/20">{{ $row['growth'] }}</td>
                                <td class="py-6 px-8 text-center text-sm text-slate-500">{{ $row['strategic'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer T&C Modular Block -->
            <div class="mt-12 grid md:grid-cols-2 gap-6">
                <div class="bg-white rounded-[30px] border border-slate-200 p-8 flex items-start gap-6 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-primary-50 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="info" class="w-6 h-6 text-primary-600"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-900 uppercase tracking-tighter mb-2 italic">Transparansi Biaya</h4>
                        <p class="text-xs text-slate-500 leading-relaxed font-medium">Harga di atas merupakan biaya manajemen layanan per bulan. Ad budget (budget iklan) dan honor KOL dibebankan sepenuhnya kepada klien dan dikelola secara terpisah.</p>
                    </div>
                </div>
                <div class="bg-slate-900 rounded-[30px] p-8 flex items-start gap-6 shadow-2xl relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-primary-600/20 to-transparent"></div>
                    <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center flex-shrink-0 relative z-10">
                        <i data-lucide="check-square" class="w-6 h-6 text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <h4 class="font-black text-white uppercase tracking-tighter mb-2 italic">Kepemilikan Aset</h4>
                        <p class="text-xs text-slate-400 leading-relaxed font-medium">Setiap hasil akhir konten yang telah dipublikasikan menjadi hak milik sepenuhnya dari klien. Kami memberikan revisi maksimal 2 kali pada tahap peninjauan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Strategy Section -->
    <section class="py-24 bg-slate-50" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-8">
                    <h2 class="text-4xl font-display font-bold text-slate-900"> Pendekatan Strategis Kami</h2>
                    <p class="text-lg text-slate-600 leading-relaxed">Tidak sekadar menayangkan iklan. Kami membangun ekosistem konversi. Pendekatan kami memastikan setiap titik interaksi audiens dioptimalkan sepenuhnya untuk pertumbuhan bisnis Anda.</p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4 p-6 bg-slate-50 rounded-[32px] border border-slate-100 group hover:border-primary-200 transition-all">
                            <div class="w-12 h-12 bg-primary-100 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary-600 transition-colors">
                                <i data-lucide="search" class="text-primary-600 w-6 h-6 group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Dominasi Mesin Pencari (SEO)</h4>
                                <p class="text-slate-600">Menguasai halaman pertama Google melalui optimasi teknis tingkat lanjut dan struktur konten bernilai tinggi untuk menangkap klien potensial secara organik.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 p-6 bg-slate-50 rounded-[32px] border border-slate-100 group hover:border-primary-200 transition-all">
                            <div class="w-12 h-12 bg-primary-100 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary-600 transition-colors">
                                <i data-lucide="bar-chart-3" class="text-primary-600 w-6 h-6 group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">ROI Social Media </h4>
                                <p class="text-slate-600">Memanfaatkan algoritma platform digital untuk membangun komunitas yang aktif, menjaga reputasi instansi, dan mendorong angka penjualan langsung.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 p-6 bg-slate-50 rounded-[32px] border border-slate-100 group hover:border-primary-200 transition-all">
                            <div class="w-12 h-12 bg-primary-100 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary-600 transition-colors">
                                <i data-lucide="mail" class="text-primary-600 w-6 h-6 group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Otomatis Konversi</h4>
                                <p class="text-slate-600">Merancang alur pemasaran digital (funnel) yang cerdas dan otomatis, bekerja 24/7 untuk membimbing prospek menjadi klien setia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary-100 rounded-full blur-[80px]"></div>
                    <div class="relative bg-slate-900 rounded-[48px] overflow-hidden aspect-square shadow-2xl">
                         <img src="https://images.unsplash.com/photo-1551288049-bbdaac4a28d6?auto=format&fit=crop&q=80&w=2070" class="w-full h-full object-cover opacity-60" alt="Strategy">
                         <div class="absolute inset-0 flex items-center justify-center p-12 text-center">
                             <div class="space-y-4">
                                 <div class="text-6xl font-display font-extrabold text-white">Fokus</div>
                                 <p class="text-primary-200 font-bold uppercase tracking-widest">ROI PERTUMBUHAN PROSPEK & EFISIENSI TERUKUR</p>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Digital Marketing Section -->
    <section class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-display font-bold text-white mb-4">Layanan Digital Marketing Utama Kami</h2>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto">Pendekatan komprehensif untuk mendominasi lanskap digital dan meningkatkan ROI secara terukur.</p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Layanan SEO -->
                <div class="bg-white/5 border border-white/10 p-10 rounded-[40px] hover:bg-white/10 hover:border-primary-500/30 transition-all duration-300 group flex flex-col h-full shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary-500/10 rounded-full blur-[50px] group-hover:bg-primary-500/20 transition-all"></div>
                    <div class="w-16 h-16 bg-primary-500/20 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary-500 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="search" class="text-primary-400 w-8 h-8 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-4 relative z-10">
                        <h3 class="text-2xl font-bold text-white mb-1 leading-snug">Layanan SEO</h3>
                        <p class="text-sm font-semibold text-primary-300 tracking-wide uppercase">Optimasi Mesin Pencari</p>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-10 flex-1 relative z-10">Strategi teknis dan pembuatan konten agar website Anda muncul di halaman pertama pencarian Google saat calon klien mencari solusi. Ini adalah investasi aset digital jangka panjang yang mendatangkan trafik organik (leads) tanpa harus terus-menerus membayar biaya iklan.</p>
                    <a href="https://wa.me/628115842277?text=Halo%20Aksepta,%20saya%20ingin%20konsultasi%20tentang%20Layanan%20SEO" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-white/5 text-white font-bold rounded-2xl border border-white/10 hover:bg-primary-500 hover:border-primary-500 hover:text-white transition-all w-full relative z-10">Konsultasi Sekarang</a>
                </div>

                <!-- Layanan Ads -->
                <div class="bg-white/5 border border-white/10 p-10 rounded-[40px] hover:bg-white/10 hover:border-primary-500/30 transition-all duration-300 group flex flex-col h-full shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary-500/10 rounded-full blur-[50px] group-hover:bg-primary-500/20 transition-all"></div>
                    <div class="w-16 h-16 bg-primary-500/20 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary-500 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="target" class="text-primary-400 w-8 h-8 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-4 relative z-10">
                        <h3 class="text-2xl font-bold text-white mb-1 leading-snug">Layanan Ads</h3>
                        <p class="text-sm font-semibold text-primary-300 tracking-wide uppercase">Periklanan Berbasis Kinerja</p>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-10 flex-1 relative z-10">Pemasangan iklan berbayar (Meta, Google, TikTok Ads) yang didesain murni untuk ROI (Return on Investment). Kami tidak mengejar jumlah tayangan semu, melainkan menargetkan audiens spesifik untuk menghasilkan konversi nyata—seperti pengumpulan prospek, kunjungan ke website, atau penjualan langsung.</p>
                    <a href="https://wa.me/628115842277?text=Halo%20Aksepta,%20saya%20ingin%20konsultasi%20tentang%20Layanan%20Ads" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-white/5 text-white font-bold rounded-2xl border border-white/10 hover:bg-primary-500 hover:border-primary-500 hover:text-white transition-all w-full relative z-10">Konsultasi Sekarang</a>
                </div>

                <!-- Layanan KOL -->
                <div class="bg-white/5 border border-white/10 p-10 rounded-[40px] hover:bg-white/10 hover:border-primary-500/30 transition-all duration-300 group flex flex-col h-full shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary-500/10 rounded-full blur-[50px] group-hover:bg-primary-500/20 transition-all"></div>
                    <div class="w-16 h-16 bg-primary-500/20 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary-500 group-hover:scale-110 transition-all duration-300 relative z-10">
                        <i data-lucide="users" class="text-primary-400 w-8 h-8 group-hover:text-white transition-colors"></i>
                    </div>
                    <div class="mb-4 relative z-10">
                        <h3 class="text-2xl font-bold text-white mb-1 leading-snug">Layanan KOL & Influencer</h3>
                        <p class="text-sm font-semibold text-primary-300 tracking-wide uppercase">Manajemen Influencer</p>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-10 flex-1 relative z-10">Pemanfaatan pihak ketiga untuk mengakselerasi kepercayaan pasar. Kami menyeleksi dan berkolaborasi dengan figur publik atau pakar industri yang memiliki otoritas. Ini bukan sekadar mencari influencer dengan followers terbanyak, melainkan memastikan audiens mereka 100% relevan dengan target pasar Anda.</p>
                    <a href="https://wa.me/628115842277?text=Halo%20Aksepta,%20saya%20ingin%20konsultasi%20tentang%20Layanan%20KOL" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-white/5 text-white font-bold rounded-2xl border border-white/10 hover:bg-primary-500 hover:border-primary-500 hover:text-white transition-all w-full relative z-10">Konsultasi Sekarang</a>
                </div>
            </div>
        </div>
    </section>


@endsection
