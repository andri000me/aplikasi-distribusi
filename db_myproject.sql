-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2020 pada 21.22
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
  `tgl_alokasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alokasi`
--

INSERT INTO `alokasi` (`id_alokasi`, `id`, `nm_alokasi`, `id_posko`, `tgl_alokasi`) VALUES
(1, 1, 'alokasi banjir', 2, '2020-10-24'),
(2, 1, 'Alokasi gunung Mbeleduk', 3, '2020-11-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama_bantuan` varchar(250) NOT NULL,
  `jumlah_bantuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `nama_bantuan`, `jumlah_bantuan`) VALUES
(1, 'MIE REBUS SEKERDUS', 24);

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
(1, 'Distribusi banjir psg 2', 2, 2, 'motor', '2020-11-11', '2020-11-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `korlap`
--

CREATE TABLE `korlap` (
  `id` int(11) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `email` varchar(125) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `korlap`
--

INSERT INTO `korlap` (`id`, `nohp`, `email`, `alamat`, `nama`) VALUES
(1, '07511111111', 'admin@gmail.com', 'mana saja', 'siapa saja'),
(2, '084546454', 'korlap@gmail.com', 'kepo', 'kepo');

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
  `tanggal` date NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `lengkap` enum('ya','tidak','''-''') NOT NULL,
  `keterangan` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posko`
--

INSERT INTO `posko` (`id_posko`, `nm_posko`, `bencana`, `jumlah_korban`, `kondisi`, `latitude`, `longitude`, `alamat_posko`, `status`, `id`, `tanggal`, `id_bantuan`, `lengkap`, `keterangan`) VALUES
(1, '-', 'Banjir', 5, 'jelek', '0.000000', '0.000000', '-', 'menunggu alokasi', 2, '2020-10-13', 0, 'ya', ''),
(2, 'Posko Banjir 4', 'Banjir', 1, 'sedang', '-7.090911', '107.668887', 'Dimana aja', 'bantuan dikirim', 2, '2020-10-24', 0, 'ya', ''),
(3, 'posko syahdu', 'Gunung Meletus', 1, 'Santay', '-7.090911', '105.591960', 'Bandung', 'bantuan sampai', 2, '2020-11-09', 1, 'ya', 'kurnag mi rebus nya 5'),
(4, 'asa', 'Banjir', 1, 'sas', '-7.090911', '107.668887', 'Bandung', 'menunggu alokasi', 2, '2020-11-11', 1, '', '');

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
(1, 'danael', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'danael', 'korlap@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'korlap'),
(3, 'danael', 'pimpinan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alokasi`
--
ALTER TABLE `alokasi`
  ADD PRIMARY KEY (`id_alokasi`),
  ADD KEY `id` (`id`),
  ADD KEY `id_posko` (`id_posko`);

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
-- Indeks untuk tabel `korlap`
--
ALTER TABLE `korlap`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_alokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id_dis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `korlap`
--
ALTER TABLE `korlap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `posko`
--
ALTER TABLE `posko`
  MODIFY `id_posko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alokasi`
--
ALTER TABLE `alokasi`
  ADD CONSTRAINT `alokasi_ibfk_2` FOREIGN KEY (`id_posko`) REFERENCES `posko` (`id_posko`),
  ADD CONSTRAINT `alokasi_ibfk_4` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `distribusi`
--
ALTER TABLE `distribusi`
  ADD CONSTRAINT `distribusi_ibfk_2` FOREIGN KEY (`id_alokasi`) REFERENCES `alokasi` (`id_alokasi`),
  ADD CONSTRAINT `distribusi_ibfk_3` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `posko`
--
ALTER TABLE `posko`
  ADD CONSTRAINT `posko_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
