CREATE TABLE `paubosProducts` (
  `id` bigint(20) NOT NULL,
  `paubos_id` varchar(100) NOT NULL,
  `seller_id` varchar(100) NOT NULL,
  `productname` varchar(500) NOT NULL,
  `productdesc` text NOT NULL,
  `price` decimal(14,4) NOT NULL DEFAULT 0.0000,
  `quantity` int(11) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `paubos_category` (
  `id` bigint(20) NOT NULL,
  `paubos_id` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `paubos_image` (
  `id` bigint(20) NOT NULL,
  `paubos_id` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `imagename` varchar(300) NOT NULL,
  `date_added` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `paubosProducts`
  ADD PRIMARY KEY (`id`,`product_id`),
  ADD UNIQUE KEY `paubosID_UNIQUE` (`paubos_id`),
  ADD KEY `FKSellerUserID_idx` (`seller_id`);
  
  ALTER TABLE `paubos_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKCategoryID_idx` (`category_id`),
  ADD KEY `FKPaubosID2_idx` (`paubos_id`);
  
  ALTER TABLE `paubos_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKProductID3_idx` (`paubos_id`);


