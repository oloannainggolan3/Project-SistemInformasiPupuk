// ...existing code...
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial; margin:0; min-height:100vh;
             display:flex; align-items:center; justify-content:center; background:#f7fafc; color:#111;}
        .card{background:white; padding:2rem; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.08); text-align:center; width:320px;}
        a{color:#2563eb; text-decoration:none; margin:0 .5rem;}
        .muted{color:#6b7280; margin-top:.5rem;}
    </style>
</head>
<body>
    <div class="card">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
        <p class="muted">Selamat datang. Aplikasi siap digunakan.</p>

        @if (Route::has('login'))
            <div style="margin-top:1rem;">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
// ...existing code...
```// filepath: c:\laragon\www\ppw10\Project-SistemInformasiPupuk\resources\views\welcome.blade.php
// ...existing code...
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial; margin:0; min-height:100vh;
             display:flex; align-items:center; justify-content:center; background:#f7fafc; color:#111;}
        .card{background:white; padding:2rem; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.08); text-align:center; width:320px;}
        a{color:#2563eb; text-decoration:none; margin:0 .5rem;}
        .muted{color:#6b7280; margin-top:.5rem;}
    </style>
</head>
<body>
    <div class="card">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
        <p class="muted">Selamat datang. Aplikasi siap digunakan.</p>

        @if (Route::has('login'))
            <div style="margin-top:1rem;">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
