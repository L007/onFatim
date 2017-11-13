<?php 
class Register
{
	
	public $nama;
	public $username;
	public $password;
	public $email;
	public $no_teleppon;




	function __construct($nama,$username,$password,$email,$no_teleppon)
	{
		
		$this->nama=$nama;
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
		$this->no_teleppon=$no_teleppon;


	}

	public static function createUser($nama,$username,$password,$email,$no_teleppon){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO users  
			VALUES (NULL, '".$nama."', '".$username."', '".$password."', '".$email."', '".'3'."', '".$no_teleppon."');
			");

		return $req;
	}


}

?>