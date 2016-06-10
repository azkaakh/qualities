<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 1.4.1
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<!-- Mirrored from beyondadmin-v1.4.1.s3-website-us-east-1.amazonaws.com/tables-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 01:26:21 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Reminder</title>

    <meta name="description" content="data tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link href="<?php echo base_url(); ?>assets/css/beyond.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/typicons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />

    <!--Page Related styles-->
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css" rel="stylesheet" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="<?php echo base_url(); ?>assets/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="<?php echo base_url(); ?>assets/img/logos.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <?php   
                                            if($this->session->userdata('hak_akses') == 1){
                                            ?>

                                                <img src="<?php echo base_url(); ?>assets/img/adminimg.png">
                                            <?php
                                            }
                                            else if ($this->session->userdata('hak_akses') == 2) {
                                            ?>
                                                <img src="<?php echo base_url(); ?>assets/img/ownerimg.png">
                                            <?php
                                            }
                                            else{
                                            ?>
                                                <img src="<?php echo base_url(); ?>assets/img/qaimg.png"> 
                                            <?php
                                            }
                                                          
                                        ?>
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span><?php echo $this->session->userdata('nama_pengguna');?></span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a><?php echo $this->session->userdata('nama_pengguna');?></a></li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="<?php echo base_url(); ?>login/do_logout">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            
                        </ul>

                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <?php   
                if($this->session->userdata('hak_akses') == 1){
                

                    $this->load->view('navbar/navbarlanjut');
                
                }
                else if ($this->session->userdata('hak_akses') == 2) {
                
                    $this->load->view('navbar/navbarall');
                
                }
                else{
                
                    $this->load->view('navbar/navbarqa');
                
                }
                              
            ?>
            
            
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        
                        <li class="active">Reminder</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                           Reminder
                            
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="#">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>                
                <div class="page-body">
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">Reminder</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    
                                    <form id="registrationForm" action="<?php echo base_url(); ?>outfitting/suntingoutfitting" method="post" class="form-horizontal"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                               <br>
                                               

                                                

                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label no-padding-right">Tahapan</label>
                                                    <div class="col-sm-8">
                                                        <select id="tahapan" name="tahapan" onchange="pilihan()">
                                                            <option value="null">--Silahkan Pilih--</option>
                                                            <option value="Semua">Semua Tahapan</option>
                                                            <option value="idenmaterial">Identifikasi Material</option>
                                                            <option value="fabrikasi">Fabrikasi</option>
                                                            <option value="assembly">Assembly</option>
                                                            <option value="erection">Erection</option>
                                                            <option value="outfitting">Outfitting</option>
                                                            <option value="launching">Launching</option>
                                                            <option value="commissioning">Commissioning</option>
                                                            <option value="seatrial">Sea Trial</option>
                                                            <option value="delivery">Delivery</option>
                                                        </select>                                                           
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label no-padding-right">Kualitas</label>
                                                    <label  class="col-sm-1 control-label"><strong id="tampilpersen"> 0 % </strong></label>
                                                    
                                                </div>

                                                
                                                

                                                <!-- ==========================identifikasi mat =========================== -->
                                                <div id="idenmat">
                                                    <!-- <br>
                                                    <br>
                                                    <div class="form-title" align="center">
                                                        List Identifikasi Material
                                                    </div>
                                                    <br>

                                                    <div class="form-group">  
                                                        <label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label>
                                                        <div class="col-lg-10">
                                                            <table class="table table-hover">
                                                                <thead class="bordered-darkorange">
                                                                    <tr>
                                                                       
                                                                        <th>
                                                                            Nama Komponen
                                                                        </th>
                                                                        <th>
                                                                            QC Inspector
                                                                        </th>
                                                                        <th>
                                                                            QA Coordinator
                                                                        </th>
                                                                        <th>
                                                                            Class Surveyor
                                                                        </th>
                                                                        <th>
                                                                            Owner Surveyor
                                                                        </th>
                                                                        <th>
                                                                            Status
                                                                        </th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="daftardetail">
                                                                     <tr>
                                                                        <td>Project 1234</td>
                                                                        <td>Alex Nilson</td>
                                                                        <td>100 m </td>
                                                                        <td>30 m</td>
                                                                        <td>10 m</td>
                                                                        <td>300 ton</td>
                                                                        
                                                                    </tr>                                                       
                                                                </tbody>                                                           
                                                            </table>

                                                        </div>
                                                    </div> -->
                                                </div>

                                                <!-- =========================== Fabrikasi ========================= -->
                                                <div id="fabrikasi">
                                                    
                                                </div>

                                                <!-- ============================ Assembly ======================= -->
                                                <div id="assembly">
                                                    
                                                </div>

                                                <!-- ============================ Erection ==================== -->
                                                <div id="erection">
                                                    
                                                </div>

                                                <!-- ============================= Outfitting ====================== -->
                                                <div id="outfitting">
                                                    
                                                </div>

                                                <!-- ============================ Launching ======================= -->
                                                <div id="launching">
                                                    
                                                </div>

                                                <!-- ============================== Commissioning ===================== -->
                                                <div id="commissioning">
                                                    
                                                </div>

                                                <!-- ============================== Sea Trial ======================= -->
                                                <div id="seatrial">
                                                    
                                                </div>

                                                <!-- ============================== Delivery ======================= -->
                                                <div id="delivery">
                                                    
                                                </div>

                                                
                                            </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                </div>                
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <script type="text/javascript">

    var all;
    var oke;
    var reject;

    function pilihan(){
        
        var nilai = document.getElementById('tahapan').value;
        var idproj = "<?php echo $this->session->userdata('pilihan_project'); ?>";
        all = 0;
        oke =0;
        reject = 0;
        document.getElementById('idenmat').innerHTML = '';
        document.getElementById('fabrikasi').innerHTML = '';
        document.getElementById('assembly').innerHTML = '';
        document.getElementById('erection').innerHTML = '';
        document.getElementById('outfitting').innerHTML = '';
        document.getElementById('launching').innerHTML = '';
        document.getElementById('commissioning').innerHTML = '';
        document.getElementById('seatrial').innerHTML = '';
        document.getElementById('delivery').innerHTML = '';
        
        if (nilai == "idenmaterial") {
            
            idenmat(idproj, nilai);
            cetak();
        }
        else if (nilai == "fabrikasi") {
            
            fabrikasi(idproj, nilai);
            cetak();
        }
        else if (nilai == "assembly") {
            assembly(idproj, nilai);
            cetak();
        }
        else if (nilai == "erection") {
            erection(idproj, nilai);
            cetak();
        }
        else if (nilai == "outfitting") {
            outfitting(idproj, nilai);
            cetak();
        }
        else if (nilai == "launching") {
            launching(idproj, nilai);
            cetak();
        }
        else if (nilai == "commissioning") {
            comm(idproj, nilai);
            cetak();
        }
        else if (nilai == "seatrial") {
            sea(idproj, nilai);
            cetak();
        }
        else if (nilai == "delivery") {
            delivery(idproj, nilai);
            cetak();
        }
        else if (nilai == "Semua"){
            var nilaiall = ['idenmaterial', 'fabrikasi', 'assembly', 'erection', 'outfitting', 'launching', 'commissioning', 'seatrial', 'delivery'];
            idenmat(idproj, nilaiall[0]);
            fabrikasi(idproj, nilaiall[1]);
            assembly(idproj, nilaiall[2]);
            erection(idproj, nilaiall[3]);
            outfitting(idproj, nilaiall[4]);
            launching(idproj, nilaiall[5]);
            comm(idproj, nilaiall[6]);
            sea(idproj, nilaiall[7]);
            delivery(idproj, nilaiall[8]);
            cetak();
        };

    }

    function idenmat(idproj, nilai){
        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {

               var isiawal = '<br><br><div class="form-title" align="center">List Identifikasi Material</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Komponen</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail"></tbody></table></div></div>' ;

               document.getElementById('idenmat').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
              
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].nama_komp +'</td><td>'+ data[i].qc_inspec +'</td><td>'+ data[i].qa_coor +'</td><td>'+ data[i].class_sur +'</td><td>'+ data[i].owner_sur +'</td><td>'+ data[i].tgl_reinspeksi +'</td><td>'+ data[i].status +'</td></tr>';
                        $('#daftardetail').append(isidalam);
                    }
                                        
                }; 
                okes = data.length - countrej;
                reject = reject + countrej;
                oke = oke + okes;
                
            },
            async: false
            
        })
    }

    function fabrikasi(idproj, nilai){
        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Fabrikasi</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Komponen</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail1"></tbody></table></div></div>' ;

               document.getElementById('fabrikasi').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_fab == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].nama_kompfab +'</td><td>'+ data[i].qc_inspecfab +'</td><td>'+ data[i].qa_coorfab +'</td><td>'+ data[i].class_surfab +'</td><td>'+ data[i].owner_surfab +'</td><td>'+ data[i].tgl_reinspeksifab +'</td><td>'+ data[i].status_fab +'</td></tr>';
                        $('#daftardetail1').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                oke = oke + okes;          
                
            },
            async: false
            
        })
    }

    function assembly(idproj, nilai){

        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Assembly</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Blok</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail2"></tbody></table></div></div>' ;

               document.getElementById('assembly').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_assembly == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].blok_assembly +'</td><td>'+ data[i].qc_inspecass +'</td><td>'+ data[i].qa_coorass +'</td><td>'+ data[i].class_surass +'</td><td>'+ data[i].owner_surass +'</td><td>'+ data[i].tgl_reinspeksiass +'</td><td>'+ data[i].status_assembly +'</td></tr>';
                        $('#daftardetail2').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                
                oke = oke + okes;          
                
            },
            async: false
            
        })

    }

    function erection(idproj, nilai){

        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Erection</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Blok</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail3"></tbody></table></div></div>' ;

               document.getElementById('erection').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_erection == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].blok_erection +'</td><td>'+ data[i].qc_inspecer +'</td><td>'+ data[i].qa_coorer +'</td><td>'+ data[i].class_surer +'</td><td>'+ data[i].owner_surer +'</td><td>'+ data[i].tgl_reinspeksier +'</td><td>'+ data[i].status_erection +'</td></tr>';
                        $('#daftardetail3').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                
                oke = oke + okes;          
                
            },
            async: false
            
        })

    }

    function outfitting(idproj, nilai){

        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Outfitting</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Outfitting</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail4"></tbody></table></div></div>' ;

               document.getElementById('outfitting').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_out == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].nama_outfitting +'</td><td>'+ data[i].qc_inspecout +'</td><td>'+ data[i].qa_coorout +'</td><td>'+ data[i].class_surout +'</td><td>'+ data[i].owner_surout +'</td><td>'+ data[i].tgl_reinspekout +'</td><td>'+ data[i].status_out +'</td></tr>';
                        $('#daftardetail4').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                
                oke = oke + okes;          
                
            },
            async: false
            
        })

    }

    function launching(idproj, nilai){

        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Launching</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Komponen</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail5"></tbody></table></div></div>' ;

               document.getElementById('launching').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_launching == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].nama_kompl +'</td><td>'+ data[i].qc_inspecl +'</td><td>'+ data[i].qa_coorl +'</td><td>'+ data[i].class_surl +'</td><td>'+ data[i].owner_surl +'</td><td>'+ data[i].tgl_reinspeksil +'</td><td>'+ data[i].status_launching +'</td></tr>';
                        $('#daftardetail5').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                
                oke = oke + okes;          
                
            },
            async: false
            
        })

    }

    function comm(idproj, nilai){

        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Commissioning</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Pengujian</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail6"></tbody></table></div></div>' ;

               document.getElementById('commissioning').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_comm == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].pengujian_comm +'</td><td>'+ data[i].qc_inspecom +'</td><td>'+ data[i].qa_coorom +'</td><td>'+ data[i].class_surom +'</td><td>'+ data[i].owner_surom +'</td><td>'+ data[i].tgl_reinspeksiom +'</td><td>'+ data[i].status_comm +'</td></tr>';
                        $('#daftardetail6').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                
                oke = oke + okes;          
                
            },
            async: false
            
        })

    }

    function sea(idproj, nilai){

        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Sea Trial</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Pengujian</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail7"></tbody></table></div></div>' ;

               document.getElementById('seatrial').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_sea == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].pengujian_sea +'</td><td>'+ data[i].qc_inspecs +'</td><td>'+ data[i].qa_coors +'</td><td>'+ data[i].class_surs +'</td><td>'+ data[i].owner_surs +'</td><td>'+ data[i].tgl_reinspeksis +'</td><td>'+ data[i].status_sea +'</td></tr>';
                        $('#daftardetail7').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                
                oke = oke + okes;          
                
            },
            async: false
            
        })

    }

    function delivery(idproj, nilai){

        $.ajax({
            url: '<?php echo base_url(); ?>ajax/remainder/',
            data: {idproj:idproj, nilai:nilai},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
               var isiawal = '<br><br><div class="form-title" align="center">List Delivery</div><br><div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Dokumen</th><th>QC Inspector</th><th>QA Coordinator</th><th>Class Surveyor</th><th>Owner Surveyor</th><th>Tanggal Reinspeksi</th><th>Status</th></tr></thead><tbody id="daftardetail8"></tbody></table></div></div>' ;

               document.getElementById('delivery').innerHTML = isiawal;
               var countrej = 0;
               all = all +  data.length;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].status_delivery == "Reject") {
                        countrej = countrej + 1;
                        var isidalam = '<tr><td>'+ data[i].nama_dokumen +'</td><td>'+ data[i].qc_inspecd +'</td><td>'+ data[i].qa_coord +'</td><td>'+ data[i].class_surd +'</td><td>'+ data[i].owner_surd +'</td><td>'+ data[i].tgl_reinspeksid +'</td><td>'+ data[i].status_delivery +'</td></tr>';
                        $('#daftardetail8').append(isidalam);
                    }
                                        
                };     
                okes = data.length - countrej;
                reject = reject + countrej;
                
                oke = oke + okes;          
                
            },
            async: false
            
        })

    }


    function hitung(panjang, rej){

        all = all + panjang;
        oke = oke + (panjang - rej);
        reject = reject + rej;
        
    }

    function cetak(){
        var persentase = (oke / all)*100;
        document.getElementById('tampilpersen').innerHTML = persentase.toFixed(2) + ' %';
    }



        
    </script>

    <!--Basic Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/beyond.min.js"></script>

    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60412744-1', 'auto');
        ga('send', 'pageview');

    </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRXCgcW0TV1adfWybesYCEodciL3JGIsv7en13ce4hFDZ37M9jzZlJAtRS%2bZpGll%2bIXCtnYeSKxh9QKzEStTlDeBEjiavsHM6neKgrAaVFV0pes88%2bEh4d4EC9Qqrr9ZD2FFxIfiUBpmA%2fs%2bCCg%2f83Zugd4Ci4jN884S92MT6sz47DuFCfm2JCsK8D1nCbJ5AblOm1O7EalTfGY7wSVDY%2fAmcNIRrEOmWuw7Dy7EfCH%2fd70jyHZwGVzbz5KpmvgwPPPAvX6sR5UHEPs%2bEylKB5Y0EXwxRm2ImHg4cPppZRPlDd8komIvHUvSWN0mNdlHCJe2KCKg9L6Rnhtacs0tvoplwsba24M%2bUxrB3NTZVo2lIsRLqCp42IrDz8NOsl%2fHJYVYcU0DUw7cDpQKIgR8jkUwPFUCHNtzPZU6EDwOQkbUow9%2f4g8su2muTM78Fit7qPj1f8j%2bDYtSDG9VH6jHxJTXx82A5D7bpw4MMfZ4fj45PcTVGBYnIRL6iMG4SbRKqXHBNdS7a1X%2fdOapMkRUHeeA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<!--  /Body -->

<!-- Mirrored from beyondadmin-v1.4.1.s3-website-us-east-1.amazonaws.com/tables-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 01:26:29 GMT -->
</html>
