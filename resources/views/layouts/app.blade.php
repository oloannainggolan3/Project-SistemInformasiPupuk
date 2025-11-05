<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Pupuk & Bibit Subsidi</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f5f5f5; color: #333; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        header { background: #1a5d1a; color: white; padding: 1rem 0; text-align: center; }
        .btn { 
            background: #2e8b57; color: white; padding: 12px 24px; 
            border: none; border-radius: 6px; cursor: pointer; font-weight: bold;
            text-decoration: none; display: inline-block;
        }
        .btn:hover { background: #1a5d1a; }
        .btn-success { background: #28a745; }
        .btn-sm { padding: 8px 16px; font-size: 0.9rem; }
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 20px; }
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: 600; }
        .form-group input, .form-group select {
            width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem;
        }
        .text-center { text-align: center; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }
        footer { background: #1a5d1a; color: white; text-align: center; padding: 20px; margin-top: 40px; }
        .alert { padding: 12px; border-radius: 6px; margin-bottom: 20px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
    <header>
        <h1>Pupuk dan Bibit Bersubsidi Pemerintah</h1>
    </header>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Sistem Informasi Pupuk & Bibit. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>