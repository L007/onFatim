<?php 
class Laporan
{
	public $id_produk;
	public $nama_produk;
	public $jumlah_terjual;
	public $total_harga;
	public $sisa_stok;
	public $tanggal;
	public $peramalan;

	public $id_order;
	public $nama;
	public $status;
	public $jumlah;



	function __construct($id_produk,$nama_produk,$jumlah_terjual,$total_harga,$sisa_stok,$tanggal,$peramalan,$id_order,$nama,$status,$jumlah)
	{
		
		$this->id_produk=$id_produk;
		$this->nama_produk=$nama_produk;
		$this->jumlah_terjual=$jumlah_terjual;
		$this->total_harga=$total_harga;
		$this->sisa_stok=$sisa_stok;
		$this->tanggal=$tanggal;
		$this->peramalan=$peramalan;
		$this->id_order=$id_order;
		$this->nama=$nama;
		$this->status=$status;
		$this->jumlah=$jumlah;

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
			$a=0.5;
			$single=($a*1)+($a*$post['jumlah_terjual']);
			$peramalan=($a*$single)+$a*1;



			$list[] = new Laporan($post['id_produk'],$post['nama_produk'],$post['jumlah_terjual'],$post['total_harga'],
				$post['sisa_stok'],$post['tanggal'],$peramalan
				);
		}


		return $list;
	}

	public function laporanTransaksiCabang(){
		$list=[];
		$cabang=$_SESSION["login_user"];
		$db = DB::getInstance();

		$req = $db->query("SELECT id_order,u.nama,tanggal,status from orders o 
			JOIN users u ON o.id_user=u.id_user");

		foreach ($req->fetchAll() as $post) {

			$list[] = new Laporan("","","","","",$post['tanggal'],"",$post['id_order'],$post['nama'],$post['status'],""
				);
		}


		return $list;
	}
	public function editStatusTransaksiCabang($id_order){
		$db = DB::getInstance();

		$id_produk=array();
		$jumlah=array();
		

		
		$req2 = $db->query("SELECT * FROM detail_order WHERE id_order='$id_order'
			");
		foreach ($req2->fetchAll() as $post) {

			$id_produk[] = $post['id_produk'];
			$jumlah[]=$post['jumlah'];
		}

		$req3 = $db->query("SELECT status FROM orders WHERE id_order='$id_order'
			");
		foreach ($req3->fetchAll() as $post) {

			$status=$post['status'];
		}


		if (strcasecmp($status,"belum bayar")==0) {
			for ($i=0; $i <count($jumlah); $i++) { 
				$req4 = $db->query("UPDATE produk set jumlah_stok=jumlah_stok-'$jumlah[$i]' where 
					id_produk='$id_produk[$i]'
					");
			}
			
		}
		$req = $db->query("UPDATE orders set status='lunas' where id_order='$id_order'
			");




		return $req4;
	}
	public function detailTransaksiCabang($id_order){
		$list=[];
		$cabang=$_SESSION["login_user"];
		$db = DB::getInstance();

		$req = $db->query("SELECT p.nama_produk,dp.jumlah,dp.total_harga,dp.tanggal FROM detail_order dp
			JOIN produk p on dp.id_produk=p.id_produk
			WHERE id_order=$id_order");

		foreach ($req->fetchAll() as $post) {

			$list[] = new Laporan("",$post['nama_produk'],"",$post['total_harga'],"",$post['tanggal'],"","","","",$post['jumlah']
				);
		}


		return $list;
	}

}

?>