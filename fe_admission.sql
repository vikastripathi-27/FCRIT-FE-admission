-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 07:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fe_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark_details`
--

CREATE TABLE `mark_details` (
  `APP_ID` int(11) NOT NULL,
  `hsc_math` int(3) NOT NULL,
  `hsc_ph` int(3) NOT NULL,
  `hsc_chem` int(3) NOT NULL,
  `hsc_total` int(3) NOT NULL,
  `cet_cap_merit_no` int(20) NOT NULL,
  `cet_math` int(3) DEFAULT NULL,
  `cet_phy` int(3) DEFAULT NULL,
  `cet_chem` int(3) DEFAULT NULL,
  `cet_total` int(3) DEFAULT NULL,
  `jee_cap_merit_no` int(20) DEFAULT NULL,
  `jee_math` int(3) DEFAULT NULL,
  `jee_phy` int(3) DEFAULT NULL,
  `jee_chem` int(3) DEFAULT NULL,
  `jee_total` int(3) DEFAULT NULL,
  `hsc_marks` int(3) DEFAULT NULL,
  `hsc_yop` year(4) DEFAULT NULL,
  `ssc_marks` int(3) NOT NULL,
  `ssc_yop` year(4) NOT NULL,
  `hsc_boardname` varchar(100) DEFAULT NULL,
  `ssc_boardname` varchar(100) NOT NULL,
  `diploma_marks` int(3) DEFAULT NULL,
  `diploma_yop` year(4) DEFAULT NULL,
  `diploma_boradname` varchar(100) DEFAULT NULL,
  `ssc_total` int(3) NOT NULL,
  `diploma_total` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otherdetails`
--

CREATE TABLE `otherdetails` (
  `APP_ID` int(11) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `father_occup` varchar(30) NOT NULL,
  `mother_occup` varchar(30) NOT NULL,
  `annual_income` int(10) NOT NULL,
  `guradian_name` varchar(50) DEFAULT NULL,
  `father_contact` int(10) NOT NULL,
  `mother_contact` int(10) DEFAULT NULL,
  `cand_contact` int(10) DEFAULT NULL,
  `guardian_contact` int(10) DEFAULT NULL,
  `landline` int(8) DEFAULT NULL,
  `transaction_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Application_NO` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `Course_1` text NOT NULL,
  `Course_2` text,
  `Course_3` text,
  `Course_4` text,
  `Course_5` text,
  `Address_1` varchar(200) NOT NULL,
  `Address_2` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `POB` varchar(28) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `blood_gp` varchar(5) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `sub_cast` varchar(10) DEFAULT NULL,
  `religion` varchar(10) NOT NULL,
  `maha_domicile` text NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `cap_app_id` varchar(20) NOT NULL,
  `student_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark_details`
--
ALTER TABLE `mark_details`
  ADD PRIMARY KEY (`APP_ID`);

--
-- Indexes for table `otherdetails`
--
ALTER TABLE `otherdetails`
  ADD PRIMARY KEY (`APP_ID`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`Application_NO`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `cap_app_id` (`cap_app_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mark_details`
--
ALTER TABLE `mark_details`
  MODIFY `APP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT for table `otherdetails`
--
ALTER TABLE `otherdetails`
  MODIFY `APP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `Application_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
