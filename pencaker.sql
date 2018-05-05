-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2018 pada 09.47
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencaker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pencaker`
--

CREATE TABLE `data_pencaker` (
  `no_ktp` char(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tmp_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `stts_perkawinan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `tinggi_badan` int(20) NOT NULL,
  `berat_badan` int(20) NOT NULL,
  `no_hp` char(20) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `tingkat_pend` varchar(100) NOT NULL,
  `jenis_jurusan` varchar(200) NOT NULL,
  `nama_ins_pend` varchar(200) NOT NULL,
  `tahun_lulus` varchar(200) NOT NULL,
  `nilai_ijazah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pencaker`
--

INSERT INTO `data_pencaker` (`no_ktp`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `stts_perkawinan`, `kewarganegaraan`, `tinggi_badan`, `berat_badan`, `no_hp`, `alamat_lengkap`, `tingkat_pend`, `jenis_jurusan`, `nama_ins_pend`, `tahun_lulus`, `nilai_ijazah`) VALUES
('2147483647', 'R. Subangkit Ramadhan', 'Subang', '2000-11-27', 'L', '', '', 'wni', 165, 50, '2147483647', 'Subang Btn Gmi', '', 'kedokteran', 'ITB', '1978', '3'),
('3217648900047', 'Ahmad irfan Maulana', 'Cibogo', '2002-11-04', 'L', '', 'duda', 'wni', 164, 50, '089764231432', 'Cibogo - Subang', 'sma', 'Tata Boga', 'MAN', '2015', '123'),
('3217648900079', 'cahya andrian', 'Subang', '2018-04-14', 'L', '', 'belum nikah', 'wni', 168, 30, '2147483647', 'btn ciheuleut', 'sd', 'ipa', 'smp 2 subang', '1978', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_kode` varchar(100) NOT NULL DEFAULT '0',
  `user_foto` varchar(100) NOT NULL DEFAULT '0',
  `user_user` varchar(250) NOT NULL DEFAULT '0',
  `user_pass` varchar(250) NOT NULL DEFAULT '0',
  `user_level` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_kode`, `user_foto`, `user_user`, `user_pass`, `user_level`) VALUES
(3, 'us0001', '1462700686301.jpg', 'babang', '123', 'admin'),
(4, 'us0002', '342463_f72a4369-a26b-4a50-a650-b706eea1dd0d.jpg', 'bangbung', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pencaker`
--
ALTER TABLE `data_pencaker`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
