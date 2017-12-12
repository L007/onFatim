<?php 
Class KeranjangController{

	public function addCart(){

		$_SESSION['id_produk'][]=$_GET['id_produk'];
		$_SESSION['jumlah'][]=$_GET['jumlah'];
		header("location:index.php?controller=keranjang&action=showCart&cabang=cbg_patrang");

		//$posts=Keranjang::showCart($_SESSION['id_produk'],$_SESSION['jumlah']);



		


	}


	public function showCart(){
		$cabang=Home::showCabang();

		if(array_key_exists('id_produk',$_SESSION) && !empty($_SESSION['id_produk'])) {
			$id_produk=$_SESSION['id_produk'];


			$posts=Keranjang::showCart($id_produk);  

		}



		require_once("views/pages/keranjang.php");


	}

	public function clearCart(){
		unset($_SESSION['id_produk']);
		unset($_SESSION['jumlah']);
		header("location:index.php?controller=home&action=homeUser&cabang=cbg_patrang");
	}
	public function bayarCart(){
		$id_produk=$_SESSION["id_produk"];
		$jumlah=$_SESSION["jumlah"];
		$id_user=$_SESSION["id_user"];

		$posts=Keranjang::bayarCart($id_user,$id_produk,$jumlah);
		header("location:index.php?controller=keranjang&action=kodeUnik&cabang=cbg_patrang"); 
	}
	public function kodeUnik(){
		$id_user=$_SESSION["id_user"];
		$posts=Kode::kodeUnik($id_user);
		require_once('views/pages/kodeUnik.php');
	}
	

}

?>
