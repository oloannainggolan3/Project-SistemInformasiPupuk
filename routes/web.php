<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PupukBibitController;

Route::get('/', function () {
    // Jika user sudah login, redirect ke dashboard
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('user.HOME');
})->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register.process')->middleware('guest');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.process')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman reset password (view statis sementara)
Route::get('/reset-password', function () {
    return view('auth.resetpw');
})->name('password.reset');

// Proses reset password (POST)
Route::post('/reset-password', [AuthController::class, 'processReset'])->name('password.reset.post');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// Route untuk halaman Pupuk & Bibit (gabungan)
Route::get('/pupuk-bibit', function () {
    return view('user.pupukdanbibit');
})->name('pupuk.bibit');

// Route untuk halaman Kontak
Route::get('/kontak', function () {
    return view('user.kontak');
})->name('kontak');
Route::post('/kontak/send', [AuthController::class, 'sendKontak'])->name('kontak.send');

// Route untuk halaman Profil User
Route::get('/profil', function () {
    return view('user.ProfilUser');
})->name('profil.user')->middleware('auth');

// Route untuk Edit Profil
Route::get('/profil/edit', [AuthController::class, 'editProfil'])->name('profil.edit')->middleware('auth');
Route::put('/profil/update', [AuthController::class, 'updateProfil'])->name('profil.update')->middleware('auth');

Route::resource('products', ProductController::class);
// Routes yang memerlukan autentikasi
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    // Halaman Pupuk & Bibit
    Route::get('/pupuk-bibit', [PupukBibitController::class, 'index'])->name('pupukbibit');
    
    // Halaman Detail & Pesan Produk
    Route::get('/pupuk-bibit/{id}/detail', [PupukBibitController::class, 'detail'])->name('pupukbibit.detail');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    
    // Route untuk halaman Pupuk & Bibit (gabungan) - backward compatibility
    Route::get('/pupuk-bibit', [PupukBibitController::class, 'index'])->name('pupuk.bibit');
    
    // Route untuk halaman Kontak
    Route::get('/kontak', function () {
        return view('user.kontak');
    })->name('kontak');
    Route::post('/kontak/send', [AuthController::class, 'sendKontak'])->name('kontak.send');
    
    // Route untuk halaman Profil User
    Route::get('/profil', function () {
        return view('user.ProfilUser');
    })->name('profil.user');
    
    // Route untuk Edit Profil
    Route::get('/profil/edit', [AuthController::class, 'editProfil'])->name('profil.edit');
    Route::put('/profil/update', [AuthController::class, 'updateProfil'])->name('profil.update');
    
    // Route untuk halaman Notifikasi
    Route::get('/notifikasi', function () {
        return view('user.Notifikasi');
    })->name('notifikasi');
    Route::get('/notifikasi/detail', function () {
        return view('user.DetailNotif');
    })->name('notifikasi.detail');
    
    Route::resource('products', ProductController::class);
});

Route::get('/forgot-password-test', function () {
    return view('auth.forgot-password');
});

// Routes untuk Admin
Route::prefix('admin')->group(function () {
    // Halaman login (tidak perlu auth)
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.process');
    
    // Halaman yang memerlukan auth
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
