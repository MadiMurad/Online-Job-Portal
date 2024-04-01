-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 11:15 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_r`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user_name`, `email`, `password`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(32) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(32) DEFAULT 'Subscribe',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `image`, `status`) VALUES
(2, 'Computer', 'photo-1517694712202-14dd9538aa97.jpg', 'Subscribe');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE IF NOT EXISTS `cvs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `location` varchar(32) NOT NULL,
  `area` varchar(32) NOT NULL,
  `post_date` date NOT NULL,
  `experance` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `age_limit` varchar(32) NOT NULL,
  `education` varchar(32) NOT NULL,
  `files` text NOT NULL,
  `status` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `user_name`, `title`, `location`, `area`, `post_date`, `experance`, `gender`, `age_limit`, `education`, `files`, `status`) VALUES
(6, 'Huma', 'LDC', 'Rawalpindi', 'IT', '2019-05-09', '2 years', 'female', '25', 'mcs', '', 'Applied'),
(9, 'Huma', 'SST Teacher', 'Karachi', 'Teaching', '2019-05-21', '5 ', 'female', '25', 'mcs', 'jobportal_databaseBackup.sql', 'Applied'),
(10, 'Usra', 'SST Teacher', 'Karachi', 'School', '2020-11-23', '2 years', 'Female', '30', 'mcs', 'Fall 2020_CS619_4429.docx', 'Applied'),
(11, 'Usra', 'SST Teacher', 'Karachi', 'School', '2020-11-23', '2 years', 'Female', '30', 'mcs', 'Fall 2020_CS619_4429.docx', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `contact` varchar(70) NOT NULL,
  `city` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `user_type` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `user_name`, `password`, `designation`, `contact`, `city`, `gender`, `email`, `user_type`) VALUES
(2, 'Huma', 'huma', '1234', 'student', '0302126545', '', '', 'huma@gmail.com', 'Employee'),
(3, 'Usra', 'usra', '12345', 'jobless', '0302126545', '', 'female', 'usra@gmail.com', ''),
(4, 'Ali Raza', '', '12345', '', '03001234598', 'Lahore', '', 'ali@gmail.com', 'Employee'),
(5, 'Sana', '', '12345', '', '03001234598', 'Rwp', '', 'sana@gmail.com', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE IF NOT EXISTS `feed_back` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `msgs` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`id`, `name`, `subject`, `msgs`) VALUES
(2, 'Usra', 'test', 'jhhb');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE IF NOT EXISTS `hr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`id`, `name`, `user_name`, `email`, `password`) VALUES
(1, 'Company Profile', 'hr', 'hr@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `company` varchar(32) NOT NULL,
  `detail` text NOT NULL,
  `location` varchar(32) NOT NULL,
  `area` varchar(32) NOT NULL,
  `positations` varchar(32) NOT NULL,
  `role` varchar(32) NOT NULL,
  `salary` varchar(32) NOT NULL,
  `post_date` date NOT NULL,
  `last_date` date NOT NULL,
  `experance` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `age_limit` varchar(32) NOT NULL,
  `education` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'Subscribe',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company`, `detail`, `location`, `area`, `positations`, `role`, `salary`, `post_date`, `last_date`, `experance`, `gender`, `age_limit`, `education`, `description`, `status`) VALUES
(2, 'LDC', '', '', 'Rawalpindi', 'IT', '20', 'Clerck', '25000', '2019-05-16', '2019-05-24', '2 Years', 'Male', '30 years', 'Mcs', 'required computer expert', 'Subscribe'),
(4, 'test title', 'testhhhh', 'test details', 'lhr', 'it', '5', 'leader', '150000', '2021-10-18', '2021-10-21', '2 years', 'Male', '30', 'LLBA', 'hyyh', 'Subscribe');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `member` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `contact` varchar(70) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `user_name`, `password`, `designation`, `contact`, `gender`, `email`) VALUES
(2, 'Huma', 'huma', '1234', 'student', '0302126545', '', ''),
(4, 'Ali Raza', 'ali', '12345', 'Team Lead', '03001234598', 'Male', 'ali@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
