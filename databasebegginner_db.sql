-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 11:08 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasebegginner_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `insurance_tb`
--

CREATE TABLE `insurance_tb` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `insurancename` varchar(200) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_tb`
--

INSERT INTO `insurance_tb` (`id`, `date`, `insurancename`, `price`) VALUES
(123, '2019-07-19', 'bpjs', 88);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tb`
--

CREATE TABLE `invoice_tb` (
  `id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `invoice_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_tb`
--

INSERT INTO `invoice_tb` (`id`, `customer_id`, `invoice_date`) VALUES
(123, 34534, '2019-07-19'),
(432432, 23423, '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(5432, 'river', 'river');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `id` int(20) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`id`, `productname`, `price`, `stock`) VALUES
(0, 'Phone', 120000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `username`, `password`, `email`) VALUES
(0, 'black', 'black', 'black');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance_tb`
--
ALTER TABLE `insurance_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_tb`
--
ALTER TABLE `invoice_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
