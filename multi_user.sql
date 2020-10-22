-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2020 at 03:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE `pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `nama_barang` varchar(300) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `spesifikasi` text NOT NULL,
  `tanggal_pengadaan` varchar(30) NOT NULL,
  `admin_pengadaan` int(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_supplier` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id_pengadaan`, `nama_barang`, `jumlah`, `spesifikasi`, `tanggal_pengadaan`, `admin_pengadaan`, `status`, `id_supplier`) VALUES
(9, 'beras', 3, 'dipasok sebelum tanggal 20 oktober 2015', '12-10-2014', 1, 'approved', 0),
(10, 'tahu', 3, 'dipasok sebelum tanggal 20 oktober 2015', '12-10-2014', 1, 'approved', 0),
(11, 'dsa', 3, 'dipasok sebelum tanggal 20 oktober 2015', '12-10-2014', 1, 'approved', 0),
(12, 'beras', 3, 'dipasok sebelum tanggal 20 oktober 2015', '12-10-2014', 1, 'approved', 0),
(13, 'beras', 4, 'dipasok sebelum tanggal 21 oktober 2215', '12-10-2014', 1, 'approved', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'wandhi', 'wandhi', 'wandhi123', 'procurment'),
(2, 'dwi', 'dwi', 'dwi123', 'supplier'),
(3, 'kobid', 'kobid', 'kobid123', 'purchasing'),
(4, 'manajer', 'manajer', 'manajer123', 'manajer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
