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
-- Структура таблицы `users`
--
-- Создание: Янв 13 2023 г., 18:29
-- Последнее обновление: Апр 12 2023 г., 07:12
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `StudentNumber` text NOT NULL,
  `Mail` text NOT NULL,
  `PcNumber` text NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Name`, `StudentNumber`, `Mail`, `PcNumber`, `Time`) VALUES
(1, 'Свободен', '', '1', '21-1', '11:06'),
(2, 'Свободен', '', '1', '21-2', '14:17'),
(3, 'Свободен', '', '1', '21-3', '22:29'),
(4, 'Свободен', '', '', '21-4', ''),
(5, 'Свободен', '', '1', '21-5', '10:12'),
(6, 'Свободен', '', '1', '35-1', '16:55'),
(7, 'Свободен', '', '1', '35-2', '17:02'),
(8, 'Свободен', '', '1', '35-3', '22:08'),
(9, 'Свободен', '', 'dfdfsfdsf@mail.ru', '35-4', '20:12'),
(10, 'Свободен', '', '1', '35-5', '06:56'),
(11, 'Открыто', '', '', '', '11:06'),
(12, '183596195', '1084', '4sAdUUFYAO7xbV__ZikgVt_jiH4', '', ''),
(13, 'Свободен', '', '1', 'ps5-1', '22:38'),
(14, 'Свободен', '', '1', 'ps5-2', '16:55'),
(15, 'Свободен', '', '1', 'ps5-3', '16:55'),
(16, 'Свободен', '', '1', 'ps5-4', '13:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
