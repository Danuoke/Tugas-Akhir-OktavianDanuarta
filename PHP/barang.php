<?php
	include "connect.php";
	
	$nama = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$id = $_GET['id_pengirim'];
	
	$query = "INSERT INTO barang (nama_barang, jumlah)
			  VALUES ('$nama','$jumlah')";
	$hasil = mysqli_query($connect, $query);
	$num = mysqli_affected_rows($connect);
	
	if($num > 0){
		echo "Berhasil tambah data";
	}else{
		echo "Gagal";
	}
	
?>