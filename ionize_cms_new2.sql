-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2014 at 09:32 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ionize_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_key`
--

CREATE TABLE IF NOT EXISTS `api_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `api_log`
--

CREATE TABLE IF NOT EXISTS `api_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `date_log` datetime DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `authorized` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(55) DEFAULT NULL,
  `updater` varchar(55) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_off` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `logical_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `indexed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id_category` int(11) unsigned DEFAULT NULL,
  `comment_allow` char(1) DEFAULT '0',
  `comment_autovalid` char(1) DEFAULT '0',
  `comment_expire` datetime DEFAULT NULL,
  `flag` smallint(1) DEFAULT '0',
  `has_url` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `priority` smallint(1) unsigned NOT NULL DEFAULT '5',
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `name`, `author`, `updater`, `created`, `publish_on`, `publish_off`, `updated`, `logical_date`, `indexed`, `id_category`, `comment_allow`, `comment_autovalid`, `comment_expire`, `flag`, `has_url`, `priority`) VALUES
(1, '404', 'demo', 'demo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-10 09:18:48', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(4, 'welcome-to-ionize', 'demo', 'demo', '2012-11-17 12:48:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-20 17:05:20', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(5, 'article-1', 'demo', 'michelange', '2012-11-17 13:58:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-04-06 09:33:24', '0000-00-00 00:00:00', 1, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(6, 'article-2', 'demo', 'demo', '2012-11-17 13:58:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 15:47:57', '0000-00-00 00:00:00', 1, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(7, 'article-3', 'demo', 'demo', '2012-11-17 13:59:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 15:52:39', '0000-00-00 00:00:00', 1, NULL, '1', '0', '0000-00-00 00:00:00', 0, 1, 5),
(8, 'article-4', 'demo', 'demo', '2012-11-17 13:59:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 15:52:46', '0000-00-00 00:00:00', 1, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(9, 'article-5', 'demo', 'demo', '2012-11-17 14:10:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 15:52:52', '0000-00-00 00:00:00', 1, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(10, 'article-6', 'demo', 'demo', '2012-11-17 14:17:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 15:52:58', '0000-00-00 00:00:00', 1, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(11, 'easy-edition', 'demo', 'demo', '2012-11-21 10:44:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-21 10:44:50', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(12, 'multilingual', 'demo', 'demo', '2012-11-21 10:46:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-21 10:46:28', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(13, 'userfriendly', 'demo', 'demo', '2012-11-21 10:46:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-21 10:46:50', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(14, 'template-system', 'demo', 'demo', '2012-11-21 10:47:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-06 11:20:03', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(15, 'about-us', 'demo', 'demo', '2012-11-21 11:42:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-27 01:15:33', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(16, 'footer-resources', 'demo', 'demo', '2012-11-21 11:52:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 16:33:05', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(17, 'service-1', 'demo', 'demo', '2012-12-06 14:34:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-27 01:15:00', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(18, 'service-2', 'demo', 'demo', '2012-12-06 14:38:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 17:00:37', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(19, 'service-3', 'demo', 'demo', '2012-12-06 14:38:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 17:00:47', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(20, 'service-4', 'demo', 'demo', '2012-12-06 14:39:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 17:00:54', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(24, 'contact-informations', 'demo', 'michelange', '2012-12-07 10:01:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-04-05 12:20:46', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(26, 'our-location', 'demo', 'demo', '2012-12-07 10:07:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 20:04:28', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(27, 'whats-ionize', 'demo', 'demo', '2012-12-21 16:27:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 16:27:54', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(28, 'can-i-help', 'demo', 'demo', '2012-12-21 16:30:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 16:30:10', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(29, 'send-us-a-message', 'demo', 'demo', '2012-12-21 17:04:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 17:04:43', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(30, 'not-logged-in', 'demo', 'demo', '2012-12-22 10:54:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-22 10:54:43', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(31, 'hello', 'demo', 'demo', '2012-12-22 11:15:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-22 11:42:04', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(32, '401', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, '0', '0', NULL, 0, 1, 5),
(33, '403', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, '0', '0', NULL, 0, 1, 5),
(34, 'article-7', 'admin', NULL, '2014-10-14 02:16:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-14 02:16:05', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(35, 'set', 'admin', NULL, '2014-10-14 02:29:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-14 02:29:50', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(36, 'test', 'admin', 'admin', '2014-10-14 07:48:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-14 07:48:31', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(37, 'search-from-article', 'admin', NULL, '2014-10-15 02:16:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-15 02:16:56', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(38, 'search', 'admin', NULL, '2014-10-15 05:36:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-15 05:36:10', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(39, 'search-1', 'admin', NULL, '2014-10-15 05:36:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-15 05:36:22', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(40, 'search-2', 'admin', NULL, '2014-10-15 05:36:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-15 05:36:48', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(41, 'tester', 'admin', 'admin', '2014-10-17 03:41:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-17 04:05:23', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(42, 'ucing', 'admin', NULL, '2014-10-17 06:32:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-17 06:32:40', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(43, 'tester-1', 'admin', 'admin', '2014-10-17 08:24:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-17 08:24:50', '0000-00-00 00:00:00', 0, NULL, '0', '0', '0000-00-00 00:00:00', 0, 1, 5),
(44, 'tester-2', 'admin', 'admin', '2014-10-17 09:19:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-24 04:13:02', '0000-00-00 00:00:00', 0, NULL, '1', '0', '0000-00-00 00:00:00', 0, 1, 5),
(45, 'testtt', 'admin', 'admin', '2014-10-20 04:48:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-24 04:13:12', '0000-00-00 00:00:00', 0, NULL, '1', '0', '0000-00-00 00:00:00', 0, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE IF NOT EXISTS `article_category` (
  `id_article` int(11) unsigned NOT NULL,
  `id_category` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id_article`, `id_category`) VALUES
(4, 1),
(5, 1),
(5, 2),
(6, 2),
(41, 1),
(42, 1),
(43, 1),
(44, 2),
(45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_comment`
--

CREATE TABLE IF NOT EXISTS `article_comment` (
  `id_article_comment` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_article` int(11) unsigned NOT NULL DEFAULT '0',
  `author` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `content` text,
  `ip` varchar(40) DEFAULT NULL,
  `status` tinyint(3) unsigned DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `admin` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'If comment comes from admin, set to 1',
  PRIMARY KEY (`id_article_comment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `article_comment`
--

INSERT INTO `article_comment` (`id_article_comment`, `id_article`, `author`, `email`, `site`, `content`, `ip`, `status`, `created`, `updated`, `admin`) VALUES
(1, 44, 'zon', 'zon@xon.com', 'tester', 'dasdasdasdasdasd', '', 1, '2014-10-16 00:00:00', '0000-00-00 00:00:00', 0),
(2, 44, 'zon', 'zon@zon.com', 'tester', 'Test', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 44, 'Test', 'stest@sgsg.com', '0', 'asdfasfasfasf', '127.0.0.1', 0, '2014-10-20 04:10:01', '0000-00-00 00:00:00', 0),
(4, 44, 'ozone', 'zozo@mx.com', '0', 'zozone', '127.0.0.1', 1, '2014-10-20 04:34:21', '0000-00-00 00:00:00', 0),
(5, 44, 'Test', 'te@ds.com', '0', 'ini test komentat art', '127.0.0.1', 0, '2014-10-24 06:04:27', '0000-00-00 00:00:00', 0),
(6, 44, 'Test', 'te@ds.com', '0', 'ini test komentat art', '127.0.0.1', 0, '2014-10-24 06:05:15', '0000-00-00 00:00:00', 0),
(7, 44, 'Test', 'te@ds.com', '0', 'ini test komentat art', '127.0.0.1', 0, '2014-10-24 06:05:20', '0000-00-00 00:00:00', 0),
(8, 45, 'Test', 'te@ds.com', '0', 'ini test komentat art', '127.0.0.1', 1, '2014-10-24 06:05:48', '0000-00-00 00:00:00', 0),
(9, 44, 'Test', 'te@ds.com', '0', 'ini test komentat art', '127.0.0.1', 1, '2014-10-24 06:05:51', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `article_lang`
--

CREATE TABLE IF NOT EXISTS `article_lang` (
  `id_article` int(11) unsigned NOT NULL DEFAULT '0',
  `lang` varchar(8) NOT NULL DEFAULT '',
  `url` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `content` longtext,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `online` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_article`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_lang`
--

INSERT INTO `article_lang` (`id_article`, `lang`, `url`, `title`, `subtitle`, `meta_title`, `content`, `meta_keywords`, `meta_description`, `online`) VALUES
(1, 'en', '404', 'Can''t find requested page', '', '', '<p>Maecenas massa. varius non accumsan nec, commodo vitae felis! Quisque luctus, lorem vel elementum aliquam, lorem nulla dignissim velit, id placerat libero ipsum eget sapien. Cras erat risus, pellentesque ut auctor quis, fringilla vel elit. Cras nisl dolor, vulputate eget molestie ut, sollicitudin non dui.</p><h4>Reasons</h4><ul><li>Lorem ipsum dolor sit amet</li><li>Consectetur adipiscing elit</li><li>Nulla volutpat aliquam velit<ul><li>Phasellus iaculis neque</li><li>Purus sodales ultricies</li><li>Vestibulum laoreet porttitor sem</li><li>Ac tristique libero volutpat at</li></ul></li><li>Faucibus porta lacus fringilla vel</li></ul>', '', '', 1),
(4, 'en', 'the-power-of-php', 'The power of PHP', '', '', '<p>The Ionize CMS uses CodeIgniter, a powerful and lightweight PHP framework. For CodeIgniter developpers, starting developping on Ionize will be really easy as building a CI application !</p>', '', '', 1),
(5, 'en', 'article-1', 'One blog post', '', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>\n<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>\n<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam. est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>\n<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>', '', '', 1),
(6, 'en', 'article-2', 'Another blog post', '', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam. est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p><p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>', '', '', 1),
(7, 'en', 'article-3', 'We got something...', '', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam. est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p><p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>', '', '', 1),
(8, 'en', 'article-4', 'Say it differently', '', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam. est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p><p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>', '', '', 1),
(9, 'en', 'article-5', '10 incredible items !', '', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam. est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p><p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>', '', '', 1),
(10, 'en', 'article-6', 'Send mail to your friends !', '', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam. est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p><p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>', '', '', 1),
(11, 'en', 'easy-edition', 'Easy edition', '', '', '<p>Copy / paste content from any word processing software. Inline links are automatically converted to hyperlinks. Emails are safely encoded to avoid spam.</p>', NULL, NULL, 1),
(12, 'en', 'multilingual', 'Multilingual', '', '', '<p>You can create as much languages as you need for your website. Every content can be translated : posts, static elements in templates, media data, etc.</p>', NULL, NULL, 1),
(13, 'en', 'userfriendly', 'Userfriendly', '', '', '<p>Your website structure is logical. Managing elements such as pages, articles or medias is easily done by drag''n''drop!</p>', NULL, NULL, 1),
(14, 'en', 'template-system', 'Template System', '', '', '<p>Each page or article can have a dedicated template, templates can be embeded in each others. The tag language of Ionize is simple and fully documented.</p>', '', '', 1),
(15, 'en', 'about-us-1', 'About Us', '', '', '<p>Duis diam tortor, suscipit sed varius id, dictum interdum tortor. Vivamus vel sapien vitae metus aliquet vehicula. Cras nec odio a dui sagittis semper? Nullam non luctus nisl. Cras ante ante, elementum a porta sit amet, aliquet in felis. Cras dictum metus non felis fermentum in mattis nisl dignissim. Suspendisse suscipit diam id ipsum elementum sed commodo massa ullamcorper. Curabitur tincidunt enim at ipsum aliquam a sagittis eros vulputate. Etiam elementum gravida ipsum eget congue. Pellentesque tempus facilisis odio, at porta nibh pulvinar vel.</p><p>Donec rutrum lectus eget enim aliquet in sollicitudin elit vestibulum. Sed iaculis mi quis ipsum congue elementum. Proin turpis urna, rutrum id vehicula et, cursus vel purus. Proin tincidunt, odio sed congue ultricies. Risus erat rhoncus leo, in fringilla elit libero vel metus. Sed adipiscing, orci vitae iaculis laoreet, ante nibh facilisis sem, ac pulvinar nunc risus sit amet nisl.</p>', '', '', 1),
(16, 'en', 'footer-resources', 'Online resources', '', '', '<p><strong>Community</strong> : Ionize''s forum<br /><strong>Project hosting</strong> : Ionize on github</p><p><strong>Last version</strong> : Download Ionize</p><p><strong>Contact</strong> : team@ionizecms.com</p>', '', '', 1),
(17, 'en', 'some-of-our-services', 'What we do for you', '', '', '<p>Suspendisse nec erat lacus? Morbi pharetra elit ac nibh ornare a vulputate urna dictum?</p><p>Vestibulum eu justo sit amet nulla adipiscing imperdiet. Nullam venenatis tortor nec mauris viverra at rutrum lacus ultricies. Sed condimentum aliquet congue! Aenean sed justo sapien.</p><p>Fusce ut turpis mauris. Phasellus ac felis arcu, semper rhoncus nisi? Quisque tortor nisl; convallis et varius vel, ullamcorper sit amet neque. Sed semper aliquam rutrum.</p><p>Phasellus ac nisl et quam laoreet interdum ultrices vel dui. Mauris et urna sed tortor molestie blandit quis vel sapien. Cras tempus sollicitudin magna eu faucibus. Nulla dapibus pharetra dapibus.</p>', '', '', 1),
(18, 'en', 'service-1', 'Service 1', '', '', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Nulla volutpat aliquam velit</p><p>Phasellus iaculis neque purus sodales ultricies vestibulum laoreet porttitor sem ac tristique libero volutpat at</p><p>Faucibus porta lacus fringilla vel.</p>', '', '', 1),
(19, 'en', 'service-2', 'Service 2', '', '', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Nulla volutpat aliquam velit</p><p>Phasellus iaculis neque purus sodales ultricies vestibulum laoreet porttitor sem ac tristique libero volutpat at</p><p>Faucibus porta lacus fringilla vel.</p>', '', '', 1),
(20, 'en', 'service-3', 'Service 3', '', '', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Nulla volutpat aliquam velit</p><p>Phasellus iaculis neque purus sodales ultricies vestibulum laoreet porttitor sem ac tristique libero volutpat at</p><p>Faucibus porta lacus fringilla vel.</p>', '', '', 1),
(24, 'en', 'contact-informations', 'Contact Informations', '', '', '<p><strong>Ionize CMS</strong><br /> This is our street<br />AABBCC In This City</p>\n<p><strong>Tel</strong> : +33 012345678<strong><br />Email : </strong>team@ionizecms.com</p>', '', '', 1),
(26, 'en', 'our-location', 'Our location', '', '', '<p><iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;aq=&amp;sll=48.876161,2.377124&amp;sspn=0.007296,0.018175&amp;gl=fr&amp;g=villa+Marcel+Lods&amp;ie=UTF8&amp;hq=&amp;ll=48.876161,2.377124&amp;spn=0.001824,0.004544&amp;t=m&amp;z=16&amp;output=embed"></iframe></p>', '', '', 1),
(27, 'en', 'whats-ionize', 'What''s Ionize ?', '', '', '<p>Ionize is an Open Source content management system created by webdesigners for webdesigners.</p><p>Originally <a title="Ionize''s development agence internet" href="http://www.ionizecms.com/en/about">created by Partikule and Toopixel</a> for their clients, Ionize is today an OpenSource project, so everybody can build easy to maintain websites.</p>', NULL, NULL, 1),
(28, 'en', 'can-i-help', 'Can I help ?', '', '', '<p>Because talent is nothing without involvement, we are looking for motivated coders and webdesigners to join the project team.</p><p>You have a module idea ?<br />You want to make some improvement ?<br />You wants to get involved in a promising CMS ?</p>', '', '', 1),
(29, 'en', 'send-us-a-message', 'Send us a message !', '', '', '', NULL, NULL, 1),
(30, 'en', 'not-logged-in', 'Not logged in', '', '', '', NULL, NULL, 1),
(31, 'en', 'hello', 'Hello', '', '', '<p>Welcome to your account management page.</p>', '', '', 1),
(32, 'en', '401', '401', 'Please login', NULL, '<p>Please login to see this content.</p>', NULL, NULL, 1),
(33, 'en', '403', '403', 'Forbidden', NULL, '<p>This content is forbidden.</p>', NULL, NULL, 1),
(34, 'en', 'article-1', 'Test', '', '', '<p>Testet</p>', NULL, NULL, 1),
(35, 'en', 'set', 'set', '', '', '<p>asadasdasd</p>', NULL, NULL, 1),
(36, 'en', 'test', 'Test', '', '', '', '', '', 1),
(37, 'en', 'search-from-article', 'Search_from_article', '', '', '', NULL, NULL, 1),
(38, 'en', 'search', 'search', '', '', '', NULL, NULL, 1),
(39, 'en', 'search', 'search', '', '', '', NULL, NULL, 1),
(40, 'en', 'search', 'search', '', '', '', NULL, NULL, 1),
(41, 'en', 'tester', 'Tester', '', '', '<p>Tester only</p>', '', '', 1),
(42, 'en', 'ucing', 'ucing', '', '', '<p>uucingan</p>', NULL, NULL, 1),
(43, 'en', 'tester', 'Tester', '', '', '<p>Tester</p>', '', '', 1),
(44, 'en', 'tester', 'tester', '', '', '<p>rserseresresresresr</p>', '', '', 1),
(45, 'en', 'testtt', 'Testtt', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_media`
--

CREATE TABLE IF NOT EXISTS `article_media` (
  `id_article` int(11) unsigned NOT NULL DEFAULT '0',
  `id_media` int(11) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ordering` int(11) unsigned DEFAULT '9999',
  `url` varchar(255) DEFAULT NULL,
  `lang_display` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_article`,`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_media`
--

INSERT INTO `article_media` (`id_article`, `id_media`, `online`, `ordering`, `url`, `lang_display`) VALUES
(4, 3, 1, 1, NULL, NULL),
(5, 9, 1, 1, NULL, NULL),
(5, 18, 1, 1, NULL, NULL),
(6, 6, 1, 3, NULL, NULL),
(6, 7, 1, 4, NULL, NULL),
(6, 8, 1, 2, NULL, NULL),
(8, 3, 1, 1, NULL, NULL),
(9, 8, 1, 1, NULL, NULL),
(10, 4, 1, 1, NULL, NULL),
(15, 5, 1, 2, NULL, NULL),
(17, 3, 1, 1, NULL, NULL),
(36, 3, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE IF NOT EXISTS `article_tag` (
  `id_article` int(11) unsigned NOT NULL,
  `id_tag` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_article`,`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`id_article`, `id_tag`) VALUES
(5, 1),
(5, 3),
(6, 2),
(6, 4),
(7, 1),
(8, 4),
(9, 4),
(10, 1),
(14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `article_type`
--

CREATE TABLE IF NOT EXISTS `article_type` (
  `id_type` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `ordering` int(11) DEFAULT '0',
  `description` text,
  `type_flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `article_type`
--

INSERT INTO `article_type` (`id_type`, `type`, `ordering`, `description`, `type_flag`) VALUES
(4, 'bloc', 0, '', 5),
(5, 'not-logged-in', 0, '', 1),
(6, 'logged-in', 0, '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `id_captcha` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `lang` varchar(8) NOT NULL DEFAULT '',
  `hash` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_captcha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `ordering` int(11) DEFAULT '0',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`, `ordering`) VALUES
(1, 'ionize', 0),
(2, 'website', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_lang`
--

CREATE TABLE IF NOT EXISTS `category_lang` (
  `id_category` int(11) unsigned NOT NULL DEFAULT '0',
  `lang` varchar(8) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  PRIMARY KEY (`id_category`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_lang`
--

INSERT INTO `category_lang` (`id_category`, `lang`, `title`, `subtitle`, `description`) VALUES
(1, 'en', 'Ionize CMS', '', ''),
(2, 'en', 'Website', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

CREATE TABLE IF NOT EXISTS `element` (
  `id_element` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_element_definition` int(11) unsigned NOT NULL,
  `parent` varchar(50) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_element`),
  KEY `idx_element_id_element_definition` (`id_element_definition`),
  KEY `idx_element_id_parent` (`id_parent`),
  KEY `idx_element_parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `element_definition`
--

CREATE TABLE IF NOT EXISTS `element_definition` (
  `id_element_definition` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_element_definition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `element_definition_lang`
--

CREATE TABLE IF NOT EXISTS `element_definition_lang` (
  `id_element_definition` int(11) unsigned NOT NULL,
  `lang` varchar(8) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_element_definition`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_log`
--

CREATE TABLE IF NOT EXISTS `event_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(50) DEFAULT NULL,
  `message` text,
  `id_user` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `extend_field`
--

CREATE TABLE IF NOT EXISTS `extend_field` (
  `id_extend_field` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(3) unsigned NOT NULL,
  `description` varchar(255) DEFAULT '',
  `parent` varchar(50) NOT NULL,
  `id_parent` int(11) unsigned DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `translated` char(1) DEFAULT '0',
  `value` text,
  `default_value` varchar(255) DEFAULT NULL,
  `global` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `main` smallint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_extend_field`),
  KEY `idx_extend_field_parent` (`parent`),
  KEY `idx_extend_field_id_parent` (`id_parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `extend_field`
--

INSERT INTO `extend_field` (`id_extend_field`, `name`, `type`, `description`, `parent`, `id_parent`, `ordering`, `translated`, `value`, `default_value`, `global`, `main`) VALUES
(1, 'title', 1, '', 'item', 1, 0, '0', '', '', 0, 1),
(2, 'text', 1, '', 'item', 1, 0, '0', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `extend_fields`
--

CREATE TABLE IF NOT EXISTS `extend_fields` (
  `id_extend_fields` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_extend_field` int(11) unsigned NOT NULL,
  `parent` varchar(50) NOT NULL DEFAULT '',
  `id_parent` int(11) unsigned NOT NULL,
  `lang` varchar(8) NOT NULL DEFAULT '',
  `content` text,
  `ordering` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_extend_fields`),
  KEY `idx_extend_fields_id_parent` (`id_parent`),
  KEY `idx_extend_fields_lang` (`lang`),
  KEY `idx_extend_fields_id_extend_field` (`id_extend_field`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `extend_fields`
--

INSERT INTO `extend_fields` (`id_extend_fields`, `id_extend_field`, `parent`, `id_parent`, `lang`, `content`, `ordering`) VALUES
(1, 1, 'item', 2, '', 'My first Flag', 0),
(2, 2, 'item', 2, '', 'New !!!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `extend_field_lang`
--

CREATE TABLE IF NOT EXISTS `extend_field_lang` (
  `id_extend_field` int(11) unsigned NOT NULL,
  `lang` varchar(8) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_extend_field`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extend_field_lang`
--

INSERT INTO `extend_field_lang` (`id_extend_field`, `lang`, `label`) VALUES
(1, 'en', 'Title'),
(2, 'en', 'Text');

-- --------------------------------------------------------

--
-- Table structure for table `extend_field_type`
--

CREATE TABLE IF NOT EXISTS `extend_field_type` (
  `id_extend_field_type` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL DEFAULT '',
  `default_values` smallint(1) NOT NULL DEFAULT '0',
  `values` smallint(1) NOT NULL DEFAULT '0',
  `translated` smallint(1) NOT NULL DEFAULT '0',
  `active` smallint(6) NOT NULL DEFAULT '1',
  `display` smallint(6) NOT NULL DEFAULT '1',
  `validate` varchar(50) DEFAULT NULL,
  `html_element` varchar(20) NOT NULL DEFAULT 'input',
  `html_element_type` varchar(20) NOT NULL DEFAULT 'text',
  `html_element_class` varchar(100) DEFAULT NULL,
  `html_element_pattern` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_extend_field_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `extend_field_type`
--

INSERT INTO `extend_field_type` (`id_extend_field_type`, `type_name`, `default_values`, `values`, `translated`, `active`, `display`, `validate`, `html_element`, `html_element_type`, `html_element_class`, `html_element_pattern`) VALUES
(1, 'Input', 1, 0, 1, 1, 1, NULL, 'input', 'text', 'w95p inputtext', NULL),
(2, 'Textarea', 1, 0, 1, 1, 1, NULL, 'textarea', 'textarea', 'w95p autogrow inputtext', NULL),
(3, 'Textarea + Editor', 1, 0, 1, 1, 1, NULL, 'textarea', 'editor', 'w95p smallTinyTextarea inputtext', NULL),
(4, 'Checkbox', 1, 1, 0, 1, 1, NULL, 'input', 'checkbox', 'checkbox', NULL),
(5, 'Radio', 1, 1, 0, 1, 1, NULL, 'input', 'radio', 'radio', NULL),
(6, 'Select', 1, 1, 0, 1, 1, NULL, 'input', 'select', 'select inputtext', NULL),
(7, 'Date Time', 0, 0, 0, 1, 1, NULL, 'input', 'date', 'date w120 inputtext', NULL),
(8, 'Medias', 0, 0, 1, 1, 1, NULL, 'div', 'media', NULL, NULL),
(100, 'Number', 1, 0, 0, 1, 1, 'numeric', 'input', 'number', 'w120 inputtext', NULL),
(110, 'Email', 0, 0, 0, 1, 1, 'email', 'input', 'email', 'w95p inputtext', NULL),
(120, 'Phone', 0, 0, 0, 1, 1, 'digits', 'input', 'tel', 'w140 inputtext', '^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}$'),
(130, 'Internal Link', 0, 0, 1, 1, 1, NULL, 'div', 'link', 'droppable', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ion_sessions`
--

CREATE TABLE IF NOT EXISTS `ion_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_item_definition` int(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `ordering` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Item instances' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `id_item_definition`, `name`, `description`, `ordering`) VALUES
(2, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) unsigned NOT NULL,
  `parent` varchar(50) NOT NULL DEFAULT '',
  `id_parent` int(11) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_item`,`parent`,`id_parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `parent`, `id_parent`, `ordering`) VALUES
(2, 'article', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_definition`
--

CREATE TABLE IF NOT EXISTS `item_definition` (
  `id_item_definition` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_item_definition`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Items definition table' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `item_definition`
--

INSERT INTO `item_definition` (`id_item_definition`, `name`, `description`) VALUES
(1, 'flag', 'Article''s Flags');

-- --------------------------------------------------------

--
-- Table structure for table `item_definition_lang`
--

CREATE TABLE IF NOT EXISTS `item_definition_lang` (
  `id_item_definition` int(11) unsigned NOT NULL,
  `lang` varchar(8) NOT NULL DEFAULT '',
  `title_definition` varchar(50) DEFAULT NULL,
  `title_item` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_item_definition`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_definition_lang`
--

INSERT INTO `item_definition_lang` (`id_item_definition`, `lang`, `title_definition`, `title_item`) VALUES
(1, 'en', 'Flags', 'Flag');

-- --------------------------------------------------------

--
-- Table structure for table `item_lang`
--

CREATE TABLE IF NOT EXISTS `item_lang` (
  `id_item` int(11) unsigned NOT NULL,
  `lang` varchar(8) NOT NULL DEFAULT '',
  `title` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_item`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `lang` varchar(8) NOT NULL DEFAULT '',
  `name` varchar(40) DEFAULT NULL,
  `online` char(1) DEFAULT '0',
  `def` char(1) DEFAULT '0',
  `ordering` int(11) DEFAULT NULL,
  `direction` smallint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`lang`, `name`, `online`, `def`, `ordering`, `direction`) VALUES
('en', 'english', '1', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_tracker`
--

CREATE TABLE IF NOT EXISTS `login_tracker` (
  `ip_address` varchar(32) NOT NULL,
  `first_time` int(11) unsigned NOT NULL,
  `failures` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`ip_address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id_media` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL DEFAULT '',
  `file_name` varchar(255) NOT NULL DEFAULT '' COMMENT 'file_name',
  `path` varchar(500) NOT NULL COMMENT 'Complete path to the medium, including media file name, excluding host name',
  `base_path` varchar(500) NOT NULL COMMENT 'medium folder base path, excluding host name',
  `copyright` varchar(128) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Medium date',
  `link` varchar(255) DEFAULT NULL COMMENT 'Link to a resource, attached to this medium',
  `square_crop` enum('tl','m','br') NOT NULL DEFAULT 'm',
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `type`, `file_name`, `path`, `base_path`, `copyright`, `provider`, `date`, `link`, `square_crop`) VALUES
(3, 'picture', 'screenshot_ionize_dashboard.jpg', 'files/screenshot_ionize_dashboard.jpg', 'files/', '', '', '0000-00-00 00:00:00', '', 'm'),
(4, 'picture', 'IMG_8359.jpg', 'files/pictures/IMG_8359.jpg', 'files/pictures/', '', '', '0000-00-00 00:00:00', '', 'm'),
(5, 'picture', 'IMG_8447.jpg', 'files/pictures/IMG_8447.jpg', 'files/pictures/', '', NULL, '0000-00-00 00:00:00', '', 'm'),
(6, 'picture', 'IMG_8632.jpg', 'files/pictures/IMG_8632.jpg', 'files/pictures/', '', NULL, '0000-00-00 00:00:00', '', 'm'),
(7, 'picture', 'IMG_8645.jpg', 'files/pictures/IMG_8645.jpg', 'files/pictures/', '', NULL, '0000-00-00 00:00:00', '', 'm'),
(8, 'picture', 'IMG_8963.jpg', 'files/pictures/IMG_8963.jpg', 'files/pictures/', NULL, NULL, '0000-00-00 00:00:00', NULL, 'm'),
(9, 'video', '68203296', 'http://player.vimeo.com/video/68203296', 'http://player.vimeo.com/video/', NULL, 'vimeo', '0000-00-00 00:00:00', NULL, 'm'),
(10, 'picture', 'IMG_8438.jpg', 'files/pictures/IMG_8438.jpg', 'files/pictures/', NULL, '', '0000-00-00 00:00:00', NULL, 'm'),
(11, 'picture', 'download.jpg', 'files/gallery/download.jpg', 'files/gallery/', NULL, '', '0000-00-00 00:00:00', NULL, 'm'),
(12, 'picture', 'peucang.jpg', 'files/gallery/peucang.jpg', 'files/gallery/', NULL, '', '0000-00-00 00:00:00', NULL, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `media_lang`
--

CREATE TABLE IF NOT EXISTS `media_lang` (
  `lang` varchar(8) NOT NULL DEFAULT '',
  `id_media` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `alt` varchar(500) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id_media`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_lang`
--

INSERT INTO `media_lang` (`lang`, `id_media`, `title`, `alt`, `description`) VALUES
('en', 3, 'Test', 'fasdasd', 'asdasdasdasd'),
('en', 4, 'Mingun', 'Alot of young munks live in a monastery next to the Hsinbyume pagoda', 'Alot of young munks live in a monastery next to the Hsinbyume pagoda'),
('en', 5, 'Mandalay', 'One working day in the historical capital of Burma.', 'One working day in the historical capital of Burma.'),
('en', 6, 'Monywa, Burma', 'In the mountain of Monywa, more than two thousand caves were built in honor of Budha.', 'In the mountain of Monywa, more than two thousand caves were built in honor of Budha.'),
('en', 7, 'Monywa wall paints', 'These 17th centruey wall painting are very well preserved because the caves were forgivven for centuries.', 'These 17th centruey wall painting are very well preserved because the caves were forgivven for centuries.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name`, `title`, `ordering`) VALUES
(1, 'main', 'Main menu', NULL),
(2, 'system', 'System menu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id_module` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `with_admin` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `version` varchar(10) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ordering` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `info` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_module`),
  KEY `i_module_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `module_demo_author`
--

CREATE TABLE IF NOT EXISTS `module_demo_author` (
  `id_author` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gender` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `module_demo_author`
--

INSERT INTO `module_demo_author` (`id_author`, `gender`, `name`) VALUES
(1, 1, 'Roberto Chansez'),
(2, 2, 'Elisabeth Fueller'),
(3, 1, 'Emile Durand');

-- --------------------------------------------------------

--
-- Table structure for table `module_demo_author_lang`
--

CREATE TABLE IF NOT EXISTS `module_demo_author_lang` (
  `id_author` int(10) unsigned NOT NULL,
  `lang` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_author`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_demo_author_lang`
--

INSERT INTO `module_demo_author_lang` (`id_author`, `lang`, `description`) VALUES
(1, 'en', 'Known as a famous explorator, he discovered more than 50 new kind of animals'),
(2, 'en', 'World known artist and designer'),
(3, 'en', 'Famous TV speakering in Marioland');

-- --------------------------------------------------------

--
-- Table structure for table `module_demo_author_media`
--

CREATE TABLE IF NOT EXISTS `module_demo_author_media` (
  `id_author` int(11) unsigned NOT NULL,
  `id_media` int(11) unsigned NOT NULL DEFAULT '1',
  `ordering` int(11) unsigned DEFAULT '9999',
  PRIMARY KEY (`id_author`,`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module_demo_links`
--

CREATE TABLE IF NOT EXISTS `module_demo_links` (
  `parent` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_parent` int(11) unsigned NOT NULL,
  `id_author` int(10) unsigned NOT NULL,
  `ordering` int(11) unsigned DEFAULT '9999',
  PRIMARY KEY (`parent`,`id_parent`,`id_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module_eventcalendar`
--

CREATE TABLE IF NOT EXISTS `module_eventcalendar` (
  `id_event` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updater` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `id_category` int(11) unsigned DEFAULT NULL,
  `id_article` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `module_eventcalendar`
--

INSERT INTO `module_eventcalendar` (`id_event`, `name`, `start_date`, `end_date`, `author`, `updater`, `created`, `updated`, `id_category`, `id_article`) VALUES
(3, 'test', '2014-10-31 00:00:00', '2014-10-31 00:00:00', 'zon zone', 'zon zone', '2014-10-16 09:35:25', '2014-10-16 09:35:25', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_eventcalendar_category`
--

CREATE TABLE IF NOT EXISTS `module_eventcalendar_category` (
  `id_category` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(7) COLLATE utf8_unicode_ci DEFAULT '#FFFFFF',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `module_eventcalendar_category`
--

INSERT INTO `module_eventcalendar_category` (`id_category`, `name`, `color`) VALUES
(3, 'Test', '#3366FF');

-- --------------------------------------------------------

--
-- Table structure for table `module_eventcalendar_category_lang`
--

CREATE TABLE IF NOT EXISTS `module_eventcalendar_category_lang` (
  `id_category` int(10) unsigned NOT NULL,
  `lang` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_category`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_eventcalendar_category_lang`
--

INSERT INTO `module_eventcalendar_category_lang` (`id_category`, `lang`, `title`, `subtitle`, `description`) VALUES
(3, 'en', 'tes', 'test', '<p>tset</p>');

-- --------------------------------------------------------

--
-- Table structure for table `module_eventcalendar_lang`
--

CREATE TABLE IF NOT EXISTS `module_eventcalendar_lang` (
  `id_event` int(10) unsigned NOT NULL,
  `lang` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_event`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_eventcalendar_lang`
--

INSERT INTO `module_eventcalendar_lang` (`id_event`, `lang`, `url`, `title`, `subtitle`, `description`) VALUES
(3, 'en', 'event', 'test', 'test', '<p>test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `module_guest_book`
--

CREATE TABLE IF NOT EXISTS `module_guest_book` (
  `no` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `comment` text,
  `created` varchar(25) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `module_guest_book`
--

INSERT INTO `module_guest_book` (`no`, `name`, `email`, `address`, `comment`, `created`, `status`) VALUES
(2, 'test', 'test@gmail.com', 'tesst', 'teste', '2014-10-16 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_setting`
--

CREATE TABLE IF NOT EXISTS `module_setting` (
  `id_module_setting` int(11) NOT NULL AUTO_INCREMENT,
  `id_module` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Setting name',
  `content` varchar(255) NOT NULL COMMENT 'Setting content',
  `lang` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_module_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(10) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_note`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id_notification` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date_creation` date DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `category` varchar(25) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `read` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id_notification`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id_notification`, `date_creation`, `code`, `category`, `title`, `content`, `read`) VALUES
(1, '2014-10-24', 'sitemap_refresh', 'System', 'Sitemap refresh', 'Sitemap needs to be refreshed.<br/> Go to <b>Tools > System Diagnosis > Tools</b> and click on <b>"Refresh Sitemap"</b>.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) unsigned NOT NULL DEFAULT '0',
  `id_menu` int(11) unsigned NOT NULL DEFAULT '0',
  `id_type` smallint(2) NOT NULL DEFAULT '0',
  `id_subnav` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `ordering` int(11) unsigned DEFAULT '0',
  `level` int(11) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `home` tinyint(1) NOT NULL DEFAULT '0',
  `author` varchar(55) DEFAULT NULL,
  `updater` varchar(55) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_off` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `logical_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `appears` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `has_url` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `view` varchar(50) DEFAULT NULL COMMENT 'Page view',
  `view_single` varchar(50) DEFAULT NULL COMMENT 'Single Article Page view',
  `article_list_view` varchar(50) DEFAULT NULL COMMENT 'Article list view for each article linked to this page',
  `article_view` varchar(50) DEFAULT NULL COMMENT 'Article detail view for each article linked to this page',
  `article_order` varchar(50) NOT NULL DEFAULT 'ordering' COMMENT 'Article order in this page. Can be "ordering", "date"',
  `article_order_direction` varchar(50) NOT NULL DEFAULT 'ASC',
  `link` varchar(255) DEFAULT '' COMMENT 'Link to internal / external resource',
  `link_type` varchar(25) DEFAULT NULL COMMENT '''page'', ''article'' or NULL',
  `link_id` varchar(20) NOT NULL DEFAULT '',
  `pagination` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT 'Pagination use ?',
  `priority` int(1) unsigned NOT NULL DEFAULT '5' COMMENT 'Page priority',
  `used_by_module` tinyint(1) unsigned DEFAULT NULL,
  `deny_code` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_page`),
  KEY `idx_page_id_parent` (`id_parent`),
  KEY `idx_page_level` (`level`),
  KEY `idx_page_menu` (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `id_parent`, `id_menu`, `id_type`, `id_subnav`, `name`, `ordering`, `level`, `online`, `home`, `author`, `updater`, `created`, `publish_on`, `publish_off`, `updated`, `logical_date`, `appears`, `has_url`, `view`, `view_single`, `article_list_view`, `article_view`, `article_order`, `article_order_direction`, `link`, `link_type`, `link_id`, `pagination`, `priority`, `used_by_module`, `deny_code`) VALUES
(1, 0, 2, 0, 0, '404', 0, 0, 1, 0, 'demo', 'demo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 14:42:05', '0000-00-00 00:00:00', 0, 1, '', '', '', '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, NULL),
(2, 0, 1, 0, 0, 'welcome', 1, 0, 1, 1, 'demo', 'michelange', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-04-05 10:16:24', '0000-00-00 00:00:00', 1, 1, 'page_home', '', '', '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, '404'),
(3, 0, 1, 0, 0, 'about-ionize-cms', 5, 0, 1, 0, 'demo', 'demo', '2012-11-17 09:42:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-06 16:27:42', '0000-00-00 00:00:00', 1, 1, 'pages/page_standard', 'pages/page_standard', NULL, '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, NULL),
(4, 0, 1, 0, 0, 'contact', 6, 0, 1, 0, 'demo', 'demo', '2012-11-17 09:42:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-21 14:34:59', '0000-00-00 00:00:00', 1, 1, 'page_contact', '', '', '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, NULL),
(6, 0, 1, 0, 0, 'blog', 2, 0, 1, 0, 'demo', 'admin', '2012-11-17 13:57:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-20 03:15:07', '0000-00-00 00:00:00', 1, 1, 'page_blog', 'page_blog_post', '', '', 'ordering', 'ASC', '', NULL, '', 3, 5, 0, '404'),
(8, 0, 1, 0, 0, 'services', 4, 0, 1, 0, 'demo', 'admin', '2012-11-20 22:12:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-14 03:45:13', '0000-00-00 00:00:00', 1, 1, '', '', '', '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, '404'),
(9, 0, 2, 0, 0, 'footer', 1, 0, 1, 0, 'demo', 'demo', '2012-11-21 11:52:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-21 11:52:30', '0000-00-00 00:00:00', 0, 1, '', '', NULL, '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, NULL),
(10, 0, 1, 0, 0, 'my-account', 7, 0, 1, 0, 'demo', 'demo', '2012-12-21 20:11:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-12-22 10:53:57', '0000-00-00 00:00:00', 1, 1, 'page_my_account', '', NULL, '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, NULL),
(11, 0, 2, 0, 0, '401', 0, 0, 1, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, NULL, NULL, NULL, NULL, 'ordering', 'ASC', '', NULL, '', 0, 5, NULL, NULL),
(12, 0, 2, 0, 0, '403', 0, 0, 1, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, NULL, NULL, NULL, NULL, 'ordering', 'ASC', '', NULL, '', 0, 5, NULL, NULL),
(17, 0, 1, 0, 0, 'search', 8, 0, 1, 0, 'admin', NULL, '2014-10-15 06:39:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, 'Search', NULL, NULL, NULL, 'ordering', 'ASC', '', NULL, '', 0, 5, NULL, NULL),
(18, 0, 1, 0, 0, 'event', 9, 0, 1, 0, 'admin', NULL, '2014-10-16 04:01:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, 'calendar', NULL, NULL, NULL, 'ordering', 'ASC', '', NULL, '', 0, 5, NULL, NULL),
(21, 0, 1, 0, 0, 'tester', 10, 0, 1, 0, 'admin', 'admin', '2014-10-17 09:19:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-24 09:21:53', '0000-00-00 00:00:00', 0, 1, 'page_blog', 'page_blog_post', '', '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, '404'),
(22, 0, 1, 0, 0, 'testmedia', 11, 0, 1, 0, 'admin', 'admin', '2014-10-20 05:28:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-10-20 05:28:22', '0000-00-00 00:00:00', 0, 1, 'Media', 'Media', '', '', 'ordering', 'ASC', '', NULL, '', 0, 5, 0, '404');

-- --------------------------------------------------------

--
-- Table structure for table `page_article`
--

CREATE TABLE IF NOT EXISTS `page_article` (
  `id_page` int(11) unsigned NOT NULL,
  `id_article` int(11) unsigned NOT NULL,
  `online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `view` varchar(50) DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `id_type` int(11) unsigned DEFAULT NULL,
  `link_type` varchar(25) NOT NULL DEFAULT '',
  `link_id` varchar(20) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `main_parent` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_page`,`id_article`),
  KEY `idx_page_article_id_type` (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_article`
--

INSERT INTO `page_article` (`id_page`, `id_article`, `online`, `view`, `ordering`, `id_type`, `link_type`, `link_id`, `link`, `main_parent`) VALUES
(1, 1, 1, NULL, 0, NULL, '', '', '', 1),
(2, 11, 1, NULL, 4, 0, 'page', '8', 'Services', 1),
(2, 12, 1, NULL, 3, 0, 'page', '8', 'Services', 1),
(2, 13, 1, NULL, 2, 0, 'page', '8', 'Services', 1),
(2, 14, 1, NULL, 1, 0, 'page', '8', 'Services', 1),
(3, 15, 1, NULL, 1, NULL, '', '', '', 1),
(4, 24, 1, NULL, 2, 4, '', '', '', 1),
(4, 26, 1, NULL, 3, 4, '', '', '', 1),
(4, 29, 1, NULL, 1, NULL, '', '', '', 1),
(6, 6, 1, NULL, 1, NULL, '', '', '', 1),
(6, 7, 1, NULL, 2, NULL, '', '', '', 1),
(6, 8, 1, NULL, 3, NULL, '', '', '', 1),
(6, 9, 1, NULL, 4, NULL, '', '', '', 1),
(6, 10, 1, NULL, 5, 0, '', '', '', 1),
(8, 17, 1, NULL, 1, NULL, '', '', '', 1),
(8, 18, 1, NULL, 2, 4, '', '', '', 1),
(8, 19, 1, NULL, 3, 4, '', '', '', 1),
(8, 20, 1, NULL, 4, 4, '', '', '', 1),
(9, 16, 1, NULL, 3, NULL, '', '', '', 1),
(9, 27, 1, NULL, 1, NULL, '', '', '', 1),
(9, 28, 1, NULL, 2, NULL, '', '', '', 1),
(10, 30, 1, NULL, 2, 5, '', '', '', 1),
(10, 31, 1, NULL, 1, 6, '', '', '', 1),
(11, 32, 1, NULL, 0, NULL, '', '', '', 0),
(12, 33, 1, NULL, 0, NULL, '', '', '', 0),
(21, 44, 1, NULL, 1, NULL, '', '', '', 1),
(21, 45, 1, NULL, 2, NULL, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_lang`
--

CREATE TABLE IF NOT EXISTS `page_lang` (
  `lang` varchar(8) NOT NULL DEFAULT '',
  `id_page` int(11) unsigned NOT NULL DEFAULT '0',
  `url` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `nav_title` varchar(255) NOT NULL DEFAULT '',
  `subnav_title` varchar(255) NOT NULL DEFAULT '',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `online` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_page`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_lang`
--

INSERT INTO `page_lang` (`lang`, `id_page`, `url`, `link`, `title`, `subtitle`, `nav_title`, `subnav_title`, `meta_title`, `meta_description`, `meta_keywords`, `online`) VALUES
('en', 1, '404', '', '404', 'Can''t find requested page !', '', '', '', '', '', 1),
('en', 2, 'home', '', 'Ionize CMS', 'the most professional \n& friendly CMS ever made.', 'Home', '', 'Welcome To Ionize CMS', '', '', 1),
('en', 3, 'about-ionize-cms', '', 'About Us', 'Some info about us !', '', '', '', '', '', 1),
('en', 4, 'contact', '', 'Contact', 'Find us, send us one message', '', '', '', '', '', 1),
('en', 6, 'blog', '', 'Blog', 'Interesting stories ', '', '', '', '', '', 1),
('en', 8, 'services', '', 'Services', 'The very great services we can provide to make you happy', '', '', '', '', '', 1),
('en', 9, 'footer', '', 'Footer', '', '', '', '', '', '', 1),
('en', 10, 'my-account', '', 'My account', '', '', '', '', '', '', 1),
('en', 11, '401', '', '401', 'Login needed', '', '', NULL, NULL, NULL, 1),
('en', 12, '403', '', '403', 'Forbidden', '', '', NULL, NULL, NULL, 1),
('en', 17, 'search', '', 'Search', '', '', '', '', NULL, NULL, 1),
('en', 18, 'event', '', 'event', '', '', '', '', NULL, NULL, 1),
('en', 21, 'tester', '', 'Tester', '', '', '', '', '', '', 1),
('en', 22, 'testmedia', '', 'Testmedia', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_media`
--

CREATE TABLE IF NOT EXISTS `page_media` (
  `id_page` int(11) unsigned NOT NULL DEFAULT '0',
  `id_media` int(11) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ordering` int(11) unsigned DEFAULT '9999',
  `lang_display` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_page`,`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_media`
--

INSERT INTO `page_media` (`id_page`, `id_media`, `online`, `ordering`, `lang_display`) VALUES
(2, 4, 1, 13, NULL),
(2, 5, 1, 10, NULL),
(2, 6, 1, 1, NULL),
(2, 7, 1, 11, NULL),
(2, 8, 1, 12, NULL),
(22, 11, 1, 1, NULL),
(22, 12, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
  `id_resource` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) unsigned DEFAULT NULL,
  `resource` varchar(255) NOT NULL DEFAULT '',
  `actions` varchar(500) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `description` varchar(1000) DEFAULT '',
  PRIMARY KEY (`id_resource`),
  UNIQUE KEY `resource_key` (`resource`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=304 ;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id_resource`, `id_parent`, `resource`, `actions`, `title`, `description`) VALUES
(1, NULL, 'admin', '', 'Backend login', 'Connect to ionize backend'),
(10, NULL, 'admin/menu', 'create,edit,delete', 'Menu', 'Menus'),
(11, 10, 'admin/menu/permissions/backend', '', 'Permissions', 'Menu > Backend Permissions'),
(20, NULL, 'admin/translations', '', 'Translations', 'Translations'),
(30, NULL, 'admin/filemanager', 'upload,rename,delete,move', 'Filemanager', 'FileManager'),
(35, NULL, 'admin/medialist', '', 'MediaList', 'MediaList'),
(40, NULL, 'admin/page', 'create,edit,delete', 'Page', 'Page'),
(41, 40, 'admin/page/article', 'add', 'Article', 'Page > Article'),
(42, 40, 'admin/page/element', 'add', 'Content Element', 'Page > Content Element'),
(50, 40, 'admin/page/media', 'link,unlink,edit', 'Media', 'Page > Media'),
(60, 40, 'admin/page/permissions', '', 'Permission', 'Page > Permission'),
(61, 60, 'admin/page/permissions/backend', '', 'Backend', 'Page > Permission > Backend'),
(62, 60, 'admin/page/permissions/frontend', '', 'Frontend', 'Page > Permission > Frontend'),
(70, NULL, 'admin/article', 'create,edit,delete,move,copy,duplicate', 'Article', 'Article'),
(80, 70, 'admin/article/media', 'link,unlink,edit', 'Media', 'Article > Media'),
(85, 70, 'admin/article/element', 'add', 'Content Element', 'Article > Content Element'),
(86, 70, 'admin/article/category', '', 'Manage categories', 'Article > Categories'),
(90, 70, 'admin/article/permissions', '', 'Permission', 'Article > Permission'),
(91, 90, 'admin/article/permissions/backend', '', 'Backend', 'Article > Permission > Backend'),
(92, 90, 'admin/article/permissions/frontend', '', 'Frontend', 'Article > Permission > Frontend'),
(93, 70, 'admin/article/tag', '', 'Manage tags', 'Article > Tags'),
(100, NULL, 'admin/tree', '', 'Tree', ''),
(101, 100, 'admin/tree/menu', 'add_page,edit', 'Menus', ''),
(102, 100, 'admin/tree/page', 'status,add_page,add_article,order', 'Pages', ''),
(103, 100, 'admin/tree/article', 'unlink,status,move,copy,order', 'Articles', ''),
(120, NULL, 'admin/article/type', 'create,edit,delete', 'Article Type', 'Article types'),
(150, NULL, 'admin/modules', 'install', 'Modules', 'Modules'),
(151, 150, 'admin/modules/permissions', '', 'Set Permissions', 'Modules > Permissions'),
(180, NULL, 'admin/element', 'create,edit,delete', 'Content Element', 'Content Elements'),
(181, 180, 'admin/element/media', 'link,unlink,edit', 'Media', 'Content Elements > Media'),
(210, NULL, 'admin/extend', 'create,edit,delete', 'Extend Fields', 'Extend Fields'),
(220, NULL, 'admin/item', 'create,edit,delete,add', 'Static Items', 'Static Items'),
(221, 220, 'admin/item/definition', 'edit', 'Definition', 'Static Items > Definition'),
(222, 220, 'admin/item/media', 'link,unlink,edit', 'Media', 'Static Items > Media'),
(240, NULL, 'admin/tools', '', 'Tools', 'Tools'),
(241, 240, 'admin/tools/google_analytics', '', 'Google Analytics', 'Tools > Google Analytics'),
(250, 240, 'admin/tools/system', '', 'System Diagnosis', 'Tools > System'),
(251, 250, 'admin/tools/system/information', '', 'Information', 'Tools > System > Information'),
(252, 250, 'admin/tools/system/repair', '', 'Repair tools', 'Tools > System > Repair'),
(253, 250, 'admin/tools/system/report', '', 'Reports', 'Tools > System > Reports'),
(270, NULL, 'admin/settings', '', 'Settings', 'Settings'),
(271, 270, 'admin/settings/ionize', '', 'Ionize UI', 'Settings > UI Settings'),
(272, 270, 'admin/settings/languages', '', 'Languages Management', 'Settings > Languages'),
(273, 270, 'admin/settings/themes', 'edit', 'Themes', 'Settings > Themes'),
(274, 270, 'admin/settings/website', '', 'Website settings', 'Settings > Website'),
(275, 270, 'admin/settings/technical', '', 'Technical settings', 'Settings > Technical'),
(300, NULL, 'admin/users_roles', '', 'Users / Roles', 'Users / Roles'),
(301, 300, 'admin/user', 'create,edit,delete', 'Users', 'Users'),
(302, 300, 'admin/role', 'create,edit,delete', 'Roles', 'Roles'),
(303, 302, 'admin/role/permissions', '', 'Set Permissions', 'See Role''s permissions');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `role_level` int(11) DEFAULT NULL,
  `role_code` varchar(25) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `role_description` tinytext,
  PRIMARY KEY (`id_role`),
  UNIQUE KEY `role_code` (`role_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role_level`, `role_code`, `role_name`, `role_description`) VALUES
(1, 10000, 'super-admin', 'Super Admin', ''),
(2, 5000, 'admin', 'Admin', ''),
(3, 1000, 'editor', 'Editor', ''),
(4, 100, 'user', 'User', ''),
(5, 50, 'pending', 'Pending', ''),
(6, 10, 'guest', 'Guest', ''),
(7, -10, 'banned', 'Banned', ''),
(8, -100, 'deactivated', 'Deactivated', '');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `id_role` int(11) NOT NULL,
  `resource` varchar(100) NOT NULL DEFAULT '',
  `actions` varchar(100) NOT NULL DEFAULT '',
  `permission` smallint(1) DEFAULT NULL,
  `id_element` int(11) unsigned DEFAULT NULL,
  `id_user` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_role`,`resource`,`actions`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_role`, `resource`, `actions`, `permission`, `id_element`, `id_user`) VALUES
(1, 'all', '', 1, NULL, 0),
(2, 'admin', '', 1, NULL, 0),
(2, 'admin/article', 'create,edit,delete,move,copy,duplicate', 1, NULL, 0),
(2, 'admin/article/category', '', 1, NULL, 0),
(2, 'admin/article/element', 'add', 1, NULL, 0),
(2, 'admin/article/media', 'link,unlink,edit', 1, NULL, 0),
(2, 'admin/article/permissions', '', 1, NULL, 0),
(2, 'admin/article/permissions/backend', '', 1, NULL, 0),
(2, 'admin/article/permissions/frontend', '', 1, NULL, 0),
(2, 'admin/article/tag', '', 1, NULL, 0),
(2, 'admin/article/type', 'create,edit,delete', 1, NULL, 0),
(2, 'admin/element', 'create,edit,delete', 1, NULL, 0),
(2, 'admin/element/media', 'link,unlink,edit', 1, NULL, 0),
(2, 'admin/extend', 'create,edit,delete', 1, NULL, 0),
(2, 'admin/filemanager', 'upload,rename,delete,move', 1, NULL, 0),
(2, 'admin/item', 'create,edit,delete,add', 1, NULL, 0),
(2, 'admin/item/media', 'link,unlink,edit', 1, NULL, 0),
(2, 'admin/medialist', '', 1, NULL, 0),
(2, 'admin/menu', 'create,edit,delete', 1, NULL, 0),
(2, 'admin/modules', 'install', 1, NULL, 0),
(2, 'admin/modules/permissions', '', 1, NULL, 0),
(2, 'admin/page', 'create,edit,delete', 1, NULL, 0),
(2, 'admin/page/article', 'add', 1, NULL, 0),
(2, 'admin/page/element', 'add', 1, NULL, 0),
(2, 'admin/page/media', 'link,unlink,edit', 1, NULL, 0),
(2, 'admin/page/permissions', '', 1, NULL, 0),
(2, 'admin/page/permissions/backend', '', 1, NULL, 0),
(2, 'admin/page/permissions/frontend', '', 1, NULL, 0),
(2, 'admin/role', 'create,edit,delete', 1, NULL, 0),
(2, 'admin/role/permissions', '', 1, NULL, 0),
(2, 'admin/settings', '', 1, NULL, 0),
(2, 'admin/settings/ionize', '', 1, NULL, 0),
(2, 'admin/settings/languages', '', 1, NULL, 0),
(2, 'admin/settings/website', '', 1, NULL, 0),
(2, 'admin/tools', '', 1, NULL, 0),
(2, 'admin/tools/google_analytics', '', 1, NULL, 0),
(2, 'admin/tools/system', '', 1, NULL, 0),
(2, 'admin/tools/system/information', '', 1, NULL, 0),
(2, 'admin/tools/system/repair', '', 1, NULL, 0),
(2, 'admin/tools/system/report', '', 1, NULL, 0),
(2, 'admin/translations', '', 1, NULL, 0),
(2, 'admin/tree', '', 1, NULL, 0),
(2, 'admin/tree/article', 'unlink,status,move,copy,order', 1, NULL, 0),
(2, 'admin/tree/menu', 'add_page,edit', 1, NULL, 0),
(2, 'admin/tree/page', 'status,add_page,add_article,order', 1, NULL, 0),
(2, 'admin/user', 'create,edit,delete', 1, NULL, 0),
(2, 'admin/users_roles', '', 1, NULL, 0),
(3, 'admin', '', 1, NULL, 0),
(3, 'admin/article', 'create,edit,delete,move,copy,duplicate', 1, NULL, 0),
(3, 'admin/article/category', '', 1, NULL, 0),
(3, 'admin/article/element', 'add', 1, NULL, 0),
(3, 'admin/article/media', 'link,unlink,edit', 1, NULL, 0),
(3, 'admin/article/permissions', '', 1, NULL, 0),
(3, 'admin/article/permissions/backend', '', 1, NULL, 0),
(3, 'admin/article/permissions/frontend', '', 1, NULL, 0),
(3, 'admin/article/tag', '', 1, NULL, 0),
(3, 'admin/element/media', 'link,unlink,edit', 1, NULL, 0),
(3, 'admin/filemanager', 'upload,rename,delete,move', 1, NULL, 0),
(3, 'admin/item', 'create,edit,delete,add', 1, NULL, 0),
(3, 'admin/item/media', 'link,unlink,edit', 1, NULL, 0),
(3, 'admin/medialist', '', 1, NULL, 0),
(3, 'admin/menu', 'create,edit,delete', 1, NULL, 0),
(3, 'admin/modules', '', 1, NULL, 0),
(3, 'admin/page', 'create,edit,delete', 1, NULL, 0),
(3, 'admin/page/article', 'add', 1, NULL, 0),
(3, 'admin/page/element', 'add', 1, NULL, 0),
(3, 'admin/page/media', 'link,unlink,edit', 1, NULL, 0),
(3, 'admin/page/permissions', '', 1, NULL, 0),
(3, 'admin/page/permissions/backend', '', 1, NULL, 0),
(3, 'admin/page/permissions/frontend', '', 1, NULL, 0),
(3, 'admin/settings', '', 1, NULL, 0),
(3, 'admin/settings/ionize', '', 1, NULL, 0),
(3, 'admin/settings/languages', '', 1, NULL, 0),
(3, 'admin/settings/website', '', 1, NULL, 0),
(3, 'admin/tools', '', 1, NULL, 0),
(3, 'admin/tools/google_analytics', '', 1, NULL, 0),
(3, 'admin/tools/system', '', 1, NULL, 0),
(3, 'admin/tools/system/information', '', 1, NULL, 0),
(3, 'admin/tools/system/report', '', 1, NULL, 0),
(3, 'admin/translations', '', 1, NULL, 0),
(3, 'admin/tree', '', 1, NULL, 0),
(3, 'admin/tree/article', 'unlink,status,move,copy,order', 1, NULL, 0),
(3, 'admin/tree/menu', 'add_page,edit', 1, NULL, 0),
(3, 'admin/tree/page', 'status,add_page,add_article,order', 1, NULL, 0),
(3, 'admin/user', 'create,edit,delete', 1, NULL, 0),
(3, 'admin/users_roles', '', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `lang` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_setting`),
  UNIQUE KEY `idx_unq_setting` (`name`,`lang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `name`, `content`, `lang`) VALUES
(1, 'ionize_version', '1.0.7', ''),
(2, 'site_email', '', ''),
(3, 'files_path', 'files', ''),
(4, 'theme', 'foundation', ''),
(5, 'theme_admin', 'admin', ''),
(6, 'google_analytics', '', ''),
(7, 'filemanager', 'mootools-filemanager', ''),
(8, 'show_help_tips', '1', ''),
(9, 'display_connected_label', '1', ''),
(10, 'display_dashboard_shortcuts', '1', ''),
(11, 'display_dashboard_modules', '1', ''),
(12, 'display_dashboard_users', '1', ''),
(13, 'display_dashboard_content', '1', ''),
(14, 'display_front_offline_content', '1', ''),
(15, 'display_dashboard_quick_settings', '1', ''),
(16, 'texteditor', 'tinymce', ''),
(17, 'media_thumb_size', '120', ''),
(18, 'tinybuttons1', 'pdw_toggle,|,bold,italic,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,|,bullist,numlist,|,link,unlink,image,|,spellchecker', ''),
(19, 'tinybuttons2', 'fullscreen, undo,redo,|,pastetext,selectall,removeformat,|,media,charmap,hr,blockquote,|,template,|,codemirror', ''),
(20, 'tinybuttons3', 'tablecontrols', ''),
(21, 'smalltinybuttons1', 'bold,italic,|,bullist,numlist,|,link,unlink,image,|,nonbreaking', ''),
(22, 'smalltinybuttons2', '', ''),
(23, 'smalltinybuttons3', '', ''),
(24, 'displayed_admin_languages', 'en', ''),
(25, 'date_format', '%Y.%m.%d', ''),
(26, 'force_lang_urls', '0', ''),
(27, 'tinyblockformats', 'p,h2,h3,h4,h5,pre,div', ''),
(28, 'article_allowed_tags', 'h2,h3,h4,h5,h6,em,img,iframe,table,object,thead,tbody,tfoot,tr,th,td,param,embed,map,p,a,ul,ol,li,br,b,strong', ''),
(29, 'filemanager_file_types', 'gif,jpe,jpeg,jpg,png,flv,mpeg,mpg,mp3,pdf', ''),
(30, 'default_admin_lang', 'en', ''),
(31, 'upload_autostart', '1', ''),
(32, 'resize_on_upload', '1', ''),
(33, 'picture_max_width', '1200', ''),
(34, 'picture_max_height', '1200', ''),
(35, 'upload_mode', '', ''),
(36, 'no_source_picture', 'default.png', ''),
(37, 'enable_backend_tracker', '0', ''),
(38, 'backend_ui_style', 'original', ''),
(39, 'notification', '1', ''),
(40, 'notification_date', '', ''),
(41, 'site_title', 'Ionize CMS Demo', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `tag_name`) VALUES
(1, 'Content Management'),
(2, 'development'),
(3, 'company'),
(4, 'services');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE IF NOT EXISTS `tracker` (
  `id_user` int(11) unsigned NOT NULL,
  `ip_address` varchar(32) DEFAULT NULL,
  `element` varchar(50) DEFAULT NULL,
  `id_element` int(11) DEFAULT NULL,
  `last_time` datetime DEFAULT NULL,
  `elements` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `parent` char(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `ordering` smallint(6) NOT NULL,
  `view` varchar(50) DEFAULT NULL COMMENT 'view',
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ui_element`
--

CREATE TABLE IF NOT EXISTS `ui_element` (
  `id_ui_element` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_company` int(11) unsigned DEFAULT NULL,
  `type` enum('tab','table','list') DEFAULT NULL,
  `panel` varchar(25) DEFAULT NULL COMMENT 'UI context',
  `title` varchar(50) DEFAULT NULL,
  `ordering` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_ui_element`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ui_element_lk_extend`
--

CREATE TABLE IF NOT EXISTS `ui_element_lk_extend` (
  `id_ui_element` int(11) unsigned NOT NULL,
  `id_extend` int(11) NOT NULL DEFAULT '0',
  `ordering` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_ui_element`,`id_extend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE IF NOT EXISTS `url` (
  `id_url` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_entity` int(11) unsigned NOT NULL,
  `type` varchar(10) NOT NULL,
  `canonical` smallint(1) NOT NULL DEFAULT '0',
  `active` smallint(1) NOT NULL DEFAULT '0',
  `lang` varchar(8) NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `path_ids` varchar(50) DEFAULT NULL,
  `full_path_ids` varchar(50) DEFAULT NULL,
  `creation_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_url`),
  KEY `idx_url_type` (`type`),
  KEY `idx_url_active` (`active`),
  KEY `idx_url_lang` (`lang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=818 ;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id_url`, `id_entity`, `type`, `canonical`, `active`, `lang`, `path`, `path_ids`, `full_path_ids`, `creation_date`) VALUES
(601, 1, 'page', 1, 1, 'en', '404', '1', '1', '2012-12-28 19:56:07'),
(602, 1, 'article', 1, 1, 'en', '404/404', '1/1', '1/1', '2012-12-28 19:56:07'),
(603, 2, 'page', 1, 1, 'en', 'home', '2', '2', '2012-12-28 19:56:07'),
(604, 11, 'article', 1, 1, 'en', 'home/easy-edition', '2/11', '2/11', '2012-12-28 19:56:07'),
(605, 12, 'article', 1, 1, 'en', 'home/multilingual', '2/12', '2/12', '2012-12-28 19:56:07'),
(606, 13, 'article', 1, 1, 'en', 'home/userfriendly', '2/13', '2/13', '2012-12-28 19:56:07'),
(607, 14, 'article', 1, 1, 'en', 'home/template-system', '2/14', '2/14', '2012-12-28 19:56:07'),
(608, 3, 'page', 1, 1, 'en', 'about-ionize-cms', '3', '3', '2012-12-28 19:56:07'),
(609, 15, 'article', 1, 1, 'en', 'about-ionize-cms/about-us-1', '3/15', '3/15', '2012-12-28 19:56:07'),
(610, 4, 'page', 1, 1, 'en', 'contact', '4', '4', '2012-12-28 19:56:07'),
(611, 24, 'article', 1, 1, 'en', 'contact/contact-informations', '4/24', '4/24', '2012-12-28 19:56:07'),
(612, 26, 'article', 1, 1, 'en', 'contact/our-location', '4/26', '4/26', '2012-12-28 19:56:07'),
(613, 29, 'article', 1, 1, 'en', 'contact/send-us-a-message', '4/29', '4/29', '2012-12-28 19:56:07'),
(626, 9, 'page', 1, 1, 'en', 'footer', '9', '9', '2012-12-28 19:56:07'),
(627, 16, 'article', 1, 1, 'en', 'footer/footer-resources', '9/16', '9/16', '2012-12-28 19:56:07'),
(628, 27, 'article', 1, 1, 'en', 'footer/whats-ionize', '9/27', '9/27', '2012-12-28 19:56:07'),
(629, 28, 'article', 1, 1, 'en', 'footer/can-i-help', '9/28', '9/28', '2012-12-28 19:56:07'),
(630, 10, 'page', 1, 1, 'en', 'my-account', '10', '10', '2012-12-28 19:56:07'),
(631, 30, 'article', 1, 1, 'en', 'my-account/not-logged-in', '10/30', '10/30', '2012-12-28 19:56:07'),
(632, 31, 'article', 1, 1, 'en', 'my-account/hello', '10/31', '10/31', '2012-12-28 19:56:07'),
(644, 8, 'page', 1, 1, 'en', 'services', '8', '8', '2014-10-14 03:45:13'),
(645, 17, 'article', 1, 1, 'en', 'services/some-of-our-services', '8/17', '8/17', '2014-10-14 03:45:13'),
(646, 18, 'article', 1, 1, 'en', 'services/service-1', '8/18', '8/18', '2014-10-14 03:45:13'),
(647, 19, 'article', 1, 1, 'en', 'services/service-2', '8/19', '8/19', '2014-10-14 03:45:14'),
(648, 20, 'article', 1, 1, 'en', 'services/service-3', '8/20', '8/20', '2014-10-14 03:45:14'),
(655, 17, 'page', 1, 1, 'en', 'search', '17', '17', '2014-10-15 06:39:45'),
(656, 18, 'page', 1, 1, 'en', 'event', '18', '18', '2014-10-16 04:01:47'),
(702, 6, 'page', 1, 1, 'en', 'blog', '6', '6', '2014-10-20 03:15:07'),
(703, 6, 'article', 1, 1, 'en', 'blog/article-2', '6/6', '6/6', '2014-10-20 03:15:07'),
(704, 7, 'article', 1, 1, 'en', 'blog/article-3', '6/7', '6/7', '2014-10-20 03:15:07'),
(705, 8, 'article', 1, 1, 'en', 'blog/article-4', '6/8', '6/8', '2014-10-20 03:15:07'),
(706, 9, 'article', 1, 1, 'en', 'blog/article-5', '6/9', '6/9', '2014-10-20 03:15:07'),
(707, 10, 'article', 1, 1, 'en', 'blog/article-6', '6/10', '6/10', '2014-10-20 03:15:07'),
(724, 22, 'page', 1, 1, 'en', 'testmedia', '22', '22', '2014-10-20 05:28:22'),
(815, 21, 'page', 1, 1, 'en', 'tester', '21', '21', '2014-10-24 09:21:53'),
(816, 44, 'article', 1, 1, 'en', 'tester/tester', '21/44', '21/44', '2014-10-24 09:21:53'),
(817, 45, 'article', 1, 1, 'en', 'tester/testtt', '21/45', '21/45', '2014-10-24 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_role` smallint(4) unsigned NOT NULL,
  `join_date` timestamp NULL DEFAULT NULL,
  `last_visit` timestamp NULL DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `screen_name` varchar(50) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `gender` smallint(1) DEFAULT NULL COMMENT '1: Male, 2 : Female',
  `password` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `salt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `join_date`, `last_visit`, `username`, `screen_name`, `firstname`, `lastname`, `birthdate`, `gender`, `password`, `email`, `salt`) VALUES
(1, 1, '2014-10-12 20:12:53', '2014-10-24 02:21:16', 'admin', 'zon zone', 'zon', 'zone', NULL, NULL, '5hlpgmFNlOQWOm4+61NHnw==', 'zon@zon.com', 'cac49994056d1890'),
(2, 5, '2014-10-19 19:55:06', NULL, 'admin@ad.com', 'testest', 'test', 'teste', NULL, NULL, 'WlfHzRT9gEecedh0u6w5', 'admin@ad.com', '92013a5463a798d7'),
(3, 4, '2014-10-19 19:56:06', '2014-10-19 19:57:38', 'achmadramdhanqc@gmail.com', 'test', 'test', 'teste', NULL, NULL, 'd0eV6B5nCWAqnGcaJDKZ', 'achmadramdhanqc@gmail.com', '430a5dd41d54b397');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
