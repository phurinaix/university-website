-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 08:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tu_pattaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityeng`
--

CREATE TABLE `activityeng` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(50) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activityeng`
--

INSERT INTO `activityeng` (`id`, `date`, `topic`, `detail`) VALUES
(9, '0000-00-00', 'à¸Ÿà¸«à¸', 'à¹†à¹„à¸³à¹†à¹„à¸³'),
(10, '2012-02-04', 'Today', 'asdcxvcxvbxcvber'),
(11, '2012-02-04', 'Today', 'asdcxvcxvbxcvber'),
(12, '0000-00-00', 'wtwt', 'rwtret'),
(13, '2011-03-04', 'à¸§à¸±à¸™à¸™à¸µà¹‰à¸à¸´à¸ˆà¸à¸£à¸£à¸¡à¸µà¹ˆà¸˜à¸', 'à¸£à¸²à¸¢à¸¥à¸°à¹€à¸­à¸µà¸¢à¸”');

-- --------------------------------------------------------

--
-- Table structure for table `activitythai`
--

CREATE TABLE `activitythai` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(50) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitythai`
--

INSERT INTO `activitythai` (`id`, `date`, `topic`, `detail`) VALUES
(2, '2012-08-08', 'à¸à¸µà¸¬à¸²à¸ªà¸µ', 'à¸Ÿà¸«à¸à¸”à¸Ÿà¸«à¸à¸”à¸«à¸à¸­à¸œà¸­à¸›à¸´à¸­');

-- --------------------------------------------------------

--
-- Table structure for table `flogin`
--

CREATE TABLE `flogin` (
  `id` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flogin`
--

INSERT INTO `flogin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `lifeeng`
--

CREATE TABLE `lifeeng` (
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifeeng`
--

INSERT INTO `lifeeng` (`text`) VALUES
('sadfsdgsg'),
('safadwfwe'),
('qqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `topic`, `text`) VALUES
(19, 'news3.JPG', 'à¸à¸”à¸à¸«à¸”', 'adsfdsfsdf'),
(20, '', 'fsf', ''),
(21, '2.JPG', 'dfdf', 'fadf'),
(22, 'controller.jpg', '', ''),
(23, 'admin2.jpg', 'news new', ''),
(24, 'admin1.jpg', 'asd', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `newsth`
--

CREATE TABLE `newsth` (
  `id` int(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsth`
--

INSERT INTO `newsth` (`id`, `image`, `topic`, `text`) VALUES
(1, '', 'à¸«à¸±à¸§à¸‚à¹‰à¸­ à¹à¸à¹‰à¹„à¸‚', 'à¸Ÿà¸à¸«à¸”à¸Ÿà¸«à¸à¸”à¸Ÿà¸«à¸à¸­à¸Ÿà¸­'),
(2, '2.JPG', 'à¸‚à¹ˆà¸²à¸§à¸ªà¸²à¸£à¸—à¸µà¹ˆ 1', 'à¸²à¸«à¸”à¹ˆà¹€à¸²à¸«à¹ˆà¸à¹€ à¸²à¸§à¸«à¹ˆà¸²à¸§à¸«à¸à¹ˆà¸²à¸ªà¸Ÿà¸«à¸à¹€à¹ˆà¸²à¸«à¸à¹€');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `neng` varchar(200) NOT NULL,
  `nthai` varchar(200) NOT NULL,
  `peng` varchar(200) NOT NULL,
  `pthai` varchar(200) NOT NULL,
  `section` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `image`, `neng`, `nthai`, `peng`, `pthai`, `section`, `status`) VALUES
(1, 'admin4.jpg', 'asdfasdgasdg', 'qwetwetwet', 'asgasgasg', 'asdgasdgsag', '2', 0),
(5, 'admin2.jpg', 'asdf', 'asd', 'xvcbvcxb', 'xcvbxcvbxvb', '1', 0),
(6, 'ulm1.jpg', 'adsfasdf', 'uyiti', 'tyityi', 'uoipiop', '1', 0),
(7, 'admin5.jpg', 'vbnb', 'vbmnm', 'mm', 'm,', '5', 0),
(8, 'sa1.jpg', 'cc', 'cc', 'vv', 'bb', '1', 0),
(9, 'ga1.jpg', 'asdasd', 'à¸™à¸²à¸‡à¸ªà¸²à¸§ à¸Šà¸¥à¸¥à¸”à¸² à¸„à¸²à¸™à¸ˆà¸±à¸™à¸—à¸¶à¸', 'asdasd', 'à¸šà¸±à¸à¸Šà¸µ', '2', 0),
(10, 'admin2.jpg', 'dasfads', 'fadsgadg', 'asdg', 'asdgadg', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityeng`
--
ALTER TABLE `activityeng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activitythai`
--
ALTER TABLE `activitythai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flogin`
--
ALTER TABLE `flogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsth`
--
ALTER TABLE `newsth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activityeng`
--
ALTER TABLE `activityeng`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `activitythai`
--
ALTER TABLE `activitythai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `flogin`
--
ALTER TABLE `flogin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `newsth`
--
ALTER TABLE `newsth`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
