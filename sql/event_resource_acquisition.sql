-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 10:25 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_resource_acquisition`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `phone_numb` int(200) NOT NULL,
  `id_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking1`
--

CREATE TABLE `booking1` (
  `booking_ID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Suppliers_idnumb` int(11) DEFAULT NULL,
  `Organizers_idnumb` int(11) DEFAULT NULL,
  `supply_description` varchar(400) NOT NULL,
  `Events_name` varchar(400) NOT NULL,
  `postalcode` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `firstname` varchar(400) NOT NULL,
  `secondname` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `location` varchar(400) NOT NULL,
  `id_number` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `Firstname` varchar(400) NOT NULL,
  `Secondname` varchar(400) NOT NULL,
  `location` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `phonenumber` int(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `idnumber` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `booking1`
--
ALTER TABLE `booking1`
  ADD PRIMARY KEY (`booking_ID`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`idnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking1`
--
ALTER TABLE `booking1`
  MODIFY `booking_ID` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
