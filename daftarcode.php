<?php 
if (isset($_POST['daftar'])) {
	//ambil nilai
	$namadaf=strtoupper(htmlentities($_POST['nama']));
	$emaildaf=strtoupper(htmlentities($_POST['email']));
	$pass=strtoupper(htmlentities($_POST['pass']));
		try {
			
			if (empty($namadaf)) {
				$errordaftar='NAMA HARUS DIISI';
			}
			else if (empty($emaildaf)) {
				$errordaftar='EMAIL HARUS DIISI';
			}
			else if (empty($pass)) {
				$errordaftar='PASSWORD HARUS DIISI';
			}
			else{
				$query="insert into user(nama,email,password) values('$namadaf','$emaildaf','$pass')";
				$result=$link->exec($query);
				header('location:daftar.php?nama='.$namadaf);
			}
		} 
		catch (PDOException $e) {
			echo "koneksi ada yg salah dari daftar".$e->getMessage();
			die();
		}

}
else{
	$errordaftar='';
	$emaildaf='';
	$namadaf='';
}
