<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <!-- class header -->
      <div class="header bg-green-header">
        <h2>
          Input Data Soal
        </h2>
      </div>
      <!-- class body -->
      <div class="body">
      <?php echo form_open_multipart(base_url()."adm/m_soal/simpan", "class='form-horizontal'"); ?>
          <input type="hidden" name="id" id="id" value="<?php echo $d['id']; ?>">
          <input type="hidden" name="mode" id="mode" value="<?php echo $d['mode']; ?>">
          <div id="konfirmasi"></div>

            <div class="form-group fgsoal">
              <div class="col-md-2"><label>Mapel</label></div>
              <div class="col-md-10"><?php echo form_dropdown('id_mapel', $p_mapel, $d['id_mapel'], 'class="form-control" id="id_mapel" required'); ?></div>
            </div>
            <div class="form-group fgsoal">
              <div class="col-md-2"><label>Guru</label></div>
              <div class="col-md-10"><?php echo form_dropdown('id_guru', $p_guru, $d['id_guru'], 'class="form-control" id="id_guru" required'); ?></div>
            </div>

            <div class="form-group fgsoal">
                <div class="col-md-2"><label>Teks Soal</label></div>
                <div class="col-md-4">
                    <input type="file" name="gambar_soal" id="gambar_soal" class="btn btn-info upload">
                    <?php
                    if (is_file('./upload/gambar_soal/'.$d['file'])) {
                        echo tampil_media('./upload/gambar_soal/'.$d['file'],"100%");
                    }
                    ?>
                </div><label>Khusus Soal Bergambar (JPG/PNG)</label>
            </div>
            <div class="form-group fgsoal">
              <div class="col-md-2"></div>
              <div class="col-md-10">
                    <textarea class="form-control" id="editornya" style="height: 50px;" name="soal"><?php echo $d['soal']; ?></textarea>
                </div>
            </div>


            <?php 
            for ($j = 0; $j < $jml_opsi; $j++) {
              $idx = $huruf_opsi[$j];
            ?>

            <div class="form-group fgsoal">
              <div class="col-md-2"><label>Jawaban <?php echo $huruf_opsi[$j]; ?></label></div>
              <div class="col-md-4">
                <input type="file" name="gj<?php echo $huruf_opsi[$j]; ?>" id="gambar_soal" class="btn btn-success upload"><br>
                <?php 
                if (is_file('./upload/gambar_opsi/'.$data_pc[$idx]['gambar'])) {
                  echo tampil_media('./upload/gambar_opsi/'.$data_pc[$idx]['gambar'],"100%");
                }
                ?>
              </div><label>Khusus Soal Bergambar (JPG/PNG)</label>
            </div>
            <div class="form-group fgsoal">
              <div class="col-md-2"></div>
              <div class="col-md-10">
                <textarea class="form-control" id="editornya_<?php echo $huruf_opsi[$j]; ?>" style="height: 30px" name="opsi_<?php echo $huruf_opsi[$j]; ?>"><?php echo $data_pc[$idx]['opsi']; ?></textarea>
              </div>
            </div>

            <?php } ?>
  
            <div class="form-group fgsoal">
              <div class="col-md-2"><label>Kunci Jawaban</label></div>
              <div class="col-md-2">
                <select class="form-control" name="jawaban" id="jawaban" required>
                  <?php 
                  for($o = 0; $o < $jml_opsi; $o++) {
                    $_opsi = strtoupper($huruf_opsi[$o]);
                    if ($d['jawaban'] == $_opsi) {
                      echo '<option value="'.$_opsi.'" selected>'.$_opsi.'</option>';
                    } else {
                      echo '<option value="'.$_opsi.'">'.$_opsi.'</option>';
                    }
                  }
                  ?>
                </select>
              </div>
              <div class="col-md-2"><label>Bobot Nilai Soal</label></div>
              <div class="col-md-1"><input type="text" name="bobot" class="form-control" placeholder="ex: 1" required value="<?php echo $d['bobot']; ?>"></div>
            </div>
            <div class="form-group" style="margin-top: 20px">
              <div class="col-md-12">
                <button type="submit" class="btn btn-info"><i class="material-icons">done</i> Simpan</button>
                <a href="<?php echo base_url(); ?>adm/m_soal/pilih_mapel/<?php echo $d['id_mapel']; ?>" class="btn btn-danger"><i class="material-icons">cancel</i> Kembali</a>
              </div>
            </div>
       </div>
    </div>
  </div>
</div>



