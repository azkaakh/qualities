<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('ceklogin');
	}

	public function index()
	{
		 
		if($this->session->userdata('hak_akses') == null) {
			redirect(base_url() . 'login');
		}
		else {
			$this->load->view('home');
		}

	}

	public function homelanjut()
	{
		
		if($this->session->userdata('hak_akses') == null || $this->session->userdata('pilihan_project') == 0) {
			redirect(base_url() . 'login');
		}
		else {
			$this->load->view('administrator/homelanjut');
		}

	}

	public function reminder()
	{
		
		if($this->session->userdata('hak_akses') == null || $this->session->userdata('pilihan_project') == 0) {
			redirect(base_url() . 'login');
		}
		else {
			$this->load->view('administrator/reminder');
		}

	}

	public function search()
	{
		
		if($this->session->userdata('hak_akses') == null || $this->session->userdata('pilihan_project') == 0) {
			redirect(base_url() . 'login');
		}
		else {
			$this->load->view('administrator/logicsearch');
		}

	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */