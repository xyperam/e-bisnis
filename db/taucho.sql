-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 02:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taucho`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `nama`, `username`, `password`) VALUES
(1, 'yogga88@gmail.com', 'Yogga', 'Yogga', 'Yogga'),
(2, 'aditya@gmail.com', 'aditya', 'aditya', 'aditya');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `produk`, `harga`) VALUES
(1, 'Wash & Treatment', 60000),
(2, 'Repair & Repaint', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `services` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `No_hp` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `services`, `amount`, `Fname`, `Email`, `No_hp`, `Address`, `comment`) VALUES
(6, '1. Wash & Treatment', '1', 'Yogga Aditya Candra', 'Yogga@unpak.ac.id', '0877-8433-0497', 'Jln. Panghulu djaja, cimahpar, blok C no. 1 rt04 r', 'Sepatunya sebelah kanan semua'),
(7, '2. Repair & Repaint', '1', 'candra', 'candra@gmail.com', '0877-8433-0497', 'Jln. Panghulu djaja, cimahpar, blok C no. 1 rt04 r', 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `username`, `password`) VALUES
(7, 'ilhamimani@gmail.com', 'Ilham Imani Nur Alam', 'ilham', '$2y$10$P.029yUYlfduL0gnkGWjJ.5dp0S9b025Ju1yNYS3CKhlfXQstTvO6'),
(9, 'ilham1@gmail.com', 'ilham', 'ilham23', '$2y$10$FzsPaRghfmSNDpdFdFrrV.WEmHhZhqK/egx/y7Ze9sOYflTuSFnTq'),
(10, 'yogga910@gmail.com', 'Yogga Aditya Candra', 'yogga18', '$2y$10$AInfIQQnVBR/XhuTXumxue/VNPhJU8gyl1JgPfyt24l0hSmZiKLoO'),
(13, 'yogga920@gmail.com', 'Aditya Candra', 'yogga19', '$2y$10$FTL4p85VVNJLIYgbVzM7mu0LEmSF.NLXiWQF/JZKLdIT2e2i1x1Hi'),
(14, 'yogga1@gmail.com', 'Yoga', 'yoga', '$2y$10$yyPKXYNIV2H3LwdEth.GfekOumJNW4R7N4mHf85kObZGyZTvR/AkS'),
(15, 'candra@gmail.com', 'candra', 'candra', '$2y$10$RsHERf8.Eqibjx9vib26A.dsg0z5ZT5FUI9aVrNfpP7eYvvz.GQ8.'),
(16, 'reza@gmail.com', 'reza aditama', 'reza', '$2y$10$6LWtXPs9uaNknfd.biG5berSl1cBRSCSQ4Ov6c6tuF2.he/PGUIWa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
