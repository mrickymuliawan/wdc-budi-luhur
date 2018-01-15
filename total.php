<?php 
	session_start();
	include('library/koneksi.php');
	function ambilkode($kode){
			global $link;
			$result=$link->query("select * from part where kode_part='$kode'");
			global $data;
			$data=$result->fetch();
			
		}
	if (isset($_POST['cancelpesan'])) {
		$result=$link->exec("delete from pesanan where kode_pesan='$_SESSION[nama]1' ");
		header('location:totalkosong.php');
	}
	else if (isset($_POST['buatpc']) or isset($_POST['paket1'])
		 or isset($_POST['paket2']) or isset($_POST['paket3']) or isset($_POST['paket4'])) {
		$result=$link->query("select kode_pesan from pesanan where kode_pesan='$_SESSION[nama]1' ");
		if($rowcount=$result->rowCount()){
			$sudahpesan="ya";
		}
		else if(!isset($_SESSION['nama'])){
			header('location:login.php?peringatan=ya');
		}
		else{
			try {
				//jika paket 
				if (isset($_POST['paket1'])) {
					$result=$link->exec("insert into pesanan values 
						('$_SESSION[nama]1','$_SESSION[nama]','PAKET OFFICE',
						'$_POST[paket1]','$_POST[paket1]','menunggu pembayaran')");
				}
				else if (isset($_POST['paket2'])) {
					$result=$link->exec("insert into pesanan values 
						('$_SESSION[nama]1','$_SESSION[nama]','PAKET MIN GAMING',
						'$_POST[paket2]','$_POST[paket2]','menunggu pembayaran')");
				}
				else if (isset($_POST['paket3'])) {
					$result=$link->exec("insert into pesanan values 
						('$_SESSION[nama]1','$_SESSION[nama]','PAKET MID GAMING',
						'$_POST[paket3]','$_POST[paket3]','menunggu pembayaran')");
				}
				else if (isset($_POST['paket4'])) {
					$result=$link->exec("insert into pesanan values 
						('$_SESSION[nama]1','$_SESSION[nama]','PAKET FULL GAMING',
						'$_POST[paket4]','$_POST[paket4]','menunggu pembayaran')");
				}
				else{
				$kodecpu=$_POST['cpu'];
				$kodemotherboard=$_POST['motherboard'];
				$kodevga=$_POST['vga'];
				$koderam=$_POST['ram'];
				$kodehdd=$_POST['hdd'];
				$kodepsu=$_POST['psu'];
				$kodemonitor=$_POST['monitor'];
				$kodecase=$_POST['case'];
				$total=0;
				$part=array(
							$kodecpu,$kodemotherboard,$kodevga,$koderam,$kodehdd,$kodepsu,$kodemonitor,$kodecase
						);
				for ($i=0; $i <count($part) ; $i++) { 
					$result=$link->query("select harga from part where kode_part='$part[$i]' ");
					$data=$result->fetch();
					$total=$total+$data['harga'];
				}

				for ($i=0; $i<count($part) ; $i++) { 
					ambilkode($part[$i]);
					$query="insert into pesanan values 
					('$_SESSION[nama]1','$_SESSION[nama]','$data[nama_part]','$data[harga]','$total','menunggu pembayaran')";
					$result=$link->exec($query);
					
				}
				//$result=$link->exec("insert into pesanan (kode_pesan,total) 
						//values ('$_SESSION[nama]1','$total') ");
				}
			} 
			catch (PDOException $e) {
				echo "koneksi ada yg salah dari login".$e->getMessage();
				die();
			}
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

     <div class="container margin">
     	<div class="row">

     	<?php 
     		if (isset($sudahpesan)) {
     			
     			echo "
     				<div class='alert alert-danger alert-dismissable'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
					<h4>KAMU SUDAH MEMESAN, HARAP LAKUKAN PEMBAYARAN TERLEBIH DAHULU</h4>
					 </div>
     			";
     		}
     	 ?>
     		<div class="col-sm-6 table-responsive">
		     
		     			<h3>INFORMASI TRANSAKSI</h3>
		     	
		     			<table class="table">
		     			<thead>
		     				<td></td>
		     				<td><b>ITEM</b></td>
		     				<td><b>HARGA</b></td>
		     			</thead>
		     			<?php 
		     			$no=1;
		     			
		     				$result=$link->query("select*from pesanan
		     									where kode_pesan='$_SESSION[nama]1' ");
		     				while ($data=$result->fetch()) {
		     					
		     					echo "
		     					<tr>
		     						<td>
		     							$no
		     						</td>
		     						<td>
			     						$data[nama_part]
			     					</td>
			     					<td>
			     						Rp. $data[harga]
			     					</td>
		     					</tr>

		     					";
		     					$total=$data['total'];
		     					$no++;
		     				}
		     					
		     			
		     			 ?>
		     			
		     	
		     			</table>
		     
		     			<h3>TOTAL: <?php echo "Rp. $total"; ?></h3>
		     			<form action="total.php" method="post">
		     				<button type="submit" name='cancelpesan' value="ya" class="btn btn-danger">
		     					BATALKAN PESANAN
		     				</button>
		     			</form>
		     </div>
		     <div class="col-sm-6">
		     	<div class="row">
		     		<h3>DIKIRIM KE</h3>
		     		<div class="col-sm-4">
		     			<h5><b>Nama Pemesan: </b></h5> 
		     			<h5><b>Alamat: </b></h5>	
		     			<h5><b>Kode: </b></h5>
		     			<h5><b>Status: </b></h5>
		     		</div>
		     		<div class="col-sm-8">
		     			<?php 
		     			$result=$link->query("select alamat from user where nama='$_SESSION[nama]' ");
		     			$data=$result->fetch();
		     			echo "<h5>$_SESSION[nama] </h5> ";
		     			echo "<h5>$data[alamat] </h5>";
		     			echo "<h5>$_SESSION[nama]1 </h5>";
		     			echo "Menunggu Pembayaran";
		     		 ?>	
		     		</div>	
				</div>



		     		<div class="row rowcp2">
		     		<h3>KONFIRMASI PEMBAYARAN VIA</h3>
					<div class="col-sm-12">
						<img src="pic/gmail.jpg"> brokomputer@gmail.com 
					</div>
					<div class="col-sm-12">
						<img src="pic/line.jpg"> brokomputerline
					</div>
					<div class="col-sm-12">
						<img src="pic/watsap.jpg"> +6283815219298
					</div>
		     	</div>	
		     </div>

     	</div>

     	<div class="row text-center">
     		
		     <h3>Silahkan lakukan pembayaran ke rekening berikut</h3>
		     <h4>BNI: 123782618 A/N M. Ricky Muliawan</h4>
     	</div>
     </div>

     <?php include('library/footer.php') ?>
</body>
</html>