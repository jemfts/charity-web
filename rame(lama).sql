-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 03:46 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rame`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Rame', 'rameinajaweb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `dftr_yayasan`
--

CREATE TABLE IF NOT EXISTS `dftr_yayasan` (
  `id_yayasan` int(11) NOT NULL AUTO_INCREMENT,
  `nm_yayasan` varchar(50) NOT NULL,
  `nm_penanggungjwb` varchar(50) NOT NULL,
  `nm_pemohon` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_yayasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dftr_yayasan`
--

INSERT INTO `dftr_yayasan` (`id_yayasan`, `nm_yayasan`, `nm_penanggungjwb`, `nm_pemohon`, `no_telp`, `alamat`, `email`, `status`) VALUES
(1, 'Yayasan Cinta Mereka', 'idzni', 'Rere', '081310503787', 'Tanah Abang', 'annisajema@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_barang`
--

CREATE TABLE IF NOT EXISTS `donasi_barang` (
  `id_donasi_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nm_pengirim` varchar(50) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `jml_brg` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`id_donasi_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donasi_barang`
--

INSERT INTO `donasi_barang` (`id_donasi_barang`, `nm_pengirim`, `nm_brg`, `jml_brg`, `no_telp`, `email`, `status`) VALUES
(1, 'joni', 'buku novel', '5', '0856783983598', 'annisajema23@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_jasa`
--

CREATE TABLE IF NOT EXISTS `donasi_jasa` (
  `id_donasi_jasa` int(11) NOT NULL AUTO_INCREMENT,
  `nm_lengkap` varchar(50) NOT NULL,
  `usia` varchar(3) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pend_akhir` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`id_donasi_jasa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donasi_jasa`
--

INSERT INTO `donasi_jasa` (`id_donasi_jasa`, `nm_lengkap`, `usia`, `alamat`, `no_telp`, `pend_akhir`, `email`, `status`) VALUES
(1, 'rere', '21', 'jl. semangka 3', '08568749348', 'S1', 'annisajema23@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `donasi_uang`
--

CREATE TABLE IF NOT EXISTS `donasi_uang` (
  `id_donasi_uang` int(11) NOT NULL AUTO_INCREMENT,
  `nm_donatur` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jml_uang` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_donasi_uang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donasi_uang`
--

INSERT INTO `donasi_uang` (`id_donasi_uang`, `nm_donatur`, `alamat`, `jml_uang`, `no_telp`, `email`, `status`) VALUES
(1, 'Irsalina Idzni', 'Tangerang', '2000000', '080123456789', 'annisajema23@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(10) NOT NULL AUTO_INCREMENT,
  `nm_lengkap` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_donasi`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_donasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) DEFAULT NULL,
  `yayasan` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `jml` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_detail_donasi`
--

INSERT INTO `tbl_detail_donasi` (`id`, `order_id`, `yayasan`, `qty`, `jml`) VALUES
(1, 1, 1, 1, '1'),
(2, 2, 6, 1, '1'),
(3, 3, 8, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donasi`
--

CREATE TABLE IF NOT EXISTS `tbl_donasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id`, `tanggal`, `pelanggan`) VALUES
(1, '2018-06-29', 1),
(2, '2018-06-29', 1),
(3, '2018-06-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Uang'),
(2, 'Barang'),
(3, 'Jasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yayasan`
--

CREATE TABLE IF NOT EXISTS `tbl_yayasan` (
  `id_yayasan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_yayasan` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `jml` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_yayasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_yayasan`
--

INSERT INTO `tbl_yayasan` (`id_yayasan`, `nama_yayasan`, `deskripsi`, `jml`, `gambar`, `kategori`) VALUES
(1, 'Yayasan Permata Atjeh Peduli', 'Yayayan Permata Atjeh Peduli merupakan organisasi kemanusiaan yang bergerak dibidang kesehatan, Tanggap Darurat bencana, pemberdayaan penyandang disabilitas, pencegahan HIV-AIDS dan Pemberdayaan pupolasi Kunci, advokasi dan pemberdayaan komunitas rentan. Pada awal tahun 2013 YPAP bekerjasama dengan pemerintahan Aceh khusus untuk Divisi Kesehatan dan Pemberdayaan Penyandang cacat tahap pertama untuk enam kabupaten kota dalam provinsi Aceh yaitu kota Lhokseumawe, Aceh Utara, Bireuen, Pidie, kota Banda Aceh dan Aceh Jaya. \r\n\r\nYayasan Permata Atjeh Peduli [YPAP] memfokuskan untuk segera mengimplementasikan program Pemberdayaan Penyandang Disabilitas di Provinsi Aceh, fokus utama kepada anak – anak penyandang disabilitas, keluarga akan dilakukan pendampingan dan pemberdayaan, baik konseling, peningkatan mata pencaharian, penambahan gizi serta pendidikan dan kesehatan.', '1', 'yayasan1.png', 1),
(2, 'YPAC Jakarta', 'Yayasan Pembinaan Anak Cacat yang disingkat YPAC, merupakan prakasa alm. Prof Dr. Soeharso sebagai dokter spesialis bedah tulang dan didirikan di Solo, pada tahun 1953.\r\nSetahun kemudian, tepatnya pada tanggal 5 November 1954, Ibu Hj. Armistiani Soemarno Sosroatmodjo (almh), isteri Gubernur DKI Jakarta pada waktu itu, mendirikan perwakilan di Jakarta yang kemudian menjadi YPAC Cabang Jakarta.\r\nDalam perkembangannya, sesuai dengan keputusan Musyawarah Nasional YPAC di Bali pada tahun 2003, YPAC C', '1', 'yayasan2.png', 1),
(3, 'Yayasan Bhakti Luhur Indonesia', 'Yayasan Bhakti Luhur adalah yayasan sosial yang memberi perhatian secara khas kepada para penyandang cacat yang miskin, terlantar dan dipinggirkan. Secara resmi Yayasan Bhakti Luhur berdiri pada tanggal 5 Agustus 1959 di  Madiun. Menapaki berbagai langkah waktu, pada tahun 1975 Pusat Bhakti Luhur dipindahkan ke Malang.\r\n\r\nYayasan Bhakti Luhur   dengan MISI dan VISI-nya yang khas, yakni pelayanan anak cacat yang karena salah satu atau beberapa sebab seperti fisik, psikis, mental, sosio-ekonomi yang menyebabkan keterbelakangan dalam perkembangannya.', '1', 'yayasan9.png', 1),
(4, 'Yayasan CIQAL', 'Yayasan CIQAL, atau biasa disebut CIQAL(Center for Improving Qualified Activity in Life of People with Disabilities/Pusat untuk Pengembangan Kegiatan yang Berkualitas dalam Kehidupan Penyandang Disabilitas)adalah lembaga yang melaksanakan  program-program upaya pemberdayaan ekonomi dan advokasi bagi penyandang Disabilitas menuju kehidupan yang mandiri dan sejahtera.', '1', 'yayasan3.png', 2),
(5, 'Yayasan Sayap Ibu', 'Yayasan Sayap Ibu cabang provinsi Banten, adalah Penyantunan & Rehabilitasi Anak Disabilitas Majemuk Terlantar, merupakan lembaga non profit dan non Pemerintah, yang diresmikan pada tanggal 1 Oktober 2005, berlokasi di GrahaBintaro, Tangerang Selatan.', '1', 'yayasan4.png', 2),
(6, 'Yayasan Difabel Mandiri Indonesia', 'Yayasan Difabel Mandiri Indonesia (YDMI) ada atas sadar kami para Penyandang Disabilitas untuk berbagi dan berkarya dalam kemandirian\r\nVISI :\r\nYayasan Difabel Mandiri Indonesia adalah mewujudkan kesejahteraan hidup Penyandang Disabilitas dalam inklusifitas masyarakat Indonesia\r\nMISI :\r\n1.	Melayani seluruh Penyandang Disabilitas tanpa memandang suku, Ras, Agama, antar golongan dan fisik\r\n2.	Memberikan informasi yang spesifik melalui teknologi dan motivasi agar bermanfaat bagi seluruh Penyandang Disabilitas\r\n3.	Mendobrak budaya yang ada di Indonesia agar menghargai para Penyandang Disabilitas sebagai manusia yang setara\r\n4.	Mendukung kemandirian Penyandang Disabilitas dari segala segi dengan informasi dan teknologi', '1', 'yayasan5.jpg', 2),
(7, 'Yayasan Sinar Pelangi', 'Yayasan Sinar Pelangi Jatibening adalah suatu lembaga sosial yang menolong anak-anak penyandang cacat fisik secara medis dan educatif, dengan tujuan agar setiap anak dapat keluar dari isolasi, baik dari dalam keluarga mereka sendiri maupun dari lingkungan di sekitarnya, dengan harapan  agar mereka dapat hidup berdampingan  bersama-sama dengan anak-anak yang lain sehingga kehidupannya akan menjadi lebih baik dan berguna.', '1', 'yayasan7.jpg', 3),
(8, 'Yayasan Tri Asih', 'Yayasan Tri Asih adalah sebuah lembaga swasta Katolik yang bergiat dalam karya habilitasi dan rehabiltasi  bagi penyandang tunagrahita meliputi bidang-bidang:\r\nPendidikan dan Pengajaran (Kelas-kelas Persiapan, SDLBC1, SDLBC s/d SMKLBC)\r\nPelbagai terapi (fisio-speech-occupational-patterning-giok)\r\nPelatihan Kerja (menenun, menjahit, memasak, dan mengurus kantin/kios)\r\nPenyelenggaraan tempat kerja berupa sebuah workshop\r\nPenitipan dan perawatan bagi penyandang tunagrahita berat\r\nPara pendiri, pengurus, dan karyawan-karyawatinya meyakini bahwa karya mereka di Yayasan Tri Asih adalah karya sosial yang merupakan TUGAS dari TUHAN oleh karenanya diniati untuk secara TOTAL dalam kerjasama yang KOMPAK hingga TUNTAS dilaksanakan dalam jangka panjang dan dalam keadaan sejahtera.', '1', 'yayasan11.png', 3),
(9, 'Yayasan Peduli Kasih ABK', 'Yayasan Peduli Kasih Anak Berkebutuhan Khusus merupakan sebuah lembaga non-profit yang bergerak di bidang pemberdayaan bagi keluaga Anak Berkebutuhan Khusus secara gratis dan berbasis di Surabaya. Didirikan sejak tahun 2012, Yayasan Peduli Kasih Anak Berkebutuhan Khusus telah berpartisipasi dan menginisiasi berbagai macam kegiatan positif untuk mendorong partisipasi aktif Anak Berkebutuhan Khusus di masyarakat. Enam tahun telah berlalu dan kami masih berusaha berada dalam barisan depan untuk mendukung terciptanya lingkungan yang ramah bagi Anak Berkebutuhan Khusus.', '1', 'yayasan12.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `status`) VALUES
(1, 'odoy', 'cantik', 'odoycantik@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1'),
(2, 'Titis', 'Widyastuti', 'titis.widyastuti12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(3, 'kita', 'aja', 'rameinajaweb@gmail.com', 'be0eb97698461766ede3e020ec768e21', '0'),
(4, 'yeye', 'lalala', 'rezhaimani@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
