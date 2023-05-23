-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2023 г., 19:35
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `skillbox`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtopic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `subject`, `subtopic`, `text`, `profession`, `data`, `img`) VALUES
(4, 'Космический вызов CSS', 'Создайте кнопку с космической тематикой', 'Продемонстрируйте свои навыки пользовательского интерфейса, создав кнопку, вдохновленную бескрайним космосом.', 'WEB', '14.05.2023', 'courses-1.jpg'),
(5, 'CSS из будущего', 'Создайте набор футуристических переключателей', 'В этой задаче CSS задача состоит в том, чтобы создать набор футуристических переключателей, которые выглядят так, как будто они принадлежат высокотехнологичному расширенному интерфейсу. Задача состоит в том, чтобы создать элегантный и функциональный дизайн с упором на инновационную передовую эстетику', 'WEB', '16.05.2023', 'courses-1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `categories`) VALUES
(1, 'Программирование'),
(2, 'Дизайн'),
(3, 'Иностранный язык');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancies` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `month`, `name`, `text`, `vacancies`, `salary`, `img`) VALUES
(1, 9, 'Аналитик данных', 'Освоите инструменты аналитики на продвинутом уровне. Сможете проводить A/B-тесты, анализировать большие объёмы информации и строить интерактивные графики. Научитесь разрабатывать эффективные решения для бизнеса на основе данных.', '1 477', '60 000', 'courses-1.jpg'),
(2, 10, 'Python-разработчик', 'На Python пишут веб-приложения и нейросети, проводят научные вычисления и автоматизируют процессы. Язык просто выучить, даже если вы никогда не программировали. На курсе вы создадите Telegram-бота, полноценный магазин и аналог популярной соцсети для портфолио, а Центр карьеры поможет найти работу Python-разработчиком.', '4 926', '80 000', 'courses-2.png'),
(3, 10, 'Инженер по тестированию', 'Вы научитесь находить ошибки в работе сайтов и приложений с помощью Java, JavaScript или Python. С первого занятия погрузитесь в практику и сможете начать зарабатывать уже через 4 месяца.', '3 100', '70 000', 'courses-3.png'),
(4, 11, 'Java-разработчик', 'Вы с нуля научитесь программировать на языке Java и создавать веб-приложения на фреймворке Spring. За полгода получите фундаментальные навыки и соберёте портфолио, а мы поможем найти работу.', '4 200', '140 000', 'courses-4.jpg'),
(5, 12, 'Веб-разработчик', 'Веб-разработчик создаёт сайты, сервисы и приложения, которыми мы ежедневно пользуемся. Он разрабатывает интернет-магазины, онлайн-банки, поисковики, карты и почтовые клиенты. Веб-разработчик проектирует внешний вид сайта — фронтенд и программирует сервисную часть — бэкенд.', '3 160', '60 000', 'courses-5.jpg'),
(6, 10, 'Графический дизайнер', 'Вы с нуля получите востребованную профессию на стыке творчества и IT. Научитесь работать в популярных графических редакторах — от Illustrator до Figma. Добавите в портфолио плакаты, логотипы, дизайн упаковки и другие сильные проекты.', '4 800', '40 000', 'courses-6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `courses-speeded`
--

CREATE TABLE `courses-speeded` (
  `id` int(11) NOT NULL,
  `job` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses-speeded`
--

INSERT INTO `courses-speeded` (`id`, `job`, `month`, `name`) VALUES
(1, 'гарантия трудоустройства', '5', 'Аналитик данных'),
(2, 'гарантия трудоустройства', '5,5', 'Java-разработчик');

-- --------------------------------------------------------

--
-- Структура таблицы `exercise`
--

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL,
  `id_courses` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `task` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `exercise`
--

INSERT INTO `exercise` (`id`, `id_courses`, `name`, `task`, `data`) VALUES
(1, 5, 'Разработка сайта', 'Необходимо создать главную страницу сайта', '20.05.2023');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `id_courses` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `id_courses`, `name`, `feedback`, `stars`) VALUES
(10, 2, 'Дмитрий', 'Очень крутые курсы! Отзывчивые преподаватели', 5),
(18, 2, 'Пользователь', 'Прикольно', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `my-courses`
--

CREATE TABLE `my-courses` (
  `id` int(11) NOT NULL,
  `id_courses` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `my-courses`
--

INSERT INTO `my-courses` (`id`, `id_courses`, `id_users`) VALUES
(3, '5', '3'),
(4, '6', '3'),
(15, '4', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `profession`
--

CREATE TABLE `profession` (
  `id` int(11) NOT NULL,
  `profession` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `profession`
--

INSERT INTO `profession` (`id`, `profession`) VALUES
(1, 'WEB'),
(2, 'Python'),
(3, 'Java'),
(4, 'Аналитик данных'),
(5, 'Инженер по тестированию'),
(6, 'Дизайнер');

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `surname`, `profession`, `experience`, `img`) VALUES
(1, 'Василий', 'Пупкин', 'WEB', '35', 'teacher-1.jpg'),
(5, 'No', 'Name', 'Python', '99', 'teacher-2.jpg'),
(6, 'Анатолий', 'Мозгоедов', 'Java', '5', 'teacher-4.jpg'),
(7, 'Дарья', 'Петрова', 'WEB', '7', 'teacher-3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`) VALUES
(3, 'Артур ', 'Тонких', '1', '$2y$10$vVkh8lRAxDuIv.jCF3p8RuShKbkTttfkUETP.2vWMvV6f35aYddKm'),
(7, 'Пользователь', ' ', '2', '$2y$10$tIdnCQ41SgDwC/P7.aAke.n89ET6MFGWi73ewcG5VHPViE2S2LSjG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses-speeded`
--
ALTER TABLE `courses-speeded`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `my-courses`
--
ALTER TABLE `my-courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `courses-speeded`
--
ALTER TABLE `courses-speeded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `my-courses`
--
ALTER TABLE `my-courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `profession`
--
ALTER TABLE `profession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
