-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-08-2023 a las 20:00:03
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_materia`
--

DROP TABLE IF EXISTS `alumno_materia`;
CREATE TABLE IF NOT EXISTS `alumno_materia` (
  `id_am` int NOT NULL AUTO_INCREMENT,
  `alumno_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  PRIMARY KEY (`id_am`),
  KEY `alumno_id` (`alumno_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumno_materia`
--

INSERT INTO `alumno_materia` (`id_am`, `alumno_id`, `materia_id`, `calificacion`) VALUES
(1, 3, 1, 50),
(2, 3, 2, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro_materia`
--

DROP TABLE IF EXISTS `maestro_materia`;
CREATE TABLE IF NOT EXISTS `maestro_materia` (
  `id_mm` int NOT NULL AUTO_INCREMENT,
  `maestro_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  PRIMARY KEY (`id_mm`),
  KEY `maestro_id` (`maestro_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`) VALUES
(1, 'Matematica1'),
(2, 'Lenguaje 1'),
(3, 'Ciencias 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'admin'),
(2, 'maestro'),
(3, 'alumno'),
(4, 'alumno'),
(5, 'maestro'),
(6, 'alumno'),
(7, 'maestro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_datos`
--

DROP TABLE IF EXISTS `usuarios_datos`;
CREATE TABLE IF NOT EXISTS `usuarios_datos` (
  `id_ud` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `rol_id` int DEFAULT NULL,
  PRIMARY KEY (`id_ud`),
  KEY `rol_id` (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_datos`
--

INSERT INTO `usuarios_datos` (`id_ud`, `nombre`, `direccion`, `fecha_nacimiento`, `rol_id`) VALUES
(1, 'Milthon Sigcha', 'Latacunga', '1985-11-29', 1),
(2, 'Juan', 'Garcia', NULL, 2),
(3, 'Alumno', 'Prueba', NULL, 3),
(4, 'Erika', 'Luna', NULL, 3),
(5, 'Jorge', 'Xavier', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_login`
--

DROP TABLE IF EXISTS `usuarios_login`;
CREATE TABLE IF NOT EXISTS `usuarios_login` (
  `id_ul` int NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) DEFAULT NULL,
  `contra` varchar(150) DEFAULT NULL,
  `datos_id` int DEFAULT NULL,
  `rol_id` int DEFAULT NULL,
  `roles` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_ul`),
  KEY `datos_id` (`datos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_login`
--

INSERT INTO `usuarios_login` (`id_ul`, `correo`, `contra`, `datos_id`, `rol_id`, `roles`) VALUES
(1, 'admin@admin', 'admin', 1, 1, NULL),
(2, 'maestro@maestro', 'maestro', 2, 2, NULL),
(3, 'alumno@alumno', 'alumno', 3, 3, NULL),
(4, 'erika@luna', 'alumno', 4, 3, NULL),
(5, 'jorge@xavier', 'maestro', 5, 2, NULL),
(6, 'luis@gabriel', 'alumno', 6, 2, NULL),
(7, 'enrique@solis', 'maestro', 7, 3, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_datos`
--
ALTER TABLE `usuarios_datos`
  ADD CONSTRAINT `usuarios_datos_ibfk_1` FOREIGN KEY (`id_ud`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `usuarios_datos_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
