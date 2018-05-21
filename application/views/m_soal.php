<?php 
$uri4 = $this->uri->segment(4);
?>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header bg-green-header">
              <h2>
                Data Soal
              </h2>
          </div>
          <div class="body">
            <?php echo $this->session->flashdata('k'); ?>
              <div class="table-responsive">
                <div class="tombol-kanan">
                  <a class="btn bg-green waves-effect waves-light" href="<?php echo base_url(); ?>adm/m_soal/edit/0"><i class="material-icons">add</i> &nbsp;&nbsp;Tambah Data</a>
                  <a class="btn bg-orange waves-effect waves-light" href="<?php echo base_url(); ?>upload/format_soal_download.xlsx"><i class="material-icons">file_download</i> &nbsp;&nbsp;Download Format Import</a>        
                  <a class="btn bg-light-blue waves-effect waves-light" href="<?php echo base_url(); ?>adm/m_soal/import"><i class="material-icons">file_upload</i> &nbsp;&nbsp;Import</a>
                  <a class="btn bg-blue waves-effect waves-light" href="<?php echo base_url(); ?>adm/m_soal/cetak/<?php echo $uri4; ?>"><i class="material-icons">print</i> &nbsp;&nbsp;Cetak</a>
                </div>
                <br><br><br>
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="datatabel">
                  <thead>
                    <tr>
                      <td width="3%">No</td>
                      <td width="15%">Soal</td>
                      <td width="5%">Mata Pelajaran</td>
                      <td width="5%">Guru</td>
                      <td width="5%">Analisa</td>
                      <td width="10%">Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</div>
