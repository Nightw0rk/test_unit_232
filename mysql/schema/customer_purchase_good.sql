
CREATE TABLE IF NOT EXISTS `customer_purchase_good` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `purchase_id` INT(11),
  `good_id` INT(11),
  `count`   DECIMAL(10,2),
  `tottal`  DECIMAL(10,2),
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;
