<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Idenmat extends CI_Controller{
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
    
    public function hullcon($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            $this->load->model('Idenmodel');
            $data['id'] = $this->Idenmodel->ambilmaxid()+1;
            $data['hasil'] = $hasil;
            $this->load->view('administrator/idenmaterial/hullcon', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function machout($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            $this->load->model('Idenmodel');
            $data['id'] = $this->Idenmodel->ambilmaxid()+1;
            $data['hasil'] = $hasil;
            $this->load->view('administrator/idenmaterial/tambahmachout', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function hullout($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            $this->load->model('Idenmodel');
            $data['id'] = $this->Idenmodel->ambilmaxid()+1;
            $data['hasil'] = $hasil;
            $this->load->view('administrator/idenmaterial/tambahhullout', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function elecout($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            $this->load->model('Idenmodel');
            $data['id'] = $this->Idenmodel->ambilmaxid()+1;
            $data['hasil'] = $hasil;
            $this->load->view('administrator/idenmaterial/tambahelecout', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatlist($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {            
            $data['hasil'] = $hasil;
            $this->load->view('administrator/idenmaterial/lihatlistiden', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }


    public function suntingidentifikasi($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {  
            $idenparsing = $this->input->post('idenparsing');
            $idproj = $this->input->post('idproj');
            $bagian = $this->input->post('bagian');
            $data['idenparsing'] = $idenparsing;
            $data['idproj'] = $idproj;
            $data['bagian'] = $bagian;
            $data['hasil'] = $hasil;
            $this->load->view('administrator/idenmaterial/suntingidentifikasi', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    //======================================================================================================================


    //================================= Submit Identifikasi Material =======================================================


     public function submitidentifikasi($hasil = null){

        $idproj = $this->input->post('idproj');
        $idmat = $this->input->post('id_idenmat');
        $jenis = $this->input->post('jenis');
        $bagian = $this->input->post('bagian');
        $namakomp = $this->input->post('namakomp');
        $idkomp = $this->input->post('idkomp');
        $qcinspec = " ";
        $qacoor = " ";
        $classsur = " ";
        $ownersur = " ";
        $tanggalperiksa = " ";
        $status = "OK";
        
        if($status == "OK"){            
            $reinspek = "2001-01-01";
            $rekomendasi = "null";
        }
        $contracthelp = $this->input->post('contracthelp');
        $shippinghelp = $this->input->post('shippinghelp');
        $arrivalhelp = $this->input->post('arrivalhelp');
        $matidenthelp = $this->input->post('matidenthelp');
        $contractfile = $_FILES['contractfile']['name'];
        $contractfile = preg_replace('/\s/', '_', $contractfile);
        $pathcontract = 'upload/idenmat/hull/'.$contractfile;
        $shippingfile = $_FILES['shippingfile']['name'];
        $shippingfile = preg_replace('/\s/', '_', $shippingfile);
        $pathshipping = 'upload/idenmat/hull/'.$shippingfile;
        $arrivalfile = $_FILES['arrivalfile']['name'];
        $arrivalfile = preg_replace('/\s/', '_', $arrivalfile);
        $patharrival = 'upload/idenmat/hull/'.$arrivalfile;
        $matidentfile = $_FILES['matidentfile']['name'];
        $matidentfile = preg_replace('/\s/', '_', $matidentfile);
        $pathmaterial = 'upload/idenmat/hull/'.$matidentfile;
        /*if($status == "OK"){            
            $reinspek = "2001-01-01";
            $rekomendasi = "null";
        }
        else{
            $reinspek = $this->input->post('reinspek');
            $rekomendasi = $this->input->post('rekomendasi');    
        }*/
        $filename = $_FILES['gambar']['name'];
        $filename = preg_replace('/\s/', '_', $filename);
        $path = 'upload/idenmat/hull/'.$filename;
         
        
        $daftarBarang = json_decode($this->input->post('daftarBarang'));
        $itemlist = [];
        foreach ($daftarBarang as $barang) {
            $obj = new stdClass();
            $obj->nama = $barang->nama;
            $obj->item = $barang->item;
            $obj->standard = $barang->standard;

            array_push($itemlist, $obj);

        }


        $this->load->model('Idenmodel');

        if($this->Idenmodel->tambahidenhull($idproj, $idmat, $jenis, $namakomp, $idkomp, $contracthelp, $shippinghelp, $arrivalhelp, $matidenthelp, $pathcontract, $pathshipping, $pathmaterial, $patharrival, $path, $bagian)){
            if ($this->Idenmodel->tambahitemhull($idmat, $itemlist)){
                $config['upload_path'] = './upload/idenmat/hull';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                /*$config['max_width']  = '1024';
                $config['max_height']  = '768';*/
                $filenamescont = $_FILES['contractfile']['name'];
                $filenamescont = preg_replace('/\s/', '_', $filenames);
                $config['file_name'] = $filenamescont;

                $this->load->library('upload', $config);
                $this->upload->do_upload('contractfile');
                
                $filenamesari = $_FILES['arrivalfile']['name'];
                $filenamesari = preg_replace('/\s/', '_', $filenames);
                $config['file_name'] = $filenamesari;

                $this->load->library('upload', $config);
                $this->upload->do_upload('arrivalfile');
                
                $filenamesshi = $_FILES['shippingfile']['name'];
                $filenamesshi = preg_replace('/\s/', '_', $filenames);
                $config['file_name'] = $filenamesshi;

                $this->load->library('upload', $config);
                $this->upload->do_upload('shippingfile');
                
                $filenamesmat = $_FILES['matidentfile']['name'];
                $filenamesmat = preg_replace('/\s/', '_', $filenames);
                $config['file_name'] = $filenamesmat;

                $this->load->library('upload', $config);
                $this->upload->do_upload('matidentfile');
                
                
                $filenames = $_FILES['gambar']['name'];
                $filenames = preg_replace('/\s/', '_', $filenames);
                $config['file_name'] = $filenames;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->upload->display_errors();
                    /*$hasil = 'gagal';
                     redirect('idenmat/hullcon/'. $hasil);*/
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $hasil = 'sukses';
                    if($bagian == "Hull Construction"){
                        redirect('idenmat/hullcon/'. $hasil);
                    }
                    elseif ($bagian == "Machinery Outfitting") {
                        redirect('idenmat/machout/'. $hasil);
                    }
                    elseif ($bagian == "Hull Outfitting") {
                        redirect('idenmat/hullout/'. $hasil);
                    }
                    elseif ($bagian == "Electric Outfitting") {
                        redirect('idenmat/elecout/'. $hasil);
                    }
/*
                    ob_start();
                    require 'fpdf.php';

                    $pdf = new FPDF('P', 'cm', 'A4');
                    $pdf->SetAutoPageBreak(true);
                    $pdf->AddFont('courier', '', 'courier.php');
                    $pdf->AddFont('timesb', '', 'timesb.php');
                    $pdf->AddFont('times', '', 'times.php');
                    $pdf->SetMargins(1.5, 1.5, 1.5, 1.5);
                    $pdf->AddPage('P', 'A4');
                    $pdf->SetFont('timesb', '', 22);

                    //===================== Judul dan PT ==========================================
                    $pdf->Image('./assets/img/ptpal.png', 1.5, 1.2,4,2.4);                     

                    $pdf->Cell(22, 0, 'P.T. PAL Indonesia', 0, 1, "C");
                    $pdf->SetFont('times', '', 16);
                    $pdf->Ln(0.5);
                    $pdf->Cell(22, 1, 'Komplek Pangkalan Utama TNI Angkatan Laut', 0, 1, "C");
                    $pdf->Ln(0.4);
                    $pdf->Cell(22, 0, 'Jalan Ujung, Surabaya, Jawa Timur ', 0, 1, "C");
                    $pdf->Ln(0.1);
                    $pdf->Image('./assets/img/pembatasn.png', 0, 4.7,24);
                    $pdf->Image('./assets/img/pembatasn.png', 0, 4.8,24);
                    $pdf->Ln(1.8);
                    $pdf->SetFont('timesb', '', 16);

                    $pdf->Cell(26, 0.4, 'Identifikasi Material '.$bagian, 0, 1, "L");
                    $pdf->SetFont('times', '', 13);
                    $pdf->Ln(0.7);

                    //=========================== Isi Tahapan ===================================
                    if ($bagian == "Hull Construction") {
                        $pdf->Cell(4.2, 0.4, 'Jenis', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $jenis, 0, 1, 'L');
                        $pdf->Ln(0.4);
                        $pdf->Cell(4.2, 0.4, 'Nama Komponen', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $namakomp, 0, 1, 'L');
                        $pdf->Ln(0.4);
                        $pdf->Cell(4.2, 0.4, 'ID Komponen', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
                        $pdf->Ln(0.4); 
                    }
                    else{
                        $pdf->Cell(4.2, 0.4, 'Nama Outfitting', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $namakomp, 0, 1, 'L');
                        $pdf->Ln(0.4);
                        $pdf->Cell(4.2, 0.4, 'ID Outfitting', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
                        $pdf->Ln(0.4); 
                    }
                    
                    

                    //=========================== Info Umum ====================================
                    $pdf->Cell(4.2, 0.4, 'Tanggal Periksa', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4,  $tanggalperiksa, 0, 1, 'L');
                    $pdf->Ln(0.4);
                    $pdf->Cell(4.2, 0.4, 'Status', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $status, 0, 1, 'L');
                    $pdf->Ln(1);

                    

                    //============================ item ===============================
                    
                    $pdf->SetFont('timesb', '', 12);
                    $header = array('Nama Item', 'Isi Item', 'standard Item');
                    $w = array(8.1, 4.8, 4.8);
                    // Header tabel
                    for($i=0;$i<count($header);$i++)
                        $pdf->Cell($w[$i],1,$header[$i],1,0,'C');
                    $pdf->Ln();

                    //isi tabel
                    $pdf->SetFont('times', '', 11);
                    foreach($daftarBarang as $row)
                    {
                        $pdf->Cell($w[0],1,$row->nama,'LR',0,'L');
                        $pdf->Cell($w[1],1,$row->item,'LR',0,'L');
                        $pdf->Cell($w[2],1,$row->standard,'LR',0,'L');            
                        $pdf->Ln();
                    }
                    // Closing line
                    $pdf->Cell(array_sum($w),0,'','T');

                    //====================== kalo  Reject ini tempatnya =====================
                    $pdf->Ln(1);  
                    $pdf->SetFont('times', '', 13);
                    if($status == "Reject"){
                        $pdf->Cell(4.2, 0.4, 'Tanggal Reinspeksi', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $reinspek, 0, 1, 'L');
                        $pdf->Ln(0.4);
                        $pdf->Cell(4.2, 0.4, 'Rekomendasi', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $rekomendasi, 0, 1, 'L');
                        $pdf->Ln(1.2);
                    }
                    
                    $pdf->SetFont('times', '', 13);

                    //============================== TTD ====================================

                    $pdf->Cell(18, 0.4, 'Mengetahui,', 0, 0, "C");
                    $pdf->SetFont('timesb', '', 13);
                    $pdf->Ln(1.5);
                    $pdf->Cell(5, 0, 'QC Inspector', 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, 'QA Coordinator', 0, 0, 'C');

                    $pdf->Ln(2.5);

                    $pdf->SetFont('times', '', 13);
                    $pdf->Cell(5, 0, $qcinspec, 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, $qacoor , 0, 0, 'C');

                    $pdf->Ln(2.5);

                    $pdf->SetFont('timesb', '', 13);
                    $pdf->Cell(5, 0, 'Class Surveyor', 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, 'Owner Surveyor', 0, 0, 'C');

                    $pdf->Ln(2.5);

                    $pdf->SetFont('times', '', 13);
                    $pdf->Cell(5, 0, $classsur, 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, $ownersur, 0, 0, 'C');

                    /*$pdf->AddPage('P', 'A4');
                    $pdf->Image('./'.$path, 2, 2,15,25); */
/*
                    $pdf->Output();
                    ob_end_flush();
*/

                    
                }


            }
            else{
                echo "gagal";
            }
            
        }
         else{
             echo "gagal";
         }
     }
        

    //=============================================================================================================================


    //===================================== Update Identifikasi Material ==========================================================

    public function updatehullcon($hasil = null){

        $idproj = $this->input->post('idproj');
        $idmat = $this->input->post('id_idenmat');
        $bagian = $this->input->post('bagian');
        $namakomp = $this->input->post('namakomp');
        $idkomp = $this->input->post('idkomp');

        $qcinspec = $this->input->post('qcinspec');
        $qacoor = $this->input->post('qacoor');
        $classsur = $this->input->post('classsur');
        $ownersur = $this->input->post('ownersur');
        $tanggalperiksa = $this->input->post('tanggalperiksa');
        $status = $this->input->post('status');
        
        if($status == "OK"){            
            $reinspek = "2001-01-01";
            $rekomendasi = "null";
        }
        else{
            $reinspek = $this->input->post('reinspek');
            $rekomendasi = $this->input->post('rekomendasi');    
        }
        $filename = $_FILES['gambar']['name'];
        $filename = preg_replace('/\s/', '_', $filename);
        $path = 'upload/idenmat/hull/'.$filename;
        
        $daftarBarang = json_decode($this->input->post('daftarBarang'));
        $itemlist = [];
        foreach ($daftarBarang as $barang) {
            $obj = new stdClass();
            $obj->nama = $barang->nama;
            $obj->item = $barang->item;
            $obj->standard = $barang->standard;

            array_push($itemlist, $obj);

        }


        $this->load->model('Idenmodel');

        if($this->Idenmodel->updatehullcon($idproj, $idmat, $namakomp, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path)){
            if ($this->Idenmodel->updateitemhull($idmat, $itemlist)) {
                $config['upload_path'] = './upload/idenmat/hull';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                /*$config['max_width']  = '1024';
                $config['max_height']  = '768';*/
                
                $filenames = $_FILES['gambar']['name'];
                $filenames = preg_replace('/\s/', '_', $filenames);
                $config['file_name'] = $filenames;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->upload->display_errors();
                    
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    /*$hasil = 'sukses';
                    redirect('idenmat/suntingidentifikasi/'. $hasil);*/

                    ob_start();
                    require 'fpdf.php';

                    $pdf = new FPDF('P', 'cm', 'A4');
                    $pdf->SetAutoPageBreak(true);
                    $pdf->AddFont('courier', '', 'courier.php');
                    $pdf->AddFont('timesb', '', 'timesb.php');
                    $pdf->AddFont('times', '', 'times.php');
                    $pdf->SetMargins(1.5, 1.5, 1.5, 1.5);
                    $pdf->AddPage('P', 'A4');
                    $pdf->SetFont('timesb', '', 22);

                    //===================== Judul dan PT ==========================================
                    $pdf->Image('./assets/img/ptpal.png', 1.5, 1.2,4,2.4);                     

                    $pdf->Cell(22, 0, 'P.T. PAL Indonesia', 0, 1, "C");
                    $pdf->SetFont('times', '', 16);
                    $pdf->Ln(0.5);
                    $pdf->Cell(22, 1, 'Komplek Pangkalan Utama TNI Angkatan Laut', 0, 1, "C");
                    $pdf->Ln(0.4);
                    $pdf->Cell(22, 0, 'Jalan Ujung, Surabaya, Jawa Timur ', 0, 1, "C");
                    $pdf->Ln(0.1);
                    $pdf->Image('./assets/img/pembatasn.png', 0, 4.7,24);
                    $pdf->Image('./assets/img/pembatasn.png', 0, 4.8,24);
                    $pdf->Ln(1.8);
                    $pdf->SetFont('timesb', '', 16);

                    $pdf->Cell(26, 0.4, 'Identifikasi Material '.$bagian, 0, 1, "L");
                    $pdf->SetFont('times', '', 13);
                    $pdf->Ln(0.7);

                    //=========================== Isi Tahapan ===================================
                    if ($bagian == "Hull Construction") {                        
                        $pdf->Cell(4.2, 0.4, 'Nama Komponen', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $namakomp, 0, 1, 'L');
                        $pdf->Ln(0.4);
                        $pdf->Cell(4.2, 0.4, 'ID Komponen', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
                        $pdf->Ln(0.4); 
                    }
                    else{
                        $pdf->Cell(4.2, 0.4, 'Nama Outfitting', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $namakomp, 0, 1, 'L');
                        $pdf->Ln(0.4);
                        $pdf->Cell(4.2, 0.4, 'ID Outfitting', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
                        $pdf->Ln(0.4); 
                    }
                    
                    

                    //=========================== Info Umum ====================================
                    $pdf->Cell(4.2, 0.4, 'Tanggal Periksa', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4,  $tanggalperiksa, 0, 1, 'L');
                    $pdf->Ln(0.4);
                    $pdf->Cell(4.2, 0.4, 'Status', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $status, 0, 1, 'L');
                    $pdf->Ln(1);

                    

                    //============================ item ===============================
                    
                    $pdf->SetFont('timesb', '', 12);
                    $header = array('Nama Item', 'Isi Item', 'standard Item');
                    $w = array(8.1, 4.8, 4.8);
                    // Header tabel
                    for($i=0;$i<count($header);$i++)
                        $pdf->Cell($w[$i],1,$header[$i],1,0,'C');
                    $pdf->Ln();

                    //isi tabel
                    $pdf->SetFont('times', '', 11);
                    foreach($daftarBarang as $row)
                    {
                        $pdf->Cell($w[0],1,$row->nama,'LR',0,'L');
                        $pdf->Cell($w[1],1,$row->item,'LR',0,'L');
                        $pdf->Cell($w[2],1,$row->standard,'LR',0,'L');            
                        $pdf->Ln();
                    }
                    // Closing line
                    $pdf->Cell(array_sum($w),0,'','T');

                    //====================== kalo  Reject ini tempatnya =====================
                    $pdf->Ln(1);  
                    $pdf->SetFont('times', '', 13);
                    if($status == "Reject"){
                        $pdf->Cell(4.2, 0.4, 'Tanggal Reinspeksi', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $reinspek, 0, 1, 'L');
                        $pdf->Ln(0.4);
                        $pdf->Cell(4.2, 0.4, 'Rekomendasi', 0, 0, "L");
                        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                        $pdf->Cell(3, 0.4, $rekomendasi, 0, 1, 'L');
                        $pdf->Ln(1.2);
                    }
                    
                    $pdf->SetFont('times', '', 13);

                    //============================== TTD ====================================

                    $pdf->Cell(18, 0.4, 'Mengetahui,', 0, 0, "C");
                    $pdf->SetFont('timesb', '', 13);
                    $pdf->Ln(1.5);
                    $pdf->Cell(5, 0, 'QC Inspector', 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, 'QA Coordinator', 0, 0, 'C');

                    $pdf->Ln(2.5);

                    $pdf->SetFont('times', '', 13);
                    $pdf->Cell(5, 0, $qcinspec, 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, $qacoor , 0, 0, 'C');

                    $pdf->Ln(2.5);

                    $pdf->SetFont('timesb', '', 13);
                    $pdf->Cell(5, 0, 'Class Surveyor', 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, 'Owner Surveyor', 0, 0, 'C');

                    $pdf->Ln(2.5);

                    $pdf->SetFont('times', '', 13);
                    $pdf->Cell(5, 0, $classsur, 0, 0,'C');
                    $pdf->Cell(2, 0, '', 0, 0, 'R');
                    $pdf->Cell(15, 0, $ownersur, 0, 0, 'C');

                    /*$pdf->AddPage('P', 'A4');
                    $pdf->Image('./'.$path, 2, 2,15,25); */

                    $pdf->Output();
                    ob_end_flush();

                }


            }
            else{
                echo "gagal";
            }
            
        }
        else{
                echo "gagal";
        }


        
        
    }
         


    public function cetakiden(){

        
        $idproj = $this->input->post('idproj');
        $idenmat = $this->input->post('idenparsing');

        $this->load->model('Idenmodel');
        $query = $this->Idenmodel->ambildetailiden($idproj, $idenmat);
        
        $jsonstr = json_encode($query->result_array());  

        foreach ($query->result() as $row)
        {
                     
            $idproj = $row->id_project; 
            $jenis = $row->jenis_komp;
            $bagian = $row->bagian;
            $namakomp = $row->nama_komp;
            $idkomp = $row->id_komp;

            $qcinspec = $row->qc_inspec;
            $qacoor = $row->qa_coor;
            $classsur = $row->class_sur;
            $ownersur = $row->owner_sur;
            $tanggalperiksa = $row->tgl_periksa;
            $status = $row->status;
            $reinspek = $row->tgl_reinspeksi;
            $rekomendasi = $row->rekomendasi;

        }

         $querys = $this->Idenmodel->ambilitemiden($idenmat);         

         ob_start();
        require 'fpdf.php';

        $pdf = new FPDF('P', 'cm', 'A4');
        $pdf->SetAutoPageBreak(true);
        $pdf->AddFont('courier', '', 'courier.php');
        $pdf->AddFont('timesb', '', 'timesb.php');
        $pdf->AddFont('times', '', 'times.php');
        $pdf->SetMargins(1.5, 1.5, 1.5, 1.5);
        $pdf->AddPage('P', 'A4');
        $pdf->SetFont('timesb', '', 22);

        //===================== Judul dan PT ==========================================
        $pdf->Image('./assets/img/ptpal.png', 1.5, 1.2,4,2.4);                     

        $pdf->Cell(22, 0, 'P.T. PAL Indonesia', 0, 1, "C");
        $pdf->SetFont('times', '', 16);
        $pdf->Ln(0.5);
        $pdf->Cell(22, 1, 'Komplek Pangkalan Utama TNI Angkatan Laut', 0, 1, "C");
        $pdf->Ln(0.4);
        $pdf->Cell(22, 0, 'Jalan Ujung, Surabaya, Jawa Timur ', 0, 1, "C");
        $pdf->Ln(0.1);
        $pdf->Image('./assets/img/pembatasn.png', 0, 4.7,24);
        $pdf->Image('./assets/img/pembatasn.png', 0, 4.8,24);
        $pdf->Ln(1.8);
        $pdf->SetFont('timesb', '', 16);

        $pdf->Cell(26, 0.4, 'Identifikasi Material '.$bagian, 0, 1, "L");
        $pdf->SetFont('times', '', 13);
        $pdf->Ln(0.7);

        //=========================== Isi Tahapan ===================================
        if ($bagian == "Hull Construction") {
            $pdf->Cell(4.2, 0.4, 'Jenis', 0, 0, "L");
            $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
            $pdf->Cell(3, 0.4, $jenis, 0, 1, 'L');
            $pdf->Ln(0.4);
            $pdf->Cell(4.2, 0.4, 'Nama Komponen', 0, 0, "L");
            $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
            $pdf->Cell(3, 0.4, $namakomp, 0, 1, 'L');
            $pdf->Ln(0.4);
            $pdf->Cell(4.2, 0.4, 'ID Komponen', 0, 0, "L");
            $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
            $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
            $pdf->Ln(0.4); 
        }
        else{
            $pdf->Cell(4.2, 0.4, 'Nama Outfitting', 0, 0, "L");
            $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
            $pdf->Cell(3, 0.4, $namakomp, 0, 1, 'L');
            $pdf->Ln(0.4);
            $pdf->Cell(4.2, 0.4, 'ID Outfitting', 0, 0, "L");
            $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
            $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
            $pdf->Ln(0.4); 
        }
        
        

        //=========================== Info Umum ====================================
        $pdf->Cell(4.2, 0.4, 'Tanggal Periksa', 0, 0, "L");
        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
        $pdf->Cell(3, 0.4,  $tanggalperiksa, 0, 1, 'L');
        $pdf->Ln(0.4);
        $pdf->Cell(4.2, 0.4, 'Status', 0, 0, "L");
        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
        $pdf->Cell(3, 0.4, $status, 0, 1, 'L');
        $pdf->Ln(1);

        

        //============================ item ===============================
        
        $pdf->SetFont('timesb', '', 12);
        $header = array('Nama Item', 'Isi Item', 'standard Item');
        $w = array(8.1, 4.8, 4.8);
        // Header tabel
        for($i=0;$i<count($header);$i++)
            $pdf->Cell($w[$i],1,$header[$i],1,0,'C');
        $pdf->Ln();

        //isi tabel
        $pdf->SetFont('times', '', 11);
        foreach($querys->result() as $rows)
        {
            $pdf->Cell($w[0],1,$rows->nama_item,'LR',0,'L');
            $pdf->Cell($w[1],1,$rows->isi_item,'LR',0,'L');
            $pdf->Cell($w[2],1,$rows->standard_item,'LR',0,'L');            
            $pdf->Ln();
        }
        // Closing line
        $pdf->Cell(array_sum($w),0,'','T');

        //====================== kalo  Reject ini tempatnya =====================
        $pdf->Ln(1);  
        $pdf->SetFont('times', '', 13);
        if($status == "Reject"){
            $pdf->Cell(4.2, 0.4, 'Tanggal Reinspeksi', 0, 0, "L");
            $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
            $pdf->Cell(3, 0.4, $reinspek, 0, 1, 'L');
            $pdf->Ln(0.4);
            $pdf->Cell(4.2, 0.4, 'Rekomendasi', 0, 0, "L");
            $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
            $pdf->Cell(3, 0.4, $rekomendasi, 0, 1, 'L');
            $pdf->Ln(1.2);
        }
        
        $pdf->SetFont('times', '', 13);

        //============================== TTD ====================================

        $pdf->Cell(18, 0.4, 'Mengetahui,', 0, 0, "C");
        $pdf->SetFont('timesb', '', 13);
        $pdf->Ln(1.5);
        $pdf->Cell(5, 0, 'QC Inspector', 0, 0,'C');
        $pdf->Cell(2, 0, '', 0, 0, 'R');
        $pdf->Cell(15, 0, 'QA Coordinator', 0, 0, 'C');

        $pdf->Ln(2.5);

        $pdf->SetFont('times', '', 13);
        $pdf->Cell(5, 0, $qcinspec, 0, 0,'C');
        $pdf->Cell(2, 0, '', 0, 0, 'R');
        $pdf->Cell(15, 0, $qacoor , 0, 0, 'C');

        $pdf->Ln(2.5);

        $pdf->SetFont('timesb', '', 13);
        $pdf->Cell(5, 0, 'Class Surveyor', 0, 0,'C');
        $pdf->Cell(2, 0, '', 0, 0, 'R');
        $pdf->Cell(15, 0, 'Owner Surveyor', 0, 0, 'C');

        $pdf->Ln(2.5);

        $pdf->SetFont('times', '', 13);
        $pdf->Cell(5, 0, $classsur, 0, 0,'C');
        $pdf->Cell(2, 0, '', 0, 0, 'R');
        $pdf->Cell(15, 0, $ownersur, 0, 0, 'C');

        /*$pdf->AddPage('P', 'A4');
        $pdf->Image('./'.$path, 2, 2,15,25); */

        $pdf->Output();
        ob_end_flush();


        

    }


 }