-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 09:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatimah`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` bigint(20) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `cabang` varchar(30) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `jumlah_stok`, `cabang`, `foto_produk`, `deskripsi`) VALUES
(204, 'kue tart', 50000, 200, 'cbg_patrang', '2011201719532913.jpg', 'ini roti enak'),
(205, 'roti keju', 2000, 32, 'cbg_patrang', '201120171954291.png', 'ini roti enak'),
(206, 'roti keju', 1000, 100, 'cbg_patrang', '21112017080949roti-keju.jpg', 'ini roti enak'),
(207, 'roti keju 2', 0, 1, 'cbg_patrang', '22112017160527roti-keju.jpg', 'ini roti enak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_produk` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_produk`, `id_user`, `jumlah`, `total_harga`, `tanggal`) VALUES
(10003, 204, 5, 10, 500000, '2017-11-23'),
(30007, 204, 7, 2, 100000, '2017-11-23'),
(40005, 204, 5, 30, 1500000, '2017-10-23'),
(40007, 205, 7, 10, 20000, '2017-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '3',
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `email`, `level`, `no_telepon`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 1, '081234537963'),
(2, 'cbg_patrang', 'cbg_patrang', 'cbg_patrang', 'cbg_patrang@gmail.com', 2, '083847157366'),
(3, 'cbg_sumatera', 'cbg_sumatera', 'cbg_sumatera', 'cbg_sumatera@gmail.com', 2, '08145678767'),
(4, 'cbg_karimata', 'cbg_karimata', 'cbg_karimata', 'cbg_karimata@gmail.com', 2, '08798765434'),
(5, 'eldi', 'eldi', 'eldi', 'antoeldi@gmail.com', 3, '08978390660'),
(7, 'hares', 'hares', 'hares', 'hares', 3, '09876543567'),
(8, 'testing', 'testing', 'testing', 'testing@gmail.com', 3, '09876543567'),
(9, 'tester', 'tester', 'tester', 'tester', 3, '09876543567'),
(10, '', '', '', '', 3, ''),
(11, '', '', '', '', 3, ''),
(12, '', '', '', '', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `tb_penjualan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
