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
-- 테이블 구조 `SPACE_STO`
--

CREATE TABLE `SPACE_STO` (
  `SPACE_STO_num` int(11) NOT NULL COMMENT '고유번호',
  `SPACE_STO_tit` varchar(20) NOT NULL COMMENT '제목',
  `SPACE_STO_type` varchar(20) NOT NULL COMMENT '형태',
  `SPACE_STO_cli` varchar(30) NOT NULL COMMENT '업체명',
  `SPACE_STO_term` varchar(30) NOT NULL COMMENT '작업 기간',
  `SPACE_STO_desc` text NOT NULL COMMENT '설명',
  `SPACE_STO_img1` varchar(50) NOT NULL COMMENT '메인 이미지',
  `SPACE_STO_img2` varchar(50) NOT NULL COMMENT '서브 이미지1',
  `SPACE_STO_img3` varchar(50) DEFAULT NULL COMMENT '서브 이미지2',
  `SPACE_STO_img4` varchar(50) DEFAULT NULL COMMENT '서브 이미지3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `SPACE_STO`
--

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `SPACE_STO`
--
ALTER TABLE `SPACE_STO`
  ADD PRIMARY KEY (`SPACE_STO_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `SPACE_STO`
--
ALTER TABLE `SPACE_STO`
  MODIFY `SPACE_STO_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
