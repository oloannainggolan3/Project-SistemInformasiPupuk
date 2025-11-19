<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produk->nama_produk }} - Detail Produk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #F3FAF3;
            color: #333;
            min-height: 100vh;
        }

        /* Back Button */
        .back-button {
            max-width: 1400px;
            margin: 30px auto 20px;
            padding: 0 50px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #333;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: #10b981;
        }

        .back-link i {
            font-size: 18px;
        }

        /* Main Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 50px 50px;
        }

        /* Product Layout */
        .product-detail {
            display: grid;
            grid-template-columns: 400px 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        /* Image Section */
        .image-section {
            background: white;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        }

        .main-image {
            width: 100%;
            height: 350px;
            object-fit: contain;
            border-radius: 12px;
            background: #fafafa;
            padding: 20px;
            margin-bottom: 15px;
        }

        .thumbnail-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .thumbnail {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .thumbnail:hover {
            border-color: #10b981;
            transform: scale(1.05);
        }

        .thumbnail.active {
            border-color: #10b981;
        }

        /* Product Info Section */
        .info-section {
            background: #E8F5E9;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        }

        .product-title {
            font-size: 32px;
            font-weight: 700;
            color: #1a5d1a;
            margin-bottom: 15px;
        }

        /* Price Box */
        .price-box {
            background: #C8F3CB;
            border-radius: 12px;
            padding: 15px 20px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .current-price {
            font-size: 28px;
            font-weight: 700;
            color: #1a5d1a;
            display: block;
        }

        .original-price {
            font-size: 14px;
            color: #666;
            text-decoration: line-through;
            display: block;
            margin-top: 5px;
        }

        .subsidi-badge {
            color: #10b981;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .subsidi-badge i {
            font-size: 16px;
        }

        /* Quantity Section */
        .quantity-section {
            margin: 25px 0;
        }

        .quantity-label {
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .qty-btn {
            width: 35px;
            height: 35px;
            border: 2px solid #10b981;
            background: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            color: #10b981;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .qty-btn:hover {
            background: #10b981;
            color: white;
        }

        .qty-value {
            font-size: 18px;
            font-weight: 600;
            min-width: 30px;
            text-align: center;
        }

        .stock-info {
            color: #666;
            font-size: 14px;
        }

        /* Price Summary */
        .price-summary {
            border-top: 2px solid #b8e6bb;
            border-bottom: 2px solid #b8e6bb;
            padding: 15px 0;
            margin: 20px 0;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 15px;
        }

        .price-row:last-child {
            margin-bottom: 0;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 700;
            color: #1a5d1a;
            margin-top: 15px;
        }

        /* Order Button */
        .order-btn {
            width: 100%;
            background: #10b981;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .order-btn:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }

        .info-text {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        /* Product Information Card */
        .product-info-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .info-card-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .info-card-header i {
            color: #10b981;
            font-size: 24px;
        }

        .info-card-title {
            font-size: 22px;
            font-weight: 700;
            color: #1a5d1a;
        }

        .info-subtitle {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .info-description {
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .info-list {
            list-style: none;
            padding-left: 0;
        }

        .info-list li {
            padding-left: 25px;
            position: relative;
            margin-bottom: 8px;
            color: #555;
            line-height: 1.6;
        }

        .info-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: 700;
        }

        /* Usage Guide Grid */
        .usage-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 15px;
        }

        .usage-column h4 {
            font-weight: 600;
            color: #1a5d1a;
            margin-bottom: 10px;
            font-size: 15px;
        }

        .usage-column ul {
            list-style: none;
            padding-left: 0;
        }

        .usage-column li {
            padding-left: 20px;
            position: relative;
            margin-bottom: 6px;
            color: #555;
            font-size: 14px;
        }

        .usage-column li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: 700;
        }

        /* Review Section */
        .review-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        }

        .review-title {
            font-size: 22px;
            font-weight: 700;
            color: #1a5d1a;
            margin-bottom: 20px;
        }

        .review-textarea {
            width: 100%;
            height: 120px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px;
            font-size: 15px;
            font-family: inherit;
            resize: vertical;
            transition: border-color 0.3s ease;
        }

        .review-textarea:focus {
            outline: none;
            border-color: #10b981;
        }

        .submit-review-btn {
            background: #10b981;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .submit-review-btn:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        @media (max-width: 1024px) {
            .product-detail {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .usage-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <!-- Back Button -->
    <div class="back-button">
        <a href="{{ route('user.pupukbibit') }}" class="back-link">
            <i class="fas fa-arrow-left"></i>
            <span>Kembali</span>
        </a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Product Detail Section -->
        <div class="product-detail">
            <!-- Image Section -->
            <div class="image-section">
                @php
                    // Cek apakah produk punya primaryImage (dari database) atau gambar (data statis)
                    if (isset($produk->primaryImage) && $produk->primaryImage) {
                        $mainImageSrc = asset('images/products/' . $produk->primaryImage->image_path);
                    } elseif (isset($produk->gambar) && !filter_var($produk->gambar, FILTER_VALIDATE_URL)) {
                        $mainImageSrc = asset('images/products/' . $produk->gambar);
                    } else {
                        $mainImageSrc = $produk->gambar ?? asset('images/placeholder-product.jpg');
                    }
                @endphp
                <img src="{{ $mainImageSrc }}" 
                     alt="{{ $produk->nama_produk }}" 
                     class="main-image"
                     id="mainImage">
                
                @if(isset($produk->images) && is_object($produk->images) && $produk->images->count() > 0)
                <div class="thumbnail-grid">
                    @foreach($produk->images as $index => $image)
                    <img src="{{ asset('images/products/' . $image->image_path) }}" 
                         alt="{{ $produk->nama_produk }}" 
                         class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                         onclick="changeImage(this, '{{ asset('images/products/' . $image->image_path) }}')">
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Info Section -->
            <div class="info-section">
                <h1 class="product-title">{{ $produk->nama_produk }}</h1>

                <div class="price-box">
                    <span class="current-price">Rp{{ number_format($produk->harga_subsidi, 0, ',', '.') }}</span>
                    <span class="original-price">Rp{{ number_format($produk->harga_normal, 0, ',', '.') }}</span>
                </div>

                <div class="subsidi-badge">
                    <i class="fas fa-certificate"></i>
                    <span>Tersertifikasi & Bersubsidi</span>
                </div>

                <!-- Quantity -->
                <div class="quantity-section">
                    <label class="quantity-label">Jumlah Produk yang dipesan :</label>
                    <div class="quantity-control">
                        <button class="qty-btn" onclick="decreaseQty()">−</button>
                        <span class="qty-value" id="qtyValue">1</span>
                        <button class="qty-btn" onclick="increaseQty()">+</button>
                        <span class="stock-info">Tersedia {{ $produk->stok_produk }}</span>
                    </div>
                </div>

                <!-- Price Summary -->
                <div class="price-summary">
                    <div class="price-row">
                        <span>Subtotal</span>
                        <span id="subtotal">Rp{{ number_format($produk->harga_subsidi, 0, ',', '.') }}</span>
                    </div>
                    <div class="price-row">
                        <span>Ongkos Kirim</span>
                        <span>Rp0</span>
                    </div>
                </div>

                <div class="total-row">
                    <span>Total</span>
                    <span id="total">Rp{{ number_format($produk->harga_subsidi, 0, ',', '.') }}</span>
                </div>

                <!-- Order Button -->
                <form id="orderForm" method="POST" action="{{ route('user.pupukbibit.konfirmasi', $produk->id_produk) }}">
                    @csrf
                    <input type="hidden" name="quantity" id="quantityInput" value="1">
                    <input type="hidden" name="catatan" id="catatanInput" value="">
                    <button type="submit" class="order-btn">
                        <i class="fas fa-shopping-cart"></i>
                        Pesan Sekarang
                    </button>
                </form>

                <p class="info-text">
                    Anda dapat mengecek harga dan informasi terkait pupuk subsidi ini melalui informasi produk di bawah ini.
                </p>
            </div>
        </div>

        <!-- Product Information Card -->
        <div class="product-info-card">
            <div class="info-card-header">
                <i class="fas fa-info-circle"></i>
                <h2 class="info-card-title">Informasi Produk</h2>
            </div>

            <h3 class="info-subtitle">Deskripsi Produk</h3>
            <p class="info-description">
                {{ $produk->deskripsi ?? 'Pupuk NPK Phonska adalah pupuk majemuk lengkap yang mengandung unsur hara Nitrogen (N), Fosfor (P), dan Kalium (K) dalam komposisi seimbang 15-15-15. Dirancang khusus untuk meningkatkan produktivitas tanaman padi, jagung, dan palawija dengan hasil maksimal.' }}
            </p>

            <h3 class="info-subtitle">Manfaat & Keunggulan</h3>
            <ul class="info-list">
                <li>Meningkatkan hasil panen hingga 30%</li>
                <li>Memperbaiki tekstur dan ketahanan tanaman hama</li>
                <li>Memperkuat batang dan daun tanaman</li>
                <li>Meningkatkan kualitas buah dan biji</li>
                <li>Membantu pertumbuhan vegetatif</li>
            </ul>

            <h3 class="info-subtitle">Panduan Penggunaan</h3>
            <div class="usage-grid">
                <div class="usage-column">
                    <h4>1. Waktu Pemupukan</h4>
                    <ul>
                        <li>Gunakan NPK saat tanaman baru tumbuh atau awal produksi tanam</li>
                        <li>Alam berbaris dan bebas</li>
                        <li>Cara Pakis</li>
                        <li>Tabur di sekeliling tanaman (sekitar 5-10 cm dari batang)</li>
                        <li>Campurkan dengan tanah</li>
                        <li>Siram dengan air secukupnya</li>
                    </ul>
                </div>
                <div class="usage-column">
                    <h4>2. Pupuk Cair</h4>
                    <ul>
                        <li>Campur 1 tutup botol NPK cair dengan 1 liter air</li>
                        <li>Semprotkan secara merata pada daun dan tanah</li>
                    </ul>
                </div>
                <div class="usage-column">
                    <h4>3. Pupuk Padat</h4>
                    <ul>
                        <li>Gunakan secukupnya (lihat tabel dosis)</li>
                        <li>Letakkan ampas jeruk, daun kering atau lainnya di atas tanah</li>
                        <li>Ulangi pemupukan tiap 1–2 minggu</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Review Section -->
        <div class="review-card">
            <h2 class="review-title">Ulasan Petani</h2>
            <textarea class="review-textarea" placeholder="Tulis Ulasan Anda..."></textarea>
            <button class="submit-review-btn">
                <i class="fas fa-paper-plane"></i> Kirim Ulasan
            </button>
        </div>
    </div>

    @include('partials.footer')

    <script>
        const basePrice = {{ $produk->harga_subsidi }};
        const maxStock = {{ $produk->stok_produk }};
        let currentQty = 1;

        function changeImage(element, imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            element.classList.add('active');
        }

        function increaseQty() {
            if (currentQty < maxStock) {
                currentQty++;
                updateQty();
            }
        }

        function decreaseQty() {
            if (currentQty > 1) {
                currentQty--;
                updateQty();
            }
        }

        function updateQty() {
            document.getElementById('qtyValue').textContent = currentQty;
            document.getElementById('quantityInput').value = currentQty; // Update hidden input
            const total = basePrice * currentQty;
            document.getElementById('subtotal').textContent = 'Rp' + total.toLocaleString('id-ID');
            document.getElementById('total').textContent = 'Rp' + total.toLocaleString('id-ID');
        }
    </script>
</body>
</html>
