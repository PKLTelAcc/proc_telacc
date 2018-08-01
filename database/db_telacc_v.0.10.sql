-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 03:45 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_telacc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bast`
--

CREATE TABLE `bast` (
  `BAST_ID` int(11) NOT NULL,
  `BAST_TANGGAL` date NOT NULL,
  `BAST_NO` int(11) NOT NULL,
  `BAST_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `BAST_WODE_ID` int(11) NOT NULL,
  `BAST_INST_ID` int(11) NOT NULL,
  `BAST_SPTL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instalasi`
--

CREATE TABLE `instalasi` (
  `INST_ID` int(11) NOT NULL,
  `INST_MATERIAL` int(11) NOT NULL,
  `INST_JASA` int(11) NOT NULL,
  `INST_TOTAL` int(11) NOT NULL,
  `INST_ODP` int(11) NOT NULL,
  `INST_PROGRES` text NOT NULL,
  `INST_KENDALA` text NOT NULL,
  `INST_DOKUMENTASI` text NOT NULL,
  `INST_TANGGAL` date NOT NULL,
  `INST_TARGET` date NOT NULL,
  `INST_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `INST_WODE_ID` int(11) NOT NULL,
  `INST_MTRA_ID` int(11) NOT NULL,
  `INST_PEGA_ID` int(11) NOT NULL,
  `INST_WTEL_ID` int(11) NOT NULL,
  `INST_SWIT_ID` int(11) NOT NULL,
  `INST_PROG_ID` int(11) NOT NULL,
  `INST_STIN_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `LEVE_ID` int(11) NOT NULL,
  `LEVE_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`LEVE_ID`, `LEVE_NAME`) VALUES
(1, 'SUPER USER'),
(2, 'ADMIN WORK ORDER'),
(3, 'ADMIN SURVEY'),
(4, 'ADMIN INSTALASI'),
(5, 'ADMIN BAST');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `MTRA_ID` int(11) NOT NULL,
  `MTRA_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`MTRA_ID`, `MTRA_NAME`) VALUES
(1, 'TA'),
(2, 'NON TA');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `PEGA_ID` int(11) NOT NULL,
  `PEGA_NAME` varchar(100) NOT NULL,
  `PEGA_NIK` int(11) NOT NULL,
  `PEGA_PSA` varchar(100) NOT NULL,
  `PEGA_ID_OBJ` varchar(50) NOT NULL,
  `PEGA_WTEL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`PEGA_ID`, `PEGA_NAME`, `PEGA_NIK`, `PEGA_PSA`, `PEGA_ID_OBJ`, `PEGA_WTEL_ID`) VALUES
(1, 'SUDO', 1, '1', '1', 1),
(2, 'SIGIT SHALAKO ABDURAJAK', 690293, 'BANDUNG', '\'30030400000000000', 1),
(3, '-', 0, 'BANDUNG', '\'30030400100000000', 1),
(4, 'NURINDRIYAN BINTANG PAMUNGKAS', 925601, 'BANDUNG', '\'30030400101000000', 1),
(5, 'MUHAMMAD RIZAL ALIY ZULFANNIY', 925763, 'BANDUNG', '\'30030400101000100', 1),
(6, 'RAMA RACHMATULLAH', 18820018, 'BANDUNG', '\'30030400101000101', 1),
(7, 'RADEN PANJI PRASETIA WIRAKUSUMAH', 86150029, 'BANDUNG', '\'30030400101000102', 1),
(8, 'KRISNANDA AUDISTRIA SAPUTRA', 17940284, 'BANDUNG', '\'30030400101000103', 1),
(9, 'MULYA SETIA YUDHA', 76160006, 'BANDUNG', '\'30030400200000000', 1),
(10, 'NINA FAUZIAH MUNAWAROH', 18940110, 'BANDUNG', '\'30030400201000100', 1),
(11, '-', 0, 'BANDUNG', '\'30030400201000101', 1),
(12, 'ARIYANA PARDINA', 90154143, 'BANDUNG', '\'30030400201000102', 1),
(13, 'TIKA HILDAYANTI', 94132146, 'BANDUNG', '\'30030400201000103', 1),
(14, 'ULFAH MUTHIA FANI', 18960522, 'BANDUNG', '\'30030400201000104', 1),
(15, 'INDANA SAKINAH', 925772, 'BANDUNG', '\'30030400201000200', 1),
(16, '-', 0, 'BANDUNG', '\'30030400201000201', 1),
(17, 'VALRINNO RIFQIA NOVADEANSYAH', 92154942, 'BANDUNG', '\'30030400201000202', 1),
(18, 'AYU SRI RAHAYU', 97160123, 'TASIKMALAYA', '\'30030400201000203', 2),
(19, 'NOVI ISNANDAR SE', 80180002, 'BANDUNG', '\'30030400300000000', 1),
(20, 'ARFAN RIYADHI AMARULLAH', 955071, 'BANDUNG', '\'30030400301000000', 1),
(21, '-', 0, 'BANDUNG BARAT', '\'30030400301000100', 3),
(22, 'WAWAN SETIAWAN', 18950732, 'BANDUNG', '\'30030400301000101', 1),
(23, 'ALDHI RESTU PUTRA', 95153526, 'BANDUNG', '\'30030400301000102', 1),
(24, 'SEPTIAN INGGIT HERAWAN', 92170417, 'BANDUNG', '\'30030400301000103', 1),
(25, 'HAFID NUGROHO', 99170434, 'BANDUNG', '\'30030400301000104', 1),
(26, 'AHMAD RAMDANI', 95150219, 'BANDUNG BARAT', '\'30030400301000105', 3),
(27, 'REZA SAGARA', 18920196, 'BANDUNG', '\'30030400301000106', 1),
(28, 'GURUH GUMILAR', 95150224, 'BANDUNG', '\'30030400301000107', 1),
(29, 'JERRY SEPTIAN', 18970323, 'BANDUNG', '\'30030400301000108', 1),
(30, 'DAVID MULYANA', 95160282, 'BANDUNG', '\'30030400301000109', 1),
(31, 'STEFANUS DWI KRESNAHADI', 906259, 'BANDUNG', '\'30030400301000200', 1),
(32, 'FAJAR SENJAYA', 96160356, 'BANDUNG', '\'30030400301000201', 1),
(33, 'ARI SAPUTRA', 96150295, 'BANDUNG', '\'30030400301000202', 1),
(34, 'TEDI IRAWAN', 96170527, 'BANDUNG', '\'30030400301000203', 1),
(35, 'WANGSA LUTFI ABDUL GANI', 18990401, 'BANDUNG BARAT', '\'30030400301000204', 3),
(36, 'DEBBY ARDIANSYAH', 97150326, 'BANDUNG BARAT', '\'30030400301000205', 3),
(37, 'ADITYA PRASETYO', 18930383, 'BANDUNG', '\'30030400301000206', 1),
(38, 'NIKI MARTIAN SUHAMSYAH', 95170531, 'BANDUNG', '\'30030400301000207', 1),
(39, 'FAUZI FATUROHMAN', 97157906, 'BANDUNG', '\'30030400301000208', 1),
(40, 'FIKRI SAEFULLOH', 18990136, 'BANDUNG', '\'30030400301000209', 1),
(41, 'FALAQ ALAQ MULUK', 18930320, 'BANDUNG', '\'30030400301000300', 1),
(42, '-', 0, 'BANDUNG', '\'30030400301000301', 1),
(43, 'NURKHOLIS SULFIQIH', 96157909, 'BANDUNG', '\'30030400301000302', 1),
(44, 'HAMDANI KURNIAWAN', 92150200, 'BANDUNG', '\'30030400301000303', 1),
(45, 'ALBERT FERDINAND MONDONG', 99180232, 'BANDUNG BARAT', '\'30030400301000304', 3),
(46, 'HENDRA YANUAR', 94150200, 'BANDUNG', '\'30030400301000305', 1),
(47, 'MUHAMMAD RAFI EL HAKIM', 97150324, 'BANDUNG', '\'30030400301000306', 1),
(48, 'TRAVERTIN SAPUTRA', 18930382, 'BANDUNG', '\'30030400301000307', 1),
(49, 'ARIE ARDIANA HIDAYATULLOH', 95150227, 'BANDUNG', '\'30030400301000308', 1),
(50, 'FAISAL ANUGRAH', 18960619, 'BANDUNG', '\'30030400301000309', 1),
(51, 'JACK PRATAMA', 18940598, 'BANDUNG BARAT', '\'30030400301000310', 3),
(52, 'DANI IBRAHIM', 92150201, 'BANDUNG', '\'30030400301000311', 1),
(53, 'FIKRY NOOR RAMADHAN', 92151510, 'BANDUNG', '\'30030400301000400', 1),
(54, 'RIZKI KOIRUNNISA', 95155272, 'BANDUNG', '\'30030400301000401', 1),
(55, 'RAMDHANI SANUSI', 18960620, 'BANDUNG BARAT', '\'30030400301000402', 3),
(56, 'DINI SUCI ARIANI', 18960622, 'BANDUNG', '\'30030400301000403', 1),
(57, 'LUTHFI RAMADHAN', 92150203, 'BANDUNG BARAT', '\'30030400301000404', 3),
(58, 'OTEP BASKARA', 91150137, 'BANDUNG', '\'30030400301000405', 1),
(59, 'DICKY MOCHAMAD RIZAL', 97150323, 'BANDUNG BARAT', '\'30030400301000406', 3),
(60, 'TOMI SAPUTRA', 18950731, 'BANDUNG', '\'30030400301000407', 1),
(61, 'YULIAN ARYANTI', 17900200, 'BANDUNG', '\'30030400301000408', 1),
(62, 'BETA DWI ANGGARA', 17910226, 'BANDUNG', '\'30030400301000409', 1),
(63, 'RIZAL FADLILLAH IKHSAN', 93151528, 'BANDUNG BARAT', '\'30030400301000410', 3),
(64, 'JUNIAR TRI SYAFITRI', 17870128, 'BANDUNG BARAT', '\'30030400301000411', 3),
(65, 'ALAN SARENA', 18910202, 'BANDUNG', '\'30030400302000100', 1),
(66, 'ANITA PURNAMASARI', 95155068, 'BANDUNG', '\'30030400302000101', 1),
(67, 'HERMANSYAH', 18920270, 'BANDUNG', '\'30030400302000102', 1),
(68, 'RAMBARA HERDINA PUTRA', 97157911, 'BANDUNG', '\'30030400302000103', 1),
(69, 'ROHMAT AHDIYAT', 93150184, 'BANDUNG', '\'30030400302000104', 1),
(70, 'REZKI SYAFRIANTO', 925622, 'BANDUNG', '\'30030400302000200', 1),
(71, 'FARIDHA RAHMAWATI', 91140509, 'BANDUNG', '\'30030400302000201', 1),
(72, 'WILLY RAMADHAN SUGANDI', 18910138, 'BANDUNG', '\'30030400302000202', 1),
(73, 'DEDE ROCHMAT JAYANUDIN', 95151799, 'BANDUNG', '\'30030400302000203', 1),
(74, 'MOCH. TAUFIK AKBAR', 91152372, 'BANDUNG', '\'30030400302000204', 1),
(75, 'AZMY FARHAN', 955154, 'BANDUNG', '\'30030400302000300', 1),
(76, 'ARIEF SETIAWAN', 18920271, 'BANDUNG', '\'30030400302000301', 1),
(77, 'ARIEF HERMAWAN S', 18960521, 'BANDUNG', '\'30030400302000302', 1),
(78, 'ALEX KARMANA', 89151795, 'BANDUNG', '\'30030400302000303', 1),
(79, 'RENDI MUCHAMAD RIZKA', 93151803, 'BANDUNG', '\'30030400302000304', 1),
(80, 'RICKY ARDIANSYAH', 92150202, 'BANDUNG', '\'30030400302000305', 1),
(81, 'EGA LAILATUL QODAR', 89160071, 'BANDUNG', '\'30030400302000306', 1),
(82, 'ANDRI HIDAYATTULOH', 96160438, 'BANDUNG', '\'30030400302000307', 1),
(83, 'ASEP SOLIHIN', 73151796, 'BANDUNG', '\'30030400302000308', 1),
(84, 'BAGUS PERMANA', 92151797, 'BANDUNG', '\'30030400302000309', 1),
(85, 'SIGIT PRIYO PRAYOGO', 17900505, 'BANDUNG', '\'30030400302000400', 1),
(86, 'AHMAD NAASHIRUDDIN', 96157383, 'BANDUNG', '\'30030400302000401', 1),
(87, 'SAEFUL ANWAR', 91151806, 'BANDUNG', '\'30030400302000402', 1),
(88, 'MOCH.RIZAL PRANATA', 95152333, 'BANDUNG', '\'30030400302000403', 1),
(89, 'EGI SEPTIAN', 96157393, 'BANDUNG', '\'30030400302000404', 1),
(90, 'WAHYU KURNIAWAN', 93157430, 'BANDUNG', '\'30030400302000405', 1),
(91, 'RYAN FADLY SUGANDA', 91151805, 'BANDUNG', '\'30030400302000406', 1),
(92, 'HADI PURNAMA', 90152371, 'BANDUNG', '\'30030400302000407', 1),
(93, 'DANE KURNIA PUTRA', 18840033, 'BANDUNG', '\'30030400302000500', 1),
(94, 'ANDRI WIRATMANA', 96159141, 'BANDUNG', '\'30030400302000501', 1),
(95, 'LUKMAN HIDAYATULLOH', 18900154, 'BANDUNG', '\'30030400302000600', 1),
(96, 'HENOCK JUNIOR', 96156187, 'BANDUNG', '\'30030400302000601', 1),
(97, 'GILAR ANDALAS', 93151800, 'BANDUNG', '\'30030400302000602', 1),
(98, 'RIANDANI PUTRA', 95150220, 'BANDUNG', '\'30030400302000603', 1),
(99, 'TRI MAHLIL MUSHTOFA', 94156089, 'BANDUNG', '\'30030400302000604', 1),
(100, 'ROBY ISMAIL ADI PUTRA', 97157424, 'BANDUNG', '\'30030400302000605', 1),
(101, '-', 0, 'CIREBON', '\'30030400400000000', 4),
(102, 'ARDIYANSYAH WAHID GUMELAR', 18960617, 'TASIKMALAYA', '\'30030400401000100', 2),
(103, 'ERIS RUSWANDI', 90154850, 'TASIKMALAYA', '\'30030400401000101', 2),
(104, 'MUHAMMAD YUSUF USTAZJI', 18990495, 'TASIKMALAYA', '\'30030400401000102', 2),
(105, 'SELAMET FIRDAUS', 94157903, 'TASIKMALAYA', '\'30030400401000103', 2),
(106, 'RISKI NURALAM', 96157905, 'TASIKMALAYA', '\'30030400401000104', 2),
(107, 'ADI RAHMAT', 93140333, 'TASIKMALAYA', '\'30030400401000105', 2),
(108, 'UJANG HOER', 95150333, 'TASIKMALAYA', '\'30030400401000106', 2),
(109, 'ANDI RIANA', 97150465, 'TASIKMALAYA', '\'30030400401000107', 2),
(110, 'YUDHA WAHYU FAJAR MUTTAQIN', 90153851, 'TASIKMALAYA', '\'30030400401000108', 2),
(111, 'NUR HOLIQ AZIZ', 92151098, 'TASIKMALAYA', '\'30030400401000200', 2),
(112, 'DEFRYANSYAH AMBARI', 18960598, 'TASIKMALAYA', '\'30030400401000201', 2),
(113, 'RISWANDI SAPUTRA', 96150427, 'TASIKMALAYA', '\'30030400401000202', 2),
(114, 'EDWIN HUSNI MUBAROK', 97150468, 'TASIKMALAYA', '\'30030400401000203', 2),
(115, 'YOGA LUKMAN PRAYOGA', 95150331, 'TASIKMALAYA', '\'30030400401000204', 2),
(116, 'DWI WAHYU SEPTIANA', 95150332, 'TASIKMALAYA', '\'30030400401000205', 2),
(117, 'AJI HARDIANSYAH', 97150467, 'TASIKMALAYA', '\'30030400401000206', 2),
(118, 'ERWIN MEI ALVIAN', 93150295, 'TASIKMALAYA', '\'30030400401000207', 2),
(119, 'YUNIAR BAGAS YUDHA RINDA PRADANA', 97157904, 'TASIKMALAYA', '\'30030400401000208', 2),
(120, 'AGUNG ANDRIANTO', 90151496, 'TASIKMALAYA', '\'30030400401000300', 2),
(121, 'ARIP RAHMATULLOH', 17890183, 'TASIKMALAYA', '\'30030400401000301', 2),
(122, 'HENDRA ADRIANTO SUKMANA', 92151516, 'TASIKMALAYA', '\'30030400401000302', 2),
(123, 'GINGIN WINAJAR', 92150313, 'TASIKMALAYA', '\'30030400401000303', 2),
(124, 'RIYAN RIZKY AMBORO', 916008, 'CIREBON', '\'30030400402000100', 4),
(125, 'ANTON HANANTO', 77153870, 'CIREBON', '\'30030400402000101', 4),
(126, 'M JAMAL', 94150203, 'CIREBON', '\'30030400402000102', 4),
(127, 'M ROKHMAT', 90157914, 'CIREBON', '\'30030400402000103', 4),
(128, 'JANUDIN', 92157912, 'CIREBON', '\'30030400402000104', 4),
(129, 'INDRA', 92157913, 'CIREBON', '\'30030400402000105', 4),
(130, 'WILDAN KOSASIH', 95157915, 'CIREBON', '\'30030400402000106', 4),
(131, 'FIKRI KRESNANDI FAHRULROZI', 93150302, 'CIREBON', '\'30030400402000107', 4),
(132, 'DWI ANGGI RIYANTO', 93155564, 'CIREBON', '\'30030400402000200', 4),
(133, 'MUKTOYIB', 78151677, 'CIREBON', '\'30030400402000201', 4),
(134, 'JAKHIYUL IRFAN', 94155340, 'CIREBON', '\'30030400402000202', 4),
(135, 'KHOFID', 90155404, 'CIREBON', '\'30030400402000203', 4),
(136, 'RISMANTO', 83155447, 'CIREBON', '\'30030400402000204', 4),
(137, 'NUR MUHAMAD RIDWAN', 96155501, 'CIREBON', '\'30030400402000205', 4),
(138, 'ANDRI SUSANTO', 90150179, 'CIREBON', '\'30030400402000206', 4),
(139, 'CASNANTO', 92150315, 'CIREBON', '\'30030400402000207', 4),
(140, 'SUSBANDIAH', 76153099, 'CIREBON', '\'30030400402000300', 4),
(141, 'ANISTI RIANDANNY', 93170474, 'CIREBON', '\'30030400402000301', 4),
(142, 'MUHAMMAD NASUHA', 97150052, 'CIREBON', '\'30030400402000302', 4),
(143, 'SAEFUDIN SETIADI', 91155448, 'CIREBON', '\'30030400402000303', 4),
(144, 'ALWAN AZI SUPYAN ARIFIN', 95153101, 'CIREBON', '\'30030400402000304', 4),
(145, 'TAOFIQ YUSUP', 18810008, 'CIREBON', '\'30030400402000305', 4),
(146, 'NICO HAMMADY FAJRI', 17910232, 'CIREBON', '\'30030400402000400', 4),
(147, 'DADANG KUSNANDAR', 87153113, 'CIREBON', '\'30030400402000401', 4),
(148, 'CECEP MASDI', 92151678, 'CIREBON', '\'30030400402000402', 4),
(149, 'RASTO RANO', 89153426, 'CIREBON', '\'30030400402000403', 4),
(150, 'AZHARY AGUNG KURNIA', 925598, 'TASIKMALAYA', '\'30030400403000000', 2),
(151, 'EDI PIRMANDI', 72155598, 'TASIKMALAYA', '\'30030400403000100', 2),
(152, 'PUNGKY PURNOMO ALISUFI', 76150002, 'TASIKMALAYA', '\'30030400403000101', 2),
(153, 'IMAN ERI PRASETYO', 955066, 'TASIKMALAYA', '\'30030400403000200', 2),
(154, 'RAMDAN JAYADI', 93151555, 'TASIKMALAYA', '\'30030400403000201', 2),
(155, 'ERDO EVRIZO TAMA', 925607, 'CIREBON', '\'30030400404000100', 4),
(156, 'M. BAYU NURJAMAN B', 90160060, 'CIREBON', '\'30030400404000101', 4),
(157, 'AZMI RIFAI', 96153125, 'CIREBON', '\'30030400404000102', 4),
(158, 'WAWAN SETIAWAN', 80158497, 'CIREBON', '\'30030400404000103', 4),
(159, 'NURYAMAN', 85158496, 'CIREBON', '\'30030400404000104', 4),
(160, 'ADHI KUSNUL MAULANA', 18930189, 'CIREBON', '\'30030400404000105', 4),
(161, 'ABDURAHMAN', 795778, 'CIREBON', '\'30030400404000200', 4),
(162, 'MOHAMAD WAWAN IKHWANTO', 17750328, 'CIREBON', '\'30030400404000201', 4),
(163, 'AZHAR RAFSANJANI', 92151681, 'CIREBON', '\'30030400404000202', 4),
(164, 'AJI SUMARSONO', 96160010, 'CIREBON', '\'30030400404000203', 4),
(165, 'R. BUDIMAN', 641814, 'KARAWANG', '\'30030400500000000', 5),
(166, 'UTAMA GYRI WIJAYA', 18910091, 'KARAWANG', '\'30030400501000000', 5),
(167, 'EKO PUTRO PRABOWO', 17890165, 'KARAWANG', '\'30030400501000100', 5),
(168, 'EDWIN PRAMA YUDA', 89150003, 'KARAWANG', '\'30030400501000101', 5),
(169, 'IIM IBRAHIM', 90150022, 'KARAWANG', '\'30030400501000102', 5),
(170, 'GILANG RAMADHAN', 97150327, 'KARAWANG', '\'30030400501000103', 5),
(171, 'AJAT SUDRAJAT', 92150204, 'KARAWANG', '\'30030400501000104', 5),
(172, 'AGUSPURWANTO', 90150117, 'KARAWANG', '\'30030400501000105', 5),
(173, 'AHMAD FAUZI', 96150297, 'KARAWANG', '\'30030400501000106', 5),
(174, 'JUPRI', 91150138, 'KARAWANG', '\'30030400501000107', 5),
(175, 'RAFIQ KHAIRY', 98160171, 'KARAWANG', '\'30030400501000108', 5),
(176, 'HILMANUDIN AJI', 95150001, 'KARAWANG', '\'30030400501000109', 5),
(177, 'DAHLIA', 93153895, 'KARAWANG', '\'30030400501000200', 5),
(178, 'RINI ANDRIANI', 92170059, 'KARAWANG', '\'30030400501000201', 5),
(179, 'FIRMAN AHMAD N.F', 92151511, 'KARAWANG', '\'30030400501000202', 5),
(180, 'ARIO BASKORO YUDA', 93153566, 'KARAWANG', '\'30030400501000203', 5),
(181, 'RIFAI', 93160323, 'KARAWANG', '\'30030400501000204', 5),
(182, 'MUHAMAD TAHLIL RIDLA GUMILANG', 815820, 'SUKABUMI', '\'30030400502000000', 6),
(183, 'EGY BAMBANG SUGILAR', 74151914, 'SUKABUMI', '\'30030400502000100', 6),
(184, 'MUHAMMAD YOGA', 97150079, 'SUKABUMI', '\'30030400502000101', 6),
(185, 'DENI ANDRIA', 94150186, 'SUKABUMI', '\'30030400502000102', 6),
(186, 'FERDY WIDIANSYAH', 90150108, 'SUKABUMI', '\'30030400502000103', 6),
(187, 'R MUHAMMAD BAMBANG GUMILAR', 96157916, 'SUKABUMI', '\'30030400502000104', 6),
(188, 'AGUNG PRATAMA', 93150041, 'SUKABUMI', '\'30030400502000105', 6),
(189, 'M AGUS AKHIRULLAH', 96150079, 'SUKABUMI', '\'30030400502000106', 6),
(190, 'RIAN YUSUF', 91150037, 'SUKABUMI', '\'30030400502000107', 6),
(191, 'ILHAM ANDRIANSYAH', 90150030, 'SUKABUMI', '\'30030400502000108', 6),
(192, 'RINNO HARIYADI', 78150004, 'SUKABUMI', '\'30030400502000109', 6),
(193, 'RIKI JULIANSAH SAPUTRA', 92150188, 'SUKABUMI', '\'30030400502000110', 6),
(194, 'RICHAR ERMAN', 83150007, 'SUKABUMI', '\'30030400502000111', 6),
(195, 'MOCH TAOFIK RAYNALDI', 96150080, 'SUKABUMI', '\'30030400502000112', 6),
(196, 'CECEP YUSUF', 81150002, 'SUKABUMI', '\'30030400502000113', 6),
(197, 'PANJI LARAS', 94150187, 'SUKABUMI', '\'30030400502000114', 6),
(198, 'REKSA WARDANI', 94150188, 'SUKABUMI', '\'30030400502000115', 6),
(199, 'RANDI RIZAL', 86150006, 'SUKABUMI', '\'30030400502000116', 6),
(200, 'YANYAN S SAPUTRA', 82154847, 'SUKABUMI', '\'30030400502000117', 6),
(201, 'HANDI SUHENDAR', 80154846, 'SUKABUMI', '\'30030400502000118', 6),
(202, 'DEDE IRMAN', 89153897, 'SUKABUMI', '\'30030400502000200', 6),
(203, 'WILLIAWANTY PUTRI GUNAWAN', 93151536, 'SUKABUMI', '\'30030400502000201', 6),
(204, 'ACU WAHYUDIN', 18790008, 'SUKABUMI', '\'30030400502000202', 6),
(205, 'YOGA PUTRA PAMUNGKAS', 91160213, 'SUKABUMI', '\'30030400502000203', 6),
(206, 'SANDI IRAWAN', 92160274, 'SUKABUMI', '\'30030400502000204', 6),
(207, 'SUKRIS', 88157426, 'KARAWANG', '\'30030400503000000', 5),
(208, '-', 0, 'KARAWANG', '\'30030400503000100', 5),
(209, 'AULIA FARADILAH SARI', 92170044, 'KARAWANG', '\'30030400503000101', 5),
(210, 'YUZARD BETTAN', 89150002, 'KARAWANG', '\'30030400503000102', 5),
(211, 'GUGUN GUNAWAN', 17890480, 'KARAWANG', '\'30030400503000103', 5),
(212, 'HENDRA PARDOSI', 865885, 'KARAWANG', '\'30030400503000200', 5),
(213, 'BOY PAREVO', 17940281, 'KARAWANG', '\'30030400503000201', 5),
(214, 'LAU ADITYA', 93153065, 'KARAWANG', '\'30030400503000202', 5),
(215, 'AHMAD HARRY WIBOWO', 925614, 'SUKABUMI', '\'30030400504000000', 6),
(216, 'PENGADILAN LUBIS', 18670005, 'SUKABUMI', '\'30030400504000100', 6),
(217, 'DITA SYAFITRI NANDASARI SUPRIADI', 93158188, 'SUKABUMI', '\'30030400504000101', 6),
(218, 'GANIS RICKZA OCTARI', 91170079, 'SUKABUMI', '\'30030400504000102', 6),
(219, 'KURNIA', 69140792, 'SUKABUMI', '\'30030400504000103', 6),
(220, 'KRISMANSYAH', 90150327, 'SUKABUMI', '\'30030400504000104', 6),
(221, 'ROBI ABDURAHMAN', 94150330, 'SUKABUMI', '\'30030400504000105', 6),
(222, 'MUHAMAD ABDUL AZIZ FIRDAUS', 95170111, 'SUKABUMI', '\'30030400504000106', 6),
(223, 'SEPTO SUHARYANTO', 93159502, 'SUKABUMI', '\'30030400504000107', 6),
(224, 'MAMAN UMARA', 78156088, 'SUKABUMI', '\'30030400504000108', 6);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `PROG_ID` int(11) NOT NULL,
  `PROG_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`PROG_ID`, `PROG_NAME`) VALUES
(1, 'STTF');

-- --------------------------------------------------------

--
-- Table structure for table `sp_mitra`
--

CREATE TABLE `sp_mitra` (
  `SPMT_ID` int(11) NOT NULL,
  `SPMT_NO` int(11) NOT NULL,
  `SPMT_ID_PR` int(11) NOT NULL,
  `SPMT_STATUS` varchar(50) NOT NULL,
  `SPMT_MATERIAL` int(11) NOT NULL,
  `SPMT_JASA` int(11) NOT NULL,
  `SPMT_TOTAL` int(11) NOT NULL,
  `SPMT_ODP` int(11) NOT NULL,
  `SPMT_NO_APM` int(11) NOT NULL,
  `SPMT_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SPMT_WODE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_telkom`
--

CREATE TABLE `sp_telkom` (
  `SPTL_ID` int(11) NOT NULL,
  `SPTL_NO` varchar(100) NOT NULL,
  `SPTL_IDP` varchar(100) NOT NULL,
  `SPTL_NO_PO` int(11) NOT NULL,
  `SPTL_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SPTL_SURV_ID` int(11) NOT NULL,
  `SPTL_WODE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_telkom`
--

INSERT INTO `sp_telkom` (`SPTL_ID`, `SPTL_NO`, `SPTL_IDP`, `SPTL_NO_PO`, `SPTL_TIMESTAMP`, `SPTL_SURV_ID`, `SPTL_WODE_ID`) VALUES
(1, '123', '12', 1234, '2018-07-31 08:06:25', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `STAT_ID` int(11) NOT NULL,
  `STAT_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`STAT_ID`, `STAT_NAME`) VALUES
(1, 'WORK ORDER'),
(2, 'SURVEY'),
(3, 'INSTALASI'),
(4, 'BAST');

-- --------------------------------------------------------

--
-- Table structure for table `status_instalasi`
--

CREATE TABLE `status_instalasi` (
  `STIN_ID` int(11) NOT NULL,
  `STIN_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_instalasi`
--

INSERT INTO `status_instalasi` (`STIN_ID`, `STIN_NAME`) VALUES
(1, 'CEKLOK'),
(2, 'PERSIAPAN'),
(3, 'PERIJINAN'),
(4, 'MATDEV'),
(5, 'SELESAI'),
(6, 'TC'),
(7, 'UT');

-- --------------------------------------------------------

--
-- Table structure for table `sub_witel`
--

CREATE TABLE `sub_witel` (
  `SWIT_ID` int(11) NOT NULL,
  `SWIT_NAME` varchar(100) NOT NULL,
  `SWIT_WTEL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_witel`
--

INSERT INTO `sub_witel` (`SWIT_ID`, `SWIT_NAME`, `SWIT_WTEL_ID`) VALUES
(1, 'BDK', 1),
(2, 'CCD', 1),
(3, 'CJA', 1),
(4, 'DGO', 1),
(5, 'GGK', 1),
(6, 'HGM', 1),
(7, 'LBG', 1),
(8, 'TAS', 1),
(9, 'TLE', 1),
(10, 'TRG', 1),
(11, 'UBR', 1),
(12, 'SMD', 1),
(13, 'BJA', 3),
(14, 'BTJ', 3),
(15, 'CCL', 3),
(16, 'CKW', 3),
(17, 'CLL', 3),
(18, 'CPT', 3),
(19, 'CSA', 3),
(20, 'CWD', 3),
(21, 'GNH', 3),
(22, 'LEM', 3),
(23, 'MJY', 3),
(24, 'NJG', 3),
(25, 'PCH', 3),
(26, 'PNL', 3),
(27, 'RCK', 3),
(28, 'RJW', 3),
(29, 'SOR', 3),
(30, 'CMI', 3),
(31, 'CBE', 7),
(32, 'CJG', 7),
(33, 'CJR', 7),
(34, 'CKK', 7),
(35, 'SDL', 7),
(36, 'SGA', 7),
(37, 'SKM', 7),
(38, 'TGE', 7),
(39, 'BGL', 7),
(40, 'CBD', 7),
(41, 'CCR', 7),
(42, 'CKB', 7),
(43, 'CMO', 7),
(44, 'JPK', 7),
(45, 'KLU', 7),
(46, 'NLD', 7),
(47, 'PLR', 7),
(48, 'SGN', 7),
(49, 'SKB', 7),
(50, 'BNJ', 8),
(51, 'BJS', 8),
(52, 'CMS', 8),
(53, 'KAW', 8),
(54, 'PAX', 8),
(55, 'CBT', 8),
(56, 'CKJ', 8),
(57, 'CSP', 8),
(58, 'GRU', 8),
(59, 'KDN', 8),
(60, 'LAG', 8),
(61, 'MLB', 8),
(62, 'PMP', 8),
(63, 'WNR', 8),
(64, 'CBL', 8),
(65, 'CIW', 8),
(66, 'KNU', 8),
(67, 'MNJ', 8),
(68, 'RJP', 8),
(69, 'SPA', 8),
(70, 'TSM', 8),
(71, 'AWN', 9),
(72, 'CBN', 9),
(73, 'CKC', 9),
(74, 'CKY', 9),
(75, 'JBN', 9),
(76, 'LOS', 9),
(77, 'PAB', 9),
(78, 'PRD', 9),
(79, 'SDU', 9),
(80, 'BON', 9),
(81, 'HAR', 9),
(82, 'IMY', 9),
(83, 'JTB', 9),
(84, 'KRM', 9),
(85, 'LSR', 9),
(86, 'PTR', 9),
(87, 'CLI', 9),
(88, 'KNG', 9),
(89, 'CKI', 9),
(90, 'JTW', 9),
(91, 'KAD', 9),
(92, 'MJL', 9),
(93, 'RGA', 9),
(94, 'CKP', 10),
(95, 'CLM', 10),
(96, 'CPL', 10),
(97, 'KLI', 10),
(98, 'KRL', 10),
(99, 'KRW', 10),
(100, 'RDK', 10),
(101, 'TLJ', 10),
(102, 'WDS', 10),
(103, 'CBU', 10),
(104, 'JTS', 10),
(105, 'PLD', 10),
(106, 'PWK', 10),
(107, 'CAS', 10),
(108, 'JCG', 10),
(109, 'KIA', 10),
(110, 'PBS', 10),
(111, 'PGD', 10),
(112, 'PMN', 10),
(113, 'SUB', 10),
(114, 'BAY', 11),
(115, 'BJG', 11),
(116, 'BPB', 11),
(117, 'JBE', 11),
(118, 'LBU', 11),
(119, 'LWD', 11),
(120, 'MEN', 11),
(121, 'MLP', 11),
(122, 'PDG', 11),
(123, 'RKS', 11),
(124, 'SKE', 11),
(125, 'PDX', 3),
(126, 'PDL-1', 3),
(127, 'PDL-2', 3),
(128, 'KWA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `SURV_ID` int(11) NOT NULL,
  `SURV_MATERIAL` int(11) NOT NULL,
  `SURV_JASA` int(11) NOT NULL,
  `SURV_TOTAL` int(11) NOT NULL,
  `SURV_ODP` int(11) NOT NULL,
  `SURV_TANGGAL` date NOT NULL,
  `SURV_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SURV_WODE_ID` int(11) NOT NULL,
  `SURV_PEGA_ID` int(11) NOT NULL,
  `SURV_WTEL_ID` int(11) NOT NULL,
  `SURV_SWIT_ID` int(11) NOT NULL,
  `SURV_PROG_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(50) NOT NULL,
  `USER_PICTURE` text NOT NULL,
  `USER_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `USER_LEVE_ID` int(11) NOT NULL,
  `USER_PEGA_ID` int(11) NOT NULL,
  `USER_WTEL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_NAME`, `USER_PASSWORD`, `USER_PICTURE`, `USER_TIMESTAMP`, `USER_LEVE_ID`, `USER_PEGA_ID`, `USER_WTEL_ID`) VALUES
(1, 'SUDO', '28a4437b86f15b3e4204252dd75327fe', 'asset1/img/2018_07_30_11_10_01_1497310825125.JPEG', '2018-07-30 09:10:01', 1, 1, 1),
(2, 'WODE', '044ed28669d0a0ad60078faca228e538', '', '2018-07-30 08:54:34', 2, 1, 1),
(3, 'SURV', '19578145d1c4cb4fdd05966fa0fc0b0f', '', '2018-07-30 08:54:34', 3, 1, 1),
(4, 'INST', 'f3f3ab32d17f94c82cc112c80d59845b', '', '2018-07-30 08:54:34', 4, 1, 1),
(5, 'BAST', '7e885f54018831ce93707032f6b09e88', '', '2018-07-30 08:54:34', 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `witel`
--

CREATE TABLE `witel` (
  `WTEL_ID` int(11) NOT NULL,
  `WTEL_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `witel`
--

INSERT INTO `witel` (`WTEL_ID`, `WTEL_NAME`) VALUES
(1, 'BANDUNG'),
(2, 'TASIKMALAYA'),
(3, 'BANDUNG BARAT'),
(4, 'CIREBON'),
(5, 'KARAWANG'),
(6, 'SUKABUMI'),
(7, 'JABAR SELATAN'),
(8, 'JABAR TIMSEL'),
(9, 'JABAR TIMUR'),
(10, 'JABAR UTARA'),
(11, 'NYASAR');

-- --------------------------------------------------------

--
-- Table structure for table `work_order`
--

CREATE TABLE `work_order` (
  `WODE_ID` int(11) NOT NULL,
  `WODE_ID_TA` char(11) NOT NULL,
  `WODE_NAMA_LOKASI` text NOT NULL,
  `WODE_KOORDINAT` text NOT NULL,
  `WODE_ALAMAT` text NOT NULL,
  `WODE_TANGGAL` date NOT NULL,
  `WODE_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `WODE_WTEL_ID` int(11) NOT NULL,
  `WODE_SWIT_ID` int(11) NOT NULL,
  `WODE_PROG_ID` int(11) NOT NULL,
  `WODE_STAT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bast`
--
ALTER TABLE `bast`
  ADD PRIMARY KEY (`BAST_ID`);

--
-- Indexes for table `instalasi`
--
ALTER TABLE `instalasi`
  ADD PRIMARY KEY (`INST_ID`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`LEVE_ID`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`MTRA_ID`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`PEGA_ID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`PROG_ID`);

--
-- Indexes for table `sp_mitra`
--
ALTER TABLE `sp_mitra`
  ADD PRIMARY KEY (`SPMT_ID`);

--
-- Indexes for table `sp_telkom`
--
ALTER TABLE `sp_telkom`
  ADD PRIMARY KEY (`SPTL_ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`STAT_ID`);

--
-- Indexes for table `status_instalasi`
--
ALTER TABLE `status_instalasi`
  ADD PRIMARY KEY (`STIN_ID`);

--
-- Indexes for table `sub_witel`
--
ALTER TABLE `sub_witel`
  ADD PRIMARY KEY (`SWIT_ID`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`SURV_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `witel`
--
ALTER TABLE `witel`
  ADD PRIMARY KEY (`WTEL_ID`);

--
-- Indexes for table `work_order`
--
ALTER TABLE `work_order`
  ADD PRIMARY KEY (`WODE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bast`
--
ALTER TABLE `bast`
  MODIFY `BAST_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instalasi`
--
ALTER TABLE `instalasi`
  MODIFY `INST_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `LEVE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `MTRA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `PEGA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `PROG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp_mitra`
--
ALTER TABLE `sp_mitra`
  MODIFY `SPMT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_telkom`
--
ALTER TABLE `sp_telkom`
  MODIFY `SPTL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `STAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_instalasi`
--
ALTER TABLE `status_instalasi`
  MODIFY `STIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_witel`
--
ALTER TABLE `sub_witel`
  MODIFY `SWIT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `SURV_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `witel`
--
ALTER TABLE `witel`
  MODIFY `WTEL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `work_order`
--
ALTER TABLE `work_order`
  MODIFY `WODE_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;