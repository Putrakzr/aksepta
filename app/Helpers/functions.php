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
