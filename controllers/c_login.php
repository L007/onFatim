<?php 
	/**
	* 
	*/
	class LoginController
	{

		public function login(){
			$error='';
			require_once('views/pages/login.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		public function authentication(){
			$error='';
			if (!isset($_POST['username'])) {
				//return call('pages','error');
			}
			if(Login::find($_POST['username'],$_POST['password'])==0){
				$error="username atau password  tidak valid";
				require_once('views/pages/login.php');
			}else if(Login::find($_POST['username'],$_POST['password'])==1){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=home&action=homeAdmin");
			}elseif(Login::find($_POST['username'],$_POST['password'])==2){
				$_SESSION['login_user']=$_POST['username'];
				
				header("location:index.php?controller=home&action=homeCabang");
			}
			elseif(Login::find($_POST['username'],$_POST['password'])==3){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=home&action=homeUser&cabang=cbg_patrang");
			}
			elseif(Login::find($_POST['username'],$_POST['password'])==4){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=order&action=orderCustomer");
			}
			elseif(Login::find($_POST['username'],$_POST['password'])==5){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=home&action=homePariwisata");
			}
			elseif(Login::find($_POST['username'],$_POST['password'])==6){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=home&action=homePerdagangan");
			}
			else{
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=order&action=orderSupir");
			}
		}
		
}
?>