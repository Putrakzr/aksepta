<?php

use Illuminate\Support\Facades\Route;

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
    Route::patch('/content/{content}', [App\Http\Controllers\Admin\AdminController::class, 'update'])->name('content.update');
    
    // Portfolio CRUDs
    Route::resource('projects', App\Http\Controllers\Admin\AdminProjectController::class)->except(['show']);
    Route::resource('articles', App\Http\Controllers\Admin\AdminArticleController::class)->except(['show']);
    Route::resource('galleries', App\Http\Controllers\Admin\AdminGalleryController::class)->except(['show']);
    Route::resource('documentations', App\Http\Controllers\Admin\AdminDocumentationController::class)->except(['show']);
    Route::resource('team', App\Http\Controllers\Admin\AdminTeamController::class)->except(['show']);
});
