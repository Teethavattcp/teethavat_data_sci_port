-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 01:39 AM
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
(1, '0812345678', '10/2020', 150, 50, 32, 111, 1, 12, 1, 1, 1, 1, 1, 5, 22, 3),
(2, '0812345678', '11/2020', 1, 2, 3, 5, 5000, 1, 7, 1000, 9, 10, 2, 20, 10.22, 37),
(3, '0811111111', '10/2020', 12, 10, 1, 132.215, 12, 12, 1.2125, 5000, 12, 1.21, 121, 1223, 1.2121, 23),
(4, '0811111111', '11/2020', 12, 3000, 1, 132.215, 12, 12, 30, 20, 12, 1.21, 121, 1223, 1.2121, 23);

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
('0812345678', 'นาย ก', 'Male', 52, 2012, 'B001');

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
('A001', 'เน็ทคุ้ม', 550, 'เล่นเน็ทไม่อั้น โทร 200 นาทีตลอดบิล'),
('B001', 'โทรคุ้ม', 550, 'โทรไม่จำกัดนาที ช่วง 1200-24.00 เน็ท 10 GB');

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
(1, '0812345678', 'A001', '61001', '10.00-11.00', 0),
(2, '0811111111', 'B001', '58012', '14.00-15.00', 1),
(4, '091231541', 'A001', '12345', '14.00-16.00', 0),
(5, '088888888', 'B001', '12345', '10.00-12.00', 1),
(6, '123444', 'A001', '12312', '08.00-10.00', 1),
(7, '089121234', 'A001', '58012', '08.00-10.00', 1);

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
('61001', 'dekdee', 2, 'Male');

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
  MODIFY `customer_record_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotion_customer`
--
ALTER TABLE `promotion_customer`
  MODIFY `suggestion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
