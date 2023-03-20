-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 20 2023 г., 16:21
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `checkups`
--

-- --------------------------------------------------------

--
-- Структура таблицы `checkups_test`
--

CREATE TABLE `checkups_test` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `list` text NOT NULL,
  `price` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `checkups_test`
--

INSERT INTO `checkups_test` (`id`, `name`, `list`, `price`, `image`) VALUES
(1, '\'name\':\'для мужчин\'', '\'list\':[\'Гормональный скрининг\',\'Тестостерон\',\'Свободный тестостерон\',\'Глобулин, связывающий половые гормоны\']', '\'price\':{\'new\':\'2800\',\'old\':\'3500\'}', '\'image\':{\'path\':\'./public/images/doctor-working-table.png\',\'alt\':\'doctor-working-table\'}'),
(4, '\'name\':\'для женщин\'', '\'list\':[\'Гормональный скрининг\',\'Тестостерон\',\'Свободный тестостерон\',\'Глобулин, связывающий половые гормоны\']', '\'price\':{\'new\':\'1500\',\'old\':\'2000\'}', '\'image\':{\'path\':\'./public/images/doctor-working-table.png\',\'alt\':\'doctor-working-table\'}'),
(5, '\'name\':\'для детей\'', '\'list\':[\'Гормональный скрининг\',\'Тестостерон\',\'Свободный тестостерон\',\'Глобулин, связывающий половые гормоны\']', '\'price\':{\'new\':\'3500\',\'old\':\'5000\'}', '\'image\':{\'path\':\'./public/images/doctor-working-table.png\',\'alt\':\'doctor-working-table\'}'),
(6, '\'name\':\'для всех\'', '\'list\':[\'Гормональный скрининг\',\'Тестостерон\',\'Свободный тестостерон\',\'Глобулин, связывающий половые гормоны\']', '\'price\':{\'new\':\'2700\',\'old\':\'3300\'}', '\'image\':{\'path\':\'./public/images/doctor-working-table.png\',\'alt\':\'doctor-working-table\'}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `checkups_test`
--
ALTER TABLE `checkups_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `checkups_test`
--
ALTER TABLE `checkups_test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
