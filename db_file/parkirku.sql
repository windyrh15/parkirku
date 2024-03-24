-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 10:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkirku`
--

-- --------------------------------------------------------

--
-- Table structure for table `msk`
--

CREATE TABLE `msk` (
  `id` int(11) NOT NULL,
  `plate` varchar(12) NOT NULL,
  `jnsken` varchar(12) NOT NULL,
  `jmmsk` datetime NOT NULL DEFAULT current_timestamp(),
  `jmklr` datetime DEFAULT NULL,
  `total` int(20) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msk`
--

INSERT INTO `msk` (`id`, `plate`, `jnsken`, `jmmsk`, `jmklr`, `total`, `status`) VALUES
(156, 'f3120fg', 'Motor', '2019-11-15 09:56:31', '2019-11-20 00:03:21', 1500, 'Keluar'),
(162, 'bkcsdbkbds', 'Motor', '2019-11-20 09:41:40', '2019-11-20 09:42:22', 1500, 'Keluar'),
(163, 'f1543gg', 'Motor', '2019-11-20 10:03:52', '2019-11-20 10:04:00', 1500, 'Keluar'),
(164, 'f567gh', 'Mobil', '2019-11-20 10:04:10', '2019-11-20 10:04:19', 3000, 'Keluar'),
(165, 'fg1234d', 'Mobil', '2019-11-20 10:04:46', '2019-11-20 10:05:00', 3000, 'Keluar'),
(169, 'jojo', 'Mobil', '2019-11-21 21:04:02', '2019-11-21 21:04:27', 3000, 'Keluar'),
(170, 'f345fg', 'Mobil', '2019-11-22 07:51:38', '2019-11-22 07:52:03', 1500, 'Keluar'),
(171, 'f25255g', 'Mobil', '2019-11-22 14:00:43', '2019-11-22 14:01:23', 3000, 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$y62WNP78y/oyFG9ibxK2QewJ7C4A2phFOPV1nY5yuWHKHepIhht2i'),
(17, 'windy', '$2y$10$smaBpemuk0kKr9gWWT.vWudgFWNQ4cYvOYb5ej.tOVGObSC9wFWnG'),
(18, 'axel', '$2y$10$AS72WgX/HCaHztz2MVHeyuFWHcSJFrglbsIlCaYRx/Z8mXXfpjB4G'),
(19, 'puput', '$2y$10$1sCdGlZowDeHrO0giYyFE.5GlHBku8IQISNpi8pDrM6gw4BbWUK2a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msk`
--
ALTER TABLE `msk`
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
-- AUTO_INCREMENT for table `msk`
--
ALTER TABLE `msk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
