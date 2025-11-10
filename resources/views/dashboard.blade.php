<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pupuk & Bibit Subsidi | Beranda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Variabel Warna */
        :root {
            --primary-green: #4CAF50; /* Hijau utama */
            --dark-green: #004d00;    /* Hijau sangat gelap (Navbar & Overlay Hero) */
            --medium-green: #1a4d1a;  /* Hijau gelap (Visi/Misi & Footer) */
            --light-green: #81c784;   /* Hijau terang (Highlight) */
            --secondary-blue: #5C6BC0; /* Biru/Ungu (Bibit) */
            --yellow-gold: #ffd700;   /* Kuning keemasan */
            --text-color: #333;       
            --white: #ffffff;
            --light-gray-bg: #f7f7f7; 
            --border-color: #ddd;     
        }

        /* Reset Dasar & Global */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--white);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        .text-center { text-align: center; }

        /* Utilitas Warna */
        .bg-primary-green { background-color: var(--primary-green); }
        .bg-medium-green { background-color: var(--medium-green); }
        .bg-secondary-blue { background-color: var(--secondary-blue); }
        .text-white { color: var(--white); }

        /* --- 1. Navbar --- */
        .navbar {
            background-color: var(--dark-green);
            color: var(--white);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo { display: flex; align-items: center; gap: 10px; }
        .logo img { width: 30px; height: 30px; border-radius: 5px; }
        .logo span { font-weight: bold; font-size: 1.2em; }
        .logo .subtitle { font-size: 0.8em; opacity: 0.7; margin-left: 5px; }

        nav a {
            margin-left: 15px;
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: background-color 0.3s;
        }
        
        nav a.active {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .nav-icons i { font-size: 1.2em; cursor: pointer; }


        /* --- 2. Hero Section (Selamat Datang) --- */
        .hero-section {
            padding: 40px 0;
            background-color: var(--dark-green);
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 40px;
            color: var(--white);
        }

        .hero-image {
            width: 50%;
            /* Ganti dengan URL gambar kebun teh Anda */
            background-image: url("{{ asset('images/teh.jpg') }}");
            background-size: cover;
            background-position: center;
            height: 300px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.4);
        }

        .hero-text {
            width: 50%;
            padding-right: 20px;
        }

        .welcome-text {
            font-size: 2.5em;
            font-weight: bold;
            color: var(--yellow-gold); 
            margin-bottom: 10px;
        }

        .hero-text p {
            font-size: 1.1em;
            margin-bottom: 25px;
        }

        .cta-button {
            background-color: var(--primary-green);
            color: var(--white);
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        /* --- 3. Mengapa Memilih (WHY CHOOSE US) --- */
        .why-choose-us {
            padding: 50px 0;
            text-align: center;
            background-color: var(--white);
        }

        .why-choose-us h2 {
            font-size: 2em;
            margin-bottom: 15px;
        }

        .subtitle-text {
            max-width: 800px;
            margin: 0 auto 40px;
            color: #666;
            font-size: 1.05em;
        }

        .cards-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .card-choice {
            background-color: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 30px;
            max-width: 45%;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            position: relative;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8em;
            margin-bottom: 15px;
            position: absolute;
            top: -25px; /* Mengangkat ikon keluar dari kartu */
            left: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        /* Ikon spesifik di Why Choose Us */
        .card-icon.pupuk {
            color: var(--primary-green);
            background-color: rgba(76, 175, 80, 0.1); 
        }
        
        .card-icon.bibit {
            color: var(--secondary-blue);
            background-color: rgba(92, 107, 192, 0.1);
        }

        .card-choice h3 {
            margin-top: 25px; /* Tambahkan margin atas agar tidak bertabrakan dengan ikon */
            margin-bottom: 10px;
            font-size: 1.4em;
        }
        
        .card-choice p { color: #555; }

        /* --- 4. Visi & Misi --- */
        .vm-section {
            background-color: var(--medium-green);
            color: var(--white);
            padding: 50px 0;
        }

        .vm-section h2 {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 30px;
        }

        .vm-content {
            display: flex;
            gap: 50px;
            padding: 0 50px;
        }

        .vm-vision, .vm-mission {
            width: 50%;
        }

        .vm-vision h3, .vm-mission h3 {
            font-size: 1.8em;
            color: var(--light-green);
            margin-bottom: 15px;
        }

        .vm-mission ul {
            padding-left: 20px;
        }
        
        .vm-mission li {
            margin-bottom: 10px;
            list-style: disc;
        }

        /* --- 5. Fitur Keunggulan --- */
        .feature-cards-section {
            padding: 50px 0 30px;
            background-color: var(--light-gray-bg);
        }

        .feature-grid {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .feature-card {
            text-align: center;
            max-width: 200px;
        }
        
        .feature-icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2em;
            margin-bottom: 10px;
        }
        
        /* Styling spesifik untuk setiap ikon fitur */
        .feature-icon-circle.green { background-color: #e8f5e9; color: var(--primary-green); }
        .feature-icon-circle.purple { background-color: #ede7f6; color: #7e57c2; } /* Icon Award */
        .feature-icon-circle.blue { background-color: #e3f2fd; color: #42a5f5; } /* Icon Truck */
        .feature-icon-circle.yellow { background-color: #fffde7; color: var(--yellow-gold); } /* Icon Star */

        .feature-card h4 { font-size: 1.1em; margin-bottom: 5px; color: #444; }
        .feature-card p { font-size: 0.9em; color: #777; }


        /* --- 6. Product Cards Detail --- */
        .product-cards-detail {
            padding: 0 0 50px;
            background-color: var(--light-gray-bg);
        }
        
        .product-grid-detail {
            display: flex;
            gap: 40px;
            justify-content: center;
        }

        .product-card-detail {
            background-color: var(--white);
            border-radius: 15px;
            overflow: hidden;
            max-width: 500px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            position: relative;
        }

        .detail-image {
            height: 250px;
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        /* Ganti URL gambar untuk setiap kartu produk */
        .pupuk-detail .detail-image {
            /* Ganti dengan URL gambar green house */
            background-image: url('product-pupuk-greenhouse.jpg'); 
        }

        .bibit-detail .detail-image {
            /* Ganti dengan URL gambar bibit tumbuh */
            background-image: url('product-bibit-seedling.jpg'); 
        }

        .detail-icon-overlay {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 10px; 
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.8em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .detail-body {
            padding: 30px;
        }

        .detail-body h3 {
            font-size: 1.6em;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .jenis-pupuk-list, .jenis-bibit-list {
            margin-top: 15px;
            margin-bottom: 20px;
            padding-left: 0;
        }

        .jenis-pupuk-list li, .jenis-bibit-list li {
            position: relative;
            padding-left: 15px;
            font-size: 0.95em;
            margin-bottom: 5px;
        }

        .jenis-pupuk-list li::before { content: "•"; position: absolute; left: 0; color: var(--primary-green); font-weight: bold; }
        .jenis-bibit-list li::before { content: "•"; position: absolute; left: 0; color: var(--secondary-blue); font-weight: bold; }
        
        .info-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .tag {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8em;
            color: var(--white);
            font-weight: 500;
        }
        
        .tag.green { background-color: var(--primary-green); }
        .tag.purple { background-color: var(--secondary-blue); }

        .action-button-detail {
            width: 100%;
            padding: 12px;
            border: none;
            color: var(--white);
            font-weight: bold;
            font-size: 1.1em;
            border-radius: 8px;
            cursor: pointer;
            transition: opacity 0.3s;
        }


        /* --- 7. Footer --- */
        .footer {
            background-color: var(--medium-green); 
            color: #f0f0f0;
            padding: 40px 0 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-brand .logo { margin-bottom: 15px; }
        .footer-brand h4 { font-size: 1.3em; margin: 0; }
        .footer-brand p { font-size: 0.8em; opacity: 0.8; }
        .footer-brand > p { margin-top: 15px; margin-bottom: 15px; font-size: 0.9em; }

        .follow-us { font-weight: bold; margin-bottom: 5px !important; }

        .social-links a { font-size: 0.9em; margin-right: 15px; transition: color 0.3s; }
        .social-links a i { margin-right: 5px; font-size: 1.2em; }
        .social-links a:hover { color: var(--primary-green); }

        .footer-links h4, .footer-contact h4 {
            margin-bottom: 15px;
            font-size: 1.1em;
            color: var(--light-green);
        }

        .footer-links ul li, .footer-contact ul li { margin-bottom: 8px; font-size: 0.9em; }

        .footer-contact i { margin-right: 8px; color: var(--primary-green); }

        .footer-bottom {
            text-align: center;
            padding: 15px 0;
        }

        .footer-bottom img { height: 30px; margin-bottom: 5px; }
        .footer-bottom p { font-size: 0.75em; opacity: 0.7; }

        /* --- Media Queries (Responsif) --- */
        @media (max-width: 900px) {
            .nav-content nav { display: none; }
            .hero-content { flex-direction: column; text-align: center; }
            .hero-image, .hero-text { width: 100%; padding-right: 0; }
            .hero-image { height: 250px; margin-bottom: 20px; }
            
            .vm-content { flex-direction: column; padding: 0 20px; }
            .vm-vision, .vm-mission { width: 100%; }
            
            .cards-container, .product-grid-detail { flex-direction: column; align-items: center; }
            .card-choice, .product-card-detail { max-width: 95%; }
            .card-choice { padding-top: 45px; }
            .card-icon { top: 15px; } /* Sesuaikan posisi ikon di mobile */

            .feature-grid { justify-content: space-around; }
            .feature-card { min-width: 40%; margin-bottom: 20px; }
            
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
        }
    </style>
</head>
<body>

    <header class="navbar">
        <div class="container nav-content">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Pupuk & Bibit Subsidi">
                <span>Pupuk & Bibit Subsidi</span>
                <span class="subtitle">Sistem Informasi Pemerintah</span>
            </div>
            <nav>
                <a href="#" class="active"><i class="fas fa-home"></i> Beranda</a>
                <a href="#"><i class="fas fa-box"></i> Pupuk & Bibit</a>
                <a href="#"><i class="fas fa-user"></i> Profil</a>
                <a href="#"><i class="fas fa-envelope"></i> Kontak</a>
            </nav>
            <div class="nav-icons">
                <i class="fas fa-bell"></i>
            </div>
        </div>
    </header>

    <section class="hero-section">
        <div class="container hero-content">
            <div class="hero-image"></div>
            <div class="hero-text">
                <span class="welcome-text">Selamat Datang!</span>
                <p>Mari bersama kita tingkatkan hasil pertanian dengan akses mudah ke pupuk dan bibit subsidi. Dapatkan informasi, layanan, dan panduan agar pertanian semakin maju dan sejahtera.</p>
                <button class="cta-button">Lihat Selengkapnya</button>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="container">
            <h2>MENGAPA MEMILIH PUPUK & BIBIT SUBSIDI?</h2>
            <p class="subtitle-text">Program subsidi pemerintah memberikan akses kepada petani untuk mendapatkan pupuk dan bibit berkualitas tinggi dengan harga terjangkau, mendukung peningkatan produktivitas dan kesejahteraan petani Indonesia.</p>

            <div class="cards-container">
                <div class="card-choice">
                    <div class="card-icon pupuk"><i class="fas fa-leaf"></i></div>
                    <h3>Pupuk Subsidi</h3>
                    <p>Pupuk bersubsidi adalah sarana produksi pertanian yang disediakan pemerintah dengan harga lebih murah dari harga eceran tertinggi (HET) untuk membantu petani meningkatkan produktivitas.</p>
                </div>
                <div class="card-choice">
                    <div class="card-icon bibit"><i class="fas fa-link"></i></div>
                    <h3>Bibit Subsidi</h3>
                    <p>Bibit unggul adalah benih tanaman yang telah melalui proses seleksi dan sertifikasi untuk menghasilkan tanaman dengan produktivitas tinggi, tahan hama penyakit, dan adaptif terhadap lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="vm-section">
        <div class="container">
            <h2 class="text-white">VISI & MISI</h2>
            <div class="vm-content">
                <div class="vm-vision">
                    <h3>VISI</h3>
                    <p>Menjadi platform digital terdepan yang menghubungkan petani Indonesia dengan program subsidi pemerintah, menciptakan kemudahan akses pupuk dan bibit berkualitas untuk meningkatkan kesejahteraan petani dan ketahanan pangan nasional.</p>
                </div>
                <div class="vm-mission">
                    <h3>MISI</h3>
                    <ul>
                        <li>Menyediakan akses mudah dan transparan terhadap program subsidi pupuk dan bibit.</li>
                        <li>Memastikan distribusi yang merata dan tepat waktu di seluruh nusantara.</li>
                        <li>Meningkatkan produktivitas pertanian melalui teknologi dan inovasi.</li>
                        <li>Mendukung swasembada pangan dan pembangunan pertanian berkelanjutan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-cards-section">
        <div class="container">
            <div class="feature-grid">
                
                <div class="feature-card">
                    <div class="feature-icon-circle green"><i class="fas fa-check-circle"></i></div>
                    <h4>Kualitas Terjamin</h4>
                    <p>Berstandar SNI</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon-circle purple"><i class="fas fa-award"></i></div>
                    <h4>Program Resmi</h4>
                    <p>Kementrian RI</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon-circle blue"><i class="fas fa-truck"></i></div>
                    <h4>Pengiriman Daerah</h4>
                    <p>Se - Indonesia</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon-circle yellow"><i class="fas fa-star"></i></div>
                    <h4>Penilaian Baik</h4>
                    <p>Rating 4.9/5</p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="product-cards-detail">
        <div class="container product-grid-detail">
            
            <div class="product-card-detail pupuk-detail">
                <div class="detail-image">
                    <div class="detail-icon-overlay bg-primary-green"><i class="fas fa-leaf"></i></div>
                </div>
                <div class="detail-body">
                    <h3>Pupuk Subsidi</h3>
                    <p>Dapatkan pupuk berkualitas tinggi dengan harga terjangkau melalui program subsidi pemerintah. Tersedia berbagai jenis pupuk untuk kebutuhan pertanian Anda.</p>
                    <ul class="jenis-pupuk-list">
                        <li>Pupuk Urea - Nitrogen tinggi</li>
                        <li>Pupuk NPK - Nutrisi lengkap</li>
                        <li>Pupuk Organik - Ramah lingkungan</li>
                        <li>Pupuk TSP - Fosfor untuk akar</li>
                    </ul>
                    <div class="info-tags">
                        <span class="tag green">Harga subsidi hingga 50%</span>
                        <span class="tag green">Kualitas Terjamin SNI</span>
                        <span class="tag green">Distribusi merata</span>
                    </div>
                    <button class="action-button-detail bg-primary-green">Pesan Pupuk Sekarang</button>
                </div>
            </div>

            <div class="product-card-detail bibit-detail">
                <div class="detail-image">
                    <div class="detail-icon-overlay bg-secondary-blue"><i class="fas fa-link"></i></div>
                </div>
                <div class="detail-body">
                    <h3>Bibit Subsidi</h3>
                    <p>Pilihan bibit unggul bersertifikat dengan daya tumbuh tinggi dan hasil panen maksimal. Investasi terbaik untuk masa depan pertanian yang sukses.</p>
                    <ul class="jenis-bibit-list">
                        <li>Bibit Padi IR64 - Tahan hama</li>
                        <li>Bibit Jagung Hibrida - Produktif</li>
                        <li>Bibit Cabai - Hasil melimpah</li>
                        <li>Bibit Kedelai - Protein tinggi</li>
                    </ul>
                    <div class="info-tags">
                        <span class="tag purple">Daya tumbuh hingga 98%</span>
                        <span class="tag purple">Bersertifikat resmi</span>
                        <span class="tag purple">Hasil panen optimal</span>
                    </div>
                    <button class="action-button-detail bg-secondary-blue">Pesan Bibit Sekarang</button>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <div class="logo">
                    <img src="logo-pupuk-subsidi.png" alt="Logo Pupuk & Bibit Subsidi" style="height: 40px; width: 40px;">
                    <div>
                        <h4>Pupuk Subsidi Indonesia</h4>
                        <p>Program Pemerintah untuk Petani</p>
                    </div>
                </div>
                <p>Platform resmi pemerintah untuk distribusi pupuk dan bibit bersubsidi kepada petani Indonesia. Mendukung ketahanan pangan nasional melalui program subsidi berkualitas.</p>
                <p class="follow-us">Follow us!</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
                    <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Menu Utama</h4>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Pupuk & Bibit</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Jl. Sitoaluama, Laguboti, Toba</li>
                    <li><i class="fas fa-phone"></i> +91 91813 23 2309</li>
                    <li><i class="fas fa-envelope"></i> hello@squareup.com</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <img src="logo-is.png" alt="Information Systems Logo">
            <p>Dwi Institute of Technology</p>
        </div>
    </footer>

</body>
</html>