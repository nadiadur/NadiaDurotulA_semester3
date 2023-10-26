<?php
session_start();//agar halaman admin tidak bocor

if (!isset($_SESSION['login'])) {
    header("location:index.php");
    exit;
    //untuk melakukan pengecekan apa sudah login atau belum jika belum akan dikembalikan ke index
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h2>Selamat Datang <?php echo $_SESSION['nama'] ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>