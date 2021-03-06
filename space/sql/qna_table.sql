-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-02-13 00:23
-- 서버 버전: 5.7.32
-- PHP 버전: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: ``
--

-- --------------------------------------------------------

--
-- 테이블 구조 `SPACE_QNA`
--

CREATE TABLE `SPACE_QNA` (
  `SPACE_QNA_num` int(11) NOT NULL COMMENT '고유번호',
  `SPACE_QNA_id` varchar(20) NOT NULL COMMENT '글쓴이',
  `SPACE_QNA_tit` varchar(50) NOT NULL COMMENT '글제목',
  `SPACE_QNA_con` text NOT NULL COMMENT '글내용',
  `SPACE_QNA_reg` varchar(15) NOT NULL COMMENT '등록일',
  `SPACE_QNA_hit` int(11) NOT NULL COMMENT '조회수'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- 테이블의 인덱스 `SPACE_QNA`
--
ALTER TABLE `SPACE_QNA`
  ADD PRIMARY KEY (`SPACE_QNA_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `SPACE_QNA`
--
ALTER TABLE `SPACE_QNA`
  MODIFY `SPACE_QNA_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
