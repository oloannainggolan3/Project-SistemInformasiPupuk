<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan ada users
        $users = User::all();
        
        if ($users->count() === 0) {
            $this->command->info('Membuat user dummy...');
            
            for ($i = 1; $i <= 15; $i++) {
                User::create([
                    'nama_lengkap' => 'Petani ' . $i,
                    'email' => 'petani' . $i . '@example.com',
                    'password' => bcrypt('password'),
                    'alamat' => 'Desa Makmur RT 0' . $i,
                    'alamat_balai_desa' => 'Balai Desa Tani Makmur ' . $i,
                    'no_telp' => '08' . str_pad($i, 10, '0', STR_PAD_LEFT),
                ]);
            }
            
            $users = User::all();
        }

        // Data produk untuk items
        $products = [
            ['name' => 'Pupuk NPK Phonska', 'price' => 2500],
            ['name' => 'Pupuk TSP', 'price' => 3000],
            ['name' => 'Pupuk Urea', 'price' => 2000],
            ['name' => 'Pupuk ZA', 'price' => 2200],
            ['name' => 'Pupuk KCL', 'price' => 2800],
            ['name' => 'Bibit Padi Unggul', 'price' => 45000],
            ['name' => 'Bibit Jagung Hibrida', 'price' => 35000],
            ['name' => 'Bibit Kedelai', 'price' => 25000],
            ['name' => 'Bibit Cabai', 'price' => 50000],
            ['name' => 'Bibit Tomat', 'price' => 40000],
        ];

        $statuses = ['Pending', 'Processing', 'Ready', 'Completed', 'Rejected'];
        
        // Buat 30 pesanan
        for ($i = 1; $i <= 30; $i++) {
            $user = $users->random();
            $status = $statuses[array_rand($statuses)];
            
            // Generate items (2-4 items per order)
            $itemCount = rand(2, 4);
            $items = [];
            $totalAmount = 0;
            
            for ($j = 0; $j < $itemCount; $j++) {
                $product = $products[array_rand($products)];
                $qty = rand(10, 100);
                $qtyUnit = strpos($product['name'], 'Bibit') !== false ? 'kg' : 'kg';
                
                $items[] = [
                    'name' => $product['name'],
                    'qty' => $qty . ' ' . $qtyUnit,
                    'price' => $product['price']
                ];
                
                $totalAmount += $qty * $product['price'];
            }
            
            Order::create([
                'order_number' => Order::generateOrderNumber(),
                'user_id' => $user->id,
                'village_office' => $user->alamat_balai_desa,
                'items' => json_encode($items),
                'total_amount' => $totalAmount,
                'status' => $status,
                'confirmed_by_user' => true, // Semua sudah dikonfirmasi user
                'rejection_reason' => $status === 'Rejected' ? 'Stok tidak mencukupi' : null,
                'created_at' => now()->subDays(rand(1, 60)),
                'updated_at' => now()->subDays(rand(0, 30)),
            ]);
        }

        $this->command->info('Order seeder completed! 30 pesanan berhasil dibuat.');
    }
}
