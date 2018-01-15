<?php 
	session_start();
	include('library/koneksi.php');

		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Paket PC</title>
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
	<div class="container-fluid pesan">
	<form action="total.php" method="post">
		<h3 class="text-center">PILIH PAKET PC</h3><br>
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










			

			<div class="row pesankustom">
			<h3 class="text-center">BUAT PC KAMU SENDIRI</h3>
				<div class="col-sm-8 col-sm-offset-2 col-sm-offset-2">
					<h4>Pilih Processor: </h4>
					<div class="form-group">
						<select class="form-control" name="cpu">
							<?php 
							  	$query="select * from part where kategori='cpu' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<h4>Pilih Motherboard: </h4>
					<div class="form-group">
						<select class="form-control" name="motherboard">
							<?php 
							  	$query="select * from part where kategori='motherboard' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<h4>Pilih VGA Card: </h4>
					<div class="form-group">
						<select class="form-control" name="vga">
							<?php 
							  	$query="select * from part where kategori='vga' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<h4>Pilih RAM: </h4>
					<div class="form-group">
						<select class="form-control" name="ram">
							<?php 
							  	$query="select * from part where kategori='ram' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<h4>Pilih Hardisk: </h4>
					<div class="form-group">
						<select class="form-control" name="hdd">
							<?php 
							  	$query="select * from part where kategori='hdd' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<h4>Pilih Power Supply: </h4>
					<div class="form-group">
						<select class="form-control" name="psu">
							<?php 
							  	$query="select * from part where kategori='psu' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<h4>Pilih Casing: </h4>
					<div class="form-group">
						<select class="form-control" name="case">
							<?php 
							  	$query="select * from part where kategori='case' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<h4>Pilih Monitor: </h4>
					<div class="form-group">
						<select class="form-control" name="monitor">
							<?php 
							  	$query="select * from part where kategori='monitor' ";
								$result=$link->query($query);
							  	while ($data=$result->fetch()) {
							  		echo " <option value='{$data[kode_part]}'>
							  		{$data['nama_part']} | 
							  		Rp. {$data['harga']}
							  		</option>";
							  	}
							?>   
					 	</select>
					</div>

					<input type="submit" name="buatpc" value="PESAN" class="btn btn-danger form-control">  
				</div>

				

				

			</div>
	</form>	
	</div>
<?php include('library/footer.php') ?>
</body>
</html>