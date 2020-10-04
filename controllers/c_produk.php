<?php 
Class ProdukController{

	public function createProduk(){
		
		if (isset($_SESSION['login_user'])) {
			
			require_once("views/pages/penjual/inputProduk.php");
		}
		else{
			header('location:index.php?controller=login&action=login');
		}
		


	}
	public function prosesCreateProduk(){
		/*	echo "test";*/
		/*var_dump($_POST);
		exit;*/
		$foto = $_FILES['foto_produk']['name'];
		$tmp = $_FILES['foto_produk']['tmp_name'];
		/*$cabang=$_POST['cabang'];*/

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
		$path = "foto_produk/".$fotobaru;
// Proses upload
		if (move_uploaded_file($tmp, $path)) {
			$Produk = Produk::createProduk($_POST["nama_produk"],$_POST["harga"],$_POST["jumlah_stok"]
				,$fotobaru,$_POST["deskripsi"]);
		}

		header("location:index.php?controller=produk&action=showAllProdukPenjual");
		//require_once("views/pages/createProduk.php");

		//require_once("views/pages/penjual/inputProduk.php");


	}
	public function showAllProdukPenjual(){
		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::showAllProdukPenjual($_SESSION['id_user']);
			require_once('views/pages/penjual/lihatDataProduk.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}


	}

	public function editProduk(){

		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::editProduk($_GET['id_produk']);
			require_once('views/pages/penjual/editProduk.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}


		
	}
	public function updateDataProduk(){
		$posts=Produk::updateDataProduk($_POST['id_produk'],$_POST["nama_produk"],$_POST["harga"],$_POST["jumlah_stok"],$_POST["deskripsi"]);
		header('location:index.php?controller=produk&action=showAllProdukPenjual');
	}
	public function deleteDataProdukPenjual(){
		$posts=Produk::deleteDataProdukPenjual($_GET['id_produk']);
		header('location:index.php?controller=produk&action=showAllProdukPenjual');
	}

	public function detailProduk(){

		
		
		$posts=Produk::showDetailProduk($_GET['id_produk']);
		require_once('views/pages/detailProduk.php');
		
		


		
	}


	public function detailBeliProduk(){

		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::showDetailProduk($_GET['id_produk']);
			require_once('views/pages/pembeli/detailProduk.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}


		
	}
}
?>
