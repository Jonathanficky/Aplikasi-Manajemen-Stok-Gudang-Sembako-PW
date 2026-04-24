{{-- 1. Hubungkan ke Master Layout yang sudah kita perbaiki tadi --}}
@extends('layouts.app')

{{-- 2. Isi judul tab --}}
@section('title', 'Dashboard - Gudang App')

{{-- 3. Masukkan konten dashboard --}}
@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
        <h2 class="text-gray-500 text-sm font-medium uppercase">Total Barang</h2>
        <p class="text-3xl font-bold text-gray-800">120 Item</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
        <h2 class="text-gray-500 text-sm font-medium uppercase">Barang Masuk</h2>
        <p class="text-3xl font-bold text-gray-800">45</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-red-500">
        <h2 class="text-gray-500 text-sm font-medium uppercase">Barang Keluar</h2>
        <p class="text-3xl font-bold text-gray-800">12</p>
    </div>
</div>

<div class="mt-8 bg-white p-6 rounded-lg shadow-md">
    <h3 class="text-xl font-bold mb-4 text-gray-800">Selamat Datang, {{ $nama ?? 'Albari' }}!</h3>
    <p class="text-gray-600">Ini adalah halaman dashboard manajemen stok gudang sembako kamu. Semua sudah terintegrasi dengan Master Layout.</p>
</div>
@endsection