<?php 
Class HomeController{

	public function home(){
		require_once("views/pages/home.php");
	}
	public function homeAdmin(){
		require_once("views/pages/admin.php");
	}
	public function homeCabang(){
		$posts=Produk::allProduk();
		require_once("views/pages/tambah_produk.php");
	}
	public function homeUser(){
		require_once("views/pages/homeUser.php");
	}


}

?>
