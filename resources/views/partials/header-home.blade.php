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
        
        <!-- Navigation for guest users -->
        <nav style="display:flex;align-items:center;gap:6px;">
            <a href="{{ route('home') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                <span style="font-size:16px;">🏠</span>
                <span>Beranda</span>
            </a>
            <a href="{{ route('login') }}" class="nav-link" style="text-decoration:none;padding:7px 14px;border-radius:6px;color:#555;font-weight:500;font-size:14px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s ease;">
                <span style="font-size:16px;">👤</span>
                <span>Masuk</span>
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
    @media (max-width:768px) {
        header {
            padding: 10px 15px !important;
        }
        header div[style*="max-width:1400px"] {
            flex-direction: column;
            gap: 10px;
        }
        nav {
            width: 100%;
            justify-content: center;
        }
    }
</style>
