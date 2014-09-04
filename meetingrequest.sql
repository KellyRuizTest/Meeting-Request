-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2014 a las 21:01:52
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `meetingrequest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo`
--

CREATE TABLE IF NOT EXISTS `correo` (
  `idCorreo` int(11) NOT NULL AUTO_INCREMENT,
  `cont` int(11) DEFAULT NULL,
  `titulo` varchar(15) DEFAULT NULL,
  `notificacion` text,
  PRIMARY KEY (`idCorreo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `correo` varchar(35) NOT NULL,
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `Correo_idCorreo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `fk_Empleado_Correo1_idx` (`Correo_idCorreo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`correo`, `idEmpleado`, `nombre`, `cedula`, `Correo_idCorreo`) VALUES
('kelly.ruz@samsung.com', 1, 'Kelly Ruiz', 19071590, NULL),
('d.velasquez@samsung.com', 2, 'Daniel Velazques', 17112981, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

CREATE TABLE IF NOT EXISTS `reunion` (
  `idReunion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `hora_init` time NOT NULL,
  `Sala_idSala` int(11) NOT NULL,
  `Empleado_idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idReunion`),
  KEY `fk_Reunion_Sala_idx` (`Sala_idSala`),
  KEY `fk_Reunion_Empleado1_idx` (`Empleado_idEmpleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `reunion`
--

INSERT INTO `reunion` (`idReunion`, `nombre`, `fecha`, `hora_final`, `hora_init`, `Sala_idSala`, `Empleado_idEmpleado`) VALUES
(4, 'CONATEL Meeting', '14/10/2014', '11:20:00', '10:30:00', 10, 1),
(5, 'Government Meeting', '11/11/2014', '09:00:00', '07:00:00', 10, 1),
(6, 'Employees assessment', '21/08/2014', '04:50:00', '04:23:00', 10, 1),
(7, 'Reunion', '26/08/2014', '16:50:00', '15:40:00', 10, 1),
(18, 'asdasd', '27/08/2014', '15:00:00', '14:00:00', 14, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `idSala` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `disponibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `reservacion` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idSala`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`idSala`, `nombre`, `disponibilidad`, `reservacion`) VALUES
(10, 'Sala Ávila', 0, 0),
(11, 'Sala Salto Ángel', 1, 0),
(12, 'Sala Roraima', 0, 0),
(13, 'Sala Orquidea', 0, 0),
(14, 'Sala Turpial', 0, 0),
(15, 'Sala Los Roques', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(42) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Admin', '38238d457a6fc17813ca41490d3d79d2a1bcfdce', 'kelly.ruz@samsung.com'),
(2, 'Kelly', 'c3186b669b290c180b5337352da12975ced7350e', 'kelly.ruizh@gmail.com'),
(3, 'usuarioX', '8cb2237d0679ca88db6464eac60da96345513964', 'd.velasquez@samsung.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_Empleado_Correo1` FOREIGN KEY (`Correo_idCorreo`) REFERENCES `correo` (`idCorreo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `fk_Reunion_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reunion_Sala` FOREIGN KEY (`Sala_idSala`) REFERENCES `sala` (`idSala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
