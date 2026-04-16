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
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div style="padding:50px; text-align:center;">
  <h1>Dashboard Admin</h1>
  <p>Selamat datang 👋</p>

  <a href="logout.php">Logout</a>
</div>

</body>
</html>