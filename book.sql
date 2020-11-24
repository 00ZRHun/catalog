-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-11-24 17:05:54
-- 服务器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `publications`
--

-- --------------------------------------------------------

--
-- 表的结构 `catalogs`
--

CREATE TABLE `catalogs` (
  `isbn` char(13) NOT NULL,
  `author` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `catalogs`
--

INSERT INTO `catalogs` (`isbn`, `author`, `title`, `price`) VALUES
('123', 'asd', 'zc', '345.00'),
('6754', 'hf', 'lkh', '97.00'),
('9780099533474', 'Charles Dickens', 'The Old Curiosity Shop', '18.41'),
('9780192814968', 'William Shakespeare', 'Romeo and Juliet', '15.94'),
('9780517123201', 'Charles Darwin', 'The Origin of Species', '18.56'),
('9780582506206', 'Jane Austen', 'Pride and Prejudice', '18.11'),
('9781598184891', 'Mark Twain', 'The Adventures of Tom Sawyer', '18.76');

--
-- 转储表的索引
--

--
-- 表的索引 `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
