-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 11:51 AM
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
-- Database: `omaangatdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `cart_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `totalamt` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `status` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `categoryname` varchar(300) NOT NULL,
  `date_added` date NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `categoryname`, `date_added`, `datetime`) VALUES
(1, 'C-0000001', 'Vegetables', '2023-12-11', '2023-12-11 21:42:01'),
(2, 'C-0000002', 'Fruits', '2023-12-11', '2023-12-11 21:42:58'),
(3, 'C-0000003', 'Grains', '2023-12-11', '2023-12-11 21:43:26'),
(4, 'C-0000004', 'Dairies & Eggs', '2023-12-11', '2023-12-11 21:44:16'),
(5, 'C-0000005', 'Fats & Oils', '2023-12-11', '2023-12-11 21:44:44'),
(6, 'C-0000006', 'Processed Goods', '2023-12-11', '2023-12-11 21:45:18'),
(7, 'C-0000007', 'Dried Fish', '2023-12-11', '2023-12-11 21:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `message` text NOT NULL,
  `sendto` varchar(100) NOT NULL,
  `status` bigint(20) NOT NULL DEFAULT 1,
  `type` varchar(100) NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp(),
  `productID` text NOT NULL,
  `notif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `cart_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `shipfee` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `totalamt` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `orderstatus` varchar(100) NOT NULL,
  `deliverystat` varchar(100) NOT NULL,
  `paymenttype` varchar(100) NOT NULL,
  `paymentstat` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  `date_shipped` date NOT NULL,
  `date_received` date NOT NULL,
  `date_completed` date NOT NULL,
  `rated` tinyint(4) NOT NULL DEFAULT 0,
  `DATETIME_LOG` datetime DEFAULT current_timestamp(),
  `orderstatus2` text NOT NULL,
  `courier` text NOT NULL,
  `trackingnumber` text NOT NULL,
  `notif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) NOT NULL,
  `payment_id` varchar(150) NOT NULL,
  `paymenttype` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `amount` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `refnumber` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `imagename` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `post_id` varchar(150) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `posttitle` varchar(300) NOT NULL,
  `postdescription` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `imagename` varchar(500) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_details`
--

CREATE TABLE `post_details` (
  `id` bigint(20) NOT NULL,
  `post_id` varchar(150) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `comment` text NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `seller_id` varchar(100) NOT NULL,
  `productname` varchar(500) NOT NULL,
  `productdesc` text NOT NULL,
  `price` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `quantity` int(11) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_category`
--

CREATE TABLE `products_category` (
  `id` bigint(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_image`
--

CREATE TABLE `products_image` (
  `id` bigint(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `imagename` varchar(300) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product_id` varchar(150) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `tracking_id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `middlename` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp(),
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `user_id`, `username`, `password`, `usertype`, `firstname`, `middlename`, `lastname`, `status`, `date_added`, `DATETIME_LOG`, `code`) VALUES
(64, 'user-0000001', 'OmaangatAdmin', '$2y$10$qnQZ1QxwNZ3nxAqG0eYth.MBfW3YI89NpY0TN..PWkKZzQxYDUI8e', 'CUSTOMER', 'Oma-Angat', 'Agri', 'Market', 'APPROVED', '2023-12-13', '2023-12-13 10:56:32', '365791d6086a3f'),
(67, 'user-0000002', 'AlaDairies', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'SELLER', 'Greys', 'Rolan', 'Ala', 'PENDING', '2023-12-13', '2023-12-13 14:18:07', ''),
(68, 'user-0000003', 'LotertePalay', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'SELLER', 'Joyce', 'Llamera', 'Loterte', 'PENDING', '2023-12-13', '2023-12-13 14:21:18', ''),
(69, 'user-0000004', 'AguilarGoods', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'SELLER', 'Ynah', 'Segubiense', 'Aguilar', 'PENDING', '2023-12-13', '2023-12-13 14:25:55', ''),
(70, 'user-0000005', 'BorbeOils', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'SELLER', 'Beverlygrace', 'Garcera', 'Borbe', 'PENDING', '2023-12-13', '2023-12-13 14:28:18', ''),
(71, 'user-0000006', 'IbarraVeges', '38083c7ee9121e17401883566a148aa5c2e2d55dc53bc4a94a026517dbff3c6b', 'SELLER', 'Ibarra', 'Cons', 'Crisostomo', 'PENDING', '2023-12-13', '2023-12-13 14:31:20', ''),
(72, 'user-0000007', 'ClaraFruitasan', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'SELLER', 'Maria', 'Clara', 'Berdin', 'PENDING', '2023-12-13', '2023-12-13 14:35:12', ''),
(73, 'user-0000008', 'CruzTuyuan', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'SELLER', 'Juan', 'Dela', 'Cruz', 'PENDING', '2023-12-13', '2023-12-13 14:37:06', ''),
(74, 'user-0000009', 'AkapaVeges', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'SELLER', 'Crispin', 'Basilio', 'Sisa', 'PENDING', '2023-12-13', '2023-12-13 14:38:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `contactnum` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(500) NOT NULL,
  `housenum` varchar(150) NOT NULL,
  `street` varchar(150) NOT NULL,
  `subdivision` varchar(150) NOT NULL,
  `barangay` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `zipnum` int(11) NOT NULL,
  `province` varchar(150) NOT NULL,
  `longitude` varchar(150) NOT NULL,
  `latitude` varchar(150) NOT NULL,
  `image` varchar(500) NOT NULL,
  `imagename` varchar(500) NOT NULL,
  `profileimage` varchar(500) NOT NULL,
  `profileimagename` varchar(500) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `contactnum`, `email`, `address`, `housenum`, `street`, `subdivision`, `barangay`, `city`, `zipnum`, `province`, `longitude`, `latitude`, `image`, `imagename`, `profileimage`, `profileimagename`, `date_added`, `DATETIME_LOG`) VALUES
(61, 'user-0000001', '+63 920-999-9019', 'omaangatagrimarket@gmail.com', ', Bgy. 24 - Rizal Street, Legazpi City, 4500, Albay', '', '', '', 'Bgy. 24 - Rizal Street', 'Legazpi City', 4500, 'Albay', '123.7437995', '13.1390621', '', '', '', '', '2023-12-13', '2023-12-13 10:56:32'),
(64, 'user-0000002', '+63 989-908-8909', 'marygracerolan.ala@bicol-u.edu.ph', '12, None, None, San Roque, Legazpi City, 4500, Albay', '12', 'None', 'None', 'San Roque', 'Legazpi City', 4500, 'Albay', '123.7552644', '13.1570551', 'user-00000021702448293_403411465_880108440523950_4264575778187205943_n.png', 'user-00000021702448293_403411465_880108440523950_4264575778187205943_n.png', 'user-00000021702448293_Dairies.svg', 'user-00000021702448293_Dairies.svg', '2023-12-13', '2023-12-13 14:18:07'),
(65, 'user-0000003', '+63 977-787-7787', 'annjoycelotertepersonal@gmail.com', '1, 1, 0, Sipi, Daraga, 4501, Albay', '1', '1', '0', 'Sipi', 'Daraga', 4501, 'Albay', '123.7085729', '13.1474483', 'user-00000031702448480_403411465_880108440523950_4264575778187205943_n.png', 'user-00000031702448480_403411465_880108440523950_4264575778187205943_n.png', 'user-00000031702448480_grains.svg', 'user-00000031702448480_grains.svg', '2023-12-13', '2023-12-13 14:21:18'),
(66, 'user-0000004', '+63 900-988-8899', 'gerryminahsegubiense.aguilar@bicol-u.edu.ph', '34, 1, 0, San Jose, Libon, 4507, Albay', '34', '1', '0', 'San Jose', 'Libon', 4507, 'Albay', '123.3710571', '13.2606549', 'user-00000041702448758_403411465_880108440523950_4264575778187205943_n.png', 'user-00000041702448758_403411465_880108440523950_4264575778187205943_n.png', 'user-00000041702448758_Proccessed.svg', 'user-00000041702448758_Proccessed.svg', '2023-12-13', '2023-12-13 14:25:55'),
(67, 'user-0000005', '+63 988-898-8899', 'beverlygracegarcera.borbe@bicol-u.edu.ph', '23, 2, 0, Cuyaoyao, Pioduran, 4516, Albay', '23', '2', '0', 'Cuyaoyao', 'Pioduran', 4516, 'Albay', '123.4635768', '13.0993943', 'user-00000051702448900_403411465_880108440523950_4264575778187205943_n.png', 'user-00000051702448900_403411465_880108440523950_4264575778187205943_n.png', 'user-00000051702448900_Fats.svg', 'user-00000051702448900_Fats.svg', '2023-12-13', '2023-12-13 14:28:18'),
(68, 'user-0000006', '+63 900-999-999_', 'annjoycellamera.loterte@bicol-u.edu.ph', '1, P7, 0, Binitayan, Daraga, 4501, Albay', '1', 'P7', '0', 'Binitayan', 'Daraga', 4501, 'Albay', '123.6965543', '13.097314', 'user-00000061702449082_403411465_880108440523950_4264575778187205943_n.png', 'user-00000061702449082_403411465_880108440523950_4264575778187205943_n.png', 'user-00000061702449082_Veges.svg', 'user-00000061702449082_Veges.svg', '2023-12-13', '2023-12-13 14:31:20'),
(69, 'user-0000007', '+63 990-099-9999', 'omaangatagrimarket2023@gmail.com', '43, P1, 0, Kimantong, Daraga, 4501, Albay', '43', 'P1', '0', 'Kimantong', 'Daraga', 4501, 'Albay', '123.7056643', '13.1425535', 'user-00000071702449314_403411465_880108440523950_4264575778187205943_n.png', 'user-00000071702449314_403411465_880108440523950_4264575778187205943_n.png', 'user-00000071702449314_Fruits.svg', 'user-00000071702449314_Fruits.svg', '2023-12-13', '2023-12-13 14:35:12'),
(70, 'user-0000008', '+63 988-876-6676', 'juanjd@gmail.com', '4, P7, 0, Sagpon, Daraga, 4501, Albay', '4', 'P7', '0', 'Sagpon', 'Daraga', 4501, 'Albay', '123.7196388', '13.1454808', 'user-00000081702449428_403411465_880108440523950_4264575778187205943_n.png', 'user-00000081702449428_403411465_880108440523950_4264575778187205943_n.png', 'user-00000081702449428_dried.svg', 'user-00000081702449428_dried.svg', '2023-12-13', '2023-12-13 14:37:06'),
(71, 'user-0000009', '+63 900-099-9999', 'sisajuna@gmail.com', '9, 8, 0, Kimantong, Daraga, 4501, Albay', '9', '8', '0', 'Kimantong', 'Daraga', 4501, 'Albay', '123.7056643', '13.1425535', 'user-00000091702449515_403411465_880108440523950_4264575778187205943_n.png', 'user-00000091702449515_403411465_880108440523950_4264575778187205943_n.png', 'user-00000091702449515_Veges.svg', 'user-00000091702449515_Veges.svg', '2023-12-13', '2023-12-13 14:38:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`,`cart_id`),
  ADD UNIQUE KEY `cart_id_UNIQUE` (`cart_id`),
  ADD KEY `FKCartUserid_idx` (`customer_id`),
  ADD KEY `FKCartProductid_idx` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`,`category_id`),
  ADD UNIQUE KEY `categoryid_UNIQUE` (`category_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKChatUserID_idx` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`,`order_id`),
  ADD UNIQUE KEY `orderID_UNIQUE` (`order_id`),
  ADD KEY `FKOrderUserID_idx` (`customer_id`),
  ADD KEY `FKOrderProductID_idx` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`,`payment_id`),
  ADD UNIQUE KEY `paymentID_UNIQUE` (`payment_id`),
  ADD KEY `FKPaymentOrderID_idx` (`order_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`,`post_id`),
  ADD UNIQUE KEY `post_id_UNIQUE` (`post_id`),
  ADD KEY `FKPostUserid_idx` (`user_id`);

--
-- Indexes for table `post_details`
--
ALTER TABLE `post_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKPostDetPostID_idx` (`post_id`),
  ADD KEY `FKPostUserid_idx` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`,`product_id`),
  ADD UNIQUE KEY `productID_UNIQUE` (`product_id`),
  ADD KEY `FKSellerUserID_idx` (`seller_id`);

--
-- Indexes for table `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKCategoryID_idx` (`category_id`),
  ADD KEY `FKProductID2_idx` (`product_id`);

--
-- Indexes for table `products_image`
--
ALTER TABLE `products_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKProductID3_idx` (`product_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKUserID2_idx` (`user_id`),
  ADD KEY `FKProductID_idx` (`product_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`tracking_id`),
  ADD UNIQUE KEY `orderID_UNIQUE` (`order_id`),
  ADD KEY `FKTrackingOrderID_idx` (`order_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD UNIQUE KEY `userID_UNIQUE` (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userID_UNIQUE` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_details`
--
ALTER TABLE `post_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products_category`
--
ALTER TABLE `products_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `products_image`
--
ALTER TABLE `products_image`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FKCartProductID` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKCartUserID` FOREIGN KEY (`customer_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FKOrderProductID` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKOrderUserID` FOREIGN KEY (`customer_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `FKPaymentOrderID` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FKPostUserID` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_details`
--
ALTER TABLE `post_details`
  ADD CONSTRAINT `FKPostDetPostID` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKPostDetUserID` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FKSellerUserID` FOREIGN KEY (`seller_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products_category`
--
ALTER TABLE `products_category`
  ADD CONSTRAINT `FKCategoryID` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKProductID2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products_image`
--
ALTER TABLE `products_image`
  ADD CONSTRAINT `FKProductID3` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `FKProductID` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKUserID2` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`);

--
-- Constraints for table `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `FKOrderID` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `FKUserID` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;