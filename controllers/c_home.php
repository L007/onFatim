<?php 
Class HomeController{

	public function awal(){
		$posts=Home::showCabang();
		require_once("views/pages/pilihCabang.php");
	}
	public function pilihCabang(){
		//header("location:index.php?controller=home&action=home");
	}
	public function home(){
		$cabang=Home::showCabang();
		$posts=Produk::showProdukCabang($_GET["cabang"]);
		require_once("views/pages/home.php");
	}
	public function homeAdmin(){
		require_once("views/pages/admin.php");
	}
	public function homeCabang(){
<<<<<<< HEAD
		$posts=Produk::showProdukCabang($_SESSION['login_user']);
=======
		$posts=Produk::allProduk();
>>>>>>> 253dce0d91ee938e201db1824358bc4dfdb802b8
		require_once("views/pages/tambah_produk.php");
	}
	public function homeUser(){
		$cabang=Home::showCabang();
		$posts=Produk::showProdukCabang($_GET["cabang"]);
		require_once("views/pages/homeUser.php");
	}


}

?>
