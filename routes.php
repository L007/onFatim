<?php 
function call($controller, $action){
	require_once('controllers/c_'.$controller.'.php');

	switch ($controller) {
		case 'login':
		require_once('models/m_login.php');
		$controller=new LoginController();
		break;

		case 'register':
		require_once('models/m_register.php');
		$controller=new RegisterController();
		break;

		case 'home':
		$controller=new HomeController();
		require_once('models/m_home.php');
		require_once('models/m_produk.php');
		break;

		case 'produk':
		require_once('models/m_home.php');
		require_once('models/m_produk.php');
		$controller=new ProdukController();
		break;

		case 'laporan':
		require_once('models/m_laporan.php');
		$controller=new LaporanController();
		break;

		case 'keranjang':
		require_once('models/m_home.php');
		require_once('models/m_kode.php');
		require_once('models/m_keranjang.php');
		$controller=new KeranjangController();
		break;
		
		
	}
	$controller->{ $action }();
}

$controllers = array('login' => ['login', 'error','authentication'],
	'register'=>['register','createUser','error'],
	'home'=>['awal','pilihCabang','home','homeAdmin','homeCabang','homeUser','showStat','showTransaksiUser'],
	'produk'=>['createProduk','tambahProduk','showProduk','showProdukCabang','detailProduk','allProduk','editProdukCabang','editDataProdukCabang','deleteDataProdukCabang'],
	'laporan'=>['laporanAdminCabang','laporanTransaksiCabang','editStatusTransaksiCabang','detailTransaksiCabang'],
	'keranjang'=>['addCart','showCart','clearCart','bayarCart','kodeUnik']


	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>