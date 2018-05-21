<!-- Start Modal  -->
<div class="modal fade" id="m_guru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="myModalLabel">Data Siswa</h4>
      </div>
      <div class="modal-body">
          <form name="f_guru" id="f_guru" onsubmit="return m_guru_s();">
            <input type="hidden" name="id" id="id" value="0">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control" placeholder="NIP" name="nim" id="nim" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control" placeholder="NAMA" name="nama" id="nama" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-line">
                    <input type="text" class="form-control" placeholder="JURUSAN" name="jurusan" id="jurusan" required/>
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