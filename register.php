<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>

<link rel="stylesheet" href="cssadmin-login/login.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    

<div class="auth-container">

  <!-- LEFT -->
  <div class="auth-left">

    <h1>🎓 STI 2024 Class</h1>

    <p>Buat akun baru dan mulai kelola kelasmu dengan mudah 🚀</p>
  </div>

  <!-- RIGHT -->
  <div class="auth-right">

    <form method="POST">

      <h2>Register</h2>

      <div class="input-group">
        <i class="fa fa-user"></i>
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
      </div>

      <div class="input-group">
        <i class="fa fa-id-card"></i>
        <input type="text" name="nim" placeholder="NIM" required>
      </div>

      <div class="input-group">
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="input-group">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <div class="input-group">
        <i class="fa fa-lock"></i>
        <input type="password" name="confirm" placeholder="Konfirmasi Password" required>
      </div>

      
      <button type="submit" name="register">Daftar</button>
      

      <p class="auth-link">
        Sudah punya akun? <a href="login.php">Login</a>
      </p>

    </form>

  </div>

</div>

</body>
</html>