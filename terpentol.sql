-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 10:51 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terpentol`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `id_stock` varchar(11) NOT NULL,
  `jumlah_bungkus` int(11) NOT NULL,
  `jumlah_pcs` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `tanggal`, `id_stock`, `jumlah_bungkus`, `jumlah_pcs`, `status`) VALUES
(1, '2024-01-17 17:00:00.000000', '0', 2, 35, 'barang_masuk'),
(2, '2024-01-08 17:00:00.000000', 'PO01', 10, 1, 'barang_masuk'),
(3, '2024-01-08 17:00:00.000000', 'PJ01', 5, 6, 'Barang Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `kode` varchar(225) NOT NULL,
  `jumlah_pcs` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jumlah_bungkus` int(100) NOT NULL,
  `harga_pcs` int(100) NOT NULL,
  `total_bungkus` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `nama_barang`, `kode`, `jumlah_pcs`, `gambar`, `jumlah_bungkus`, `harga_pcs`, `total_bungkus`) VALUES
(17, 'Pentol Ori', 'Po01', 65, '', 10, 1000, 50),
(18, 'Pentol Jamur', 'PJ01', 20, '', 5, 2000, 50),
(19, 'Tahu Bakso', 'TB01', 25, '', 8, 1000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(6, 'Zakia Sahra', 'zakia22ti@mahasiswa.pcr.ac.id', '$2y$10$ba2ZGcP.t7PYm1kpb113/u2DTEh1Zl6sQj4uT8jcffjfQKTtffOWi', 'default.jpg', 'Admin', 1704554226);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
