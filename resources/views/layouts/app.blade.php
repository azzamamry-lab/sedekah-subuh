<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Sedekah Subuh') | {{ $yayasan }}</title>
<meta name="description" content="@yield('deskripsi', 'Sedekah Subuh bersama Yayasan Nur Mirah. Mulai hari dengan satu kebaikan.')">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
/* ==== Palette: hijau botol (keberkahan) + krem (tenang) + emas (aksen) ==== */
:root{
  --hijau:#14532D;
  --hijau-muda:#1C6B3B;
  --hijau-terang:#2E8B57;
  --hijau-pucat:#E8F2EC;
  --krem:#FAF7F0;
  --krem-tua:#F0EAD9;
  --emas:#C9A227;
  --emas-lembut:#E2BC3F;
  --putih:#FFFFFF;
  --tinta:#1B2A21;
  --redup:#5F6F65;
  --garis:#E3DED0;
}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  font-family:"Plus Jakarta Sans",Segoe UI,system-ui,sans-serif;
  color:var(--tinta);background:var(--putih);line-height:1.65;font-size:16px;
  -webkit-font-smoothing:antialiased;overflow-x:hidden;
}
a{color:inherit}
img{max-width:100%;display:block}
:focus-visible{outline:3px solid var(--emas);outline-offset:3px;border-radius:4px}
.wrap{max-width:1140px;margin:0 auto;padding:0 24px}

/* ---------- Header ---------- */
header{
  position:sticky;top:0;z-index:60;background:rgba(255,255,255,.97);
  backdrop-filter:blur(10px) saturate(150%);border-bottom:1px solid var(--garis);
}
.bar{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:13px 0}
.brand{display:flex;align-items:center;gap:11px;text-decoration:none}
.brand svg{width:38px;height:38px;flex-shrink:0}
.nm-brand{font-size:18px;font-weight:800;color:var(--hijau);letter-spacing:.3px;line-height:1.1}
.sub-brand{font-size:10px;color:var(--redup);letter-spacing:1.1px;text-transform:uppercase;font-weight:600}
nav{display:flex;align-items:center;gap:26px}
nav a{text-decoration:none;font-size:14.5px;font-weight:600;color:var(--tinta);transition:color .18s}
nav a:hover,nav a.aktif{color:var(--hijau-muda)}
.btn{
  display:inline-flex;align-items:center;justify-content:center;gap:9px;
  text-decoration:none;font-weight:700;font-size:14.5px;font-family:inherit;
  padding:12px 24px;border-radius:999px;border:2px solid transparent;cursor:pointer;
  transition:transform .18s,background .18s,box-shadow .18s;
}
.btn-hijau{background:var(--hijau);color:#fff;border-color:var(--hijau);box-shadow:0 6px 18px rgba(20,83,45,.24)}
.btn-hijau:hover{background:var(--hijau-muda);border-color:var(--hijau-muda);transform:translateY(-2px)}
.btn-emas{background:var(--emas);color:var(--hijau);border-color:var(--emas)}
.btn-emas:hover{background:var(--emas-lembut);border-color:var(--emas-lembut);transform:translateY(-2px)}
.btn-garis{border-color:var(--hijau);color:var(--hijau);background:transparent}
.btn-garis:hover{background:var(--hijau);color:#fff}
.menu-btn{display:none;background:var(--krem);border:1px solid var(--garis);border-radius:8px;
  padding:9px 12px;cursor:pointer;color:var(--hijau);font-size:17px;line-height:1}

/* ---------- Section umum ---------- */
section{padding:72px 0}
.sec-head{text-align:center;max-width:700px;margin:0 auto 46px}
.kicker{
  display:inline-block;font-size:11.5px;letter-spacing:1.9px;text-transform:uppercase;
  color:var(--emas);font-weight:800;margin-bottom:11px;
}
.sec-head h2{font-size:34px;color:var(--hijau);line-height:1.24;margin-bottom:13px;
  font-weight:800;letter-spacing:-.6px}
.sec-head p{color:var(--redup);font-size:16.5px}

/* ---------- Footer ---------- */
footer{background:var(--hijau);color:#A8C4B4;padding:48px 0 30px;font-size:14px}
.foot{display:grid;grid-template-columns:1.6fr 1fr 1fr;gap:34px;margin-bottom:30px}
.foot h4{color:#fff;font-size:14px;font-weight:700;margin-bottom:13px}
.foot ul{list-style:none;display:grid;gap:9px}
.foot a{color:#A8C4B4;text-decoration:none;transition:color .18s}
.foot a:hover{color:var(--emas-lembut)}
.sosmed{display:flex;gap:11px;margin-top:14px}
.sosmed a{
  width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.1);
  display:flex;align-items:center;justify-content:center;transition:background .18s;
}
.sosmed a:hover{background:var(--emas)}
.foot-bottom{border-top:1px solid rgba(168,196,180,.22);padding-top:22px;
  display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap;font-size:13px}

/* ---------- Mobile ---------- */
@media(max-width:980px){
  nav{display:none}
  nav.open{
    display:flex;flex-direction:column;align-items:stretch;gap:0;
    position:absolute;top:100%;left:0;right:0;background:#fff;
    border-bottom:1px solid var(--garis);padding:10px 24px 20px;
    box-shadow:0 14px 30px rgba(20,83,45,.13);
  }
  nav.open a{padding:14px 0;border-bottom:1px solid var(--garis)}
  nav.open a:last-of-type{border-bottom:none}
  nav.open .btn{margin-top:16px;width:100%}
  .menu-btn{display:block}
  .foot{grid-template-columns:1fr 1fr}
}
@media(max-width:620px){
  body{font-size:15.5px}
  section{padding:52px 0}
  .sec-head h2{font-size:26px}
  .sec-head p{font-size:15.5px}
  .foot{grid-template-columns:1fr}
  .btn{width:100%}
}
@yield('gaya')
</style>
</head>
<body>

<header>
  <div class="wrap bar">
    <a class="brand" href="{{ route('beranda') }}">
      <svg viewBox="0 0 64 64" role="img" aria-label="Logo {{ $yayasan }}">
        <circle cx="32" cy="32" r="29" fill="#14532D"/>
        <path d="M32 14c-9 0-16 7-16 16 0 6 3.4 11.3 8.5 14.2V32h-4v-2h4v-6h15v6h4v2h-4v12.2C44.6 41.3 48 36 48 30c0-9-7-16-16-16z" fill="#E2BC3F"/>
        <circle cx="32" cy="32" r="29" fill="none" stroke="#C9A227" stroke-width="2"/>
      </svg>
      <span>
        <span class="nm-brand">{{ $yayasan }}</span>
        <span class="sub-brand">Bersama Berbagi</span>
      </span>
    </a>
    <button class="menu-btn" id="menuBtn" aria-expanded="false" aria-controls="navUtama" aria-label="Buka menu">&#9776;</button>
    <nav id="navUtama" aria-label="Navigasi utama">
      <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'aktif' : '' }}">Tentang Kami</a>
      <a href="{{ route('program') }}" class="{{ request()->routeIs('program') ? 'aktif' : '' }}">Program</a>
      <a href="{{ route('laporan') }}" class="{{ request()->routeIs('laporan') ? 'aktif' : '' }}">Laporan</a>
      <a href="{{ route('beranda') }}#faq">FAQ</a>
      <a class="btn btn-hijau" href="{{ route('donasi') }}">Sedekah Sekarang</a>
    </nav>
  </div>
</header>

@yield('isi')

<footer>
  <div class="wrap">
    <div class="foot">
      <div>
        <div style="display:flex;align-items:center;gap:11px;margin-bottom:12px">
          <svg width="34" height="34" viewBox="0 0 64 64" role="img" aria-label="Logo {{ $yayasan }}">
            <circle cx="32" cy="32" r="29" fill="#1C6B3B"/>
            <path d="M32 14c-9 0-16 7-16 16 0 6 3.4 11.3 8.5 14.2V32h-4v-2h4v-6h15v6h4v2h-4v12.2C44.6 41.3 48 36 48 30c0-9-7-16-16-16z" fill="#E2BC3F"/>
          </svg>
          <span class="nm-brand" style="color:#fff;font-size:17px">{{ $yayasan }}</span>
        </div>
        <p style="max-width:330px">{{ $tagline }}</p>
        <div class="sosmed">
          <a href="#" aria-label="Instagram">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#fff" stroke="none"/></svg>
          </a>
          <a href="#" aria-label="YouTube">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="4"/><path d="M10 9l5 3-5 3z" fill="#fff" stroke="none"/></svg>
          </a>
          <a href="#" aria-label="Facebook">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M15 3h-3a4 4 0 00-4 4v3H6v4h2v8h4v-8h3l1-4h-4V7a1 1 0 011-1h2z"/></svg>
          </a>
        </div>
      </div>
      <div>
        <h4>Halaman</h4>
        <ul>
          <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
          <li><a href="{{ route('program') }}">Program</a></li>
          <li><a href="{{ route('laporan') }}">Laporan</a></li>
          <li><a href="{{ route('donasi') }}">Donasi</a></li>
        </ul>
      </div>
      <div>
        <h4>Kontak</h4>
        <ul>
          <li><a href="#">Hubungi Kami</a></li>
          <li><a href="{{ route('beranda') }}#faq">Pertanyaan Umum</a></li>
        </ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>&copy; {{ date('Y') }} {{ $yayasan }}. Seluruh hak cipta dilindungi.</span>
      <span>Dikelola secara amanah dan transparan.</span>
    </div>
  </div>
</footer>

<script>
// Menu mobile: buka, tutup, Escape (aksesibilitas keyboard)
(function(){
  var btn = document.getElementById('menuBtn');
  var nav = document.getElementById('navUtama');
  if(!btn || !nav) return;
  function tutup(){ nav.classList.remove('open'); btn.setAttribute('aria-expanded','false'); btn.innerHTML='&#9776;'; }
  function buka(){ nav.classList.add('open'); btn.setAttribute('aria-expanded','true'); btn.innerHTML='&times;'; }
  btn.addEventListener('click', function(){ nav.classList.contains('open') ? tutup() : buka(); });
  nav.querySelectorAll('a').forEach(function(a){ a.addEventListener('click', tutup); });
  document.addEventListener('keydown', function(e){
    if(e.key === 'Escape' && nav.classList.contains('open')){ tutup(); btn.focus(); }
  });
  window.addEventListener('resize', function(){ if(window.innerWidth > 980) tutup(); });
})();
</script>
</body>
</html>
