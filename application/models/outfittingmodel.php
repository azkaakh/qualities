<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Outfittingmodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_outfitting');
		$query = $this->db->get('outfitting');
		return $query->row()->id_outfitting;
	}



	function ambiloutfitting($keyword, $bagian, $idproj, $num=0, $rand=false) {		
		
		$this->db->distinct();
		$this->db->group_by('nama_komp');
		$this->db->like('nama_komp',$keyword);		
		$this->db->where('bagian', $bagian);
		$this->db->where('id_project', $idproj);
		
		$query = $this->db->get('idenmaterial');
		return $query->result();

	}

	function ambilitemout($itemselected, $bagian) {
		$this->db->select('item_kompout');
		$this->db->select('tipe_dataout');
		$this->db->where('bagian_kompout', $bagian);
		$this->db->where('nama_kompout', $itemselected);
		$query = $this->db->get('komponen_outfitting');
		return $query;

	}



	public function tambahisioutfitting($idproj, $id_outfitting, $bagian, $namaoutfitting, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,
			'id_outfitting' => $id_outfitting,
			'nama_bagianout' => $bagian,			
			'nama_outfitting' => $namaoutfitting,			
			'qc_inspecout' => $qcinspec,
			'qa_coorout' => $qacoor,
			'class_surout' => $classsur,
			'owner_surout' => $ownersur,
			'tgl_periksaout' => $tanggalperiksa,
			'status_out' => $status,
			'tgl_reinspekout' => $reinspek,
			'rekomendasi_out' => $rekomendasi,
			'path_gambarout' => $path
		);
		
		if($this->db->insert('outfitting', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function tambahitemoutfitting($id_outfitting, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_outfitting' => $id_outfitting,
					'nama_itemout' => $item->nama,
					'isi_itemout' => $item->item,
					'standard_itemout' => $item->standard
				);
				$this->db->insert('item_outfitting', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}

	function ambillistoutfitting($bagian, $idproj) {	
		$this->db->where('id_project', $idproj);
		$this->db->where('nama_bagianout', $bagian);
		$query = $this->db->get('outfitting');
		return $query;

	}

	function ambildetailoutfitting($idproj, $idenmat, $bagian) {
		$this->db->where('id_project', $idproj);
		$this->db->where('id_outfitting', $idenmat);
		$this->db->where('nama_bagianout', $bagian);
		$query = $this->db->get('outfitting');
		return $query;

	}

	function ambilulangitemout($idout) {		
		$this->db->where('id_outfitting', $idout);
		$query = $this->db->get('item_outfitting');
		return $query;

	}


	public function suntingisioutfitting($idproj, $id_outfitting, $namaoutfitting, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (									
			'nama_outfitting' => $namaoutfitting,			
			'qc_inspecout' => $qcinspec,
			'qa_coorout' => $qacoor,
			'class_surout' => $classsur,
			'owner_surout' => $ownersur,
			'tgl_periksaout' => $tanggalperiksa,
			'status_out' => $status,
			'tgl_reinspekout' => $reinspek,
			'rekomendasi_out' => $rekomendasi,
			'path_gambarout' => $path
		);
		
		$this->db->where('id_project', $idproj);
		$this->db->where('id_outfitting', $id_outfitting);
		if($this->db->update('outfitting', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function updateitemoutfitting($id_outfitting, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_itemout' => $item->item,
					'standard_itemout' => $item->standard
				);
				$this->db->where('id_outfitting', $id_outfitting);
				$this->db->where('nama_itemout', $item->nama);
				$this->db->update('item_outfitting', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}




}