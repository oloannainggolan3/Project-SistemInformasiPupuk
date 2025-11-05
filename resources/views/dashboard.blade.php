@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<h2>Selamat Datang, {{ Auth::user()->nama_lengkap }}!</h2>

<div style="float: right;">
    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-sm">Logout</button>
    </form>
</div>

<div class="card">
    <h3>Informasi Akun Anda</h3>
    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
    <p><strong>Alamat Rumah:</strong> {{ Auth::user()->alamat }}</p>
    <p><strong>Balai Desa:</strong> {{ Auth::user()->alamat_balai_desa }}</p>
    <p><strong>No. Telp:</strong> {{ Auth::user()->no_telp }}</p>
</div>

<div class="grid">
    <div class="card" style="background: #e8f5e9;">
        <h3>Pupuk Subsidi</h3>
        <p>Pupuk bersubsidi sesuai kuota pemerintah.</p>
        <button class="btn">Pesan Pupuk</button>
    </div>
    <div class="card" style="background: #e8f5e9;">
        <h3>Bibit Subsidi</h3>
        <p>Bibit unggul untuk hasil panen maksimal.</p>
        <button class="btn">Pesan Bibit</button>
    </div>
</div>

<div class="card">
    <h3>Visi & Misi</h3>
    <div class="grid">
        <div>
            <h4>Visi</h4>
            <p>Menjadi platform digital terdepan dalam distribusi pupuk dan bibit bersubsidi.</p>
        </div>
        <div>
            <h4>Misi</h4>
            <p>Menyediakan akses mudah, transparan, dan adil bagi seluruh petani Indonesia.</p>
        </div>
    </div>
</div>
@endsection