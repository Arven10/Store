-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2014 г., 13:39
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Cart`
--

CREATE TABLE IF NOT EXISTS `Cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Comment`
--

CREATE TABLE IF NOT EXISTS `Comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Order`
--

CREATE TABLE IF NOT EXISTS `Order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `OrderDetails`
--

CREATE TABLE IF NOT EXISTS `OrderDetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_order` (`id_order`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Photo`
--

CREATE TABLE IF NOT EXISTS `Photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_subcategory` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cost` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_subcategory` (`id_subcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Subcategory`
--

CREATE TABLE IF NOT EXISTS `Subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `User` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id`);

--
-- Ограничения внешнего ключа таблицы `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `User` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id`);

--
-- Ограничения внешнего ключа таблицы `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `User` (`id`);

--
-- Ограничения внешнего ключа таблицы `OrderDetails`
--
ALTER TABLE `OrderDetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `Order` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id`);

--
-- Ограничения внешнего ключа таблицы `Photo`
--
ALTER TABLE `Photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id`);

--
-- Ограничения внешнего ключа таблицы `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_subcategory`) REFERENCES `Subcategory` (`id`);

--
-- Ограничения внешнего ключа таблицы `Subcategory`
--
ALTER TABLE `Subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `Category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
