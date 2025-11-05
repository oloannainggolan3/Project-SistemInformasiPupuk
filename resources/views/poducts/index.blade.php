@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Daftar Produk</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Tipe</th>
                                    <th>Kategori</th>
                                    <th>Harga Subsidi</th>
                                    <th>Harga Normal</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id_produk }}</td>
                                    <td>
                                        <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama_produk }}" 
                                             style="max-width: 50px; height: auto;">
                                    </td>
                                    <td>{{ $product->nama_produk }}</td>
                                    <td>{{ $product->tipe_produk }}</td>
                                    <td>{{ $product->kategori }}</td>
                                    <td>Rp {{ number_format($product->harga_subsidi, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($product->harga_normal, 0, ',', '.') }}</td>
                                    <td>{{ number_format($product->stok_produk, 0, ',', '.') }} kg</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('products.edit', $product->id_produk) }}" 
                                               class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id_produk) }}" 
                                                  method="POST" class="d-inline"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection