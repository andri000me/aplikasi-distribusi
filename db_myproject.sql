-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 09:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `alokasi`
--

CREATE TABLE `alokasi` (
  `id_alokasi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nm_alokasi` varchar(50) NOT NULL,
  `id_posko` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `tgl_diajukan` date NOT NULL,
  `tgl_alokasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alokasi`
--

INSERT INTO `alokasi` (`id_alokasi`, `id`, `nm_alokasi`, `id_posko`, `id_bantuan`, `tgl_diajukan`, `tgl_alokasi`) VALUES
(2, 2, 'alokasi banjir PSG 1', 1, 1, '2020-10-09', '2020-10-09'),
(3, 2, 'alokasi banjir PSG 2', 2, 1, '2020-10-09', '2020-10-09'),
(4, 3, 'alokasi banjir PSG 3', 3, 1, '2020-10-09', '2020-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `jenis_bantuan` varchar(50) NOT NULL,
  `jumlah_bantuan` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `jenis_bantuan`, `jumlah_bantuan`) VALUES
(1, 'Pangan', 100);

-- --------------------------------------------------------

--
-- Table structure for table `distribusi`
--

CREATE TABLE `distribusi` (
  `id_dis` int(11) NOT NULL,
  `nm_distribusi` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `id_alokasi` int(11) NOT NULL,
  `id_posko` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `sarana` varchar(50) NOT NULL,
  `tgl_distribusi` date NOT NULL,
  `tgl_diterima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribusi`
--

INSERT INTO `distribusi` (`id_dis`, `nm_distribusi`, `id`, `id_alokasi`, `id_posko`, `id_bantuan`, `sarana`, `tgl_distribusi`, `tgl_diterima`) VALUES
(2, 'distribusi banjir PSG 1', 1, 2, 1, 1, 'Mobil', '2020-10-10', '2020-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `posko`
--

CREATE TABLE `posko` (
  `id_posko` int(11) NOT NULL,
  `nm_posko` varchar(50) NOT NULL,
  `bencana` enum('Banjir','Gempa Bumi','Tsunami','Gunung Meletus') NOT NULL,
  `jumlah_korban` int(6) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `alamat_posko` varchar(50) NOT NULL,
  `status` enum('menunggu alokasi','menunggu distribusi','bantuan dikirim','bantuan sampai') NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posko`
--

INSERT INTO `posko` (`id_posko`, `nm_posko`, `bencana`, `jumlah_korban`, `kondisi`, `latitude`, `longitude`, `alamat_posko`, `status`, `id`) VALUES
(1, 'Posko Banjir 1 PSG', 'Banjir', 100, 'Sedang', '-5.399427', '105.254040', '', 'menunggu alokasi', 2),
(2, 'Posko Banjir 2 PSG', 'Banjir', 100, 'Sedang', '-5.390371', '105.000000', '', 'menunggu distribusi', 2),
(3, 'Posko Banjir 3 PSG', 'Banjir', 100, 'Sedang', '-5.399427', '105.000000', '', 'menunggu distribusi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `level`) VALUES
(1, 'danael', 'danael', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, 'jay', 'jay', '827ccb0eea8a706c4c34a16891f84e7b', 'korlap'),
(3, 'chul', 'chul', '827ccb0eea8a706c4c34a16891f84e7b', 'korlap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alokasi`
--
ALTER TABLE `alokasi`
  ADD PRIMARY KEY (`id_alokasi`),
  ADD KEY `id` (`id`),
  ADD KEY `id_posko` (`id_posko`),
  ADD KEY `id_bantuan` (`id_bantuan`);

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`id_dis`),
  ADD KEY `id` (`id`),
  ADD KEY `id_alokasi` (`id_alokasi`),
  ADD KEY `id_posko` (`id_posko`),
  ADD KEY `id_bantuan` (`id_bantuan`);

--
-- Indexes for table `posko`
--
ALTER TABLE `posko`
  ADD PRIMARY KEY (`id_posko`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alokasi`
--
ALTER TABLE `alokasi`
  MODIFY `id_alokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id_dis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posko`
--
ALTER TABLE `posko`
  MODIFY `id_posko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alokasi`
--
ALTER TABLE `alokasi`
  ADD CONSTRAINT `alokasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `alokasi_ibfk_2` FOREIGN KEY (`id_posko`) REFERENCES `posko` (`id_posko`),
  ADD CONSTRAINT `alokasi_ibfk_3` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`);

--
-- Constraints for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD CONSTRAINT `distribusi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `distribusi_ibfk_2` FOREIGN KEY (`id_alokasi`) REFERENCES `alokasi` (`id_alokasi`),
  ADD CONSTRAINT `distribusi_ibfk_3` FOREIGN KEY (`id_posko`) REFERENCES `posko` (`id_posko`),
  ADD CONSTRAINT `distribusi_ibfk_4` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`);

--
-- Constraints for table `posko`
--
ALTER TABLE `posko`
  ADD CONSTRAINT `posko_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
