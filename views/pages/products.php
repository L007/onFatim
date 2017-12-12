<!DOCTYPE HTML>
<html>
<head>
	<title>on-Fatim</title>
	
</head>
<body>
	<div class="top-header">
		<div class="container">
			<div class="top-header-left">
				<ul>
				<li class="dropdown navbar-nav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_GET['cabang']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<?php foreach ($cabang as $post) {
							?>
					
							<li><a style="color: black;" href="?controller=home&action=homeUser&cabang=<?php echo $post->cabang; ?>"><?php echo $post->cabang; ?></a></li>
							<?php } ?>
						</ul>
					</li>
					<li><a href="?controller=home&action=showTransaksiUser&cabang=<?php echo $_GET['cabang'];?>">Transaksi</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="top-header-center">
				<p><a style="color: white;" href="?controller=keranjang&action=showCart&cabang=cbg_patrang"><span class="cart"> </span>Keranjang</a></p>
			</div>
			<div class="top-header-right">
				<ul>
					<li>
						<form>
							<input type="text">
							<input type="submit" value="" />
						</form>

					</li>
					<li><a href="index.php"><?php echo $_SESSION["login_user"] ?></a></li>
					<li><a href="logout.php">Logout</a></li>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="main-menu">
		<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
					<li><a href="?controller=home&action=homeUser&cabang=cbg_patrang">Rumah</a></li>
					<li class="active"><a href="?controller=produk&action=showProdukCabang&cabang=<?php echo $_GET['cabang']; ?>">Produk</a></li>
					<li><a href="about.html">Tentang</a></li>
					<li><a href="contact.html">Kontak</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			

			<div class="logo">
				<a href="index.html"><img src="resources/images/logo.png" title="Sweetcake" /></a>
			</div>
		</div>
	</div>
	<div class="biseller-info">
		<div class="container">
			<h2>Produk</h2>
			<h3 class="new-models">new varieties</h3>
			
			<div class="col-md-11">
				<?php foreach ($posts as $post) { 


					?>
					<div class="col-md-3">
						<div class="thumbnail card">

							<img src="foto_produk/<?php echo $post->foto_produk; ?>" alt="kue" style="width:100%; height:180px">
							<div class="caption">
								<font size="3"><p> <?php echo $post->nama_produk; ?></p></font>
								<font size="2"><b><p> <?php echo "Rp ". number_format($post->harga,0,".",".")."/pcs"; ?></p></b></font>
								<font size="2" color="green"> <p> <?php echo "Stok : ".$post->jumlah_stok; ?></p></font>

							</div>
							
								<p align="center"><a href="?controller=produk&action=detailProduk&id_produk=<?=$post->id_produk?>&cabang=<?php echo $_GET['cabang']; ?>"><button class="btn btn-success" style="width:90%" type="submit">Beli</button></a></p>
							<br>
							
						</div>
					</div>
					<?php } ?>

				</div>

			</div>
		</div>


		<div class="best-seller">
			<div class="container">
				<div class="biseller-info">
					<h3 class="new-models">varieties</h3>

				</div>
			</div>
		</div>


		<div class="clearfix"></div>


	</body>
	</html>
