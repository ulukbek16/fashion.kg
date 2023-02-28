-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 13 2018 г., 09:46
-- Версия сервера: 5.7.14
-- Версия PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fashion`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `dolj` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `dolj`, `image`, `about`) VALUES
(1, 'Данат', 'Директор', 'http://localhost/turism/example/team/team1.jpg', 'Строительная компания Дом строй основана в 2013 году. Компания специализируется на возведении многоэтажных домов и бизнес-центров премиум и комфорт класса. Дом строй  —  динамично развивающаяся компания. Мы входим в топ 5 успешных строительных компаний Кыргызстана.\r\n\r\nНа сегодняшний день в активе Дом строй 4 готовых объекта и 4 новых. \r\n\r\nТехнология строительства объектов Дом строй ведется согласно всем строительным нормам и правилам КР.  Наша репутация основана на  качественном возведении объектов с использованием проверенных и экологически чистых материалов международного стандарта стран-производителей: Россия, Турция, Корея. Так, мы гарантируем покупателям надежность, долговечность и экологичность сооружаемых зданий.\r\n\r\n'),
(2, 'Оксана', 'менеджер по продажам', 'http://localhost/turism/example/team/team2.jpg', ''),
(4, 'Настя', 'Фотограф', 'http://localhost/turism/example/team/team4.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `title`, `phone`, `email`) VALUES
(3, 'ulukbek12', '434343434', '45454@mail.ru'),
(7, 'Ruslan', '+9975544545', 'rus@gmail.com'),
(10, 'улук', '+996500949452', '123@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tour`
--

INSERT INTO `tour` (`id`, `title`, `image`, `price`, `content`) VALUES
(21, 'Mango ', 'http://localhost/fashion.kg/example/3.jpg', 100, 'Манго стильная одежда из Европы'),
(20, 'Лучшее качество жизни ', 'http://localhost/fashion.kg/example/4.jpg', 1200, 'Качественная одежда из Италии'),
(18, 'Маха стильная и модная одежда! Новинка сезона', 'http://localhost/fashion.kg/example/1.jpg', 600, 'Маха стильная и модная одежда! Новинка сезона'),
(19, 'Маха стильная и модная одежда!', 'http://localhost/fashion.kg/example/2.jpg', 700, 'Маха стильная и модная одежда! ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
