<?php 

	class Login
	{
		public $username;
		public $password;
		function __construct($username,$password)
		{
			$this->username = $username;
			$this->password = $password;
		}

		public static function find($username, $password){
			$db = DB::getInstance();
			$req = $db->prepare('SELECT * FROM users WHERE username= :username and password= :password'); // :variabel lokal

			$req->execute(array('username'=>$username,'password'=>$password)); //variabel lokal diisi dari constructor
			$auth = $req->fetch();
			$_SESSION["id_user"]=$auth["id_user"];
			if(count($auth)>1){
				return $auth['level'];//return dari DB
			}else{
				return 0;
			}
			foreach ($req->fetchAll() as $post) {
				$list[] = new Login($post['username'],$post['password']); //dari database
			}
			return $list;
		}
	}
	?>