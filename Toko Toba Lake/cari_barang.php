<?php
	include 'koneksi.php';
    include 'header.php';
?>

<?php
$per_hal = 6;
$jumlah_record = mysqli_query($koneksi, "SELECT * from produk WHERE id_kategori = 3");
$jum = mysqli_num_rows($jumlah_record);
$halaman = ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>


<div id="page-title" style="margin-top: 50px; background: grey;border-bottom: 5px solid grey;">
    <h2><i class="ico-briefcase ico-white"></i>Produk &nbsp &nbsp</h2>


     <a class="dropdown-toggle" data-toggle="dropdown" role="button" data-toggle="dropdown" style="cursor: pointer;color: white; font-size: 22px; text-decoration: none;"><i class="glyphicon glyphicon-list"></i>Kategori &nbsp<span class="glyphicon glyphicon-triangle-bottom" style="color: white"></span></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu" style="margin-left: 170px">
      <li role="presentation"><a role="menuitem" tabindex="1" href="pakaian.php">Ulos</a></li>
      
    </ul>
  </div>




  <ul class="tp-hd-lft wow fadeInDown animated" data-wow-delay="0.5s">
      <div class="content_box" style="background-color: silver; margin-bottom: -20px ">

<div class="container" style="background-color: lightblue;margin-top: 10px">
		<div class="content_top" style="margin-top: 20px; background-color: white; " >
	<div class="col-md-12" style="background-color: white ; margin-bottom: 10px">
<div class="container" >
<div class="women_main">
	<div class="box_1">
		<!-- grids_of_4 -->
		<div class="grids_of_4">
	

<?php
	if(isset($_GET['cari'])){
				echo ' <h4 style="margin-top:-100px"><p style="color:black">Hasil pencarian produk dengan kata kunci " <font color="red">'. $_GET['cari'] .'</font>  ". </p></h4>';
					$cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
					$produk=mysqli_query($koneksi, "select * from produk where nama like '%$cari%' or harga like '%$cari%'");
					if(mysqli_num_rows($produk) == null){
						echo '<br><div align="center"> <font size="4">Produk yang anda cari tidak ada. </font></div>';


						}
					}

			else{
			$produk = mysqli_query($koneksi, "SELECT * FROM produk LIMIT $start, $per_hal");
			}
			while($p = mysqli_fetch_array($produk)){


?>	


	<div class="grids_of_4">
		<div class="col-md-4">
				<div class="col-md 7">
				<div class="content_box"><a href="detail_produk.php?id=<?=$p['id_produk']?>">
			   	  <div class="view view-fifth">
			   	   	<img src="<?php echo 'admin/gambar/'.$p['gambar']; ?>" width="200" height="200">
			   	   	  	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   </div>
				   	  </a>
				    <h5 style="margin-left: -20px;"><a href="detail_produk.php?id=<?=$p['id_produk']?>"> <?= $p['nama']?></a></h5>
				     <div class="size_1">
				     	<span class="item_price">Rp. <?= number_format($p['harga'])?>,-</span>
		      		    <div class="clearfix"></div>
		      		  </div>
			     </div>
			</div>
			<br>
				</div>
					</div>
				<?php }?>
			
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>





<br><br>
<ul class="pagination" style="margin-top: -30px; margin-bottom: 5px">			
			<?php 
			for($x = 1;$x <= $halaman; $x++){?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>			
	</ul>

</ul>
<?php
    include 'footer.php';
?>	


<style type="text/css">
	.a{	
		color: #ffff;

	}
  .col-md {
    background: #c2dcd8;
    padding: 0.5em;
    border: 1px solid white;
    border-radius: 5px;
    margin-right: 50px;
}
.future{
  margin-left: 120px;
}
</style>
