<!-- resources/views/home.blade.php -->
@extends('layouts.app')
@section('title', 'Selamat Datang')

@section('content')
<div class="card text-center" style="background: linear-gradient(135deg, #1a5d1a, #3cb371); color: white;">
    <h1>Selamat Datang!</h1>
    <p style="font-size: 1.2rem; margin: 20px 0;">
        Mari bergabung untuk mendapatkan pupuk dan bibit bersubsidi dengan mudah dan transparan.
    </p>
    <img src="https://via.placeholder.com/600x250?text=Petani+Indonesia+Bersama" alt="Petani" style="border-radius: 12px; margin: 20px 0; max-width: 100%;">
    
    <!-- PERBAIKAN: Gunakan route('register') -->
    <a href="{{ route('register') }}" class="btn" style="font-size: 1.2rem; padding: 16px 32px;">Mulai Sekarang</a>
    
    <p style="margin-top: 20px;">
        Sudah punya akun? 
        <a href="{{ route('login') }}" style="color: #ffff99; font-weight: bold;">Masuk di Sini</a>
    </p>
</div>

<div class="grid">
    <div class="card">
        <h3>Pemesanan Mudah</h3>
        <p>Pesan pupuk dan bibit hanya dengan beberapa klik.</p>
    </div>
    <div class="card">
        <h3>Notifikasi Langsung</h3>
        <p>Dapatkan update status pengajuan secara real-time.</p>
    </div>
    <div class="card">
        <h3>Ambil di Balai Desa</h3>
        <p>Pengambilan mudah di balai desa terdekat.</p>
    </div>
</div>
@endsection