<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

// 1. Kalau buka localhost:8000 langsung lempar ke dashboard yang benar
Route::get('/', function () {
    return redirect('/pages/dashboard');
});

// 2. Semua halaman PBL kamu dikumpulin di sini
Route::prefix('pages')->group(function () {

    // Halaman Dashboard
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    // Halaman Produk (Tabel yang tadi sudah berhasil)
    Route::get('/product', [ProdukController::class, 'index'])->name('product.index');

    // Halaman lainnya (buat dummy aja biar gak 404)
    Route::view('/masuk', 'pages.dashboard')->name('masuk');
});