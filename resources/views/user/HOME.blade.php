<!-- resources/views/home.blade.php -->
@extends('layouts.home')
@section('title', 'Selamat Datang')

@section('content')

<!-- ====== HERO SECTION ====== -->
<section style="display:flex; align-items:center; justify-content:space-between; background:linear-gradient(135deg, #2d7a3e, #4caf50); color:white; padding:80px 100px; min-height:500px; flex-wrap:wrap; gap:40px;">
    
    <div style="max-width:600px; flex:1;">
        <h1 style="font-size:3.5rem; font-weight:bold; margin-bottom:20px; line-height:1.2;">Selamat Datang!</h1>
        <p style="font-size:1.15rem; line-height:1.8; margin-bottom:35px; opacity:0.95;">
            Mari bergabung agar kita meningkatkan hasil pertanian dengan akses mudah ke pupuk dan bibit subsidi dari pemerintah Indonesia. Dapatkan informasi, layanan, dan panduan agar pertanian semakin maju dan sejahtera.
        </p>
        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <a href="{{ route('register') }}" style="display:inline-block; padding:14px 32px; border-radius:10px; text-decoration:none; font-weight:600; background-color:#1b5e20; color:white; font-size:15px; transition:all 0.3s ease; box-shadow:0 4px 15px rgba(0,0,0,0.2);">Daftar Sekarang</a>
            <a href="{{ route('login') }}" style="display:inline-block; padding:14px 32px; border-radius:10px; text-decoration:none; font-weight:600; border:2px solid white; color:white; font-size:15px; transition:all 0.3s ease; background:transparent;">Sudah Punya Akun</a>
        </div>
    </div>
    
    <div style="flex:1; display:flex; justify-content:center;">
        <img src="{{ asset('images/petani.jpg') }}" alt="Petani" style="border-radius:50%; width:400px; height:400px; object-fit:cover; box-shadow:0 10px 40px rgba(0,0,0,0.3); border:8px solid rgba(255,255,255,0.2);">
    </div>
</section>

<!-- ====== FITUR SECTION ====== -->
<section style="text-align:center; padding:80px 60px; background-color:#f8fdf8;">
    <h2 style="font-size:2.2rem; font-weight:bold; color:#2d7a3e; margin-bottom:15px;">Pupuk dan Bibit Bersubsidi Pemerintah</h2>
    <p style="color:#555; margin-bottom:50px; font-size:1.05rem; max-width:800px; margin-left:auto; margin-right:auto;">Platform terpercaya untuk mendapatkan pupuk dan bibit bersubsidi dengan mudah dan transparan</p>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:35px; max-width:1300px; margin:0 auto;">
        
        <div style="background:white; padding:35px 25px; border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease, box-shadow 0.3s ease; border-top:4px solid #ffb74d;">
            <div style="width:90px; height:90px; margin:0 auto 20px; background:linear-gradient(135deg, #ffe0b2, #ffb74d); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                <img src="{{ asset('images/logo_box.png') }}" alt="Pemesanan Mudah" style="width:50px; height:50px; object-fit:contain;">
            </div>
            <h3 style="color:#2d7a3e; font-weight:600; margin-bottom:12px; font-size:1.2rem;">Pemesanan Mudah</h3>
            <p style="color:#666; line-height:1.6; font-size:0.95rem;">Pesan pupuk dan bibit subsidi secara online, ambil di Balai Desa terdekat.</p>
        </div>

        <div style="background:white; padding:35px 25px; border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease, box-shadow 0.3s ease; border-top:4px solid #64b5f6;">
            <div style="width:90px; height:90px; margin:0 auto 20px; background:linear-gradient(135deg, #bbdefb, #64b5f6); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                <img src="{{ asset('images/logo_notif.png') }}" alt="Notifikasi" style="width:50px; height:50px; object-fit:contain;">
            </div>
            <h3 style="color:#2d7a3e; font-weight:600; margin-bottom:12px; font-size:1.2rem;">Notifikasi Langsung</h3>
            <p style="color:#666; line-height:1.6; font-size:0.95rem;">Dapatkan update status pesanan langsung melalui notifikasi real-time.</p>
        </div>

        <div style="background:white; padding:35px 25px; border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease, box-shadow 0.3s ease; border-top:4px solid #ba68c8;">
            <div style="width:90px; height:90px; margin:0 auto 20px; background:linear-gradient(135deg, #e1bee7, #ba68c8); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                <img src="{{ asset('images/logo_ambil.png') }}" alt="Ambil" style="width:50px; height:50px; object-fit:contain;">
            </div>
            <h3 style="color:#2d7a3e; font-weight:600; margin-bottom:12px; font-size:1.2rem;">Ambil di Balai Desa</h3>
            <p style="color:#666; line-height:1.6; font-size:0.95rem;">Pilih Balai Desa terdekat untuk mengambil pesanan Anda dengan mudah.</p>
        </div>

        <div style="background:white; padding:35px 25px; border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease, box-shadow 0.3s ease; border-top:4px solid #ffb74d;">
            <div style="width:90px; height:90px; margin:0 auto 20px; background:linear-gradient(135deg, #ffe0b2, #ffb74d); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                <img src="{{ asset('images/logo_harga.png') }}" alt="Harga" style="width:50px; height:50px; object-fit:contain;">
            </div>
            <h3 style="color:#2d7a3e; font-weight:600; margin-bottom:12px; font-size:1.2rem;">Harga Subsidi</h3>
            <p style="color:#666; line-height:1.6; font-size:0.95rem;">Dapatkan pupuk dan bibit dengan harga terjangkau berkat subsidi pemerintah.</p>
        </div>

        <div style="background:white; padding:35px 25px; border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease, box-shadow 0.3s ease; border-top:4px solid #81c784;">
            <div style="width:90px; height:90px; margin:0 auto 20px; background:linear-gradient(135deg, #c8e6c9, #81c784); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                <img src="{{ asset('images/logo_kualitas.png') }}" alt="Kualitas" style="width:50px; height:50px; object-fit:contain;">
            </div>
            <h3 style="color:#2d7a3e; font-weight:600; margin-bottom:12px; font-size:1.2rem;">Kualitas Terjamin</h3>
            <p style="color:#666; line-height:1.6; font-size:0.95rem;">Semua produk sudah tersertifikasi dan terjamin kualitasnya.</p>
        </div>

        <div style="background:white; padding:35px 25px; border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease, box-shadow 0.3s ease; border-top:4px solid #a1887f;">
            <div style="width:90px; height:90px; margin:0 auto 20px; background:linear-gradient(135deg, #d7ccc8, #a1887f); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                <img src="{{ asset('images/logo_parapetani.png') }}" alt="Petani" style="width:50px; height:50px; object-fit:contain;">
            </div>
            <h3 style="color:#2d7a3e; font-weight:600; margin-bottom:12px; font-size:1.2rem;">Para Petani</h3>
            <p style="color:#666; line-height:1.6; font-size:0.95rem;">Dirancang khusus untuk membantu petani Indonesia meningkatkan hasil panen.</p>
        </div>
    </div>
</section>

<!-- ====== CTA SECTION ====== -->
<section style="text-align:center; padding:70px 60px; background:linear-gradient(135deg, #e8f5e9, #c8e6c9);">
    <h3 style="font-size:2rem; font-weight:bold; color:#2d7a3e; margin-bottom:15px;">Siap Meningkatkan Hasil Panen?</h3>
    <p style="color:#555; margin-bottom:30px; font-size:1.05rem;">Bergabunglah dengan ribuan petani Indonesia yang sudah merasakan manfaatnya</p>
    <a href="{{ route('register') }}" style="padding:15px 40px; background:#2d7a3e; color:white; text-decoration:none; border-radius:10px; font-weight:600; font-size:1.05rem; display:inline-block; transition:all 0.3s ease; box-shadow:0 4px 15px rgba(45,122,62,0.3);">Mulai Sekarang</a>
</section>

<style>
    /* Hover effects */
    section > div > div:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.15) !important;
    }
    
    a:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }
    
    @media (max-width: 768px) {
        section:first-of-type {
            padding: 50px 30px !important;
            text-align: center;
        }
        
        section:first-of-type h1 {
            font-size: 2.5rem !important;
        }
        
        section:first-of-type img {
            width: 300px !important;
            height: 300px !important;
        }
    }
</style>

@endsection
