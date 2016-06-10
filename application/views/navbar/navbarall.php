<?php
if ($this->session->userdata('hak_akses') == '1')
    { ?>
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
        <!--Databoxes-->
        <li>
            <a href="<?php echo base_url(); ?>admin/lihatpro">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Project </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>admin/tambahpro">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Tambah Project </span>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Manajemen Pengguna </span>

                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo base_url(); ?>admin/daftarpengguna">
                        <span class="menu-text">Daftarkan Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url(); ?>admin/lihatpendaftar">
                        <span class="menu-text">Lihat List Pendaftar</span>
                    </a>
                </li>                            
                
            </ul>
        </li>  
        <!--Widgets-->
        
            
    </ul>
    <!-- /Sidebar Menu -->
</div>

<?php
    }
    else if ($this->session->userdata('hak_akses') == '2')
    {
?>

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
        <!--Databoxes-->
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatiden">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Identifikasi Material </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatfabrikasi">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Fabrikasi </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatassembly">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Assembly </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihaterection">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Erection </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatoutfitting">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Outfitting </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatlaunching">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Launching </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatcommissioning">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Commissioning </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatseatrial">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Sea Trial </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/lihatdelivery">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Lihat Delivery </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/search">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Logic Search </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>owner/reminder">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Reminder </span>
            </a>
        </li>
        <!--Widgets-->
        
            
    </ul>
    <!-- /Sidebar Menu -->
</div>




<?php
    }
    else if ($this->session->userdata('hak_akses') == '3')
    {
?>
        
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
                <!--Databoxes-->
                <li>
                    <a href="<?php echo base_url(); ?>admin/lihatpro">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-text"> Lihat Project </span>
                    </a>
                </li>
                
            </ul>
            <!-- /Sidebar Menu -->
        </div>


<?php
    }

?>