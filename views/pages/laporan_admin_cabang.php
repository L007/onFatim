<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default" style="background: #242D3E; border-color: #242D3E;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: #ffffff;">ADMIN Cabang | Laporan Penjualan</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" style="color: #ffffff;">Beranda <span class="sr-only">(current)</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Input <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Roti</a></li>
								<li><a href="#">Cabang</a></li>
								<li><a href="#">Penjualan</a></li>
								<li><a href="#">Pegawai</a></li>
								<li><a href="#">Pelanggan</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">Laporan <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</li>
						<li><a href="index.php" style="color: #ffffff;">Logout</a></li>
						<li><a href="#">|</a></li>
						<li><a href="#" style="font-weight: bold; color: red;">Admin</a></li>
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
							<img src="images/11.png" alt="kue" style="width:100%">
						</a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-1"></div>
					<div class="thumbnail card col-md-10">
						<a href="">
							<img src="images/11.png" alt="kue" style="width:100%">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-8" style="background-color: #FADAA3; border-radius: 10px; margin-bottom: 2 b0px;">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<h1 style="text-align: left;">Laporan Penjualan</h1>
						</div>
					</div>
				</div>
				<br>
				<br>
				<table class="table" style="margin-top: 30px;">

					<tr>
						<th style="text-align: left;">Kode Roti</th>
						<th>Tanggal Penjualan</th>
						<th>Nama Roti</th>
						<th>Jumlah Terjual</th>
						<th>Sisa Stok</th>
						<th>Peramalan bulan depan</th>
					</tr>
					
					<?php foreach ($posts as $post) {
					# code...
						?>
						<tr>
							<td><?php echo $post->id_produk; ?></td>
							<td><?php echo $post->tanggal; ?></td>
							<td><?php echo $post->nama_produk; ?></td>
							<td><?php echo $post->jumlah_terjual; ?></td>
							<td><?php echo $post->sisa_stok; ?></td>
							<td><?php echo $post->peramalan; ?></td>
						
						</tr>      
						<?php } ?>
					</table>
				</div>
				<div class="col-md-2">
					<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="thumbnail card col-md-10">
							<a href="#">
								<img src="images/11.png" alt="kue" style="width:100%">
							</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="thumbnail card col-md-10">
							<a href="">
								<img src="images/11.png" alt="kue" style="width:100%">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
	</html>