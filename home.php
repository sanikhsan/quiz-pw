<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data</title>
</head>
<body>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>