-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 07 2016 г., 19:03
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testnews`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `image`, `date`, `user_id`) VALUES
(7, 'The Air was designed to balance both performance and portability; it has a full-sized keyboard design and a machined aluminium c', 'the-air-was-designed-to-balance-both-performance-and-portability-it-has-a-full-sized-keyboard-design-and-a-machined-aluminium-ca', ' The MacBook Air was the first subcompact laptop offered by Apple since the full-featured 12″ PowerBook G4 was discontinued in 2006. It was also Apple’s first computer with an optional solid-state storage drive. ArsTechnica found “moderate” performance improvements of the 64 GB solid-state drive of the first generation Air over the standard 80 GB hard drive in tests. On October 14, 2008, new models were announced with improved capacities of 128 GB (solid-state) and 120 GB (hard drive). For the late 2010 MacBook Air, only flash storage is available, in 64 or 128 GB capacities on the 11″ model, and 128 or 256 GB on the 13″.', '124f75b33bbcb310099ae66ff983baa4.jpg', '2016-08-07 16:52:30', 53),
(8, 'Walnut Stationary From Grovemade', 'walnut-stationary-from-grovemade', ' I stumbled over the beautiful walnut desk stationary from the US company Grovemade a couple of days ago. I don’t even have a desk in the traditional sense of the word right now, but the products in the gallery above are making me want to get one.\r\n\r\nBeautiful stuff. Prices start around 29 USD (for the paperclip holder), with the complete set running for 700-800 USD.', 'b9b6ec4010df86fde0c52271e58fa12d.jpg', '2016-08-07 16:55:04', 53),
(10, 'This is the Time to Buy a Nintendo 3DS', 'this-is-the-time-to-buy-a-nintendo-3ds', ' Apart from the horrible name (naming has never been Nintendos strong suit), the new model adds some solid features like face-tracking 3D, an extra analogue stick for camera controls, support for amiibo figures (Nintendos take on the Skylanders concept) and a stronger CPU for shorter load times. The announcement also served to lower the prices of existing 3DS models – both in retail and on the second-hand market.\r\n\r\nWhether you take the plunge for a New Nintendo 3DS, or opt for the older models which are now incredibly affordable, there’s never been a better time to get in on the Nintendo 3DS.', '583e0bc5a905af7050277c7b3b891863.jpg', '2016-08-07 16:57:04', 53),
(11, 'The Life and Works of German Industrial Designer Dieter Rams', 'the-life-and-works-of-german-industrial-designer-dieter-rams', ' Rams began studies in architecture and interior decoration at Wiesbaden School of Art in 1947. Soon after in 1948, he took a break from studying to gain practical experience and conclude his carpentry apprenticeship. He resumed studies at Wiesbaden School of Art in 1948 and graduated with honours in 1953 after which he began working for Frankfurt based architect Otto Apel. In 1955, he was recruited to Braun as an architect and an interior designer. In addition, in 1961, he became the Chief Design Officer at Braun until 1995.', '807a485eb35e8708d1fd1cfba336e734.jpg', '2016-08-07 16:58:43', 54),
(12, 'Lorem Ipsum is simply dummy text of the printing', 'lorem-ipsum-is-simply-dummy-text-of-the-printing', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '47b3f26002c863e53c7bb0dd0965e6f1.jpg', '2016-08-07 16:59:13', 54),
(13, 'Why do we use it?', 'why-do-we-use-it', ' It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '22f950a6a043b8bb4bef1b2f863d024f.jpg', '2016-08-07 17:01:00', 55),
(14, 'Where can I get some?', 'where-can-i-get-some', ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '084a4f06e264f88ad01c40ca4add52eb.jpg', '2016-08-07 17:01:22', 55);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(125) NOT NULL,
  `activation_code` varchar(60) DEFAULT NULL,
  `activated` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activation_code`, `activated`) VALUES
(53, 'rustam', '701b5b1f174f0ea2fc5aa718f173de66', 'isakjanov.r@gmail.com', 'ro4isuakarajdnzdm6oj4l80gm0arhua', NULL),
(54, 'newUser', '6edb30d974d76b7cec56bfea44c869fb', 'new@mail.ru', 'c1zayawrz2s5y3zy0je4p6b567lzzbl3', NULL),
(55, 'testUser', '5d9c68c6c50ed3d02a2fcf54f63993b6', 'test@mail.ru', 's9t8hlh8wlv8fr3fv1qklxvtec3xptj4', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
