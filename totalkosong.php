<?php 
session_start(); 
include('library/koneksi.php');
if(isset($_SESSION['nama'])){
		$result=$link->query("select kode_pesan from pesanan where kode_pesan='$_SESSION[nama]1' ");
		if (!$rowcount=$result->rowCount()==null) {
			header('location:total.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transaksi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
<?php 
     	if (isset($_SESSION['nama'])) {
     		include('library/navbarlogin.php'); 
     	}
     	else{
     		include('library/navbar.php'); 
     	} 
     ?>

	<div class="container margin text-center">
		<h3>TIDAK ADA TRANSAKSI</h3>
		<h4><a href="pesan.php">Pesan PC disini</a></h4>
	</div>
<?php include('library/footer.php') ?>
</body>
</html>