-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 09:35 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanichero`
--

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanicid` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` int(15) NOT NULL,
  `address` text NOT NULL,
  `mechtype` text NOT NULL,
  `status` varchar(8) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`mechanicid`, `lastname`, `firstname`, `email`, `contact_number`, `address`, `mechtype`, `status`, `password`) VALUES
(9, 'Bruce', 'Vilo', 'mechanic@gmail.com', 9230944, 'cebu city ', 'Line Mechanic,Air Conditioning,bike', '1', '101398'),
(10, 'mechanic', 'mechanic', 'brucevilomechanic@gmail.com', 922309774, 'gwapo', 'Tire & Breack Mechanic,Diesel Mechanic,bike', '1', '101398');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_cert`
--

CREATE TABLE `mechanic_cert` (
  `certid` int(11) NOT NULL,
  `mechanicid` int(11) NOT NULL,
  `certname` varchar(255) NOT NULL,
  `certUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanic_cert`
--

INSERT INTO `mechanic_cert` (`certid`, `mechanicid`, `certname`, `certUrl`) VALUES
(2, 5, 'TESDA Certificate', 'certURL');

-- --------------------------------------------------------

--
-- Table structure for table `motorist`
--

CREATE TABLE `motorist` (
  `motoristid` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_number` text NOT NULL,
  `address` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motorist`
--

INSERT INTO `motorist` (`motoristid`, `lastname`, `firstname`, `email`, `password`, `contact_number`, `address`, `status`) VALUES
(18, 'ewrw', 'rwe', 'brucevilo@gmail.com', '101398', '09223097446', 'fatima road', 1),
(19, 'Motorist', 'Motorist', 'motorist@gmail.com', '101398', '09223097446', 'Cebu City', 1),
(20, 'qwe', 'wgpao', 'motorist1@gmail.com', '101398', '09223097446', 'fatima road', 1),
(21, 'gwapo', 'wgpao', 'motorist3@gmail.com', '101398', '09223097446', 'Cebu City', 1),
(22, 'mechanic', 'wgpao', 'motorist4@gmail.com', '101398', '09223097446', 'Cebu City', 1),
(23, 'mechanic', 'mechanic11', 'mechanic11@gmail.com', '123123', '09330941421', 'pofas', 1),
(24, 'hello', 'hello', 'hello@gmail.com', '101398', '0922307466', 'Fatima road labagon mandaue city', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceid` int(11) NOT NULL,
  `mechanicid` int(11) NOT NULL,
  `servicedesc` text NOT NULL,
  `service_fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceid`, `mechanicid`, `servicedesc`, `service_fee`) VALUES
(2, 5, 'Air Conditioning', 'P3500.00'),
(3, 5, 'Air Conditioning', 'P2500.00');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `servreqid` int(11) NOT NULL,
  `vehicle_plateno` text NOT NULL,
  `motoristid` int(255) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `problems` text NOT NULL,
  `latlang` text NOT NULL,
  `service_status` varchar(10) NOT NULL DEFAULT 'PENDING',
  `status` int(11) NOT NULL DEFAULT '1',
  `service` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`servreqid`, `vehicle_plateno`, `motoristid`, `request_date`, `service_date`, `problems`, `latlang`, `service_status`, `status`, `service`, `city`) VALUES
(5, 'GSW123', 18, '2019-09-08 09:01:20', '2019-09-15 16:00:00', 'the break need\'s more brake', '14.4578,120.9425', 'Pending', 1, 'problem1,problem4,problem6', 'Fatima Road labogon mandaue city'),
(6, 'GSW321', 24, '2019-09-10 07:22:40', '2019-09-18 16:00:00', 'Broket brain', '14.4578,120.9425', 'Pending', 1, 'problem2,problem4,problem6', 'Fatima Road labogon mandaue city'),
(7, 'GSW321', 24, '2019-09-10 07:30:18', '2019-09-10 16:00:00', 'Broken Arms', '14.4578,120.9425', 'Pending', 1, 'problem2,problem4', 'Fatima Road labogon mandaue city');

-- --------------------------------------------------------

--
-- Table structure for table `service_request_details`
--

CREATE TABLE `service_request_details` (
  `srd_id` int(11) NOT NULL,
  `servreqid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request_details`
--

INSERT INTO `service_request_details` (`srd_id`, `servreqid`, `serviceid`, `qty`) VALUES
(1, 2, 1, '1'),
(2, 2, 1, '1'),
(3, 2, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `service_request_post`
--

CREATE TABLE `service_request_post` (
  `serve_post_respid` int(255) NOT NULL,
  `servreqid` int(11) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request_post`
--

INSERT INTO `service_request_post` (`serve_post_respid`, `servreqid`, `postdate`) VALUES
(1, 1, '0000-00-00 00:00:00'),
(2, 1, '0000-00-00 00:00:00'),
(3, 1, '2019-08-09 05:21:31'),
(4, 2, '0000-00-00 00:00:00'),
(5, 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service_request_respon`
--

CREATE TABLE `service_request_respon` (
  `serve_post_respid` int(11) NOT NULL,
  `mechanicid` int(11) NOT NULL,
  `servreqid` int(11) NOT NULL,
  `bid` int(255) NOT NULL,
  `biddesc` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request_respon`
--

INSERT INTO `service_request_respon` (`serve_post_respid`, `mechanicid`, `servreqid`, `bid`, `biddesc`, `status`, `date`) VALUES
(12, 9, 5, 1500000, 'ALLL', 'read', '2019-09-08 13:32:14'),
(13, 9, 5, 15000, 'headlight all in', 'unread', '2019-09-08 13:35:39'),
(15, 9, 6, 1000, 'labor only', 'unread', '2019-09-10 07:23:00'),
(16, 9, 7, 10000000, '100000\r\n', 'unread', '2019-09-10 07:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'active',
  `status` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `user_type`, `status`) VALUES
(13, 'brucevilo1000@gmail.com', '10131998', 'Mechanic', 'active'),
(14, 'brucevilo@gmail.com', '123123', 'Admin', 'active'),
(15, 'mechanic@gmail.com', '101398', 'Mechanic', 'active'),
(16, 'motorist@gmail.com', '101398', 'Motorist', 'active'),
(17, 'motorist1@gmail.com', '101398', 'Motorist', 'active'),
(18, 'motorist3@gmail.com', '101398', 'Motorist', ''),
(19, 'motorist4@gmail.com', '101398', 'Motorist', 'active'),
(20, 'mechanic11@gmail.com', '123123', 'Motorist', 'active'),
(21, 'brucevilo@gmail.com', '101398', 'Motorist', 'active'),
(22, 'hello@gmail.com', '101398', 'Motorist', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleid` int(11) NOT NULL,
  `motoristid` int(255) NOT NULL,
  `vehicle_image` varchar(255) NOT NULL,
  `vehicle_mileage` int(11) NOT NULL,
  `vehicle_brand` text NOT NULL,
  `vehicle_model` text NOT NULL,
  `vehicle_drivertype` text NOT NULL,
  `vehicle_color` text NOT NULL,
  `vehicle_regno` varchar(10) NOT NULL,
  `vehicle_plateno` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'On-Going'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicleid`, `motoristid`, `vehicle_image`, `vehicle_mileage`, `vehicle_brand`, `vehicle_model`, `vehicle_drivertype`, `vehicle_color`, `vehicle_regno`, `vehicle_plateno`, `status`) VALUES
(7, 19, '9383-car-repair-362150_960_720.jpg', 100, 'Yamaha', 'civic', 'manual', 'red', '131231', 'TH2133', ''),
(9, 19, '8940-photo-1517524206127-48bbd363f3d7.jpg', 100, 'Yamaha', 'civic', 'manual', 'blue', '0392194298', '123gwa', ''),
(11, 19, '6822-picture.jpg', 100, 'Yamaha', 'civic', 'manual', 'red', '12313', 'ewqq123', ''),
(12, 18, '2965-honda-civic-2019-main-1555313340.jpg', 1000, 'Honda', 'civic 2019', 'manual', 'red', '10193240', 'GSW123', ''),
(13, 24, '3003-honda-civic-2019-main-1555313340.jpg', 1000, 'Honda', 'civic 2019', 'manual', 'RED', '09384777', 'GSW321', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`mechanicid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `mechanic_cert`
--
ALTER TABLE `mechanic_cert`
  ADD PRIMARY KEY (`certid`);

--
-- Indexes for table `motorist`
--
ALTER TABLE `motorist`
  ADD PRIMARY KEY (`motoristid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`servreqid`);

--
-- Indexes for table `service_request_details`
--
ALTER TABLE `service_request_details`
  ADD PRIMARY KEY (`srd_id`);

--
-- Indexes for table `service_request_post`
--
ALTER TABLE `service_request_post`
  ADD PRIMARY KEY (`serve_post_respid`);

--
-- Indexes for table `service_request_respon`
--
ALTER TABLE `service_request_respon`
  ADD PRIMARY KEY (`serve_post_respid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanicid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mechanic_cert`
--
ALTER TABLE `mechanic_cert`
  MODIFY `certid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motorist`
--
ALTER TABLE `motorist`
  MODIFY `motoristid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `servreqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_request_details`
--
ALTER TABLE `service_request_details`
  MODIFY `srd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_request_post`
--
ALTER TABLE `service_request_post`
  MODIFY `serve_post_respid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_request_respon`
--
ALTER TABLE `service_request_respon`
  MODIFY `serve_post_respid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
