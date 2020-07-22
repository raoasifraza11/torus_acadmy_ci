-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 03:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torous`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`) VALUES
(1, 'one'),
(2, 'two'),
(3, 'three'),
(4, 'four'),
(5, 'five');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `teacher_id`) VALUES
(3, 'Group 3', 20),
(4, 'Group 4', 22);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `call_type` varchar(255) NOT NULL,
  `teacher_level` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `token_expire` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `class`, `gender`, `location`, `guardian_name`, `address`, `dob`, `phone`, `email`, `password`, `call_type`, `teacher_level`, `profile_img`, `status`, `token`, `token_expire`) VALUES
(70, 'abdul', 'wahab', '', 'male', 'Pakistan', 'hamza', 'samarzar rwp', '12/23/1997', '03456167898', 'abdulwahab@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1-1', 'higherlevel', 'noimage.png\r\n                                ', 1, '', '2020-07-17 06:55:13'),
(73, 'Haider', 'Qayyum', '', 'male', 'Pakistan', 'Qayyum', 'Gulzar e quaid Isb', '12/27/1997', '0318549869', 'haider@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1-1', 'higherlevel', 'noimage.png\r\n                                ', 1, '', '2020-07-22 13:36:18'),
(74, 'abdul', 'ali', '', 'male', 'Pakistan', 'hameed', 'Rwp', '12/27/1997', '03456167898', 'abc@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'groupcall', 'standradlevel', 'noimage.png\r\n                                ', 0, '', '2020-07-22 13:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_teacher`
--

CREATE TABLE `student_teacher` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_fees` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `teacher_id`, `class_id`) VALUES
(6, 'English', 20, 1),
(7, 'Urdu', 20, 2),
(8, 'Maths', 21, 1),
(9, 'Computer', 21, 2),
(10, 'Islamiat', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prof_bg` text NOT NULL,
  `certificates` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `subject_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `gender`, `dob`, `location`, `link`, `address`, `phno`, `email`, `password`, `profile_img`, `description`, `prof_bg`, `certificates`, `fees`, `status`, `subject_id`, `group_id`) VALUES
(20, 'hamza', 'awan', 'male', '12/27/1997', 'Pakistan', 'https://youtu.be/hJBHSmyqv0Y', 'Adiala road Rawalpindi', '03456167898', 'hamzaawan2277@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'hamza.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'yes', '1000', 0, 6, 1),
(21, 'ahmed', 'ali', 'male', '12/27/1997', 'Pakistan', 'https://youtu.be/hJBHSmyqv0Y', 'Gulzar e quaid Isb', '03456167898', 'ahmed@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'noimage.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'yes', '2000', 0, 7, 1),
(22, 'abdul', 'wahab', 'male', '12/27/1997', 'Pakistan', 'https://youtu.be/hJBHSmyqv0Y', 'samarzar rwp', '03456167898', 'abdulwahab@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'noimage.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'yes', '3000', 0, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_teacher`
--
ALTER TABLE `student_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_subject_ibfk_1` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_ibfk_1` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `student_teacher`
--
ALTER TABLE `student_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_teacher`
--
ALTER TABLE `student_teacher`
  ADD CONSTRAINT `student_teacher_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
