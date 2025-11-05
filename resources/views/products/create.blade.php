@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Produk Baru</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" 
                                   id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}" required>
                            @error('nama_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tipe_produk" class="form-label">Tipe Produk</label>
                            <select class="form-select @error('tipe_produk') is-invalid @enderror" 
                                    id="tipe_produk" name="tipe_produk" required>
                                <option value="">Pilih Tipe Produk</option>
                                <option value="pupuk" {{ old('tipe_produk') == 'pupuk' ? 'selected' : '' }}>Pupuk</option>
                                <option value="bibit" {{ old('tipe_produk') == 'bibit' ? 'selected' : '' }}>Bibit</option>
                            </select>
                            @error('tipe_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror" 
                                   id="kategori" name="kategori" value="{{ old('kategori') }}" required>
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="harga_subsidi" class="form-label">Harga Subsidi</label>
                            <input type="number" step="0.01" class="form-control @error('harga_subsidi') is-invalid @enderror" 
                                   id="harga_subsidi" name="harga_subsidi" value="{{ old('harga_subsidi') }}" required>
                            @error('harga_subsidi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="harga_normal" class="form-label">Harga Normal</label>
                            <input type="number" step="0.01" class="form-control @error('harga_normal') is-invalid @enderror" 
                                   id="harga_normal" name="harga_normal" value="{{ old('harga_normal') }}" required>
                            @error('harga_normal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="stok_produk" class="form-label">Stok Produk (kg)</label>
                            <input type="number" class="form-control @error('stok_produk') is-invalid @enderror" 
                                   id="stok_produk" name="stok_produk" value="{{ old('stok_produk') }}" required>
                            @error('stok_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
                                   id="gambar" name="gambar" accept="image/*" required>
                            @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                      id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
