-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 12:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `text` varchar(300) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `text`, `ans1`, `ans2`, `ans3`) VALUES
(1, 'What does PHP stand for?', 'Personal Hypertext Protocol', 'Private Home Page', 'PHP: Hypertext Processor'),
(2, 'PHP server scripts are surrounded by delimiters, which?', '<?php...?>', '<&>...</&>', '<script><script>'),
(3, 'How do you write \"Hello World\" in PHP?', 'echo \"Hello World\"', 'print(\"hello World\")', 'cout << \"Hello world\"'),
(4, 'All variables in PHP start with which symbol?', '$', '%', '&'),
(5, 'What is the correct way to end a PHP statement?', ';', 'New Line', '.'),
(6, 'How do you get information from a form that is submitted using the \"get\" method?', '$_GET[]', 'request.get', 'request.post'),
(7, 'What is the correct way to include the file \"time.inc\"?', 'include \"time.inc\"', 'include file=time.inc', 'import time.inc'),
(8, 'What is the correct way to create a function in PHP?', 'function myFunction()', 'create myFunction()', 'create function myFunction()'),
(9, 'What is the correct way to add 1 to the $count variable?', '$count++;', '++count', '+count'),
(10, 'What is a correct way to add a comment in PHP?', '/*..*/', '--', '<comment>...</comment>');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `score` int(5) NOT NULL,
  `endedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
