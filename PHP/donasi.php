<?php
	include "connect.php";
	
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$telp = $_POST["telp"];
	$email = $_POST["email"];
	$nama_barang = $_POST["nama_barang"];
	$jumlah = $_POST["jumlah"];
	
	$query = "INSERT INTO pengirim (nama, alamat, email, telepon, nama_barang, jumlah)
			  VALUES ('$nama','$alamat','$email','$telp','$nama_barang','$jumlah')";
			  
	$hasil = mysqli_query($connect, $query);
	
	$num = mysqli_affected_rows($connect);
	
	if($num > 0){
		echo "<hr><h4 align='center'>Data anda telah tersimpan.Terima kasih telah berpartisipasi</h4>";
	}else{
		echo "<hr>Gagal tambah data";
	}
	echo "<br><p align='center' style='font-size:16pt; font-family:sans-serif'><a href='../donasi.html'>Kembali</a></h2>";
?>