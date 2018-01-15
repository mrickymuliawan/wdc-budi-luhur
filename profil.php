<?php 
	session_start();
	$_SESSION['nama']=$_GET['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="login">
	<h3>
		SELAMAT DATANG <?php echo $_GET['nama']; ?> <br>
		AKUN BRO<b style='color: #CD6155'>KOMPUTER</b> KAMU SUDAH SELESAI!
	</h3>
	<br>
	<p>Dengan akun ini kamu bisa memberi komentar pada artikel-artikel kami, dan kamu bisa melakukan pemesanan pc melalui halaman pemesanan kami.</p> Happy Shopping!:) <br><br>
	<a href="index.php">KEMBALI KE HOME SEBAGAI <?php echo $_GET['nama']; ?></a>
</div>
</body>
</html>