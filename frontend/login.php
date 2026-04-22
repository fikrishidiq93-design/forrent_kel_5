<?php
session_start();

if(isset($_POST['login'])){
  if($_POST['username']=="admin" && $_POST['password']=="fikriganteng"){
    $_SESSION['login']=true;
    header("Location: admin/admin.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="cssadmin-login/login.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="login-body">

<div class="login-container">

  <div class="login-left">
    <h2><i class="fa fa-check-circle"></i> Admin Dashboard</h2>

    <h1>Welcome Back!</h1>
    <p>Please sign in to your account</p>

    <form method="post">

      <div class="input-box">
        <i class="fa fa-user"></i>
        <input type="text" name="username" placeholder="Username" required>
      </div>

      <div class="input-box">
        <i class="fa fa-lock"></i>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <i class="fa fa-eye toggle-pass" onclick="togglePassword()"></i>
      </div>

      <div class="login-options">
        <label><input type="checkbox"> Remember me</label>
        <a href="register.php">Register?</a>
      </div>

      <button name="login" class="btn-login">Login</button>
       <!-- OR -->
      <div class="or">Or</div>

      <!-- SOCIAL -->
      <div class="social">
        <div class="social-btn facebook"><i class="fab fa-facebook-f"></i></div>
        <a href="google/login.php" class="social-btn google">
  <i class="fab fa-google"></i>
</a>
        <div class="social-btn email"><i class="fa fa-envelope"></i></div>
      </div>

    </form>
  </div>

  <div class="login-right">
    <img src="img/login.png">
  </div>

</div>

<script>
function togglePassword(){
  var x = document.getElementById("password");
  x.type = x.type === "password" ? "text" : "password";
}
</script>

</body>
</html>