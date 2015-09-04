--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 6.3.358.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 04.09.2015 21:42:51
-- Версия сервера: 5.5.41-log
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
USE omsdb;

--
-- Описание для таблицы clients
--
DROP TABLE IF EXISTS clients;
CREATE TABLE clients (
  id INT(11) DEFAULT NULL,
  family VARCHAR(255) DEFAULT NULL COMMENT 'Фамилия',
  name VARCHAR(50) DEFAULT NULL COMMENT 'Имя',
  patronymic VARCHAR(255) DEFAULT NULL COMMENT 'Отчечтво',
  phone INT(11) DEFAULT NULL COMMENT 'Номер телефона'
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci
COMMENT = 'Клиенты';

-- 
-- Вывод данных для таблицы clients
--

-- Таблица omsdb.clients не содержит данных

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;