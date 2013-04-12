-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-04-2013 a las 22:22:01
-- Versión del servidor: 5.5.29
-- Versión de PHP: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `flisol_dev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendees`
--

CREATE TABLE IF NOT EXISTS `attendees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `tel` text NOT NULL,
  `instala` tinyint(1) NOT NULL DEFAULT '0',
  `turno` varchar(5) NOT NULL DEFAULT 'm',
  `tipopc` varchar(50) NOT NULL DEFAULT 'pc',
  `pc` text,
  `huayra` tinyint(1) NOT NULL DEFAULT '0',
  `perfil` int(10) NOT NULL DEFAULT '0',
  `inst` text,
  `loc` text NOT NULL,
  `notebook` text NOT NULL,
  `page` varchar(100) NOT NULL DEFAULT 'default',
  `cd` tinyint(1) NOT NULL DEFAULT '0',
  `dvdlibre` tinyint(1) NOT NULL DEFAULT '0',
  `dvdeducacion` tinyint(1) NOT NULL DEFAULT '0',
  `dvdjuegos` tinyint(1) NOT NULL DEFAULT '0',
  `dvdjuegos2` tinyint(1) NOT NULL DEFAULT '0',
  `dvdjuegos3` tinyint(1) NOT NULL DEFAULT '0',
  `dvdofimatica` tinyint(1) NOT NULL DEFAULT '0',
  `dvddev` tinyint(1) NOT NULL DEFAULT '0',
  `dvdfuentes` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
