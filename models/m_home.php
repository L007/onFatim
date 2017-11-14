<?php 
class Home
{
	
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

}

?>