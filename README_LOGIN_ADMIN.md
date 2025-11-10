# Login Admin - Sistem Informasi Pupuk & Bibit Subsidi

## 📋 Deskripsi
Sistem login admin yang sederhana dengan validasi username dan password yang sudah ditentukan langsung di kode (hardcoded).

## 🔐 Kredensial Login

**Username:** `admin`  
**Password:** `admin123`

## 🚀 Cara Menggunakan

### 1. Jalankan Server Laravel
```bash
php artisan serve
```

### 2. Akses Halaman Login Admin
Buka browser dan akses:
```
http://127.0.0.1:8000/admin/login
```

### 3. Login
- Masukkan username: `admin`
- Masukkan password: `admin123`
- Klik tombol "Login"

### 4. Dashboard Admin
Setelah berhasil login, Anda akan diarahkan ke dashboard admin di:
```
http://127.0.0.1:8000/admin/dashboard
```

### 5. Logout
Klik tombol "Logout" di pojok kanan atas dashboard untuk keluar dari sistem.

## 📁 Struktur File

### Controllers
- `app/Http/Controllers/AdminController.php` - Controller utama untuk autentikasi admin

### Views
- `resources/views/auth/admin-login.blade.php` - Halaman login admin
- `resources/views/admin/dashboard.blade.php` - Dashboard admin setelah login

### Middleware
- `app/Http/Middleware/AdminAuth.php` - Middleware untuk proteksi halaman admin

### Routes
Routes untuk admin didefinisikan di `routes/web.php`:
```php
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.process');
    
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
```

## ✨ Fitur

### Halaman Login
- ✅ Form login dengan username dan password
- ✅ Validasi input (required fields)
- ✅ Pesan error untuk kredensial yang salah
- ✅ Desain responsif dan menarik
- ✅ Icon Font Awesome
- ✅ Info kredensial untuk testing
- ✅ Link kembali ke beranda

### Autentikasi
- ✅ Validasi username dan password (hardcoded)
- ✅ Session management untuk tracking login
- ✅ Redirect ke dashboard setelah login berhasil
- ✅ Pesan sukses setelah login
- ✅ Proteksi halaman dashboard dengan middleware

### Dashboard Admin
- ✅ Sidebar navigasi
- ✅ Top bar dengan info user
- ✅ Welcome message
- ✅ Statistik cards (Total Produk, Pengguna, Pesanan, dll)
- ✅ Informasi sistem dan session
- ✅ Tombol logout
- ✅ Desain modern dan responsif

### Security
- ✅ CSRF Protection
- ✅ Session-based authentication
- ✅ Middleware untuk proteksi routes
- ✅ Redirect otomatis jika belum login
- ✅ Logout yang aman (clear session)

## 🔧 Konfigurasi Kredensial

Kredensial admin didefinisikan sebagai konstanta di `AdminController.php`:

```php
private const ADMIN_USERNAME = 'admin';
private const ADMIN_PASSWORD = 'admin123';
```

Untuk mengubah username atau password, edit nilai konstanta tersebut.

## 📊 Session Data

Setelah login berhasil, sistem menyimpan data berikut di session:
- `admin_logged_in`: Status login (boolean)
- `admin_username`: Username admin
- `admin_login_time`: Waktu login (timestamp)

## 🎨 Tampilan

### Login Page
- Background gradient hijau (sesuai tema pupuk & bibit)
- Icon shield untuk admin
- Form dengan icon username dan password
- Alert untuk error/success messages
- Animasi smooth saat load

### Dashboard
- Sidebar hijau gelap dengan menu navigasi
- Top bar dengan info user dan tombol logout
- Welcome message dengan gradient
- 4 statistik cards dengan warna berbeda
- Table informasi sistem

## 🛡️ Keamanan

1. **CSRF Protection**: Semua form menggunakan `@csrf` token
2. **Middleware**: Dashboard dilindungi dengan `admin.auth` middleware
3. **Session Validation**: Setiap request ke dashboard memvalidasi session
4. **Logout**: Menghapus semua session data admin

## 🔄 Flow Login

```
1. User mengakses /admin/login
   ↓
2. User memasukkan username & password
   ↓
3. Form submit ke /admin/login (POST)
   ↓
4. AdminController memvalidasi kredensial
   ↓
5a. Jika BENAR → Set session → Redirect ke /admin/dashboard
5b. Jika SALAH → Redirect back dengan error message
   ↓
6. Dashboard menampilkan data admin
   ↓
7. User klik Logout → Clear session → Redirect ke /admin/login
```

## ⚠️ Catatan

- Sistem ini menggunakan hardcoded credentials, tidak menggunakan database
- Session akan hilang jika browser ditutup atau server direstart
- Untuk production, disarankan menggunakan database dan enkripsi password
- Kredensial ditampilkan di halaman login untuk kemudahan testing

## 📞 Routes Available

| Method | URI | Name | Description |
|--------|-----|------|-------------|
| GET | /admin/login | admin.login | Tampil halaman login |
| POST | /admin/login | admin.login.process | Process login |
| GET | /admin/dashboard | admin.dashboard | Dashboard admin (protected) |
| POST | /admin/logout | admin.logout | Logout admin (protected) |

## 🎯 Testing

### Test Case 1: Login dengan kredensial benar
1. Akses `/admin/login`
2. Input: username = `admin`, password = `admin123`
3. Expected: Redirect ke `/admin/dashboard` dengan pesan sukses

### Test Case 2: Login dengan kredensial salah
1. Akses `/admin/login`
2. Input: username = `wrong`, password = `wrong`
3. Expected: Stay di `/admin/login` dengan error message

### Test Case 3: Akses dashboard tanpa login
1. Akses `/admin/dashboard` langsung tanpa login
2. Expected: Redirect ke `/admin/login` dengan pesan error

### Test Case 4: Logout
1. Login terlebih dahulu
2. Klik tombol Logout di dashboard
3. Expected: Redirect ke `/admin/login` dengan pesan sukses

## 🎨 Customization

### Mengubah Warna Tema
Edit variabel CSS di file view:
- `--primary-green: #4CAF50;`
- `--dark-green: #004d00;`
- `--medium-green: #1a4d1a;`

### Menambah Menu Sidebar
Edit array menu di `admin/dashboard.blade.php`:
```html
<li>
    <a href="#">
        <i class="fas fa-icon"></i>
        <span>Menu Baru</span>
    </a>
</li>
```

## 🔍 Troubleshooting

**Q: Halaman login tidak muncul?**
- Pastikan server Laravel berjalan (`php artisan serve`)
- Cek apakah route sudah terdaftar (`php artisan route:list`)

**Q: Login selalu error?**
- Pastikan username dan password sesuai: `admin` / `admin123`
- Cek apakah session berfungsi

**Q: Redirect loop?**
- Clear session: `php artisan session:clear`
- Clear cache: `php artisan cache:clear`

---

**Dibuat dengan ❤️ untuk Sistem Informasi Pupuk & Bibit Subsidi**
