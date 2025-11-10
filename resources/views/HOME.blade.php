<!-- resources/views/home.blade.php -->
@extends('layouts.app')
@section('title', 'Selamat Datang')

@section('content')


<!-- ====== HERO SECTION ====== -->
<section style="display:flex; align-items:center; justify-content:space-between; background:linear-gradient(135deg, #155d27, #3cb371); color:white; padding:60px 80px; border-radius:0 0 30px 30px; flex-wrap:wrap;">
    
    <div>
        <img src="{{ asset('images/petani.jpg') }}" alt="Petani" style="border-radius:50%; width:380px; height:380px; object-fit:cover;">
    </div>
    
    <div style="max-width:500px;">
        <h1 style="font-size:2.5rem; font-weight:bold; margin-bottom:10px;">Selamat Datang!</h1>
        <p style="font-size:1.1rem; line-height:1.6; margin-bottom:25px;">
            Mari bergabung agar kita meningkatkan hasil pertanian dengan akses mudah ke pupuk dan bibit subsidi dari pemerintah Indonesia.
            Dapatkan informasi, layanan, dan panduan agar pertanian semakin maju dan sejahtera.
        </p>
        <div>
            <a href="{{ route('register') }}" style="display:inline-block; margin-right:10px; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:bold; background-color:#1a7f37; color:white;">Daftar Sekarang</a>
            <a href="{{ route('login') }}" style="display:inline-block; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:bold; border:2px solid white; color:white;">Sudah Punya Akun</a>
        </div>
    </div>
</section>

<!-- ====== FITUR SECTION ====== -->
<section style="text-align:center; padding:60px 40px; background-color:#f5fff5;">
    <h2 style="font-size:1.8rem; font-weight:bold; color:#155d27; margin-bottom:10px;">Pupuk dan Bibit Bersubsidi Pemerintah</h2>
    <p style="color:#444; margin-bottom:40px;">Platform terpercaya untuk mendapatkan pupuk dan bibit bersubsidi dengan mudah dan transparan</p>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:30px;">
        
        <div style="background:white; padding:30px; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
            <img src="{{ asset('images/logo_box.png') }}" alt="Fitur 1" style="width:80px; height:80px; object-fit:contain; margin-bottom:15px;">
            <h3 style="color:#155d27; font-weight:600; margin-bottom:10px;">Pemesanan Mudah</h3>
            <p>Pesan pupuk dan bibit subsidi secara online, ambil di Balai Desa terdekat.</p>
        </div>

        <div style="background:white; padding:30px; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
            <img src="{{ asset('images/logo_notif.png') }}" alt="Fitur 2" style="width:80px; height:80px; object-fit:contain; margin-bottom:15px;">
            <h3 style="color:#155d27; font-weight:600; margin-bottom:10px;">Notifikasi Langsung</h3>
            <p>Dapatkan update status pesanan langsung melalui notifikasi.</p>
        </div>

        <div style="background:white; padding:30px; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
            <img src="{{ asset('images/logo_ambil.png') }}" alt="Fitur 3" style="width:80px; height:80px; object-fit:contain; margin-bottom:15px;">
            <h3 style="color:#155d27; font-weight:600; margin-bottom:10px;">Ambil di Balai Desa</h3>
            <p>Pilih Balai Desa terdekat untuk mengambil pesanan Anda.</p>
        </div>

        <div style="background:white; padding:30px; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
            <img src="{{ asset('images/logo_harga.png') }}" alt="Fitur 4" style="width:80px; height:80px; object-fit:contain; margin-bottom:15px;">
            <h3 style="color:#155d27; font-weight:600; margin-bottom:10px;">Harga Subsidi</h3>
            <p>Dapatkan pupuk dan bibit dengan harga terjangkau berkat subsidi pemerintah.</p>
        </div>

        <div style="background:white; padding:30px; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
            <img src="{{ asset('images/logo_kualitas.png') }}" alt="Fitur 5" style="width:80px; height:80px; object-fit:contain; margin-bottom:15px;">
            <h3 style="color:#155d27; font-weight:600; margin-bottom:10px;">Kualitas Terjamin</h3>
            <p>Semua produk sudah tersertifikasi dan terjamin kualitasnya.</p>
        </div>

        <div style="background:white; padding:30px; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
            <img src="{{ asset('images/logo_parapetani.png') }}" alt="Fitur 6" style="width:80px; height:80px; object-fit:contain; margin-bottom:15px;">
            <h3 style="color:#155d27; font-weight:600; margin-bottom:10px;">Para Petani</h3>
            <p>Dirancang khusus untuk membantu petani Indonesia meningkatkan hasil panen.</p>
        </div>
    </div>
</section>

<!-- ====== CTA SECTION ====== -->
<section style="text-align:center; padding:50px; background:#e8f5e9;">
    <h3 style="font-size:1.5rem; font-weight:bold; color:#155d27; margin-bottom:20px;">Siap Meningkatkan Hasil Panen?</h3>
    <a href="{{ route('register') }}" style="padding:12px 28px; background:#1a7f37; color:white; text-decoration:none; border-radius:8px; font-weight:bold;">Mulai Sekarang</a>
</section>

@endsection
