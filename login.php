<?php 
session_start();
include('library/koneksi.php');
include('logincode.php');
include('daftarcode.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Brokomputer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
<?php include('library/navbar.php');?>
	<div class="container text-center login">
	<?php 
	if (isset($_GET['peringatan'])) {
		echo "
			<div class='alert alert-danger alert-dismissable'>
		    <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
		   	<h4>Harap Masuk Terlebih Dahulu</h4>
		  	</div>
		";
	}
	 ?>
		<div class="row">
		<h3>MASUK AKUN BRO<b style="color: #CD6155">KOMPUTER</b></h3>
			<div class="col-sm-6 col-sm-offset-3 col-sm-offset-3">
				<form action="login.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-envelope "></span>
						</div>
						<input type="text" name="email" placeholder="Email" class="form-control" 
						value="<?php echo $emailmas; ?>">
					</div>
				</div>
				
				<div class="form-group ">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-lock "></span>
						</div>
						<input type="password" name="pass" placeholder="Password" class="form-control">
					</div>
				</div>
				<div class="error">
					<h5><?php echo $errormasuk; ?></h5>
				</div>
					<input type="submit" name="login" value="LOGIN" class="btn btn-danger">
				</form>
			</div>
		</div>

	</div>
	<h3 class="text-center">ATAU DAFTAR?</h3>
	<div class="container text-center daftar">
		<div class="row ">
		<h3>PENDAFTARAN BRO<b style="color: #CD6155">KOMPUTER</b></h3>
			<div class="col-sm-6 col-sm-offset-3 col-sm-offset-3">
				<form action="login.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-user "></span>
						</div>
						<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" 
						value="<?php echo $namadaf; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-envelope "></span>
						</div>
						<input type="text" name="email" placeholder="Email" class="form-control"
						value="<?php echo $emaildaf; ?>">
					</div>
				</div>
				<div class="form-group ">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-lock "></span>
						</div>
						<input type="password" name="pass" placeholder="Password" class="form-control">
					</div>
				</div>
				<div class="error">
					<h5><?php echo $errordaftar; ?></h5>
				</div>	
					<input type="submit" name="daftar" value="DAFTAR" class="btn btn-danger">

					<input type="hidden" name="namahidden" value="<?php echo $namadaf; ?>">
				</form>
			</div>
		</div>

	</div>
	<?php include('library/footer.php') ?>
</body>
</html>