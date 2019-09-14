-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 04:41 PM
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
(10, 'mechanic', 'mechanic', 'brucevilomechanic@gmail.com', 922309774, 'gwapo', 'Tire & Breack Mechanic,Diesel Mechanic,bike', '1', '101398'),
(14, 'Durant', 'Kevin', 'gamers@gmail.com', 922938448, 'Mandue City', 'Line Mechanic,Air Conditioning,Tire', '1', '0'),
(15, 'Nacua', 'Chad', 'chadnacua@gmail.com', 2147483647, 'cebu city', 'Tire & Breack Mechanic,Air Conditioning,', '1', '12345'),
(16, 'Potot', 'EJ', 'potot@gmail.com', 2147483647, 'cebu city ', 'Tire & Breack Mechanic,Air Conditioning,Auto Exhaust Mechanic,', '1', '12345');

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
  `password` text NOT NULL,
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
(24, 'hello', 'hello', 'hello@gmail.com', '101398', '0922307466', 'Fatima road labagon mandaue city', 1),
(25, 'dungeun123', 'dungeun1', 'dungeun@gmail.com', '101398', '0922307466', 'cebu city ', 1),
(26, 'simbajon', 'karen', 'karen@gmail.com', 'qweasd', '09123456789', 'Cebu City', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `service_date` date NOT NULL,
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
(5, 'GSW123', 18, '2019-09-08 09:01:20', '2019-09-16', 'the break need\'s more brake', '14.4578,120.9425', 'Pending', 1, 'problem1,problem4,problem6', 'Fatima Road labogon mandaue city'),
(6, 'GSW321', 24, '2019-09-10 07:22:40', '2019-09-19', 'Broket brain', '14.4578,120.9425', 'On-going', 1, 'problem2,problem4,problem6', 'Fatima Road labogon mandaue city'),
(7, 'GSW321', 24, '2019-09-10 07:30:18', '2019-09-11', 'Broken Arms', '14.4578,120.9425', 'Pending', 1, 'problem2,problem4', 'Fatima Road labogon mandaue city'),
(9, 'ASD111', 25, '2019-09-10 16:07:54', '2019-09-17', 'hello', '14.4578,120.9425', 'On-going', 1, 'problem3,problem4', 'Fatima Road labogon mandaue city'),
(10, 'GDG 123', 26, '2019-09-12 08:16:27', '2019-09-19', 'Flat tires ', ',', 'On-going', 1, 'problem1', 'Fatima Road labogon mandaue city'),
(11, 'GDG 123', 26, '2019-09-12 10:34:18', '2019-09-12', 'flat tires', ',', 'On-going', 1, 'problem1', 'Fatima Road labogon mandaue city'),
(12, 'GDG 123', 26, '2019-09-12 19:53:08', '2019-09-18', 'wheel won\'t work', '10.3111,123.8917', 'Pending', 1, 'problem4,problem5', 'Fatima Road labogon mandaue city'),
(13, 'GDG 123', 26, '2019-09-12 19:53:50', '2019-09-11', 'dadas', '10.3111,123.8917', 'Pending', 1, 'problem4,problem5,problem8', 'edsada');

-- --------------------------------------------------------

--
-- Table structure for table `service_request_accepted`
--

CREATE TABLE `service_request_accepted` (
  `sra_id` int(11) NOT NULL,
  `serve_post_respid` int(11) NOT NULL,
  `motoristid` int(11) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `notification` varchar(10) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request_accepted`
--

INSERT INTO `service_request_accepted` (`sra_id`, `serve_post_respid`, `motoristid`, `contactno`, `address`, `status`, `notification`) VALUES
(7, 17, 25, '0999999999', 'cebu city ', '0', 'read'),
(8, 16, 25, '0922048883', 'Cebu city', '0', 'unread'),
(14, 17, 25, '12313', 'qwewqeqw', '1', 'read'),
(15, 19, 26, '09123456789', 'Fatima Road Basak Labogon Mandaue City', '1', 'unread'),
(16, 19, 26, '13123123', '123123123', '1', 'unread'),
(17, 22, 26, '09123456789', 'mandaue city', '1', 'unread');

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
(15, 9, 6, 1000, 'labor only', 'read', '2019-09-10 07:23:00'),
(16, 9, 7, 10000000, '100000\r\n', 'read', '2019-09-10 07:33:33'),
(17, 14, 9, 2000, 'All In\r\n', 'read', '2019-09-10 16:08:59'),
(18, 14, 9, 15000, 'Wheel Repair 1000', 'read', '2019-09-11 11:24:43'),
(22, 16, 11, 1500, 'labor, gasoline, break oil', 'read', '2019-09-12 10:50:32');

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
(26, 'dungeun@gmail.com', '101398', 'Motorist', 'active'),
(27, 'gamers@gmail.com', '123123', 'Mechanic', 'active'),
(28, 'chadnacua@gmail.com', 'qweasd', 'Mechanic', 'active'),
(29, 'karen@gmail.com', 'qweasd', 'Motorist', 'active'),
(30, 'potot@gmail.com', '12345', 'Mechanic', 'active');

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
(13, 24, '3003-honda-civic-2019-main-1555313340.jpg', 1000, 'Honda', 'civic 2019', 'manual', 'RED', '09384777', 'GSW321', ''),
(14, 25, '9222-hilux2019.jpg', 1000, 'Yamaha', 'Hilux', 'manual', 'RED', '0392194298', 'ASD111', ''),
(15, 26, '4041-honda-civic-2019-main-1555313340.jpg', 12353489, 'Honda', 'Civic 2019', 'Automatic', 'red', '12345', 'GDG 123', '');

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `service_request_accepted`
--
ALTER TABLE `service_request_accepted`
  ADD PRIMARY KEY (`sra_id`);

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
  MODIFY `mechanicid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mechanic_cert`
--
ALTER TABLE `mechanic_cert`
  MODIFY `certid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motorist`
--
ALTER TABLE `motorist`
  MODIFY `motoristid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `servreqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_request_accepted`
--
ALTER TABLE `service_request_accepted`
  MODIFY `sra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_request_post`
--
ALTER TABLE `service_request_post`
  MODIFY `serve_post_respid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_request_respon`
--
ALTER TABLE `service_request_respon`
  MODIFY `serve_post_respid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
