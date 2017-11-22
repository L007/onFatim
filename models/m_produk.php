<?php 
class Produk
{
	
	public $id_produk;
	public $nama_produk;
	public $harga;
	public $jumlah_stok;
	public $cabang;
	public $foto_produk;
	public $deskripsi;



	function __construct($id_produk,$nama_produk,$harga,$jumlah_stok,$cabang,$foto_produk,$deskripsi)
	{
		
		$this->id_produk=$id_produk;
		$this->nama_produk=$nama_produk;
		$this->harga=$harga;
		$this->jumlah_stok=$jumlah_stok;
		$this->cabang=$cabang;
		$this->foto_produk=$foto_produk;
		$this->deskripsi=$deskripsi;


	}

	public static function createProduk($nama_produk,$harga,$jumlah_stok,$cabang,$foto_produk){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO produk (id_produk, nama_produk, harga, jumlah_stok, cabang, foto_produk) 
			VALUES (NULL, '".$nama_produk."', '".$harga."', '".$jumlah_stok."', '".$cabang."', '".$foto_produk."');
			");

		return $req;
	}


	public static function allProduk(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk order by id_produk desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['harga'],$post['jumlah_stok'],
				$post['cabang'],$post['foto_produk']
				);
		}


		return $list;
	}


	public static function showProdukCabang($cabang){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk where cabang='$cabang' order by id_produk desc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['harga'],$post['jumlah_stok'],
				$post['cabang'],$post['foto_produk'],$post['Deskripsi']
				);
		}


		return $list;
	}

	public static function editProdukCabang($id_produk){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk where id_produk=$id_produk");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['harga'],$post['jumlah_stok'],
				$post['cabang'],$post['foto_produk']
				);
		}


		return $list;
	}

	public static function editDataProdukCabang($nama_produk,$harga,$jumlah_stok,$cabang,$id_produk){
		$db = DB::getInstance();

		$req = $db->query("UPDATE produk set nama_produk='$nama_produk', harga='$harga', jumlah_stok='$jumlah_stok',
		 cabang='$cabang' where id_produk='$id_produk'
		 ");

		return $req;
	}



}

?>