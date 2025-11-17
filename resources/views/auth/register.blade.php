@extends('layouts.auth')
@section('title', 'Register')

@section('content')
    <style>
        body {
            background-color: #f0fbea;
            font-family: 'Poppins', sans-serif;
        }
        .register-container {
            max-width: 480px;
            margin: 40px auto;
            background-color: #f6fff4;
            border-radius: 16px;
            padding: 40px 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .register-header {
            text-align: center;
            margin-bottom: 25px;
        }
        .register-header h2 {
            font-weight: 700;
            color: #f4b400;
            font-size: 20px;
            margin-bottom: 5px;
        }
        .register-header p {
            color: #6b6b6b;
            font-size: 13px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            color: #333;
            font-size: 14px;
            margin-bottom: 6px;
        }
        .form-group input {
            width: 100%;
            padding: 10px 14px;
            border: none;
            border-radius: 10px;
            background-color: #e7e7e7;
            font-size: 14px;
            outline: none;
            transition: all 0.2s;
        }
        .form-group input:focus {
            background-color: #dff5d8;
        }
        .btn-submit {
            background-color: #26b35e;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-submit:hover {
            background-color: #219653;
        }
        .login-link {
            text-align: center;
            margin-top: 12px;
            font-size: 13px;
            color: #333;
        }
        .login-link a {
            color: #2d9cdb;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        .back-arrow {
            font-size: 24px;
            color: #6b6b6b;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>

    <div class="register-container">
    <a href="{{ url()->previous() }}" class="back-arrow">&#8592;</a>

        <div class="register-header">
            <h2>🌾 Selamat Datang!</h2>
            <p>Isilah data diri anda dengan baik dan benar</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('register.process') }}">
            @csrf
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ old('alamat') }}" required>
            </div>
            <div class="form-group">
                <label>Balai Desa</label>
                <input type="text" name="alamat_balai_desa" value="{{ old('alamat_balai_desa') }}" required>
            </div>
            <div class="form-group">
                <label>No. Telp</label>
                <input type="text" name="no_telp" value="{{ old('no_telp') }}" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required minlength="8">
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn-submit">Daftarkan Akun</button>

            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Masuk Disini</a>
            </div>
        </form>
    </div>
    @endsection
