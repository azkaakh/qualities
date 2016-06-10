<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

  /* default */
  public function index()	{
  }
  
  public function ambillistproject($kode=NULL){
    //$nilai = $this->input->post('nama');
    $this->load->model('Projectmodel');
    $query = $this->Projectmodel->ambillistproject();
    echo json_encode($query->result_array());
  }

  public function ambildetailproject($kode=NULL){
    $nilai = $this->input->post('id');
    $this->load->model('Projectmodel');
    $query = $this->Projectmodel->ambildetailproject($nilai);
    echo json_encode($query->result_array());
  }

  public function ambiljenisidenmat($kode=NULL){
    $nilai = $this->input->post('nilai');
    $this->load->model('Barangmodel');
    $query = $this->Barangmodel->ambiljenis($nilai);
    echo json_encode($query->result_array());
  }

  public function ambilitem($kode=NULL){
    $nilai = $this->input->post('nilai');
    $bagian = $this->input->post('bagian');
    $this->load->model('Barangmodel');
    $query = $this->Barangmodel->ambilitem($nilai, $bagian);
    echo json_encode($query->result_array());
  }

  public function ambillistiden($kode=NULL){
    $idproj = $this->input->post('idproj');
    $nilai = $this->input->post('nilai');
    $this->load->model('Idenmodel');
    $query = $this->Idenmodel->ambillistiden($idproj, $nilai);
    echo json_encode($query->result_array());
  }

  public function ambildetailiden($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    $this->load->model('Idenmodel');
    $query = $this->Idenmodel->ambildetailiden($idproj, $idenmat);
    echo json_encode($query->result_array());
  }

  public function ambilitemiden($kode=NULL){
    $idenmat = $this->input->post('id_iden');
    $this->load->model('Idenmodel');
    $query = $this->Idenmodel->ambilitemiden($idenmat);
    echo json_encode($query->result_array());
  }

  public function ambilulangiden($kode=NULL){
    $idproj = $this->input->post('idproj');
    $bagian = $this->input->post('bagian');
    $idenparsing = $this->input->post('id_iden');
    $this->load->model('Idenmodel');
    $query = $this->Idenmodel->ambilulangiden($idproj, $bagian, $idenparsing);
    echo json_encode($query->result_array());
  }

  public function ambilkomponen($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);
    $bagian = $this->input->post('bagian');
    
    $this->load->model('Idenmodel');
    $query = $this->Idenmodel->ambilkompmo($bagian, $keyword);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->nama_komp;
    echo json_encode($json_array);
  }

  public function ambilprosesfabrikasi($kode=NULL){
    $bagfabrikasi = $this->input->post('nilai');
    $this->load->model('Fabrikasimodel');
    $query = $this->Fabrikasimodel->ambilprosesfabrikasi($bagfabrikasi);
    echo json_encode($query->result_array());
  }

  public function ambilitemfabrikasi($kode=NULL){
    $bagian = $this->input->post('bagian');
    $proses = $this->input->post('proses');
    $this->load->model('Barangmodel');
    $query = $this->Barangmodel->ambilitemfabrikasi($bagian, $proses);
    echo json_encode($query->result_array());
  }

  public function ambilnamakomp($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);
    $bagian = $this->input->post('bagian');
    $idproj = $this->input->post('idproj');
    
    $this->load->model('Idenmodel');
    $query = $this->Idenmodel->ambilnamakomp($bagian, $keyword, $idproj);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->nama_komp;
    echo json_encode($json_array);
  }

  public function ceknamaiden($kode=NULL){
    $nama = $this->input->post('nama');
    $this->load->model('Idenmodel');
    $query = $this->Idenmodel->ceknamaiden($nama);
    echo json_encode($query->result_array());
  }

  public function ambillistfabrikasi($kode=NULL){
    $idproj = $this->input->post('idproj');
    $nilai = $this->input->post('nilai');
    $this->load->model('Fabrikasimodel');
    $query = $this->Fabrikasimodel->ambillistfabrikasi($idproj, $nilai);
    echo json_encode($query->result_array());
  }

  public function ambildetailfab($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    $this->load->model('Fabrikasimodel');
    $query = $this->Fabrikasimodel->ambildetailfab($idproj, $idenmat);
    echo json_encode($query->result_array());
  }

  public function ambilitemfab($kode=NULL){
    $idenmat = $this->input->post('id_iden');
    $this->load->model('Fabrikasimodel');
    $query = $this->Fabrikasimodel->ambilitemfab($idenmat);
    echo json_encode($query->result_array());
  }

  public function ambilulangfab($kode=NULL){
    $idproj = $this->input->post('idproj');
    $bagian = $this->input->post('bagian');
    $idenparsing = $this->input->post('id_iden');
    $this->load->model('Fabrikasimodel');
    $query = $this->Fabrikasimodel->ambilulangfab($idproj, $bagian, $idenparsing);
    echo json_encode($query->result_array());
  }


  //========================================= Assembly ====================================================

  public function ambilprosesassembly($kode=NULL){    
    $this->load->model('Assemblymodel');
    $query = $this->Assemblymodel->ambilprosesassembly();
    echo json_encode($query->result_array());
  }

  public function ambilitemassembly($kode=NULL){    
    $proses = $this->input->post('proses');
    $this->load->model('Assemblymodel');
    $query = $this->Assemblymodel->ambilitemassembly($proses);
    echo json_encode($query->result_array());
  }

  public function ambillistassembly($kode=NULL){ 
    $idproj = $this->input->post('idproj');       
    $this->load->model('Assemblymodel');
    $query = $this->Assemblymodel->ambillistassembly($idproj);
    echo json_encode($query->result_array());
  }

  public function ambildetailassembly($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    $this->load->model('Assemblymodel');
    $query = $this->Assemblymodel->ambildetailassembly($idproj, $idenmat);
    echo json_encode($query->result_array());
  }

  public function ambilulangitemass($kode=NULL){    
    $idassembly = $this->input->post('id_iden');
    $this->load->model('Assemblymodel');
    $query = $this->Assemblymodel->ambilulangitemass($idassembly);
    echo json_encode($query->result_array());
  }

  //================================= erection =======================================

  public function ambilproseserection($kode=NULL){    
    $this->load->model('Erectionmodel');
    $query = $this->Erectionmodel->ambilproseserection();
    echo json_encode($query->result_array());
  }

  public function ambilitemerection($kode=NULL){    
    $proses = $this->input->post('proses');
    $this->load->model('Erectionmodel');
    $query = $this->Erectionmodel->ambilitemerection($proses);
    echo json_encode($query->result_array());
  }

  public function ambilnamaassembly($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);    
    $idproj = $this->input->post('idproj'); 
    
    $this->load->model('Erectionmodel');
    $query = $this->Erectionmodel->ambilnamaassembly($keyword, $idproj);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->blok_assembly;
    echo json_encode($json_array);
  }

  public function ceknamaas($kode=NULL){    
    $nama = $this->input->post('nama');
    $this->load->model('Erectionmodel');
    $query = $this->Erectionmodel->ceknamaas($nama);
    echo json_encode($query->result_array());
  }

  public function ambillisterection($kode=NULL){ 
    $idproj = $this->input->post('idproj');       
    $this->load->model('Erectionmodel');
    $query = $this->Erectionmodel->ambillisterection($idproj);
    echo json_encode($query->result_array());
  }

  public function ambildetailerection($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    $this->load->model('Erectionmodel');
    $query = $this->Erectionmodel->ambildetailerection($idproj, $idenmat);
    echo json_encode($query->result_array());
  }

  public function ambilulangitemer($kode=NULL){    
    $iderection = $this->input->post('id_iden');
    $this->load->model('Erectionmodel');
    $query = $this->Erectionmodel->ambilulangitemer($iderection);
    echo json_encode($query->result_array());
  }

  //=================================== outfitting ============================================

   public function ambiloutfitting($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);    
    $bagian = $this->input->post('bagian'); 
    $idproj = $this->input->post('idproj');
    
    $this->load->model('Outfittingmodel');
    $query = $this->Outfittingmodel->ambiloutfitting($keyword, $bagian, $idproj);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->nama_komp;
    echo json_encode($json_array);
  }


  public function ambilitemout($kode=NULL){    
    $itemselected = $this->input->post('itemselected');
    $bagian = $this->input->post('bagian');
    $this->load->model('Outfittingmodel');
    $query = $this->Outfittingmodel->ambilitemout($itemselected, $bagian);
    echo json_encode($query->result_array());
  }

  public function ambillistoutfitting($kode=NULL){    
    $bagian = $this->input->post('nilai');
    $idproj = $this->input->post('idproj');
    $this->load->model('Outfittingmodel');
    $query = $this->Outfittingmodel->ambillistoutfitting($bagian, $idproj);
    echo json_encode($query->result_array());
  }

  public function ambildetailoutfitting($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    $bagian = $this->input->post('bagian');
    $this->load->model('Outfittingmodel');
    $query = $this->Outfittingmodel->ambildetailoutfitting($idproj, $idenmat, $bagian);
    echo json_encode($query->result_array());
  }

  public function ambilulangitemout($kode=NULL){    
    $idout = $this->input->post('id_iden');
    $this->load->model('Outfittingmodel');
    $query = $this->Outfittingmodel->ambilulangitemout($idout);
    echo json_encode($query->result_array());
  }


//========================= Launching ===================================================================
   public function ambillaunching($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);    
    $bagian = $this->input->post('bagian'); 
    
    $this->load->model('Launchingmodel');
    $query = $this->Launchingmodel->ambillaunching($keyword, $bagian);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->nama_komplau;
    echo json_encode($json_array);
  }

  public function ambilitemlau($kode=NULL){    
    $itemselected = $this->input->post('itemselected');
    $bagian = $this->input->post('bagian');
    $this->load->model('Launchingmodel');
    $query = $this->Launchingmodel->ambilitemlau($itemselected, $bagian);
    echo json_encode($query->result_array());
  }

  public function ambillistlaunching($kode=NULL){    
    $bagian = $this->input->post('nilai');
    $idproj = $this->input->post('idproj');
    $this->load->model('Launchingmodel');
    $query = $this->Launchingmodel->ambillistlaunching($bagian, $idproj);
    echo json_encode($query->result_array());
  }


  public function ambildetaillaunching($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    $bagian = $this->input->post('bagian');
    $this->load->model('Launchingmodel');
    $query = $this->Launchingmodel->ambildetaillaunching($idproj, $idenmat, $bagian);
    echo json_encode($query->result_array());
  }

  public function ambilulangitemlau($kode=NULL){    
    $idlau = $this->input->post('id_iden');
    $this->load->model('Launchingmodel');
    $query = $this->Launchingmodel->ambilulangitemlau($idlau);
    echo json_encode($query->result_array());
  }


//============================ Commissioning =====================================================


  public function ambilcomm($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);    
    $bagian = $this->input->post('bagian'); 
    
    $this->load->model('Comodel');
    $query = $this->Comodel->ambilcomm($keyword, $bagian);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->pengujian_comm;
    echo json_encode($json_array);
  }


  public function ambilitemcom($kode=NULL){    
    $itemselected = $this->input->post('itemselected');
    $bagian = $this->input->post('bagian');
    $this->load->model('Comodel');
    $query = $this->Comodel->ambilitemcom($itemselected, $bagian);
    echo json_encode($query->result_array());
  }

  public function ambillistcomm($kode=NULL){    
    $bagian = $this->input->post('nilai');
    $idproj = $this->input->post('idproj');
    $this->load->model('Comodel');
    $query = $this->Comodel->ambillistcomm($bagian, $idproj);
    echo json_encode($query->result_array());
  }


  public function ambildetailcomm($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    $bagian = $this->input->post('bagian');
    $this->load->model('Comodel');
    $query = $this->Comodel->ambildetailcomm($idproj, $idenmat, $bagian);
    echo json_encode($query->result_array());
  }


  public function ambilitemcomm($kode=NULL){    
    $idcomm = $this->input->post('id_iden');
    $this->load->model('Comodel');
    $query = $this->Comodel->ambilitemcomm($idcomm);
    echo json_encode($query->result_array());
  }



//================================= Sea trial ===========================================================

  public function ambilsea($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);    
    $bagian = $this->input->post('bagian'); 
    
    $this->load->model('Seamodel');
    $query = $this->Seamodel->ambilsea($keyword, $bagian);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->pengujian_sea;
    echo json_encode($json_array);
  }

  public function ambilitemsea($kode=NULL){    
    $itemselected = $this->input->post('itemselected');
    $bagian = $this->input->post('bagian');
    $this->load->model('Seamodel');
    $query = $this->Seamodel->ambilitemsea($itemselected, $bagian);
    echo json_encode($query->result_array());
  }

  public function ambillistsea($kode=NULL){    
    $bagian = $this->input->post('nilai');
    $idproj = $this->input->post('idproj');
    $this->load->model('Seamodel');
    $query = $this->Seamodel->ambillistsea($bagian, $idproj);
    echo json_encode($query->result_array());
  }

  public function ambildetailsea($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');
    //$bagian = $this->input->post('bagian');
    $this->load->model('Seamodel');
    $query = $this->Seamodel->ambildetailsea($idproj, $idenmat);
    echo json_encode($query->result_array());
  }

  public function ambilulangitemsea($kode=NULL){    
    $idcomm = $this->input->post('id_iden');
    $this->load->model('Seamodel');
    $query = $this->Seamodel->ambilulangitemsea($idcomm);
    echo json_encode($query->result_array());
  }

  //================================ Delivery ========================================

  public function ambildelivery($kode=NULL){
    //$keyword = $this->uri->segment(3);
    $keyword = $this->input->post('kode',TRUE);        
    
    $this->load->model('Deliverymodel');
    $query = $this->Deliverymodel->ambildelivery($keyword);
     $json_array = array();
        foreach ($query as $row)
            $json_array[]=$row->nama_dokumen;
    echo json_encode($json_array);
  }

  public function ambillistdelivery($kode=NULL){        
    $idproj = $this->input->post('idproj');
    $this->load->model('Deliverymodel');
    $query = $this->Deliverymodel->ambillistdelivery($idproj);
    echo json_encode($query->result_array());
  }

  public function ambildetaildelivery($kode=NULL){
    $idproj = $this->input->post('idproj2');
    $idenmat = $this->input->post('idenmat');    
    $this->load->model('Deliverymodel');
    $query = $this->Deliverymodel->ambildetaildelivery($idproj, $idenmat);
    echo json_encode($query->result_array());
  }
  
  public function ambilulangitemdelivery($kode=NULL){    
    $iddeliv = $this->input->post('id_iden');
    $this->load->model('Deliverymodel');
    $query = $this->Deliverymodel->ambilulangitemdelivery($iddeliv);
    echo json_encode($query->result_array());
  }

  
  //=========================================== remainder =========================================

  public function remainder($kode=NULL){   
    $idproj = $this->input->post('idproj'); 
    $nilai = $this->input->post('nilai'); 
    $this->load->model('Datamodel');
    $query = $this->Datamodel->remainder($idproj, $nilai);
    echo json_encode($query->result_array());
  }

  //========================================== logic search ======================================

  public function logicsearch($kode=NULL){   
    $idproj = $this->input->post('idproj'); 
    $nilai = $this->input->post('nilai'); 
    $keyword = $this->input->post('keyword');
    $tabelkomp = $this->input->post('tabelkomp');
    $this->load->model('Datamodel');
    $query = $this->Datamodel->logicsearch($idproj, $nilai, $keyword, $tabelkomp);
    echo json_encode($query->result_array());
  }

  //========================================= Registrasi dan Pendaftaran ========================

  public function ambillistpendaftar($kode=NULL){       
    $nilai = $this->input->post('nilai'); 
    $this->load->model('Datamodel');
    $query = $this->Datamodel->ambillistpendaftar($nilai);
    echo json_encode($query->result_array());
  }

  public function ambildetailpendaftar($kode=NULL){       
    $id_pendaftar = $this->input->post('idenmat'); 
    $this->load->model('Datamodel');
    $query = $this->Datamodel->ambildetailpendaftar($id_pendaftar);
    echo json_encode($query->result_array());
  }

  public function setujudaftar($kode=NULL){       
    $id = $this->input->post('id'); 
    $user = $this->input->post('user'); 
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $tipepengguna = $this->input->post('tipepengguna');
    $project = $this->input->post('project');
    $this->load->model('Datamodel');
    $query = $this->Datamodel->setujudaftar($id, $user, $password, $nama, $tipepengguna, $project);
    
  }



}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
