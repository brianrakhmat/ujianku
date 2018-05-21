<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-green-header">
                <h2>Selamat Anda telah menyelesaikan ujian ini </h2>
                <!-- <div class="row">
                <div class="col-md-6">
                  <h2>Selamat Anda telah menyelesaikan ujian ini </h2>
                  </div>
                  <div class="col-md-6 text-left">
                  <h2></h2>
                  </div>
              </div> -->


            </div>
            <div class="body">
                <h5 class="text-center text-dark"><?php echo $selesai_tgl; ?></h5><br>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header bg-green">
                                <h2 class="text-center text-primary">Nilai</h2>
                            </div>
                            <div class="body">
                                <h1 class="text-center"><?php echo $selesai_nilai; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <p class="text-center"><a href="<?php echo base_url(); ?>adm/ikuti_ujian">Kembali</a></p>
            </div>
        </div>
    </div>
</div>