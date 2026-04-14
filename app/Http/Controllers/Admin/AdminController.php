<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function index()
    {
        // Konten utama tidak lagi ditampilkan di dashboard untuk menyederhanakan tampilan.

        // Beginner-friendly sidebar configuration
        // Just add or remove items here to update the sidebar.
        $navigation = [
            'Manajemen Konten Rutin' => [
                ['label' => 'Karya Kami (Our Work)', 'icon' => 'folder-open', 'route' => 'admin.projects.index'],
                ['label' => 'Artikel & Blog', 'icon' => 'book-open', 'route' => 'admin.articles.index'],
                ['label' => 'Galeri Foto', 'icon' => 'image', 'route' => 'admin.galleries.index'],
                ['label' => 'Dokumentasi & File', 'icon' => 'file-text', 'route' => 'admin.documentations.index'],
                ['label' => 'Struktur Organisasi', 'icon' => 'users', 'route' => 'admin.team.index'],
            ],
            'Konfigurasi Situs' => [


            ]
        ];

        return view('admin.dashboard', compact('navigation'));
    }




}
