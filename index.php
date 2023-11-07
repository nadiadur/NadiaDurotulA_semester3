<?php
session_start();//memulai sesi php

include 'koneksi.php';

if (isset($_SESSION['login'])){
  header("location:admin.php");
  exit;
}//masuk ke admin

if (isset($_POST["login"])) {
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $_SESSION['login'] = $_POST['login'];

  $ambil = mysqli_query($koneksi,"SELECT * FROM user WHERE username ='$username'");
//jika ada username sama 
  if (mysqli_num_rows($ambil) == 1) {
    $data = mysqli_fetch_assoc($ambil);
    //jika nama dan password sudah ada maka akan diarahkan ke admin.php
    if (password_verify($password,$data['password'])){
    //agar halaman admin tidak bocor
      $_SESSION['nama'] = $data['nama'];
      header("location:admin.php");
      exit();
    }
    else {
      echo"<script>
      alert('username atau password salah');
      window.location = 'index.php';
      </script>";
    }

  }else {
      echo"<script>
      alert('username atau password salah');
      window.location = 'index.php';
      </script>";
    }
  }
  

?>



<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="" method="POST">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="registrasi.php">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>


  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>