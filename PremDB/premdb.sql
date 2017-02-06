-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2017 a las 18:14:46
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `premdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambitos`
--

CREATE TABLE `ambitos` (
  `idAmbito` int(2) NOT NULL,
  `nom_ambito` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades`
--

CREATE TABLE `entidades` (
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
  `validado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `idLocalidad` int(11) NOT NULL,
  `nom_localidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numerosidentificativos`
--

CREATE TABLE `numerosidentificativos` (
  `idNumero` int(11) NOT NULL,
  `numIdentificativo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idProvincia` int(11) NOT NULL,
  `nom_provincia` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idProyecto` int(11) NOT NULL,
  `nom_proyecto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `numeroVoluntarios` int(4) DEFAULT NULL,
  `edadMinima` int(1) NOT NULL,
  `edadMaxima` int(2) NOT NULL,
  `idLocalidad` int(11) NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_ambito`
--

CREATE TABLE `proyectos_ambito` (
  `idProyecto` int(11) NOT NULL,
  `idAmbito` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_participantes`
--

CREATE TABLE `proyectos_participantes` (
  `idProyecto` int(11) NOT NULL,
  `cif` varchar(9) COLLATE utf8_unicode_ci NOT NULL
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
  ADD PRIMARY KEY (`idProyecto`,`cif`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambitos`
--
ALTER TABLE `ambitos`
  MODIFY `idAmbito` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `idLocalidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `numerosidentificativos`
--
ALTER TABLE `numerosidentificativos`
  MODIFY `idNumero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
