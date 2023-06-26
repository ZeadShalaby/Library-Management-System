-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 سبتمبر 2022 الساعة 23:44
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`first`, `last`, `email`, `password`, `contact`) VALUES
('zead', 'shalaby', 'zead shalaby@gmail.com', 'zead10/5', '015530645');

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `bid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `department`) VALUES
(1, 'fantasy book', 'George Martin', '10', 'fantasy', 2000, 'e11'),
(2, 'mystery book', 'zead shalaby', '11', 'mystery', 500, 'e10'),
(3, 'adventure book', 'Mitchell', '10', 'adventure', 400, 'e10'),
(4, 'romantic book', 'jane austen', '4', 'romantic', 5000, 'e4'),
(5, 'philosophy book', 'Fyodor_Dostoevsky', '2', 'philosophy ', 400, 'e2'),
(6, 'space book', ' Stephen Hawking', '1', 'space', 20, 'e1'),
(7, 'space book', 'Stephen Hawking', '2', 'space', 500, 'e22'),
(8, 'space book', 'Stephen Hawking', '3', 'space', 200, 'e7'),
(9, 'fantasy book', 'George Martin', '2', 'fantasy', 700, 'e2'),
(10, 'fantasy book', 'George Martin', '3', 'fantasy', 200, 'e3'),
(11, 'philosophy book', 'Fyodor_Dostoevsky', '2', 'philosophy ', 200, 'e2'),
(12, 'philosophy book', 'Fyodor_Dostoevsky', '3', 'philosophy ', 700, 'e3'),
(13, 'adventure book', 'Mitchell', '2', 'adventure', 50, 'e2'),
(14, 'adventure book', 'Mitchell', '3', 'adventure', 1000, 'e3'),
(15, 'mystery book', 'zead shalaby', '2', 'mystery', 100, 'e2'),
(16, 'mystery book', 'zead shalaby', '3', 'mystery', 350, 'e3'),
(17, 'romantic book', 'jane austen', '2', 'romantic', 200, 'e2'),
(18, 'romantic book', 'jane austen', '3', 'romantic', 150, 'e3');

-- --------------------------------------------------------

--
-- بنية الجدول `buy`
--

CREATE TABLE `buy` (
  `id` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `buy`
--

INSERT INTO `buy` (`id`, `bookname`, `authors`, `number`, `email`) VALUES
('B', 'mystery book', 'zead shalaby', 2, 'alaa faezey@gmail.com'),
('A', 'fantasy book', 'George Martin', 3, 'fras waled@gmail.com'),
('14', 'adventure book', 'Mitchell', 1, 'joo mousa@gmail.com'),
('4', 'romantic book', 'jane austen', 5, 'salma hamdy@gmail.com'),
('B', 'philosophy book', 'Fyodor_Dostoevsky', 10, 'alaa faezey@gmail.com'),
('C', 'space book', 'Stephen Hawking', 2, 'saeed nour@gmail.com'),
('7', 'philosophy book', 'Fyodor_Dostoevsky', 40, 'saad faiz@gmail.com'),
('1', 'adventure book', 'Mitchell', 12, 'salma hamdy@gmail.com'),
('D', 'romantic book', 'jane austen', 500, 'zezo bebo@gmail.com');

-- --------------------------------------------------------

--
-- بنية الجدول `coment`
--

CREATE TABLE `coment` (
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `coment`
--

INSERT INTO `coment` (`comment`) VALUES
('my email its have a problem'),
('I forgotenc my phone and my gmail'),
('help please i dont kmow what i do about this probleb'),
('my weepsite its not open help please'),
('my email its have a problem help');

-- --------------------------------------------------------

--
-- بنية الجدول `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `student`
--

INSERT INTO `student` (`first`, `last`, `email`, `password`, `contact`) VALUES
('salma', 'hamdy', 'salma hamdy@gmail.com', 'salma20/4', 204277),
('alaa', 'fawzey', 'alaa faezey@gmail.com', 'alaa', 6444),
('fras', 'waled', 'fras waled@gmail.com', 'fras', 204277),
('joo', 'mousa', 'joo mousa@gmail.com', 'joo', 456),
('saeed ', 'nour', 'saeed nour@gmail.com', 'saeed', 1232478),
('saad', 'faiz', 'saad faiz@gmail.com', 'saad', 204277),
('zezo', 'bebo', 'zezo bebo@gmail.com', 'zezo', 204);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
