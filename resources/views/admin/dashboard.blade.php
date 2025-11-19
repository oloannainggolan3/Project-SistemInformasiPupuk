<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Pupuk & Bibit Subsidi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Reset & Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Header Styles */
        header {
            background: #fff;
            padding: 12px 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            position: sticky;
            top: 0;
            z-index: 120;
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        /* Logo Section */
        .logo-section {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, #8bc34a, #4caf50);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-text-main {
            font-weight: 700;
            color: #2e7d32;
            font-size: 15px;
        }

        .logo-text-sub {
            font-size: 11px;
            color: #666;
        }

        /* Navigation */
        nav {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-link {
            text-decoration: none;
            padding: 7px 14px;
            border-radius: 6px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: #f3f4f6;
            color: #2e7d32;
        }

        .nav-link.active {
            background-color: #4caf50;
            color: white;
        }

        /* User Info in Header */
        .user-info-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 7px 14px;
            border-radius: 6px;
            background-color: #f3f4f6;
        }

        .user-avatar-header {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4caf50, #2e7d32);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .user-details {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .user-details strong {
            font-size: 13px;
            color: #333;
        }

        .user-details small {
            font-size: 11px;
            color: #666;
        }

        .logout-btn {
            padding: 7px 14px;
            background: #f44336;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: #da190b;
        }

        /* Main Content */
        .main-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
            min-height: calc(100vh - 70px);
        }

        /* Page Title */
        .page-title {
            font-size: 1.8em;
            color: #2e7d32;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Alert Messages */
        .alert {
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .alert i {
            font-size: 1.2em;
        }

        /* Statistics Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8em;
        }

        .stat-icon.green {
            background: linear-gradient(135deg, #4CAF50, #2e7d32);
            color: white;
        }

        .stat-icon.blue {
            background: linear-gradient(135deg, #2196F3, #1976D2);
            color: white;
        }

        .stat-icon.orange {
            background: linear-gradient(135deg, #FF9800, #F57C00);
            color: white;
        }

        .stat-icon.purple {
            background: linear-gradient(135deg, #9C27B0, #7B1FA2);
            color: white;
        }

        .stat-info h3 {
            font-size: 2em;
            margin-bottom: 5px;
            color: #333;
        }

        .stat-info p {
            color: #666;
            font-size: 0.95em;
        }

        /* Content Section */
        .content-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .content-section h2 {
            margin-bottom: 20px;
            color: #004d00;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }

        .welcome-message {
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }

        .welcome-message h2 {
            color: #1b5e20;
            font-size: 2em;
            margin-bottom: 10px;
            border: none;
        }

        .welcome-message p {
            color: #2e7d32;
            font-size: 1.1em;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            nav {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                gap: 6px;
            }

            .nav-link {
                font-size: 13px;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 10px 15px;
            }

            .main-content {
                padding: 15px;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 576px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .nav-link span:last-child {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <!-- Logo Section -->
            <div class="logo-section">
                <div class="logo-icon">🌾</div>
                <div class="logo-text">
                    <div class="logo-text-main">Admin Panel</div>
                    <div class="logo-text-sub">Pupuk & Bibit Subsidi</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                    <span style="font-size:16px;">📊</span>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('products.index') }}" class="nav-link">
                    <span style="font-size:16px;">📦</span>
                    <span>Kelola Produk</span>
                </a>
                <a href="#" class="nav-link">
                    <span style="font-size:16px;">👥</span>
                    <span>Kelola Pengguna</span>
                </a>
                <a href="#" class="nav-link">
                    <span style="font-size:16px;">🛒</span>
                    <span>Pesanan</span>
                </a>
                <a href="#" class="nav-link">
                    <span style="font-size:16px;">📈</span>
                    <span>Laporan</span>
                </a>
                <a href="#" class="nav-link">
                    <span style="font-size:16px;">⚙️</span>
                    <span>Pengaturan</span>
                </a>

                <!-- User Info & Logout -->
                <div class="user-info-header">
                    <div class="user-avatar-header">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-details">
                        <strong>{{ session('admin_username', 'Admin') }}</strong>
                        <small>Administrator</small>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <h1><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
            <div class="user-info">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <strong>{{ session('admin_username', 'Admin') }}</strong>
                    <br>
                    <small style="color: #666;">Administrator</small>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Alert Messages -->
        @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('success') }}</span>
        </div>
        @endif

        <!-- Welcome Message -->
        <div class="welcome-message">
            <h2>Selamat Datang di Dashboard Admin! 👋</h2>
            <p>Kelola sistem informasi pupuk dan bibit subsidi dengan mudah dan efisien</p>
        </div>

        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fas fa-box"></i>
                </div>
                <div class="stat-info">
                    <h3>150</h3>
                    <p>Total Produk</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <h3>1,234</h3>
                    <p>Total Pengguna</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stat-info">
                    <h3>89</h3>
                    <p>Pesanan Aktif</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-info">
                    <h3>95%</h3>
                    <p>Tingkat Kepuasan</p>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <h2><i class="fas fa-info-circle"></i> Informasi Sistem</h2>
            <table style="width: 100%; border-collapse: collapse;">
                <tr style="border-bottom: 1px solid #e0e0e0;">
                    <td style="padding: 12px 0; font-weight: 600;">Status Sistem:</td>
                    <td style="padding: 12px 0; color: #4CAF50;">
                        <i class="fas fa-check-circle"></i> Aktif
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #e0e0e0;">
                    <td style="padding: 12px 0; font-weight: 600;">Username Admin:</td>
                    <td style="padding: 12px 0;">{{ session('admin_username', 'Admin') }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e0e0e0;">
                    <td style="padding: 12px 0; font-weight: 600;">Waktu Login:</td>
                    <td style="padding: 12px 0;">{{ session('admin_login_time') ? session('admin_login_time')->format('d/m/Y H:i:s') : '-' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; font-weight: 600;">Hak Akses:</td>
                    <td style="padding: 12px 0;">
                        <span style="background: #4CAF50; color: white; padding: 4px 12px; border-radius: 15px; font-size: 0.85em;">
                            Full Access
                        </span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
