<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
/**
 * Created by PhpStorm.
 * User: brianrakhmat
 * Date: 4/15/2018
 * Time: 3:32 PM
 */

class Welcome extends CI_Controller
{
    public function index() {
        //var post from json
        $p = json_decode(file_get_contents('php://input'));
        //return as json
        $jeson = array();
        //$a['sess_konid']
        $a['data'] = $this->db->query("SELECT 
									a.id, a.nama_ujian, a.jumlah_soal, a.waktu, a.tgl_mulai, a.terlambat,
									b.nama nmmapel,
									c.nama nmguru,
									IF((d.status='Y' AND NOW() BETWEEN d.tgl_mulai AND d.tgl_selesai),'Sedang Tes',
									IF(d.status='Y' AND NOW() NOT BETWEEN d.tgl_mulai AND d.tgl_selesai,'Waktu Habis',
									IF(d.status='N','Selesai','Belum Ikut'))) status 
									FROM tr_guru_tes a
									INNER JOIN m_mapel b ON a.id_mapel = b.id
									INNER JOIN m_guru c ON a.id_guru = c.id
									LEFT JOIN tr_ikut_ujian d ON CONCAT(a.id) = CONCAT(d.id_user,d.id_tes)
									ORDER BY a.id ASC")->result();
        //echo $this->db->last_query();
        $a['welcome']	= "m_welcome";
        $this->load->view('v_welcome', $a);
    }
}