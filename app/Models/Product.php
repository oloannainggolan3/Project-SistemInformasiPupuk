<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama_produk',
        'tipe_produk',
        'kategori',
        'harga_subsidi',
        'harga_normal',
        'stok_produk',
        'gambar',
        'deskripsi'
    ];
}