<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header bg-green">
              <h2>
                Import Data Guru
              </h2>
          </div>
          <div class="body">
              <form class="form-horizontal" name="f_siswa" action="<?php echo base_url(); ?>import/guru" id="f_siswa" enctype="multipart/form-data" method="post">
                  <div class="row clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                          <label>File (.XLS / .XLSX)</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <input type="file" class="form-control" name="import_excel" required>
                          </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                          <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                            <a href="<?php echo base_url(); ?>adm/m_guru" class="btn btn-danger m-t-15 waves-effect">Kembali</a>
                      </div>
                  </div>
              </form>
          </div>
  </div>
</div>


