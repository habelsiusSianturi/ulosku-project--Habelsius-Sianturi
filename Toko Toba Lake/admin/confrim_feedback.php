<?php 
include 'config.php';
$id=$_GET['id'];
$status = 'Confirmed';
mysqli_query($koneksi, "UPDATE komentar SET status = '$status' WHERE id_komentar = '$id'") or die(mysqli_error($koneksi));
header("location:feedback.php");

 ?>