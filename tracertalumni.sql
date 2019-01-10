-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2019 pada 01.47
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracertalumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `tahun_lulus` varchar(100) DEFAULT NULL,
  `tanggal_yudisium` date DEFAULT NULL,
  `judul_skripsi` varchar(100) DEFAULT NULL,
  `ipk` double(10,0) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `alamat_asal` varchar(100) DEFAULT NULL,
  `kodepos_asal` varchar(100) DEFAULT NULL,
  `alamat_sekarang` varchar(100) DEFAULT NULL,
  `kodepos_sekarang` varchar(100) DEFAULT NULL,
  `status_perkawinan` varchar(100) DEFAULT NULL,
  `negara` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `nomor_telepon` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `golongan_darah` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`username`, `password`, `email`, `nim`, `nama`, `jenjang`, `id_jurusan`, `id_prodi`, `angkatan`, `tahun_lulus`, `tanggal_yudisium`, `judul_skripsi`, `ipk`, `kewarganegaraan`, `alamat_asal`, `kodepos_asal`, `alamat_sekarang`, `kodepos_sekarang`, `status_perkawinan`, `negara`, `provinsi`, `kota`, `nomor_telepon`, `nomor_hp`, `jenis_kelamin`, `golongan_darah`, `tempat_lahir`, `tanggal_lahir`, `website`, `facebook`, `twitter`, `instagram`, `foto`) VALUES
('agungwewwww', '', 'agungwicaksono1212@gmail.com', '155150200111018', 'Agung Wicaksono', 'D3', 1, 1, '2012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08975771158', 'Perempuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('doneeadjee', '', 'agungicaksono@gmail.com', '155159299129912', 'Doni Adjie', 'S1', 2, 2, '2015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08975771158', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ikimakkkk', '', 'primenvzh@outlook.com', '155150201111019', 'Yohanes Agung', 'Pilih jenjang...', 1, 1, '2012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0897577158', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sadasdasdsad', '', 'kwonwanyoung@gmail.com', '1551502011121', 'Danu ', 'S1', 1, 1, '2012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08975771158', 'Perempuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sadasdsada', '', 'intan.zahra@gmail.com', 'sadasdsadas', 'Agung Wicaksono', 'D3', 2, 2, '2015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081232150974', 'Laki-laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Shitpost'),
(2, 'Viral'),
(3, 'Dagelan'),
(4, 'Ilmu Ekonomi'),
(5, 'Manajemen'),
(6, 'Akuntansi'),
(7, 'Non-Jurusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongankerja`
--

CREATE TABLE `lowongankerja` (
  `id_lowongan` int(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `no_telp_perusahaan` varchar(12) NOT NULL,
  `email_perusahaan` varchar(30) DEFAULT NULL,
  `website_perusahaan` varchar(30) DEFAULT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `contact_person` varchar(12) NOT NULL,
  `lowongan_jabatan` varchar(20) NOT NULL,
  `syarat_pekerjaan` text NOT NULL,
  `pelamar_yang_dibutuhkan` varchar(20) DEFAULT NULL,
  `kisaran_gaji` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_jurusan`, `nama_prodi`) VALUES
(1, 1, 'Meme'),
(2, 2, 'Maha Asyik'),
(3, 3, 'EternalEnvy'),
(4, 4, 'Ekonomi Pembangunan'),
(5, 4, 'Economics Finance and Banking'),
(6, 4, 'Perpajakan'),
(7, 4, 'Ekonomi, Keuangan dan Perbankan'),
(8, 4, 'Ekonomi Islam'),
(9, 4, 'Economics');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pekerjaan`
--

CREATE TABLE `riwayat_pekerjaan` (
  `id_riwayat_pekerjaan` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `mulai_kerja` date NOT NULL,
  `berhenti_kerja` date NOT NULL,
  `alamat_kerja` varchar(100) DEFAULT NULL,
  `pendapatan_per_bulan` int(100) DEFAULT NULL,
  `golongan_pns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `get_prodi` (`id_prodi`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `user` (`username`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `get_jur` (`id_jurusan`);

--
-- Indeks untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD PRIMARY KEY (`id_riwayat_pekerjaan`),
  ADD KEY `get_alumni` (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  MODIFY `id_lowongan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `get_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  ADD CONSTRAINT `user` FOREIGN KEY (`username`) REFERENCES `alumni` (`username`);

--
-- Ketidakleluasaan untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `get_jur` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD CONSTRAINT `get_alumni` FOREIGN KEY (`username`) REFERENCES `alumni` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
