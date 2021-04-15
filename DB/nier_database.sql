-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 15 2021 г., 16:50
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nier_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `Login` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`Login`, `Email`, `Password`) VALUES
('Floppa', 'BigFloppa@russian.cat', '17b4fb6f29d998dabbb6dfe9b7c82701'),
('GigaBrain', 'giga_brain@gmail.com', 'rhrthrt'),
('SimpleIvan', 'IvanTver@mail.ru', '04643e8547ff75dc9df3cf5cc33064ca');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `Message_ID` int(11) NOT NULL,
  `Data` time(6) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`Message_ID`, `Data`, `Login`, `Message`) VALUES
(12, '17:34:28.000000', 'Floppa', 'Где моя кошачья жена?'),
(13, '18:16:04.000000', 'Floppa', '2343'),
(14, '18:53:53.000000', 'Floppa', 'Хто?'),
(15, '18:53:59.000000', 'Floppa', 'Ты?'),
(16, '18:55:04.000000', 'Floppa', 'А мож ты?'),
(17, '19:35:12.000000', 'SimpleIvan', 'Ауф'),
(18, '19:57:27.000000', 'SimpleIvan', 'АБУ АБУ АБУ АБУ АБУ АБУ АБУ АБУ АБУ АБУ АБУ АБУ АБ'),
(19, '19:59:26.000000', 'SimpleIvan', '123'),
(20, '19:59:27.000000', 'SimpleIvan', '123'),
(21, '19:59:28.000000', 'SimpleIvan', '123'),
(22, '19:59:29.000000', 'SimpleIvan', '123'),
(23, '20:21:19.000000', 'Floppa', 'Пиривет'),
(24, '17:38:01.000000', 'Floppa', 'Тутурутутуту'),
(25, '17:38:13.000000', 'SimpleIvan', 'Ты хто?');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Login`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Message_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `Message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`Login`) REFERENCES `accounts` (`Login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
