<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        if($this->session->userdata('hak_akses') == null) {
            redirect(base_url() . 'login');
        }
        else {
            $this->load->view('home');
        }
    }

//====================================== Link ======================================================
    
    public function lihatpro($hasil = null){
        if($this->session->userdata('hak_akses') == 1 || $this->session->userdata('hak_akses') == 3) {
            $data['hasil'] = $hasil;
            $this->load->view('administrator/lihatpro', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function tambahpro($hasil = null){
        if($this->session->userdata('hak_akses') == 1) {
            $this->load->model('Projectmodel');
            $data['id'] = $this->Projectmodel->ambilmaxid()+1;

            $data['hasil'] = $hasil;
            $this->load->view('administrator/tambahpro', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function daftarpengguna($hasil = null){
        if($this->session->userdata('hak_akses') == 1) {
           
            $data['hasil'] = $hasil;
            $this->load->view('administrator/registrasi/daftarpengguna', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatpendaftar($hasil = null){
        if($this->session->userdata('hak_akses') == 1) {
           
            $data['hasil'] = $hasil;
            $this->load->view('administrator/registrasi/lihatpendaftar', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }


//=================================================================================================

    public function mainproject($hasil = null){
        $nama_pengguna = $this->session->userdata('nama_pengguna');
        $hak_akses = $this->session->userdata('hak_akses');
        $pilihan = $this->input->post('idparsing');
        
        $this->session->unset_userdata('nama_pengguna');
        $this->session->unset_userdata('hak_akses');
        
        $userdata = array('hak_akses' => $hak_akses, 
                    'nama_pengguna' => $nama_pengguna,
                    'pilihan_project' => $this->input->post('idparsing')
                     );
        $this->session->set_userdata($userdata);
        redirect('home/homelanjut');
    }
   

    public function suntingpro($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
           
            $data['hasil'] = $hasil;            
            $this->load->view('administrator/suntingpro', $data);
        }
        else{
            redirect('admin/lihatpro');    
        }
        
    }

    public function backhome($hasil = null){
        $nama_pengguna = $this->session->userdata('nama_pengguna');
        $hak_akses = $this->session->userdata('hak_akses');
        $pilihan = 0;
        
        $this->session->unset_userdata('nama_pengguna');
        $this->session->unset_userdata('hak_akses');
        
        $userdata = array('hak_akses' => $hak_akses, 
                    'nama_pengguna' => $nama_pengguna,
                    'pilihan_project' => $pilihan
                     );
        $this->session->set_userdata($userdata);    
        redirect(base_url());
    }

 }