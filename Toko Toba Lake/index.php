<?php
    include 'header.php';
?>


	<ul class="tp-hd-lft wow fadeInDown animated" data-wow-delay="0.5s">
<div class="slider-wrapper" style="background-color:#9a909f ; padding-top: 40px; padding-bottom: 40px" >
	
  	<div id="da-slider" class="da-slider" style="background: url(); border-color: maroon; margin-top: 40px; height: 410px; width: 1300px;  background-color: maroon">
	 <div class="col-md-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>   
      </ol>
 
      <!-- deklarasi carousel -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
           <img  style="width: 100%; height: 400px;" src="img/th (2).jpg" alt="gambar">
         
      
          <div class="carousel-caption">
          <h1 style="color:red;">Big Sale</h1>
          </div>
        </div>
        <div class="item">
          <img style="width: 100%; height: 400px;" src="img/th (1).jpg" alt="gambar">
          <div class="carousel-caption">
          <h1 style="color:red;">Ragi Hotang</h1>
           <h1></h1>
          </div>
        </div>
        <div class="item">
           <img style="width: 100%; height: 400px;" src="img/logo2.png" alt="gambar">
          <div class="carousel-caption">

          </div>
        </div>        
      </div>
    
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<!--menu pada index-->
 <div class="col-md-12" style="background-color: silver">
   <div class="container" style="background-color: lightblue">

 		<div class="content_top" style="margin-top: 20px;">
      <marquee  scrollamount="25" behavior="alternate" ><h1 style="font-family:Comic Sans MS;  color:blue;"><b>Selamat Datang Di Toko Ulos</b></h1></marquee>

				<h3 class="future" style="font-family: 'Sofia';font-size: 22px;color: red;"><center class="animated infinite rubberBand">Paling Laris Bulan Ini</center></h3><br>
				
        <div class="container">
					<div class="box_1">
					</div>
                   
						<?php
	$produk = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk LIMIT 6");
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
			</div><br>
				</div>
					</div>
				<?php }?>
				</div>
	</div>
</div>

<div class="container" style=" background-color:lightblue">
  <ul class="pager" style="height: 25px">
       <div class="col-md-12">
    <li><a href="produk.php" class="a" style="background: #4CAF50;font-size: 20px">Lihat Produk Lainnya</a></li>
    </ul>
  </div>
</div>

  </ul>
</div>
</div>

<div style="padding-top: 550px;">
<?php
    include 'footer.php';
?>
</div>
<style type="text/css">
	.a{	
		color: #ffff;

	}
  .col-md {
    background: #c2dcd8;
    padding: 0.5em;
    border: 1px solid white;
    border-radius: 5px;
    margin-right: 22px;
}
.future{
  margin-left: 120px;
}
</style>
