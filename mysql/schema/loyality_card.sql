CREATE TABLE IF NOT EXISTS `loyality_card` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` INT(11),
  `type` INT(2) DEFAULT 1,
  `customer_id` INT(11) DEFAULT NULL,
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;


INSERT INTO `loyality_card` VALUES(123,1);
INSERT INTO `loyality_card` VALUES(1223,1);
INSERT INTO `loyality_card` VALUES(3214,1);
INSERT INTO `loyality_card` VALUES(121233,1);