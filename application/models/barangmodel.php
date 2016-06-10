<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Barangmodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function ambilmaxid(){
		$this->db->select_max('urut_minta');
		$query = $this->db->get('permintaan_barang');
		return $query->row()->urut_minta;
	}

	function ambiljenis($param, $num=0, $rand=false) {
		$sql = "SELECT DISTINCT jenis from komponen_idenmat WHERE bagian = ? ";
		$val = $param;

		if ($rand)
			$this->db->order_by( 'rand()' );
		if ($num != 0)
			$query = $this->db->query($sql, array($val));
		else
			$query = $this->db->query($sql, array($val));
		return $query;

	}

	function ambilitem($nilai, $bagian) {
	
		$this->db->where('jenis', $nilai);	
		$this->db->where('bagian', $bagian);	
		$this->db->select('item_kualitas');	
		$this->db->select('tipe_data');
		$query = $this->db->get( 'komponen_idenmat' );
		return $query;

	}

	function ambilitemfabrikasi($bagian, $proses) {
	
		$this->db->where('bagian_fabrikasi', $bagian);	
		$this->db->where('proses_fabrikasi', $proses);	
		$this->db->select('item_fabrikasi');	
		$this->db->select('tipe_datafabrikasi');
		$query = $this->db->get( 'komponen_fabrikasi' );
		return $query;

	}
	
	
}