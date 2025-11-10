# Halaman Tambah Produk - Sistem Informasi Pupuk & Bibit Subsidi

## 📋 Deskripsi
Halaman untuk menambahkan produk pupuk dan bibit subsidi dengan form input yang lengkap dan validasi yang ketat. Dilengkapi dengan fitur auto-fill kategori untuk tipe bibit.

## 🎯 Fitur Utama

### 1. **Form Input Lengkap**
- ✅ Nama Produk (required)
- ✅ Tipe Produk (dropdown: Pupuk/Bibit)
- ✅ Kategori (auto-fill untuk Bibit)
- ✅ Harga Subsidi (required, numeric)
- ✅ Harga Normal (required, numeric)
- ✅ Stok (required, integer)
- ✅ Upload Gambar (required, max 2MB)
- ✅ Deskripsi (required, textarea)

### 2. **Auto-Fill Kategori**
- Jika **Tipe = Bibit** → Kategori otomatis terisi **"Organik"** (readonly)
- Jika **Tipe = Pupuk** → Kategori dapat diisi manual

### 3. **Validasi Input**
- ✅ Semua field wajib diisi
- ✅ Harga subsidi harus angka dan tidak negatif
- ✅ Harga normal harus angka dan tidak negatif
- ✅ Harga subsidi harus lebih kecil dari harga normal
- ✅ Stok harus angka bulat dan tidak negatif
- ✅ Gambar harus berformat: jpeg, png, jpg, gif
- ✅ Ukuran gambar maksimal 2MB
- ✅ Pesan error yang jelas untuk setiap validasi

### 4. **Upload File**
- ✅ Drag & drop style upload
- ✅ Preview gambar sebelum upload
- ✅ Nama file ditampilkan setelah dipilih
- ✅ Gambar disimpan di folder `public/images/products`
- ✅ Nama file diberi timestamp untuk mencegah duplikasi

### 5. **UI/UX Modern**
- ✅ Desain modern dengan gradient hijau
- ✅ Form layout grid (2 kolom)
- ✅ Icon Font Awesome
- ✅ Animasi smooth
- ✅ Alert messages yang jelas
- ✅ Info box dengan petunjuk
- ✅ Responsive design
- ✅ Help text untuk setiap field

## 🌐 URL Akses

- **Tambah Produk**: http://127.0.0.1:8000/products/create
- **Daftar Produk**: http://127.0.0.1:8000/products

## 📁 Struktur File

### Controller
```
app/Http/Controllers/ProductController.php
```
**Fungsi utama:**
- `create()` - Menampilkan form tambah produk
- `store()` - Menyimpan produk ke database dengan validasi

### Model
```
app/Models/Product.php
```
**Properties:**
- Table: `produk`
- Primary Key: `id_produk`
- Fillable fields: nama_produk, tipe_produk, kategori, harga_subsidi, harga_normal, stok_produk, gambar, deskripsi

### Views
```
resources/views/products/create.blade.php - Form tambah produk
resources/views/products/index.blade.php  - Daftar produk
```

### Migration
```
database/migrations/2025_11_05_015722_create_produk_table.php
```

## 🔧 Database Schema

```sql
Table: produk
├── id_produk (integer, primary key, auto increment)
├── nama_produk (string)
├── tipe_produk (enum: 'pupuk', 'bibit')
├── kategori (string)
├── harga_subsidi (decimal 10,2)
├── harga_normal (decimal 10,2)
├── stok_produk (integer)
├── gambar (string - path file)
├── deskripsi (text)
├── created_at (timestamp)
└── updated_at (timestamp)
```

## ✅ Validasi Detail

### Server-side (Laravel)
```php
'nama_produk' => 'required|string|max:255'
'tipe_produk' => 'required|in:pupuk,bibit'
'kategori' => 'required|string|max:100'
'harga_subsidi' => 'required|numeric|min:0'
'harga_normal' => 'required|numeric|min:0'
'stok_produk' => 'required|integer|min:0'
'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
'deskripsi' => 'required|string'
```

**Validasi tambahan:**
- Harga subsidi < Harga normal
- Auto-fill kategori = "Organik" jika tipe = bibit

### Client-side (JavaScript)
- Auto-fill kategori berdasarkan tipe
- Preview gambar sebelum upload
- Validasi harga subsidi vs harga normal

## 🎨 JavaScript Features

### 1. Auto-fill Kategori
```javascript
// Ketika tipe produk berubah
- Jika bibit → Set kategori = "Organik" & readonly
- Jika pupuk → Clear kategori & editable
```

### 2. Image Preview
```javascript
// Ketika file dipilih
- Tampilkan nama file
- Tampilkan preview gambar
- Validasi ukuran dan format
```

### 3. Form Validation
```javascript
// Sebelum submit
- Cek harga subsidi < harga normal
- Alert jika tidak valid
```

## 📊 Alur Kerja

```
1. User akses /products/create
   ↓
2. Form ditampilkan dengan semua field
   ↓
3. User pilih Tipe Produk
   ↓
4a. Jika Bibit → Kategori auto-fill "Organik"
4b. Jika Pupuk → Kategori manual input
   ↓
5. User isi semua field lainnya
   ↓
6. User upload gambar → Preview muncul
   ↓
7. User submit form
   ↓
8. Validasi server-side
   ↓
9a. Valid → Simpan ke DB → Redirect ke /products dengan success message
9b. Invalid → Kembali ke form dengan error messages
```

## 🎯 Contoh Data Input

### Contoh 1: Produk Pupuk
```
Nama Produk: Pupuk Urea Premium
Tipe: Pupuk
Kategori: NPK (manual input)
Harga Subsidi: 50000
Harga Normal: 75000
Stok: 1000
Gambar: pupuk-urea.jpg
Deskripsi: Pupuk urea berkualitas tinggi untuk pertanian...
```

### Contoh 2: Produk Bibit
```
Nama Produk: Bibit Padi IR64
Tipe: Bibit
Kategori: Organik (auto-fill)
Harga Subsidi: 25000
Harga Normal: 40000
Stok: 500
Gambar: bibit-padi.jpg
Deskripsi: Bibit padi unggul dengan daya tumbuh tinggi...
```

## 🚀 Testing

### Test Case 1: Tambah Produk Pupuk
1. Akses `/products/create`
2. Isi nama produk: "Pupuk NPK"
3. Pilih tipe: "Pupuk"
4. Isi kategori manual: "NPK"
5. Isi harga subsidi: 50000
6. Isi harga normal: 75000
7. Isi stok: 1000
8. Upload gambar
9. Isi deskripsi
10. Submit
11. Expected: Success, redirect ke `/products`

### Test Case 2: Tambah Produk Bibit (Auto-fill)
1. Akses `/products/create`
2. Isi nama produk: "Bibit Jagung"
3. Pilih tipe: "Bibit"
4. Expected: Kategori otomatis terisi "Organik" dan readonly
5. Isi field lainnya
6. Submit
7. Expected: Success dengan kategori "Organik"

### Test Case 3: Validasi Harga
1. Isi form
2. Set harga subsidi: 100000
3. Set harga normal: 50000
4. Submit
5. Expected: Error "Harga subsidi harus lebih kecil dari harga normal"

### Test Case 4: Upload File Besar
1. Isi form
2. Upload gambar > 2MB
3. Submit
4. Expected: Error "Ukuran gambar maksimal 2MB"

### Test Case 5: Format File Salah
1. Isi form
2. Upload file PDF/DOC
3. Submit
4. Expected: Error "Format gambar harus: jpeg, png, jpg, atau gif"

## 📸 Screenshot Features

### Preview Gambar
- Muncul setelah file dipilih
- Ukuran 300px max
- Border radius 8px
- Box shadow

### Auto-fill Kategori
- Input field berubah menjadi readonly
- Background color berubah ke abu-abu
- Help text berubah warna hijau
- Icon checkmark muncul

### Alert Messages
- Success: Hijau dengan icon check
- Error: Merah dengan icon exclamation
- Animasi slide down

## 🎨 Customization

### Mengubah Kategori Auto-fill
Edit di `ProductController.php`:
```php
if ($validated['tipe_produk'] === 'bibit') {
    $validated['kategori'] = 'Organik'; // Ubah nilai ini
}
```

### Mengubah Folder Upload
Edit di `ProductController.php`:
```php
$request->gambar->move(public_path('images/products'), $imageName);
// Ubah 'images/products' ke folder lain
```

### Mengubah Max Upload Size
Edit di `ProductController.php`:
```php
'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
// Ubah 2048 (2MB) ke nilai lain dalam KB
```

## 🔍 Troubleshooting

**Q: Gambar tidak muncul setelah upload?**
- Pastikan folder `public/images/products` sudah dibuat
- Cek permission folder (harus writable)
- Cek path di database (harus `images/products/filename.jpg`)

**Q: Error "The file must be an image"?**
- Pastikan file yang diupload adalah gambar
- Cek ekstensi file (harus jpeg, png, jpg, gif)

**Q: Auto-fill kategori tidak bekerja?**
- Cek JavaScript di browser console
- Pastikan tipe_produk select memiliki event listener
- Clear browser cache

**Q: Validasi tidak bekerja?**
- Cek form method="POST"
- Pastikan @csrf token ada
- Cek route di web.php

## 📊 Performance

- Form load time: < 1s
- Upload max size: 2MB
- Image preview: Instant
- Auto-fill: Instant (JavaScript)
- Form submission: 1-2s (tergantung ukuran gambar)

## 🛡️ Security

1. **CSRF Protection**: Form menggunakan `@csrf` token
2. **File Validation**: Hanya terima image files
3. **Size Limitation**: Max 2MB untuk mencegah DoS
4. **SQL Injection**: Protected by Laravel Eloquent
5. **XSS Protection**: Protected by Blade templating

## 📝 Catatan Penting

- ⚠️ Pastikan folder `public/images/products` memiliki write permission
- ⚠️ Gambar disimpan dengan nama unik (timestamp + uniqid)
- ⚠️ Kategori untuk bibit selalu "Organik" (tidak bisa diubah di form)
- ⚠️ Harga subsidi harus lebih kecil dari harga normal
- ⚠️ Stok dalam satuan kilogram (kg)

---

**Dibuat dengan ❤️ untuk Sistem Informasi Pupuk & Bibit Subsidi**
