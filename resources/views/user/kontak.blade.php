@extends('layouts.user')

@section('title', 'Hubungi Kami')

@push('styles')
<style>
    :root {
        --primary-green: #4CAF50;
        --dark-green: #065f46;
        --medium-green: #1a4d1a;
        --light-green: #81c784;
        --text-color: #333;
        --white: #ffffff;
        --light-gray-bg: #f7f7f7;
        --border-color: #ddd;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .page-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .page-header h1 {
        font-size: 2.5rem;
        color: #2e7d32;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .page-subtitle {
        font-size: 1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .contact-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-top: 40px;
    }

    .contact-info-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .info-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 30px;
    }

    .info-icon {
        width: 60px;
        height: 60px;
        background: #f0f0f0;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
    }

    .info-header h3 {
        font-size: 1.3rem;
        color: var(--text-color);
    }

    .info-description {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .contact-detail {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
        font-size: 0.95rem;
        color: var(--text-color);
    }

    .operating-hours {
        margin-top: 30px;
    }

    .hours-header {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        margin-bottom: 15px;
        font-size: 1rem;
    }

    .hours-table {
        width: 100%;
    }

    .hours-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .hours-row:last-child {
        border-bottom: none;
    }

    .day {
        color: #666;
    }

    .time {
        font-weight: 600;
        color: var(--text-color);
    }

    .contact-form-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .form-header {
        font-size: 1.3rem;
        color: var(--text-color);
        margin-bottom: 25px;
        font-weight: 600;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        font-weight: 500;
        margin-bottom: 8px;
        color: var(--text-color);
        font-size: 0.95rem;
    }

    .form-group input,
    .form-group textarea {
        padding: 12px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        font-size: 0.95rem;
        font-family: 'Arial', sans-serif;
        transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--primary-green);
        box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.1);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .submit-btn {
        width: 100%;
        padding: 14px;
        background: var(--primary-green);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .submit-btn:hover {
        background: #45a049;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(76, 175, 80, 0.4);
    }

    .faq-section {
        margin-top: 50px;
    }

    .faq-header {
        font-size: 1.8rem;
        color: #2e7d32;
        margin-bottom: 25px;
        font-weight: 700;
    }

    .faq-item {
        background: white;
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .faq-question {
        font-weight: 600;
        color: var(--text-color);
        margin-bottom: 10px;
        font-size: 1rem;
    }

    .faq-answer {
        color: #666;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .alert {
        padding: 1rem 1.5rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    @media (max-width: 968px) {
        .contact-section {
            grid-template-columns: 1fr;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .page-header h1 {
            font-size: 2rem;
        }

        .container {
            padding: 30px 15px;
        }

        .contact-info-card,
        .contact-form-card {
            padding: 25px;
        }
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Hubungi Kami</h1>
        <p class="page-subtitle">Customer Service kami siap membantu Anda 24/7 dengan pertanyaan seputar program pupuk subsidi</p>
    </div>

    <div class="contact-section">
        <!-- Contact Info Card -->
        <div class="contact-info-card">
            <div class="info-header">
                <div class="info-icon">💬</div>
                <h3>Butuh Bantuan Cepat?</h3>
            </div>
            <p class="info-description">Hubungi kami langsung melalui WhatsApp untuk respon lebih cepat</p>
            <div class="contact-detail">
                <span style="font-size: 1.2rem;">📞</span>
                <span>+62 812-3456-7890</span>
            </div>

            <!-- Operating Hours -->
            <div class="operating-hours">
                <div class="hours-header">
                    <span>⏰</span>
                    <span>Jam Operasional</span>
                </div>
                <div class="hours-table">
                    <div class="hours-row">
                        <span class="day">Senin - Jumat</span>
                        <span class="time">08.00 - 17.00</span>
                    </div>
                    <div class="hours-row">
                        <span class="day">Sabtu</span>
                        <span class="time">08.00 - 12.00</span>
                    </div>
                    <div class="hours-row">
                        <span class="day">Minggu & Libur</span>
                        <span class="time">Tutup</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Card -->
        <div class="contact-form-card">
            <h3 class="form-header">Kirim Pesan Sekarang</h3>

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('kontak.send') }}" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp</label>
                        <input type="text" id="no_telp" name="no_telp" value="{{ old('no_telp') }}" required>
                    </div>
                    <div class="form-group full-width">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group full-width">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan" required>{{ old('pesan') }}</textarea>
                    </div>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i>
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section">
        <h2 class="faq-header">Frequently Asked Questions</h2>
        
        <div class="faq-item">
            <div class="faq-question">Bagaimana cara mendaftar program subsidi?</div>
            <div class="faq-answer">Anda dapat mendaftar melalui website ini atau datang langsung ke Balai Desa setempat dengan membawa KTP.</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Kapan pupuk akan dikirim?</div>
            <div class="faq-answer">Pupuk akan diambil 2-3 hari setelah konfirmasi pesanan. Anda akan menerima notifikasi saat pupuk siap diambil.</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Bagaimana cara pembayaran?</div>
            <div class="faq-answer">Pembayaran hanya dapat dilakukan secara tunai di Balai Desa saat pengambilan pupuk.</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Berapa batas maksimal pembelian?</div>
            <div class="faq-answer">Batas pembelian disesuaikan dengan luas lahan yang terdaftar, maksimal 2 ton per musim tanam.</div>
        </div>
    </div>
</div>
@endsection
