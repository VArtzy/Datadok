<?php

use App\Http\Controllers\UploadController;
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
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/panduan', function () {
        return Inertia::render('Panduan');
    })->name('panduan');
    Route::get('/sumberdata', function () {
        return Inertia::render('Sumberdata');
    })->name('sumberdata');
    Route::get('/laporan', function () {
        return Inertia::render('Laporan');
    })->name('laporan');
    Route::get('/kontak', function () {
        return Inertia::render('Kontak');
    })->name('kontak');
    Route::get('/tentang', function () {
        return Inertia::render('Tentang');
    })->name('tentang');
    Route::post('/tambahdata', [UploadController::class, 'upload'])->name('uploads.upload');
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
});