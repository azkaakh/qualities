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
    <title>Data Sea Trial</title>

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
                $this->load->view('navbar/navbarlanjut');              
            ?>
            
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>                        
                        <li class="active">Data Sea Trial</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Data Sea Trial                            
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
                <?php
                  if($hasil == 'sukses') { ?>
                    <br>
                    <div class="alert alert-success fade in" align="center">
                      <button class="close" data-dismiss="alert">
                          ×
                      </button>
                      <i class="fa-fw fa fa-check"></i>
                      <strong>Sukses</strong> Sunting Data Sea Trial Telah Berhasil
                    </div>
                  <?php } 
                  elseif ($hasil == 'gagal') { ?>
                    <br>
                    <div class="alert alert-danger fade in radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Gagal!</strong> Sunting Data Sea Trial Gagal
                    </div>
                  <?php }
                ?>
                <div class="page-body">
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">Daftar Project</span>
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
                                    
                                    <form id="registrationForm" action="<?php echo base_url(); ?>sea/suntingsea" method="post" class="form-horizontal"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                               <br>
                                               <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label no-padding-right">Pilih Bagian</label>
                                                        <div class="col-sm-8">
                                                            <select id="bagian" name="bagian" onchange="muatproject()">
                                                                <option value="null">--Silahkan Pilih--</option>
                                                                <option value="Hull Construction">Hull Construction</option>
                                                                <option value="Machinery Outfitting">Machinery Outfitting</option>
                                                                <option value="Hull Outfitting">Hull Outfitting</option>
                                                                <option value="Electric Outfitting">Electric Outfitting</option>                                                                
                                                            </select>                                                           
                                                        </div>
                                                    </div>

                                                <div class="form-title" align="center">
                                                        List Sea Trial
                                                    </div>
                                                    <br>


                                                <div class="form-group">
                                                    
                                                    <div class="col-lg-12">
                                                        <table class="table table-hover">
                                                            <thead class="bordered-darkorange">
                                                                <tr>
                                                                    <th>
                                                                        No ID
                                                                    </th>                                                                    
                                                                    <th>

                                                                        Nama Pengujian
                                                                    </th>
                                                                    <th>
                                                                        ID Komponen
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
                                                                    
                                                                    <th>
                                                                    Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="daftardetail">
                                                                 <!-- <tr>
                                                                    <td>Project 1234</td>
                                                                    <td>Alex Nilson</td>
                                                                    <td>100 m </td>
                                                                    <td>30 m</td>
                                                                    <td>10 m</td>
                                                                    <td>300 ton</td>
                                                                    <td>2016-12-21</td>
                                                                    <td>2016-12-21</td>
                                                                    <td>
                                                                        <a class="btn btn-info btn-xs " onclick="lihatdetail(1002)" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i> Lihat Detail</a>
                                                                        <button class="btn btn-palegreen btn-xs" onclick="pilih(1002)"><i class="fa fa-edit"></i> Pilih Project</button>
                                                                    </td>
                                                                </tr>                 -->                                       
                                                            </tbody>
                                                           <input id="idenparsing" type="hidden" name="idenparsing" />
                                                            <input id="idproj" type="hidden" value="<?php echo $this->session->userdata('pilihan_project');?>" name="idproj" />
                                                        </table>

                                                    </div>
                                                </div>
                                            </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Data Project</h4>
                        </div>
                        <div class="modal-body">
                          <table class="table" id="isidetail">
                              <!-- <tr>
                                    <td>
                                       <strong>Nama Project</strong>
                                    </td>
                                    <td>
                                        12334  
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong>Owner</strong>
                                    </td>
                                    <td>
                                        haha  
                                    </td>                                    
                                </tr> 
                                <tr>
                                    <td>
                                       <strong>IMO</strong>
                                    </td>
                                    <td>
                                        12334  
                                    </td>                                    
                                </tr> 
                                <tr>
                                    <td>
                                       <strong>Panjang Kapal</strong>
                                    </td>
                                    <td>
                                         100m 
                                    </td>                                    
                                </tr>                                                          
                                <tr>
                                    <td>
                                       <strong>Lebar Kapal</strong>
                                    </td>
                                    <td>
                                         100m 
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong>Tinggi Kapal</strong>
                                    </td>
                                    <td>
                                         100m 
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong>Sarat Kapal</strong>
                                    </td>
                                    <td>
                                         100m 
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong>Keel Laying</strong>
                                    </td>
                                    <td>
                                         2016-12-20 
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong>Launching</strong>
                                    </td>
                                    <td>
                                         2016-12-20 
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong>Sea Trial</strong>
                                    </td>
                                    <td>
                                         2016-12-20 
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong>Delivery</strong>
                                    </td>
                                    <td>
                                         2016-12-20 
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td>
                                       <strong></strong>
                                    </td>
                                    <td>
                                         
                                    </td>                                    
                                </tr>   -->
                            
                            
                        </table>
                          

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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


        function pilih(idproj, idenmat){
            
            document.getElementById('idenparsing').value = idenmat;
            $('#form').submit();
        }

        function muatproject(){
            var idproj = "<?php echo $this->session->userdata('pilihan_project'); ?>";
            var nilai = document.getElementById('bagian').value;
            if (nilai != "null") {
                $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambillistsea/',
                data: {idproj:idproj, nilai:nilai},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    document.getElementById('daftardetail').innerHTML = '';
                    for (var i = 0; i < data.length; i++) {
                        //console.log(data[i]);
                        var idproj2 = "<?php echo $this->session->userdata('pilihan_project'); ?>";
                        var isi = '<tr><td>'+data[i].id_sea+'</td><td>'+ data[i].pengujian_sea+'</td><td>'+ data[i].id_komps+'</td><td>'+ data[i].qc_inspecs+'</td><td>'+ data[i].qa_coors +'</td><td>'+ data[i].class_surs+'</td><td>'+ data[i].owner_surs+'</td><td>'+ data[i].status_sea+'</td><td><a class="btn btn-info btn-xs " onclick="lihatdetail(\''+ idproj2 +'\', \''+ data[i].id_sea +'\' )" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i> Lihat Detail</a> <button class="btn btn-palegreen btn-xs" onclick="pilih(\''+ idproj2 +'\', \''+ data[i].id_sea +'\')"><i class="fa fa-edit"></i> Sunting Data</button></td></tr>';
                        $('#daftardetail').append(isi);
                    };
                   
                    },
                })
            }
            else{
                document.getElementById('daftardetail').innerHTML = '';
            }
            
        }
        function lihatdetail(idproj2, idenmat){
            var bagian = document.getElementById('bagian').value;
            $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambildetailsea/',
                data: {idproj2:idproj2, idenmat:idenmat},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    document.getElementById('isidetail').innerHTML = '';
                    for (var i = 0; i < data.length; i++) {
                       console.log(data[i]);
                        if (data[i].status_sea == "OK") {

                            var isi2 = '<tr><td><strong>Bagian</strong></td><td>'+ data[i].bagian_sea+'</td></tr><tr><td><strong>Nama Pengujian</strong></td><td>'+ data[i].pengujian_sea+'</td></tr><tr><td><strong>Id Komponen</strong></td><td>'+ data[i].id_komps+'</td></tr><tr><td><strong>QC Inspector</strong></td><td>'+ data[i].qc_inspecs+'  </td></tr><tr><td><strong>QA Coordinator</strong></td><td>'+ data[i].qa_coors+'</td></tr><tr><td><strong>Class Surveyor</strong></td><td>'+ data[i].class_surs+' </td></tr><tr><td><strong>Owner Surveyor</strong></td><td>'+data[i].owner_surs+'</td></tr><tr><td><strong>Tanggal Periksa</strong></td><td>'+ data[i].tgl_periksas+' </td></tr>';
                            $('#isidetail').append(isi2);

                        }
                        else{
                            var isi2 = '<tr><td><strong>Bagian</strong></td><td>'+ data[i].bagian_sea+'</td></tr><tr><td><strong>Nama Pengujian</strong></td><td>'+ data[i].pengujian_sea+'</td></tr><tr><td><strong>Id Komponen</strong></td><td>'+ data[i].id_komps+'</td></tr><tr><td><strong>QC Inspector</strong></td><td>'+ data[i].qc_inspecs+'  </td></tr><tr><td><strong>QA Coordinator</strong></td><td>'+ data[i].qa_coors+'</td></tr><tr><td><strong>Class Surveyor</strong></td><td>'+ data[i].class_surs+' </td></tr><tr><td><strong>Owner Surveyor</strong></td><td>'+data[i].owner_surs+'</td></tr><tr><td><strong>Tanggal Periksa</strong></td><td>'+ data[i].tgl_periksas+' </td></tr><tr><td><strong>Status</strong></td><td>'+data[i].status_sea+'</td></tr><tr><td><strong>Tanggal Reinspeksi</strong></td><td>'+ data[i].tgl_reinspeksis+'</td></tr><tr><td><strong>Rekomendasi</strong></td><td>'+ data[i].rekomendasi_sea +' </td></tr>';
                            $('#isidetail').append(isi2);
                        }
                        
                    };

                    var id_iden = idenmat;
                    $.ajax({
                        url: '<?php echo base_url(); ?>ajax/ambilulangitemsea/',
                        data: {id_iden:id_iden},
                        dataType: 'json',
                        type: 'POST',
                        success: function(data) {             
                            var pembatas = '<tr><td align="center" colspan="2"><strong>Item Pemeriksaan</strong></td></tr>';
                            $('#isidetail').append(pembatas);
                            for (var i = 0; i < data.length; i++) {
                                
                                var isi2 = '<tr><td><strong>'+ data[i].nama_items+'</strong></td><td>'+ data[i].isi_items+'</td></tr>';
                                $('#isidetail').append(isi2);
                            };

                            var pembatas2 = '<tr><td><strong></strong></td><td></td></tr>';
                            $('#isidetail').append(pembatas2);
                           
                            },
                        })




                   
                    },
                })
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
