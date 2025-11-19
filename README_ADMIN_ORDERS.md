# Manajemen Pesanan - Admin Dashboard

Sistem manajemen pesanan untuk admin dalam aplikasi Pupuk & Bibit Subsidi.

## 📋 Fitur Lengkap

### ✅ Yang Sudah Diimplementasikan

1. **Halaman Manajemen Pesanan** (`/admin/orders`)
   - Daftar pesanan dengan card design yang clean
   - Hanya menampilkan pesanan yang sudah `confirmed_by_user = true`
   - Search by nama atau ID pesanan
   - Filter by status (All, Pending, Processing, Ready, Completed, Rejected)
   - Pagination (10 items per page)

2. **Detail Pesanan**
   - Order ID (format: ORD-YYYY-XXX)
   - Nama & telepon petani
   - Alamat balai desa
   - Tanggal pesanan
   - Detail items (nama, quantity, harga)
   - Total pembayaran

3. **Update Status Pesanan**
   - Dropdown status di setiap card
   - 5 status: Pending, Processing, Ready, Completed, Rejected
   - Modal konfirmasi untuk status "Rejected" dengan input alasan
   - Toast notification untuk sukses/error

4. **Header Navigation**
   - Menu: Overview, Pesanan, Produk, Notifikasi
   - **Menu "Berita" sudah dihapus** sesuai requirement
   - Responsive mobile menu

5. **Authentication**
   - Protected routes dengan middleware `admin.auth`
   - Redirect ke `/admin/login` jika belum login
   - Session-based authentication (username: `admin`, password: `admin123`)

## 🛠️ Teknologi

- **Backend**: Laravel 12
- **Frontend**: Blade Templates + Vanilla JavaScript
- **Styling**: CSS Custom (tidak menggunakan Tailwind karena project Laravel)
- **Database**: MySQL
- **API**: RESTful JSON API

## 📁 Struktur File

```
app/
├── Http/Controllers/Admin/
│   └── AdminOrderController.php      # Controller untuk manajemen pesanan
├── Models/
│   └── Order.php                      # Model Order dengan relasi & scopes
database/
├── migrations/
│   └── 2025_11_18_092624_create_orders_table.php
└── seeders/
    ├── OrderSeeder.php                # Seeder 30 pesanan dummy
    └── DatabaseSeeder.php
resources/views/
├── layouts/
│   └── admin.blade.php                # Layout admin (Berita sudah dihapus)
└── admin/orders/
    └── index.blade.php                # Halaman manajemen pesanan
routes/
└── web.php                            # Routes admin orders
```

## 🚀 Cara Menjalankan

### 1. Database Setup

```bash
# Jalankan migration dan seeder
php artisan migrate:fresh --seed
```

Ini akan membuat:
- 15 user petani dummy
- 30 pesanan dengan status random
- Semua pesanan sudah `confirmed_by_user = true`

### 2. Start Server

```bash
php artisan serve
```

Server akan berjalan di `http://127.0.0.1:8000`

### 3. Login Admin

```
URL: http://127.0.0.1:8000/admin/login
Username: admin
Password: admin123
```

### 4. Akses Manajemen Pesanan

Setelah login, klik menu **"Pesanan"** di header atau akses langsung:
```
http://127.0.0.1:8000/admin/orders
```

## 🔌 API Endpoints

### 1. Get Orders List

```http
GET /admin/api/orders?query=&status=all&page=1&limit=10
```

**Headers:**
```
X-CSRF-TOKEN: {csrf_token}
Cookie: laravel_session={session_id}
```

**Query Parameters:**
- `query` (optional): Search by name or order ID
- `status` (optional): Filter by status (all, Pending, Processing, Ready, Completed, Rejected)
- `page` (optional): Page number (default: 1)
- `limit` (optional): Items per page (default: 10)

**Response:**
```json
{
  "page": 1,
  "limit": 10,
  "total": 30,
  "last_page": 3,
  "orders": [
    {
      "id": "ORD-2025-001",
      "user_id": 5,
      "name": "Petani 5",
      "phone": "08000000005",
      "village_office": "Balai Desa Tani Makmur 5",
      "date": "2025-10-15T00:00:00.000000Z",
      "date_formatted": "15 October 2025",
      "items": [
        {
          "name": "Pupuk NPK Phonska",
          "qty": "50 kg",
          "price": 2500
        },
        {
          "name": "Bibit Padi Unggul",
          "qty": "20 kg",
          "price": 45000
        }
      ],
      "total_amount": 1025000,
      "total_formatted": "Rp 1.025.000",
      "status": "Processing",
      "status_color": "purple",
      "confirmed_by_user": true
    }
  ]
}
```

### 2. Update Order Status

```http
PATCH /admin/api/orders/{orderId}/status
```

**Headers:**
```
Content-Type: application/json
X-CSRF-TOKEN: {csrf_token}
Cookie: laravel_session={session_id}
```

**Request Body:**
```json
{
  "status": "Completed"
}
```

**Request Body (untuk Rejected):**
```json
{
  "status": "Rejected",
  "rejection_reason": "Stok pupuk tidak mencukupi untuk pesanan ini"
}
```

**Response:**
```json
{
  "success": true,
  "message": "Status pesanan berhasil diupdate",
  "order": {
    "id": "ORD-2025-001",
    "status": "Completed",
    "status_color": "green",
    "rejection_reason": null
  }
}
```

### 3. Get Order Statistics

```http
GET /admin/api/orders/stats
```

**Response:**
```json
{
  "total": 30,
  "pending": 6,
  "processing": 5,
  "completed": 10,
  "rejected": 4
}
```

## 🎨 UI Components

### Status Badge Colors

```css
.status-badge.pending    → background: #e0e0e0, color: #666
.status-badge.processing → background: #e1bee7, color: #6a1b9a
.status-badge.ready      → background: #c8e6c9, color: #2e7d32
.status-badge.completed  → background: #a5d6a7, color: #1b5e20
.status-badge.rejected   → background: #ffcdd2, color: #c62828
```

### Responsive Breakpoints

- Desktop: > 1024px (default layout)
- Tablet: 768px - 1024px (adjusted grid)
- Mobile: < 768px (single column, stacked layout)

## ✅ Testing Checklist

- [x] Login admin dengan credentials yang benar
- [x] Redirect ke `/admin/login` jika belum login
- [x] Menu "Berita" tidak muncul di header
- [x] Hanya pesanan `confirmed_by_user = true` yang tampil
- [x] Search by nama petani berfungsi
- [x] Search by order ID berfungsi
- [x] Filter status (All, Pending, dll) berfungsi
- [x] Pagination berfungsi (prev/next)
- [x] Dropdown status dapat diubah
- [x] Modal konfirmasi muncul saat pilih "Rejected"
- [x] Input alasan penolakan required untuk status "Rejected"
- [x] Toast success muncul setelah update berhasil
- [x] Toast error muncul jika update gagal
- [x] UI responsive di mobile/tablet/desktop

## 🔒 Security

1. **Authentication**: Semua routes admin protected dengan middleware `admin.auth`
2. **CSRF Protection**: Semua AJAX request include CSRF token
3. **Validation**: Input validation di controller untuk `status` dan `rejection_reason`
4. **Authorization**: Hanya admin yang bisa akses halaman manajemen pesanan

## 📝 Catatan Penting

### Perbedaan dengan Spesifikasi React/Next.js

Karena ini adalah project **Laravel**, saya membuat implementasi setara dengan:
- **Blade Templates** instead of React components
- **Vanilla JavaScript** instead of React state management
- **Session-based auth** instead of JWT (sesuai dengan arsitektur existing)
- **Laravel routes** instead of Next.js API routes

Namun, **semua fitur yang diminta sudah diimplementasikan**:
- ✅ Header tanpa menu Berita
- ✅ Search & filter
- ✅ Hanya confirmed orders
- ✅ Update status dengan dropdown
- ✅ Modal konfirmasi untuk Rejected
- ✅ Toast notifications
- ✅ Pagination
- ✅ Responsive design
- ✅ Authentication protection

### Mock API Response (untuk Testing)

File mock response JSON sudah include di dokumentasi response API di atas. Anda bisa test API menggunakan:
- **Browser DevTools** (Network tab)
- **Postman** atau **Insomnia**
- **cURL** command line

### Environment Variables

Tidak perlu setup khusus, semua menggunakan konfigurasi Laravel default:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistem_informasi_pupukdanbibit
DB_USERNAME=root
DB_PASSWORD=
```

## 🐛 Troubleshooting

### Error: "Column 'nama_lengkap' not found"
```bash
php artisan migrate:fresh --seed
```

### Error: "Unauthenticated" saat akses API
Login terlebih dahulu di `/admin/login` dengan:
- Username: `admin`
- Password: `admin123`

### Data pesanan tidak muncul
Pastikan seeder sudah dijalankan:
```bash
php artisan db:seed --class=OrderSeeder
```

## 📞 Support

Jika ada pertanyaan atau issue, silakan hubungi developer atau buka issue di repository.

---

**Sistem Informasi Pupuk & Bibit Subsidi**  
© 2025 Del Institute of Technology
