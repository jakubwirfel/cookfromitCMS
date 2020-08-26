-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sie 2020, 18:53
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cookfromitcms`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  `link` varchar(120) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `addons`
--

INSERT INTO `addons` (`id`, `name`, `image`, `link`, `category`) VALUES
(3, 'User add', '<i class=\"fas fa-user-plus\"></i>', 'userAdd', 1),
(4, 'User delete', '<i class=\"fas fa-user-minus\"></i>', 'userdelete', 1),
(5, 'Send mail to user', '<i class=\"fas fa-envelope\"></i>', 'sendEmail', 1),
(6, 'Change permissions', '<i class=\"fas fa-user-shield\"></i>', 'changePermissions', 1),
(7, 'Display user', '<i class=\"fas fa-user-alt\"></i>', 'userDisplay', 1),
(8, 'Block/ Unblock user', '<i class=\"fas fa-user-lock\"></i>', 'blockUser', 1),
(9, 'Modify user data', '<i class=\"fas fa-user-edit\"></i>', 'modifyUser', 1),
(10, 'Find user ID', '<i class=\"fas fa-search\"></i>', 'findUser', 1),
(11, 'Approve recipe', '<i class=\"fas fa-check\"></i>', 'recipeApprove', 2),
(12, 'Delete recipe', '<i class=\"fas fa-minus\"></i>', 'recipeDelete', 2),
(13, 'Add recipe', '<i class=\"fas fa-plus\"></i>', 'recipeAdd', 2),
(14, 'Change recipe data', '<i class=\"fas fa-edit\"></i>', 'recipeChange', 2),
(15, 'Find recipe', '<i class=\"fas fa-search\"></i>', 'recipeFind', 2),
(16, 'Check user liked recipe', '<i class=\"fas fa-thumbs-up\"></i>', 'checkLikedRecipe', 2),
(17, 'Modify ingredients list', '<i class=\"fas fa-list-ol\"></i>', 'modifyIngredients', 2),
(18, 'Approve comments to recipe', '<i class=\"fas fa-comment-medical\"></i>', 'approveCommentRecipe', 2),
(19, 'Delete comment to recipe', '<i class=\"fas fa-comment-slash\"></i>', 'deleteCommentRecipe', 2),
(20, 'Add tip', '<i class=\"fas fa-plus\"></i>', 'tipAdd', 3),
(21, 'Delete tip', '<i class=\"fas fa-minus\"></i>', 'tipDelete', 3),
(22, 'Modify tip', '<i class=\"fas fa-edit\"></i>', 'tipModify', 3),
(23, 'Find tip', '<i class=\"fas fa-search\"></i>', 'tipFind', 3),
(24, 'Display Tip', '<i class=\"fas fa-sticky-note\"></i>', 'tipDisplay', 3),
(25, 'Display recipe', '<i class=\"fas fa-file-alt\"></i>', 'recipeDisplay', 2),
(26, 'Approve comments to tip', '<i class=\"fas fa-comment-medical\"></i>', 'approveCommentTip', 3),
(27, 'Delete comment to tip', '<i class=\"fas fa-comment-slash\"></i>', 'deleteCommentTip', 3),
(28, 'Display comments to Tips', '<i class=\"fas fa-comments\"></i>', 'commentDisplayTip', 3),
(29, 'Display comment to recipe', '<i class=\"fas fa-comments\"></i>', 'commentsDisplayRecipe', 2),
(30, 'Display logs', '<i class=\"fas fa-cogs\"></i>', 'displayLogs', 4),
(31, 'Print logs', '<i class=\"fas fa-print\"></i>', 'printLogs', 4),
(32, 'Send logs to email', '<i class=\"fas fa-envelope\"></i>', 'sendLogs', 4),
(33, 'Find log', '<i class=\"fas fa-search\"></i>', 'findLog', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `addons_categorys`
--

CREATE TABLE `addons_categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `addons_categorys`
--

INSERT INTO `addons_categorys` (`id`, `name`) VALUES
(1, 'User'),
(2, 'Recipe'),
(3, 'Tips'),
(4, 'Logs');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indeksy dla tabeli `addons_categorys`
--
ALTER TABLE `addons_categorys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT dla tabeli `addons_categorys`
--
ALTER TABLE `addons_categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `addons`
--
ALTER TABLE `addons`
  ADD CONSTRAINT `addons_ibfk_1` FOREIGN KEY (`category`) REFERENCES `addons_categorys` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
