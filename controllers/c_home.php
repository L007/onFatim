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
		$posts=Home::showStat();
		$id=Home::showJumlahPelanggan();
		require_once("views/pages/menu_admin.php");
	}
	public function homeUser(){
		$cabang=Home::showCabang();
		$posts=Produk::showProdukCabang($_GET["cabang"]);

		require_once("views/pages/homeUser.php");
	}
	public function showTransaksiUser(){
		$cabang=Home::showCabang();
		$posts=Home::showTransaksiUser($_SESSION['id_user']);
		require_once('views/pages/transaksi_user.php');
	}
/*	public function showStat(){
		$cabang=Home::showCabang();
		$posts=Home::showStat();
		require_once("views/pages/menu_admin.php");
	}*/

}

?>
