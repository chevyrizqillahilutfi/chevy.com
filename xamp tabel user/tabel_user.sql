-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 17.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel user`
--

CREATE TABLE `tabel user` (
  `NO` int(11) NOT NULL,
  `JENIS_SAPI` varchar(100) NOT NULL,
  `HARGA` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel user`
--

INSERT INTO `tabel user` (`NO`, `JENIS_SAPI`, `HARGA`) VALUES
(1, 'sapi Brahma', 1.00),
(2, 'Sapi Limousin', 1.00),
(3, 'sapi Angus', 1.00),
(4, 'sapi Brangus', 1.00),
(5, 'sapi Madura', 1.00),
(6, 'sapi Bali', 1.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel user`
--
ALTER TABLE `tabel user`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel user`
--
ALTER TABLE `tabel user`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
