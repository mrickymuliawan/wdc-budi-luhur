<?php 
	session_start();
	include('library/koneksi.php');
	include('komencode.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Artikel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body style="background-image: url('pic/backgroundwhite.jpg')">

<!-- INCLUDEKAN NAVBAR -->
  <?php 
     	if (isset($_SESSION['nama'])) {
     		include('library/navbarlogin.php'); 
     	}
     	else{
     		include('library/navbar.php'); 
     	}
   ?>


	<div class="container artikel" >
		<div class="row">
			<div class="col-sm-8 text-center">
				<p class="text-justify">
					<span class="glyphicon glyphicon-home"></span> 
					<a href="index.php">HOME</a> / 
					<a href="artikel.php">ARTIKEL</a> / 
					<a href="artikel.php">PROSESOR</a>
				</p>
				<hr style="width: 100%">
				<h2>Preview Kinerja Prosesor AMD Athlon X4 845</h2>
				<p style="color: gray">14 November 2016 | Ricky | Artikel </p>
				<img src="pic/artikel/artikel21.jpg" class="img-responsive">
				<p>
					Awal bulan Febuari 2016 lalu, AMD mengumumkan beberapa produk baru mereka untuk soket FM2+, yang salah satunya adalah Athlon X4 845. Prosesor ini memiliki spesifikasi 4 core dengan base clock 3.5 GHz dan turbo 3.8 GHz.
					Sepintas, konfigurasi tersebut terlihat tidak terlalu menarik, karena AMD sendiri telah menghadirkan prosesor yang terlihat lebih kencang, seperti Athlon X4 860K, atau Athlon X4 880K yang baru diumumkan. Namun, jangan salah, prosesor Athlon X4 845 ini ternyata merupakan barang yang menarik, karena core yang digunakannya adalah “Excavator”, core yang sama dengan yang digunakan lini APU Carizzo! Ya, inilah “Carizzo” pertama yang hadir untuk desktop!
				</p>
				<img src="pic/artikel/artikel22.jpg" class="img-responsive">
				<p>
					Core Excavator dan APU Carizzo mempunyai kelebihan yaitu: Performa Tinggi, Lebih Hemat Daya
				</p>
				<img src="pic/artikel/artikel23.jpg" class="img-responsive">
				<p>
					Penggunaan core Excavator di prosesor ini tentu saja mengindikasikan bahwa prosesor ini akan memiliki karakteristik yang berbeda dengan prosesor Athlon X4 800-series yang lain, termasuk Athlon X4 860K dan Athlon X4 880K, yang menggunakan core Steamroller. Hal itu membuat kami penasaran akan prosesor baru yang satu ini. Untungnya, di awal minggu ini, kami berhasil mendapatkan prosesor baru tersebut untuk kami coba di lab. pengujian kami!
				</p>
				<img src="pic/artikel/artikel24.jpg" class="img-responsive">
				<p>
					Berbicara mengenai spesifikasi, seperti yang kami sebutkan di atas, prosesor Athlon X4 845 ini memiliki empat core dengan base clock 3.5 GHz dan turbo 3.8 GHz. Prosesor ini dilengkapi dengan L2 Cache total “hanya” sebesar 2 MB, berbanding Athlon X4 Steamroller yang memiliki L2 Cache total 4 MB. Prosesor ini masih diproduksi di fabrikasi 28 nm.
				</p>
				<img src="pic/artikel/artikel25.jpg" class="img-responsive">
				<p>
					Sebagai sebuah prosesor, bukan APU, Athlon X4 845 ini tidak dilengkapi dengan integrated graphics processor (IGP), sehingga kita harus menggunakan graphics card di dalam sistem dengan prosesor ini. Satu hal yang menarik dari Athlon X4 845, prosesor ini ternyata hanya menyediakan 8 lane PCIe 3.0. Apakah ini akan berimbas pada performa keseluruhan dari sistem saat dihadapkan dengan berbagai kebutuhan, termasuk untuk game? Kami akan membahasnya di artikel terpisah.
				</p>
				
				<p>
					<b>PREVIEW KINERJA</b><br>

					Sembari menunggu data-data lengkap review dari prosesor ini siap, kami akan terlebih dahulu memberikan preview kinerja untuk prosesor yang satu ini. Pengujian performa untuk preview ini, dan juga beberapa artikel lain yang akan kami sajikan, dilakukan di sistem dengan spesifikasi:
					<ul class="text-left">
						<li>
							Prosesor: AMD Athlon X4 845 dan Athlon X4 860K (sebagai pembanding)
						</li>
						<li>
							Motherboard: ASUS Crossblade Ranger, BIOS 1702
						</li>
						<li>
							RAM: Team Vulcan 2x4GB DDR3-1600 CL11-11-11
						</li>
						<li>
							VGA: MSI Radeon R7 370 2GB Armor 2X
						</li>
						<li>
							Storage: SSD HyperX Fury 120GB
						</li>
						<li>
							PSU: Enermax NAXN 500W
						</li>
						<li>
							Cooler: Stock Heatsink
						</li>

					</ul>
					</p>
					<img src="pic/artikel/artikel26.jpg" class="img-responsive">
					<i>
					Stock Heatsink dari Athlon X4 845. Heatsink ini memiliki rating 95 Watt, sementara prosesor Athlon X4 845 sendiri hanya memiliki rating 65 Watt.</i><br><br>
					<b>Pengujian Cinebench R15</b><br>
					<img src="pic/artikel/artikel27.jpg" class="img-responsive">
				<p>		
					Dari hasil Cinebench R15, terlihat bahwa Athlon X4 845, walaupun berjalan di clock yang lebih rendah (base: 3.5 GHz; turbo 3.8 GHz), mampu menghasilkan skor yang lebih tinggi dari Athlon X4 860K (base: 3.7 GHz; turbo: 3.9 GHz). Hal ini bisa jadi disebabkan karena core Excavator dari Athlon X4 845 memiliki efisiensi yang lebih baik dibandingkan dengan core Steamroller di Athlon X4 860K, yang salah satunya memungkinkan prosesor ini lebih sering berjalan di turbo. Namun, dari satu hasil ini saja, kita tentunya tidak bisa langsung menarik kesimpulan terkait kemampuan dari prosesor baru ini.
				</p>
				<p>
				sumber: <a href="http://www.jagatreview.com">Jagatreview.com</a>
				</p>	
				<hr>

				<div class=" row tag text-center">
				<h4>TAGS</h4>
				<ul>
					<li>
						<a href="artikel.php">Processor</a>	
					</li>
					<li>
						<a href="artikel.php">Preview</a>	
					</li>
					<li>
						<a href="artikel.php">AMD</a>	
					</li>
				</ul>
				</div>
				
				<div class="row bagikan">
				<h4>BAGIKAN KE MEDIA SOSIAL</h4>
					<div class="col-sm-4" >
						<img src="pic/gmail.jpg"> <a href="https://plus.google.com/">Google+</a>
					</div>
					<div class="col-sm-4" style="color: #1A5276 ">
						<img src="pic/facebook.png"> <a href="https://www.facebook.com/">Facebook</a>
					</div>
					<div class="col-sm-4" style="color: #7FB3D5 ">
						<img src="pic/twitter.png"> <a href="https://twitter.com/?lang=en">Twitter</a>
					</div>
				</div>




				<div class="row komen">

				<h3>KOMENTAR</h3>
				<?php  
					komentar(2);
				?>
				</div>
				<div class="row komen">
				<h3>TULIS KOMENTAR</h3>
					<form action="artikel2.php" method="post">
						<div class="col-sm-12 form-group">
						<?php 
							if (isset($_SESSION['nama'])) {
								echo 
								"<input type='text' name='namakomen' class='form-control' value='$_SESSION[nama]' readonly>";
							}
							else{
								echo 
								"<input type='text' name='namakomen' class='form-control' 
								placeholder='Nama Anda'>";
							}
						 ?>
							
						</div>
						<div class="col-sm-12 form-group">
							<textarea class="form-control" rows="5" name='komen' placeholder="Komentar"></textarea>
						</div>
						<input type="submit" name="" class="btn btn-danger btn-lg">
						<input type="hidden" name="kodeartikel" value=2>
					</form>
				</div>
			</div>



			<div class="col-sm-4">
				<?php include('library/sidebar.php') ?>
			</div>
		</div>
	</div>

	<!-- INCLUDEKAN FOOTER-->
<?php include('library/footer.php') ?>
	
</body>
</html>