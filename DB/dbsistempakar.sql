-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Jan 2021 pada 05.30
-- Versi server: 8.0.18
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsistempakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Adminweb@yahoo.com', '', 'agrobiju6k4kibm9n7iffokgh1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(2) NOT NULL,
  `pertanyaan` text NOT NULL,
  `ifyes` int(1) NOT NULL,
  `ifno` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `pertanyaan`, `ifyes`, `ifno`) VALUES
(1, 'Apakah anak anda selalu cemas pada kehidupan sehari-hari ?', 2, 7),
(2, 'Apakah anak anda selalu menghindar dari situasi ramai atau di tempat umum atau berpergian sendiri ?', 5, 3),
(3, 'Apakah anak anda selalu cemas ketika berada diluar lingkungan keluarga ?', 4, 5),
(4, 'Apakah anak anda selalu ketakutan sendiri pada situasi tertentu ?', 5, 7),
(5, 'Apakah anak anda selalu merasa kesulitan berkonsentrasi pada saat kegiatan ?', 8, 6),
(6, 'Apakah anak anda selalu Overaktivitas ?', 16, 8),
(7, 'Apakah anak anda Stress pada saat menemukan masalah ?', 9, 19),
(8, 'Apakah anak anda memiliki Ketidakstabilan menetap dari afek perasaan (suasana perasaan) ?', 11, 12),
(9, 'Apakah anak anda terlihat peningkatan aktivitas ?', 23, 10),
(10, 'Apakah anak anda mengalami Gejala ini sejak dini ?', 12, 13),
(11, 'Apakah anak anda merasakan Kehilangan minat dan kegembiraan ?', 10, 12),
(12, 'Apakah anak anda selalu merasakan mudah lelah', 18, 23),
(13, 'Apakah anak anda merasakan Konsentrasi dan perhatian berkurang ?', 21, 14),
(14, 'Apakah anak anda Selalu merasa bersalah atau tidak berguna ?', 25, 24),
(15, 'Apakah anak anda tidurnya terganggu ?', 25, 23),
(16, 'Apakah anak anda nafsu makannya berkurang ?', 21, 24),
(17, 'Apakah anak anda mengalami gangguan ini selama 2 minggu ?', 23, 24),
(18, 'Apakah anak anda mengalami gejala ini setiap hari ?', 21, 21),
(19, 'Apakah anak anda mengalami stress seolah merasa kehidupan yang penuh masalah ?', 23, 24),
(20, 'Apakah anak anda mengalami Afek Depresif ?', 24, 25),
(21, 'Hasil Diagnosa Sistem Pakar Mengatakan Anda Terdiagnosa Gangguan Delusi.<br><br>Keterangan : Kisaran usia pada gangguan delusi adalah 55 – 75 tahun, tetapi dapat terjadi kapan saja. Gangguan Delusi bisa muncul dari adanya gangguan kepribadian paranoid yang sudah ada sebelumnya.Sejak awal masa dewasa, orang-orang dengan gangguan kepribadian paranoid memiliki rasa ketidakpercayaan dan kecurigaan akan orang lain dan motif mereka<br><br>\r\nPengobatan : Penderita sebaiknya dirawat dirumah sakit dan  melakukan terapi.Terapi yang dapat diberikan yaitu : psikoterapi yang dikombinasi dengan farmakoterapi\r\n<br>\r\n<a href=\"cetak.php\" ><font color=\'#0000FF\'>Cetak Hasil Konsultasi</font></a>', 0, 0),
(22, 'Anda Tidak Terdiagnosa Kelainan Psikologi Pada Lanjut Usia', 0, 0),
(23, 'Hasil Diagnosa Sistem Pakar Mengatakan Anda Terdiagnosa Kelainan Depresi.<br><br>Keterangan : Suatu kondisi mental yang berlebihan dari suatu keadaan sedih, yang sampai menyebabkan terganggunya aktivitas sosial sehari-hari.<br><br>\r\nPengobatan : •Mengadakan pertemuan atau aktivitas berkumpul dengan banyak orang sehingga dapat melakukan pertukaran informasi dengan orang lain sehingga dapat membangkitkan semangat hidup.<br>\r\n•Kontak sosial dilakukan dengan cara menulis surat, mengirim email, menulis pesan lewat media elektronik atau media publikasi tertulis.<br>\r\n•Mengisi waktu dengan aktivitas ringan seperti seperti menonton televisi, menyiram bunga, olahraga, mendengarkan radio, atau hobi lainnya untuk mengisi waktu dan menghilangkan kebosanan sehingga dapat menimbulkan perasaan senang.<br>\r\n•Menanamkan pikiran untuk berani beradaptasi dengan perubahan yang ada. Menggap masa tua adalah kesempatan untuk melakukan hal-hal yang sebelumnya ketika masih muda tidak dapat dilakukan karena kesibukan pekerjaan dan lain sebagainya.<br>\r\n•Selalu berusaha untuk berpikir positif, karena segala hal yang dilakukan akan menjadi lebih menyenangkan dan membahagiakan jika segala sesuatunya dilihat dari sisi positifnya. Dengan begitu, pada akhirnya dapat memberikan kepuasan bagi dirinya sendiri.\r\n<br>\r\n<br>\r\n<a href=\"cetakdepresi.php\" ><font color=\'#0000FF\'>Cetak Hasil Konsultasi</font></a>', 0, 0),
(24, 'Hasil Diagnosa Sistem Pakar Mengatakan Anda Terdiagnosa Kelainan Demensia.<br><br>Keterangan : Demensia adalah suatu gangguan intelektual / daya ingat yang umumnya progresif dan ireversibel.<br><br>\r\nPengobatan : Jika Anda terdagnosa penyakit tersebut maka perlu anda melakukan beberapa pencegahan seperti berikut:<br>\r\n1.Makan Ikan<br>\r\n2.Jangan Stres<br>\r\n3.Tidur Cukup<br>\r\n4.Hindari Alkohol<br>\r\n5.Selalu Bersosialisasi<br>\r\n6.Hindari Junk Food<br>\r\n7.Menjaga Kesehatan Jantung\r\n<br>\r\n<a href=\"cetakdemensia.php\" ><font color=\'#0000FF\'>Cetak Hasil Konsultasi</font></a>', 0, 0),
(25, 'Hasil Diagnosa Sistem Pakar Mengatakan Anda Terdiagnosa Kelainan Gangguan Tidur.<br><br>Keterangan : Usia lanjut adalah faktor tunggal yang paling sering berhubungan dengan peningkatan prevalensi gangguan tidur. Fenomena yang sering dikeluhkan lansia daripada usia dewasa muda adalah :\r\na.	Gangguan tidur,<br>\r\nb.	Ngantuk siang hari,<br>\r\nc.	Tidur sejenak di siang hari,<br>\r\nd.	Pemakaian obat hipnotik.<br>\r\n<br>\r\nPengobatan : Cara Mengatasi Gangguan Tidur Pada Lansia Adalah:<br>\r\n1.Senam Wajah Ringan <br>\r\n2.Mengkonsumsi Buah-Buahan Manis <br>\r\n3.Hindari Kafein <br>\r\n4.Mengatur Pernafasan <br>\r\n5.Berdoa Sebelum Tidur\r\n<br>\r\n<a href=\"cetaktidur.php\" ><font color=\'#0000FF\'>Cetak Hasil Konsultasi</font></a>', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_gejala`
--

CREATE TABLE `master_gejala` (
  `id` smallint(6) NOT NULL,
  `master_gejala` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_gejala`
--

INSERT INTO `master_gejala` (`id`, `master_gejala`) VALUES
(1, 'Kecemasan saat harus berada di situasi yang ramai'),
(2, 'Berusaha menghindar dari situasi ramai atau di tempat umum atau berpergian sendiri'),
(3, 'Rasa cemas ketika berada diluar lingkungan keluarga'),
(4, 'Memiliki ketakutan sendiri pada situasi tertentu'),
(5, 'Sulit berkonsentrasi'),
(6, 'Overaktivitas otonomik'),
(7, 'Stress akan kehidupan yang penuh masalah'),
(8, 'Ketidakstabilan menetap dari afek perasaan (suasana perasaan)'),
(9, 'Peningkatan aktivitas'),
(10, 'Gejala dimulai sejak dini'),
(11, 'Kehilangan minat dan kegembiraan'),
(12, 'Berkurangnya energy yang menuju meningkatnya keadaan mudah lelah'),
(13, 'Konsentrasi dan perhatian berkurang'),
(14, 'Selalu merasa bersalah atau tidak berguna'),
(15, 'Tidur terganggu'),
(16, 'Nafsu makan berkurang'),
(17, 'Gangguan tersebut dialami sekurang-kurangnya 2 minggu'),
(18, 'Gejala tampak setiap hari'),
(19, 'Stress seolah merasa kehidupan yang penuh masalah'),
(20, 'Afek Depresif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_penyakit`
--

CREATE TABLE `master_penyakit` (
  `id` smallint(6) NOT NULL,
  `master_penyakit` varchar(50) NOT NULL,
  `nilai_temuan` smallint(6) DEFAULT NULL,
  `definisi` text NOT NULL,
  `solusi` text NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_penyakit`
--

INSERT INTO `master_penyakit` (`id`, `master_penyakit`, `nilai_temuan`, `definisi`, `solusi`, `nilai`) VALUES
(1, 'Attention Deficit Hyperactivity Disorder', 10, 'ADHD atau Attention-deficit hyperactivity disorder, adalah gangguan jangka panjang yang menyerang anak-anak, yang ditandai dengan perilaku impulsif, hiperaktif, dan kurangnya perhatian.', 'Jika Anda terdagnosa penyakit tersebut maka perlu anda melakukan beberapa pencegahan seperti berikut:<br>\r\n1.Obat-obatan<br>\r\n2.CBT (cognitive behavioural therapy)<br>\r\n3.Tidur Cukup<br>\r\n4.Terapi psikologi<br>\r\n5.Pelatihan interaksi sosial.<br>\r\n', '60'),
(2, 'Autisme', 16, 'Autisme merupakan gangguan perkembangan fungsi otak. Gangguan ini mencakup bidang sosial dan fungsi afek, komunikasi verbal (bahasa) dan non verbal, imajinasi, fleksibilitas, lingkup interest (minat), kognisi dan atensi.', '•Edukasi kepada keluarga.<br>\r\nKeluarga memiliki peran yang penting dalam membantu perkembangan anak. Bagaimanapun juga, orang tua adalah orang terdekat yang dapat membantu anak untuk belajar berkomunikasi, berperilaku terhadap lingkungan dan orang sekitar. Bisa dibilang keluarga adalah jendela bagi penderita autisme untuk masuk ke dunia luar.<br>\r\n\r\n•Penggunaan obat-obatan<br>\r\nPenggunaan obat-obatan pada penderita autisme harus dibawah pengawasan dokter. Pengobatan ini diberikan jika dicurigai terdapat gangguan di otak yang mengganggu pusat emosi dari penderita autisme. Hal ini seringkali menimbulkan gangguan emosi mendadak, agresifitas, hiperaktif dan stereotipik. Beberapa obat yang bisa diberikan adalah haloperidol (antipsikotik), fenfluramin, naltrexone (antiopiat), clompramin (mengurangi kejang dan perilaku agresif).<br>', '48'),
(3, 'ODD (Oppositional Defiant Disorder)', 75, 'ODD atau oppositional defiant disorder adalah gangguan perilaku yang sering muncul di masa kanak-kanak dengan gejala berupa mudah marah dan tersinggung. Penderita ODD juga kerap menunjukkan sikap membangkang dan mendendam.', 'Perawatan sedini mungkin bisa berguna untuk mencegah masalah di masa mendatang. Penanganannya tergantung pada gejala, usia, kesehatan anak, dan tingkat keparahan yang dialami. Berikut di antaranya:<br>\r\n1. Terapi Perilaku Kognitif <br>\r\n2. Terapi Keluarga <br>\r\n3. Terapi Kelompok Sebaya <br>\r\n4. Konsumsi Obat', '70'),
(4, 'Conduct disorder', 99, 'Conduct disorder adalah gangguan perilaku dan emosi serius yang membuat anak menunjukkan perilaku kekerasan, suka merusak benda tertentu, dan cenderung sulit mengikuti aturan di sekolah maupun di rumah. <br>\r\nAnak yang memiliki gangguan perilaku jenis ini biasanya gemar berbohong dan menipu, bahkan tidak segan melakukan perbuatan yang melanggar hukum, seperti vandalisme, berkelahi, atau melukai orang lain. Anak-anak yang memilki gangguan perilaku conduct disorder juga mungkin suka menyiksa hewan.', 'Cara Mengatasi Conduct Disorder Pada Anak Adalah:<br>\r\n•Untuk menentukan jenis gangguan perilaku, psikiater dan psikolog dapat melakukan pemeriksaan psikologi pada anak. Setelah jenis gangguan perilaku pada anak diketahui, ia mungkin akan mendapatkan penanganan berupa psikoterapi, terapi bermain, atau mendapatkan obat-obatan, jika diperlukan. <br>\r\n\r\n•Mendidik anak dengan gangguan perilaku memang tidak mudah. Para orang tua yang anaknya memiliki gangguan perilaku perlu bersabar dan memberikan perhatian serta kasih sayang lebih kepada anak. Jangan ragu untuk meminta saran dari psikolog atau psikiater terkait cara tepat mendidik dan membimbing anak dengan gangguan ini.', '65');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` smallint(6) NOT NULL,
  `id_penyakit` smallint(6) DEFAULT NULL,
  `id_gejala` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_penyakit`, `id_gejala`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 2, 1),
(15, 2, 3),
(16, 2, 5),
(17, 2, 8),
(18, 2, 9),
(19, 2, 10),
(20, 2, 12),
(21, 2, 13),
(22, 2, 14),
(23, 2, 15),
(24, 2, 16),
(25, 3, 1),
(26, 3, 3),
(27, 3, 5),
(28, 3, 8),
(29, 3, 9),
(30, 3, 10),
(31, 3, 17),
(58, 5, 19),
(57, 5, 18),
(59, 5, 20),
(35, 6, 21),
(36, 6, 22),
(37, 6, 1),
(38, 7, 1),
(39, 7, 2),
(40, 7, 3),
(64, 9, 1),
(65, 9, 2),
(66, 9, 3),
(78, 11, 18),
(79, 11, 19),
(80, 11, 20),
(81, 0, 18),
(82, 0, 19),
(83, 0, 20),
(99, 12, 20),
(98, 12, 4),
(87, 13, 2),
(88, 13, 3),
(89, 13, 4),
(90, 14, 8),
(91, 14, 10),
(92, 14, 15),
(95, 15, 1),
(94, 13, 1),
(96, 15, 8),
(97, 15, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `keterangan` varchar(80) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jk`, `alamat`, `pekerjaan`, `keterangan`, `tanggal`) VALUES
(4, 'jono', 'L', 'padang', '', '', '2015-06-15 09:39:59'),
(5, 'lala', 'L', 'padang', '', '', '2015-06-21 19:29:57'),
(19, ' a', 'P', ' a', 'a', '', '2021-01-05 11:04:35'),
(20, 'Nama', 'P', 'ALAMAT', '76', 'orang tua', '2021-01-05 11:06:05'),
(21, 'abc', 'P', 'def', 'def', 'def', '2021-01-05 12:29:28'),
(22, 'Nama', 'P', 'Alamat2', '76', 'abcde', '2021-01-08 16:34:39'),
(23, 'z', 'P', 'alamat', '5', 'orang', '2021-01-09 18:36:51'),
(24, 'avc', 'P', 'aaa', 'a', 'abcd', '2021-01-09 18:37:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `master_gejala`
--
ALTER TABLE `master_gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gejala` (`master_gejala`);

--
-- Indeks untuk tabel `master_penyakit`
--
ALTER TABLE `master_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_penyakit` (`master_penyakit`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_gejala`
--
ALTER TABLE `master_gejala`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `master_penyakit`
--
ALTER TABLE `master_penyakit`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
