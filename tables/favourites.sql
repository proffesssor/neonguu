-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 12 2023 г., 10:31
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `c92737bg_neon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `favourites`
--
-- Создание: Мар 16 2023 г., 11:09
--

DROP TABLE IF EXISTS `favourites`;
CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `StudentNumber` text NOT NULL,
  `Mail` text NOT NULL,
  `Time` text NOT NULL,
  `PcNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `favourites`
--

INSERT INTO `favourites` (`id`, `Name`, `StudentNumber`, `Mail`, `Time`, `PcNumber`) VALUES
(6, 'Анатолий', '777777', '', '2023-03-29', ''),
(8, 'Анатолий', '313131', '', '2023-04-02', ''),
(9, 'Агапов Владислав Денисович', '121911', '', '2023-04-02', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
