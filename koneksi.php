<?php 
	error_reporting(0);
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "quiz-pw";

	$koneksi = mysqli_connect($server,$username,$password,$db);

	if(!$koneksi){
		die("Koneksi Gagal! : ".mysqli_connect_error());
	}
	echo "Koneksi Sukses!";
 ?>