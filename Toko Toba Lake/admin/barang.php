<?php 
include 'header.php'; 
include 'config.php';
?>

<h3><span class="glyphicon glyphicon-list"></span> Data Produk</h3>
<a style="margin-bottom:20px" class="btn btn-info col-md-2" href="tambah_barang.php"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</a>
<br/>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi, "SELECT * from produk");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Produk</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	
</div>
<form action="cari_produk.php" method="GET">
	<div class="input-group col-md-4 col-md-offset-8">
		<span class="input-group-addon" id="basic-addon1"><span  class="glyphicon glyphicon-search"></span></span>	
		<input type="text" class="form-control" placeholder="Cari berdasarkan ID Produk, nama dan jumlah di sini .." aria-describedby="basic-addon1" name="cari">
	</div>
</form><br/>
	<?php 
	if(isset($_GET['cari'])){
		echo '<div> <b>Hasil pencarian dengan kata kunci "'. $_GET['cari'] .'"</b></div><br/>';
		$cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
		$brg=mysqli_query($koneksi, "select * from produk inner join kategori on produk.id_kategori = kategori.id_kategori where nama like '%$cari%' or qty like '%$cari%' or id_produk like '%$cari%'");
	}else{
		$brg=mysqli_query($koneksi, "select * from  produk inner join kategori on produk.id_kategori = kategori.id_kategori order by nama DESC limit $start, $per_hal");
		
	}
	$no=1;
	$count = mysqli_num_rows($brg);
	if($count == null){
		if(isset($_GET['cari'])){
			echo '<div align="center"> <h5>Barang dengan kata kunci "'. $_GET['cari'] .'" tidak ada. </h5> </div>';
		}
	}else{
	?>
<table border="5px" class="table" style="background-color: silver;border-color: orange;" >
	<tr style="background: #CCCCFF;">
		<th class="col-md-1">No</th>
		<th class="col-md-3">Nama Barang</th>
		<th class="col-md-2">Kategori </th>
		<th class="col-md-2">Harga Jual</th>
		<th class="col-md-1">Jumlah</th>
		<th class="col-md-2">Opsi</th>
	</tr>

	<?php
	while($b=mysqli_fetch_array($brg)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['nama'] ?></td>
			<td><?php echo $b['nama_kategori']?></td>
			<td>Rp.<?php echo number_format($b['harga']) ?>,-</td>
			<td><?php echo $b['qty'] ?></td>
			<td>
				<a href="det_barang.php?id=<?php echo $b['id_produk']; ?>" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></a>
				<a href="edit.php?id=<?php echo $b['id_produk']; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $b['id_produk']; ?>' }" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
			</td>
		</tr>		
		<?php 
	}
	?>
	
</table>
<center>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
</center>
<?php
	}
	?>

<?php 
include 'footer.php';

?>