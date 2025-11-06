@extends('layouts.app')
@section('title', 'Selamat Datang')

@section('content')
<style>
    .container-hero {
        max-width: 1100px;
        margin: 32px auto;
        padding: 28px;
    }
    .hero {
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: center;
        background: linear-gradient(135deg, #196619, #36b06b);
        color: #fff;
        padding: 28px;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }
    @media(min-width: 900px) {
        .hero { flex-direction: row; align-items: center; }
        .hero .hero-text { flex: 1; text-align: left; }
        .hero .hero-image { flex: 1; }
    }
    .hero h1 { margin: 0 0 8px; font-size: 1.9rem; }
    .hero p.lead { margin: 0 0 16px; font-size: 1.05rem; opacity: .95; }
    .btn-row { display: flex; gap: 12px; flex-wrap: wrap; align-items: center; }
    .btn-primary {
        background: #fff; color: #196619; padding: 10px 18px; border-radius: 8px;
        text-decoration: none; font-weight: 600; box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }
    .btn-ghost {
        background: transparent; border: 1px solid rgba(255,255,255,0.25);
        color: #fff; padding: 10px 16px; border-radius: 8px; text-decoration: none;
    }

    .features {
        display: grid;
        grid-template-columns: 1fr;
        gap: 16px;
        margin-top: 22px;
    }
    @media(min-width: 720px) {
        .features { grid-template-columns: repeat(3, 1fr); }
    }
    .feature-card {
        background: #fff; color: #1b5e20; padding: 18px;
        border-radius: 10px; box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        display: flex; gap: 12px; align-items: flex-start;
    }
    .feature-icon {
        width: 44px; height: 44px; border-radius: 8px;
        background: linear-gradient(135deg,#e6f7ee,#c3f0d0); display:flex;
        align-items:center; justify-content:center; font-weight:700; color:#196619;
    }
    .muted { color: rgba(0,0,0,0.6); font-size: .95rem; }
</style>

<div class="container-hero">
    <div class="hero" role="region" aria-label="Hero">
        <div class="hero-text">
            <h1>Selamat Datang!</h1>
            <p class="lead">Gabung sekarang untuk mendapatkan pupuk & bibit bersubsidi dengan proses yang mudah, cepat, dan transparan.</p>

            <div class="btn-row" style="margin-top:8px;">
                <a href="{{ route('register') }}" class="btn-primary">Mulai Sekarang</a>
                <a href="{{ route('login') }}" class="btn-ghost">Masuk</a>
            </div>

            <p class="muted" style="margin-top:12px;">Ambil di balai desa terdekat & dapatkan notifikasi status pengajuan secara real-time.</p>
        </div>

        <div class="hero-image" aria-hidden="true">
            <img src="https://via.placeholder.com/560x300?text=Petani+Indonesia+Bersama" alt="Petani Indonesia" style="width:100%; max-width:560px; border-radius:10px; box-shadow: 0 8px 20px rgba(0,0,0,0.12);">
        </div>
    </div>

    <div class="features" aria-label="Fitur utama">
        <div class="feature-card">
            <div class="feature-icon">1</div>
            <div>
                <strong>Pemesanan Mudah</strong>
                <div class="muted">Pesan pupuk & bibit hanya dengan beberapa klik lewat aplikasi web.</div>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-icon">2</div>
            <div>
                <strong>Notifikasi Langsung</strong>
                <div class="muted">Terima pembaruan status pengajuan secara real-time melalui notifikasi.</div>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-icon">3</div>
            <div>
                <strong>Ambil di Balai Desa</strong>
                <div class="muted">Pengambilan mudah dan terorganisir di balai desa terdekat.</div>
            </div>
        </div>
    </div>
</div>
@endsection