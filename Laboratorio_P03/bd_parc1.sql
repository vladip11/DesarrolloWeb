-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 09:50:39
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_parc1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_A` int(10) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(30) COLLATE utf8_bin NOT NULL,
  `cu` varchar(8) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `cod_carrera` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID_A`, `nombre`, `apellido`, `cu`, `sexo`, `cod_carrera`) VALUES
(1, 'ruddy', 'plata', '111268', 'masculino', 'cco'),
(3, 'juan', 'palacios', '123-123', 'masculino', 'CCO'),
(4, 'carlos', 'duran', '12-151', 'masculino', 'TIC'),
(11, 'patricia', 'ortiz', '12-564', 'femenino', 'TIC'),
(12, 'jorge', 'perez', '37-167', 'masculino', 'SIS'),
(13, 'marcelo', 'duran', '111-269', 'masculino', 'CCO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `ID_C` int(10) NOT NULL,
  `cod_carrera` varchar(8) COLLATE utf8_bin NOT NULL,
  `nombreC` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`ID_C`, `cod_carrera`, `nombreC`) VALUES
(1, 'CCO', 'Ing. Ciencias de la Computacion'),
(2, 'SIS', 'Ing. Sistemas'),
(3, 'TIC', 'Ing.tecnologias de la informacion y seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `Nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`login`, `contrasena`, `nombres`, `apellidos`, `email`, `sexo`, `Nivel`) VALUES
('admSergio', 'drago', 'sergio omar', 'sandy cordova', 'sergiosandy.realnetwork@gmail.com', 'masculino', 0),
('fernando', 'network', 'fernando', 'lopez', 'fernan@hotmail.com', 'masculino', 1),
('sadasd', 'sadasd', 'asda', 'sadasd', 'asdasd', 'femenino', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_A`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`ID_C`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID_A` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `ID_C` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
