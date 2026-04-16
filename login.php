<?php
session_start();

if(isset($_POST['login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if($user == "admin" && $pass == "123"){
    $_SESSION['login'] = true;
    header("Location: admin.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<div class="login-container">

  <!-- LEFT -->
  <div class="login-left">
    <h2><i class="fa-solid fa-circle-check"></i> Admin Dashboard</h2>

    <h1>Welcome Back!</h1>
    <p>Please sign in to your account</p>

    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

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
        <a href="#">Forgot Password?</a>
      </div>

      <button type="submit" name="login" class="btn-login">Login</button>

      <div class="or">Or</div>

      <div class="social">
        <div class="social-btn"><i class="fab fa-google"></i></div>
        <div class="social-btn"><i class="fab fa-facebook-f"></i></div>
      </div>

    </form>
  </div>

  <!-- RIGHT -->
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