<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\WelcomeController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Rute untuk halaman beranda (Welcome)
Route::get('/', function () {
    return view('welcome'); // Menampilkan halaman welcome
});

// Rute untuk dashboard yang hanya bisa diakses jika sudah login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Menampilkan halaman dashboard
    })->name('dashboard');
});

// Rute untuk dashboard admin yang hanya bisa diakses oleh admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Rute untuk halaman welcome yang hanya bisa diakses oleh pengguna yang sudah login
Route::middleware('auth')->group(function () {
    Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
});
