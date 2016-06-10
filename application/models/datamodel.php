<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Datamodel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	//========================================== Ajax ===============================================================

	function remainder($idproj, $nilai) {	
		$this->db->where('id_project', $idproj);
		$query = $this->db->get($nilai);
		return $query;

	}

	function logicsearch($idproj, $nilai, $keyword, $tabelkomp) {
		/*$this->db->distinct();
		$this->db->group_by($tabelkomp);*/
		$this->db->like($tabelkomp , $keyword);

		$this->db->where('id_project', $idproj);
		$query = $this->db->get($nilai);
		return $query;

	}

	function ambillistpendaftar($nilai) {	
		$this->db->where('tipe_pengguna', $nilai);
		$query = $this->db->get('pendaftar');
		return $query;

	}

	function ambildetailpendaftar($id_pendaftar) {	
		$this->db->where('id_pendaftar', $id_pendaftar);
		$query = $this->db->get('pendaftar');
		return $query;

	}



	//=========================================== Submit Data =====================================================

	public function submitregowner($user, $pass, $nama, $telp, $namaperusahaan, $alamatpt, $tipekapal, $nopro, $pesan, $nik, $tipepengguna, $status){
		$data = array (
			'username_daftar' => $user,
			'password_daftar' => $pass,
			'nama_daftar' => $nama,			
			'no_telp' => $telp,			
			'jabatanposisi' => $namaperusahaan,
			'alamat' => $alamatpt,
			'nik' => $nik,
			'tipe_kapal' => $tipekapal,
			'no_project' => $nopro,
			'infopesan' => $pesan,
			'tipe_pengguna' => $tipepengguna,
			'status' => $status			
		);
		
		if($this->db->insert('pendaftar', $data)){
			return true;		
		}
		else{
			return false;
		}
	}



	public function setujudaftar($id, $user, $password, $nama, $tipepengguna, $project){
		$ubahs = "SETUJU";
		$data2 = array (
			'status' => $ubahs,			
		);
		$this->db->where('id_pendaftar', $id);
		$this->db->update('pendaftar', $data2);


		$data = array (
			'username' => $user,
			'password' => $password,
			'nama_pengguna' => $nama,			
			'hak_akses' => $tipepengguna,			
			'hak_project' => $project,		
		);
		
		if($this->db->insert('pengguna', $data)){
			return true;		
		}
		else{
			return false;
		}
	}


}
