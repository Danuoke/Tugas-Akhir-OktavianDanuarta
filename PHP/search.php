<?php
	include "connect.php";
	
	$telp = $_POST['telp'];
	
	$query = "SELECT * FROM pengirim 
			WHERE telepon LIKE '$telp'";
	$result = mysqli_query($connect, $query);
	$hasil = mysqli_affected_rows($connect);
	
	if($hasil > 0){
		$data = mysqli_fetch_assoc($result);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../Css/data.css">
	</head>
	<body>
		<div class="header">
			<b>Peduli Korban Bencana</b>
		</div>
		<div class="nav">
			<b><a href="#">Beranda</a></b>
			<b><a href="daftar.html">Berita</a></b>
			<b><a href="donasi.html">Donasi</a></b>
			<b><a href="#">Bantuan</a></b>
		</div>
		<h1 align="center">Ini Adalah Data Anda</h1>
		<table class="table">
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Telepon</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
			</tr>
			<tr>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['telepon']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
			</tr>
		</table>
	</body>
</html>
<?php
	}else{
		echo "<h1 align='center'>Anda tidak memiliki data</h1>";
	}
?>