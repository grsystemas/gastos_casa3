-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2013 a las 20:18:38
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gastos_casa3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ahorros`
--

CREATE TABLE IF NOT EXISTS `ahorros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_ahorro` date NOT NULL,
  `monto_ahorro` decimal(10,2) NOT NULL,
  `detalle_ahorro` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE IF NOT EXISTS `creditos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tarjeta_credito` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `creditos`
--

INSERT INTO `creditos` (`id`, `tarjeta_credito`) VALUES
(1, 'santander'),
(2, 'galicia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debitos`
--

CREATE TABLE IF NOT EXISTS `debitos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tarjeta_debito` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `debitos`
--

INSERT INTO `debitos` (`id`, `tarjeta_debito`) VALUES
(1, 'santander'),
(2, 'hsbc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE IF NOT EXISTS `gastos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_gasto` date NOT NULL,
  `tipo_gasto_id` int(10) NOT NULL,
  `detalle_gasto` varchar(45) NOT NULL,
  `monto_gasto` decimal(10,2) NOT NULL,
  `tipo_pago_id` int(10) NOT NULL,
  `cuota` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` date NOT NULL,
  `monto_ingreso` decimal(10,2) NOT NULL,
  `detalle_ingreso` varchar(45) NOT NULL,
  `tipo_ingreso_id` int(10) NOT NULL,
  `tipo_cobro_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cobros`
--

CREATE TABLE IF NOT EXISTS `tipo_cobros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_cobro` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_cobros`
--

INSERT INTO `tipo_cobros` (`id`, `nombre_tipo_cobro`) VALUES
(1, 'caja_ahorro_santander'),
(2, 'caja_ahorro_hsbc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_gastos`
--

CREATE TABLE IF NOT EXISTS `tipo_gastos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_gasto` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_gastos`
--

INSERT INTO `tipo_gastos` (`id`, `nombre_tipo_gasto`) VALUES
(1, 'fijo'),
(2, 'variable'),
(3, 'comida_limpieza'),
(4, 'mantenimiento'),
(5, 'mejoras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ingresos`
--

CREATE TABLE IF NOT EXISTS `tipo_ingresos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_ingreso` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_ingresos`
--

INSERT INTO `tipo_ingresos` (`id`, `nombre_tipo_ingreso`) VALUES
(1, 'empleado'),
(2, 'empleada'),
(3, 'web_colegio'),
(4, 'reparaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pagos`
--

CREATE TABLE IF NOT EXISTS `tipo_pagos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_pago` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_pagos`
--

INSERT INTO `tipo_pagos` (`id`, `nombre_tipo_pago`) VALUES
(1, 'efectivo'),
(2, 'debito'),
(3, 'credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `password`, `mail`) VALUES
(1, 'gustavo', '1234', 'grsystemas@hotmail.com'),
(2, 'mariana', '1234', 'anairamiglesias@gmail.com'),
(3, 'quaglia', '1234', 'matias.quaglia@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
