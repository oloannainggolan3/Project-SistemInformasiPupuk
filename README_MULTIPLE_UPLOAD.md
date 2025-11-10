# Multiple Image Upload - Sistem Informasi Pupuk & Bibit Subsidi

## 🎯 Fitur Multiple Image Upload

Sistem telah diupgrade untuk mendukung **multiple image upload** (upload beberapa gambar sekaligus) untuk setiap produk.

## 📋 Perubahan Utama

### 1. **Database Structure**

#### Tabel Baru: `product_images`
```sql
Table: product_images
├── id (bigint, primary key, auto increment)
├── product_id (unsigned integer, foreign key -> produk.id_produk)
├── image_path (string) - Path file gambar
├── is_primary (boolean) - Menandai gambar utama
├── order (integer) - Urutan gambar
├── created_at (timestamp)
└── updated_at (timestamp)

Foreign Key:
- product_id REFERENCES produk(id_produk) ON DELETE CASCADE
```

#### Relasi:
- **Product** `hasMany` **ProductImage** (One to Many)
- **ProductImage** `belongsTo` **Product**

### 2. **Model Baru**

**ProductImage.php**
```php
- Table: product_images
- Fillable: product_id, image_path, is_primary, order
- Relasi: belongsTo Product
```

**Product.php (Updated)**
```php
- Relasi baru:
  - images() -> hasMany ProductImage
  - primaryImage() -> hasOne ProductImage (is_primary = true)
```

### 3. **Upload Limit**

| Parameter | Value |
|-----------|-------|
| Minimum gambar | 1 gambar |
| Maximum gambar | 5 gambar |
| Ukuran per file | Max 2MB |
| Format | JPEG, JPG, PNG, GIF |

## ✨ Fitur-Fitur

### 1. **Multiple File Selection**
```html
<input type="file" name="gambar[]" multiple accept="image/*">
```
- User dapat memilih beberapa gambar sekaligus
- Attribute `multiple` mengaktifkan pemilihan multi-file
- Attribute `accept="image/*"` hanya menerima file gambar

### 2. **Real-time Preview**
- ✅ Preview semua gambar yang dipilih
- ✅ Gambar pertama otomatis ditandai sebagai "Gambar Utama"
- ✅ Menampilkan ukuran file setiap gambar
- ✅ Grid layout yang rapi
- ✅ Hover effect untuk zoom preview

### 3. **Validasi Client-side (JavaScript)**
- ✅ Validasi jumlah file (min 1, max 5)
- ✅ Validasi ukuran setiap file (max 2MB)
- ✅ Validasi format file (hanya image)
- ✅ Alert pesan error yang jelas
- ✅ Automatic cancel jika tidak valid

### 4. **Validasi Server-side (Laravel)**
```php
'gambar' => 'required|array|min:1|max:5',
'gambar.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
```
- ✅ Validasi array (multiple files)
- ✅ Min 1 gambar, max 5 gambar
- ✅ Setiap file harus image dengan format valid
- ✅ Max 2MB per file
- ✅ Pesan error dalam Bahasa Indonesia

### 5. **Database Transaction**
```php
DB::beginTransaction();
try {
    // Save product
    // Save images
    DB::commit();
} catch {
    DB::rollBack();
}
```
- ✅ Atomic operation (semua sukses atau semua gagal)
- ✅ Data konsisten
- ✅ Error handling yang baik

### 6. **Image Management**
- ✅ Gambar pertama otomatis jadi "Primary Image"
- ✅ Order gambar tersimpan (urutan upload)
- ✅ Unique filename dengan timestamp + uniqid
- ✅ Cascade delete (hapus produk = hapus semua gambar)

## 🔄 Alur Upload Multiple Images

```
1. User pilih beberapa gambar (1-5 gambar)
   ↓
2. JavaScript validasi:
   - Jumlah file (1-5)
   - Ukuran per file (max 2MB)
   - Format file (image only)
   ↓
3. Tampilkan preview semua gambar
   ↓
4. User submit form
   ↓
5. Laravel validasi server-side
   ↓
6. Start DB Transaction
   ↓
7. Simpan data produk
   ↓
8. Loop setiap gambar:
   - Generate unique filename
   - Upload ke folder public/images/products
   - Simpan ke tabel product_images
   - Set gambar pertama sebagai primary
   ↓
9. Update field 'gambar' di tabel produk (backward compatibility)
   ↓
10. Commit transaction
    ↓
11. Redirect dengan success message
```

## 📊 Contoh Data di Database

### Tabel `produk`
```
id_produk: 1
nama_produk: Pupuk NPK Premium
tipe_produk: pupuk
kategori: NPK
harga_subsidi: 50000
harga_normal: 75000
stok_produk: 1000
gambar: images/products/1699999999_abc123_0.jpg (primary image)
deskripsi: Pupuk berkualitas...
```

### Tabel `product_images`
```
id: 1, product_id: 1, image_path: images/products/1699999999_abc123_0.jpg, is_primary: 1, order: 0
id: 2, product_id: 1, image_path: images/products/1699999999_def456_1.jpg, is_primary: 0, order: 1
id: 3, product_id: 1, image_path: images/products/1699999999_ghi789_2.jpg, is_primary: 0, order: 2
```

## 🎨 Preview Interface

### Upload Area
```
┌──────────────────────────────────────────┐
│  📤 Klik untuk upload gambar             │
│     (Bisa lebih dari 1)                  │
└──────────────────────────────────────────┘

✓ 3 gambar dipilih

ℹ️ Format: JPG, JPEG, PNG, GIF
   Max 2MB per gambar
   Min: 1 gambar, Max: 5 gambar
```

### Preview Grid
```
┌─────────────┐ ┌─────────────┐ ┌─────────────┐
│ Gambar Utama│ │             │ │             │
│   [Image]   │ │   [Image]   │ │   [Image]   │
│  Gambar 1   │ │  Gambar 2   │ │  Gambar 3   │
│  125.50 KB  │ │  98.75 KB   │ │  156.20 KB  │
└─────────────┘ └─────────────┘ └─────────────┘
```

### Display di Index (Daftar Produk)
```
┌──┬──┬──┬──┐
│▪︎│▪︎│▪︎│▪︎│ [4 foto]
└──┴──┴──┴──┘
(Hover untuk zoom)
```

## 🔧 Fungsi-Fungsi Penting

### ProductController::store()
```php
- Validasi input (array of images)
- Begin transaction
- Create product
- Loop upload images
- Save to product_images table
- Set primary image
- Commit transaction
- Success message dengan jumlah gambar
```

### ProductController::destroy()
```php
- Begin transaction
- Loop semua images produk
- Delete file dari storage
- Delete product (cascade delete images table)
- Commit transaction
```

### Product Model
```php
// Get all images
$product->images

// Get primary image only
$product->primaryImage

// Count images
$product->images->count()
```

## 📝 Contoh Penggunaan di View

### Menampilkan Semua Gambar
```blade
@foreach($product->images as $image)
    <img src="{{ asset($image->image_path) }}" alt="Product Image">
@endforeach
```

### Menampilkan Primary Image
```blade
@if($product->primaryImage)
    <img src="{{ asset($product->primaryImage->image_path) }}" alt="Primary">
@endif
```

### Menampilkan Jumlah Gambar
```blade
Total: {{ $product->images->count() }} foto
```

## 🚀 Testing Guide

### Test 1: Upload 1 Gambar
```
1. Pilih 1 gambar
2. Preview muncul dengan badge "Gambar Utama"
3. Submit
4. Expected: Sukses, 1 record di product_images
```

### Test 2: Upload 5 Gambar (Maximum)
```
1. Pilih 5 gambar sekaligus
2. Preview menampilkan 5 gambar dalam grid
3. Gambar pertama memiliki badge "Gambar Utama"
4. Submit
5. Expected: Sukses, 5 records di product_images
```

### Test 3: Upload > 5 Gambar (Exceed Limit)
```
1. Pilih 6 gambar
2. Expected: Alert "Maksimal upload 5 gambar!"
3. Form reset, preview cleared
```

### Test 4: Upload File Besar (> 2MB)
```
1. Pilih gambar > 2MB
2. Expected: Alert "File [nama] terlalu besar!"
3. Upload dibatalkan
```

### Test 5: Upload Non-Image File
```
1. Pilih file PDF/DOC
2. Expected: Alert "File bukan gambar yang valid!"
3. Upload dibatalkan
```

### Test 6: Delete Product
```
1. Hapus produk dengan 3 gambar
2. Expected: 
   - 3 file gambar terhapus dari storage
   - 3 records terhapus dari product_images
   - 1 record terhapus dari produk
```

## 🎯 Backward Compatibility

Field `gambar` di tabel `produk` tetap ada untuk:
- ✅ Kompatibilitas dengan code lama
- ✅ Quick access ke primary image
- ✅ Fallback jika relasi bermasalah

```php
// Old way (masih bisa digunakan)
$product->gambar

// New way (recommended)
$product->primaryImage->image_path
$product->images // all images
```

## 🔍 File Structure

```
public/images/products/
├── 1731234567_abc123def_0.jpg  (primary, order 0)
├── 1731234567_abc123def_1.jpg  (order 1)
├── 1731234567_abc123def_2.jpg  (order 2)
├── 1731234568_xyz789ghi_0.jpg  (another product)
└── ...

Format: {timestamp}_{uniqid}_{index}.{extension}
```

## ⚠️ Important Notes

1. **Gambar Pertama = Primary**
   - Gambar yang diupload pertama otomatis jadi primary
   - Ditandai dengan `is_primary = true`
   - Tampil sebagai thumbnail utama

2. **Order Penting**
   - Gambar tersimpan sesuai urutan upload
   - Field `order` menyimpan urutan (0, 1, 2, ...)
   - Digunakan untuk sorting saat display

3. **Cascade Delete**
   - Hapus produk = otomatis hapus semua gambar
   - Foreign key dengan `ON DELETE CASCADE`
   - File fisik juga dihapus dari storage

4. **Transaction Safety**
   - Semua operasi dalam transaction
   - Jika ada error, semua rollback
   - Data tetap konsisten

5. **Unique Filename**
   - Format: `timestamp_uniqid_index.extension`
   - Mencegah nama file duplicate
   - Index untuk membedakan multiple upload

## 🛡️ Security

1. **File Validation**
   - Hanya terima image files
   - Validasi MIME type
   - Validasi extension

2. **Size Limitation**
   - Max 2MB per file
   - Max 5 files per upload
   - Mencegah DoS attack

3. **SQL Injection**
   - Protected by Eloquent ORM
   - Prepared statements

4. **XSS Protection**
   - Protected by Blade templating
   - Output escaping otomatis

## 📈 Performance

| Action | Time | Notes |
|--------|------|-------|
| Upload 1 image | ~1s | Tergantung ukuran |
| Upload 5 images | ~3-5s | Sequential upload |
| Display images | <1s | Lazy loading |
| Delete product | ~1-2s | With images |

## 🔄 Migration Info

**Created**: 2025_11_10_133808_create_product_images_table.php

```bash
# Untuk migrate
php artisan migrate

# Untuk rollback
php artisan migrate:rollback

# Untuk refresh
php artisan migrate:refresh
```

## 📊 Database Queries

### Get Product with Images
```php
$product = Product::with('images')->find($id);
```

### Get Only Products with Images
```php
$products = Product::has('images')->get();
```

### Get Products with Image Count
```php
$products = Product::withCount('images')->get();
foreach($products as $product) {
    echo $product->images_count; // jumlah gambar
}
```

---

**Multiple Image Upload System - Fully Functional! 🎉**

**Features:**
✅ Upload 1-5 images per product
✅ Real-time preview with file info
✅ Client & server validation
✅ Database transaction safety
✅ Cascade delete
✅ Primary image marking
✅ Backward compatible
✅ Responsive design
