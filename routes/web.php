<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;

// Rute Utama (Halaman Welcome/Beranda)
Route::get('/', [ProjectController::class, 'index'])->name('home');

// Rute Publik
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/projects', [ProjectController::class, 'projects'])->name('projects');

// Rute Otentikasi (Guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Rute yang membutuhkan Login (Auth Middleware)
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Fitur Ganti Password
    Route::get('/password/ganti', [AuthController::class, 'changePassword'])->name('password.change');
    Route::post('/password/ganti', [AuthController::class, 'updatePassword'])->name('password.update');
    
    // Fitur Profil
    Route::get('/profil/edit', [AuthController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profil/edit', [AuthController::class, 'updateProfile'])->name('profile.update');
    
    // Manajemen Proyek
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
});