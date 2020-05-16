-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2020 at 06:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rozar`
--
CREATE DATABASE IF NOT EXISTS `rozar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rozar`;

-- --------------------------------------------------------

--
-- Table structure for table `adult`
--

DROP TABLE IF EXISTS `adult`;
CREATE TABLE IF NOT EXISTS `adult` (
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adult`
--

INSERT INTO `adult` (`username`, `name`, `date`) VALUES
('1', 'James', '1999-11-11'),
('1', 'May', '1999-06-09'),
('1', 'May', '1999-06-09'),
('1', 'Alex', '2020-05-15'),
('1', 'James', '2020-05-13'),
('1', 'James', '2020-05-13'),
('1', 'May', '2020-05-06'),
('1', 'May', '2020-05-18'),
('1', 'James', '2020-05-21'),
('1', 'Alex', '2020-05-01'),
('1', 'Alex', '2020-05-02'),
('1', 'May', '2020-05-11'),
('1', 'May', '2020-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `financialplanner`
--

DROP TABLE IF EXISTS `financialplanner`;
CREATE TABLE IF NOT EXISTS `financialplanner` (
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `financialplanner`
--

INSERT INTO `financialplanner` (`name`) VALUES
('May'),
('James'),
('Alex');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `nric` varchar(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `name` varchar(45) NOT NULL,
  `race` varchar(45) NOT NULL,
  `DOB` datetime NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `CountryOfBirth` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `ContactNo` varchar(45) NOT NULL,
  PRIMARY KEY (`nric`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nric`, `password`, `name`, `race`, `DOB`, `Sex`, `CountryOfBirth`, `Address`, `Email`, `ContactNo`) VALUES
('S7908207J', '$2y$10$CrIY8fUzeQgdF3orFGBjQuo272XlLmEuSxnNwfZgM48ue7kSWvJLW', 'SINGADRA', 'Chinese', '1979-03-04 00:00:00', 'M', 'SINGAPORE', '510 UPPER EAST COAST ROAD', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `youth`
--

DROP TABLE IF EXISTS `youth`;
CREATE TABLE IF NOT EXISTS `youth` (
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `youth`
--

INSERT INTO `youth` (`username`, `name`, `date`) VALUES
('2', 'May', '1999-11-10'),
('1', 'James', '2020-07-16'),
('1', 'May', '2020-05-19'),
('1', 'James', '2020-05-11'),
('1', 'Alex', '2020-04-02'),
('1', 'James', '2020-05-13'),
('1', 'May', '2020-05-27'),
('1', 'James', '2020-05-27'),
('1', 'James', '2020-05-20'),
('1', 'James', '2020-05-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
