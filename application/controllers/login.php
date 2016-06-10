<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('ceklogin');
	}
 
	public function index()
	{		
		if($this->session->userdata('hak_akses') == null) {
			$this->do_login();
		}
		else {
			redirect(base_url() . 'home');
		}

	}
	public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

	public function do_login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		
		if($username && $pass){
			$akun = $this->ceklogin->validasi($username, $pass);
			if ($akun != -1) {
				$userdata = array('hak_akses' => $akun->hak_akses, 
					'nama_pengguna' => $akun->nama_pengguna,
					'pilihan_project' => $akun->hak_project
					 );
				$this->session->set_userdata($userdata);
				redirect('home');
				
			}
			else{
				$awal = base_url();
				redirect($awal);
				
			}

		}
		else{
			$this->load->view('login');
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */