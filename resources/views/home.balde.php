<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>
    <style>
        :root{
            --bg:#f4f6fb; --card:#fff; --accent:#2563eb; --muted:#6b7280;
            --radius:8px; --gap:16px;
        }
        *{box-sizing:border-box}
        body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;background:var(--bg);color:#111}
        .wrap{max-width:1100px;margin:28px auto;padding:20px;display:grid;grid-template-columns:220px 1fr;gap:24px}
        header{grid-column:1/3;display:flex;align-items:center;justify-content:space-between;padding:14px 18px;background:var(--card);border-radius:var(--radius);box-shadow:0 4px 14px rgba(16,24,40,0.04)}
        .brand{display:flex;align-items:center;gap:12px;font-weight:600}
        .brand .dot{width:36px;height:36px;border-radius:8px;background:linear-gradient(135deg,var(--accent),#60a5fa);display:inline-block}
        nav{background:var(--card);padding:14px;border-radius:var(--radius);box-shadow:0 6px 18px rgba(2,6,23,0.06)}
        .nav-list{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px}
        .nav-list a{display:block;padding:8px 10px;color:#0f172a;text-decoration:none;border-radius:6px}
        .nav-list a:hover{background:#f1f5f9}
        main{background:transparent}
        .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:18px}
        .card{background:var(--card);padding:16px;border-radius:10px;box-shadow:0 6px 18px rgba(2,6,23,0.04)}
        .card h3{margin:0;font-size:14px;color:var(--muted);font-weight:600}
        .card p{margin:8px 0 0;font-size:20px;font-weight:700}
        .table{background:var(--card);padding:12px;border-radius:10px;box-shadow:0 6px 18px rgba(2,6,23,0.04)}
        table{width:100%;border-collapse:collapse}
        th,td{padding:10px;text-align:left;border-bottom:1px solid #eef2f7;font-size:14px}
        th{color:var(--muted);font-weight:600}
        .actions{display:flex;gap:8px}
        .btn{background:var(--accent);color:#fff;padding:8px 12px;border-radius:8px;text-decoration:none;font-size:13px}
        @media (max-width:880px){
            .wrap{grid-template-columns:1fr; padding:12px}
            .grid{grid-template-columns:repeat(2,1fr)}
        }
        @media (max-width:520px){ .grid{grid-template-columns:1fr} nav{order:2} header{flex-direction:column;align-items:flex-start;gap:10px} }
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <div class="brand">
                <span class="dot" aria-hidden></span>
                <div>
                    <div>{{ config('app.name', 'Aplikasi') }}</div>
                    <small style="color:var(--muted)">Sistem Informasi Pupuk</small>
                </div>
            </div>

            <div style="display:flex;gap:12px;align-items:center">
                @auth
                    <div style="text-align:right">
                        <div style="font-weight:600">{{ Auth::user()->name }}</div>
                        <small style="color:var(--muted)">@if(Auth::user()->email){{ Auth::user()->email }}@endif</small>
                    </div>
                @endauth
                <a href="{{ url('/') }}" class="btn" style="background:#111">Kembali</a>
            </div>
        </header>

        <nav>
            <ul class="nav-list">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Stok</a></li>
                <li><a href="#">Penjualan</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
        </nav>

        <main>
            <div class="grid">
                <div class="card">
                    <h3>Total Produk</h3>
                    <p>128</p>
                </div>
                <div class="card">
                    <h3>Stok Tersedia</h3>
                    <p>3.540</p>
                </div>
                <div class="card">
                    <h3>Penjualan Hari Ini</h3>
                    <p>42</p>
                </div>
            </div>

            <div class="card" style="margin-bottom:16px">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
                    <strong>Transaksi Terbaru</strong>
                    <div class="actions">
                        <a href="#" class="btn">Baru</a>
                        <a href="#" style="padding:8px 12px;background:#eef2ff;border-radius:8px;color:var(--accent);text-decoration:none">Lihat Semua</a>
                    </div>
                </div>

                <div class="table">
                    <table>
                        <thead>
                            <tr><th>No</th><th>Produk</th><th>Jumlah</th><th>Tanggal</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Pupuk A</td><td>20</td><td>2025-10-30</td></tr>
                            <tr><td>2</td><td>Pupuk B</td><td>10</td><td>2025-10-29</td></tr>
                            <tr><td>3</td><td>Pupuk C</td><td>12</td><td>2025-10-28</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
</body>
</html>
```// filepath: c:\laragon\www\ppw10\Project-SistemInformasiPupuk\resources\views\dashboard.blade.php
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>
    <style>
        :root{
            --bg:#f4f6fb; --card:#fff; --accent:#2563eb; --muted:#6b7280;
            --radius:8px; --gap:16px;
        }
        *{box-sizing:border-box}
        body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;background:var(--bg);color:#111}
        .wrap{max-width:1100px;margin:28px auto;padding:20px;display:grid;grid-template-columns:220px 1fr;gap:24px}
        header{grid-column:1/3;display:flex;align-items:center;justify-content:space-between;padding:14px 18px;background:var(--card);border-radius:var(--radius);box-shadow:0 4px 14px rgba(16,24,40,0.04)}
        .brand{display:flex;align-items:center;gap:12px;font-weight:600}
        .brand .dot{width:36px;height:36px;border-radius:8px;background:linear-gradient(135deg,var(--accent),#60a5fa);display:inline-block}
        nav{background:var(--card);padding:14px;border-radius:var(--radius);box-shadow:0 6px 18px rgba(2,6,23,0.06)}
        .nav-list{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px}
        .nav-list a{display:block;padding:8px 10px;color:#0f172a;text-decoration:none;border-radius:6px}
        .nav-list a:hover{background:#f1f5f9}
        main{background:transparent}
        .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:18px}
        .card{background:var(--card);padding:16px;border-radius:10px;box-shadow:0 6px 18px rgba(2,6,23,0.04)}
        .card h3{margin:0;font-size:14px;color:var(--muted);font-weight:600}
        .card p{margin:8px 0 0;font-size:20px;font-weight:700}
        .table{background:var(--card);padding:12px;border-radius:10px;box-shadow:0 6px 18px rgba(2,6,23,0.04)}
        table{width:100%;border-collapse:collapse}
        th,td{padding:10px;text-align:left;border-bottom:1px solid #eef2f7;font-size:14px}
        th{color:var(--muted);font-weight:600}
        .actions{display:flex;gap:8px}
        .btn{background:var(--accent);color:#fff;padding:8px 12px;border-radius:8px;text-decoration:none;font-size:13px}
        @media (max-width:880px){
            .wrap{grid-template-columns:1fr; padding:12px}
            .grid{grid-template-columns:repeat(2,1fr)}
        }
        @media (max-width:520px){ .grid{grid-template-columns:1fr} nav{order:2} header{flex-direction:column;align-items:flex-start;gap:10px} }
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <div class="brand">
                <span class="dot" aria-hidden></span>
                <div>
                    <div>{{ config('app.name', 'Aplikasi') }}</div>
                    <small style="color:var(--muted)">Sistem Informasi Pupuk</small>
                </div>
            </div>

            <div style="display:flex;gap:12px;align-items:center">
                @auth
                    <div style="text-align:right">
                        <div style="font-weight:600">{{ Auth::user()->name }}</div>
                        <small style="color:var(--muted)">@if(Auth::user()->email){{ Auth::user()->email }}@endif</small>
                    </div>
                @endauth
                <a href="{{ url('/') }}" class="btn" style="background:#111">Kembali</a>
            </div>
        </header>

        <nav>
            <ul class="nav-list">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Stok</a></li>
                <li><a href="#">Penjualan</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
        </nav>

        <main>
            <div class="grid">
                <div class="card">
                    <h3>Total Produk</h3>
                    <p>128</p>
                </div>
                <div class="card">
                    <h3>Stok Tersedia</h3>
                    <p>3.540</p>
                </div>
                <div class="card">
                    <h3>Penjualan Hari Ini</h3>
                    <p>42</p>
                </div>
            </div>

            <div class="card" style="margin-bottom:16px">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
                    <strong>Transaksi Terbaru</strong>
                    <div class="actions">
                        <a href="#" class="btn">Baru</a>
                        <a href="#" style="padding:8px 12px;background:#eef2ff;border-radius:8px;color:var(--accent);text-decoration:none">Lihat Semua</a>
                    </div>
                </div>

                <div class="table">
                    <table>
                        <thead>
                            <tr><th>No</th><th>Produk</th><th>Jumlah</th><th>Tanggal</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Pupuk A</td><td>20</td><td>2025-10-30</td></tr>
                            <tr><td>2</td><td>Pupuk B</td><td>10</td><td>2025-10-29</td></tr>
                            <tr><td>3</td><td>Pupuk C</td><td>12</td><td>2025-10-28</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
</body>
</html>