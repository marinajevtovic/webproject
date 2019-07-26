-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 08:24 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liverpul`
--

-- --------------------------------------------------------

--
-- Table structure for table `fudbaleri`
--

CREATE TABLE `fudbaleri` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `godine` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fudbaleri`
--

INSERT INTO `fudbaleri` (`id`, `ime`, `prezime`, `godine`) VALUES
(1, 'Alisson', 'Becker', 25),
(2, 'Simon', 'Mignolet', 30),
(4, 'Nathaniel', 'Clyne', 27),
(5, 'Virgil', 'Dijk', 27),
(6, 'Dejan', 'Lovren', 29),
(7, 'Joe', 'Gomez', 21),
(8, 'Alberto', 'Moreno', 26),
(9, 'Andy', 'Robertson', 24),
(10, 'Joel', 'Matip', 27),
(11, 'Gini', 'Wijnaldum', 27),
(12, 'James', 'Milner', 32),
(13, 'Naby', 'Keita', 23),
(14, 'Jordan', 'Henderson', 28),
(15, 'Roberto', 'Firmino', 26),
(16, 'Sadio', 'Mane', 26),
(17, 'Mohamed', 'Salah', 26),
(18, 'Daniel', 'Sturrige', 29),
(19, 'Divock', 'Origi', 23),
(20, 'Leo', 'Mesi', 32);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sifra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`username`, `email`, `sifra`) VALUES
('stefan123', 'stefan@yahho.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fudbaleri`
--
ALTER TABLE `fudbaleri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fudbaleri`
--
ALTER TABLE `fudbaleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
