<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pupuk dan Bibit Bersubsidi Pemerintah – Masuk</title>
    <style>
        :root{
            --green-dark:#184e2b;
            --green:#2f7d32;
            --green-2:#1f6b22;
            --mint:#eef8f0;
            --line:#cfd8dc;
            --text:#1f2937;
            --muted:#6b7280;
            --white:#ffffff;
        }

        *{box-sizing:border-box}
        html,body{height:100%}
        body{
            margin:0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            color:var(--text);
            background:var(--mint);
        }

        .wrap{
            min-height:100vh;
            display:grid;
            grid-template-columns: 1fr 1fr;
        }

        /* Kolom kiri */
        .left{
            background:var(--green-dark);
            color:#e6ffe9;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:48px 24px;
        }
        .left-inner{
            text-align:center;
            max-width:420px;
        }
        .brand{
            width:120px;
            height:120px;
            border-radius:999px;
            display:block;
            margin:0 auto 20px auto;
            object-fit:contain;
        }
        .title{
            font-size:22px;
            line-height:1.35;
            letter-spacing:.2px;
            font-weight:600;
            margin:0;
        }

        /* Kolom kanan (form) */
        .right{
            background:var(--mint);
            display:flex;
            align-items:center;
            justify-content:center;
            padding:40px 24px;
        }
        .card{
            width:100%;
            max-width:420px;
            background:transparent;
            position:relative; /* untuk tombol kembali (tetap boleh) */
        }

        /* Tombol kembali — pojok kiri atas layar */
        .back {
            position:fixed;
            top:12px;
            left:12px;
            z-index:9999;
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding:8px 10px;
            background:#fff;
            border-radius:6px;
            box-shadow:0 1px 4px rgba(0,0,0,.08);
            color:#2d3748;
            text-decoration:none;
            font-size:14px;
        }
        .back svg{width:16px;height:16px;display:block}

        .wheat{
            width:36px;
            height:36px;
            display:block;
            margin:22px auto 18px auto;
            object-fit:contain;
        }
        form label{
            display:block;
            font-size:12px;
            color:var(--muted);
            margin-bottom:6px;
        }
        .field{
            width:100%;
            height:42px;
            border:1px solid var(--line);
            border-radius:2px;
            background:#fff;
            padding:0 12px;
            font-size:14px;
            outline:none;
            transition:border-color .15s ease, box-shadow .15s ease;
        }
        .field:focus{
            border-color:#9ad2a6;
            box-shadow:0 0 0 3px rgba(76,175,80,.15);
        }
        .gap-16{margin-top:16px}
        .btn{
            width:100%;
            height:40px;
            border:none;
            border-radius:4px;
            font-weight:600;
            cursor:pointer;
            transition:background .15s ease, box-shadow .15s ease, transform .02s linear;
        }
        .btn:active{transform:translateY(1px)}
        .btn-primary{
            background:var(--green);
            color:var(--white);
        }
        .btn-primary:hover{background:var(--green-2)}
        .btn-ghost{
            background:#fff;
            color:#374151;
            border:1px solid var(--line);
            display:flex;
            align-items:center;
            justify-content:center;
            gap:10px;
        }
        .google-icon{
            width:18px; height:18px; object-fit:contain;
        }
        .link{
            display:inline-block;
            margin-top:12px;
            font-size:12px;
            color:#2563eb;
            text-decoration:none;
        }
        .link:hover{text-decoration:underline}

        @media (max-width: 920px){
            .wrap{grid-template-columns:1fr}
            .left{order:2; padding:36px 20px}
            .right{order:1; padding:32px 20px}
            .left-inner .title{font-size:20px}
            /* sedikit pengaturan untuk layar kecil */
            .back{top:8px; left:8px}
            .card{padding-top:28px}
        }
    </style>
</head>
<body>
    <div class="wrap">
        <!-- KIRI -->
        <aside class="left">
            <div class="left-inner">
                <img class="brand" src="{{ asset('images/logo.png') }}" alt="Logo Program" />
                <h1 class="title">
                    Pupuk dan Bibit Bersubsidi<br/>Pemerintah
                </h1>
            </div>
        </aside>

        <!-- KANAN -->
        <main class="right">
            <div class="card">
                <!-- Tombol kembali: arahkan ke halaman daftar (register) dan tampil di sudut kiri atas -->
                <a class="back" href="{{ route('register') }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Kembali
                </a>

                <img class="wheat" src="{{ asset('images/padi.png') }}" alt="Ikon Padi" />

                <!-- Form sekarang POST ke route login dan sertakan CSRF -->
                <form action="{{ route('login') }}" method="POST" autocomplete="on" novalidate>
                    @csrf

                    <div class="gap-16">
                        <label for="email">Email </label>
                        <input class="field" id="email" name="email" type="text" placeholder="nama@email.com / 08xxxxxxxxxx" required />
                    </div>

                    <div class="gap-16">
                        <label for="password">Kata Sandi</label>
                        <input class="field" id="password" name="password" type="password" placeholder="••••••••" required />
                    </div>

                    <div class="gap-16">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>

                    <div class="gap-16">
                        <button type="button" class="btn btn-ghost">
                            <img class="google-icon" src="{{ asset('images/google.png') }}" alt="" />
                            Masuk dengan Google
                        </button>
                    </div>

                    <a class="link" href="{{ route('password.reset') }}">Lupa Kata Sandi?</a>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
