<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Projects
        \App\Models\Project::create([
            'title' => 'Pertumbuhan E-commerce Global',
            'category' => 'marketing',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
            'description' => 'Peningkatan pendapatan sebesar 300% melalui pemasaran performa berbasis data.'
        ]);
        \App\Models\Project::create([
            'title' => 'Ekosistem Mobile Fintech',
            'category' => 'dev',
            'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800',
            'description' => 'Solusi perbankan tingkat enterprise dengan keamanan kelas militer.'
        ]);
        \App\Models\Project::create([
            'title' => 'Kampanye Brand Mewah',
            'category' => 'creative',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&q=80&w=800',
            'description' => 'Penceritaan visual sinematik untuk merek otomotif ternama.'
        ]);
        \App\Models\Project::create([
            'title' => 'Strategi Digitalisasi Ritel',
            'category' => 'consulting',
            'image' => 'https://images.unsplash.com/photo-1534452286304-a15f3890453d?auto=format&fit=crop&q=80&w=800',
            'description' => 'Restrukturisasi organisasi lengkap untuk jaringan ritel nasional.'
        ]);

        // Articles
        \App\Models\Article::create([
            'title' => 'Wawasan Strategis 2024: Digital First',
            'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=400',
            'meta' => 'Studi Kasus • 5 menit baca'
        ]);
        \App\Models\Article::create([
            'title' => 'Masa Depan AI dalam Rantai Pasok',
            'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&q=80&w=400',
            'meta' => 'Riset • 8 menit baca'
        ]);

        // Gallery
        \App\Models\Gallery::create(['image' => 'https://images.unsplash.com/photo-1542744094-24638eff58bb?auto=format&fit=crop&q=80&w=600']);
        \App\Models\Gallery::create(['image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=600']);
        \App\Models\Gallery::create(['image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=600']);
        \App\Models\Gallery::create(['image' => 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=600']);

        // Documentations
        \App\Models\Documentation::create([
            'title' => 'Profil Perusahaan 2024 (PDF)',
            'link' => '#',
            'date' => 'Diperbarui Jan 2024'
        ]);
        \App\Models\Documentation::create([
            'title' => 'Kerangka Kerja Strategis (V1.2)',
            'link' => '#',
            'date' => 'Diperbarui Feb 2024'
        ]);
    }
}
