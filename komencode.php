<?php 	
if (isset($_POST['kodeartikel'])) {
	$tanggal=date("d/M/Y");
	try {
		$result=$link->exec("insert into artikel 
							values($_POST[kodeartikel],'$_POST[namakomen]','$_POST[komen]','$tanggal') ");

	} catch (PDOException $e) {
		echo "koneksi ada yg salah dari daftar".$e->getMessage();
			die();
	}
}


function komentar($kodeartikel){
	global $link;
	$result=$link->query("select*from artikel where kode_artikel=$kodeartikel");
	while ($data=$result->fetch()) {
		echo "<div class='row kmn'>";
			echo "<div class='col-sm-4 komenimg'>
					<img src='pic/user.jpg' class='img-responsive'>
					</div>";
						echo "<div class='col-sm-8 text-justify'>";
							echo "<div class='col-sm-8 komentator'>";
								echo "<h3>$data[nama]</h3>";
							echo "</div>";
							echo "<div class='col-sm-4'>";
								echo "<p><i>$data[tanggal]</i></p>";
							echo "</div>";
							echo "<hr style='width:100%'>";
							echo "<div class='col-sm-12'>";
								echo "$data[komen]";
							echo "</div>";
						echo "</div>";
						echo "</div>";
}
}	
	
 ?>