@extends('layouts.app')

@section('title', 'Tentang Kami')

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
    <span class="kicker">Tentang</span>
    <h1>Tentang Kami</h1>
  </div>
</div>
<section>
  <div class="wrap">
    <div class="kotak">
      <h2>{{ $yayasan }}</h2>
      <p>{{ $tagline }}</p>
      <p>Kami mengelola sedekah dan donasi dari para donatur, lalu menyalurkannya melalui program sosial yang berjalan rutin: kebutuhan pangan, dukungan pendidikan, bantuan sosial, dan respon kemanusiaan.</p>
      <h2 style="margin-top:22px">Prinsip pengelolaan</h2>
      <ul>
        <li><strong>Amanah</strong> &mdash; dana disalurkan sesuai peruntukan yang dijanjikan.</li>
        <li><strong>Transparan</strong> &mdash; laporan penyaluran dikirim ke donatur secara berkala.</li>
        <li><strong>Tepat sasaran</strong> &mdash; penerima manfaat ditentukan lewat verifikasi lapangan.</li>
      </ul>
      <a class="btn btn-garis" href="{{ route('laporan') }}" style="margin-top:8px">Lihat Laporan Penyaluran</a>
    </div>
  </div>
</section>
@endsection
