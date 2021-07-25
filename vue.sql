-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 25 2021 г., 15:10
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vue`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `message_id` int NOT NULL,
  `name` tinytext NOT NULL,
  `content` text NOT NULL,
  `message_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`message_id`, `name`, `content`, `message_date`) VALUES
(18, 'Цезарь', 'Великий враг спрячется там, где ты меньше всего будешь его искать.', '2021-07-25 12:13:27'),
(19, 'Теория Шахмат', 'Единственный способ стать умнее — играть с более умным противником', '2021-07-25 12:14:09'),
(20, 'Чарли Чаплин', 'Глупость — это то, что Чарли Чаплин занял второе место в конкурсе клонов Чарли Чаплина в Германии.', '2021-07-25 12:15:06'),
(21, 'Мистер Грин', 'Чем дольше слушаешь, тем слаще речь.', '2021-07-25 12:27:03'),
(23, 'Сэр Уинстон Черчилль', 'Успех – это способность шагать от одной неудачи к другой, не теряя энтузиазма.', '2021-07-25 14:38:53'),
(24, 'Михаэль Шумахер', 'Добившись чего-то, ты всегда чувствуешь опустошение, но именно это и заставляет тебя побеждать снова.\r\n', '2021-07-25 14:48:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
