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
					<a href="artikel.php">TIPS</a>
				</p>
				<hr style="width: 100%">
				<h2>Thermal Paste: Perlu Dipakai atau Tidak?</h2>
				<p style="color: gray">17 November 2016 | Ricky | Artikel </p>
				<p>
					Pada masa-masa libur panjang, banyak pengguna PC yang berpikir untuk membersihkan PC mereka dari debu dan kotoran yang menumpuk di dalamnya. Kegiatan membersihkan PC ini memang baik, terutama untuk membantu kelancaran aliran udara ke pendingin komponen-komponen di dalam PC, seperti prosesor dan VGA card. Membersihkan debu dan kotoran yang menumpuk di sela-sela heatsink tentunya akan mengembalikan peforma pendinginan HSF kembali ke titik optimal.
				</p>
				<img src="pic/artikel/artikel31.jpg" class="img-responsive">
				<p>	
					Satu hal yang perlu diingat, kegiatan yang seharusnya berimbas baik ini bisa malah bisa memperburuk keadaan jika dilakukan dengan tidak benar. Salah satu kesalahan yang sering terjadi adalah lupa mengoleskan atau secara sadar tidak mengoleskan thermalpaste ketika memasang HSF yang baru saja dibersihkan. Hal ini cukup dimaklumi, bila pengguna memang tidak mengerti apa efek dari penggunaan thermal paste, terutama untuk pengguna yang belum tahu benar seluk-beluk sebuah PC.<br><br>
					Tidak hanya pengguna awam saja, beberapa gamer dan PC enthusiast yang memang sudah mengerti fungsi thermalpaste, kadang tetap memasang heatsink pendingin mereka tanpa menggunakan thermalpaste dengan alasan tidak adanya stok thermalpaste pengganti, atau memang kebetulan lupa. Selama ini, mungkin beberapa dari kita yang mengganggap bahwa penggunaan thermal paste merupakan sesuatu yang wajib tidak benar-benar pernah mencoba separah apakah efek dari tidak digunakannya thermal paste ketika memasang pendingin prosesor. <br><br>
					Bagi para Overclocker, pendinginan yang optimal merupakan sebuah kewajiban yang tidak bisa dikompromi, maka dari itu melalui artikel ini, JagatOC akan mengulas seberapa besar resiko yang dihadapi oleh pengguna PC yang lupa mengoleskan thermal paste. Penasaran? Berikut pembahasannya!
				</p>
				<img src="pic/artikel/artikel32.jpg" class="img-responsive">
				
					<b>Berikut spesifikasi testbed yang kami gunakan pada pengujian ini :</b>
				<ul class="text-left">
					<li>
						Processor: Core i7-4790K [default: 4Ghz/4.2 GHz (4 Cores Turbo Boost), 1.15 V]
					</li>
					<li>
						CPU Cooler: Noctua NH-U14S
					</li>
					<li>
						Thermalpaste: Noctua NT-H1
					</li>
					<li>
						Memory: Kingston HyperX DDR3 – 1600 Mhz 2x 4 GB (XMP)
					</li>
					<li>
						Motherboard: Gigabyte Z87X-OC
					</li>
					<li>
						Graphic Card: GTX 465
					</li>
					<li>
						Casing: Corsair Carbide 400R
					</li>
					<li>
						Storage: Kingston HyperX 3K 120 GB
					</li>
					<li>
						Power Supply: Corsair AX1200
					</li>
					<li>
						Operating System: Windows 7 Ultimate 64-Bit SP 1
					</li>
					
					
				</ul>

				<b>Program yang Digunakan</b><br>
				<ul class="text-left">
						<li>
							LinX 0.6.4 – Aplikasi in kami gunakan untuk memberi beban kerja kepada prosesor. Dengan aplikasi ini, kami juga sekaligus membebani Memory Controller pada prosesor dengan mengatur agar LinX memenuhi penggunaan memory sebanyak 7000 MB.
						</li>
						<li>
							Core Temp 1.0 RC3 – Aplikasi ini digunakan untuk memantau suhu maksimum dan minimum prosesor selama pengujian.
						</li>
						<li>
							CPU-Z 1.71.0 – Aplikasi ini digunakan untuk memberikan informasi mengenai sistem yang sedang berjalan.
						</li>
					</ul>
				<p>
					<b>Konfigurasi Prosesor</b><br>
					Pada pengujian kali ini, kami menggunakan prosesor Intel Core i7 4790K yang berjalan pada kecepatan 4,2 GHz secara terus-menerus dengan mematikan fitur power-saving agar mendapatkan hasil pengujian yang stabil dan dapat diulang dengan hasil yang sama. Agar prosesor i7 4790K dapat berjalan pada kecepatan 4,2 GHz di ke-4 core miliknya, kami menggunakan  tegangan VCore sebesar 1.15V pada prosesor ini.
				</p>
				<p>
					<b>Skenario pengujian kami sebagai berikut:</b><br>
					
					Memberikan Full Load kepada CPU selama +/- 15 Menit dengan menggunakan program LinX 0.6.4 dan Idle Time +/- 3 Menit. <br>
					Catatan: Keadaan idle adalah keadaan sistem didiamkan setelah mendapatkan load setelah pengujian.
					Dengan skenario pengujian ini, mari kita lihat performa dari heatsink Noctua NH-U14S dalam menjinakkan panas dari Core i7-4790K tanpa menggunakan thermal paste.	
				</p>

				
				<img src="pic/artikel/artikel33.jpg" class="img-responsive">
				<p>
					<i>
						Sebelum memasang heatsink ini kembali pada prosesor, kami memastikan untuk membersihkan residu thermalpaste pada permukaan dasar heatsink dan prosesor yang kami gunakan dengan cairan pembersih ArctiClean
					</i>
				</p>
				<img src="pic/artikel/artikel34.jpg" class="img-responsive">
				<p>
					Untuk kebutuhan perbandingan, setelah kami menguji performa pendinginan heatsink Noctua NH-U14S tanpa menggunakan thermal paste. Kami juga melakukan pengujian performa pendinginan heatsink ini dengan menggunakan thermal paste Noctua NT-H1 untuk melihat sebera besar efek negatif yang ditimbulkan dari penggunaan heatsink tanpa thermal paste. <br><br>
					<b>Hasil Pengujian</b> <br>
				</p>

				<img src="pic/artikel/artikel35.jpg" class="img-responsive">
				<img src="pic/artikel/artikel36.jpg" class="img-responsive">
				<p>
					Suhu yang tercantum dalam grafik merupakan suhu rata-rata dari seluruh core yang ada pada prosesor Intre Core i7 4790K yang digunakan dalam pengujian efek negatif yang terjadi pada heatsink yang tidak diberi thermal paste. Berikut hasil data suhu panas prosesor Intel Core i7 4790K pada saat diberi beban kerja penuh dan pada saat idle.
				</p>

				<p>
					<b>KESIMPULAN</b> <br>
					Dari keseluruhan hasil pengujian kami dapatkan, penggunaan thermal paste pada heatsink merupakan hal yang sangat penting dan tidak boleh dilupakan. Kita semua sudah melihat sebuah heatsink berukuran besar seperti Noctua NH-U14S saja bisa mengalami penurunan performa pendinginan yang signifikan, sehingga membuat suhu panas prosesor menjadi 19 oC lebih panas pada saat tidak diolesi thermal paste. 
					<br><br>
					Pada pengujian kali ini kami memang sengaja menggunakan heatsink pendingin berukuran besar agar dapat menjaga suhu prosesor yang kami gunakan tetap berada pada suhu operasi yang aman. Kami tidak berani menggunakan heatsink bawaan Intel pada pengujian ini karena kami masih menyayangi prosesor Core i7 4790K yang kami gunakan sebagai testbed pengujian kali ini. :)
					<br><br>
					Lalu bagaimana dengan nasib pengguna heatsink pendingin bawaan yang lupa tidak menggunakan thermal paste? Kemungkinan besar kita bisa saja melihat suhu prosesor mecapai 100 oC pada saat mendapatkan beban kerja yang berat. Selain itu, mereka akan mengalami kejadian PC yang mati mendadak ataupun mendapatkan komputer PC yang lambat, karena sistem keamanan yang diterapkan pada prosesor generasi saat ini yang akan mengurangi kecepatan pada saat kepanasan ataupun oleh fitur keamanan motherboard yang akan mematikan sistem PC pada saat terjadi overheat pada prosesor.
					<br>
					<b>Jadi, pentingkah penggunaan thermal paste? TENTUNYA PENTING!</b>
				</p>
				<p>
				sumber: <a href="http://www.jagatreview.com">Jagatreview.com</a>
				</p>	
				<hr>

				<div class=" row tag text-center">
				<h4>TAGS</h4>
				<ul>
					<li>
						<a href="artikel.php">Tips</a>	
					</li>
					<li>
						<a href="artikel.php">Heatsink</a>	
					</li>
					<li>
						<a href="artikel.php">Pendingin</a>	
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
					komentar(3);
				?>
				</div>
				<div class="row komen">
				<h3>TULIS KOMENTAR</h3>
					<form action="artikel3.php" method="post">
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
						<input type="hidden" name="kodeartikel" value=3>
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