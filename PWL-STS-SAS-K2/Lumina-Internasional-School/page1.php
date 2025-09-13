<?php
// lumina-school.php
// Simple, clean PHP single-file template to mimic the provided design.

$schoolName = 'Lumina International School';
$tagline = 'Sekolah Pendidikan internasional, akademik, dan karakter umum.';
$contactEmail = 'luminaschool@gmail.com';
$contactPhone = '+62 882 0400 5599';
$year = date('Y');
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($schoolName) ?></title>
  <style>
    /* Reset & base */
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;}
    a{color:inherit;text-decoration:none}

    /* Page layout */
    .page{background:#f3f4f6;min-height:100vh;display:flex;flex-direction:column;align-items:center}
    .container{width:100%;max-width:980px;padding:20px}

    /* Header */
    header{background:#1fb6d1;color:#042a2f;border-radius:8px;padding:14px 20px;display:flex;align-items:center;justify-content:space-between}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{background:#0ea5b7;padding:8px 12px;border-radius:6px;color:#fff;font-weight:700}
    nav{display:flex;gap:18px;align-items:center}
    .cta{background:#ff8fb1;color:#fff;padding:8px 12px;border-radius:6px;font-weight:600}

    /* Hero image card */
    .hero-card{background:#fff;margin-top:18px;border-radius:8px;overflow:hidden;box-shadow:0 6px 18px rgba(3,10,18,0.06)}
    .hero img{display:block;width:100%;height:270px;object-fit:cover}

    /* Content */
    .content{background:#fff;margin-top:18px;padding:28px;border-radius:8px;box-shadow:0 6px 18px rgba(3,10,18,0.06)}
    .section-title{font-size:22px;font-weight:700;color:#0f172a;margin:0 0 10px}
    .lead{color:#374151;margin-bottom:18px}

    .visi-misi{display:grid;grid-template-columns:1fr;gap:20px}
    .box{background:#fafafa;padding:18px;border-radius:10px}

    .btn-pink{display:inline-block;background:#ffbdd0;color:#3b0a17;padding:12px 22px;border-radius:999px;font-weight:700;margin-top:12px}

    footer{width:100%;max-width:980px;margin-top:22px;padding:18px;background:#0ea5b7;color:#fff;border-radius:8px;display:flex;flex-wrap:wrap;justify-content:space-between;gap:12px}
    .footer-left{max-width:620px}
    .muted{opacity:0.95}

    /* Responsive */
    @media(min-width:800px){
      .visi-misi{grid-template-columns:1fr 320px}
      .hero img{height:320px}
    }
  </style>
</head>
<body>
  <div class="page">
    <div class="container">
      <header>
        <div class="brand">
          <div class="logo">Lumina</div>
          <div>
            <div style="font-weight:700">Lumina</div>
            <div style="font-size:12px;opacity:0.9">International School</div>
          </div>
        </div>
        <nav>
          <a href="#">Sekolah</a>
          <a href="#">Program Akademik</a>
          <a href="#">Komunitas</a>
          <a href="#">Galeri</a>
          <a class="cta" href="#contact">Hubungi Kami</a>
        </nav>
      </header>

      <!-- Image / Hero -->
      <div class="hero-card">
        <div class="hero">
          <!-- Ganti src dengan path gambar Anda. Di sistem ini contoh: /mnt/data/7d76a5fc-27c7-4c9e-a11b-8e73fe4d8570.png -->
          <img src="/mnt/data/7d76a5fc-27c7-4c9e-a11b-8e73fe4d8570.png" alt="anak bermain">
        </div>
      </div>

      <!-- About -->
      <div class="content">
        <h2 class="section-title">About us</h2>
        <p class="lead">Lumina International School adalah sekolah modern yang menggabungkan pendidikan global dengan teknologi digital. Kami hadir untuk membentuk generasi pembelajar yang kritis, kreatif, dan berkarakter, sekaligus memperkuat komunikasi antara siswa, guru, orang tua, dan masyarakat.</p>

        <div class="visi-misi">
          <div class="box">
            <h3 style="margin-top:0">Visi & Misi</h3>
            <h4 style="margin-bottom:6px">Visi:</h4>
            <p style="margin-top:0;margin-bottom:12px">Menjadi lembaga pendidikan internasional yang membentuk generasi pembelajar global yang berpikir kritis, berjiwa humanis, dan siap menghadapi tantangan masa depan dengan nilai-nilai keberlanjutan dan teknologi.</p>

            <h4 style="margin-bottom:6px">Misi:</h4>
            <ol style="margin-top:0;padding-left:18px">
              <li>Menyediakan pendidikan internasional yang relevan dan berpusat pada siswa.</li>
              <li>Mendorong kreativitas, kolaborasi, dan karakter positif.</li>
              <li>Membangun komunitas sekolah yang inklusif dan peduli.</li>
            </ol>

            <a class="btn-pink" href="#contact">Contact Us</a>
          </div>

          <div class="box">
            <h4 style="margin-top:0">Sekolah Pendidikan internasional</h4>
            <p class="muted" style="margin:0 0 12px">Alamat: -</p>
            <p style="margin:0">E-Mail: <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"><?= htmlspecialchars($contactEmail) ?></a></p>
            <p style="margin:0 0 12px">Kontak: <?= htmlspecialchars($contactPhone) ?></p>

            <div style="margin-top:14px;display:flex;align-items:center;gap:12px">
              <div style="flex:1">
                <h5 style="margin:0">Menu Utama</h5>
                <ul style="padding-left:18px;margin:6px 0 0">
                  <li>Sekolah</li>
                  <li>Program Akademik</li>
                  <li>Galeri</li>
                  <li>Jurnal</li>
                </ul>
              </div>
            </div>

            <div style="margin-top:22px;text-align:center">
              <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='120' height='60'><rect rx='10' width='100%' height='100%' fill='%230ea5b7'/><text x='50%' y='55%' dominant-baseline='middle' text-anchor='middle' fill='white' font-family='Arial' font-size='14'>Lumina</text></svg>" alt="logo">
            </div>

          </div>
        </div>
      </div>

    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-info">
                    <p class="footer-description">
                        Sekolah Pendidikan Internasional,<br>
                        akademik, dan karakter umum
                    </p>
                    
                    <div class="contact-info">
                        <h3>Yayasan Lumina School</h3>
                        <div class="contact-details">
                            <p>Alamat : --</p>
                            <p>E-Mail : <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e68a938b8f888795858e89898aa6818b878f8ac885898b">[email&#160;protected]</a></p>
                            <p>Kontak : +62 896 0409 5599</p>
                        </div>
                    </div>
                </div>
                
                <div class="footer-menu-section">
                    <div class="footer-menu">
                        <h4>Menu Utama</h4>
                        <ul>
                            <li><a href="#sekolah">Sekolah</a></li>
                            <li><a href="#tentang">Tentang</a></li>
                            <li><a href="#program">Program Akademik</a></li>
                            <li><a href="#komunitas">Komunitas</a></li>
                            <li><a href="#galeri">Galeri</a></li>
                            <li><a href="#jurnal">Jurnal</a></li>
                            <li><a href="contact.php">Hubungi kami</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-logo">
                        <div class="logo-section">
                            <span class="logo-text">Lumina</span>
                            <div class="logo-icon">L</div>
                        </div>
                        <p class="logo-subtitle">INTERNATIONAL SCHOOL</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    ©2025 International School
                </div>
            </div>
        </div>
    </footer>

  </div>
</body>
</html>
