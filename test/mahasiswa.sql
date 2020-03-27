-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2019 at 08:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idtechde_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `email`, `password`, `foto`) VALUES
(1, 'Rahmat Sabilludin', 'rsabyl@gmail.com', '$2y$10$6SRzDx6eA9uLcdR0dN/neeve4SAGFxZtC9JtMObDD6AOQQ9.2VpeK', 'http://idtechdev.com/mahasiswa/foto/1.jpeg'),
(2, 'Monika Widya Katerine', 'monikawidyak@gmail.com', '$2y$10$81M5PHzBwYR2RP9RdU4ufe0tVpfa4ABs/4NbAwe0MEGVi1dAlNDOm', NULL),
(3, 'Rahmat Sabilludin', 'rahmatsabilludinn@gmail.com', '$2y$10$utcG6oMI8o2hb.8r4g64c.tkZkxGltw4Qa9rwfk0q7lN7j2wAlof6', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id` int(5) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `foto` varchar(255) DEFAULT 'http://idtechdev.com/mahasiswa/foto/foto.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id`, `nim`, `nama`, `jurusan`, `foto`) VALUES
(1, 'A11.2016.09515', 'Rahmat Sabilludin', 'S1 - Teknik Informatika', 'http://idtechdev.com/mahasiswa/foto_mhs/1.jpeg'),
(2, 'A15.2016.00649', 'Monika Widya Katerine', 'S1 - Ilmu Komunikasi', 'http://idtechdev.com/mahasiswa/foto_mhs/2.jpeg'),
(3, 'A15.2016.00261', 'Muhammad Hidayat', 'S1 - Desain Komunikasi Visual', 'http://idtechdev.com/mahasiswa/foto/foto.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
