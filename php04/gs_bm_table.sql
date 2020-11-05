-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 05, 2020 at 01:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bookcomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comm` text COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `url`, `comm`, `datetime`) VALUES
(1, '史上最高のセミナー', 'aaa', 'この本との出会いは衝撃だ!', '2020-10-28 22:56:24'),
(2, 'ジョブ理論', 'https://www.amazon.co.jp/%E3%82%B8%E3%83%A7%E3%83%96%E7%90%86%E8%AB%96-%E3%82%A4%E3%83%8E%E3%83%99%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%82%92%E4%BA%88%E6%B8%AC%E5%8F%AF%E8%83%BD%E3%81%AB%E3%81%99%E3%82%8B%E6%B6%88%E8%B2%BB%E3%81%AE%E3%83%A1%E3%82%AB%E3%83%8B%E3%82%BA%E3%83%A0-%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%83%AA%E3%83%BC%E3%83%80%E3%83%BC1%E4%B8%87%E4%BA%BA%E3%81%8C%E9%81%B8%E3%81%B6%E3%83%99%E3%82%B9%E3%83%88%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E6%9B%B8%E3%83%88%E3%83%83%E3%83%97%E3%83%9D%E3%82%A4%E3%83%B3%E3%83%88%E5%A4%A7%E8%B3%9E%E7%AC%AC2%E4%BD%8D-%E3%83%8F%E3%83%BC%E3%83%91%E3%83%BC%E3%82%B3%E3%83%AA%E3%83%B3%E3%82%BA%E3%83%BB%E3%83%8E%E3%83%B3%E3%83%95%E3%82%A3%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%B3-%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%86%E3%83%B3%E3%82%BB%E3%83%B3/dp/4596551227/ref=sr_1_1?adgrpid=52983051533&amp;dchild=1&amp;gclid=EAIaIQobChMIx-WKw8K97AIV2aqWCh0V9gALEAAYASAAEgLAWPD_BwE&amp;hvadid=338586063296&amp;hvdev=c&amp;hvlocphy=1009279&amp;hvnetw=g&amp;hvqmt=b&amp;hvrand=4060745044769968826&amp;hvtargid=kwd-389906622914&amp;hydadcr=2755_11130005&amp;jp-ad-ap=0&amp;keywords=%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%86%E3%83%B3%E3%82%BB%E3%83%B3+%E3%82%B8%E3%83%A7%E3%83%96%E7%90%86%E8%AB%96&amp;qid=1603002733&amp;sr=8-1&amp;tag=googhydr-22', 'ジョブ理論', '2020-10-18 15:32:38'),
(3, 'ジョブ理論', 'https://www.amazon.co.jp/%E3%82%B8%E3%83%A7%E3%83%96%E7%90%86%E8%AB%96-%E3%82%A4%E3%83%8E%E3%83%99%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%82%92%E4%BA%88%E6%B8%AC%E5%8F%AF%E8%83%BD%E3%81%AB%E3%81%99%E3%82%8B%E6%B6%88%E8%B2%BB%E3%81%AE%E3%83%A1%E3%82%AB%E3%83%8B%E3%82%BA%E3%83%A0-%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%83%AA%E3%83%BC%E3%83%80%E3%83%BC1%E4%B8%87%E4%BA%BA%E3%81%8C%E9%81%B8%E3%81%B6%E3%83%99%E3%82%B9%E3%83%88%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E6%9B%B8%E3%83%88%E3%83%83%E3%83%97%E3%83%9D%E3%82%A4%E3%83%B3%E3%83%88%E5%A4%A7%E8%B3%9E%E7%AC%AC2%E4%BD%8D-%E3%83%8F%E3%83%BC%E3%83%91%E3%83%BC%E3%82%B3%E3%83%AA%E3%83%B3%E3%82%BA%E3%83%BB%E3%83%8E%E3%83%B3%E3%83%95%E3%82%A3%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%B3-%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%86%E3%83%B3%E3%82%BB%E3%83%B3/dp/4596551227/ref=sr_1_1?adgrpid=52983051533&amp;dchild=1&amp;gclid=EAIaIQobChMIx-WKw8K97AIV2aqWCh0V9gALEAAYASAAEgLAWPD_BwE&amp;hvadid=338586063296&amp;hvdev=c&amp;hvlocphy=1009279&amp;hvnetw=g&amp;hvqmt=b&amp;hvrand=4060745044769968826&amp;hvtargid=kwd-389906622914&amp;hydadcr=2755_11130005&amp;jp-ad-ap=0&amp;keywords=%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%86%E3%83%B3%E3%82%BB%E3%83%B3+%E3%82%B8%E3%83%A7%E3%83%96%E7%90%86%E8%AB%96&amp;qid=1603002733&amp;sr=8-1&amp;tag=googhydr-22', 'ジョブ理論', '2020-10-18 15:34:55'),
(4, 'aaa', 'sss', 'gggg', '2020-10-22 09:59:52'),
(18, '', '', '', '2020-10-22 11:18:24'),
(19, 'jijij', 'kokoko', 'gygygy', '2020-10-28 21:08:39'),
(20, 'dfvfdsgfds', 'htr6essvsndh', 'm,kuyoih.,jhfgj', '2020-10-28 21:11:37'),
(21, 'dddd', 'aaaaa', 'jjjjj', '2020-10-28 21:45:59'),
(22, 'asasas', 'fsfscwe', 'bytyrd', '2020-11-05 21:54:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
