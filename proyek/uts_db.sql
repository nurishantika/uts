-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 08:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `nonton`
--

CREATE TABLE `nonton` (
  `NO` int(6) UNSIGNED NOT NULL,
  `JUDUL_FILM` varchar(30) NOT NULL,
  `GENRE_FILM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonton`
--

INSERT INTO `nonton` (`NO`, `JUDUL_FILM`, `GENRE_FILM`) VALUES
(1, 'Knives Out', 'Mystery/Comedy'),
(2, 'Gone Girl', 'Thriller/Mystery'),
(3, 'Toy Story Series', 'Family'),
(4, 'Lady and The Tramp', 'Romance/Animation'),
(5, 'Flipped', 'Romance'),
(6, 'Mean Girls', 'Comedy/Teen'),
(7, 'Finding Nemo', 'Animation/Family'),
(8, 'Up', 'Animation/Family'),
(9, 'Now You See Me', 'Thriller/Mystery'),
(10, 'Harry Potter Series', 'Fantasy/Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `versiku`
--

CREATE TABLE `versiku` (
  `no` int(6) UNSIGNED NOT NULL,
  `versiku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `versiku`
--

INSERT INTO `versiku` (`no`, `versiku`) VALUES
(1, 'Rebahan'),
(2, 'Main Game dong!'),
(3, 'Main Instagram'),
(4, 'Ngerjain tugas :('),
(5, 'Baca novel'),
(6, 'Main PUBG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nonton`
--
ALTER TABLE `nonton`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `versiku`
--
ALTER TABLE `versiku`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nonton`
--
ALTER TABLE `nonton`
  MODIFY `NO` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `versiku`
--
ALTER TABLE `versiku`
  MODIFY `no` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
