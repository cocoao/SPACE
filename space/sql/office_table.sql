-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-02-10 23:25
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
-- 테이블 구조 `SPACE_OFF`
--

CREATE TABLE `SPACE_OFF` (
  `SPACE_OFF_num` int(11) NOT NULL COMMENT '고유번호',
  `SPACE_OFF_tit` varchar(20) NOT NULL COMMENT '제목',
  `SPACE_OFF_type` varchar(20) NOT NULL COMMENT '형태',
  `SPACE_OFF_cli` varchar(30) NOT NULL COMMENT '업체명',
  `SPACE_OFF_term` varchar(30) NOT NULL COMMENT '작업 기간',
  `SPACE_OFF_desc` text NOT NULL COMMENT '설명',
  `SPACE_OFF_img1` varchar(50) NOT NULL COMMENT '메인 이미지',
  `SPACE_OFF_img2` varchar(50) NOT NULL COMMENT '서브 이미지1',
  `SPACE_OFF_img3` varchar(50) DEFAULT NULL COMMENT '서브 이미지2',
  `SPACE_OFF_img4` varchar(50) DEFAULT NULL COMMENT '서브 이미지3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `SPACE_OFF`
--

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `SPACE_OFF`
--
ALTER TABLE `SPACE_OFF`
  ADD PRIMARY KEY (`SPACE_OFF_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `SPACE_OFF`
--
ALTER TABLE `SPACE_OFF`
  MODIFY `SPACE_OFF_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
