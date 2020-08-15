-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2020 at 01:30 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torus`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `professor_name` int(11) NOT NULL,
  `totalStudents` int(11) NOT NULL,
  `course_start_date` datetime NOT NULL,
  `course_type` int(11) NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_price` int(11) NOT NULL,
  `brief` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `course_name`, `professor_name`, `totalStudents`, `course_start_date`, `course_type`, `course_duration`, `course_price`, `brief`) VALUES
(1, 'dfg', 1, 4, '2020-08-14 00:00:00', 1, 45, 67, 'dfghhgf'),
(2, 'dscfg', 1, 45, '2020-08-14 00:00:00', 1, 45, 45, 'sdfg');

-- --------------------------------------------------------

--
-- Table structure for table `course_type`
--

DROP TABLE IF EXISTS `course_type`;
CREATE TABLE IF NOT EXISTS `course_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_type`
--

INSERT INTO `course_type` (`type_id`, `type_name`) VALUES
(1, 'Technology'),
(2, 'Arts');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

DROP TABLE IF EXISTS `professors`;
CREATE TABLE IF NOT EXISTS `professors` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`p_id`, `first_name`, `last_name`, `dob`, `gender`, `department`, `position`, `phone`, `email`, `url`, `image`, `message`) VALUES
(1, 'Muhammad', 'Rafique', '07/28/2020', 'Male', 'cs', 'wdfdf', '03349982223', 'Yasir_2223@gmail.com', 'sdfgv', '', 'dfghnm,'),
(2, 'Muhammad', 'Rafique', '08/04/2020', 'Male', 'cs', 'wdfdf', '03349982223', 'Yasir_2223@gmail.com', 'sdfgv', NULL, 'cfvbnm'),
(3, 'Muhammad', 'Rafique', '07/28/2020', 'Male', 'cs', 'wdfdf', '03349982223', 'Yasir_2223@gmail.com', 'sdfgv', NULL, 'fghjnmk,');

-- --------------------------------------------------------

--
-- Table structure for table `site_configs`
--

DROP TABLE IF EXISTS `site_configs`;
CREATE TABLE IF NOT EXISTS `site_configs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `entity` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_configs`
--

INSERT INTO `site_configs` (`id`, `entity`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'logo', 'demologo.png', '2020-08-06 05:18:51', '2020-08-06 05:18:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
