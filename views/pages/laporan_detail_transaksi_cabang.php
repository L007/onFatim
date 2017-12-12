<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default" style="background: #242D3E; border-color: #242D3E;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: #ffffff;">ADMIN Cabang | Laporan Transaksi</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="?controller=home&action=homeCabang" style="color: #ffffff;">Beranda <span class="sr-only">(current)</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Kelola <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="?controller=produk&action=tambahProduk">Roti</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">Laporan <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Penjualan</a></li>
								<li><a href="?controller=laporan&action=laporanTransaksiCabang">Transaksi</a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</li>
						<li><a href="index.php" style="color: #ffffff;">Logout</a></li>
						<li><a href="#">|</a></li>
						<li><a href="#" style="font-weight: bold; color: red;">
							<?php echo $_SESSION['login_user']; ?></a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		<div style="background-color: #EDE0E4;">
			<div class="row">
				<br>
				<br>
				<div class="col-md-2">
					<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="thumbnail card col-md-10">
							<a href="#">
								<img src="resources/images/foot.png" alt="kue" style="width:100%">
							</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="thumbnail card col-md-10">
							<a href="">
								<img src="resources/images/foot.png" alt="kue" style="width:100%">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-8" style="background-color: #FADAA3; border-radius: 10px; margin-bottom: 2 b0px;">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-8">
								<h1 style="text-align: left;">Laporan Transaksi</h1>
							</div>
						</div>
					</div>
					<br>
					<br>
					<table class="table" style="margin-top: 30px;">

						<tr>
							<th style="text-align: left;">No</th>
							<th>Nama Produk</th>
							<th>Jumlah pesanan</th>
							<th>Total harga</th>
							<th>Tanggal</th>
							
							
						</tr>

						<?php 
						$i=1;
						$totalBayar=0;
						foreach ($posts as $post) {
					# code...
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $post->nama_produk; ?></td>
								<td><?php echo $post->jumlah; ?></td>
								<td><?php echo "Rp ". number_format($post->total_harga,0,".","."); ?></td>
								<td><?php echo $post->tanggal; ?></td>
						<!-- 		<td>
									<a href="?controller=laporan&action=editStatusTransaksiCabang&id_order=<?php echo $post->id_order ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></a>
									<a href="?controller=laporan&action=editStatusTransaksiCabang&id_order=<?php echo $post->id_order ?>"> <button class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></button></a>
								</td> -->
								

							</tr>      
							<?php
							$i++;
							$totalBayar+=$post->total_harga;
						} ?>
					</table>
					<div class="col-md-8">

					</div>
					<div class="col-md-4"><font color="green" >
						<h3>Total Bayar	: <?php echo "Rp ". number_format($totalBayar,0,".","."); ?> </h3>
					</font>
				</div>
			</div>
			<div class="col-md-2">
				<div class="col-md-12">
					<div class="col-md-1"></div>
					<div class="thumbnail card col-md-10">
						<a href="#">
							<img src="resources/images/foot.png" alt="kue" style="width:100%">
						</a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-1"></div>
					<div class="thumbnail card col-md-10">
						<a href="">
							<img src="resources/images/foot.png" alt="kue" style="width:100%">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>