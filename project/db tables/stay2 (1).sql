-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 08:04 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `stay2`
--

CREATE TABLE `stay2` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stay2`
--

INSERT INTO `stay2` (`fullname`, `email`, `phonenumber`, `datefrom`, `dateto`) VALUES
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-19', '2018-06-09'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-19', '2018-06-09'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-19', '2018-06-09'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-19', '2018-06-09'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-19', '2018-06-09'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-19', '2018-06-09'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-19', '2018-06-09'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-15', '2018-06-22'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-15', '2018-06-22'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-15', '2018-06-22'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-15', '2018-06-22'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-18', '2018-06-21'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-18', '2018-06-21'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-18', '2018-06-21'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-18', '2018-06-21'),
('tharak', 'kurritharak28@gmail.com', 2147483647, '2018-06-18', '2018-06-21'),
('tharak78', 'dfgh@ggh.bnj', 1230456789, '2018-06-18', '2018-06-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
