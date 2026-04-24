<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() 
    { 
        // Data di bawah ini disesuaikan dengan variabel yang kamu panggil di Blade (nama & harga)
        $data = [ 
            [
                'id' => 1, 
                'nama' => 'Laptop', 
                'harga' => 10000000
            ], 
            [
                'id' => 2, 
                'nama' => 'Mouse', 
                'harga' => 150000
            ], 
            [
                'id' => 3, 
                'nama' => 'Keyboard', 
                'harga' => 450000
            ], 
        ]; 
        
        // Memanggil file list_barang.blade.php yang ada di folder resources/views/pages/
        return view('pages.product', compact('data')); 
    }
}