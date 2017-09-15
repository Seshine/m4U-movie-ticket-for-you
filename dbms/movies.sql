-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 03:59 AM
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
-- Table structure for table `mv_admindetails`
--

CREATE TABLE IF NOT EXISTS `mv_admindetails` (
  `username` varchar(30) NOT NULL,
  `profilepics` varchar(150) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` decimal(20,0) NOT NULL,
  `locations` varchar(30) NOT NULL,
  `about` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mv_admindetails`
--

INSERT INTO `mv_admindetails` (`username`, `profilepics`, `name`, `lastname`, `email`, `phone`, `locations`, `about`) VALUES
('admin', '29494movies_shutterstock_169841813.jpg', 'seshine jacob', 'sebastian', 'seshaseb123@gmail.com', 8129169831, 'india', 'iam  seshine. this my collage project');

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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `movie_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `noseat` int(50) NOT NULL,
  `status` int(2) NOT NULL,
  `amount` int(20) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `movie_id` (`movie_id`),
  KEY `login_id` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_city`
--

CREATE TABLE IF NOT EXISTS `mv_city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `state_id` int(10) NOT NULL,
  `city_name` varchar(15) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`,`state_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mv_city`
--

INSERT INTO `mv_city` (`id`, `state_id`, `city_name`, `created_at`) VALUES
(1, 1, 'mananthavady', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mv_country`
--

INSERT INTO `mv_country` (`id`, `country_name`, `created_at`) VALUES
(6, 'america', '0000-00-00'),
(8, 'india', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `mv_login`
--

INSERT INTO `mv_login` (`id`, `username`, `password`, `usertype`, `status`, `created_at`) VALUES
(1, 'admin', '123456', 1, 1, 0),
(37, 'amal', '123456', 2, 1, 0);

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
  PRIMARY KEY (`id`),
  KEY `theatre_id` (`theatre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_poster`
--

CREATE TABLE IF NOT EXISTS `mv_poster` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `movie_id` int(10) NOT NULL,
  `poster_name` varchar(15) NOT NULL,
  `smallposter` varchar(100) NOT NULL,
  `bigposter` varchar(100) NOT NULL,
  `bigposter2` varchar(100) NOT NULL,
  `bigposter3` varchar(100) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `movie_id` (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_screen`
--

CREATE TABLE IF NOT EXISTS `mv_screen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `theatre_id` int(15) NOT NULL,
  `screentypeid` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `login_id` (`login_id`),
  KEY `login_id_2` (`login_id`,`theatre_id`,`screentypeid`),
  KEY `theatre_id` (`theatre_id`),
  KEY `screentypeid` (`screentypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_screencategory`
--

CREATE TABLE IF NOT EXISTS `mv_screencategory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `screenname` varchar(100) NOT NULL,
  `seats` int(10) NOT NULL,
  `sctype` varchar(200) NOT NULL,
  `amount` int(30) NOT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `login_id` (`login_id`),
  KEY `login_id_2` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mv_screencategory`
--

INSERT INTO `mv_screencategory` (`id`, `login_id`, `screenname`, `seats`, `sctype`, `amount`, `status`, `created_at`) VALUES
(1, 37, 'big', 60, 'AC', 70, 0, '2016-04-25 16:17:38'),
(2, 37, 'small', 30, 'AC', 90, 0, '2016-04-25 16:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `mv_setmovie`
--

CREATE TABLE IF NOT EXISTS `mv_setmovie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `login_id` int(30) NOT NULL,
  `theatre_id` int(15) NOT NULL,
  `movie_id` int(15) NOT NULL,
  `show_id` int(11) NOT NULL,
  `screen_id` varchar(15) NOT NULL,
  `poster_id` int(30) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login_id` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_show`
--

CREATE TABLE IF NOT EXISTS `mv_show` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `theatre_id` int(10) NOT NULL,
  `showtypeid` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `login_id` (`login_id`),
  KEY `theatre_id` (`theatre_id`),
  KEY `showtypeid` (`showtypeid`),
  KEY `showtypeid_2` (`showtypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_showcategory`
--

CREATE TABLE IF NOT EXISTS `mv_showcategory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `showname` varchar(100) NOT NULL,
  `timefrom` varchar(50) NOT NULL,
  `timeto` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `login_id` (`login_id`),
  KEY `login_id_2` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mv_showcategory`
--

INSERT INTO `mv_showcategory` (`id`, `login_id`, `showname`, `timefrom`, `timeto`, `status`, `created_at`) VALUES
(1, 37, 'night', '10:00 PM', '12:00 AM', 0, '2016-04-25 16:17:11'),
(2, 37, 'morn', '11:30 AM', '2:30 PM', 0, '2016-04-25 16:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `mv_state`
--

CREATE TABLE IF NOT EXISTS `mv_state` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) NOT NULL,
  `state_name` varchar(15) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mv_state`
--

INSERT INTO `mv_state` (`id`, `country_id`, `state_name`, `created_at`) VALUES
(1, 8, 'kerala', 0);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`,`login_id`),
  KEY `login_id` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_theatreregistrations`
--

CREATE TABLE IF NOT EXISTS `mv_theatreregistrations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(10) NOT NULL,
  `profilepics` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` decimal(30,0) NOT NULL,
  `about` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login_id` (`login_id`),
  KEY `login_id_2` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Table structure for table `mv_userregistrations`
--

CREATE TABLE IF NOT EXISTS `mv_userregistrations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `gender` int(2) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login_id` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mv_booking`
--
ALTER TABLE `mv_booking`
  ADD CONSTRAINT `mv_booking_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `mv_movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mv_booking_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_city`
--
ALTER TABLE `mv_city`
  ADD CONSTRAINT `mv_city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `mv_state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_movies`
--
ALTER TABLE `mv_movies`
  ADD CONSTRAINT `mv_movies_ibfk_1` FOREIGN KEY (`theatre_id`) REFERENCES `mv_theatre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_poster`
--
ALTER TABLE `mv_poster`
  ADD CONSTRAINT `mv_poster_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `mv_movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_screen`
--
ALTER TABLE `mv_screen`
  ADD CONSTRAINT `mv_screen_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mv_screen_ibfk_2` FOREIGN KEY (`screentypeid`) REFERENCES `mv_screencategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mv_screen_ibfk_3` FOREIGN KEY (`theatre_id`) REFERENCES `mv_theatre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_screencategory`
--
ALTER TABLE `mv_screencategory`
  ADD CONSTRAINT `mv_screencategory_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_setmovie`
--
ALTER TABLE `mv_setmovie`
  ADD CONSTRAINT `mv_setmovie_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_show`
--
ALTER TABLE `mv_show`
  ADD CONSTRAINT `mv_show_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mv_show_ibfk_2` FOREIGN KEY (`theatre_id`) REFERENCES `mv_theatre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mv_show_ibfk_3` FOREIGN KEY (`showtypeid`) REFERENCES `mv_showcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_showcategory`
--
ALTER TABLE `mv_showcategory`
  ADD CONSTRAINT `mv_showcategory_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_state`
--
ALTER TABLE `mv_state`
  ADD CONSTRAINT `mv_state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `mv_country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_theatre`
--
ALTER TABLE `mv_theatre`
  ADD CONSTRAINT `mv_theatre_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `mv_city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mv_theatre_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mv_userregistrations`
--
ALTER TABLE `mv_userregistrations`
  ADD CONSTRAINT `mv_userregistrations_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `mv_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
