@extends('layouts.app')

@section('title', 'Laporan Penyaluran')

@section('gaya')
.hero-kecil{background:linear-gradient(160deg,#E8F2EC 0%,#FAF7F0 100%);padding:52px 0 44px;border-bottom:1px solid var(--garis);text-align:center}
.hero-kecil h1{font-size:36px;color:var(--hijau);font-weight:800;letter-spacing:-.7px;margin-bottom:12px}
.hero-kecil p{color:var(--redup);font-size:16.5px;max-width:620px;margin:0 auto}
.kotak{background:#fff;border:1px solid var(--garis);border-radius:16px;padding:30px 28px;max-width:840px;margin:0 auto}
.kotak h2{font-size:22px;color:var(--hijau);font-weight:700;margin-bottom:12px}
.kotak p{color:var(--redup);font-size:15.5px;margin-bottom:14px}
.kotak ul{margin:0 0 16px 20px;color:var(--redup);font-size:15.5px}
.kotak li{margin-bottom:8px}
@endsection

@section('isi')
<div class="hero-kecil">
  <div class="wrap">
    <span class="kicker">Transparansi</span>
    <h1>Laporan Penyaluran</h1>
  </div>
</div>
<section>
  <div class="wrap">
    <div class="kotak">
      <h2>Laporan berkala untuk donatur</h2>
      <p>Setiap donatur menerima laporan penyaluran secara berkala. Laporan memuat jumlah dana yang masuk, program yang dibiayai, dan dokumentasi penyaluran.</p>
      <h2 style="margin-top:22px">Cara mendapatkan laporan</h2>
      <ul>
        <li>Laporan dikirim otomatis ke kontak donatur yang terdaftar.</li>
        <li>Donatur bisa meminta laporan periode tertentu lewat menu Hubungi Kami.</li>
        <li>Dokumentasi penyaluran disertakan dalam bentuk foto dan catatan penerima manfaat.</li>
      </ul>
      <p style="font-size:14px">Belum ada laporan yang dipublikasikan di halaman ini. Laporan akan ditampilkan setelah periode penyaluran pertama selesai.</p>
      <a class="btn btn-hijau" href="#" style="margin-top:8px">Hubungi Kami</a>
    </div>
  </div>
</section>
@endsection
