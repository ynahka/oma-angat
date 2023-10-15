-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 02:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', '', '2018-04-09 07:36:18'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30'),
(9, 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'annjoyceloterte@gmail.com', '', '2023-05-19 12:50:58'),
(10, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'admin2@gmail.com', '', '2023-05-21 05:46:25'),
(17, 'Oma-Angat ', 'e10adc3949ba59abbe56e057f20f883e', 'oma-angat@gmail.com', '', '2023-05-21 07:45:45'),
(18, 'OMA-Market', 'e10adc3949ba59abbe56e057f20f883e', 'omamarket@gmail.com', '', '2023-05-21 07:50:49'),
(19, 'omaSaligao', 'e10adc3949ba59abbe56e057f20f883e', 'omasaligao@gmail.com', '', '2023-05-21 08:07:38'),
(20, 'Omasamuya', 'e10adc3949ba59abbe56e057f20f883e', 'omasamuya@gmail.com', '', '2023-05-21 08:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(57, 15, 'Aguilar Fish Dealer', 'aguilardeal@gmail.com', '09678987656', 'http://aguilardeal.com', '6am', '8pm', 'mon-sat', 'Libon, Albay ', '646786e240c7b.png', '2023-05-19 14:25:38'),
(58, 13, 'Loterte Rice Farm', 'annjoyceloterte@gmail.com', '09206542895', 'http://lotertefarm.com', '7am', '7pm', 'mon-sat', 'P1, Salvacion, Pilar, Sorsogon', '64678ca46d877.png', '2023-05-19 14:50:12'),
(59, 11, 'Ala Fruits Farmville', 'ala@gmail.com', '09876786575', 'http://alafruitsville.com', '9am', '8pm', 'mon-wed', 'Legazpi City', '64678d29bfa42.png', '2023-05-19 14:52:25'),
(60, 12, 'Borbe Vegetable Farm', 'borbs@gmail.com', '09658978990', 'http://borbveges.com', '8am', '6pm', 'mon-sat', 'Pioduran Albay', '64678db6d5894.png', '2023-05-19 14:54:46'),
(61, 14, 'Rich Dairies', 'rich@gmail.com', '09878768907', 'http://richdairies.com', '8am', '8pm', 'mon-fri', 'Sorsogon City', '64678ea617a5c.png', '2023-05-19 14:58:46'),
(67, 23, 'Oma-Angat Marketplace', 'oma-angat@gmail.com', '09127876896', 'http://omaangatmarket.com', '10am', '8pm', 'mon-sat', 'Legazpi City', '6469cc88a6158.jpg', '2023-05-21 07:47:20'),
(68, 23, 'OMA-Market', 'omamarket@gmail.com', '09878786890', 'http://omamarket.com', '7am', '8pm', 'mon-sat', 'Legazpi City', '6469ce16e6454.png', '2023-05-21 07:53:58'),
(69, 23, 'Oma Samuya', 'omasamuya@gmail.com', '09878768908', 'http://omasamuya.com', '8am', '8pm', 'mon-sat', 'Legazpi City', '6469d1e0cbf30.png', '2023-05-21 08:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`d_id`, `rs_id`, `title`, `description`, `price`, `img`) VALUES
(20, 58, 'Jasmin Rice ', 'A type of long-grain white rice, jasmine rice has a subtle floral aroma. When cooked, its texture is somewhere between short grain and basmati rice: light, fluffy with a little stickiness.  Thai fragrant long lasting grain', '325.00', '64679459d55cc.jpg'),
(21, 57, 'Dried Fish/Tuyo (1kg)', 'Perfect breakfast viands with \"sinangag and egg\" along with hot coffee.', '150.00', '64679532e459f.jpg'),
(22, 60, 'Tomatoes/Kamatis', 'Hybrid Tomatoes/Kamatis (1kg)', '69.00', '6467969e66332.png'),
(24, 61, 'Carabao Milk', 'Fresh Carabao Milk available on May 31 (Per Bottle)', '250.00', '646798a453fd7.png'),
(25, 59, 'Avocado', 'Guaranteed fresh and quality', '150.00', '6467990ea3f85.png'),
(31, 66, 'Onion/Sibuyas', 'Red Onion (1kg) per order', '130.00', '6469cb4f697d7.png'),
(32, 67, 'Onion/Sibuyas', 'Red Onion (1kg) per order', '130.00', '6469cc9e83ac1.png'),
(33, 68, 'Onion/Sibuyas', 'Red Onion (1kg) per order', '180.00', '6469ce343b1e3.png'),
(34, 69, 'Onion/Sibuyas', 'Red Onion (1kg) per order', '130.00', '6469d23582e3e.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CodeV` varchar(255) NOT NULL,
  `verification` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Username`, `email`, `Password`, `CodeV`, `verification`) VALUES
(21, 'Aymane00', 'utchihaitachi@gmail.com', 'e09c80c42fda55f9d992e59ca6b3307d', 'de85810448660823aed64cdfbc767ea0', 1),
(26, 'Ann Joyce', 'annjoycellamera.loterte@bicol-u.edu.ph', '9d82a9cd4497e23e3642dedc4fb67ca1be81cc82091e34eb8b5ac2168ec395dc', 'a00d1f3984513d13e86e8a2ae1d8522cfd9a3f4ce3244c3e06fb8e6aaa84b4de', 0);

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(11, 'Fruits', '2023-05-19 13:34:36'),
(13, 'Rice', '2023-05-19 13:35:10'),
(14, 'Dairies', '2023-05-19 13:35:20'),
(15, 'Fish', '2023-05-19 13:35:31'),
(17, 'Poultry Products', '2023-05-21 05:49:24'),
(23, 'Vegetables', '2023-05-21 07:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(31, 'navjot789', 'navjot', 'singh', 'ns949405@gmail.com', '9041240385', '6d0361d5777656072438f6e314a852bc', 'badri col phase 2', 1, '2018-04-18 10:05:03'),
(32, 'navjot890', 'nav', 'singh', 'nds949405@gmail.com', '6232125458', '6d0361d5777656072438f6e314a852bc', 'badri col phase 1', 1, '2018-04-18 09:50:56'),
(33, 'joyces234', 'Ann Joyce', 'Loterte', 'annjoyceloterte@gmail.com', '09206542895', 'e10adc3949ba59abbe56e057f20f883e', 'P1, Salvacion', 1, '2023-05-19 17:20:23'),
(34, 'Newbuyer', 'New', 'Buyer', 'Buyer@gmail.com', '09898768907', 'e10adc3949ba59abbe56e057f20f883e', 'Sorsogon City', 1, '2023-05-21 06:19:38'),
(35, 'joyce', 'Ann Joyce', 'Loterte', 'annjoyce@gmail.com', '09878765435', 'e10adc3949ba59abbe56e057f20f883e', 'Pilar, Sorsogon', 1, '2023-05-21 06:28:23'),
(36, 'onebuyer', 'One', 'Buyer', 'onebuyer@gmail.com', '09878765908', 'e10adc3949ba59abbe56e057f20f883e', 'Pilar, Sorsogon', 1, '2023-05-21 07:56:13'),
(37, 'Buyer2', 'Ecommerce', 'Buyer', 'buyer2@gmail.com', '09878690876', 'e10adc3949ba59abbe56e057f20f883e', 'Daraga, Albay', 1, '2023-05-21 08:16:37'),
(38, 'redmonte', 'Red', 'Monte', 'redmonte@gmail.com', '09098767898', 'e10adc3949ba59abbe56e057f20f883e', 'Tondo, Manila', 1, '2023-07-14 12:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(45, 36, 'Onion/Sibuyas', 2, '180.00', NULL, '2023-05-21 07:56:52'),
(48, 37, 'Onion/Sibuyas', 3, '130.00', NULL, '2023-05-21 08:17:12'),
(49, 37, 'Jasmin Rice ', 3, '325.00', NULL, '2023-05-21 08:21:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
