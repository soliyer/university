-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 05:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Mashhad'),
(2, 'Tehran'),
(3, 'Karaj'),
(4, 'Shiraz');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `depart_id` varchar(110) NOT NULL,
  `course_descrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `depart_id`, `course_descrip`) VALUES
(1, 'Advanced Engineering Mathematics', 'Mechanical Engineering', 'Will be held in class four'),
(2, 'Physics', 'Science', 'Will be held in class one'),
(3, 'Chemistry', 'Science', 'Will be held in class five');

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `depart_id` int(11) NOT NULL,
  `depart_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`depart_id`, `depart_name`) VALUES
(2, 'Mechanical Engineering'),
(3, 'Science'),
(4, 'Meds');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `instructor_fname` varchar(50) NOT NULL,
  `instructor_lname` varchar(50) NOT NULL,
  `depart_name` varchar(60) NOT NULL,
  `course_name` varchar(60) NOT NULL,
  `instructor_city` varchar(60) NOT NULL,
  `working_duration` int(11) NOT NULL,
  `is_retired` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_fname`, `instructor_lname`, `depart_name`, `course_name`, `instructor_city`, `working_duration`, `is_retired`) VALUES
(2, 'MohammadReza', 'Bayati', 'Mechanical Engineering', 'Physics', 'Mashhad', 28, '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_fname` varchar(40) DEFAULT NULL,
  `student_lname` varchar(40) NOT NULL,
  `student_email` varchar(80) NOT NULL,
  `student_password` int(20) NOT NULL,
  `student_city` varchar(50) DEFAULT NULL,
  `student_grade` int(11) NOT NULL,
  `is_honor` tinyint(1) DEFAULT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_fname`, `student_lname`, `student_email`, `student_password`, `student_city`, `student_grade`, `is_honor`, `course_name`) VALUES
(1, 'Soheil', 'Vafaei', 'vafaei39@gmail.com', 12323213, 'Mashhad', 20, 1, 'Advanced Engineering Mathematics'),
(26, 'Majid', 'Rahmani', 'mrahmani@gmail.com', 123456, 'Karaj', 16, 0, 'Advanced Engineering Mathematics'),
(28, 'Mojtaba', 'Noori', 'mnoori@yahoo.com', 0, 'Shiraz', 20, 1, 'Physics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `depart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
