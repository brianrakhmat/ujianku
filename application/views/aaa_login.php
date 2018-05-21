<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Laman Login - <?php echo $this->config->item('nama_aplikasi'); ?></title>
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
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/theme-blue.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body class="theme-blue login-page">
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- <img src="<?php echo base_url(); ?>assets/icon-app.png"> -->
            <a class="navbar-header img" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/icon-app.png"></a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<br><br>
<div class="container-fluid">
    <div class="row">
            <div class="login-box">
                <div class="logo">
                    <center><img src="<?php echo base_url(); ?>assets/icon-login.png" width="80px"></center>
                    <a href="#">Aplikasi Ujian <b>Online</b></a>
                </div>
                <div class="card">
                    <div class="body">
                        <form action="" method="post" name="fl" id="f_login" onsubmit="return login();">
                            <div class="msg">Login menggunakan Akun anda</div>
                            <div class="alert alert-warning">
                                <p>Admin: admin/admin</p>
                                <p>Guru: 1003/1003</p>
                                <p>Siswa: 1/1<p>
                            </div>
                            <div id="konfirmasi"></div>
                            <div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">person</i>
					</span>
                                <div class="form-line">
                                    <input type="text"  id="username" class="form-control" name="username" autofocus value="" placeholder="Username" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">lock</i>
					</span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 p-t-5">
                                </div>
                                <div class="col-xs-4">
                                    <button class="btn btn-block bg-blue waves-effect" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        <!-- Waktu Server Start -->
        <div class="col-lg-12 footerfixed">
            &copy; <a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi')."</a> ".date("Y")."
        <br> Waktu Server: ".tjs(date('Y-m-d H:i:s'),"s"); ?>
        </div>
        <!-- Waktu Server End -->
    </div>
</div>
<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>


<script type="text/javascript">
    base_url = "<?php echo base_url(); ?>";
    uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>assets/js/aplikasi.js"></script>
</body>
</html>
