-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2014 a las 01:41:52
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `stuan_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `Id_album` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo_album` varchar(500) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Foto_portada` varchar(100) DEFAULT NULL,
  `Descrip_corta` varchar(500) DEFAULT NULL,
  `Descrip_larga` blob,
  `Principal` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `album`
--

INSERT INTO `album` (`Id_album`, `Titulo_album`, `Fecha`, `Foto_portada`, `Descrip_corta`, `Descrip_larga`, `Principal`) VALUES
(1, 'Album1', '2014-08-19', 'img/pic/Album1-portada.jpg', 'hola ', 0x686f6c61, 0),
(2, 'Album2', '2014-08-19', 'img/pic/Album2-portada.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `Id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `Id_album` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=20 ;

--
-- Volcar la base de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`Id_imagen`, `Id_album`, `nombre`) VALUES
(1, 1, 'img/pic/Album1-0.jpg'),
(2, 1, 'img/pic/Album1-1.jpg'),
(3, 2, 'img/pic/Album2-0.jpg'),
(5, 2, 'img/pic/Album2-2.jpg'),
(6, 2, 'img/pic/Album2-3.jpg'),
(7, 1, 'img/pic/Album11408477681-0.jpg'),
(8, 1, 'img/pic/Album11408477681-1.jpg'),
(10, 1, 'img/pic/Album11408477681-3.jpg'),
(11, 1, 'img/pic/Album11408477681-4.jpg'),
(12, 1, 'img/pic/Album11408477681-5.jpg'),
(13, 1, 'img/pic/Album11408477681-6.jpg'),
(14, 1, 'img/pic/Album11408477681-7.jpg'),
(15, 1, 'img/pic/Album11408498462-0.jpg'),
(16, 1, 'img/pic/Album11408498462-1.jpg'),
(17, 1, 'img/pic/Album11408498462-2.jpg'),
(18, 1, 'img/pic/Album11408498462-3.jpg'),
(19, 1, 'img/pic/Album11408498462-4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_user` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_user`, `User`, `Password`, `Name`, `Email`) VALUES
(1, 'root', 'ofravargas', 'Solu-App', NULL),
(2, 'STUAN', 'sindicatoparatodos...', 'Sindicato de trabajadores de la UAN', 'magia_freak@hotmail.com ');
