-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 05:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruet_cse_department`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` char(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `password`, `name`, `email`) VALUES
(1, 123001, '12TBNVQ7933', '', ''),
(2, 123002, '12OZMDS4052', '', ''),
(3, 123003, '12UPTHC4737', '', ''),
(4, 123004, '12JUNAX9968', '', ''),
(5, 123005, '12ZBVWJ3917', '', ''),
(6, 123006, '12KZZXM2409', '', ''),
(7, 123007, '12VUIIH2923', '', ''),
(8, 123008, '12BDNJY2565', '', ''),
(9, 123009, '12BOMNT8871', '', ''),
(10, 123010, '12GHEDY7590', '', ''),
(11, 123011, '12YQPCW5435', '', ''),
(12, 123012, '12WMXMG9116', '', ''),
(13, 123013, '12LATRV4550', '', ''),
(14, 123014, '12VOOIG8611', '', ''),
(15, 123015, '12OZASM4207', '', ''),
(16, 123016, '12VQLQV4227', '', ''),
(17, 123017, '12LSAXX2897', '', ''),
(18, 123018, '12YCEJD8097', '', ''),
(19, 123019, '12YZDGK3052', '', ''),
(20, 123020, '12ATKXE8414', '', ''),
(21, 123021, '12HZKMP3656', '', ''),
(22, 123022, '12NJCAM1665', '', ''),
(23, 123023, '12ZOQZN1942', '', ''),
(24, 123024, '12CQZRR9534', '', ''),
(25, 123025, '12DFZGP6134', '', ''),
(26, 123026, '12NWNII9259', '', ''),
(27, 123027, '12FFTGH7247', '', ''),
(28, 123028, '12ZQHWV5186', '', ''),
(29, 123029, '12RDOXA7145', '', ''),
(30, 123030, '12VEKUN3807', '', ''),
(31, 123031, '12CDWUS3769', '', ''),
(32, 123032, '12PZWZX5022', '', ''),
(33, 123033, '12WYMOR3622', '', ''),
(34, 123034, '12OTZRZ7146', '', ''),
(35, 123035, '12TCXTJ1793', '', ''),
(36, 123036, '12VLKRX5625', '', ''),
(37, 123037, '12ZOIJY1975', '', ''),
(38, 123038, '12LLVIT4616', '', ''),
(39, 123039, '12YRMJH7135', '', ''),
(40, 123040, '12DKDDF3688', '', ''),
(41, 123041, '12TUAUP7669', '', ''),
(42, 123042, '12YVWCG2295', '', ''),
(43, 123043, '12WXZFS9895', '', ''),
(44, 123044, '12GZOFF3077', '', ''),
(45, 123045, '12VZDVG8389', '', ''),
(46, 123046, '12IGZNP1570', '', ''),
(47, 123047, '12RQIOV1132', '', ''),
(48, 123048, '12AMJXE7380', '', ''),
(49, 123049, '12OGFXS5269', '', ''),
(50, 123050, '12OAZMW7143', '', ''),
(51, 123051, '12DWHGT6332', '', ''),
(52, 123052, '12KOHKO3482', '', ''),
(53, 123053, '12DECDW5966', '', ''),
(54, 123054, '12RGZZE7526', '', ''),
(55, 123055, '12GJPFD7117', '', ''),
(56, 123056, '12EVYXK3702', '', ''),
(57, 123057, '12YBCRD2750', '', ''),
(58, 123058, '12JJZUK3619', '', ''),
(59, 123059, '12SEUQP9545', '', ''),
(60, 123060, '12PCTDL7978', '', ''),
(61, 123061, '12QYHLD7065', '', ''),
(62, 123062, '12VXLFE7220', '', ''),
(63, 123063, '12KYRYH1673', '', ''),
(64, 123064, '12DRSID8679', '', ''),
(65, 123065, '12STSKU7671', '', ''),
(66, 123066, '12SIKGA9159', '', ''),
(67, 123067, '12JCRLK8836', '', ''),
(68, 123068, '12APAJV3162', '', ''),
(69, 123069, '12IIQKE2238', '', ''),
(70, 123070, '12XFQZV7061', '', ''),
(71, 123071, '12HVHFL2656', '', ''),
(72, 123072, '12GLPON7849', '', ''),
(73, 123073, '12NFFGW4412', '', ''),
(74, 123074, '12FTJGS9367', '', ''),
(75, 123075, '12CZBXO2284', '', ''),
(76, 123076, '12DXIPK6283', '', ''),
(77, 123077, '12EWUOV2209', '', ''),
(78, 123078, '12FHHYM6310', '', ''),
(79, 123079, '12GRZOB6420', '', ''),
(80, 123080, '12YVVEO7971', '', ''),
(81, 123081, '12AAKFE1829', '', ''),
(82, 123082, '12VSGBK3056', '', ''),
(83, 123083, '12DOZMQ8725', '', ''),
(84, 123084, '12WQLKU1137', '', ''),
(85, 123085, '12AWPPA7649', '', ''),
(86, 123086, '12VRAYL3663', '', ''),
(87, 123087, '12SRJNF9356', '', ''),
(88, 123088, '12SNYJV7008', '', ''),
(89, 123089, '12EBMVA9979', '', ''),
(90, 123090, '12EADIU4837', '', ''),
(91, 123091, '12IHWWW9968', '', ''),
(92, 123092, '12NKWQD4888', '', ''),
(93, 123093, '12EEUJI2950', '', ''),
(94, 123094, '12ZWZJH1775', '', ''),
(95, 123095, '12OZSWA7639', '', ''),
(96, 123096, '12YOQMN3226', '', ''),
(97, 123097, '12QMFYH6768', '', ''),
(98, 123098, '12LZSLS9218', '', ''),
(99, 123099, '12YEOVV4908', '', ''),
(100, 123100, '12HSLXT9617', '', ''),
(101, 123101, '12DWBJD9315', '', ''),
(102, 123102, '12HWCUM5150', '', ''),
(103, 123103, '12KQPGV7578', '', ''),
(104, 123104, '12JUNLT8901', '', ''),
(105, 123105, '12ZOHRU7880', '', ''),
(106, 123106, '12BAYHX1340', '', ''),
(107, 123107, '12YLLCY3201', '', ''),
(108, 123108, '12BDSNH6467', '', ''),
(109, 123109, '12FDLAS8291', '', ''),
(110, 123110, '12KREBS5425', '', ''),
(111, 123111, '12CLAYY9927', '', ''),
(112, 123112, '12UMVXQ9290', '', ''),
(113, 123113, '12PVJKC9113', '', ''),
(114, 123114, '12IVDMX5870', '', ''),
(115, 123115, '12WLVOZ2595', '', ''),
(116, 123116, '12LLWMZ3774', '', ''),
(117, 123117, '12HQUIL3974', '', ''),
(118, 123118, '12PZDEP3932', '', ''),
(119, 123119, '12HUCXD6357', '', ''),
(120, 123120, '12LZHTK3720', '', ''),
(121, 133001, '13DCMBB8508', '', ''),
(122, 133002, '13PSBIR2775', '', ''),
(123, 133003, '13FOLPP6828', '', ''),
(124, 133004, '13SEMAO3195', '', ''),
(125, 133005, '13LFRQL1339', '', ''),
(126, 133006, '13ZPSQA9948', '', ''),
(127, 133007, '13ZHDLP7842', '', ''),
(128, 133008, '13GRIQL3572', '', ''),
(129, 133009, '13PUMJD3208', '', ''),
(130, 133010, '13TOCCB4045', '', ''),
(131, 133011, '13AFLXO5361', '', ''),
(132, 133012, '13DKUZC6410', '', ''),
(133, 133013, '13VICDZ1808', '', ''),
(134, 133014, '13NTZFG9092', '', ''),
(135, 133015, '13MGXOS7988', '', ''),
(136, 133016, '13HFHYK7974', '', ''),
(137, 133017, '13YOSYM1314', '', ''),
(138, 133018, '13NHVNG9514', '', ''),
(139, 133019, '13SMNEC4409', '', ''),
(140, 133020, '13HIBQS4799', '', ''),
(141, 133021, '13MEDPY2752', '', ''),
(142, 133022, '13PGGUH6575', '', ''),
(143, 133023, '13BJMNE2530', '', ''),
(144, 133024, '13ZXHGN8220', '', ''),
(145, 133025, '13PLFCJ3612', '', ''),
(146, 133026, '13AZKLH2341', '', ''),
(147, 133027, '13NDFRX6534', '', ''),
(148, 133028, '13IXTPF4049', '', ''),
(149, 133029, '13RXGAQ6998', '', ''),
(150, 133030, '13BXJSS3504', '', ''),
(151, 133031, '13BKSBF6574', '', ''),
(152, 133032, '13AALDE9558', '', ''),
(153, 133033, '13OMHUA8069', '', ''),
(154, 133034, '13ZMIOA7327', '', ''),
(155, 133035, '13ZHMOH2002', '', ''),
(156, 133036, '13GNWKN8241', '', ''),
(157, 133037, '13YCYHQ2915', '', ''),
(158, 133038, '13DCGYG9651', '', ''),
(159, 133039, '13PVUYE1557', '', ''),
(160, 133040, '13AJGUS8330', '', ''),
(161, 133041, '13LCZKQ3924', '', ''),
(162, 133042, '13FHFLW1613', '', ''),
(163, 133043, '13OXNKD4000', '', ''),
(164, 133044, '13UEILH2805', '', ''),
(165, 133045, '13GBNNL2821', '', ''),
(166, 133046, '13PNLVM7966', '', ''),
(167, 133047, '13BPVEQ2644', '', ''),
(168, 133048, '13ILXJG3801', '', ''),
(169, 133049, '13XONTK1495', '', ''),
(170, 133050, '13XDWKS4895', '', ''),
(171, 133051, '13TLHNE5033', '', ''),
(172, 133052, '13THIMI1423', '', ''),
(173, 133053, '13FFIDP5866', '', ''),
(174, 133054, '13MOMNG8704', '', ''),
(175, 133055, '13JNSGC4311', '', ''),
(176, 133056, '13ESPIK6531', '', ''),
(177, 133057, '13KCTWF4919', '', ''),
(178, 133058, '13FOTQV1375', '', ''),
(179, 133059, '13WIMTX4794', '', ''),
(180, 133060, '13ENJZJ4803', '', ''),
(181, 133061, '13PSRHB6701', '', ''),
(182, 133062, '13XYXQE5743', 'UTPAL BARMAN', ''),
(183, 133063, '13EEIUM8364', '', ''),
(184, 133064, '13IZTZU6918', '', ''),
(185, 133065, '13UVMPM4347', '', ''),
(186, 133066, '13TVCAP2101', '', ''),
(187, 133067, '13SCAKI3952', '', ''),
(188, 133068, '13UDXMB2218', '', ''),
(189, 133069, '13GRLWC2478', '', ''),
(190, 133070, '13WPJLU4464', '', ''),
(191, 133071, '13JVQZY9030', '', ''),
(192, 133072, '13EPGXP3405', '', ''),
(193, 133073, '13ULJSM2912', '', ''),
(194, 133074, '13AVUHB7390', '', ''),
(195, 133075, '13ERHLQ3446', '', ''),
(196, 133076, '13BSDLS9406', '', ''),
(197, 133077, '13GVGNA1890', '', ''),
(198, 133078, '13UTWSX9031', '', ''),
(199, 133079, '13YTNPW2267', '', ''),
(200, 133080, '13GECPG3192', '', ''),
(201, 133081, '13VYZYY5979', '', ''),
(202, 133082, '13PQAKY2820', '', ''),
(203, 133083, '13LLHQO8867', '', ''),
(204, 133084, '13QZZFF6388', '', ''),
(205, 133085, '13XMYJB4489', '', ''),
(206, 133086, '13NKWLN1808', '', ''),
(207, 133087, '13VARNI5442', '', ''),
(208, 133088, '13ULRGN9625', '', ''),
(209, 133089, '13PZSZF6840', '', ''),
(210, 133090, '13CHGFJ5074', '', ''),
(211, 133091, '13LWHQF7947', '', ''),
(212, 133092, '13KRQVF5731', '', ''),
(213, 133093, '13PVUCJ9899', '', ''),
(214, 133094, '13AFCOL9944', '', ''),
(215, 133095, '13OQLSC3054', '', ''),
(216, 133096, '13HKWVN5890', '', ''),
(217, 133097, '13QYVYV1815', '', ''),
(218, 133098, '13WUKMC8374', '', ''),
(219, 133099, '13ZMYWA9950', '', ''),
(220, 133100, '13IRKHK7432', '', ''),
(221, 133101, '13WOEWD8988', '', ''),
(222, 133102, '13PLMRQ6504', '', ''),
(223, 133103, '13TIPPQ3760', '', ''),
(224, 133104, '13YPJYB2161', '', ''),
(225, 133105, '13GTHQW6403', '', ''),
(226, 133106, '13VXHDL7571', '', ''),
(227, 133107, '13OJGXG5181', '', ''),
(228, 133108, '13QAKSM9596', '', ''),
(229, 133109, '13XJAGY2028', '', ''),
(230, 133110, '13SEVRY4267', '', ''),
(231, 133111, '13ZEJUS1869', '', ''),
(232, 133112, '13SCNJK5044', '', ''),
(233, 133113, '13PDXKO7538', '', ''),
(234, 133114, '13KGVEQ8498', '', ''),
(235, 133115, '13GJLMB8146', '', ''),
(236, 133116, '13WUJMA6880', '', ''),
(237, 133117, '13JGBMB9927', '', ''),
(238, 133118, '13IYNRS3947', '', ''),
(239, 133119, '13DBAXX1401', '', ''),
(240, 133120, '13NWBAD6004', '', ''),
(241, 143001, '14RBEOA2596', '', ''),
(242, 143002, '14LNTQJ9227', '', ''),
(243, 143003, '14KOLYC9224', '', ''),
(244, 143004, '14FMERS5471', '', ''),
(245, 143005, '14VODHS8254', '', ''),
(246, 143006, '14WNQXK2426', '', ''),
(247, 143007, '14SGGPH9809', '', ''),
(248, 143008, '14HOOGL7370', '', ''),
(249, 143009, '14JTFKY3742', '', ''),
(250, 143010, '14CSDNW7277', '', ''),
(251, 143011, '14DKHEL9726', '', ''),
(252, 143012, '14YAPGN1790', '', ''),
(253, 143013, '14JNFLD1357', '', ''),
(254, 143014, '14EYDOS3527', '', ''),
(255, 143015, '14RMJZI2642', '', ''),
(256, 143016, '14UJEVF2748', '', ''),
(257, 143017, '14CMCMI5916', '', ''),
(258, 143018, '14GINIO1636', '', ''),
(259, 143019, '14NIDPX4889', '', ''),
(260, 143020, '14SAKBT3642', '', ''),
(261, 143021, '14VNZVM4568', '', ''),
(262, 143022, '14AAXOQ8210', '', ''),
(263, 143023, '14CEZPX3885', '', ''),
(264, 143024, '14RDJHL3107', '', ''),
(265, 143025, '14HBOUS1958', '', ''),
(266, 143026, '14KKIVW1970', '', ''),
(267, 143027, '14VIKUF7284', '', ''),
(268, 143028, '14FUQDT2028', '', ''),
(269, 143029, '14SPXPA1510', '', ''),
(270, 143030, '14DWNET2157', '', ''),
(271, 143031, '14NWGKP9639', '', ''),
(272, 143032, '14BUFWU7748', '', ''),
(273, 143033, '14WZSDY3757', '', ''),
(274, 143034, '14VRJOH2576', '', ''),
(275, 143035, '14QGYBO4332', '', ''),
(276, 143036, '14RKITP1578', '', ''),
(277, 143037, '14JCKDW6835', '', ''),
(278, 143038, '14AONOJ7587', '', ''),
(279, 143039, '14CEVAB4061', '', ''),
(280, 143040, '14NYINN4434', '', ''),
(281, 143041, '14NVDGC6491', '', ''),
(282, 143042, '14KHDZG5492', '', ''),
(283, 143043, '14UDDEX8058', '', ''),
(284, 143044, '14CLOMC1477', '', ''),
(285, 143045, '14VHKYH1401', '', ''),
(286, 143046, '14EJZQF3207', '', ''),
(287, 143047, '14DQTME3911', '', ''),
(288, 143048, '14FVOQE9851', '', ''),
(289, 143049, '14RDBBM7065', '', ''),
(290, 143050, '14RSQRC2329', '', ''),
(291, 143051, '14WRRJP8058', '', ''),
(292, 143052, '14FYEFW1367', '', ''),
(293, 143053, '14LPYHL2168', '', ''),
(294, 143054, '14OYCWA2356', '', ''),
(295, 143055, '14HPIRK1569', '', ''),
(296, 143056, '14EEEJI7834', '', ''),
(297, 143057, '14RSNKL9373', '', ''),
(298, 143058, '14CISYB6380', '', ''),
(299, 143059, '14XLXDR4050', '', ''),
(300, 143060, '14HUBYY6060', '', ''),
(301, 143061, '14OUDYT3891', '', ''),
(302, 143062, '14IHXLI4090', '', ''),
(303, 143063, '14HHYXV7895', '', ''),
(304, 143064, '14FRLFX5855', '', ''),
(305, 143065, '14ISZWY2785', '', ''),
(306, 143066, '14ELPMQ3759', '', ''),
(307, 143067, '14OIRSN4205', '', ''),
(308, 143068, '14HBIMV7840', '', ''),
(309, 143069, '14IWEBU7500', '', ''),
(310, 143070, '14NHSFX6422', '', ''),
(311, 143071, '14ZXUZP7494', '', ''),
(312, 143072, '14EYLFG9695', '', ''),
(313, 143073, '14HCYJL6818', '', ''),
(314, 143074, '14AICHM2536', '', ''),
(315, 143075, '14RPATN7833', '', ''),
(316, 143076, '14RZOMV2977', '', ''),
(317, 143077, '14MLFZO3029', '', ''),
(318, 143078, '14DMWEA5882', '', ''),
(319, 143079, '14IZHQZ4730', '', ''),
(320, 143080, '14RHXIE7226', '', ''),
(321, 143081, '14ZGCPE2830', '', ''),
(322, 143082, '14XMZYF4171', '', ''),
(323, 143083, '14SHDRW4941', '', ''),
(324, 143084, '14HKAOU7115', '', ''),
(325, 143085, '14CUSUH6096', '', ''),
(326, 143086, '14KRPFO9167', '', ''),
(327, 143087, '14TZGRW7495', '', ''),
(328, 143088, '14RMIIP5556', '', ''),
(329, 143089, '14AMWTA8378', '', ''),
(330, 143090, '14TSYCT3861', '', ''),
(331, 143091, '14HNCTM9771', '', ''),
(332, 143092, '14UCZXE7799', '', ''),
(333, 143093, '14JXZMO9366', '', ''),
(334, 143094, '14DMZOC8756', '', ''),
(335, 143095, '14COPGR2423', '', ''),
(336, 143096, '14EXIFN8989', '', ''),
(337, 143097, '14FOYKA9001', '', ''),
(338, 143098, '14JFWCL1776', '', ''),
(339, 143099, '14BWMYX3172', '', ''),
(340, 143100, '14FFFFG4719', '', ''),
(341, 143101, '14LJIQB6134', '', ''),
(342, 143102, '14UHEJM9292', '', ''),
(343, 143103, '14HWLGN5680', '', ''),
(344, 143104, '14KWYHD4400', '', ''),
(345, 143105, '14EEPHN8722', '', ''),
(346, 143106, '14SUEQV4455', '', ''),
(347, 143107, '14HDBHO5464', '', ''),
(348, 143108, '14AVUEU2431', '', ''),
(349, 143109, '14FTVLP3981', '', ''),
(350, 143110, '14CKEND8379', '', ''),
(351, 143111, '14PPXTD4923', '', ''),
(352, 143112, '14SUHXD3744', '', ''),
(353, 143113, '14WDXLZ4280', '', ''),
(354, 143114, '14KXOTL2577', '', ''),
(355, 143115, '14HDQGU2049', '', ''),
(356, 143116, '14YLODF2851', '', ''),
(357, 143117, '14ZGLTT3366', '', ''),
(358, 143118, '14GNVPA9040', '', ''),
(359, 143119, '14YMXVC1883', '', ''),
(360, 143120, '14CWJDM3207', '', ''),
(361, 1503001, '15CRJGH9659', '', ''),
(362, 1503002, '15WGSTO7489', '', ''),
(363, 1503003, '15MOTSA4242', '', ''),
(364, 1503004, '15VOQJU8409', '', ''),
(365, 1503005, '15UIIMK2122', '', ''),
(366, 1503006, '15QWQAH3407', '', ''),
(367, 1503007, '15BKKXV1240', '', ''),
(368, 1503008, '15MAQTF8824', '', ''),
(369, 1503009, '15FMRLX4462', '', ''),
(370, 1503010, '15FNVUS9801', '', ''),
(371, 1503011, '15LZTIF1661', '', ''),
(372, 1503012, '15UFXDW9025', '', ''),
(373, 1503013, '15ZWHEC1251', '', ''),
(374, 1503014, '15THYPY5610', '', ''),
(375, 1503015, '15BTWIR2967', '', ''),
(376, 1503016, '15JPMWI8645', '', ''),
(377, 1503017, '15EEZYA3949', '', ''),
(378, 1503018, '15CJCUH7679', '', ''),
(379, 1503019, '15LEHQY3933', '', ''),
(380, 1503020, '15SYPXE4100', '', ''),
(381, 1503021, '15PJQTN4579', '', ''),
(382, 1503022, '15TTRJR3248', '', ''),
(383, 1503023, '15OCSTJ1246', '', ''),
(384, 1503024, '15YBWON1983', '', ''),
(385, 1503025, '15GXCBB4338', '', ''),
(386, 1503026, '15AEKSG7158', '', ''),
(387, 1503027, '15OEWFA6334', '', ''),
(388, 1503028, '15QWIJO4089', '', ''),
(389, 1503029, '15NJWND9737', '', ''),
(390, 1503030, '15EDOMW5841', '', ''),
(391, 1503031, '15SHNNR3847', '', ''),
(392, 1503032, '15ZFGOF5731', '', ''),
(393, 1503033, '15NPTZM2180', '', ''),
(394, 1503034, '15PMDKA8080', '', ''),
(395, 1503035, '15NAXZU7223', '', ''),
(396, 1503036, '15MYZWW5404', '', ''),
(397, 1503037, '15FBNYJ5971', '', ''),
(398, 1503038, '15ZBNZB7128', '', ''),
(399, 1503039, '15IWSOU7248', '', ''),
(400, 1503040, '15ESKRO6037', '', ''),
(401, 1503041, '15INGKR5776', '', ''),
(402, 1503042, '15EZTMN9220', '', ''),
(403, 1503043, '15RHUST4070', '', ''),
(404, 1503044, '15QTFRY8625', '', ''),
(405, 1503045, '15TDQCC7065', '', ''),
(406, 1503046, '15CVIWT4858', '', ''),
(407, 1503047, '15NDSQJ4733', '', ''),
(408, 1503048, '15NGOJY8642', '', ''),
(409, 1503049, '15MLGUP9769', '', ''),
(410, 1503050, '15DFEMX4989', '', ''),
(411, 1503051, '15WRGUU4550', '', ''),
(412, 1503052, '15NNSHN1476', '', ''),
(413, 1503053, '15EYVTV7591', '', ''),
(414, 1503054, '15JXFWD9551', '', ''),
(415, 1503055, '15PTFOD6964', '', ''),
(416, 1503056, '15ITXUM6496', '', ''),
(417, 1503057, '15HELHX1238', '', ''),
(418, 1503058, '15PVDSD2293', '', ''),
(419, 1503059, '15QXWXP3437', '', ''),
(420, 1503060, '15BYRBW7451', '', ''),
(421, 1503061, '15EZYSB1418', '', ''),
(422, 1503062, '15XWSRR3979', '', ''),
(423, 1503063, '15NBGFN3061', '', ''),
(424, 1503064, '15PEDQM6237', '', ''),
(425, 1503065, '15GWTLT3021', '', ''),
(426, 1503066, '15PDPYG4545', '', ''),
(427, 1503067, '15BYGSS7474', '', ''),
(428, 1503068, '15HJMIY5402', '', ''),
(429, 1503069, '15KMLQT6550', '', ''),
(430, 1503070, '15BVYZR3534', '', ''),
(431, 1503071, '15KZXGA9944', '', ''),
(432, 1503072, '15PWCGH1582', '', ''),
(433, 1503073, '15NFTTJ3270', '', ''),
(434, 1503074, '15SOYLO1824', '', ''),
(435, 1503075, '15BVFGA6051', '', ''),
(436, 1503076, '15NJQVU5851', '', ''),
(437, 1503077, '15MPFAO1714', '', ''),
(438, 1503078, '15NTSAW7615', '', ''),
(439, 1503079, '15KPYKU6643', '', ''),
(440, 1503080, '15IBBND6859', '', ''),
(441, 1503081, '15UWENX3167', '', ''),
(442, 1503082, '15BSHRT1617', '', ''),
(443, 1503083, '15SMCKV3601', '', ''),
(444, 1503084, '15KEXDC1640', '', ''),
(445, 1503085, '15UYQBI4946', '', ''),
(446, 1503086, '15GYDEN4406', '', ''),
(447, 1503087, '15KGBGA9911', '', ''),
(448, 1503088, '15NGDWS9818', '', ''),
(449, 1503089, '15KJQBL2294', '', ''),
(450, 1503090, '15HZFAV4457', '', ''),
(451, 1503091, '15IHQCY5448', '', ''),
(452, 1503092, '15EJFSV8976', '', ''),
(453, 1503093, '15EILQE2112', '', ''),
(454, 1503094, '15GDZXS6565', '', ''),
(455, 1503095, '15UEKXD1303', '', ''),
(456, 1503096, '15OHWPB6252', '', ''),
(457, 1503097, '15GYGYR3577', '', ''),
(458, 1503098, '15IPSDH1834', '', ''),
(459, 1503099, '15UDKLB1470', '', ''),
(460, 1503100, '15GWGBB4460', '', ''),
(461, 1503101, '15GWOTW3364', '', ''),
(462, 1503102, '15ITGLB5158', '', ''),
(463, 1503103, '15NMZMA2498', '', ''),
(464, 1503104, '15XPOGQ2391', '', ''),
(465, 1503105, '15UXSEG5532', '', ''),
(466, 1503106, '15VISLY4031', '', ''),
(467, 1503107, '15OYXWS3492', '', ''),
(468, 1503108, '15QJCSB8772', '', ''),
(469, 1503109, '15EWPQG3394', '', ''),
(470, 1503110, '15SYUSL7244', '', ''),
(471, 1503111, '15WYXYV7515', '', ''),
(472, 1503112, '15KLYUO9958', '', ''),
(473, 1503113, '15UYLMD1472', '', ''),
(474, 1503114, '15ZKEFN7568', '', ''),
(475, 1503115, '15WPUTA8063', '', ''),
(476, 1503116, '15WRSFR3847', '', ''),
(477, 1503117, '15LBUTB1971', '', ''),
(478, 1503118, '15WQEPL7190', '', ''),
(479, 1503119, '15TQMTG2177', '', ''),
(480, 1503120, '15IZJKR3430', '', ''),
(481, 1603001, '16AVJKB9438', '', ''),
(482, 1603002, '16TBIWT1457', '', ''),
(483, 1603003, '16ZBWMZ1188', '', ''),
(484, 1603004, '16GNGMA9812', '', ''),
(485, 1603005, '16HSVJQ3152', '', ''),
(486, 1603006, '16RAHMA5406', '', ''),
(487, 1603007, '16GAXCA9270', '', ''),
(488, 1603008, '16HZTXC1412', '', ''),
(489, 1603009, '16VYVYO5293', '', ''),
(490, 1603010, '16UOLCJ2305', '', ''),
(491, 1603011, '16AJEIF5247', '', ''),
(492, 1603012, '16OTJTH8893', '', ''),
(493, 1603013, '16RBVMB7785', '', ''),
(494, 1603014, '16ELPOQ7319', '', ''),
(495, 1603015, '16YREJF2800', '', ''),
(496, 1603016, '16HFCRK1193', '', ''),
(497, 1603017, '16HWYXU1687', '', ''),
(498, 1603018, '16ABLSO9601', '', ''),
(499, 1603019, '16JLTGN1509', '', ''),
(500, 1603020, '16LGSYW9430', '', ''),
(501, 1603021, '16NYUCA3701', '', ''),
(502, 1603022, '16FXWXN3692', '', ''),
(503, 1603023, '16FZIXF4135', '', ''),
(504, 1603024, '16DFOZN7892', '', ''),
(505, 1603025, '16QEZHG7358', '', ''),
(506, 1603026, '16HGZUP8230', '', ''),
(507, 1603027, '16WVMSR7741', '', ''),
(508, 1603028, '16OHNCM9000', '', ''),
(509, 1603029, '16AMZIP3611', '', ''),
(510, 1603030, '16DDSBH2969', '', ''),
(511, 1603031, '16JHVYE9344', '', ''),
(512, 1603032, '16ERLLM1851', '', ''),
(513, 1603033, '16MTPSB8654', '', ''),
(514, 1603034, '16LLRXJ6686', '', ''),
(515, 1603035, '16DWSTS4176', '', ''),
(516, 1603036, '16LGNPY4897', '', ''),
(517, 1603037, '16MSTHY7348', '', ''),
(518, 1603038, '16ZULFM1616', '', ''),
(519, 1603039, '16RYNOA9855', '', ''),
(520, 1603040, '16DYAXQ8560', '', ''),
(521, 1603041, '16PFRCO3226', '', ''),
(522, 1603042, '16ORGEV7567', '', ''),
(523, 1603043, '16XNSJZ1945', '', ''),
(524, 1603044, '16GIOJS5688', '', ''),
(525, 1603045, '16QVIKK3889', '', ''),
(526, 1603046, '16ABCTB8754', '', ''),
(527, 1603047, '16WEWLO3620', '', ''),
(528, 1603048, '16BIPQL9530', '', ''),
(529, 1603049, '16CHKFE5066', '', ''),
(530, 1603050, '16XOGVM4349', '', ''),
(531, 1603051, '16WKXKE9457', '', ''),
(532, 1603052, '16JVLTX1928', '', ''),
(533, 1603053, '16RPMQT9567', '', ''),
(534, 1603054, '16AQDRL4683', '', ''),
(535, 1603055, '16PUKSP4463', '', ''),
(536, 1603056, '16LDWVV7459', '', ''),
(537, 1603057, '16CLPYM3806', '', ''),
(538, 1603058, '16NLEDN8210', '', ''),
(539, 1603059, '16MQLDC4515', '', ''),
(540, 1603060, '16DGLAJ5329', '', ''),
(541, 1603061, '16RNTXD3006', '', ''),
(542, 1603062, '16VGMPS5241', '', ''),
(543, 1603063, '16CBARN2866', '', ''),
(544, 1603064, '16OVOCH7812', '', ''),
(545, 1603065, '16YMSSW9925', '', ''),
(546, 1603066, '16SCSBK3880', '', ''),
(547, 1603067, '16TPGXC6858', '', ''),
(548, 1603068, '16IVOHS2182', '', ''),
(549, 1603069, '16CUVZW8684', '', ''),
(550, 1603070, '16OJUJM4598', '', ''),
(551, 1603071, '16GWXWG5953', '', ''),
(552, 1603072, '16LZNLN9810', '', ''),
(553, 1603073, '16CKOOG3586', '', ''),
(554, 1603074, '16DVDFY3740', '', ''),
(555, 1603075, '16IXAHV6793', '', ''),
(556, 1603076, '16KNHYG2936', '', ''),
(557, 1603077, '16CTZWJ3932', '', ''),
(558, 1603078, '16IGOAP5198', '', ''),
(559, 1603079, '16CKMJL5106', '', ''),
(560, 1603080, '16DMXPY6723', '', ''),
(561, 1603081, '16UAYNM9600', '', ''),
(562, 1603082, '16DTRNB6283', '', ''),
(563, 1603083, '16MNZRH5294', '', ''),
(564, 1603084, '16SQQLN4009', '', ''),
(565, 1603085, '16FBFXH8108', '', ''),
(566, 1603086, '16KYQXD8120', '', ''),
(567, 1603087, '16YWBSW3944', '', ''),
(568, 1603088, '16PXNZG9744', '', ''),
(569, 1603089, '16YJPSR2253', '', ''),
(570, 1603090, '16FYCSX4485', '', ''),
(571, 1603091, '16AKIGM9496', '', ''),
(572, 1603092, '16YTENU4293', '', ''),
(573, 1603093, '16DOZQM5348', '', ''),
(574, 1603094, '16HYYET4095', '', ''),
(575, 1603095, '16RDJTZ9237', '', ''),
(576, 1603096, '16OARTI8066', '', ''),
(577, 1603097, '16NEUJW7993', '', ''),
(578, 1603098, '16OQNLN2313', '', ''),
(579, 1603099, '16MNVMH5901', '', ''),
(580, 1603100, '16JSXBX8380', '', ''),
(581, 1603101, '16DGGKM9674', '', ''),
(582, 1603102, '16LWYXM4429', '', ''),
(583, 1603103, '16GCUHU3347', '', ''),
(584, 1603104, '16IVKFP7213', '', ''),
(585, 1603105, '16ROFLB8552', '', ''),
(586, 1603106, '16RQGTO2309', '', ''),
(587, 1603107, '16FJMBB6304', '', ''),
(588, 1603108, '16TXNRU3587', '', ''),
(589, 1603109, '16HYPTP6121', '', ''),
(590, 1603110, '16UXKAP5912', '', ''),
(591, 1603111, '16CEDGO5286', '', ''),
(592, 1603112, '16ZBVMV8275', '', ''),
(593, 1603113, '16CLRDX7988', '', ''),
(594, 1603114, '16JKYUQ5809', '', ''),
(595, 1603115, '16HYLBN7548', '', ''),
(596, 1603116, '16LCTKI8469', '', ''),
(597, 1603117, '16BTBJX9367', '', ''),
(598, 1603118, '16HKUWG4052', '', ''),
(599, 1603119, '16YPSVY2931', '', ''),
(600, 1603120, '16MBMDE6749', '', ''),
(601, 1, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `slip_no` text NOT NULL,
  `sem_no` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `std_id`, `slip_no`, `sem_no`, `status`) VALUES
(32, 133062, '12', 1, 1),
(33, 133062, '22', 2, 1),
(35, 133062, '3456', 3, 1),
(36, 133062, '3', 4, 1),
(38, 133062, '1', 5, 1),
(39, 133062, '3', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`id`, `user_id`, `gp`, `semester_earn_credit`, `gpa`, `total_earned_credit`, `cgpa`, `failed_subject`, `x_grade_subject`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`) VALUES
(33, 133062, 60, 120.3, 3.99, 120.3, 3.99, '', 'CSE 1100', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'X'),
(34, 133063, 70.15, 120.3, 3.99, 120.3, 3.99, '', '', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'A+'),
(35, 133064, 60, 120.3, 3.99, 120.3, 3.99, 'CSE 1100', '', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE `semester6` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `semester7`
--

CREATE TABLE `semester7` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester7`
--

INSERT INTO `semester7` (`id`, `user_id`, `gp`, `semester_earn_credit`, `gpa`, `total_earned_credit`, `cgpa`, `failed_subject`, `x_grade_subject`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`) VALUES
(1, 133062, 60, 120.3, 3.99, 120.3, 3.99, '', 'CSE 1100', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'X'),
(2, 133063, 70.15, 120.3, 3.99, 120.3, 3.99, '', '', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'A+'),
(3, 133064, 60, 120.3, 3.99, 120.3, 3.99, 'CSE 1100', '', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `semester8`
--

CREATE TABLE `semester8` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gp` float NOT NULL,
  `semester_earn_credit` float NOT NULL,
  `gpa` float NOT NULL,
  `total_earned_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `failed_subject` varchar(255) NOT NULL,
  `x_grade_subject` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `s8` varchar(255) NOT NULL,
  `s9` varchar(255) NOT NULL,
  `s10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `course_id` varchar(20) DEFAULT NULL,
  `course_name` varchar(60) DEFAULT NULL,
  `semester_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`course_id`, `course_name`, `semester_no`) VALUES
('CSE 1100', 'Computer Fundamentals and Ethics', 1),
('CSE 1101', 'Computer Programming', 1),
('CSE 1102', 'Sessional Based on CSE 1101', 1),
('EEE 1151', 'Basic Electrical Engineering', 1),
('EEE 1152', 'Sessional Based on EEE 1151', 1),
('Math 1113', 'Differential and Integral Calculus', 1),
('Hum 1113', 'Functional English', 1),
('Hum 1114', 'English Language Lab', 1),
('Chem 1113', 'Inorganic and Physical Chemistry', 1),
('Chem 1114', 'Sessional Based on Chem 1113', 1),
('CSE 1200', 'Analytical Programming', 2),
('CSE 1201', 'Data Structure', 2),
('CSE 1202', 'Sessional Based on CSE 1201', 2),
('CSE 1203', 'Object Oriented Programming', 2),
('CSE 1204', 'Sessional Based on CSE 1203', 2),
('Math 1213', 'Co-ordinate Geometry and Ordinary Differential Equation', 2),
('Hum 1213', 'Economics, Government & Sociology', 2),
('Phy 1213', 'Physics', 2),
('Phy 1214', 'Sessional Based on Phy 1213', 2),
('CSE 2100', 'Software Development Project I', 3),
('CSE 2101', 'Discrete Mathematics', 3),
('CSE 2102', 'Sessional Based on CSE 2101', 3),
('CSE 2103', 'Numerical Methods', 3),
('CSE 2104', 'Sessional Based on CSE 2103', 3),
('EEE 2151', 'Analog Electronics', 3),
('EEE 2152', 'Sessional Based on EEE 2151', 3),
('Math 2113', 'Vector Analysis and Linear Algebra', 3),
('Hum 2113', 'Industrial Management & Accountancy', 3),
('CSE 2201', 'Computer Algorithm', 4),
('CSE 2202', 'Sessional Based on CSE 2201', 4),
('CSE 2203', 'Digital Techniques', 4),
('CSE 2204', 'Sessional Based on CSE 2203', 4),
('CSE 2205', 'Finite Automata Theory', 4),
('CSE 2206', 'Sessional Based on CSE 2206', 4),
('EEE 2251', 'Electrical Machines & Instrumentations', 4),
('EEE 2252', 'Sessional Based on EEE 2251', 4),
('Math 2213', 'Complex Variable, Differential Equation and Harmonics', 4),
('CSE 3100', 'Web Based Application Lab/Project', 5),
('CSE 3101', 'Database Systems', 5),
('CSE 3102', 'Sessional Based on CSE 3101', 5),
('CSE 3103', 'Data Communication', 5),
('CSE 3104', 'Sessional Based on CSE 3103', 5),
('CSE 3105', 'Software Engineering', 5),
('CSE 3107', 'Applied Statistics & Queuing Theory', 5),
('CSE 3109', 'Microprocessors & Assembly Language', 5),
('CSE 3110', 'Sessional Based on CSE 3109', 5),
('CSE 3112', 'Technical Writing and Presentation', 5),
('CSE 3200', 'Software Development Project II', 6),
('CSE 3201', 'Operating System', 6),
('CSE 3202', 'Sessional Based on CSE 3201', 6),
('CSE 3203', 'Computer Architecture and Design', 6),
('CSE 3205', 'Computer Networks', 6),
('CSE 3206', 'Sessional Based on CSE 3205', 6),
('CSE 3207', 'Peripherals & Interfacings', 6),
('CSE 3208', 'Sessional Based on CSE 3207', 6),
('CSE 3209', 'Artificial Intelligence', 6),
('CSE 3210', 'Sessional Based on CSE 3209', 6),
('CSE 4100', 'Project/Thesis I', 7),
('CSE 4101', 'Compiler Design', 7),
('CSE 4102', 'Sessional Based on CSE 4101', 7),
('CSE 4103', 'Digital Signal Processing', 7),
('CSE 4104', 'Sessional Based on CSE 4103', 7),
('CSE 4105', 'Digital Image Processing', 7),
('CSE 4106', 'Sessional Based on CSE 4105', 7),
('CSE 41**', 'Optional I', 7),
('CSE 41**', 'Sessional Based on Optional I', 7),
('CSE 41**', 'Optional II', 7),
('CSE 4107', 'Information System Analysis & Design', 7),
('CSE 4108', 'Sessional Based on CSE 4107', 7),
('CSE 4109', 'Unix Programming', 7),
('CSE 4110', 'Sessional Based on CSE 4109', 7),
('CSE 4111', 'Digital System Design', 7),
('CSE 4112', 'Sessional Based on CSE 4111', 7),
('CSE 4113', 'Simulation & Modeling', 7),
('CSE 4114', 'Sessional Based on CSE 4113', 7),
('CSE 4115', 'Wireless Networks', 7),
('CSE 4116', 'Sessional Based on CSE 4115', 7),
('CSE 4117', 'Parallel and Distributed Processing', 7),
('CSE 4119', 'Human Computer Interaction', 7),
('CSE 4121', 'Switching Systems', 7),
('CSE 4123', 'Control System Engineering', 7),
('CSE 4200', 'Project/Thesis II', 8),
('CSE 4201', 'Computer Graphics and Animations', 8),
('CSE 4202', 'Sessional Based on CSE 4201', 8),
('CSE 4203', 'Neural Networks & Fuzzy Systems', 8),
('CSE 4204', 'Sessional Based on CSE 4203', 8),
('CSE 4206', 'Seminar', 8),
('CSE 42**', 'Optional I', 8),
('CSE 42**', 'Optional II', 8),
('CSE 42**', 'Optional III', 8),
('CSE 4207', 'VLSI Design', 8),
('CSE 4209', 'Impact of Computer on Society', 8),
('CSE 4211', 'Network Planning', 8),
('CSE 4213', 'Knowledge Engineering', 8),
('CSE 4215', 'Network Security', 8),
('CSE 4217', 'Decision Support System', 8),
('CSE 4219', 'Computer Vision', 8),
('CSE 4221', 'Data Mining', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester4`
--
ALTER TABLE `semester4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester6`
--
ALTER TABLE `semester6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester7`
--
ALTER TABLE `semester7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester8`
--
ALTER TABLE `semester8`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=602;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `semester1`
--
ALTER TABLE `semester1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `semester2`
--
ALTER TABLE `semester2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester3`
--
ALTER TABLE `semester3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester4`
--
ALTER TABLE `semester4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester5`
--
ALTER TABLE `semester5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester6`
--
ALTER TABLE `semester6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester7`
--
ALTER TABLE `semester7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `semester8`
--
ALTER TABLE `semester8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
