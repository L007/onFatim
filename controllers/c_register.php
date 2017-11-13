<?php 
	/**
	* 
	*/
	class RegisterController
	{

		public function register(){
			$error='';
			require_once('views/pages/register.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		public function createUser(){
			$User = Register::createUser($_POST["nama"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["no_telepon"]);
		

		header("location:index.php?controller=login&action=login");
	}



}
?>