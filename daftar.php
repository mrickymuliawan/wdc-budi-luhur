<?php 
include('library/koneksi.php');
if (isset($_POST['profil'])) {
	$alamat=strtoupper(htmlentities($_POST['alamat']));
	$nomor=htmlentities($_POST['nomor']);
	
	$error='';
	try {
			$result=$link->query("select nama from user order by id desc limit 1");
			$data=$result->fetch();
			$nama=$data['nama'];

			if(empty($alamat) or empty($nomor)){
				$error="HARAP ISI NOMOR DAN ALAMAT";
			}
			else if(!is_numeric($nomor)){
				$error="NOMOR HARUS ANGKA";
			}
			else {
				$query="update user set alamat='$alamat',nomor=$nomor where nama='$nama'";
				$result=$link->exec($query);
				header('location:profil.php?nama='.$nama);
			}
			
	} 
	catch (PDOException $e) {
		echo "koneksi ada yg salah dari profil".$e->getMessage();
		die();
	}
}

else{
	$error='';
	$alamat='';
	$nomor='';
}	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pendaftaran</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <div class="login">
 	
		<h3>
			SELAMAT BERGABUNG DI BRO<b style='color: #CD6155'>KOMPUTER </b>
		</h3>
		<br>
	 	<h4 class='text-center'>LENGKAPI PROFIL KAMU</h4> 
	 	<br>
	 	<form class="form-horizontal" method="post" action="daftar.php">
	 		<div class="form-group">
	 			<label for="nomor" class="control-label col-sm-3">NO. Handphone</label>
	 			<div class="col-sm-9">
	 				<input type="text" name="nomor" class="form-control" 
	 				value="<?php echo $nomor; ?>" >
	 			</div>
	 		</div>
	 		<div class="form-group">
	 			<label for="alamat" class="control-label col-sm-3">Alamat Lengkap</label>
	 			<div class="col-sm-9">
	 				<textarea class="form-control" name="alamat" ></textarea>
	 				
	 			</div>
	 			
	 		</div>
	 		<div class="error">
					<h5><?php echo $error; ?></h5>
					<input type="hidden" name="nama" value="<?php echo $nama; ?>">
			</div>
	 		<div class="form-group">
		 		<div class="col-sm-offset-9 col-sm-3">
		 			<input type="submit" name="profil" value="SUBMIT" class="btn btn-danger">
		 		</div>
	 		</div>
	 		
	 	</form>
</div>
 </body>
 </html>