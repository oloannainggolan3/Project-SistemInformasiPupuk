<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Kredensial admin yang sudah ditentukan (hardcoded)
    private const ADMIN_USERNAME = 'admin';
    private const ADMIN_PASSWORD = 'admin123';

    /**
     * Menampilkan halaman login admin
     */
    public function showLogin()
    {
        // Jika sudah login sebagai admin, redirect ke dashboard
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.admin-login');
    }

    /**
     * Memproses login admin
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        // Validasi kredensial admin
        if ($username === self::ADMIN_USERNAME && $password === self::ADMIN_PASSWORD) {
            // Login berhasil - simpan status login di session
            session([
                'admin_logged_in' => true,
                'admin_username' => $username,
                'admin_login_time' => now()
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, Admin!');
        } else {
            // Login gagal
            return back()
                ->withInput($request->only('username'))
                ->with('error', 'Username atau password salah!');
        }
    }

    /**
     * Menampilkan dashboard admin
     */
    public function dashboard()
    {
        // Middleware sudah menangani pengecekan login
        return view('admin.dashboard');
    }

    /**
     * Logout admin
     */
    public function logout()
    {
        // Hapus semua session admin
        session()->forget(['admin_logged_in', 'admin_username', 'admin_login_time']);
        
        return redirect()->route('admin.login')->with('success', 'Anda telah logout');
    }
}
