<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') - Pupuk & Bibit Subsidi</title>

    <style>
        :root{
            --bg:#f3f7f6;
            --card:#ffffff;
            --muted:#6b7280;
            --primary:#1f7a2e;
            --accent:#2ea36b;
            --glass: rgba(255,255,255,0.6);
            --radius:12px;
            --shadow: 0 6px 18px rgba(15,23,42,0.06);
            --glass-shadow: 0 8px 30px rgba(16,24,40,0.06);
        }

        *{box-sizing:border-box;margin:0;padding:0}
        html,body{height:100%}
        body{
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background:
                radial-gradient(1200px 400px at -10% -10%, rgba(46,163,107,0.06), transparent 12%),
                radial-gradient(1000px 300px at 110% 110%, rgba(31,122,46,0.04), transparent 12%),
                var(--bg);
            color:#111827;
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing:grayscale;
            line-height:1.4;
            padding-bottom:48px;
        }

        /* Header / Nav */
        header{
            backdrop-filter: blur(6px);
            background: linear-gradient(180deg, rgba(255,255,255,0.7), rgba(255,255,255,0.4));
            box-shadow: var(--shadow);
            position:sticky;
            top:0;
            z-index:40;
        }
        .nav{
            max-width:1100px;
            margin:0 auto;
            padding:14px 20px;
            display:flex;
            align-items:center;
            gap:18px;
        }
        .brand{
            display:flex;
            align-items:center;
            gap:12px;
            text-decoration:none;
            color:var(--primary);
            font-weight:700;
            font-size:1.05rem;
        }
        .brand-badge{
            width:44px;height:44px;border-radius:10px;
            background:linear-gradient(135deg,var(--primary),var(--accent));
            display:inline-grid;place-items:center;color:white;font-weight:800;
            box-shadow:var(--glass-shadow);
        }

        .spacer{flex:1}

        nav ul{list-style:none;display:flex;gap:12px;align-items:center}
        nav a{
            color:var(--muted);
            text-decoration:none;
            padding:8px 12px;border-radius:8px;font-weight:600;font-size:.95rem;
        }
        nav a:hover{color:var(--primary);background:rgba(31,122,46,0.06)}

        .btn{
            background:var(--primary); color:white; padding:9px 14px; border-radius:10px;
            text-decoration:none; font-weight:700; display:inline-flex; gap:8px; align-items:center;
            box-shadow: 0 8px 20px rgba(31,122,46,0.12);
        }
        .btn-outline{
            background:transparent;color:var(--primary);border:1px solid rgba(31,122,46,0.12);
            box-shadow:none;font-weight:700;padding:8px 12px;border-radius:9px;
        }

        /* Container */
        .container{
            max-width:1100px;margin:20px auto;padding:18px;
        }

        /* Hero */
        .hero{
            display:grid;
            grid-template-columns: 1fr 380px;
            gap:20px;
            align-items:center;
            margin-bottom:18px;
        }
        .hero-card{
            background:linear-gradient(180deg,var(--card),#fbfffb);
            padding:28px;border-radius:var(--radius);box-shadow:var(--glass-shadow);
        }
        .hero h2{font-size:1.6rem;margin-bottom:8px;color:#0b3a10;}
        .hero p{color:var(--muted);margin-bottom:14px}

        /* Card */
        .card{
            background:var(--card);
            border-radius:12px;
            padding:18px;
            box-shadow:var(--shadow);
        }

        /* Form / Inputs */
        .form-row{display:flex;gap:12px;flex-wrap:wrap}
        .form-group{flex:1;min-width:180px;margin-bottom:12px}
        label{display:block;font-weight:600;margin-bottom:6px;color:#0f172a}
        input[type="text"], input[type="number"], select, textarea{
            width:100%;padding:10px 12px;border-radius:10px;border:1px solid #e6e9ee;background:transparent;
            transition:box-shadow .12s, border-color .12s;
        }
        input:focus, select:focus, textarea:focus{
            outline:none;border-color:rgba(46,163,107,0.5);box-shadow:0 6px 20px rgba(46,163,107,0.06);
        }

        /* Utilities */
        .text-center{text-align:center}
        .muted{color:var(--muted);font-size:.95rem}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px}
        .small{font-size:.9rem}

        /* Alerts */
        .alert{padding:12px;border-radius:10px;margin-bottom:14px;font-weight:600}
        .alert-success{background:#e6f7ec;color:#114b2b;border:1px solid rgba(46,163,107,0.12)}
        .alert-danger{background:#fff1f2;color:#6b0f1a;border:1px solid rgba(255,0,0,0.06)}

        footer{
            margin-top:36px;padding:20px 0;background:transparent;text-align:center;color:var(--muted);
            border-top:1px dashed rgba(15,23,42,0.04)
        }

        /* Responsive */
        @media (max-width:880px){
            .hero{grid-template-columns:1fr}
            nav ul{display:none}
            .mobile-toggle{display:inline-flex}
        }

        .mobile-toggle{display:none;background:transparent;border:none;font-size:1.1rem;color:var(--primary)}
        .mobile-menu{display:none;margin-top:8px}
        .mobile-menu a{display:block;padding:10px;border-radius:8px;color:var(--muted);text-decoration:none}
        .mobile-menu a:hover{background:rgba(31,122,46,0.04);color:var(--primary)}
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <a href="{{ url('/') }}" class="brand">
                <div class="brand-badge">PB</div>
                Pupuk & Bibit
            </a>

            <div class="spacer"></div>

            <nav aria-label="Main navigation">
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/daftar') }}">Daftar</a></li>
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>
            </nav>

            <button class="mobile-toggle" id="mobileToggle" aria-expanded="false" aria-controls="mobileMenu">☰</button>

            <a href="{{ url('/login') }}" class="btn" style="margin-left:12px">Masuk</a>
        </div>

        <div class="container" id="mobileMenu" style="display:none" class="mobile-menu">
            <div class="mobile-menu">
                <a href="{{ url('/') }}">Beranda</a>
                <a href="{{ url('/daftar') }}">Daftar</a>
                <a href="{{ url('/kontak') }}">Kontak</a>
            </div>
        </div>
    </header>

    <main class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul style="margin:0;padding-left:18px;">
                    @foreach($errors->all() as $error)
                        <li class="small">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Hero + optional side card --}}
        <section class="hero">
            <div class="hero-card">
                <h2>@yield('title')</h2>
                <p class="muted">Sistem informasi sederhana untuk pengelolaan Pupuk & Bibit bersubsidi. Gunakan menu di atas untuk navigasi cepat.</p>
                <div style="display:flex;gap:10px;margin-top:10px;">
                    <a href="{{ url('/daftar') }}" class="btn">Daftar Sekarang</a>
                    <a href="{{ url('/info') }}" class="btn-outline">Pelajari</a>
                </div>
            </div>

            <aside class="card">
                <h3 style="margin-bottom:8px;color:#0b3a10">Info Cepat</h3>
                <p class="muted small">Pastikan data yang dimasukkan lengkap dan akurat. Hubungi pengelola jika butuh bantuan.</p>

                <div style="margin-top:12px">
                    <strong class="small">Jam Layanan</strong>
                    <div class="muted small">Senin - Jumat, 08:00 - 16:00</div>
                </div>
            </aside>
        </section>

        {{-- Main content area --}}
        <section>
            @yield('content')
        </section>
    </main>

    <footer>
        <div class="container small">
            &copy; {{ date('Y') }} Sistem Informasi Pupuk & Bibit. Semua hak cipta dilindungi.
        </div>
    </footer>

    <script>
        (function(){
            var btn = document.getElementById('mobileToggle');
            var menu = document.getElementById('mobileMenu');
            if(!btn || !menu) return;
            btn.addEventListener('click', function(){
                var shown = menu.style.display === 'block';
                menu.style.display = shown ? 'none' : 'block';
                btn.setAttribute('aria-expanded', String(!shown));
            });
        })();
    </script>
</body>
</html>