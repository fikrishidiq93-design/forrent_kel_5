<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard STI 2024</title>

<link rel="stylesheet" href="cssadmin-login/admin.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="admin-wrap">

  <!-- SIDEBAR -->
  <div class="sidebar">
    <h2>🎓 STI 2024 Class</h2>

    <p class="menu-title">MAIN MENU</p>

    <a href="#"><i class="fa fa-home"></i> Dashboard</a>
    <a href="#"><i class="fa fa-users"></i> Anggota</a>
    <a href="#"><i class="fa fa-book"></i> Mata Kuliah</a>
    <a href="#"><i class="fa fa-calendar"></i> Jadwal</a>
    <a href="#"><i class="fa fa-image"></i> Gallery</a>
    <a href="#"><i class="fa fa-user"></i> User</a>
    <a href="#"><i class="fa fa-cog"></i> Setting</a>

    <a href="logout.php" class="logout"><i class="fa fa-sign-out"></i> Logout</a>
  </div>

  <!-- CONTENT -->
  <div class="content">

    <div class="container-admin">

      <!-- TOPBAR -->
      <div class="topbar">
        <h3>Dashboard</h3>
        <div class="admin-user">👤 Admin</div>
      </div>

      <!-- WELCOME -->
      <div class="welcome">
        <h2>Selamat datang di Website STI 2024</h2>
        <p>Kelola jadwal, materi, dan tugas kuliah Anda dengan mudah</p>
      </div>

      <!-- CARDS -->
      <div class="cards">

        <div class="card-box">
          <div class="icon blue"><i class="fa fa-book"></i></div>
          <h2>24</h2>
          <span>Total Mata Kuliah</span>
        </div>

        <div class="card-box">
          <div class="icon cyan"><i class="fa fa-calendar"></i></div>
          <h2>5</h2>
          <span>Jadwal Hari Ini</span>
        </div>

        <div class="card-box">
          <div class="icon orange"><i class="fa fa-file"></i></div>
          <h2>8</h2>
          <span>Tugas Aktif</span>
        </div>

        <div class="card-box">
          <div class="icon green"><i class="fa fa-users"></i></div>
          <h2>42</h2>
          <span>Total Anggota</span>
        </div>

      </div>

      <!-- BOTTOM -->
      <div class="bottom">

        <!-- JADWAL -->
        <div class="box">
          <h4>Lihat Jadwal</h4>

          <div class="item">
            <div class="time">08:00</div>
            <div>
              <b>Pemrograman Web</b><br>
              <small>Dr. Budi Santoso</small>
            </div>
            <span class="badge online">Online</span>
          </div>

          <div class="item">
            <div class="time">10:00</div>
            <div>
              <b>Basis Data</b><br>
              <small>Prof. Siti Aminah</small>
            </div>
            <span class="badge room">R.301</span>
          </div>

          <div class="item">
            <div class="time">13:00</div>
            <div>
              <b>Algoritma</b><br>
              <small>Dr. Ahmad</small>
            </div>
            <span class="badge room">R.205</span>
          </div>

        </div>

        <!-- AKTIVITAS -->
        <div class="box">
          <h4>Aktivitas Terbaru</h4>

          <p><span class="dot blue"></span> Materi baru ditambahkan</p>
          <p><span class="dot orange"></span> Tugas baru tersedia</p>
          <p><span class="dot green"></span> Pengumuman penting</p>
        </div>

      </div>

    </div>

  </div>

</div>

</body>
</html>