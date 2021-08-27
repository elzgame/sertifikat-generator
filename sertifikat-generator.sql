-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 03:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikat-generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat-data`
--

CREATE TABLE `sertifikat-data` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_sertifikat` varchar(255) NOT NULL,
  `sebagai` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat-data`
--

INSERT INTO `sertifikat-data` (`id`, `nama`, `nomor_sertifikat`, `sebagai`, `tema`) VALUES
(4, 'Cintara Surya Elidanto', 'P123214', 'Peserta Terbaik', 'Memajukan Indonesia yang Lebih Bersinar di Era Digital'),
(5, 'Elidantossss', '123123', 'Relawan', 'Menjalankan Cinta Kasih'),
(12, 'Cintara Surya Elidanto', 'P.140-5531', 'Peserta Terbaik', 'Hidup itu indah, jangan dipersulit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sertifikat-data`
--
ALTER TABLE `sertifikat-data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sertifikat-data`
--
ALTER TABLE `sertifikat-data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
