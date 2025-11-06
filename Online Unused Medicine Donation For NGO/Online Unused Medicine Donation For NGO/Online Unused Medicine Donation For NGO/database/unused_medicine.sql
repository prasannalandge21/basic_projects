-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 09:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unused_medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `fld_admin_id` int(11) NOT NULL,
  `fld_admin_name` varchar(30) NOT NULL,
  `fld_admin_email` varchar(25) NOT NULL,
  `fld_admin_password` varchar(25) NOT NULL,
  `fld_admin_mobileno` bigint(20) NOT NULL,
  `fld_admin_image` varchar(255) NOT NULL,
  `fld_admin_address` text NOT NULL,
  `fld_admin_city` varchar(25) NOT NULL,
  `submited` datetime NOT NULL DEFAULT current_timestamp(),
  `Updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`fld_admin_id`, `fld_admin_name`, `fld_admin_email`, `fld_admin_password`, `fld_admin_mobileno`, `fld_admin_image`, `fld_admin_address`, `fld_admin_city`, `submited`, `Updated`) VALUES
(1, 'Admin', 'admin@gmail.com       ', 'admin', 9421291901, '753067.jpg', 'nashik       ', 'kumarr', '2021-02-15 11:14:10', '2021-03-11 14:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fld_feedback_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_feedback_subject` varchar(50) NOT NULL,
  `fld_feedback_discription` text NOT NULL,
  `fld_feedback_submited_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_feedback_updated_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fld_feedback_id`, `fld_user_id`, `fld_feedback_subject`, `fld_feedback_discription`, `fld_feedback_submited_date`, `fld_feedback_updated_date`) VALUES
(1, 1, 'sdfg', 'dfefdf', '2021-05-21 11:38:49', '2021-05-21 11:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medicine`
--

CREATE TABLE `tbl_medicine` (
  `fld_medicine_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL COMMENT 'fld_user_id',
  `fld_medicine_name` varchar(25) NOT NULL,
  `fld_medicine_quantity` varchar(25) NOT NULL,
  `fld_medicine_expiry` date NOT NULL,
  `fld_medicine_company_name` varchar(25) NOT NULL,
  `fld_medicine_descriptiom` text NOT NULL,
  `fld_medicine_img` varchar(255) NOT NULL,
  `fld_medicine_status` varchar(25) NOT NULL DEFAULT 'register',
  `fld_medicine_request` varchar(100) NOT NULL DEFAULT 'no_request',
  `fld_medicine_req` varchar(25) NOT NULL DEFAULT 'no_request',
  `fld_medicine_ac_can` varchar(25) NOT NULL DEFAULT '',
  `fld_medicine_submit` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_medicine_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_medicine`
--

INSERT INTO `tbl_medicine` (`fld_medicine_id`, `fld_user_id`, `fld_medicine_name`, `fld_medicine_quantity`, `fld_medicine_expiry`, `fld_medicine_company_name`, `fld_medicine_descriptiom`, `fld_medicine_img`, `fld_medicine_status`, `fld_medicine_request`, `fld_medicine_req`, `fld_medicine_ac_can`, `fld_medicine_submit`, `fld_medicine_update`) VALUES
(1, 1, 'kumar1', '1', '2021-05-25', 'eee', 'ee', '477545.png', 'approved', 'Medicine Sold Out', 'requested', '3', '2021-05-21 11:37:38', '2021-05-21 12:06:35'),
(2, 1, 'kumar2', '  2332  ', '2021-05-10', '  err  ', 'erer', '286835.jpg', 'approved', 'request cancle by user', 'requested', '3', '2021-05-21 11:38:00', '2021-05-21 12:06:33'),
(3, 1, 'kumar3', '22', '2021-05-25', 'edfrer', 'erefer', '562111.png', 'approved', 'Your request accepted by user', 'requested', '3', '2021-05-21 11:38:37', '2021-05-21 12:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medicine_request`
--

CREATE TABLE `tbl_medicine_request` (
  `fld_medicine_req_id` int(11) NOT NULL,
  `fld_user_med_from` int(11) NOT NULL COMMENT 'fld_user_id',
  `fld_user_med_to` int(11) NOT NULL COMMENT 'fld_user_id',
  `fld_medicine_id` int(11) NOT NULL,
  `fld_medicine_req_status` varchar(25) NOT NULL DEFAULT 'requested',
  `fld_medicine_req_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_medicine_req_updated_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_medicine_request`
--

INSERT INTO `tbl_medicine_request` (`fld_medicine_req_id`, `fld_user_med_from`, `fld_user_med_to`, `fld_medicine_id`, `fld_medicine_req_status`, `fld_medicine_req_created_date`, `fld_medicine_req_updated_date`) VALUES
(1, 3, 1, 3, 'requested', '2021-05-21 11:53:18', '2021-05-21 11:53:18'),
(2, 3, 1, 1, 'requested', '2021-05-21 11:55:08', '2021-05-21 11:55:08'),
(3, 3, 1, 3, 'requested', '2021-05-21 11:56:09', '2021-05-21 11:56:09'),
(4, 3, 1, 2, 'requested', '2021-05-21 11:56:11', '2021-05-21 11:56:11'),
(5, 3, 1, 1, 'requested', '2021-05-21 12:04:22', '2021-05-21 12:04:22'),
(6, 3, 1, 2, 'requested', '2021-05-21 12:05:25', '2021-05-21 12:05:25'),
(7, 3, 1, 3, 'requested', '2021-05-21 12:06:06', '2021-05-21 12:06:06'),
(8, 3, 1, 2, 'requested', '2021-05-21 12:06:08', '2021-05-21 12:06:08'),
(9, 3, 1, 1, 'requested', '2021-05-21 12:06:11', '2021-05-21 12:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medicine_request_admin`
--

CREATE TABLE `tbl_medicine_request_admin` (
  `fld_medicine_request_admin_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_medicine_request_admin_discription` text NOT NULL,
  `fld_medicine_request_admin_submited_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_medicine_request_admin_updated_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `fld_user_id` int(11) NOT NULL,
  `fld_user_name` varchar(25) NOT NULL,
  `fld_user_email` varchar(25) NOT NULL,
  `fld_user_password` varchar(25) NOT NULL,
  `fld_user_mobileno` bigint(20) NOT NULL,
  `fld_user_address` text NOT NULL,
  `fld_user_photo` varchar(255) NOT NULL,
  `fld_user_city` varchar(20) NOT NULL,
  `fld_user_status` varchar(25) NOT NULL DEFAULT 'register',
  `fld_user_submited_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_user_updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`fld_user_id`, `fld_user_name`, `fld_user_email`, `fld_user_password`, `fld_user_mobileno`, `fld_user_address`, `fld_user_photo`, `fld_user_city`, `fld_user_status`, `fld_user_submited_date`, `fld_user_updated_date`) VALUES
(1, 'kumar', 'kumar@gmail.com          ', 'kumar', 9421291901, 'mumbai         ', '46947.jpg', 'nashik', 'approved', '2021-03-08 16:51:48', '2021-03-08 16:51:48'),
(3, 'rushi', 'rushi@gmail.com ', 'rushi', 9421291901, 'nashik ', '644856.jpg', 'rushi', 'approved', '2021-03-09 13:41:40', '2021-03-09 13:41:40'),
(4, 'rahul', 'rahul@gmail.com ', 'rahul', 9421291901, 'nashik ', '262979.jpeg', 'nashik', 'approved', '2021-04-01 19:48:24', '2021-04-01 19:48:24'),
(5, 'prashant', 'prashant@gmail.com', 'prashant', 1212121212, 'nashik', '', 'nashilk', 'disapproved', '2021-05-20 14:09:07', '2021-05-20 14:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_quetion`
--

CREATE TABLE `tbl_user_quetion` (
  `fld_user_quetion_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_user_quetions` text NOT NULL,
  `fld_user_answer` text NOT NULL,
  `fld_user_quetion_submited_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_user_quetion_updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_quetion`
--

INSERT INTO `tbl_user_quetion` (`fld_user_quetion_id`, `fld_user_id`, `fld_user_quetions`, `fld_user_answer`, `fld_user_quetion_submited_date`, `fld_user_quetion_updated_date`) VALUES
(8, 1, 'dfg', 'NO Answer', '2021-05-21 11:48:01', '2021-05-21 11:48:01'),
(9, 1, 'fgb', 'NO Answer', '2021-05-21 11:48:03', '2021-05-21 11:48:03'),
(10, 1, 'qw', 'NO Answer', '2021-05-21 11:48:26', '2021-05-21 11:48:26'),
(11, 1, 'd', 'NO Answer', '2021-05-21 11:49:25', '2021-05-21 11:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`fld_admin_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fld_feedback_id`);

--
-- Indexes for table `tbl_medicine`
--
ALTER TABLE `tbl_medicine`
  ADD PRIMARY KEY (`fld_medicine_id`);

--
-- Indexes for table `tbl_medicine_request`
--
ALTER TABLE `tbl_medicine_request`
  ADD PRIMARY KEY (`fld_medicine_req_id`);

--
-- Indexes for table `tbl_medicine_request_admin`
--
ALTER TABLE `tbl_medicine_request_admin`
  ADD PRIMARY KEY (`fld_medicine_request_admin_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`fld_user_id`);

--
-- Indexes for table `tbl_user_quetion`
--
ALTER TABLE `tbl_user_quetion`
  ADD PRIMARY KEY (`fld_user_quetion_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `fld_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fld_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_medicine`
--
ALTER TABLE `tbl_medicine`
  MODIFY `fld_medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_medicine_request`
--
ALTER TABLE `tbl_medicine_request`
  MODIFY `fld_medicine_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_medicine_request_admin`
--
ALTER TABLE `tbl_medicine_request_admin`
  MODIFY `fld_medicine_request_admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `fld_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_quetion`
--
ALTER TABLE `tbl_user_quetion`
  MODIFY `fld_user_quetion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
