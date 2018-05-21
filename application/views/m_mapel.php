<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header bg-green-header">
              <h2>
                Data Mata Pelajaran
              </h2>
          </div>
          <div class="body">
          <div class="table-responsive">
            <div class="tombol-kanan">
              <a class="btn bg-green waves-effect waves-light" href="#" onclick="return m_mapel_e(0);"><i class="material-icons">add</i> &nbsp;&nbsp;Tambah</a>
            </div>
            <br><br><br>
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="datatabel">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="25%">Nama</th>
                  <th width="25%">Aksi</th>
                
                  
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
      </div>
  </div>
</div>



<!-- Start Modal  -->
<div class="modal fade" id="m_mapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="myModalLabel">Data Mata Pelajaran</h4>
      </div>
      <div class="modal-body">
          <form name="f_mapel" id="f_mapel" onsubmit="return m_mapel_s();">
            <input type="hidden" name="id" id="id" value="0">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control" placeholder="NAMA MATA PELAJARAN" name="nama" id="nama" required/>
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
