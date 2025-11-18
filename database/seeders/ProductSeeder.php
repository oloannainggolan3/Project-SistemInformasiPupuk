<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // PUPUK
            [
                'nama_produk' => 'Pupuk Urea',
                'tipe_produk' => 'pupuk',
                'kategori' => 'Anorganik',
                'harga_normal' => 12000,
                'harga_subsidi' => 2800,
                'stok_produk' => 65,
                'gambar' => 'default-pupuk.jpg',
                'deskripsi' => 'Pupuk NPK Phonska adalah pupuk majemuk lengkap yang mengandung unsur hara Nitrogen (N), Fosfor (P), dan Kalium (K) dalam komposisi seimbang 15-15-15. Dirancang khusus untuk meningkatkan produktivitas tanaman padi, jagung, dan palawija dengan hasil maksimal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'NPK Phonska',
                'tipe_produk' => 'pupuk',
                'kategori' => 'Anorganik',
                'harga_normal' => 15000,
                'harga_subsidi' => 3200,
                'stok_produk' => 50,
                'gambar' => 'default-pupuk.jpg',
                'deskripsi' => 'NPK Phonska adalah pupuk majemuk lengkap yang mengandung unsur hara Nitrogen (N), Fosfor (P), dan Kalium (K) dalam komposisi seimbang yang dibutuhkan untuk pertumbuhan optimal tanaman.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Pupuk ZA (Zwavelzure Ammoniak)',
                'tipe_produk' => 'pupuk',
                'kategori' => 'Anorganik',
                'harga_normal' => 10000,
                'harga_subsidi' => 2500,
                'stok_produk' => 80,
                'gambar' => 'default-pupuk.jpg',
                'deskripsi' => 'Pupuk ZA mengandung nitrogen dan sulfur yang sangat baik untuk pertumbuhan tanaman padi dan palawija. Membantu meningkatkan kualitas dan kuantitas hasil panen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // BIBIT
            [
                'nama_produk' => 'Bibit Padi Inpari',
                'tipe_produk' => 'bibit',
                'kategori' => 'Organik',
                'harga_normal' => 8000,
                'harga_subsidi' => 3500,
                'stok_produk' => 100,
                'gambar' => 'default-bibit.jpg',
                'deskripsi' => 'Bibit padi Inpari unggul dengan ketahanan terhadap hama dan penyakit. Menghasilkan bulir padi berkualitas tinggi dengan produktivitas mencapai 7-8 ton per hektar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Bibit Jagung Hibrida',
                'tipe_produk' => 'bibit',
                'kategori' => 'Organik',
                'harga_normal' => 12000,
                'harga_subsidi' => 5000,
                'stok_produk' => 75,
                'gambar' => 'default-bibit.jpg',
                'deskripsi' => 'Bibit jagung hibrida dengan produktivitas tinggi, tahan terhadap kekeringan dan hama. Cocok untuk berbagai jenis lahan dengan hasil panen optimal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Bibit Kedelai Unggul',
                'tipe_produk' => 'bibit',
                'kategori' => 'Organik',
                'harga_normal' => 6000,
                'harga_subsidi' => 2800,
                'stok_produk' => 90,
                'gambar' => 'default-bibit.jpg',
                'deskripsi' => 'Bibit kedelai varietas unggul dengan kandungan protein tinggi. Masa panen 75-80 hari dengan produktivitas 2-3 ton per hektar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('produk')->insert($products);
    }
}
