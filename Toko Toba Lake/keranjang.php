<?php
   require_once('header.php');
?>

<style>
</style>
	<div id="page-title" style="margin-top: 50px; background: grey;border-bottom: 5px solid grey;">
	            <h2 style="margin-left:20px;"><i class="ico-shopping-cart ico-white"></i>Keranjang</h2>
	        </div>
	    

  <div class="container" style="background-color: silver">
	<div class="check">	 
		<div class="col-md-12 cart-items" style="margin-top: -40px; background-color: white; padding-top: 20px;">		            
                        <?php
                $total = 0;
                if (isset($_SESSION['items'])) {
                    foreach ($_SESSION['items'] as $key => $val) {
                        $query = mysqli_query($koneksi, "select * from produk where id_produk = '$key'");
                        $data = mysqli_fetch_array($query);
                        $jumlah_harga = $data['harga'] * $val;
                        $total += $jumlah_harga;
                        $produk = $data['id_produk'];
                        $jumlah = $val;
                        if (isset($_SESSION['username'])) {
                            $id_user = $_SESSION['id_users'];
                            $nama = $_SESSION['nama'];
                        }
                        ?>
			 <div class="cart-header">
                             <a onclick="if(confirm('Apakah anda yakin ingin menghapus pesanan ini ??')){location.href='tambahkanbarang.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=keranjang.php';}"><div class="close1"> </div></a>
                     </a>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
                                                    <img src="admin/gambar/<?=$data['gambar']?>" class="img-responsive" alt="" style="height: 190px; width: 170px;"/>
						</div>
					   <div class="cart-item-info">
                                               <h3><a href="detail_produk.php?id=<?=$data['id_barang']?>"><h3><?=$data['nama']?></h3></a><span><h4>
                                               	<?=$data['deskripsi']?></h4></span></h3>
						<ul class="qty">
							<li><h3>Jumlah : <?=$jumlah?></h3></li>
                                                        <li><a href="tambahkanbarang.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=keranjang.php" class='btn btn-primary'><span class="glyphicon glyphicon-minus"></span> </a></li>
                                                        <li><a href="tambahkanbarang.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=keranjang.php" class='btn btn-success'><span class="glyphicon glyphicon-plus"></span></a></li>
						</ul>	
						
						<div class="delivery">
                                                    <h3>Rp. <?= number_format($jumlah_harga, 2, ",", ".")?></h3>

							 <div class="clearfix"></div>

				        </div>	
				        <div class="border1"></div>
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>	

<style type="text/css">
    .border1 {
    	width: 1140px;
        border-width: 2px;
        border-top-style: solid;
        border-bottom-style: dotted;
        border-left-style: dashed;
        border-right-style: double;
        margin-left: -295px;
    }
 </style>                         <?php
                        }
                    }
                  ?>
		 </div>
		 	<p style="color: black"><b>Ingin Menambahi Produk Yang Ingin Dipesan Lagi ?, Silahakan Klik <button style="background-color: green"><a href="produk.php" style="color: black">Disini</button> <b></p> 
		 			 <div class="col-md-5 cart-total">

				 <div class="price-details" style="font-size: 20px;">
				 <h3>Detail Harga</h3>
				 <span>Total</span>
                                 <span class="total1">Rp. <?= number_format($total, 2, ",", ".")?></span>
				
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4 style="font-size: 15px;">TOTAL</h4></li>	
                           <li class="last_price"><span style="font-size: 15px;">Rp. <?= number_format($total, 2, ",", ".")?></span></li>
			   <div class="clearfix"> </div>
			 </ul>
			 <div class="clearfix"></div>
		<a class="btn btn-sm btn-primary" style="background-color:blue; width: 500px;" href="pembayaran.php?total_harga=<?=$total?>&jumlah=<?=$jumlah?>&id_produk=<?=$produk?>">Pesan Sekarang</a>
			</div>
	 </div>
</div>

<?php
	include 'footer.php';
?>