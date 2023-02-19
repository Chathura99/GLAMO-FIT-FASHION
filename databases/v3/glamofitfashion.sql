-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2023 at 07:10 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glamofitfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`) VALUES
(1, 3),
(8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

DROP TABLE IF EXISTS `cart_products`;
CREATE TABLE IF NOT EXISTS `cart_products` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `item_id` (`product_id`),
  KEY `cart_products_ibfk_1` (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_products`
--

INSERT INTO `cart_products` (`cart_id`, `product_id`, `quantity`) VALUES
(1, 2, 1),
(1, 3, 3),
(1, 4, 5),
(8, 2, 1),
(8, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`, `image`) VALUES
(4, 'Girls Blouses', 'Description in here . . .', '6_10.jpg'),
(5, 'Girl Tops', 'From casual tees to dressy blouses, our selection of girl\'s tops has something for every occasion. Choose from a range of colors, patterns, and materials to find the perfect top for your child\'s wardrobe.', '3_13.jpg'),
(6, 'Girl Frocks', 'Our collection of girl\'s frocks features fun and fashionable designs that your child will love. Choose from a variety of styles, lengths, and materials to find the perfect frock for any occasion.', '66_2.jpg'),
(7, 'Kid Skirts', 'Dress your child in style with our selection of kid\'s skirts. From denim to tulle, we have a range of skirt styles that will fit any child\'s style.', NULL),
(8, 'Kid Blouses', 'Our kid\'s blouse collection features a range of styles from casual to dressy. Shop our selection of blouses to find the perfect top to complete your child\'s outfit.', NULL),
(9, 'Kid T-Shirt', 'Our kid\'s t-shirt collection has something for every child\'s taste. Choose from a range of fun and playful designs, colors, and styles to find the perfect t-shirt for your child.', NULL),
(12, 'Girl Jackets', 'Keep your child warm and stylish with our collection of girl\'s jackets. Choose from a range of materials, colors, and styles to find the perfect jacket for your child\'s needs.', NULL),
(13, 'Girl Lehenga', 'Add some traditional style to your child\'s wardrobe with our selection of girl\'s lehengas. Our collection features a range of colors and styles to fit any occasion.', 'Izzah_Shaheen_Malik.jpg'),
(14, 'Girl Trousers', 'Our collection of girl\'s trousers features stylish and comfortable options for any occasion. Choose from a range of materials, colors, and styles to find the perfect pair for your child.', NULL),
(16, 'Test Category', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, ', 'me.jpg'),
(17, 'Girl T-shirts', 'From basic to trendy, our collection of girls t-shirts has something for every style. Choose from a range of designs, colors, and materials to find the perfect t-shirt for your child\'s wardrobe.', '1_32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `user_id`, `nic`, `occupation`, `gender`, `address`, `zip_code`) VALUES
(1, 22, '985695621v', 'System admin', 'male', '10 Kegalle', 61520),
(3, 21, '985457555V', 'Student', 'female', '43/1, Main street, Colombo', 4),
(4, 32, '958456814v', 'test', 'test', 'test address', 62015);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  PRIMARY KEY (`notification_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `date`, `description`, `user_id`, `view`) VALUES
(1, '2022-07-07 12:10:00', 'Order success!', 21, 0),
(2, '2023-02-19 00:00:00', 'New category called Kid\'s skirt added', NULL, 0),
(7, '2022-07-07 12:10:00', 'Order success!', 32, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `customer_id`, `total_price`, `status`, `date`) VALUES
(9, 'Test1', 4, '4350', 'delivered', '2023-02-19 18:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
CREATE TABLE IF NOT EXISTS `order_products` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `product_id` (`product_id`),
  KEY `order_products_ibfk_1` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`product_id`, `order_id`, `quantity`) VALUES
(4, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `date`, `order_id`, `amount`) VALUES
(2, '2023-02-19 18:25:06', 9, '4350');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `description`, `image`, `price`, `product_name`, `deleted`, `quantity`, `added_date`, `size`) VALUES
(2, 6, 'Shiny Beige Long Party Dress', '44_3.jpg', '4595', 'Party', 0, 10, '2023-02-01 00:00:00', 'xs,s,m'),
(3, 6, 'Shiny Blue Dust work Party Dress', '27_5.jpg', '8765', 'Party Dress - Short', 0, 5, '2023-02-02 00:00:00', 'm'),
(4, 17, 'Small Description about t shirt in here', '7_7.jpg', '1450', 'Women Honey Orange T', 0, 10, '2023-02-02 00:00:00', 's,l'),
(5, 13, 'lehenga yellow', 'L1.jpg', '4575', 'Lehenga 1', 0, 5, '2023-02-20 00:00:00', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `Telephone` int(10) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user',
  `logged` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`, `Telephone`, `type`, `logged`) VALUES
(21, 'Chamini ', 'chamini@gmail.com', '8de351eeac4e29e110ffca0d8daeab72', '2020-12-12', 712244586, 'user', 1),
(22, 'Chamara', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-02-12', 375544854, 'admin', 1),
(32, 'Test1', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '2023-02-12', 375544854, 'user', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD CONSTRAINT `cart_products_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
