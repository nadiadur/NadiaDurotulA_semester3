<?php

include'koneksi.php';

if(isset($_POST["submit"])){
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	//untuk inputan nama,username,dan password agar masuk ke database
	$cek_user = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
	$cek_login = mysqli_num_rows($cek_user);
//memberikan notif alert
	if($cek_login > 0){
		echo "<script>
		alert('username telah terdaftar');
		window.location = 'registrasi.php';
		</script>";
	}else{
		if($password1 !=$password2){
			echo "<script>
		alert('konfirmasi password tidak sesuai');
		window.location = 'registrasi.php';
		</script>";
		//memberikan akses keamanan pada password
		}else {
			$password = password_hash($password1, PASSWORD_DEFAULT);
			mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$username','$password')");
			echo "<script>
			alert('Data telah berhasil dikirim');
			window.location = 'index.php';
			</script>";
		}
		}
}

?>







<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="POST">
					<input class="text" type="text" name="nama" placeholder="Nama Lengkap" required="yes">
					<input class="text email" type="text" name="username" placeholder="username" required="yes">
					<input class="text" type="password" name="password1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password2" placeholder="Confirm Password" required="">
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Don't have an Account? <a href="index.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2023 Nadia Durrotul. All rights reserved  <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		
	</div>
	<!-- //main -->
</body>
</html>