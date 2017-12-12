<!DOCTYPE html>
<html>
<head>
	<title></title>
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
					<p><a style="color: white;" href="?controller=keranjang&action=showCart&cabang=cbg_patrang"><span class="cart"> </span>Keranjang</p>
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
						<li class="active"><a href="index.php">Rumah</a></li>
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

			<div class="row" style="margin-top: 150px; margin-bottom: 150px;">
				<div class="panel-heading" style="background-color: #526485; border: none;">
					<header class="panel-title">
						<div class="text-center">
							<strong style="color: white;">KODE UNIK</strong>
						</div>
					</header>
				</div>
				<section class="panel" style="border-radius: 0px 0px 7px 7px; background-color: #242D3E; padding-bottom: 85px;">
					<div class="value text-center">
						<br>
						<h1 style="color: white;"><p style="font-size:100px;">Selamat</p> transaksi anda sedang diproses 
						dengan kode </h1>
						<br>

						<?php foreach ($posts as $post) {
							?>
							<h1 class="count4" style="color: RED; font-size: 50px;"><?php echo $post->kodeUnik; ?></h1>
							<?php } ?>
							<br>
							<p style="color: white;">Silahkan untuk mengambil pesanan setelah 2 jam pembayaran</p>
							<p style="color: white;">Terima Kasih telah memesan di on-Fatim</p>
						</div>
					</section>
				</div>
			</div>
		</body>
		</html>