-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `category`, `name`, `image`, `price`) VALUES
(1, 'Dog Food', 'High protein Bone(small)', 'bone1.jpg', 500.00),
(2, 'Dog Food', 'High protein Bone(medium)', 'bone2.jpg', 650.00),
(3, 'Dog Food', 'High protein Bone(large)\r\n\r\n', 'bone1.jpg', 800.00),
(4, 'Pet Accessories ', 'Marble Dog Bowl - Grey', 'dogbowl1.jpg', 800.00),
(5, 'Pet Accessories ', 'Marble Dog Bowl - White', 'dogbowl2.jpg', 800.00),
(6, 'Pet Accessories ', 'Pixie Dust Dog Bowl - Black', 'dogbowl3.jpg', 400.00),
(7, 'Cat Food', '500g Cat Food', 'catfood.jpg', 500.00),
(8, 'Bird Food', 'Sunflower Seeds for Birds - 600 gms', 'birdfood.jpg', 400.00),
(9, 'Medicine ', 'Himalaya VET tablets', 'tablet1.jpg', 250.00),
(10, 'Dog Food', 'Orijen Original Dog Food', 'dogfood1.jpg', 500.00),
(11, 'Dog Food', 'Blueberry Mini Breed Puppy Food', 'dogfood2.jpg', 600.00),
(12, 'Dog Food', 'Arden Grange Adult Dog Food', 'dogfood3.jpg', 800.00),
(13, 'Pet Accessories ', 'Sprinkling of Love Dog Leash', 'leash1.jpg', 850.00),
(14, 'Pet Accessories ', 'Captain Woof Dog Leash', 'leash2.jpg', 900.00),
(15, 'Pet Accessories ', 'Milano Dog Leash - Blue', 'leash3.jpg', 650.00),
(16, 'Pet Accessories ', 'Rudolph Lounger Dog Bed', 'bed1.jpg', 1050.00),
(17, 'Pet Accessories ', 'Nap-Sack Lounger Dog Bed', 'bed2.jpg', 1000.00),
(18, 'Pet Accessories ', 'Tropical Paradise Donut Dog Bed', 'bed3.jpg', 1200.00),
(19, 'Caps', 'Customized Cap', 'cap1.jpg', 250.00),
(20, 'T-shirt', 'Womens T-shirt', 'tshirt1.jpg', 500.00),
(21, 'T-shirt', 'Mens T-shirt', 'tshirt2.jpg', 150.00),
(22, 'Caps', 'Animal welfare Cap', 'cap2.jpg', 250.00),
(23, 'Bag', 'recycled Shoulder Bag', 'bag1.jpg', 500.00),
(24, 'Pet Accessories ', 'Milano Dog Leash - Blue', 'bag2.jpg', 300.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
