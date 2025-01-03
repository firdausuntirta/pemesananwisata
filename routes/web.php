<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPengunjungController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAdminPengunjungController;

Route::get('/', function () {
    return view('layouts.pengunjung');
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
        Route::redirect('/', '/admin/dashboard');

        Route::get('/dashboard', [AdminController::class, 'index'])
            ->name('admin.dashboard');

        // Tambahkan route admin lainnya di sini
        Route::post('/profile/update', [AdminController::class, 'updateProfile'])
            ->name('admin.profile.update');

        Route::get('/pengunjung/create', [AdminPengunjungController::class, 'create'])->name('admin.pengunjung.create');
        Route::post('/pengunjung', [AdminPengunjungController::class, 'store'])->name('admin.pengunjung.store');
        Route::get('/pengunjung', [AdminPengunjungController::class, 'index'])->name('admin.pengunjung.index');
        Route::get('/pengunjung/{id}', [AdminPengunjungController::class, 'show'])->name('admin.pengunjung.show');
        Route::delete('/pengunjung/{id}', [AdminPengunjungController::class, 'destroy'])->name('admin.pengunjung.destroy');
        Route::put('/pengunjung/{id}', [AdminPengunjungController::class, 'update'])->name('admin.pengunjung.update');
        Route::get('/pengunjung/{id}/edit', [AdminPengunjungController::class, 'edit'])->name('admin.pengunjung.edit');
    });
});
Route::prefix('api')->group(function () {
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/admin/pengunjung/jumlah/today', [ApiAdminPengunjungController::class, 'getJumlahPengunjungToday']);
        Route::get('/admin/pengunjung/charttotaltahunan', [ApiAdminPengunjungController::class, 'getDataPengunjungTahunan']);
        Route::get('/admin/pengunjung/charttotalbulanan', [ApiAdminPengunjungController::class, 'getDataPengunjungBulanan']);
        Route::get('/admin/pengunjung/charttotalharian', [ApiAdminPengunjungController::class, 'getDataPengunjungHarian']);
        Route::get('/admin/pengunjung/jumlah', [ApiAdminPengunjungController::class, 'getJumlahPengunjung']);
        Route::post('/admin/pengunjung/input', [ApiAdminPengunjungController::class, 'store']);
        Route::get('/admin/pengunjung', [ApiAdminPengunjungController::class, 'index']);
        Route::get('/admin/pengunjung/{id}', [ApiAdminPengunjungController::class, 'show']);
        Route::put('/admin/pengunjung/{id}', [ApiAdminPengunjungController::class, 'update']);
        Route::delete('/admin/pengunjung/{id}', [ApiAdminPengunjungController::class, 'destroy']);
    });
});
