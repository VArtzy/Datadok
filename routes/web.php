<?php

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
    Route::get('/fitur', function () {
        return Inertia::render('fitur');
    })->name('fitur');
    Route::get('/panduan', function () {
        return Inertia::render('panduan');
    })->name('panduan');
    Route::get('/harga', function () {
        return Inertia::render('harga');
    })->name('harga');
    Route::get('/blog', function () {
        return Inertia::render('blog');
    })->name('blog');
});
