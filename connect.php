<?php

	$file = "assets/geoPHP/geoPHP.inc";
	$titik = "../";
	$angka = 0;
	do{
		$file = $titik . $file;
		$angka++;
	}while(file_exists($file));

	require_once(substr($file,3));

	$host = "dbbdl.mysql.database.azure.com";
	$user = "dbbdl@dbbdl";
	$pass = "@dmin#123";
	$port = "3306";
	$dbname = "dbbdl";

	$file = "sertv/BaltimoreCyberTrustRoot.crt.pem";
	$titik = "../";
	$angka = 0;
	do{
		$file = $titik . $file;
		$angka++;
	}while(file_exists($file));


	$conn = mysqli_init();
	mysqli_ssl_set($conn,NULL,NULL, substr($file,3), NULL, NULL) ;
	mysqli_real_connect($conn, "$host","$user","$pass","$dbname", 3306, MYSQLI_CLIENT_SSL);
	if (mysqli_connect_errno($conn)) {
		die('Gagal Koneksi Keserver: '.mysqli_connect_error());
	}
?>
