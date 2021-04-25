-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 25 2021 г., 18:36
-- Версия сервера: 5.5.62-38.14
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `GISAPR01`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `startwork` date NOT NULL,
  `endwork` date NOT NULL,
  `typeworking` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `idnumber` varchar(10) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `birthday`, `address`, `startwork`, `endwork`, `typeworking`, `position`, `login`, `password`, `idnumber`, `phone`) VALUES
(4, 'Фролов Вячеслав Олександрович', '1977-02-01', 'Харківська обл. Зміївський р-н, с. Черемушне, вул. Ковтуна, 46', '2009-09-16', '0000-00-00', 0, 'директор', 'frolgis', '4', '2815603018', '+380675750132 +380509816112'),
(5, 'Міщенко Тетяна Семенівна', '1957-04-10', 'Харківська обл. Харківський р-н, м. Південне, вул. Лермонтова, 13', '2009-09-16', '0000-00-00', 0, 'головний бухгалтер', 'MTS', '2', '2091801740', '+380962330518'),
(6, 'Кізілова Віра Сергіївна', '1983-09-10', 'м. Харків вул. Валентинівська 33', '2010-06-01', '0000-00-00', 0, 'головний експерт-оцінювач', 'vkizilova', '1', '1111111111', '+380967659072'),
(7, 'Перепелиця Ігор Михайлович', '1999-01-01', 'м. Харків вул. Роганська, ', '2016-06-12', '0000-00-00', 0, 'начальник відділу землеустрою', 'igor1', '1', '1111111111', '+380967659072');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
