-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 01:46 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE `addproducts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `oldprice` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created` datetime(6) NOT NULL,
  `modified` datetime(6) NOT NULL,
  `status` enum('0','1','','') NOT NULL,
  `rating` varchar(255) NOT NULL,
  `brandname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`id`, `name`, `category_name`, `subcategory`, `oldprice`, `price`, `description`, `image`, `image2`, `image3`, `type`, `created`, `modified`, `status`, `rating`, `brandname`) VALUES
(6, 'loyod', 'Laptops', '', '0', '176270', 'gfds', '66', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '', ''),
(10, 'taj1', 'kitchenware', 'waterpurifiers', '5', '87654', 'abccc', 'bajaj-fx11-food-factory-original-imaencwfmprrkwqg.jpeg', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '2', 'adfad'),
(11, 'VIVO V5Plus Limited Edition', 'Electronics', 'mobiles', '25,990', '22990', '', '176117.jpeg', 'aahanapelli.jpg', 'bhale.jpg', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4.4', 'Vivo'),
(12, 'Redmi Note 4 (Black, 64 GB)', 'Electronics', 'mobiles', '12,999', '12000', '4 GB RAM | 64 GB ROM | Expandable Upto 128 GB5.5 inch Full HD Display13MP Rear Camera | 5MP Front Camera4100 mAh Li-Polymer Battery', '303736.jpeg', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4.4', 'Redmi '),
(13, 'Apple MacBook Pro Core i7 5th Gen ', 'kitchenware', 'waterpurifiers', '1,40,990', '132000', '15.4-inch (diagonal) LED-backlit display with IPS technology; 2880-by-1800 resolution at 220 pixels per inch with support for millions of colors', '372759.jpeg', '', '', 'ss', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4', 'Apple'),
(14, 'Microsoft Surface Pro 4 Core i7 6th Gen ', 'Electronics', 'laptops', '1,67,490', '1', 'The Microsoft Surface Pro 4 brings to you the power of a laptop in a tablet. Underneath its slim and sleek exterior lies a beast of a 6th-generation Intel Core processor, making it as efficient as it is attractive and lightweight.', '356205.jpeg', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4.4', 'Microsoft '),
(15, 'Acer Nitro 5 Core i5 7th Gen ', 'Electronics', 'laptops', '74,999', '7287654', 'Nvidia GTX 1050 TiIntel Core i5 Processor (7th Gen)8 GB DDR4 RAM64 bit Windows 10 Operating System1 TB HDD15.6 inch Display', '67797.jpeg', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4', 'Acer'),
(16, 'Sony MDR-ZX310APLCE Headset with Mic', 'Electronics', 'headset', '2,190', '999', 'Enjoy enhanced and immersive listening experience by investing in these Sony headphones. The pair is designed for you to enjoy the powerful bass and clear sound. They are durable and can handle rough use as well.', '764701.jpeg', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4', 'Sony '),
(17, 'Flipkart SmartBuy Large PVC Vinyl Sticker', 'homeDecorations', 'wallpapers', '799', '219', 'PVC Vinyl Compatible Ideal for Family Lounge, Bedroom, Cafe and Restaurant, Kids room, Nursery Room etc. Features PVC, Non-toxic, Eco-friendly, Waterproof. These wall stickers decorate your home just in minutes. Wall Sticker Application Instruction Our wa', '398734.jpeg', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4', 'PVC Vinyl '),
(21, '    Kent Ace+ 7 L RO + UF Water Purifier', 'Electronics', 'waterpurifiers', '   17,000', '12000', ' Save up to 40% on electronic items						', 'A150X-and-F550X-Flipkart-Banner.jpg', '', '', 'bannerimage', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', ' 3 ', '    Kent Ace+'),
(22, 'Moto', 'Electronics', 'mobiles', '9999', '9000', 'Flat 2000 off on moto devices						', '295840.jpg', '', '', 'bannerimage', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '4', 'Moto'),
(23, 'sdf', '\r\n                           sdfsdf', '\r\n                           sfsddsf', '65', '654', '          sdsd', '585518.jpg', '', '', 'normalimage', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '0', '6', 'fghdf');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `name`, `role`) VALUES
(1, 'admin', 'admin', 'admin', '2'),
(3, 'products', 'products', 'products', '1'),
(4, 'orders', 'orders', 'orders', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerform`
--

CREATE TABLE `customerform` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerform`
--

INSERT INTO `customerform` (`id`, `firstname`, `lastname`, `email`, `phone`, `street`, `zipcode`, `city`) VALUES
(1, 'fd', 'fd', 'fsda@g.c', 987654, 'gfd', 543, 'fds'),
(2, 'fds', 'ds', '12@gmail.com', 987654, 'gfd', 543, 'fds'),
(3, 'fds', 'ds', '12@gmail.com', 987654, 'gfd', 543, 'fds'),
(4, 'fd', 'fd', '12@gmail.com', 987654, 'gfd', 543, 'fds'),
(5, 'fd', 'fd', '12@gmail.com', 987654, 'gfd', 543, 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(1, 'Test User', 'testuser@gmail.com', '9999999999', 'New York, NY, USA', '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `pass`, `email`) VALUES
(1, 'rupesh', '4297f44b13955235245b2497399d7a93', 'nrupesh08@gmail.com'),
(2, 'dfgh', 'e10adc3949ba59abbe56e057f20f883e', 'mythilisrikota@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE `maincategory` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`id`, `categoryname`) VALUES
(4, 'Electronics'),
(5, 'kitchenware'),
(6, 'appliances'),
(13, 'homeDecorations'),
(14, 'sdfsd'),
(15, '123'),
(16, 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `email`, `username`, `phone`, `city`, `street`, `zipcode`, `name`, `image`, `total_price`, `created`, `modified`, `status`) VALUES
(91, 1, 'jismail.khan@gmail.com', 'ismail', 2147483647, 'vijayawada', 'sn', '520015', 'Acer Nitro 5 Core i5 7th Gen ', '67797.jpeg', 7358622.00, '2017-11-07 08:26:47', '2017-11-07 08:26:47', 'progressing'),
(92, 1, 'jismail.khan@gmail.com', 'ismail', 2147483647, 'vijayawada', 'sn', '520015', 'Acer Nitro 5 Core i5 7th Gen ', '67797.jpeg', 29173606.00, '2017-11-07 08:34:44', '2017-11-07 08:34:44', 'progressing'),
(93, 1, 'jismail.khan@gmail.com', 'ismail', 2147483647, 'vijayawada', 'sn', '520015', 'VIVO V5Plus Limited Edition', '176117.jpeg', 22990.00, '2017-11-07 08:35:07', '2017-11-07 08:35:07', 'progressing'),
(94, 1, 'mythilisrikota@gmail.com', 'mythili', 87654, 'dffdfd', 'sddsdsds', '87654345', 'Acer Nitro 5 Core i5 7th Gen ', '67797.jpeg', 7322644.00, '2017-11-08 10:59:04', '2017-11-08 10:59:04', 'progressing'),
(95, 1, 'mythilisrikota@gmail.com', 'mythili', 87654, 'dffdfd', 'sddsdsds', '87654345', 'VIVO V5Plus Limited Edition', '176117.jpeg', 45980.00, '2017-11-08 11:01:38', '2017-11-08 11:01:38', 'progressing');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `email`, `username`, `name`, `phone`, `city`, `street`, `zipcode`, `image`, `price`, `total_price`, `status`) VALUES
(82, 91, 15, 1, 'jismail.khan@gmail.com', 'ismail', 'Acer Nitro 5 Core i5 7th Gen ', 2147483647, 'vijayawada', 'sn', 520015, '67797.jpeg', 0, 7358622, 'progressing'),
(83, 91, 16, 2, 'jismail.khan@gmail.com', 'ismail', 'Sony MDR-ZX310APLCE Headset with Mic', 2147483647, 'vijayawada', 'sn', 520015, '764701.jpeg', 0, 7358622, 'progressing'),
(84, 91, 11, 3, 'jismail.khan@gmail.com', 'ismail', 'VIVO V5Plus Limited Edition', 2147483647, 'vijayawada', 'sn', 520015, '176117.jpeg', 0, 7358622, 'progressing'),
(85, 92, 15, 4, 'jismail.khan@gmail.com', 'ismail', 'Acer Nitro 5 Core i5 7th Gen ', 2147483647, 'vijayawada', 'sn', 520015, '67797.jpeg', 0, 29173606, 'progressing'),
(86, 92, 11, 1, 'jismail.khan@gmail.com', 'ismail', 'VIVO V5Plus Limited Edition', 2147483647, 'vijayawada', 'sn', 520015, '176117.jpeg', 0, 29173606, 'progressing'),
(87, 93, 11, 1, 'jismail.khan@gmail.com', 'ismail', 'VIVO V5Plus Limited Edition', 2147483647, 'vijayawada', 'sn', 520015, '176117.jpeg', 0, 22990, 'progressing'),
(88, 94, 15, 1, 'mythilisrikota@gmail.com', 'mythili', 'Acer Nitro 5 Core i5 7th Gen ', 87654, 'dffdfd', 'sddsdsds', 87654345, '67797.jpeg', 0, 7322644, 'progressing'),
(89, 94, 11, 1, 'mythilisrikota@gmail.com', 'mythili', 'VIVO V5Plus Limited Edition', 87654, 'dffdfd', 'sddsdsds', 87654345, '176117.jpeg', 0, 7322644, 'progressing'),
(90, 94, 12, 1, 'mythilisrikota@gmail.com', 'mythili', 'Redmi Note 4 (Black, 64 GB)', 87654, 'dffdfd', 'sddsdsds', 87654345, '303736.jpeg', 0, 7322644, 'progressing'),
(91, 95, 11, 2, 'mythilisrikota@gmail.com', 'mythili', 'VIVO V5Plus Limited Edition', 87654, 'dffdfd', 'sddsdsds', 87654345, '176117.jpeg', 0, 45980, 'progressing');

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE `products_list` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `oldprice` int(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `brandname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`, `category_name`, `subcategory`, `oldprice`, `image2`, `image3`, `rating`, `brandname`) VALUES
(1, 'Cool T-shirt', 'Cool T-shirt, Cotton Fabric. Wash in normal water with mild detergent.', 'TSH1', 'tshirt-1.jpg', '8.50', '', '', 0, '', '', 0, ''),
(2, 'HBD T-Shirt', 'Cool Happy Birthday printed T-shirt.Crafted from light, breathable cotton.', 'TSH2', 'tshirt-2.jpg', '7.40', '', '', 0, '', '', 0, ''),
(3, 'Survival of Fittest', 'Yellow t-shirt makes the perfect addition to your casual wardrobe.', 'TSH3', 'tshirt-3.jpg', '9.50', '', '', 0, '', '', 0, ''),
(4, 'Love Hate T-shirt', 'Stylish and trendy, this crew neck short sleeved t-shirt is made with 100% pure cotton.', 'TSH4', 'tshirt-4.jpg', '10.80', '', '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `maincategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategory`, `maincategory`) VALUES
(1, 'waterpurifiers', 'kitchenware'),
(3, 'Desktops', 'Electronics'),
(4, 'headset', 'Electronics'),
(5, 'fridge', 'kitchenware'),
(27, 'wallpapers', 'homeDecorations'),
(28, 'laptops', 'Electronics'),
(29, 'mobiles', 'Electronics'),
(30, 'sfsddsf', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `city`, `street`, `zipcode`, `status`) VALUES
(52, 'admin', 'mythilikota@ymail.com', '12345678', 987654765, 'sd', 'ds', 98776, ''),
(50, 'mythili', 'mythilisrikota@gmail.com', 'mythili', 87654, 'dffdfd', 'sddsdsds', 87654345, 'approved'),
(40, 'admin', 'rkkotaramya@gmail.com', 'ramya', 2147483647, 'vij', 'singh', 520012, ''),
(41, 'kjhfgd', 'fds@gmail.com', '123456', 852169852, 'vij', 'kjndjk', 5625, ''),
(35, 'ss', 'webteach02@gmail.com', 'webteach', 2147483647, 'vij', 'singh', 520012, 'approved'),
(51, 'ismail', 'jismail.khan@gmail.com', '123456', 2147483647, 'vijayawada', 'fffffd', 520015, 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerform`
--
ALTER TABLE `customerform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maincategory`
--
ALTER TABLE `maincategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproducts`
--
ALTER TABLE `addproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerform`
--
ALTER TABLE `customerform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maincategory`
--
ALTER TABLE `maincategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
