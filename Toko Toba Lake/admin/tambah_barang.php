<?php
	include 'header.php';
?>

<h3><span class="glyphicon glyphicon-plus"></span> Tambah Produk</h3>
<br/>
<br/>
				<form action="tmb_brg_act.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Produk</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Produk .." style="width: 1000px">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga Barang .."  style="width: 1000px">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input name="qty" type="text" class="form-control" placeholder="Jumlah .."  style="width: 1000px">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input name="deskripsi" type="text" class="form-control" placeholder="Deskripsi"  style="width: 1000px">
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="kategori"  style="width: 1000px">
						<?php
							$query = mysqli_query($koneksi, "SELECT * FROM kategori");
							while($q = mysqli_fetch_assoc($query)){
							echo '<option>'. $q['nama_kategori'] .'</option>';		
							}
						?>
						</select>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input name="gambar" type="file" class="form-control"  style="width: 1000px">
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan" name="tambah" style="width:150px">
					<a href="barang.php" class="btn btn-default" data-dismiss="modal" style="width:150px" >Batal</a>
			</form>
		<br><br>