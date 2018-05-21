<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <title>Dashboard - <?php echo $this->config->item('nama_aplikasi'); ?></title>
      <meta name="apple-mobile-web-app-capable" content="yes">

      <!-- Favicon-->
      <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">

      <!-- Google Fonts -->
      <link href="<?php echo base_url(); ?>assets/fonts/roboto/fonts.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url(); ?>assets/fonts/material-icons.css" rel="stylesheet" type="text/css">

      <!-- Bootstrap Core Css -->
      <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

      <!-- Waves Effect Css -->
      <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

      <!-- Animation Css -->
      <!-- <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" /> -->

       <!-- Bootstrap Spinner Css -->
       <!-- <link href="<?php echo base_url(); ?>assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet"> -->

       <!-- Bootstrap Select Css -->
       <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

      <!-- JQuery DataTable Css -->
       <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
  
      <!-- Custom Css -->
      <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

      <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
      <link href="<?php echo base_url(); ?>assets/css/themes/theme-blue.css" rel="stylesheet" />

      <!-- Icon -->
      <link href="<?php echo base_url(); ?>assets/plugins/fa/css/font-awesome.min.css" rel="stylesheet">

 </head>
   <body class="theme-blue">
<!-- Top Bar -->
<nav class="navbar">
<div class="container-fluid">
    <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a class="navbar-header img" href="<?php echo base_url(); ?>adm"><img src="<?php echo base_url(); ?>assets/icon-app.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <!-- Gear -->
            <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">settings</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header"><?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?></li>
                        <li class="body">
                            <li><a href="" onclick="return rubah_password();"><i class="material-icons">lock</i>Ubah Password</a></li>
                            <li><a onclick="tombol_logout()"><i class="material-icons">input</i>Log Out</a></li>
                          
                        </li>
                    </ul>
                </li>
                <!-- #END# Gear -->
        </ul>
    </div>
</div>
</nav>
<!-- #Top Bar -->
<?php echo gen_menu(); ?>
<section class="content">
    <div class="container-fluid">
        <?php echo $this->load->view($p); ?> 
    </div>
</section>

        <!-- Waktu Server Start -->
        <br><br>
        <div class="col-lg-12 footerfixed">
            &copy; <a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi')."</a> ".date("Y")."
            <br> Waktu Server: ".tjs(date('Y-m-d H:i:s'),"s")." - Waktu Database: ".tjs($this->waktu_sql,"s"); ?>.
        </div>
        <!-- Waktu Server End -->

        <!-- insert modal -->
        <div id="tampilkan_modal"></div>
        <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
        <!-- Jquery Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    
        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
    
    
        <script type="text/javascript">
            base_url = "<?php echo base_url(); ?>";
            uri_js = "<?php echo $this->config->item('uri_js'); ?>";
        </script>
        <script src="<?php echo base_url(); ?>assets/js/aplikasi.js"></script> 
    
        <?php 
        if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
        ?>
        <script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
        <?php
        }
        ?>
    
        <!-- Select Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

        <!-- Custom Js -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/admin.js"></script> -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script> -->
        <script src="<?php echo base_url(); ?>assets/js/pages/ui/modals.js"></script>
        <!-- <script src="<?php echo base_url(); ?>assets/js/pages/forms/basic-form-elements.js"></script> -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/pages/cards/colored.js"></script> -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/pages/forms/advanced-form-elements.js"></script> -->

        <script src="<?php echo base_url(); ?>assets/js/countdown/jquery.countdownTimer.js"></script>
    
        <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
        var editor_style = "<?php echo $this->config->item('editor_style'); ?>";
        var uri_js = "<?php echo $this->config->item('uri_js'); ?>";
        </script>

        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

        <script type="text/javascript">
            function tombol_logout(){
                swal ({
                        title: "Yakin Keluar?",
                        icon: "warning",
                        buttons: ["Cancel", "Keluar"],
                    }).then(okay => {
                        if (okay) {
                            window.location.href = base_url+"adm/logout";
                            console.log("OK Keluar");
                        } else {
                            console.log("Cancel");
                        }
                    });
            }
        </script>        



</body>
</html>
