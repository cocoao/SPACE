-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-02-07 23:35
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
-- 테이블 구조 `SPACE_MEM`
--

CREATE TABLE `SPACE_MEM` (
  `SPACE_MEM_num` int(11) NOT NULL COMMENT '고유번호',
  `SPACE_MEM_id` varchar(30) NOT NULL COMMENT '아이디',
  `SPACE_MEM_name` varchar(50) NOT NULL COMMENT '이름',
  `SPACE_MEM_email` varchar(50) NOT NULL COMMENT '이메일',
  `SPACE_MEM_pass` varchar(80) NOT NULL COMMENT '비밀번호',
  `SPACE_MEM_reg` varchar(50) DEFAULT NULL COMMENT '가입일',
  `SPACE_MEM_level` int(11) DEFAULT NULL COMMENT '회원 레벨',
  `SPACE_MEM_point` int(11) NOT NULL COMMENT '포인트'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `SPACE_MEM`
--


--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `SPACE_MEM`
--
ALTER TABLE `SPACE_MEM`
  ADD PRIMARY KEY (`SPACE_MEM_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `SPACE_MEM`
--
ALTER TABLE `SPACE_MEM`
  MODIFY `SPACE_MEM_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
