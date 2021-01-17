-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 09:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitclubdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Administrative Notification'),
(2, 'Academic Notification'),
(3, 'Event Notification');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`) VALUES
(1, 'ALL'),
(2, 'CSE'),
(3, 'ISE'),
(4, 'EEE'),
(5, 'ECE'),
(6, 'CIVIL'),
(7, 'MECHANICAL');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `category_id` varchar(35) NOT NULL,
  `dept` varchar(35) NOT NULL,
  `sem` varchar(35) NOT NULL,
  `sec` varchar(35) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category_id`, `dept`, `sem`, `sec`, `event_title`, `description`, `contact_user`, `contact_email`, `post_date`) VALUES
(20, 'Event Notification', 'CSE', 'VII SEM', 'ALL', 'Industry Talk On Machine Learning', 'Talk by industry professional on Machine Learning Evaluation Techniques on 15th Jan 2021. ', 'HOD, CSE', 'cse.hod@bit-bangalore.edu.in', '2021-01-10 15:04:23'),
(21, 'Administrative Notification', 'ALL', 'ALL', 'ALL', 'VTU Exam Fee Payment', 'All students are instructed to pay the VTU Fees on or before 12th January 2021. ', 'BIT CASH SECTION', 'bit.cashsection@gmail.com', '2021-01-12 14:36:35'),
(22, 'Academic Notification', 'EEE', 'IV SEM', 'ALL', 'attend online classes', 'All students are requested to attend classes on saturday 20th Jan 2021', 'HOD', 'test@gmail.com', '2021-01-13 09:00:05'),
(24, 'Academic Notification', 'CSE', 'VII SEM', 'ALL', 'Time table', 'Exams have been scheduled from 25th January 2021. Check the files tab for the full schedule ', 'Dr. Gunavathi H.S', 'dr.gunavathi@bit-bangalore.edu.in', '2021-01-17 19:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(3, 'Hello.docx', 9953, 0),
(4, 'abcd.docx', 9953, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`usn`, `name`, `email`, `id`) VALUES
('1bi17cs034', 'Chandan B S D', 'denanathchandan5@gmail.com', 0),
('1BI17CS034', 'Chandan B S D', 'denanathchandan5@gmail.com', 0),
('1BI17CS034', 'Chandan B S D', 'denanathchandan5@gmail.com', 9),
('1bi17cs024', 'Pritosh', 'parit@gmail.com', 9),
('1BI17CS034', 'CHANDAN B S D', 'denanathchandan5@gmail.com', 20),
('1BI17CS024', 'B K Paritosh', 'paritosh@gmail.com', 20),
('1BI17CS001', 'Rahul', 'rahul@gmail.com', 20),
('1BI17CS060', 'Poorna', 'poorna@gmail.com', 20),
('1BI17CS024', 'Paritosh', 'pari@gmail.com', 23);

-- --------------------------------------------------------

--
-- Table structure for table `sec`
--

CREATE TABLE `sec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec`
--

INSERT INTO `sec` (`id`, `name`) VALUES
(1, 'ALL'),
(2, 'A'),
(3, 'B'),
(4, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE `sem` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`id`, `name`) VALUES
(1, 'ALL'),
(2, 'I SEM'),
(3, 'II SEM'),
(4, 'III SEM'),
(5, 'IV SEM'),
(6, 'V SEM'),
(7, 'VI SEM'),
(8, 'VII SEM'),
(9, 'VIII SEM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem`
--
ALTER TABLE `sem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sec`
--
ALTER TABLE `sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sem`
--
ALTER TABLE `sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
