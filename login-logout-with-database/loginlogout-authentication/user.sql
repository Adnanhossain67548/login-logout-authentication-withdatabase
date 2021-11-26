-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 07:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passward` varchar(255) NOT NULL,
  `confirm_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `email`, `passward`, `confirm_pass`) VALUES
('adnan', '', '123', ''),
('abir', '', 'abc', '');

-- --------------------------------------------------------

--
-- Table structure for table `sendmail`
--

CREATE TABLE `sendmail` (
  `Id` int(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `passward` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendmail`
--

INSERT INTO `sendmail` (`Id`, `country`, `passward`, `email`) VALUES
(1, 'bangladesh', '123', 'adnanhossain9647@gmail.com'),
(2, 'bangladesh', '213', 'afrinnitu629@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`username`, `email`, `password`, `confirm_pass`) VALUES
('tipu', 'tipu121@gmail.com', '100', '100'),
('nuzrul', 'nuzrul@gmail.com', '101', '101'),
('Ismail Hossain', 'user', '12', '12'),
('Ismail Hossain', 'asda@gmail.com', '123', '123'),
('hasan', 'saon12@gmail.com', '1231', '1231'),
('adnan', 'adnan98@gmail.com', '200', '200'),
('hridoy', 'hridoy@gmail.com', '21', '21'),
('mehedi', 'mehedi@gmail.com', '300', '300');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `username` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `Profile` varchar(255) NOT NULL DEFAULT 'defoult.png',
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`username`, `email`, `password`, `Id`, `Profile`, `gender`, `country`) VALUES
('avar islam', 'dnanhossain9647@gma', '1432', 1, 'adnan.jpg', '', ''),
('adnan', 'adnanhossain9647@gma', '123', 4, 'ad.jpg', 'male', ''),
('saon', 'saon@gmail.com', '1w21', 6, 'adnan.jpg', '', ''),
('hridoy', 'hr@gamil', 'qw21', 7, 'photo.JPG', '', ''),
('adom', 'tipu@gmail.cm', '1234', 11, 'Untitled-1.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`passward`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`confirm_pass`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
