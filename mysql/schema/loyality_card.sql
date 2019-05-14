
CREATE TABLE IF NOT EXISTS `loyality_card` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` INT(11),
  `type` INT(2),
  `customer_id` INT(11),
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;
