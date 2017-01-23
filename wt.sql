-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 08:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `kidsfashion`
--

CREATE TABLE `kidsfashion` (
  `id` int(11) NOT NULL,
  `artikal` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `kidsfashion`
--

INSERT INTO `kidsfashion` (`id`, `artikal`) VALUES
(120, 'LFC Pink Puffa Jacket'),
(121, 'LFC Varsity Jacket'),
(122, 'LFC Grey Squad Tee');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `username`, `email`, `password`) VALUES
(100, 'admin', 'admin@haha.com', '21232f297a57a5a743894a0e4a801fc3'),
(101, 'alija95', 'ms@haha.com', 'c5fe25896e49ddfe996db7508cf00534'),
(102, 'elvan', 'pa@haha.com', 'c5fe25896e49ddfe996db7508cf00534'),
(103, 'meho', 'lfc@haha.com', 'c5fe25896e49ddfe996db7508cf00534'),
(104, 'sefer', 'sefer@haha.com', 'c5fe25896e49ddfe996db7508cf00534'),
(105, 'semin95', 'semin@haha.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(106, 'test', 'test@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(107, 'test456', 'a@haha.com', 'c5fe25896e49ddfe996db7508cf00534'),
(108, 'test456321', 'hsda@ds.com', 'c5fe25896e49ddfe996db7508cf00534'),
(109, 'test487', 'sa@h.com', 'c5fe25896e49ddfe996db7508cf00534'),
(110, 'test489', 'te@haha.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(111, 'test5', 'p@haha.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(112, 'test6', 'l@haha.com', 'c5fe25896e49ddfe996db7508cf00534'),
(113, 'test87', 'h@haha.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(114, 'test987', 'test@ho.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(115, 'test9897', 't@haha.com', 'ae8b5aa26a3ae31612eec1d1f6ffbce9'),
(116, 'test999', 'ds@h.com', 'c5fe25896e49ddfe996db7508cf00534'),
(117, 'testdsa', 'sd@h.com', 'c5fe25896e49ddfe996db7508cf00534'),
(118, 'testihsdn', 'sa@hdsa.com', 'c5fe25896e49ddfe996db7508cf00534'),
(120, 'test11', 'test@semin.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(121, 'anonymous', '', ''),
(122, 'testBaze', 'baza@haha.com', 'c5fe25896e49ddfe996db7508cf00534');

-- --------------------------------------------------------

--
-- Table structure for table `kupovina`
--

CREATE TABLE `kupovina` (
  `id` int(11) NOT NULL,
  `korisnik` int(11) NOT NULL,
  `artikli` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mensfashion`
--

CREATE TABLE `mensfashion` (
  `id` int(11) NOT NULL,
  `artikal` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `mensfashion`
--

INSERT INTO `mensfashion` (`id`, `artikal`) VALUES
(1, 'dukserica'),
(2, 'majica'),
(3, 'dzemper');

-- --------------------------------------------------------

--
-- Table structure for table `pretraga`
--

CREATE TABLE `pretraga` (
  `id` int(11) NOT NULL,
  `korisnik` int(11) NOT NULL,
  `tekst` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `pretraga`
--

INSERT INTO `pretraga` (`id`, `korisnik`, `tekst`) VALUES
(17, 100, 'Origi'),
(18, 121, 'Origi'),
(19, 121, 'Adam Lallana'),
(20, 121, 'Adam Lallana'),
(21, 122, 'Adam Lallana'),
(22, 122, 'Origi'),
(23, 121, 'Origi'),
(24, 121, 'Agger');

-- --------------------------------------------------------

--
-- Table structure for table `womensfashion`
--

CREATE TABLE `womensfashion` (
  `id` int(11) NOT NULL,
  `artikal` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `womensfashion`
--

INSERT INTO `womensfashion` (`id`, `artikal`) VALUES
(2, 'LFC Grey Basic Zip Through'),
(4, 'LFC Grey Heart Tee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kidsfashion`
--
ALTER TABLE `kidsfashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kupovina`
--
ALTER TABLE `kupovina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korisnik` (`korisnik`);

--
-- Indexes for table `mensfashion`
--
ALTER TABLE `mensfashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pretraga`
--
ALTER TABLE `pretraga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korisnik` (`korisnik`);

--
-- Indexes for table `womensfashion`
--
ALTER TABLE `womensfashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kidsfashion`
--
ALTER TABLE `kidsfashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `kupovina`
--
ALTER TABLE `kupovina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensfashion`
--
ALTER TABLE `mensfashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pretraga`
--
ALTER TABLE `pretraga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `womensfashion`
--
ALTER TABLE `womensfashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kupovina`
--
ALTER TABLE `kupovina`
  ADD CONSTRAINT `kupovina_ibfk_1` FOREIGN KEY (`korisnik`) REFERENCES `korisnik` (`id`);

--
-- Constraints for table `pretraga`
--
ALTER TABLE `pretraga`
  ADD CONSTRAINT `pretraga_ibfk_1` FOREIGN KEY (`korisnik`) REFERENCES `korisnik` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
