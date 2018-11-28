-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 29 2018 г., 00:16
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `banks`
--
CREATE DATABASE IF NOT EXISTS `banks` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `banks`;

-- --------------------------------------------------------

--
-- Структура таблицы `bank`
--
-- Создание: Ноя 28 2018 г., 20:02
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `inn` varchar(12) COLLATE utf8_bin NOT NULL,
  `country` varchar(30) COLLATE utf8_bin NOT NULL,
  `rclass` varchar(20) COLLATE utf8_bin NOT NULL,
  `avalue` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- ССЫЛКИ ТАБЛИЦЫ `bank`:
--

--
-- Очистить таблицу перед добавлением данных `bank`
--

TRUNCATE TABLE `bank`;
--
-- Дамп данных таблицы `bank`
--

INSERT INTO `bank` (`id`, `name`, `inn`, `country`, `rclass`, `avalue`) VALUES
(5, 'GlobalBank', '122222222222', 'USA', 'AAA+', 10000000000);

-- --------------------------------------------------------

--
-- Структура таблицы `deposit`
--
-- Создание: Ноя 28 2018 г., 23:14
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL COMMENT 'id депозита(вклада)',
  `date` date NOT NULL,
  `prog_id` int(11) DEFAULT NULL,
  `start_value` float NOT NULL COMMENT 'стартовый капитал'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- ССЫЛКИ ТАБЛИЦЫ `deposit`:
--   `prog_id`
--       `dpprog` -> `id`
--

--
-- Очистить таблицу перед добавлением данных `deposit`
--

TRUNCATE TABLE `deposit`;
-- --------------------------------------------------------

--
-- Структура таблицы `dpprog`
--
-- Создание: Ноя 28 2018 г., 20:49
--

CREATE TABLE `dpprog` (
  `id` int(11) NOT NULL COMMENT 'id программы',
  `name` varchar(40) COLLATE utf8_bin NOT NULL COMMENT 'наименование программы',
  `percent` float NOT NULL COMMENT 'Процент годовых',
  `bid` int(11) DEFAULT NULL COMMENT 'id банка'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- ССЫЛКИ ТАБЛИЦЫ `dpprog`:
--   `bid`
--       `bank` -> `id`
--

--
-- Очистить таблицу перед добавлением данных `dpprog`
--

TRUNCATE TABLE `dpprog`;
--
-- Дамп данных таблицы `dpprog`
--

INSERT INTO `dpprog` (`id`, `name`, `percent`, `bid`) VALUES
(7, 'Progress', 2.5, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposit_ibfk_1` (`prog_id`);

--
-- Индексы таблицы `dpprog`
--
ALTER TABLE `dpprog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bid` (`bid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id депозита(вклада)', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `dpprog`
--
ALTER TABLE `dpprog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id программы', AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`prog_id`) REFERENCES `dpprog` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `dpprog`
--
ALTER TABLE `dpprog`
  ADD CONSTRAINT `dpprog_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bank` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
