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
					<th>nama produk</th>
					<th>cabang</th>
					<th>jumlah</th>
					<th>total harga</th>

				</tr>

				<?php 
				$no=1;
				$i=0;

				$totalBayar=0;

				if (array_key_exists('id_produk',$_SESSION) && !empty($_SESSION['id_produk'])) {
					foreach ($posts as $post) { 
						$harga=$post->harga;
						$jumlahBeli=$post->jumlah;
						$totalHarga=$harga*$jumlahBeli;

						?>
						<tr>
							<td><?php echo $no; ?></td>
							<!-- <td><?php echo $post->id_produk; ?></td> -->
							<td><?php echo $post->nama_produk; ?></td>
							<td><?php echo $post->cabang; ?></td>
							<td><?php echo $post->jumlah ?></td>
							<td><?php echo "Rp ". number_format($totalHarga,0,".","."); ?></td>

						</tr>
						<?php 
						$no++;
						$i++; 
						$totalBayar+=$totalHarga;
					}


				} ?>


			</table>
			<div>
				<div class="col-md-8">

				</div>
				<div class="col-md-4"><font color="green" >
					<h3>Total Bayar	: <?php echo "Rp ". number_format($totalBayar,0,".","."); ?> </h3>
				</font>
				<div class="col-md-6"><a href="?controller=keranjang&action=bayarCart"><button class="btn btn-success" style="width:100%">Bayar</button></a></div>
				<div class="col-md-6"><a href="?controller=keranjang&action=clearCart"><button  class="btn btn-danger" style="width:100%" >Batal</button></a></div>

			</div>


		</div>

	</div>
	<br><br><br>
</body>
</html>