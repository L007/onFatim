<?php 
class Keranjang
{
	
	public $id_produk;
	public $jumlah;
	
	public $nama_produk;
	public $harga;
	public $jumlah_stok;
	public $cabang;
	public $foto_produk;
	public $deskripsi;
	//public $kodeUnik;
	function __construct($id_produk,$nama_produk,$harga,$jumlah_stok,$cabang,$foto_produk,$deskripsi,$jumlah)
	{
		
		$this->id_produk=$id_produk;
		$this->jumlah=$jumlah;
		$this->nama_produk=$nama_produk;
		$this->harga=$harga;
		$this->jumlah_stok=$jumlah_stok;
		$this->cabang=$cabang;
		$this->foto_produk=$foto_produk;
		$this->deskripsi=$deskripsi;


	}

	public static function showCart($id_produk){
		//$i=0;
		$id=implode(",", $id_produk);

		$list=[];

		$db = DB::getInstance();

		//$req = $db->query("SELECT * FROM produk where id_produk in ($id)");
		for ($i=0; $i < count($_SESSION["id_produk"]); $i++) { 
			$req = $db->query("SELECT * FROM produk where id_produk=".$_SESSION['id_produk'][$i]);

			foreach ($req->fetchAll() as $post) {
				$list[$i] = new Keranjang($post['id_produk'],$post['nama_produk'],$post['harga'],$post['jumlah_stok'],
					$post['cabang'],$post['foto_produk'],$post['deskripsi'],$_SESSION["jumlah"][$i]
					);
				//$i++;
			}

		}

		


		return $list;
	}

	public static function bayarCart($id_user,$id_produk,$jumlah){
		$db = DB::getInstance();
		$insert1 = $db->query("INSERT INTO orders (id_order, id_user,tanggal,status) 
			VALUES (NULL, '".$id_user."',curdate(),'belum bayar')");

		$id_order;
		$select1=$db->query("SELECT * from orders where id_user=$id_user order by id_order DESC LIMIT 0,1");
		foreach ($select1->fetchAll() as $post) {
			$id_order=$post["id_order"];
		}


		for ($i=0; $i < count($_SESSION["id_produk"]) ; $i++) { 
			$insert2 = $db->query("INSERT INTO 
				`detail_order`(`id_order`, `id_produk`, `jumlah`, `total_harga`, `tanggal`) 
				VALUES ($id_order,".$_SESSION['id_produk'][$i].",".$_SESSION['jumlah'][$i].",
					(SELECT harga from produk where id_produk=".$_SESSION['id_produk'][$i].")*".$_SESSION['jumlah'][$i].",curdate())");
		}

		unset($_SESSION['id_produk']);
		unset($_SESSION['jumlah']);
/*
		$kodeUnik=$db->query("SELECT * from orders where id_user=$id_user order by id_order DESC LIMIT 0,1");
		foreach ($kodeUnik->fetchAll() as $post) {
			//$id_order=$post["id_order"];
			$unik=array('unik'=>$post["id_order"]

				);
}*/
return $insert2;
}


}




?>