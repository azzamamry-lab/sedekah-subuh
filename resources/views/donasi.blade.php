@extends('layouts.app')

@section('title', 'Sedekah Subuh Sekarang')

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
    <span class="kicker">Donasi</span>
    <h1>Sedekah Subuh Sekarang</h1>
  </div>
</div>
<section>
  <div class="wrap">
    <div class="kotak">
      <h2>Pilih cara berdonasi</h2>
      <p>Tidak ada nominal minimal. Sedekah sesuai kemampuan Anda.</p>
      <h2 style="margin-top:22px">Transfer bank</h2>
      <p style="font-size:15px">Nomor rekening belum dicantumkan. Hubungi kami untuk mendapatkan nomor rekening resmi, supaya Anda tidak salah transfer.</p>
      <h2 style="margin-top:22px">E-wallet dan QRIS</h2>
      <p style="font-size:15px">Tersedia melalui kanal resmi yayasan. Hubungi kami untuk mendapatkan QRIS resmi.</p>
      <div style="background:var(--hijau-pucat);border:1px dashed rgba(20,83,45,.3);border-radius:10px;padding:16px;margin-top:18px">
        <p style="margin:0;font-size:14.5px;color:var(--hijau)"><strong>Penting:</strong> pastikan nomor rekening dan QRIS Anda terima langsung dari kanal resmi {{ $yayasan }}. Kami tidak pernah meminta transfer ke rekening pribadi.</p>
      </div>
      <a class="btn btn-hijau" href="#" style="margin-top:20px">Hubungi Kami untuk Rekening Resmi</a>
    </div>
  </div>
</section>
@endsection
