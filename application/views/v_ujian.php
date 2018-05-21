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

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style-soal.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/theme-blue.css" rel="stylesheet" />

    <!-- Icon -->
    <link href="<?php echo base_url(); ?>assets/plugins/fa/css/font-awesome.min.css" rel="stylesheet">

</head>
<body class="theme-blue">
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <!-- <img src="<?php echo base_url(); ?>assets/icon-app.png"> -->
            <a class="navbar-header img" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/icon-app.png"></a>
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
                            <li><a onclick="tombol_logout()"><i class="material-icons">input</i>Log Out</a></li>
                        </li>
                    </ul>
                </li>
                <!-- #END# Gear -->
            </ul>
        </div>
    </div>
</nav>
<br><br><br><br>

<div class="row">
    <div class="container-fluid">
        <div class="col-md-3">
            <div class="card">
                <div class="header bg-green-header">
                    <h2>
                        Sisa Waktu
                    </h2>
                </div>
                <div class="body">
                    <div class="tombol-tengah"><div id="clock" style="font-size: 25px;font-weight: bold"></div></div>
                </div>
            </div>

            <div class="card">
                <div class="header bg-green-header">
                    <h2>
                        Navigasi Soal
                    </h2>
                </div>
                <div class="body" id="nav_soal">
                    <div id="tampil_jawaban"></div><br>
                    <b>Tandai Sebagai: </b> <a class="ragu_ragu btn bg-orange waves-effect waves-light" rel="1" onclick="return tidak_jawab();"><i class="material-icons">info</i> Ragu-Ragu</a>

                </div>
            </div>


        </div>

        <div class="col-md-6">
            <form role="form" name="_form" method="post" id="_form">
                <div class="card">
                    <div class="header bg-green-header">Soal Ke <div class="btn btn-info" id="soalke"></div>


                    </div>

                    <div class="body" style="overflow: auto">
                        <?php echo $html; ?>
                    </div>

                    <div class="panel-footer text-center">
                        <a class="action back btn bg-blue waves-effect waves-light" rel="0" onclick="return back();"><i class="material-icons">chevron_left</i> Back</a>

                        <a class="action next btn bg-blue waves-effect waves-light" rel="2" onclick="return next();"><i class="material-icons">chevron_right</i> Next</a>

                        <a class="selesai action submit btn bg-red waves-effect waves-light" onclick="return simpan_akhir();"><i class="material-icons">check</i> Selesai</a>

                        <input type="hidden" name="jml_soal" id="jml_soal" value="<?php echo $no; ?>">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="header bg-green-header">
                    <h2>
                        Detail
                    </h2>
                </div>
                <div class="body">
                    <table class="table-bordered">
                        <tr>
                            <th>Nama Peserta</th>
                            <td><?php echo $dp['nama']; ?></td>
                        </tr>

                        <tr>
                            <th>Nama Ujian</th>
                            <td><?php echo $du['nama_ujian']; ?></td>
                        </tr>

                        <tr>
                            <th>Mata Pelajaran</th>
                            <td><?php echo $du['nmmapel']; ?></td>
                        </tr>

                        <tr>
                            <th>Nama Guru</th>
                            <td><?php echo $du['nmguru']; ?></td>
                        </tr>

                        <tr>
                            <th>Jumlah Soal</th>
                            <td><?php echo $du['jumlah_soal']; ?> Soal</td>
                        </tr>

                        <tr>
                            <th>Waktu Pengerjaan</th>
                            <td><?php echo $du['waktu']; ?> Menit</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>


<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/jquery_zoom/jquery.zoom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countdown/jquery.countdownTimer.js"></script>

<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    id_tes = "<?php echo $id_tes; ?>";

    function getFormData($form){
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }

    $(document).on("ready", function(){
        $('.gambar').each(function(){
            var url = $(this).attr("src");
            $(this).zoom({url: url});
        });

        hitung();
        simpan();
        buka(1);

        widget      = $(".step");
        btnnext     = $(".next");
        btnback     = $(".back");
        btnsubmit   = $(".submit");

        $(".step").hide();
        $(".back").hide();
        $("#widget_1").show();
    });

    widget      = $(".step");
    total_widget = widget.length;

    simpan_sementara = function() {
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);
        //form = JSON.stringify(form);
        var jml_soal = form.jml_soal;
        jml_soal = parseInt(jml_soal);

        var hasil_jawaban = "";


        for (var i = 1; i < jml_soal; i++) {
            var idx = 'opsi_'+i;
            var idx2 = 'rg_'+i;
            var jawab = form[idx];
            var ragu = form[idx2];

            if (jawab != undefined) {
                if (ragu == "Y") {
                    hasil_jawaban += '<a id="btn_soal_'+(i)+'" class="btn bg-orange btn_soal waves-effect waves-light" onclick="return buka('+(i)+');">'+(i)+". "+jawab+"</a>";
                } else {
                    hasil_jawaban += '<a id="btn_soal_'+(i)+'" class="btn bg-blue btn_soal waves-effect waves-light" onclick="return buka('+(i)+');">'+(i)+". "+jawab+"</a>";
                }
            } else {
                hasil_jawaban += '<a id="btn_soal_'+(i)+'" class="btn bg-grey btn_soal waves-effect waves-light" onclick="return buka('+(i)+');">'+(i)+". -</a>";
            }
        }

        $("#tampil_jawaban").html('<div id="yes"></div>'+hasil_jawaban);
    }

    simpan = function() {
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);

        $.ajax({
            type: "POST",
            url: base_url+"adm/ikut_ujian/simpan_satu/"+id_tes,
            data: JSON.stringify(form),
            dataType: 'json',
            contentType: 'application/json; charset=utf-8'
        }).done(function(response) {
            var hasil_jawaban = "";
            var panjang       = response.data.length;

            for (var i = 0; i < panjang; i++) {
                if (response.data[i] != "_N") {
                    var getjwb = response.data[i];
                    var pc_getjwb = getjwb.split('_');

                    if (pc_getjwb[1] == "Y") {
                        hasil_jawaban += '<a id="btn_soal_'+(i+1)+'" class="btn bg-orange btn_soal waves-effect waves-light" onclick="return buka('+(i+1)+');">'+(i+1)+". "+pc_getjwb[0]+"</a>";
                    } else {
                        hasil_jawaban += '<a id="btn_soal_'+(i+1)+'" class="btn bg-blue btn_soal waves-effect waves-light" onclick="return buka('+(i+1)+');">'+(i+1)+". "+pc_getjwb[0]+"</a>";
                    }
                } else {
                    hasil_jawaban += '<a id="btn_soal_'+(i+1)+'" class="btn bg-grey btn_soal waves-effect waves-light" onclick="return buka('+(i+1)+');">'+(i+1)+". -</a>";
                }
            }

            $("#tampil_jawaban").html('<div id="yes"></div>'+hasil_jawaban);
        });
        return false;
    }

    hitung = function() {
        var tgl_mulai = '<?php echo date('Y-m-d H:i:s'); ?>';
        var tgl_selesai = '<?php echo $jam_selesai; ?>';

        $("div#clock").countdowntimer({
            startDate : tgl_mulai,
            dateAndTime : tgl_selesai,
            size : "lg",
            displayFormat: "HMS",
            timeUp : selesai,
        });
    }

    selesai = function() {
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);
        simpan_akhir(id_tes);
        window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/"+id_tes);

        return false;
    }

    next = function() {
        var berikutnya  = $(".next").attr('rel');
        berikutnya = parseInt(berikutnya);
        berikutnya = berikutnya > total_widget ? total_widget : berikutnya;

        $("#soalke").html(berikutnya);

        $(".next").attr('rel', (berikutnya+1));
        $(".back").attr('rel', (berikutnya-1));
        $(".ragu_ragu").attr('rel', (berikutnya));
        cek_status_ragu(berikutnya);
        cek_terakhir(berikutnya);

        var sudah_akhir = berikutnya == total_widget ? 1 : 0;

        $(".step").hide();
        $("#widget_"+berikutnya).show();

        if (sudah_akhir == 1) {
            $(".back").show();
            $(".next").hide();
        } else if (sudah_akhir == 0) {
            $(".next").show();
            $(".back").show();
        }

        simpan_sementara();
        simpan();
    }

    back = function() {
        var back  = $(".back").attr('rel');
        back = parseInt(back);
        back = back < 1 ? 1 : back;

        $("#soalke").html(back);

        $(".back").attr('rel', (back-1));
        $(".next").attr('rel', (back+1));
        $(".ragu_ragu").attr('rel', (back));
        cek_status_ragu(back);
        cek_terakhir(back);

        $(".step").hide();
        $("#widget_"+back).show();

        var sudah_awal = back == 1 ? 1 : 0;

        $(".step").hide();
        $("#widget_"+back).show();

        if (sudah_awal == 1) {
            $(".back").hide();
            $(".next").show();
        } else if (sudah_awal == 0) {
            $(".next").show();
            $(".back").show();
        }

        simpan_sementara();
        simpan();
    }

    tidak_jawab = function() {
        var id_step = $(".ragu_ragu").attr('rel');
        var status_ragu = $("#rg_"+id_step).val();

        if (status_ragu == "N") {
            $("#rg_"+id_step).val('Y');
            $("#btn_soal_"+id_step).removeClass('bg-blue');
            $("#btn_soal_"+id_step).addClass('bg-orange');

        } else {
            $("#rg_"+id_step).val('N');
            $("#btn_soal_"+id_step).removeClass('bg-orange');
            $("#btn_soal_"+id_step).addClass('bg-blue');
        }


        cek_status_ragu(id_step);

        simpan_sementara();
        simpan();
    }

    cek_status_ragu = function(id_soal) {
        var status_ragu = $("#rg_"+id_soal).val();

        if (status_ragu == "N") {
            $(".ragu_ragu").html('Ragu');
        } else {
            $(".ragu_ragu").html('Tidak Ragu');
        }
    }

    cek_terakhir = function(id_soal) {
        var jml_soal = $("#jml_soal").val();
        jml_soal = (parseInt(jml_soal) - 1);

        if (jml_soal == id_soal) {
            $(".selesai").show();
        } else {
            $(".selesai").hide();
        }
    }

    buka = function(id_widget) {
        $(".next").attr('rel', (id_widget+1));
        $(".back").attr('rel', (id_widget-1));
        $(".ragu_ragu").attr('rel', (id_widget));
        cek_status_ragu(id_widget);
        cek_terakhir(id_widget);

        $("#soalke").html(id_widget);

        $(".step").hide();
        $("#widget_"+id_widget).show();
    }

    simpan_akhir = function() {
        if (confirm('Ujian telah selesai. Anda yakin akan mengakhiri tes ini..?')) {
            var f_asal  = $("#_form");
            var form  = getFormData(f_asal);

            $.ajax({
                type: "POST",
                url: base_url+"adm/ikut_ujian/simpan_akhir/"+id_tes,
                data: JSON.stringify(form),
                dataType: 'json',
                contentType: 'application/json; charset=utf-8'
            }).done(function(r) {
                if(r.status == "ok") {
                    window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/"+id_tes);
                    //window.location.assign("<?php //echo base_url(); ?>//adm/sudah_selesai_ujian/"+id_tes);
                }
            });

            return false;
        }
    }

    show_jawaban = function() {
        $("#v_jawaban").toggle();
    }
</script>
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


