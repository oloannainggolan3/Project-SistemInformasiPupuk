<style>
    .main-footer {
        background-color: #065f46;
        color: white;
        padding: 50px 0 20px;
        margin-top: 50px;
    }
    
    .footer-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 50px;
    }
    
    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 50px;
        margin-bottom: 40px;
    }
    
    .footer-logo-section {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }
    
    .footer-logo-icon {
        width: 50px;
        height: 50px;
        background-color: #d4a574;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }
    
    .footer-logo-text h4 {
        font-size: 18px;
        margin: 0 0 3px 0;
    }
    
    .footer-logo-text p {
        font-size: 12px;
        margin: 0;
        color: #d1fae5;
    }
    
    .footer-description {
        font-size: 14px;
        line-height: 1.8;
        color: #d1fae5;
        margin: 20px 0;
    }
    
    .footer-social-title {
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .footer-social-links {
        display: flex;
        gap: 15px;
        margin-top: 15px;
    }
    
    .footer-social-links a {
        padding: 8px 15px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
        transition: all 0.3s ease;
        text-decoration: none;
        color: white;
        font-size: 14px;
    }
    
    .footer-social-links a:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
    }
    
    .footer-section h3 {
        font-size: 20px;
        margin-bottom: 15px;
    }
    
    .footer-menu-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-menu-list li {
        margin-bottom: 12px;
    }
    
    .footer-menu-list a {
        font-size: 14px;
        line-height: 1.8;
        color: #d1fae5;
        text-decoration: none;
        transition: color 0.3s;
    }
    
    .footer-menu-list a:hover {
        color: white;
        text-decoration: underline;
    }
    
    .footer-contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }
    
    .footer-contact-icon {
        font-size: 18px;
    }
    
    .footer-bottom {
        max-width: 1400px;
        margin: 0 auto;
        padding: 30px 50px 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        text-align: center;
    }
    
    .footer-institute-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
    }
    
    .footer-badge-icon {
        width: 30px;
        height: 30px;
        background-color: #3b82f6;
        border-radius: 5px;
    }
    
    .footer-badge-text h5 {
        font-size: 14px;
        margin: 0 0 2px 0;
    }
    
    .footer-badge-text p {
        font-size: 11px;
        color: #d1fae5;
        margin: 0;
    }
    
    @media (max-width: 1024px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr;
        }
    }
    
    @media (max-width: 768px) {
        .footer-container {
            padding: 0 20px;
        }
        
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .footer-bottom {
            padding: 30px 20px 20px;
        }
    }
</style>

<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <div class="footer-section">
                <div class="footer-logo-section">
                    <div class="footer-logo-icon">🌾</div>
                    <div class="footer-logo-text">
                        <h4>Pupuk Subsidi Indonesia</h4>
                        <p>Program Pemerintah untuk Petani</p>
                    </div>
                </div>
                <p class="footer-description">Platform resmi pemerintah untuk distribusi pupuk dan bibit bersubsidi kepada petani Indonesia. Mendukung ketahanan pangan nasional melalui program subsidi berkualitas.</p>
                <p class="footer-social-title">Follow us!</p>
                <div class="footer-social-links">
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Menu Utama</h3>
                <ul class="footer-menu-list">
                    @auth
                        <li><a href="{{ route('dashboard') }}">Beranda</a></li>
                    @else
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                    @endauth
                    <li><a href="{{ route('pupuk.bibit') }}">Pupuk & Bibit</a></li>
                    @auth
                        <li><a href="{{ route('profil.user') }}">Profil</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Masuk</a></li>
                    @endauth
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>

            <div class="footer-section" id="kontak">
                <h3>Contact Us</h3>
                <div class="footer-contact-item">
                    <span class="footer-contact-icon">📍</span>
                    <span>Jl. Sitoluama, Laguboti, Toba</span>
                </div>
                <div class="footer-contact-item">
                    <span class="footer-contact-icon">📞</span>
                    <span>+31 91813 23 2309</span>
                </div>
                <div class="footer-contact-item">
                    <span class="footer-contact-icon">✉️</span>
                    <span>hello@squareup.com</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="footer-institute-badge">
            <div class="footer-badge-icon"></div>
            <div class="footer-badge-text">
                <h5>INFORMATION SYSTEMS</h5>
                <p>Del Institute of Technology</p>
            </div>
        </div>
    </div>
</footer>