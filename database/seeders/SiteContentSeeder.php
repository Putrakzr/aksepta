<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            // --- GLOBAL & LAYOUT ---
            ['key' => 'nav_home', 'value' => 'Beranda', 'group' => 'Navigation', 'hint' => 'Label menu Beranda'],
            ['key' => 'nav_services', 'value' => 'Layanan', 'group' => 'Navigation', 'hint' => 'Label menu Layanan'],
            ['key' => 'nav_ecosystem', 'value' => 'Ekosistem', 'group' => 'Navigation', 'hint' => 'Label menu Ekosistem'],
            ['key' => 'nav_portfolio', 'value' => 'Portofolio', 'group' => 'Navigation', 'hint' => 'Label menu Portofolio'],
            ['key' => 'nav_contact', 'value' => 'Hubungi Kami', 'group' => 'Navigation', 'hint' => 'Label tombol CTA di Navbar'],
            
            ['key' => 'footer_about_title', 'value' => 'Tentang Aksepta', 'group' => 'Footer', 'hint' => 'Judul kolom pertama footer'],
            ['key' => 'footer_about_desc', 'value' => 'Aksepta adalah ekosistem strategi digital terintegrasi yang berfokus pada riset, teknologi, dan eksekusi visual untuk pertumbuhan bisnis Anda.', 'group' => 'Footer', 'hint' => 'Deskripsi singkat di footer'],
            ['key' => 'footer_col2_title', 'value' => 'Layanan Kami', 'group' => 'Footer', 'hint' => 'Judul kolom kedua footer'],
            ['key' => 'footer_col3_title', 'value' => 'Ekosistem Bisnis', 'group' => 'Footer', 'hint' => 'Judul kolom ketiga footer'],

            // --- HOME PAGE ---
            ['key' => 'home_hero_badge', 'value' => 'Riset | Digital | Investasi', 'group' => 'Home', 'hint' => 'Label kecil di atas judul hero'],
            ['key' => 'home_hero_title', 'value' => 'Digital <span class="text-primary-600">Marketing</span> Samarinda.', 'group' => 'Home', 'hint' => 'Judul besar di halaman utama'],
            ['key' => 'home_hero_desc', 'value' => 'Aksepta Strategi Indonesia mengintegrasikan <span class="font-semibold text-slate-900">Riset Bisnis</span>, <span class="font-semibold text-slate-900"> Pengembangan Sistem</span>, <span class="font-semibold text-slate-900">Pemasaran Digital</span>, hingga <span class="font-semibold text-slate-900">Eksekusi Kreatif </span>tingkat tinggi.', 'group' => 'Home', 'hint' => 'Deskripsi hero di halaman utama'],
            ['key' => 'home_cta_primary', 'value' => 'Konsultasi Sekarang', 'group' => 'Home', 'hint' => 'Teks tombol utama'],
            ['key' => 'home_cta_secondary', 'value' => 'Jelajahi Layanan', 'group' => 'Home', 'hint' => 'Teks tombol sekunder'],
            ['key' => 'home_visual_title', 'value' => 'Dari Strategi Hingga Eksekusi', 'group' => 'Home', 'hint' => 'Judul pada elemen visual kanan hero'],
            ['key' => 'home_visual_desc', 'value' => 'Kami memadukan riset bisnis, rekayasa teknologi, dan eksekusi visual premium dalam satu ekosistem untuk hasil yang terukur.', 'group' => 'Home', 'hint' => 'Deskripsi pada elemen visual kanan hero'],

            ['key' => 'home_why_badge', 'value' => 'METODOLOGI KAMI', 'group' => 'Home', 'hint' => 'Label kecil di section Mengapa Kami'],
            ['key' => 'home_why_title', 'value' => 'Mengapa Harus Aksepta?', 'group' => 'Home', 'hint' => 'Judul section Mengapa Kami'],
            ['key' => 'home_why_desc', 'value' => 'Kami menciptakan keunggulan kompetitif jangka panjang bagi instansi dan perusahaan Anda.', 'group' => 'Home', 'hint' => 'Deskripsi section Mengapa Kami'],
            
            ['key' => 'home_feat1_title', 'value' => 'Strategi Berbasis Data', 'group' => 'Home', 'hint' => 'Judul fitur 1'],
            ['key' => 'home_feat1_desc', 'value' => 'Setiap keputusan strategis dibangun di atas data ilmiah yang valid dan terukur.', 'group' => 'Home', 'hint' => 'Deskripsi fitur 1'],
            ['key' => 'home_feat2_title', 'value' => 'Eksekusi Digital Komprehensif', 'group' => 'Home', 'hint' => 'Judul fitur 2'],
            ['key' => 'home_feat2_desc', 'value' => 'Lebih dari sekadar desain. Kami membangun ekosistem digital mulai dari otomasi sistem hingga kampanye pemasaran.', 'group' => 'Home', 'hint' => 'Deskripsi fitur 2'],
            ['key' => 'home_feat3_title', 'value' => 'Optimasi Aset Digital', 'group' => 'Home', 'hint' => 'Judul fitur 3'],
            ['key' => 'home_feat3_desc', 'value' => 'Mengubah aset diam menjadi profit center melalui monetisasi aset media digital untuk pertumbuhan pendapatan.', 'group' => 'Home', 'hint' => 'Deskripsi fitur 3'],

            ['key' => 'home_eco_badge', 'value' => 'EKOSISTEM TERINTEGRASI', 'group' => 'Home', 'hint' => 'Label section Preview Ekosistem'],
            ['key' => 'home_eco_title', 'value' => 'Jelajahi Ekosistem Bisnis Aksepta.', 'group' => 'Home', 'hint' => 'Judul section Preview Ekosistem'],
            ['key' => 'home_eco_desc', 'value' => 'Sinergi kuat dari pilar bisnis utama: ADMA, ADMO, APEX, ADDS, ABCO, dan ARIO.', 'group' => 'Home', 'hint' => 'Deskripsi section Preview Ekosistem'],

            ['key' => 'home_cta_banner_title', 'value' => 'Siap Memulai <span class="text-gradient bg-gradient-to-r from-primary-600 to-accent-rose">Transformasi Digital Bisnis</span> Anda?', 'group' => 'Home', 'hint' => 'Judul banner CTA bawah'],
            ['key' => 'home_cta_banner_desc', 'value' => 'Bergabung dengan berbagai instansi dan perusahaan yang telah beralih menuju efisiensi digital terintegrasi bersama Aksepta.', 'group' => 'Home', 'hint' => 'Deskripsi banner CTA bawah'],

            // --- SERVICES PAGE ---
            ['key' => 'ser_hero_title', 'value' => 'Layanan Pilihan', 'group' => 'Services', 'hint' => 'Judul hero halaman Layanan'],
            ['key' => 'ser_hero_desc', 'value' => 'Memberdayakan bisnis melalui pemasaran modern, produksi kreatif, dan solusi teknologi mutakhir.', 'group' => 'Services', 'hint' => 'Deskripsi hero halaman Layanan'],
            
            ['key' => 'ser_marketing_title', 'value' => 'Digital Marketing', 'group' => 'Services', 'hint' => 'Judul layanan marketing'],
            ['key' => 'ser_marketing_desc', 'value' => 'Kami membangun mesin pertumbuhan untuk mendapatkan prospek berkualitas tinggi melalui strategi berbasis data.', 'group' => 'Services', 'hint' => 'Deskripsi layanan marketing'],
            ['key' => 'ser_creative_title', 'value' => 'Creative Production', 'group' => 'Services', 'hint' => 'Judul layanan kreatif'],
            ['key' => 'ser_creative_desc', 'value' => 'Bercerita yang memikat. Kami memproduksi visual tingkat tinggi yang beresonansi dengan target audiens Anda.', 'group' => 'Services', 'hint' => 'Deskripsi layanan kreatif'],
            ['key' => 'ser_tech_title', 'value' => 'Website & Apps', 'group' => 'Services', 'hint' => 'Judul layanan teknologi'],
            ['key' => 'ser_tech_desc', 'value' => 'Dari portofolio sederhana hingga platform skala perusahaan yang kompleks. Kami membangun solusi cepat, aman, dan skalabel.', 'group' => 'Services', 'hint' => 'Deskripsi layanan teknologi'],
            ['key' => 'ser_training_title', 'value' => 'Pelatihan & Sertifikasi', 'group' => 'Services', 'hint' => 'Judul layanan pelatihan'],
            ['key' => 'ser_training_desc', 'value' => 'Memberdayakan tenaga kerja Anda. Kami menyediakan pelatihan profesional dan sertifikasi yang diakui.', 'group' => 'Services', 'hint' => 'Deskripsi layanan pelatihan'],

            // --- ECOSYSTEM UNITS (SBU) ---
            ['key' => 'eco_adma_title', 'value' => 'ADMA - Digital Marketing', 'group' => 'Ecosystem', 'hint' => 'Nama unit ADMA'],
            ['key' => 'eco_adma_desc', 'value' => 'Unit yang berfokus pada optimasi performa kampanye digital dan akuisisi pelanggan secara masif.', 'group' => 'Ecosystem', 'hint' => 'Deskripsi unit ADMA'],
            ['key' => 'eco_admo_title', 'value' => 'ADMO - Creative Agency', 'group' => 'Ecosystem', 'hint' => 'Nama unit ADMO'],
            ['key' => 'eco_admo_desc', 'value' => 'Pusat kreatif untuk branding, videografi, dan desain visual tingkat lanjut.', 'group' => 'Ecosystem', 'hint' => 'Deskripsi unit ADMO'],
            ['key' => 'eco_apex_title', 'value' => 'APEX - Creative Studio', 'group' => 'Ecosystem', 'hint' => 'Nama unit APEX'],
            ['key' => 'eco_apex_desc', 'value' => 'Studio produksi visual untuk fotografi produk dan pembuatan konten media sosial premium.', 'group' => 'Ecosystem', 'hint' => 'Deskripsi unit APEX'],
            ['key' => 'eco_adds_title', 'value' => 'ADDS - Software House', 'group' => 'Ecosystem', 'hint' => 'Nama unit ADDS'],
            ['key' => 'eco_adds_desc', 'value' => 'Unit rekayasa teknologi yang membangun sistem informasi dan aplikasi web modern.', 'group' => 'Ecosystem', 'hint' => 'Deskripsi unit ADDS'],
            ['key' => 'eco_abco_title', 'value' => 'ABCO - Business Consulting', 'group' => 'Ecosystem', 'hint' => 'Nama unit ABCO'],
            ['key' => 'eco_abco_desc', 'value' => 'Fokus pada riset pasar dan pengembangan strategi bisnis berkelanjutan.', 'group' => 'Ecosystem', 'hint' => 'Deskripsi unit ABCO'],
            ['key' => 'eco_ario_title', 'value' => 'ARIO - Digital Assets', 'group' => 'Ecosystem', 'hint' => 'Nama unit ARIO'],
            ['key' => 'eco_ario_desc', 'value' => 'Pengelolaan dan monetisasi aset media digital untuk pertumbuhan pendapatan pasif.', 'group' => 'Ecosystem', 'hint' => 'Deskripsi unit ARIO'],
        ];

        foreach ($contents as $content) {
            SiteContent::updateOrCreate(
                ['key' => $content['key']],
                [
                    'value' => $content['value'],
                    'group' => $content['group'],
                    'hint' => $content['hint'],
                ]
            );
        }
    }
}
