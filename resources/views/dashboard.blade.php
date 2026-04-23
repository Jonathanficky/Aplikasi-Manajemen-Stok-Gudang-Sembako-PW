@extends('layouts.main')

@section('title', 'Dashboard - Gudang App')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800 uppercase tracking-wide">Ringkasan Gudang</h1>
    <hr class="mt-2 border-b-2 border-blue-500 w-20">
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-600">
        <p class="text-xs font-bold text-blue-600 uppercase">Total Barang</p>
        <p class="text-3xl font-extrabold">100</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
        <p class="text-xs font-bold text-green-500 uppercase">Barang Masuk</p>
        <p class="text-3xl font-extrabold">50</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-red-500">
        <p class="text-xs font-bold text-red-500 uppercase">Barang Keluar</p>
        <p class="text-3xl font-extrabold">30</p>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-md">
    <h2 class="text-lg font-bold text-gray-700 mb-6 flex items-center">
        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded mr-2">Baru</span>
        Katalog Visual Barang
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        
        <div class="group border rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
            <div class="h-40 overflow-hidden">
                <img src="{{ asset('images/indomie.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300" alt="Indomie">
            </div>
            <div class="p-3 bg-gray-50 text-center">
                <p class="text-sm font-semibold text-gray-700">Indomie Goreng</p>
            </div>
        </div>

        <div class="group border rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
            <div class="h-40 overflow-hidden">
                <img src="{{ asset('images/bunga.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300" alt="Bunga">
            </div>
            <div class="p-3 bg-gray-50 text-center">
                <p class="text-sm font-semibold text-gray-700">Stok Bunga Dekorasi</p>
            </div>
        </div>

        <div class="group border rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
            <div class="h-40 overflow-hidden">
                <img src="{{ asset('images/gudang.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300" alt="Gudang">
            </div>
            <div class="p-3 bg-gray-50 text-center">
                <p class="text-sm font-semibold text-gray-700">Area Gudang A</p>
            </div>
        </div>

        <div class="group border rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
            <div class="h-40 overflow-hidden">
                <img src="{{ asset('images/gambar1.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300" alt="Gambar1">
            </div>
            <div class="p-3 bg-gray-50 text-center">
                <p class="text-sm font-semibold text-gray-700">Produk Lainnya</p>
            </div>
        </div>

    </div>
</div>
@endsection