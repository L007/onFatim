<?php 
Class LaporanController{

	public function laporanAdminCabang(){
		$posts=Laporan::laporanCabang();
		require_once("views/pages/laporan_admin_cabang.php");
	}
	public function showTransCabang(){
		require_once('views/pages/laporan_transaksi_cabang.php');
	}
	public function laporanTransaksiCabang(){
		$posts=Laporan::laporanTransaksiCabang();
		require_once("views/pages/laporan_transaksi_cabang.php");
	}
	public function editStatusTransaksiCabang(){
		$posts=Laporan::editStatusTransaksiCabang($_GET['id_order']);
		header("location:index.php?controller=laporan&action=laporanTransaksiCabang");
	}
	public function detailTransaksiCabang(){
		$posts=Laporan::detailTransaksiCabang($_GET['id_order']);
		require_once("views/pages/laporan_detail_transaksi_cabang.php");
	}


}

?>
