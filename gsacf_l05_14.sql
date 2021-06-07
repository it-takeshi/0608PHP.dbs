-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 08 日 01:41
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l05_14`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `items_table`
--

CREATE TABLE `items_table` (
  `id` int(11) NOT NULL,
  `maker_id` int(11) NOT NULL,
  `item_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `memo_table`
--

CREATE TABLE `memo_table` (
  `id` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `participant_table`
--

CREATE TABLE `participant_table` (
  `id` int(12) NOT NULL,
  `participant` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nation` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banquet` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `participant_table`
--

INSERT INTO `participant_table` (`id`, `participant`, `nation`, `price`, `banquet`, `hotel`, `type`, `date`, `created_at`, `updated_at`) VALUES
(1, '参加者', '国籍', '10000', '懇親会', 'ホテル', '部屋タイプ', '2021-06-04', '2021-06-03 13:03:43', '2021-06-03 13:03:43'),
(2, '参加', '日本', '20000', '懇親', 'ホテル', 'シングル', '2021-06-04', '2021-06-03 19:04:19', '2021-06-03 19:04:19'),
(3, '参加', '米国', '20000', '懇親', 'ホテル', 'シングル', '2021-06-06', '2021-06-03 19:05:15', '2021-06-03 19:05:15'),
(16, 'ボルシチ', 'ロシア', '10000', '不参加', 'ANA', 'ダブル', '2021-06-06', '2021-06-04 08:05:50', '2021-06-04 08:05:50'),
(17, 'トムヤムクン', 'タイ', '10000', '不参加', 'オークラ', 'シングル', '2021-06-06', '2021-06-04 08:06:17', '2021-06-04 08:06:17'),
(18, 'フォー', 'ベトナム', '20000', '参加', 'オークラ', 'シングル', '2021-06-06', '2021-06-04 08:07:46', '2021-06-04 08:07:46'),
(19, 'パエリア', 'スペイン', '10000', '参加', 'ANA', 'シングル', '2021-06-06', '2021-06-04 08:08:21', '2021-06-04 08:08:21'),
(20, 'タコス', 'メキシコ', '10000', '参加', 'オークラ', 'シングル', '2021-06-06', '2021-06-04 08:09:25', '2021-06-04 08:09:25'),
(29, '田中', '日本', '30000', '参加', 'オークラ', 'シングル', '2021-06-06', '2021-06-08 06:18:03', '2021-06-08 06:18:03'),
(30, 'キム', '韓国', '10000', '不参加', 'ANA', 'シングル', '2021-06-06', '2021-06-08 08:19:36', '2021-06-08 08:19:36'),
(31, 'ミッシェル', 'フランス', '10000', '参加', 'オークラ', 'シングル', '2021-06-06', '2021-06-08 08:20:16', '2021-06-08 08:20:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(20, 'gsgsgs', '2021-06-28', '2021-06-03 11:08:57', '2021-06-03 11:08:57'),
(27, 'ｇｇ', '2021-06-29', '2021-06-04 16:04:26', '2021-06-04 16:04:26'),
(34, 'gsgsgs', '2021-06-29', '2021-06-04 17:11:04', '2021-06-04 17:11:04'),
(38, 'ｓ', '2021-06-05', '2021-06-04 17:19:20', '2021-06-04 17:19:20'),
(39, 'pro', '2021-06-07', '2021-06-07 08:14:06', '2021-06-07 08:14:06'),
(40, 'birthday', '2021-06-11', '2021-06-07 08:27:57', '2021-06-07 08:27:57'),
(41, 'gsgsgs gsgsgs', '2021-06-07', '2021-06-07 12:31:27', '2021-06-07 12:31:27');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `items_table`
--
ALTER TABLE `items_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `memo_table`
--
ALTER TABLE `memo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `participant_table`
--
ALTER TABLE `participant_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `items_table`
--
ALTER TABLE `items_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `memo_table`
--
ALTER TABLE `memo_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `participant_table`
--
ALTER TABLE `participant_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
