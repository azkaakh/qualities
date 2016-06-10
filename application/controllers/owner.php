<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Owner extends CI_Controller{
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
    
   

    public function lihatiden($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatiden', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatfabrikasi($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatfabrikasi', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatassembly($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatassembly', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihaterection($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihaterection', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatoutfitting($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatoutfitting', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatlaunching($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatlaunching', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatcommissioning($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatcommissioning', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatseatrial($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatseatrial', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatdelivery($hasil = null){
        if($this->session->userdata('hak_akses') == 2 || $this->session->userdata('hak_akses') == 3 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('owner/lihatdelivery', $data);
        }
        else{
            redirect(base_url() . 'login');    
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