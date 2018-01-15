<?php 
	{
		//buat koneksi
		$link= new PDO('mysql:host=localhost;dbname=brokomputer',"root", "");
		//set error
		$link->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


		
	}
?>