@extends('layouts.app')

@section('title', 'Daftar Produk Sembako')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-bold mb-4">Data Barang</h2>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">ID</th>
                <th class="border p-2">Product</th>
                <th class="border p-2">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
            <tr class="text-center">
                <td class="border p-2">{{ $post['id'] }}</td>
                {{-- Ganti 'product' jadi 'nama' supaya sesuai dengan Controller --}}
                <td class="border p-2">{{ $post['nama'] }}</td>
                <td class="border p-2">Rp {{ number_format($post['harga'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection