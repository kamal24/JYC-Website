-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2014 at 10:14 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `id` bigint(5) unsigned NOT NULL AUTO_INCREMENT,
  `clubname` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name1` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name2` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name3` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name4` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name5` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `bgimage` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `clubname`, `image_name1`, `image_name2`, `image_name3`, `image_name4`, `image_name5`, `bgimage`, `description`) VALUES
(4, 'Event Management Club', '', '', '', '', '', 'event-club.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `comm`
--

CREATE TABLE IF NOT EXISTS `comm` (
  `id` bigint(5) unsigned NOT NULL AUTO_INCREMENT,
  `clubname` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name1` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name2` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name3` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name4` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image_name5` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `bgimage` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `logo` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `comm`
--

INSERT INTO `comm` (`id`, `clubname`, `image_name1`, `image_name2`, `image_name3`, `image_name4`, `image_name5`, `bgimage`, `logo`, `description`) VALUES
(10, 'Disciplinary Committee', '', '', '', '', '', 'logo.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer science`
--

CREATE TABLE IF NOT EXISTS `computer science` (
  `discussionID` int(100) NOT NULL AUTO_INCREMENT,
  `discussion_title` varchar(100) NOT NULL,
  `discussion_content` text,
  `relatedto` varchar(250) NOT NULL,
  `discussion_date` varchar(15) NOT NULL,
  `isactive` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`discussionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cultural`
--

CREATE TABLE IF NOT EXISTS `cultural` (
  `name` varchar(30) DEFAULT NULL,
  `post` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mob_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cultural`
--

INSERT INTO `cultural` (`name`, `post`, `email`, `mob_no`) VALUES
('', 'co-ordinator', '', ''),
('', 'vice-co-ordinator', '', ''),
('kamal', 'co-ordinator', 'kmlgrg2425@gmail.com', ''),
('', 'vice-co-ordinator', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ece`
--

CREATE TABLE IF NOT EXISTS `ece` (
  `discussionID` int(100) NOT NULL AUTO_INCREMENT,
  `discussion_title` varchar(100) NOT NULL,
  `discussion_content` text,
  `relatedto` varchar(250) NOT NULL,
  `discussion_date` varchar(15) NOT NULL,
  `isactive` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`discussionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ece`
--

INSERT INTO `ece` (`discussionID`, `discussion_title`, `discussion_content`, `relatedto`, `discussion_date`, `isactive`) VALUES
(1, 'jhkj', 'kjghjg', 'jkhjjg', '21/02/2014 00:2', 1),
(2, 'kjhkhkj', 'jhghjghvhjgvhjvv', 'hjghjgq', '21/02/2014 00:3', 1),
(3, 'jghjghj', 'hghjghjhjg', 'hghjg', '21/02/2014 00:3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`) VALUES
(2, 'Diksha 2013');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `groupname` varchar(150) NOT NULL,
  `groupimage` varchar(250) DEFAULT NULL,
  `groupdesc` varchar(400) NOT NULL,
  PRIMARY KEY (`groupname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`groupname`, `groupimage`, `groupdesc`) VALUES
('computer science', 'slide_2.jpg', 'jhkjghjgjhgh'),
('ece', 'slide_3.jpg', 'hjghjghjghjghjghjjg');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE IF NOT EXISTS `html` (
  `discussionID` int(100) NOT NULL AUTO_INCREMENT,
  `discussion_content` text COLLATE latin1_general_ci,
  `isactive` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`discussionID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `imagerecord`
--

CREATE TABLE IF NOT EXISTS `imagerecord` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(150) NOT NULL,
  `event` varchar(150) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `dateofupload` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `imagerecord`
--

INSERT INTO `imagerecord` (`id`, `image_name`, `event`, `description`, `dateofupload`) VALUES
(2, 'diksha-nati-1.jpg', 'Diksha 2013', '', '2014-03-01'),
(3, 'diksha-nati-2.jpg', 'Diksha 2013', '', '2014-03-01'),
(4, 'diksha-nati-3.jpg', 'Diksha 2013', '', '2014-03-01'),
(5, 'diksha-nati-4.jpg', 'Diksha 2013', '', '2014-03-01'),
(6, 'diksha-nati-5.jpg', 'Diksha 2013', '', '2014-03-01'),
(7, 'diksha-nati-6.jpg', 'Diksha 2013', '', '2014-03-01'),
(8, 'diksha-nati-7.jpg', 'Diksha 2013', '', '2014-03-01'),
(9, 'diksha-nati-8.jpg', 'Diksha 2013', '', '2014-03-01'),
(10, 'diksha-nati-9.jpg', 'Diksha 2013', '', '2014-03-01'),
(11, 'diksha-nati-10.jpg', 'Diksha 2013', '', '2014-03-01'),
(12, 'diksha-nati-11.jpg', 'Diksha 2013', '', '2014-03-01'),
(13, 'diksha-nati-12.jpg', 'Diksha 2013', '', '2014-03-01'),
(14, 'diksha-nati-13.jpg', 'Diksha 2013', '', '2014-03-01'),
(15, 'diksha-nati-14.jpg', 'Diksha 2013', '', '2014-03-01'),
(16, 'diksha-nati-15.jpg', 'Diksha 2013', '', '2014-03-01'),
(17, 'diksha-nati-16.jpg', 'Diksha 2013', '', '2014-03-01'),
(18, 'diksha-nati-17.jpg', 'Diksha 2013', '', '2014-03-01'),
(19, 'diksha-nati-19.jpg', 'Diksha 2013', '', '2014-03-01'),
(20, 'diksha-nati-21.jpg', 'Diksha 2013', '', '2014-03-01'),
(21, 'diksha-nati-22.jpg', 'Diksha 2013', '', '2014-03-01'),
(22, 'diksha-nati-23.jpg', 'Diksha 2013', '', '2014-03-01'),
(23, 'diksha-nati-24.jpg', 'Diksha 2013', '', '2014-03-01'),
(24, 'diksha-nati-25.jpg', 'Diksha 2013', '', '2014-03-01'),
(25, 'diksha-nati-26.jpg', 'Diksha 2013', '', '2014-03-01'),
(26, 'diksha-nati-27.jpg', 'Diksha 2013', '', '2014-03-01'),
(27, 'diksha-winner-14.jpg', 'Diksha 2013', '', '2014-03-01'),
(28, 'diksha-winner-18.jpg', 'Diksha 2013', '', '2014-03-01'),
(29, 'vvv.jpg', 'Diksha 2013', '', '2014-03-01'),
(30, 'python.jpg', 'Diksha 2013', '', '2014-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `mainmember`
--

CREATE TABLE IF NOT EXISTS `mainmember` (
  `id` bigint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `mob_no` varchar(15) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `aboutme` mediumtext,
  `fblink` varchar(500) DEFAULT NULL,
  `linkdenlink` varchar(500) DEFAULT NULL,
  `gpluslink` varchar(500) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL,
  `clubname` varchar(200) DEFAULT NULL,
  `imageid` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mainmember`
--

INSERT INTO `mainmember` (`id`, `name`, `mob_no`, `email_id`, `aboutme`, `fblink`, `linkdenlink`, `gpluslink`, `post`, `clubname`, `imageid`) VALUES
(1, 'Meher ', '9805520439', 'meher.sethi.1893@gmail.com', 'In just three words I have learned everything about life, “life goes on”. I am a person who follows my heart and intuition because it’s better to write for yourself and have no public, than to write for the public and have no self. I am a very optimistic person and believe that life is a succession of lessons which must be lived to be understood. Being an active member of JYC environment club for the past three years I have come to believe that there is nothing nobler than working for the mother earth. I believe in attaining perfection in whatever work I do and the key ingredients to achieve anything worthwhile are hard work, creativity and common sense.', '', '', '', 'coordinator', 'Environment Club', 'meher.jpg'),
(2, 'Shivam', '+919816162282', '', 'Hard work-determination-dedication is my mantra to achieve great success. With my passion towards work, my team has always been triumphant. Leadership skills help me to manage and guide a club, which in our words, is the "backbone of JYC".', '', '', '', 'coordinator', 'Event Management Club', 'shivam.jpg'),
(4, 'Aashna', '+919817663779', 'jainyz93@gmail.com', 'A dream doesn''t become reality through magic;it takes sweat, determination and hardwork. My mantra being success has no limits. With hard work, loyalty and dedication I’ve reached great levels of success unmatched by any. My adherence and devotion prove that there is no subsitute for hard work.', '', '', '', 'coordinator', 'Event Management Club', 'aashna1.jpg'),
(5, '', '', '', '', '', '', '', 'coordinator', '', 'sonalee.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` bigint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `name`, `link`) VALUES
(7, 'murios 8 coming at 15 febmuriid', 'murious.in');

-- --------------------------------------------------------

--
-- Table structure for table `sdf`
--

CREATE TABLE IF NOT EXISTS `sdf` (
  `d` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `fd` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `df` varchar(5) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `suggestion` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`name`, `email`, `suggestion`) VALUES
('kamal', 'kmlgrg2425@gmail.com', 'jhkjhfkjshjkfhskjfhjkfhjhbfjhjhjbjg'),
('kamal', 'kmlgrg2425@gmail.com', 'khjkhfkjhfkjhfkjhbkjhbjvjkbjkhnbkjhdfbk'),
('kamal', 'kmlgrg24@gmail.com', 'jhfkjhfkjhfkjshfjkhfvjkhbfkjhbjhbnjb,njskk');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE IF NOT EXISTS `try` (
  `discussionID` int(100) NOT NULL AUTO_INCREMENT,
  `discussion_content` text COLLATE latin1_general_ci,
  `isactive` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`discussionID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('kamal', 'c4ca4238a0b923820dcc509a6f7584');

-- --------------------------------------------------------

--
-- Table structure for table `videorecord`
--

CREATE TABLE IF NOT EXISTS `videorecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `description` varchar(150) DEFAULT NULL,
  `link` varchar(250) NOT NULL,
  `event` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `videorecord`
--

INSERT INTO `videorecord` (`id`, `description`, `link`, `event`) VALUES
(9, 'this is murious 8 teaser', 'https://www.youtube.com/embed/2hiM51Zn7A4', 'murious');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
