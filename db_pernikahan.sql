-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 12:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pernikahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_user`
--

CREATE TABLE `tbl_data_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `telepon_user` varchar(15) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE `tbl_form` (
  `id_undangan` int(11) NOT NULL,
  `nama_pria` varchar(100) NOT NULL,
  `nama_perempuan` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `kepada_yth` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `foto_background` varchar(100) NOT NULL,
  `akad_nikah` varchar(100) NOT NULL,
  `syukuran` varchar(100) NOT NULL,
  `nama_ayah_pria` varchar(100) NOT NULL,
  `nama_ibu_pria` varchar(100) NOT NULL,
  `nama_ayah_perempuan` varchar(100) NOT NULL,
  `nama_ibu_perempuan` varchar(100) NOT NULL,
  `peta_lokasi` varchar(100) NOT NULL,
  `mengundang1` varchar(100) NOT NULL,
  `mengundang2` varchar(100) NOT NULL,
  `mengundang3` varchar(100) NOT NULL,
  `mengundang4` varchar(100) NOT NULL,
  `mengundang5` varchar(100) NOT NULL,
  `mengundang6` varchar(100) NOT NULL,
  `mengundang7` varchar(100) NOT NULL,
  `mengundang8` varchar(100) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `photo_pria` varchar(255) DEFAULT NULL,
  `photo_perempuan` varchar(255) DEFAULT NULL,
  `galery1` varchar(100) NOT NULL,
  `galery2` varchar(100) NOT NULL,
  `galery3` varchar(100) NOT NULL,
  `galery4` varchar(100) NOT NULL,
  `galery5` varchar(100) NOT NULL,
  `galery6` varchar(100) NOT NULL,
  `foto_wishes1` varchar(100) NOT NULL,
  `foto_wishes2` varchar(100) NOT NULL,
  `foto_wishes3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`id_undangan`, `nama_pria`, `nama_perempuan`, `logo`, `kepada_yth`, `tanggal`, `waktu`, `foto_background`, `akad_nikah`, `syukuran`, `nama_ayah_pria`, `nama_ibu_pria`, `nama_ayah_perempuan`, `nama_ibu_perempuan`, `peta_lokasi`, `mengundang1`, `mengundang2`, `mengundang3`, `mengundang4`, `mengundang5`, `mengundang6`, `mengundang7`, `mengundang8`, `gambar1`, `gambar2`, `gambar3`, `photo_pria`, `photo_perempuan`, `galery1`, `galery2`, `galery3`, `galery4`, `galery5`, `galery6`, `foto_wishes1`, `foto_wishes2`, `foto_wishes3`) VALUES
(1, 'Kira', 'Lacus', 'loader.gif', 'Kyle Zafebent Remara', '2023-08-17', '08:00:00', 'Kira&Lacus2.jpg', 'Acara Tukar Cincin', 'Lempar Bunga', 'Jhon', 'Lucy', 'Stephen', 'Lisa', '', 'aaaa', 'bbbb', 'cccc', 'dddd', 'eeee', 'ffff', 'gggg', 'hhhh', 'Kira&Lacus.jpg', 'Kira&Lacus3.jpg', 'img_bg_2.jpg', 'Kira.jpg', 'Lacus.jpg', 'gallery-9.jpg', 'img_bg_3.jpg', 'groom.jpg', 'MapPernikahan.jpg', 'gallery-5.jpg', 'img_bg_1.jpg', 'BG.jpg', 'bride.jpg', 'Yk•Maru3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(4) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
('US01', 'Admin - 01', 'Admin', 'admin'),
('US02', 'User - 02', 'User', 'user'),
('US03', 'Haru-01', 'Haru', 'haru'),
('US04', 'Bellzebub-01', 'Bellzebub', 'Bellzebub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`id_undangan`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `id_undangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
