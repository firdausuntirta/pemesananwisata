<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAdminPengunjungController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rute API
Route::post('/admin/login', [AdminController::class, 'apiLogin']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/admin/logout', [AdminController::class, 'apiLogout']);
    Route::get('/pengunjung/jumlah/today', [ApiAdminPengunjungController::class, 'getJumlahPengunjungToday']);
    Route::get('/pengunjung/charttotaltahunan', [ApiAdminPengunjungController::class, 'getDataPengunjungTahunan']);
    Route::get('/pengunjung/charttotalbulanan', [ApiAdminPengunjungController::class, 'getDataPengunjungBulanan']);
    Route::get('/pengunjung/charttotalharian', [ApiAdminPengunjungController::class, 'getDataPengunjungHarian']);
    Route::get('/pengunjung/jumlah', [ApiAdminPengunjungController::class, 'getJumlahPengunjung']);
    Route::post('/pengunjung/input', [ApiAdminPengunjungController::class, 'store']);
    Route::get('/pengunjung', [ApiAdminPengunjungController::class, 'index']);
    Route::get('/pengunjung/{id}', [ApiAdminPengunjungController::class, 'show']);
    Route::put('/pengunjung/{id}', [ApiAdminPengunjungController::class, 'update']);
    Route::delete('/pengunjung/{id}', [ApiAdminPengunjungController::class, 'destroy']);
});

