-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 06:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sldczone`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `description`) VALUES
(2, 'We are  the number 01 top domestic cricket website in sri lanka');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frontpost`
--

CREATE TABLE `frontpost` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL,
  `link` text NOT NULL,
  `pagecode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interviewpost`
--

CREATE TABLE `interviewpost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `momentpost`
--

CREATE TABLE `momentpost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ourplan`
--

CREATE TABLE `ourplan` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recenteventspost`
--

CREATE TABLE `recenteventspost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rulespost`
--

CREATE TABLE `rulespost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teampost`
--

CREATE TABLE `teampost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topallrounderspost`
--

CREATE TABLE `topallrounderspost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `innings` int(11) NOT NULL,
  `totalscore` int(11) NOT NULL,
  `highscore` int(11) NOT NULL,
  `average` float NOT NULL,
  `rate` float NOT NULL,
  `totalwicket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topbatmenspost`
--

CREATE TABLE `topbatmenspost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `innings` int(11) NOT NULL,
  `totalscore` int(11) NOT NULL,
  `highscore` int(11) NOT NULL,
  `average` float NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topbowlerspost`
--

CREATE TABLE `topbowlerspost` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `post` text NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `innings` int(11) NOT NULL,
  `totalscore` int(11) NOT NULL,
  `highscore` int(11) NOT NULL,
  `average` float NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontpost`
--
ALTER TABLE `frontpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviewpost`
--
ALTER TABLE `interviewpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `momentpost`
--
ALTER TABLE `momentpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourplan`
--
ALTER TABLE `ourplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recenteventspost`
--
ALTER TABLE `recenteventspost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rulespost`
--
ALTER TABLE `rulespost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teampost`
--
ALTER TABLE `teampost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topallrounderspost`
--
ALTER TABLE `topallrounderspost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topbatmenspost`
--
ALTER TABLE `topbatmenspost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topbowlerspost`
--
ALTER TABLE `topbowlerspost`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
