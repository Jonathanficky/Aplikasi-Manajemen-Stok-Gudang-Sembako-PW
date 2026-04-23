<!DOCTYPE html>

<img src="/images/gudang.jpg" width="200">
<img src="/images/indomie.jpg" width="200">
<link rel="stylesheet" href="/styles/albari.css">

<img src="/images/gambar1.jpg" width="200">
<img src="/images/bunga.jpg" width="200">
<html>
<head>
    <link rel="stylesheet" href="/styles/albari.css">
    <h1>INI TEST CSS</h1>
    @vite('resources/css/app.css')

</head>
<body></body>

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 h-screen bg-blue-700 text-white p-5">
        <h2 class="text-2xl font-bold mb-5">Gudang App</h2>
        <ul>
            <li class="mb-3">Dashboard</li>
            <li class="mb-3">Data Barang</li>
            <li class="mb-3">Barang Masuk</li>
            <li class="mb-3">Barang Keluar</li>
        </ul>
    </div>

    <!-- Content -->
    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold mb-5">Dashboard</h1>

        <div class="grid grid-cols-3 gap-5">
            <div class="bg-white p-5 rounded shadow">
                <h2 class="text-xl font-semibold">Total Barang</h2>
                <p class="text-2xl">100</p>
            </div>

            <div class="bg-white p-5 rounded shadow">
                <h2 class="text-xl font-semibold">Barang Masuk</h2>
                <p class="text-2xl">50</p>
            </div>

            <div class="bg-white p-5 rounded shadow">
                <h2 class="text-xl font-semibold">Barang Keluar</h2>
                <p class="text-2xl">30</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>