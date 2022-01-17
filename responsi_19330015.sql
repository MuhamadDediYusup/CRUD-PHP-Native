-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2021 pada 09.21
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi_19330015`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jeniskelamin`
--

CREATE TABLE `tb_jeniskelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jeniskelamin`
--

INSERT INTO `tb_jeniskelamin` (`id`, `nama`) VALUES
(1, 'Laki - Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `alamat_mhs` varchar(50) NOT NULL,
  `id_jeniskelamin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nama_mhs`, `alamat_mhs`, `id_jeniskelamin`) VALUES
(8, 'Muhamad Dedi Yusup', 'Wonogiri', 1),
(9, 'Ananda Elisa', 'Yogyakarta', 2),
(10, 'Dewandana Iswan', 'Yogyakarta', 1),
(11, 'Amelia Anisa', 'Yogyakarta', 2),
(13, 'Andi', 'Yogyakarta', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jeniskelamin`
--
ALTER TABLE `tb_jeniskelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `id_jeniskelamin` (`id_jeniskelamin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jeniskelamin`
--
ALTER TABLE `tb_jeniskelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`id_jeniskelamin`) REFERENCES `tb_jeniskelamin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
