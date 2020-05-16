-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 16, 2020 at 05:27 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `rozar`
--
CREATE DATABASE IF NOT EXISTS `rozar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rozar`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `nric` varchar(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `name` varchar(45) NOT NULL,
  `race` varchar(45) NOT NULL,
  `DOB` datetime NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `CountryOfBirth` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `ContactNo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nric`, `password`, `name`, `race`, `DOB`, `Sex`, `CountryOfBirth`, `Address`, `Email`, `ContactNo`) VALUES
(123, '$2y$10$2yfoHY2EMofF.6OPjcZVpuUDSKA29w14WBpiIizT0bNV/gNozJZgi', 'tom', 'chinese', '1990-10-14 00:00:00', 'M', 'Singapore', 'Tampines', 'tom@hotmail.com', '91239123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nric`);