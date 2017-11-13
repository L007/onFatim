-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 01:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musrenbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamus_usulan`
--

CREATE TABLE IF NOT EXISTS `kamus_usulan` (
`idKamus` int(11) NOT NULL,
  `namaUsulan` varchar(100) NOT NULL,
  `jenisUsulan` varchar(30) NOT NULL,
  `pelaksana` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamus_usulan`
--

INSERT INTO `kamus_usulan` (`idKamus`, `namaUsulan`, `jenisUsulan`, `pelaksana`) VALUES
(1, 'Pembuatan Taman', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(2, 'Jembatan Bentang 2m Konvensional', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(3, 'Jembatan Bentang 2m (U Ditch)', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(4, 'Pembangunan Jembatan Bentang 4,8 x 4 m	', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(5, 'Pembangunan Jembatan Bentang 4,8 x 6 m	', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(6, 'Pembangunan Jembatan Bentang 4,8 x 8 m	', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(7, 'Pembangunan Jembatan Bentang 5 x 4 m	', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(8, 'Pembangunan Jembatan Bentang 5 x 8 m	', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(9, 'Pemasangan Lampu Penyeberangan', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(10, 'Pengecatan Marka Pita Penggaduh Thermoplastik Tebal 10 mm (utama)', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(11, 'Rambu Lalu Lintas (75 cm) / Papan Nama Jalan (selain rambu larangan)', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(12, 'Konstruksi Jalan Paving Permukiman Lebar 2m', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(13, 'Konstruksi Jalan Paving Permukiman Lebar 2 m dengan Saluran lebar 40 cm dengan plat', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(14, 'Konstruksi Jalan Paving Permukiman Lebar 3 m dengan Saluran lebar 40 cm dengan plat', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(15, 'Konstruksi Jalan Paving Permukiman Lebar 3 m dengan Saluran lebar 60 cm dengan plat', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(16, 'Konstruksi Jalan Paving Permukiman Lebar 4 m dengan Saluran lebar 60 cm dengan plat', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(17, 'Konstruksi Jalan Paving Permukiman Lebar 4 m dengan Saluran lebar 80 cm dengan plat', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(18, 'Konstruksi Jalan Paving Permukiman Lebar 5 m dengan Saluran lebar 100', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(19, 'Konstruksi Jalan Paving Permukiman Lebar 5 m dengan Saluran lebar 80 cm dengan plat	', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(20, 'Konstruksi Jalan Paving Permukiman Lebar 6 m dengan Saluran lebar 100 cm dengan plat', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(21, 'Konstruksi jalan Paving untuk makam Paving Tebal 8cm', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(22, 'Pemasangan PJU dengan kabel udara (Lebar Jalan Minimal 3m)', 'USULAN FISIK', 'Dinas Kebersihan dan Ruang Terbuka Hijau'),
(23, 'Pembuatan Sumur Kebakaran', 'USULAN FISIK', 'Dinas Kebersihan dan Ruang Terbuka Hijau'),
(24, 'Pengurugan Lahan', 'USULAN FISIK', 'Dinas Kebersihan dan Ruang Terbuka Hijau'),
(25, 'Rehabilitasi Pagar dengan Precast Pagar Panel/Pabrikasi', 'USULAN FISIK', 'Dinas Kebersihan dan Ruang Terbuka Hijau'),
(26, 'Pembangunan Portal Pembatas', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(27, 'Pembangunan Kantor Pengelola Pariwisata', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(28, 'Pembangunan Lampu Jalan', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(29, 'Pembangunan Rumah Ibadah', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(30, 'Pembangunan Lahan Parkir', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(31, 'Pengecetan Zebra Cross', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(32, 'Pengecetan Marka Jalan', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(33, 'Pembangunan Trotoar', 'USULAN FISIK', 'Dinas Perumahan Rakyat dan Kawasan Permukiman, Cipta Karya dan Tata Ruang'),
(34, 'Gerobak Sampah', 'USULAN FISIK', 'Dinas Kebersihan dan Ruang Terbuka Hijau'),
(35, 'Pelatihan Administrasi Perkantoran', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(36, 'Pelatihan Akuntansi Dasar', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(37, 'Pelatihan Alat Angkat Angkut', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(38, 'Pelatihan Desain Grafis', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(39, 'Pelatihan IT Support', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(40, 'Pelatihan Las FCAW', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(41, 'Pelatihan Las SMAW', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(42, 'Pelatihan Mobile Crane', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(43, 'Pelatihan Multimedia', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(44, 'Pelatihan Otomotif - Mobil', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(45, 'Pelatihan Otomotif - Sepeda Motor', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(46, 'Pelatihan Perhotelan', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(47, 'Pelatihan Teknisi Komputer', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(48, 'Pelatihan Terapis Spa', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(49, 'Pelatihan Terapis Spa Level III	', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(50, 'Pelatihan Bahasa Asing', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(51, 'Pelatihan Kerajinan', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(52, 'Pelatihan Manajemen Bisnis', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(53, 'Pelatihan Teknologi Mekanik', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(54, 'Pelatihan Public Speaking', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(55, 'Pelatihan Satuan Pengamanan', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(56, 'Pelatihan dan Simulasi Penanggulangan dan Pemadaman Kebakaran', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(57, 'Pelatihan Keterampilan Kerja Kejuruan Elektronika / Industri', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(58, 'Pelatihan Keterampilan Kerja Kejuruan Listrik Industri', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(59, 'Pelatihan Keterampilan Kerja Kejuruan Las Listrik', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(60, 'Pelatihan Keterampilan Kerja Kejuruan Operator Alat Berat', 'USULAN NON FISIK', 'Dinas Tenaga Kerja'),
(61, 'Pelatihan Olahan Hasil Pangan', 'USULAN NON FISIK', 'Dinas Ketahanan Pangan dan Pertanian'),
(62, 'Pembentukan Taman Bacaan Masyarakat', 'USULAN NON FISIK', 'Dinas Perpustakaan dan Kearsipan');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
`idKecamatan` int(11) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idKecamatan`, `kecamatan`) VALUES
(1, 'Ajung'),
(2, 'Ambulu'),
(3, 'Arjasa'),
(4, 'Balung'),
(5, 'Bangsalsari'),
(6, 'Gumukmas'),
(7, 'Jelbuk'),
(8, 'Jenggawah'),
(9, 'Jombang'),
(10, 'Kalisat'),
(11, 'Kaliwates'),
(12, 'Kencong'),
(13, 'Ledokombo'),
(14, 'Mayang'),
(15, 'Mumbulsari'),
(16, 'Pakusari'),
(17, 'Panti'),
(18, 'Patrang'),
(19, 'Puger'),
(20, 'Rambipuji'),
(21, 'Semboro'),
(22, 'Silo'),
(23, 'Sukorambi'),
(24, 'Sukowono'),
(25, 'Sumberbaru'),
(26, 'Sumberjambe'),
(27, 'Sumbersari'),
(28, 'Tanggul'),
(29, 'Tempurejo'),
(30, 'Umbulsari'),
(31, 'Wuluhan'),
(95, 'kecamatan');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
`idKelurahan` int(11) NOT NULL,
  `idKecamatan` int(11) NOT NULL,
  `kelurahan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`idKelurahan`, `idKecamatan`, `kelurahan`) VALUES
(1, 12, 'PASEBAN'),
(2, 12, 'CAKRU'),
(3, 12, 'KRATON'),
(4, 12, 'WONOREJO'),
(5, 12, 'KENCONG'),
(6, 6, 'KEPANJEN'),
(7, 6, 'MAYANGAN'),
(8, 6, 'MENAMPU'),
(9, 6, 'BAGOREJO'),
(10, 6, 'GUMUKMAS'),
(11, 6, 'PURWOSARI'),
(12, 6, 'TEMBOKREJO'),
(13, 6, 'KARANG REJO'),
(14, 19, 'MOJOMULYO'),
(15, 19, 'MOJOSARI'),
(16, 19, 'PUGER KULON'),
(17, 19, 'PUGER WETAN'),
(18, 19, 'GRENDEN'),
(19, 19, 'MLOKOREJO'),
(20, 19, 'KASIYAN'),
(21, 19, 'KASIYAN TIMUR'),
(22, 19, 'WONOSARI'),
(23, 19, 'JAMBEARUM'),
(24, 19, 'BAGON'),
(25, 19, 'WRINGIN TELU'),
(26, 31, 'LOJEJER'),
(27, 31, 'AMPEL'),
(28, 31, 'TANJUNG REJO'),
(29, 31, 'KESILIR'),
(30, 31, 'DUKUH DEMPOK'),
(31, 31, 'TAMANSARI'),
(32, 31, 'GLUNDENGAN'),
(33, 2, 'SUMBERREJO'),
(34, 2, 'ANDONGSARI'),
(35, 2, 'SABRANG'),
(36, 2, 'AMBULU'),
(37, 2, 'PONTANG'),
(38, 2, 'KARANGANYAR'),
(39, 2, 'TEGALSARI'),
(40, 29, 'ANDONGREJO'),
(41, 29, 'CURAHNONGKO'),
(42, 29, 'SANENREJO'),
(43, 29, 'WONOASRI'),
(44, 29, 'SIDODADI'),
(45, 29, 'PONDOKREJO'),
(46, 29, 'CURAHTAKIR'),
(47, 29, 'TEMPUREJO'),
(48, 22, 'MULYOREJO'),
(49, 22, 'PACE'),
(50, 22, 'HARJOMULYO'),
(51, 22, 'KARANGHARJO'),
(52, 22, 'SILO'),
(53, 22, 'SEMPOLAN'),
(54, 22, 'SUMBERJATI'),
(55, 22, 'GARAHAN'),
(56, 22, 'SIDOMULYO'),
(57, 14, 'SEPUTIH'),
(58, 14, 'SIDOMUKTI'),
(59, 14, 'SUMBER KEJAYAN'),
(60, 14, 'TEGALREJO'),
(61, 14, 'TEGALWARU'),
(62, 14, 'MAYANG'),
(63, 14, 'MRAWAN'),
(64, 15, 'KAWANGREJO'),
(65, 15, 'TAMANSARI'),
(66, 15, 'SUCO'),
(67, 15, 'LAMPEJI'),
(68, 15, 'MUMBULSARI'),
(69, 15, 'LENGKONG'),
(70, 15, 'KARANGKEDAWUNG'),
(71, 8, 'KEMUNINGSARI KIDUL'),
(72, 8, 'KERTONEGORO'),
(73, 8, 'JATISARI'),
(74, 8, 'SRUNI'),
(75, 8, 'CANGKRING'),
(76, 8, 'WONOJATI'),
(77, 8, 'JENGGAWAH'),
(78, 8, 'JATIMULYO'),
(79, 1, 'MANGARAN'),
(80, 1, 'SUKAMAKMUR'),
(81, 1, 'KLOMPANGAN'),
(82, 1, 'PANCAKARYA'),
(83, 1, 'AJUNG'),
(84, 1, 'WIROWONGSO'),
(85, 1, 'ROWO INDAH'),
(86, 20, 'CURAHMALANG'),
(87, 20, 'NOGOSARI'),
(88, 20, 'ROWOTAMTU'),
(89, 20, 'PECORO'),
(90, 20, 'RAMBIPUJI'),
(91, 20, 'KALIWINING'),
(92, 20, 'RAMBIGUNDAM'),
(93, 20, 'GUGUT'),
(94, 4, 'KARANG DUREN'),
(95, 4, 'KARANG SEMANDING'),
(96, 4, 'TUTUL'),
(97, 4, 'BALUNG KULON'),
(98, 4, 'BALUNG KIDUL'),
(99, 4, 'BALUNG LOR'),
(100, 4, 'GUMELAR'),
(101, 4, 'CURAH LELE'),
(102, 30, 'SUKORENO'),
(103, 30, 'GUNUNGSARI'),
(104, 30, 'UMBULSARI'),
(105, 30, 'TANJUNGSARI'),
(106, 30, 'PALERAN'),
(107, 30, 'UMBULREJO'),
(108, 30, 'GADINGREJO'),
(109, 30, 'SIDOREJO'),
(110, 30, 'TEGALWANGI'),
(111, 30, 'MUNDUREJO'),
(112, 21, 'REJO AGUNG'),
(113, 21, 'SEMBORO'),
(114, 21, 'SIDOMEKAR'),
(115, 21, 'SIDOMULYO'),
(116, 21, 'PONDOK JOYO'),
(117, 21, 'PODOK DALEM'),
(118, 9, 'KETING'),
(119, 9, 'JOMBANG'),
(120, 9, 'PADOMASAN'),
(121, 9, 'NGAMPELREJO'),
(122, 9, 'WRINGIN AGUNG'),
(123, 9, 'SARI MULYO'),
(124, 25, 'SUMBER AGUNG'),
(125, 25, 'ROWO TENGAH'),
(126, 25, 'YOSORATI'),
(127, 25, 'PRINGGOWIRAWAN'),
(128, 25, 'KARANG BAYAT'),
(129, 25, 'GELANG'),
(130, 25, 'JATIROTO'),
(131, 25, 'JAMINTORO'),
(132, 25, 'KALIGLAGAH'),
(133, 25, 'JAMBESARI'),
(134, 28, 'TANGGUL KULON'),
(135, 28, 'TANGGUL WETAN'),
(136, 28, 'KLATAKAN'),
(137, 28, 'SELODAKON'),
(138, 28, 'DARUNGAN'),
(139, 28, 'MANGGISAN'),
(140, 28, 'PATEMON'),
(141, 28, 'KRAMAT SUKOHARJO'),
(142, 5, 'KARANGSONO'),
(143, 5, 'SUKOREJO'),
(144, 5, 'PETUNG'),
(145, 5, 'TISNOGAMBAR'),
(146, 5, 'LANGKAP'),
(147, 5, 'BANGALSARI'),
(148, 5, 'GAMBIRONO'),
(149, 5, 'CURAH KALONG'),
(150, 5, 'TUGUSARI'),
(151, 5, 'BANJARSARI'),
(152, 5, 'BADEAN'),
(153, 17, 'KEMUNINGSARI LOR'),
(154, 17, 'GLAGAHWERO'),
(155, 17, 'SERUT'),
(156, 17, 'PANTI'),
(157, 17, 'PAKIS'),
(158, 17, 'SUCI'),
(159, 17, 'KEMIRI'),
(160, 23, 'JUBUNG'),
(161, 23, 'DUKUH MENCEK'),
(162, 23, 'SUKORAMBI'),
(163, 23, 'KARANGPRING'),
(164, 23, 'KELUNGKUNG'),
(165, 3, 'KEMUNING LOR'),
(166, 3, 'DARSONO'),
(167, 3, 'ARJASA'),
(168, 3, 'BITING'),
(169, 3, 'CANDIJATI'),
(170, 3, 'KAMAL'),
(171, 16, 'KERTOSARI'),
(172, 16, 'PAKUSARI'),
(173, 16, 'JATIAN'),
(174, 16, 'SUBO'),
(175, 16, 'SUMBERPINANG'),
(176, 16, 'BEDADUNG'),
(177, 16, 'PATEMON'),
(178, 10, 'GAMBIRAN'),
(179, 10, 'PLALANGAN'),
(180, 10, 'AJUNG'),
(181, 10, 'GLAGAHWERO'),
(182, 10, 'SUMBER JERUK'),
(183, 10, 'GUMUKSARI'),
(184, 10, 'PATEMPURAN'),
(185, 10, 'KALISAT'),
(186, 10, 'SUMBER KETEMPAH'),
(187, 10, 'SUKORENO'),
(188, 10, 'SUMBER KALONG'),
(189, 10, 'SEBANEN'),
(190, 13, 'SUREN'),
(191, 13, 'SUMBER SALAK'),
(192, 13, 'SUMBER BULUS'),
(193, 13, 'SUMBER LESUNG'),
(194, 13, 'LEMBENGAN'),
(195, 13, 'SUMBER ANGET'),
(196, 13, 'LEDOKOMBO'),
(197, 13, 'SLATENG'),
(198, 13, 'SUKOGIDRI'),
(199, 13, 'KARANG PAITON'),
(200, 26, 'RANDU AGUNG'),
(201, 26, 'CUMEDAK'),
(202, 26, 'GUNUNG MALANG'),
(203, 26, 'ROWOSARI'),
(204, 26, 'SUMBER JAMBE'),
(205, 26, 'SUMBER PAKEM'),
(206, 26, 'PLEREYAN'),
(207, 26, 'PRINGGONDANI'),
(208, 26, 'JAMBE ARUM'),
(209, 24, 'SUMBERWARU'),
(210, 24, 'SUKOREJO'),
(211, 24, 'SUKOSARI'),
(212, 24, 'BALET BARU'),
(213, 24, 'SUMBER WRINGIN'),
(214, 24, 'MOJOGENI'),
(215, 24, 'SUKOKERTO'),
(216, 24, 'SUKOWONO'),
(217, 24, 'DAWUHAN MANGLI'),
(218, 24, 'ARJASA'),
(219, 24, 'SUMBERDANTI'),
(220, 24, 'POCANGAN'),
(221, 7, 'PANDUMAN'),
(222, 7, 'JELBUK'),
(223, 7, 'SUKOWIRYO'),
(224, 7, 'SUGER KIDUL'),
(225, 7, 'SUKO JEMBER'),
(226, 7, 'SUCO PENGEPOK'),
(227, 11, 'MANGLI'),
(228, 11, 'SEMPUSARI'),
(229, 11, 'KALIWATES'),
(230, 11, 'TEGAL BESAR'),
(231, 11, 'JEMBER KIDUL'),
(232, 11, 'KEPATIHAN'),
(233, 11, 'KEBON AGUNG'),
(234, 27, 'KERANJINGAN'),
(235, 27, 'WIROLEGI'),
(236, 27, 'KARANGREJO'),
(237, 27, 'KEBONSARI'),
(238, 27, 'SUMBERSARI'),
(239, 27, 'TEGAL GEDE'),
(240, 27, 'ANTIROGO'),
(241, 18, 'GEBANG'),
(242, 18, 'JEMBER LOR'),
(243, 18, 'PATRANG'),
(244, 18, 'BARATAN'),
(245, 18, 'BINTORO'),
(246, 18, 'SLAWU'),
(247, 18, 'JUMERTO'),
(248, 18, 'BANJARSENGON');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `idLevel` int(11) NOT NULL,
  `hakAkses` enum('bupati','kecamatan','keluarahan','warga','dinas pariwisata','dinas perindustrian dan perdagangan','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`idLevel`, `hakAkses`) VALUES
(1, 'bupati'),
(2, 'kecamatan'),
(3, 'keluarahan'),
(4, 'warga'),
(5, 'dinas pariwisata'),
(6, 'dinas perindustrian dan perdagangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_industri`
--

CREATE TABLE IF NOT EXISTS `tb_industri` (
  `idKelurahan` int(11) NOT NULL,
  `nilaiJI` float NOT NULL DEFAULT '0',
  `nilaiLS` float NOT NULL DEFAULT '0',
  `nilaiTA` float NOT NULL DEFAULT '0',
  `nilaiAS` float NOT NULL DEFAULT '0',
  `totalScore` int(11) NOT NULL DEFAULT '0',
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_industri`
--

INSERT INTO `tb_industri` (`idKelurahan`, `nilaiJI`, `nilaiLS`, `nilaiTA`, `nilaiAS`, `totalScore`, `status`) VALUES
(1, 4, 6, 4, 8, 56, 'kurang potensial'),
(2, 1, 1, 1, 1, 11, 'kurang potensial'),
(3, 9, 9, 3, 5, 85, 'sangat potensial'),
(4, 6, 5, 5, 5, 61, 'cukup potensial'),
(5, 0, 0, 0, 0, 0, NULL),
(6, 0, 0, 0, 0, 0, NULL),
(7, 0, 0, 0, 0, 0, NULL),
(8, 0, 0, 0, 0, 0, NULL),
(9, 0, 0, 0, 0, 0, NULL),
(10, 0, 0, 0, 0, 0, NULL),
(11, 0, 0, 0, 0, 0, NULL),
(12, 0, 0, 0, 0, 0, NULL),
(13, 0, 0, 0, 0, 0, NULL),
(14, 1, 1, 1, 1, 11, 'kurang potensial'),
(15, 0, 0, 0, 0, 0, NULL),
(16, 0, 0, 0, 0, 0, NULL),
(17, 0, 0, 0, 0, 0, NULL),
(18, 0, 0, 0, 0, 0, NULL),
(19, 0, 0, 0, 0, 0, NULL),
(20, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pariwisata`
--

CREATE TABLE IF NOT EXISTS `tb_pariwisata` (
  `idKelurahan` int(11) NOT NULL,
  `nilaiKS` float NOT NULL DEFAULT '0',
  `nilaiFP` float NOT NULL DEFAULT '0',
  `nilaiAS` float NOT NULL DEFAULT '0',
  `nilaiKK` float NOT NULL DEFAULT '0',
  `nilaiPP` float NOT NULL DEFAULT '0',
  `nilaiPS` float NOT NULL DEFAULT '0',
  `totalScore` int(11) NOT NULL DEFAULT '0',
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pariwisata`
--

INSERT INTO `tb_pariwisata` (`idKelurahan`, `nilaiKS`, `nilaiFP`, `nilaiAS`, `nilaiKK`, `nilaiPP`, `nilaiPS`, `totalScore`, `status`) VALUES
(1, 9, 5, 5, 5, 5, 5, 73, 'potensial'),
(2, 3, 4, 8, 9, 3, 9, 56, 'kurang potensial'),
(3, 2, 4, 3, 9, 9, 9, 48, 'kurang potensial'),
(4, 9, 9, 3, 7, 8, 6, 85, 'sangat potensial'),
(5, 1, 1, 1, 1, 1, 1, 11, 'kurang potensial'),
(6, 0, 0, 0, 0, 0, 0, 0, NULL),
(7, 0, 0, 0, 0, 0, 0, 0, NULL),
(8, 0, 0, 0, 0, 0, 0, 0, NULL),
(9, 0, 0, 0, 0, 0, 0, 0, NULL),
(10, 0, 0, 0, 0, 0, 0, 0, NULL),
(11, 0, 0, 0, 0, 0, 0, 0, NULL),
(12, 0, 0, 0, 0, 0, 0, 0, NULL),
(13, 0, 0, 0, 0, 0, 0, 0, NULL),
(14, 7, 9, 6, 5, 8, 7, 80, 'potensial'),
(15, 6, 6, 3, 4, 9, 3, 59, 'kurang potensial'),
(16, 1, 1, 1, 1, 1, 1, 11, 'kurang potensial'),
(17, 0, 0, 0, 0, 0, 0, 0, NULL),
(18, 0, 0, 0, 0, 0, 0, 0, NULL),
(19, 0, 0, 0, 0, 0, 0, 0, NULL),
(20, 0, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_perdagangan`
--

CREATE TABLE IF NOT EXISTS `tb_perdagangan` (
  `idKelurahan` int(11) NOT NULL,
  `nilaiJU` float NOT NULL DEFAULT '0',
  `nilaiLJ` float NOT NULL DEFAULT '0',
  `nilaiTA` float NOT NULL DEFAULT '0',
  `nilaiAS` float NOT NULL DEFAULT '0',
  `totalScore` int(11) NOT NULL DEFAULT '0',
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perdagangan`
--

INSERT INTO `tb_perdagangan` (`idKelurahan`, `nilaiJU`, `nilaiLJ`, `nilaiTA`, `nilaiAS`, `totalScore`, `status`) VALUES
(1, 9, 6, 3, 5, 75, 'potensial'),
(2, 3, 9, 9, 9, 70, 'potensial'),
(3, 1, 9, 1, 1, 35, 'kurang potensial'),
(4, 9, 9, 9, 8, 99, 'sangat potensial'),
(5, 7, 8, 8, 7, 83, 'sangat potensial'),
(6, 0, 0, 0, 0, 0, NULL),
(7, 0, 0, 0, 0, 0, NULL),
(8, 0, 0, 0, 0, 0, NULL),
(9, 0, 0, 0, 0, 0, NULL),
(10, 0, 0, 0, 0, 0, NULL),
(11, 0, 0, 0, 0, 0, NULL),
(12, 0, 0, 0, 0, 0, NULL),
(13, 0, 0, 0, 0, 0, NULL),
(14, 1, 1, 1, 1, 11, 'kurang potensial'),
(15, 0, 0, 0, 0, 0, NULL),
(16, 0, 0, 0, 0, 0, NULL),
(17, 0, 0, 0, 0, 0, NULL),
(18, 0, 0, 0, 0, 0, NULL),
(19, 0, 0, 0, 0, 0, NULL),
(20, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`idUser` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `idLevel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `idLevel`) VALUES
(1, 'bupati', 'bupati', 1),
(2, 'kecamatan', 'kecamatan', 2),
(3, 'baratan', 'baratan', 3),
(4, 'warga', 'warga', 4),
(5, 'pariwisata', 'pariwisata', 5),
(6, 'disperindag', 'disperindag', 6),
(7, 'wonorejo', 'wonorejo', 3),
(8, 'paseban', 'paseban', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
--

CREATE TABLE IF NOT EXISTS `usulan` (
`idUsulan` int(11) NOT NULL,
  `idKelurahan` int(11) NOT NULL,
  `usulan` text NOT NULL,
  `lokasi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulan`
--

INSERT INTO `usulan` (`idUsulan`, `idKelurahan`, `usulan`, `lokasi`, `kategori`, `keterangan`, `status`) VALUES
(3, 1, 'Konstruksi Jalan Paving Baru Lebar 4 m dengan Saluran lebar 60 cm dengan plat\r\n(utama)', 'jalan slamet riyadi no 8', 'pariwisata', 'untuk mempermudah akses ke area wisata', 'diterima'),
(4, 15, 'Konstruksi Jalan Paving Baru Lebar 4 m dengan Saluran lebar 60 cm dengan plat\r\n(utama)', 'jalan jawa', 'industri', 'sangat membutuhkan', 'diterima'),
(5, 50, 'Pemeliharaan Jalan Overlay\r\n(utama)', 'jalan jember', 'perdagangan', 'sangat membutuhkan', 'dinilai'),
(6, 15, 'Konstruksi Jalan Paving Baru Lebar 4 m dengan Saluran lebar 60 cm dengan plat\r\n(utama)', 'jalan jawa', 'pariwisata', 'sangat membutuhkan', 'belum disetujui'),
(7, 20, 'Konstruksi Jalan Paving Baru Lebar 4 m dengan Saluran lebar 60 cm dengan plat\r\n(utama)', 'jalan jawa', 'industri', 'sangat membutuhkan', 'belum disetujui'),
(11, 1, 'jalan rusak', 'jalan raya paseban', 'Pariwisata', 'untuk mempermudah akses wisata', 'belum disetujui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamus_usulan`
--
ALTER TABLE `kamus_usulan`
 ADD PRIMARY KEY (`idKamus`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
 ADD PRIMARY KEY (`idKecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
 ADD PRIMARY KEY (`idKelurahan`), ADD KEY `idKecamatan` (`idKecamatan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`idLevel`);

--
-- Indexes for table `tb_industri`
--
ALTER TABLE `tb_industri`
 ADD PRIMARY KEY (`idKelurahan`);

--
-- Indexes for table `tb_pariwisata`
--
ALTER TABLE `tb_pariwisata`
 ADD PRIMARY KEY (`idKelurahan`);

--
-- Indexes for table `tb_perdagangan`
--
ALTER TABLE `tb_perdagangan`
 ADD PRIMARY KEY (`idKelurahan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`idUser`), ADD KEY `idLevel` (`idLevel`), ADD KEY `idLevel_2` (`idLevel`);

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
 ADD PRIMARY KEY (`idUsulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamus_usulan`
--
ALTER TABLE `kamus_usulan`
MODIFY `idKamus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
MODIFY `idKecamatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
MODIFY `idKelurahan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=249;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usulan`
--
ALTER TABLE `usulan`
MODIFY `idUsulan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`idKecamatan`) REFERENCES `kecamatan` (`idKecamatan`);

--
-- Constraints for table `tb_industri`
--
ALTER TABLE `tb_industri`
ADD CONSTRAINT `tb_industri_ibfk_1` FOREIGN KEY (`idKelurahan`) REFERENCES `kelurahan` (`idKelurahan`);

--
-- Constraints for table `tb_pariwisata`
--
ALTER TABLE `tb_pariwisata`
ADD CONSTRAINT `tb_pariwisata_ibfk_1` FOREIGN KEY (`idKelurahan`) REFERENCES `kelurahan` (`idKelurahan`);

--
-- Constraints for table `tb_perdagangan`
--
ALTER TABLE `tb_perdagangan`
ADD CONSTRAINT `tb_perdagangan_ibfk_1` FOREIGN KEY (`idKelurahan`) REFERENCES `kelurahan` (`idKelurahan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idLevel`) REFERENCES `level` (`idLevel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
