-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-09-21 12:10:09
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1100221`
--

-- --------------------------------------------------------

--
-- 資料表結構 `larp_about`
--

CREATE TABLE `larp_about` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_about`
--

INSERT INTO `larp_about` (`id`, `img`, `title`, `text`, `sh`) VALUES
(1, 'a01.jpg', 'Live Action Role Playing', '實境角色扮演遊戲（LARP）是角色扮演遊戲的其中一種形式，參與者在扮演角色的同時須要實際的做出動作行為。玩家的目標是在現實環境的限制中追求虛構環境扮演，同時與其他扮演角色互動。歡迎有興趣的朋友可以加入我們的行列，一起經歷美好的羈絆時光吧!', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `larp_admin`
--

CREATE TABLE `larp_admin` (
  `id` int(10) NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_admin`
--

INSERT INTO `larp_admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'aaa', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `larp_hero`
--

CREATE TABLE `larp_hero` (
  `id` int(10) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_hero`
--

INSERT INTO `larp_hero` (`id`, `img`, `title`, `text`, `sh`) VALUES
(1, 'hero01.jpg', 'LARP Times', '合作創作故事、嘗試追求人物目標及挑戰、沉沁於虛構的環境都可以是樂趣來源。LARPs還可以包括其他小遊戲譬如謎題解答，以及體育類的模擬武器作戰。 一些LARPs更強調藝術方面，如相互作用的劇情或挑戰主題。Avant-garde或arthaus 事件有特別的實驗方法和高度的文化願望，偶爾會在諸如節日或藝術博物館的美術環境中舉行。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `larp_image`
--

CREATE TABLE `larp_image` (
  `id` int(10) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_image`
--

INSERT INTO `larp_image` (`id`, `img`, `text`, `sh`) VALUES
(1, 'img01.jpg', '活動照片', 1),
(2, 'img02.jpg', '活動照片', 1),
(3, 'img03.jpg', '活動照片', 1),
(4, 'img04.jpg', '活動照片', 1),
(5, 'img05.jpg', '活動照片', 1),
(6, 'img06.jpg', '活動照片', 1),
(7, 'img07.jpg', '活動照片', 1),
(8, 'img08.jpg', '活動照片', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `larp_link`
--

CREATE TABLE `larp_link` (
  `id` int(10) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_link`
--

INSERT INTO `larp_link` (`id`, `text`, `href`, `sh`) VALUES
(1, '中古世紀實境遊戲', 'https://www.facebook.com/LarpBattleGround/', 1),
(2, '炙燒黑鮪魚商會', 'https://www.facebook.com/tunaslarp/', 1),
(3, '伊諾斯維', 'https://www.facebook.com/eynosva/', 1),
(4, '福爾摩莎尼亞戰記', 'https://www.facebook.com/%E7%A6%8F%E7%88%BE%E6%91%A9%E6%B2%99%E5%B0%BC%E4%BA%9E%E6%88%B0%E7%B4%80-101821974769040/', 1),
(5, '紅藍爭霸Sky and Blood', 'https://www.facebook.com/LarpSkyAndBlood/?modal=admin_todo_tour', 1),
(6, '中部軍團聯盟', 'https://www.facebook.com/groups/2117718711828973/', 1),
(7, 'LarpBear冒險者公會櫃台', 'https://www.facebook.com/LARPBEAR/', 1),
(8, '遊牧人 The Nomad', 'https://www.facebook.com/the.nomad.2015', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `larp_news`
--

CREATE TABLE `larp_news` (
  `id` int(10) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_news`
--

INSERT INTO `larp_news` (`id`, `img`, `title`, `day`, `place`, `text`, `sh`) VALUES
(3, 'news01.jpg', '特別任務[性轉]', '2020年7月6日', '線上活動', 'Larp扮裝季 - 線上活動。因流行風潮，不少社友在玩修圖app做出不少美照。此活動串蒐集大家的性轉照作為集中相簿，純讓大家互相欣賞。純屬娛樂，沒有規劃獎勵或評比。', 0),
(4, 'news02.jpg', '泡綿大作戰&海戰規則測試場', '2020年8月8日', '三號水門', '故事情節：福爾摩沙尼亞戰紀\r\n地點：三號水門', 0),
(5, 'news03.jpg', '紅藍爭霸-派西斯海灣', '2020年8月29日', '花博公園', '皇龍之裔的一小支先遣隊從玉龍島抵達派西斯海灣，希望拉攏當地居民以建立據點。\r\n當地尚處於無政府狀態，蒼藍陣線的騎士與赤色號角的游擊部隊也正在爭奪此地。\r\n此地圖為資源爭奪戰，三方必須護送村民採集糧食。\r\n皇龍之裔會有角少的人數，但能夠接受雙方的資源收買進行暫時的結盟。\r\n最終資源分數最高的一方能或的當地居民的信賴，取得派西斯海灣控制權。', 1),
(6, 'news04.jpg', 'Larp扮裝季 第10季 [法師]', '2020年8月31日 ', '線上活動', '主題:法師\r\n泛指符合中世紀背景之施法單位\r\n於本活動頁>討論區>上傳照片\r\n寫下角色名稱與簡介\r\n於10/31截稿投票\r\n累積分數將可兌換LARP相關獎勵', 1),
(7, 'news05.jpg', '拉普風格烤肉會!', '2020年10月10日', '3號水門', '歡迎穿上你的扮裝, 帶上所有符合風格的周邊, 一同度過一個拉普下午烤肉會。\r\n我們將在那裏進行烤肉活動，以及一些趣味活動、例如狩獵、打牌、音樂、划拳、小比武....等。\r\n大家可以帶家人朋友來，一起體驗另一面生活化的LARP文化。', 1),
(8, 'news06.jpg', 'Larp扮裝季第11季 [萬聖季]', '2020年11月30日', '線上活動', '主題:萬聖季\r\n泛指符合中世紀背景之異種族\r\n如精靈、矮人、歌布林、獸人、不死族...等、與其他奇幻種族。\r\n於本活動頁>討論區>上傳照片\r\n寫下角色名稱與簡介\r\n截稿投票延長至11/30\r\n累積分數將可兌換LARP相關獎勵', 1),
(9, 'news07.jpg', '扮裝季12-冷鋒季', '202１年3月18日', '線上活動', '冷鋒季\r\n適合冬季的larp服裝。\r\n例如重保暖裝備或其他冬季特色搭配。\r\n於本活動頁>討論區>上傳照片\r\n寫下角色名稱與簡介\r\n截稿日3/31，審核通過可獲得20點積分點數，將可兌換LARP相關獎勵。', 1),
(10, 'news08.jpg', '紅藍歷險Beta 重返黎明', '2021年3月27日', '大安森林公園', '在之前[鳥籠中的戰爭]戰役後，黎明勉強鎮抵擋住黑暗軍團的入侵，但也付出慘痛的代價。\r\n[重返黎明]中，玩家可扮演駐地營地或冒險者協力復甦，或扮演魔軍的殘黨完成未完的工作。\r\n這場活動的戰鬥頻率與規模較低，會以交涉互動資源統籌為主。', 1),
(11, 'news09.jpg', '春季慶典-LARP烤肉餐會', '2021年4月24日', '台北市大同區堤外道路運動場', '嗨~冒險者，邀請你一起參與這次的【春季慶典-LARP烤肉餐會】\r\n時間：4/24 (六) 中午12點\r\n地點：三號水門外運動場\r\n(進三號水門後右轉, 紅土跑道旁廣場)\r\n這次的活動的費用是成人$450，小孩$300(140公分以下)\r\n請先填妥報名表格，以方便聯繫繳費資訊', 1),
(12, 'news10.jpg', '扮裝季13-升級季', '2021年6月17日', '線上活動', '改良優化裝扮。\r\n兩張以上照片，現在與過去自己同系列的裝扮比較，提高品質、細緻度或造型。\r\n於本活動頁>討論區>上傳照片\r\n寫下角色名稱與簡介\r\n截稿日3/31，審核通過可獲得20點積分點數，將可兌換LARP相關獎勵。', 1),
(13, 'news11.jpg', '扮裝季14-戰團季', '2021年9月17日', '線上活動', '3人以上同風格團體照，或同團風格3個以上不同人各人照。\r\n已1帳號代表投稿即可，並標記所有團員，以領取點數發放。\r\n於本活動頁>討論區>上傳照片\r\n寫下角色名稱與簡介\r\n截稿日3/31，審核通過可獲得20點積分點數，將可兌換LARP相關獎勵。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `larp_time`
--

CREATE TABLE `larp_time` (
  `id` int(10) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_time`
--

INSERT INTO `larp_time` (`id`, `text`, `sh`) VALUES
(1, '2021年9月21日', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `larp_total`
--

CREATE TABLE `larp_total` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `larp_total`
--

INSERT INTO `larp_total` (`id`, `date`, `total`) VALUES
(1, '2021-09-20', 1),
(2, '2021-09-21', 2);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `larp_about`
--
ALTER TABLE `larp_about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `larp_admin`
--
ALTER TABLE `larp_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `larp_hero`
--
ALTER TABLE `larp_hero`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `larp_image`
--
ALTER TABLE `larp_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `larp_link`
--
ALTER TABLE `larp_link`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `larp_news`
--
ALTER TABLE `larp_news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `larp_time`
--
ALTER TABLE `larp_time`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `larp_total`
--
ALTER TABLE `larp_total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_about`
--
ALTER TABLE `larp_about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_admin`
--
ALTER TABLE `larp_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_hero`
--
ALTER TABLE `larp_hero`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_image`
--
ALTER TABLE `larp_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_link`
--
ALTER TABLE `larp_link`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_news`
--
ALTER TABLE `larp_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_time`
--
ALTER TABLE `larp_time`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `larp_total`
--
ALTER TABLE `larp_total`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
