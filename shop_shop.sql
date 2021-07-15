-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 15 2021 г., 16:19
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lorem` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `img`, `name`, `lorem`, `price`) VALUES
(1, 'img/1.jpeg', 'Капуста', '- Девушка, вы замуж хотите?\r\n- За тебя что-ли, козел?\r\n- Не за меня, а за мою капусту. ', 12),
(2, 'img/2.jpeg', 'Горох', 'Маленькая дочка обращается к маме:  — Мама, свари мне гороховый суп.  — Хорошо.  — Только без гороха — как в садике!\r\n\r\n', 17),
(3, 'img/3.jpeg', 'Огурцы', ' ЧП в школе: на праздновании Нового Года мальчика в костюме огурца укусил физрук.\r\n', 20),
(4, 'img/4.jpeg', 'Помидоры', ' Встречаются два наркомана, один несет мотыгу. — Зачем тебе мотыга!? — С сорняками бороться иду. — С какими еще сорняками? — Да я в огороде коноплю высадил, а тут эти помидоры поперли!\r\n\r\n', 25);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
