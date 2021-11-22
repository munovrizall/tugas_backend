CREATE DATABASE film_database;

USE film_database;
 
CREATE TABLE `films` (
  `id` INT NOT NULL auto_increment,
  `title` VARCHAR(100),
  `type` VARCHAR(100),
  `genre` VARCHAR(100),
  `country` VARCHAR(100),
  `year` INT(4),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);