<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header bg-green-header">
              <h2>
                Data Siswa
              </h2>
          </div>
          <div class="body">
          <div class="table-responsive">
            <div class="tombol-kanan">
              <a class="btn bg-green waves-effect waves-light" href="#" onclick="return m_siswa_e(0);"><i class="material-icons">add</i> &nbsp;&nbsp;Tambah</a>
              <a class="btn bg-orange waves-effect waves-light" href="<?php echo base_url(); ?>upload/format_import_siswa.xlsx"><i class="material-icons">file_download</i> &nbsp;&nbsp;Download Format Import</a>        
              <a class="btn bg-light-blue waves-effect waves-light" href="<?php echo base_url(); ?>adm/m_siswa/import"><i class="material-icons">file_upload</i> &nbsp;&nbsp;Import</a>
            </div>
            <br><br><br>
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="datatabel">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nis</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
      </div>
  </div>
</div>

<!-- Start Modal  -->
<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="myModalLabel">Data Siswa</h4>
      </div>
      <div class="modal-body">
          <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
            <input type="hidden" name="id" id="id" value="0">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control" placeholder="NAMA" name="nama" id="nama" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control" placeholder="NIS" name="nis" id="nis" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control" placeholder="KELAS" name="kelas" id="kelas" required/>
                  </div>
                </div>
              </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-link waves-effect"> Simpan</button>
        <button class="btn btn-link waves-effect" data-dismiss="modal" aria-hidden="true"> Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- End Modal  -->