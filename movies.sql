-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 04:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `mv_bankdetails`
--

CREATE TABLE IF NOT EXISTS `mv_bankdetails` (
  `id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(15) NOT NULL,
  `created_at` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mv_booking`
--

CREATE TABLE IF NOT EXISTS `mv_booking` (
  `id` int(10) NOT NULL DEFAULT '0',
  `movie_id` int(10) NOT NULL,
  `userregistrations_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  `account` int(20) NOT NULL,
  `created_at` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mv_city`
--

CREATE TABLE IF NOT EXISTS `mv_city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `state_id` int(10) NOT NULL,
  `city_name` varchar(15) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`,`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mv_city`
--

INSERT INTO `mv_city` (`id`, `state_id`, `city_name`, `created_at`) VALUES
(5, 25, 'mananthavady', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mv_class`
--

CREATE TABLE IF NOT EXISTS `mv_class` (
  `id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL,
  `class per amount` int(10) NOT NULL,
  `seat_number` int(30) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mv_contact`
--

CREATE TABLE IF NOT EXISTS `mv_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `paswword` int(10) NOT NULL,
  `created_at` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_country`
--

CREATE TABLE IF NOT EXISTS `mv_country` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mv_country`
--

INSERT INTO `mv_country` (`id`, `country_name`, `created_at`) VALUES
(5, 'india', '0000-00-00'),
(6, 'america', '0000-00-00'),
(7, 'africa', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `mv_district`
--

CREATE TABLE IF NOT EXISTS `mv_district` (
  `id` int(10) NOT NULL DEFAULT '0',
  `state_id` int(10) NOT NULL,
  `district_name` varchar(15) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mv_feedback`
--

CREATE TABLE IF NOT EXISTS `mv_feedback` (
  `id` int(10) NOT NULL DEFAULT '0',
  `user` varchar(15) NOT NULL,
  `movies_id` int(10) NOT NULL,
  `message` varchar(30) NOT NULL,
  `created_at` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mv_login`
--

CREATE TABLE IF NOT EXISTS `mv_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usertype` int(15) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mv_login`
--

INSERT INTO `mv_login` (`id`, `username`, `password`, `usertype`, `status`, `created_at`) VALUES
(1, 'admin', '123456', 1, 1, 0),
(11, 'amal', '123456', 2, 1, 0),
(12, 'anoop', '123456', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mv_movies`
--

CREATE TABLE IF NOT EXISTS `mv_movies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `theatre_id` int(15) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `director` varchar(30) NOT NULL,
  `producer` varchar(30) NOT NULL,
  `casting` varchar(30) NOT NULL,
  `durations` int(10) NOT NULL,
  `story` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_poster`
--

CREATE TABLE IF NOT EXISTS `mv_poster` (
  `id_` int(10) NOT NULL DEFAULT '0',
  `login_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `poster_name` varchar(15) NOT NULL,
  `file` varchar(50) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id_`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mv_screen`
--

CREATE TABLE IF NOT EXISTS `mv_screen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `theatre_id` int(15) NOT NULL,
  `scname` varchar(20) NOT NULL,
  `seatcapcity` int(20) NOT NULL,
  `created_at` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_setmovie`
--

CREATE TABLE IF NOT EXISTS `mv_setmovie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `theatre_id` int(15) NOT NULL,
  `movie_id` int(15) NOT NULL,
  `show_id` int(11) NOT NULL,
  `screen_id` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_show`
--

CREATE TABLE IF NOT EXISTS `mv_show` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `showname` varchar(30) NOT NULL,
  `theatre_id` int(10) NOT NULL,
  `am_pm` varchar(4) NOT NULL,
  `startshow` time NOT NULL,
  `endshow` time NOT NULL,
  `showdate` date NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `created_at` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mv_show`
--

INSERT INTO `mv_show` (`id`, `login_id`, `showname`, `theatre_id`, `am_pm`, `startshow`, `endshow`, `showdate`, `movie_name`, `created_at`) VALUES
(5, 0, 'arrowshow', 6, 'am', '05:30:00', '08:30:00', '2016-12-04', '', 0),
(7, 11, '', 8, 'pm', '04:30:00', '06:30:00', '2016-05-22', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mv_state`
--

CREATE TABLE IF NOT EXISTS `mv_state` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) NOT NULL,
  `state_name` varchar(15) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `mv_state`
--

INSERT INTO `mv_state` (`id`, `country_id`, `state_name`, `created_at`) VALUES
(25, 5, 'kerala', 0),
(26, 5, 'gouva', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mv_theatre`
--

CREATE TABLE IF NOT EXISTS `mv_theatre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `city_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mv_theatre`
--

INSERT INTO `mv_theatre` (`id`, `city_id`, `login_id`, `name`, `address`, `pincode`, `phone_number`, `status`, `created_at`) VALUES
(8, 5, 11, 'maruthi', 'mananthavady', 670645, 2147483647, 1, 2014),
(9, 5, 11, 'crown', 'mananthavady', 670645, 98744632, 1, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `mv_theatreregistrations`
--

CREATE TABLE IF NOT EXISTS `mv_theatreregistrations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` decimal(30,0) NOT NULL,
  `about` varchar(50) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mv_theatreregistrations`
--

INSERT INTO `mv_theatreregistrations` (`id`, `login_id`, `username`, `email`, `address`, `phone`, `about`, `created_at`) VALUES
(1, 11, 'amal', 'amal@gmail', 'mananthavady', 8086324789, '   iam amal', 0),
(2, 12, 'anoop', 'anoop@gmail', 'koyileri', 894561233, '  iam anoop', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mv_userregistrations`
--

CREATE TABLE IF NOT EXISTS `mv_userregistrations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `gender` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
