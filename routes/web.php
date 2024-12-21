<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::prefix('admin')->group(function () {
    // Redirect root admin ke login
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

    // Halaman Login
    Route::get('/login', [AdminController::class, 'showLoginForm'])
        ->name('admin.login')
        ->middleware('guest:admin');

    // Proses Login
    Route::post('/login', [AdminController::class, 'login'])
        ->name('admin.login.process')
        ->middleware('guest:admin');

    // Logout
    Route::post('/logout', [AdminController::class, 'logout'])
        ->name('admin.logout');

    // Group Route Admin (Butuh Autentikasi)
    Route::middleware(['admin.auth'])->group(function () {
        // Dashboard Admin
        Route::get('/dashboard', [AdminController::class, 'index'])
            ->name('admin.dashboard');

        // Tambahkan route admin lainnya di sini
    });
});


require __DIR__ . '/auth.php';
