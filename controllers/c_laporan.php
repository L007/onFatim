<?php 
Class LaporanController{

	public function laporanAdminCabang(){
		$posts=Laporan::laporanCabang();
		require_once("views/pages/laporan_admin_cabang.php");
	}
	


}

?>
