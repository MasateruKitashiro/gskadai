-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 4 月 07 日 15:29
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookname` varchar(64) NOT NULL,
  `bookURL` text NOT NULL,
  `naiyou` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookname`, `bookURL`, `naiyou`, `indate`) VALUES
(1, 'jsbook', 'testURL', 'TEST', '2021-04-08 00:19:33'),
(2, 'isbook2', 'test2URL', '0', '2021-04-07 21:14:36'),
(3, 'PHPbook1', 'test3URL', '0', '2021-04-07 21:14:43'),
(4, 'PHPbook2', 'test4URL', '0', '2021-04-07 21:14:56'),
(5, 'PHPbook3', 'test3URL', '0', '2021-04-07 21:15:09'),
(7, 'Laravelbook', 'testURL', '0', '2021-04-07 21:15:17');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
