<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $this->config->item('nama_aplikasi'); ?></title>
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
            <!-- <img src="<?php echo base_url(); ?>assets/icon-app.png"> -->
            <a class="navbar-header img" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/icon-app.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- apps -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">apps</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="body">
                            <li><a href="<?php echo base_url(); ?>adm"><i class="material-icons">lock</i>Login Akun</a></li>

                    </ul>
                </li>
                <!-- #END# apps -->
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<br><br><br><br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img class="img-responsive" src="<?php echo base_url();?>assets/images/main_register.jpg">
                <div class="body" style="height:222px;">
                    <h3>
                        Info Pendaftaran
                    </h3>
                    Pendaftaran Guru & Siswa sebagai peserta dilakukan oleh pihak sekolah, silahkan hubungi pihak sekolah jika anda mengalami kendala dalam aplikasi ujian online ini.
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="img-responsive" src="<?php echo base_url();?>assets/images/tes_osn.jpg">
                <div class="body" style="height:220px;">
                    <h3>
                        Latihan dan Ujian
                    </h3>
                    Silahkan cek jadwal ujian/lembar soal di sebelah kanan, dan akses website ini dengan browser mozilla firefox/chrome untuk tampilan yang maksimal dengan komputer/laptop.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="header bg-green-header">
                    <h2>
                        <i class="material-icons md-36">announcement</i> Lembar Soal & Jadwal Terbaru
                    </h2>
                </div>
                <div class="body" style="overflow-y:scroll; overflow-x:hidden; height:380px;">
                    <?php echo $this->load->view($welcome); ?>
                </div>
            </div>
        </div>


        <!-- Waktu Server Start -->
        <br><br>
        <div class="col-lg-12 footerfixed">
            &copy; <a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi')."</a> ".date("Y")."
        <br> Waktu Server: ".tjs(date('Y-m-d H:i:s'),"s"); ?>
        </div>
        <!-- Waktu Server End -->
    </div>
</div>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>
<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

</body>
</html>
