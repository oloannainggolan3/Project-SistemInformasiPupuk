<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Pupuk & Bibit Subsidi</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e8f5e9 0%, #f1f8e9 100%);
            min-height: 100vh;
            color: #333;
        }

        /* Header Styles */
        header {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #8bc34a, #689f38);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .logo-text h1 {
            font-size: 1.1rem;
            color: #2e7d32;
            font-weight: 700;
        }

        .logo-text p {
            font-size: 0.75rem;
            color: #666;
        }

        nav {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        nav a:hover {
            background: #f5f5f5;
            color: #2e7d32;
        }

        nav a.active {
            background: #4caf50;
            color: white;
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .notification-icon:hover {
            background: #e0e0e0;
        }

        /* Main Container */
        .container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .dashboard-title {
            background: linear-gradient(135deg, #c8e6c9, #a5d6a7);
            padding: 1.5rem 2.5rem;
            border-radius: 30px;
            display: inline-block;
            font-size: 1.8rem;
            font-weight: 700;
            color: #1b5e20;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.2);
        }

        .dashboard-content {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 2rem;
        }

        /* Profile Card */
        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            height: fit-content;
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            overflow: hidden;
            border: 4px solid #4caf50;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .profile-name h2 {
            font-size: 1.4rem;
            color: #2e7d32;
            margin-bottom: 0.3rem;
        }

        .profile-name p {
            color: #888;
            font-size: 0.9rem;
        }

        .profile-info {
            margin: 2rem 0;
            padding: 1.5rem 0;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
            color: #555;
            font-size: 0.9rem;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            width: 20px;
            height: 20px;
            color: #4caf50;
        }

        .profile-actions {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.9rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-edit {
            background: #4caf50;
            color: white;
        }

        .btn-edit:hover {
            background: #45a049;
            transform: scale(1.02);
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }

        .btn-logout {
            background: #f44336;
            color: white;
        }

        .btn-logout:hover {
            background: #da190b;
            transform: scale(1.02);
            box-shadow: 0 4px 15px rgba(244, 67, 54, 0.3);
        }

        /* Land Info Section */
        .land-info {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }

        .land-info h3 {
            font-size: 1.2rem;
            color: #2e7d32;
            margin-bottom: 1.5rem;
        }

        .land-details {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .land-item {
            flex: 1;
            min-width: 150px;
        }

        .land-label {
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 0.5rem;
        }

        .land-value {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            background: #f5f5f5;
            padding: 0.8rem;
            border-radius: 10px;
        }

        .commodity-tags {
            display: flex;
            gap: 0.8rem;
            margin-top: 1rem;
        }

        .tag {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .tag-padi {
            background: #fff3e0;
            color: #f57c00;
        }

        .tag-jagung {
            background: #fff9c4;
            color: #f9a825;
        }

        /* Stats Section */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.15);
        }

        .stat-card.purple {
            background: linear-gradient(135deg, #5e35b1, #7e57c2);
            color: white;
        }

        .stat-card.blue {
            background: linear-gradient(135deg, #1e88e5, #42a5f5);
            color: white;
        }

        .stat-card.red {
            background: linear-gradient(135deg, #e53935, #ef5350);
            color: white;
        }

        .stat-card.pink {
            background: linear-gradient(135deg, #d81b60, #ec407a);
            color: white;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.95rem;
            opacity: 0.95;
            font-weight: 500;
        }

        /* Orders Table */
        .orders-section {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }

        .orders-section h3 {
            font-size: 1.3rem;
            color: #2e7d32;
            margin-bottom: 1.5rem;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f5f5f5;
        }

        th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            color: #555;
            font-size: 0.9rem;
            border-bottom: 2px solid #e0e0e0;
        }

        td {
            padding: 1.2rem 1rem;
            border-bottom: 1px solid #f0f0f0;
            color: #555;
        }

        tr {
            transition: background 0.2s ease;
        }

        tbody tr:hover {
            background: #f9f9f9;
        }

        .order-id {
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 0.2rem;
        }

        .order-name {
            font-weight: 600;
            color: #333;
        }

        .status-badge {
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            background: #c8e6c9;
            color: #2e7d32;
            display: inline-block;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }

        .page-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #e0e0e0;
            background: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-weight: 600;
            color: #555;
        }

        .page-btn:hover {
            border-color: #4caf50;
            color: #4caf50;
        }

        .page-btn.active {
            background: #4caf50;
            color: white;
            border-color: #4caf50;
        }

        .page-arrow {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #4caf50;
            background: white;
            color: #4caf50;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .page-arrow:hover {
            background: #4caf50;
            color: white;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #1b5e20, #2e7d32);
            color: white;
            padding: 3rem 2rem 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 3rem;
        }

        .footer-about h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .footer-about p {
            font-size: 0.9rem;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-btn {
            padding: 0.5rem 1rem;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            text-decoration: none;
            color: white;
            font-size: 0.85rem;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background: rgba(255,255,255,0.2);
        }

        .footer-menu h4 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .footer-menu ul {
            list-style: none;
        }

        .footer-menu li {
            margin-bottom: 0.8rem;
        }

        .footer-menu a {
            color: white;
            text-decoration: none;
            opacity: 0.9;
            transition: opacity 0.3s ease;
        }

        .footer-menu a:hover {
            opacity: 1;
        }

        .footer-contact .contact-item {
            display: flex;
            align-items: start;
            gap: 0.8rem;
            margin-bottom: 1rem;
            opacity: 0.9;
        }

        .footer-bottom {
            max-width: 1400px;
            margin: 2rem auto 0;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.2);
            text-align: center;
            opacity: 0.8;
            font-size: 0.85rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .dashboard-content {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 1rem;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .container {
                padding: 0 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stat-value {
                font-size: 2rem;
            }

            table {
                font-size: 0.85rem;
            }

            th, td {
                padding: 0.8rem 0.5rem;
            }
        }

        @media (max-width: 480px) {
            .dashboard-title {
                font-size: 1.4rem;
                padding: 1rem 1.5rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .land-details {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo-section">
            <div class="logo">🌾</div>
            <div class="logo-text">
                <h1>Pupuk & Bibit Subsidi</h1>
                <p>Sistem Informasi Pemerintah</p>
            </div>
        </div>
        <nav>
            <a href="#"><span>🏠</span> Beranda</a>
            <a href="#"><span>🌱</span> Pupuk & Bibit</a>
            <a href="#" class="active"><span>👤</span> Profil</a>
            <a href="#"><span>✉️</span> Kontak</a>
            <div class="notification-icon">🔔</div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="dashboard-title">User Dashboard</div>

        <div class="dashboard-content">
            <!-- Left Sidebar - Profile Card -->
            <aside>
                <div class="profile-card">
                    <div class="profile-avatar">
                        <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=4caf50&color=fff&size=200" alt="Profile">
                    </div>
                    <div class="profile-name">
                        <h2>Budi Santoso</h2>
                        <p>Budi123</p>
                    </div>
                    <div class="profile-info">
                        <div class="info-item">
                            <span class="info-icon">✉️</span>
                            <span>budi.santoso@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <span class="info-icon">📞</span>
                            <span>+62 812-3456-7890</span>
                        </div>
                        <div class="info-item">
                            <span class="info-icon">📍</span>
                            <span>Desa Sukamaju, Kec. Subang, Kab. Subang, Jawa Barat</span>
                        </div>
                        <div class="info-item">
                            <span class="info-icon">📅</span>
                            <span>Bergabung Sejak Januari 2020</span>
                        </div>
                    </div>
                    <div class="profile-actions">
                        <button class="btn btn-edit">Edit Profil</button>
                        <button class="btn btn-logout">➜ Keluar</button>
                    </div>
                </div>

                <!-- Land Info -->
                <div class="land-info">
                    <h3>Informasi Lahan</h3>
                    <div class="land-details">
                        <div class="land-item">
                            <div class="land-label">Luas Lahan</div>
                            <div class="land-value">3 Ha</div>
                        </div>
                    </div>
                    <div class="land-label" style="margin-top: 1.5rem;">Komoditas</div>
                    <div class="commodity-tags">
                        <span class="tag tag-padi">Padi</span>
                        <span class="tag tag-jagung">Jagung</span>
                    </div>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main>
                <!-- Statistics Cards -->
                <div class="stats-grid">
                    <div class="stat-card purple">
                        <div class="stat-value">24</div>
                        <div class="stat-label">Total Pesanan</div>
                    </div>
                    <div class="stat-card blue">
                        <div class="stat-value">2,8 Ton</div>
                        <div class="stat-label">Pupuk Diterima</div>
                    </div>
                    <div class="stat-card red">
                        <div class="stat-value">125 Kg</div>
                        <div class="stat-label">Bibit Diterima</div>
                    </div>
                    <div class="stat-card pink">
                        <div class="stat-value">2.4 Jt</div>
                        <div class="stat-label">Penghematan</div>
                    </div>
                </div>

                <!-- Orders Table -->
                <div class="orders-section">
                    <h3>Riwayat Pesanan</h3>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Pesanan</th>
                                    <th>Tanggal Order</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="order-id">ORD-2025-001</div>
                                        <div class="order-name">Pupuk Urea Bersubsidi</div>
                                    </td>
                                    <td>24 Januari 2025</td>
                                    <td>Rp 85.000</td>
                                    <td><span class="status-badge">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">ORD-2025-002</div>
                                        <div class="order-name">Pupuk NPK Phonska</div>
                                    </td>
                                    <td>26 Januari 2025</td>
                                    <td>Rp 95.000</td>
                                    <td><span class="status-badge">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">ORD-2025-003</div>
                                        <div class="order-name">Bibit Padi Unggul IR64</div>
                                    </td>
                                    <td>15 Maret 2025</td>
                                    <td>Rp 35.000</td>
                                    <td><span class="status-badge">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">ORD-2025-004</div>
                                        <div class="order-name">Benih Jagung Hibrida</div>
                                    </td>
                                    <td>27 April 2025</td>
                                    <td>Rp 120.000</td>
                                    <td><span class="status-badge">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">ORD-2025-005</div>
                                        <div class="order-name">Pupuk Organik Kompos</div>
                                    </td>
                                    <td>15 Agustus 2025</td>
                                    <td>Rp 135.000</td>
                                    <td><span class="status-badge">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">ORD-2025-006</div>
                                        <div class="order-name">Bibit Cabai Merah Keriting</div>
                                    </td>
                                    <td>20 Agustus 2025</td>
                                    <td>Rp 85.000</td>
                                    <td><span class="status-badge">Success</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">ORD-2025-007</div>
                                        <div class="order-name">Pupuk NPK Phonska</div>
                                    </td>
                                    <td>17 September 2025</td>
                                    <td>Rp 95.000</td>
                                    <td><span class="status-badge">Success</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <button class="page-arrow">←</button>
                        <button class="page-btn active">01</button>
                        <button class="page-btn">02</button>
                        <button class="page-btn">03</button>
                        <button class="page-btn">04</button>
                        <button class="page-btn">05</button>
                        <button class="page-btn">06</button>
                        <button class="page-arrow">→</button>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-about">
                <h3>Pupuk Subsidi Indonesia</h3>
                <p>Program Pemerintah untuk Petani</p>
                <p>Platform resmi pemerintah untuk distribusi pupuk dan bibit bersubsidi kepada petani Indonesia. Mendukung ketahanan pangan nasional melalui program subsidi berkualitas.</p>
                <div class="social-links">
                    <a href="#" class="social-btn">📘 Facebook</a>
                    <a href="#" class="social-btn">📷 Instagram</a>
                    <a href="#" class="social-btn">🐦 Twitter</a>
                </div>
            </div>
            <div class="footer-menu">
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
                <div class="contact-item">
                    <span>📍</span>
                    <span>Jl. Sitoluama, Laguboti, Toba</span>
                </div>
                <div class="contact-item">
                    <span>📞</span>
                    <span>+91 91813 23 2309</span>
                </div>
                <div class="contact-item">
                    <span>✉️</span>
                    <span>hello@squareup.com</span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>🎓 INFORMATION SYSTEMS - Del Institute of Technology</p>
        </div>
    </footer>

    <script>
        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Pagination functionality
        const pageButtons = document.querySelectorAll('.page-btn');
        pageButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                pageButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Button hover effects
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
            });
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Stat cards animation on scroll
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };
            
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target