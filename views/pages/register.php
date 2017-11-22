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
				<p><span > </span> <label> </label></p>
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
		<div class="main">
			<div class="container">
				<div class="register">
					<form method="POST"> 
						<input type="hidden" name="controller" value="register">
						<input type="hidden" name="action" value="createUser">
						<div class="register-top-grid">
							<h3>Biodata Personal</h3>
							<div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Nama<label>*</label></span>
								<input type="text" name="nama"> 
							</div>
							<div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Username<label>*</label></span>
								<input type="text" name="username"> 
							</div>
							<div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Alamat Email<label>*</label></span>
								<input type="text" name="email"> 
							</div>
							<div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>No Telepon<label>*</label></span>
								<input type="text" name="no_telepon"> 
							</div>
						<!-- 	<div class="clearfix"> </div>


							<a class="news-letter" href="#">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
							</a> -->
						</div>
						<div class="register-bottom-grid">
							<h3>Informasi Login</h3>
							<div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input type="password" name="password">
							</div>
							<div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Konfirmasi Password<label>*</label></span>
								<input type="password" name="password2">
							</div>
						</div>
						<div class="clearfix"> </div>
						<div class="register-but">
							
								<input type="submit" value="submit">
								<div class="clearfix"> </div>

						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>