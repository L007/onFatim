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
			<br><br><br>
			<table class="table" style="margin-top: 30px;">

				<tr>

					<th>No</th>
					<!-- <th>id produk</th> -->
					<th>Kode unik</th>
					<th>tanggal</th>
					<th>status</th>
					
					

				</tr>

				<?php 
				$no=1;
				foreach ($posts as $data) { ?>
				

				<tr>
					<td><?php echo $no; ?></td>

					<td><?php echo $data->kode_unik; ?></td>
					<td><?php echo $data->tanggal; ?></td>
					<td><?php echo $data->status; ?></td>


				</tr>
			<?php
			}
			$no++;
			?>


		</table>


	</div>
	<br><br><br>
</body>
</html>