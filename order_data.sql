- --------------------------------------------------------
--
-- Table structure for table `order_data`
--

DROP TABLE IF EXISTS `order_data`;
CREATE TABLE IF NOT EXISTS `order_data` (
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

INSERT INTO `order_data` (`order_id`, `user_token`, `item_name`, `item_quantity`, `item_price`) VALUES
(1, 'axat_77865', 'High protein Bone(large)', '1', '800');

