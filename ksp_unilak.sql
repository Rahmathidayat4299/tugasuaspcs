-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2021 pada 12.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksp_unilak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_admin`, `nm_admin`, `username`, `password`, `create_at`) VALUES
(1, 'Admin', 'dayat', '1234', '2021-07-29 04:12:36'),
(2, 'salah', 'siti', 'dasarpcs', '2021-12-11 01:29:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id` int(10) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `pinjaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id`, `nik`, `nama`, `pinjaman`) VALUES
(12333, 123333333, 'dayat', '11111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_anggota`
--

CREATE TABLE `simpanan_anggota` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `simpanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan_anggota`
--

INSERT INTO `simpanan_anggota` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `simpanan`) VALUES
(6, 'rahmat hidayat', 'perawang', 'L', 'islam', 'rp.1000.00'),
(12333, 'dayat', '', '', '', ''),
(22334, 'rarar', 'pekanbaru', 'L', 'katolik', '1000000'),
(333333, 'reeedee', 'rumbai', 'P', 'katolik', '123.0000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `simpanan_anggota`
--
ALTER TABLE `simpanan_anggota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333334445;

--
-- AUTO_INCREMENT untuk tabel `simpanan_anggota`
--
ALTER TABLE `simpanan_anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333334;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
