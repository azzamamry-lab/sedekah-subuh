# Landing Page Sedekah Subuh — Laravel

Landing page donasi **Sedekah Subuh** untuk Yayasan Nur Mirah, dibangun dengan Laravel 13.

## Cara Menjalankan

**Cara paling mudah (Windows):** double-click `jalankan.bat`

**Atau lewat terminal:**
```bash
cd sedekah-subuh
php artisan serve
```
Lalu buka http://127.0.0.1:8000

## Halaman

| Route | Halaman | Isi |
|---|---|---|
| `/` | Beranda | Hero, keutamaan, program, cara ikut, dampak, FAQ, CTA |
| `/program` | Program | Daftar program yayasan |
| `/tentang` | Tentang Kami | Profil & prinsip pengelolaan |
| `/laporan` | Laporan Penyaluran | Info transparansi |
| `/donasi` | Donasi | Cara berdonasi (bank, e-wallet, QRIS) |

## Struktur Berkas

```
sedekah-subuh/
├── app/Http/Controllers/LandingController.php   ← semua data halaman
├── routes/web.php                               ← definisi route
├── resources/views/
│   ├── layouts/app.blade.php                    ← layout + header + footer
│   ├── landing.blade.php                        ← halaman utama
│   ├── program.blade.php
│   ├── tentang.blade.php
│   ├── laporan.blade.php
│   └── donasi.blade.php
└── jalankan.bat                                 ← shortcut jalankan server
```

## Mengubah Isi Halaman

Semua teks ada di **satu tempat**: `app/Http/Controllers/LandingController.php`
pada method `data()`. Ubah di situ, tidak perlu sentuh file Blade.

Contoh mengubah judul hero:
```php
'hero' => [
    'judul' => 'Sedekah Subuh',   // ← ubah di sini
    ...
],
```

## Palette Warna

| Warna | Kode | Dipakai untuk |
|---|---|---|
| Hijau botol | `#14532D` | Tombol CTA, judul, aksen |
| Hijau pucat | `#E8F2EC` | Latar kartu, badge |
| Krem | `#FAF7F0` | Latar section |
| Emas | `#C9A227` | Aksen, ikon centang |

Semua variabel ada di bagian `:root` pada `resources/views/layouts/app.blade.php`.

## Yang Masih Perlu Diisi

Bagian berikut sengaja dibiarkan kosong (belum ada data asli):

- **Nomor rekening** di halaman `/donasi`
- **QRIS resmi** yayasan
- **Nomor kontak** di halaman Tentang dan footer
- **Link sosial media** (Instagram, YouTube, Facebook) di footer
- **Laporan penyaluran** di halaman `/laporan`

Semua ditandai dengan teks "belum dicantumkan" supaya jelas mana yang masih perlu dilengkapi,
tidak dikarang-karang.

## Requirement

- PHP 8.4 (sudah terinstall via winget)
- Composer 2.10 (sudah terinstall)
- Ekstensi: openssl, mbstring, curl, fileinfo, pdo_sqlite, sqlite3, zip, gd, intl (sudah aktif)
