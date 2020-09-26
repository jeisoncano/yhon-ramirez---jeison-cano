-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2020 a las 13:18:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `listapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `idnumbre` varchar(11) NOT NULL,
  `birthdate` date NOT NULL,
  `residencecity` varchar(30) NOT NULL,
  `neighborhood` varchar(30) NOT NULL,
  `phonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `list`
--

INSERT INTO `list` (`id`, `name`, `lastname`, `idnumbre`, `birthdate`, `residencecity`, `neighborhood`, `phonenumber`) VALUES
(2, 'yhon', 'perez', '1234567890', '2020-09-16', 'medellin', 'pedregal', 5678),
(3, 'joseff', 'perez', '1234567890', '2015-02-26', 'Caldas', 'pedregal', 5678),
(4, 'joseff', 'perez', '1234567890', '0000-00-00', 'medellin', 'Tejelo', 5678),
(8, 'joseff', 'perez', '1234567890', '0000-00-00', 'medellin', 'pedregal', 5678),
(18, 'joseff', 'perez', '1234567890', '0000-00-00', 'medellin', 'pedregal', 5678),
(21, 'fdfdfgdfgdgdhddghfdffg', '', '', '0000-00-00', '', '', 0),
(22, '', '', '', '0000-00-00', '', '', 0),
(23, '', '', '', '0000-00-00', '', '', 0),
(25, '', '', '', '0000-00-00', '', '', 0),
(26, '', '', '', '0000-00-00', '', '', 0),
(27, '', '', '', '0000-00-00', '', '', 0),
(28, 'ttt', 'fwefw', 'wefw', '2020-09-04', 'wefw', 'wefwe', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
