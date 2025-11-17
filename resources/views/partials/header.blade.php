<header style="background:#fff;padding:12px 24px;box-shadow:0 2px 8px rgba(0,0,0,0.06);position:sticky;top:0;z-index:120;">
    <div style="max-width:1400px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;gap:20px;">
        <!-- Logo Section -->
        <div style="display:flex;align-items:center;gap:12px;">
            <a href="{{ route('home') }}" style="display:flex;align-items:center;gap:12px;text-decoration:none;color:inherit;">
                <div style="width:45px;height:45px;border-radius:50%;background:linear-gradient(135deg,#8bc34a,#4caf50);display:flex;align-items:center;justify-content:center;font-size:18px;">🌾</div>
                <div>
                    <div style="font-weight:700;color:#2e7d32;font-size:15px;">Pupuk & Bibit Subsidi</div>
                    <div style="font-size:11px;color:#666;">Sistem Informasi Pemerintah</div>
                </div>
            </a>
        </div>

        <!-- Navigation Section -->
        <nav style="display:flex;align-items:center;gap:6px;">
            @auth
                <a href="{{ route('dashboard') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                    <span style="font-size:16px;">🏠</span>
                    <span>Beranda</span>
                </a>
            @else
                <a href="{{ route('home') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                    <span style="font-size:16px;">🏠</span>
                    <span>Beranda</span>
                </a>
            @endauth
            
            <a href="{{ route('pupuk.bibit') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                <span style="font-size:16px;">🌱</span>
                <span>Pupuk & Bibit</span>
            </a>
            
            @auth
                <a href="{{ route('profil.user') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                    <span style="font-size:16px;">👤</span>
                    <span>Profil</span>
                </a>
            @else
                <a href="{{ route('login') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                    <span style="font-size:16px;">👤</span>
                    <span>Masuk</span>
                </a>
            @endauth
            
            <a href="{{ route('kontak') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                <span style="font-size:16px;">💬</span>
                <span>Kontak</span>
            </a>
            
            <a href="#" title="Notifikasi" style="padding:7px 10px;border-radius:6px;display:inline-flex;align-items:center;color:#555;transition:all 0.3s ease;">
                <span style="font-size:18px;">🔔</span>
            </a>
        </nav>
    </div>
</header>

<style>
    .nav-link:hover {
        background-color: #f3f4f6 !important;
        color: #2e7d32 !important;
    }
    
    /* Responsive */
    @media (max-width:1024px) {
        header div[style*="max-width:1400px"] { 
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
            font-size: 13px !important; 
        }
    }
    
    @media (max-width:768px) {
        header {
            padding: 10px 15px !important;
        }
        nav {
            justify-content: flex-start;
        }
    }
</style>
