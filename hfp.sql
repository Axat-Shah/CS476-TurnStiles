

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `hfp`
--
-- --------------------------------------------------------
--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Chair'),
(2, 'Cabinets'),
(3, 'Dining Table'),
(4, 'Sofa'),
(5, 'Table'),
(6, 'Beds'),
(7, 'Wardrobe');

-- --------------------------------------------------------
--
-- Table structure for table `checkoutaddress`
--

DROP TABLE IF EXISTS `checkoutaddress`;
CREATE TABLE IF NOT EXISTS `checkoutaddress` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `resi` varchar(200) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `cno` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkoutaddress`
--

INSERT INTO `checkoutaddress` (`id`, `user_token`, `firstname`, `lastname`, `email`, `resi`, `city`, `pincode`, `cno`) VALUES
(9, '65744', 'axat', 'shah', 'a@gmail.com', '228B', 'Regina', 's4n5n3', '6011234567'),
(7, '65745', 'Yaksh', 'Patel', 'y@gmail.com', '29 Landing', 'White City', 's4n5n3', '9848756578'),
(5, '65746', 'Yash', 'Patel', 'ya@gmail.com', '12A', 'Moose Jaw', 's4n5n3', '6011234567'),
(4, '65747', 'Jayrajsinh', 'Darbar', 'JD@gmail.com', '228B', 'Regina', 's4n5n3', '6017594567'),
(1, '65748', 'John', 'Doe', 'Doe.j@gmail.com', '23 Preston Ave', 'Regina', 's4n5n3', '60118934567');

-- --------------------------------------------------------

--
-- Table structure for table `faq_info`
--

DROP TABLE IF EXISTS `faq_info`;
CREATE TABLE IF NOT EXISTS `faq_info` (
  `f_id` int(5) NOT NULL AUTO_INCREMENT,
  `f_title` text NOT NULL,
  `f_description` text NOT NULL,
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_info`
--

INSERT INTO `faq_info` (`f_id`, `f_title`, `f_description`) VALUES
(1, 'How long does the shipping usually take? ', 'With TurnStiles, transit time is impacted by factors including distance, shipping mode, route, and season. In very rough estimates: express can take as little as 1-3 days, air freight is typically 5-10 days'),
(2, 'How can we make custom orders?', 'Reach out to our customer services. TurnStiles allows customization services, allowing customers to tailor certain aspects of the furniture to their preferences. This may include selecting fabric or upholstery, choosing finishes or colors, or modifying dimensions.'),
(3, 'What payment options are accepted?', 'TurnStiles accepts various forms of payment options such as cash, AMEX, VISA, Mastercard etc. to suit consumers needs.');

-- --------------------------------------------------------
--
-- Table structure for table `orderdata`
--

DROP TABLE IF EXISTS `orderdata`;
CREATE TABLE IF NOT EXISTS `orderdata` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_quantity` varchar(50) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_data`
--

INSERT INTO `orderdata` (`order_id`, `user_token`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 'axat_77865', 'EKENÄSET Armchair', '1', '300'),
(2, 'Yaksh_77867', 'LISABO Table', '1', '300'),
(3, 'yash_77868', 'Squre Arm Loveseat', '1', '600'),
(4, 'JD_77869', 'Convertible Faux Leather Twin Size Sofa', '1', '500'),
(5, 'axat_77860', 'Squre Arm Loveseat', '1', '600');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_image` text NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_image`, `product_desc`) VALUES
(1, 1, 'EKENÄSET Armchair', 300, 'chair1.avif', 'EKENÄSET armchair adds a stylish retro vibe to the room that’s inspired by 1950s Scandinavian design.'),
(2, 1, 'VEDBO Armchair high', 349.99, 'chair2.avif', 'Soft but distinct lines creates an elegant profile. Perfect when you want your own space in an open environment, and still socializse with others.'),
(3, 1, 'POÄNG Armchair', 139.99, 'chair3.avif', 'POÄNG armchair has stylish curved lines in bentwood, providing nice support for the neck and comfy resilience. It’s been in our range for several decades and is still just as popular. Want to try it too?'),
(4, 4, 'Garzon Faux Leather Sofa', 519.99, 'sofa1.webp', 'Garzon 69.68" Faux Leather Square Arm Sofa. Sits 2, Seat Height (inches): 17.71, Weight Capacity (lbs): 660'),
(5, 4, 'Pasillas upholstered Loveseat', 849.99, 'sofa2.webp', 'Pasillas 61.75'' Upholstered Loveseat, seats 2, 17.75" x 23.5" and 400lbs .'),
(6, 4, 'Velvet Rolled Arm Sofa Loveseat', 450, 'sofa3.webp', 'Enedelia 69.3'' W Velvet Rolled Arm Sofa Loveseat, Solid Wood, 700lbs'),
(7, 2, 'Tassio 5 - Drawer Dresser', 230, 'cabinet.webp', '48.75'' H X 29.75'' W X 19'' D, Tassio 5 - Drawer Dresser by South Shore'),
(8, 3, 'Dining Table', 490, 'dining.webp', 'Bring modern elegance to your dining space with our stunning white-finished veneer dining table. Measuring 70.9” W x 31” D x 30.7” H, this spacious table can comfortably seat up to 6-8 people, making it the perfect choice for families or those who love to entertain.'),
(9, 1, 'GRUPPSPEL Gaming chair', 400, 'chair4.avif', 'Cool gaming chair that blends in nicely with other decor. Equipped with many smart functions that allow you to adjust the back, seat, recline angle, tilt, armrests and headrest to sit really comfy.'),
(10, 1, 'MATCHSPEL Gaming chair', 299.99, 'chair5.avif\r\n', 'MATCHSPEL gaming chair helps you play at the top of your game. The whole body enjoys nice support and you can adjust the height of the chair, neck and armrests to sit really comfy when the game begins.'),
(11, 1, 'Office chair with armrests', 329.99, 'chair6.avif\r\n', 'This ergonomic office chair has many features to keep you comfy and focused, such as a well-shaped backrest with adjustable lumbar support and airy mesh that keeps your body cool. 10 year guarantee.'),
(12, 1, 'Swivel chair', 320, 'chair7.avif\r\n', 'The soft SKRUVSTA work chair can be adjusted in height, so you can adapt it to your height. The castors are rubber coated to run smoothly on any kind of floor and have a pressure-sensitive brake mechanism.'),
(13, 4, 'Claudie Upholstered Loveseat', 550, 'sofa4.webp', 'Claudie 46.7" Upholstered Loveseat, 700lbs, 20.5" x 18.6"'),
(14, 4, 'Convertible Faux Leather Twin Size Sofa', 500, 'sofa5.webp', '71'' Wide Adjustable Arms Tufted Back Convertible Faux Leather Twin Size Sofa, 750lbs.'),
(15, 4, 'Seylow', 650, 'sofa6.webp', 'Seylow 81.5" Faux Leather Convertible Sofa.'),
(16, 4, 'Collington Velvet Sqre Arm Sofa', 500, 'sofa7.webp', 'Collington 70-inch Velvet Square Arm Sofa'),
(17, 4, 'Squre Arm Loveseat', 600, 'sofa8.webp', '67inch Square Arm Loveseat.'),
(19, 4, 'Velvet Round Arm Loveseat', 590, 'sofa9.webp', 'Hessville 56.3" Velvet Round Arm Loveseat by Mercer.'),
(20, 6, 'Upholstered Bed', 250, 'bed1.webp', 'Exquisite button tufted headboard with a wingback design can match a variety of bedroom styles. The fabric material has strong breathability and it is skin-friendly.'),
(21, 5, 'LISABO Table', 300, 'table.avif', 'Smart construction and a handcrafted look made our LISABO table series a winner of the Red Dot Design Award in 2016.Easy to assemble as each leg has only one screw.'),
(22, 6, 'Santrell 14" Platform Bed', 500, 'bed2.webp', 'Slats: 2.83" W x 0.49" H (thick), hipping box dimensions (twin-size option): 78" L x 5" W x 10" H, Width of the headboard (in) 54'),
(23, 4, 'Paschall Upholstered Loveseat', 250, 'sofa10.webp', 'Paschall 57'' Upholstered Loveseat. Retro for every day. This mid-century modern loveseat showcases rounded track arms, splayed legs, and a deeply textured motif for a glam look.'),
(24, 7, 'Elborough Manufactured Wood Armoire', 450, 'wardrobe.webp', '71.13'' H X 29.625'' W X 16.13'' D');

-- --------------------------------------------------------

--
-- Table structure for table `quick_contact`
--

DROP TABLE IF EXISTS `quick_contact`;
CREATE TABLE IF NOT EXISTS `quick_contact` (
  `name` text NOT NULL,
  `e_mail` varchar(20) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quick_contact`
--

INSERT INTO `quick_contact` (`name`, `e_mail`, `msg`) VALUES
('', '', ''),
('', '', '');

-- --------------------------------------------------------