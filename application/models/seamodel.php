<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Seamodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_sea');
		$query = $this->db->get('seatrial');
		return $query->row()->id_sea;
	}

	function ambilsea($keyword, $bagian, $num=0, $rand=false) {		
		
		$this->db->distinct();
		$this->db->group_by('pengujian_sea');
		$this->db->like('pengujian_sea',$keyword);		
		$this->db->where('bagian_sea', $bagian);
		
		$query = $this->db->get('komponen_sea');
		return $query->result();

	}

	function ambilitemsea($itemselected, $bagian) {
		$this->db->select('item_sea');
		$this->db->select('tipe_datas');
		$this->db->where('bagian_sea', $bagian);
		$this->db->where('pengujian_sea', $itemselected);
		$query = $this->db->get('komponen_sea');
		return $query;

	}

	public function tambahisisea($idproj, $idsea, $bagian, $namauji, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,
			'id_sea' => $idsea,
			'bagian_sea' => $bagian,			
			'pengujian_sea' => $namauji,			
			'id_komps' => $idkomp,
			'qc_inspecs' => $qcinspec,
			'qa_coors' => $qacoor,
			'class_surs' => $classsur,
			'owner_surs' => $ownersur,
			'tgl_periksas' => $tanggalperiksa,
			'status_sea' => $status,
			'tgl_reinspeksis' => $reinspek,
			'rekomendasi_sea' => $rekomendasi,
			'path_gambars' => $path
		);
		
		if($this->db->insert('seatrial', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	public function tambahitemsea($idsea, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_sea' => $idsea,
					'nama_items' => $item->nama,
					'isi_items' => $item->item,
					'standard_items' => $item->standard
				);
				$this->db->insert('item_sea', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}

	function ambillistsea($bagian, $idproj) {	
		$this->db->where('id_project', $idproj);
		$this->db->where('bagian_sea', $bagian);
		$query = $this->db->get('seatrial');
		return $query;

	}

	function ambildetailsea($idproj, $idenmat){
		$this->db->where('id_project', $idproj);
		$this->db->where('id_sea', $idenmat);
		//$this->db->where('bagian_sea', $bagian);
		$query = $this->db->get('seatrial');
		return $query;

	}


	function ambilulangitemsea($idcomm) {		
		$this->db->where('id_sea', $idcomm);
		$query = $this->db->get('item_sea');
		return $query;

	}

	public function suntingisisea($idproj, $idsea, $namauji, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (														
			'pengujian_sea' => $namauji,			
			'id_komps' => $idkomp,
			'qc_inspecs' => $qcinspec,
			'qa_coors' => $qacoor,
			'class_surs' => $classsur,
			'owner_surs' => $ownersur,
			'tgl_periksas' => $tanggalperiksa,
			'status_sea' => $status,
			'tgl_reinspeksis' => $reinspek,
			'rekomendasi_sea' => $rekomendasi,
			'path_gambars' => $path
		);
		
		$this->db->where('id_project', $idproj);
		$this->db->where('id_sea', $idsea);
		if($this->db->update('seatrial', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function suntingitemsea($idsea, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_items' => $item->item,
					'standard_items' => $item->standard
				);
				$this->db->where('id_sea', $idsea);
				$this->db->update('item_sea', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}












	//===========================================================================

	


	


	

	

	

	

	


	


	



}
