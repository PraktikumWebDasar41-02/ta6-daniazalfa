-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 04:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jeniskelamin` varchar(12) NOT NULL,
  `hobi` varchar(10) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`nim`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('6701174129', 'dania', 'MI4102', 'Perempuan', 'Voli', 'FIT', 'bsa1'),
('6701174129', 'daniazalfa', 'MI4101', 'Perempuan', 'renang', 'FIT', 'bsa1'),
('1111111111', 'dania zalfa', 'MI4101', 'Laki-Laki', 'renang', 'FIT', 'bsa1'),
('6701174129', 'dania', 'MI4101', 'Laki-Laki', 'renang', 'FIT', 'bsa1'),
('6701174129', 'dania', 'MI4102', 'Perempuan', 'renang', 'FIT', 'bsa1'),
('6701174129', 'ifa', 'MI4102', 'Perempuan', 'renang', 'FIT', 'bsa1'),
('6701174129', 'daniazalfa', 'MI4102', 'Perempuan', 'Voli', 'FIT', 'bsa1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jurnal1`
--
ALTER TABLE `t_jurnal1`
  ADD KEY `nim` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
