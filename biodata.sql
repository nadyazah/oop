-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Apr 2017 pada 21.56
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud_oop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tmpt_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `telpon`) VALUES
(0, 'Guntur Wirawan', 'Banjarnegara', '1998-06-03', 'Jawa Tengah', '089965998321'),
(1, 'Setiyaning Utami', 'Banjarmangu', '1989-04-03', 'Kalimantan Barat', '082322465234'),
(2, 'Bayu Sutopo', 'Banjarnegara', '1993-12-30', 'Sumatra Barat', '085676776567'),
(3, 'Azizzah Farida Rahmah', 'Banjarnegara', '2004-03-29', 'Jawa Tengah', '085690887043'),
(4, 'Aisya Nabila Khaerunnisa', 'Banjarnegara', '2010-02-26', 'Jakarta', '087654887120'),
(5, 'Ragil Ramadhan', 'Banjarnegara', '1993-07-20', 'Jawa Barat', '085127677544');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
