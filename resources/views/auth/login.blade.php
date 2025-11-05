@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="card" style="max-width: 400px; margin: 0 auto;">
    <h2 class="text-center">Masuk ke Akun</h2>
    <form method="POST" action="{{ route('login.process') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success" style="width: 100%; padding: 14px;">Masuk</button>
    </form>
    <p class="text-center" style="margin-top: 20px;">
        Belum punya akun? <a href="{{ route('register') }}" style="color: #2e8b57; font-weight: bold;">Daftar Sekarang</a>
    </p>
</div>
@endsection