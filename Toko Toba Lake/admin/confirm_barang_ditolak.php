<?php
	include 'header.php';
	
	$id = $_GET['id'];
	mysqli_query($koneksi, "UPDATE pemesanan SET status = 'Pesanan Ditolak' WHERE id_pemesanan = '$id'");
	header("Location: det_pemesanan.php?id=$id");
?>