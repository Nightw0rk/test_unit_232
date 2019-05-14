
CREATE TABLE IF NOT EXISTS `customer` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30),
  `surname` VARCHAR(80),
  `address` VARCHAR(200),
  `email` VARCHAR(100),
  `telephone` VARCHAR(20),
  `registration` DATETIME default NOW(),
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;
