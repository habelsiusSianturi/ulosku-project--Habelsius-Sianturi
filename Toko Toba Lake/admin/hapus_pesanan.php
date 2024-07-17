<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi, "delete from pemesanan where id_pemesanan='$id'");
header("location:data_pemesanan.php");

?>