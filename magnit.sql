-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2017 г., 12:31
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magnit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`) VALUES
(1, 'progserg');

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL,
  `choose` int(1) NOT NULL,
  `question1` int(3) NOT NULL DEFAULT '0',
  `question2` int(3) NOT NULL DEFAULT '0',
  `question3` int(3) NOT NULL DEFAULT '0',
  `question4` int(3) NOT NULL DEFAULT '0',
  `question5` int(3) NOT NULL DEFAULT '0',
  `question6` int(3) NOT NULL DEFAULT '0',
  `question7` int(3) NOT NULL DEFAULT '0',
  `question8` int(3) NOT NULL DEFAULT '0',
  `question9` int(3) NOT NULL DEFAULT '0',
  `question10` int(3) NOT NULL DEFAULT '0',
  `question11` int(3) NOT NULL DEFAULT '0',
  `question12` int(3) NOT NULL DEFAULT '0',
  `question13` int(3) NOT NULL DEFAULT '0',
  `question14` int(3) NOT NULL DEFAULT '0',
  `question15` int(3) NOT NULL DEFAULT '0',
  `question16` int(3) NOT NULL DEFAULT '0',
  `question17` int(3) NOT NULL DEFAULT '0',
  `question18` int(3) NOT NULL DEFAULT '0',
  `question19` int(3) NOT NULL DEFAULT '0',
  `question20` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `choose`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `question18`, `question19`, `question20`) VALUES
(1, 1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22),
(2, 2, 3, 4, 5, 6, 7, 8, 9, 10, 3, 12, 13, 14, 15, 6, 17, 18, 19, 2, 1, 10),
(3, 3, 1, 10, 5, 15, 7, 8, 9, 1, 4, 3, 13, 14, 15, 0, 17, 18, 19, 20, 21, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `number` int(2) NOT NULL,
  `question` text NOT NULL,
  `answer1` text NOT NULL,
  `answer2` text NOT NULL,
  `answer3` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `number`, `question`, `answer1`, `answer2`, `answer3`) VALUES
(1, 1, 'ffds', 'fsdfsfdgg', 'jgjdg', 'jsefvaa'),
(2, 2, 'fsdgds', 'kgk', '4', '5'),
(3, 3, 'jtyjtyj', 'jjeee', 'jjjwwww', '2222gg'),
(4, 4, 'да какого хера', 'такого', 'хз', 'шо?'),
(5, 5, 'qwertyuiop', 'mkkm', 'hjh', 'zz'),
(6, 6, 'ertyuiop', 'zxcvb', 'poiuytre', 'mvcdrtyui');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `result` int(3) NOT NULL,
  `choose1` int(1) NOT NULL DEFAULT '0',
  `choose2` int(1) NOT NULL DEFAULT '0',
  `choose3` int(1) NOT NULL DEFAULT '0',
  `choose4` int(1) NOT NULL DEFAULT '0',
  `choose5` int(1) NOT NULL DEFAULT '0',
  `choose6` int(1) NOT NULL DEFAULT '0',
  `choose7` int(1) NOT NULL DEFAULT '0',
  `choose8` int(1) NOT NULL DEFAULT '0',
  `choose9` int(1) NOT NULL DEFAULT '0',
  `choose10` int(1) NOT NULL DEFAULT '0',
  `choose11` int(1) NOT NULL DEFAULT '0',
  `choose12` int(1) NOT NULL DEFAULT '0',
  `choose13` int(1) NOT NULL DEFAULT '0',
  `choose14` int(1) NOT NULL DEFAULT '0',
  `choose15` int(1) NOT NULL DEFAULT '0',
  `choose16` int(1) NOT NULL DEFAULT '0',
  `choose17` int(1) NOT NULL DEFAULT '0',
  `choose18` int(1) NOT NULL DEFAULT '0',
  `choose19` int(1) NOT NULL DEFAULT '0',
  `choose20` int(1) NOT NULL DEFAULT '0',
  `sessionID` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `date`, `result`, `choose1`, `choose2`, `choose3`, `choose4`, `choose5`, `choose6`, `choose7`, `choose8`, `choose9`, `choose10`, `choose11`, `choose12`, `choose13`, `choose14`, `choose15`, `choose16`, `choose17`, `choose18`, `choose19`, `choose20`, `sessionID`) VALUES
(33, 'serg', '2017-01-24 16:01:21', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '88ctc8dqiim0ei1v8ohj3uogm6'),
(113, 'bf', '2017-01-31 16:01:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '424k53g3a340t4n18e3hb1h4f1'),
(114, 'bf', '2017-01-31 16:01:54', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '424k53g3a340t4n18e3hb1h4f1'),
(115, 'pppoo', '2017-01-31 16:01:20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '6k69no7m20n88ue57bgmckmok4'),
(116, 'm,jjh', '2017-01-31 16:01:45', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'qtgvfkgv5r18lb6si5egaenu51'),
(117, 'jjkrrr', '2017-01-31 16:01:29', 0, 1, 3, 2, 1, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'u9ujfhm3ohdgs4v05t0pirpoe1'),
(118, 'vvbb', '2017-01-31 16:01:24', 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'vtl1gi2b8f2gm8afqep0mfgn91'),
(119, 'kkkkk', '2017-01-31 16:01:01', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'dijv2mncjei5hvmemnfr489sa4'),
(120, 'adrr', '2017-01-31 16:01:03', 0, 3, 3, 3, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'c67fjphnmbb7tpkph25fqd78f0'),
(121, 'aaaa', '2017-01-31 16:01:54', 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '97q3aa2andiqvj8q6hvb26pa77'),
(122, 'ddd', '2017-01-31 16:01:53', 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'c133k7utqfjsn27sb421cse3t1'),
(123, 'ttbb', '2017-01-31 16:01:48', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'acac5lsmsvircrns3s60pam0l7'),
(124, 'iiii', '2017-01-31 16:01:36', 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3srtc164r5b6v0j2kae5tl5tk5'),
(125, 'vvv', '2017-01-31 16:01:37', 216, 3, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '3v5obnuqienrdpk0fbqb189os7'),
(126, 'yeyeyert', '2017-01-31 17:01:08', 221, 3, 2, 1, 2, 3, 1, 2, 3, 1, 2, 1, 1, 2, 1, 3, 1, 1, 2, 1, 3, 't72491ugrvtilne1jggipafsf7'),
(127, 'xxx', '2017-01-31 17:01:34', 202, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 1, 3, 1, 2, 3, 'sdnf0difokskdonaq423r488u4'),
(128, 'yyy', '2017-01-31 17:01:17', 204, 3, 1, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 2, 3, 1, 2, 2, 1, 3, 2, 'bscbeln5lj9pn1rcjdhf13c4o2'),
(129, 'rthrt', '2017-01-31 17:01:50', 250, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'du052a4nqvcr5bvjc3ke15i3q6'),
(130, 'dfghj', '2017-01-31 19:01:02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '38usmngikrfhnvf4c8khuq21i0'),
(131, 'jjkjkj', '2017-01-31 19:01:44', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'nh2q7vk9p70nd7bi10lk1jobb2'),
(132, 'uurr', '2017-02-01 07:02:00', 218, 1, 3, 2, 1, 1, 3, 1, 2, 3, 3, 3, 3, 1, 2, 1, 1, 1, 1, 3, 2, 'mu8ttckoseiddugccc797rn3i3'),
(133, 'serg', '2017-02-04 09:02:08', 214, 1, 2, 3, 1, 2, 3, 3, 1, 2, 1, 1, 3, 3, 3, 2, 1, 2, 3, 3, 2, '8u0bjbo96niul409pmcb6milp5'),
(134, 'rthrt', '2017-02-04 09:02:24', 218, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 1, 1, 3, 'pmchkvuuvv9gq22p1akmatf7v0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
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
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
