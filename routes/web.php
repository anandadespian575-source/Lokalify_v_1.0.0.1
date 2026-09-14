<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Route untuk Menampilkan Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// 2. Route untuk Proses Simpan/Upload Data Wisata (POST)
Route::post('/admin/wisata', [WisataController::class, 'store'])
    ->name('wisata.store');