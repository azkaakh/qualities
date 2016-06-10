<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Project extends CI_Controller{
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


    
    
    public function tambahproject(){
        $nopro = $this->input->post('nopro');
        $namapro = $this->input->post('namapro');
        $owner = $this->input->post('owner');
        $imo = $this->input->post('imo');
        $panjang = $this->input->post('panjang');
        $lebar = $this->input->post('lebar');
        $tinggi = $this->input->post('tinggi');
        $sarat = $this->input->post('sarat');
        $gtflag = $this->input->post('gtflag');
        $keel = $this->input->post('keel');
        $launching = $this->input->post('launching');
        $comm = $this->input->post('comm');
        $inclining = $this->input->post('inclining');
        $seatrial = $this->input->post('seatrial');
        $delivery = $this->input->post('delivery');



        $this->load->model('Projectmodel');

        if($this->Projectmodel->tambahproject($nopro, $namapro, $owner, $imo, $panjang, $lebar, $tinggi, $sarat, $gtflag, $keel, $launching, $comm, $inclining, $seatrial, $delivery)){
            $hasil = 'sukses';
            redirect('admin/tambahpro/'. $hasil);
        }
        else{
            $hasil = 'gagal';
            redirect('admin/tambahpro/'. $hasil);
        }
    }


    public function updateproject(){
        
        $namapro = $this->input->post('namapro');
        $owner = $this->input->post('owner');
        $imo = $this->input->post('imo');
        $panjang = $this->input->post('panjang');
        $lebar = $this->input->post('lebar');
        $tinggi = $this->input->post('tinggi');
        $sarat = $this->input->post('sarat');
        $gtflag = $this->input->post('gtflag');
        $keel = $this->input->post('keel');
        $launching = $this->input->post('launching');
        $comm = $this->input->post('comm');
        $inclining = $this->input->post('inclining');
        $seatrial = $this->input->post('seatrial');
        $delivery = $this->input->post('delivery');

        $idproj = $this->input->post('idproj');

        $this->load->model('Projectmodel');

        if($this->Projectmodel->updateproject($idproj, $namapro, $owner, $imo, $panjang, $lebar, $tinggi, $sarat, $gtflag, $keel, $launching, $comm, $inclining, $seatrial, $delivery)){
            $hasil = 'sukses';
            redirect('admin/suntingpro/'. $hasil);
        }
        else{
            $hasil = 'gagal';
            redirect('admin/suntingpro/'. $hasil);
        }
    }


    

   
 }