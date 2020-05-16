-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2020 at 05:29 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `rozar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rozar`;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `adult`;
CREATE TABLE IF NOT EXISTS `adult` (
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `adult` (`username`, `name`, `date`) VALUES
('1', 'James', '1999-11-11');

DROP TABLE IF EXISTS `youth`;
CREATE TABLE IF NOT EXISTS `youth` (
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `youth` (`username`, `name`, `date`) VALUES
('2', 'May', '1999-11-10');

DROP TABLE IF EXISTS `financialplanner`;
CREATE TABLE IF NOT EXISTS `financialplanner` (
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `financialplanner` (`name`) VALUES
('May'),
('James'), 
('Alex');

COMMIT;