-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 7 月 03 日 01:03
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `ranking_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ranking_table`
--

CREATE TABLE `ranking_table` (
  `id` int(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `first` varchar(64) NOT NULL,
  `first_place` varchar(64) NOT NULL,
  `img_first` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `second` varchar(64) NOT NULL,
  `second_place` varchar(64) NOT NULL,
  `img_second` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `third` varchar(64) NOT NULL,
  `third_place` varchar(64) NOT NULL,
  `img_third` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fourth` varchar(64) NOT NULL,
  `fourth_place` varchar(64) NOT NULL,
  `img_fourth` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fifth` varchar(64) NOT NULL,
  `fifth_place` varchar(64) NOT NULL,
  `img_fifth` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ranking_table`
--

INSERT INTO `ranking_table` (`id`, `name`, `first`, `first_place`, `img_first`, `second`, `second_place`, `img_second`, `third`, `third_place`, `img_third`, `fourth`, `fourth_place`, `img_fourth`, `fifth`, `fifth_place`, `img_fifth`) VALUES
(5, 'ジーズ太郎', '原宿王', '原宿', '', '三茶餃子', '三軒茶屋', '', 'うしうし', '新宿', '', '寿司まさ', '築地', '', 'レストランゼロ', '六本木', ''),
(8, '大豆田とわ子', 'チャーハン王', '渋谷', '', 'ラーメン王', '表参道', '', '餃子亭', '新宿', '', '漬物屋', '築地', '', 'とんかつ夢庵', '六本木', ''),
(12, 'ケンシロウ', 'カツ丼マン', '渋谷', '', '琉球の風', '人形町', '', '肉王', '新宿', '', 'ジンギス館', '札幌', '', 'ようようキッチン', '六本木', ''),
(14, 'オータニさん', '寿司青', '青山一丁目', '', 'うまい亭', '新橋', '', '餃子亭', '有楽町', '', '道産子', '札幌', '', 'とんかつ夢庵', '原宿', ''),
(22, '情熱大陸', 'こうらくえん', '田町', '中華.jpeg', '和膳', '表参道', '和食.jpeg', '寿司よし', '大阪', '寿司.jpeg', '道産子', '梅田', '肉画像.jpeg', 'レストランゼロ', '大宮', '肉画像２.jpeg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ranking_table`
--
ALTER TABLE `ranking_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ranking_table`
--
ALTER TABLE `ranking_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
