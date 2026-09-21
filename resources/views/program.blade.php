@extends('layouts.app')

@section('title', 'Program Yayasan')

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
    <span class="kicker">Program</span>
    <h1>Program Yayasan</h1>
  </div>
</div>
<section>
  <div class="wrap">
    <div class="kotak">
      <h2>Program yang berjalan</h2>
      <p>Donasi Sedekah Subuh disalurkan lewat program-program berikut. Setiap program berjalan rutin dan dilaporkan secara berkala.</p>
      <ul>
@foreach ($program['daftar'] as $p)
        <li><strong>{{ $p['nama'] }}</strong> &mdash; {{ $p['teks'] }}</li>
@endforeach
      </ul>
      <p style="font-size:14px">Rincian kebutuhan dan penyaluran tiap program dapat dilihat di halaman <a href="{{ route('laporan') }}" style="color:var(--hijau);font-weight:600">Laporan</a>.</p>
      <a class="btn btn-hijau" href="{{ route('donasi') }}" style="margin-top:8px">Sedekah Sekarang</a>
    </div>
  </div>
</section>
@endsection
