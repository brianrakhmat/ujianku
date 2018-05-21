<?php
if (!empty($data)) {
    $no = 1;
    foreach ($data as $d) {

        echo '
    <div class="media">
        <div class="media-left">
            <i class="material-icons md-48">assignment</i>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                '.$d->nama_ujian.'
            </h4>
            <b>Mata Pelajaran:</b> '.$d->nmmapel.' | <b>Nama Guru:</b> '.$d->nmguru.' 
            <br>
            <b>Jumlah Soal:</b> '.$d->jumlah_soal.' | <b>Waktu Pengerjaan:</b> '.$d->waktu.' menit 
            <br>
            <b>Tanggal Pengerjaan Ujian: </b>'.$d->tgl_mulai.' - '.$d->terlambat.' 
            <br><br>
            <a class="btn bg-blue waves-effect waves-light" href="adm/ikut_ujian/token/'.$d->id.'">Mulai Kerjakan <i class="material-icons">open_in_new</i></a>      
        </div>
    </div><hr>';
        $no++;
    }
} else {
    echo "Belum Ada Ujian";
}
?>
                