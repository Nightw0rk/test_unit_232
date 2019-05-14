
CREATE TABLE IF NOT EXISTS `customer_purchase` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `total_price` DECIMAL(10,2),
  `purchase_date` DATETIME DEFAULT NOW(),
  `loyality_card_id` INT(11),
  `customer_id` INT(11),
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;
