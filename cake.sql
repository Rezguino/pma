-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 11:27 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake`
--
CREATE DATABASE IF NOT EXISTS `cake` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cake`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `sender`, `receiver`, `created`) VALUES
(1, 'this a message test', 'admin', 'admin', '2014-04-23 09:53:43'),
(2, 'this a second test', 'admin', 'admin', '2014-04-23 10:02:55'),
(3, 'thirst message', 'admin', 'rezgui', '2014-04-26 15:05:49'),
(4, '4th', 'admin', 'admin', '2014-04-26 15:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `user_id` int(11) NOT NULL,
  `notifications` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`user_id`, `notifications`) VALUES
(33, 'test'),
(35, 'test2'),
(39, 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-03-15 12:43:46', '2014-03-30 19:08:53', NULL),
(4, 'test', 'azerareza', '2014-03-15 13:27:49', '2014-03-15 13:27:49', NULL),
(5, 'deded', 'azert', '2014-03-16 22:51:40', '2014-03-16 22:51:40', 1),
(6, 'rare', 'rrrrrrrrrrrrrrrrrrrrr', '2014-03-30 19:12:40', '2014-03-30 19:12:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenu` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `estimation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datefin` text COLLATE utf8_unicode_ci,
  `group_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `chef` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `title`, `contenu`, `created`, `estimation`, `datefin`, `group_id`, `chef`) VALUES
(1, 'The title2d', 'This is the post body.', '2014-03-21 12:31:25', '6mois', NULL, '0', '0'),
(2, 'aze', 'aze', '2014-03-24 14:33:22', '87year', NULL, '0', '0'),
(14, NULL, NULL, '2014-03-24 14:55:56', NULL, NULL, '0', '0'),
(15, NULL, NULL, '2014-03-24 14:56:01', NULL, NULL, '0', '0'),
(16, NULL, NULL, '2014-03-24 14:57:06', NULL, NULL, '0', '0'),
(17, 'test4', 'this a a ahiezah', '2014-03-30 18:33:04', '1mounth', NULL, '0', '0'),
(18, 'projet3', 'c''''est un projet interessant', '2014-03-31 17:31:54', '1moutn', NULL, '0', '0'),
(19, 'projet4', 'zaeaepohoa maoeazhemo h', '2014-03-31 17:33:46', '5', NULL, '0', '0'),
(20, 'projet45', 'aze5454', '2014-03-31 17:41:13', '45', NULL, '0', '0'),
(21, 'The titleee', 'aezr', '2014-03-31 17:43:57', 'ff', NULL, '0', '0'),
(22, 'rre', 'rer', '2014-03-31 17:46:37', '45', NULL, '0', '0'),
(23, 'erre', 'rre', '2014-03-31 17:47:24', '455', NULL, '', '0'),
(24, 'mizaea', 'jazjeij', '2014-03-31 17:48:05', 'aze', NULL, '', '0'),
(25, 'aze', 'aze4546', '2014-03-31 17:48:58', '454', NULL, 'test', '0'),
(26, 'ze', 'ee', '2014-03-31 18:00:00', 'g', NULL, '', '0'),
(27, 'dd', 'dd', '2014-03-31 18:00:59', '', NULL, '', '0'),
(28, 'r', 'gg', '2014-03-31 18:02:02', 'g', NULL, '', '0'),
(29, 'The title', 'aze', '2014-03-31 18:12:20', 'f', NULL, '', '0'),
(30, 'mohaze', 'zaejjjazj', '2014-03-31 18:18:14', 'ezaeza', NULL, 'test', '0'),
(31, 'web', 'siazea', '2014-03-31 18:20:17', '85', NULL, 'test', '0'),
(32, 'whatever', 'moahazee', '2014-04-01 02:58:02', '5a', NULL, 'client', '0'),
(33, 'aze_project', 'aze potentia pro\r\n', '2014-04-01 03:14:20', '6moutn', NULL, '', '0'),
(35, 'group1_projet', 'test de projet pour group 1(admin)', '2014-04-05 00:24:39', '6moutn', NULL, 'group2', '10'),
(36, 'group1_projet2', 'group1_projet2 test admin compte', '2014-04-05 00:39:35', '52', NULL, 'group2', '0'),
(37, 'aze_projet1', 'aze_projet1 test compte', '2014-04-05 00:40:53', '45', NULL, 'potentia', '0'),
(38, 'aze_projet1', 'aze_projet1 test compte', '2014-04-05 00:41:06', '45', NULL, 'potentia', '0'),
(39, 'aze_projet3', 'aze_projet1 33ae', '2014-04-05 00:41:20', '4mounth', NULL, 'potentia', '0'),
(43, 'testing chef', 'testing chef fields', '2014-04-28 17:29:14', '5', '0000-00-00 00:00:00', 'group2', '33'),
(44, 'testing 3', 'test chief ...', '2014-04-28 17:30:37', '8 years', '0000-00-00 00:00:00', 'group2', '33'),
(45, 'Chef_50', '50 id', '2014-04-28 18:01:05', '45', NULL, 'group2', '50'),
(46, 'test 5', 'test5', '2014-04-29 17:11:11', '8years', NULL, 'group2', '1'),
(48, 'admin_projectz', 'admin project for test only', '2014-04-29 17:59:52', '45 days', '0000-00-00 00:00:00', 'group2', '33'),
(49, 'rezgui_project', 'test', '2014-04-30 02:22:28', '8', NULL, 'client', '1'),
(50, 'test', 'aerazrearz ezrearze', '2014-04-30 17:55:19', '85', '0000-00-00 00:00:00', 'client', '1'),
(51, 'Projet Client', 'C''est un site web pour le client x ', '2014-05-01 17:05:01', '45jours', '0000-00-00 00:00:00', 'client', '39'),
(52, 'test date', 'testing data champ', '2014-05-01 17:26:51', '52mounth', '20 May, 2014', 'group2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `role`, `created`, `modified`, `active`) VALUES
(1, 'rezgui', '3bb38d49737129b348301e82762cb2580b9bd486', 'rezgui', 'admin', '2014-03-16 22:51:08', '2014-03-16 22:51:08', 1),
(2, 'rezgui', '3bb38d49737129b348301e82762cb2580b9bd486', '', 'author', '2014-03-16 22:51:20', '2014-03-16 22:51:20', 0),
(3, 'rezgui2', '3bb38d49737129b348301e82762cb2580b9bd486', '', 'admin', '2014-03-16 22:53:37', '2014-03-16 22:53:37', 0),
(5, 'user', '32a5932861c56125e556a5d0a0a6fb1b986242d2', 'user', 'user', '2014-03-26 16:47:14', '2014-03-26 16:47:14', 1),
(11, 'user', '9556c8bd38eb67e123c4a630fcc0052b278d120d', '', 'author', '2014-03-30 19:11:57', '2014-03-30 19:11:57', 0),
(33, 'admin', '32a5932861c56125e556a5d0a0a6fb1b986242d2', 'group2', 'admin', '2014-03-31 01:14:41', '2014-03-31 01:14:41', 0),
(35, 'aze', 'd593e2c70e84789573494c9ab4d7cf9d69cd7449', 'potentia', NULL, '2014-03-31 01:15:27', '2014-03-31 01:15:27', 0),
(36, 'azer', 'azer', 'azer', NULL, '2014-03-31 01:23:04', '2014-03-31 01:23:04', 0),
(37, 'aze', 'aze', 'potentia', NULL, '2014-03-31 01:23:51', '2014-03-31 01:23:51', 0),
(38, 'med', '123', 'whatever', NULL, '2014-03-31 16:54:49', '2014-03-31 16:54:49', 0),
(39, 'client', '5753d8544b59a190b59a4e125b6c75496b51cbad', 'client', 'simple', '2014-03-31 17:04:50', '2014-03-31 17:04:50', 0),
(41, 'client2', '5753d8544b59a190b59a4e125b6c75496b51cbad', 'client group 2', NULL, '2014-04-14 04:49:14', '2014-04-14 04:49:14', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
