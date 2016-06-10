<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Launchingmodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_launching');
		$query = $this->db->get('launching');
		return $query->row()->id_launching;
	}

	function ambillaunching($keyword, $bagian, $num=0, $rand=false) {		
		
		$this->db->distinct();
		$this->db->group_by('nama_komplau');
		$this->db->like('nama_komplau',$keyword);		
		$this->db->where('bagian_komplau', $bagian);
		
		$query = $this->db->get('komponen_launching');
		return $query->result();

	}

	function ambilitemlau($itemselected, $bagian) {
		$this->db->select('item_komplau');
		$this->db->select('tipe_datalau');
		$this->db->where('bagian_komplau', $bagian);
		$this->db->where('nama_komplau', $itemselected);
		$query = $this->db->get('komponen_launching');
		return $query;

	}

	public function tambahisilaunching($idproj, $idlau, $bagian, $namakomp, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,
			'id_launching' => $idlau,
			'bagian_launching' => $bagian,			
			'nama_kompl' => $namakomp,			
			'id_kompl' => $idkomp,
			'qc_inspecl' => $qcinspec,
			'qa_coorl' => $qacoor,
			'class_surl' => $classsur,
			'owner_surl' => $ownersur,
			'tgl_periksal' => $tanggalperiksa,
			'status_launching' => $status,
			'tgl_reinspeksil' => $reinspek,
			'rekomendasi_lau' => $rekomendasi,
			'path_gambarl' => $path
		);
		
		if($this->db->insert('launching', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	public function tambahitemlaunching($idlau, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_launching' => $idlau,
					'nama_iteml' => $item->nama,
					'isi_iteml' => $item->item,
					'standar_iteml' => $item->standard
				);
				$this->db->insert('item_launching', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}


	function ambillistlaunching($bagian, $idproj) {	
		$this->db->where('id_project', $idproj);
		$this->db->where('bagian_launching', $bagian);
		$query = $this->db->get('launching');
		return $query;

	}

	function ambildetaillaunching($idproj, $idenmat, $bagian) {
		$this->db->where('id_project', $idproj);
		$this->db->where('id_launching', $idenmat);
		$this->db->where('bagian_launching', $bagian);
		$query = $this->db->get('launching');
		return $query;

	}


	function ambilulangitemlau($idlau) {		
		$this->db->where('id_launching', $idlau);
		$query = $this->db->get('item_launching');
		return $query;

	}



	public function suntingisilaunching($idproj, $idlau, $namakomp, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (														
			'nama_kompl' => $namakomp,			
			'id_kompl' => $idkomp,
			'qc_inspecl' => $qcinspec,
			'qa_coorl' => $qacoor,
			'class_surl' => $classsur,
			'owner_surl' => $ownersur,
			'tgl_periksal' => $tanggalperiksa,
			'status_launching' => $status,
			'tgl_reinspeksil' => $reinspek,
			'rekomendasi_lau' => $rekomendasi,
			'path_gambarl' => $path
		);
		
		$this->db->where('id_project', $idproj);
		$this->db->where('id_launching', $idlau);
		if($this->db->update('launching', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function updateitemlaunching($idlau, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_iteml' => $item->item,
					'standar_iteml' => $item->standard
				);
				$this->db->where('id_launching', $idlau);
				$this->db->where('nama_iteml', $item->nama);
				$this->db->update('item_launching', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}




}