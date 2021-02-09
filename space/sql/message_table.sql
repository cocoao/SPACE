-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-02-09 00:30
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
-- 데이터베이스: `cocoao`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `SPACE_MSG`
--

CREATE TABLE `SPACE_MSG` (
  `SPACE_MSG_num` int(11) NOT NULL COMMENT '고유번호',
  `SPACE_MSG_name` varchar(20) NOT NULL COMMENT '작성자 이름',
  `SPACE_MSG_email` varchar(50) NOT NULL COMMENT '작성자 이메일',
  `SPACE_MSG_tit` varchar(50) NOT NULL COMMENT '메세지 제목',
  `SPACE_MSG_con` text NOT NULL COMMENT '메세지 내용',
  `SPACE_MSG_reg` varchar(20) DEFAULT NULL COMMENT '메세지 작성 일시'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `SPACE_MSG`
--
ALTER TABLE `SPACE_MSG`
  ADD PRIMARY KEY (`SPACE_MSG_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `SPACE_MSG`
--
ALTER TABLE `SPACE_MSG`
  MODIFY `SPACE_MSG_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
