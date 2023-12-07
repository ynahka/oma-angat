-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 02:26 AM
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
-- Database: `finaloma_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MidName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone_Num` varchar(20) NOT NULL,
  `image` blob DEFAULT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `calendar_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
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
-- Table structure for table `deliverycontactinfo`
--

CREATE TABLE `deliverycontactinfo` (
  `delivery_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MidName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) NOT NULL,
  `SHBNumber` varchar(10) DEFAULT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `ZipCode` int(11) NOT NULL,
  `complete_address` varchar(225) NOT NULL,
  `ContactNum` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `Donor_id` int(11) NOT NULL,
  `DonationType` varchar(20) NOT NULL,
  `donatedate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `farmer_name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone_Num` varchar(20) NOT NULL,
  `image` blob DEFAULT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_id`, `user_id`, `farmer_name`, `Address`, `Phone_Num`, `image`, `date_updated`) VALUES
(24, 13, 'Joyce Loterte', 'Salvacion, Pilar, Sorsogon', '09509276643', 0x5265735f696d672f312e737667, '2023-11-23 15:52:46'),
(25, 20, 'Commission Lab', 'Legazpi City\r\n', '09123223456', 0x5265735f696d672f312e737667, '2023-11-29 16:48:38'),
(26, 24, 'Beverly Grace Borbe', 'Legazpi Public Market, Legazpi City, Albay', '0912378690876', 0x5265735f696d672f332e737667, '2023-12-04 16:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `harvestingcalendar`
--

CREATE TABLE `harvestingcalendar` (
  `harvest_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `HarvestDate` date NOT NULL,
  `harvestEnd` date NOT NULL,
  `addedat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harvestingcalendar`
--

INSERT INTO `harvestingcalendar` (`harvest_id`, `store_id`, `HarvestDate`, `harvestEnd`, `addedat`) VALUES
(1, 1, '2024-01-03', '2024-01-17', '2023-11-30 17:41:04'),
(3, 1, '2023-12-10', '2023-12-29', '2023-11-30 18:04:17'),
(4, 1, '2023-12-11', '2023-12-23', '2023-11-30 18:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `methodofpayment`
--

CREATE TABLE `methodofpayment` (
  `method_id` int(11) NOT NULL,
  `MethodType` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `order_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `order_total` decimal(10,2) DEFAULT NULL,
  `DeliveryIns` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `orderproduct`
--
DELIMITER $$
CREATE TRIGGER `trg_update_order_product_total` BEFORE INSERT ON `orderproduct` FOR EACH ROW BEGIN
    SET NEW.Price = (
        SELECT Price FROM Products WHERE product_id = NEW.product_id
    );
    SET NEW.order_total = NEW.quantity * NEW.Price;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_update_order_product_total_on_update` BEFORE UPDATE ON `orderproduct` FOR EACH ROW BEGIN
    SET NEW.Price = (
        SELECT Price FROM Products WHERE product_id = NEW.product_id
    );
    SET NEW.order_total = NEW.quantity * NEW.Price;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_update_product_quantity_sold` AFTER INSERT ON `orderproduct` FOR EACH ROW BEGIN
    -- Deduct the purchased quantity from the product's available quantity
    UPDATE Products
    SET QuantityAvlbl = QuantityAvlbl - NEW.quantity,
        QuantiSold = QuantiSold + NEW.quantity
    WHERE product_id = NEW.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `status_id` int(11) NOT NULL,
  `status_type` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) NOT NULL,
  `paymentID` varchar(150) NOT NULL,
  `paymenttype` varchar(100) NOT NULL,
  `order_id` int(11) NOT NULL,
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
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `category_id` int(11) NOT NULL,
  `ctgry_name` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`category_id`, `ctgry_name`, `date_created`) VALUES
(1, 'Fruits', '2023-11-23 18:40:25'),
(2, 'Vegetables', '2023-11-23 18:40:32'),
(3, 'Dried Fish', '2023-11-23 18:41:48'),
(4, 'Grains', '2023-11-23 18:41:58'),
(5, 'Fats & Oils', '2023-11-30 18:35:02'),
(6, 'Dairies & Eggs', '2023-11-30 18:35:29'),
(7, 'Processed Goods', '2023-11-30 18:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `harvest_id` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `description` varchar(225) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Unit` varchar(225) NOT NULL,
  `QuantityAvlbl` int(11) NOT NULL,
  `QuantiSold` int(11) NOT NULL,
  `product_image` blob NOT NULL,
  `product_image2` blob DEFAULT NULL,
  `product_image3` blob DEFAULT NULL,
  `product_image4` blob DEFAULT NULL,
  `product_image5` blob DEFAULT NULL,
  `AddedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `store_id`, `category_id`, `harvest_id`, `ProductName`, `description`, `Price`, `Unit`, `QuantityAvlbl`, `QuantiSold`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `AddedAt`) VALUES
(4, 1, 1, 1, 'Banana/Saging (Latundan)', 'Tagalog: Saging na Latundan | Tundan  Also called as Silk Bananas.  Minimum order: 1 kg', '35.00', 'Kg', 50, 0, 0x50726f647563745f696d672f4c6174756e64616e2e706e67, 0x50726f647563745f696d672f36392e706e67, 0x50726f647563745f696d672f37302e706e67, 0x50726f647563745f696d672f37312e706e67, 0x50726f647563745f696d672f37322e706e67, '2023-12-01 16:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `referral_id` int(11) NOT NULL,
  `Referred_id` int(11) NOT NULL,
  `Referrer_id` int(11) NOT NULL,
  `ReferralDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `ReserveQuantity` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `TotalPrice` decimal(10,2) NOT NULL,
  `DeliveryIns` text DEFAULT NULL,
  `ReservationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `reservation`
--
DELIMITER $$
CREATE TRIGGER `trg_update_reservation_total_price` BEFORE INSERT ON `reservation` FOR EACH ROW BEGIN
    SET NEW.TotalPrice = NEW.ReserveQuantity * NEW.Price;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_update_reservation_total_price_on_update` BEFORE UPDATE ON `reservation` FOR EACH ROW BEGIN
    SET NEW.TotalPrice = NEW.ReserveQuantity * NEW.Price;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reservationstatus`
--

CREATE TABLE `reservationstatus` (
  `resStatus_id` int(11) NOT NULL,
  `status_type` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review_rateproduct`
--

CREATE TABLE `review_rateproduct` (
  `review_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ReviewText` text DEFAULT NULL,
  `product_img` blob DEFAULT NULL,
  `Rate` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `review_rateproduct`
--
DELIMITER $$
CREATE TRIGGER `trg_check_rate_value` BEFORE INSERT ON `review_rateproduct` FOR EACH ROW BEGIN
    IF NEW.Rate < 0 OR NEW.Rate > 5 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Rate value must be between 0 and 5';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `cart_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPrice` decimal(10,2) NOT NULL,
  `DateAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `shoppingcart`
--
DELIMITER $$
CREATE TRIGGER `trg_update_shopping_cart_total` BEFORE INSERT ON `shoppingcart` FOR EACH ROW BEGIN
    SET NEW.TotalPrice = NEW.Quantity * (
        SELECT Price FROM Products WHERE product_id = NEW.product_id
    );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_update_shopping_cart_total_on_update` BEFORE UPDATE ON `shoppingcart` FOR EACH ROW BEGIN
    SET NEW.TotalPrice = NEW.Quantity * (
        SELECT Price FROM Products WHERE product_id = NEW.product_id
    );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `statustype`
--

CREATE TABLE `statustype` (
  `sttype_id` int(11) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `storeName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `storeDesc` text NOT NULL,
  `OpensAt` time NOT NULL,
  `ClosesAt` time NOT NULL,
  `fbPage` varchar(100) NOT NULL,
  `image` blob NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `farmer_id`, `storeName`, `Address`, `storeDesc`, `OpensAt`, `ClosesAt`, `fbPage`, `image`, `date_created`) VALUES
(1, 24, 'Oma-Angat Market', 'Salvacion, Pilar, Sorsogon', 'Its Oma-Angat\'s Official Market', '09:00:00', '11:00:00', 'http://oma-angat@facebook.com', 0x5265735f696d672f726963652e706e67, '2023-11-23 18:23:22'),
(2, 25, 'Albay Dairies', 'Polangui, Albay', 'Your own dairy market', '12:00:00', '21:00:00', 'http://AlbayDairies', 0x5265735f696d672f322e737667, '2023-12-04 15:28:02'),
(3, 26, 'LegaFruit Stand', 'Legazpi Public Market, Legazpi City, Albay', 'Fruits are  freshly picked from the Oma', '11:00:00', '23:00:00', 'http://legazpiFruitStand', 0x5265735f696d672f332e737667, '2023-12-04 16:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `CodeV` varchar(100) NOT NULL,
  `verification` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`user_id`, `Username`, `email`, `Password`, `CodeV`, `verification`, `date_created`) VALUES
(13, 'administrator', 'annjoycellamera.loterte@bicol-u.edu.ph', '71d8053edf9ea298a8a7722741e94bffce781bdbca683ab6a920996ee3223d30', 'f957ff65bdb4dbab7f2a5ed2c59223f81a2d5370be7fa179b71489d8f30dd9f1', 1, '2023-11-18 07:17:33'),
(19, 'GreysAla', 'omaangatagrimarket@gmail.com', '71d8053edf9ea298a8a7722741e94bffce781bdbca683ab6a920996ee3223d30', '239f08b242a91025bcadd6ce9d2232d6e23789a7551a4843af663e013f9281c4', 1, '2023-11-28 19:40:43'),
(20, 'commissionlab', 'thecommissionlab@gmail.com', '71d8053edf9ea298a8a7722741e94bffce781bdbca683ab6a920996ee3223d30', 'e534b9a1250a01c1e13c69307e60f661c0d65b17aad511266d4019b573caf3cc', 1, '2023-11-29 06:06:06'),
(22, 'ynah', 'gerryminah04aguilar@gmail.com', '9bb5f14eea02a6c8bb06cf5085dce8394981d70f459f629d99e4ebcc918130c3', 'e68f12070a04f0d11c1ae467bc095f19046145eceebe2340aa97520f7ab844c6', 0, '2023-11-30 13:15:34'),
(24, 'LegaFruit', 'annjoycelotertepersonal@gmail.com', '71d8053edf9ea298a8a7722741e94bffce781bdbca683ab6a920996ee3223d30', '2cc2d3ae1daf8c217771e78aa03374168b4cff5c56ea03c046ca6e04d2cb1edf', 1, '2023-12-04 16:02:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `deliverycontactinfo`
--
ALTER TABLE `deliverycontactinfo`
  ADD PRIMARY KEY (`delivery_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `Donor_id` (`Donor_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `harvestingcalendar`
--
ALTER TABLE `harvestingcalendar`
  ADD PRIMARY KEY (`harvest_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `methodofpayment`
--
ALTER TABLE `methodofpayment`
  ADD PRIMARY KEY (`method_id`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `method_id` (`method_id`),
  ADD KEY `delivery_id` (`delivery_id`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `status_type` (`status_type`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paymentID` (`paymentID`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `harvest_id` (`harvest_id`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`referral_id`),
  ADD KEY `Referred_id` (`Referred_id`),
  ADD KEY `Referrer_id` (`Referrer_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `method_id` (`method_id`),
  ADD KEY `delivery_id` (`delivery_id`);

--
-- Indexes for table `reservationstatus`
--
ALTER TABLE `reservationstatus`
  ADD PRIMARY KEY (`resStatus_id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `status_type` (`status_type`);

--
-- Indexes for table `review_rateproduct`
--
ALTER TABLE `review_rateproduct`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `statustype`
--
ALTER TABLE `statustype`
  ADD PRIMARY KEY (`sttype_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `farmer_id` (`farmer_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliverycontactinfo`
--
ALTER TABLE `deliverycontactinfo`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `harvestingcalendar`
--
ALTER TABLE `harvestingcalendar`
  MODIFY `harvest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `methodofpayment`
--
ALTER TABLE `methodofpayment`
  MODIFY `method_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `referral_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservationstatus`
--
ALTER TABLE `reservationstatus`
  MODIFY `resStatus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_rateproduct`
--
ALTER TABLE `review_rateproduct`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useraccount` (`user_id`);

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useraccount` (`user_id`);

--
-- Constraints for table `deliverycontactinfo`
--
ALTER TABLE `deliverycontactinfo`
  ADD CONSTRAINT `deliverycontactinfo_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`Donor_id`) REFERENCES `buyer` (`buyer_id`);

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useraccount` (`user_id`);

--
-- Constraints for table `harvestingcalendar`
--
ALTER TABLE `harvestingcalendar`
  ADD CONSTRAINT `harvestingcalendar_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`);

--
-- Constraints for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD CONSTRAINT `orderproduct_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`),
  ADD CONSTRAINT `orderproduct_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orderproduct_ibfk_3` FOREIGN KEY (`method_id`) REFERENCES `methodofpayment` (`method_id`),
  ADD CONSTRAINT `orderproduct_ibfk_4` FOREIGN KEY (`delivery_id`) REFERENCES `deliverycontactinfo` (`delivery_id`);

--
-- Constraints for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD CONSTRAINT `orderstatus_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderproduct` (`order_id`),
  ADD CONSTRAINT `orderstatus_ibfk_2` FOREIGN KEY (`status_type`) REFERENCES `statustype` (`sttype_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderproduct` (`order_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `productcategory` (`category_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`harvest_id`) REFERENCES `harvestingcalendar` (`harvest_id`) ON UPDATE CASCADE;

--
-- Constraints for table `referral`
--
ALTER TABLE `referral`
  ADD CONSTRAINT `referral_ibfk_1` FOREIGN KEY (`Referred_id`) REFERENCES `farmer` (`farmer_id`),
  ADD CONSTRAINT `referral_ibfk_2` FOREIGN KEY (`Referrer_id`) REFERENCES `buyer` (`buyer_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`method_id`) REFERENCES `methodofpayment` (`method_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`delivery_id`) REFERENCES `deliverycontactinfo` (`delivery_id`) ON UPDATE CASCADE;

--
-- Constraints for table `reservationstatus`
--
ALTER TABLE `reservationstatus`
  ADD CONSTRAINT `reservationstatus_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`),
  ADD CONSTRAINT `reservationstatus_ibfk_2` FOREIGN KEY (`status_type`) REFERENCES `statustype` (`sttype_id`);

--
-- Constraints for table `review_rateproduct`
--
ALTER TABLE `review_rateproduct`
  ADD CONSTRAINT `review_rateproduct_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`),
  ADD CONSTRAINT `review_rateproduct_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`buyer_id`),
  ADD CONSTRAINT `shoppingcart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`farmer_id`) REFERENCES `farmer` (`farmer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
