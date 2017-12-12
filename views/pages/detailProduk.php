	<!DOCTYPE HTML>
	<html>
	<head>
		<title>Sweet-cakes Website Template | Home :: w3layouts</title>


	</head>
	<body>
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<li><a href="myaccount.html">Akunku</a></li>
						<li><a href="checkout.html">Bayar</a></li>
						<li class="dropdown navbar-nav">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_GET['cabang']; ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php foreach ($cabang as $post) {
									?>

									<li><a style="color: black;" href="?controller=home&action=homeUser&cabang=<?php echo $post->cabang; ?>"><?php echo $post->cabang; ?></a></li>
									<?php } ?>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="top-header-center">
						<p><span class="cart"> </span>Keranjang<label>$5256</label></p>
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
							<li><a href="index.html">Rumah</a></li>
							<li class="active"><a href="products.html">Produk</a></li>
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
			<div class="details">
				<div class="container">
					<div class="row single">
						<div classs="form-group">
						<form>
							<div class="col-md-9">
								<div class="single_left">
										
										<!-- <input type="" name="id_user" value="<?php echo $_SESSION["id_user"]; ?>"> -->
										<input type="hidden" name="controller" value="keranjang">
										<input type="hidden" name="action" value="addCart">
									<?php foreach ($posts as $post) {

										?>


								<input type="hidden" name="id_produk" value="<?php echo $post->id_produk; ?>">



										<div class="grid images_3_of_2">

											<img src="foto_produk/<?php echo $post->foto_produk; ?>" width="100%" height="300px">

											<div class="clearfix"></div>		
										</div>
										<div class="desc1 span_3_of_2">
											<h3><?php echo $post->nama_produk; ?><!-- Special Cake -Chocolate Truffle --></h3>
											<p><?php echo "Rp ". number_format($post->harga,0,".",".")."/pcs"; ?></p>
											<font size="5" color="green"> <?php echo "Stok : ".$post->jumlah_stok; ?></font>

											<br><br>
											<div class="form-group">
												<label style="color: #242D3E;">Jumlah pembelian </label>
												<input type="number" min="10" max="<?php echo $post->jumlah_stok; ?>" name="jumlah" class="form-control" placeholder="Masukkan jumlah pembelian" required autofocus>
											</div>

											
											
											<button type="submit" class="btn btn-success" style="width:40%" type="submit">Masukkan ke keranjang</button>


<!-- 											<div class="btn_form">
												<a href="transaksi.html">buy</a>
											</div> -->

										</div>
										<div class="clearfix"></div>
									</div>
									<div class="single-bottom1">
										<h6>Details</h6>
										<p class="prod-desc"><?php echo $post->deskripsi; ?></p>
									</div>
									<?php } ?>
								</div>
								</form>
							</div>

							<div class="clearfix"></div>	
						</div>
					</div>
				</div>

			</body>
			</html>

