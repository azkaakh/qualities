<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Ceklogin extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function validasi($username,$pass){
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		$this->db->select('*');
		$query = $this->db->get('pengguna', 1);
		if ($query->num_rows() != 1)
			return -1;
		return $query->row();
	}


}