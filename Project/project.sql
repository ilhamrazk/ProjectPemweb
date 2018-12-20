-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2018 pada 20.57
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `category`) VALUES
(1, 'Seminar'),
(2, 'Entertaiment'),
(3, 'Sosial'),
(4, 'Festival'),
(5, 'Live Show'),
(6, 'Lomba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chart`
--

CREATE TABLE `tb_chart` (
  `id_chart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `id_jenis_pembayaran` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_chart`
--

INSERT INTO `tb_chart` (`id_chart`, `id_user`, `id_content`, `id_harga`, `id_jenis_pembayaran`, `jumlah`, `status`) VALUES
(3, 3, 3, 4, NULL, 4, 'chart'),
(13, 2, 1, 1, NULL, 3, 'chart'),
(15, 2, 4, 5, NULL, 3, 'chart'),
(16, 3, 1, 2, NULL, 3, 'chart');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id_comment` int(11) NOT NULL,
  `id_balas` int(11) DEFAULT NULL,
  `id_content` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_comment`
--

INSERT INTO `tb_comment` (`id_comment`, `id_balas`, `id_content`, `id_user`, `time`, `comment`) VALUES
(1, NULL, 1, 3, 1494852210, 'Waah kelewatan...'),
(2, 1, 1, 1, 1495502534, 'iya nih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_content`
--

CREATE TABLE `tb_content` (
  `id_content` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `date` date NOT NULL,
  `kuota` int(11) NOT NULL DEFAULT '0',
  `max_order` int(11) NOT NULL DEFAULT '10',
  `location` varchar(50) NOT NULL,
  `time` varchar(5) NOT NULL DEFAULT '00:00',
  `content` text NOT NULL,
  `path_img` varchar(60) NOT NULL,
  `dilihat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_content`
--

INSERT INTO `tb_content` (`id_content`, `id_category`, `title`, `date`, `kuota`, `max_order`, `location`, `time`, `content`, `path_img`, `dilihat`) VALUES
(1, 2, 'Tuhan Maha Asyik Bersama Sujiwo Tejo', '2017-05-06', 100, 5, 'UMM Dome', '08:00', 'Sabtu, 6 Mei 2017\r\nJam 08.00\r\nAt Theater UMM Dome\r\n\r\nPerformance :\r\n\r\n    Keroncong Malang Wara\r\n    Brawijaya University Student Choir\r\n\r\n\r\nTiket :\r\n\r\n    Presale 39K\r\n    OTS 45\r\n    VIP 60K\r\n\r\n\r\nMore info :\r\nTwitter @diwangkaraEO\r\nHani  085233052649\r\nFirda 085608692423', 'event1.jpg', 5),
(2, 2, 'MALANG MODS MAYDAY 2017 \"Shout Out To The Top!\"', '2017-05-14', 20, 10, 'Brawijaya Edupark (ex Taman Senaputra)', '14:00', 'BE READY! \r\nprepare your scooter, prepare your energy, we will rock the road and the dance floor!\r\nMALANG MODS MAYDAY 2017 \"Shout Out To The Top!\"\r\n\r\nMark ur calender! \r\n? May 14th 2017\r\n? Brawijaya Edupark (ex Taman Senaputra)\r\n? 14.00-till drop\r\nmeeting point at Taman krida\r\nStart Riding 12.00\r\n \r\n\r\nWill be very exciting with the special performance by\r\n-Noman\'sland\r\n-Ultraviolence\r\n-Skarasa\r\n-Gingerstone\r\n-Gloriousfriends\r\n-Guns\r\n-Stressout\r\n-Self revolution\r\nand will get more fun with the performance by the selectors\r\n-Iqbal Djoha\r\n-Gimanzz\r\n-Soulkids\r\n\r\nThere will be many uniqe booths to complete your taste of mods!\r\n\r\nDONT FORGET to Dress up in an unique outfit because there will be an ootd contest!\r\n\r\nHTM:15K\r\n\r\nsave the date guyss!! We are waiting for you all', 'event2.jpg', 5),
(3, 2, 'BHFF (Brawijaya Halal Food Fair): BAAZAR FOOD HALAL', '2017-05-13', 0, 10, 'Depan gedung F FTP UB', '07:30', '[INFO PENTING]\r\nAssalamualaikum wr. wb\r\nBismillahirrahmanirrahim.....\r\n?FORKITA (Forum Kajian Islam Teknologi Pertanian) UB present BHFF (Brawijaya Halal Food Fair) ? :\r\n? BAAZAR FOOD HALAL\r\nSyarat dan Ketentuan Berlaku\r\n? Sabtu, 13 Mei 2017\r\n? 07.30-selesai\r\n? Depan gedung F FTP UB\r\n\r\n? WORKSHOP\r\nPemateri :\r\n1. Prof. dr. H. Sugijanto. M.S (Ketua LPPOM MUI JATIM)\r\n2. Muhammad Nadjikh (Exporter Seafood)\r\n?Fasilitas ?\r\n1. Ilmu bermafaat\r\n2. Snack&lunch kupon\r\n3. Seminar kit\r\n4. Sertifikat\r\n5. Pelatihan pengisian borang PJH\r\n? Sabtu, 13 Mei 2017\r\n? 07.30-14.00\r\n? Aula FTP UB\r\n? (Offline&Online) presale 1 : 30K ----- OTS : 35K\r\n\r\n?AKSI PANGAN HALAL\r\nHTM : FREE\r\n? Minggu, 14 Mei 2017\r\n? Car Free Day Ijen\r\n\r\nYuk segera beli tiketnya sebelum kehabisan dan datang di aksi pangan halal !!!!\r\n\r\nFormat Pendaftaran :\r\nNama lengkap_Asal daerah/Fakultas/Universitas_no.telp\r\nCp : Ma\'mun 087815458474 ------ Nuriyya 081282675758\r\n\r\nFor Information :\r\n? Line : @exe3903a\r\n? Instagram : bhffofficial\r\n? Website : bhff.tp.ub.ac.id\r\n? Twitter : @bhffofficial\r\n? Facebook : Brawijaya Halal Food Fair', 'event3.jpg', 5),
(4, 1, 'BHFF (Brawijaya Halal Food Fair): WORKSHOP', '2017-05-13', 0, 10, 'Aula FTP UB', '07:30', '[INFO PENTING]\r\nAssalamualaikum wr. wb\r\nBismillahirrahmanirrahim.....\r\n?FORKITA (Forum Kajian Islam Teknologi Pertanian) UB present BHFF (Brawijaya Halal Food Fair) ? :\r\n? BAAZAR FOOD HALAL\r\nSyarat dan Ketentuan Berlaku\r\n? Sabtu, 13 Mei 2017\r\n? 07.30-selesai\r\n? Depan gedung F FTP UB\r\n\r\n? WORKSHOP\r\nPemateri :\r\n1. Prof. dr. H. Sugijanto. M.S (Ketua LPPOM MUI JATIM)\r\n2. Muhammad Nadjikh (Exporter Seafood)\r\n?Fasilitas ?\r\n1. Ilmu bermafaat\r\n2. Snack&lunch kupon\r\n3. Seminar kit\r\n4. Sertifikat\r\n5. Pelatihan pengisian borang PJH\r\n? Sabtu, 13 Mei 2017\r\n? 07.30-14.00\r\n? Aula FTP UB\r\n? (Offline&Online) presale 1 : 30K ----- OTS : 35K\r\n\r\n?AKSI PANGAN HALAL\r\nHTM : FREE\r\n? Minggu, 14 Mei 2017\r\n? Car Free Day Ijen\r\n\r\nYuk segera beli tiketnya sebelum kehabisan dan datang di aksi pangan halal !!!!\r\n\r\nFormat Pendaftaran :\r\nNama lengkap_Asal daerah/Fakultas/Universitas_no.telp\r\nCp : Ma\'mun 087815458474 ------ Nuriyya 081282675758\r\n\r\nFor Information :\r\n? Line : @exe3903a\r\n? Instagram : bhffofficial\r\n? Website : bhff.tp.ub.ac.id\r\n? Twitter : @bhffofficial\r\n? Facebook : Brawijaya Halal Food Fair', 'event3.jpg', 5),
(5, 3, 'BHFF (Brawijaya Halal Food Fair): AKSI PANGAN HALAL', '2017-05-14', 0, 10, 'Car Free Day Ijen', '07:30', '[INFO PENTING]\r\nAssalamualaikum wr. wb\r\nBismillahirrahmanirrahim.....\r\n?FORKITA (Forum Kajian Islam Teknologi Pertanian) UB present BHFF (Brawijaya Halal Food Fair) ? :\r\n? BAAZAR FOOD HALAL\r\nSyarat dan Ketentuan Berlaku\r\n? Sabtu, 13 Mei 2017\r\n? 07.30-selesai\r\n? Depan gedung F FTP UB\r\n\r\n? WORKSHOP\r\nPemateri :\r\n1. Prof. dr. H. Sugijanto. M.S (Ketua LPPOM MUI JATIM)\r\n2. Muhammad Nadjikh (Exporter Seafood)\r\n?Fasilitas ?\r\n1. Ilmu bermafaat\r\n2. Snack&lunch kupon\r\n3. Seminar kit\r\n4. Sertifikat\r\n5. Pelatihan pengisian borang PJH\r\n? Sabtu, 13 Mei 2017\r\n? 07.30-14.00\r\n? Aula FTP UB\r\n? (Offline&Online) presale 1 : 30K ----- OTS : 35K\r\n\r\n?AKSI PANGAN HALAL\r\nHTM : FREE\r\n? Minggu, 14 Mei 2017\r\n? Car Free Day Ijen\r\n\r\nYuk segera beli tiketnya sebelum kehabisan dan datang di aksi pangan halal !!!!\r\n\r\nFormat Pendaftaran :\r\nNama lengkap_Asal daerah/Fakultas/Universitas_no.telp\r\nCp : Ma\'mun 087815458474 ------ Nuriyya 081282675758\r\n\r\nFor Information :\r\n? Line : @exe3903a\r\n? Instagram : bhffofficial\r\n? Website : bhff.tp.ub.ac.id\r\n? Twitter : @bhffofficial\r\n? Facebook : Brawijaya Halal Food Fair', 'event3.jpg', NULL),
(6, 6, 'Lomba Karya Tulis Ilmiah Nasional 2017 Goresan Pena Sosial', '2017-05-27', 0, 1, 'FISIP Universitas Brawijaya', '00:00', 'HIMASIGI BRAWIJAYA PROUDLY PRESENT\r\n.\r\nLomba Karya Tulis Ilmiah Nasional 2017\r\n? Goresan Pena Sosial ? [ GPS 2017 OPEN REGISTRATION ???]\r\n.\r\nHalo Inovator Muda!\r\nKini yang ditunggu-tunggu telah tiba! ? Goresan Pena Sosial sebagai ajang lomba Karya Tulis Ilmiah Tingkat Nasional telah \r\n\r\nmembuka pendaftaran! Dare to run the world?\r\n.\r\n? Tema? :\r\n\"Reorientasi Pembangunan Melalui Sustainable Development Goals (SDGs)\"\r\n.\r\n?  Pendaftaran dan Pembayaran :  27 April- 27 Juni 2017\r\n\r\n.\r\n?  Biaya Pendaftaran :\r\n- Rp 120.000/Team/KTI(Karya Tulis)\r\n- Pembayaran dapat dilakukan melalui Rekening Bank BRI ( 0051-01-152467-50-1), dan Rekening Bank Mandiri ( 106-00-1143039\r\n\r\n-7 ) A/N Giofanni Christia Monna\r\n.\r\n? Total hadiah untuk Juara 1, 2, dan 3 akan mendapatkan total uang Rp. 9.000.000,00,- beserta Trophy dan Sertifikat, loh! \r\n\r\n?\r\n.\r\n(?? Semua partisipan akan mendapat e-certificate)\r\n.\r\nLumayan banget kan? Jadi,  tunggu apa lagi? Daftarkan tim kamu melalui link website kami: \r\nhttps://gpsosial.wordpress.com/pendaftaran/\r\n.\r\n? Got any questions? Please don’t hesitate to contact us below! ?\r\nCP :\r\n- Rizky : 0878 5094 9681 / ID Line: rizkynps97\r\n- Mytha : 0822 2655 3418 / ID Line: mythaaulia\r\n- Anggi : 0812 9892 9963 / ID Line: angjosarah\r\n.\r\n? More informations and updates ? :\r\nLine: @xuc7852h\r\nWebsite: https://gpsosial.wordpress.com/\r\nTwitter: @GPS_Brawijaya\r\nInstagram: @goresanpenasosial\r\nEmail: Gpsos2017@gmail.com', 'event4.jpg', NULL),
(7, 4, 'AQUAFEST 2017', '2017-05-20', 0, 10, 'Lap. Basket FPIK UB', '18:30', '? Halo Aquascaper kota Malang, Himpunan Mahasiswa Prodi Budidaya Perairan UB Proudly Presents: \r\n\"AQUAFEST 2017\" ? dengan tema \"INFINISEA\" yang akan diadakan pada:\r\n\r\n? Saturday, 20 May 2017\r\n? Open Gate : 18.30 WIB \r\n? Lap. Basket FPIK UB\r\n\r\nDisana akan ada :\r\n- Aquascape yang menarik hasil kreativitas mahasiswa Budidaya Perairan\r\n- Acoustic and band performing, \r\n- Bazar makanan dan minuman\r\n- and many more\r\n\r\nSelain itu, ada spesial performance dari :\r\n**The Apple Boys? dan Projek Rahasia?**\r\n\r\nHTM:\r\n?presale: 3k\r\n?OTS: 5k\r\n*include coffee 1 cup for the first 150 registrant\r\n*doorprize stuff & aquascape accesories \r\n\r\nDan bukan hanya itu lhoo,\r\nHTM yang teman teman bayarkan nantinya akan didonasikan sepenuhnya untuk sahabat sahabat anak kanker..\r\n\r\nSo, tunggu apa lagi?? Buruan pesen tiketnya jangan sampai kehabisan..^^\r\nJangan lupa datang yaa, kalian bisa nambah pengetahuan tentang aquascape juga loo.. Seeyouu..\r\n\r\nMore info for ticketing:\r\n?cp: Ivana \r\nwa: 085655338827\r\nline: ivanagstn', 'event5.jpg', NULL),
(8, 4, ' BRAWIJAYA FASHION WEEK 2017 “Fashion as Statement”', '2017-05-21', 0, 10, 'Taman Krida Budaya', '08:00', 'miXth Event Organizer proudly presents:\r\n\r\n        BRAWIJAYA FASHION WEEK 2017\r\n        “Fashion as Statement”\r\n\r\nThe biggest fashion event in town is coming back this month! With an endeavor to initiate a fresh framework towards \r\n\r\nfashion, #bfw2017 intends to seek an alternative outlook to provoke the establishment of fashion as a statement.\r\n\r\nThese are the things you\'ll find on #bfw2017\r\n\r\n? Fashion Show\r\n- Hvrmas Avigail\r\n- A&R\r\n- Ethica\r\n- Namine by Brahim Chandra\r\n- Hijab Chic\r\n- Adora by Natasha Gabe W\r\n- Fndlabels by Kiki Mahendra\r\n- D.N.I by Arief Susanto\r\n\r\n? Talkshow\r\n- Rachel Goddard\r\n- Janine Intansari\r\n- Aghnia Punjabi\r\n\r\n? Music Performances\r\n- Janitra Satriani\r\n- Coldiac\r\n- Also featuring special performances from the winner of our band audition\r\n\r\n? Beauty Class by Sariayu\r\n\r\n? Fashion and Culinary Bazaar with more than 60 tenants!\r\n\r\nMark the dates:\r\n? 20-21st of May 2017\r\n? Taman Krida Budaya Malang\r\nOTS Ticket : 13K/day\r\n\r\nStay tuned @bfw2017 for more updates! See you there!\r\n\r\nMiXth Event Organizer\r\nInstagram : @eo_miXth / @bfw2017\r\nTwitter : @eo_miXth\r\nEmail : eo.mixth@gmail.com', 'event6.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_harga` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_harga`
--

INSERT INTO `tb_harga` (`id_harga`, `id_content`, `kategori`, `harga`) VALUES
(1, 1, 'Presale', '39000'),
(2, 1, 'VIP', '60000'),
(3, 2, 'Regular', '15000'),
(4, 3, 'Regular', '0'),
(5, 4, 'Presale 1', '30000'),
(6, 5, 'Regular', '0'),
(7, 6, 'Umum', '120000'),
(8, 7, 'Presale', '3000'),
(9, 8, 'Regular', '13000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_image`
--

CREATE TABLE `tb_image` (
  `id_image` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_image`
--

INSERT INTO `tb_image` (`id_image`, `id_content`, `path`) VALUES
(1, 1, 'event1.jpg'),
(2, 2, 'event2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(80) NOT NULL DEFAULT 'profile/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `fullname`, `email`, `phone`, `password`, `id_prodi`, `birthdate`, `photo`) VALUES
(15, 'dikaperdanasinaga', 'Dika Perdana Sinaga', 'dikaperdanasinaga@gmail.com', '81377186230', '$2y$10$r1lS./c3RkLEAetp3hsIgOc.jg2FDBL46yDwxuoqslox0GUzWlGHK', 0, '0000-00-00', 'profile/user.png'),
(18, 'timtompimpom', 'Timothy', 'timtompimpom@gmail.com', '81377186230', '$2y$10$mG6DZ7lzxSKTsRhy6/q3m.Y..z7vZTlqgffThFJeEp2TqMPyYvdKa', 0, '0000-00-00', 'profile/user.png'),
(19, 'foxreap', 'Timothy', 'marbeelz32@gmail.com', '81350528725', '$2y$10$Dhe6FEEDMv7DT3Cu2LRE1e/cN4ADgVJK8gkb0vtYyEeoigEVzJdbu', 0, '0000-00-00', 'profile/user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_chart`
--
ALTER TABLE `tb_chart`
  ADD PRIMARY KEY (`id_chart`),
  ADD UNIQUE KEY `id_user` (`id_user`,`id_content`,`id_harga`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `tb_content`
--
ALTER TABLE `tb_content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `tb_image`
--
ALTER TABLE `tb_image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_chart`
--
ALTER TABLE `tb_chart`
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_content`
--
ALTER TABLE `tb_content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_image`
--
ALTER TABLE `tb_image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
