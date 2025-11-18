<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PupukBibitController extends Controller
{
    /**
     * Halaman daftar pupuk & bibit
     */
    public function index()
    {
        $products = Product::with('primaryImage')->get();
        return view('user.pupukdanbibit', compact('products'));
    }

    /**
     * Halaman detail & pesan produk
     */
    public function detail($id)
    {
        $produk = Product::with('images')->findOrFail($id);
        return view('user.lihat-detail-pesan', compact('produk'));
    }
}
