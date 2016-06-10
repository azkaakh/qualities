<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Assemblymodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_assembly');
		$query = $this->db->get('assembly');
		return $query->row()->id_assembly;
	}

	function ambilprosesassembly($num=0, $rand=false) {
		$sql = "SELECT DISTINCT proses_assembly from komponen_assembly";		

		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->query($sql);
		else
			$query = $this->db->query($sql);
		return $query;

	}

	function ambilitemassembly($proses) {
		$this->db->select('item_assembly');
		$this->db->select('tipe_dataassembly');
		$this->db->where('proses_assembly', $proses);
		$query = $this->db->get('komponen_assembly');
		return $query;

	}

	function ambillistassembly($idproj) {	
		$this->db->where('id_project', $idproj);
		$query = $this->db->get('assembly');
		return $query;

	}

	function ambildetailassembly($idproj, $idenmat) {
		$this->db->where('id_project', $idproj);
		$this->db->where('id_assembly', $idenmat);
		$query = $this->db->get('assembly');
		return $query;

	}

	function ambilulangitemass($idassembly) {		
		$this->db->where('id_assembly', $idassembly);
		$query = $this->db->get('item_assembly');
		return $query;

	}


	public function tambahisiassembly($idproj, $id_assembly, $proses, $namablok, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,
			'id_assembly' => $id_assembly,
			'proses_assembly' => $proses,			
			'blok_assembly' => $namablok,			
			'qc_inspecass' => $qcinspec,
			'qa_coorass' => $qacoor,
			'class_surass' => $classsur,
			'owner_surass' => $ownersur,
			'tgl_periksaass' => $tanggalperiksa,
			'status_assembly' => $status,
			'tgl_reinspeksiass' => $reinspek,
			'rekomendasi_assembly' => $rekomendasi,
			'path_gambarass' => $path
		);
		
		if($this->db->insert('assembly', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	public function tambahitemassembly($id_assembly, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_assembly' => $id_assembly,
					'nama_itemas' => $item->nama,
					'isi_itemas' => $item->item,
					'standard_itemas' => $item->standard
				);
				$this->db->insert('item_assembly', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}


	public function suntingisiassembly($idproj, $id_assembly, $namablok, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (					
			'blok_assembly' => $namablok,			
			'qc_inspecass' => $qcinspec,
			'qa_coorass' => $qacoor,
			'class_surass' => $classsur,
			'owner_surass' => $ownersur,
			'tgl_periksaass' => $tanggalperiksa,
			'status_assembly' => $status,
			'tgl_reinspeksiass' => $reinspek,
			'rekomendasi_assembly' => $rekomendasi,
			'path_gambarass' => $path
		);
		
		$this->db->where('id_project', $idproj);
		$this->db->where('id_assembly', $id_assembly);
		if($this->db->update('assembly', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	public function updateitemassembly($id_assembly, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_itemas' => $item->item,
					'standard_itemas' => $item->standard
				);
				$this->db->where('id_assembly', $id_assembly);
				$this->db->where('nama_itemas', $item->nama);
				$this->db->update('item_assembly', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}







	

	
}