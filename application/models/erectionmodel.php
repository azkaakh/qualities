<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Erectionmodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_erection');
		$query = $this->db->get('erection');
		return $query->row()->id_erection;
	}

	function ambilproseserection($num=0, $rand=false) {
		$sql = "SELECT DISTINCT proses_erection from komponen_erection";		

		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->query($sql);
		else
			$query = $this->db->query($sql);
		return $query;

	}

	function ambilitemerection($proses) {
		$this->db->select('item_erection');
		$this->db->select('tipe_dataer');
		$this->db->where('proses_erection', $proses);
		$query = $this->db->get('komponen_erection');
		return $query;

	}

	function ambilnamaassembly($keyword, $idproj, $num=0, $rand=false) {		
				
		$this->db->where('id_project', $idproj);
		$this->db->like('blok_assembly',$keyword);
		
		$query = $this->db->get('assembly');
		return $query->result();

	}

	function ceknamaas($nama) {
		
		$this->db->select('id_assembly');
		$this->db->where('blok_assembly', $nama);
		$query = $this->db->get('assembly');
		return $query;

	}

	function ambillisterection($idproj) {
		$this->db->where('id_project', $idproj);
		$query = $this->db->get('erection');
		return $query;

	}

	function ambildetailerection($idproj, $idenmat) {
		$this->db->where('id_project', $idproj);
		$this->db->where('id_erection', $idenmat);
		$query = $this->db->get('erection');
		return $query;

	}

	function ambilulangitemer($iderection) {		
		$this->db->where('id_erection', $iderection);
		$query = $this->db->get('item_erection');
		return $query;

	}






	public function tambahisierection($idproj, $id_erection, $proses, $namablok, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,
			'id_erection' => $id_erection,
			'proses_erection' => $proses,			
			'blok_erection' => $namablok,			
			'qc_inspecer' => $qcinspec,
			'qa_coorer' => $qacoor,
			'class_surrer' => $classsur,
			'owner_surer' => $ownersur,
			'tgl_periksaer' => $tanggalperiksa,
			'status_erection' => $status,
			'tgl_reinspeksier' => $reinspek,
			'rekomendasi_erection' => $rekomendasi,
			'path_gambarer' => $path
		);
		
		if($this->db->insert('erection', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function tambahitemerection($id_erection, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_erection' => $id_erection,
					'nama_itemer' => $item->nama,
					'isi_itemer' => $item->item,
					'standard_itemer' => $item->standard
				);
				$this->db->insert('item_erection', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}



	public function suntingisierection($idproj, $id_erection, $namablok, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (					
			'blok_erection' => $namablok,			
			'qc_inspecer' => $qcinspec,
			'qa_coorer' => $qacoor,
			'class_surrer' => $classsur,
			'owner_surer' => $ownersur,
			'tgl_periksaer' => $tanggalperiksa,
			'status_erection' => $status,
			'tgl_reinspeksier' => $reinspek,
			'rekomendasi_erection' => $rekomendasi,
			'path_gambarer' => $path
		);
		
		$this->db->where('id_project', $idproj);
		$this->db->where('id_erection', $id_erection);
		if($this->db->update('erection', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function updateitemerection($id_erection, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_itemer' => $item->item,
					'standard_itemer' => $item->standard
				);
				$this->db->where('id_erection', $id_erection);
				$this->db->where('nama_itemer', $item->nama);
				$this->db->update('item_erection', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}









	//==================================================================================

	

	

	

	


	

	


	

	







	

	
}