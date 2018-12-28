-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2018 г., 14:30
-- Версия сервера: 5.6.37-log
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cosshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Мобильные телефоны', NULL),
(2, 'Наушники', NULL),
(3, 'Ноутбуки', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `title`, `description`, `date`) VALUES
(1, 3, 1, 'Всё кошерно', 'Да всё просто зашибись', '2018-11-12'),
(3, 3, 6, 'Красиво', 'Хочу такой же', '2018-11-12'),
(4, 1, 5, 'Вау', 'Не вау', '2018-11-30'),
(5, 2, 1, 'Всё круто', 'Служит подставкой для пива', '2018-12-10');

-- --------------------------------------------------------

--
-- Структура таблицы `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cost_of_service` int(11) NOT NULL,
  `start_adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deliveries`
--

INSERT INTO `deliveries` (`id`, `name`, `description`, `city`, `phone`, `email`, `cost_of_service`, `start_adress`) VALUES
(1, 'BoxBerry', 'Международная', 'USA', '89222817829', 'boxberry@mail.ru', 300, 'г.Санкт-Петербург, ул. Пушкина, д.4'),
(2, 'Фокс-экспресс', 'Внутри России', 'Russia', '89233723733', 'fox@inbox.ru', 200, 'г.Москва, ул. Радищева, д.5 '),
(3, 'CITY express', 'Международная', 'ASIA', '82937347324', 'cifi@mail.ru', 200, 'г.Москва, ул. Большая Садовая, д.3');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `items_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `products_list` varchar(100) NOT NULL,
  `start_adress` varchar(100) NOT NULL,
  `end_adress` varchar(100) DEFAULT NULL,
  `date_ordering` date NOT NULL,
  `date_departure` date DEFAULT NULL,
  `date_arrival` date DEFAULT NULL,
  `date_arrival_fact` date DEFAULT NULL,
  `total_cost` float NOT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `order_details` text,
  `report` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `delivery_id`, `products_list`, `start_adress`, `end_adress`, `date_ordering`, `date_departure`, `date_arrival`, `date_arrival_fact`, `total_cost`, `order_status`, `order_details`, `report`) VALUES
(1, 3, 1, '1,2', 'г.Санкт-Петербург, ул. Пушкина, д.4', 'Заполните поле', '2018-12-04', '2018-12-15', '0000-00-00', '0000-00-00', 19723, '', '', ''),
(2, 3, 1, '4', 'г.Санкт-Петербург, ул. Пушкина, д.4', 'Заполнил', '2018-12-04', NULL, NULL, NULL, 8300, NULL, NULL, NULL),
(3, 3, 2, '3', 'г.Москва, ул. Радищева, д.5 ', 'ул.Пушкина, д.Колотушкина, кв. имени Путина, спросите Акутина', '2018-12-14', NULL, NULL, NULL, 1465, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `main_photo` varchar(1000) NOT NULL,
  `full_face_photo` varchar(1000) DEFAULT NULL,
  `profile_photo` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `main_photo`, `full_face_photo`, `profile_photo`) VALUES
(1, 'b1.jpg', 'b1-1.jpg', NULL),
(2, 'b2.jpg', '', NULL),
(3, 'b3.jpg', NULL, NULL),
(4, 'b4.jpg', NULL, NULL),
(5, 'b5.jpg', NULL, NULL),
(6, '5c0fc385a05f6.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `photos_id` int(11) DEFAULT NULL,
  `suppliers_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `add_by_user` int(11) NOT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `description_short` text NOT NULL,
  `description_full` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `discount_price` float DEFAULT NULL,
  `added_date` date NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `photos_id`, `suppliers_id`, `categories_id`, `add_by_user`, `tax_id`, `name`, `description_short`, `description_full`, `city`, `price`, `discount_price`, `added_date`, `balance`) VALUES
(1, 1, 2, 1, 1, 3, 'Lenovo S850', 'Тонкий и легкий смартфон Lenovo S850 подчеркнет ваш неповторимый стиль. Модель в стеклянном корпусе оснащена 5-дюймовыйм дисплеем с HD разрешением и широкими углами обзора, мощным четырехъядерным процессором и двумя SIM-картами.', 'Тонкий и легкий смартфон Lenovo S850 подчеркнет ваш неповторимый стиль. Модель в стеклянном корпусе оснащена 5-дюймовыйм дисплеем с HD разрешением и широкими углами обзора, мощным четырехъядерным процессором и двумя SIM-картами. С помощью двух камер с высоким разрешением (13 МПикс сзади и 5 МПикс спереди) вы сможете запечатлеть волнующие моменты жизни и мгновенно поделиться ими с друзьями. Корпус поставляется в трех расцветках: розовой, белой и темно-синей.\r\nLenovo S850 – это стильная модель в стеклянном корпусе, представленная во множестве расцветок. Толщина смартфона составляет всего 8,2 мм, а вес — 140 г.\r\nБлагодаря 5-дюймовому HD-дисплею с широкими углами обзора на смартфоне Lenovo S850 удобно и приятно играть, обмениваться сообщениями, смотреть видеоролики или путешествовать в Интернете.\r\nЧетырехъядерный процессор с частотой 1,3 ГГц обеспечивает лучшую работу нескольких приложений одновременно, быструю работу ОС Android, качественное воспроизведение HD-видео и графики в играх.\r\nОдин смартфон, два номера телефона Хотите сэкономить на тарифах за мобильную связь, использовать телефон за границей без роуминга или просто завести отдельный номер для работы? Тогда выбирайте смартфон S850 с двумя SIM-картами!\r\nAndroid 4.4 радует взгляд превосходным дизайном, в режиме блокировки на экран можно выводить фотографии или видеоклипы. ОС отличается высокой производительностью, позволяет быстро переключаться между запущенными приложениями и содержит множество интеллектуальных функций.', 'China', 7350, NULL, '2018-10-24', 4),
(2, 2, 1, 1, 1, 3, 'ASUS ZenFone Go ZB452KG', 'Новый и яркий дизайн! 8ГБ оперативной памяти помогут решить почти любые задачи. Камера высокого разрешения и громкий динамик делают работу с мультимедиа максимально комфортной. Восьмиядерный процессор делает работу стабильной.', 'Новый и яркий дизайн! 8ГБ оперативной памяти помогут решить почти любые задачи. Камера высокого разрешения и громкий динамик делают работу с мультимедиа максимально комфортной. Восьмиядерный процессор делает работу стабильной.', 'China', 12000, NULL, '2018-10-24', 7),
(3, 3, 2, 2, 1, 1, 'Наушники Lenovo Y 7.1', 'Lenovo GXD0J16085 – игровые наушники с микрофоном, поддерживающие технологию USB 3.0. Это обеспечивает совместимость с большинством современных гаджетов, высокую скорость и производительность. Максимально объёмный звук!', 'Lenovo GXD0J16085 – игровые наушники с микрофоном, поддерживающие технологию USB 3.0. Это обеспечивает совместимость с большинством современных гаджетов, высокую скорость и производительность. Максимально объёмный звук!', 'China', 1250, NULL, '2018-10-24', 2),
(4, 4, 1, 1, 1, 1, 'ASUS ZenFone Max Pro', 'ZenFone Max Pro – это смартфон нового поколения, созданный на базе процессора Snapdragon 636. Отличаясь великолепной производительностью и долгой работой в автономном режиме, он будет отличным выбором для самых активных пользователей.', 'ZenFone Max Pro – это смартфон нового поколения, созданный на базе процессора Snapdragon 636. Отличаясь великолепной производительностью и долгой работой в автономном режиме, он будет отличным выбором для самых активных пользователей.', 'USA', 13500, 7500, '2018-10-24', 9),
(5, 5, 3, 1, 1, 1, 'Samsung Galaxy S7', 'Samsung Galaxy S7 откроет для вас мир технологически совершенных вещей, таких как: очки виртуальной реальности Samsung Gear VR, камеру Gear 360 и смарт-часы Samsung Gear S2. Экосистема совместимых устройств создана, чтобы дарить вам незабываемые впечатления.', 'Samsung Galaxy S7 откроет для вас мир технологически совершенных вещей, таких как: очки виртуальной реальности Samsung Gear VR, камеру Gear 360 и смарт-часы Samsung Gear S2. Экосистема совместимых устройств создана, чтобы дарить вам незабываемые впечатления.', 'China', 11300, 9200, '2018-10-24', 4),
(6, 6, 1, 3, 1, 1, 'ASUSPRO B9440UA', 'Исключительно легкий и прочный бизнес-ноутбук B9440 с большим дисплеем – незаменимый спутник в деловых поездках в любую точку мира. Тщательно продуманная конструкция позволила разработать 14-дюймовый экран с разрешением Full-HD.', 'Исключительно легкий и прочный бизнес-ноутбук B9440 с большим дисплеем – незаменимый спутник в деловых поездках в любую точку мира. Тщательно продуманная конструкция позволила разработать 14-дюймовый экран с разрешением Full-HD.', 'USA', 30300, 28800, '2018-10-24', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_cost` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `city` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `site` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `description`, `city`, `phone`, `site`) VALUES
(1, 'ASUS', 'In search of incredible', 'USA', '23264664', 'asus.com'),
(2, 'Lenovo', NULL, 'China', '6361534', 'lenovo.com'),
(3, 'Samsung', 'Южнокорейская группа компаний', 'South Korea', '9325214', 'samsung.com'),
(4, 'Panasonic', 'Ideas for life', 'Japan', '535832832', 'panasonic.com');

-- --------------------------------------------------------

--
-- Структура таблицы `taxes`
--

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL,
  `official_number` varchar(50) NOT NULL,
  `description` text,
  `country` varchar(50) NOT NULL,
  `tax_rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `taxes`
--

INSERT INTO `taxes` (`id`, `official_number`, `description`, `country`, `tax_rate`) VALUES
(1, '#232.223', 'Госпошлина', 'USA', 50),
(2, '#122.532', 'Вывоз', 'Japan', 23.3),
(3, '#456.5435', 'Техника', 'USA', 15.3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `family_name` varchar(100) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` varchar(1000) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `access_level` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `family_name`, `sex`, `birthday`, `avatar`, `adress`, `access_level`) VALUES
(1, 'cool.selutin99@yandex.ru', 'e10adc3949ba59abbe56e057f20f883e', 'Иван', 'Пупкин', 'Фрегалов', 'М', '1981-10-16', NULL, 'Ага', 1),
(2, 'admin@yandex.ru', 'e10adc3949ba59abbe56e057f20f883e', 'Иван', 'Иванов', 'Иванович', 'М', '1999-07-14', NULL, 'Именно та улица', 2),
(3, 'tester@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', 'Михаил', 'Жмышенко', 'Петрович', 'М', '1999-07-14', '5bfbd84d62a03.jpg', 'ул.Пушкина, д.Колотушкина, кв. имени Путина, спросите Акутина', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`items_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_id` (`delivery_id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_id` (`photos_id`),
  ADD KEY `suppliers_id` (`suppliers_id`),
  ADD KEY `tax_id` (`tax_id`),
  ADD KEY `categories_id` (`categories_id`),
  ADD KEY `add_by_user` (`add_by_user`);

--
-- Индексы таблицы `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taxes`
--
ALTER TABLE `taxes`
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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`photos_id`) REFERENCES `photos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`suppliers_id`) REFERENCES `suppliers` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`tax_id`) REFERENCES `taxes` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`add_by_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
