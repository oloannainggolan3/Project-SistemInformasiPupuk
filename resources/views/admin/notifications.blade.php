@extends('layouts.admin')

@section('title', 'Kirim Notifikasi')

@push('styles')
<style>
    /* Page Header */
    .notification-header {
        background: white;
        padding: 25px 30px;
        border-radius: 12px;
        margin-bottom: 30px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .notification-header h1 {
        color: #1b5e20;
        font-size: 1.8em;
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 8px;
    }

    .notification-header h1 i {
        color: #4CAF50;
    }

    .notification-header p {
        color: #666;
        font-size: 0.95em;
    }

    /* Notification Form */
    .notification-form {
        background: white;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        max-width: 900px;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
        font-size: 0.95em;
    }

    .form-group label i {
        margin-right: 8px;
        color: #4CAF50;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 0.95em;
        font-family: inherit;
        transition: all 0.3s;
    }

    .form-control:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.1);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }

    .recipient-options {
        display: flex;
        gap: 20px;
        margin-top: 10px;
    }

    .radio-option {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 20px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .radio-option:hover {
        border-color: #4CAF50;
        background: #f1f8f1;
    }

    .radio-option input[type="radio"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    .radio-option input[type="radio"]:checked + label {
        color: #2e7d32;
        font-weight: 600;
    }

    .radio-option label {
        margin: 0;
        cursor: pointer;
    }

    /* Buttons */
    .form-actions {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .btn {
        padding: 14px 30px;
        border: none;
        border-radius: 8px;
        font-size: 1em;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #4CAF50, #2e7d32);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(76, 175, 80, 0.3);
    }

    .btn-secondary {
        background: #f5f5f5;
        color: #666;
    }

    .btn-secondary:hover {
        background: #e0e0e0;
    }

    /* Alert */
    .alert {
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 500;
    }

    .alert-success {
        background: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
    }

    .alert-error {
        background: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }

    .alert i {
        font-size: 1.3em;
    }

    /* Stats Cards */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-box {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        text-align: center;
    }

    .stat-box .icon {
        font-size: 2.5em;
        margin-bottom: 10px;
        color: #4CAF50;
    }

    .stat-box .value {
        font-size: 2em;
        font-weight: 700;
        color: #1b5e20;
        margin-bottom: 5px;
    }

    .stat-box .label {
        color: #666;
        font-size: 0.9em;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .notification-form {
            padding: 25px 20px;
        }

        .recipient-options {
            flex-direction: column;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="notification-header">
    <h1>
        <i class="fas fa-paper-plane"></i>
        Kirim Notifikasi
    </h1>
    <p>Kirim pemberitahuan kepada semua petani terdaftar</p>
</div>

<!-- Success/Error Messages -->
@if(session('success'))
<div class="alert alert-success">
    <i class="fas fa-check-circle"></i>
    <span>{{ session('success') }}</span>
</div>
@endif

@if(session('error'))
<div class="alert alert-error">
    <i class="fas fa-exclamation-circle"></i>
    <span>{{ session('error') }}</span>
</div>
@endif

@if($errors->any())
<div class="alert alert-error">
    <i class="fas fa-exclamation-circle"></i>
    <div>
        <strong>Terjadi kesalahan:</strong>
        <ul style="margin-top: 8px; margin-left: 20px;">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<!-- Statistics -->
<div class="stats-row">
    <div class="stat-box">
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="value">{{ $totalUsers }}</div>
        <div class="label">Total Petani</div>
    </div>
    <div class="stat-box">
        <div class="icon">
            <i class="fas fa-bell"></i>
        </div>
        <div class="value">{{ $notificationsSent }}</div>
        <div class="label">Notifikasi Terkirim</div>
    </div>
</div>

<!-- Notification Form -->
<div class="notification-form">
    <form action="{{ route('admin.notifications.send') }}" method="POST">
        @csrf

        <!-- Title -->
        <div class="form-group">
            <label>
                <i class="fas fa-heading"></i>
                Judul Notifikasi
            </label>
            <input 
                type="text" 
                name="title" 
                class="form-control" 
                placeholder="Masukkan judul notifikasi..."
                value="{{ old('title') }}"
                required
            >
        </div>

        <!-- Message -->
        <div class="form-group">
            <label>
                <i class="fas fa-align-left"></i>
                Isi Pesan
            </label>
            <textarea 
                name="message" 
                class="form-control" 
                placeholder="Tulis pesan notifikasi untuk petani..."
                required
            >{{ old('message') }}</textarea>
        </div>

        <!-- Recipient Type -->
        <div class="form-group">
            <label>
                <i class="fas fa-user-friends"></i>
                Penerima
            </label>
            <div class="recipient-options">
                <div class="radio-option">
                    <input 
                        type="radio" 
                        name="recipient_type" 
                        value="all" 
                        id="recipientAll"
                        checked
                    >
                    <label for="recipientAll">Semua Petani</label>
                </div>
                <div class="radio-option">
                    <input 
                        type="radio" 
                        name="recipient_type" 
                        value="active" 
                        id="recipientActive"
                    >
                    <label for="recipientActive">Petani Aktif (Pernah Pesan)</label>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i>
                Kirim Notifikasi
            </button>
            <button type="reset" class="btn btn-secondary">
                <i class="fas fa-redo"></i>
                Reset
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    // Character counter for textarea
    const textarea = document.querySelector('textarea[name="message"]');
    if (textarea) {
        textarea.addEventListener('input', function() {
            console.log('Message length:', this.value.length);
        });
    }

    // Form validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const title = document.querySelector('input[name="title"]').value.trim();
        const message = textarea.value.trim();

        if (!title || !message) {
            e.preventDefault();
            alert('Judul dan pesan harus diisi!');
            return false;
        }

        if (message.length < 10) {
            e.preventDefault();
            alert('Pesan minimal 10 karakter!');
            return false;
        }

        return confirm('Apakah Anda yakin ingin mengirim notifikasi ini?');
    });
</script>
@endpush
