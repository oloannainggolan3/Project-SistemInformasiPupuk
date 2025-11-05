@extends('layouts.app')
@section('title', 'Daftar')

@section('content')
<div class="card" style="max-width: 600px; margin: 0 auto;">
    <h2 class="text-center">Daftar Akun</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('register.process') }}">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
        </div>
        <div class="form-group">
            <label>Alamat Rumah</label>
            <input type="text" name="alamat" value="{{ old('alamat') }}" required>
        </div>
        <div class="form-group">
            <label>Alamat Balai Desa</label>
            <input type="text" name="alamat_balai_desa" value="{{ old('alamat_balai_desa') }}" required>
        </div>
        <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="no_telp" value="{{ old('no_telp') }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required minlength="8">
        </div>
        <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn" style="width: 100%;">Daftar</button>
    </form>
</div>
@endsection