<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anggota STI 2024</title>
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f5f5f5;
      color: #222;
    }

    .navbar {
      background: #2e2f7f;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 8%;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
    }

    .hero {
      background: linear-gradient(135deg, #1f2f86, #3f66d4);
      color: white;
      text-align: center;
      padding: 80px 20px;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
    }

    .anggota {
      padding: 60px 8%;
    }

    .search-box {
      margin-bottom: 40px;
      text-align: center;
    }

    .search-box input {
      width: 100%;
      max-width: 500px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 16px;
    }

    .anggota-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
    }

    .card {
      background: white;
      border-radius: 20px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: 0.3s;
      border: 1px solid #eef0ff;
    }

    .featured {
      background: linear-gradient(135deg, #2e2f7f, #4a6cf7);
      color: white;
    }

    .hero-badge {
      display: inline-block;
      background: rgba(255,255,255,0.2);
      padding: 10px 20px;
      border-radius: 999px;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .card {
      background: white;
      border-radius: 20px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-8px);
    }

    .avatar {
      width: 70px;
      height: 70px;
      background: #dfe3ff;
      color: #2e2f7f;
      font-size: 28px;
      font-weight: bold;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto 20px;
    }

    .card h3 {
      font-size: 20px;
      margin-bottom: 8px;
    }

    .card p {
      color: #666;
    }

    .footer {
      background: #2e2f7f;
      color: white;
      text-align: center;
      padding: 30px;
      margin-top: 60px;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 36px;
      }
    }
  </style>
</head>
<body>

<?php
include("navbar.php");
?>

<section class="hero">
  <div class="hero-badge">Kelas STI Angkatan 2024</div>
  <h1>Anggota Kelas</h1>
  <p>20 mahasiswa STI Angkatan 2024</p>
</section>

<section class="anggota">
  <div class="search-box">
    <input type="text" placeholder="Cari nama atau NIM...">
  </div>

  <div class="anggota-grid">
    <div class="card featured"><div class="avatar">F</div><h3>Fikri Shidiq</h3><p>Ketua Kelas</p></div>
    <div class="card"><div class="avatar">N</div><h3>Nabila Rizki</h3><p>247223001</p></div>
    <div class="card"><div class="avatar">Y</div><h3>Yuna Faizatun</h3><p>247223004</p></div>
    <div class="card"><div class="avatar">D</div><h3>Dio Alif</h3><p>247223005</p></div>
    <div class="card"><div class="avatar">S</div><h3>Shofa Azzah</h3><p>247223006</p></div>
    <div class="card"><div class="avatar">N</div><h3>Najwa Tsabilah</h3><p>247223007</p></div>
    <div class="card"><div class="avatar">M</div><h3>M. Ridwan</h3><p>247223008</p></div>
    <div class="card"><div class="avatar">U</div><h3>Uum H</h3><p>247223009</p></div>
    <div class="card"><div class="avatar">F</div><h3>Fauzan R</h3><p>247223010</p></div>
    <div class="card"><div class="avatar">M</div><h3>M. Dewanda</h3><p>247223011</p></div>
    <div class="card"><div class="avatar">T</div><h3>Taufik H</h3><p>247223012</p></div>
    <div class="card"><div class="avatar">F</div><h3>Fikri M</h3><p>247223013</p></div>
    <div class="card"><div class="avatar">L</div><h3>Lutfi H</h3><p>247223014</p></div>
  </div>
</section>

<footer class="footer">
  <p>© 2024 STI 2024 - Sistem dan Teknologi Informasi</p>
</footer>

</body>
</html>
