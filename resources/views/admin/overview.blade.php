@extends('layouts.admin')

@section('title', 'Overview Admin')

@push('styles')
<style>
    /* ========== STATISTICS CARDS ========== */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 20px;
        margin-bottom: 35px;
    }

    .stat-card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        display: flex;
        align-items: center;
        gap: 20px;
        transition: all 0.3s;
        border-left: 5px solid;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .stat-card.green { border-color: #4CAF50; }
    .stat-card.blue { border-color: #2196F3; }
    .stat-card.orange { border-color: #FF9800; }
    .stat-card.purple { border-color: #9C27B0; }

    .stat-icon {
        width: 65px;
        height: 65px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8em;
        color: white;
    }

    .stat-icon.green { background: linear-gradient(135deg, #4CAF50, #2e7d32); }
    .stat-icon.blue { background: linear-gradient(135deg, #2196F3, #1976D2); }
    .stat-icon.orange { background: linear-gradient(135deg, #FF9800, #F57C00); }
    .stat-icon.purple { background: linear-gradient(135deg, #9C27B0, #7B1FA2); }

    .stat-info h3 {
        font-size: 2.2em;
        margin-bottom: 5px;
        color: #333;
        font-weight: 700;
    }

    .stat-info p {
        color: #666;
        font-size: 0.95em;
        font-weight: 500;
    }

    /* ========== ORDERS TABLE ========== */
    .table-container {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #4CAF50;
    }

    .table-header h2 {
        color: #1b5e20;
        font-size: 1.5em;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .table-header h2 i {
        color: #4CAF50;
    }

    .view-all-btn {
        background: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
    }

    .view-all-btn:hover {
        background: #2e7d32;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(76, 175, 80, 0.3);
    }

    .orders-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .orders-table thead {
        background: linear-gradient(135deg, #1b5e20, #2e7d32);
        color: white;
    }

    .orders-table th {
        padding: 15px;
        text-align: left;
        font-weight: 600;
        font-size: 0.95em;
    }

    .orders-table td {
        padding: 15px;
        border-bottom: 1px solid #e0e0e0;
        font-size: 0.9em;
    }

    .orders-table tbody tr {
        transition: all 0.3s;
    }

    .orders-table tbody tr:hover {
        background: #f5f5f5;
        transform: scale(1.01);
    }

    .status-badge {
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.85em;
        font-weight: 600;
        display: inline-block;
        text-align: center;
    }

    .status-badge.pending { background: #f5f5f5; color: #757575; }
    .status-badge.processing { background: #e1bee7; color: #6a1b9a; }
    .status-badge.ready { background: #c8e6c9; color: #2e7d32; }
    .status-badge.completed { background: #a5d6a7; color: #1b5e20; }
    .status-badge.rejected { background: #ffcdd2; color: #c62828; }

    .empty-state {
        text-align: center;
        padding: 50px 20px;
        color: #999;
    }

    .empty-state i {
        font-size: 4em;
        margin-bottom: 15px;
        color: #ddd;
    }

    .empty-state h3 {
        color: #666;
        margin-bottom: 8px;
    }

    /* Status Stats */
    .status-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 15px;
        margin-bottom: 30px;
    }

    .status-stat {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        text-align: center;
    }

    .status-stat .count {
        font-size: 1.8em;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .status-stat .label {
        font-size: 0.85em;
        color: #666;
        font-weight: 500;
    }

    .status-stat.pending .count { color: #757575; }
    .status-stat.processing .count { color: #6a1b9a; }
    .status-stat.ready .count { color: #2e7d32; }
    .status-stat.completed .count { color: #1b5e20; }
    .status-stat.rejected .count { color: #c62828; }

    /* Responsive */
    @media (max-width: 992px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .table-container {
            padding: 20px 15px;
            overflow-x: auto;
        }

        .table-header {
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }

        .orders-table {
            font-size: 0.85em;
        }

        .orders-table th,
        .orders-table td {
            padding: 10px 8px;
        }
    }
</style>
@endpush

@section('content')
<!-- Page Title -->
<div class="page-header" style="background: white; padding: 25px 30px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
    <h1 style="color: #1b5e20; font-size: 1.8em; display: flex; align-items: center; gap: 12px;">
        <i class="fas fa-chart-line" style="color: #4CAF50;"></i>
        Overview Dashboard
    </h1>
    <p style="color: #666; margin-top: 8px; font-size: 0.95em;">Ringkasan statistik dan aktivitas sistem</p>
</div>

<!-- Statistics Cards -->
<div class="stats-grid">
    <div class="stat-card green">
        <div class="stat-icon green">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="stat-info">
            <h3>{{ number_format($totalPesanan) }}</h3>
            <p>Total Pesanan</p>
        </div>
    </div>

    <div class="stat-card blue">
        <div class="stat-icon blue">
            <i class="fas fa-money-bill-wave"></i>
        </div>
        <div class="stat-info">
            <h3>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</h3>
            <p>Total Pendapatan</p>
        </div>
    </div>

    <div class="stat-card orange">
        <div class="stat-icon orange">
            <i class="fas fa-users"></i>
        </div>
        <div class="stat-info">
            <h3>{{ number_format($totalPetani) }}</h3>
            <p>Total Petani</p>
        </div>
    </div>

    <div class="stat-card purple">
        <div class="stat-icon purple">
            <i class="fas fa-box"></i>
        </div>
        <div class="stat-info">
            <h3>{{ number_format($totalProduk) }}</h3>
            <p>Total Produk</p>
        </div>
    </div>
</div>

<!-- Status Statistics -->
<div class="status-stats">
    <div class="status-stat pending">
        <div class="count">{{ $pendingCount }}</div>
        <div class="label">Pending</div>
    </div>
    <div class="status-stat processing">
        <div class="count">{{ $processingCount }}</div>
        <div class="label">Processing</div>
    </div>
    <div class="status-stat ready">
        <div class="count">{{ $readyCount }}</div>
        <div class="label">Ready</div>
    </div>
    <div class="status-stat completed">
        <div class="count">{{ $completedCount }}</div>
        <div class="label">Completed</div>
    </div>
    <div class="status-stat rejected">
        <div class="count">{{ $rejectedCount }}</div>
        <div class="label">Rejected</div>
    </div>
</div>

<!-- Recent Orders Table -->
<div class="table-container">
    <div class="table-header">
        <h2>
            <i class="fas fa-list"></i>
            Pesanan Terbaru
        </h2>
        <a href="{{ route('admin.orders') }}" class="view-all-btn">
            <span>Lihat Semua</span>
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>

    @if($recentOrders->count() > 0)
    <table class="orders-table">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Petani</th>
                <th>Balai Desa</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentOrders as $order)
            <tr>
                <td><strong>{{ $order->order_number }}</strong></td>
                <td>{{ $order->user->nama_lengkap ?? 'Unknown' }}</td>
                <td>{{ $order->village_office ?? $order->user->alamat_balai_desa ?? '-' }}</td>
                <td>{{ $order->created_at->format('d M Y') }}</td>
                <td><strong>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</strong></td>
                <td>
                    <span class="status-badge {{ strtolower($order->status) }}">
                        {{ $order->status }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="empty-state">
        <i class="fas fa-inbox"></i>
        <h3>Belum Ada Pesanan</h3>
        <p>Pesanan dari petani akan muncul di sini</p>
    </div>
    @endif
</div>
@endsection
