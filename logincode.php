<?php 
if (isset($_POST['login'])) {
	//ambil nilai
	$emailmas=htmlentities($_POST['email']);
	$pass=htmlentities($_POST['pass']);
	
		try {
			$query="select * from user where email='$emailmas' and password='$pass'";
			$result=$link->query($query);
			$data=$result->fetch();
			$nama=$data['nama'];
			if (empty($emailmas)) {
				$errormasuk='EMAIL HARUS DIISI';
			}

			else if($rowcount=$result->rowCount()==null){
				$errormasuk='EMAIL ATAU PASSWORD SALAH';
			}
			else{
				$_SESSION['nama']=$nama;
				header("location:index.php");
			}
			
		} 
		catch (PDOException $e) {
			echo "koneksi ada yg salah dari login".$e->getMessage();
			die();
		}

}

else{
	$errormasuk='';
	$emailmas='';
}