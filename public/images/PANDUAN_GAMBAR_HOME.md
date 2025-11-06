# Petunjuk Gambar untuk Halaman Home

## Gambar yang Dibutuhkan

### 1. Logo Header
**File**: `public/images/logo.png`
- **Ukuran**: 55x55 px (atau 200x200 px untuk kualitas tinggi)
- **Format**: PNG dengan background transparan atau bulat
- **Lokasi**: Header halaman (kiri atas)

### 2. Gambar Petani (Hero Section)
**File**: `public/images/petani.jpg`
- **Ukuran**: 340x340 px (atau minimal 800x800 px untuk kualitas tinggi)
- **Format**: JPG atau PNG
- **Deskripsi**: Foto petani Indonesia yang sedang bekerja di sawah/ladang
- **Lokasi**: Hero section (sebelah kiri)

## Saran Gambar:

### Untuk Logo:
- Logo pemerintah atau logo sistem
- Bisa berupa ikon pupuk, tani, atau daun
- Background hijau atau transparan

### Untuk Gambar Petani:
**Rekomendasi dari Unsplash/Pexels:**
- Cari kata kunci: "indonesian farmer", "rice farmer", "asian farmer"
- Pilih foto yang menunjukkan petani sedang bekerja
- Pastikan foto berkualitas tinggi dan terlihat profesional

**Alternatif jika tidak ada gambar:**
Gunakan placeholder sementara dengan mengganti di file HOME.blade.php:

```blade
<!-- Untuk logo -->
<img src="https://ui-avatars.com/api/?name=Pupuk+Subsidi&background=1a5d2e&color=fff&size=200" alt="Logo" class="logo">

<!-- Untuk petani -->
<img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?w=800&h=800&fit=crop" alt="Petani">
```

## Download Gambar Gratis:

1. **Unsplash**: https://unsplash.com/s/photos/farmer
2. **Pexels**: https://pexels.com/search/farmer/
3. **Pixabay**: https://pixabay.com/images/search/farmer/

## Tools Edit Gambar:

- **Crop & Resize**: iloveimg.com/crop-image
- **Remove Background**: remove.bg
- **Compress**: tinypng.com

## Catatan:
- Halaman tetap berfungsi tanpa gambar (akan muncul alt text)
- Icon emoji pada feature cards sudah built-in (tidak perlu gambar terpisah)
- Responsive untuk semua ukuran layar
