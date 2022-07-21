-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 04:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrito_usuarios`
--

CREATE TABLE `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `dni`, `telefono`, `direccion`) VALUES
(1, 'cristian', 44464951, '3704823807', 'giuygugooho');

-- --------------------------------------------------------

--
-- Table structure for table `datos_deudor`
--

CREATE TABLE `datos_deudor` (
  `id_datos_deudor` int(100) NOT NULL,
  `dni_deudor` int(8) NOT NULL,
  `direccion_deudor` varchar(100) NOT NULL,
  `telefono_deudor` varchar(10) NOT NULL,
  `id_deuda_cliente` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_deudor`
--

INSERT INTO `datos_deudor` (`id_datos_deudor`, `dni_deudor`, `direccion_deudor`, `telefono_deudor`, `id_deuda_cliente`) VALUES
(1, 42323121, 'BÂ° Eva PerÃ³n', '3704562353', 0),
(2, 42323121, 'BÂ° Eva PerÃ³n', '3704562353', 2),
(3, 42323121, 'BÂ° Eva PerÃ³n', '3704562353', 3);

-- --------------------------------------------------------

--
-- Table structure for table `datos_empleados`
--

CREATE TABLE `datos_empleados` (
  `id_datos` int(100) NOT NULL,
  `telefono_empleado` varchar(100) NOT NULL,
  `direccion_empleado` varchar(100) NOT NULL,
  `dni_empleado` int(100) NOT NULL,
  `fecha_alta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datos_envio`
--

CREATE TABLE `datos_envio` (
  `id_datos_envio` int(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `id_datos_personales_envio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_envio`
--

INSERT INTO `datos_envio` (`id_datos_envio`, `calle`, `numero`, `departamento`, `pais`, `provincia`, `ciudad`, `codigo_postal`, `id_datos_personales_envio`) VALUES
(1, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 1),
(2, '', '', '', '', '', '', '', 0),
(3, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 2),
(4, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 3),
(5, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 4),
(6, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 5),
(7, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 6),
(8, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 7),
(9, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 8),
(10, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 9),
(11, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 10),
(12, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 11),
(13, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 12),
(14, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 13),
(15, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 14),
(16, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 15),
(17, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 16),
(18, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 17),
(19, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 18),
(20, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 19),
(21, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 20),
(22, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 21),
(23, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 22),
(24, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 23),
(25, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 24),
(26, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 25),
(27, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 26),
(28, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 27),
(29, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 28),
(30, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 29),
(31, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 30),
(32, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 31),
(33, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 32),
(34, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 33),
(35, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 34),
(36, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 35),
(37, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 36),
(38, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 37),
(39, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 38),
(40, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 39),
(41, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 40),
(42, 'Guastalla', '45', '5', 'argentina', 'Formosa', 'Formosa', '3600', 41),
(43, 'Guastalla', '45', '5', 'Argentina', 'Formosa', 'Formosa', '3600', 42),
(44, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'CÃ³rdoba', '3600', 43),
(45, 'Guastalla', '45', '5', 'Argentina', 'Mendoza', 'Formosa', '3600', 44),
(46, 'Guastalla', '45', '5', 'Argentina', 'Catamarca', 'Formosa', '3600', 45),
(47, 'Guastalla', '45', '5', 'Argentina', 'Chubut', 'Formosa', '3600', 46),
(48, 'Guastalla', '45', '5', 'Argentina', 'Chubut', 'Formosa', '3600', 47),
(49, 'Guastalla', '45', '5', 'Argentina', 'Chubut', 'Formosa', '3600', 48),
(50, 'Guastalla', '45', '5', 'Argentina', 'Chubut', 'Formosa', '3600', 49),
(51, 'Guastalla', '45', '5', 'Argentina', 'San Luis', 'Formosa', '3600', 50),
(52, 'Guastalla', '45', '5', 'Argentina', 'San Juan', 'Formosa', '3600', 51),
(53, 'Guastalla', '45', '5', 'Argentina', 'Mendoza', 'Formosa', '3600', 52),
(54, 'Guastalla', '45', '5', 'Argentina', 'Mendoza', 'Formosa', '3600', 53),
(55, 'Guastalla', '45', '5', 'Argentina', 'Mendoza', 'Formosa', '3600', 54),
(56, 'Guastalla', '45', '5', 'Argentina', 'Mendoza', 'Formosa', '3600', 55),
(57, 'Guastalla', '45', '5', 'Argentina', 'Mendoza', 'Formosa', '3600', 56),
(58, 'Guastalla', '45', '5', 'Argentina', 'Mendoza', 'Formosa', '3600', 57),
(59, 'Guastalla', '45', '5', 'Argentina', 'Salta', 'Formosa', '3600', 58),
(60, 'Guastalla', '45', '5', 'Argentina', 'San Juan', 'Formosa', '3600', 59),
(61, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 60),
(62, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 61),
(63, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 62),
(64, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires Capital', 'Formosa', '3600', 63),
(65, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 64),
(66, 'Guastalla', '45', '5', 'Argentina', 'Corrientes', 'Formosa', '3600', 65),
(67, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 66),
(68, 'Guastalla', '45', '5', 'Argentina', 'Formosa', 'Formosa', '3600', 67),
(69, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 68),
(70, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 69),
(71, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 70),
(72, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 71),
(73, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 72),
(74, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 73),
(75, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 74),
(76, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 75),
(77, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 76),
(78, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 77),
(79, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 78),
(80, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 79),
(81, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 80),
(82, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 81),
(83, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 82),
(84, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 83),
(85, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 84),
(86, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 85),
(87, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 86),
(88, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 87),
(89, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 88),
(90, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 89),
(91, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 90),
(92, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 91),
(93, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 92),
(94, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 93),
(95, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 94),
(96, '', '', '', '', '', '', '', 0),
(97, '', '', '', '', '', '', '', 0),
(98, '', '', '', '', '', '', '', 0),
(99, '', '', '', '', '', '', '', 0),
(100, '', '', '', '', '', '', '', 0),
(101, '', '', '', '', '', '', '', 0),
(102, '', '', '', '', '', '', '', 0),
(103, '', '', '', '', '', '', '', 0),
(104, '', '', '', '', '', '', '', 0),
(105, '', '', '', '', '', '', '', 0),
(106, '', '', '', '', '', '', '', 0),
(107, '', '', '', '', '', '', '', 0),
(108, '', '', '', '', '', '', '', 0),
(109, '', '', '', '', '', '', '', 0),
(110, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 95),
(111, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 96),
(112, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 97),
(113, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 98),
(114, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 99),
(115, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 100),
(116, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 101),
(117, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 102),
(118, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 103),
(119, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 104),
(120, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 105),
(121, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 106),
(122, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 107),
(123, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 108),
(124, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 109),
(125, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 110),
(126, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 111),
(127, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 112),
(128, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 113),
(129, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 114),
(130, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 115),
(131, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 116),
(132, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 117),
(133, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 118),
(134, 'Guastalla', '45', '5', 'Argentina', 'Entre Rios', 'Formosa', '3600', 119),
(135, 'Guastalla', '45', '5', 'Argentina', 'Corrientes', 'Formosa', '3600', 120),
(136, 'Guastalla', '45', '5', 'Argentina', 'Corrientes', 'Formosa', '3600', 121),
(137, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 122),
(138, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 123),
(139, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 124),
(140, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 125),
(141, 'Guastalla', '45', '5', 'Argentina', 'Chaco', 'Formosa', '3600', 126),
(142, 'Guastalla', '45', '5', 'Argentina', 'Chaco', 'Formosa', '3600', 127),
(143, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'CÃ³rdoba', '3600', 128),
(144, 'Guastalla', '45', '5', 'Argentina', 'La Rioja', 'CÃ³rdoba', '3600', 129),
(145, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 130),
(146, 'Guastalla', '45', '5', 'Argentina', 'La Rioja', 'Formosa', '3600', 131),
(147, 'Guastalla', '45', '5', 'Argentina', 'Neuquen', 'CÃ³rdoba', '3600', 132),
(148, 'Guastalla', '45', '5', 'Argentina', 'Misiones', 'Formosa', '3600', 133),
(149, 'Guastalla', '45', '5', 'Argentina', 'Misiones', 'Formosa', '3600', 134),
(150, 'Guastalla', '45', '5', 'Argentina', 'La Rioja', 'Formosa', '3600', 135),
(151, 'Guastalla', '45', '5', 'Argentina', 'Formosa', 'Formosa', '3600', 136),
(152, 'Guastalla', '45', '5', 'Argentina', 'Cordoba', 'Formosa', '3600', 137),
(153, '8 de octubre bis', 'M13 08', 'dadad', 'Argentina', 'Formosa', 'formosa', 'M 13 C 8', 138),
(154, 'Guastalla', '45', '5', 'Argentina', 'Formosa', 'Formosa', '3600', 139),
(155, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 140),
(156, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires Capital', 'Formosa', '3600', 141),
(157, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 142),
(158, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 143),
(159, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 144),
(160, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 145),
(161, 'Guastalla', '45', '5', 'Argentina', 'Buenos Aires', 'Formosa', '3600', 146);

-- --------------------------------------------------------

--
-- Table structure for table `datos_pago`
--

CREATE TABLE `datos_pago` (
  `id_datos_pago` int(100) NOT NULL,
  `numero_tarjeta` varchar(100) NOT NULL,
  `mes_vencimiento` varchar(100) NOT NULL,
  `anio_vencimiento` varchar(100) NOT NULL,
  `ccv` varchar(100) NOT NULL,
  `id_datos_personales_envio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_pago`
--

INSERT INTO `datos_pago` (`id_datos_pago`, `numero_tarjeta`, `mes_vencimiento`, `anio_vencimiento`, `ccv`, `id_datos_personales_envio`) VALUES
(1, '4445-1231-1231', '05', '2022', 'aceace', 42),
(2, '4445-1231-1231', '05', '2022', 'aceace', 42),
(3, '4445-1231-1231', '05', '2022', 'aceace', 42),
(4, '4445-1231-1231', '05', '2022', 'aceace', 42),
(5, '4445-1231-1231', '05', '2022', 'aceace', 42),
(6, '4445-1231-1231', '05', '2022', 'aceace', 42),
(7, '4445-1231-1231', '05', '2022', 'aceace', 42),
(8, '4445-1231-1231', '05', '2022', 'aceace', 42),
(9, '4445-1231-1231', '05', '2022', 'aceace', 42),
(10, '4445-1231-1231', '05', '2022', 'aceace', 42),
(11, '4445-1231-1231', '05', '2022', 'aceace', 42),
(12, '4445-1231-1231', '05', '2022', 'aceace', 42),
(13, '4445-1231-1231', '05', '2022', 'aceace', 42),
(14, '4445-1231-1231', '05', '2022', 'aceace', 42),
(15, '4445-1231-1231', '05', '2022', 'aceace', 42),
(16, '4445-1231-1231', '05', '2022', 'aceace', 42),
(17, '4445-1231-1231', '05', '2022', 'aceace', 42),
(18, '4445-1231-1231', '05', '2022', 'aceace', 43),
(19, '4445-1231-1231', '05', '2022', 'aceace', 44),
(20, '4445-1231-1231', '05', '2022', 'aceace', 45),
(21, '4445-1231-1231', '05', '2022', 'aceace', 56),
(22, '4445-1231-1231', '05', '2022', 'aceace', 58),
(23, '4445-1231-1231', '05', '2022', 'aceace', 59),
(24, '4445-1231-1231', '05', '2022', 'aceace', 59),
(25, '4445-1231-1231', '05', '2022', 'aceace', 59),
(26, '4445-1231-1231', '05', '2022', 'aceace', 59),
(27, '4445-1231-1231', '05', '2022', 'aceace', 59),
(28, '4445-1231-1231', '05', '2022', 'aceace', 59),
(29, '4445-1231-1231', '05', '2022', 'aceace', 59),
(30, '4445-1231-1231', '05', '2022', 'aceace', 59),
(31, '4445-1231-1231', '05', '2022', 'aceace', 59),
(32, '4445-1231-1231', '05', '2022', 'aceace', 59),
(33, '4445-1231-1231', '05', '2022', 'aceace', 59),
(34, '4445-1231-1231', '05', '2022', 'aceace', 59),
(35, '4445-1231-1231', '05', '2022', 'aceace', 59),
(36, '4445-1231-1231', '05', '2022', 'aceace', 59),
(37, '4445-1231-1231', '05', '2022', 'aceace', 59),
(38, '4445-1231-1231', '05', '2022', 'aceace', 59),
(39, '4445-1231-1231', '05', '2022', 'aceace', 59),
(40, '4445-1231-1231', '05', '2022', 'aceace', 59),
(41, '4445-1231-1231', '05', '2022', 'aceace', 59),
(42, '4445-1231-1231', '05', '2022', 'aceace', 62),
(43, '4445-1231-1231', '05', '2022', 'aceace', 63),
(44, '4445-1231-1231', '05', '2022', 'aceace', 63),
(45, '4445-1231-1231', '05', '2022', 'aceace', 63),
(46, '4445-1231-1231', '05', '2022', 'aceace', 63),
(47, '4445-1231-1231', '05', '2022', 'aceace', 63),
(48, '4445-1231-1231', '05', '2022', 'aceace', 63),
(49, '4445-1231-1231', '05', '2022', 'aceace', 63),
(50, '4445-1231-1231', '05', '2022', 'aceace', 64),
(51, '4445-1231-1231', '05', '2022', 'aceace', 64),
(52, '4445-1231-1231', '05', '2022', 'aceace', 64),
(53, '4445-1231-1231', '05', '2022', 'aceace', 64),
(54, '4445-1231-1231', '05', '2022', 'aceace', 64),
(55, '4445-1231-1231', '05', '2022', 'aceace', 64),
(56, '4445-1231-1231', '05', '2022', 'aceace', 64),
(57, '4445-1231-1231', '05', '2022', 'aceace', 64),
(58, '4445-1231-1231', '05', '2022', 'aceace', 64),
(59, '4445-1231-1231', '05', '2022', 'aceace', 64),
(60, '4445-1231-1231', '05', '2022', 'aceace', 64),
(61, '4445-1231-1231', '05', '2022', 'aceace', 64),
(62, '4445-1231-1231', '05', '2022', 'aceace', 64),
(63, '4445-1231-1231', '05', '2022', 'aceace', 64),
(64, '4445-1231-1231', '05', '2022', 'aceace', 64),
(65, '4445-1231-1231', '05', '2022', 'aceace', 64),
(66, '4445-1231-1231', '05', '2022', 'aceace', 64),
(67, '4445-1231-1231', '05', '2022', 'aceace', 64),
(68, '4445-1231-1231', '05', '2022', 'aceace', 64),
(69, '4445-1231-1231', '05', '2022', 'aceace', 64),
(70, '4445-1231-1231', '05', '2022', 'aceace', 64),
(71, '4445-1231-1231', '05', '2022', 'aceace', 64),
(72, '4445-1231-1231', '05', '2022', 'aceace', 65),
(73, '4445-1231-1231', '05', '2022', 'aceace', 66),
(74, '4445-1231-1231', '05', '2022', 'aceace', 67),
(75, '4445-1231-1231', '05', '2022', 'aceace', 119),
(76, '4445-1231-1231', '05', '2022', 'aceace', 121),
(77, '4445-1231-1231', '05', '2022', 'aceace', 125),
(78, '4445-1231-1231', '05', '2022', 'aceace', 126),
(79, '4445-1231-1231', '05', '2022', 'aceace', 128),
(80, '4445-1231-1231', '05', '2022', 'aceace', 129),
(81, '4445-1231-1231', '05', '2022', 'aceace', 129),
(82, '4445-1231-1231', '05', '2022', 'aceace', 129),
(83, '4445-1231-1231', '05', '2022', 'aceace', 129),
(84, '4445-1231-1231', '05', '2022', 'aceace', 129),
(85, '4445-1231-1231', '05', '2022', 'aceace', 129),
(86, '4445-1231-1231', '05', '2022', 'aceace', 129),
(87, '4445-1231-1231', '05', '2022', 'aceace', 129),
(88, '4445-1231-1231', '05', '2022', 'aceace', 129),
(89, '4445-1231-1231', '05', '2022', '213213', 130),
(90, '4445-1231-1231', '05', '2022', '213213', 131),
(91, '4445-1231-1231', '05', '2022', '213213', 131),
(92, '4445-1231-1231', '05', '2022', '121221', 132),
(93, '4445-1231-1231', '05', '2022', '213213', 133),
(94, '4445-1231-1231', '05', '2022', '213213', 133),
(95, '4445-1231-1231', '05', '2022', '213213', 133),
(96, '4445-1231-1231', '05', '2022', '213213', 133),
(97, '4445-1231-1231', '05', '2022', '121221', 134),
(98, '4445-1231-1231', '05', '2022', '121221', 135),
(99, '4445-1231-1231', '05', '2022', '121221', 135),
(100, '4445-1231-1231', '05', '2022', '121221', 135),
(101, '4445-1231-1231', '05', '2022', '121221', 135),
(102, '4445-1231-1231', '05', '2022', '121221', 135),
(103, '4445-1231-1231', '05', '2022', '121221', 135),
(104, '4445-1231-1231', '05', '2022', '121221', 135),
(105, '4445-1231-1231', '05', '2022', 'aceace', 137),
(106, '4445-1231-1231', '05', '2022', '213213', 139),
(107, '4445-1231-1231', '05', '2022', '213213', 139),
(108, '4445-1231-1231', '05', '2022', '213213', 139),
(109, '4445-1231-1231', '05', '2022', '213213', 139),
(110, '4445-1231-1231', '05', '2022', '213213', 139),
(111, '4445-1231-1231', '05', '2022', '213213', 139),
(112, '4445-1231-1231', '05', '2022', 'aceace', 140),
(113, '4445-1231-1231', '05', '2022', 'aceace', 140),
(114, '4445-1231-1231', '05', '2022', 'aceace', 140),
(115, '4445-1231-1231', '05', '2022', 'aceace', 141),
(116, '4445-1231-1231', '05', '2022', '213213', 142),
(117, '4445-1231-1231', '05', '2022', '213213', 142),
(118, '4445-1231-1231', '05', '2022', '213213', 142),
(119, '4445-1231-1231', '05', '2022', '213213', 142),
(120, '4445-1231-1231', '05', '2022', '213213', 142),
(121, '4445-1231-1231', '05', '2022', '213213', 142),
(122, '4445-1231-1231', '05', '2022', '213213', 142),
(123, '4445-1231-1231', '05', '2022', '213213', 142),
(124, '4445-1231-1231', '05', '2022', '213213', 142),
(125, '4445-1231-1231', '05', '2022', '213213', 142),
(126, '4445-1231-1231', '05', '2022', 'aceace', 143),
(127, '4445-1231-1231', '05', '2022', 'aceace', 143),
(128, '4445-1231-1231', '05', '2022', 'aceace', 143),
(129, '4445-1231-1231', '05', '2022', 'aceace', 143),
(130, '4445-1231-1231', '05', '2022', 'aceace', 143),
(131, '4445-1231-1231', '05', '2022', 'aceace', 143),
(132, '4445-1231-1231', '05', '2022', 'aceace', 143),
(133, '4445-1231-1231', '05', '2022', 'aceace', 143),
(134, '4445-1231-1231', '05', '2022', 'aceace', 143),
(135, '4445-1231-1231', '05', '2022', 'aceace', 143),
(136, '4445-1231-1231', '05', '2022', 'aceace', 143),
(137, '4445-1231-1231', '05', '2022', 'aceace', 143),
(138, '4445-1231-1231', '05', '2022', 'aceace', 143),
(139, '4445-1231-1231', '05', '2022', 'aceace', 143),
(140, '4445-1231-1231', '05', '2022', 'aceace', 143),
(141, '4445-1231-1231', '05', '2022', 'aceace', 143),
(142, '4445-1231-1231', '05', '2022', 'aceace', 143),
(143, '4445-1231-1231', '05', '2022', 'aceace', 143),
(144, '4445-1231-1231', '05', '2022', 'aceace', 143),
(145, '4445-1231-1231', '05', '2022', 'aceace', 143),
(146, '4445-1231-1231', '05', '2022', 'aceace', 143),
(147, '4445-1231-1231', '05', '2022', 'aceace', 143),
(148, '4445-1231-1231', '05', '2022', 'aceace', 143),
(149, '4445-1231-1231', '05', '2022', 'aceace', 143),
(150, '4445-1231-1231', '05', '2022', 'aceace', 143),
(151, '4445-1231-1231', '05', '2022', 'aceace', 143),
(152, '4445-1231-1231', '05', '2022', 'aceace', 143),
(153, '4445-1231-1231', '05', '2022', 'aceace', 143),
(154, '4445-1231-1231', '05', '2022', 'aceace', 143),
(155, '4445-1231-1231', '05', '2022', 'aceace', 143),
(156, '4445-1231-1231', '05', '2022', 'aceace', 143),
(157, '4445-1231-1231', '05', '2022', 'aceace', 143),
(158, '4445-1231-1231', '05', '2022', 'aceace', 143),
(159, '4445-1231-1231', '05', '2022', 'aceace', 143),
(160, '4445-1231-1231', '05', '2022', 'aceace', 143),
(161, '4445-1231-1231', '05', '2022', 'aceace', 143),
(162, '4445-1231-1231', '05', '2022', 'aceace', 143),
(163, '4445-1231-1231', '05', '2022', 'aceace', 143),
(164, '4445-1231-1231', '05', '2022', 'aceace', 143),
(165, '4445-1231-1231', '05', '2022', 'aceace', 143),
(166, '4445-1231-1231', '05', '2022', 'aceace', 143),
(167, '4445-1231-1231', '05', '2022', 'aceace', 143),
(168, '4445-1231-1231', '05', '2022', 'aceace', 143),
(169, '4445-1231-1231', '05', '2022', 'aceace', 143),
(170, '4445-1231-1231', '05', '2022', 'aceace', 143),
(171, '4445-1231-1231', '05', '2022', 'aceace', 143),
(172, '4445-1231-1231', '05', '2022', 'aceace', 143),
(173, '4445-1231-1231', '05', '2022', 'aceace', 143),
(174, '4445-1231-1231', '05', '2022', 'aceace', 143),
(175, '4445-1231-1231', '05', '2022', 'aceace', 143),
(176, '4445-1231-1231', '05', '2022', 'aceace', 143),
(177, '4445-1231-1231', '05', '2022', 'aceace', 143),
(178, '4445-1231-1231', '05', '2022', 'aceace', 143),
(179, '4445-1231-1231', '05', '2022', 'aceace', 143),
(180, '4445-1231-1231', '05', '2022', 'aceace', 143),
(181, '4445-1231-1231', '05', '2022', 'aceace', 143),
(182, '4445-1231-1231', '05', '2022', 'aceace', 143),
(183, '4445-1231-1231', '05', '2022', 'aceace', 144),
(184, '4445-1231-1231', '05', '2022', '213213', 145),
(185, '4445-1231-1231', '05', '2022', '213213', 145),
(186, '4445-1231-1231', '05', '2022', '213213', 145),
(187, '4445-1231-1231', '05', '2022', '213213', 145),
(188, '4445-1231-1231', '05', '2022', '213213', 145),
(189, '4445-1231-1231', '05', '2022', '213213', 145),
(190, '4445-1231-1231', '05', '2022', '213213', 145),
(191, '4445-1231-1231', '05', '2022', '213213', 145),
(192, '4445-1231-1231', '05', '2022', '213213', 145),
(193, '4445-1231-1231', '05', '2022', '213213', 145),
(194, '4445-1231-1231', '05', '2022', '213213', 145),
(195, '4445-1231-1231', '05', '2022', '213213', 145),
(196, '4445-1231-1231', '05', '2022', '213213', 145),
(197, '4445-1231-1231', '05', '2022', '213213', 145),
(198, '4445-1231-1231', '05', '2022', '213213', 145),
(199, '4445-1231-1231', '05', '2022', '213213', 145),
(200, '4445-1231-1231', '05', '2022', '213213', 145),
(201, '4445-1231-1231', '05', '2022', '213213', 145),
(202, '4445-1231-1231', '05', '2022', '213213', 145),
(203, '4445-1231-1231', '05', '2022', '213213', 145),
(204, '4445-1231-1231', '05', '2022', '213213', 145),
(205, '4445-1231-1231', '05', '2022', '213213', 145),
(206, '4445-1231-1231', '05', '2022', '213213', 145),
(207, '4445-1231-1231', '05', '2022', '213213', 145),
(208, '4445-1231-1231', '05', '2022', '213213', 145),
(209, '4445-1231-1231', '05', '2022', '213213', 145),
(210, '4445-1231-1231', '05', '2022', '213213', 145),
(211, '4445-1231-1231', '05', '2022', '213213', 145),
(212, '4445-1231-1231', '05', '2022', '213213', 145),
(213, '4445-1231-1231', '05', '2022', '213213', 145),
(214, '4445-1231-1231', '05', '2022', '213213', 145),
(215, '4445-1231-1231', '05', '2022', '213213', 145),
(216, '4445-1231-1231', '05', '2022', '213213', 145),
(217, '4445-1231-1231', '05', '2022', '213213', 145),
(218, '4445-1231-1231', '05', '2022', '213213', 145),
(219, '4445-1231-1231', '05', '2022', '213213', 145),
(220, '4445-1231-1231', '05', '2022', '213213', 145),
(221, '4445-1231-1231', '05', '2022', '213213', 145),
(222, '4445-1231-1231', '05', '2022', '213213', 145),
(223, '4445-1231-1231', '05', '2022', '213213', 145),
(224, '4445-1231-1231', '05', '2022', '213213', 145),
(225, '4445-1231-1231', '05', '2022', '213213', 145),
(226, '4445-1231-1231', '05', '2022', '213213', 145),
(227, '4445-1231-1231', '05', '2022', '213213', 145),
(228, '4445-1231-1231', '05', '2022', '213213', 145),
(229, '4445-1231-1231', '05', '2022', '213213', 145),
(230, '4445-1231-1231', '05', '2022', '213213', 145),
(231, '4445-1231-1231', '05', '2022', '213213', 145),
(232, '4445-1231-1231', '05', '2022', '213213', 145),
(233, '4445-1231-1231', '05', '2022', '213213', 145),
(234, '4445-1231-1231', '05', '2022', 'aceace', 146);

-- --------------------------------------------------------

--
-- Table structure for table `datos_personales_envio`
--

CREATE TABLE `datos_personales_envio` (
  `id_datos_personales_envio` int(100) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dni` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_personales_envio`
--

INSERT INTO `datos_personales_envio` (`id_datos_personales_envio`, `nombre_apellido`, `email`, `dni`, `telefono`) VALUES
(1, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(2, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(3, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(4, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(5, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(6, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(7, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(8, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(9, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(10, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(11, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(12, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(13, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(14, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(15, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(16, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(17, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(18, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(19, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(20, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(21, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(22, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(23, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(24, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(25, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(26, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(27, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(28, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(29, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(30, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(31, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(32, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(33, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(34, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(35, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(36, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(37, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(38, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(39, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(40, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(41, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(42, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704985895'),
(43, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(44, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(45, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(46, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(47, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(48, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(49, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(50, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(51, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(52, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(53, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(54, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(55, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(56, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(57, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(58, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(59, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(60, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(61, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(62, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(63, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(64, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(65, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(66, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(67, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(68, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(69, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(70, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(71, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(72, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(73, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(74, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(75, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(76, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(77, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(78, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(79, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(80, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(81, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(82, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(83, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(84, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(85, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(86, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(87, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(88, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(89, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(90, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(91, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(92, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(93, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(94, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(95, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(96, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(97, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(98, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(99, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(100, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(101, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(102, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(103, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(104, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(105, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(106, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(107, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(108, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(109, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(110, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(111, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(112, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(113, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(114, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(115, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(116, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(117, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(118, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(119, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(120, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(121, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(122, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(123, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(124, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(125, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(126, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(127, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(128, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(129, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(130, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(131, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(132, 'Miguel GÃ³mez', 'migue_gomez19@hotmail.com', '44924014', '3704562145'),
(133, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(134, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(135, 'Miguel GÃ³mez', 'migue_gomez19@hotmail.com', '44924014', '3704985895'),
(136, 'Vicente GarcÃ­a', 'entidad303@gmail.com', '44924014', '3704562145'),
(137, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(138, 'Cristian', 'cristian@gmail.com', '44464951', '3704823807'),
(139, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(140, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(141, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(142, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(143, 'Cristian Barrios', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(144, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(145, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145'),
(146, 'Miguel GÃ³mez', 'miguelgomez1133@gmail.com', '44924014', '3704562145');

-- --------------------------------------------------------

--
-- Table structure for table `datos_usuario`
--

CREATE TABLE `datos_usuario` (
  `id_datos_usuario` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(10) NOT NULL,
  `cuil` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `sexo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_usuario`
--

INSERT INTO `datos_usuario` (`id_datos_usuario`, `nombre`, `apellido`, `dni`, `cuil`, `telefono`, `sexo`) VALUES
(1, 'Miguel', 'GÃ³mez', 44924014, '20449240147', '3704985895', 'M'),
(2, 'Lucas', 'Werener', 44924014, '20449240147', '3704985895', 'M'),
(3, 'Lucas', 'Werener', 44924014, '20449240147', '3704985895', 'M'),
(4, 'Lucas', 'Werener', 44924014, '20449240147', '3704985895', 'M'),
(5, 'Lucas', 'Werener', 44924014, '20449240147', '3704985895', 'M'),
(6, 'Lucas', 'Werener', 44924014, '20449240147', '3704985895', 'M'),
(7, 'Vicente', 'GarcÃ­a', 41232234, '20449240147', '3704562145', 'M'),
(8, 'Cristian', 'Fsa', 44464951, '2044464951', '03704585832', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_detalle_venta` int(100) NOT NULL,
  `id_venta` int(100) NOT NULL,
  `monto_total` int(100) NOT NULL,
  `id_productos` int(100) NOT NULL,
  `id_medio_pago` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_ventas_online`
--

CREATE TABLE `detalle_ventas_online` (
  `id_det_venta` int(100) NOT NULL,
  `id_venta` int(100) NOT NULL,
  `monto_total` int(100) NOT NULL,
  `id_productos` int(100) NOT NULL,
  `id_medio_pago` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deuda_clientes`
--

CREATE TABLE `deuda_clientes` (
  `id_deuda_cliente` int(100) NOT NULL,
  `nombre_deudor` varchar(100) NOT NULL,
  `apellido_deudor` varchar(100) NOT NULL,
  `monto_deuda` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deuda_clientes`
--

INSERT INTO `deuda_clientes` (`id_deuda_cliente`, `nombre_deudor`, `apellido_deudor`, `monto_deuda`) VALUES
(1, 'Pablo', 'Fernandez', 500),
(2, 'Marcelo', 'HernÃ¡ndez', 500),
(3, 'Marcelo', 'Fernandez', 500);

-- --------------------------------------------------------

--
-- Table structure for table `direccion_envio`
--

CREATE TABLE `direccion_envio` (
  `id_direccion_envio` int(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(100) NOT NULL,
  `nombre_empleados` varchar(100) NOT NULL,
  `apellido_empleados` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fecha_productos`
--

CREATE TABLE `fecha_productos` (
  `id_fecha` int(100) NOT NULL,
  `fecha_adqui` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha_modif_precio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fecha_productos`
--

INSERT INTO `fecha_productos` (`id_fecha`, `fecha_adqui`, `fecha_vencimiento`, `fecha_modif_precio`) VALUES
(3, '0000-00-00', '0000-00-00', '0000-00-00'),
(5, '2021-11-30', '2020-12-03', '2021-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `medios_de_pago`
--

CREATE TABLE `medios_de_pago` (
  `id_med_pago` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medio_pago`
--

CREATE TABLE `medio_pago` (
  `id_medio_pago` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `precio_productos`
--

CREATE TABLE `precio_productos` (
  `id_precio` int(100) NOT NULL,
  `precio_unidad` int(100) NOT NULL,
  `precio_total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `precio_productos`
--

INSERT INTO `precio_productos` (`id_precio`, `precio_unidad`, `precio_total`) VALUES
(3, -2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  `cantidad` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_proveedor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `imagen`, `id_proveedor`) VALUES
(20, 'Mi Smart Band 4c Xiaomi', 'Smartband Xiaomi Mi Smart Band 4C en inglés – 100% Original\r\n\r\nPantalla TFT de 1,08\" a todo color - Seguimiento de \r\nactividad - Resistencia al agua 5ATM - Seguimiento de \r\nla frecuencia cardíaca 24/7 - Monitor del sueño - Batería \r\nLiPo 130 mAh\r\n\r\nUn nuevo wearable de Xiaomi llega a sus filas, se trata\r\n de la Xiaomi Mi Smart Band 4c, la versión global de la Redmi Band.\r\n\r\nTe dejamos una opción más para llevar un control de tu estado \r\nde salud y de tu rutina diaria, con un sensor del ritmo cardíaco \r\n24/7, alerta de llamadas y notificaciones, pantalla a color de \r\n1,08\", resistencia al agua, monitor del sueño, y mucho más.\r\n\r\nOtra cosa a tener en cuenta de la Mi Smart Band 4c es su \r\ncertificación de resistencia al agua, para que puedas llevarlo\r\n sin preocupaciones cuando llueva y practiques deporte al aire \r\nlibre, mientras te lavas las manos o cuando sudes mucho realizando\r\n ejercicio. Según Xiaomi, su pulsera inteligente es sumergible \r\nhasta los 50 metros de profundidad, por lo que también podrías \r\nllevarlo en la piscina. No obstante, recomendamos no sumergirlo\r\n en agua salada.\r\n\r\nControla tu ejercicio físico con 5 modos de deporte\r\nSuma todas esas funciones de salud a un contador de pasos, un \r\nindicador de la distancia recorrida y otro de las calorías quemadas\r\n para terminar de controlar toda tu actividad diaria de manera eficaz.\r\nAdemás, adapta esas mediciones al deporte que estés realizando\r\nen cada momento, pudiendo elegir entre 5 tipos de actividad:\r\nrunning, fitness, ciclismo, cinta de correr/andar o andar rápido.\r\n\r\nNo tiene GPS.\r\nSi tenes muchas notificaciones de WhatsApp no podes leer los mensajes.\r\n\r\nEspecificaciones técnicas:\r\n\r\nParámetros generales:\r\nMarca: Xiaomi\r\nModelo: Mi Smart Band 4c\r\nReferencia: MGW4064GL\r\nMateriales:\r\nCaja: Plástico PC (policarbonato)\r\nCorrea: Silicona\r\nResistencia al agua: 5ATM\r\nPeso: 20 g\r\n\r\nParámetros técnicos:\r\nRAM: 64KB\r\nROM: 8MB+512KB\r\nConectividad: Bluetooth 5.0\r\nRequerimientos del sistema: Android 4.4 o superior, iOS10 o superior\r\nIdiomas: Inglés\r\nAPP: Xiaomi Wear (Poner Region EEUU)\r\n\r\nPantalla:\r\nTamaño de pantalla: 1.08\"\r\nTipo: TFT a color\r\nResolución: 120 x 220 RGB\r\nProfundidad de color: 16 bit\r\nBrillo: 200 nits\r\nTáctil: Sí\r\n\r\nSensores:\r\nAcelerómetro de 3 ejes\r\nSensor de frecuencia cardíaca PPG\r\n\r\nMonitor de salud y actividad:\r\nMedición automática de la frecuencia cardíaca 24/7\r\nAlertas por anomalías en el ritmo cardíaco\r\nAnálisis del sueño\r\nPasos diarios\r\nCalorías quemadas\r\nDistancia recorrida\r\nRecordatorio de sedentarismo\r\n\r\nModos deportivos:\r\nCorrer\r\nFitness\r\nCiclismo\r\nCinta de correr\r\nAndar rápido\r\n\r\nOtras funciones:\r\nHora y fecha\r\nNotificación de llamadas, mensajes y alarmas\r\nControl remoto de la reproducción de música\r\n\r\nBatería:\r\nCapacidad: 130 mAh\r\nTipo: LiPo\r\nAutonomía: hasta 14 días\r\nTiempo de carga: 2 horas aprox.\r\nModo de carga: salida USB incorporada\r\n\r\nContenido del paquete:\r\n1x Mi Smart Band 4c\r\n1x Correa\r\n1x Guía de usuario\r\n\r\nVoltaje del cargador y requisitos de corriente: 5V/ 1A\r\nEn caso de que no se respete podría afectar la Autonomía\r\n de la Batería y la garantía no se lo cubriría. No usar \r\nCargador de Carga rápida\r\n\r\n\r\n\r\n', '1500.00', '18', 'images/reloj_1.jpeg', 0),
(21, 'Mi Smart Band 5 Xiaomi', 'Con 10 años de trayectoria, Xiaomi se posiciona como uno de \r\nlos líderes indiscutidos en el mercado de los smartwatches. \r\nSus productos se destacan por la calidad, el diseño sencillo \r\ny muy buenas prestaciones. La Mi Band tiene todo lo necesario\r\npara acompañarte en tu rutina.\r\n\r\nLa Mi Band 5 es un salto de evolución respecto a sus predecesoras. \r\nSin perder su versatilidad, la nueva pulsera inteligente de Xiaomi \r\npresenta mejoras que la hacen mucho más cómoda y funcional. Una \r\nde las principales es el cargador magnético: basta con acercar el\r\n extremo de carga al dispositivo y comenzará a llenarse la batería. \r\nPor otro lado, su pantalla OLED presenta colores bien definidos y \r\nbuen contraste, para visualizar con facilidad los datos incluso \r\ncon luz solar directa. Y si hablamos de funcionalidades deportivas\r\n y de salud esta nueva versión se destaca de las demás por su precisión.\r\n\r\nAlgunas de sus Características Generales son:\r\n\r\n•	Pantalla táctil AMOLED de 1.1\".\r\n•	Recibe notificaciones de WhatsApp.\r\n•	Reproduce audio.\r\n•	Resiste hasta 50m bajo el agua.\r\n•	Batería de 14 días de duración.\r\n•	Conectividad por Bluetooth.\r\n•	Capacidad de la memoria interna de 16MB.\r\n•	Sensores incluidos: acelerómetro, giroscopio, sensor óptico de \r\n        frecuencia cardíaca ppg.\r\n•	Malla intercambiable por otros colores, no incluidos en el producto.\r\n•	Rango de ajuste de la malla: 155 mm x 219 mm.\r\n\r\nCaracterísticas Detalladas:\r\n\r\nPantalla\r\nAMOLED de 1,1 pulgadas táctil\r\nResolución de 126 x 294 px\r\n301ppi\r\n\r\nDimensiones y peso\r\n47,2 x 18,5 x 12,4 mm\r\n11,9 gramos\r\n\r\nMateriales\r\nPlástico PC / Aleación de aluminio\r\n\r\nColores\r\nBlack\r\n\r\nResistencia al agua\r\n50 metros\r\n\r\nBatería\r\n125mAh (14 días)\r\n\r\nFunciones Principales:\r\n\r\nAlarma\r\nAlerta de vibración\r\nAplicación deportiva\r\nCalendario\r\nCapturador de fotos remoto\r\nClima\r\nConsumo de calorías\r\nControl de ciclo menstrual\r\nCronómetro\r\nCuenta pasos\r\nDesbloquear teléfono\r\nDistancia recorrida\r\nEncuentra mi teléfono\r\nMedidor de frecuencia cardíaca\r\nMonitor de sueño\r\nNotificaciones\r\nRecibir mensajes\r\nRecordatorio anti sedentarismo\r\nRecordatorios\r\nRedes sociales\r\nRelajación\r\nReproducción de música\r\nSilenciar teléfono\r\nTemporizador\r\nVisualizar llamadas\r\nSensores\r\nAcelerómetro, Giroscopio, Sensor óptico de frecuencia cardíaca PPG\r\n\r\nCompatibilidad:\r\nAndroid 5.0 y superior\r\niOS 10.0 y superior \r\n', '4375.00', '19', 'images/reloj_3.png', 0),
(22, 'Smartwaych KW37 Nictom', 'Características Generales:\r\n\r\n•	Pantalla táctil TFT de 1.3\".\r\n•	Resiste hasta 3m bajo el agua.\r\n•	Batería de 48 h de duración.\r\n•	Conectividad por Bluetooth.\r\n•	Sensores incluidos: sensor óptico de frecuencia cardíaca ppg.\r\n\r\n\r\nMonitor de saturación de oxígeno en sangre\r\nEl nivel de oxígeno en sangre es un indicador muy importante\r\n para determinar el bienestar general. Vas a poder controlar \r\neste dato desde tu muñeca y evaluar tu condición física mientras \r\nrealices tus actividades diarias o en sesiones de entrenamiento intenso.\r\n\r\nDescansá mejor, rendí más\r\nGracias a la función de monitoreo del sueño podrás aprender \r\nmás acerca de tus hábitos por las noches y la calidad de tu \r\ndescanso para que puedas rendir mejor al día siguiente.\r\n\r\nSmart Watch KW37 Reloj Inteligente Android Ios\r\n\r\n• Diseño:\r\nColor: Blanco\r\nMaterial: Malla de TPU, Carcasa Plastica y Panel de Vidrio Templado.\r\n\r\n• Dimensiones\r\nPeso total: 35g\r\nTamaño: 38*45*10mm\r\n\r\n\r\n• Especificaciones:\r\nCPU: NRF52832\r\nMemoria: RAM 64KB+ROM512KB+64Mb\r\n\r\n• Autonomía:\r\nAutonomía: 5 dias en stand-by y 48hs de uso.\r\n\r\n• Batería:\r\nCapacidad: 160mAh\r\n\r\n• Bluetooth:\r\nBluetooth: Versión 4.0\r\nDistancia: Hasta 10 metros de distancia\r\n\r\n• Extras\r\nCompatibilidad con iOS y Android\r\nSensor de Ritmo Cardiaco\r\nResistencia al agua IP68\r\nPantalla tactil\r\nSoporte multi-deporte: caminata, corrida, bicicleta y senderismo.\r\n\r\n• Contenido de la caja:\r\nReloj\r\nBase de carga\r\nManual de instrucciones\r\n', '4375.00', '16', 'images/reloj_5.jpg', 0),
(23, 'T500 + Plus Genérica ', 'Smartwatch Reloj Inteligente T500+ Plus\r\n\r\nMensajes y Llamadas\r\n-Podes enterarte de los mensajes que te llegan y leerlos de\r\n apps y redes sociales de tu celular.Ademas podes ver quién \r\nte está llamando ya que cuenta con notificaciones de llamadas.\r\n\r\nDeportes\r\n-El reloj inteligente T500+ Plus cuenta con modo multideporte \r\ncomo caminar,correr,ciclismo,alpinismo,abdominalesetc. Ademas\r\n Incluye cuenta pasos y KM para seguir tu recorrido diario.\r\n\r\nSalud\r\n-Podes seguir de cerca tu salud ya que incluye medicion de \r\nritmo cardíaco,presión arterial y calorias quemadas(son datos\r\n aproximados y no se usan como datos medicos).\r\n\r\nFunciones varias\r\n-Monitoreo de sueño,cronometro,buscar dispositivo,control de la\r\nmusica,alarma,camara remota,calculadora,listado de contactos,\r\nllamadas recientes,y más.\r\n\r\n\r\n\r\nEspecificaciones:\r\n-Smartwatch T500+ Plus\r\n-Pantalla de alta resolucion de 320-385 pixeles\r\n-Pantalla de 1,54 inch\r\n-Bateria de 180 mah(24 hrs dependiendo el uso)\r\n-Tiempo de carga 1:30 hrs\r\n-Modo de carga magnetico\r\n-Compatible con todos los dispositivos Android 5.0 o \r\nsuperior e IOS 9.0 o superior\r\n-Aplicacion: M2WEAR\r\n-Idiomas: Español,Ingles,Aleman,Chino,Japones,Italiano,Frances,etc\r\n\r\nFunciones:\r\n-Hora y fecha\r\n-Realizar y contestar llamadas Bluetooth\r\n-Notificacion y lectura de los mensajes de todas las aplicaciones\r\ny redes sociales\r\n-Listado de contactos y llamadas recientes\r\n-Cronometro\r\n-Ritmo cardiaco,presion arterial y calorías quemadas(No son \r\npara uso médico)\r\n-Multideportes(Caminar,correr,bicicleta,escalar,etc)\r\n-Cuenta pasos y KM\r\n-Control de la musica\r\n-Monitoreo de sueño\r\n-Sacar fotos remotas\r\n-Calculadora\r\n\r\nComponentes:\r\n-Smartwatch T500+ Plus\r\n-Malla de silicona\r\n-Cable cargador USB\r\n-Manual de Usuario\r\n\r\nCompatible con dispositivos bluetooth, Android 5.0, iOS 9 y superior.\r\n\r\n° Reloj de diseño ideal tanto para uso cotidiano en tareas diarias \r\ncomo para modo de ejercicio: caminar, correr, andar en bicicleta, etc.\r\n\r\n° Todas las funcionalidades que necesitas: función de llamada, \r\nencendido / apagado del tono de llamada, reproducción de \r\nmúsica, lista de contactos de uso frecuente, marcación por voz\r\n de llamada, marcación de llamada, Podómetro de monitoreo de \r\nejercicio, tiempo de ejercicio, pista de atletismo, kilometraje, \r\ncalorías, monitoreo de la salud, Medición del ritmo cardíaco \r\n(medición por hora), medición de la presión arterial, control \r\ndel sueño Recordatorio inteligente, Recordatorio sedentario, \r\nrecordatorio de llamada, Notificaciones (SMS / QQ / WeChat /\r\n Skype / Facebook / Twitter / Line / WhatsApp)\r\n\r\nDetalles técnicos del producto\r\n-Tamaño de pantalla: pantalla a color IPS de 1,54 pulgadas\r\n-Bluetooth: 4,2\r\n-Resolución: 240*240\r\n-Táctil: Pantalla táctil completa\r\n-Capacidad de la batería: 160mah\r\n-Modo de carga: carga del dedal de 2 pines\r\n-Tiempo de carga: 3hs aproximadamente\r\n-Tiempo de espera: 1 día (dependiendo del funcionamiento \r\nreal medio ambiente, si enciende la luz larga aumentará el \r\nconsumo de energía)\r\n-Requiere descarga de aplicación \"hi watch\" - Android mínimo\r\n5.0 ios 9.0\r\n-Varios idiomas\r\n-Mide pasos no km\r\n-Es resistente al agua, salpicaduras NO sumergible.\r\n\r\n\r\nLa caja incluye:\r\n-1 x reloj inteligente\r\n-1 x Manual del usuario\r\n-1x Cable cargador 1 x USB\r\n\r\n', '4375.00', '19', 'images/reloj_4.jpeg', 0),
(24, 'NM-BAND Netbak', 'Netmak Reloj SmartWatch NM-BAND Deportes 15 Funciones\r\n\r\nEsta Smartband es una de las mas completas en el mercado, \r\ncon sus medidores múltiples por láser puede monitorear \r\nel Ritmo Cardíaco, perfecto para estar al pendiente de tu \r\nsalud en cualquier momento y en cualquier lugar.\r\n\r\nEspecificaciones Generales:\r\n\r\n- Para cargarlo se desmonta la malla y se carga directo a \r\n un puerto USB\r\n- APP Gratis desde su android o iOS para descargarse en el\r\n telefono y utilizar al 100% su reloj.\r\n- Notificaciones de mensajes: El smartwatch le notificara \r\n mensajes y llamadas entrantes.\r\n- Resistente a la sudoración ( no es sumergible )\r\n- Alarma: Puede configurar alarma\r\n- Reloj\r\n- Podómetro: Cuenta los pasos realizados\r\n- Distancia: Muestra los kilometros o metros dados en base a los pasos \r\n realizados.\r\n- Calorías: Muestra las calorías consumidas\r\n- Presión Sanguinea\r\n- Revoluciones por minuto\r\n- Monitoreo de Sueño\r\n\r\nEspecificaciones Técnicas:\r\n\r\n- Tamaño de la pantalla: 1.3\"\r\n- Bluetooth 4.0\r\n- Carga directa desde el reloj (sacando la malla) a un puerto USB\r\n- Resistente al agua\r\n- Duración de la batería: de 3 a 4 días dependiendo su uso y \r\n el medio de carga (no incluido)\r\n- Compatibilidad: Android 4.4 o superior / iOs 8.0 o superior.\r\n\r\n', '1500.00', '10', 'images/reloj_2.jpeg', 0),
(38, 'Reloj H2', 'El mejor reloj', '1500.00', '20', 'images/blog_1.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(100) NOT NULL,
  `nombre_proveedor` varchar(100) NOT NULL,
  `direccion_proveedor` varchar(100) NOT NULL,
  `telefono_proveedor` int(10) NOT NULL,
  `correo_proveedor` varchar(100) NOT NULL,
  `nombre_contacto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `direccion_proveedor`, `telefono_proveedor`, `correo_proveedor`, `nombre_contacto`) VALUES
(2, 'Stratton', 'Wall Street', 34342323, 'sadasdas@gmail.com', 'William Azoff'),
(4, 'Industries Center', 'Avenida RibereÃ±a 402', 12312312, 'indus@gmail.com', 'Cristian Barrios'),
(6, 'SpaceX', 'Avenida RibereÃ±a 402', 2147483647, 'indus@gmail.com', 'Miguel GÃ³mez');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `id_datos_usuario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contrasenia`, `id_datos_usuario`) VALUES
(1, 'miguelgomez1133@gmail.com', 'qwerty', 1),
(2, 'migue_gomez19@hotmail.com', 'qwerty', 2),
(3, 'migue_gomez19@hotmail.com', 'qwerty', 3),
(4, 'migue_gomez19@hotmail.com', 'qwerty', 4),
(5, 'migue_gomez19@hotmail.com', 'qwerty', 5),
(6, 'migue_gomez19@hotmail.com', 'qwerty', 6),
(7, 'entidad303@gmail.com', '1234', 7),
(8, 'Cristian', '1234', 0),
(9, 'cb569046@gmail.com', '12345678', 8);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(100) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `monto` varchar(100) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id_venta`, `producto`, `cantidad`, `monto`, `fecha_venta`) VALUES
(1, 'Mi Smart Band 4c Xiaomi', '2', '2', '2021-11-28'),
(2, 'Mi Smart Band 4c Xiaomi', '2', '2', '2021-11-28'),
(3, 'Mi Smart Band 4c Xiaomi', '2', '2', '2021-11-28'),
(5, 'Smartwaych KW37 Nictom', '2', '4345', '2021-11-28'),
(6, 'Smartwaych KW37 Nictom', '2', '4345', '2021-11-28'),
(7, 'Smartwaych KW37 Nictom', '2', '4345', '2021-11-28'),
(8, 'Smartwaych KW37 Nictom', '2', '4345', '2021-11-28'),
(9, 'Smartwaych KW37 Nictom', '2', '4345', '2021-11-28'),
(10, 'Smartwaych KW37 Nictom', '2', '4345', '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `ventas_online`
--

CREATE TABLE `ventas_online` (
  `id_venta` int(100) NOT NULL,
  `fecha_venta` date NOT NULL,
  `producto` varchar(100) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `monto_total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ventas_online`
--

INSERT INTO `ventas_online` (`id_venta`, `fecha_venta`, `producto`, `cantidad`, `monto_total`) VALUES
(1, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(2, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(3, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(4, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(5, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(6, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(7, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(8, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(9, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(10, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(11, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(12, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(13, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(14, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(15, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(16, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(17, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(18, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(19, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(20, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(21, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(22, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(23, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(24, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(25, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(26, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(27, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(28, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(29, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(30, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(31, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(32, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(33, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(34, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(35, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(36, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(37, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(38, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(39, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(40, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '4500'),
(41, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(42, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(43, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(44, '2021-11-28', 'NM-BAND Netbak', '3', '3000'),
(45, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(46, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(47, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(48, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(49, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(50, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(51, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(52, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(53, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(54, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(55, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(56, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(57, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(58, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(59, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(60, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(61, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(62, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(63, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '3', '4500'),
(64, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(65, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(66, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(67, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(68, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(69, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(70, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(71, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(72, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(73, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(74, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(75, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(76, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(77, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(78, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(79, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(80, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(81, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(82, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(83, '2021-11-28', 'NM-BAND Netbak', '2', '3000'),
(84, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(85, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '3', '4500'),
(86, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '3', '4500'),
(87, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(88, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(89, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(90, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(91, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(92, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(93, '2021-11-28', 'NM-BAND Netbak', '3', '4500'),
(94, '2021-11-28', 'Mi Smart Band 4c Xiaomi', '2', '3000'),
(95, '2021-11-28', 'Mi Smart Band 5 Xiaomi', '1', '4375'),
(96, '2021-11-28', 'Smartwaych KW37 Nictom', '1', '4375');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito_usuarios`
--
ALTER TABLE `carrito_usuarios`
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `datos_deudor`
--
ALTER TABLE `datos_deudor`
  ADD PRIMARY KEY (`id_datos_deudor`);

--
-- Indexes for table `datos_empleados`
--
ALTER TABLE `datos_empleados`
  ADD PRIMARY KEY (`id_datos`);

--
-- Indexes for table `datos_envio`
--
ALTER TABLE `datos_envio`
  ADD PRIMARY KEY (`id_datos_envio`);

--
-- Indexes for table `datos_pago`
--
ALTER TABLE `datos_pago`
  ADD PRIMARY KEY (`id_datos_pago`);

--
-- Indexes for table `datos_personales_envio`
--
ALTER TABLE `datos_personales_envio`
  ADD PRIMARY KEY (`id_datos_personales_envio`);

--
-- Indexes for table `datos_usuario`
--
ALTER TABLE `datos_usuario`
  ADD PRIMARY KEY (`id_datos_usuario`);

--
-- Indexes for table `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id_detalle_venta`);

--
-- Indexes for table `detalle_ventas_online`
--
ALTER TABLE `detalle_ventas_online`
  ADD PRIMARY KEY (`id_det_venta`);

--
-- Indexes for table `deuda_clientes`
--
ALTER TABLE `deuda_clientes`
  ADD PRIMARY KEY (`id_deuda_cliente`);

--
-- Indexes for table `direccion_envio`
--
ALTER TABLE `direccion_envio`
  ADD PRIMARY KEY (`id_direccion_envio`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indexes for table `fecha_productos`
--
ALTER TABLE `fecha_productos`
  ADD PRIMARY KEY (`id_fecha`);

--
-- Indexes for table `medios_de_pago`
--
ALTER TABLE `medios_de_pago`
  ADD PRIMARY KEY (`id_med_pago`);

--
-- Indexes for table `medio_pago`
--
ALTER TABLE `medio_pago`
  ADD PRIMARY KEY (`id_medio_pago`);

--
-- Indexes for table `precio_productos`
--
ALTER TABLE `precio_productos`
  ADD PRIMARY KEY (`id_precio`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indexes for table `ventas_online`
--
ALTER TABLE `ventas_online`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datos_deudor`
--
ALTER TABLE `datos_deudor`
  MODIFY `id_datos_deudor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `datos_empleados`
--
ALTER TABLE `datos_empleados`
  MODIFY `id_datos` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datos_envio`
--
ALTER TABLE `datos_envio`
  MODIFY `id_datos_envio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `datos_pago`
--
ALTER TABLE `datos_pago`
  MODIFY `id_datos_pago` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `datos_personales_envio`
--
ALTER TABLE `datos_personales_envio`
  MODIFY `id_datos_personales_envio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `datos_usuario`
--
ALTER TABLE `datos_usuario`
  MODIFY `id_datos_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id_detalle_venta` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalle_ventas_online`
--
ALTER TABLE `detalle_ventas_online`
  MODIFY `id_det_venta` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deuda_clientes`
--
ALTER TABLE `deuda_clientes`
  MODIFY `id_deuda_cliente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `direccion_envio`
--
ALTER TABLE `direccion_envio`
  MODIFY `id_direccion_envio` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fecha_productos`
--
ALTER TABLE `fecha_productos`
  MODIFY `id_fecha` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medios_de_pago`
--
ALTER TABLE `medios_de_pago`
  MODIFY `id_med_pago` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medio_pago`
--
ALTER TABLE `medio_pago`
  MODIFY `id_medio_pago` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `precio_productos`
--
ALTER TABLE `precio_productos`
  MODIFY `id_precio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ventas_online`
--
ALTER TABLE `ventas_online`
  MODIFY `id_venta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito_usuarios`
--
ALTER TABLE `carrito_usuarios`
  ADD CONSTRAINT `carrito_usuarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
