-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 10:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjam`
--

CREATE TABLE IF NOT EXISTS `data_peminjam` (
`id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` text NOT NULL,
  `nama_mobil_dipesan` varchar(30) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `pilihan_paket` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_peminjam`
--

INSERT INTO `data_peminjam` (`id`, `nama`, `alamat`, `no_tlp`, `nama_mobil_dipesan`, `tanggal_pesan`, `tanggal_kembali`, `pilihan_paket`, `harga`, `status`) VALUES
(14, 'Shafira', 'bandung', '085872059098', 'Avanza', '2019-07-02', '2019-07-05', '3Hari + Supir', 850000, 'Sedang Menggunakan'),
(15, 'gugum', 'bandung', '085872059098', 'Avanza', '2019-07-02', '2019-07-05', '3Hari + Supir', 850000, 'Sedang Menggunakan'),
(16, 'gugum', 'bandung', '0813', 'Avanza', '2019-07-02', '2019-07-05', '3Hari + Supir', 850000, 'Mobil Sudah Dikembalikan'),
(17, 'Nevisa', 'bandung', '081322178011', 'Fortuner', '2019-07-03', '2019-07-06', '3Hari + Supir', 1300000, 'Mobil Sudah Dikembalikan'),
(18, 'Dicky', 'Bandung', '087878789088', 'Innova', '2019-07-07', '2019-07-10', '3Hari + Supir', 1100000, 'Sedang Menggunakan');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
`id` int(2) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `tahun_mobil` int(4) NOT NULL,
  `warna_mobil` varchar(30) NOT NULL,
  `kapasitas` int(2) NOT NULL,
  `harga_sewa` int(30) NOT NULL,
  `status_ketersediaan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nama_mobil`, `tahun_mobil`, `warna_mobil`, `kapasitas`, `harga_sewa`, `status_ketersediaan`) VALUES
(1, 'Avanza', 2018, 'Hitam', 9, 300000, 'Sedang Menggunakan'),
(2, 'Apv', 2018, 'Hitam', 9, 250000, 'Tersedia'),
(6, 'Fortuner', 2018, 'Hitam', 9, 500000, 'Tersedia'),
(7, 'Innova', 2018, 'Hitam', 9, 450000, 'Sedang Menggunakan');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id` int(2) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `pilihan_paket` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama_mobil`, `pilihan_paket`, `harga`) VALUES
(1, 'Avanza', '1Hari + Supir', 280000),
(2, 'Avanza', '1Hari - Supir', 300000),
(3, 'Avanza', '3Hari + Supir', 850000),
(4, 'Avanza', '3Hari - Supir', 800000),
(5, 'Avanza', '1Minggu + Supir', 1900000),
(6, 'Avanza', '1Minggu - Supir', 1850000),
(7, 'Avanza', '2Minggu + Supir', 4100000),
(8, 'Avanza', '2Minggu - Supir', 4000000),
(9, 'Avanza', '3Minggu + Supir', 6100000),
(10, 'Avanza', '3Minggu - Supir', 6000000),
(11, 'Avanza', '4Minggu + Supir', 8900000),
(12, 'Avanza', '4Minggu + Supir', 8800000),
(13, 'Apv', '1Hari + Supir', 230000),
(14, 'Apv', '1Hari - Supir', 250000),
(15, 'Apv', '3Hari + Supir', 700000),
(16, 'Apv', '3Hari - Supir', 650000),
(17, 'Apv', '1Minggu + Supir', 1650000),
(18, 'Apv', '1Minggu - Supir', 1600000),
(19, 'Apv', '2Minggu + Supir', 3400000),
(20, 'Apv', '2Minggu - Supir', 3300000),
(21, 'Apv', '3Minggu + Supir', 5100000),
(22, 'Apv', '3Minggu - Supir', 5000000),
(23, 'Apv', '4Minggu + Supir', 7300000),
(24, 'Apv', '4Minggu - Supir', 7200000),
(25, 'Fortuner', '1Hari + Supir', 480000),
(26, 'Fortuner', '1Hari - Supir', 500000),
(28, 'Fortuner', '3Hari + Supir', 1300000),
(29, 'Fortuner', '3Hari - Supir', 1250000),
(30, 'Fortuner', '1Minggu + Supir', 3300000),
(31, 'Fortuner', '1Minggu - Supir', 3200000),
(32, 'Fortuner', '2Minggu + Supir', 6800000),
(33, 'Fortuner', '2Minggu - Supir', 6700000),
(34, 'Fortuner', '3Minggu + Supir', 9050000),
(35, 'Fortuner', '3Minggu - Supir', 8900000),
(36, 'Fortuner', '4Minggu + Supir', 14800000),
(37, 'Fortuner', '4Minggu - Supir', 14700000),
(38, 'Innova', '1Hari + Supir', 430000),
(39, 'Innova', '1Hari - Supir', 450000),
(40, 'Innova', '3Hari + Supir', 1100000),
(41, 'Innova', '3Hari - Supir', 1000000),
(42, 'Innova', '1Minggu + Supir', 3100000),
(43, 'Innova', '1Minggu - Supir', 3000000),
(44, 'Innova', '2Minggu + Supir', 6600000),
(45, 'Innova', '2Minggu - Supir', 6500000),
(46, 'Innova', '3Minggu + Supir', 8850000),
(47, 'Innova', '3Minggu - Supir', 8700000),
(48, 'Innova', '4Minggu + Supir', 14600000),
(49, 'Innova', '4Minggu + Supir', 14500000),
(50, 'Hiace', '1Hari + Supir', 900000),
(51, 'Hiace', '1Hari - Supir', 1000000),
(52, 'Hiace', '3Hari + Supir', 2750000),
(53, 'Hiace', '3Hari - Supir', 2650000),
(54, 'Hiace', '1Minggu + Supir', 6800000),
(55, 'Hiace', '1Minggu - Supir', 6650000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userType` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `userType`) VALUES
(1, 'Admin', 'admin123', 'firaandreaa@yahoo.com', 'Admin'),
(18, 'shafira', '123', 'firaandreaa@yahoo.com', 'General');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
