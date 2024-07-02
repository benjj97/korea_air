-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-06-24 12:04
-- 서버 버전: 10.4.22-MariaDB
-- PHP 버전: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `korair_member`
--

CREATE TABLE `korair_member` (
  `mb_no` int(11) NOT NULL,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `mb_password` varchar(255) NOT NULL DEFAULT '',
  `mb_name` varchar(20) NOT NULL DEFAULT '',
  `mb_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `korair_member`
--

INSERT INTO `korair_member` (`mb_no`, `mb_id`, `mb_password`, `mb_name`, `mb_datetime`) VALUES
(1, 'master', '1234', '관리자', '2024-06-24 11:29:20'),
(3, '1234', '*A4B6157319038724E3560894F7F932C8886EBFCF', '1234', '2024-06-24 12:30:46'),
(4, '2222', '*D142A988197D6E8B1D3D0945283450811637B73F', '2222', '2024-06-24 12:33:42'),
(5, '3333', '*0C794B34A1890E1AC777079465E38D1376F8FC24', '3333', '2024-06-24 12:34:33'),
(16, '9999', '$2y$10$gjbGA9wNPO/Yx.yM5PmANOMyUSasiFsUT97Ugv11MUteoL/muOHiu', '9999', '2024-06-24 12:40:06'),
(41, '5555', '*F4435C61EFF2F5DEF2662E4D30C59617D2B65FA7', '5555', '2024-06-24 13:14:45');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `korair_member`
--
ALTER TABLE `korair_member`
  ADD PRIMARY KEY (`mb_no`),
  ADD UNIQUE KEY `mb_id` (`mb_id`),
  ADD KEY `mb_datetime` (`mb_datetime`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `korair_member`
--
ALTER TABLE `korair_member`
  MODIFY `mb_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
