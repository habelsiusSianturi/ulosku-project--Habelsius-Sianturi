<?php
    include 'header.php';
?>

    <style>
    .hero-unit {
    background: #fff url(img/bg-k10.png);
    border-left: 4px solid brown;
    padding: 13px 13px 13px 15px;
    font-style: italic;
    margin: 20px auto;
    -webkit-border-radius: 0px;
     -moz-border-radius: 0px;
          border-radius: 0px;
    font-size: 14px !important;
}
</style>

   

<div class="container" style="background-color: silver; padding-bottom: 20px; padding-top: 20px">
             
    <div class="check">  
        <div class="col-md-12 cart-items" style="background-color: white">
                 <nav arial-label="breadcrumb">
                </nav>
                 <h1><u>Daftar Pesanan</u></h1>

                        <div class="border1"></div>
                        <br>   
                        <?php
                        $id_user = $_SESSION['id_users'];

                        $query = mysqli_query($koneksi, "select * from pemesanan where id_user = '$id_user'");
                        while($data = mysqli_fetch_array($query)){
                            $id_produk = $data['id_produk'];
                            $produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
                            while($p = mysqli_fetch_array($produk)){
                        ?>
             <div class="cart-header">
                             <a onclick="if(confirm('Apakah anda yakin ingin menghapus pesanan ini ??')){ location.href='hapus_pesanan.php?id_produk=<?=$data['id_produk']?>&id_pemesanan=<?=$data['id_pemesanan']?>';}"><div class="btn btn-danger" style="margin-left: 900px; height: 50px">X</div></a>
                             <div class="cart-sec simpleCart_shelfItem">
                                           <div class="cart-item cyc">
                                            <a href="detail_produk.php?id=<?=$data['id_produk']?>">
                                                    <img src="admin/gambar/<?=$p['gambar']?>" class="img-responsive" alt="" style="height: 190px; width: 170px;"/>
                                            </a>
                        </div>
                       <div class="cart-item-info">
                                               <h3><a href="detail_produk.php?id=<?=$data['id_produk']?>"><h3><?=$p['nama']?></h3></a><span><h4>Deskrpsi :<?=$p['deskripsi']?></h4></span></h3>
                        <ul class="qty">
                            <li><h3>Jumlah : <?=$data['jumlah']?></h3></li>

                         <h3><li>Tanggal: <?=$data['tanggal'] ?><h3></li>  
                                                        <?php

                                    if($data['status'] == 'Belum Dikirim'){
                                        echo '<li style="color:red"><b>Belum Dikirim</b></li>';
                                    }else if($data['status'] == 'Telah Dikirim'){
                                        echo '<li  style="color:green"><b>Telah Dikirim</b></li>';
                                    }
                                    else if($data['status'] == 'Pesanan Ditolak'){
                                        echo '<li  style="color:red"><b>Pesanan Ditolak</b></li>';
                                    }
                                ?>
                            
                        
                        </ul>
                        <div class="delivery">
                                                    <h3> Rp. <?= number_format($data['total_harga'], 2, ",", ".")?></h3>
                             <div class="clearfix"></div>
                                                         
                        </div>
                           <a href="bukti.php" class="btn btn-sm btn-primary" style="background: #4CAF50;">Bayar</a>
                        <br>
                         <div class="border1" style="margin-left: -295px"></div>
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
        margin-left: -20px;
    }
 </style>         
                     <?php
                        }
                        }
                     ?>
         </div>
</div>
</div>

<?php
    include 'footer.php';
?>