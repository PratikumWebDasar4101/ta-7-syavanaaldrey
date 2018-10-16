-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 06:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `webdasar`
--

CREATE TABLE `webdasar` (
  `id` int(25) NOT NULL,
  `nama` text NOT NULL,
  `nim` int(25) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `program_studi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webdasar`
--

INSERT INTO `webdasar` (`id`, `nama`, `nim`, `jenis_kelamin`, `program_studi`, `fakultas`, `asal`, `moto`) VALUES
(2, 'ian', 9000009, 'perempuan', 'if', 'fkb', 'bali', '	enak			'),
(3, 'gilang', 111112322, 'laki-laki', 'mi', 'fkb', 'tol', 'hitan				'),
(4, 'syavanaaldrey', 6767600, 'laki-laki', 'tt', 'feb', 'Bandung', '	iii			'),
(5, 'wwqqq', 12111221, 'laki-laki', 'mi', 'fit', 'assds', 'hwjwhwhjw				');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webdasar`
--
ALTER TABLE `webdasar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webdasar`
--
ALTER TABLE `webdasar`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
