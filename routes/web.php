<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes - Praktikum Pemrograman Framework
|--------------------------------------------------------------------------
*/

// ==========================================
// SOAL 1 & 2: GUEST ROUTES DENGAN PARTIAL VIEW
// ==========================================

// 1. Home ( / )
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Login ( /auth )
Route::get('/auth', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/auth', [AuthController::class, 'login'])->name('login.post');

// Alias untuk /login -> redirect ke /auth
Route::get('/login', function () {
    return redirect()->route('login');
});

// 3. Register ( /register )
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Landing page template laundry original (opsional)
Route::get('/laundry-landing', function () {
    return view('laundry.index');
})->name('laundry.landing');


// ==========================================
// ADMIN & OPERASIONAL LAUNDRY
// ==========================================

// DASHBOARD ADMIN
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

// MATAKULIAH (Pertemuan 3)
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// QUESTION (Pertemuan 4)
Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// FORM PEMESANAN LAUNDRY
Route::get('/pesan-laundry', function () {
    return view('laundry.create');
})->name('laundry.create');

// SIMPAN PESANAN LAUNDRY
Route::post('/pesan-laundry', [OrderController::class, 'store'])
    ->name('pesanan.store');

// DAFTAR PESANAN ADMIN
Route::get('/admin/orders', [OrderController::class, 'index'])
    ->name('laundry.index');

// UPDATE STATUS PESANAN
Route::patch('/pesanan/{id}/status', [OrderController::class, 'updateStatus'])
    ->name('pesanan.updateStatus');

// MANAJEMEN USER ADMIN
Route::resource('/admin/users', UserController::class)->names('users');
