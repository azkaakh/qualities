<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Comodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_comm');
		$query = $this->db->get('commissioning');
		return $query->row()->id_comm;
	}

	function ambilcomm($keyword, $bagian, $num=0, $rand=false) {		
		
		$this->db->distinct();
		$this->db->group_by('pengujian_comm');
		$this->db->like('pengujian_comm',$keyword);		
		$this->db->where('bagian_comm', $bagian);
		
		$query = $this->db->get('komponen_comm');
		return $query->result();

	}


	function ambilitemcom($itemselected, $bagian) {
		$this->db->select('item_comm');
		$this->db->select('tipe_datacomm');
		$this->db->where('bagian_comm', $bagian);
		$this->db->where('pengujian_comm', $itemselected);
		$query = $this->db->get('komponen_comm');
		return $query;

	}


	public function tambahisicom($idproj, $idcom, $bagian, $namauji, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,
			'id_comm' => $idcom,
			'bagian_comm' => $bagian,			
			'pengujian_comm' => $namauji,			
			'id_kompom' => $idkomp,
			'qc_inspecom' => $qcinspec,
			'qa_coorom' => $qacoor,
			'class_surom' => $classsur,
			'owner_surom' => $ownersur,
			'tgl_periksaom' => $tanggalperiksa,
			'status_comm' => $status,
			'tgl_reinspeksiom' => $reinspek,
			'rekomendasi_comm' => $rekomendasi,
			'path_gambarom' => $path
		);
		
		if($this->db->insert('commissioning', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	public function tambahitemcomm($idcom, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_comm' => $idcom,
					'nama_itemom' => $item->nama,
					'isi_itemom' => $item->item,
					'standard_itemom' => $item->standard
				);
				$this->db->insert('item_comm', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}

	function ambillistcomm($bagian, $idproj) {	
		$this->db->where('id_project', $idproj);
		$this->db->where('bagian_comm', $bagian);
		$query = $this->db->get('commissioning');
		return $query;

	}

	function ambildetailcomm($idproj, $idenmat, $bagian) {
		$this->db->where('id_project', $idproj);
		$this->db->where('id_comm', $idenmat);
		$this->db->where('bagian_comm', $bagian);
		$query = $this->db->get('commissioning');
		return $query;

	}

	function ambilitemcomm($idcomm) {		
		$this->db->where('id_comm', $idcomm);
		$query = $this->db->get('item_comm');
		return $query;

	}


	public function suntingisicom($idproj, $idcom, $namauji, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (														
			'pengujian_comm' => $namauji,			
			'id_kompom' => $idkomp,
			'qc_inspecom' => $qcinspec,
			'qa_coorom' => $qacoor,
			'class_surom' => $classsur,
			'owner_surom' => $ownersur,
			'tgl_periksaom' => $tanggalperiksa,
			'status_comm' => $status,
			'tgl_reinspeksiom' => $reinspek,
			'rekomendasi_comm' => $rekomendasi,
			'path_gambarom' => $path
		);
		
		$this->db->where('id_project', $idproj);
		$this->db->where('id_comm', $idcom);
		if($this->db->update('commissioning', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function suntingitemcom($idcom, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_itemom' => $item->item,
					'standard_itemom' => $item->standard
				);
				$this->db->where('id_comm', $idcom);
				$this->db->update('item_comm', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}



}