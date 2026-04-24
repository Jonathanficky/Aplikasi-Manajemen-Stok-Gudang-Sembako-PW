<aside class="fixed top-0 left-0 z-40 w-64 h-screen bg-blue-700 text-white shadow-xl">
    <div class="h-full px-4 py-6 overflow-y-auto">
        <h2 class="text-2xl font-bold mb-10 text-center tracking-wider">STOK GUDANG</h2>
        <nav class="space-y-4">
            <a href="/pages/dashboard" class="block py-2.5 px-4 rounded transition hover:bg-blue-800 {{ request()->is('pages/dashboard') ? 'bg-blue-900' : '' }}">Dashboard</a>
            
            <a href="/pages/product" class="block py-2.5 px-4 rounded transition hover:bg-blue-800 {{ request()->is('pages/product') ? 'bg-blue-900' : '' }}">Data Barang</a>
            
            <a href="/pages/masuk" class="block py-2.5 px-4 rounded transition hover:bg-blue-800">Barang Masuk</a>
            
            <a href="/logout" class="block py-2.5 px-4 rounded transition hover:bg-red-600 mt-10">Logout</a>
        </nav>
    </div>
</aside>