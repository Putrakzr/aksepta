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
                ['label' => 'Branding & Logo', 'icon' => 'image', 'route' => 'admin.settings.index'],
                ['label' => 'Setelan Umum', 'icon' => 'settings', 'route' => 'admin.settings.index'],
            ]
        ];

        return view('admin.dashboard', compact('navigation'));
    }

    public function settingsIndex()
    {
        $contents = SiteContent::orderBy('group')->orderBy('key')->get();
        return view('admin.settings.index', compact('contents'));
    }

    public function settingsUpdate(Request $request)
    {
        foreach ($request->content as $key => $value) {
            $content = SiteContent::where('key', $key)->first();
            if ($content) {
                $content->update(['value' => $value]);
                Cache::forget("site_content_{$key}");
            }
        }

        return back()->with('success', 'Pengaturan situs berhasil diperbarui!');
    }

    public function update(Request $request, SiteContent $content)
    {
        $request->validate([
            'value' => 'nullable|string',
        ]);

        $content->update([
            'value' => $request->value,
        ]);

        Cache::forget("site_content_{$content->key}");

        return back()->with('success', "Content '{$content->key}' updated successfully.");
    }

    public function logoUpdate(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo-' . time() . '.' . $file->getClientOriginalExtension();
            
            // Store in storage/app/public
            $file->storeAs('public', $filename);

            // Triple-Write for Hostinger compatibility (Ensures visibility in root installs)
            try {
                @copy(storage_path('app/public/'.$filename), public_path($filename));
                @copy(storage_path('app/public/'.$filename), base_path($filename));
            } catch (\Exception $e) {
                // silenty fail if permissions are restricted, storage is still our primary
            }

            // Update LogoApp table (New Table)
            \App\Models\LogoApp::create([
                'file_name' => $filename,
                'file_path' => 'storage/' . $filename,
                'mime_type' => $file->getClientMimeType(),
            ]);

            // Sync SiteContent key for backward compatibility
            SiteContent::updateOrCreate(
                ['key' => 'site_logo'],
                ['value' => $filename]
            );

            // Flush all cache to ensure global updates
            Cache::flush();

            return back()->with('success', 'Logo situs berhasil diperbarui!');
        }

        return back()->with('error', 'Gagal mengunggah logo.');
    }
}
