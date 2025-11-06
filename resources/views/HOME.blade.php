<!-- resources/views/home.blade.php -->
@extends('layouts.app')
@section('title', 'Selamat Datang')

@section('content')
<style>
    /* ====== HEADER SECTION ====== */
    header.site-header {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        background-color: #155d27;
        padding: 15px 80px;
        color: white;
    }
    header.site-header img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
    }
    header.site-header .header-text h2 {
        font-size: 1.4rem;
        font-weight: 700;
        margin: 0;
    }
    header.site-header .header-text p {
        font-size: 0.9rem;
        margin: 0;
        opacity: 0.9;
    }

    /* ====== HERO SECTION ====== */
    .hero {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: linear-gradient(135deg, #155d27, #3cb371);
        color: white;
        padding: 60px 80px;
        border-radius: 0 0 30px 30px;
        flex-wrap: wrap;
    }
    .hero-text {
        max-width: 500px;
    }
    .hero-text h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .hero-text p {
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 25px;
    }
    .hero-buttons a {
        display: inline-block;
        margin-right: 10px;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
    }
    .btn-primary {
        background-color: #1a7f37;
        color: white;
    }
    .btn-primary:hover {
        background-color: #14682c;
    }
    .btn-outline {
        border: 2px solid white;
        color: white;
    }
    .btn-outline:hover {
        background-color: white;
        color: #1a7f37;
    }
    .hero-image img {
        border-radius: 50%;
        width: 380px;
        height: 380px;
        object-fit: cover;
    }

    /* ====== FITUR SECTION ====== */
    .features {
        text-align: center;
        padding: 60px 40px;
        background-color: #f5fff5;
    }
    .features h2 {
        font-size: 1.8rem;
        font-weight: bold;
        color: #155d27;
        margin-bottom: 10px;
    }
    .features p {
        color: #444;
        margin-bottom: 40px;
    }
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    .feature-card {
        background: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .feature-card:hover {
        transform: translateY(-5px);
    }
    .feature-card h3 {
        color: #155d27;
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* ====== CTA SECTION ====== */
    .cta {
        text-align: center;
        padding: 50px;
        background: #e8f5e9;
    }
    .cta h3 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #155d27;
        margin-bottom: 20px;
    }
    .cta a {
        padding: 12px 28px;
        background: #1a7f37;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
    }
    .cta a:hover {
        background: #14682c;
    }
</style>

<!-- ====== HEADER SECTION ====== -->
<header class="site-header">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    <div class="header-text">
        <h2>Pupuk & Bibit Subsidi</h2>
        <p>Sistem Informasi Pemerintah</p>
    </div>
</header>

<!-- ====== HERO SECTION ====== -->
<section class="hero">
    <div class="hero-image">
        <img src="{{ asset('images/petani.jpg') }}" alt="Petani">
    </div>
    <div class="hero-text">
        <h1>Selamat Datang!</h1>
        <p>
            Mari bergabung agar kita meningkatkan hasil pertanian dengan akses mudah ke pupuk dan bibit subsidi dari 
            pemerintah Indonesia. Dapatkan informasi, layanan, dan panduan agar pertanian semakin maju dan sejahtera.
        </p>
        <div class="hero-buttons">
            <a href="{{ route('register') }}" class="btn-primary">Daftar Sekarang</a>
            <a href="{{ route('login') }}" class="btn-outline">Sudah Punya Akun</a>
        </div>
    </div>
</section>

<!-- ====== FITUR SECTION ====== -->
<section class="features">
    <h2>Pupuk dan Bibit Bersubsidi Pemerintah</h2>
    <p>Platform terpercaya untuk mendapatkan pupuk dan bibit bersubsidi dengan mudah dan transparan</p>

    <div class="feature-grid">
        <div class="feature-card">
            <div class="feature-icon icon-pink">📦</div>
            <h3>Pemesanan Mudah</h3>
            <p>Pesan pupuk dan bibit subsidi secara online, ambil di Balai Desa terdekat</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon icon-blue">🔔</div>
            <h3>Notifikasi Langsung</h3>
            <p>Dapatkan update status pesanan langsung melalui notifikasi</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon icon-purple">📍</div>
            <h3>Ambil di Balai Desa</h3>
            <p>Pilih Balai Desa terdekat untuk mengambil pesanan Anda</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon icon-yellow">💰</div>
            <h3>Harga Subsidi</h3>
            <p>Dapatkan pupuk dan bibit dengan harga terjangkau berkat subsidi pemerintah</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon icon-green">✅</div>
            <h3>Kualitas Terjamin</h3>
            <p>Semua produk sudah tersertifikasi dan terjamin kualitasnya</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon icon-orange">👨‍🌾</div>
            <h3>Para Petani</h3>
            <p>Dirancang khusus untuk membantu petani Indonesia meningkatkan hasil panen</p>
        </div>
    </div>
</section>

<!-- ====== CTA SECTION ====== -->
<section class="cta">
    <h3>Siap Meningkatkan Hasil Panen?</h3>
    <p>Daftar sekarang dan dapatkan akses ke pupuk dan bibit subsidi berkualitas</p>
    <a href="{{ route('register') }}">Mulai Sekarang</a>
</section>
@endsection
