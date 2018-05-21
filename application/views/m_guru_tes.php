<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header bg-green-header">
              <h2>
              Daftar Ujian / Tes
              </h2>
          </div>
          <div class="body">
              <div class="tombol-kanan">
                  <a class="btn bg-green waves-effect waves-light" href="#" onclick="return m_ujian_e(0);"><i class="material-icons">add</i> &nbsp;&nbsp;Tambah Data</a>

              </div>
          		<div class="panel-body">


			      <table class="table table-bordered" id="datatabel">
			        <thead>
			          <tr>
			            <th width="5%">No</th>
			            <th width="20%">Nama Tes</th>
			            <th width="20%">Mata Pelajaran</th>
			            <th width="10%">Jumlah Soal</th>
			            <th width="15%">Waktu</th>
			            <th width="10%">Pengacakan Soal</th>
			            <th width="20%">Aksi</th>
			          </tr>
			        </thead>

        <tbody></tbody>
      </table>
    
      </div>
          </div>
        </div>
      </div>
    </div>


          

<!-- Start Modal  -->
<div class="modal fade" id="m_ujian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="myModalLabel">Buat Ujian</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" name="f_ujian" id="f_ujian" onsubmit="return m_ujian_s();">
            <input type="hidden" name="id" id="id" value="0">
            <input type="hidden" name="jumlah_soal1" id="jumlah_soal1" value="0">
              <table class="table table-form">
                <tr>
                  <td style="width: 25%">Nama Ujian</td>
                    <td style="width: 75%">
                      <input type="text" class="form-control" name="nama_ujian" id="nama_ujian" required>
                    </td>
                  </tr>
                <tr>
                  <td>Mata Pelajaran</td>
                  <td>
                    <?php echo form_dropdown('mapel', $p_mapel, '', 'onchange="return __ambil_jumlah_soal(this.value);" class="form-control"  id="mapel" required'); ?>
                  </td>
                </tr>
                <tr>
                  <td>Jumlah soal</td>
                    <td>
                      <?php echo form_input('jumlah_soal', '', 'class="form-control"  id="jumlah_soal" required'); ?>
                    </td>
                </tr>
                <tr>
                  <td>Tanggal Mulai Ujian</td>
                  <td>
                    <input type="date" name='tgl_mulai' class="form-control" style="width: 150px; display: inline; float: left" id="tgl_mulai" placeholder="Tgl" required>
                    <input type="time" name='wkt_mulai' class="form-control" style="width: 120px; display: inline; float: left" id="wkt_mulai" placeholder="Waktu" required>
                  </td>
                </tr>
                <tr>
                  <td>Durasi Waktu Ujian</td>
                  <td>
                    <?php echo form_input('waktu', '', 'class="form-control" id="waktu" placeholder="menit" required style="width: 100px; display: inline; float: left"'); ?> 
                    <div style="float: left; margin: 4px 0 0 10px"> menit</div>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Selesai Ujian</td>
                  <td>
                    <input type="date" name='terlambat' class="form-control" style="width: 150px; display: inline; float: left" id="terlambat" placeholder="Tgl" required>
                    <input type="time" name='terlambat2' class="form-control" style="width: 120px; display: inline; float: left" id="terlambat2" placeholder="Waktu" required>
                  </td>
                </tr>
                <tr>
                  <td>Pola Soal</td>
                  <td>
                    <?php echo form_dropdown('acak', $pola_tes, '', 'class="form-control"  id="acak" required'); ?>
                  </td>
                </tr>
              </table>

              <div class="modal-footer">
                <button class="btn btn-link waves-effect"> Simpan</button>
                <button class="btn btn-link waves-effect" data-dismiss="modal" aria-hidden="true"> Tutup</button>
              </div>
        </form>
      </div>
  </div>
</div>
<!-- End Modal  -->
