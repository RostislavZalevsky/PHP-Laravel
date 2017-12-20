DROP DATABASE `DatabaseTest`;
CREATE DATABASE `DatabaseTest`;
USE `DatabaseTest`;

CREATE TABLE `TableTest`
(
  Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Name NVARCHAR(50)
);

INSERT INTO `TableTest`(Name) VALUES ("Root");

SELECT * FROM `TableTest`;