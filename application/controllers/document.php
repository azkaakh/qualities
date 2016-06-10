<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Document extends CI_Controller{
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

    //====================================== Link =================================================================
    
    public function tambahdocument($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            $this->load->model('documentmodel');
            $data['id'] = $this->Launchingmodel->ambilmaxid()+1;
            $data['hasil'] = $hasil;
            $this->load->view('administrator/launching/tambahlaunching', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatdocument($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            /*$this->load->model('Idenmodel');
            $data['id'] = $this->Idenmodel->ambilmaxid()+1;*/
            $data['hasil'] = $hasil;
            $this->load->view('administrator/launching/lihatlaunching', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function suntingdocument($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {  
            $idenparsing = $this->input->post('idenparsing');
            $bagian = $this->input->post('bagian');
            $idproj = $this->input->post('idproj');            
            $data['bagian'] = $bagian;
            $data['idenparsing'] = $idenparsing;
            $data['idproj'] = $idproj;            
            $data['hasil'] = $hasil;
            $this->load->view('administrator/launching/suntinglaunching', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

 }