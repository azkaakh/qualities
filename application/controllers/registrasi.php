<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Registrasi extends CI_Controller{
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
    
    public function registrasiowner($hasil = null){
        $data['hasil'] = $hasil;
        $this->load->view('administrator/registrasi/registrasiowner', $data);
        
        
    }

    public function registrasiqa($hasil = null){
        $data['hasil'] = $hasil;
        $this->load->view('administrator/registrasi/registrasiqa', $data);
        
    }

    //======================================= Link Result =========================================================

    public function registrasioke($hasil = null){        
        $this->load->view('administrator/registrasi/registrasiownoke');
        
    }

    //======================================= submit data ============================================================

    public function submitregowner(){

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');        
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');        
        $namaperusahaan = $this->input->post('namaperusahaan');
        $alamatpt = $this->input->post('alamatpt');
        $tipekapal = $this->input->post('tipekapal');
        $nopro = $this->input->post('nopro');
        $pesan = $this->input->post('pesan');
        $nik = "none";
        $tipepengguna = 2;
        $status = "BELUM SETUJU";
        
        $this->load->model('Datamodel');

        if($this->Datamodel->submitregowner($user, $pass, $nama, $telp, $namaperusahaan, $alamatpt, $tipekapal, $nopro, $pesan, $nik, $tipepengguna, $status)){
            redirect('registrasi/registrasioke/');            
        }
        else{
            redirect('registrasi/registrasigagal/'); 
        }   
    }

    //------------------------------------------

    public function submitregqa(){

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');        
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');        
        $departemen = $this->input->post('departemen');
        $nik = $this->input->post('nik');
        $pesan = $this->input->post('pesan');
        $alamatpt = "none";
        $tipekapal = "none";
        $nopro = 0;
        $tipepengguna = 3;
        $status = "BELUM SETUJU";
        
        $this->load->model('Datamodel');

        if($this->Datamodel->submitregowner($user, $pass, $nama, $telp, $departemen, $alamatpt, $tipekapal, $nopro, $pesan, $nik, $tipepengguna, $status)){
            redirect('registrasi/registrasioke/');            
        }
        else{
            redirect('registrasi/registrasigagal/'); 
        }   
    }

    //---------------------------------------------

    public function submitregadmin(){

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');        
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');        
        $departemen = $this->input->post('departemen');
        $nik = $this->input->post('nik');
        $pesan = $this->input->post('pesan');
        $alamatpt = "none";
        $tipekapal = "none";
        $nopro = 0;
        $tipepengguna = 1;
        $status = "BELUM SETUJU";
        
        $this->load->model('Datamodel');

        if($this->Datamodel->submitregowner($user, $pass, $nama, $telp, $departemen, $alamatpt, $tipekapal, $nopro, $pesan, $nik, $tipepengguna, $status)){
            $hasil = "sukses";
            redirect('admin/daftarpengguna/'. $hasil);                    
        }
        else{
            $hasil = "gagal";
            redirect('admin/daftarpengguna/'. $hasil); 
        }   
    }




 }