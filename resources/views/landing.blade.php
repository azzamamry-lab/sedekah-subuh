@extends('layouts.app')

@section('title', 'Sedekah Subuh')
@section('deskripsi', 'Sedekah Subuh bersama Yayasan Nur Mirah. Mulai hari dengan satu kebaikan, buka pintu keberkahan.')

@section('gaya')
/* ---------- Hero ---------- */
.hero{
  background:linear-gradient(160deg,#E8F2EC 0%,#FAF7F0 55%,#F5EEDC 100%);
  padding:66px 0 62px;position:relative;overflow:hidden;border-bottom:1px solid var(--garis);
}
.hero::before{
  content:"";position:absolute;right:-150px;top:-150px;width:480px;height:480px;border-radius:50%;
  background:radial-gradient(circle,rgba(226,188,63,.18),transparent 70%);
}
.hero-grid{display:grid;grid-template-columns:1.08fr .92fr;gap:52px;align-items:center;position:relative;z-index:2}
.pill{
  display:inline-flex;align-items:center;gap:8px;font-size:11.5px;font-weight:700;
  letter-spacing:1.5px;text-transform:uppercase;color:var(--hijau);
  background:rgba(20,83,45,.08);border:1px solid rgba(20,83,45,.18);
  padding:7px 15px;border-radius:999px;margin-bottom:20px;
}
.hero h1{font-size:48px;line-height:1.13;font-weight:800;color:var(--hijau);
  letter-spacing:-1.1px;margin-bottom:16px}
.hero .lede{font-size:17.5px;color:var(--redup);max-width:520px;margin-bottom:30px}
.hero-cta{display:flex;gap:13px;flex-wrap:wrap}
.ikon-percaya{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:34px;padding-top:28px;
  border-top:1px solid var(--garis)}
.ikon-percaya div{display:flex;gap:10px;align-items:flex-start}
.ikon-percaya svg{flex-shrink:0;margin-top:4px}
.ikon-percaya b{display:block;font-size:13.5px;color:var(--hijau);font-weight:700;margin-bottom:4px;line-height:1.35}
.ikon-percaya span{font-size:12.5px;color:var(--redup);line-height:1.6;display:block}

/* Kartu hero */
.kartu-hero{
  background:#fff;border-radius:20px;padding:30px 28px;
  box-shadow:0 22px 52px rgba(20,83,45,.14);border-top:5px solid var(--emas);
}
.kartu-hero .label{font-size:11px;letter-spacing:1.6px;text-transform:uppercase;
  color:var(--redup);font-weight:700;margin-bottom:6px}
.kartu-hero .judul{font-size:22px;font-weight:800;color:var(--hijau);margin-bottom:5px}
.kartu-hero .sub{font-size:14px;color:var(--redup);margin-bottom:20px}
.kartu-hero hr{border:none;border-top:1px solid var(--garis);margin:18px 0}
.kartu-hero ul{list-style:none;display:grid;gap:11px}
.kartu-hero li{display:flex;gap:10px;font-size:14.5px;color:var(--tinta);align-items:flex-start}
.kartu-hero li svg{flex-shrink:0;margin-top:3px}
.mini-cta{
  background:var(--hijau-pucat);border:1px dashed rgba(20,83,45,.3);border-radius:10px;
  padding:13px 15px;font-size:13.5px;color:var(--hijau);margin-top:20px;text-align:center;font-weight:600;
}

/* ---------- Keutamaan ---------- */
.keut-grid{display:grid;grid-template-columns:1fr 1fr;gap:44px;align-items:center}
.hadis{
  background:var(--krem);border-left:5px solid var(--emas);border-radius:0 14px 14px 0;
  padding:28px 30px;position:relative;
}
.hadis .kutip{font-size:52px;color:var(--emas);opacity:.4;line-height:.7;font-family:Georgia,serif;
  position:absolute;top:18px;left:16px}
.hadis p{font-size:16.5px;color:var(--tinta);font-style:italic;line-height:1.75;
  margin:16px 0 14px;padding-left:20px}
.hadis .sumber{font-size:14px;color:var(--hijau);font-weight:700;padding-left:20px}
.poin-list{display:grid;gap:15px}
.poin{
  display:flex;gap:14px;align-items:flex-start;background:#fff;border:1px solid var(--garis);
  border-radius:12px;padding:17px 19px;
}
.poin .angka{
  width:30px;height:30px;border-radius:50%;background:var(--hijau);color:#fff;
  font-weight:800;font-size:14px;display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.poin b{display:block;font-size:15.5px;color:var(--hijau);font-weight:700}

/* ---------- Program ---------- */
.prog-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px}
.prog{
  background:#fff;border:1px solid var(--garis);border-radius:16px;padding:26px 23px;
  transition:transform .2s,box-shadow .2s,border-color .2s;
}
.prog:hover{transform:translateY(-5px);box-shadow:0 18px 40px rgba(20,83,45,.11);border-color:var(--emas)}
.prog .ikon{
  width:48px;height:48px;border-radius:13px;background:var(--hijau-pucat);
  display:flex;align-items:center;justify-content:center;margin-bottom:16px;
}
.prog h3{font-size:17px;color:var(--hijau);font-weight:700;margin-bottom:7px}
.prog p{font-size:14.5px;color:var(--redup)}

/* ---------- Cara ikut ---------- */
.langkah-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;counter-reset:l}
.lgk{background:#fff;border:1px solid var(--garis);border-radius:14px;padding:26px 21px 22px;position:relative}
.lgk::before{
  counter-increment:l;content:counter(l);
  position:absolute;top:-15px;left:20px;width:34px;height:34px;border-radius:50%;
  background:var(--hijau);color:#fff;font-weight:800;font-size:15px;
  display:flex;align-items:center;justify-content:center;border:3px solid #fff;
}
.lgk h3{font-size:16px;color:var(--hijau);margin:14px 0 7px;font-weight:700}
.lgk p{font-size:14px;color:var(--redup)}
.tengah{text-align:center;margin-top:36px}

/* ---------- Dampak (gelap) ---------- */
.dampak{background:var(--hijau);color:#fff;position:relative;overflow:hidden;padding:76px 0}
.dampak::before{
  content:"";position:absolute;inset:0;opacity:.6;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='96' height='96'%3E%3Cpath d='M48 6 90 30v48L48 102 6 78V30z' fill='none' stroke='%23E2BC3F' stroke-opacity='.11'/%3E%3C/svg%3E");
}
.dampak .wrap{position:relative;z-index:2}
.dampak-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:46px;align-items:center}
.dampak h2{font-size:33px;color:#fff;font-weight:800;line-height:1.25;margin-bottom:16px;letter-spacing:-.5px}
.dampak p{color:#B6CFC0;font-size:16.5px;margin-bottom:18px}
.dampak .kutip-akhir{font-size:17px;color:var(--emas-lembut);font-style:italic;font-weight:600}
.dampak-poin{display:grid;gap:13px}
.dp{
  background:rgba(255,255,255,.07);border:1px solid rgba(226,188,63,.24);border-radius:12px;
  padding:16px 18px;display:flex;gap:12px;align-items:flex-start;
}
.dp svg{flex-shrink:0;margin-top:3px}
.dp span{font-size:14.5px;color:#D6E5DB}

/* ---------- FAQ ---------- */
.faq{display:grid;gap:12px;max-width:860px;margin:0 auto}
details{background:#fff;border:1px solid var(--garis);border-radius:12px}
summary{
  cursor:pointer;padding:18px 21px;font-weight:700;color:var(--hijau);font-size:16px;
  list-style:none;display:flex;justify-content:space-between;gap:14px;align-items:center;
}
summary::-webkit-details-marker{display:none}
summary::after{content:"+";color:var(--emas);font-size:23px;font-weight:400;line-height:1}
details[open] summary::after{content:"\2212"}
details p{padding:0 21px 19px;color:var(--redup);font-size:15.5px}

/* ---------- CTA akhir ---------- */
.cta-akhir{
  background:linear-gradient(150deg,#1C6B3B 0%,#14532D 100%);
  color:#fff;padding:70px 0;text-align:center;
}
.cta-akhir h2{font-size:31px;color:#fff;font-weight:800;margin-bottom:14px;letter-spacing:-.5px}
.cta-akhir p{color:#B6CFC0;max-width:560px;margin:0 auto 30px;font-size:16.5px}

@media(max-width:980px){
  .hero-grid,.keut-grid,.dampak-grid{grid-template-columns:1fr;gap:34px}
  .hero h1{font-size:36px}
  .langkah-grid{grid-template-columns:1fr 1fr}
}
@media(max-width:620px){
  .hero{padding:48px 0 50px}
  .hero h1{font-size:29px}
  .hero-cta{flex-direction:column}
  .ikon-percaya{grid-template-columns:1fr}
  .langkah-grid{grid-template-columns:1fr}
  .hero-cta .btn{width:100%}
}
@endsection

@section('isi')

<!-- ============ HERO ============ -->
<div class="hero">
  <div class="wrap hero-grid">
    <div>
      <span class="pill">
        <svg width="13" height="13" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="6" fill="#C9A227"/></svg>
        Kampanye Sedekah Subuh
      </span>
      <h1>{{ $hero['judul'] }}</h1>
      <p class="lede">{{ $hero['deskripsi'] }}</p>
      <div class="hero-cta">
        <a class="btn btn-hijau" href="{{ route('donasi') }}">
          {{ $hero['tombol'] }}
          <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8h9M8.5 4l4 4-4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a class="btn btn-garis" href="#program">Lihat Program</a>
      </div>

      <div class="ikon-percaya">
        @foreach ($kepercayaan as $k)
          <div>
            <svg width="17" height="17" viewBox="0 0 20 20" aria-hidden="true"><path d="M10 2.5 16 5v5c0 4-2.6 6.4-6 7.5-3.4-1.1-6-3.5-6-7.5V5z" fill="none" stroke="#14532D" stroke-width="1.7" stroke-linejoin="round"/><path d="M7 10l2 2 4-4" fill="none" stroke="#14532D" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <div>
              <b>{{ $k['judul'] }}</b>
              <span>{{ $k['teks'] }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <aside class="kartu-hero" aria-label="Ringkasan Sedekah Subuh">
      <div class="label">Sedekah Subuh</div>
      <div class="judul">Setiap pagi, satu kebaikan</div>
      <div class="sub">Disalurkan lewat program sosial yang berjalan rutin.</div>
      <hr>
      <ul>
        <li>
          <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M2 8.5 6 12.5 14 3.5" fill="none" stroke="#C9A227" stroke-width="2.4" stroke-linecap="round"/></svg>
          <span>Tidak ada nominal minimal</span>
        </li>
        <li>
          <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M2 8.5 6 12.5 14 3.5" fill="none" stroke="#C9A227" stroke-width="2.4" stroke-linecap="round"/></svg>
          <span>Transfer bank, e-wallet, atau QRIS</span>
        </li>
        <li>
          <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M2 8.5 6 12.5 14 3.5" fill="none" stroke="#C9A227" stroke-width="2.4" stroke-linecap="round"/></svg>
          <span>Laporan penyaluran berkala</span>
        </li>
      </ul>
      <div class="mini-cta">{{ $hero['subjudul'] }}</div>
    </aside>
  </div>
</div>

<!-- ============ KEUTAMAAN ============ -->
<section id="keutamaan">
  <div class="wrap">
    <div class="sec-head">
      <span class="kicker">Keutamaan</span>
      <h2>{{ $keutamaan['judul'] }}</h2>
      <p>{{ $keutamaan['subjudul'] }}</p>
    </div>
    <div class="keut-grid">
      <div class="hadis">
        <span class="kutip" aria-hidden="true">&ldquo;</span>
        <p>{{ $keutamaan['hadis'] }}</p>
        <div class="sumber">{{ $keutamaan['sumber'] }}</div>
      </div>
      <div class="poin-list">
        @foreach ($keutamaan['poin'] as $i => $p)
          <div class="poin">
            <span class="angka">{{ $i + 1 }}</span>
            <b>{{ $p }}</b>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- ============ PROGRAM ============ -->
<section id="program" style="background:var(--krem);border-top:1px solid var(--garis);border-bottom:1px solid var(--garis)">
  <div class="wrap">
    <div class="sec-head">
      <span class="kicker">Program</span>
      <h2>{{ $program['judul'] }}</h2>
      <p>{{ $program['subjudul'] }}</p>
    </div>
    <div class="prog-grid">
      @php
        $ikonProg = [
          '<path d="M6 3h8l-1 5H7z" fill="none" stroke="#14532D" stroke-width="1.7" stroke-linejoin="round"/><path d="M7 8h6v9H7z" fill="none" stroke="#14532D" stroke-width="1.7"/>',
          '<path d="M3 5h6a3 3 0 013 3v7a2.5 2.5 0 00-2.5-2.5H3z" fill="none" stroke="#14532D" stroke-width="1.7" stroke-linejoin="round"/><path d="M17 5h-6a3 3 0 00-3 3v7a2.5 2.5 0 012.5-2.5H17z" fill="none" stroke="#14532D" stroke-width="1.7" stroke-linejoin="round"/>',
          '<circle cx="10" cy="6.5" r="3" fill="none" stroke="#14532D" stroke-width="1.7"/><path d="M4 17c0-3.3 2.7-5 6-5s6 1.7 6 5" fill="none" stroke="#14532D" stroke-width="1.7" stroke-linecap="round"/>',
          '<path d="M10 3v6M10 15v2M4 10H2M18 10h-2M5.5 5.5 4 4M15 15l1.5 1.5M14.5 5.5 16 4M5 15l-1.5 1.5" stroke="#14532D" stroke-width="1.6" stroke-linecap="round"/><circle cx="10" cy="11" r="3.5" fill="none" stroke="#14532D" stroke-width="1.7"/>',
        ];
      @endphp
      @foreach ($program['daftar'] as $i => $pr)
        <div class="prog">
          <div class="ikon">
            <svg width="22" height="22" viewBox="0 0 20 20" aria-hidden="true">{!! $ikonProg[$i] ?? $ikonProg[0] !!}</svg>
          </div>
          <h3>{{ $pr['nama'] }}</h3>
          <p>{{ $pr['teks'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ CARA IKUT ============ -->
<section id="cara">
  <div class="wrap">
    <div class="sec-head">
      <span class="kicker">Cara Ikut</span>
      <h2>{{ $cara_ikut['judul'] }}</h2>
      <p>{{ $cara_ikut['subjudul'] }}</p>
    </div>
    <div class="langkah-grid">
      @foreach ($cara_ikut['langkah'] as $l)
        <div class="lgk">
          <h3>{{ $l['nama'] }}</h3>
          <p>{{ $l['teks'] }}</p>
        </div>
      @endforeach
    </div>
    <div class="tengah">
      <a class="btn btn-hijau" href="{{ route('donasi') }}">
        Sedekah Sekarang
        <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8h9M8.5 4l4 4-4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ============ DAMPAK ============ -->
<section class="dampak">
  <div class="wrap dampak-grid">
    <div>
      <h2>{{ $dampak['judul'] }}</h2>
      <p>{{ $dampak['teks'] }}</p>
      <div class="kutip-akhir">{{ $dampak['penutup'] }}</div>
    </div>
    <div class="dampak-poin">
      @foreach ($dampak['poin'] as $d)
        <div class="dp">
          <svg width="18" height="18" viewBox="0 0 18 18" aria-hidden="true"><path d="M3 9.5 7 13.5 15 4.5" fill="none" stroke="#E2BC3F" stroke-width="2.2" stroke-linecap="round"/></svg>
          <span>{{ $d }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section id="faq">
  <div class="wrap">
    <div class="sec-head">
      <span class="kicker">FAQ</span>
      <h2>Pertanyaan yang Sering Diajukan</h2>
    </div>
    <div class="faq">
      @foreach ($faq as $i => $f)
        <details @if ($i === 0) open @endif>
          <summary>{{ $f['t'] }}</summary>
          <p>{{ $f['j'] }}</p>
        </details>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ CTA AKHIR ============ -->
<div class="cta-akhir">
  <div class="wrap">
    <h2>{{ $cta_akhir['judul'] }}</h2>
    <p>{{ $cta_akhir['teks'] }}</p>
    <a class="btn btn-emas" href="{{ route('donasi') }}">
      {{ $hero['tombol'] }}
      <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8h9M8.5 4l4 4-4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>
  </div>
</div>

@endsection
