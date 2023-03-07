-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 11:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regisinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `reginfo`
--

CREATE TABLE `reginfo` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `college_major` varchar(100) NOT NULL,
  `college_cgpa` varchar(100) NOT NULL,
  `college_pass_year` int(11) NOT NULL,
  `versity_name` varchar(100) NOT NULL,
  `versity_major` varchar(100) NOT NULL,
  `versity_cgpa` varchar(100) NOT NULL,
  `versity_pass_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reginfo`
--

INSERT INTO `reginfo` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `email`, `phone`, `dob`, `gender`, `address`, `college_name`, `college_major`, `college_cgpa`, `college_pass_year`, `versity_name`, `versity_major`, `versity_cgpa`, `versity_pass_year`) VALUES
(57, 'fdd', 'fdsf', 'dsf', 'fds', 'fds', '453', '2023-03-23', 'male', 'gdfg', 'gdf', 'fg', 'gd', 2020, 'gdfg', 'gf', 'df', 2018),
(58, 'ruhul', 'kuddus', 'abu bakar ', 'nasia akter', 'ruhul@gmail.com', '40840543989', '2023-03-13', 'male', 'feni, parashuram', 'fci', 'cst', '3.80', 2018, 'daffodi', 'fci', '3.85', 2020),
(59, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', 0, '', '', '', 0),
(60, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(79, 'gfdg', 'dfgfd', 'fd'),
(80, 'gfdg', 'dfgfd', 'fd'),
(81, 'gfdg', 'dfgfd', 'fd'),
(82, '', '', ''),
(83, 'gfdg', 'dfgfd', 'fd'),
(84, 'gfdg', 'dfgfd', 'fd'),
(85, 'gfdg', 'dfgfd', 'fd'),
(86, '', '', ''),
(87, 'gfdg', 'dfgfd', 'fd'),
(88, 'gfdg', 'dfgfd', 'fd'),
(89, 'gfdg', 'dfgfd', 'fd'),
(90, 'gfdg', 'dfgfd', 'fd'),
(91, 'gfdg', 'dfgfd', 'fd'),
(92, '', '', ''),
(93, 'gfdg', 'dfgfd', 'fd'),
(94, 'gfdg', 'dfgfd', 'fd'),
(95, 'gfdg', 'dfgfd', 'fd'),
(96, '', '', ''),
(97, 'gfdg', 'dfgfd', 'fd'),
(98, 'gfdg', 'dfgfd', 'fd'),
(99, '', '', ''),
(100, 'gfdg', 'dfgfd', 'fd'),
(101, '', '', ''),
(102, 'gfdg', 'dfgfd', 'fd'),
(103, 'gfdg', 'dfgfd', 'fd'),
(104, '', '', ''),
(105, 'mub', 'dfgfd', 'fd'),
(106, 'mub', 'dfgfd', 'fd'),
(107, '', '', ''),
(108, 'mub', 'hgfh', 'fd'),
(109, '', 'hgfh', ''),
(110, 'mub', 'ttt', 'fd'),
(111, '', 'ttt', ''),
(112, 'mub', 'ttt', 'tt'),
(117, 'fsfsdf', 'fdsf', 'fsda'),
(118, 'fsfsdf', 'fdsf', 'fsda'),
(119, 'fsfsdf', 'fdsf', 'fsda'),
(120, 'fsfsdf', 'fdsf', 'fsda'),
(121, '', '', ''),
(122, 'fsfsdf', 'fdsf', 'fsda'),
(123, '', '', ''),
(124, 'fsfsdf', 'fdsf', 'fsda'),
(125, 'fsfsdf', 'fdsf', 'fsda'),
(126, 'fsfsdf', 'fdsf', 'fsda'),
(127, 'fsfsdf', 'fdsf', 'fsda'),
(130, 'fsfsdf', 'fdsf', 'fsda'),
(131, '', '', ''),
(132, 'fsfsdf', 'fdsf', 'fsda'),
(133, 'fsfsdf', 'fdsf', 'fsda'),
(134, 'fsfsdf', 'fdsf', 'fsda'),
(135, 'fsfsdf', 'fdsf', 'fsda'),
(137, 'fsfsdf', 'fdsf', 'fsda'),
(138, 'fsfsdf', 'fdsf', 'fsda'),
(139, 'fsfsdf', 'fdsf', 'fsda'),
(140, 'fsfsdf', 'fdsf', 'fsda'),
(141, 'fsfsdf', 'fdsf', 'fsda'),
(143, 'fsfsdf', 'fdsf', 'fsda'),
(144, 'fsfsdf', 'fdsf', 'fsda'),
(145, 'fsfsdf', 'fdsf', 'fsda'),
(146, 'fsfsdf', 'fdsf', 'fsda'),
(147, 'fsfsdf', 'fdsf', 'fsda'),
(152, 'gfdg', 'dfs', 'fds'),
(153, 'gfdg', 'dfs', 'fds'),
(154, 'gfdg', 'dfs', 'fds'),
(155, 'fsfsdf', 'fdsf', 'fsda'),
(158, 'fsfsdf', 'fdsf', 'fsda'),
(161, 'fsfsdf', 'fdsf', 'fsda'),
(163, 'fsfsdf', 'fdsf', 'fsda'),
(164, 'fsfsdf', 'fdsf', 'fsda'),
(166, 'fsfsdf', 'fdsf', 'fsda'),
(167, 'fsfsdf', 'fdsf', 'fsda'),
(169, 'fsfsdf', 'fdsf', 'fsda'),
(171, 'fsfsdf', 'fdsf', 'fsda'),
(172, 'fsfsdf', 'fdsf', 'fsda'),
(174, 'fsfsdf', 'fdsf', 'fsda'),
(179, 'md ', 'ruhul', 'kuddus'),
(180, 'md ', 'ruhul', 'kuddus'),
(183, 'ruhul kuddus', 'ruhulkudduseasin@gmail.com', 'easin255258'),
(184, 'ruhul kuddus', 'ruhulkudduseasin@gmail.com', ''),
(185, 'dfsf d', 'dsfa d', 'dsa d'),
(190, 'dfsf d', 'dsfa d', 'dsa d'),
(191, 'dfsf d', 'dsfa d', 'dsa d'),
(192, 'ruhul kuddus', 'ruhulkudduseasin@gmail.com', 'dd'),
(193, 'ruhul kuddus', 'ruhulkudduseasin@gmail.com', 'dd'),
(194, 'ruhul kuddus', 'ruhulkudduseasin@gmail.com', 'dd'),
(195, 'ruhul kuddus ddfsdf', 'ruhulkudduseasin@gmail.com d', 'dd d'),
(207, 'adsad', '', ''),
(208, 'adsad', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reginfo`
--
ALTER TABLE `reginfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reginfo`
--
ALTER TABLE `reginfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
