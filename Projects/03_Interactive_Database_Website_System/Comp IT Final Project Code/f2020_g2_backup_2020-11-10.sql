-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 03:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f2020_g2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_record_id` int(20) NOT NULL,
  `customer_phone_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `customer_month_year` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `customer_vmail_message` int(11) NOT NULL,
  `customer_day_mins` int(11) NOT NULL,
  `customer_day_calls` int(11) NOT NULL,
  `customer_day_charge` float NOT NULL,
  `customer_eve_mins` float NOT NULL,
  `customer_eve_calls` int(11) NOT NULL,
  `customer_eve_charge` float NOT NULL,
  `customer_night_mins` float NOT NULL,
  `customer_night_calls` int(11) NOT NULL,
  `customer_night_charge` float NOT NULL,
  `customer_intl_mins` float NOT NULL,
  `customer_intl_calls` int(11) NOT NULL,
  `customer_intl_charge` float NOT NULL,
  `customer_custserv_calls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_record_id`, `customer_phone_no`, `customer_month_year`, `customer_vmail_message`, `customer_day_mins`, `customer_day_calls`, `customer_day_charge`, `customer_eve_mins`, `customer_eve_calls`, `customer_eve_charge`, `customer_night_mins`, `customer_night_calls`, `customer_night_charge`, `customer_intl_mins`, `customer_intl_calls`, `customer_intl_charge`, `customer_custserv_calls`) VALUES
(1, '0812345678', '10/2020', 150, 50, 32, 12, 1, 12, 2, 1, 3, 1, 1, 5, 50, 3),
(2, '0812345678', '11/2020', 1, 2, 3, 5, 50, 1, 100, 1000, 9, 300, 2, 20, 10.22, 37),
(3, '0811111111', '10/2020', 12, 10, 1, 132.215, 12, 12, 200, 500, 12, 1.21, 121, 1223, 1.2121, 23),
(4, '0811111111', '11/2020', 12, 200, 1, 132.215, 12, 12, 200, 20, 12, 1.21, 121, 1223, 1.2121, 23),
(5, '382-4657', '10/2020', 25, 265, 110, 45.07, 197.4, 99, 16.78, 244.7, 91, 11.01, 10, 3, 2.7, 1),
(6, '371-7191', '10/2020', 26, 162, 123, 27.47, 195.5, 103, 16.62, 254.4, 103, 11.45, 13.7, 3, 3.7, 1),
(7, '358-1921', '10/2020', 0, 243, 114, 41.38, 121.2, 110, 10.3, 162.6, 104, 7.32, 12.2, 5, 3.29, 0),
(8, '375-9999', '10/2020', 0, 299, 71, 50.9, 61.9, 88, 5.26, 196.9, 89, 8.86, 6.6, 7, 1.78, 2),
(9, '330-6626', '10/2020', 0, 167, 113, 28.34, 148.3, 122, 12.61, 186.9, 121, 8.41, 10.1, 3, 2.73, 3),
(10, '391-8027', '10/2020', 0, 223, 98, 37.98, 220.6, 101, 18.75, 203.9, 118, 9.18, 6.3, 6, 1.7, 0),
(11, '355-9993', '11/2020', 24, 218, 88, 300, 348.5, 108, 10, 212.6, 118, 9.57, 7.5, 7, 2.03, 3),
(12, '329-9001', '10/2020', 0, 157, 79, 26.69, 103.1, 94, 8.76, 211.8, 96, 9.53, 7.1, 6, 1.92, 0),
(13, '335-4719', '10/2020', 0, 185, 97, 31.37, 351.6, 80, 29.89, 215.8, 90, 9.71, 8.7, 4, 2.35, 1),
(14, '358-1921', '11/2020', 1, 251, 100, 200, 120.3, 120, 200, 158.6, 100, 300, 12.4, 3, 3.48, 0),
(15, '375-9999', '11/2020', 0, 282, 80, 50.2, 63.5, 85, 5.5, 197.9, 94, 8.98, 6.8, 8, 1.68, 1),
(16, '330-6626', '11/2020', 2, 163, 110, 27.65, 149.6, 130, 11.45, 187.8, 115, 8.25, 10, 4, 2.84, 4),
(17, '335-4719', '11/2020', 0, 185, 93, 32.49, 347.8, 78, 30, 220.4, 98, 9.89, 9.1, 3, 2.52, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_phone_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `customer_age` int(10) NOT NULL,
  `customer_year_of_use` int(10) NOT NULL,
  `customer_current_promotion_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_phone_no`, `customer_name`, `customer_gender`, `customer_age`, `customer_year_of_use`, `customer_current_promotion_id`) VALUES
('0811111111', 'นาง ข ', 'Female', 20, 2019, 'A001'),
('0812345678', 'นาย ก', 'Male', 52, 2012, 'A001'),
('329-9001', 'Medeline', 'Female', 50, 2015, 'A001'),
('330-6626', 'Dean', 'Male', 41, 2012, 'A001'),
('335-4719', 'Jack', 'Male', 47, 2015, 'A001'),
('355-9993', 'Sam', 'Male', 35, 2015, 'A001'),
('358-1921', 'Cora', 'Female', 30, 2017, 'B001'),
('371-7191', 'Elizabeth', 'Female', 35, 2014, 'A001'),
('375-9999', 'Henry', 'Male', 45, 2016, 'A001'),
('382-4657', 'Hilbert', 'Female', 22, 2020, 'A001'),
('391-8027', 'Emma', 'Female', 20, 2020, 'A001');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `promotion_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `promotion_price` int(10) NOT NULL,
  `promotion_detail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `promotion_name`, `promotion_price`, `promotion_detail`) VALUES
('B001', 'โทรกลางวันคุ้ม', 299, ''),
('C001', 'โทรกลางคืนคุ้ม', 299, ''),
('D001', 'โปรโทรไม่อั้น', 499, '');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_customer`
--

CREATE TABLE `promotion_customer` (
  `suggestion_id` int(10) NOT NULL,
  `customer_phone_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `promotion_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `staff_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `time_offer` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion_customer`
--

INSERT INTO `promotion_customer` (`suggestion_id`, `customer_phone_no`, `promotion_id`, `staff_id`, `time_offer`, `success`) VALUES
(5, '088888888', 'B001', '12345', '10.00-12.00', 1),
(7, '089121234', 'A001', '58012', '08.00-10.00', 1),
(8, '0812345625', 'B001', '61001', '10.00-12.00', 1),
(12, '08123456', 'A001', '58012', '08.00-10.00', 1),
(13, '0811111123', 'A001', '58012', '08.00-10.00', 0),
(14, '081231123', 'A001', '58012', '08.00-10.00', 0),
(15, '088888888', 'B001', '61001', '12.00-14.00', 1),
(16, '0812312312', 'A001', '58012', '08.00-10.00', 1),
(19, '0851222222', 'A001', '58012', '08.00-10.00', 1),
(20, '0812313424', 'A001', '58012', '08.00-10.00', 0),
(21, '0812345888', 'A001', '61001', '12.00-14.00', 1),
(23, '355-9993', 'B001', '74045', '12.00-14.00', 1),
(24, '355-9993', 'B001', '61001', '14.00-16.00', 0),
(25, '0812345678', 'A001', '61001', '08.00-10.00', 1),
(26, '0812345678', 'B001', '61001', '08.00-10.00', 1),
(27, '0812345678', 'C001', '74045', '10.00-12.00', 1),
(28, '358-1921', 'D001', '74045', '12.00-14.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `staff_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `staff_working_year` int(10) NOT NULL,
  `staff_gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_working_year`, `staff_gender`) VALUES
('58012', 'To-leaw', 5, 'Female'),
('61001', 'Dekdee', 2, 'Male'),
('74045', 'David', 10, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_record_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_phone_no`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `promotion_customer`
--
ALTER TABLE `promotion_customer`
  ADD PRIMARY KEY (`suggestion_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_record_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `promotion_customer`
--
ALTER TABLE `promotion_customer`
  MODIFY `suggestion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
