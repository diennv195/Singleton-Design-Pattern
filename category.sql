-- CREATE TEST DATABASE
CREATE DATABASE test;

-- CREATE TEST DATABASE TABLE
CREATE TABLE `test`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(85) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));