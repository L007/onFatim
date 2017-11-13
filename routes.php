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
		break;

		case 'produk':
		require_once('models/m_produk.php');
		$controller=new ProdukController();
		break;
		
		
	}
	$controller->{ $action }();
}

$controllers = array('login' => ['login', 'error','authentication'],
	'register'=>['register','createUser','error'],
	'home'=>['home','homeAdmin','homeCabang','homeUser','homeKelurahan'],
	'produk'=>['createProduk','showProduk','allProduk'],


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