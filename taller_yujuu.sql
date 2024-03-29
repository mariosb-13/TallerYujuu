-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2024 a las 14:46:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller_yujuu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coche`
--

CREATE TABLE `coche` (
  `id_coche` int(2) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `matricula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `coche`
--

INSERT INTO `coche` (`id_coche`, `marca`, `modelo`, `matricula`) VALUES
(1, 'BMW', 'X8', '1234ZXC'),
(2, 'AUDI', 'R8', '0001BBB'),
(11, 'SEAT', 'LEON', '1234MMM'),
(12, 'PEUGEOT', '208', '5478BBD'),
(13, 'ALFA ROMEO', 'TONALE', '3256LKJ'),
(14, 'MERCEDES', 'AMG ', '8954KLM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE `piezas` (
  `id_pieza` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`id_pieza`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Motor', 'Motor de BMW', 500),
(2, 'Pastilla Freno', 'Frenos de audi', 100),
(3, 'Cambio levas', 'Levas', 300),
(4, 'Tubo Escape', 'Limpieza tubo escape', 75),
(5, 'Aceite', 'Cambio de aceite', 20),
(6, 'Repro', 'Reprogramación centralita', 700),
(7, 'Filtro', 'Cambio de filtro', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `id_reparacion` int(5) NOT NULL,
  `id_coche` int(5) NOT NULL,
  `id_pieza` int(5) NOT NULL,
  `Nombre_pieza` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `coste` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id_reparacion`, `id_coche`, `id_pieza`, `Nombre_pieza`, `fecha`, `coste`) VALUES
(1, 1, 1, 'Cambio de Motor ', '2024-02-07', 1000),
(2, 2, 2, 'Renovación de pastillas de freno', '2017-01-03', 120),
(3, 13, 3, 'Levas', '2015-02-10', 350),
(4, 12, 4, 'Limpieza Tubo Escape', '2024-02-01', 100),
(5, 12, 5, 'Cambio Aceite Motor', '2023-08-23', 65),
(6, 14, 6, 'Reprogramación centralita', '2014-02-14', 1200),
(7, 11, 7, 'Cambio de filtro', '2022-10-19', 95);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coche`
--
ALTER TABLE `coche`
  ADD PRIMARY KEY (`id_coche`),
  ADD UNIQUE KEY `matricula` (`matricula`),
  ADD KEY `id_coche` (`id_coche`);

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`id_pieza`),
  ADD KEY `id_pieza` (`id_pieza`),
  ADD KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id_reparacion`),
  ADD KEY `id_coche` (`id_coche`),
  ADD KEY `id_pieza` (`id_pieza`),
  ADD KEY `Nombre pieza` (`Nombre_pieza`),
  ADD KEY `Nombre pieza_2` (`Nombre_pieza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coche`
--
ALTER TABLE `coche`
  MODIFY `id_coche` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `id_pieza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `id_reparacion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `reparaciones_ibfk_1` FOREIGN KEY (`id_pieza`) REFERENCES `piezas` (`id_pieza`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reparaciones_ibfk_2` FOREIGN KEY (`id_coche`) REFERENCES `coche` (`id_coche`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
