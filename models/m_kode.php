<?php 
Class Kode{
public $kodeUnik;
	function __construct($kodeUnik){
		$this->kodeUnik=$kodeUnik;
	}


	public static function kodeUnik($id_user){
		$db = DB::getInstance();
		$list=[];
		$select1=$db->query("SELECT * from orders where id_user=$id_user order by id_order DESC LIMIT 0,1");
		foreach ($select1->fetchAll() as $post) {
			$list[]=new Kode($post['id_order']);
		}
		return $list;
	}
}


?>