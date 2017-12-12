<?php 
class Home
{
	public $cabang;
	public $terjual;
	public $jumlah_stok;
	public $nama_produk;
	public $id_user;
	public $kode_unik;
	public $tanggal;
	public $status;
	function __construct($cabang,$nama_produk,$jumlah_stok,$terjual,$id_user,$kode_unik,$tanggal,$status)
	{
		
		$this->cabang=$cabang;
		$this->nama_produk=$nama_produk;
		$this->jumlah_stok=$jumlah_stok;
		$this->terjual=$terjual;
		$this->id_user=$id_user;
		$this->kode_unik=$kode_unik;
		$this->tanggal=$tanggal;
		$this->status=$status;

	}

	
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
			$list[] = new Home($post['nama'],"","","","","","","");
		}


		return $list;
	}

	public static function showStat(){
		$list=[];
		$terjual;
		$jumlah_stok;
		$nama_produk;
		$db = DB::getInstance();

		$req = $db->query("SELECT SUM(jumlah) AS terjual from detail_order GROUP BY Month(tanggal)");
		$req2 = $db->query("SELECT sum(jumlah_stok) as jumlah_stok FROM produk");
		$req3 = $db->query("SELECT p.nama_produk FROM detail_order dp
			JOIN produk p on dp.id_produk=p.id_produk
			GROUP by dp.id_produk,Month(dp.tanggal)
			order by dp.id_produk
			desc LIMIT 0,1");

		foreach ($req->fetchAll() as $post) {
			$terjual = $post['terjual'];
		}
		foreach ($req2->fetchAll() as $post) {
			$jumlah_stok = $post['jumlah_stok'];
		}
		foreach ($req3->fetchAll() as $post) {
			$nama_produk = $post['nama_produk'];
		}
		$list[]=new Home("",$nama_produk,$jumlah_stok,$terjual,"","","","");

		return $list;
	}

	public static function showJumlahPelanggan(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT id_user from orders GROUP by id_user,Month(tanggal)");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Home("","","","",$post['id_user'],"","","");
		}


		return $list;
	}

	public static function showTransaksiUser($id_user){
		$list=[];
		$db=DB::getInstance();
		$req=$db->query("SELECT * from orders where id_user=$id_user");

			foreach ($req->fetchAll() as $post) {
			$list[] = new Home("","","","","",$post['id_order'],$post['tanggal'],$post['status']);
		}
		return $list;
	}




}

?>