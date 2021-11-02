-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 08:42 PM
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
-- Database: `cucisepatu`
--

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
(13, 'yogga920@gmail.com', 'Aditya Candra', 'yogga19', '$2y$10$FTL4p85VVNJLIYgbVzM7mu0LEmSF.NLXiWQF/JZKLdIT2e2i1x1Hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
