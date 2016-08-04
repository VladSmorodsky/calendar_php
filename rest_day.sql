-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 04 2016 г., 23:32
-- Версия сервера: 5.7.9
-- Версия PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rest_day`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rest`
--

DROP TABLE IF EXISTS `rest`;
CREATE TABLE IF NOT EXISTS `rest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Caption` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rest`
--

INSERT INTO `rest` (`id`, `Date`, `Caption`) VALUES
(2, '2016-08-23', 'Супер праздник'),
(4, '2015-10-09', 'День рождения Владислава Смородского'),
(31, '2016-06-15', 'Великий праздник'),
(45, '2016-05-03', 'День лентяя'),
(46, '2016-09-12', 'Влад Смородский зачислен на прохождение курсов по направлению PHP-developer'),
(47, '2016-11-01', 'Владислав Смородский принят на работу в компанию NetPEAK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
