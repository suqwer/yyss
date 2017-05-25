-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-15 07:37:42
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yyss`
--

-- --------------------------------------------------------

--
-- 表的结构 `y_action`
--

CREATE TABLE `y_action` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_article`
--

CREATE TABLE `y_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `stick` enum('1','2') DEFAULT NULL,
  `essence` enum('1','2') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_attention`
--

CREATE TABLE `y_attention` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `touser_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_level`
--

CREATE TABLE `y_level` (
  `id` int(11) NOT NULL,
  `num` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_module`
--

CREATE TABLE `y_module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_provatemess`
--

CREATE TABLE `y_provatemess` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `formuser_id` int(11) DEFAULT NULL,
  `touser_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_replay`
--

CREATE TABLE `y_replay` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `replay_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_role`
--

CREATE TABLE `y_role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_role_action`
--

CREATE TABLE `y_role_action` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `y_user`
--

CREATE TABLE `y_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `y_user`
--

INSERT INTO `y_user` (`id`, `email`, `password`, `name`, `score`, `created_at`, `updated_at`) VALUES
(4, '695848347@qq.com', '81448e767996fe3dd13ed569317e4e66', '123148', 0, '2017-05-12 08:52:46', NULL),
(5, '626076122@qq.com', '81448e767996fe3dd13ed569317e4e66', '我的', 0, '2017-05-15 06:16:50', NULL),
(3, '984059793@qq.com', '81448e767996fe3dd13ed569317e4e66', '悲伤', 0, '2017-05-12 06:36:17', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `y_usermore`
--

CREATE TABLE `y_usermore` (
  `id` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `birehday` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `indivi` varchar(255) NOT NULL,
  `gqzk` varchar(255) NOT NULL,
  `jwxx` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `y_usermore`
--

INSERT INTO `y_usermore` (`id`, `uid`, `birehday`, `address`, `hobby`, `sex`, `img`, `indivi`, `gqzk`, `jwxx`, `create_time`, `update_time`) VALUES
(1, 3, '1998-06-16', '火星', 'LOL,篮球,乒乓', '3', '', '我是一个人', '1', '6', '2017-05-12 07:47:21', '2017-05-15 06:12:18'),
(2, 5, '2017-05-18', '1231515123', '123214515', '2', NULL, '213151515121312', '3', '4', '2017-05-15 06:52:53', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `y_user_role`
--

CREATE TABLE `y_user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `y_action`
--
ALTER TABLE `y_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_article`
--
ALTER TABLE `y_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_attention`
--
ALTER TABLE `y_attention`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_level`
--
ALTER TABLE `y_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_module`
--
ALTER TABLE `y_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_provatemess`
--
ALTER TABLE `y_provatemess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_replay`
--
ALTER TABLE `y_replay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_role`
--
ALTER TABLE `y_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_role_action`
--
ALTER TABLE `y_role_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_user`
--
ALTER TABLE `y_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_usermore`
--
ALTER TABLE `y_usermore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `y_user_role`
--
ALTER TABLE `y_user_role`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `y_action`
--
ALTER TABLE `y_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_article`
--
ALTER TABLE `y_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_attention`
--
ALTER TABLE `y_attention`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_level`
--
ALTER TABLE `y_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_module`
--
ALTER TABLE `y_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_provatemess`
--
ALTER TABLE `y_provatemess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_replay`
--
ALTER TABLE `y_replay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_role`
--
ALTER TABLE `y_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_role_action`
--
ALTER TABLE `y_role_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `y_user`
--
ALTER TABLE `y_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `y_usermore`
--
ALTER TABLE `y_usermore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `y_user_role`
--
ALTER TABLE `y_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
