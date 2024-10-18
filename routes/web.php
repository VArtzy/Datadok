<?php

use App\Http\Controllers\DatasetController;
use App\Http\Controllers\ReportController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ReportController::class, 'dashboard'])->name('dashboard');
    Route::get('/panduan', function () {
        return Inertia::render('Panduan');
    })->name('panduan');
    Route::get('/sumberdata', [DatasetController::class, 'index'])->name('sumberdata');
    Route::get('/laporan', [ReportController::class, 'index'])->name('laporan');
    Route::get('/laporan/{report}', [ReportController::class, 'show'])->name('reports.show');
    Route::post('/laporan', [ReportController::class, 'store'])->name('reports.store');
    Route::get('/kontak', function () {
        return Inertia::render('Kontak');
    })->name('kontak');
    Route::get('/tentang', function () {
        return Inertia::render('Tentang');
    })->name('tentang');
    Route::post('/tambahdata', [DatasetController::class, 'upload'])->name('datasets.store');
    Route::get('/partner', function () {
        return Inertia::render('Partner');
    })->name('partners');
    Route::get('/karir', function () {
        return Inertia::render('Karir');
    })->name('Karir');
    Route::get('/privasidata', function () {
        return Inertia::render('Privasidata');
    })->name('privasidata');
    Route::get('/rilis', function () {
        return Inertia::render('Rilis');
    })->name('rilis');
    Route::get('/blog', function () {
        return Inertia::render('Blog');
    })->name('blog');
});
