
-- --------------------------------------------------------
-- Drop the table if it exists

DROP TABLE IF EXISTS `checkout_address`;
CREATE TABLE IF NOT EXISTS `checkout_address` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_token` VARCHAR(50) NOT NULL,
  `firstname` VARCHAR(20) NOT NULL,
  `lastname` VARCHAR(20) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `resi` VARCHAR(200) NOT NULL,
  `city` VARCHAR(50) NOT NULL, -- Increased the city column length to 50 to accommodate longer city names
  `pincode` VARCHAR(10) NOT NULL, -- Increased the pincode column length to 10 to accommodate longer pin codes
  `cno` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4; -- Changed the engine to InnoDB and character set to utf8mb4
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4; -- Changed the engine to InnoDB and character set to utf8mb4