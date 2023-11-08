<?php
session_start();//memulai sesi php

if (!isset($_SESSION['login'])) {
    header("location:index.php");
    exit;
    //untuk melakukan pengecekan apa sudah login atau belum jika belum akan dikembalikan ke index
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/admin.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top text-uppercase">
  <a class="navbar-brand" href="#">
    <img src="talk.png" alt="Talk-Talk Logo"> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-search"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-user"></i></a>
      </li>
      
    </ul>
  </div>
</nav>
<section class="main py-5">
<div class="garis">
<h2>Selamat Datang <?php echo $_SESSION['nama'] ?></h2>
    <a href="logout.php">Logout</a>
</div>

<h1 class="text-center pb-4"></h1>
          <div class=" text-center control pb-4">
            <h2>AYO MENGENAL BAHASA PEMOGRAMAN!</h2>
          <ul>
            <li class="button " >Bahasa Pemograman</li>
            <li class="button " >W3 School</li>
          </ul>
        </div>
        
 <div>
<input type="button" onclick="window.location.href='https://www.w3schools.com/html/default.asp';" class="btn1 mt-4" value="Java Script">

<input type="button" onclick="window.location.href='https://www.w3schools.com/html/default.asp';"class="btn1 mt-4" value="HTML" >

<input type="button" onclick="window.location.href='https://www.w3schools.com/css/default.asp';" class="btn1 mt-4" value="CSS">

<input type="button" onclick="window.location.href='https://www.w3schools.com/php/default.asp';"class="btn1 mt-4" value="PHP" >

<input type="button" onclick="window.location.href='https://www.w3schools.com/python/default.asp';"class="btn1 mt-4" value="Python" >
</div>

</section>
<header></header>
<h1 class="text-center pb-4"></h1>
          <div class=" text-center control pb-4">
          <ul>
            <li class="button " >Bahasa Pemograman</li>
            <li class="button " >Petani Kode</li>
          </ul>
        </div>
        
 <div>
<input type="button" onclick="window.location.href='https://www.petanikode.com/javascript-dasar/';" class="btn2 mt-4" value="Java Script">

<input type="button" onclick="window.location.href='https://www.petanikode.com/html-dasar/';"class="btn2 mt-4" value="HTML" >

<input type="button" onclick="window.location.href='https://www.petanikode.com/css-untuk-pemula/';" class="btn2 mt-4" value="CSS">

<input type="button" onclick="window.location.href='https://www.petanikode.com/php-konsep/';"class="btn2 mt-4" value="PHP" >

<input type="button" onclick="window.location.href='https://www.petanikode.com/python-linux/';"class="btn2 mt-4" value="Python" >
</div>

</section>
   

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
    
  </body>
</html>


