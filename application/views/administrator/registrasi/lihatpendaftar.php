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
    <title>Data Pendaftar</title>

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
                $this->load->view('navbar/navbarall');              
            ?>
            
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>                        
                        <li class="active">Data Pendaftar</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Data Pendaftar                           
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
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">Daftar Pendaftar</span>
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
                                    
                                    <form id="registrationForm"  method="post" class="form-horizontal"
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
                                                                <option value="1">Administrator / Manager</option>
                                                                <option value="3">QC, QA, dan Produksi</option>
                                                                <option value="2">Class dan Owner Kapal</option>
                                                            </select>                                                           
                                                        </div>
                                                    </div>

                                                <div class="form-title" align="center">
                                                        List Pendaftar
                                                    </div>
                                                    <br>

                                                <div id="isilist">
                                                    
                                                </div>
                                                
                                                <!-- <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label>
                                                    <div class="col-lg-10">
                                                        <table class="table table-hover">
                                                            <thead class="bordered-darkorange">
                                                                <tr>
                                                                    <th>
                                                                        Nama Pendaftar
                                                                    </th>
                                                                    <th>
                                                                        Perusahaan
                                                                    </th>
                                                                    <th>
                                                                        Nomor Telepon
                                                                    </th>
                                                                    <th>
                                                                        Nomor Project
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
                                                                 <tr>
                                                                    <td>Project 1234</td>
                                                                    <td>Alex Nilson</td>
                                                                    <td>100 m </td>
                                                                    <td>30 m</td>
                                                                    <td>10 m</td>
                                                                    <td>
                                                                        <a class="btn btn-info btn-xs " onclick="lihatdetail(1002)" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i> Lihat Detail</a>
                                                                        <a class="btn btn-palegreen btn-xs" onclick="lihatdetail(1002)" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i> Setujui Pendaftar</a>                                                                        
                                                                    </td>
                                                                </tr>                                                       
                                                            </tbody>
                                                           
                                                        </table>

                                                    </div>
                                                </div> -->
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
                          <h4 class="modal-title">Data Pendaftar</h4>
                        </div>
                        <div class="modal-body">
                          <table class="table" id="isidetail">                           
                            
                        </table>
                          

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <div class="modal fade" id="setuju" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Berhasil</h4>
                        </div>
                        <div class="modal-body">
                          <p>Pendaftar Berhasil Disetujui. Silahkan Refresh Halaman ini.</p>
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


        

        function muatproject(){
            
            var nilai = document.getElementById('bagian').value;
            if (nilai == 2) {
                $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambillistpendaftar/',
                data: {nilai:nilai},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    var isi = '<div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Pendaftar</th><th>Perusahaan</th><th>Nomor Telepon</th><th>Nomor Project</th><th>Status</th><th>Action</th></tr></thead><tbody id="daftardetail"></tbody></table></div></div>';

                    document.getElementById('isilist').innerHTML = isi;

                    for (var i = 0; i < data.length; i++) {              


                        if(data[i].status == "SETUJU"){

                            var isidalam = '<tr><td>'+ data[i].nama_daftar + '</td><td>'+ data[i].jabatanposisi +'</td><td>'+ data[i].no_telp +' </td><td>'+ data[i].no_project+'</td><td>'+ data[i].status +'</td><td><a class="btn btn-info btn-xs " onclick="lihatdetail('+ data[i].id_pendaftar +')" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i> Lihat Detail</a>  </td></tr>';
                            $('#daftardetail').append(isidalam);

                        }
                        else if(data[i].status == "BELUM SETUJU"){

                            var isidalam = '<tr><td>'+ data[i].nama_daftar + '</td><td>'+ data[i].jabatanposisi +'</td><td>'+ data[i].no_telp +' </td><td>'+ data[i].no_project+'</td><td>'+ data[i].status +'</td><td><a class="btn btn-info btn-xs " onclick="lihatdetail('+ data[i].id_pendaftar +')" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i> Lihat Detail</a>  <a class="btn btn-palegreen btn-xs" onclick="setujudaftar('+ data[i].id_pendaftar +')" data-toggle="modal" data-target="#setuju"><i class="fa fa-check"></i> Setujui Pendaftar</a></td></tr>';
                            $('#daftardetail').append(isidalam);

                        }

                        

                    };
                   
                    },
                })
            }
            else if(nilai == 3 || nilai == 1){

                $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambillistpendaftar/',
                data: {nilai:nilai},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    var isi = '<div class="form-group"><label for="inputEmail3" class="col-sm-1 control-label no-padding-right"></label><div class="col-lg-10"><table class="table table-hover"><thead class="bordered-darkorange"><tr><th>Nama Pendaftar</th><th>Jabatan</th><th>NIK</th><th>Nomor Telepon</th><th>Status</th><th>Action</th></tr></thead><tbody id="daftardetail"></tbody></table></div></div>';

                    document.getElementById('isilist').innerHTML = isi;

                    for (var i = 0; i < data.length; i++) {    

                        if (data[0].status == "SETUJU") {

                            var isidalam = '<tr><td>'+ data[i].nama_daftar + '</td><td>'+ data[i].jabatanposisi +'</td><td>'+ data[i].nik +' </td><td>'+ data[i].no_telp+'</td><td>'+ data[i].status +'</td><td><a class="btn btn-info btn-xs " onclick="lihatdetail('+ data[i].id_pendaftar +')" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i> Lihat Detail</a> </td></tr>';
                            $('#daftardetail').append(isidalam);

                        }
                        else if(data[0].status == "BELUM SETUJU"){
                            
                            var isidalam = '<tr><td>'+ data[i].nama_daftar + '</td><td>'+ data[i].jabatanposisi +'</td><td>'+ data[i].nik +' </td><td>'+ data[i].no_telp+'</td><td>'+ data[i].status +'</td><td><a class="btn btn-info btn-xs " onclick="lihatdetail('+ data[i].id_pendaftar +')" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i> Lihat Detail</a>  <a class="btn btn-palegreen btn-xs" onclick="setujudaftar('+ data[i].id_pendaftar +')" data-toggle="modal" data-target="#setuju"><i class="fa fa-check"></i> Setujui Pendaftar</a></td></tr>';
                            $('#daftardetail').append(isidalam);
                        }
                    
                    };
                   
                    },
                })

            }
            else{
                document.getElementById('isilist').innerHTML = '';
            }
            
        }





        function lihatdetail(idenmat){
            var nilai = document.getElementById('bagian').value;
            
            $.ajax({
            url: '<?php echo base_url(); ?>ajax/ambildetailpendaftar/',
            data: {idenmat:idenmat},
            dataType: 'json',
            type: 'POST',
            success: function(data) {
                document.getElementById('isidetail').innerHTML = '';

                for (var i = 0; i < data.length; i++) {

                    if (nilai == 2) {

                        var isi2 = '<tr><td><strong>Nama Pendaftar</strong></td><td>'+ data[i].nama_daftar+'</td></tr><tr><td><strong>Nama Perusahaan</strong></td><td>'+ data[i].jabatanposisi+'</td></tr><tr><td><strong>Alamat</strong></td><td>'+ data[i].alamat+'  </td></tr><tr><td><strong>Nomor Telepon</strong></td><td>'+ data[i].no_telp +'</td></tr><tr><td><strong>Nomor Project</strong></td><td>'+ data[i].no_project+' </td></tr><tr><td><strong>Tipe Kapal</strong></td><td>'+data[i].tipe_kapal+'</td></tr><tr><td><strong>Pesan / Info</strong></td><td>'+ data[i].infopesan+' </td></tr>';
                        $('#isidetail').append(isi2);

                    }
                    else if(nilai == 3 || nilai == 1){

                        var isi2 = '<tr><td><strong>Nama Pendaftar</strong></td><td>'+ data[i].nama_daftar+'</td></tr><tr><td><strong>Jabatan</strong></td><td>'+ data[i].jabatanposisi+'</td></tr><tr><td><strong>NIK</strong></td><td>'+ data[i].nik+'  </td></tr><tr><td><strong>Nomor Telepon</strong></td><td>'+ data[i].no_telp +'</td></tr><tr><td><strong>Pesan / Info</strong></td><td>'+ data[i].infopesan+' </td></tr>';
                        $('#isidetail').append(isi2);

                    };

                    
                };

                },
            })
            

            
        }

        function setujudaftar(idenmat){
            
            $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambildetailpendaftar/',
                data: {idenmat:idenmat},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    var id = data[0].id_pendaftar;
                    var user = data[0].username_daftar;
                    var password = data[0].password_daftar;
                    var nama = data[0].nama_daftar;
                    var tipepengguna = data[0].tipe_pengguna;
                    var project = data[0].no_project;

                    $.ajax({
                        url: '<?php echo base_url(); ?>ajax/setujudaftar/',
                        data: {id:id, user:user, password:password, nama:nama, tipepengguna:tipepengguna, project:project},
                        dataType: 'json',
                        type: 'POST',
                        done: function(data) {
                            alert("Sukses dimasukkan");
                            window.location.reload();
                           
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
