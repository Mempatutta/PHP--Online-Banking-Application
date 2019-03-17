-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 09:49 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(30) NOT NULL,
  `details` text NOT NULL,
  `amount` bigint(255) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `details`, `amount`, `user`) VALUES
(62, '', 0, 'bc'),
(63, '', 12000, 'bc'),
(64, 'pay', 2000, 'ben'),
(65, 'bill', -30, 'ben'),
(66, 'pay phone', 30, 'ad'),
(67, '', -5, 'ad'),
(68, '', 30, '123'),
(69, 'lottery win', 12345, 'sam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `transaction_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `address`, `phone_number`, `transaction_time`) VALUES
(10, 'ben', '73675debcd8a436be48ec22211dcf44fe0df0a64', '', 0, '2019-01-03 11:21:59'),
(11, 'bc', '5b2505039ac5af9e197f5dad04113906a9cf9a2a', 'canada', 604, '2019-01-03 17:37:21'),
(15, 'ad', '4aeb195cd69ed93520b9b4129636264e0cdc0153', '907 Ave', 778, '2019-01-03 17:55:44'),
(16, 'sam', 'f16bed56189e249fe4ca8ed10a1ecae60e8ceac0', '123Ave', 778604, '2019-01-03 18:02:07'),
(17, 'ont', '5b78082a866a522dc2faed3435e672c81a5008a6', '', 0, '2019-01-03 18:03:57'),
(18, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '800 ave', 604, '2019-01-03 19:16:41'),
(19, 'john', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', '896 kingGeorge', 778604, '2019-01-04 11:39:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
