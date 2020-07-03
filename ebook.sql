-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 09:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `dht11`
--

CREATE TABLE `dht11` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `suhu` int(11) NOT NULL,
  `hum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dht11`
--

INSERT INTO `dht11` (`id`, `tanggal`, `suhu`, `hum`) VALUES
(660, '2019-05-15 10:02:28', 36, 51),
(661, '2019-05-15 10:02:31', 36, 51),
(662, '2019-05-15 10:02:33', 36, 51),
(663, '2019-05-15 10:02:35', 36, 52),
(664, '2019-05-15 10:02:37', 36, 52),
(665, '2019-05-15 10:02:40', 36, 52),
(666, '2019-05-15 10:02:42', 36, 52),
(667, '2019-05-15 10:02:44', 36, 51),
(668, '2019-05-15 10:02:46', 36, 52),
(669, '2019-05-15 10:02:48', 36, 52),
(670, '2019-05-15 10:02:51', 36, 52),
(671, '2019-05-15 10:02:53', 36, 52),
(672, '2019-05-15 10:02:55', 36, 52),
(673, '2019-05-15 10:02:57', 36, 52),
(674, '2019-05-15 10:02:59', 36, 52),
(675, '2019-05-15 10:03:02', 36, 52),
(676, '2019-05-15 10:03:04', 36, 52),
(677, '2019-05-15 10:03:06', 36, 52),
(678, '2019-05-15 10:03:08', 36, 52),
(679, '2019-05-15 10:03:10', 36, 52),
(680, '2019-05-15 10:03:13', 36, 52),
(681, '2019-05-15 10:03:15', 36, 51),
(682, '2019-05-15 10:03:17', 36, 52),
(683, '2019-05-16 04:16:02', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dht11`
--
ALTER TABLE `dht11`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dht11`
--
ALTER TABLE `dht11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=684;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
