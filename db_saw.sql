-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2019 pada 08.42
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alt`
--

CREATE TABLE `tbl_alt` (
  `ida` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nilai_rapor` int(11) NOT NULL,
  `piagam` int(11) NOT NULL,
  `poin_pelanggaran` int(11) NOT NULL,
  `akhlak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_alt`
--

INSERT INTO `tbl_alt` (`ida`, `nama`, `nilai_rapor`, `piagam`, `poin_pelanggaran`, `akhlak`) VALUES
(1, 'cecep', 99, 20, 2, 99),
(3, 'hidayat', 80, 3, 12, 79),
(4, 'reper', 99, 2, 12, 90),
(5, 'pilput', 98, 3, 12, 40),
(7, 'wester', 100, 3, 20, 97),
(8, 'jink', 80, 5, 10, 68),
(9, 'rido', 79, 34, 2, 98);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cadd`
--

CREATE TABLE `tbl_cadd` (
  `idc` int(11) NOT NULL,
  `namac` varchar(25) NOT NULL,
  `bobotc` double NOT NULL,
  `jc` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cadd`
--

INSERT INTO `tbl_cadd` (`idc`, `namac`, `bobotc`, `jc`) VALUES
(1, 'nilai rapor', 0.4, 'benefit'),
(2, 'piagam', 0.2, 'benefit'),
(3, 'point pelanggaran', 0.2, 'cost'),
(4, 'akhlak', 0.2, 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_normal`
--

CREATE TABLE `tbl_normal` (
  `ida` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nilai_rapor` double NOT NULL,
  `piagam` double NOT NULL,
  `poin_pelanggaran` double NOT NULL,
  `akhlak` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_normal`
--

INSERT INTO `tbl_normal` (`ida`, `nama`, `nilai_rapor`, `piagam`, `poin_pelanggaran`, `akhlak`) VALUES
(1, 'cecep', 0.99, 0.58823529411765, 1, 1),
(3, 'hidayat', 0.8, 0.088235294117647, 0.16666666666667, 0.7979797979798),
(4, 'reper', 0.99, 0.058823529411765, 0.16666666666667, 0.90909090909091),
(5, 'pilput', 0.98, 0.088235294117647, 0.16666666666667, 0.4040404040404),
(7, 'wester', 1, 0.088235294117647, 0.1, 0.97979797979798),
(8, 'jink', 0.8, 0.14705882352941, 0.2, 0.68686868686869),
(9, 'rido', 0.79, 1, 1, 0.98989898989899);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rank`
--

CREATE TABLE `tbl_rank` (
  `idr` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `v` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rank`
--

INSERT INTO `tbl_rank` (`idr`, `nama`, `v`) VALUES
(105, 'cecep', 0.91364705882353),
(106, 'hidayat', 0.53057635175282),
(107, 'jink', 0.52678550207962),
(108, 'pilput', 0.52378847296494),
(109, 'reper', 0.62291622103387),
(110, 'rido', 0.9139797979798),
(111, 'wester', 0.63360665478313);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_alt`
--
ALTER TABLE `tbl_alt`
  ADD PRIMARY KEY (`ida`);

--
-- Indeks untuk tabel `tbl_cadd`
--
ALTER TABLE `tbl_cadd`
  ADD PRIMARY KEY (`idc`);

--
-- Indeks untuk tabel `tbl_normal`
--
ALTER TABLE `tbl_normal`
  ADD PRIMARY KEY (`ida`);

--
-- Indeks untuk tabel `tbl_rank`
--
ALTER TABLE `tbl_rank`
  ADD PRIMARY KEY (`idr`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_alt`
--
ALTER TABLE `tbl_alt`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_cadd`
--
ALTER TABLE `tbl_cadd`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_normal`
--
ALTER TABLE `tbl_normal`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_rank`
--
ALTER TABLE `tbl_rank`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
