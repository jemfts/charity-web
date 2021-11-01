-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 08:46 AM
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
(1, 'joni', 'buku novel', '5', '08123456798', 'a@gmail.com', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `donasi_uang`
--

INSERT INTO `donasi_uang` (`id_donasi_uang`, `nm_donatur`, `alamat`, `jml_uang`, `no_telp`, `email`, `status`) VALUES
(1, 'Irsalina Idzni', 'Tangerang', '20000', '080123456789', 'I@gmail.com', '1'),
(2, 'widya', 'tangerang', '1000', '0800098765', 'wi@gmail.com', '0'),
(3, 'idzni', 'ciledug', '100000', '0888888888', 'a@gmail.com', '0'),
(4, 'novi', 'jl panjang', '1000000', '56984568073', 'n@gmail.com', '1'),
(5, 'Annisa', 'ciledug', '100000', '08123456789', 'l@gmail.com', '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_detail_donasi`
--

INSERT INTO `tbl_detail_donasi` (`id`, `order_id`, `yayasan`, `qty`, `jml`) VALUES
(1, 1, 1, 1, '1'),
(2, 2, 6, 1, '1'),
(3, 3, 8, 1, '1'),
(4, 4, 1, 1, '1'),
(5, 5, 1, 1, '1'),
(6, 6, 2, 1, '1'),
(7, 7, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donasi`
--

CREATE TABLE IF NOT EXISTS `tbl_donasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id`, `tanggal`, `pelanggan`) VALUES
(1, '2018-06-29', 1),
(2, '2018-06-29', 1),
(3, '2018-06-29', 1),
(4, '2018-06-29', 2),
(5, '2018-06-29', 3),
(6, '2018-06-30', 4),
(7, '2018-07-04', 5);

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
(1, 'Yayasan A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 1),
(2, 'Yayasan B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 1),
(3, 'Yayasan C', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 1),
(4, 'Yayasan D', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 2),
(5, 'Yayasan E', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 2),
(6, 'Yayasan F', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 2),
(7, 'Yayasan G', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 3),
(8, 'Yayasan H', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 3),
(9, 'Yayasan I', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'yayasan.jpg', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `status`) VALUES
(1, 'odoy', 'cantik', 'odoycantik@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'Titis', 'Widyastuti', 'titis.widyastuti12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(3, 'kita', 'aja', 'rameinajaweb@gmail.com', 'be0eb97698461766ede3e020ec768e21', '0'),
(4, 'yeye', 'lalala', 'rezhaimani@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1'),
(5, 'widya', 'lestari', 'widlestarii@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(6, 'Novitha', 'Sari', 'novsari28@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(7, 'fery', 'setiawan', 'ferysetiawannn@gmail.com', 'b9342057a3686e4b3dac5a68eb34198d', '1'),
(8, 'nurul', 'h', 'nuruullhidayati@yahoo.co.id', '1621a5dc746d5d19665ed742b2ef9736', '1'),
(9, 'Irsalina', 'Idzni', 'irsalina892010@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(10, 'Annisa', 'Jema', 'annisajema@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
