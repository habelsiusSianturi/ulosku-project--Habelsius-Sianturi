<?php
require_once('koneksi.php');

session_start();
if (isset($_GET['out'])) {
    session_start();
    session_destroy();
    header('location: index.php');
}
?>

<!DOCTYPE html>
 <html class="no-js">
	<head>
	<meta charset="utf-8">
	<title>TOKO &mdash; ULOSKU</title>
	
	
	<!-- css -->	
	    <link rel="stylesheet" href="css/bootstrap.css"  type="text/css"/>
	    <link rel="stylesheet" href="css/style3.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/page.css">
    	<link rel="stylesheet" href="css/megamenu.css" type="text/css"/>
        <link rel="stylesheet" href="css/stylemenuindex.css" type="text/css"/>
        <link rel="stylesheet" href="css/stylelogin.css" type="text/css"/>
        <link rel="stylesheet" href="css/style2.css" type="text/css">
        <link rel="stylesheet" href="css/styletitle.css" type="text/css">
        <link rel="stylesheet" href="css/icons.css" type="text/css">
        <link rel="stylesheet" href="css/pagination.css" type="text/css">
        <link rel="stylesheet" href="css/slider.css" type="text/css">
        <link rel="stylesheet" href="css/hvr-shutter-in-vertical.css"  type="text/css">
        <link rel="stylesheet" href="css/etalage.css"  type="text/css">
    	<link rel="stylesheet" href="css/etalage.css">
    

		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<header id="fh5co-header" role="banner">
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background:white";>

	
			<div class="container-fluid">
				<div class="navbar-header"> 
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				
				</div>
				<div id="fh5co-navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">        
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span><span>&nbsp Halaman Utama<span class="border"></span></span></a></li>
						<li><a href="produk.php"><span class="glyphicon glyphicon-briefcase"></span><span>&nbsp Produk <span class="border"></span></span></a></li>
						
						<li><a href="keranjang.php"><span class="glyphicon glyphicon-shopping-cart"></span><span> Keranjang<span class="border"></span></span></a></li>
						
					</ul>
				  <ul class="nav navbar-nav navbar-right">
                        <li><div class="search" style="margin-top: 10px;">      
                        <form method="GET" action="cari_barang.php">
                            <input type="text" name="cari" class="textbox" placeholder="Cari Produk" onfocus="this.value = '';" 
                            onblur="if(this.value == '') {
                                       this.value = 'Cari Produk';
                                    }">
                            <input type="submit" value="Subscribe" id="submit" name="submit">
                            <div id="response"> </div>
                        </form>
                    </div>
                </li>

                     
                            <?php
                            if (!isset($_SESSION['masuk'])) {
                    echo '<li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span><span> Daftar<span class="border"></span></span></a></li>
                    		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><span> Masuk<span class="border"></span></span></a></li>
                                                ';
                            } else {
                                echo '
                                        <ul class="nav navbar-nav">        
						<li><a href="pesanan.php"><span class="glyphicon glyphicon-envelope"></span><span> &nbsp Pesanan<span class="border"></span></span></a></li>
						
						</ul>
                        
                                        <li>
                                                <a class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;">' . $_SESSION['username'] .'<b class="caret"></b>
                                                    <ul class="dropdown-menu">
                                     
                                      <li class="grid"><a class="color1" href="index.php?out">Keluar</a></li>';

                            }
                            ?>
                        
                        </ul>
                   
				</div>
			</div>
		</nav>
	</header>

