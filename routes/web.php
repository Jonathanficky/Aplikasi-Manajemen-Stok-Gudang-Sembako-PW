<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', function () {
    return view('app');
});
=======
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', [BarangController::class, 'tampilkan']);
>>>>>>> bb1d15a8ad6975885f7f5cfb4e5f7b5c0fae9f1f
