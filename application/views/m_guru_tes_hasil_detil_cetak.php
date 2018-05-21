<!DOCTYPE html>
<html>
<head>
  <title>Laporan Hasil Ujian</title>
  <style>
  body {
  font-family:"Roboto", sans-serif;
	margin: 20px auto;
	width: 95%;
}

table {
	border-collapse: collapse;
	width: 100%;
	margin-bottom: 10px;
}

table tr td {
	font-family: arial;
	font-size: 14px;
	padding: 3px;
	vertical-align: top;
}

.table-bordered {
	border-collapse: collapse;
	width: 100%;
	border: solid 1px #000;
	margin-bottom: 20px;
}

.table-bordered tr td, .table-bordered tr th {
	font-family: arial;
	font-size: 14px;
	padding: 3px;
	border: solid 1px #000;
}

h4 {margin-bottom: 0px; margin-top: 0px;}
.ctr {text-align: center}
.rgt {text-align: right}

.footer {
  position: fixed;
  left: 0;
  bottom: 2;
  width: 100%;
  }
  </style>
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/iconpdf.png" width="80px"><h3>Laporan Hasil Ujian</h3></center>
<hr style="border: solid 1px #000"><br>
<h4>Detil Ujian</h4>
<table class="table-bordered" style="margin-bottom: 0px">
  <tr><td width="30%">Mata Pelajaran</td><td><b><?php echo $detil_tes->namaMapel; ?></b></td></tr>
  <tr><td>Nama Guru</td><td width="70%"><b><?php echo $detil_tes->nama_guru; ?></b></td></tr>
  <tr><td>Nama Ujian</td><td width="70%"><b><?php echo $detil_tes->nama_ujian; ?></b></td></tr>
  <tr><td>Jumlah Soal</td><td><b><?php echo $detil_tes->jumlah_soal; ?></b></td></td></tr>
  <tr><td>Waktu</td><td><b><?php echo $detil_tes->waktu; ?> menit</b></td></tr>
  <tr><td>Tertinggi</td><td><b><?php echo $statistik->max_; ?></b></td></tr>
  <tr><td>Terendah</td><td><b><?php echo $statistik->min_; ?></b></td></tr>
  <tr><td>Rata-rata</td><td><b><?php echo number_format($statistik->avg_); ?></b></td></tr>
</table>
<br><br>
<h4>Hasil Ujian</h4>
<table class="table-bordered">
  <thead>
    <tr>
      <th width="5%">No</th>
      <th width="50%">Nama Peserta</th>
      <th width="15%">Jumlah Benar</th>
      <th width="15%">Nilai</th>
      <th width="15%">Nilai Bobot</th>
    </tr>
  </thead>

  <tbody>
    <?php 
      if (!empty($hasil)) {
        $no = 1;
        foreach ($hasil as $d) {
          echo '<tr>
                <td class="ctr">'.$no.'</td>
                <td>'.$d->nama.'</td>
                <td class="ctr">'.$d->jml_benar.'</td>
                <td class="ctr">'.$d->nilai.'</td>
                <td class="ctr">'.$d->nilai_bobot.'</td>
                </tr>
                ';
        $no++;
        }
      } else {
        echo '<tr><td colspan="5">Belum ada data</td></tr>';
      }
    ?>
  </tbody>
</table>
<?php $tgl=date('l, d-m-Y');?>
<div class="footer">Dicetak pada:  <?php echo $tgl; ?>
</div>
</body>
</html>
