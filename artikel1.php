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
				<h2>Intel Resmikan Prosesor Core i 7th Generation “Kaby Lake”</h2>
				<p style="color: gray">11 November 2016 | Ricky | Artikel </p>
				<img src="pic/artikel/artikel11.jpg" class="img-responsive">
				<p>
					Babak baru produk prosesor dari Intel akhirnya dimulai pada penghujung bulan Agustus 2016. Intel akhirnya meresmikan hadirnya gelombang pertama lini prosesor Core i 7th Generation mereka berbasiskan arsitektur CPU Kaby Lake. Pada gelombang pertama, prosesor Core i 7th Generation akan difokuskan pada lini U-Series dan Y-Series dimana umum digunakan pada perangkat notebook/laptop hemat daya dengan form factor ultra-thin dan 2-in-1. Sementara itu untuk sistem performa tinggi baik di platform desktop maupun notebook/laptop, bersiaplah untuk gelombang kedua dibulan Januari.
				</p>
				<img src="pic/artikel/artikel12.jpg" class="img-responsive">
				<p>
					Prosesor Core i 7th Generation “Kaby Lake” merupakan tahap optimalisasi dari skema PAO (Process-Architecture-Optimization) milik Intel. Pada tahap ini Intel melakukan penyempurnaan tidak hanya pada arsitektur CPU tetapi juga pada proses fabrikasi. Intel menyebut 14 nm+ (14 nanometer plus) untuk proses fabrikasi pada prosesor Core i 7th Generation “Kaby Lake”.
				</p>
				<img src="pic/artikel/artikel13.jpg" class="img-responsive">
				<p>
					Optimalisasi tersebut memungkinkan prosesor Core i 7th Generation “Kaby Lake” mencapai clock speed lebih tinggi dimana hal ini dapat diartikan meningkatnya performa komputasi. Menariknya, peningkatan tersebut TIDAK membuat nilai TDP prosesor Core i 7th Generation “Kaby Lake” turut meningkat dibandingkan pendahulunya (Skylake). Pengujian internal oleh Intel menunjukkan prosesor Core i7 7500U unggul sekitar 12% di atas i7 6500U pada benchmark SYSmark 2014 dan unggul sekitar 19% pada benchmark WebXPRT 2015.
				</p>
				<img src="pic/artikel/artikel14.jpg" class="img-responsive">
				<p>
					Prosesor Core i 7th Generation “Kaby Lake” dilengkapi IGP berbasiskan arsitektur Processor Graphics Gen9 atau serupa seperti milik Skylake. Oleh karena itu, IGP Kaby Lake seharusnya menawarkan performa grafis kurang lebih setara dengan IGP Skylake jika keduanya memiliki nilai clock speed yang sama. Walaupun begitu pada Core i 7th Generation “Kaby Lake”, Intel meningkatkan kemampuan Media Engine sehingga lebih baik dalam menangani konten video. Intel bahkan menambahkan unit khusus pada area hardware IGP Core i 7th Generation “Kaby Lake” yang disebut Fixed Function Media Engine.
				</p>
				<img src="pic/artikel/artikel15.jpg" class="img-responsive">
				<p>
					Fixed Function Media Engine memungkinkan IGP Core i 7th Generation “Kaby Lake” menangani proses encode video HEVC 10-bit dan VP9 (YouTube-format) 8-bit. Alhasil proses konversi video menjadi format tersebut kini dapat diakselerasi dengan mengaktifkan teknologi Intel Quick Sync. Sementara itu kemampuan proses decode ditingkatkan hingga video HEVC 10-bit dan VP9 10/8-bit.
				</p>
				<img src="pic/artikel/artikel16.jpg" class="img-responsive">
				<p>
					Hadirnya Fixed Function Media Engine tampaknya memungkinkan proses video playback tidak perlu tergantung pada komponen lain seperti unit CPU x86-64 sehingga dapat diistirahatkan untuk memangkas penggunaan daya listrik. Intel sendiri memiliki klaim daya tahan baterai hingga 9,5 jam saat perangkat Core i 7th Generation “Kaby Lake” digunakan untuk melakukan streaming  video 4K HEVC 10-bit. Sementara untuk streaming video 4K VP9, daya tahan baterai mencapai 7 jam.
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
						<a href="artikel.php">Berita</a>	
					</li>
					<li>
						<a href="artikel.php">Intel</a>	
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
					komentar(1);
				?>
				</div>
				<div class="row komen">
				<h3>TULIS KOMENTAR</h3>
					<form action="artikel1.php" method="post">
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
						<input type="hidden" name="kodeartikel" value=1>
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