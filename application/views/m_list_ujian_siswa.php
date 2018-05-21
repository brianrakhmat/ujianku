<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header bg-green-header">
              <h2>
                Daftar Ujian / Tes
              </h2>
          </div>
          <div class="body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="datatabel">
                  <thead>
                    <tr>
                      <td width="5%">No</td>
                      <td width="20%">Nama Tes</td>
                      <td width="20%">Mapel / Guru</td>
                      <td width="10%">Jumlah Soal</td>
                      <td width="10%">Waktu</td>
                      <td width="10%">Status</td>
                      <td width="15%">Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if (!empty($data)) {
                        $no = 1;
                        foreach ($data as $d) {
                          
                          echo '<tr>
                                <td class="ctr">'.$no.'</td>
                                <td>'.$d->nama_ujian.'</td>
                                <td>'.$d->nmmapel .' ('.$d->nmguru.')</td>
                                <td class="ctr">'.$d->jumlah_soal.'</td>
                                <td class="ctr">'.$d->waktu.' menit</td>
                                <td class="ctr">'.$d->status.'</td>
                                <td class="ctr">';

                          if ($d->status == "Belum Ikut") {
                          echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" target="_blank" class="btn bg-blue waves-effect waves-light"><i class="material-icons">create</i> Ikuti Ujian</a>';
                          } else if ($d->status == "Sedang Tes") {
                            echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" target="_blank" class="btn bg-yellow waves-effect waves-light"><i class="material-icons">remove_red_eye</i> <blink>Ujian Sdg Aktif</blink></a>';
                          } else if ($d->status == "Waktu Habis") {
                            echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" target="_blank" class="btn bg-orange waves-effect waves-light"><i class="material-icons">warning</i> <blink>Waktu Habis</blink></a>';
                          } else {
                            echo '<a href="'.base_url().'adm/sudah_selesai_ujian/'.$d->id.'" class="btn bg-red waves-effect waves-light"><i class="material-icons">check</i> Anda sudah ikut</a>';
                          }

                          echo '</td></tr>';
                        $no++;
                        }
                      } else {
                        echo '<tr><td colspan="7">Belum ada data</td></tr>';
                      }
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</div>