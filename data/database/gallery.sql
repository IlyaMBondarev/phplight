-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 18 2020 г., 12:00
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sources`
--

CREATE TABLE `sources` (
  `id` int(10) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/default.jpg',
  `views` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sources`
--

INSERT INTO `sources` (`id`, `src`, `views`) VALUES
(1, 'img/1.jpg', 0),
(2, 'img/2.jpg', 0),
(3, 'img/3.jpg', 0),
(4, 'img/4.jpg', 0),
(5, 'img/15.jpg', 0),
(6, 'img/dafault.jpg', 0),
(7, 'img/5.jpg', 0),
(8, 'img/6.jpg', 0),
(9, 'img/7.jpg', 0),
(10, 'img/8.jpg', 0),
(11, 'img/9.jpg', 0),
(12, 'img/10.png', 0),
(13, 'img/11.png', 0),
(14, 'img/12.png', 0),
(15, 'img/13.png', 0),
(16, 'img/14.jpg', 0),
(17, 'img/dafault.jpg', 0),
(18, 'img/16.jpg', 0),
(19, 'img/17.jpg', 0),
(20, 'img/18.jpg', 0),
(21, 'img/19.jpg', 0),
(22, 'img/20.jpg', 0),
(23, 'img/21.jpg', 0),
(24, 'img/default.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sources`
--
ALTER TABLE `sources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
