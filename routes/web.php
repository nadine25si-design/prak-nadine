
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;

// HALAMAN UTAMA
Route::get('/', function () {
    return view('laundry.index');
});

// DASHBOARD ADMIN
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

// MATAKULIAH
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// QUESTION
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
