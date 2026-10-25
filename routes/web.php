<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;

// --- HALAMAN UTAMA & PENGGUNA ---
Route::get('/', function () {
    return view('laundry.index'); 
});

// --- DASHBOARD ADMIN ---
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

// --- MATAKULIAH ROUTES ---
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// --- QUESTION ROUTES ---
Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// --- LAUNDRY ROUTES ---
// 1. Menampilkan form pemesanan laundry (Method GET)
Route::get('/pesan-laundry', function () {
    return view('laundry.create'); 
})->name('laundry.create');

// 2. Menyimpan data pemesanan laundry (Method POST)
Route::post('/pesan-laundry', [OrderController::class, 'store'])
    ->name('pesanan.store');

// 3. Menampilkan daftar pesanan untuk Admin
Route::get('/admin/orders', [OrderController::class, 'index'])
    ->name('laundry.index');

Route::patch('/pesanan/{id}/status', [OrderController::class, 'updateStatus'])->name('pesanan.updateStatus');

Route::resource('/admin/users', UserController::class)->names('users');