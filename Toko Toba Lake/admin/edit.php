<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Barang</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi, $_GET['id']);
$det=mysqli_query($koneksi, "select * from produk where id_produk='$id_brg'")or die(mysql_error());
$d=mysqli_fetch_array($det);
?>					
	<form action="update.php" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id_produk'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>" style="width: 1000px"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" class="form-control"  accept="gambar/*" name="harga" value="<?php echo $d['harga'] ?>" style="width: 1000px"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<select class="form-control" name="kategori" style="width: 1000px">
					<?php
						$query = mysqli_query($koneksi, "SELECT * FROM kategori");
						while($q = mysqli_fetch_array($query)){
						echo '<option value='.$q['id_kategori'].'>'. $q['nama_kategori'] .'</option>';		
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" class="form-control" name="qty" value="<?php echo $d['qty'] ?>" style="width: 1000px"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" class="form-control" name="deskripsi" value="<?php echo $d['deskripsi'] ?>" style="width: 1000px"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>
					<img src="gambar/<?= $d['gambar']?>" width="500" height="210"><br/>
					<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      				<input type="file" name="gambar"style="width: 500px">
					

				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan" style="width: 150px"></td>
			</tr>
		</table>
	</form>
<?php include 'footer.php'; ?>