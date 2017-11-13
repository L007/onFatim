<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Tambah Roti</h1>
	<form method="POST" enctype="multipart/form-data">

		<input class="hidden" name="controller" value="produk"></input>
		<input class="hidden" name="action" value="createProduk"></input>

		<table cellpadding="8">
			<tr>
				<td>Nama roti</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah Stok</td>
				<td>
					<input type="text" name="jumlah_stok">
				</td>
			</tr>
			<tr>
				<td>Cabang</td>
				<td><input type="text" name="cabang"  value="<?php echo $_SESSION['login_user']; ?>" disabled></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="foto"></td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Simpan">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
