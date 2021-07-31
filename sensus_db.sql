-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2021 at 08:20 PM
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
-- Table structure for table `history_work`
--

CREATE TABLE `history_work` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `start_work` date DEFAULT NULL,
  `end_work` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tipe` int(1) NOT NULL,
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `foto` text,
  `id_admin` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `title`, `tipe`, `deskripsi`, `isi`, `foto`, `id_admin`, `updated_at`) VALUES
(18, 'BLK 1', 0, 'DESKRIPSI BLK 1', '<p>ISI BLK 1</p>', 'berita-18.png', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(1) NOT NULL,
  `rw` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `name`, `username`, `password`, `type`, `rw`, `created_at`, `updated_at`) VALUES
(2, 'Admin 1', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, '2021-06-24 19:55:15', '2021-06-24 19:55:15'),
(3, 'Admin 2', 'admin2', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Admin 3', 'admin3', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Sekretaris 1', 'sekre1', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Sekretaris 2', 'sekre2', '827ccb0eea8a706c4c34a16891f84e7b', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `stats_alamat` int(11) DEFAULT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `agama` enum('Kristen Protestan','Kristen Katolik','Hindu','Buddha','Islam','Konghucu') NOT NULL,
  `bekerja` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `stats_alamat`, `rt`, `rw`, `agama`, `bekerja`) VALUES
('317506100200001', '81dc9bdb52d04dc20036dbd8313ed055', 'ALEX IVAN TOYONO', 'Jakarta', '2003-02-08', 'L', 'Taman Modern Blok B5 no  05', 0, 1, 6, 'Kristen Protestan', 0),
('317506100200002', '81dc9bdb52d04dc20036dbd8313ed055', 'ABDUL AZIZ', 'Jakarta', '2003-02-09', 'L', 'Taman Modern Blok B5 no  032', 0, 2, 6, 'Kristen Protestan', 1),
('317506100200003', '81dc9bdb52d04dc20036dbd8313ed055', 'YULIANA SUKARMO MADI ', 'Jakarta', '2001-02-10', 'P', 'Taman Modern Blok B3 no  017', 0, 3, 6, 'Kristen Protestan', 1),
('317506100200004', '81dc9bdb52d04dc20036dbd8313ed055', 'JOJO WAHYUDIH', 'Jakarta', '2001-02-11', 'L', 'Taman Modern Blok B3 no  017', 0, 10, 6, 'Islam', 1),
('317506100200005', '81dc9bdb52d04dc20036dbd8313ed055', 'MASRICHI', 'Jakarta', '2000-02-12', 'L', 'Taman Modern Blok C2 no  01', 0, 9, 6, 'Islam', 1),
('317506100200006', '81dc9bdb52d04dc20036dbd8313ed055', 'YAYAT SUPRATMAN ', 'Jakarta', '2000-02-13', 'L', 'Taman Modern Blok F3 no  12A', 0, 8, 6, 'Islam', 1),
('317506100200007', '81dc9bdb52d04dc20036dbd8313ed055', 'MAGRIAH', 'Jakarta', '2000-02-14', 'L', 'Taman Modern Blok B5 no  18', 0, 2, 6, 'Islam', 1),
('317506100200008', '81dc9bdb52d04dc20036dbd8313ed055', 'RUSNADI AMIRIDIN', 'Jakarta', '2000-02-15', 'L', 'Taman Modern Blok B5 no  02', 0, 4, 6, 'Islam', 0),
('317506100200009', '81dc9bdb52d04dc20036dbd8313ed055', 'ROHENDI ', 'Jakarta', '2000-02-16', 'L', 'Taman Modern Blok D1 no  26', 0, 6, 6, 'Islam', 0),
('317506100200010', '81dc9bdb52d04dc20036dbd8313ed055', 'ARIFIN SYAHPUTRA', 'Jakarta', '2000-02-17', 'L', 'Taman Modern Blok D1 no 02', 0, 5, 6, 'Islam', 0),
('317506100200011', '81dc9bdb52d04dc20036dbd8313ed055', 'FITRI ANDAYANI', 'Jakarta', '2000-02-18', 'P', 'Metland Metnteng Blok N no 11', 0, 10, 1, 'Islam', 0),
('317506100200012', '81dc9bdb52d04dc20036dbd8313ed055', 'ERNA YUNIATI', 'Jakarta', '2000-02-19', 'P', 'Metland Metnteng Blok N no 05', 0, 1, 1, 'Islam', 1),
('317506100200013', '81dc9bdb52d04dc20036dbd8313ed055', 'LIDYA PRISKA WATI', 'Jakarta', '2000-02-20', 'P', 'Metland Metnteng Blok N no 15', 0, 9, 1, 'Islam', 1),
('317506100200014', '81dc9bdb52d04dc20036dbd8313ed055', 'TINA SRI HAMDAYATI', 'Jakarta', '2000-02-21', 'P', 'Metland Metnteng Blok A no 10', 0, 1, 1, 'Islam', 1),
('317506100200015', '81dc9bdb52d04dc20036dbd8313ed055', 'SONIA SIANTURI', 'Jakarta', '2000-02-22', 'P', 'Metland Metnteng Blok N no 17', 0, 8, 1, 'Islam', 1),
('317506100200016', '81dc9bdb52d04dc20036dbd8313ed055', 'NUNUNG', 'Jakarta', '2000-02-23', 'P', 'Metland Metnteng Blok N no 18', 0, 3, 1, 'Islam', 1),
('317506100200017', '81dc9bdb52d04dc20036dbd8313ed055', 'YAYUK BUDI IRYAWATI', 'Jakarta', '2000-02-24', 'P', 'Metland Metnteng Blok N no 19', 0, 7, 1, 'Islam', 1),
('317506100200018', '81dc9bdb52d04dc20036dbd8313ed055', 'SIWI PONIYATI', 'Jakarta', '2000-02-25', 'P', 'Metland Metnteng Blok N no 20', 0, 4, 1, 'Islam', 1),
('317506100200019', '81dc9bdb52d04dc20036dbd8313ed055', 'SITI WULANDARI', 'Jakarta', '2000-02-26', 'P', 'Metland Metnteng Blok N no 21', 0, 6, 1, 'Islam', 1),
('317506100200020', '81dc9bdb52d04dc20036dbd8313ed055', 'MISWATI', 'Jakarta', '2000-02-27', 'P', 'Metland Metnteng Blok N no 22', 0, 5, 1, 'Islam', 1),
('317506100200021', '81dc9bdb52d04dc20036dbd8313ed055', 'HARMILA PUTRI', 'Jakarta', '2000-02-28', 'P', 'Jl. Irigasi ujung menteng', 0, 1, 3, 'Islam', 1),
('317506100200022', '81dc9bdb52d04dc20036dbd8313ed055', 'AZKA AQILLA QIRANI WAJDI', 'Jakarta', '2000-02-29', 'P', 'Jl. Irigasi ujung menteng', 0, 2, 3, 'Islam', 0),
('317506100200023', '81dc9bdb52d04dc20036dbd8313ed055', 'ZANNA KIRAINA', 'Jakarta', '2000-03-01', 'P', 'Jl. Irigasi ujung menteng', 0, 3, 3, 'Islam', 0),
('317506100200024', '81dc9bdb52d04dc20036dbd8313ed055', 'KAILA SHERLY SIFABELLA', 'Jakarta', '2000-03-02', 'P', 'Jl. Irigasi ujung menteng', 0, 4, 3, 'Islam', 0),
('317506100200025', '81dc9bdb52d04dc20036dbd8313ed055', 'ZELINE ZAKEISHA', 'Jakarta', '2000-03-03', 'P', 'Jl. Irigasi ujung menteng', 0, 5, 3, 'Islam', 1),
('317506100200026', '81dc9bdb52d04dc20036dbd8313ed055', 'JOVANKA PUTRI', 'Jakarta', '2000-03-04', 'P', 'Jl. Irigasi ujung menteng', 0, 9, 3, 'Islam', 1),
('317506100200027', '81dc9bdb52d04dc20036dbd8313ed055', 'ADYATAMA ALISTER BAGASKARA', 'Jakarta', '2000-03-05', 'L', 'Jl. Irigasi ujung menteng', 0, 8, 3, 'Islam', 1),
('317506100200028', '81dc9bdb52d04dc20036dbd8313ed055', 'GHANI DANIYAL BRAMANTIO', 'Jakarta', '2000-03-06', 'L', 'Jl. Irigasi ujung menteng', 0, 7, 3, 'Islam', 1),
('317506100200029', '81dc9bdb52d04dc20036dbd8313ed055', 'AJI PAMUNGKAS SUSENO', 'Jakarta', '2000-03-07', 'L', 'Jl. Irigasi ujung menteng', 0, 6, 3, 'Islam', 1),
('317506100200030', '81dc9bdb52d04dc20036dbd8313ed055', 'MUHAMMAD BAYU ALAM SEMESTA', 'Jakarta', '2000-03-08', 'L', 'Jl. Irigasi ujung menteng', 0, 10, 3, 'Islam', 1),
('317506100200031', '81dc9bdb52d04dc20036dbd8313ed055', 'FUADI BACHTIAR', 'Jakarta', '2000-03-09', 'L', 'Jl. Irigasi ujung menteng', 0, 3, 3, 'Islam', 1),
('317506100200032', '81dc9bdb52d04dc20036dbd8313ed055', 'MUHAMMAD RISKY ', 'Jakarta', '2000-03-10', 'L', 'Jl. Irigasi ujung menteng', 0, 1, 2, 'Islam', 0),
('317506100200033', '81dc9bdb52d04dc20036dbd8313ed055', 'ARZAN RAVINDRA MALIK', 'Jakarta', '2000-03-11', 'L', 'Jl. Irigasi ujung menteng', 0, 2, 2, 'Islam', 0),
('317506100200034', '81dc9bdb52d04dc20036dbd8313ed055', 'FIKRI SITOMPUL', 'Jakarta', '2000-03-12', 'L', 'Jl. Irigasi ujung menteng', 0, 3, 2, 'Kristen Katolik', 0),
('317506100200035', '81dc9bdb52d04dc20036dbd8313ed055', 'THOMAS CHRIST', 'Jakarta', '2000-03-13', 'L', 'Jl. Irigasi ujung menteng', 0, 4, 2, 'Kristen Katolik', 0),
('317506100200036', '81dc9bdb52d04dc20036dbd8313ed055', 'BARRA ZAYAN MAULANA', 'Jakarta', '2000-03-14', 'L', 'Jl. Irigasi ujung menteng', 0, 5, 2, 'Kristen Katolik', 0),
('317506100200037', '81dc9bdb52d04dc20036dbd8313ed055', 'NABIEL TIO', 'Jakarta', '2000-03-15', 'L', 'Jl. Irigasi ujung menteng', 0, 6, 2, 'Kristen Katolik', 1),
('317506100200038', '81dc9bdb52d04dc20036dbd8313ed055', 'YOEL  TIO', 'Jakarta', '2000-03-16', 'L', 'Jl. Irigasi ujung menteng', 0, 7, 2, 'Kristen Katolik', 1),
('317506100200039', '81dc9bdb52d04dc20036dbd8313ed055', 'ALFRED ALEXANDER', 'Jakarta', '2000-03-17', 'L', 'Jl. Irigasi ujung menteng', 0, 8, 2, 'Kristen Katolik', 1),
('317506100200040', '81dc9bdb52d04dc20036dbd8313ed055', 'CHRISTOPHER SUHENDRA', 'Jakarta', '2000-03-18', 'L', 'Jl. Irigasi ujung menteng', 0, 9, 2, 'Kristen Katolik', 1),
('317506100200041', '81dc9bdb52d04dc20036dbd8313ed055', 'JOSEVANS HENDRAJAYA', 'Jakarta', '2000-03-19', 'L', 'Jl. Irigasi ujung menteng', 0, 10, 2, 'Kristen Katolik', 1),
('317506100200042', '81dc9bdb52d04dc20036dbd8313ed055', 'STEVEN HENDRAJAYA', 'Jakarta', '2000-03-20', 'L', 'Jl. Irigasi ujung menteng', 0, 3, 4, 'Kristen Katolik', 1),
('317506100200043', '81dc9bdb52d04dc20036dbd8313ed055', 'CHRISTIAN SUHENDRA', 'Jakarta', '2000-03-21', 'L', 'Jl. Irigasi ujung menteng', 0, 2, 4, 'Kristen Katolik', 1),
('317506100200044', '81dc9bdb52d04dc20036dbd8313ed055', 'FELIX GERALD GAMIAN', 'Jakarta', '2000-03-22', 'L', 'Jl. Irigasi ujung menteng', 0, 1, 4, 'Kristen Protestan', 1),
('317506100200045', '81dc9bdb52d04dc20036dbd8313ed055', 'GIDEON HADAR HOSHEA', 'Jakarta', '2000-03-23', 'L', 'Jl. Irigasi ujung menteng', 0, 6, 4, 'Kristen Protestan', 1),
('317506100200046', '81dc9bdb52d04dc20036dbd8313ed055', 'IGNATIUS SIREGAR', 'Jakarta', '2000-03-24', 'L', 'Jl. Irigasi ujung menteng', 0, 5, 4, 'Kristen Protestan', 1),
('317506100200047', '81dc9bdb52d04dc20036dbd8313ed055', 'AALONA ABIGAIL PUTRI SUKANDAR', 'Jakarta', '2000-03-25', 'P', 'Jl. Irigasi ujung menteng', 0, 4, 4, 'Kristen Protestan', 1),
('317506100200048', '81dc9bdb52d04dc20036dbd8313ed055', 'CARISSA BINA CHESA', 'Jakarta', '2000-03-26', 'P', 'Jl. Irigasi ujung menteng', 0, 8, 4, 'Kristen Protestan', 1),
('317506100200049', '81dc9bdb52d04dc20036dbd8313ed055', 'EARLY BERLIAN', 'Jakarta', '2000-03-27', 'P', 'Jl. Irigasi ujung menteng', 0, 10, 4, 'Kristen Protestan', 0),
('317506100200050', '81dc9bdb52d04dc20036dbd8313ed055', 'DAVINA ESTER', 'Jakarta', '2000-03-28', 'P', 'Jl. Irigasi ujung menteng', 0, 9, 4, 'Kristen Protestan', 0),
('317506100200051', '81dc9bdb52d04dc20036dbd8313ed055', 'GARACE FIO  ALEXANDER', 'Jakarta', '2000-03-29', 'P', 'Jl. Irigasi ujung menteng', 0, 7, 4, 'Kristen Protestan', 1),
('317506100200052', '81dc9bdb52d04dc20036dbd8313ed055', 'JESSIE JUANITA KHARISA', 'Jakarta', '2000-03-30', 'P', 'Metland Metnteng Blok N no 19', 0, 10, 5, 'Kristen Protestan', 0),
('317506100200053', '81dc9bdb52d04dc20036dbd8313ed055', 'ANNISA AYU SAPUTRI', 'Jakarta', '2000-03-31', 'P', 'Metland Metnteng Blok N no 34', 0, 1, 5, 'Islam', 1),
('317506100200054', '81dc9bdb52d04dc20036dbd8313ed055', 'NUR AMINAH SULASTRI', 'Jakarta', '2000-04-01', 'P', 'Metland Metnteng Blok N no 16', 0, 9, 5, 'Islam', 1),
('317506100200055', '81dc9bdb52d04dc20036dbd8313ed055', 'ANDIRA RAHMANIA', 'Jakarta', '2000-04-02', 'P', 'Metland Metnteng Blok N no 27', 0, 2, 5, 'Islam', 1),
('317506100200056', '81dc9bdb52d04dc20036dbd8313ed055', 'NANDYA DARA OCTAVIA', 'Jakarta', '2000-04-03', 'P', 'Metland Metnteng Blok N no 11', 0, 8, 5, 'Islam', 1),
('317506100200057', '81dc9bdb52d04dc20036dbd8313ed055', 'DINA RAHMAYANTI', 'Jakarta', '2000-04-04', 'P', 'Metland Metnteng Blok N no 12', 0, 3, 5, 'Islam', 1),
('317506100200058', '81dc9bdb52d04dc20036dbd8313ed055', 'OCTAVIA PUTRI', 'Jakarta', '2000-04-05', 'P', 'Metland Metnteng Blok N no 13', 0, 7, 5, 'Islam', 1),
('317506100200059', '81dc9bdb52d04dc20036dbd8313ed055', 'DIAN PUTRI LESTARI', 'Jakarta', '2000-04-06', 'P', 'Metland Metnteng Blok N no 15', 0, 4, 5, 'Islam', 1),
('317506100200060', '81dc9bdb52d04dc20036dbd8313ed055', 'LINDA YUNIATI', 'Jakarta', '2000-04-07', 'P', 'Metland Metnteng Blok N no 116', 0, 5, 5, 'Islam', 1),
('317506100200061', '81dc9bdb52d04dc20036dbd8313ed055', 'MARHAMAH PUTRI ANASTASYA', 'Jakarta', '2000-04-08', 'P', 'Metland Metnteng Blok N no 34', 0, 6, 5, 'Islam', 1),
('317506100200062', '81dc9bdb52d04dc20036dbd8313ed055', 'RINDRY MAHARI PUTRI', 'Jakarta', '2000-04-09', 'P', 'Taman Modern Blok B5 no  05', 0, 6, 6, 'Islam', 1),
('317506100200063', '81dc9bdb52d04dc20036dbd8313ed055', 'RIRIN AYU', 'Jakarta', '2000-04-10', 'P', 'Taman Modern Blok B4 no  06', 0, 6, 6, 'Islam', 1),
('317506100200064', '81dc9bdb52d04dc20036dbd8313ed055', 'DION FADHILLAH SYAHPUTRA', 'Jakarta', '2000-04-11', 'L', 'Taman Modern Blok B3 no  07', 0, 6, 6, 'Islam', 0),
('317506100200065', '81dc9bdb52d04dc20036dbd8313ed055', 'ARIF NURHIDAYAH SYAHPUTRA', 'Jakarta', '2000-04-12', 'L', 'Taman Modern Blok B2 no  08', 0, 6, 6, 'Islam', 0),
('317506100200066', '81dc9bdb52d04dc20036dbd8313ed055', 'MUHAMMAD YUNUS ', 'Jakarta', '2000-04-13', 'L', 'Taman Modern Blok B1 no  09', 0, 7, 7, 'Islam', 0),
('317506100200067', '81dc9bdb52d04dc20036dbd8313ed055', 'MUHAMMAD ABHIZAR ABIRRU', 'Jakarta', '2000-04-14', 'L', 'Taman Modern Blok C5 no  10', 0, 7, 7, 'Islam', 0),
('317506100200068', '81dc9bdb52d04dc20036dbd8313ed055', 'AHMAD ALZAM AMANI', 'Jakarta', '2000-04-15', 'L', 'Taman Modern Blok C4 no  11', 0, 7, 7, 'Islam', 0),
('317506100200069', '81dc9bdb52d04dc20036dbd8313ed055', 'YUSUF AMMAR ABQARI', 'Jakarta', '2000-04-16', 'L', 'Taman Modern Blok C3 no  12', 0, 7, 7, 'Islam', 1),
('317506100200070', '81dc9bdb52d04dc20036dbd8313ed055', 'ALTAMIS ABBIYYA ', 'Jakarta', '2000-04-17', 'L', 'Taman Modern Blok C2 no  13', 0, 7, 7, 'Islam', 1),
('317506100200071', '81dc9bdb52d04dc20036dbd8313ed055', 'MUHAMMAD DHANI ', 'Jakarta', '2000-04-18', 'L', 'Taman Modern Blok C1 no  05', 0, 7, 7, 'Islam', 1),
('317506100200072', '81dc9bdb52d04dc20036dbd8313ed055', 'FAIZ ILHAM DAFFIN', 'Jakarta', '2000-04-19', 'L', 'Jl. Irigasi ujung menteng', 0, 1, 7, 'Islam', 1),
('317506100200073', '81dc9bdb52d04dc20036dbd8313ed055', 'FAREZKI GAFFI MANAF', 'Jakarta', '2000-04-20', 'L', 'Jl. Irigasi ujung menteng', 0, 2, 7, 'Islam', 1),
('317506100200074', '81dc9bdb52d04dc20036dbd8313ed055', 'RECYTOFA', 'Jakarta', '2000-04-21', 'L', 'Jl. Irigasi ujung menteng', 0, 3, 8, 'Islam', 1),
('317506100200075', '81dc9bdb52d04dc20036dbd8313ed055', 'AIRLANGGA RIZKI', 'Jakarta', '2000-04-22', 'L', 'Jl. Irigasi ujung menteng', 0, 4, 8, 'Islam', 1),
('317506100200076', '81dc9bdb52d04dc20036dbd8313ed055', 'RABANNI AL-ARABBY', 'Jakarta', '2000-04-23', 'L', 'Jl. Irigasi ujung menteng', 0, 5, 8, 'Islam', 1),
('317506100200077', '81dc9bdb52d04dc20036dbd8313ed055', 'SARFARAZ RASYA', 'Jakarta', '2000-04-24', 'L', 'Jl. Irigasi ujung menteng', 0, 6, 8, 'Islam', 1),
('317506100200078', '81dc9bdb52d04dc20036dbd8313ed055', 'ABDUL ROHMAN', 'Jakarta', '2000-04-25', 'L', 'Jl. Irigasi ujung menteng', 0, 7, 8, 'Islam', 1),
('317506100200079', '81dc9bdb52d04dc20036dbd8313ed055', 'NAQI NARANSYAH', 'Jakarta', '2000-04-26', 'L', 'Jl. Irigasi ujung menteng', 0, 8, 8, 'Islam', 1),
('317506100200080', '81dc9bdb52d04dc20036dbd8313ed055', 'AMEL MAHFUZ', 'Jakarta', '2000-04-27', 'P', 'Jl. Irigasi ujung menteng', 0, 9, 8, 'Islam', 1),
('317506100200081', '81dc9bdb52d04dc20036dbd8313ed055', 'AURELLIA TANISHA PUTRI', 'Jakarta', '2000-04-28', 'P', 'Jl. Irigasi ujung menteng', 0, 10, 8, 'Islam', 1),
('317506100200082', '81dc9bdb52d04dc20036dbd8313ed055', 'BINTAN NARAYA', 'Jakarta', '2000-04-29', 'P', 'Jl. Irigasi ujung menteng', 0, 10, 8, 'Islam', 1),
('317506100200083', '81dc9bdb52d04dc20036dbd8313ed055', 'FIONA ZEA', 'Jakarta', '2000-04-30', 'P', 'Jl. Irigasi ujung menteng', 0, 9, 8, 'Islam', 1),
('317506100200084', '81dc9bdb52d04dc20036dbd8313ed055', 'FIRA CANTIKA ', 'Jakarta', '2000-05-01', 'P', 'Jl. Irigasi ujung menteng', 0, 8, 8, 'Islam', 0),
('317506100200085', '81dc9bdb52d04dc20036dbd8313ed055', 'HANIFA NAFIA ', 'Jakarta', '2000-05-02', 'P', 'Jl. Irigasi ujung menteng', 0, 7, 8, 'Islam', 0),
('317506100200086', '81dc9bdb52d04dc20036dbd8313ed055', 'HELEN GRACE ', 'Jakarta', '2000-05-03', 'P', 'Jl. Irigasi ujung menteng', 0, 6, 9, 'Islam', 0),
('317506100200087', '81dc9bdb52d04dc20036dbd8313ed055', 'INDIRA CALISTA', 'Jakarta', '2000-05-04', 'P', 'Jl. Irigasi ujung menteng', 0, 5, 9, 'Islam', 0),
('317506100200088', '81dc9bdb52d04dc20036dbd8313ed055', 'IRENE SALMA', 'Jakarta', '2000-05-05', 'P', 'Jl. Irigasi ujung menteng', 0, 4, 9, 'Islam', 1),
('317506100200089', '81dc9bdb52d04dc20036dbd8313ed055', 'AYUNINGTYAS', 'Jakarta', '2000-05-06', 'P', 'Jl. Irigasi ujung menteng', 0, 3, 9, 'Islam', 1),
('317506100200090', '81dc9bdb52d04dc20036dbd8313ed055', 'FARIZA KANIA ', 'Jakarta', '2000-05-07', 'P', 'Jl. Irigasi ujung menteng', 0, 2, 9, 'Islam', 1),
('317506100200091', '81dc9bdb52d04dc20036dbd8313ed055', 'KEYLA FAIRUZ ZEIN', 'Jakarta', '2000-05-08', 'P', 'Jl. Irigasi ujung menteng', 0, 1, 9, 'Islam', 1),
('317506100200092', '81dc9bdb52d04dc20036dbd8313ed055', 'NAMIRA INDIRA FRISKA', 'Jakarta', '2000-05-09', 'P', 'Jl. Irigasi ujung menteng', 0, 2, 9, 'Islam', 1),
('317506100200093', '81dc9bdb52d04dc20036dbd8313ed055', 'GHEA PRAMESWARI', 'Jakarta', '2000-05-10', 'P', 'Jl. Irigasi ujung menteng', 0, 3, 9, 'Islam', 1),
('317506100200094', '81dc9bdb52d04dc20036dbd8313ed055', 'KHARISSA SABRINA HARDI', 'Jakarta', '2000-05-11', 'P', 'Jl. Irigasi ujung menteng', 0, 4, 10, 'Islam', 1),
('317506100200095', '81dc9bdb52d04dc20036dbd8313ed055', 'KHARLIA ANANDA SOEJITMIKO', 'Jakarta', '2000-05-12', 'P', 'Jl. Irigasi ujung menteng', 0, 5, 10, 'Islam', 1),
('317506100200096', '81dc9bdb52d04dc20036dbd8313ed055', 'OHANA MAISIE ', 'Jakarta', '2000-05-13', 'P', 'Jl. Irigasi ujung menteng', 0, 6, 10, 'Hindu', 1),
('317506100200097', '81dc9bdb52d04dc20036dbd8313ed055', 'RUTNA THONG KHAO', 'Jakarta', '2000-05-14', 'P', 'Jl. Irigasi ujung menteng', 0, 7, 10, 'Hindu', 1),
('317506100200098', '81dc9bdb52d04dc20036dbd8313ed055', 'YUVATI JUSTINIANA SABLE', 'Jakarta', '2000-05-15', 'P', 'Jl. Irigasi ujung menteng', 0, 8, 10, 'Hindu', 1),
('317506100200099', '81dc9bdb52d04dc20036dbd8313ed055', 'IRENE TALITA BAHEERA', 'Jakarta', '2000-05-16', 'P', 'Jl. Irigasi ujung menteng', 0, 9, 10, 'Buddha', 0),
('317506100200100', '81dc9bdb52d04dc20036dbd8313ed055', 'IMTITHAL GAURIKA', 'Jakarta', '2000-05-17', 'P', 'Jl. Irigasi ujung menteng', 0, 10, 10, 'Buddha', 0),
('317506100200101', '827ccb0eea8a706c4c34a16891f84e7b', 'AZRUL FAHRII', 'Jakarta', '2000-07-12', 'L', 'Pulogadung', 0, 3, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `warga_additional`
--

CREATE TABLE `warga_additional` (
  `nik` varchar(20) NOT NULL,
  `cur_alamat` text,
  `cur_rt` varchar(3) DEFAULT NULL,
  `cur_rw` varchar(3) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `handphone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga_additional`
--

INSERT INTO `warga_additional` (`nik`, `cur_alamat`, `cur_rt`, `cur_rw`, `email`, `handphone`) VALUES
('317506100200001', NULL, NULL, NULL, '', ''),
('317506100200002', NULL, NULL, NULL, NULL, NULL),
('317506100200003', NULL, NULL, NULL, NULL, NULL),
('317506100200004', NULL, NULL, NULL, NULL, NULL),
('317506100200005', NULL, NULL, NULL, NULL, NULL),
('317506100200006', NULL, NULL, NULL, NULL, NULL),
('317506100200007', NULL, NULL, NULL, NULL, NULL),
('317506100200008', NULL, NULL, NULL, NULL, NULL),
('317506100200009', NULL, NULL, NULL, NULL, NULL),
('317506100200010', NULL, NULL, NULL, NULL, NULL),
('317506100200011', NULL, NULL, NULL, NULL, NULL),
('317506100200012', NULL, NULL, NULL, NULL, NULL),
('317506100200013', NULL, NULL, NULL, NULL, NULL),
('317506100200014', NULL, NULL, NULL, NULL, NULL),
('317506100200015', NULL, NULL, NULL, NULL, NULL),
('317506100200016', NULL, NULL, NULL, NULL, NULL),
('317506100200017', NULL, NULL, NULL, NULL, NULL),
('317506100200018', NULL, NULL, NULL, NULL, NULL),
('317506100200019', NULL, NULL, NULL, NULL, NULL),
('317506100200020', NULL, NULL, NULL, NULL, NULL),
('317506100200021', NULL, NULL, NULL, NULL, NULL),
('317506100200022', NULL, NULL, NULL, NULL, NULL),
('317506100200023', NULL, NULL, NULL, NULL, NULL),
('317506100200024', NULL, NULL, NULL, NULL, NULL),
('317506100200025', NULL, NULL, NULL, NULL, NULL),
('317506100200026', NULL, NULL, NULL, NULL, NULL),
('317506100200027', NULL, NULL, NULL, NULL, NULL),
('317506100200028', NULL, NULL, NULL, NULL, NULL),
('317506100200029', NULL, NULL, NULL, NULL, NULL),
('317506100200030', NULL, NULL, NULL, NULL, NULL),
('317506100200031', NULL, NULL, NULL, NULL, NULL),
('317506100200032', NULL, NULL, NULL, NULL, NULL),
('317506100200033', NULL, NULL, NULL, NULL, NULL),
('317506100200034', NULL, NULL, NULL, NULL, NULL),
('317506100200035', NULL, NULL, NULL, NULL, NULL),
('317506100200036', NULL, NULL, NULL, NULL, NULL),
('317506100200037', NULL, NULL, NULL, NULL, NULL),
('317506100200038', NULL, NULL, NULL, NULL, NULL),
('317506100200039', NULL, NULL, NULL, NULL, NULL),
('317506100200040', NULL, NULL, NULL, NULL, NULL),
('317506100200041', NULL, NULL, NULL, NULL, NULL),
('317506100200042', NULL, NULL, NULL, NULL, NULL),
('317506100200043', NULL, NULL, NULL, NULL, NULL),
('317506100200044', NULL, NULL, NULL, NULL, NULL),
('317506100200045', NULL, NULL, NULL, NULL, NULL),
('317506100200046', NULL, NULL, NULL, NULL, NULL),
('317506100200047', NULL, NULL, NULL, NULL, NULL),
('317506100200048', NULL, NULL, NULL, NULL, NULL),
('317506100200049', NULL, NULL, NULL, NULL, NULL),
('317506100200050', NULL, NULL, NULL, NULL, NULL),
('317506100200051', NULL, NULL, NULL, NULL, NULL),
('317506100200052', NULL, NULL, NULL, NULL, NULL),
('317506100200053', NULL, NULL, NULL, NULL, NULL),
('317506100200054', NULL, NULL, NULL, NULL, NULL),
('317506100200055', NULL, NULL, NULL, NULL, NULL),
('317506100200056', NULL, NULL, NULL, NULL, NULL),
('317506100200057', NULL, NULL, NULL, NULL, NULL),
('317506100200058', NULL, NULL, NULL, NULL, NULL),
('317506100200059', NULL, NULL, NULL, NULL, NULL),
('317506100200060', NULL, NULL, NULL, NULL, NULL),
('317506100200061', NULL, NULL, NULL, NULL, NULL),
('317506100200062', NULL, NULL, NULL, NULL, NULL),
('317506100200063', NULL, NULL, NULL, NULL, NULL),
('317506100200064', NULL, NULL, NULL, NULL, NULL),
('317506100200065', NULL, NULL, NULL, NULL, NULL),
('317506100200066', NULL, NULL, NULL, NULL, NULL),
('317506100200067', NULL, NULL, NULL, NULL, NULL),
('317506100200068', NULL, NULL, NULL, NULL, NULL),
('317506100200069', NULL, NULL, NULL, NULL, NULL),
('317506100200070', NULL, NULL, NULL, NULL, NULL),
('317506100200071', NULL, NULL, NULL, NULL, NULL),
('317506100200072', NULL, NULL, NULL, NULL, NULL),
('317506100200073', NULL, NULL, NULL, NULL, NULL),
('317506100200074', NULL, NULL, NULL, NULL, NULL),
('317506100200075', NULL, NULL, NULL, NULL, NULL),
('317506100200076', NULL, NULL, NULL, NULL, NULL),
('317506100200077', NULL, NULL, NULL, NULL, NULL),
('317506100200078', NULL, NULL, NULL, NULL, NULL),
('317506100200079', NULL, NULL, NULL, NULL, NULL),
('317506100200080', NULL, NULL, NULL, NULL, NULL),
('317506100200081', NULL, NULL, NULL, NULL, NULL),
('317506100200082', NULL, NULL, NULL, NULL, NULL),
('317506100200083', NULL, NULL, NULL, NULL, NULL),
('317506100200084', NULL, NULL, NULL, NULL, NULL),
('317506100200085', NULL, NULL, NULL, NULL, NULL),
('317506100200086', NULL, NULL, NULL, NULL, NULL),
('317506100200087', NULL, NULL, NULL, NULL, NULL),
('317506100200088', NULL, NULL, NULL, NULL, NULL),
('317506100200089', NULL, NULL, NULL, NULL, NULL),
('317506100200090', NULL, NULL, NULL, NULL, NULL),
('317506100200091', NULL, NULL, NULL, NULL, NULL),
('317506100200092', NULL, NULL, NULL, NULL, NULL),
('317506100200093', NULL, NULL, NULL, NULL, NULL),
('317506100200094', NULL, NULL, NULL, NULL, NULL),
('317506100200095', NULL, NULL, NULL, NULL, NULL),
('317506100200096', NULL, NULL, NULL, NULL, NULL),
('317506100200097', NULL, NULL, NULL, NULL, NULL),
('317506100200098', NULL, NULL, NULL, NULL, NULL),
('317506100200099', NULL, NULL, NULL, NULL, NULL),
('317506100200100', NULL, NULL, NULL, NULL, NULL),
('317506100200101', NULL, NULL, NULL, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_work`
--
ALTER TABLE `history_work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `warga_additional`
--
ALTER TABLE `warga_additional`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_work`
--
ALTER TABLE `history_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_work`
--
ALTER TABLE `history_work`
  ADD CONSTRAINT `history_work_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `warga` (`nik`);

--
-- Constraints for table `warga_additional`
--
ALTER TABLE `warga_additional`
  ADD CONSTRAINT `warga_additional_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `warga` (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
