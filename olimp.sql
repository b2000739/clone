-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2023 г., 01:39
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `olimp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `participation`
--

CREATE TABLE `participation` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_olimp` int(11) NOT NULL,
  `points` int(191) DEFAULT NULL,
  `test-1` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'не дан',
  `test-2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'не дан',
  `test-3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'не дан',
  `test-4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'не дан',
  `test-5` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'не дан'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `participation`
--

INSERT INTO `participation` (`id`, `id_user`, `id_olimp`, `points`, `test-1`, `test-2`, `test-3`, `test-4`, `test-5`) VALUES
(1, 3, 1, 20, '', '', '', '', ''),
(2, 3, 8, 20, '', '', '', '', ''),
(3, 3, 12, 20, '', '', '', '', ''),
(4, 3, 4, 20, '', '', '', '', ''),
(5, 3, 3, 20, '', '', '', '', ''),
(6, 3, 1, 20, '', '', '', '', ''),
(7, 3, 3, 20, '', '', '', '', ''),
(8, 4, 10, 20, '', '', '', '', ''),
(9, 4, 1, 20, '', '', '', '', ''),
(10, 4, 1, 20, '', '', '', '', ''),
(11, 4, 1, 20, '', '', '', '', ''),
(12, 4, 4, 20, '', '', '', '', ''),
(13, 4, 4, 20, '', '', '', '', ''),
(14, 4, 4, 20, '', '', '', '', ''),
(15, 4, 4, 20, '', '', '', '', ''),
(16, 4, 4, 20, '', '', '', '', ''),
(17, 4, 4, 20, '', '', '', '', ''),
(18, 1, 1, 20, '1', '1', '1', '1', '1'),
(19, 4, 5, 20, 'dfg', '8', 'Русский', '120', '30-40'),
(20, 4, 4, 20, '', '', '', '', ''),
(21, 4, 1, 20, '', '', '', '', ''),
(22, 4, 1, 20, '', '', '', '', ''),
(23, 4, 1, 20, 'asdfsadf', '9', 'Математика', '150', ''),
(24, 4, 1, 123, 'asfdsadfa', '', '', '', '40+'),
(25, 4, 1, 20, 'sadfsdf', '9', 'Математика', '100', '20-30'),
(26, 4, 3, 234, 'asdfsadf', '10', 'Математика', '120', '30-40'),
(27, 4, 6, 30, 'dsfg', '10', 'Математика', '120', '30-40'),
(28, 5, 1, 0, 'Все хорошо', '11', 'История', '150', '40+'),
(29, 5, 3, 0, 'Все хорошо', '11', 'История', '120', '40+'),
(30, 5, 4, 0, 'Все хорошо', '10', 'Русский', '150', '30-40'),
(31, 5, 5, 0, 'Все хорошо', '10', 'Русский', '120', '20-30'),
(32, 5, 6, 0, 'Все хорошо', '10', 'Математика', '120', '20-30'),
(33, 5, 7, 0, 'Мне не понравилось', '10', 'Русский', '100', '30-40'),
(34, 5, 15, 0, 'Сайт довольно хорош но страдает функционал', '11', 'Русский', '120', '20-30'),
(35, 5, 8, 0, 'Тесты довольно сырые', '11', 'Математика', '150', '20-30'),
(36, 5, 9, 0, 'Физика мой любимый предмет', '11', 'Русский', '100', '40+'),
(37, 5, 10, 0, 'Мой самый любимый предмет', '10', 'Русский', '100', '40+'),
(38, 5, 11, 0, 'Все хорошо', '10', 'Русский', '100', '40+'),
(39, 5, 12, 0, 'Сойдет', '11', 'Математика', '100', '40+');

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(1100) NOT NULL,
  `profile` int(11) NOT NULL,
  `points` int(30) NOT NULL,
  `class` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `name`, `profile`, `points`, `class`) VALUES
(1, 'Основная подготовительная программа средней школы по математике', 1, 20, 4),
(3, 'ЕГЭ по математике', 1, 100, 11),
(4, 'ЕГЭ по обществознанию', 2, 100, 11),
(5, 'ВПР по природоведению', 5, 30, 5),
(6, 'ВПР по окр. миру', 6, 30, 5),
(7, 'ЕГЭ по географии', 7, 100, 11),
(8, 'ЕГЭ по биологии', 8, 100, 11),
(9, 'ЕГЭ по физике', 9, 100, 11),
(10, 'Литрбол', 10, 50, 11),
(11, 'ЕГЭ по истории', 11, 100, 11),
(12, 'ЕГЭ по русскому языку', 13, 100, 11),
(13, 'Международная олимпиада по математике ', 1, 150, 11),
(14, 'Общеобластная олимпиада по теме графы', 1, 100, 11),
(15, 'Общешкольная олимпиада на тему рельефы', 7, 40, 5),
(16, 'Русский медвежонок для учящихся 5 классов', 13, 30, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `name`, `caption`, `img`) VALUES
(1, 'Математика', ' Наука, которая поможет вашему ребенку развить скорость мышления и вычислительные способности. Математика, очень хорошо поможет ему  в реальной жизни, её нужно развивать с малых лет ', 'math.png'),
(2, 'Обществознание', ' Комплекс дисциплин, объектом исследования которых являются различные стороны жизни общества. Как учебный предмет оно включает в себя основы общественных наук  ', 'Без названия.png'),
(5, 'Природоведение', ' совокупность знаний о природе, или естествознание как предмет преподавания. Это начальные сведения по наукам: биология, география, геология, экология, астрономия, физика и химия ', 'images.png'),
(6, 'Окружающий мир', ' Обобщённое понятие, характеризующее природные условия некоторой местности и её  ', 'Без названия (1).png'),
(7, 'География', '   комплекс естественных и общественных наук, изучающих структуру, функционирование и эволюцию географической оболочки, ', 'geography.png'),
(8, 'Биология', '  наука о живых существах и их взаимодействии со средой обитания. Изучает все аспекты жизни, в частности: структуру, функционирование и т.д', 'biology.png'),
(9, 'Физика', ' область естествознания: наука о наиболее общих законах природы, о материи, её структуре, движении и правилах трансформации. Понятия физики и её законы лежат в основе всего естествознания ', 'physics.png'),
(10, 'ОБЖ', '  учебный предмет, изучаемый в учреждениях начального, общего и среднего профессионального образования. Министерство образования РФ рекомендовало изучение курса ОБЖ в об  ', 'OBJ.png'),
(11, 'История', '   Дисциплина \"История\" представляет собирательную картину жизни людей во времени, их социального опыта', 'history.png'),
(12, 'Общствознание', ' комплекс дисциплин, объектом исследования которых являются различные стороны жизни ', 'sociology.png'),
(13, 'Русский язык', ' Крайне важный предметый. Который обязательно сдается на ЕГЭ ', 'russian.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(110) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `patronim` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telephone` varchar(140) NOT NULL,
  `mail` varchar(160) NOT NULL,
  `passport` varchar(120) NOT NULL,
  `role` int(10) NOT NULL,
  `school` varchar(400) NOT NULL,
  `class` int(200) NOT NULL,
  `points` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronim`, `password`, `telephone`, `mail`, `passport`, `role`, `school`, `class`, `points`) VALUES
(1, 'qw', '12', '12', '12', '', '12', '12', 0, '12', 12, 534),
(2, '12', '12', '12', '12', '122', '12', '122', 1, '12', 122, 0),
(3, '', 'Иноземцев', 'Андреевич', '$2y$10$ur1uZgVKw3LZhX1WecrJCeCdfN5KSAnFPsloIcyM6fPekdOQjPouO', '+79658768066', 'Yailiya2008@gmail.com', '8986764563456', 1, 'БОУ СОШ 7', 9, 198),
(4, 'Илья', 'Иноземцев', 'Андреевич', '$2y$10$JvoUBIhB8NHFOagrqgD/.ueRY1SVpMMBAMyfzXkui0knulIyTdcmK', '+79658768066', 'Yailiya2008@gmail.com', '8986764563456', 1, 'БОУ СОШ 7', 11, 1852),
(5, 'Nik03', 'Иноземцев', 'Викторович', '$2y$10$BQmPkUA7J.XEgqPplOwy7u01H5TAX2ls99rtJ2DiJMBTVuR.P965e', '+7-792-936-81-36', 'laletindrakon@gmail.com', '12341242134', 1, 'БОУ СОШ 7', 9, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `participation`
--
ALTER TABLE `participation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
