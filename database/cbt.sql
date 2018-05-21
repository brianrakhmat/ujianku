-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 07:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_admin`
--

CREATE TABLE `m_admin` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `kon_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_admin`
--

INSERT INTO `m_admin` (`id`, `username`, `password`, `level`, `kon_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
(40, '12090675', 'c4ca4238a0b923820dcc509a6f75849b', 'siswa', 5),
(44, '1003', 'aa68c75c4a77c87f97fb686b2f068676', 'guru', 6),
(45, '1002', 'fba9d88164f3e2d9109ee770223212a0', 'guru', 5),
(46, '12', 'c20ad4d76fe97759aa27a0c99bff6710', 'siswa', 3),
(47, '12090672', '3a51b622fd32ed1a4a19d63aa06536a2', 'siswa', 2),
(48, '1000', 'a9b7ba70783b617e9998dc4dd82eb3c5', 'guru', 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_guru`
--

CREATE TABLE `m_guru` (
  `id` int(6) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_guru`
--

INSERT INTO `m_guru` (`id`, `nip`, `nama`) VALUES
(2, '1001', 'Ir. Joko Widodo'),
(4, '1000', 'Dr. Abdulrahman Wahid'),
(5, '1002', 'Ir. Baharudin Jusuf Habibie'),
(6, '1003', 'Erik Maulana');

--
-- Triggers `m_guru`
--
DELIMITER $$
CREATE TRIGGER `hapus_guru` AFTER DELETE ON `m_guru` FOR EACH ROW BEGIN
DELETE FROM m_soal WHERE m_soal.id_guru = OLD.id;
DELETE FROM m_admin WHERE m_admin.level = 'guru' AND m_admin.kon_id = OLD.id;
DELETE FROM tr_guru_mapel WHERE tr_guru_mapel.id_guru = OLD.id;
DELETE FROM tr_guru_tes WHERE tr_guru_tes.id_guru = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `m_mapel`
--

CREATE TABLE `m_mapel` (
  `id` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mapel`
--

INSERT INTO `m_mapel` (`id`, `nama`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Bahasa Inggris'),
(3, 'Matematika');

--
-- Triggers `m_mapel`
--
DELIMITER $$
CREATE TRIGGER `hapus_mapel` AFTER DELETE ON `m_mapel` FOR EACH ROW BEGIN
DELETE FROM m_soal WHERE m_soal.id_mapel = OLD.id;
DELETE FROM tr_guru_mapel WHERE tr_guru_mapel.id_mapel = OLD.id;
DELETE FROM tr_guru_tes WHERE tr_guru_tes.id_mapel = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `m_siswa`
--

CREATE TABLE `m_siswa` (
  `id` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` int(10) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_siswa`
--

INSERT INTO `m_siswa` (`id`, `nama`, `nis`, `kelas`) VALUES
(2, 'Edi Baskoro Yudhoyono', 12090672, 'Teknik Informatika'),
(3, 'Puan Maharani', 12, 'Sistem Informasi'),
(5, 'Anisa Pohan', 1, 'Teknik Informatika');

--
-- Triggers `m_siswa`
--
DELIMITER $$
CREATE TRIGGER `hapus_siswa` AFTER DELETE ON `m_siswa` FOR EACH ROW BEGIN
DELETE FROM tr_ikut_ujian WHERE tr_ikut_ujian.id_user = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `m_soal`
--

CREATE TABLE `m_soal` (
  `id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `bobot` int(2) NOT NULL,
  `file` varchar(150) NOT NULL,
  `tipe_file` varchar(50) NOT NULL,
  `soal` longtext NOT NULL,
  `opsi_a` longtext NOT NULL,
  `opsi_b` longtext NOT NULL,
  `opsi_c` longtext NOT NULL,
  `opsi_d` longtext NOT NULL,
  `opsi_e` longtext NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `jml_benar` int(6) NOT NULL,
  `jml_salah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_soal`
--

INSERT INTO `m_soal` (`id`, `id_guru`, `id_mapel`, `bobot`, `file`, `tipe_file`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `tgl_input`, `jml_benar`, `jml_salah`) VALUES
(34, 6, 1, 1, '', '', '<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Teks Fabel I</th>\r\n			<th scope="col">Teks Fabel II</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Dengan bangganya lucky berlari-lari kecil sambil menyeret-nyeret balok kayu yang dikalungkan majikannya, untuk&nbsp;menarik perhatian orang lain. Tetapi tak ada satu pun orang yang senang melihat anjing itu. Balok itu sebenarnya dikalungkan majikannya agar orang mengetahui kehadiran lucky, dan bisa menghindarinya. Seekor anjing lain yang melihatnya kemudian berkata &quot;Kamu seharusnya lebih bijaksana dan berdiam diri di rumah agar orang tidak melihat balok yang dikalungkan di lehermu. Apakah kamu senang bahwa semua orang tahu betapa nakal dan jahatnya kamu?&quot;</td>\r\n			<td>Di sebuah hutan, musim kemarau, burung-burung dan hewan-hewan lain sangat sulit untuk mendapatkan air.&nbsp;Namun ada seekor burung perkutut yang menemukan kendi tua yang berisi sedikit air. Kendi tersebut memiliki bentuk yang tinggi dan juga sempit, sehingga burung tersebut tidak bisa menjangkau air di dalam kendi tersebut. Burung perkutut tersebut tetap mencoba untuk meminum air yang ada di dalam kendi, tetapi tetap saja tidak bisa. Burung itu hampir putus asa hingga munculah sebuah ide.. Burung tersebut kemudian mengambil kerikilkerikil yang ada di samping kendi dan menjatuhkannya ke dalam kendi satu persatu. Ide yang cemerlang itu membuat air lama kelamaan naik sehingga burung perkutut bisa meminum air tersebut</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Perbedaan pola pengembangan kedua kutipan fabel tersebut diawali dengan ....</p>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Fabel I</th>\r\n			<th scope="col">Fabel II</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>menampilkan lokasi cerita</td>\r\n			<td>memberikan garis besar cerita</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Fabel I</th>\r\n			<th scope="col">Fabel II</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>memberikan garis besar cerita</td>\r\n			<td>memulai dengan aksi</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Fabel I</th>\r\n			<th scope="col">Fabel II</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>memunculkan masalah</td>\r\n			<td>mengisyaratkan bahaya</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Fabel I</th>\r\n			<th scope="col">Fabel II</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>memulai dengan aksi</td>\r\n			<td>menampilkan lokasi cerita</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '#####', 'D', '2017-01-25 10:13:02', 0, 3),
(35, 6, 1, 1, '', '', '<p>&ldquo;Nada, minggu depan kita harus pindah ke Jogjakarta. Ayah dipindahtugaskan di sana.&rdquo; Bagaikan petir di siang bolong menyambar Nada yang seketika itu langsung diam mematung. &ldquo;Kenapa mendadak, Bunda? Nada senang tinggal di sini. Apa Nada tidak bisa tetap tinggal di sini? Sekolah Nada gimana?&rdquo; &ldquo;Tidak bisa, sayang. Kamu mau tinggal sama siapa di sini? Masalah sekolah, semua sudah diurus Ayah. Kamu hanya tinggal mengemasi barang-barangmu.&rdquo; Nada terdiam. Tak mungkin mampu ia membantah. Minggu depan ia harus meninggalkan tempat ini. Tepat di hari ulang tahun Dio yang ke-18. Terasa berat untuknya meninggalkan tempat ini. Terlalu banyak kenangan yang terukir. Semakin terasa berat ketika harus meninggalkan Dio.</p>\r\n\r\n<p>Akibat konflik yang terjadi pada kutipan cerpen tersebut adalah...</p>\r\n', '#####<p>Nada diam mematung selama satu minggu</p>\r\n', '#####<p>Nada harus segera mengemasi barang-barang miliknya</p>\r\n', '#####<p>Meskipun merasa berat, minggu depan Nada harus ikut pindah ke Yogyakarta.</p>\r\n', '#####<p>Ayah dan ibu Nada harus mencari tempat tinggal dan sekolah baru untuk Nada</p>\r\n', '#####', 'C', '2017-01-25 10:13:02', 0, 1),
(36, 6, 1, 1, '', '', '<p>&ldquo;Nada, minggu depan kita harus pindah ke Jogjakarta. Ayah dipindahtugaskan di sana.&rdquo; Bagaikan petir di siang bolong menyambar Nada yang seketika itu langsung diam mematung. &ldquo;Kenapa mendadak, Bunda? Nada senang tinggal di sini. Apa Nada tidak bisa tetap tinggal di sini? Sekolah Nada gimana?&rdquo; &ldquo;Tidak bisa, sayang. Kamu mau tinggal sama siapa di sini? Masalah sekolah, semua sudah diurus Ayah. Kamu hanya tinggal mengemasi barang-barangmu.&rdquo; Nada terdiam. Tak mungkin mampu ia membantah. Minggu depan ia harus meninggalkan tempat ini. Tepat di hari ulang tahun Dio yang ke-18. Terasa berat untuknya meninggalkan tempat ini. Terlalu banyak kenangan yang terukir. Semakin terasa berat ketika harus meninggalkan Dio.</p>\r\n\r\n<p>Penyebab terjadinya konflik pada kutipan cerpen tersebut adalah ...</p>\r\n', '#####<p>Perasaan berat hati Nada harus meninggalkan Dio.</p>\r\n', '#####<p>Nada merasa bingung dengan masalah sekolahnya.</p>\r\n', '#####<p>Kepindahan tempat tugas ayah Nada yang mendadak</p>\r\n', '#####<p>Nada merasa berat meninggalkan tempat tinggal yang sekarang.</p>\r\n', '#####', 'C', '2017-01-25 10:13:02', 1, 3),
(37, 6, 1, 1, '', '', '<p>&ldquo;Nada, minggu depan kita harus pindah ke Jogjakarta. Ayah dipindahtugaskan di sana.&rdquo; Bagaikan petir di siang bolong menyambar Nada yang seketika itu langsung diam mematung. &ldquo;Kenapa mendadak, Bunda? Nada senang tinggal di sini. Apa Nada tidak bisa tetap tinggal di sini? Sekolah Nada gimana?&rdquo; &ldquo;Tidak bisa, sayang. Kamu mau tinggal sama siapa di sini? Masalah sekolah, semua sudah diurus Ayah. Kamu hanya tinggal mengemasi barang-barangmu.&rdquo; Nada terdiam. Tak mungkin mampu ia membantah. Minggu depan ia harus meninggalkan tempat ini. Tepat di hari ulang tahun Dio yang ke-18. Terasa berat untuknya meninggalkan tempat ini. Terlalu banyak kenangan yang terukir. Semakin terasa berat ketika harus meninggalkan Dio.</p>\r\n\r\n<p>Amanat yang terdapat pada kutipan cerpen tersebut adalah ...</p>\r\n', '#####<p>Sebagai anak harus patuh pada kedua orang tua.</p>\r\n', '#####<p>Lakukan perintah orang tua meskipun dengan terpaksa!</p>\r\n', '#####<p>Ikhlaskan diri kita dalam mengerjakan sesuatu pekerjaan!</p>\r\n', '#####<p>Setiap keputusan agar dibicarakan terlebih dahulu dengan keluarga!</p>\r\n', '#####', 'A', '2017-01-25 10:13:02', 0, 1),
(38, 6, 1, 1, '', '', '<p>&ldquo;Nada, minggu depan kita harus pindah ke Jogjakarta. Ayah dipindahtugaskan di sana.&rdquo; Bagaikan petir di siang bolong menyambar Nada yang seketika itu langsung diam mematung. &ldquo;Kenapa mendadak, Bunda? Nada senang tinggal di sini. Apa Nada tidak bisa tetap tinggal di sini? Sekolah Nada gimana?&rdquo; &ldquo;Tidak bisa, sayang. Kamu mau tinggal sama siapa di sini? Masalah sekolah, semua sudah diurus Ayah. Kamu hanya tinggal mengemasi barang-barangmu.&rdquo; Nada terdiam. Tak mungkin mampu ia membantah. Minggu depan ia harus meninggalkan tempat ini. Tepat di hari ulang tahun Dio yang ke-18. Terasa berat untuknya meninggalkan tempat ini. Terlalu banyak kenangan yang terukir. Semakin terasa berat ketika harus meninggalkan Dio.</p>\r\n\r\n<p>Makna simbol <strong><em>petir di siang bolong</em></strong> pada kutipan cerpen tersebut adalah....</p>\r\n', '#####<p>merasa sedih</p>\r\n', '#####<p>merasa bingung</p>\r\n', '#####<p>sangat terkejut</p>\r\n', '#####<p>merasa heran</p>\r\n', '#####', 'C', '2017-01-25 10:13:02', 0, 4),
(40, 6, 1, 1, '', '', '<p>Langit menjadi kelabu. Awan hitam mulai tak mampu lagi membendung butiran air. Matahari pergi. Sinarnya pun tak berbekas. Di samping rumah Nada, nampak Dio masih asyik bermain dengan merpatinya. Nada tersenyum menatapnya dari balik jendela kamarnya. Ya, tetangganya itu memang sangat menyukai merpati. Bahkan di samping rumahnya ada sebuah kandang merpati yang cukup luas miliknya sendiri. Ia biasa menyebutnya istana Merpati Dara Dori. Begitu banyak jenis merpati yang ia piara. Semuanya sepasang. Ada merpati lokal, merpati kipas, merpati gondok, merpati Lahore, dan masih banyak lagi. Namun, di antara semua merpatinya, merpati lokal berwarna seputih saljulah yang paling ia sukai. Dara dan Dori.</p>\r\n\r\n<p>Kutipan cerpen tersebut merupakan bagian alur ...</p>\r\n', '#####<p>pengenalan</p>\r\n', '#####<p>komplikasi</p>\r\n', '#####<p>klimaks</p>\r\n', '#####<p>penyelesaian</p>\r\n', '#####', 'A', '2017-01-25 10:13:02', 0, 2),
(42, 6, 1, 1, '', '', '<p>Langit menjadi kelabu. Awan hitam mulai tak mampu lagi membendung butiran air. Matahari pergi. Sinarnya pun tak berbekas. Di samping rumah Nada, nampak Dio masih asyik bermain dengan merpatinya. Nada tersenyum menatapnya dari balik jendela kamarnya. Ya, tetangganya itu memang sangat menyukai merpati. Bahkan di samping rumahnya ada sebuah kandang merpati yang cukup luas miliknya sendiri. Ia biasa menyebutnya istana Merpati Dara Dori. Begitu banyak jenis merpati yang ia piara. Semuanya sepasang. Ada merpati lokal, merpati kipas, merpati gondok, merpati Lahore, dan masih banyak lagi. Namun, di antara semua merpatinya, merpati lokal berwarna seputih saljulah yang paling ia sukai. Dara dan Dori.</p>\r\n\r\n<p>Makna kata &ldquo;membendung&rdquo; pada kutipan cerpen tersebut ialah &hellip;.</p>\r\n', '#####<p>menahan</p>\r\n', '#####<p>menampung</p>\r\n', '#####<p>membentengi</p>\r\n', '#####<p>mengumpulkan</p>\r\n', '#####', 'A', '2017-01-25 10:13:02', 0, 2),
(43, 6, 1, 1, '', '', '<p>1) Penerbit Wayang menerbitkan buku terbaru yang berjudul Sudah Saatnya Menjadi Penulis Hebat. 2) Buku ini ditulis oleh Bendi Derajat. 3) Judulnya menarik, isinya lengkap, bahasanya ringan dan mudah dipahami serta bermanfaat bagi pembaca. 4) Hanya saja buku tersebut menggunakan banyak istilah akademik yang sulit dipahami pembaca awam.</p>\r\n\r\n<p>Kelemahan karya sastra yang terdapat pada ulasan buku tersebut ditandai nomor...</p>\r\n\r\n<p>&nbsp;</p>\r\n', '#####<p>1</p>\r\n', '#####<p>2</p>\r\n', '#####<p>3</p>\r\n', '#####<p>4</p>\r\n', '#####', 'D', '2017-01-25 10:13:02', 0, 3),
(44, 6, 1, 1, '', '', '<p><em>Kutipan teks I </em></p>\r\n\r\n<p><strong>Gamelan Jawa </strong></p>\r\n\r\n<p>Yogyakarta adalah tempat yang paling tepat untuk menikmati gamelan. Di kota ini Anda dapat menikmati gamelan versi aslinya. Gamelan yang berkembang di Yogyakarta adalah Gamelan Jawa yaitu musik yang biasanya menonjolkan metalofon, gambang, gendang, dan gong. Musik yang tercipta pada Gamelan Jawa berasal dari paduan bunyi gong, kenong, dan alat musik Jawa lainnya. Gamelan Jawa berbeda dengan Gamelan Bali ataupun Gamelan Sunda. Gamelan Jawa memiliki nada yang lebih lembut dan slow, berbeda dengan Gamelan Bali yang rancak dan Gamelan Sunda yang sangat mendayu-dayu dan didominasi suara seruling. Perbedaan itu wajar, karena Jawa memiliki pandangan hidup tersendiri yang diungkapkan dalam irama musik gamelannya. Adanya perbedaan gamelan Jawa, Bali, ataupun Sunda mengindikasikan bahwa masing-masing daerah memiliki pandangan hidup dan budaya sehingga berpengaruh pada gamelannya.</p>\r\n\r\n<p><em>Kutipan teks II </em></p>\r\n\r\n<p><strong>KEKERINGAN </strong></p>\r\n\r\n<p>Kekeringan adalah keadaan kekurangan air yang sangat ekstrim dalam waktu lama. Kekeringan timbul tanpa dapat diprediksi secara tepat. Di Indonesia, hujan turun secara tidak merata meskipun pada umumnya hujan terjadi di seluruh wilayah negeri. Selain itu, hujan tidak terjadi dalam waktu yang bersamaan. Di wilayah barat, hujan sudah turun, tetapi di wilayah timur belum turun hujan. Kekeringan biasanya muncul bila suatu wilayah secara terus-menerus mengalami curah hujan di bawah rata-rata. Musim kemarau yang panjang akan menjadi bencana alam apabila menyebabkan suatu wilayah kehilangan sumber pendapatan akibat gangguan pada pertanian dan ekosistem yang ditimbulkannya.</p>\r\n\r\n<p>Perbedaan penggunaan bahasa pada kedua kutipan teks tersebut adalah....</p>\r\n\r\n<p>&nbsp;</p>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Teks 1</th>\r\n			<th scope="col">Teks 2</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>bahasanya mudah dipahami</td>\r\n			<td>banyak menggunakan istilah ilmiah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Teks 1</th>\r\n			<th scope="col">Teks 2</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>banyak menggunakan bahasa daerah</td>\r\n			<td>bahasanya mudah dipahami</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Teks 1</th>\r\n			<th scope="col">Teks 2</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>menggunakan istilah-istilah khusus</td>\r\n			<td>banyak menggunakan istilah ilmiah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '#####<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Teks 1</th>\r\n			<th scope="col">Teks 2</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>banyak menggunakan istilah khusus</td>\r\n			<td>menggunakan istilah-istilah umum</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '#####', 'D', '2017-01-25 10:13:02', 0, 1),
(46, 6, 1, 1, '', '', '<p>Perlunya Resapan Air untuk Mencegah Banjir</p>\r\n\r\n<p>Banjir sudah menjadi agenda tahunan bagi masyarakat Indonesia. Tidak heran bila pemerintah berjuang keras dan mengeluarkan biaya yang sangat besar untuk menyelesaikan masalah ini. Membangun saluran air yang bagus merupakan salah satu cara pemerintah menanggulangi banjir. Namun, itu semua tidak akan berhasil apabila tidak diimbangi dengan pembangunan daerah resapan air. Jadi, resapan air ini merupakan syarat mutlak untuk menanggulangi banjir.</p>\r\n\r\n<p>Pendapat yang mendukung kutipan isi teks tersebut adalah ...</p>\r\n', '#####<p>Solusi tersebut hanya akan menghamburkan uang negara.</p>\r\n', '#####<p>Solusi seperti itu sudah tepat sehingga harus segera direalisasikan.</p>\r\n', '#####<p>Solusi yang dipilih pemerintah tidak akan mampu menanggulangi banjir</p>\r\n', '#####<p>Solusi tersebut masuk akal, tetapi sulit membangun resapan air di perkotaan.</p>\r\n', '#####<p>opsi E.13</p>\r\n', 'B', '2017-01-25 10:13:02', 0, 7),
(47, 6, 1, 1, '', '', '<p>Ternyata jeruk nipis bermanfaat dalam mengobati batuk. Buah ini memiliki kandungan berupa minyak asiri dan zat yang dapat bermanfaat mengendalikan otot-otot pernapasan sehingga mampu meredakan batuk. Adapun cara penggunaannya yaitu dengan cara meminum air perasan dari jeruk nipis yang dapat dicampur dengan madu, kecap atau gula sehingga rasa asamnya berkurang. (http://informasiana.com)</p>\r\n\r\n<p>Isi yang tersirat pada bagian teks tersebut adalah ....</p>\r\n', '#####<p>Jeruk nipis dapat dicampur dengan zat lainnya</p>\r\n', '#####<p>Jeruk nipis dapat ditanam di pekarangan rumah</p>\r\n', '#####<p>Jeruk nipis memiliki khasiat untuk menjaga kesehatan</p>\r\n', '#####<p>Jeruk nipis lebih berkhasiat dibandingkan jeruk lainnya</p>\r\n', '#####<p>opsi E.14</p>\r\n', 'C', '2017-01-25 10:13:02', 2, 4),
(48, 6, 1, 1, '', '', '<p>Ternyata jeruk nipis bermanfaat dalam mengobati batuk. Buah ini memiliki kandungan berupa minyak asiri dan zat yang dapat bermanfaat mengendalikan otot-otot pernapasan sehingga mampu meredakan batuk. Adapun cara penggunaannya yaitu dengan cara meminum air perasan dari jeruk nipis yang dapat dicampur dengan madu, kecap atau gula sehingga rasa asamnya berkurang. (http://informasiana.com)</p>\r\n\r\n<p>Ide pokok teks tersebut adalah ....</p>\r\n', '#####<p>manfaat jeruk nipis</p>\r\n', '#####<p>kandungan jeruk nipis</p>\r\n', '#####<p>campuran jeruk nipis</p>\r\n', '#####<p>cara penggunaan jeruk nipis</p>\r\n', '#####<p>opsi E.15</p>\r\n', 'A', '2017-01-25 10:13:02', 0, 2),
(49, 6, 1, 1, '', '', '<p>Kelestarian Lingkungan Hidup</p>\r\n\r\n<p>Lingkungan adalah sesuatu yang ada di sekitar manusia yang dapat memengaruhi kehidupan manusia. Lingkungan hidup adalah kesatuan ruang dengan benda dan kesatuan makhluk hidup termasuk manusia terlibat di dalamnya. Manusia harus menyadari bahwa lingkungan merupakan sarana pengembangan hidup yang harus dijaga kelestariannya.</p>\r\n\r\n<p>Dalam lingkungan hidup terdapat ekosistem, yaitu tatanan unsur lingkungan hidup yang merupakan kesatuan utuh menyeluruh dan saling memengaruhi dalam membentuk keseimbangan, stabilitas, dan produktivitas lingkungan hidup. Lingkungan hidup dapat dibedakan menjadi tiga, yaitu unsur hayati (biotik), unsur sosial budaya, dan unsur fisik (abiotik). Unsur hayati (biotik), yaitu unsur lingkungan hidup yang terdiri dari makhluk hidup, seperti manusia, hewan, tumbuhan dan jasad renik. Unsur sosial budaya, yaitu lingkungan sosial dan budaya yang dibuat oleh manusia berupa sistem nilai, gagasan, dan keyakinan dalam perilaku sebagai makhluk&nbsp;sosial. Unsur fisik (abiotik), yaitu unsur lingkungan hidup yang terdiri dari makhluk tak hidup, seperti tanah, air, iklim, udara dan lain sebagainya. Keberadaan unsur ini sangat besar bagi kelangsungan hidup segenap kehidupan di bumi.</p>\r\n\r\n<p>Simpulan isi teks tersebut adalah ...</p>\r\n', '#####<p>Manusia harus menjaga kelestarian lingkungan hidup.</p>\r\n', '#####<p>Manusia dapat memanfaatkan seluruh isi lingkungan hidup</p>\r\n', '#####<p>Seluruh unsur lingkungan hidup saling mempengaruhi demi kehidupan manusia.</p>\r\n', '#####<p>Unsur biotik, sosial budaya, dan abiotik harus dimanfaatkan manusia secara seimbang.</p>\r\n', '#####<p>opsi E.16</p>\r\n', 'A', '2017-01-25 10:13:02', 1, 0),
(50, 6, 1, 1, '', '', '<p>Kelestarian Lingkungan Hidup</p>\r\n\r\n<p>Lingkungan adalah sesuatu yang ada di sekitar manusia yang dapat memengaruhi kehidupan manusia. Lingkungan hidup adalah kesatuan ruang dengan benda dan kesatuan makhluk hidup termasuk manusia terlibat di dalamnya. Manusia harus menyadari bahwa lingkungan merupakan sarana pengembangan hidup yang harus dijaga kelestariannya.</p>\r\n\r\n<p>Dalam lingkungan hidup terdapat ekosistem, yaitu tatanan unsur lingkungan hidup yang merupakan kesatuan utuh menyeluruh dan saling memengaruhi dalam membentuk keseimbangan, stabilitas, dan produktivitas lingkungan hidup. Lingkungan hidup dapat dibedakan menjadi tiga, yaitu unsur hayati (biotik), unsur sosial budaya, dan unsur fisik (abiotik). Unsur hayati (biotik), yaitu unsur lingkungan hidup yang terdiri dari makhluk hidup, seperti manusia, hewan, tumbuhan dan jasad renik. Unsur sosial budaya, yaitu lingkungan sosial dan budaya yang dibuat oleh manusia berupa sistem nilai, gagasan, dan keyakinan dalam perilaku sebagai makhluk&nbsp;sosial. Unsur fisik (abiotik), yaitu unsur lingkungan hidup yang terdiri dari makhluk tak hidup, seperti tanah, air, iklim, udara dan lain sebagainya. Keberadaan unsur ini sangat besar bagi kelangsungan hidup segenap kehidupan di bumi.</p>\r\n\r\n<p>Informasi yang sesuai dengan isi teks tersebut adalah &hellip;.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '#####<p>Tanpa adanya unsur lingkungan hidup, manusia tidak hidup di bumi ini.</p>\r\n', '#####<p>Unsur abiotik tidak terlalu berpengaruh terhadap kelangsungan hidup manusia</p>\r\n', '#####<p>Unsur sosial budaya diciptakan oleh manusia untuk kelestarian kehidupan di bumi.</p>\r\n', '#####<p>Lingkungan hidup yang meliputi unsur biotik, sosial budaya, dan abiotik harus dijaga kelestariannya.</p>\r\n', '#####<p>opsi E.17</p>\r\n', 'D', '2017-01-25 10:13:02', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tr_guru_mapel`
--

CREATE TABLE `tr_guru_mapel` (
  `id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_guru_mapel`
--

INSERT INTO `tr_guru_mapel` (`id`, `id_guru`, `id_mapel`) VALUES
(3, 6, 1),
(4, 6, 2),
(5, 6, 3),
(9, 2, 1),
(10, 2, 2),
(12, 4, 1),
(13, 4, 2),
(14, 4, 3),
(16, 5, 1),
(17, 5, 2),
(18, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tr_guru_tes`
--

CREATE TABLE `tr_guru_tes` (
  `id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `nama_ujian` varchar(200) NOT NULL,
  `jumlah_soal` int(6) NOT NULL,
  `waktu` int(6) NOT NULL,
  `jenis` enum('acak','set') NOT NULL,
  `detil_jenis` varchar(500) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `terlambat` datetime NOT NULL,
  `token` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_guru_tes`
--

INSERT INTO `tr_guru_tes` (`id`, `id_guru`, `id_mapel`, `nama_ujian`, `jumlah_soal`, `waktu`, `jenis`, `detil_jenis`, `tgl_mulai`, `terlambat`, `token`) VALUES
(4, 6, 1, 'Ujian Akhir Semester Bahasa Indonesia', 1, 100, 'acak', '', '2018-05-07 15:50:00', '2018-05-25 18:00:00', 'BTGYF');

-- --------------------------------------------------------

--
-- Table structure for table `tr_ikut_ujian`
--

CREATE TABLE `tr_ikut_ujian` (
  `id` int(6) NOT NULL,
  `id_tes` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `list_soal` longtext NOT NULL,
  `list_jawaban` longtext NOT NULL,
  `jml_benar` int(6) NOT NULL,
  `nilai` decimal(10,2) NOT NULL,
  `nilai_bobot` decimal(10,2) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_ikut_ujian`
--

INSERT INTO `tr_ikut_ujian` (`id`, `id_tes`, `id_user`, `list_soal`, `list_jawaban`, `jml_benar`, `nilai`, `nilai_bobot`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(27, 2, 3, '46', '46::N', 0, '0.00', '0.00', '2018-05-18 23:42:18', '2018-05-19 16:22:18', 'N'),
(28, 4, 3, '50', '50::N', 0, '0.00', '0.00', '2018-05-19 11:32:06', '2018-05-19 13:12:06', 'Y'),
(29, 3, 3, '46', '46:C:N', 0, '0.00', '0.00', '2018-05-19 11:49:11', '2018-05-19 13:29:11', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_admin`
--
ALTER TABLE `m_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kon_id` (`kon_id`);

--
-- Indexes for table `m_guru`
--
ALTER TABLE `m_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_mapel`
--
ALTER TABLE `m_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_siswa`
--
ALTER TABLE `m_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `m_soal`
--
ALTER TABLE `m_soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tr_guru_mapel`
--
ALTER TABLE `tr_guru_mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tr_guru_tes`
--
ALTER TABLE `tr_guru_tes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tr_ikut_ujian`
--
ALTER TABLE `tr_ikut_ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tes` (`id_tes`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_admin`
--
ALTER TABLE `m_admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `m_guru`
--
ALTER TABLE `m_guru`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `m_mapel`
--
ALTER TABLE `m_mapel`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_siswa`
--
ALTER TABLE `m_siswa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `m_soal`
--
ALTER TABLE `m_soal`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tr_guru_mapel`
--
ALTER TABLE `tr_guru_mapel`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tr_guru_tes`
--
ALTER TABLE `tr_guru_tes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tr_ikut_ujian`
--
ALTER TABLE `tr_ikut_ujian`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tr_guru_tes`
--
ALTER TABLE `tr_guru_tes`
  ADD CONSTRAINT `tr_guru_tes_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `m_guru` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
