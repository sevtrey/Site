-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 16 2013 г., 07:38
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `note`
--

-- --------------------------------------------------------

--
-- Структура таблицы `nt`
--

CREATE TABLE IF NOT EXISTS `nt` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(15) CHARACTER SET cp1251 NOT NULL,
  `Password` varchar(20) CHARACTER SET cp1251 NOT NULL,
  `Group` varchar(20) CHARACTER SET cp1251 NOT NULL,
  `Surname` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  `City` varchar(20) CHARACTER SET cp1251 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `nt`
--

INSERT INTO `nt` (`code`, `Login`, `Password`, `Group`, `Surname`, `City`) VALUES
(1, 'andre', '****', 'Администраторы', NULL, 'Львов'),
(3, 'miyok', '**********', 'Администроторы', 'Бондаренко', 'Донецк'),
(4, 'lucky', '******', 'Пользователи', 'Лунтиков', 'Киев'),
(5, 'luna', '********', 'Пользователи', NULL, 'Желтые воды'),
(6, 'revo', '******', 'Пользователи', NULL, 'Чернорусь');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
