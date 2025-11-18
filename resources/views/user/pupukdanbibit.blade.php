<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pupuk & Bibit Subsidi - Sistem Informasi Pemerintah</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f9f4;
            color: #333;
        }

        /* Header Styles */
        header {
            background-color: #ffffff;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            width: 50px;
            height: 50px;
            background-color: #d4a574;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .logo-text h1 {
            font-size: 18px;
            color: #2d5016;
            font-weight: 600;
        }

        .logo-text p {
            font-size: 12px;
            color: #666;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-btn {
            padding: 10px 20px;
            border: none;
            background-color: transparent;
            cursor: pointer;
            font-size: 14px;
            color: #333;
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        .nav-btn:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }

        .nav-btn.active {
            background-color: #10b981;
            color: white;
        }

        .nav-btn.active:hover {
            background-color: #059669;
        }

        /* Main Content */
        main {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 50px;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
            padding: 15px;
            background-color: #d1fae5;
            border-radius: 10px;
        }

        .section-icon {
            width: 40px;
            height: 40px;
            background-color: #10b981;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .section-header h2 {
            font-size: 24px;
            color: #065f46;
        }

        /* Card Grid */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .product-card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-size: 20px;
            color: #065f46;
            margin-bottom: 15px;
        }

        .product-info p {
            font-size: 13px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
            text-align: justify;
        }

        .product-info ul {
            list-style: none;
            margin-bottom: 20px;
        }

        .product-info ul li {
            font-size: 13px;
            color: #333;
            padding: 5px 0;
            padding-left: 20px;
            position: relative;
        }

        .product-info ul li:before {
            content: "•";
            color: #10b981;
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .price-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-top: 15px;
            border-top: 1px solid #e5e7eb;
        }

        .price-item {
            flex: 1;
        }

        .price-label {
            font-size: 12px;
            color: #666;
            margin-bottom: 3px;
        }

        .price-value {
            font-size: 16px;
            font-weight: 600;
            color: #065f46;
        }

        .btn-detail {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-green {
            background-color: #065f46;
            color: white;
        }

        .btn-green:hover {
            background-color: #047857;
            transform: scale(1.02);
        }

        .btn-blue {
            background-color: #1e40af;
            color: white;
        }

        .btn-blue:hover {
            background-color: #1e3a8a;
            transform: scale(1.02);
        }

        /* Footer */
        footer {
            background-color: #065f46;
            color: white;
            padding: 50px 50px 30px;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .footer-section p,
        .footer-section a {
            font-size: 14px;
            line-height: 1.8;
            color: #d1fae5;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: white;
            text-decoration: underline;
        }

        .footer-logo {
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
            margin-bottom: 3px;
        }

        .footer-logo-text p {
            font-size: 12px;
            color: #d1fae5;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-links a {
            padding: 8px 15px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: rgba(255,255,255,0.2);
            transform: translateY(-3px);
        }

        .menu-list {
            list-style: none;
        }

        .menu-list li {
            margin-bottom: 12px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .contact-icon {
            font-size: 18px;
        }

        .footer-bottom {
            max-width: 1400px;
            margin: 0 auto;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.2);
            text-align: center;
        }

        .institute-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 8px;
        }

        .badge-icon {
            width: 30px;
            height: 30px;
            background-color: #3b82f6;
            border-radius: 5px;
        }

        .badge-text h5 {
            font-size: 14px;
            margin-bottom: 2px;
        }

        .badge-text p {
            font-size: 11px;
            color: #d1fae5;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }

            main {
                padding: 0 20px;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }

            footer {
                padding: 30px 20px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    {{-- Header partial --}}
    @include('partials.header')
            
    <main>
        <section id="pupuk-subsidi">
            <div class="section-header">
                <div class="section-icon">🌿</div>
                <h2>Pupuk Subsidi</h2>
            </div>
            <div class="card-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=400&h=300&fit=crop" alt="Urea">
                    </div>
                    <div class="product-info">
                        <h3>Urea</h3>
                        <p>Urea adalah pupuk nitrogen bersubsidi tinggi yang berperan penting dalam mendukung pertumbuhan daun dan batang tanaman secara optimal. Dengan kandungan nitrogen yang mudah diserap, urea membantu mempercepat proses fotosintesis sehingga tanaman dapat tumbuh lebih hijau dan mendukung perkembangan vegetatif.</p>
                        <ul>
                            <li>Meningkatkan pertumbuhan vegetatif</li>
                            <li>Memperbaiki warna hijau daun</li>
                            <li>Cocok untuk semua jenis tanaman</li>
                            <li>Mudah larut dalam air</li>
                            <li>Efektif untuk tanaman padi</li>
                        </ul>
                        <div class="price-section">
                            <div class="price-item">
                                <div class="price-label">Harga Normal</div>
                                <div class="price-value">Rp 2.300</div>
                            </div>
                            <div class="price-item">
                                <div class="price-label">Harga Subsidi</div>
                                <div class="price-value">Rp 1.800</div>
                            </div>
                        </div>
                        <button class="btn-detail btn-green">Lihat Detail & Pesan</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=400&h=300&fit=crop" alt="Urea">
                    </div>
                    <div class="product-info">
                        <h3>Urea</h3>
                        <p>Urea adalah pupuk nitrogen bersubsidi tinggi yang berperan penting dalam mendukung pertumbuhan daun dan batang tanaman secara optimal. Dengan kandungan nitrogen yang mudah diserap, urea membantu mempercepat proses fotosintesis sehingga tanaman dapat tumbuh lebih hijau dan mendukung perkembangan vegetatif.</p>
                        <ul>
                            <li>Meningkatkan pertumbuhan vegetatif</li>
                            <li>Memperbaiki warna hijau daun</li>
                            <li>Cocok untuk semua jenis tanaman</li>
                            <li>Mudah larut dalam air</li>
                            <li>Efektif untuk tanaman padi</li>
                        </ul>
                        <div class="price-section">
                            <div class="price-item">
                                <div class="price-label">Harga Normal</div>
                                <div class="price-value">Rp 2.300</div>
                            </div>
                            <div class="price-item">
                                <div class="price-label">Harga Subsidi</div>
                                <div class="price-value">Rp 1.800</div>
                            </div>
                        </div>
                        <button class="btn-detail btn-green">Lihat Detail & Pesan</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=400&h=300&fit=crop" alt="Urea">
                    </div>
                    <div class="product-info">
                        <h3>Urea</h3>
                        <p>Urea adalah pupuk nitrogen bersubsidi tinggi yang berperan penting dalam mendukung pertumbuhan daun dan batang tanaman secara optimal. Dengan kandungan nitrogen yang mudah diserap, urea membantu mempercepat proses fotosintesis sehingga tanaman dapat tumbuh lebih hijau dan mendukung perkembangan vegetatif.</p>
                        <ul>
                            <li>Meningkatkan pertumbuhan vegetatif</li>
                            <li>Memperbaiki warna hijau daun</li>
                            <li>Cocok untuk semua jenis tanaman</li>
                            <li>Mudah larut dalam air</li>
                            <li>Efektif untuk tanaman padi</li>
                        </ul>
                        <div class="price-section">
                            <div class="price-item">
                                <div class="price-label">Harga Normal</div>
                                <div class="price-value">Rp 2.300</div>
                            </div>
                            <div class="price-item">
                                <div class="price-label">Harga Subsidi</div>
                                <div class="price-value">Rp 1.800</div>
                            </div>
                        </div>
                        <button class="btn-detail btn-green">Lihat Detail & Pesan</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="bibit-subsidi">
            <div class="section-header" style="background-color: #dbeafe;">
                <div class="section-icon" style="background-color: #1e40af;">🌱</div>
                <h2 style="color: #1e3a8a;">Bibit Subsidi</h2>
            </div>
            <div class="card-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=400&h=300&fit=crop" alt="Urea">
                    </div>
                    <div class="product-info">
                        <h3>Urea</h3>
                        <p>Urea adalah pupuk nitrogen bersubsidi tinggi yang berperan penting dalam mendukung pertumbuhan daun dan batang tanaman secara optimal. Dengan kandungan nitrogen yang mudah diserap, urea membantu mempercepat proses fotosintesis sehingga tanaman dapat tumbuh lebih hijau dan mendukung perkembangan vegetatif.</p>
                        <ul>
                            <li>Meningkatkan pertumbuhan vegetatif</li>
                            <li>Memperbaiki warna hijau daun</li>
                            <li>Cocok untuk semua jenis tanaman</li>
                            <li>Mudah larut dalam air</li>
                            <li>Efektif untuk tanaman padi</li>
                        </ul>
                        <div class="price-section">
                            <div class="price-item">
                                <div class="price-label">Harga Normal</div>
                                <div class="price-value">Rp 2.300</div>
                            </div>
                            <div class="price-item">
                                <div class="price-label">Harga Subsidi</div>
                                <div class="price-value">Rp 1.800</div>
                            </div>
                        </div>
                        <button class="btn-detail btn-blue">Lihat Detail & Pesan</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=400&h=300&fit=crop" alt="Urea">
                    </div>
                    <div class="product-info">
                        <h3>Urea</h3>
                        <p>Urea adalah pupuk nitrogen bersubsidi tinggi yang berperan penting dalam mendukung pertumbuhan daun dan batang tanaman secara optimal. Dengan kandungan nitrogen yang mudah diserap, urea membantu mempercepat proses fotosintesis sehingga tanaman dapat tumbuh lebih hijau dan mendukung perkembangan vegetatif.</p>
                        <ul>
                            <li>Meningkatkan pertumbuhan vegetatif</li>
                            <li>Memperbaiki warna hijau daun</li>
                            <li>Cocok untuk semua jenis tanaman</li>
                            <li>Mudah larut dalam air</li>
                            <li>Efektif untuk tanaman padi</li>
                        </ul>
                        <div class="price-section">
                            <div class="price-item">
                                <div class="price-label">Harga Normal</div>
                                <div class="price-value">Rp 2.300</div>
                            </div>
                            <div class="price-item">
                                <div class="price-label">Harga Subsidi</div>
                                <div class="price-value">Rp 1.800</div>
                            </div>
                        </div>
                        <button class="btn-detail btn-blue">Lihat Detail & Pesan</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=400&h=300&fit=crop" alt="Urea">
                    </div>
                    <div class="product-info">
                        <h3>Urea</h3>
                        <p>Urea adalah pupuk nitrogen bersubsidi tinggi yang berperan penting dalam mendukung pertumbuhan daun dan batang tanaman secara optimal. Dengan kandungan nitrogen yang mudah diserap, urea membantu mempercepat proses fotosintesis sehingga tanaman dapat tumbuh lebih hijau dan mendukung perkembangan vegetatif.</p>
                        <ul>
                            <li>Meningkatkan pertumbuhan vegetatif</li>
                            <li>Memperbaiki warna hijau daun</li>
                            <li>Cocok untuk semua jenis tanaman</li>
                            <li>Mudah larut dalam air</li>
                            <li>Efektif untuk tanaman padi</li>
                        </ul>
                        <div class="price-section">
                            <div class="price-item">
                                <div class="price-label">Harga Normal</div>
                                <div class="price-value">Rp 2.300</div>
                            </div>
                            <div class="price-item">
                                <div class="price-label">Harga Subsidi</div>
                                <div class="price-value">Rp 1.800</div>
                            </div>
                        </div>
                        <button class="btn-detail btn-blue">Lihat Detail & Pesan</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <script>
        // Function to scroll to specific section
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            } else {
                // If section doesn't exist on current page, scroll to top
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        }

        // Smooth scroll effect for all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                scrollToSection(targetId);
            });
        });

        // Button click effects - Redirect ke halaman detail
        document.querySelectorAll('.btn-detail').forEach((button, index) => {
            button.addEventListener('click', function() {
                // ID produk berdasarkan urutan (1-6)
                const productId = index + 1;
                window.location.href = '{{ url("/user/pupuk-bibit") }}/' + productId + '/detail';
            });
        });

        // Card animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.product-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            observer.observe(card);
        });

        // Handle navigation active state
        const navButtons = document.querySelectorAll('.nav-btn');
        navButtons.forEach(button => {
            button.addEventListener('click', function() {
                navButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Auto-detect current section and update nav
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navButtons.forEach(button => {
                button.classList.remove('active');
                if (button.getAttribute('onclick') && button.getAttribute('onclick').includes(current)) {
                    button.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>