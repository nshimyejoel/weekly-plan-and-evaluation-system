-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2018 at 09:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(7) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `status`) VALUES
(23, 'nshimye joel', 'nshimye1nshimye@gmail.com', '123456', '1'),
(29, 'joel', 'joel@gmail.com', '123456', '1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `room` int(11) NOT NULL,
  `regdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depid`, `name`, `room`, `regdate`) VALUES
(4, 'car insurance', 1, '2018-06-21'),
(5, 'life insurance', 2, '2018-06-21'),
(6, 'fire insurance', 3, '2018-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telphonenumber` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `dateofbirth` varchar(30) NOT NULL,
  `jobtitle` varchar(40) NOT NULL,
  `department` varchar(50) NOT NULL,
  `registereddate` varchar(50) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fullname`, `address`, `telphonenumber`, `email`, `gender`, `maritalstatus`, `dateofbirth`, `jobtitle`, `department`, `registereddate`, `status`) VALUES
(2, 'mucyo joshua', ' kigali/nyamirambo', 788453812, 'mucyo@gmail.com', 'Male', 'single', '2018-05-09', 'chief department', 'kitchen', ' 2018-05-22', '1'),
(4, 'nshimye joel', ' masaka', 722527331, 'nshimye@yahoo.com', 'Male', 'married', '2018-05-07', 'cooker', 'kitchen', ' 2018-05-27', '1'),
(5, 'umuringa joan', ' kigali/kabuga', 788453812, 'umuringajoan@gmail.com', 'Female', 'single', '2002-02-27', 'manager', 'software production', ' 2018-05-19', '1'),
(6, 'claudia mirembe', ' usa/washington dc', 1239033849, 'claudiamirembe@yahoo.com', 'Female', 'single', '1997-06-26', 'superviser', 'IT', ' 2018-05-17', '1'),
(7, 'mucoma', ' mucoma', 8889398, 'mucoma@gmail.com', 'Male', 'married', '2018-07-10', 'head of department', 'car insurance', ' 2018-07-28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(20) NOT NULL,
  `days` varchar(30) NOT NULL,
  `worktobedone` varchar(50) NOT NULL,
  `expectedoutcomes` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `planid` int(10) NOT NULL,
  `result` int(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `days`, `worktobedone`, `expectedoutcomes`, `status`, `planid`, `result`) VALUES
(175, 'monday', 'boss', 'boss', 1, 153, -1),
(176, 'mana', 'mana', 'mana', 1, 154, -1),
(177, 'fej', 'nmfbmd', 'dfbd', 1, 155, -1),
(178, 'jkd', 'kjd', 'jk', 2, 157, -1),
(179, 'hjvj', 'vnm', 'vnb', 1, 158, -1),
(180, 'nvcn', 'cvn', ' hg,h', 1, 159, -1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quality` varchar(225) NOT NULL,
  `work` varchar(225) NOT NULL,
  `attitude` varchar(225) NOT NULL,
  `job` varchar(225) NOT NULL,
  `depid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `date`, `name`, `quality`, `work`, `attitude`, `job`, `depid`) VALUES
(12, '21-06-2018 06:06:37', 'nshimye joel', 'ui', 'kc', 'kdic', 'ckd', 0),
(13, '26-06-2018 08:06:52', 'mucyo joshua', 'hbj', 'jk', 'jk', 'kj', 0),
(14, '26-06-2018 08:06:51', 'umuringa joan', 'hj', 'kj', 'jh', 'kh', 0),
(15, '26-06-2018 10:06:44', 'umuringa joan', 'dwkj', 'le', 'lked', 'lke', 6),
(16, '14-07-2018 11:07:39', 'nshimye joel', 'klsnlnlf', 'nflek', 'fel', 'foej', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usernames` varchar(50) NOT NULL,
  `passwords` varchar(8) NOT NULL,
  `emails` varchar(30) NOT NULL,
  `fullnames` varchar(50) NOT NULL,
  `status` varchar(2) NOT NULL,
  `depid` varchar(40) NOT NULL,
  `chefdep` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usernames`, `passwords`, `emails`, `fullnames`, `status`, `depid`, `chefdep`) VALUES
(36, 'joel', 'rwanda', 'joel@gmail.com', 'nshimye joel', '1', '6', 0),
(37, 'joshua', 'rwanda', 'joshua@gmail.com', 'mucyo joshua', '1', '4', 0),
(38, 'lutgarde', 'lutgarde', 'lutgarde@gmail.com', 'uwambaza lutgarde', '1', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `weeklyplan`
--

CREATE TABLE `weeklyplan` (
  `planid` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `startdate` varchar(30) NOT NULL,
  `enddate` varchar(30) NOT NULL,
  `depid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeklyplan`
--

INSERT INTO `weeklyplan` (`planid`, `user_id`, `startdate`, `enddate`, `depid`) VALUES
(157, 36, '2018-08-01 06:08:59', '2018-08-01 06:08:59', '6'),
(158, 36, '2018-08-01 06:08:16', '2018-08-01 06:08:16', '6'),
(159, 37, '2018-08-01 06:08:10', '2018-08-01 06:08:10', '4'),
(160, 37, '2018-08-01 06:08:33', '2018-08-01 06:08:33', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weeklyplan`
--
ALTER TABLE `weeklyplan`
  ADD PRIMARY KEY (`planid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `weeklyplan`
--
ALTER TABLE `weeklyplan`
  MODIFY `planid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
