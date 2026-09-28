<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');