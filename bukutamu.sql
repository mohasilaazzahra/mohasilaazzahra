-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2024 pada 04.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tetamu`
--

CREATE TABLE `tetamu` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kepentingan` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `nepo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tetamu`
--

INSERT INTO `tetamu` (`id`, `tanggal`, `nama`, `instansi`, `alamat`, `kepentingan`, `tujuan`, `nepo`) VALUES
(1, '2023-09-25', 'Silvi asila', '', 'Alamat', '', 'bimbingan program', '124124124'),
(2, '2023-09-26', 'nabila', '', 'juwata', '', 'konsultasi', '122122122'),
(3, '2023-09-01', 'hafid', '', 'ungkas', '', 'Rapat kerjasama', '12341234'),
(5, '2023-09-26', 'wafa', '', 'juwata', '', 'konsultasi', '12341234123'),
(7, '2023-09-26', 'ipah', '', 'bulan', '', 'belajar proyek', '0970987098'),
(8, '2023-09-26', 'nadia', '', 'tarakan', '', 'konsultasi', '23452345'),
(9, '2023-09-27', 'wafa', '', 'bandung', '', 'bimbing pkl', '23452345'),
(26, '2023-10-04', 'zx', 'cv', 'bn', 'ml', 'kj', '666'),
(27, '2023-10-04', 'cimol', 'cilok', 'basreng', 'batagor', 'baso', '989889'),
(28, '2023-10-04', 'sayur', 'tanamana', 'balai', 'uyuy', 'jhjh', '999'),
(29, '2023-10-04', 'kfkkfkf', 'llll', 'eeee', 'ddd', 'wewe2e', '3333'),
(30, '2023-10-04', 'dfdf', 'gtgt', 'hyhy', 'kkkk', ';;;;;0000', 'oooo'),
(31, '2023-10-04', 'tatat', 'uhuhuh', 'yok', 'yot', 'robi', '989586536'),
(32, '2023-10-07', 'meyki ardiansyah', 'BSPI', 'juwata', 'v', 'u', '0987098'),
(33, '2023-10-31', 'nur', 'BSPI', 'compreng', 'pkl', 'bimbingan pkl', '66666666666'),
(34, '2024-01-12', 'ndyfgr', 'nfr7nct', 'ncyrnw', 'cmyg7', 'ncfr7ty', '0987098'),
(35, '2024-01-12', 'meyki ardiansyah', 'BSPI', 'bunga', 'koordinat rpl', 'konsultasi', '0970987098'),
(36, '2024-01-13', 'nesa', 'PPB', '', '', '', ''),
(37, '2024-01-13', 'sopi', 'PBB', 'rongga', 'tanaman', 'pengatahuan', '083899772827'),
(38, '2024-01-13', 'amelia', 'SMP Rongga', 'Cibitung', 'Pengetahuan', 'lebih tau tanaman', '085797568712'),
(39, '2024-01-13', 'sabyan', 'manggung', 'bandung', 'sholawat', 'menghibur', '089881234354'),
(40, '2024-01-13', 'silvi', 'ICFAF', 'bandung', 'koordinat rpl', 'konsultasi', '23452345'),
(41, '2024-01-13', 'ale', 'l', 'i', 'h', 'u', '66666666666'),
(42, '2024-01-13', 'nadia', 'BSPI', 'bunga', 'redmi', 'belajar proyek', '0970987098'),
(43, '2024-01-13', 'nadia', 'BSPI', 'tarakan', 'data', 'belajar proyek', '23452345'),
(44, '2024-01-13', 'nadia', 'ICFAF', 'bulan', 'data', 'bimbingan pkl', '23452345'),
(45, '2024-01-13', 'nhyn', '', '', '', '', ''),
(46, '2024-01-13', 'naha', 'nyg', 'kh', 'mn', 'oi', '66666666666'),
(47, '2024-01-18', 'aulia', 'BSPI', 'juwata', 'mengisi', 'konsultasi', '0970987098'),
(48, '2024-01-18', 'nadia', 'ICFAF', 'bunga', 'redmi', 'keuangan', '12341234123'),
(49, '2024-01-18', 'meyki ardiansyah', 'ICFAF', 'bulan', 'data', 'bimbing pkl', '66666666666'),
(50, '2024-01-18', 'ipah', 'BABAKAN', 'bulan', 'data', 'u', '23452345'),
(51, '2024-01-18', 'ipah', 'BABAKAN', 'bulan', 'data', 'u', '23452345'),
(52, '2024-01-18', 'nadia', 'BSPI', 'tarakan', 'koordinat rpl', 'belajar proyek', '66666666666'),
(53, '2024-01-18', 'nadia', 'BSPI', 'bunga', 'mengisi', 'belajar proyek', '0970987098'),
(54, '2024-01-18', 'nadia', 'ICFAF', 'bandung', 'mengisi', 'keuangan', '12341234123'),
(55, '2024-01-18', 'wafa', 'BABAKAN', 'bulan', 'redmi', 'belajar proyek', '0970987098'),
(56, '2024-01-18', 'wafa', 'ICFAF', 'tarakan', 'koordinat rpl', 'belajar proyek', '45674567'),
(57, '2024-01-18', 'nadia', 'BSPI', 'juwata', 'koordinat rpl', 'bimbingan pkl', '23452345'),
(58, '2024-01-30', 'silvi', 'BSPI', 'tarakan', 'mengisi', 'konsultasi', '0987098'),
(59, '2024-01-30', 'meyki ardiansyah', 'ICFAF', 'bandung', 'mengisi', 'konsultasi', '0970987098'),
(60, '2024-01-30', 'wafa', 'BSPI', 'bandung', 'mengisi', 'keuangan', '12341234123'),
(61, '2024-01-30', 'nadia', 'ICFAF', 'bunga', 'mengisi', 'belajar proyek', '0970987098'),
(62, '2024-02-06', 'silvi', 'dpsi', 'lembang', 'bandung', 'IFCA', '0987654321'),
(63, '2024-02-06', 'syarenda', 'UPI', 'bandung', 'lembang', 'pernatian', '1212121212121212121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id_user`, `username`, `password`, `nama_pengguna`, `status`) VALUES
(3, 'a', '0cc175b9c0f1b6a831c399e269772661', '', 'aktif'),
(4, 'silviasila15@gmail.com', '2667a7560565df02fe9a6ef299ea08e0', 'adminitrasi', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tetamu`
--
ALTER TABLE `tetamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tetamu`
--
ALTER TABLE `tetamu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
