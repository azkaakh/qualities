<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Fabrikasimodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_fabrikasi');
		$query = $this->db->get('fabrikasi');
		return $query->row()->id_fabrikasi;
	}

	function ambilprosesfabrikasi($param, $num=0, $rand=false) {
		$sql = "SELECT DISTINCT proses_fabrikasi from komponen_fabrikasi WHERE bagian_fabrikasi = ? ";
		$val = $param;

		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->query($sql, array($val));
		else
			$query = $this->db->query($sql, array($val));
		return $query;

		return $query;

	}

	function ambillistfabrikasi($idproj, $nilai) {
	
		$this->db->where('id_project', $idproj);	
		$this->db->where('bagian_fabrikasi', $nilai);	
		$query = $this->db->get( 'fabrikasi' );
		return $query;

	}

	function ambildetailfab($idproj, $nilai) {
	
		$this->db->where('id_project', $idproj);	
		$this->db->where('id_fabrikasi', $nilai);	
		$query = $this->db->get( 'fabrikasi' );
		return $query;

	}

	function ambilitemfab($nilai) {	
		$this->db->where('id_fabrikasi', $nilai);	
		$query = $this->db->get( 'item_fabrikasi' );
		return $query;

	}

	function ambilulangfab($idproj, $bagian, $idenparsing) {
	
		$this->db->where('id_project', $idproj);	
		$this->db->where('bagian_fabrikasi', $bagian);	
		$this->db->where('id_fabrikasi', $idenparsing);	
		$query = $this->db->get( 'fabrikasi' );
		return $query;

	}





	public function tambahfabrikasi($idproj, $idmat, $proses, $jenis, $namakomp, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path, $bagian){
		$data = array (
			'id_project' => $idproj,
			'id_fabrikasi' => $idmat,
			'bagian_fabrikasi' => $bagian,			
			'proses_fabrikasi' => $proses,
			'jenis_fabrikasi' => $jenis,
			'nama_kompfab' => $namakomp,
			'id_kompfab' => $idkomp,
			'qc_inspecfab' => $qcinspec,
			'qa_coorfab' => $qacoor,
			'class_surfab' => $classsur,
			'owner_surfab' => $ownersur,
			'tgl_periksafab' => $tanggalperiksa,
			'status_fab' => $status,
			'tgl_reinspeksifab' => $reinspek,
			'rekomendasi_fab' => $rekomendasi,
			'path_gambarfab' => $path
		);
		
		if($this->db->insert('fabrikasi', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	public function tambahitemfabrikasi($idmat, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_fabrikasi' => $idmat,
					'nama_itemfab' => $item->nama,
					'isi_itemfab' => $item->item,
					'standard_itemfab' => $item->standard
				);
				$this->db->insert('item_fabrikasi', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}

	public function suntingfabrikasi($idproj, $idmat, $namakomp, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (									
			'nama_kompfab' => $namakomp,
			'id_kompfab' => $idkomp,
			'qc_inspecfab' => $qcinspec,
			'qa_coorfab' => $qacoor,
			'class_surfab' => $classsur,
			'owner_surfab' => $ownersur,
			'tgl_periksafab' => $tanggalperiksa,
			'status_fab' => $status,
			'tgl_reinspeksifab' => $reinspek,
			'rekomendasi_fab' => $rekomendasi,
			'path_gambarfab' => $path
		);

		$this->db->where('id_project', $idproj);
		$this->db->where('id_fabrikasi', $idmat);
		if($this->db->update('fabrikasi', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	

	public function updateitemfabrikasi($idmat, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_itemfab' => $item->item,
					'standard_itemfab' => $item->standard
				);
				$this->db->where('nama_itemfab', $item->nama);
				$this->db->where('id_fabrikasi', $idmat);
				$this->db->update('item_fabrikasi', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}



	function ambillistiden($idproj, $nilai) {
	
		$this->db->where('id_project', $idproj);	
		$this->db->where('bagian', $nilai);	
		$query = $this->db->get( 'idenmaterial' );
		return $query;

	}


	function ambildetailiden($idproj, $nilai) {
	
		$this->db->where('id_project', $idproj);	
		$this->db->where('id_idenmat', $nilai);	
		$query = $this->db->get( 'idenmaterial' );
		return $query;

	}

	function ambilitemiden($nilai) {	
		$this->db->where('id_idenmat', $nilai);	
		$query = $this->db->get( 'item_idenmat' );
		return $query;

	}

	function ambilulangiden($idproj, $bagian, $idenparsing) {
	
		$this->db->where('id_project', $idproj);	
		$this->db->where('bagian', $bagian);	
		$this->db->where('id_idenmat', $idenparsing);	
		$query = $this->db->get( 'idenmaterial' );
		return $query;

	}

	function ambilkompmo($bagian, $keyword, $num=0, $rand=false) {		
		
		$this->db->where('bagian', $bagian);
		$this->db->like('nama_komp',$keyword);
		
//		$this->db->select('nama_komp');
		$query = $this->db->get('komponen_idenmat');
		return $query->result();

	}


	
}