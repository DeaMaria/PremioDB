-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2017 a las 18:49:12
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `premdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambitos`
--

CREATE TABLE IF NOT EXISTS `ambitos` (
`idAmbito` int(2) NOT NULL,
  `nom_ambito` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ambitos`
--

INSERT INTO `ambitos` (`idAmbito`, `nom_ambito`) VALUES
(1, 'Ciencias'),
(2, 'Etica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE IF NOT EXISTS `colegios` (
  `CIF` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nom_entidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `idLocalidad` int(11) NOT NULL,
  `domicilio_entidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numIndicativo` int(5) DEFAULT NULL,
  `estatutos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registros` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `compromiso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `validado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades`
--

CREATE TABLE IF NOT EXISTS `entidades` (
  `CIF` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nom_entidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `idLocalidad` int(11) NOT NULL,
  `domicilio_entidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numIndicativo` int(5) DEFAULT NULL,
  `estatutos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registros` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `compromiso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `validado` tinyint(1) DEFAULT NULL,
  `empresa` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entidades`
--

INSERT INTO `entidades` (`CIF`, `nom_entidad`, `responsable`, `telefono`, `idLocalidad`, `domicilio_entidad`, `correo`, `web`, `numIndicativo`, `estatutos`, `registros`, `compromiso`, `validado`, `empresa`) VALUES
('15642', 'prueba1', 'yo', 159487623, 1, 'avd. prueba1', 'prueba1@prueba1.es', 'www.prueba1.es', NULL, 'prueba1.pdf', 'prueba1.pdf', 'prueba1.pdf', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE IF NOT EXISTS `localidades` (
`idLocalidad` int(11) NOT NULL,
  `nom_localidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`idLocalidad`, `nom_localidad`, `idProvincia`) VALUES
(1, 'zaragoza', 1),
(2, 'sevilla', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numerosidentificativos`
--

CREATE TABLE IF NOT EXISTS `numerosidentificativos` (
`idNumero` int(11) NOT NULL,
  `numIdentificativo` int(5) NOT NULL,
  `usado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
`idProvincia` int(11) NOT NULL,
  `nom_provincia` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idProvincia`, `nom_provincia`) VALUES
(1, 'aragon'),
(2, 'andalucia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
`idProyecto` int(11) NOT NULL,
  `nom_proyecto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `numeroVoluntarios` int(4) DEFAULT NULL,
  `edadMinima` int(1) NOT NULL,
  `edadMaxima` int(2) NOT NULL,
  `idLocalidad` int(11) NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numIndicativo` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idProyecto`, `nom_proyecto`, `fechaInicio`, `fechaFin`, `numeroVoluntarios`, `edadMinima`, `edadMaxima`, `idLocalidad`, `direccion`, `descripcion`, `numIndicativo`) VALUES
(1, 'Prueba', '0000-00-00', '0000-00-00', 5, 10, 15, 2, 'vsrtgsrtgs', 'safdsadfcdfre', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_ambito`
--

CREATE TABLE IF NOT EXISTS `proyectos_ambito` (
  `idProyecto` int(11) NOT NULL,
  `idAmbito` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_participantes`
--

CREATE TABLE IF NOT EXISTS `proyectos_participantes` (
  `idProyecto` int(11) NOT NULL,
  `cif` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombreAlumno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `item1` tinyint(4) NOT NULL,
  `item2` tinyint(4) NOT NULL,
  `item3` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambitos`
--
ALTER TABLE `ambitos`
 ADD PRIMARY KEY (`idAmbito`);

--
-- Indices de la tabla `entidades`
--
ALTER TABLE `entidades`
 ADD PRIMARY KEY (`CIF`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
 ADD PRIMARY KEY (`idLocalidad`);

--
-- Indices de la tabla `numerosidentificativos`
--
ALTER TABLE `numerosidentificativos`
 ADD PRIMARY KEY (`idNumero`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
 ADD PRIMARY KEY (`idProvincia`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
 ADD PRIMARY KEY (`idProyecto`);

--
-- Indices de la tabla `proyectos_ambito`
--
ALTER TABLE `proyectos_ambito`
 ADD PRIMARY KEY (`idProyecto`,`idAmbito`);

--
-- Indices de la tabla `proyectos_participantes`
--
ALTER TABLE `proyectos_participantes`
 ADD PRIMARY KEY (`idProyecto`,`cif`,`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambitos`
--
ALTER TABLE `ambitos`
MODIFY `idAmbito` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
MODIFY `idLocalidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `numerosidentificativos`
--
ALTER TABLE `numerosidentificativos`
MODIFY `idNumero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
