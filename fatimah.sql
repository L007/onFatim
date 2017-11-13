-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 06:47 AM
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
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `cabang` varchar(30) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `jumlah_stok`, `cabang`, `foto_produk`) VALUES
(1, 'roti coklat', 3000, 100, 'cbg_patrang', 'roti_coklat.jpg'),
(185, 'roti keju', 3000, 50, 'cbg_patrang', '07112017062231roti-keju.jpg'),
(188, 'roti gulung', 17000, 20, 'cbg_patrang', '081120170441312.png'),
(189, 'donat', 2000, 100, 'cbg_patrang', '081120170446593.png'),
(197, 'roti keju', 0, 20, 'cbg_karimata', '08112017064818roti-keju.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
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
(9, 'tester', 'tester', 'tester', 'tester', 3, '09876543567');

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
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
