<!DOCTYPE html>
<html>
<head>
	<title>Pilih Cabang</title>

</head>
<body>
	<div class="container" style="background-image: url(resources/images/webcabang.png); background-repeat: no-repeat; background-position: center; margin-top: 90px; padding-top: 150px; padding-bottom: 200px; padding-left: 100px; padding-right: 100px;">
		<div class="row" style="margin-top: 250px; padding-left: 220px; padding-right: 150px; padding-top: 100px;">
			<div class="col-md-4">
				<form action="" method="">
					<input type="hidden" name="controller" value="home">
					<input type="hidden" name="action" value="home">
					
					<select class="form-control" id="pilihcabang" name="cabang" onchange="this.form.submit();">
					<option>pilih cabang</option>
						<?php foreach ($posts as $post) { 


							?>
							<option><?php echo $post->cabang ?></option>
							<?php } ?>

						<!-- 	<option>Patrang</option>
							<option>Talangsari</option>
							<option>Gebang</option> -->
						</select> 
						
					</form>
				</div>
			</div>
		</div>
	</body>
	</html>