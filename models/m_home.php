<?php 
class Home
{
	public $cabang;
	function __construct($cabang)
	{
		
		$this->cabang=$cabang;

	}

	
<<<<<<< HEAD
	public static function allProduk(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['harga'],$post['jumlah_stok'],
				$post['cabang'],$post['foto_produk']
				);
		}


		return $list;
	}
	public static function showCabang(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT nama FROM users where level=2");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Home($post['nama']);
		}


		return $list;
	}


=======
public static function allProduk(){
		$list=[];
>>>>>>> 253dce0d91ee938e201db1824358bc4dfdb802b8

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['harga'],$post['jumlah_stok'],
				$post['cabang'],$post['foto_produk']
				);
		}


		return $list;
	}

}

?>