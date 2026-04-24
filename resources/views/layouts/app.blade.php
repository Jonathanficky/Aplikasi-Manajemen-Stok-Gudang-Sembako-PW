<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gudang App')</title>
    
    {{-- CSS Lokal kamu --}}
    <link rel="stylesheet" href="{{ asset('styles/albari.css') }}">
    
    {{-- Tailwind CDN (Ini pengganti Vite untuk tugas praktikum) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- HAPUS ATAU KOMENTAR BARIS DI BAWAH INI --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="bg-gray-100">

    <div class="flex">
        <div class="w-64 h-screen bg-blue-700 text-white p-5 fixed">
            <h2 class="text-2xl font-bold mb-5">Gudang App</h2>
            <ul>
                <li class="mb-3"><a href="/pages/dashboard" class="hover:underline">Dashboard</a></li>
                <li class="mb-3"><a href="/pages/product" class="hover:underline">Data Barang</a></li>
                <li class="mb-3">Barang Masuk</li>
                <li class="mb-3">Barang Keluar</li>
            </ul>
        </div>

        <div class="flex-1 ml-64 p-10">
            {{-- Bagian gambar-gambar kamu tadi saya taruh di atas sini --}}
            <div class="flex gap-2 mb-5">
                <img src="{{ asset('images/gudang.jpg') }}" width="100" class="rounded shadow">
                <img src="{{ asset('images/indomie.jpg') }}" width="100" class="rounded shadow">
            </div>

            {{-- DISINI TEMPAT TABEL BARANG MUNCUL --}}
            @yield('content')
        </div>
    </div>

</body>
</html>