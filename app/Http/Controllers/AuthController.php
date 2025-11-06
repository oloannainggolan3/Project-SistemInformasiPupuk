<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // 1. TAMPILKAN FORM REGISTER
    public function showRegister()
    {
        return view('auth.register');
    }

    // 2. PROSES REGISTRASI
    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'alamat_balai_desa' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'alamat_balai_desa' => $request->alamat_balai_desa,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // 3. TAMPILKAN FORM LOGIN
    public function showLogin()
    {
        return view('auth.login');
    }

    // 4. PROSES LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // 5. LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    // 6. DASHBOARD
    public function dashboard()
    {
        return view('dashboard');
    }
}