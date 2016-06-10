<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Projectmodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_project');
		$query = $this->db->get('data_project');
		return $query->row()->id_project;
	}

	public function tambahproject($nopro, $namapro, $owner, $imo, $panjang, $lebar, $tinggi, $sarat, $gtflag, $keel, $launching, $comm, $inclining, $seatrial, $delivery){
		$data = array (
			'id_project' => $nopro,
			'nama_project' => $namapro,
			'owner' => $owner,
			'imo' => $imo,
			'panjang_kapal' => $panjang,
			'lebar_kapal' => $lebar,
			'tinggi_kapal' => $tinggi,
			'sarat_kapal' => $sarat,
			'gt_flag' => $gtflag,
			'keel_laying' => $keel,
			'launching' => $launching,
			'comm_prog' => $comm,
			'inclining' => $inclining,
			'sea_trial' => $seatrial,
			'delivery' => $delivery
		);
		
		if($this->db->insert('data_project', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function updateproject($idproj, $namapro, $owner, $imo, $panjang, $lebar, $tinggi, $sarat, $gtflag, $keel, $launching, $comm, $inclining, $seatrial, $delivery){
		$data = array (
			'nama_project' => $namapro,
			'owner' => $owner,
			'imo' => $imo,
			'panjang_kapal' => $panjang,
			'lebar_kapal' => $lebar,
			'tinggi_kapal' => $tinggi,
			'sarat_kapal' => $sarat,
			'gt_flag' => $gtflag,
			'keel_laying' => $keel,
			'launching' => $launching,
			'comm_prog' => $comm,
			'inclining' => $inclining,
			'sea_trial' => $seatrial,
			'delivery' => $delivery
		);


		$this->db->where('id_project', $idproj);
		if($this->db->update('data_project', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	function ambillistproject() {		
		$query = $this->db->get( 'data_project' );
		return $query;
	}

	function ambildetailproject($nilai) {	
		$param = $nilai;
		$this->db->where('id_project', $param);	
		$query = $this->db->get( 'data_project' );
		return $query;
	}


	
}