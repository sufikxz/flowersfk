-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 27 2024 г., 16:00
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `buqet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `image`, `gender`) VALUES
(1, 'Букет «Каменный сад»', 'Танацетум ( Ромашка кустовая )\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 3700, 'img/boys.jpg', 'м'),
(2, 'Букет «Голубая нежность»', 'Гиацинт, статица.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 3990, 'img/boys1.jpg', 'м'),
(3, 'Букет «Элегантность»', 'Кустовая роза кремовая\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 4636, 'img/boys2.jpg', 'м'),
(4, 'Букет «Крылья любви»', 'Роза кустовая розовая.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 8195, 'img/boys3.jpg', 'м'),
(5, 'Букет «Безупречность»', 'Роза кустовая микс.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 6122, 'img/boys4.jpg', 'м'),
(6, 'Букет «Карамель»', 'Пионы.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 5200, 'img/boys5.jpg', 'м'),
(7, 'Букет «Игривая улыбка»', 'Роза кустовая микс, ромашки полевые, зелень.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 4999, 'img/boys6.jpg', ''),
(7, 'Букет «Игривая улыбка»', 'Роза кустовая микс, ромашки полевые, зелень.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 4999, 'img/boys6.jpg', 'м'),
(8, 'Букет «Розовая радость»', 'Роза одноголовая микс, эвкалипт.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 4799, 'img/boys7.jpg', 'м'),
(9, 'Букет «Очаровательный»', 'Роза одноголовая, роза кустовая, альстромерия, эвкалипат.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 5399, 'img/boys8.jpg', 'м'),
(1, 'Композиция из цветов в коробке «Синее сердце»', 'Роза синяя ( крашенная ).\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис)\r\n', 3999, 'img/girls1.jpg', 'ж'),
(10, 'Букет «Пионы микс»', 'Пионы розовые, пионы белые.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 3799, 'img/boys9.jpg', 'м'),
(11, 'Букет «Любовь»', 'Роза кустовая микс.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 3999, 'img/boys10.jpg', 'м'),
(12, 'Букет «Розовый закат»', 'Роза кустовая , эвкалипт.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 3899, 'img/boys11.jpg', 'м'),
(13, 'Букет «Оранжевый закат»', 'Роза одноголовая, гербера, хризантема, ромашки, эвкалипт, гвоздика.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 4399, 'img/boys12.jpg', 'м'),
(14, 'Букет «Свидание»', 'Тюльпаны, гвоздика цветная, фисташка.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)', 3899, 'img/boys13.jpg', 'м'),
(15, 'Букет «Фонтан нежности»', 'Роза одноголовая, роза кустовая.\r\nУпаковка (лента, пленка, крафт, сетка, пленка матовая)\r\n', 7999, 'img/boys14.jpg', 'м'),
(2, 'Цветы в коробке «Пионовидные розы»', 'Роза пионовидная одноголовая, эвкалипт\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).', 3999, 'img/girls2.jpg', 'ж'),
(3, 'Цветы в коробке «Цветочный бульвар»', 'Гортензия микс.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).\r\n', 3599, 'img/girls3.jpg', 'ж'),
(4, 'Цветы в коробке «Богиня»', 'Пионы\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).', 4599, 'img/girls4.jpg', 'ж'),
(5, 'Коробка цветов «Рубиновый сад»', 'Роза Эквадор кустовая.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис)', 4299, 'img/girls5.jpg', 'ж'),
(6, 'Букет в коробке «Модница»', 'Роза одноголовая пионовидная, тюльпан, ромашка кустовая, эвкалипт, целозия, зелень.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).', 3999, 'img/girls6.jpg', 'ж'),
(7, 'Букет в коробке «Свет души»', 'Пион микс.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).\r\n', 3499, 'img/girls7.jpg', 'ж'),
(8, 'Цветы в коробке «Восторг»', 'Роза кустовая микс.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).\r\n', 4999, 'img/girls8.jpg', 'ж'),
(9, 'Букет в коробке «Чародейка»', 'Роза пионовидная Misty bubbles, эвкалипт.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис)\r\n', 4599, 'img/girls9.jpg', 'ж'),
(10, 'Цветы в коробке «Барби»', 'Роза одноголовая розовая, роза кустовая.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис)', 5299, 'img/girls10.jpg', 'ж'),
(11, 'Коробка с цветами «Дуэт»', 'Роза кустовая, орхидея, эвкалипт.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).', 4999, 'img/girls11.jpg', 'ж'),
(12, 'Букет в коробке «Мон амур»', 'Роза пионовидная одноголовая, роза кустовая, эвкалипт.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис)\r\n', 3999, 'img/girls12.jpg', 'ж'),
(13, 'Цветы в коробке «Розы Pink Floyd»', 'Розовая роза.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).', 5999, 'img/girls13.jpg', 'ж'),
(14, 'Цветы в коробке «Нежные Розы»', 'Роза Россия.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).\r\n', 4899, 'img/girls14.jpg', 'ж'),
(15, 'Цветы в коробке «Очаровательный»', 'Роза кустовая, эустома, георгин, эвкалипт.\r\nУпаковка (шляпная коробка, квадратный бокс, коробка сердце, оазис).', 4699, 'img/girls15.jpg', 'ж'),
(16, 'Цветы в корзинке «Женские мечты»', 'Пионы розовые, пионы белые, роза пионовидная, эустома, эвкалипт.\r\nУпаковка (Корзина, оазис).\r\n', 3999, 'img/girls16.jpg', 'ж'),
(17, 'Цветы в корзинке «Интрига»', 'Роза кустовая, эустома, эвкалипт.\r\nУпаковка (Корзина, оазис)\r\n', 3390, 'img/girls17.jpg', 'ж'),
(18, 'Цветы в корзинке «Малиновое мороженное»', 'Роза одноголовая, роза кустовая, орхидея, эвкалипт.\r\nУпаковка (Корзина, оазис).', 4599, 'img/girls18.jpg', 'ж'),
(19, 'Букет в корзине «На праздник»', 'Эустома белая, тюльпаны микс, питтоспорум.\r\n( Напиток добавляется по желанию на выбор, уточняйте у менеджера )\r\nУпаковка (Корзина, оазис).', 3799, 'img/girls19.jpg', 'ж'),
(20, 'Корзина с цветами «Эустомы»', 'Роза кустовая, эустома, зелень.\r\nУпаковка (Корзина, оазис).\r\n', 3390, 'img/girls20.jpg', 'ж'),
(21, 'Цветы в корзинке «Сладкое пробуждение»', 'Роза кустовая микс, гортензия, эрингиум, зелень.\r\nУпаковка (Корзина, оазис)\r\n', 3799, 'img/girls21.jpg', 'ж'),
(22, 'Цветы в корзинке «Зефир»', 'Пионы розовые, фисташка.\r\nУпаковка (Корзина, оазис).', 3699, 'img/girls22.jpg', 'ж'),
(23, 'Корзина с цветами «Агата»', 'Роза кустовая микс, зелень.\r\nУпаковка (Корзина, оазис).', 4399, 'img/girls23.jpg', 'ж'),
(24, 'Цветы в корзинке «Красные тюльпаны»', 'Тюльпаны красные.\r\nУпаковка (Корзина, оазис)\r\n', 3999, 'img/girls24.jpg', 'ж'),
(1, 'Гелиевые воздушные шары', 'Цена указана за 1 шт.\r\nГелиевые шарики на ваш вкус.\r\nЖелаемый цвет и размер подпишите в комментариях к заказу, или уточните у менеджера по телефону.\r\nГелиевые шары американского качества.\r\nОбработка специальным веществом ( Hi float ) для длительного полета шариков.', 130, 'img/accessories1.jpg', 'а'),
(2, 'Конфеты «Raffaello» 150 г.', 'Конфеты «Raffaello» 150 г.\r\nИ не надо говорить, что она не любит рафаэлло.\r\nДобавьте конфеты и сделайте вдвойне приятно!', 490, 'img/accessories2.jpg', 'а'),
(3, 'Мягкая игрушка «Плюшевый мишка малый»', 'Аккуратно выполненный плюшевый мишка малого размера для ваших близких.\r\nНа изображении представлен образец. Если вы хотите игрушку в точности как на фото, вам нужно оформить заказ, после чего менеджер вам пришлет фото игрушек на выбор из данной серии!', 1499, 'img/accessories3.jpg', 'а'),
(4, 'Мягкая игрушка «Плюшевый мишка большой»', 'Идеальное сочетание цветов с большой мягкой игрушкой!\r\nОна будет долго напоминать этот приятный момент или другой незабываемый случай!\r\nНа изображении представлен образец. Если вы хотите игрушку в точности как на фото, вам нужно оформить заказ, после чего менеджер вам пришлет фото игрушек на выбор из данной серии!', 3299, 'img/accessories4.jpg', 'а'),
(5, 'Мягкая игрушка «Плюшевый мишка средний»', 'Если вы не можете определиться с размером игрушки, это ваш вариант! Средний размер игрушки это прекрасная возможность продлить воспоминания о данном событии)\r\nНа изображении представлен образец. Если вы хотите игрушку в точности как на фото, вам нужно оформить заказ, после чего менеджер вам пришлет фото игрушек на выбор из данной серии!\r\n', 2199, 'img/accessories5.jpg', 'а'),
(6, 'Воздушные шары цифры', 'Цена указана за 1 комплект\r\nФольгированные шары цифры в серебре и золоте.\r\nАмериканский производитель, дополнительная обработка.\r\nДля выбора комбинации цифр, вам нужно добавить в корзину 2 раза и подписать число в примечании.\r\n', 800, 'img/accessories6.jpg', 'а');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;