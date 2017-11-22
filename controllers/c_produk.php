<?php 
class ProdukController
{
	public function createProduk(){
		/*	echo "test";*/
		/*var_dump($_POST);
		exit;*/
		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		/*$cabang=$_POST['cabang'];*/

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
		$path = "foto_produk/".$fotobaru;
// Proses upload
		if (move_uploaded_file($tmp, $path)) {
			$Produk = Produk::createProduk($_POST["nama_produk"],$_POST["harga"],$_POST["jumlah_stok"],$_POST["cabang"],$fotobaru);
		}

		header("location:index.php?controller=home&action=homeCabang");
		//require_once("views/pages/createProduk.php");
	}

	public function showProduk(){
		require_once("views/pages/createProduk.php");
	}

	public function allProduk(){
		require_once("views/pages/tambahProduk.php");
	}
	public function editProdukCabang(){
		$posts = Produk::editProdukCabang($_GET["id_produk"]);
		require_once("views/pages/edit_produk.php");
	}
	public function editDataProdukCabang(){
		
		
			$posts = Produk::editDataProdukCabang($_GET["nama_produk"],$_GET["harga"],$_GET["jumlah_stok"],
				$_GET["cabang"],$_GET["id_produk"]);
		


		//$posts = Produk::editDataProdukCabang($_GET["id_produk"]);
		header("location:index.php?controller=home&action=homeCabang");
	}






	public function error(){
		require_once('views/pages/error.php');
	}
}
?>