-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 01:25 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ias`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
('A001', 'Pansilu', 'Nilaweera', 'pansilu@gmail.com', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` varchar(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `first_name`, `last_name`, `address`, `phone`, `email`, `password`) VALUES
('C001', 'Mario', 'Perera', '255 colombo 7', 777511456, 'mario@gmail.com', '58a8e242317395aae15c1255041c129c0a1e1b41'),
('C002', 'Erandika', 'Perera', 'J-89, Freeman Terrace, Anuradhapura', 777000983, 'erandika_p@yahoo.com', '3459a36e78e3401f2a847567d000d1c24520074c');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `subject_id` varchar(10) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `lecturer_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`subject_id`, `student_id`, `lecturer_id`) VALUES
('KE1', '12E45', 'L001'),
('KE1', '18E101', 'L003'),
('KE1', '18E103', 'L001'),
('KE1', '19E07', 'L001'),
('KE2', '18E101', 'L005'),
('KE2', '18E104', 'L002'),
('KE2', '19E07', 'L002'),
('KE3', '18E101', 'L004'),
('KE5', '18E01', 'L002'),
('KE5', '19E02', 'L001'),
('SE1', '18E102', 'L004'),
('SE1', '18E80', 'L001'),
('SE2', '18E02', 'L001'),
('SE2', '18E101', 'L004'),
('SE2', '18E102', 'L003');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `lecturer_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lecturer_id`, `first_name`, `last_name`, `phone`, `nic`, `email`, `address`, `password`) VALUES
('L001', 'Nipuna', 'Nagoda', 771234567, '753456789V', 'nago@gmail.com', '25/A, Flower Road, Kurunegala', 'ef37c66ef301a6c22b850af02685e6ca19ab6168'),
('L002', 'Chamath', 'Erandika', 777258693, '958344210V', 'tutucards2@gmail.com', 'anuradhapura', 'ef37c66ef301a6c22b850af02685e6ca19ab6168'),
('L003', 'Lalanka', 'Edirisooriya', 771230983, '665872592V', 'lalanka66@gmail.com', '89, Budhdhabi Road, Maharagama', 'lecturer3'),
('L004', 'Dalari', 'Fonseka', 766550983, '655872592V', 'dalari.65@gmail.com', 'No:234/23, Prarthana Avenue, Milagiriya', 'lecturer4'),
('L005', 'Thulakshi', 'Muhandiram', 718880983, '905872592V', 'thula_muha@gmail.com', 'No:9, Lanka Matha Mawatha, Mahabage', 'lecturer5');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_attendance`
--

CREATE TABLE `lecturer_attendance` (
  `attendance_id` int(100) NOT NULL,
  `lecturer_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_hall`
--

CREATE TABLE `lecture_hall` (
  `hall_no` varchar(10) NOT NULL,
  `floor` text NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_schedule`
--

CREATE TABLE `lecture_schedule` (
  `lecturer_id` varchar(50) NOT NULL,
  `hall_no` varchar(10) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_fee`
--

CREATE TABLE `monthly_fee` (
  `payment_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `lecturer_id` varchar(100) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cashier_name` text NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly_fee`
--

INSERT INTO `monthly_fee` (`payment_id`, `student_id`, `subject_id`, `lecturer_id`, `amount`, `timestamp`, `cashier_name`, `month`, `year`) VALUES
(23, '18E101', 'KE2', 'L004', '7500', '2019-01-06 20:08:06', 'Mario', 'January', 2019),
(24, '18E80', 'SE1', 'L001', '5000', '2019-01-07 01:54:36', 'Mario', 'January', 2016),
(25, '18E101', 'KE1', 'L001', '1500', '2019-01-07 02:00:33', 'Mario', 'January', 2016),
(26, '18E80', 'SE1', 'L001', '1500', '2019-01-07 02:01:12', 'Mario', 'January', 2016),
(27, '18E80', 'SE1', 'L001', '7500', '2019-01-07 02:03:15', 'Mario', 'January', 2016),
(28, '18E103', 'KE1', 'L001', '1500', '2019-01-07 02:55:12', 'Mario', 'January', 2020),
(29, '18E104', 'KE2', 'L002', '2000', '2019-01-07 02:55:32', 'Mario', 'February', 2019),
(30, '18E104', 'KE2', 'L001', '5000', '2019-01-07 03:53:53', 'Mario', 'January', 2016),
(31, '18E102', 'SE1', 'L001', '150000', '2019-01-07 04:49:19', 'Mario', 'January', 2016),
(32, '18E80', 'SE1', 'L001', '15000', '2019-01-07 04:50:05', 'Mario', 'January', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `slip_no` int(11) NOT NULL,
  `lecturer_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cashier_name` text NOT NULL,
  `month` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`slip_no`, `lecturer_id`, `subject_id`, `amount`, `timestamp`, `cashier_name`, `month`, `year`) VALUES
(5, 'L001', 'KE1', '500', '2019-01-04 06:32:26', 'mario', 'March', '2016'),
(6, 'L005', 'KE1', '6000', '2019-01-06 14:11:03', 'Mario', 'December', '2018'),
(7, 'L001', 'KE1', '5000', '2019-01-07 02:56:09', 'Mario', 'December', '2018'),
(8, 'L005', 'KE5', '5000', '2019-01-07 02:56:37', 'Mario', 'December', '2018'),
(9, 'L003', 'KE3', '5000', '2019-01-07 02:57:00', 'Mario', 'November', '2018'),
(10, 'L002', 'KE5', '5000', '2019-01-07 02:57:21', 'Mario', 'December', '2018'),
(11, 'L001', 'KE2', '15000', '2019-01-07 03:55:23', 'Mario', 'January', '2019'),
(12, 'L002', 'SE1', '15000', '2019-01-07 03:55:38', 'Mario', 'January', '2019'),
(13, 'L005', 'KE1', '7500', '2019-01-07 03:55:57', 'Mario', 'January', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `address`, `dob`, `nic`, `phone`, `email`, `password`, `photo`) VALUES
('18E80', 'Nilupul', 'De Silva', '24, Victoria Road, Colombo-07', '2019-01-01', '123456789V', 778103309, 'nilupul@upul.com', '34ce21c94cdc1ee3ebf5c3e42ca65379b81ca6cb', 'tamas_csutortoki_color.jpg'),
('18E101', 'Hadhi', 'Jawahir', '16, Sri Bodhirukkarama Road, Colombo-06', '1996-01-29', '960291662V', 778103309, 'hadhi@live.com', 'ff704aaa12759bf64d18780ad762e93e9ff21f28', 'ias-hadhi.jpg'),
('18E102', 'Dinithi', 'Kurukulasuriya', 'J-67, Torrington Flats, Torrington Avenue, Colombo-05', '1996-06-25', '966771372V', 772629980, 'ann.dinithi@gmail.com', 'd6aa96b89e1e85388b9561f745bce0d19544f83e', 'ias-dinithi.jpg'),
('18E103', 'Danali', 'Hirasha', '140/5, Polhena Road, Kelaniya', '1996-04-06', '9655972935V', 774240578, 'dhirasha2@gmail.com', '0a25972bdc8b9d0841ff9c4dbd42ebc8f6514bec', 'ias-danali.jpg'),
('18E104', 'Sanjana', 'Herath', '81, Bokundara Road, Piliyandala', '1995-08-28', '952412264V', 779497409, 'sanjanaherath2@gmail.com', '04401533976a68ee535babe20e6b4650deccf10a\r\n', 'ias-sanjana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `attendance_id` int(10) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject_id` varchar(100) NOT NULL,
  `lecturer_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`attendance_id`, `student_id`, `timestamp`, `subject_id`, `lecturer_id`) VALUES
(32, '18E80', '2019-01-06 16:19:25', 'KE1', 'L001'),
(33, '18E101', '2019-01-06 03:50:19', 'KE2', 'L001'),
(34, '18E103', '2019-01-06 16:19:55', 'KE1', 'L001'),
(35, '18E102', '2019-01-06 03:50:27', 'KE3', 'L001'),
(36, '18E101', '2019-01-06 03:50:37', 'SE1', 'L001'),
(37, '18E104', '2019-01-06 03:50:46', 'SE1', 'L001'),
(38, '18E101', '2019-01-06 16:21:09', 'KE1', 'L001'),
(39, '18E103', '2019-01-06 16:21:12', 'KE1', 'L001'),
(40, '18E104', '2019-01-06 16:21:16', 'KE1', 'L001'),
(41, '18E101', '2019-01-07 01:17:53', 'KE2', 'L004'),
(42, '18E101', '2019-01-07 04:53:52', 'KE2', 'L004');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`) VALUES
('KE1', 'Financial Accounting & Reporting '),
('KE2', 'Management Accounting'),
('KE3', 'Fundamentals of Taxation & Law'),
('KE4', 'Processes Assurance & Ethics'),
('KE5', 'Commercial Insight of Management'),
('SE1', 'Communication and People Skills'),
('SE2', 'Information Technology and Systems');

-- --------------------------------------------------------

--
-- Table structure for table `tutes`
--

CREATE TABLE `tutes` (
  `tute_no` varchar(30) NOT NULL,
  `tute_name` varchar(50) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `lecturer_id` varchar(20) NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutes`
--

INSERT INTO `tutes` (`tute_no`, `tute_name`, `subject_id`, `lecturer_id`, `pdf`) VALUES
('T-01', 'Financial Accounting & Reporting', 'KE1', 'L001', 'Accounting Exercises-1.pdf'),
('T-02', 'Management Accounting', 'KE2', 'L005', 'Aitken-Spence-Hotel-Report.pdf'),
('T-03', 'Fundamentals of Taxation & Law', 'KE3', 'L004', 'latexnote.pdf'),
('T-05', 'Commercial Insight of Management', 'KE5', 'L002', 'Syllabus.pdf'),
('T-06', 'Communication and People Skills', 'SE1', 'L001', 'Airline Reservation System - Answer.pdf'),
('T-07', 'Information Technology and Systems', 'SE2', 'L003', 'Normalization.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tute_issue`
--

CREATE TABLE `tute_issue` (
  `tute_id` varchar(200) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `lecturer_id` varchar(100) NOT NULL,
  `tute_issuer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tute_issue`
--

INSERT INTO `tute_issue` (`tute_id`, `student_id`, `subject_id`, `lecturer_id`, `tute_issuer_name`) VALUES
('T-01', '18E101', 'KE1', 'L001', 'Nadeesha'),
('T-01', '18E104', 'KE1', 'L001', 'Nadeesha'),
('T-02', '18E102', 'KE3', 'L002', 'Nadeesha'),
('T-02', '18E103', 'KE3', 'L002', 'Nadeesha'),
('T-02', '18E104', 'KE3', 'L002', 'Nadeesha');

-- --------------------------------------------------------

--
-- Table structure for table `tute_issuer`
--

CREATE TABLE `tute_issuer` (
  `tute_issuer_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tute_issuer`
--

INSERT INTO `tute_issuer` (`tute_issuer_id`, `first_name`, `last_name`, `email`, `password`) VALUES
('T001', 'Nadeesha', 'Pathiraja', 'nadeesha@gmail.com', '925a8db8803982a237226ac1062420e6d14fb2f8'),
('T002', 'Achintha', 'Ranathunga', 'achi.rana_88', '9497cd47a65492fcd6b674c6085c60c1f3146025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`subject_id`,`student_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `lecturer_attendance`
--
ALTER TABLE `lecturer_attendance`
  ADD PRIMARY KEY (`attendance_id`,`lecturer_id`);

--
-- Indexes for table `lecture_hall`
--
ALTER TABLE `lecture_hall`
  ADD PRIMARY KEY (`hall_no`);

--
-- Indexes for table `lecture_schedule`
--
ALTER TABLE `lecture_schedule`
  ADD PRIMARY KEY (`lecturer_id`,`hall_no`,`subject_id`);

--
-- Indexes for table `monthly_fee`
--
ALTER TABLE `monthly_fee`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`slip_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`attendance_id`,`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tutes`
--
ALTER TABLE `tutes`
  ADD PRIMARY KEY (`tute_no`);

--
-- Indexes for table `tute_issue`
--
ALTER TABLE `tute_issue`
  ADD PRIMARY KEY (`tute_id`,`student_id`);

--
-- Indexes for table `tute_issuer`
--
ALTER TABLE `tute_issuer`
  ADD PRIMARY KEY (`tute_issuer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monthly_fee`
--
ALTER TABLE `monthly_fee`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `slip_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `attendance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
