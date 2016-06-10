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
    <title>Erection</title>

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
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet" />

    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />

    <!--Page Related styles-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>

    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css" rel="stylesheet" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="<?php echo base_url(); ?>assets/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body onload="firstload()">
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
                      
                        <li class="active">Erection</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Erection
                            
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
                      <strong>Sukses</strong> Sunting Data Erection Telah Berhasil
                    </div>
                  <?php } 
                  elseif ($hasil == 'gagal') { ?>
                    <br>
                    <div class="alert alert-danger fade in radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Gagal!</strong> Input Data Erection Gagal
                    </div>
                  <?php }
                ?>
                <div class="page-body">
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">Tahapan Erection</span>
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
                                    
                                    <div id="horizontal-form">
                                                <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>erection/updateisierection">
                                                    <div class="form-title" align="center">
                                                        Silahkan Isi Data Berikut
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Nama Proses</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="proses1" name="proses1" placeholder="Nama Proses" disabled="true" >
                                                            <input type="hidden" class="form-control" id="proses" name="proses" placeholder="Nama Proses">                                                         
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Nama Blok</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="namablok1" name="namablok1" placeholder="Nama Blok" disabled="true" >
                                                            <input type="hidden" class="form-control" id="namablok" name="namablok" placeholder="Nama Blok">                                                         
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="form-title" align="center">
                                                        Silahkan lengkapi Item Pemeriksaan di bawah ini
                                                    </div>
                                                    <br>
                                                    
                                                    <div id="itemisi">
                                                        <!-- <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right">Item 1</label>
                                                            
                                                            <div class="col-lg-3">
                                                                <input type="text" class="form-control" id="isiitem" placeholder="isi Item" disabled="false">
                                                                    
                                                            </div>

                                                            <div class="col-lg-3">
                                                                <input type="text" class="form-control" id="standard" placeholder="Standard Item" disabled="false">
                                                            </div>                                                        
                                                            
                                                        </div>   -->

                                                    </div>

                                                         
<!-- 
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-5 col-lg-6">
                                                            <input id="tomboledit"  class="btn btn-yellow" value="Edit" data-toggle="modal" onclick="changeitem()" />                                                             
                                                        </div>
                                                    </div> -->


                                                    
                                                    <br>
                                                    <div class="form-title" align="center">
                                                        Silahkan lengkapi form di bawah ini
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">QC Inspector</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="qcinspec" name="qcinspec" placeholder="QC Inspector">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">QA Coordinator</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="qacoor" name="qacoor" placeholder="QA Coordinator">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Class Surveyor</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="classsur" name="classsur" placeholder="Class Surveyor">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Owner Surveyor</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="ownersur" name="ownersur" placeholder="Owner Surveyor">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tanggal Pemeriksaan Komponen</label>
                                                        <div class="col-sm-6">
                                                            <input type="date" class="form-control" id="tanggalperiksa" name="tanggalperiksa" placeholder="Tanggal Pemeriksaan">     
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Status</label>
                                                        <div class="col-sm-6">
                                                            <select onchange="pilihstatus()" id="status" name="status">
                                                                <option>--Silahkan Pilih--</option>
                                                                <option value="OK">O.K.</option>
                                                                <option value="Reject">Reject</option>                                                                
                                                            </select>                                                           
                                                        </div>
                                                    </div>

                                                    <div class="form-group" id="tenggang" style="display:none">
                                                        <!-- <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tenggang Waktu</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control" id="tenggangwaktu" placeholder="Masukkan jumlah hari">
                                                        </div> -->
                                                    </div>

                                                    <div class="form-group" id="rein" style="display:none">
                                                        <!-- <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tanggal Re Inspeksi</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="reinspek1" disabled="true">
                                                            <input type="hidden" class="form-control" id="reinspek">
                                                        </div> -->
                                                    </div>

                                                    <div class="form-group" id="rekomendasi" style="display:none">
                                                        <!-- <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Rekomendasi</label>
                                                        <div class="col-sm-6">
                                                        <textarea class="form-control" id="textareaanimated" placeholder="Masukkan Rekomendasi"></textarea>
                                                            
                                                        </div> -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Gambar</label>
                                                        <div class="col-sm-3">
                                                            <ul>
                                                              <li>Ukuran gambar maksimal 2MB</li>
                                                              <li>Gambar harus berupa file .png, .jpg, atau .gif</li>
                                                          </ul>
                                                          <!-- upload_max_filesize=2M php.inis-->
                                                            <input type="file" class="form-control" name="gambar" accept="image/*" onchange="readURL(this);">
                                                            
                                                        </div>
                                                        <div class="col-sm-3">                                                            
                                                            <img id="gambartampil" src="#" alt="Gambar Anda" />
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <input id="idproj" type="hidden" name="idproj"  value="<?php echo $this->session->userdata('pilihan_project');?>" />
                                                    <input id="id_erection" type="hidden" name="id_erection"  value="<?php echo $idenparsing;?>" />
                                                    <input id="daftarBarang" type="hidden" name="daftarBarang" />
                                                    

                                                     <div class="form-group">
                                                        <div class="col-lg-offset-5 col-lg-8">
                                                            <input class="btn btn-darkorange" type="reset" value="Reset" />
                                                            <input class="btn btn-palegreen" type="submit" onclick="submitval()" value="Simpan" id="tombol" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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

        var flag = 0;
        var dataleng;
        var itemlist = [];
        

        function firstload(){            
           var idproj2 = '<?php echo $idproj; ?>';
           var idenmat = '<?php echo $idenparsing; ?>';
           var id_iden = '<?php echo $idenparsing; ?>';
           
           $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambildetailerection/',
                data: {idproj2:idproj2, idenmat:idenmat},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    //
                    for (var i = 0; i < data.length; i++) {
                        
                        document.getElementById('proses1').value = data[i].proses_erection; 
                        document.getElementById('proses').value = data[i].proses_erection; 
                        document.getElementById('namablok1').value = data[i].blok_erection; 
                        document.getElementById('namablok').value = data[i].blok_erection;                        
                        document.getElementById('qcinspec').value = data[i].qc_inspecer;
                        document.getElementById('qacoor').value = data[i].qa_coorer;
                        document.getElementById('classsur').value = data[i].class_surrer;
                        document.getElementById('ownersur').value = data[i].owner_surer;
                        document.getElementById('tanggalperiksa').value = data[i].tgl_periksaer;
                        document.getElementById('status').value = data[i].status_erection;

                        if(data[i].status_erection == "Reject"){
                            document.getElementById('tenggang').style.display = 'block';
                            document.getElementById('rein').style.display = 'block';
                            document.getElementById('rekomendasi').style.display = 'block';
                            document.getElementById('tenggang').innerHTML = '<label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tenggang Waktu</label><div class="col-sm-6"><input type="number" class="form-control" id="tenggangwaktu" name="tenggangwaktu" placeholder="Masukkan jumlah hari" onchange="tenggangw()"></div>';
                            document.getElementById('rein').innerHTML = '<label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tanggal Re Inspeksi</label><div class="col-sm-6"><input type="text" class="form-control" id="reinspek1" name="reinspek1" value="'+ data[i].tgl_reinspeksier +'" disabled="true"><input type="hidden" class="form-control" id="reinspek" name="reinspek" value="'+ data[i].tgl_reinspeksier +'"></div>';
                            document.getElementById('rekomendasi').innerHTML = '<label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Rekomendasi</label><div class="col-sm-6"><textarea class="form-control" id="rekomendasi" name="rekomendasi" placeholder="Masukkan Rekomendasi">'+ data[i].rekomendasi_erection +'</textarea></div>'; 

                        }



                    };

                    $.ajax({
                        url: '<?php echo base_url(); ?>ajax/ambilulangitemer/',
                        data: {id_iden:id_iden},
                        dataType: 'json',
                        type: 'POST',
                        success: function(data) {             
                            dataleng = data.length;
                            for (var i = 0; i < data.length; i++) {
                                
                                var id1 = i + '1';
                                var id2 = i + '2';
                                itemlist[i] = data[i].nama_itemer;
                                var isi = '<div class="form-group"><label class="col-sm-3 control-label no-padding-right">'+ data[i].nama_itemer+'</label><div class="col-lg-3"><input type="text" class="form-control" value="'+ data[i].isi_itemer+'" id="'+ id1 +'" placeholder="isi Item"></div><div class="col-lg-3"><input type="text" class="form-control" value="'+ data[i].standard_itemer +'" id="'+ id2 +'" placeholder="Standard Item"></div></div> ';
                                $('#itemisi').append(isi);
                                
                            };

                            
                           
                            },
                        })


                   
                    },
                })
          

        }
   

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#gambartampil')
                        .attr('src', e.target.result)
                        .width(110)
                        .height(110);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


        function submitval(){
            var daftarBarang = [];           

            for (var i = 0; i < dataleng; i++) {
                var barang = {};
                var id1 = i + '1';
                var id2 = i + '2';
               /* alert(id1);
                var aku = document.getElementById(id1).value;
                alert(aku);*/
                barang.nama = itemlist[i];
                barang.item = document.getElementById(id1).value;
                barang.standard = document.getElementById(id2).value;


                daftarBarang.push(barang);
                
            };
            //alert(JSON.stringify(daftarBarang));

            $('#daftarBarang').val(JSON.stringify(daftarBarang));

            $('#form').submit();

        
        }

        function pilihstatus () {
            var nilai = document.getElementById('status').value;

            if (nilai == "Reject") {
                document.getElementById('tenggang').style.display = 'block';
                document.getElementById('rein').style.display = 'block';
                document.getElementById('rekomendasi').style.display = 'block';
                document.getElementById('tenggang').innerHTML = '<label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tenggang Waktu</label><div class="col-sm-6"><input type="number" class="form-control" id="tenggangwaktu" name="tenggangwaktu" placeholder="Masukkan jumlah hari" onchange="tenggangw()"></div>';
                document.getElementById('rein').innerHTML = '<label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tanggal Re Inspeksi</label><div class="col-sm-6"><input type="text" class="form-control" id="reinspek1" name="reinspek1" disabled="true"><input type="hidden" class="form-control" id="reinspek" name="reinspek"></div>';
                document.getElementById('rekomendasi').innerHTML = '<label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Rekomendasi</label><div class="col-sm-6"><textarea class="form-control" id="rekomendasi" name="rekomendasi" placeholder="Masukkan Rekomendasi"></textarea></div>';
            }
            else{
                document.getElementById('tenggang').innerHTML = '';
                document.getElementById('rein').innerHTML = '';
                document.getElementById('rekomendasi').innerHTML = '';
                document.getElementById('tenggang').style.display = 'none';
                document.getElementById('rein').style.display = 'none';
                document.getElementById('rekomendasi').style.display = 'none';
            }
        }
    

        function tenggangw(){
            var d = new Date();
            var hari = parseInt(document.getElementById('tenggangwaktu').value);
            
            d.setDate(d.getDate() + hari);
            var tgl_kadaluarsa = d.getDate();
            var bulan_kadaluarsa = parseInt(d.getMonth()) + 1;
            var tahun_kadaluarsa = d.getFullYear();
            
            if (tgl_kadaluarsa < 10 ) {
                var tgl_kadaluarsa = '0'+tgl_kadaluarsa;
            }
            if (bulan_kadaluarsa < 10) {
                var bulan_kadaluarsa = '0'+bulan_kadaluarsa;
            }

            var tahun = tahun_kadaluarsa +'-'+ bulan_kadaluarsa+'-'+tgl_kadaluarsa;
            document.getElementById('reinspek').value = tahun;
            document.getElementById('reinspek1').value = tahun;
        }
    </script>

    <!--Basic Scripts-->
    
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
