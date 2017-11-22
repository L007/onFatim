<!DOCTYPE HTML>
<html>
<head>
	

</head>
<body>
	<div class="top-header">
		<div class="container">
			<div class="top-header-left">
				<ul>
					<li><a href="index.php"> On-Fatim</a></li>
					<li><a href="#"> </a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="top-header-center">
				<p><span> </span> <label> </label></p>
			</div>
			<div class="top-header-right">
				<ul>
					<li>
						<form>
							<input type="text">
							<input type="submit" value="" />
						</form>

					</li>
					<li><a href="?controller=login&action=login">Masuk</a></li>
					<li><a href="?controller=register&action=register">Daftar</a></li>
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
					<li><a href="products.html">Produk</a></li>
					<li><a href="about.html">Tentang</a></li>
					<li><a href="contact.html">Kontak</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>	
			<script>
				$( "span.menu" ).click(function() {
					$( ".head-nav ul" ).slideToggle(300, function() {
					});
				});
			</script>

			<div class="logo">
				<a href="index.html"><img src="resources/images/logo.png" title="Sweetcake" /></a>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="login-page">
				<div class="account_grid">
					<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
						<h3>Member Baru</h3>
						<p>Dengan Menjadi member fatimah kalian akan dapat berita terbaru tentang produk baru dan mendapatkan potongan
							sampai 50%
						</p>
						<a class="acount-btn" href="?controller=register&action=register">Daftar Sekarang</a>
					</div>
					<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
						<h3>Member Login</h3>
						<p>Jika Mempunyai Akun, Login sekarang</p>
						<form method="POST">
							<input type="hidden" name="controller" value="login">
							<input type="hidden" name="action" value="authentication">
							<div>
								<span>Username<label>*</label></span>
								<input name="username" type="text" 
								value="<?=isset($_POST["username"]) ? $_POST["username"] : NULL?>" required autofocus>
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input name="password" type="password" 
								value="<?=isset($_POST["password"]) ? $_POST["password"] : NULL?>" required>
							</div>
							<a class="forgot" href="#">Lupa Password?</a>
							<!-- <button type="submit">LOGIN</button> -->
							<i><b><?php echo $error ?></b></i>
							<input type="submit" value="Login">
						</form>
					</div>	
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	

</body>
</html>

