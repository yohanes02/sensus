-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2021 at 06:13 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 5.6.40-50+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-16 20:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `nik` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `agama` enum('Kristen Protestan','Kristen Katolik','Hindu','Buddha','Islam','Konghucu') NOT NULL,
  `bekerja` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `agama`, `bekerja`) VALUES
('317506100200001', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-08', 'P', 'kp pisangan', 1, 1, 'Kristen Protestan', 1),
('317506100200002', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-09', 'P', 'kp pisangan', 1, 1, 'Kristen Protestan', 1),
('317506100200003', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-10', 'L', 'kp pisangan', 1, 1, 'Kristen Protestan', 1),
('317506100200004', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-11', 'L', 'kp pisangan', 1, 1, 'Islam', 1),
('317506100200005', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-12', 'L', 'kp pisangan', 1, 1, 'Islam', 1),
('317506100200006', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-13', 'L', 'kp pisangan', 1, 1, 'Islam', 1),
('317506100200007', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-14', 'L', 'kp pisangan', 1, 1, 'Islam', 1),
('317506100200008', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-15', 'L', 'kp pisangan', 1, 1, 'Islam', 1),
('317506100200009', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-16', 'L', 'kp pisangan', 1, 1, 'Islam', 1),
('317506100200010', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-17', 'L', 'kp pisangan', 1, 1, 'Islam', 0),
('317506100200011', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-18', 'P', 'kp pisangan', 2, 2, 'Islam', 0),
('317506100200012', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-19', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200013', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-20', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200014', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-21', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200015', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-22', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200016', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-23', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200017', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-24', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200018', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-25', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200019', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-26', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200020', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-27', 'P', 'kp pisangan', 2, 2, 'Islam', 1),
('317506100200021', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-28', 'P', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200022', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-02-29', 'P', 'kp pisangan', 3, 3, 'Islam', 0),
('317506100200023', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-01', 'P', 'kp pisangan', 3, 3, 'Islam', 0),
('317506100200024', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-02', 'P', 'kp pisangan', 3, 3, 'Islam', 0),
('317506100200025', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-03', 'P', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200026', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-04', 'P', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200027', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-05', 'L', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200028', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-06', 'L', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200029', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-07', 'L', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200030', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-08', 'L', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200031', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-09', 'L', 'kp pisangan', 3, 3, 'Islam', 1),
('317506100200032', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-10', 'L', 'kp pisangan', 4, 4, 'Islam', 0),
('317506100200033', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-11', 'L', 'kp pisangan', 4, 4, 'Islam', 0),
('317506100200034', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-12', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 0),
('317506100200035', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-13', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 0),
('317506100200036', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-14', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 0),
('317506100200037', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-15', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 1),
('317506100200038', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-16', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 1),
('317506100200039', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-17', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 1),
('317506100200040', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-18', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 1),
('317506100200041', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-19', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 1),
('317506100200042', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-20', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 1),
('317506100200043', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-21', 'L', 'kp pisangan', 4, 4, 'Kristen Katolik', 1),
('317506100200044', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-22', 'L', 'kp pisangan', 5, 5, 'Kristen Protestan', 1),
('317506100200045', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-23', 'L', 'kp pisangan', 5, 5, 'Kristen Protestan', 1),
('317506100200046', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-24', 'L', 'kp pisangan', 5, 5, 'Kristen Protestan', 1),
('317506100200047', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-25', 'P', 'kp pisangan', 5, 5, 'Kristen Protestan', 1),
('317506100200048', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-26', 'P', 'kp pisangan', 5, 5, 'Kristen Protestan', 1),
('317506100200049', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-27', 'P', 'kp pisangan', 5, 5, 'Kristen Protestan', 0),
('317506100200050', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-28', 'P', 'kp pisangan', 5, 5, 'Kristen Protestan', 0),
('317506100200051', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-29', 'P', 'kp pisangan', 5, 5, 'Kristen Protestan', 1),
('317506100200052', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-30', 'P', 'kp pisangan', 5, 5, 'Kristen Protestan', 1),
('317506100200053', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-03-31', 'P', 'kp pisangan', 5, 5, 'Islam', 1),
('317506100200054', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-01', 'P', 'kp pisangan', 5, 5, 'Islam', 1),
('317506100200055', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-02', 'P', 'kp pisangan', 5, 5, 'Islam', 1),
('317506100200056', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-03', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200057', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-04', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200058', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-05', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200059', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-06', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200060', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-07', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200061', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-08', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200062', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-09', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200063', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-10', 'P', 'kp pisangan', 6, 6, 'Islam', 1),
('317506100200064', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-11', 'L', 'kp pisangan', 6, 6, 'Islam', 0),
('317506100200065', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-12', 'L', 'kp pisangan', 6, 6, 'Islam', 0),
('317506100200066', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-13', 'L', 'kp pisangan', 7, 7, 'Islam', 0),
('317506100200067', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-14', 'L', 'kp pisangan', 7, 7, 'Islam', 0),
('317506100200068', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-15', 'L', 'kp pisangan', 7, 7, 'Islam', 0),
('317506100200069', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-16', 'L', 'kp pisangan', 7, 7, 'Islam', 1),
('317506100200070', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-17', 'L', 'kp pisangan', 7, 7, 'Islam', 1),
('317506100200071', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-18', 'L', 'kp pisangan', 7, 7, 'Islam', 1),
('317506100200072', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-19', 'L', 'kp pisangan', 7, 7, 'Islam', 1),
('317506100200073', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-20', 'L', 'kp pisangan', 7, 7, 'Islam', 1),
('317506100200074', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-21', 'L', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200075', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-22', 'L', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200076', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-23', 'L', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200077', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-24', 'L', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200078', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-25', 'L', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200079', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-26', 'L', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200080', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-27', 'P', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200081', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-28', 'P', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200082', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-29', 'P', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200083', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-04-30', 'P', 'kp pisangan', 8, 8, 'Islam', 1),
('317506100200084', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-01', 'P', 'kp pisangan', 8, 8, 'Islam', 0),
('317506100200085', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-02', 'P', 'kp pisangan', 8, 8, 'Islam', 0),
('317506100200086', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-03', 'P', 'kp pisangan', 9, 9, 'Islam', 0),
('317506100200087', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-04', 'P', 'kp pisangan', 9, 9, 'Islam', 0),
('317506100200088', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-05', 'P', 'kp pisangan', 9, 9, 'Islam', 1),
('317506100200089', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-06', 'P', 'kp pisangan', 9, 9, 'Islam', 1),
('317506100200090', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-07', 'P', 'kp pisangan', 9, 9, 'Islam', 1),
('317506100200091', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-08', 'P', 'kp pisangan', 9, 9, 'Islam', 1),
('317506100200092', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-09', 'P', 'kp pisangan', 9, 9, 'Islam', 1),
('317506100200093', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-10', 'P', 'kp pisangan', 9, 9, 'Islam', 1),
('317506100200094', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-11', 'P', 'kp pisangan', 10, 10, 'Islam', 1),
('317506100200095', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-12', 'P', 'kp pisangan', 10, 10, 'Islam', 1),
('317506100200096', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-13', 'P', 'kp pisangan', 10, 10, 'Hindu', 1),
('317506100200097', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-14', 'P', 'kp pisangan', 10, 10, 'Hindu', 1),
('317506100200098', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-15', 'P', 'kp pisangan', 10, 10, 'Hindu', 1),
('317506100200099', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-16', 'P', 'kp pisangan', 10, 10, 'Buddha', 0),
('317506100200100', '81dc9bdb52d04dc20036dbd8313ed055', 'A', 'jakarta', '2000-05-17', 'P', 'kp pisangan', 10, 10, 'Buddha', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
