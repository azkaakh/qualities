<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Idenmodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('id_idenmat');
		$query = $this->db->get('idenmaterial');
		return $query->row()->id_idenmat;
	}


	public function tambahidenhull($idproj, $idmat, $jenis, $namakomp, $idkomp, $contract, $shipping, $arrival, $material, $pathcontract, $pathshipping, $pathmaterial, $patharrival, $path, $bagian){
		$data = array (
			'id_project' => $idproj,
			'id_idenmat' => $idmat,
			'bagian' => $bagian,			
			'jenis_komp' => $jenis,
			'nama_komp' => $namakomp,
			'id_komp' => $idkomp,
			'contract' => $contract,
			'shipping' => $shipping,
			'arrival' => $arrival,
			'material' => $material,
			'path_contract' => $pathcontract,
			'path_shipping' => $pathshipping,
			'path_material' => $pathmaterial,
			'path_arrival' => $patharrival,
			'path_gambar' => $path
		);
		
		if($this->db->insert('idenmaterial', $data)){
			return true;		
		}
		else{
			return false;
		}
	}

	public function updatehullcon($idproj, $idmat, $namakomp, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path){
		$data = array (
			'id_project' => $idproj,						
			'nama_komp' => $namakomp,
			'id_komp' => $idkomp,
			'qc_inspec' => $qcinspec,
			'qa_coor' => $qacoor,
			'class_sur' => $classsur,
			'owner_sur' => $ownersur,
			'tgl_periksa' => $tanggalperiksa,
			'status' => $status,
			'tgl_reinspeksi' => $reinspek,
			'rekomendasi' => $rekomendasi,
			'path_gambar' => $path
		);

		$this->db->where('id_project', $idproj);
		$this->db->where('id_idenmat', $idmat);
		if($this->db->update('idenmaterial', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


	public function tambahitemhull($idmat, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (					
					'id_idenmat' => $idmat,
					'nama_item' => $item->nama,
					'isi_item' => $item->item,
					'standard_item' => $item->standard
				);
				$this->db->insert('item_idenmat', $data);
				
			}	
			return true;
		}
		else{
			return false;
		}
	}

	public function updateitemhull($idmat, $itemlist){
		if (!empty($itemlist)) {
			foreach ($itemlist as $item) {
				$data = array (										
					'isi_item' => $item->item,
					'standard_item' => $item->standard
				);
				$this->db->where('nama_item', $item->nama);
				$this->db->where('id_idenmat', $idmat);
				$this->db->update('item_idenmat', $data);
				
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
		
		$query = $this->db->get('komponen_idenmat');
		return $query->result();

	}

	function ambilnamakomp($bagian, $keyword, $idproj, $num=0, $rand=false) {		
		
		$this->db->where('bagian', $bagian);
		$this->db->where('id_project', $idproj);
		$this->db->like('nama_komp',$keyword);
		
		$query = $this->db->get('idenmaterial');
		return $query->result();

	}

	function ceknamaiden($nama) {
		$this->db->select('id_idenmat');
		$this->db->where('nama_komp', $nama);	
		$query = $this->db->get( 'idenmaterial' );
		return $query;

	}
	


	
}