-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 24 2016 г., 05:29
-- Версия сервера: 5.7.13-0ubuntu0.16.04.2
-- Версия PHP: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `product`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product_list_otchet`
--

CREATE TABLE `product_list_otchet` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `year` varchar(10) NOT NULL,
  `monts` varchar(10) CHARACTER SET utf8 NOT NULL,
  `sg` varchar(50) CHARACTER SET utf8 NOT NULL,
  `uchet` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fio` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tab_number` varchar(20) NOT NULL,
  `marka_car` varchar(50) CHARACTER SET utf8 NOT NULL,
  `int_monts` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name_kultura` varchar(100) CHARACTER SET utf8 NOT NULL,
  `agro_uslovia` varchar(255) CHARACTER SET utf8 NOT NULL,
  `shufr` varchar(100) CHARACTER SET utf8 NOT NULL,
  `edinitsa` varchar(10) CHARACTER SET utf8 NOT NULL,
  `work_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `norm_vurabotka` varchar(255) CHARACTER SET utf8 NOT NULL,
  `v_nature` varchar(255) CHARACTER SET utf8 NOT NULL,
  `na_edinitsu` varchar(255) CHARACTER SET utf8 NOT NULL,
  `all_vse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fakt` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product_list_otchet`
--
ALTER TABLE `product_list_otchet`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
