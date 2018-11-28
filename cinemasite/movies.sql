-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 28 2018 г., 20:04
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
-- База данных: `movies`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hall`
--

CREATE TABLE `hall` (
  `id` int(11) NOT NULL COMMENT 'id кинозала',
  `name` varchar(30) NOT NULL COMMENT 'имя кинозала',
  `type` varchar(30) NOT NULL COMMENT 'категория'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `hall`
--

INSERT INTO `hall` (`id`, `name`, `type`) VALUES
(7, 'ÐšÐ¸Ð½Ð¾Ð·Ð°Ð» 2', '2d Ð±Ð¾Ð»ÑŒÑˆÐ¾Ð¹'),
(8, 'ÐšÐ¸Ð½Ð¾Ð·Ð°Ð» ÐŸÐ Ðž', 'ÐšÐ¾Ð¼Ñ„Ð¾Ñ€Ñ‚ 2d'),
(9, 'ÐšÐ¸Ð½Ð¾Ð·Ð°Ð» 4', '3d, 2d'),
(10, 'ÐšÐ¸Ð½Ð¾Ð·Ð°Ð» 5', 'ÐšÐ¾Ð¼Ñ„Ð¾Ñ€Ñ‚ 3d');

-- --------------------------------------------------------

--
-- Структура таблицы `movie`
--

CREATE TABLE `movie` (
  `film_id` int(11) NOT NULL COMMENT 'номер фильма',
  `film_name` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'название фильма',
  `film_genre` varchar(40) CHARACTER SET latin1 NOT NULL COMMENT 'жанр фильма',
  `film_director` varchar(40) CHARACTER SET latin1 NOT NULL COMMENT 'режиссер фильма',
  `film_year` date NOT NULL COMMENT 'дата выпуска фильма',
  `film_boxoff` int(12) NOT NULL COMMENT 'сборы фильма'
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;

--
-- Дамп данных таблицы `movie`
--

INSERT INTO `movie` (`film_id`, `film_name`, `film_genre`, `film_director`, `film_year`, `film_boxoff`) VALUES
(5, 'ÐÐ²Ð°Ñ‚Ð°Ñ€', 'Ð¤Ð°Ð½Ñ‚Ð°ÑÑ‚Ð¸ÐºÐ°', 'Ð”Ð¶ÐµÐ¹Ð¼Ñ ÐšÑÐ¼ÐµÑ€Ð¾Ð½', '2009-12-10', 2147483647),
(6, 'ÐžÐ½Ð¾', 'Ð£Ð¶Ð°ÑÑ‹', 'ÐÐ½Ð´Ñ€ÐµÑ ÐœÑƒÑÐºÐµÑ‚Ñ‚Ð¸', '2017-09-07', 700000000),
(7, 'Ð Ð¾Ð±Ð¸Ð½ Ð“ÑƒÐ´: ÐÐ°Ñ‡Ð°Ð»Ð¾', 'ÐŸÑ€Ð¸ÐºÐ»ÑŽÑ‡ÐµÐ½Ð¸Ñ', 'ÐžÑ‚Ñ‚Ð¾ Ð‘Ð°Ñ„ÐµÑ€ÑÑ‚', '2018-11-29', 0),
(8, 'Ð¤Ð°Ð½Ñ‚Ð°ÑÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ Ñ‚Ð²Ð°Ñ€Ð¸ 2', 'Ð¤ÑÐ½Ñ‚ÐµÐ·Ð¸', 'Ð”ÑÐ²Ð¸Ð´ Ð™ÐµÐ¹Ñ‚Ñ', '2018-11-15', 438000000);

-- --------------------------------------------------------

--
-- Структура таблицы `mvsession`
--

CREATE TABLE `mvsession` (
  `id` int(11) NOT NULL COMMENT 'id сеанса',
  `hall_id` int(11) DEFAULT NULL COMMENT 'id кинозала',
  `movie_id` int(11) DEFAULT NULL COMMENT 'id фильма',
  `date` date NOT NULL COMMENT 'дата и время начала',
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `mvsession`
--

INSERT INTO `mvsession` (`id`, `hall_id`, `movie_id`, `date`, `time`) VALUES
(13, 8, 7, '2018-11-29', '11:00:00'),
(14, 7, 7, '2018-11-29', '15:45:00'),
(15, 9, 8, '2018-11-29', '12:00:00'),
(16, 10, 8, '2018-11-30', '22:35:00'),
(18, 9, 8, '2018-11-29', '12:00:00'),
(19, 7, 7, '2018-11-29', '15:45:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`film_id`);

--
-- Индексы таблицы `mvsession`
--
ALTER TABLE `mvsession`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hall_id` (`hall_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id кинозала', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `movie`
--
ALTER TABLE `movie`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'номер фильма', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `mvsession`
--
ALTER TABLE `mvsession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id сеанса', AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `mvsession`
--
ALTER TABLE `mvsession`
  ADD CONSTRAINT `mvsession_ibfk_1` FOREIGN KEY (`hall_id`) REFERENCES `hall` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mvsession_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`film_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
