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
    Route::get('/panduan', function () {
        return Inertia::render('Panduan');
    })->name('panduan');
    Route::get('/sumberdata', function () {
        return Inertia::render('Sumberdata');
    })->name('sumberdata');
    Route::get('/laporan', function () {
        return Inertia::render('Laporan');
    })->name('laporan');
    Route::get('/bantuan', function () {
        return Inertia::render('Bantuan');
    })->name('bantuan');
});
