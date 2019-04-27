<?php
	include "connect.php";
	
	$query = "SELECT * FROM pengirim";
	
	$hasil = mysqli_query($connect, $query);
	$num = mysqli_num_rows($hasil);
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
	<h1 align="center">Data Pemberi Donasi</h1>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
		</tr>
<?php
	if($num > 0){
		$no = 1;
		while($data = mysqli_fetch_assoc($hasil)){
?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['telepon']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
			</tr>
<?php
		}
	}else{
		echo "Anda tidak memiliki data";
	}
?>
	</table>
	</body>
</html>