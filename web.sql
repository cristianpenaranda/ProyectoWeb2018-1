-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2018 a las 06:57:42
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drogueria`
--

CREATE TABLE `drogueria` (
  `nit` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `encargado` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `drogueria`
--

INSERT INTO `drogueria` (`nit`, `nombre`, `direccion`, `telefono`, `encargado`) VALUES
('830011670-3', 'Drogas La Rebaja', 'Calle 15 #11-27 Barrio Aeropuerto', '5757374', 'Andres Perez'),
('890562136-1', 'Drogueria Inglesa', 'Calle 6N #11E-24 Barrio Guimaral', '5744500', 'Carlos Castro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `id` int(10) NOT NULL,
  `funcionario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Aspecto1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Aspecto2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Aspecto3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Aspecto4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Aspecto5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Aspecto6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Aspecto7` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `calificacion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `resultado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_drogueria`
--

CREATE TABLE `formato_drogueria` (
  `drogueria` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `formato` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `nombre`, `apellidos`, `telefono`, `correo`, `direccion`, `clave`, `tipo`) VALUES
('1090472049', 'Karen ', 'Picón', '3102578076', 'lorenak0113@hotmail.com', 'Av 5B # 5-23 Prados del Este', '1234', 'Funcionario'),
('1090491573', 'Cristian', 'Peñaranda', '3109876543', 'cristiancamilops95@gmail.com', 'Calle 8C # 0-09 Trigal del Norte', '1234', 'Administrador'),
('1090494143', 'Alexander', 'Peñaloza', '3209876464', 'alexanderpenaloza3@gmail.com', 'Av 5 # 8-12 Barrio Aeropuerto', '1234', 'Funcionario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `drogueria`
--
ALTER TABLE `drogueria`
  ADD PRIMARY KEY (`nit`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funcionario` (`funcionario`);

--
-- Indices de la tabla `formato_drogueria`
--
ALTER TABLE `formato_drogueria`
  ADD PRIMARY KEY (`drogueria`,`formato`),
  ADD KEY `formato` (`formato`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formato`
--
ALTER TABLE `formato`
  ADD CONSTRAINT `formato_ibfk_1` FOREIGN KEY (`funcionario`) REFERENCES `persona` (`cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `formato_drogueria`
--
ALTER TABLE `formato_drogueria`
  ADD CONSTRAINT `formato_drogueria_ibfk_1` FOREIGN KEY (`drogueria`) REFERENCES `drogueria` (`nit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `formato_drogueria_ibfk_2` FOREIGN KEY (`formato`) REFERENCES `formato` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
