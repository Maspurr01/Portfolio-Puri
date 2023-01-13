-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2022 pada 01.31
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aplikasicv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `Nama` varchar(30) NOT NULL,
  `Nim` int(10) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Asal` varchar(30) NOT NULL,
  `Tanggal_Lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`Nama`, `Nim`, `Jurusan`, `Asal`, `Tanggal_Lahir`) VALUES
('Nanang Wirayuda', 2004411219, 'Informatika', 'Kota Palopo', '2002-01-01'),
('Puri', 2004411209, 'Informatika', 'Kota Palopo', '2002-02-18'),
('Sarman', 2004411216, 'Informatika', 'Kecamatan Ponrang', '2001-04-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `Nama` varchar(30) NOT NULL,
  `Lulusan_SD` varchar(30) NOT NULL,
  `Lulusan_SMP` varchar(30) NOT NULL,
  `Lulusan_SMA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`Nama`, `Lulusan_SD`, `Lulusan_SMP`, `Lulusan_SMA`) VALUES
('Nanang Wirayuda', 'SDN 3 Surutanga', 'SMPN 1 Palopo', 'SMAN 3 Palopo'),
('Puri', 'SDN 35 Lamandu', 'SMPN 7 Palopo', 'SMAN 6 Palopo'),
('Sarman', 'SDN 60 Ponrang', 'SMPN 2 Buaponrang', 'SMAN 15 Luwu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`Nama`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`Nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
