-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2024 at 11:53 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunman74_force_update`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

CREATE TABLE `contact_user` (
  `cont_id` int(11) NOT NULL,
  `cont_sender` varchar(200) NOT NULL,
  `cont_reciver` varchar(200) NOT NULL,
  `cont_status` int(11) NOT NULL,
  `cont_form_id` int(11) NOT NULL,
  `cont_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`cont_id`, `cont_sender`, `cont_reciver`, `cont_status`, `cont_form_id`, `cont_userid`) VALUES
(1, 'ff39249b-6390-11ee-83e2-525400a7d41d', '10593ae1-02c0-11ee-9fcf-525400a7d41d', 1, 0, 22),
(2, 'ff39249b-6390-11ee-83e2-525400a7d41d', '300b0294-0e9e-11ee-9fcf-525400a7d41d', 1, 0, 29),
(3, 'ff39249b-6390-11ee-83e2-525400a7d41d', '69b8e450-0e9e-11ee-9fcf-525400a7d41d', 1, 2, 30),
(4, 'ff39249b-6390-11ee-83e2-525400a7d41d', '3d39e806-16a0-11ee-83e2-525400a7d41d', 1, 0, 58),
(5, 'e627c8c7-72f9-11ee-83e2-525400a7d41d', '69b8e450-0e9e-11ee-9fcf-525400a7d41d', 1, 3, 30),
(6, 'e627c8c7-72f9-11ee-83e2-525400a7d41d', '7b950a4e-0f3c-11ee-9fcf-525400a7d41d', 1, 0, 35),
(7, 'e627c8c7-72f9-11ee-83e2-525400a7d41d', '300b0294-0e9e-11ee-9fcf-525400a7d41d', 1, 0, 29),
(8, 'e627c8c7-72f9-11ee-83e2-525400a7d41d', '3d39e806-16a0-11ee-83e2-525400a7d41d', 1, 0, 58),
(9, 'e627c8c7-72f9-11ee-83e2-525400a7d41d', '', 1, 0, 1),
(10, 'cd6d62cc-15ca-11ee-83e2-525400a7d41d', 'd646ce11-1690-11ee-83e2-525400a7d41d', 1, 0, 57),
(11, '1d7f706c-7800-11ee-bcfc-525400a7d41d', '8cf0be4d-0f42-11ee-9fcf-525400a7d41d', 1, 0, 40),
(12, '1d7f706c-7800-11ee-bcfc-525400a7d41d', '8cf0be4d-0f42-11ee-9fcf-525400a7d41d', 1, 0, 40),
(13, '1d7f706c-7800-11ee-bcfc-525400a7d41d', '8cf0be4d-0f42-11ee-9fcf-525400a7d41d', 1, 0, 40),
(14, '1d7f706c-7800-11ee-bcfc-525400a7d41d', 'cdbd7b7f-6f61-11ee-83e2-525400a7d41d', 1, 0, 68),
(15, '1d7f706c-7800-11ee-bcfc-525400a7d41d', '143add31-74d6-11ee-bcfc-525400a7d41d', 1, 0, 71),
(16, '4205db3d-7d78-11ee-bcfc-525400a7d41d', '8382f63a-168c-11ee-83e2-525400a7d41d', 1, 0, 56),
(17, '4205db3d-7d78-11ee-bcfc-525400a7d41d', '1d7f706c-7800-11ee-bcfc-525400a7d41d', 1, 0, 74),
(18, '39ca0540-9c4b-11ee-bcfc-525400a7d41d', '300b0294-0e9e-11ee-9fcf-525400a7d41d', 1, 0, 29),
(19, '39ca0540-9c4b-11ee-bcfc-525400a7d41d', '3d39e806-16a0-11ee-83e2-525400a7d41d', 1, 0, 58),
(20, '39ca0540-9c4b-11ee-bcfc-525400a7d41d', '9337f63d-9bf2-11ee-bcfc-525400a7d41d', 1, 0, 1),
(21, '78599238-9c50-11ee-bcfc-525400a7d41d', '78599238-9c50-11ee-bcfc-525400a7d41d', 1, 0, 98);

-- --------------------------------------------------------

--
-- Table structure for table `data_table`
--

CREATE TABLE `data_table` (
  `page_id` int(11) NOT NULL,
  `uuid` varchar(250) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `page_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_table`
--

INSERT INTO `data_table` (`page_id`, `uuid`, `page_title`, `page_name`) VALUES
(1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'SFO Ranking by ', 'Size of Investment'),
(2, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'SFO Ranking by Total', 'Number of Investments'),
(3, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'MFO Ranking by ', 'Size of Investment'),
(4, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'MFO Ranking by Total ', 'Number of Investments'),
(5, 'c017d6ec-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Top Family Office', 'Law Firms'),
(6, 'b94a0269-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Top Valuation', 'Firms'),
(7, 'b95b0017-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Top Due-Diligence', 'Firms'),
(8, 'b965c326-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Top Accounting ', 'Firms');

-- --------------------------------------------------------

--
-- Table structure for table `investment_sector`
--

CREATE TABLE `investment_sector` (
  `inv_ID` int(11) NOT NULL,
  `inv_sector` varchar(100) NOT NULL,
  `inv_type` int(11) NOT NULL,
  `inv_status` int(11) NOT NULL,
  `inv_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment_sector`
--

INSERT INTO `investment_sector` (`inv_ID`, `inv_sector`, `inv_type`, `inv_status`, `inv_key`) VALUES
(1, 'Technology', 1, 1, '5713b482-14ba-11ee-83e2-525400a7d41d'),
(2, 'Healthcare', 1, 1, '5713c240-14ba-11ee-83e2-525400a7d41d'),
(3, 'ESG/Impact', 1, 1, '5713c303-14ba-11ee-83e2-525400a7d41d'),
(4, 'Metals & Mining', 1, 1, '5713c37d-14ba-11ee-83e2-525400a7d41d'),
(5, 'Oil & Gas', 1, 1, '5713c3ff-14ba-11ee-83e2-525400a7d41d'),
(6, 'Financial Services', 1, 1, '5713c477-14ba-11ee-83e2-525400a7d41d'),
(7, 'Manufacturing', 1, 1, '5713c4f4-14ba-11ee-83e2-525400a7d41d'),
(8, 'Real Estate', 1, 1, '5713c564-14ba-11ee-83e2-525400a7d41d'),
(9, 'Crypto/Blockchain', 1, 1, '5713c5d4-14ba-11ee-83e2-525400a7d41d'),
(10, 'Angel/Seed', 2, 1, '5713c631-14ba-11ee-83e2-525400a7d41d'),
(11, 'Pre-IPO', 2, 1, '5713c699-14ba-11ee-83e2-525400a7d41d'),
(12, 'Unsecured', 2, 1, '5713c7b5-14ba-11ee-83e2-525400a7d41d'),
(13, 'Series A', 2, 1, '5713c82b-14ba-11ee-83e2-525400a7d41d'),
(14, 'IPO', 2, 1, '5713c8a1-14ba-11ee-83e2-525400a7d41d'),
(15, 'Mezzanine', 2, 1, '5713c925-14ba-11ee-83e2-525400a7d41d'),
(16, 'Series B', 2, 1, '5713c994-14ba-11ee-83e2-525400a7d41d'),
(17, 'Already Public', 2, 1, '5713ca03-14ba-11ee-83e2-525400a7d41d'),
(18, 'Senior Secured', 2, 1, '5713ca79-14ba-11ee-83e2-525400a7d41d'),
(19, 'Series C', 2, 1, '5713caed-14ba-11ee-83e2-525400a7d41d'),
(20, 'SPAC PIPE', 2, 1, '5713cb5f-14ba-11ee-83e2-525400a7d41d'),
(21, 'Other', 2, 1, '5713cbd0-14ba-11ee-83e2-525400a7d41d'),
(22, 'Series D', 2, 1, '5713cc41-14ba-11ee-83e2-525400a7d41d'),
(23, 'M&A Candidate', 2, 1, '5713ccb4-14ba-11ee-83e2-525400a7d41d'),
(24, 'Equity', 3, 1, '5713cd2a-14ba-11ee-83e2-525400a7d41d'),
(25, 'EBITDA Positive', 3, 1, '5713cd9b-14ba-11ee-83e2-525400a7d41d'),
(26, 'SAFE', 3, 1, '5713ce0c-14ba-11ee-83e2-525400a7d41d'),
(27, 'Debt', 3, 1, '5713ce77-14ba-11ee-83e2-525400a7d41d'),
(28, 'Cash Flow Positive', 3, 1, '5713ced8-14ba-11ee-83e2-525400a7d41d'),
(29, 'Revenue Bond', 3, 1, '5713cf3b-14ba-11ee-83e2-525400a7d41d'),
(30, 'Venture Stage', 3, 1, '5713cfa4-14ba-11ee-83e2-525400a7d41d'),
(31, 'Debenture', 3, 1, '5713d006-14ba-11ee-83e2-525400a7d41d'),
(32, 'Other', 3, 1, '5713d06f-14ba-11ee-83e2-525400a7d41d'),
(33, 'Revenue Generating', 3, 1, '5713d0e2-14ba-11ee-83e2-525400a7d41d'),
(34, 'Preferred', 3, 1, '5713d146-14ba-11ee-83e2-525400a7d41d'),
(38, 'test55', 2, 2, '64b640e1-14bb-11ee-83e2-525400a7d41d');

-- --------------------------------------------------------

--
-- Table structure for table `investment_user`
--

CREATE TABLE `investment_user` (
  `inv_secId` int(11) NOT NULL,
  `inv_user_id` int(11) NOT NULL,
  `inv_user_sectorId` int(11) NOT NULL,
  `inv_user_sectype` int(11) NOT NULL,
  `inv_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment_user`
--

INSERT INTO `investment_user` (`inv_secId`, `inv_user_id`, `inv_user_sectorId`, `inv_user_sectype`, `inv_status`) VALUES
(1, 19, 1, 1, 0),
(2, 19, 5, 1, 0),
(3, 19, 17, 2, 0),
(4, 19, 20, 2, 0),
(5, 19, 24, 3, 0),
(6, 19, 30, 3, 0),
(7, 20, 1, 1, 0),
(8, 20, 8, 1, 0),
(9, 20, 9, 1, 0),
(10, 20, 10, 2, 0),
(11, 20, 24, 3, 0),
(12, 21, 1, 1, 0),
(13, 21, 10, 2, 0),
(14, 21, 24, 3, 0),
(15, 23, 7, 1, 0),
(16, 23, 13, 2, 0),
(17, 23, 30, 3, 0),
(18, 24, 5, 1, 0),
(19, 24, 9, 1, 0),
(20, 24, 15, 2, 0),
(21, 24, 26, 3, 0),
(22, 25, 1, 1, 0),
(23, 25, 9, 1, 0),
(24, 25, 10, 2, 0),
(25, 25, 24, 3, 0),
(26, 25, 25, 3, 0),
(27, 25, 26, 3, 0),
(28, 25, 27, 3, 0),
(29, 25, 28, 3, 0),
(30, 25, 29, 3, 0),
(31, 25, 30, 3, 0),
(32, 25, 31, 3, 0),
(33, 25, 33, 3, 0),
(34, 25, 34, 3, 0),
(35, 26, 1, 1, 0),
(36, 26, 10, 2, 0),
(37, 26, 11, 2, 0),
(38, 26, 24, 3, 0),
(39, 26, 34, 3, 0),
(40, 27, 1, 1, 0),
(41, 27, 10, 2, 0),
(42, 27, 11, 2, 0),
(43, 27, 24, 3, 0),
(44, 27, 28, 3, 0),
(45, 28, 1, 1, 0),
(46, 28, 10, 2, 0),
(47, 28, 11, 2, 0),
(48, 28, 24, 3, 0),
(49, 28, 28, 3, 0),
(50, 29, 1, 1, 0),
(51, 29, 9, 1, 0),
(52, 29, 13, 2, 0),
(53, 29, 16, 2, 0),
(54, 29, 19, 2, 0),
(55, 29, 22, 2, 0),
(56, 29, 24, 3, 0),
(57, 29, 27, 3, 0),
(58, 29, 32, 3, 0),
(59, 30, 1, 1, 0),
(60, 30, 9, 1, 0),
(61, 30, 13, 2, 0),
(62, 30, 16, 2, 0),
(63, 30, 19, 2, 0),
(64, 30, 22, 2, 0),
(65, 30, 24, 3, 0),
(66, 30, 27, 3, 0),
(67, 30, 32, 3, 0),
(68, 32, 1, 1, 0),
(69, 32, 10, 2, 0),
(70, 32, 24, 3, 0),
(71, 33, 1, 1, 0),
(72, 33, 10, 2, 0),
(73, 33, 24, 3, 0),
(74, 37, 1, 1, 0),
(75, 37, 11, 2, 0),
(76, 37, 25, 3, 0),
(77, 38, 1, 1, 0),
(78, 38, 11, 2, 0),
(79, 38, 34, 3, 0),
(80, 41, 1, 1, 0),
(81, 41, 8, 1, 0),
(82, 41, 9, 1, 0),
(83, 41, 17, 2, 0),
(84, 41, 23, 2, 0),
(85, 41, 34, 3, 0),
(86, 42, 4, 1, 0),
(87, 42, 34, 3, 0),
(88, 43, 1, 1, 0),
(89, 43, 8, 1, 0),
(90, 43, 33, 3, 0),
(91, 43, 34, 3, 0),
(92, 44, 7, 1, 0),
(93, 44, 14, 2, 0),
(94, 44, 34, 3, 0),
(95, 45, 17, 2, 0),
(96, 45, 23, 2, 0),
(97, 45, 25, 3, 0),
(98, 45, 28, 3, 0),
(99, 46, 17, 2, 0),
(100, 46, 23, 2, 0),
(101, 46, 25, 3, 0),
(102, 46, 28, 3, 0),
(103, 47, 17, 2, 0),
(104, 47, 23, 2, 0),
(105, 47, 25, 3, 0),
(106, 47, 28, 3, 0),
(107, 48, 17, 2, 0),
(108, 48, 23, 2, 0),
(109, 48, 25, 3, 0),
(110, 48, 28, 3, 0),
(111, 49, 17, 2, 0),
(112, 49, 23, 2, 0),
(113, 49, 25, 3, 0),
(114, 49, 28, 3, 0),
(115, 50, 17, 2, 0),
(116, 50, 23, 2, 0),
(117, 50, 25, 3, 0),
(118, 50, 28, 3, 0),
(119, 51, 17, 2, 0),
(120, 51, 23, 2, 0),
(121, 51, 25, 3, 0),
(122, 51, 28, 3, 0),
(123, 52, 17, 2, 0),
(124, 52, 23, 2, 0),
(125, 52, 25, 3, 0),
(126, 52, 28, 3, 0),
(127, 55, 8, 1, 0),
(128, 55, 11, 2, 0),
(129, 55, 22, 2, 0),
(130, 55, 23, 2, 0),
(131, 55, 27, 3, 0),
(132, 55, 34, 3, 0),
(133, 56, 1, 1, 0),
(134, 56, 11, 2, 0),
(135, 56, 25, 3, 0),
(136, 57, 1, 1, 0),
(137, 57, 9, 1, 0),
(138, 57, 10, 2, 0),
(139, 57, 13, 2, 0),
(140, 57, 24, 3, 0),
(141, 57, 27, 3, 0),
(142, 58, 1, 1, 0),
(143, 58, 8, 1, 0),
(144, 58, 9, 1, 0),
(145, 58, 13, 2, 0),
(146, 58, 16, 2, 0),
(147, 58, 19, 2, 0),
(148, 58, 22, 2, 0),
(149, 58, 24, 3, 0),
(150, 58, 28, 3, 0),
(151, 58, 31, 3, 0),
(152, 58, 13, 1, 0),
(153, 58, 16, 1, 0),
(154, 58, 19, 1, 0),
(155, 58, 22, 1, 0),
(156, 58, 24, 1, 0),
(157, 58, 28, 1, 0),
(158, 58, 31, 1, 0),
(159, 59, 2, 1, 0),
(160, 59, 5, 1, 0),
(161, 59, 28, 3, 0),
(162, 61, 1, 1, 0),
(163, 61, 2, 1, 0),
(164, 61, 5, 1, 0),
(165, 61, 9, 1, 0),
(166, 61, 10, 2, 0),
(167, 61, 17, 2, 0),
(168, 61, 18, 2, 0),
(169, 61, 24, 3, 0),
(170, 61, 28, 3, 0),
(171, 61, 29, 3, 0),
(172, 62, 1, 1, 0),
(173, 62, 2, 1, 0),
(174, 62, 13, 2, 0),
(175, 62, 16, 2, 0),
(176, 62, 24, 3, 0),
(177, 62, 31, 3, 0),
(178, 63, 1, 1, 0),
(179, 63, 5, 1, 0),
(180, 63, 8, 1, 0),
(181, 63, 11, 2, 0),
(182, 63, 13, 2, 0),
(183, 63, 15, 2, 0),
(184, 63, 28, 3, 0),
(185, 63, 29, 3, 0),
(186, 63, 30, 3, 0),
(187, 64, 1, 1, 0),
(188, 64, 2, 1, 0),
(189, 64, 10, 2, 0),
(190, 64, 18, 2, 0),
(191, 64, 24, 3, 0),
(192, 64, 25, 3, 0),
(193, 64, 27, 3, 0),
(194, 65, 2, 1, 0),
(195, 65, 8, 1, 0),
(196, 65, 11, 2, 0),
(197, 65, 15, 2, 0),
(198, 65, 22, 2, 0),
(199, 65, 24, 3, 0),
(200, 65, 27, 3, 0),
(201, 65, 30, 3, 0),
(202, 66, 1, 1, 0),
(203, 66, 10, 2, 0),
(204, 66, 24, 3, 0),
(205, 66, 31, 3, 0),
(206, 67, 1, 1, 0),
(207, 67, 8, 1, 0),
(208, 67, 10, 2, 0),
(209, 67, 12, 2, 0),
(210, 67, 17, 2, 0),
(211, 67, 26, 3, 0),
(212, 67, 27, 3, 0),
(213, 67, 34, 3, 0),
(214, 68, 1, 1, 0),
(215, 68, 8, 1, 0),
(216, 68, 10, 2, 0),
(217, 68, 12, 2, 0),
(218, 68, 17, 2, 0),
(219, 68, 26, 3, 0),
(220, 68, 27, 3, 0),
(221, 68, 34, 3, 0),
(222, 69, 7, 1, 0),
(223, 69, 8, 1, 0),
(224, 69, 11, 2, 0),
(225, 69, 20, 2, 0),
(226, 69, 31, 3, 0),
(227, 69, 34, 3, 0),
(228, 70, 1, 1, 0),
(229, 70, 7, 1, 0),
(230, 70, 11, 2, 0),
(231, 70, 24, 3, 0),
(232, 74, 1, 1, 0),
(233, 74, 7, 1, 0),
(234, 74, 17, 2, 0),
(235, 74, 28, 3, 0),
(236, 74, 17, 1, 0),
(237, 74, 28, 1, 0),
(238, 75, 1, 1, 0),
(239, 75, 5, 1, 0),
(240, 75, 9, 1, 0),
(241, 75, 11, 2, 0),
(242, 75, 12, 2, 0),
(243, 75, 16, 2, 0),
(244, 75, 24, 3, 0),
(245, 75, 26, 3, 0),
(246, 75, 28, 3, 0),
(247, 76, 1, 1, 0),
(248, 76, 4, 1, 0),
(249, 76, 5, 1, 0),
(250, 76, 8, 1, 0),
(251, 76, 9, 1, 0),
(252, 76, 10, 2, 0),
(253, 76, 11, 2, 0),
(254, 76, 13, 2, 0),
(255, 76, 14, 2, 0),
(256, 76, 23, 2, 0),
(257, 76, 24, 3, 0),
(258, 76, 26, 3, 0),
(259, 76, 30, 3, 0),
(260, 76, 34, 3, 0),
(261, 78, 1, 1, 0),
(262, 78, 6, 1, 0),
(263, 78, 8, 1, 0),
(264, 78, 10, 2, 0),
(265, 78, 17, 2, 0),
(266, 78, 18, 2, 0),
(267, 78, 24, 3, 0),
(268, 78, 28, 3, 0),
(269, 78, 29, 3, 0),
(270, 79, 4, 1, 0),
(271, 79, 11, 2, 0),
(272, 79, 31, 3, 0),
(273, 80, 1, 1, 0),
(274, 80, 4, 1, 0),
(275, 80, 14, 2, 0),
(276, 80, 19, 2, 0),
(277, 80, 33, 3, 0),
(278, 80, 34, 3, 0),
(279, 82, 1, 1, 0),
(280, 82, 5, 1, 0),
(281, 82, 13, 2, 0),
(282, 82, 20, 2, 0),
(283, 82, 27, 3, 0),
(284, 82, 31, 3, 0),
(285, 83, 1, 1, 0),
(286, 83, 4, 1, 0),
(287, 83, 7, 1, 0),
(288, 83, 14, 2, 0),
(289, 83, 17, 2, 0),
(290, 83, 25, 3, 0),
(291, 83, 31, 3, 0),
(292, 83, 33, 3, 0),
(293, 84, 2, 1, 0),
(294, 84, 5, 1, 0),
(295, 84, 7, 1, 0),
(296, 84, 20, 2, 0),
(297, 84, 22, 2, 0),
(298, 84, 23, 2, 0),
(299, 84, 28, 3, 0),
(300, 84, 31, 3, 0),
(301, 84, 34, 3, 0),
(302, 85, 1, 1, 0),
(303, 85, 8, 1, 0),
(304, 85, 14, 2, 0),
(305, 85, 22, 2, 0),
(306, 85, 33, 3, 0),
(307, 85, 34, 3, 0),
(308, 86, 8, 1, 0),
(309, 86, 9, 1, 0),
(310, 86, 12, 2, 0),
(311, 86, 14, 2, 0),
(312, 86, 29, 3, 0),
(313, 86, 31, 3, 0),
(314, 87, 1, 1, 0),
(315, 87, 8, 1, 0),
(316, 87, 11, 2, 0),
(317, 87, 20, 2, 0),
(318, 87, 28, 3, 0),
(319, 88, 5, 1, 0),
(320, 88, 7, 1, 0),
(321, 88, 8, 1, 0),
(322, 88, 11, 2, 0),
(323, 88, 17, 2, 0),
(324, 88, 19, 2, 0),
(325, 88, 24, 3, 0),
(326, 88, 29, 3, 0),
(327, 88, 34, 3, 0),
(328, 89, 4, 1, 0),
(329, 89, 5, 1, 0),
(330, 89, 10, 2, 0),
(331, 89, 15, 2, 0),
(332, 89, 16, 2, 0),
(333, 89, 27, 3, 0),
(334, 89, 31, 3, 0),
(335, 90, 1, 1, 0),
(336, 90, 5, 1, 0),
(337, 90, 8, 1, 0),
(338, 90, 14, 2, 0),
(339, 90, 16, 2, 0),
(340, 90, 23, 2, 0),
(341, 90, 24, 3, 0),
(342, 90, 25, 3, 0),
(343, 90, 27, 3, 0),
(344, 92, 1, 1, 0),
(345, 92, 3, 1, 0),
(346, 92, 8, 1, 0),
(347, 92, 11, 2, 0),
(348, 92, 20, 2, 0),
(349, 92, 25, 3, 0),
(350, 92, 26, 3, 0),
(351, 92, 29, 3, 0),
(352, 93, 1, 1, 0),
(353, 93, 3, 1, 0),
(354, 93, 8, 1, 0),
(355, 93, 11, 2, 0),
(356, 93, 20, 2, 0),
(357, 93, 25, 3, 0),
(358, 93, 26, 3, 0),
(359, 93, 29, 3, 0),
(360, 94, 1, 1, 0),
(361, 94, 4, 1, 0),
(362, 94, 7, 1, 0),
(363, 94, 10, 2, 0),
(364, 94, 14, 2, 0),
(365, 94, 28, 3, 0),
(366, 99, 7, 1, 0),
(367, 99, 34, 3, 0),
(368, 100, 1, 1, 0),
(369, 100, 5, 1, 0),
(370, 100, 8, 1, 0),
(371, 100, 17, 2, 0),
(372, 100, 22, 2, 0),
(373, 100, 28, 3, 0),
(374, 100, 30, 3, 0),
(375, 69, 11, 1, 0),
(376, 69, 20, 1, 0),
(377, 69, 31, 1, 0),
(378, 69, 34, 1, 0),
(379, 101, 1, 1, 0),
(380, 101, 5, 1, 0),
(381, 101, 13, 2, 0),
(382, 101, 28, 3, 0),
(383, 104, 7, 1, 0),
(384, 104, 14, 2, 0),
(385, 104, 28, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sell_form`
--

CREATE TABLE `sell_form` (
  `sell_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_description` varchar(250) NOT NULL,
  `company_financials` varchar(150) NOT NULL,
  `manage_desc` varchar(150) NOT NULL,
  `size_of_req` varchar(20) NOT NULL,
  `min_invt` varchar(20) NOT NULL,
  `revenue` varchar(20) NOT NULL,
  `ebitd` varchar(20) NOT NULL,
  `enter_val` varchar(20) NOT NULL,
  `total_debt` varchar(20) NOT NULL,
  `total_fund_date` varchar(20) NOT NULL,
  `valuation` varchar(20) NOT NULL,
  `stage_of_invest` int(11) NOT NULL,
  `employees` int(11) NOT NULL,
  `existing_invest` varchar(20) NOT NULL,
  `lead_invest` varchar(20) NOT NULL,
  `recent_aq` varchar(20) NOT NULL,
  `competitiors` varchar(20) NOT NULL,
  `attest` text NOT NULL,
  `invest_sector` varchar(300) NOT NULL,
  `inve_user_id` varchar(200) NOT NULL,
  `sell_status` int(11) NOT NULL,
  `sell_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell_form`
--

INSERT INTO `sell_form` (`sell_id`, `company_name`, `company_description`, `company_financials`, `manage_desc`, `size_of_req`, `min_invt`, `revenue`, `ebitd`, `enter_val`, `total_debt`, `total_fund_date`, `valuation`, `stage_of_invest`, `employees`, `existing_invest`, `lead_invest`, `recent_aq`, `competitiors`, `attest`, `invest_sector`, `inve_user_id`, `sell_status`, `sell_key`) VALUES
(1, 'new sell form', 'asdas', '454', '454', '1111', '15000', '20000', 'EBITA', '500', '150000', '15000', '5645644', 20, 454, '5645', '645', '454', '564', '', '3', '46a771d3-1369-11ee-83e2-525400a7d41d', 1, '8ba71a42-1369-11ee-83e2-525400a7d41d'),
(2, 'anonymous', 'test1', '1000000', 'test', '100000', '50000', '52000', '2163', '5634646', '456465', '566556', '65465464', 22, 5, '2', '5', '3', '2', '', '2', '300b0294-0e9e-11ee-9fcf-525400a7d41d', 1, '83277900-1691-11ee-83e2-525400a7d41d'),
(3, 'Surej', 'test', '1000000', 'test', '10000', '50000', '10000', '5', '200000', '0', '1000', '10000000', 10, 9, '0', 'lead inv', '', '', '', '1', '3d39e806-16a0-11ee-83e2-525400a7d41d', 1, '571988a1-16a2-11ee-83e2-525400a7d41d'),
(4, 'Steve', 'dsadasda', 'Steve Fin comp', 'adsda', '15000', '12500', '15355', '1541', '156400', '134', '1450265', '125462', 11, 2, '2', '4', '2', '3', '', '2', '9337f63d-9bf2-11ee-bcfc-525400a7d41d', 1, 'f675c43e-9bee-11ee-bcfc-525400a7d41d'),
(5, 'Wash Industried', 'Tires', '$34M in Revenue', 'qualified', '4', '100000', '32000000', '66000', '54000000', '1200000', '7000000', '45000', 10, 6, '6', 'McKinsey', 'none', 'none', '', '2', '39ca0540-9c4b-11ee-bcfc-525400a7d41d', 1, 'd12bcfb2-9c4c-11ee-bcfc-525400a7d41d'),
(6, 'Summit Exploration', 'mountain Climbing ', '$55,000', 'We lead hikes to mt. Everest', '33000000', '1000000', '4500000', '23000000', '120000', '23000', '450000', '65000', 13, 5, 'Govt or NZ', 'Tom Jones', 'none', 'none', '', '2', '78599238-9c50-11ee-bcfc-525400a7d41d', 1, '58a668de-9c51-11ee-bcfc-525400a7d41d'),
(7, 'Sunman', 'ahaeveveevveevveve', 'Not sure', 'Whatwver', '1200000', '500000', '200000', 'dftera', '200000', '200000', '2000000', '2828282', 14, 10, '5', '7', '345', 'whoknows', '', '2', '9337f63d-9bf2-11ee-bcfc-525400a7d41d', 0, '7590e9a1-aca9-11ee-bcfc-525400a7d41d');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `SP_ID` int(11) NOT NULL,
  `inv_sec` varchar(200) NOT NULL,
  `firm_desc` varchar(200) NOT NULL,
  `str_invest` varchar(200) NOT NULL,
  `stage_inv` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `SP_status` int(11) NOT NULL,
  `service_key` varchar(200) NOT NULL,
  `user_uid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`SP_ID`, `inv_sec`, `firm_desc`, `str_invest`, `stage_inv`, `category`, `SP_status`, `service_key`, `user_uid`) VALUES
(1, '3', 'hello', '25', '11', '7', 2, 'dda8a4fa-0ec1-11ee-9fcf-525400a7d41d', ''),
(2, '2', 'hello', '25', '11', '6', 1, 'ba904e3e-0f3a-11ee-9fcf-525400a7d41d', ''),
(3, '2', 'hello', '27', '11', '6', 0, '4af0d280-0f3c-11ee-9fcf-525400a7d41d', ''),
(4, '2', 'hello', '25', '11', '0', 0, '94834cf7-0f6c-11ee-9fcf-525400a7d41d', '24'),
(5, '0', '45554adasdasd', '0', '0', '0', 0, '', '53'),
(6, '5713c477-14ba-11ee-83e2-525400a7d41d', 'asdasdas', '5713c8a1-14ba-11ee-83e2-525400a7d41d', '5713cd9b-14ba-11ee-83e2-525400a7d41d', 'c017d6ec-f8ad-11ed-9f7d-3c7c3f5b04d2', 0, '', '54'),
(7, '5713b482-14ba-11ee-83e2-525400a7d41d', 'asdasdas', '5713cd2a-14ba-11ee-83e2-525400a7d41d', '5713c631-14ba-11ee-83e2-525400a7d41d', 'Category', 0, '', '72'),
(8, '5713b482-14ba-11ee-83e2-525400a7d41d', 'MP', '5713ced8-14ba-11ee-83e2-525400a7d41d', '5713c8a1-14ba-11ee-83e2-525400a7d41d', 'b94a0269-f8ad-11ed-9f7d-3c7c3f5b04d2', 0, '', '95'),
(9, '5713b482-14ba-11ee-83e2-525400a7d41d', 'MP', '5713ced8-14ba-11ee-83e2-525400a7d41d', '5713c8a1-14ba-11ee-83e2-525400a7d41d', 'b94a0269-f8ad-11ed-9f7d-3c7c3f5b04d2', 0, '', '96'),
(10, '5713c3ff-14ba-11ee-83e2-525400a7d41d', 'MP', '5713cd9b-14ba-11ee-83e2-525400a7d41d', '5713c925-14ba-11ee-83e2-525400a7d41d', 'b95b0017-f8ad-11ed-9f7d-3c7c3f5b04d2', 0, '', '97'),
(11, '5713c240-14ba-11ee-83e2-525400a7d41d', '123456', '5713cd2a-14ba-11ee-83e2-525400a7d41d', '5713c699-14ba-11ee-83e2-525400a7d41d', 'b95b0017-f8ad-11ed-9f7d-3c7c3f5b04d2', 0, '', '103');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sub_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `email`, `sub_status`) VALUES
(1, 'kawaljit2191@gmail.com', 1),
(2, 'sahib@test.com', 0),
(3, 'test@force.com', 0),
(4, 'mike@forcefamilyoffice.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `sys_Id` int(11) NOT NULL,
  `sys_name` varchar(50) NOT NULL,
  `sys_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`sys_Id`, `sys_name`, `sys_key`) VALUES
(1, 'Family Office ', 1),
(2, 'Sell Side ', 1),
(3, 'Service Provider ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_expiration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `reset_token`, `token_expiration`) VALUES
(1, 'kawaljit2191@gmail.com', 'f91e90ea1d93897f92a2ab26b51fa84e', '2023-10-18 06:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_family_office` varchar(100) NOT NULL,
  `user_firm_name` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_key` varchar(250) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `sf` varchar(200) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `amount` int(11) NOT NULL,
  `sizeby` varchar(200) NOT NULL,
  `anonymous` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_phone`, `user_family_office`, `user_firm_name`, `password`, `user_key`, `user_type`, `user_status`, `sf`, `country`, `state`, `city`, `amount`, `sizeby`, `anonymous`) VALUES
(1, 'super', 'admin', 'superadmin@gmail.com', '987654321', 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '9337f63d-9bf2-11ee-bcfc-525400a7d41d', 0, 1, '0', '', '', '', 0, '0', 0),
(20, 'SAHIBTEST', 'TEST', 'test@gmail.com', '2147483647', 'test FO', 'AO', '63f1c196f550a181527f861088e53ffa', 'a98f1418-02bd-11ee-9fcf-525400a7d41d', 1, 2, '0', '', '', '', 0, '0', 1),
(21, 'SAHIBTEST', 'wdef', 'fwdf@dd.com', '888888', 'b', 'hb', 'ba9d3a8f0dfee0fc68ba7c72b5f801e4', 'e104de14-02bd-11ee-9fcf-525400a7d41d', 1, 2, '0', '', '', '', 0, '0', 0),
(22, 'kawal', 'singh', '', '0', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '10593ae1-02c0-11ee-9fcf-525400a7d41d', 0, 0, '0', '', '', '', 0, '1', 0),
(23, 'sahib test again', 'test', 'hdhdtt@ts.com', '888', 'hiuwdhud', 'jnwf', '7f821bb2c194d734814d251132fc94ee', 'f9bbec9b-02c1-11ee-9fcf-525400a7d41d', 0, 0, '0', '', '', '', 0, '1', 0),
(24, 'sahibkawal test', 'dknf', 'kawaljit2191@gmail.com2', '87878787', 'wdf', 'wdf', '94c5a1abb17eab11930fb53fb9e24246', '58675657-02c2-11ee-9fcf-525400a7d41d', 3, 2, '0', '', '', '', 0, '0', 0),
(25, 'sahib 2', 'singh', 'info.rsahib@gmail.com', '2147483647', 'AO FO', 'AO', '417f3b6bcb6275eb72235836095c148e', '7fcd6ff8-02cc-11ee-9fcf-525400a7d41d', 1, 2, '0', '', '', '', 0, '0', 0),
(26, 'Sahib test', 'test1', 'sahib@test.com', '2147483647', 'FO sahib', 'sahib t', '098f6bcd4621d373cade4e832627b4f6', '107e8667-0e61-11ee-9fcf-525400a7d41d', 1, 1, '0', '', '', '', 0, '0', 0),
(27, 'sahib  testing', 'test', 'test@t.com', '2147483647', 'FOnsahib', 'sahib AI', '63f1c196f550a181527f861088e53ffa', '6df18f34-0e61-11ee-9fcf-525400a7d41d', 1, 2, '0', '', '', '', 0, '1', 0),
(28, 'sahib  testing', 'test', 'test@t.com', '2147483647', 'FOnsahib', 'sahib AI', '63f1c196f550a181527f861088e53ffa', '6fe14ee7-0e61-11ee-9fcf-525400a7d41d', 1, 1, '0', '', '', '', 0, '2', 0),
(29, 'Surej', 'Kalathil', 'test@surej.com', '2147483647', 'K Office', 'Sunman LLc', '8d3c3720faed621ea7e65bf91b54adb1', '300b0294-0e9e-11ee-9fcf-525400a7d41d', 1, 2, '0', '', '', '', 0, '1', 0),
(30, 'Surej', 'Kalathil', 'test@surej.com', '2147483647', 'K Office', 'Sunman LLc', '8d3c3720faed621ea7e65bf91b54adb1', '69b8e450-0e9e-11ee-9fcf-525400a7d41d', 2, 1, '0', '', '', '', 0, '2', 0),
(31, 'surej', 'sellside', 'admin', '54646546', 'wdfwdf', 'wfdwf', '21232f297a57a5a743894a0e4a801fc3', '7500cac7-0e9e-11ee-9fcf-525400a7d41d', 2, 1, '0', '', '', '', 0, '0', 0),
(32, 'surej', 'kalathil partn2', 'secondtest@g.com', '2147483647', 'sdasd', 'asdasd', 'e10adc3949ba59abbe56e057f20f883e', 'a256f78b-0e9e-11ee-9fcf-525400a7d41d', 1, 1, '0', '', '', '', 0, '0', 0),
(33, 'sahib', 'singh', 'sahib@gmail.com', '2147483647', 'sahib', 'sahib', '417f3b6bcb6275eb72235836095c148e', 'f34f73b2-0e9e-11ee-9fcf-525400a7d41d', 1, 1, '0', '', '', '', 0, '0', 0),
(34, 'Test', 'dev', 'dev@gmail.com', '123456789', 'FO office', 'Dev Firm', '21232f297a57a5a743894a0e4a801fc3', 'f838067d-0f37-11ee-9fcf-525400a7d41d', 2, 1, '0', '', '', '', 0, '0', 0),
(35, 'kawal', 'singh', 'devao@gmail.com', '7846123', 'FO office', 'Dev Firm', 'e7503011bf061a4a270b55d5408d3a44', '7b950a4e-0f3c-11ee-9fcf-525400a7d41d', 3, 0, '0', '', '', '', 0, '0', 0),
(36, 'Sahib', 'side', 'r@e.com', '2147483647', 'Shared', 'test', '72de05d5eafe8523879b8ba5a0c1e3c5', '27823df8-0f3d-11ee-9fcf-525400a7d41d', 2, 1, '0', '', '', '', 0, '0', 0),
(37, 'Sahib', '4', 't@t.com', '2147483647', 'Sahib FO', 'Sahib', 'e10adc3949ba59abbe56e057f20f883e', '73f075c9-0f3d-11ee-9fcf-525400a7d41d', 1, 1, '0', '', '', '', 0, '0', 0),
(38, 'Sahib', 'Singh', 't@t.com', '55555', 'FO', 'FO', '72de05d5eafe8523879b8ba5a0c1e3c5', '0322e492-0f3e-11ee-9fcf-525400a7d41d', 1, 1, '1', '', '', '', 0, '0', 0),
(39, 'Sahib', 'sellside', 'kawaljit2191@gmail.com1', '2147483647', 'test', 'test', '72de05d5eafe8523879b8ba5a0c1e3c5', '57c949f1-0f3f-11ee-9fcf-525400a7d41d', 2, 2, '1', '', '', '', 0, '0', 0),
(40, 'Sahib', 'Service', 's@s.com', '4444', 'FO', 'test', '72de05d5eafe8523879b8ba5a0c1e3c5', '8cf0be4d-0f42-11ee-9fcf-525400a7d41d', 3, 1, '0', '', '', '', 0, '0', 0),
(41, 'kawal', 'singh', 'superadmin@gmail.com', '123456', 'FO office', 'Dev Firm', 'e10adc3949ba59abbe56e057f20f883e', '93380211-9bf2-11ee-bcfc-525400a7d41d', 1, 2, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', '', '', '', 0, '2', 0),
(42, 'kawal', 'singh', 'sunman', '7894', 'jlj', 'asdas', '4fea427f32b90a56a40c5d5e9d5855d5', '527e4ddd-0f6c-11ee-9fcf-525400a7d41d', 1, 2, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', '', '', '', 0, '0', 0),
(43, 'kawaljit', 'adminnew', 'kawaljit2191@gmail.com.au', '1234567890', 'FO office', 'Dev Firm', '5b1b68a9abf4d2cd155c81a9225fd158', 'bce4609f-1366-11ee-83e2-525400a7d41d', 1, 2, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Belgium', 'Brussels-Capital Region', 'Brussels', 10000, '25000', 0),
(52, 'kawaljit', 'adminnew', 'kawaljit2191@gmail.com1', '1234567890', 'FO office', 'Dev Firm new', '21b95a0f90138767b0fd324e6be3457b', 'ea43b4da-14ab-11ee-83e2-525400a7d41d', 1, 2, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', '', '', '', 10000, '56000', 0),
(53, 'kawaljit', 'adminnew', 'kawaljit2191@gmail.com', '1234567890', 'New Office', 'Dev Firm new', 'e10adc3949ba59abbe56e057f20f883e', '51c41ee2-14b7-11ee-83e2-525400a7d41d', 3, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', '', '', '', 10000, '65000', 0),
(54, 'kawaljit', 'adminnew', 'harindersingh7251@gmail.com', '1234567890', 'New Office', 'Dev Firm new', '96e79218965eb72c92a549dd5a330112', 'e10adc3949ba59abbe56e057f20f883e', 3, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Australia', 'South Australia', 'Allenby Gardens', 10000, '79900', 1),
(55, 'kawaljit', 'singh', 'harindersingh7251@gmail.com.au', '1234567890', 'New Office', 'Dev Firm new', '96e79218965eb72c92a549dd5a330112', 'cd6d62cc-15ca-11ee-83e2-525400a7d41d', 1, 2, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', '', '', '', 150000, '454654', 0),
(56, 'Sahib test', 'Singh', 'ao.devao@gmail.com', '2147483647', 'FO  SAHIB', 'SAHIB', '417f3b6bcb6275eb72235836095c148e', '8382f63a-168c-11ee-83e2-525400a7d41d', 1, 2, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'The Bahamas', 'Long Island', 'Clarence Town', 100000, '100000', 0),
(57, 'Surej', 'K', 'sunman74@gmail.com', '2147483647', 'SFO', 'SFO', 'd16bb99ae8001e50f8951876ad231337', 'd646ce11-1690-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 2, '1000000000', 0),
(58, 'anonymous', 'test', 'steven@forcefamilyoffice.com', '2147483647', 'testing', 'Force', 'a36574edb703c814e3ad78273983d3e2', '3d39e806-16a0-11ee-83e2-525400a7d41d', 1, 1, '1', 'United States', 'Texas', 'Albany', 5, '1000000', 0),
(59, '', '', 'kawaljit2191@gmail.com.aus', '1234567890', 'New Office', 'Dev Firm new', 'e09c80c42fda55f9d992e59ca6b3307d', 'fceea1db-2469-11ee-83e2-525400a7d41d', 1, 2, 'a2ee0619-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Algeria', 'Naama', 'Aïn Sefra', 10000, '11111', 1),
(60, 'kawaljit', 'adminnew', 'harindersingh7251@gmail.com.au', '1234567890', 'FO office', 'Dev Firm', '96e79218965eb72c92a549dd5a330112', '3021d6ff-2480-11ee-83e2-525400a7d41d', 1, 2, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', '', '', '', 1000, '1000', 0),
(61, 'Surej', 'Kalathil', 'info@photographybysunman.com', '5618279072', 'Sunman Family Office', 'Sunman LLC', 'b9b81591d392f764d9a9ae9cd89d26cd', '1ba595a9-4f30-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 2147483647, '2', 0),
(62, 'Timmy', 'Marbles', 'tom@forcewealth.com', '2121111111', 'Timmy FO', 'TFO', 'd069f292c8ff40e5a024cc449b3cad89', '553ad4f9-517e-11ee-83e2-525400a7d41d', 1, 2, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'New York', 'North Bellmore', 1000000, '5', 0),
(63, 'JIM', 'SMITH', 'JSMITH@YAHOO.COM', '9174543277', 'SMITH FO', 'SMITH FO', '449d06f127bd243e58541b10fe5d14f2', 'd626281a-638c-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', '', '', 4000000, '7', 0),
(64, 'surej', 'surej', 'info@designbysunman.com', '8888888888', 'surej', 'surej', '96e79218965eb72c92a549dd5a330112', 'ff39249b-6390-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 100000, '5', 0),
(65, 'Roger ', 'Jones', 'Rjones@yahoo.com', '6462223333', 'Jones Family Office', '', '2f7c55c0dea783761f37448e616cd8a5', '04e59033-644c-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'California', 'Acton', 50000000, '6', 1),
(66, 'first name', 'last name', 'harindersingh7251@gmail.com.amm', '8787878787', 'test', 'twst', '05a671c66aefea124cc08b76ea6d30bb', '06ba0a2a-64cb-11ee-83e2-525400a7d41d', 1, 1, 'a2ee0619-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Tunisia', 'Manouba Governorate', 'Manouba', 878787, '454545', 1),
(67, 'Arthur ', 'valentine ', 'avalentine@122family.com', '6462991234', '122 Family ', '122 Family', '39f5fc162debe9337dccf54975e47f06', 'c9e8701c-6f61-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'New Jersey', 'Westfield', 12000000, '6', 0),
(68, 'Arthur ', 'valentine ', 'avalentine@122family.com', '6462991234', '122 Family ', '122 Family', '39f5fc162debe9337dccf54975e47f06', 'cdbd7b7f-6f61-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'New Jersey', 'Westfield', 12000000, '6', 0),
(69, 'Alan ', 'Marsh', 'amarsh@abc.com', '9172314476', 'A Marsh Family Office', 'Marsh Family Office ', 'e10adc3949ba59abbe56e057f20f883e', 'd37ad6e8-6f62-11ee-83e2-525400a7d41d', 1, 1, '2', 'Afghanistan', 'Badakhshan', 'Ashkāsham', 5000000, '3', 0),
(70, 'test sahib', 'sahib', 'test@gmail.com', '8888888888', 'test', 'test', '05a671c66aefea124cc08b76ea6d30bb', 'e627c8c7-72f9-11ee-83e2-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Austria', 'Salzburg', 'Dienten am Hochkönig', 89898989, '89898989', 1),
(71, 'kawal', 'adminnew', 'harindersingh7251@gmail.com00', '1234567890', 'FO office', 'Dev Firm', '96e79218965eb72c92a549dd5a330112', '143add31-74d6-11ee-bcfc-525400a7d41d', 2, 1, '', '', '', '', 0, '', 0),
(72, 'kawaljit', 'adminnew', 'harindersingh7251@gmail.com55', '1234567890', '', 'Dev Firm', '96e79218965eb72c92a549dd5a330112', '374763c8-74d6-11ee-bcfc-525400a7d41d', 3, 1, '', 'Afghanistan', 'Ghazni', 'Ghazni', 0, '656566', 0),
(73, 'Mike', 'Wazowski', 'tom@forcewealth.com', '2121111111', 'Analyst', 'Banking Firm', '25d55ad283aa400af464c76d713c07ad', 'aa153903-77ff-11ee-bcfc-525400a7d41d', 2, 1, '', 'Belarus', 'Minsk Region', 'Astrashytski Haradok', 0, '', 0),
(74, 'James', 'Sullivan', 'tomchen747@gmail.com', '2122222222', 'Amethyst', 'Gem', 'e10adc3949ba59abbe56e057f20f883e', '1d7f706c-7800-11ee-bcfc-525400a7d41d', 1, 1, '1', 'Finland', 'Central Finland', 'Äänekoski', 5000000, '4', 0),
(75, 'tom ', 'thumb', 'tom@thumb.com', '1234567890', 'thumb', 'tom', 'e10adc3949ba59abbe56e057f20f883e', '4205db3d-7d78-11ee-bcfc-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'New York', 'New York City', 50000000, '5', 0),
(76, 'Saul', 'Ross', 'saul@abc.com', '6463699222', '', 'Title', 'e10adc3949ba59abbe56e057f20f883e', '796e9374-7f16-11ee-bcfc-525400a7d41d', 1, 1, 'a2ee0619-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'New York', 'New York City', 2147483647, '', 0),
(77, 'sunman', 'k', 'photographybysunman@gmail.com', '5618279072', 'Director', 'Sunman LLC', '4d7582180a19ce53673a456cff43b50e', '609c14c8-854f-11ee-bcfc-525400a7d41d', 2, 1, '', 'United States', 'Florida', 'Jupiter', 0, '', 0),
(78, 'Tony', 'Stark', 'tstark@ironman.com', '6666666666', 'stark industries', 'stark', '0d94d92e3dc096f64213a5b34fa9d098', '05352743-9b50-11ee-bcfc-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'New York', 'New York City', 2147483647, '14', 0),
(79, 'Clark', 'Kent', 'ckent@super.com', '7777777777', 'Super MFO', 'Super MFO', '5498a4b022b998d7d81bf65ef1ca3c43', '95d283e5-9b50-11ee-bcfc-525400a7d41d', 1, 1, 'a2ee0619-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'New York', 'Adams', 100000000, '23', 0),
(80, 'Aqua', 'man', 'aqua@man.com', '8888888888', 'aqua', 'man', 'a24c13cc775e0cde98f0492480250372', '2a3b50f9-9b51-11ee-bcfc-525400a7d41d', 1, 1, 'a2ee0619-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Liechtenstein', 'Planken', 'Planken', 55000000, '42', 0),
(81, 'Ray ', 'Dalio', 'Ray@freedom.com', '1234567890', 'CFO', 'Freedom', '0c7b9962b1286580d28b68898e74790d', 'a80e9b5a-9b51-11ee-bcfc-525400a7d41d', 2, 1, '', 'United States', 'North Dakota', 'Adams County', 0, '', 0),
(82, 'Sunshine', 'Florida', 'surej74@yahoo.com', '5618279072', 'Sunman Family Office', 'Sunman LLC', '045ae82ecea1667e9863459fa70cd3be', 'c44505e6-9b59-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 100000, '2', 0),
(83, 'Sheeba', 'Singh', 'sheebsingh21@gmail.com', '5618945634', 'Sheeba Family Office', 'Sheeba LLC', 'bbc25352c5167cc5ee16bfe4d05f95f3', 'b403d273-9b5a-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 34500000, '10', 0),
(84, 'Steve', 'S', 'steve@gmail.com', '7894561230', 'Steve fin comp', 'Steven', '681461bc5ac81825270c3697713442bf', '09aff8db-9bf7-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Australia', 'New South Wales', 'Anna Bay', 150000, '150000', 0),
(85, 'Sur', 'Reg', 'sur@aol.com', '1234567890', 'Sur Family office', 'Sur Firm ', 'fb97c653e4d2d09a1ae943427cc699ab', '4bbfc86d-9c44-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Armenia', 'Armavir Region', 'Apaga', 50, '50', 0),
(86, 'King', 'Surej', 'king@surej.com', '4567890987', 'King', 'King', '2f7c55c0dea783761f37448e616cd8a5', 'b451d22d-9c44-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Australia', 'South Australia', 'Adelaide city centre', 99, '99', 0),
(87, 'Surej', 'Kalathil', 'sunman561432@gmail.com', '5618279072', 'Sunmansheeba24', 'Sunsheeba', '045ae82ecea1667e9863459fa70cd3be', 'b960162d-9c45-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Afghanistan', 'Badakhshan', 'Ashkāsham', 10000000, '2', 0),
(88, 'Jablar', 'charmindatha', 'Jchar@gmail.com', '3456781234', 'Amoraiian', 'Amoraian', '939bb9412cdc712d7700c1beb1918d33', 'f9acc112-9c45-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'American Samoa', '', '', 1000100100, '31', 0),
(89, 'Jim', 'Smith', 'Jim@gmail.com', '1234567890', 'Smith Family office', 'JS FO', '2f7c55c0dea783761f37448e616cd8a5', 'a8923ec5-9c48-11ee-bcfc-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'British Indian Ocean Territory', '', '', 2147483647, '18', 0),
(90, 'Jerry', 'Garcia', 'jerry@gmail.com', '4567890987', 'j Garcia', 'Garcia J', '5b64b2132689d27f42ec44a5fc64d8ca', '5994b09f-9c49-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Alabama', 'Albertville', 2147483647, '22', 0),
(91, 'Anthony ', 'Clair', 'aclair@gmail.com', '2345678901', 'Clair', 'Clair Group', '2f7c55c0dea783761f37448e616cd8a5', '3e78fcae-9c4a-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Bermuda', 'Hamilton Parish', '', 2147483647, '18', 1),
(92, 'Anthony ', 'Clair', 'aclair@gmail.com', '2345678901', 'Clair', 'Clair Group', '2f7c55c0dea783761f37448e616cd8a5', '4e959f51-9c4a-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Bermuda', 'Hamilton Parish', '', 2147483647, '18', 1),
(93, 'Anthony ', 'Clair', 'aclair@gmail.com', '2345678901', 'Clair', 'Clair Group', '2f7c55c0dea783761f37448e616cd8a5', '5645ee17-9c4a-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Bermuda', 'Hamilton Parish', '', 2147483647, '18', 1),
(94, 'George', 'Wash', 'Gwash@gmail.com', '6789054321', 'George Wash FO', 'Wash', '2f7c55c0dea783761f37448e616cd8a5', '39ca0540-9c4b-11ee-bcfc-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Bolivia', 'Beni Department', 'Provincia Cercado', 345000000, '12', 0),
(95, 'Joe', 'Moffit', 'jmoffiit@gmail.com', '1234567890', '', 'Moffit Accounting and Law', '2f7c55c0dea783761f37448e616cd8a5', 'f1a22193-9c4d-11ee-bcfc-525400a7d41d', 3, 1, '', 'China', 'Sichuan', 'Aba Zangzu Qiangzu Zizhizhou', 0, '44', 0),
(96, 'Joe', 'Moffit', 'jmoffiit@gmail.com', '1234567890', '', 'Moffit Accounting and Law', '2f7c55c0dea783761f37448e616cd8a5', 'f3084896-9c4d-11ee-bcfc-525400a7d41d', 3, 1, '', 'China', 'Sichuan', 'Aba Zangzu Qiangzu Zizhizhou', 0, '44', 0),
(97, 'Jim', 'Moffitt', 'jmoffitt@gmail.com', '1234567777', '', 'Moffitt Accounting and Law', '2f7c55c0dea783761f37448e616cd8a5', '4bec4f89-9c4e-11ee-bcfc-525400a7d41d', 3, 1, '', 'China', 'Beijing', 'Beijing', 0, '17', 0),
(98, 'MH', 'Able', 'mable@gmail.com', '0987654321', 'Investment Banker', 'MH Able', '2f7c55c0dea783761f37448e616cd8a5', '78599238-9c50-11ee-bcfc-525400a7d41d', 2, 1, '', 'India', 'Maharashtra', 'Mumbai', 0, '', 0),
(99, 'Testq', 'as', 'test@sgmail.com', '7894561230', 'test', 'dev test', '25f9e794323b453885f5181f1b624d0b', '09039d77-a9f7-11ee-bcfc-525400a7d41d', 1, 0, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'Afghanistan', 'Jowzjan', 'Āqchah', 150000, '120000', 1),
(100, 'Sunshine ', 'Man', 'sunman78@gmail.com', '5618279072', 'Sunman Family Office', 'Sunman LLC', '18bd041101a334080b4c2adb9d51ece6', '4054a82e-aa73-11ee-bcfc-525400a7d41d', 1, 1, '917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 34500000, '10', 1),
(101, 'Hulk ', 'Hogan', 'surej@gmail.com', '5618279072', 'Hulk', 'Hulk Family Office', '045ae82ecea1667e9863459fa70cd3be', '2bcc843a-aa74-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 34500000, '10', 1),
(102, 'Testq', 'as', 'kawaljit2191@gmail.com123', '7894561230', '123', '1532', 'e10adc3949ba59abbe56e057f20f883e', '2418a4b0-aad5-11ee-bcfc-525400a7d41d', 2, 0, '', 'Aland Islands', 'Kandahar', 'Kandahār', 0, '', 0),
(103, 'Testq', 'as', 'kawaljit2191@gmail.com789', '7894561230', '', 'dev test', 'e10adc3949ba59abbe56e057f20f883e', '3aa89fd9-aad5-11ee-bcfc-525400a7d41d', 3, 0, '', 'Aland Islands', 'Baghlan', 'Baghlān', 0, '123456', 0),
(104, 'Shair', 'Khan', 'shayru@gmail.com', '5618769073', 'Sunman Family Office', 'Sunman LLC', '13056ba71fdd87e972b4696fdc86249e', '6e20c0f3-aca8-11ee-bcfc-525400a7d41d', 1, 1, 'a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2', 'United States', 'Florida', 'Jupiter', 34500000, '10', 1),
(105, 'Kumar ', 'Steve', 'dhakan@gmail.com', '5616301305', 'Founder', 'Sunsheeba', '13056ba71fdd87e972b4696fdc86249e', 'cb6535b0-aca8-11ee-bcfc-525400a7d41d', 2, 1, '', 'United States', 'Florida', 'Jupiter', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_user`
--
ALTER TABLE `contact_user`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `data_table`
--
ALTER TABLE `data_table`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `investment_sector`
--
ALTER TABLE `investment_sector`
  ADD PRIMARY KEY (`inv_ID`);

--
-- Indexes for table `investment_user`
--
ALTER TABLE `investment_user`
  ADD PRIMARY KEY (`inv_secId`);

--
-- Indexes for table `sell_form`
--
ALTER TABLE `sell_form`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`SP_ID`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`sys_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_table`
--
ALTER TABLE `data_table`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `investment_sector`
--
ALTER TABLE `investment_sector`
  MODIFY `inv_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `investment_user`
--
ALTER TABLE `investment_user`
  MODIFY `inv_secId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT for table `sell_form`
--
ALTER TABLE `sell_form`
  MODIFY `sell_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_config`
--
ALTER TABLE `system_config`
  MODIFY `sys_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
