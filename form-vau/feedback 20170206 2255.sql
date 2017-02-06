--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.2.53.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 06.02.2017 22:55:31
-- Версия сервера: 5.7.17-log
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE feedback;

--
-- Описание для таблицы column_validation
--
DROP TABLE IF EXISTS column_validation;
CREATE TABLE column_validation (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  `column` VARCHAR(255) DEFAULT NULL,
  valid_type INT(11) DEFAULT NULL,
  PRIMARY KEY (ID)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci
ROW_FORMAT = DYNAMIC;

--
-- Описание для таблицы message
--
DROP TABLE IF EXISTS message;
CREATE TABLE message (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL,
  message VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (ID)
)
ENGINE = INNODB
AUTO_INCREMENT = 16
AVG_ROW_LENGTH = 2340
CHARACTER SET utf8
COLLATE utf8_general_ci
ROW_FORMAT = DYNAMIC;

--
-- Описание для таблицы valid_type
--
DROP TABLE IF EXISTS valid_type;
CREATE TABLE valid_type (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  validation_type VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (ID)
)
ENGINE = INNODB
AUTO_INCREMENT = 4
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci
ROW_FORMAT = DYNAMIC;

-- 
-- Вывод данных для таблицы column_validation
--
INSERT INTO column_validation VALUES
(1, 'message', 3),
(2, 'name', 3),
(3, 'email', 2),
(4, 'email', 3);

-- 
-- Вывод данных для таблицы message
--
INSERT INTO message VALUES
(9, NULL, NULL, NULL),
(10, 'default', 'default', 'default'),
(11, 'default', 'default@jbnkj', 'default'),
(12, 'default', 'default', 'default'),
(13, 'defaultxcv', 'defaultcx', 'default'),
(14, 'defaultxcv', '', 'default'),
(15, 'default', 'default@dfbg', 'default');

-- 
-- Вывод данных для таблицы valid_type
--
INSERT INTO valid_type VALUES
(1, 'date'),
(2, 'email'),
(3, 'not_null');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;