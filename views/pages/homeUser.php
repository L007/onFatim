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
					
					<!-- <li><a href="checkout.html">Bayar</a></li> -->
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
				<p><a style="color: white;" href="?controller=keranjang&action=showCart&cabang=<?php echo $_GET['cabang']; ?>"><span class="cart"> </span>Keranjang</p>
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
					<li class="active"><a href="?controller=home&action=homeUser&cabang=cbg_patrang">Rumah</a></li>
					<li><a href="?controller=produk&action=showProdukCabang&cabang=<?php echo $_GET['cabang']; ?>">Produk</a></li>
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
	<div class="container">
		<div class="img-slider">

			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<img  src="resources/images/slide.jpg" class="img-responsive" alt="">
						<div class="slider-caption">
							<div class="slider-caption-left text-center">
								<h1>Mencari yang manis, enak, lezat dan empuk ?</h1>
								<p>Tidak usah khawatir, lihat saja di katalog kue</p>
								<a class="buy-btn" href="#">Beli Sekarang</a>
							</div>
							<div class="slider-caption-right">
								<a href="#"><img src="resources/images/iteam.png" class="img-responsive" title="name" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<!-- share-on -->
						<div class="share-on">
							<div class="share-on-grid">
								<div class="share-on-grid-left">
									<h3>Share On</h3>
								</div>
								<div class="share-on-grid-right">
									<a href="#"><span class="facebook"> </span></a>
									<a href="#"><span class="twitter"> </span></a>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<!-- share-on -->
					</li>
					<li>
						<img  src="resources/images/slide.jpg" class="img-responsive" alt="">
						<div class="slider-caption">
							<div class="slider-caption-left text-center">
								<h1>Mencari yang manis, enak, lezat dan empuk ?</h1>
								<p>Tidak usah khawatir, lihat saja di katalog kue</p>
								<a class="buy-btn" href="#">Beli Sekarang</a>
							</div>
							<div class="slider-caption-right">
								<a href="#"><img src="resources/images/iteam.png" class="img-responsive" title="name" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<!-- share-on -->
						<div class="share-on">
							<div class="share-on-grid">
								<div class="share-on-grid-left">
									<h3>Bagikan</h3>
								</div>
								<div class="share-on-grid-right">
									<a href="#"><span class="facebook"> </span></a>
									<a href="#"><span class="twitter"> </span></a>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<!-- share-on -->
					</li>
					<li>
						<img src="resources/images/slide.jpg" class="img-responsive" alt="">
						<div class="slider-caption">
							<div class="slider-caption-left text-center">
								<h1>Mencari yang manis, enak, lezat dan empuk ?</h1>
								<p>Tidak usah khawatir, lihat saja di katalog kue</p>
								<a class="buy-btn" href="#">Beli Sekarang</a>
							</div>
							<div class="slider-caption-right">
								<a href="#"><img src="resources/images/iteam.png" class="img-responsive" title="name" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="share-on">
							<div class="share-on-grid">
								<div class="share-on-grid-left">
									<h3>Bagikan</h3>
								</div>
								<div class="share-on-grid-right">
									<a href="#"><span class="facebook"> </span></a>
									<a href="#"><span class="twitter"> </span></a>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<img src="resources/images/slide.jpg" class="img-responsive" alt="">
						<div class="slider-caption">
							<div class="slider-caption-left text-center">
								<h1>Mencari yang manis, enak, lezat dan empuk ?</h1>
								<p>Tidak usah khawatir, lihat saja di katalog kue</p>
								<a class="buy-btn" href="#">Beli Sekarang</a>
							</div>
							<div class="slider-caption-right">
								<a href="#"><img src="resources/images/iteam.png" class="img-responsive" title="name" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="share-on">
							<div class="share-on-grid">
								<div class="share-on-grid-left">
									<h3>Bagikan</h3>
								</div>
								<div class="share-on-grid-right">
									<a href="#"><span class="facebook"> </span></a>
									<a href="#"><span class="twitter"> </span></a>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="top-grids">
		<div class="container">
			<?php $i=0; foreach ($posts as $post) { 


				?>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3><?php echo $post->nama_produk ?></h3>
					</div>
					<div class="top-grid-info">
						<img src="foto_produk/<?php echo $post->foto_produk; ?>" style="height:250px;" class="img-responsive" title="name"/>
						<p><?php echo $post->deskripsi ?></p>
						<span><?php echo "Rp ".$post->harga."/pcs"; ?></span>
						<div class="clearfix"> </div>
						<a class="btn" href="#">Beli</a>
					</div>
				</div>
				<?php $i++;

				if ($i==3) {
					break;
				}

			} ?>
				<!-- <div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>Roti Kita</h3>
					</div>
					<div class="top-grid-info">
						<img src="resources/images/img2.jpg" class="img-responsive" title="name"/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						<span>Rp. 2300,-</span>
						<div class="clearfix"> </div>
						<a class="btn" href="#">Beli</a>
					</div>
				</div>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>Roti Kita</h3>
					</div>
					<div class="top-grid-info">
						<img src="resources/images/img3.jpg" class="img-responsive" title="name"/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
						<span>Rp. 1500,-</span>
						<div class="clearfix"> </div>
						<a class="btn" href="#">Beli</a>
					</div>
				</div> -->
			</div>
			<div class="top-grids-bg">
				<span> </span>
			</div>
		</div>
		<div class="bottom-grids">
			<div class="container">
				<div class="col-md-8 bottom-grid-left">
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="resources/images/pic2.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="resources/images/pic1.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="resources/images/pic3.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="resources/images/pic4.jpg" title="name"/>
						<h4>kids birthday cake</h4>
						<p>$40</p>
					</div>
					<div class="clearfix"> </div>
					<span class="best-sale">Best sellers</span>
					<a href="#" class="order"> </a>
				</div>
				<div class="col-md-4 bottom-grid-right">
					<h3><span class="tweet"> </span> latest tweet</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
					<label>1 day ago</label>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</body>
	</html>

