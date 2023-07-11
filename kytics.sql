-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Jul 11, 2023 at 08:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kytics`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_created` tinyint(4) NOT NULL DEFAULT current_timestamp(),
  `is_updated` tinyint(4) NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `category_name`, `description`, `image`, `is_created`, `is_updated`, `is_deleted`) VALUES
(30, 'Medicines', 'abc', 'pills.png', 127, 127, 1),
(33, 'Mobile', 'vivo,oppo,iphone etc', 'Mobile.png', 127, 127, 0),
(35, 'Shoes', 'bata,reebok,jordan', 'shoe.png', 127, 127, 0),
(36, 'Wallets', 'urbarn forest, wildhorn', 'wallets.png', 127, 127, 1),
(37, 'Fashion', 'Jeans wear, ladies wear , kids wear', 'fashion.png', 127, 127, 1),
(40, 'Medicines', 'Aspirin,xyz', 'pills.png', 127, 127, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `description`, `price`) VALUES
(1, '33', 'oppo a50', '9999'),
(6, '33', 'iphone 14 pro max', '14900'),
(11, '35', 'Puma', '5000'),
(12, '37', 'Pant', '999');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Mohan Subudhi', '7077307034', 'mohan@gmail.com', '$2y$10$LlUhsSrSJIgsjwVNN0qwRubU0DQmiCVLReZkk4si0jy4YL.Ki1buO'),
(3, 'Sitakant Behera', '7809499904', 'sitakant@gmail.com', '$2y$10$LiY7mq9mVLckCNJt4EwzMejFw88BAjMtQUth0dvbUey4o7Ji6wAm.'),
(4, 'Deepak Kumar', '89174562326', 'deepak@gmail.com', '$2y$10$pbJtZs9F0ZI3Q.hCHQhfCubM5XsHNzdASWF6XO7dLMWTONDjKYfBG'),
(5, 'Santosh kumar', '7381211366', 'santosh@gmail.com', '$2y$10$lMsg9.4PtwTfZsI1OPuU5OqG8Vn7CYMVOxigmOBnkXtJ/NsPx8Wg6'),
(6, 'Jitendra kumar', '7077307065', 'jitendrakumar@gmail.com', '$2y$10$DoHa8vM2rlUA6/6bopjhBedyQ4IvnPqAXqP.rx.XACsiUd5ja82QS'),
(7, 'Priya Ranjan Sahoo', '9861561231', 'priya@gmail.com', '$2y$10$dRz2oGi7PEkdcAh/EkHiMuCknc2timo8EEvaiUv8dKcYKSC3CB./2'),
(8, 'Ritik ranjan', '8978123654', 'ritik@gmail.com', '$2y$10$V3RLUCFmwtUsrIKiBJld7Okm8oX1LB5UBGAFEKKB/gwrRTHRCbSqu'),
(9, 'ashirbad parida', '07077307034', 'asu@gmail.com', '$2y$10$F1FD6sSpU1mF.ZiVfafV5.HunQij4sRBCUSA9Xm4yh/DB95Z2szoi'),
(10, 'mansi', '789545222', 'mansi@gmail.com', '$2y$10$ta3qfxZSudnaDx.04zJ3SuOGmKtT8tQWYhX.1ph9NlcnPO8zCIPv2'),
(11, 'Rakesh mohanty', '891745632', 'rakesh@gmail.com', '$2y$10$9YDUQkxFdhQ9NhqUssNqUOcNtUHuzcYHPsx077K8FKWjkJfmz4iyi'),
(12, 'Roshan kumar Sahoo', '7004569822', 'roshan@gmail.com', '$2y$10$E6FbD7zsYSJJENxNlZILkO8U7wXl.LsyQEu/KO/e2CP18mugIQdnS'),
(13, 'test1', '45255222', 'test@gmail.com', '$2y$10$vHdba4ZTxykvEYCTI0o4yuf.ozap5GviVmitC1PTN3KvgG6F.iKLa'),
(14, 'gdcgyg', '59944', 'magyu@gam.com', '$2y$10$4oAOJrX1KQBImKgLIp5sa.1uGbdW1G2Avh4ODuHGliiz5xbmTnlye'),
(15, 'Rasmi behera', '7089465321', 'rasmi@gmail.com', '$2y$10$zn8m08amTqs1BSLCBiMwJut.LH7.D2.UoEfW1xdxtYFflVCH5rLle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
