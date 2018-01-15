<?php 
	session_start();
	include('library/koneksi.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Brokomputer Artikel</title>
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

	<div class="container artikel">
		<div class="row ">
			<div class="col-sm-8">
			<p class="text-justify">
					<span class="glyphicon glyphicon-home"></span> 
					<a href="index.php">HOME</a> / 
					<a href="artikel.php">ARTIKEL</a> 
				</p>
				
				<hr style="width: 100%">
			<div class="row item text-center" >
				<h3>Intel Resmikan Prosesor Core i 7th Generation “Kaby Lake”</h3>
				<div class="col-sm-5">
					<img src="pic/artikel/artikel11.jpg" class="img-responsive">
					<b >32 Views</b> <b class="tgl">11 November 2016 </b>
				</div>
				<div class="col-sm-7 text-justify">
					Babak baru produk prosesor dari Intel akhirnya dimulai pada penghujung bulan Agustus 2016. Intel akhirnya meresmikan hadirnya gelombang pertama lini prosesor Core i 7th Generation mereka berbasiskan arsitektur CPU Kaby Lake. Pada gelombang pertama, prosesor Core i 7th Generation akan difokuskan pada lini U-Series dan Y-Series dimana umum digunakan pada perangkat notebook/laptop hemat daya dengan form factor ultra-thin dan 2-in-1. Sementara itu untuk sistem performa tinggi baik di platform desktop maupun notebook/laptop, bersiaplah untuk gelombang kedua dibulan Januari.
					<a href="artikel1.php" class="btn btn-lg btn-danger">Baca Selengkapnya</a>
					
				</div>
				
			</div>
			<hr>

			
			<div class="row item text-center" >
				<h3>Preview Kinerja Prosesor AMD Athlon X4 845</h3>
				<div class="col-sm-5">
					<img src="pic/artikel/artikel22.jpg" class="img-responsive">
					<b >15 Views</b> <b class="tgl">14 November 2016 </b>
				</div>
				<div class="col-sm-7 text-justify">
					Awal bulan Febuari 2016 lalu, AMD mengumumkan beberapa produk baru mereka untuk soket FM2+, yang salah satunya adalah Athlon X4 845. Prosesor ini memiliki spesifikasi 4 core dengan base clock 3.5 GHz dan turbo 3.8 GHz. Sepintas, konfigurasi tersebut terlihat tidak terlalu menarik, karena AMD sendiri telah menghadirkan prosesor yang terlihat lebih kencang, seperti Athlon X4 860K, atau Athlon X4 880K yang baru diumumkan. Namun, jangan salah, prosesor Athlon X4 845 ini ternyata merupakan barang yang menarik, karena core yang digunakannya adalah “Excavator”, core yang sama dengan yang digunakan lini APU Carizzo! Ya, inilah “Carizzo” pertama yang hadir untuk desktop!
					<a href="artikel2.php" class="btn btn-lg btn-danger">Baca Selengkapnya</a>
				</div>
			</div>
		
			<hr>
			
			<div class="row item text-center" >
				<h3>Thermal Paste: Perlu Dipakai atau Tidak?</h3>
				<div class="col-sm-5">
					<img src="pic/artikel/artikel33.jpg" class="img-responsive">
					<b >10 Views</b> <b class="tgl">17 November 2016 </b>
				</div>

				<div class="col-sm-7 text-justify">
					Pada masa-masa libur panjang, banyak pengguna PC yang berpikir untuk membersihkan PC mereka dari debu dan kotoran yang menumpuk di dalamnya. Kegiatan membersihkan PC ini memang baik, terutama untuk membantu kelancaran aliran udara ke pendingin komponen-komponen di dalam PC, seperti prosesor dan VGA card. Membersihkan debu dan kotoran yang menumpuk di sela-sela heatsink tentunya akan mengembalikan peforma pendinginan HSF kembali ke titik optimal....
					<form method="post">
					<a href="artikel3.php" class="btn btn-lg btn-danger">Baca Selengkapnya</a>
				</div>
			</div>
		

			<hr>




		</div>

		<div class="col-sm-4">
				<?php include('library/sidebar.php') ?>
		</div>
	</div>
		
	</div>
	
				<?php include('library/footer.php') ?>
	
</body>
</html>