 <?php 
session_start();
if(isset($_GET['keluar'])){
	session_unset();
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Brokomputer: solusi pc anda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	
</head>
<body  id="home" data-spy="scroll" data-target=".navbar" data-offset="200" > 
    
     <?php 
     	if (isset($_SESSION['nama'])) {
     		include('library/navbarlogin.php'); 
     	}
     	else{
     		include('library/navbar.php'); 
     	}
     ?>

<!-- *************************  BG1  ************************* --> 
	<div class="container-fluid bg1 text-center">
		<div class="row row1">
			<div class="col-sm-8 text-center col1">
				<h3 style="color:">CARI KOMPUTER SESUAI KEBUTUHAN?</h3>
				<h3><b style="letter-spacing: 1px">BRO</b><b style="letter-spacing: 1px;color:#CD6155">KOMPUTER</b> SOLUSINYA!</h3>
				<hr style="width: 100%;border:solid white 1px">
					<div class="row">
						<div class="col-sm-6 col11" >
							<table class="tb1" >
								<tr>
									<td><span class="glyphicon glyphicon-ok"></span> </td>
									<td>GRATIS KONSULTASI</td>
								</tr>
								<tr>
									<td><span class="glyphicon glyphicon-ok"></span> </td>
									<td>GRATIS ONGKIR</td>
								</tr>
								<tr>
									<td><span class="glyphicon glyphicon-ok"></span> </td>
									<td>TEKNISI BERPENGALAMAN</td>
								</tr>
							</table>
							
							
						</div>

						<div class="col-sm-6">
							<table>
								<tr>
									<td><span class="glyphicon glyphicon-ok"></span> </td>
									<td>GARANSI RESMI</td>
								</tr>
								<tr>
									<td><span class="glyphicon glyphicon-ok"></span> </td>
									<td>PERAWATAN SELAMANYA</td>
								</tr>
								<tr>
									<td><span class="glyphicon glyphicon-ok"></span> </td>
									<td>KOSTUMISASI SESUKA HATI</td>
								</tr>
							</table>
						</div>
					</div> 
					<a href="pesan.php" class="btn btn-danger btn-lg btnsatu">
						PILIH PAKET PC <span class="glyphicon glyphicon-chevron-down"></span>
					</a>
					ATAU
					<a href="pesan.php" class="btn btn-danger btn-lg btndua">
						CUSTOM PC <span class="glyphicon glyphicon-cog"></span>
					</a>
			</div>
			
			<?php 
				if (isset($_SESSION['nama'])) {
			?>
			<div class="col-sm-4 col2">
				<div class="panel panel-default text-center panelfullgame panelpaket">
						<div class="panel-heading panelhead1">
							<h4>MIN GAMING (AMD APU)</h4>
						</div>
						<div class="panel-heading panelhead2">
							<h3>RP. 5.100.000</h3>
						</div>
						<div class="panel-body text-justify">
							<div><span class="glyphicon glyphicon-ok"> AMD A8-7600 3.1 Ghz</span></div>
							<div><span class="glyphicon glyphicon-ok"> ASUS A68HM-PLUS </span></div>
							<div><span class="glyphicon glyphicon-ok"> Seagate 1TB SATA3  </span></div>
							<div><span class="glyphicon glyphicon-ok"> Team Elite DDR3 8GB 2X4 </span></div>
							<div><span class="glyphicon glyphicon-ok"> Power Logic Microtron T2Z</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG LED 19"</span></div>
							


						</div>
						<div class="panel-footer">
							<a href="pesan.php" class="btn btn-danger">Selengkapnya</a>
						</div>
					</div>
			</div>
			<?php } 

			else{
			?>


			<div class="col-sm-4 col2">
				<div class="panel panel-default text-center panelform">
				<form class="form-horizontal" method="post" action="login.php">	
					<div class="panel-heading">
						<h3>DAFTAR SEKARANG </h3>
						<h5>UNTUK MENDAPATKAN PROMO MENARIK</h5>

					</div>
					<div class="panel-body">
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-user "></span>
								</div>
								<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control input-lg">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-envelope "></span>
								</div>
								<input type="text" name="email" placeholder="Email" class="form-control input-lg">
							</div>
						</div>
						<div class="form-group ">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-lock "></span>
								</div>
								<input type="password" name="pass" placeholder="Password" class="form-control input-lg">
							</div>
						</div>
						
					</div>
					<div class="panel-footer">
						<input type="submit" name="daftar" value="DAFTAR" class="btn btn-danger">
					</div>
					</form>
				</div>
			</div>
			<?php } ?>


		</div>
	</div>

<!-- *************************  BG1A  ************************* --> 
	<div class="container-fluid bg1a text-center">
		<div class="row">
			<div class="col-sm-4">
				<p>
				<span class="glyphicon glyphicon-cog"></span> 500++ Perakitan PC</p>
			</div>
			<div class="col-sm-4">
				<p>
				<span class="glyphicon glyphicon-wrench"></span> 300++ Reparasi PC</p>
			</div>
			<div class="col-sm-4">
				<p>
				<span class="glyphicon glyphicon-cloud-upload"></span> 1000++ Instalasi Software</p>
			</div>
		</div>
	</div>

<!-- *************************  BG1B  ************************* --> 
	<div class="container-fluid bg1b text-center">
		<div class="row">
			<div class="col-sm-5">
				<h3> FOLLOW KAMI DI <span class="glyphicon glyphicon-chevron-right"></span> </h3>
			</div>
			<div class="col-sm-7 ">
				<div class="row rowsocial">
					<div class="col-sm-4">
						<img src="pic/instagram.jpg"> BROKOMPUTER
					</div>
					<div class="col-sm-4">
						<img src="pic/facebook.png"> BROKOMPUTER
					</div>
					<div class="col-sm-4">
						<img src="pic/twitter.png"> BROKOMPUTER
					</div>
				</div>		
			</div>
		</div>		
	</div>



<!-- *************************  BG2  ************************* --> 
	<div class="container-fluid bg2 text-center" id="tentang">
	
		<div class="row ">
			<div class="col-sm-8 text-justify col21">
				<h3 class="text-center">TENTANG <b style="color: #2C3E50;letter-spacing: 2px ">BROKOMPUTER</b> <br><span class="glyphicon glyphicon-chevron-down"></span></h3>
				<p><b>BROKOMPUTER adalah perusahaan yang menerima jasa perakitan komputer yang sudah berdiri sejak 2014. BROKOMPUTER sudah lama berkecimpung di dunia hardware dan software komputer sehingga sudah mempunyai banyak pengalaman dibidang komputer </b></p>
				<p>Kami bekerja sama dengan merk-merk hardware terkenal untuk memenuhi kebutuhan suplai part-part komputer, sebut saja asus,asrock,msi, dll. Perakitan komputer dikerjakan oleh tangan-tangan terampil yang sudah sangat menguasai seluk-beluk komputer dan sudah melayani sekitar 300++ perakitan komputer, 300++ reparasi, dan 1000++ instalasi software.</p>
			</div>
			<div class="col-sm-4 col22">
				<img src="pic/kami.png" class="img-responsive kami">
			</div>
			
		</div>
	</div>



<!-- *************************  BG3  ************************* --> 
	<div class="container-fluid bg3 text-center" id="kelebihan">
		<h3>KELEBIHAN KAMI <br><span class="glyphicon glyphicon-chevron-down"></span></h3>
		<div class="row rowsatu">
			<div class="col-sm-3  kecil kcl1 ">
				<span class="glyphicon glyphicon-usd glyphkecil" ></span>
				<h4>MINIM BIAYA</h4>
				<p>Harga yang sangat terjangkau dengan segala kelebihan yang kami tawarkan.</p>
			</div>
			<div class="col-sm-3  kecil kcl">
				<span class="glyphicon glyphicon-send glyphkecil" ></span>
				<h4>GRATIS PENGIRIMAN</h4>
				<p>Pengiriman hardware gratis didaerah jakarta, selain itu kami memakai jasa pengiriman</p>
			</div>
			<div class="col-sm-3  kecil kcl1">
				<span class="glyphicon glyphicon-wrench glyphkecil" ></span>
				<h4>PERAWATAN</h4>
				<p>Jika ada trouble pada hardware atau software, kami siap membantu</p>
			</div>
			<div class="col-sm-3  kecil kcl">
				<span class="glyphicon glyphicon-cog glyphkecil" ></span>
				<h4>KUSTOMISASI</h4>
				<p>Kustomisasi penuh pada pc anda, spesifikasi tinggal pilih dan kirim ke kami</p>
			</div>
		</div>
		<div class="row rowdua">
			<div class="col-sm-3  kecil kcl">
				<span class="glyphicon glyphicon-envelope glyphkecil" ></span>
				<h4>RESPON CEPAT</h4>
				<p>Kami akan secepat mungkin merespon jika anda membutuhkan</p>
			</div>
			<div class="col-sm-3  kecil kcl1">
				<span class="glyphicon glyphicon-certificate glyphkecil" ></span>
				<h4>GARANSI</h4>
				<p>Semua hardware bergaransi resmi, dan terjamin keasliannya</p>
			</div>
			<div class="col-sm-3  kecil kcl">
				<span class="glyphicon glyphicon-random glyphkecil" ></span>
				<h4>MANAJEMEN KABEL</h4>
				<p>Peletakan kabel menggunakan manajemen kabel yang rapi dan bersih</p>
			</div>

			<div class="col-sm-3  kecil kcl1">
				<span class="glyphicon glyphicon-play-circle glyphkecil"></span>
				<h4>SIAP PAKAI</h4>
				<p>Sudah terinstall windows dan game sesuai pilihan anda, siap tinggal pakai</p>
			</div>
		</div>
		</div>

<!-- *************************  BG4  ************************* --> 	
		<div class="container-fluid bg4 text-center" id="portofolio">
			<h3>PORTOFOLIO <br><span class="glyphicon glyphicon-chevron-down"></span></h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="pic/komputer1.jpg" >
						<h3>THE MINIMALIST </h3>
						<p><span class="glyphicon glyphicon-plus"></span>AMD Kaveri Athlon X4-860K 3.7Ghz </p>
						<p><span class="glyphicon glyphicon-plus"></span>ZOTAC GEFORCE GTX 750 TI 4GB DDR5 </p>
						<p><span class="glyphicon glyphicon-plus"></span>MSI A68HM-E33 V2 </p>
						<p><span class="glyphicon glyphicon-plus"></span>Team Elite Plus DDR3 Dual Channel 8GB (2X4GB) </p>
						<p><span class="glyphicon glyphicon-plus"></span>Corsair VS450W 80 PLUS BRONZE </p>
						<p><span class="glyphicon glyphicon-plus"></span>ASUS DVDRW 24X SATA</p>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="pic/komputer2.jpg" >
						<h3>MID GAMING</h3>
						<p><span class="glyphicon glyphicon-plus"></span>Intel Core i3-4170 3.7Ghz</p>
						<p><span class="glyphicon glyphicon-plus"></span>Sapphire RX 470 4GB DDR5 Nitro OC </p>
						<p><span class="glyphicon glyphicon-plus"></span>ASUS H81M-E</p>
						<p><span class="glyphicon glyphicon-plus"></span>Team Elite Plus DDR3 Dual Channel 8GB (2X4GB) </p>
						<p><span class="glyphicon glyphicon-plus"></span>Super Flower BRONZE FX 550W 80+ BRONZE </p>
						<p><span class="glyphicon glyphicon-plus"></span>ASUS DVDRW 24X SATA</p>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="pic/komputer3.jpg" >
						<h3>GAMING XTREME</h3>
						<p><span class="glyphicon glyphicon-plus"></span>Intel Core i7-6700 3.4Ghz</p>
						<p><span class="glyphicon glyphicon-plus"></span>Zotac GeForce GTX 1050 Ti 4GB DDR5</p>
						<p><span class="glyphicon glyphicon-plus"></span>MSI B150M BAZOOKA PLUS </p>
						<p><span class="glyphicon glyphicon-plus"></span>GEIL DDR4 FORZA Dual Channel 16GB (2x8GB)  </p>
						<p><span class="glyphicon glyphicon-plus"></span>Super Flower BRONZE FX 550W 80+ BRONZE </p>
						<p><span class="glyphicon glyphicon-plus"></span>ASUS DVDRW 24X SATA</p>

					</div>
				</div>
			</div>
		</div>


<!-- *************************  BG5  ************************* --> 
		<div class="container-fluid bg5 text-center" id="paket">
			<h3 style="color: #212F3C;margin-bottom: 50px;">PAKET KOMPUTER <br><span class="glyphicon glyphicon-chevron-down"></span></h3>
			<form action="total.php" method="post">
			<div class="row">
				<div class="col-sm-3">
					<div class="panel panel-default text-center paneloffice panelpaket">
						<div class="panel-heading panelhead1">
							<h4>OFFICE PC</h4>
						</div>
						<div class="panel-heading panelhead2">
							<h3>RP. 3.500.000</h3>
						</div>
						<div class="panel-body text-justify">
							<div><span class="glyphicon glyphicon-ok"> Intel G3220 3.0 Ghz </span></div>
							<div><span class="glyphicon glyphicon-ok"> ASRock H81M-VG4 </span></div>
							<div><span class="glyphicon glyphicon-ok"> Seagate 500GB SATA3  </span></div>
							<div><span class="glyphicon glyphicon-ok"> Team Elite DDR3 2GB </span></div>
							<div><span class="glyphicon glyphicon-ok"> Dazumba DE 210 380W</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG LED 16"</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG DVDRW 24X SATA</span></div>
							<div><span class="glyphicon glyphicon-ok"> Logitech Classic MK100 </span></div>

						</div>
						<div class="panel-footer">
							<button type="submit" name="paket1" value="3500000" class="btn btn-danger btnijo">
								PESAN
							</button>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel panel-default text-center panelmingame panelpaket">
						<div class="panel-heading panelhead1">
							<h4>MIN GAMING (AMD APU)</h4>
						</div>
						<div class="panel-heading panelhead2">
							<h3>RP. 5.100.000</h3>
						</div>
						<div class="panel-body text-justify">
							<div><span class="glyphicon glyphicon-ok"> AMD A8-7600 3.1 Ghz</span></div>
							<div><span class="glyphicon glyphicon-ok"> ASUS A68HM-PLUS </span></div>
							<div><span class="glyphicon glyphicon-ok"> Seagate 1TB SATA3  </span></div>
							<div><span class="glyphicon glyphicon-ok"> Team Elite DDR3 8GB 2X4 </span></div>
							<div><span class="glyphicon glyphicon-ok"> Power Logic Microtron T2Z</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG LED 19"</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG DVDRW 24X SATA</span></div>
							<div><span class="glyphicon glyphicon-ok"> Rexus Warfaction VR1 </span></div>
							<div><span class="glyphicon glyphicon-ok"> Enermax LEPA 450w</span></div>


						</div>
						<div class="panel-footer">
							<button type="submit" name="paket2" value="5100000" class="btn btn-danger btnbiru">
								PESAN
							</button>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel panel-default text-center panelmidgame panelpaket">
						<div class="panel-heading panelhead1">
							<h4>MID GAMING </h4>
						</div>
						<div class="panel-heading panelhead2">
							<h3>RP. 7.300.000</h3>
						</div>
						<div class="panel-body text-justify">
							<div><span class="glyphicon glyphicon-ok"> AMD X4 860k 3.7 Ghz </span></div>
							<div><span class="glyphicon glyphicon-ok"> Sapphire RX 460 4GB </span></div>
							<div><span class="glyphicon glyphicon-ok"> MSI A68HM-E33 V2  </span></div>
							<div><span class="glyphicon glyphicon-ok"> Seagate 1TB SATA3  </span></div>
							<div><span class="glyphicon glyphicon-ok"> Team Elite DDR3 8GB 2X4</span></div>
							<div><span class="glyphicon glyphicon-ok"> Cube Gaming Mythos</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG LED 19"</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG DVDRW 24X SATA</span></div>
							<div><span class="glyphicon glyphicon-ok"> Rexus Warfaction VR1 </span></div>
							<div><span class="glyphicon glyphicon-ok"> Super Flower FX 450W</span></div>
							

						</div>
						<div class="panel-footer">
							<button type="submit" name="paket3" value="7300000" class="btn btn-danger btnoren">
								PESAN
							</button> 
						</div>
					</div>	
				</div>
				<div class="col-sm-3">
					<div class="panel panel-default text-center panelfullgame panelpaket">
						<div class="panel-heading panelhead1">
							<h4>FULL GAMING </h4>
						</div>
						<div class="panel-heading panelhead2">
							<h3>RP. 10.300.000</h3>
						</div>
						<div class="panel-body text-justify">
							<div><span class="glyphicon glyphicon-ok"> Intel Core i7-6700 3.4Ghz </span></div>
							<div><span class="glyphicon glyphicon-ok"> Sapphire RX 460 4GB </span></div>
							<div><span class="glyphicon glyphicon-ok"> MSI H110M-PRO VH PLUS   </span></div>
							<div><span class="glyphicon glyphicon-ok"> Seagate 1TB SATA3  </span></div>
							<div><span class="glyphicon glyphicon-ok"> Deepcool Gammax 300 </span></div>
							<div><span class="glyphicon glyphicon-ok"> Team Elite DDR4 8GB 2X4</span></div>
							<div><span class="glyphicon glyphicon-ok"> Dazumba DVito 980</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG LED 22"</span></div>
							<div><span class="glyphicon glyphicon-ok"> LG DVDRW 24X SATA</span></div>
							<div><span class="glyphicon glyphicon-ok"> Rexus Warfaction VR1 </span></div>
							<div><span class="glyphicon glyphicon-ok"> Super Flower FX 650W</span></div>
						</div>
						<div class="panel-footer">
							<button type="submit" name="paket4" value="10300000" class="btn btn-danger">
								PESAN
							</button>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>


		<!-- *************  BG6  *********** -->
		<div class="container-fluid bg6 text-center" id="testi">
			
			<div class="row">
				<div class="col-sm-12 col6">
				<h3 style="color: #CD6155 ">
				TESTIMONIAL <br> <span class="glyphicon glyphicon-chevron-down"></span>
				</h3>
				<div id="karosel" class="carousel slide text-center" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#karosel" data-slide-to="0" class="active"></li>
			      <li data-target="#karosel" data-slide-to="1"></li>
			      <li data-target="#karosel" data-slide-to="2"></li>
			      <li data-target="#karosel" data-slide-to="3"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			      <div class="item active">
			      	<div class="row">
			      		<div class="col-sm-5">
			      			<img src="pic/willy.jpg" class="img-karosel" >	
			      		</div>
			      		<div class="col-sm-7 komen-karosel" >
			      			<h4>
			        		<i>
			        			"Puas banget belanja disini pelayanan mantab abis!! harga paling murah"
			        		</i>
			        		<br> <br>
			        		<span style="font-style:normal;">Willy Dwi Raharjo, Pendaki Gunung</span>
			        		</h4>
			      		</div>
			      	</div> 
			      </div>

			      <div class="item">
			      	<div class="row">
			      		<div class="col-sm-5">
			      			<img src="pic/dayat.jpg" class="img-karosel" >	
			      		</div>
			      		<div class="col-sm-7 komen-karosel" >
			      			<h4>
					        	<i>
					        		"Thanks brokomputer, rakitannya mulus kaya wajah saya yang tampan hehehe"
					        	</i>
					        	<br> <br>
					        	<span style="font-style:normal;">M Hidayat, Pesepakbola</span>
					        </h4>
			      		</div>
			      	</div>
			      </div>

			      <div class="item">
				      <div class="row">
				      		<div class="col-sm-5">
				      			<img src="pic/ryo.jpg" class="img-karosel" >	
				      		</div>
				      		<div class="col-sm-7 komen-karosel" >
				      			<h4>
						        	<i>
						        		"Saya suka belanja disini, sangat membantu untuk menentukan spesifikasi untuk kebutuhan perusahaan saya."
						        	</i>
						        	<br> <br>
						        	<span style="font-style:normal;">Ryo darmawan, CEO KueCucur.co</span>
						        </h4>
				      		</div>
				      	</div>
			      </div>

			      <div class="item">
			      	<div class="row">
			      		<div class="col-sm-5">
			      			<img src="pic/jihad.jpg" class="img-karosel" >	
			      		</div>
			      		<div class="col-sm-7 komen-karosel" >
			      			<h4>
					        	<i>
					        		"Enak banget belanja disini, adminnya sangat ramah kaya mantan saya :( "
					        	</i>
					        	<br> <br>
					        	<span style="font-style:normal;">Jihad Darmawan, General Manager Kueputu.co</span>
					        </h4>
			      		</div>
			      	</div>
			      </div>

			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#karosel" role="button" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#karosel" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
				</div>
			</div>
		</div>

		<!-- *************  BG7  *********** -->
		<div class="container-fluid bg7">
			<h3 class="text-center">BEKERJA SAMA DENGAN <br>
			<span class="glyphicon glyphicon-chevron-down"></span></h3>
			<div class="row">
				<div class="col-sm-4">
					<img src="pic/asus.png" class="img-responsive">
				</div>
				<div class="col-sm-4">
					<img src="pic/asrock.png" class="img-responsive">
				</div>
				<div class="col-sm-4">
					<img src="pic/msi.png" class="img-responsive">
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img src="pic/corsair.png" class="img-responsive">
				</div>
				<div class="col-sm-4">
					<img src="pic/gigabyte.png" class="img-responsive">
				</div>
				<div class="col-sm-4">
					<img src="pic/seasonic.png" class="img-responsive">
				</div>
			</div>
			
		</div>


		<div class="container-fluid bg7a text-center">
		<div class="row">
			<div class="col-sm-4">
				<h3> Pemesanan juga dapat dilakukan di <span class="glyphicon glyphicon-chevron-right"></span> </h3>
			</div>
			<div class="col-sm-8 ">
				<div class="row rowcp">
					<div class="col-sm-4 text-justify">
						<img src="pic/gmail.jpg"> brokomputer@gmail.com
					</div>
					<div class="col-sm-4 text-justify">
						<img src="pic/line.jpg"> brokomputerline
					</div>
					<div class="col-sm-4 text-justify">
						<img src="pic/watsap.jpg"> +6283815219298
					</div>
				</div>		
			</div>
		</div>		
	</div>

		<!-- *************  BG9 *********** -->
		<?php include('library/footer.php') ?>
</body>
</html>