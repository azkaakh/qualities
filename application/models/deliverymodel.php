<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Deliverymodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_delivery');
		$query = $this->db->get('delivery');
		return $query->row()->id_delivery;
	}

	function ambildelivery($keyword) {		
		
		$this->db->distinct();
		$this->db->group_by('nama_dokumen');
		$this->db->like('nama_dokumen',$keyword);				
		
		$query = $this->db->get('komponen_delivery');
		return $query->result();

	}

	public function tambahisidelivery($idproj, $id_delivery, $namadok, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,
			'id_delivery' => $id_delivery,
			'nama_dokumen' => $namadok,												
			'qc_inspecd' => $qcinspec,
			'qa_coord' => $qacoor,
			'class_surd' => $classsur,
			'owner_surd' => $ownersur,
			'tgl_periksad' => $tanggalperiksa,
			'status_delivery' => $status,
			'tgl_reinspeksid' => $reinspek,
			'rekomendasi_delivery' => $rekomendasi,
			'path_gambard' => $path
		);
		
		if($this->db->insert('delivery', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function tambahitemdelivery($id_delivery, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_delivery' => $id_delivery,
					'nama_itemd' => $item->nama,
					'isi_itemd' => $item->item,
					'standard_itemd' => $item->standard
				);
				$this->db->insert('item_delivery', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}


	function ambillistdelivery($idproj) {	
		$this->db->where('id_project', $idproj);
		$query = $this->db->get('delivery');
		return $query;

	}

	function ambildetaildelivery($idproj, $idenmat){
		$this->db->where('id_project', $idproj);
		$this->db->where('id_delivery', $idenmat);		
		$query = $this->db->get('delivery');
		return $query;

	}

	function ambilulangitemdelivery($iddeliv) {		
		$this->db->where('id_delivery', $iddeliv);
		$query = $this->db->get('item_delivery');
		return $query;

	}

	public function updateisidelivery($idproj, $id_delivery, $namadok, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (														
			'qc_inspecd' => $qcinspec,
			'qa_coord' => $qacoor,
			'class_surd' => $classsur,
			'owner_surd' => $ownersur,
			'tgl_periksad' => $tanggalperiksa,
			'status_delivery' => $status,
			'tgl_reinspeksid' => $reinspek,
			'rekomendasi_delivery' => $rekomendasi,
			'path_gambard' => $path
		);
		
		$this->db->where('id_project', $idproj);
		$this->db->where('id_delivery', $id_delivery);
		if($this->db->update('delivery', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function updateitemdelivery($id_delivery, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_itemd' => $item->item,
					'standard_itemd' => $item->standard
				);
				$this->db->where('id_delivery', $id_delivery);
				$this->db->where('nama_itemd', $item->nama);
				$this->db->update('item_delivery', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}


















//============================================================================================



	

	

	

	


	

	












	//===========================================================================

	


	


	

	

	

	

	


	


	



}
