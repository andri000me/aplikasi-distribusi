-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2020 pada 21.23
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

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
-- Struktur dari tabel `alokasi`
--

CREATE TABLE `alokasi` (
  `id_alokasi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nm_alokasi` varchar(50) NOT NULL,
  `id_posko` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `tgl_alokasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alokasi`
--

INSERT INTO `alokasi` (`id_alokasi`, `id`, `nm_alokasi`, `id_posko`, `id_bantuan`, `tgl_alokasi`) VALUES
(2, 2, 'alokasi banjir PSG 1', 1, 1, '2020-10-09'),
(3, 2, 'alokasi banjir PSG 2', 2, 1, '2020-10-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `jenis_bantuan` varchar(50) NOT NULL,
  `jumlah_bantuan` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `jenis_bantuan`, `jumlah_bantuan`) VALUES
(1, 'Pangans', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `distribusi`
--

CREATE TABLE `distribusi` (
  `id_dis` int(11) NOT NULL,
  `nm_distribusi` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `id_alokasi` int(11) NOT NULL,
  `sarana` varchar(50) NOT NULL,
  `tgl_distribusi` date NOT NULL,
  `tgl_diterima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `distribusi`
--

INSERT INTO `distribusi` (`id_dis`, `nm_distribusi`, `id`, `id_alokasi`, `sarana`, `tgl_distribusi`, `tgl_diterima`) VALUES
(7, 'Distribusi banjir psg 2', 2, 3, 'motors', '2020-10-13', '2020-10-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posko`
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
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posko`
--

INSERT INTO `posko` (`id_posko`, `nm_posko`, `bencana`, `jumlah_korban`, `kondisi`, `latitude`, `longitude`, `alamat_posko`, `status`, `id`, `tanggal`) VALUES
(1, 'Posko Banjir 1 PSG', 'Banjir', 100, 'Sedang', '-5.399427', '105.254040', '', 'menunggu alokasi', 2, '0000-00-00'),
(2, 'Posko Banjir 2 PSG', 'Banjir', 100, 'Sedang', '-5.390371', '105.000000', '', 'bantuan sampai', 2, '0000-00-00'),
(7, 'Posko Syahdu', 'Tsunami', 1, 'Santay', '0.000000', '0.000000', 'Bandung', 'menunggu alokasi', 2, '2020-10-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `level`) VALUES
(1, 'danael', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, 'jay', 'korlap', '827ccb0eea8a706c4c34a16891f84e7b', 'korlap'),
(3, 'chul', 'chul', '827ccb0eea8a706c4c34a16891f84e7b', 'korlap');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alokasi`
--
ALTER TABLE `alokasi`
  ADD PRIMARY KEY (`id_alokasi`),
  ADD KEY `id` (`id`),
  ADD KEY `id_posko` (`id_posko`),
  ADD KEY `id_bantuan` (`id_bantuan`);

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`id_dis`),
  ADD KEY `id` (`id`),
  ADD KEY `id_alokasi` (`id_alokasi`);

--
-- Indeks untuk tabel `posko`
--
ALTER TABLE `posko`
  ADD PRIMARY KEY (`id_posko`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alokasi`
--
ALTER TABLE `alokasi`
  MODIFY `id_alokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id_dis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `posko`
--
ALTER TABLE `posko`
  MODIFY `id_posko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alokasi`
--
ALTER TABLE `alokasi`
  ADD CONSTRAINT `alokasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `alokasi_ibfk_2` FOREIGN KEY (`id_posko`) REFERENCES `posko` (`id_posko`),
  ADD CONSTRAINT `alokasi_ibfk_3` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`);

--
-- Ketidakleluasaan untuk tabel `distribusi`
--
ALTER TABLE `distribusi`
  ADD CONSTRAINT `distribusi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `distribusi_ibfk_2` FOREIGN KEY (`id_alokasi`) REFERENCES `alokasi` (`id_alokasi`);

--
-- Ketidakleluasaan untuk tabel `posko`
--
ALTER TABLE `posko`
  ADD CONSTRAINT `posko_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
