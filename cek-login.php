<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	header("location:home.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>