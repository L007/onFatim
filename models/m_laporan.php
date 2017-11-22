<?php 
class Laporan
{
	public $id_produk;
	public $nama_produk;
	public $jumlah_terjual;
	public $total_harga;
	public $sisa_stok;
	public $tanggal;
	function __construct($id_produk,$nama_produk,$jumlah_terjual,$total_harga,$sisa_stok,$tanggal)
	{
		
		$this->id_produk=$id_produk;
		$this->nama_produk=$nama_produk;
		$this->jumlah_terjual=$jumlah_terjual;
		$this->total_harga=$total_harga;
		$this->sisa_stok=$sisa_stok;
		$this->tanggal=$tanggal;

	}

	
	public static function laporanCabang(){
		$list=[];
		$cabang=$_SESSION["login_user"];
		$db = DB::getInstance();

		$req = $db->query("SELECT p.id_produk,p.nama_produk,SUM(jumlah) AS jumlah_terjual,SUM(total_harga) AS total_harga
			,p.jumlah_stok-SUM(jumlah)AS sisa_stok,tanggal
			FROM tb_penjualan tbp JOIN users u on tbp.id_user=u.id_user
			JOIN produk p ON tbp.id_produk=p.id_produk
			where p.cabang='$cabang'
			GROUP by tbp.id_produk,MONTH(tanggal)");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Laporan($post['id_produk'],$post['nama_produk'],$post['jumlah_terjual'],$post['total_harga'],
				$post['sisa_stok'],$post['tanggal']
				);
		}


		return $list;
	}




}

?>