-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Июн 04 2015 г., 09:52
-- Версия сервера: 5.5.42
-- Версия PHP: 5.4.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `rea`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bay_user`
--

CREATE TABLE `bay_user` (
  `id` int(11) NOT NULL,
  `Fam` text NOT NULL,
  `Name` text NOT NULL,
  `FName` text NOT NULL,
  `date` date NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `price` double(9,2) NOT NULL,
  `naimen` text NOT NULL,
  `bay` tinyint(1) NOT NULL,
  `id_sale` int(11) NOT NULL,
  `doc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bay_user`
--

INSERT INTO `bay_user` (`id`, `Fam`, `Name`, `FName`, `date`, `email`, `phone`, `price`, `naimen`, `bay`, `id_sale`, `doc`) VALUES
(1, 'Иванов', 'Иван', 'Натанович', '2015-06-03', 'maskaevda@gmail.com', '+79271703334', 9999999.00, 'Дом на берегу моря', 1, 1, '../doc/026f7c2e35d6e2e5010110cdc31d40d4.docx');

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `obj_name` text NOT NULL,
  `price` double(9,2) NOT NULL,
  `photo` text,
  `opis` text NOT NULL,
  `reserv` tinyint(1) NOT NULL,
  `kategor` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`id`, `obj_name`, `price`, `photo`, `opis`, `reserv`, `kategor`) VALUES
(2, 'Квартира на ТЭЦ-2', 100500.00, '../uploads/dcb0f8701d953ac738a6c96eb90918efOSFQwvq373g.jpg', 'fsffasxfasfx', 0, '1'),
(3, 'Склад Вектор', 100500.00, '../uploads/b0763a2f1208e45ed19b612ff443070c1b5e1b4s-480.jpg', 'яртаипыстиаяврсичаяпи лчьсяивабтчрлыторсьмчаспч', 0, '2');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_login` text NOT NULL,
  `user_password` text NOT NULL,
  `user_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `user_name`) VALUES
(1, 'maskaevda', '123456', 'Маскаев Д.А.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bay_user`
--
ALTER TABLE `bay_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bay_user`
--
ALTER TABLE `bay_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
