-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2013 a las 20:51:00
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdpersonas`
--
CREATE DATABASE IF NOT EXISTS `bdpersonas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bdpersonas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `idCurso` int(3) NOT NULL,
  `nombreCurso` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `horas` int(3) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idCurso`, `nombreCurso`, `horas`) VALUES
(1, 'XHTML y CSS', 45),
(2, 'PHP y MySQL', 60),
(3, 'Desarrollo de aplicaciones con Android', 100),
(4, 'Seguridad en PHP', 75),
(5, 'Joomla 1.6', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `idPersona` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `eCivil` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPersona`, `nombre`, `apellido`, `edad`, `eCivil`, `genero`) VALUES
(1, 'Ana', 'Garcia', 33, 's', 'm'),
(2, 'Aberto', 'Ruiz', 21, 's', 'h'),
(3, 'Elena', 'Redrado', 41, 'c', 'm'),
(4, 'David', 'Meca', 36, 's', 'h'),
(5, 'Juan', 'Diego', 44, 'd', 'h'),
(6, 'Luisa', 'Martos', 54, 'd', 'm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_cursos`
--

CREATE TABLE IF NOT EXISTS `personas_cursos` (
  `idPersona` int(3) NOT NULL,
  `idCurso` int(3) NOT NULL,
  PRIMARY KEY (`idPersona`,`idCurso`),
  KEY `idCurso` (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personas_cursos`
--

INSERT INTO `personas_cursos` (`idPersona`, `idCurso`) VALUES
(5, 1),
(6, 1),
(7, 1),
(2, 3),
(7, 3),
(7, 4),
(6, 5),
(7, 5);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas_cursos`
--
ALTER TABLE `personas_cursos`
  ADD CONSTRAINT `personas_cursos_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`idCurso`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
