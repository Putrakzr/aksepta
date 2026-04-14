<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services', function () {
    return view('services');
});

Route::get('/ecosystem', function () {
    return view('ecosystem');
});

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/articles', [App\Http\Controllers\PortfolioController::class, 'articles'])->name('portfolio.articles');
Route::get('/portfolio/articles/{article}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.articles.show');
Route::get('/portfolio/gallery', [App\Http\Controllers\PortfolioController::class, 'gallery'])->name('portfolio.gallery');
Route::get('/portfolio/documentation', [App\Http\Controllers\PortfolioController::class, 'documentation'])->name('portfolio.documentation');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Individual Service Routes
Route::get('/services/digital-marketing', [App\Http\Controllers\ServiceController::class, 'digitalMarketing'])->name('services.digital-marketing');
Route::get('/services/creative-production', [App\Http\Controllers\ServiceController::class, 'creativeProduction'])->name('services.creative-production');
Route::get('/services/website-development', [App\Http\Controllers\ServiceController::class, 'webDevelopment'])->name('services.website-development');
Route::get('/services/training-certification', [App\Http\Controllers\ServiceController::class, 'training'])->name('services.training');

// Individual Ecosystem Routes
Route::get('/ecosystem/adma', [App\Http\Controllers\EcosystemController::class, 'adma'])->name('ecosystem.adma');
Route::get('/ecosystem/admo', [App\Http\Controllers\EcosystemController::class, 'admo'])->name('ecosystem.admo');
Route::get('/ecosystem/apex', [App\Http\Controllers\EcosystemController::class, 'apex'])->name('ecosystem.apex');
Route::get('/ecosystem/adds', [App\Http\Controllers\EcosystemController::class, 'adds'])->name('ecosystem.adds');
Route::get('/ecosystem/abco', [App\Http\Controllers\EcosystemController::class, 'abco'])->name('ecosystem.abco');
Route::get('/ecosystem/ario', [App\Http\Controllers\EcosystemController::class, 'ario'])->name('ecosystem.ario');
Route::get('/ecosystem/hub', [App\Http\Controllers\EcosystemController::class, 'hub'])->name('ecosystem.hub');
Route::get('/ecosystem/structure', [App\Http\Controllers\EcosystemController::class, 'structure'])->name('ecosystem.structure');

// Ecosystem Sub-routes (placeholder for backward compatibility/dynamic highlighting)
Route::get('/ecosystem/{unit}', function ($unit) {
    return view('ecosystem', ['unit' => $unit]);
})->where('unit', '.*');

Route::get('/ecosystem/business-core/{unit}', function ($unit) {
    return view('ecosystem', ['unit' => $unit]);
})->where('unit', '.*');

// Individual Portfolio Routes
Route::get('/portfolio/{type}', function ($type) {
    return view('portfolio', ['type' => $type]);
})->where('type', '.*');

// Auth Routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Admin Routes (Authenticated & SuperAdmin only)
Route::middleware(['auth', 'superadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('/settings', [App\Http\Controllers\Admin\AdminController::class, 'settingsIndex'])->name('settings.index');
    Route::post('/settings', [App\Http\Controllers\Admin\AdminController::class, 'settingsUpdate'])->name('settings.update');
    Route::post('/settings/logo', [App\Http\Controllers\Admin\AdminController::class, 'logoUpdate'])->name('settings.logo');
    Route::patch('/content/{content}', [App\Http\Controllers\Admin\AdminController::class, 'update'])->name('content.update');
    
    // Portfolio CRUDs
    Route::resource('projects', App\Http\Controllers\Admin\AdminProjectController::class)->except(['show']);
    Route::resource('articles', App\Http\Controllers\Admin\AdminArticleController::class)->except(['show']);
    Route::resource('galleries', App\Http\Controllers\Admin\AdminGalleryController::class)->except(['show']);
    Route::resource('documentations', App\Http\Controllers\Admin\AdminDocumentationController::class)->except(['show']);
    Route::resource('team', App\Http\Controllers\Admin\AdminTeamController::class)->except(['show']);
});

// Deployment & Asset Fixes (Hostinger)
Route::get('/fix-storage', function () {
    try {
        // Remove existing link if exists
        $link = public_path('storage');
        if (file_exists($link)) {
            if (is_link($link)) {
                unlink($link);
            } else {
                File::deleteDirectory($link);
            }
        }
        
        return "Symlink is disabled on this server. Successfully cleared the 'public/storage' folder to activate the Fallback Asset system. Your logo should now appear!";
    } catch (\Exception $e) {
        return "Error clearing storage link: " . $e->getMessage();
    }
});

// Fallback to serve storage assets using a unique path to bypass Hostinger folder interception
Route::get('/api/media/{filename}', function ($filename) {
    $path = storage_path('app/public/' . $filename);
    
    if (!File::exists($path)) {
        abort(404);
    }
    
    $file = File::get($path);
    $type = File::mimeType($path);
    
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    
    return $response;
})->where('filename', '.*');

Route::get('/fix-all', function () {
    try {
        // Clear all possible caches first
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');

        // Fix Address
        $address = 'Jl. Aminah Syukur No. 2B<br>Samarinda, Kalimantan Timur';
        \App\Models\SiteContent::updateOrCreate(
            ['key' => 'contact_address'],
            ['value' => $address]
        );

        // Debug LogoApp - Fetch all entries
        $allLogos = \App\Models\LogoApp::all();
        $generatedUrl = get_site_logo();
        $envAppUrl = config('app.url');
        
        // Fix Logo (Old Table)
        \App\Models\SiteContent::updateOrCreate(
            ['key' => 'site_logo'],
            ['value' => 'logo-aksepta.png']
        );

        // Fix Logo (New Specialized Table) - ONLY if table is empty
        if ($allLogos->isEmpty()) {
            \App\Models\LogoApp::create([
                'file_name' => 'logo-aksepta.png',
                'file_path' => 'storage/app/public/logo-aksepta.png',
                'mime_type' => 'image/png'
            ]);
            $allLogos = \App\Models\LogoApp::all();
        }

        // Check Paths
        $paths = [
            'base_path' => base_path(),
            'public_path' => public_path(),
            'storage_path' => storage_path('app/public'),
        ];

        // Check Writability
        $writability = [
            'storage' => is_writable($paths['storage_path']),
            'public' => is_writable($paths['public_path']),
            'root' => is_writable($paths['base_path']),
        ];

        // Apply Triple-Write Sync for existing logos
        $checkResults = [];
        foreach ($allLogos as $lRecord) {
            $fName = $lRecord->file_name;
            $source = $paths['storage_path'] . '/' . $fName;
            $checkResults[$fName] = [
                'exists_in_storage' => file_exists($source),
                'exists_in_public' => file_exists($paths['public_path'] . '/' . $fName),
                'exists_in_root' => file_exists($paths['base_path'] . '/' . $fName),
            ];

            if ($checkResults[$fName]['exists_in_storage']) {
                @copy($source, $paths['public_path'] . '/' . $fName);
                @copy($source, $paths['base_path'] . '/' . $fName);
            }
        }

        return "
            <h1>System Status (Deep Path Debug)</h1>
            <p><b>Paths on Server:</b> " . json_encode($paths, JSON_PRETTY_PRINT) . "</p>
            <p><b>Directory Writability:</b> " . json_encode($writability, JSON_PRETTY_PRINT) . "</p>
            <p><b>LogoApp Table Entries:</b> " . $allLogos->toJson(JSON_PRETTY_PRINT) . "</p>
            <p><b>File Existence Check:</b> " . json_encode($checkResults, JSON_PRETTY_PRINT) . "</p>
            <p><b>Generated Logo URL:</b> <a href='$generatedUrl'>$generatedUrl</a></p>
            <hr>
            <a href='/'>Back to Home</a> | <a href='/admin/settings'>Admin Panel</a>
        ";

    } catch (\Exception $e) {
        return "Error fixing system: " . $e->getMessage();
    }
});
