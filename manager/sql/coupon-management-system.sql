-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 04:51 PM
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
-- Database: `coupon-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `coupon_display_msg` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_code`, `offer_id`, `coupon_display_msg`, `status`, `created_by`) VALUES
(2, '5fe8aefd41f82', 1, 'New Year Offer', 'SENT', 'anika'),
(3, '5fe8aefd68a09', 1, 'New Year Offer', 'ACTIVE', 'anika'),
(4, '5fe8aefd7e44f', 1, 'New Year Offer', 'ACTIVE', 'anika'),
(5, '5fe8aefd8e48f', 1, 'New Year Offer', 'ACTIVE', 'anika'),
(6, '5fe8aefd95b23', 1, 'New Year Offer', 'ACTIVE', 'anika'),
(7, '5fe8b0d5d8b11', 3, 'Crismas Offer', 'ACTIVE', 'anika'),
(8, '5fe8b0d615b57', 3, 'Crismas Offer', 'ACTIVE', 'anika'),
(9, '5fe8b0d6231d8', 3, 'Crismas Offer', 'ACTIVE', 'anika'),
(10, '5fedf0ccf2659', 2, 'Pohela Falgun', 'SENT', 'anika'),
(11, '5fedf0cd22aeb', 2, 'Pohela Falgun', 'ACTIVE', 'anika'),
(12, '5fedf0cd29a62', 2, 'Pohela Falgun', 'ACTIVE', 'anika');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `address`, `age`) VALUES
(1, 'Anika', 'Tabassum', 'Savar', 20),
(2, 'Pushpo', 'Datta', 'Badda', 24),
(3, 'Nusrat', 'Jahan', 'Gazipur', 27),
(4, 'Misir', 'Ali', 'Dhanmondi', 50),
(5, 'Joty', 'Islam', 'Dhaka', 20),
(6, 'Charlie', 'Chaplin', 'Germany', 50);

-- --------------------------------------------------------

--
-- Table structure for table `customer_transaction`
--

CREATE TABLE `customer_transaction` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_transaction`
--

INSERT INTO `customer_transaction` (`id`, `customer_id`, `product_id`, `price`, `quantity`, `total_price`, `date`) VALUES
(1, 1, 1, 5000, 1, 5000, '2020-11-03'),
(2, 2, 5, 2500, 2, 5000, '2021-01-01'),
(3, 3, 6, 3000, 1, 3000, '2021-01-02'),
(4, 4, 5, 2500, 1, 2500, '2021-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(15) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `user_name`, `password`, `type`) VALUES
(1, 'anika', 'anika', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `offer_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount_amount` int(11) NOT NULL,
  `min_purchase_amount` int(11) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `offer_name`, `type`, `start_date`, `end_date`, `discount_amount`, `min_purchase_amount`, `created_by`) VALUES
(3, 'Winter Offer', 'PERCENTAGE', '2020-10-01', '2021-02-28', 10, 5000, 'anika'),
(4, 'New Year Offer', 'PERCENTAGE', '2020-12-02', '2021-01-31', 20, 10000, 'anika'),
(5, 'Pohela Falgun ', 'PERCENTAGE', '2020-12-01', '2020-12-04', 10, 10000, 'anika'),
(7, 'abc', 'PERCENTAGE', '2021-01-03', '2021-01-26', 10, 10000, 'anika');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_type`, `quantity`, `price`) VALUES
(1, 'Jacket', 'WINTER DRESS', 100, 5000),
(3, 'Hudi', 'WINTER DRESS', 50, 500),
(4, 'Plazo', 'SUMMER DRESS', 50, 800),
(5, 'Jeans', 'ALL SEASON', 100, 2500),
(6, 'Sari', 'ALL SEASON', 100, 3000),
(7, 'Kurti', 'SUMMER DRESS', 30, 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_transaction`
--
ALTER TABLE `customer_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_transaction`
--
ALTER TABLE `customer_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
