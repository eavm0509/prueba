-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2023 a las 01:07:07
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bddtelevisores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtelevisores`
--

CREATE TABLE `tbtelevisores` (
  `idtelevisor` int(11) NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `serie` varchar(20) DEFAULT NULL,
  `tamaño` varchar(20) DEFAULT NULL,
  `año` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbtelevisores`
--

INSERT INTO `tbtelevisores` (`idtelevisor`, `marca`, `modelo`, `serie`, `tamaño`, `año`) VALUES
(1, 'samsumg', 'abc', '01', '50pulg', '2020'),
(2, 'lg', 'xp', '02', '75pulg', '2022');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbtelevisores`
--
ALTER TABLE `tbtelevisores`
  ADD PRIMARY KEY (`idtelevisor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbtelevisores`
--
ALTER TABLE `tbtelevisores`
  MODIFY `idtelevisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
