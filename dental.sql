-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 10:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `appointment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `type_service` varchar(50) NOT NULL,
  `effective_date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_tbl`
--

INSERT INTO `appointment_tbl` (`appointment_id`, `user_id`, `fullname`, `contact_no`, `type_service`, `effective_date`, `time`) VALUES
(1, 34, 'poota', ' 09265361987', 'Incisors', '2018-08-21', '14:12:00'),
(2, 34, 'poota', ' 09265361987', 'Incisors', '2018-08-21', '14:12:00'),
(3, 34, 'poota', ' 09265361987', 'Incisors', '2018-08-21', '14:12:00'),
(4, 21, 'trial', '09265361987', 'Canines', '2018-08-20', '01:01:00'),
(5, 21, 'trial', '09265361987', 'Incisors', '2018-08-02', '22:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(31, 'Carlo santos 09265361987', '#008000', '2018-07-17 05:00:00', '2018-07-17 05:00:00'),
(32, 'Carlo santos 09265361987', '#008000', '2018-07-27 06:00:00', '2018-07-27 06:00:00'),
(33, 'carlosantos', '#40E0D0', '2018-08-04 00:00:00', '2018-08-05 00:00:00'),
(34, 'carlosants', '#0071c5', '2018-07-27 00:00:00', '2018-07-28 00:00:00'),
(35, 'pasta', '#0071c5', '2018-08-06 00:00:00', '2018-08-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `main_user`
--

CREATE TABLE `main_user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_user`
--

INSERT INTO `main_user` (`user_id`, `fullname`, `email`, `username`, `password`, `contact_no`, `age`, `gender`, `address`, `type`, `date_created`) VALUES
(3, 'bn ', 'arlenesanga@yahoo.com', 'cv', 'cv', '', '', '', '', 'secretary', '2018-07-23 02:00:05'),
(15, 'admin', 'admin@gmail.com', 'admin', 'mahal', '', '', '', '', 'admin', '2018-08-15 14:13:42'),
(21, 'trial', 'trial@yahoo.com', 'trial', 'carlo', '09265361987', '20', 'Male', 'sd', 'patient', '2018-07-19 15:11:23'),
(27, 'sabog', 'sabog@gmail.com', 'sabog', 'sabog', '09265361987', '20', 'Male', 'fd', 'secretary', '2018-07-19 05:47:30'),
(29, '', '', '', '', '', '', '', '', 'patient', '2018-07-19 13:19:18'),
(30, 'bebang', 'bebang@gmail.com', 'bebang', 'bebang', '', '', '', '', 'patient', '2018-07-23 09:01:30'),
(31, '', 'bob@gmail.com', 'bobo', 'bobo', '', '', '', '', 'patient', '2018-07-25 02:42:22'),
(32, 'hello', 'hello@gmail.com', 'hello', 'hello', '0923443254252', '', '', '', 'patient', '2018-08-20 01:46:21'),
(33, 'hahahah', 'hahaha@gmail.com', 'hahahah', ' 0976764786387', 'hahaha', '', '', '', 'patient', '2018-08-20 01:48:57'),
(34, 'poota', 'poota@gmail.com', 'poota', 'poota', ' 09265361987', '', '', '', 'patient', '2018-08-20 01:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `patient_form`
--

CREATE TABLE `patient_form` (
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `type_service` varchar(100) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `dental_insurance` varchar(50) NOT NULL,
  `effective_date` date NOT NULL,
  `p_guardian_name` varchar(50) NOT NULL,
  `referring` varchar(50) NOT NULL,
  `r_dental_consultation` varchar(50) NOT NULL,
  `predental_history` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `home_no` int(20) NOT NULL,
  `office_no` int(20) NOT NULL,
  `fax_no` int(20) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name_physician` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `specialty_applicable` varchar(50) NOT NULL,
  `are_good_health` varchar(50) NOT NULL,
  `medical_treatment` text NOT NULL,
  `illness_operation` text NOT NULL,
  `hospitalized_history` text NOT NULL,
  `prescription_non` text NOT NULL,
  `tobacco_products` varchar(50) NOT NULL,
  `alcohol_drugs` varchar(50) NOT NULL,
  `allergic_following` text NOT NULL,
  `blood_type` varchar(50) NOT NULL,
  `blood_preassure` varchar(50) NOT NULL,
  `illnessbox` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_form`
--

INSERT INTO `patient_form` (`patient_id`, `user_id`, `fullname`, `age`, `religion`, `nationality`, `type_service`, `occupation`, `dental_insurance`, `effective_date`, `p_guardian_name`, `referring`, `r_dental_consultation`, `predental_history`, `gender`, `nickname`, `home_no`, `office_no`, `fax_no`, `contact_no`, `email`, `name_physician`, `office_address`, `specialty_applicable`, `are_good_health`, `medical_treatment`, `illness_operation`, `hospitalized_history`, `prescription_non`, `tobacco_products`, `alcohol_drugs`, `allergic_following`, `blood_type`, `blood_preassure`, `illnessbox`, `type`, `status`, `password`) VALUES
(6, 21, 'asdd', 323, 'adas', 'asda', 'Incisors', 'ada', 'adsd', '2018-07-20', 'asdasd', 'asdas', 'sadasd', 'sadasd', 'Male', 'adas', 445, 4545, 454, '545', 'eduardo_sanga@yahoo.com', 'sds', 'sdsa', 'sdsd', 'Yes', '', '', '', '', '--', '--', '', '', '', '', 'patient', 1, ''),
(7, 30, 'fsd', 34, 'sfdsd', 'sdsd', 'Canines', 'dsds', 'dsd', '2018-07-24', 'sdsd', 'sdsd', 'dsd', 'sdsd', 'Female', 'sdsd', 3232, 32323, 3232, '23232', 'jem_sanga@yahoo.com', 'ffdf', 'ffdff', 'dfdf', 'Yes', 'erere', 'erer', '', '', 'Yes', 'No', 'Local Anesthetics,Penicilin Antibiotics', 'rere', 'ere', 'High Blood Preassure,Low Blood Preassure', 'patient', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `taken`
--

CREATE TABLE `taken` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taken`
--

INSERT INTO `taken` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_user`
--
ALTER TABLE `main_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `patient_form`
--
ALTER TABLE `patient_form`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `taken`
--
ALTER TABLE `taken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `main_user`
--
ALTER TABLE `main_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `patient_form`
--
ALTER TABLE `patient_form`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taken`
--
ALTER TABLE `taken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
