<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Sea extends CI_Controller{
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
    
    public function tambahsea($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            $this->load->model('Seamodel');
            $data['id'] = $this->Seamodel->ambilmaxid()+1;
            $data['hasil'] = $hasil;
            $this->load->view('administrator/seatrial/tambahsea', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function lihatsea($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {
            /*$this->load->model('Idenmodel');
            $data['id'] = $this->Idenmodel->ambilmaxid()+1;*/
            $data['hasil'] = $hasil;
            $this->load->view('administrator/seatrial/lihatsea', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    public function suntingsea($hasil = null){
        if($this->session->userdata('hak_akses') == 1 && $this->session->userdata('pilihan_project') != 0) {  
            $idenparsing = $this->input->post('idenparsing');
            $bagian = $this->input->post('bagian');
            $idproj = $this->input->post('idproj');            
            $data['bagian'] = $bagian;
            $data['idenparsing'] = $idenparsing;
            $data['idproj'] = $idproj;            
            $data['hasil'] = $hasil;
            $this->load->view('administrator/seatrial/suntingsea', $data);
        }
        else{
            redirect(base_url() . 'login');    
        }
        
    }

    //======================================================================================================================


    //================================= Submit Identifikasi Material =======================================================


     public function submitsea($hasil = null){

        $idproj = $this->input->post('idproj');
        $idsea = $this->input->post('idsea');        
        $bagian = $this->input->post('bagian');
        $namauji = $this->input->post('namauji'); 
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
        $path = 'upload/seatrial/'.$filename;
        
        $daftarBarang = json_decode($this->input->post('daftarBarang'));
        $itemlist = [];
        foreach ($daftarBarang as $barang) {
            $obj = new stdClass();
            $obj->nama = $barang->nama;
            $obj->item = $barang->item;
            $obj->standard = $barang->standard;

            array_push($itemlist, $obj);

        }


        $this->load->model('Seamodel');

        if($this->Seamodel->tambahisisea($idproj, $idsea, $bagian, $namauji, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path)){
            if ($this->Seamodel->tambahitemsea($idsea, $itemlist)) {
                $config['upload_path'] = './upload/seatrial';
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
                    /*$hasil = 'gagal';
                     redirect('idenmat/hullcon/'. $hasil);*/
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    /*$hasil = 'sukses';
                    redirect('sea/tambahsea/'. $hasil);*/

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

                    $pdf->Cell(26, 0.4, 'Sea Trial', 0, 1, "L");
                    $pdf->SetFont('times', '', 13);
                    $pdf->Ln(0.7);

                    //=========================== Isi Tahapan ===================================
                    $pdf->Cell(4.2, 0.4, 'Nama Bagian', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $bagian, 0, 1, 'L');
                    $pdf->Ln(0.4);
                    $pdf->Cell(4.2, 0.4, 'Nama Uji', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $namauji, 0, 1, 'L');
                    $pdf->Ln(0.4);
                    $pdf->Cell(4.2, 0.4, 'ID Komponen', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
                    $pdf->Ln(0.4);

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

    //=============================================================================================================================


    //===================================== Update Identifikasi Material ==========================================================

    public function updatesea($hasil = null){

        $idproj = $this->input->post('idproj');
        $idsea = $this->input->post('idsea');
        $bagian = $this->input->post('bagian');                
        $namauji = $this->input->post('namauji'); 
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
        $path = 'upload/seatrial/'.$filename;
        
        $daftarBarang = json_decode($this->input->post('daftarBarang'));
        $itemlist = [];
        foreach ($daftarBarang as $barang) {
            $obj = new stdClass();
            $obj->nama = $barang->nama;
            $obj->item = $barang->item;
            $obj->standard = $barang->standard;

            array_push($itemlist, $obj);

        }


        $this->load->model('Seamodel');

        if($this->Seamodel->suntingisisea($idproj, $idsea, $namauji, $idkomp, $qcinspec, $qacoor, $classsur, $ownersur, $tanggalperiksa, $status, $reinspek, $rekomendasi, $path)){
            if ($this->Seamodel->suntingitemsea($idsea, $itemlist)) {
                $config['upload_path'] = './upload/seatrial';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048000';
                
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
                    redirect('sea/lihatsea/'. $hasil);*/
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

                    $pdf->Cell(26, 0.4, 'Sea Trial', 0, 1, "L");
                    $pdf->SetFont('times', '', 13);
                    $pdf->Ln(0.7);

                    //=========================== Isi Tahapan ===================================
                    $pdf->Cell(4.2, 0.4, 'Nama Bagian', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $bagian, 0, 1, 'L');
                    $pdf->Ln(0.4);
                    $pdf->Cell(4.2, 0.4, 'Nama Uji', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $namauji, 0, 1, 'L');
                    $pdf->Ln(0.4);
                    $pdf->Cell(4.2, 0.4, 'ID Komponen', 0, 0, "L");
                    $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
                    $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
                    $pdf->Ln(0.4);

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


    public function cetaksea(){

        
        $idproj = $this->input->post('idproj');
        $idenmat = $this->input->post('idenparsing');
        $bagian = $this->input->post('bagian');

        $this->load->model('Seamodel');
        $query = $this->Seamodel->ambildetailsea($idproj, $idenmat);

        foreach ($query->result() as $row)
        {

            $idproj = $row->id_project;             
            $bagian = $row->bagian_sea;
            $namauji = $row->pengujian_sea;            
            $idkomp = $row->id_komps; 

            $qcinspec = $row->qc_inspecs;
            $qacoor = $row->qa_coors;
            $classsur = $row->class_surs;
            $ownersur = $row->owner_surs;
            $tanggalperiksa = $row->tgl_periksas;
            $status = $row->status_sea;
            $reinspek = $row->tgl_reinspeksis;
            $rekomendasi = $row->rekomendasi_sea;
            
        }
        
        $querys = $this->Seamodel->ambilulangitemsea($idenmat);
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

        $pdf->Cell(26, 0.4, 'Sea Trial', 0, 1, "L");
        $pdf->SetFont('times', '', 13);
        $pdf->Ln(0.7);

        //=========================== Isi Tahapan ===================================
        $pdf->Cell(4.2, 0.4, 'Nama Bagian', 0, 0, "L");
        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
        $pdf->Cell(3, 0.4, $bagian, 0, 1, 'L');
        $pdf->Ln(0.4);
        $pdf->Cell(4.2, 0.4, 'Nama Uji', 0, 0, "L");
        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
        $pdf->Cell(3, 0.4, $namauji, 0, 1, 'L');
        $pdf->Ln(0.4);
        $pdf->Cell(4.2, 0.4, 'ID Komponen', 0, 0, "L");
        $pdf->Cell(0.5, 0.4, ':', 0, 0, 'L');
        $pdf->Cell(3, 0.4, $idkomp, 0, 1, 'L');
        $pdf->Ln(0.4);

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
        foreach ($querys->result() as $rows)
        {
            $pdf->Cell($w[0],1,$rows->nama_items,'LR',0,'L');
            $pdf->Cell($w[1],1,$rows->isi_items,'LR',0,'L');
            $pdf->Cell($w[2],1,$rows->standard_items,'LR',0,'L');            
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