# Landing Page Sedekah Subuh — Laravel

Landing page donasi **Sedekah Subuh**, dibangun dengan Laravel 13 + PHP 8.4.

## 🌐 Link Live

**https://chest-fill-stress-properties.trycloudflare.com**

(buka dari HP atau komputer mana saja, selama laptop menyala dan script-nya jalan)

Link ini berubah setiap kali dinyalakan ulang. Untuk menyalakan lagi, jalankan `jalankan-publik.bat`.

## Cara Menjalankan

| File | Kegunaan |
|---|---|
| `jalankan.bat` | Nyalakan server lokal (http://127.0.0.1:8000) |
| `jalankan-publik.bat` | Nyalakan server + **link publik** yang bisa dibuka dari mana saja |

**Cara paling mudah:** klik 2x `jalankan-publik.bat`, tunggu ~20 detik, lalu cari baris berisi `https://xxxxx.trycloudflare.com`.

**Atau lewat terminal:**
```bash
cd sedekah-subuh
php artisan serve
```

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
├── Dockerfile                                   ← untuk deploy (Render/Fly.io)
├── render.yaml                                  ← blueprint deploy Render
├── netlify.toml                                 ← (tidak dipakai, Netlify tidak bisa PHP)
├── jalankan.bat                                 ← nyalakan server lokal
└── jalankan-publik.bat                          ← nyalakan + link publik
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
- **Nama yayasan** — sekarang masih placeholder "Yayasan Nur Mirah"

Semua ditandai dengan teks "belum dicantumkan" supaya jelas mana yang masih perlu dilengkapi,
tidak dikarang-karang.

## Deploy Permanen (Kalau Mau)

Kode sudah siap deploy. Pilih salah satu:

### Render.com (paling mudah)
1. Push repo ke GitHub (sudah: `github.com/azzamamry-lab/sedekah-subuh`)
2. Login https://dashboard.render.com → **New +** → **Blueprint**
3. Pilih repo `sedekah-subuh` → **Apply**
4. `render.yaml` otomatis mengatur semuanya, build ~5-8 menit

### Fly.io
```bash
fly launch --dockerfile Dockerfile
```

Link Render/Fly bersifat **permanen** (tidak berubah tiap nyala).
Link Cloudflare Tunnel bersifat **sementara** (berubah tiap nyala, hanya hidup saat laptop nyala).

## Requirement

- PHP 8.4 (sudah terinstall via winget)
- Composer 2.10 (sudah terinstall)
- Ekstensi: openssl, mbstring, curl, fileinfo, pdo_sqlite, sqlite3, zip, gd, intl (sudah aktif)
