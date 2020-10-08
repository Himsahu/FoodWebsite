
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prefer_food_type` varchar(255) NOT NULL,
  `user_prefer` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `prefer_food_type`, `user_prefer`, `user_location`, `created_at`) VALUES
(1, '1', 'veg', '', '', '2020-10-20 10:40:55'), 
(2, '2', 'non-veg', '', '', '2020-09-30 01:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

DROP TABLE IF EXISTS `food_order`;
CREATE TABLE IF NOT EXISTS `food_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(255) NOT NULL,
  `order_by_customers_user_id` varchar(255) NOT NULL,
  `order_to_restaurants_user_id` varchar(255) NOT NULL,
  `order_restaurants_food_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `restaurant_rating` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`id`, `order_number`, `order_by_customers_user_id`, `order_to_restaurants_user_id`, `order_restaurants_food_id`, `quantity`, `status`, `restaurant_rating`, `created_at`) VALUES
(15, '103', '1', '23', '3', '1', '0', '', '2020-09-30 13:27:32'), 
(19, '119', '2', '25', '19', '1', '0', '', '2020-12-15 15:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_location` varchar(255) NOT NULL,
  `restaurant_mobile` varchar(255) NOT NULL,
  `restaurant_rating` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `user_id`, `restaurant_name`, `restaurant_location`, `restaurant_mobile`, `restaurant_rating`, `created_at`) VALUES
(2, '23', 'Pizza Hut', 'New Delhi', '8839883988', '', '2020-10-12 10:42:00'), 
(3, '24', 'Dominoz', 'Faridabad', '9876543210', '', '2020-10-21 12:47:02'), 
(4, '25', 'Food Mania', 'Delhi', '8977654321', '', '2020-03-31 12:49:00'), 
(5, '27', 'McDonnels', 'Allahabad', '9899819901', '', '2020-09-30 12:12:50');


-- --------------------------------------------------------

--
-- Table structure for table `restaurants_dish`
--

DROP TABLE IF EXISTS `restaurants_dish`;
CREATE TABLE IF NOT EXISTS `restaurants_dish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_user_id` varchar(255) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `dish_description` varchar(255) NOT NULL,
  `dish_price` varchar(255) NOT NULL,
  `dish_food_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants_dish`
--

INSERT INTO `restaurants_dish` (`id`, `restaurant_user_id`, `dish_name`, `dish_description`, `dish_price`, `dish_food_type`, `created_at`) VALUES
(3, '23', 'Shahi Paneer', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '150', 'veg', '2020-09-10 06:39:39'), 
(6, '23', 'Drinks', 'Drink some of it.', '100', 'drinks', '2020-02-19 08:35:40'), 
(7, '23', 'Desserts', 'Kuch Meetha Ho Jaye', '100', 'desserts', '2020-06-10 07:32:54'),
(8, '23', 'Ice Cream', 'Kuch Meetha ho Jaye', '100', 'desserts', '2020-04-16 16:07:08'), 
(10, '23', 'Samosa', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '10', 'veg', '2020-04-17 13:20:37'), 
(12, '23', 'Chicken', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '150', 'non_veg', '2020-06-17 16:12:03'), 
(13, '23', 'Roasted Chicken', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '1000', 'non_veg', '2020-05-07 06:35:30'), 
(14, '23', 'Chicken Popcorn', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '500', 'non_veg', '2020-06-23 02:45:48'), 
(15, '23', 'Coke', 'Drink some of it.', '150', 'drinks', '2020-05-21 07:34:00'), 
(16, '24', 'Pasta', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '100', 'veg', '2020-03-19 07:30:44'), 
(17, '24', 'Chicken Nuggets', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '100', 'non_veg', '2020-03-20 08:14:49'), 
(18, '24', 'Makhani Panner', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '100', 'veg', '2020-03-21 09:38:13'), 
(19, '25', 'Red Sause Pasta', 'The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in.', '150', 'veg', '2020-07-23 03:27:27');


--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(255) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_id`, `role_name`) VALUES
(1, '1', 'Restaurants'),
(2, '2', 'Customers');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_role` varchar(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `user_role`, `created_at`) VALUES
(26, 'Himanshu Sahu', 'himsahu.hs@gmail.com', '09915511759', '7f7f51ad53574243785ef83a04cb9c16', '2', '2020-09-30 12:10:12'),
(27, 'Swati', 'mcdonels@gmail.com', '9899819901', '7f7f51ad53574243785ef83a04cb9c16', '1', '2020-09-30 12:12:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
