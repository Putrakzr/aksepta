<?php

use App\Models\SiteContent;
use Illuminate\Support\Facades\Cache;

if (!function_exists('site_content')) {
    /**
     * Get site content by key with optional default value.
     * 
     * @param string $key
     * @param string|null $default
     * @return string|null
     */
    function site_content(string $key, ?string $default = null): ?string
    {
        return Cache::rememberForever("site_content_{$key}", function () use ($key, $default) {
            $content = SiteContent::where('key', $key)->first();
            return $content ? $content->value : $default;
        });
    }
}

if (!function_exists('get_site_logo')) {
    /**
     * Get site logo URL with fallback for Hostinger Shared hosting.
     * 
     * @return string
     */
    function get_site_logo(): string
    {
        // New: Priority from LogoApp table
        try {
            $logoRecord = \App\Models\LogoApp::latest('id')->first();
            $logo = $logoRecord ? $logoRecord->file_name : site_content('site_logo', 'logo-aksepta.png');
        } catch (\Exception $e) {
            $logo = site_content('site_logo', 'logo-aksepta.png');
        }

        // Clean up common path issues
        $logo = str_replace(['storage/', '/storage/'], '', $logo);

        // Try different paths for reliability (Triple-Write Strategy)
        // 1. Root Folder (Hostinger root install)
        if (file_exists(base_path($logo))) {
            return "/{$logo}";
        }

        // 2. Direct Public Folder
        if (file_exists(public_path($logo))) {
            return "/{$logo}";
        }

        // 3. Symlinked Storage
        if (file_exists(public_path("storage/{$logo}"))) {
            return "/storage/{$logo}";
        }

        // 4. Fallback Controller (Bypass Symlink)
        return "/api/media/{$logo}";
    }
}
