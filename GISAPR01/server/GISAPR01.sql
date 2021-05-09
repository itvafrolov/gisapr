-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 25 2021 г., 19:23
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
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `phone2` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `note2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `address`, `code`, `passport`, `contact`, `phone`, `phone2`, `email`, `note`, `note2`) VALUES
(1, 'ТОВ "Енерго-сервісна компанія ЕСКО-ПІВНІЧ"', '04073, м. Київ, вул. Рилєєва, буд. 10-А, офіс 518', '30732144', 'Статут', 'Шевченко Світлана,<hr> Кірілова Вікторія', '+380673796656 <hr>+380673208236 <br>+380664825326', '', 's.tkachenko@esco-pivnich.com, v.kirilova@esco-pivnich.com', 'доп: v.kirilova@esco-pivnich.com', 'любое примечание'),
(2, 'ХАРКІВСЬКЕ ДЕРЖАВНЕ ДОСЛІДНЕ ПРОТЕЗНЕ ПІДПРИЄМСТВО', '61051, м.Харків, вул. Клочківська, буд. 339', '14081462', 'Статут', 'не указано', '+380934751328', '+', 'hddppr@gmail.com', 'доп: ', 'любое примечание'),
(3, 'БОРІВСЬКА СЕЛИЩНА РАДА', 'Харківська обл., Борівський р-н, смт Борова, вул. Миру, буд. 19', '04397939', 'Закон про місцеве самоврядування', 'не указано', '+3805759-6136', '+380', 'ps_borova@ukr.net', 'голова Тертишний Олександр Володимирович', ''),
(4, 'ПСП "ВІКТОРІЯ"', '62241, с. Сковородинівка, Золочівський р-н, Харківська область', '30773490', 'Статут', 'Алексей', '+380505757658', '+380508765072', 'v30773490@gmail.com', '', ''),
(5, 'ДЕРЖАВНИЙ НАВЧАЛЬНИЙ ЗАКЛАД «СЛОБОЖАНСЬКИЙ РЕГІОНАЛЬНИЙ ЦЕНТР ПРОФЕСІЙНОЇ ОСВІТИ»', '62241, селище Одноробівка, вул. Бурсацька, будинок 8, Золочівський р-н, Харківська область', '02547814', '', 'Евгений', '+380680611237', '', 'lits47@ukr.net', '', ''),
(6, 'ТОВ "ЗМІЇВСЬКА ПАПЕРОВА ФАБРИКА"', '63402, Харківська обл., Зміївський р-н, місто Зміїв, вул. Фабрична, будинок 11', '40487681', 'Статут', '', '+380996494995', '', 'pisklova_z@ukr.net', '', ''),
(7, 'ТОВ "АВА-КАПІТАЛ"', '61051, Харківська область, м. Харків, вул. Котельниківська, будинок 5', '38878209', 'Статут', '', '+380996494995', '', 'pisklova_z@ukr.net', '', '');

--- доп
INSERT INTO `clients` (`id`, `name`, `address`, `code`, `passport`, `contact`, `phone`, `phone2`, `email`, `note`, `note2`) VALUES
(8, 'ФГ "Альфа"', 'с. Олександрівка Золочівського району Харківської області', '21235629', 'Статут', 'Ярош Микола Петрович', '+380675741015', '', 'FGALFA@gmail.com ', '', ''),

INSERT INTO `clients` (`id`, `name`, `address`, `code`, `passport`, `contact`, `phone`, `phone2`, `email`, `note`, `note2`) VALUES
(9, 'ПРАТ «ВК «УКРНАФТОБУРІННЯ»', ', 01010, місто Київ, вул. Московська, будинок 32/2', '33152471', 'Статут', 'Чорнотицький Роман', '+380661570852 +380952104133', '', 'r.chernotytskyi@unb.ua', '', '')



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

-- --------------------------------------------------------

--
-- Структура таблицы `historyorders`
--

CREATE TABLE `historyorders` (
  `id` int(11) NOT NULL,
  `ordersid` int(11) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `dataevent` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `historyordersb`
--

CREATE TABLE `historyordersb` (
  `id` int(11) NOT NULL,
  `ordersid` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `dataamount` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `numcontract` int(11) DEFAULT NULL,
  `startcontract` date DEFAULT NULL,
  `typeorder` varchar(10) DEFAULT NULL,
  `ordername` varchar(255) DEFAULT NULL,
  `orderaddress` varchar(255) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `clientid` int(11) DEFAULT NULL,
  `jobload` varchar(255) DEFAULT NULL,
  `ordersb` int(11) DEFAULT NULL,
  `idemploy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `orders` (`id`, `numcontract`, `startcontract`, `typeorder`, `ordername`, `orderaddress`, `deadline`, `clientid`, `jobload`) VALUES
(1, '1', '2021-01-16', 'РК', 'рекультивация шлейф Сахалінського НГКР', 'Богодухівський район, Краснокутська селищна рада', '2021-06-16', 9,'ГИСАПР'),
(2, '4', '2021-02-24', 'НГО', 'нормативна грошова оцінка 8 ділянок', 'Богодухівський район, Краснокутська селищна рада', '2021-08-24', 1 ,'ГИСАПР'),
(3, '5', '2021-03-26', 'РК', 'рекультивация свердловина № 3', 'Богодухівський район, Валківська міська рада', '2021-06-26', 1, 'ГИСАПР'),
(4, '6', '2021-04-22', 'РК', 'рекультивация свердловина № 5', 'Богодухівський район, Валківська міська рада', '2021-07-22', 1, 'ГИСАПР'),
(5, '7', '2021-04-28', 'ТД', 'сервітут', 'Харківський район, Нововодолазька селищна рада', '2021-07-28', 1, 'ГИСАПР'),
(6, '8', '2021-04-28', 'ТД', 'сервітут', 'Харківський район, Нововодолазька селищна рада', '2021-07-28', 1, 'ГИСАПР'),
(7, '188', '2021-04-29', 'ТД', 'пай Баранюк В.Д.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(8, '188', '2021-04-29', 'ТД', 'пай Бобрицький І.М.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(9, '188', '2021-04-29', 'ТД', 'пай Бринюк Г.П.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(10, '188', '2021-04-29', 'ТД', 'пай Буркун Г.О.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(11, '188', '2021-04-29', 'ТД', 'пай Гудиря В.М.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(12, '188', '2021-04-29', 'ТД', 'пай Коваль В.Г.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(13, '188', '2021-04-29', 'ТД', 'пай Коврига М.М', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.');

-- --------------------------------------------------------

--
-- Структура таблицы `ordersb`
--

CREATE TABLE `ordersb` (
  `id` int(11) NOT NULL,
  `ordersid` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `salaryzem` float DEFAULT NULL,
  `salarygeod` float DEFAULT NULL,
  `salaryarch` float DEFAULT NULL,
  `salaryestimator` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ordersemlp`
--

CREATE TABLE `ordersemlp` (
  `id` int(11) NOT NULL,
  `ordersid` int(11) DEFAULT NULL,
  `employid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ordersemlp` (`id`,`ordersid`, `employid`) VALUES
(1,1,1),
(2,2,3),
(3,3,1),
(4,4,1),
(5,5,5),
(6,6,6),
(7,7,5),
(8,8,5),
(9,9,5),
(10,10,5),
(11,11,6),
(12,12,6),
(13,13,6);


INSERT INTO `orders` (`id`, `numcontract`, `startcontract`, `typeorder`, `ordername`, `orderaddress`, `deadline`, `clientid`, `jobload`) VALUES
(1, '1', '2021-01-16', 'РК', 'рекультивация шлейф Сахалінського НГКР', 'Богодухівський район, Краснокутська селищна рада', '2021-06-16', 9,'ГИСАПР'),
(2, '4', '2021-02-24', 'НГО', 'нормативна грошова оцінка 8 ділянок', 'Богодухівський район, Краснокутська селищна рада', '2021-08-24', 1 ,'ГИСАПР'),
(3, '5', '2021-03-26', 'РК', 'рекультивация свердловина № 3', 'Богодухівський район, Валківська міська рада', '2021-06-26', 1, 'ГИСАПР'),
(4, '6', '2021-04-22', 'РК', 'рекультивация свердловина № 5', 'Богодухівський район, Валківська міська рада', '2021-07-22', 1, 'ГИСАПР'),
(5, '7', '2021-04-28', 'ТД', 'сервітут', 'Харківський район, Нововодолазька селищна рада', '2021-07-28', 1, 'ГИСАПР'),
(6, '8', '2021-04-28', 'ТД', 'сервітут', 'Харківський район, Нововодолазька селищна рада', '2021-07-28', 1, 'ГИСАПР'),
(7, '188', '2021-04-29', 'ТД', 'пай Баранюк В.Д.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(8, '188', '2021-04-29', 'ТД', 'пай Бобрицький І.М.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(9, '188', '2021-04-29', 'ТД', 'пай Бринюк Г.П.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(10, '188', '2021-04-29', 'ТД', 'пай Буркун Г.О.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(11, '188', '2021-04-29', 'ТД', 'пай Гудиря В.М.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(12, '188', '2021-04-29', 'ТД', 'пай Коваль В.Г.', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.'),
(13, '188', '2021-04-29', 'ТД', 'пай Коврига М.М', 'Богодухівський район, Золочівська селищна рада', '2021-05-29', 8, 'ФОП Фролов В.О.');



--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `historyorders`
--
ALTER TABLE `historyorders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `historyordersb`
--
ALTER TABLE `historyordersb`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ordersb`
--
ALTER TABLE `ordersb`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ordersemlp`
--
ALTER TABLE `ordersemlp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
