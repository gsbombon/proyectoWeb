-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-01-2020 a las 16:51:04
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_tecnicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `ARE_ID` int(11) NOT NULL,
  `ARE_NOMBRE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`ARE_ID`, `ARE_NOMBRE`) VALUES
(1, 'C. EXACTAS'),
(2, 'C. SOCIALES'),
(3, 'C. DE LA VIDA'),
(4, 'OTROS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `MAT_ID` int(11) NOT NULL,
  `PAR_ID` int(11) NOT NULL,
  `PROF_ID` int(11) NOT NULL,
  `HOR_ID` int(11) NOT NULL,
  `CLA_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`MAT_ID`, `PAR_ID`, `PROF_ID`, `HOR_ID`, `CLA_ID`) VALUES
(1, 1, 1, 0, 1),
(2, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `HOR_ID` int(11) NOT NULL,
  `HOR_INICIO` time DEFAULT NULL,
  `HOR_FINAL` time DEFAULT NULL,
  `HOR_DIA` varchar(10) DEFAULT NULL,
  `HOR_NUMERO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`HOR_ID`, `HOR_INICIO`, `HOR_FINAL`, `HOR_DIA`, `HOR_NUMERO`) VALUES
(0, '07:00:00', '08:00:00', 'LUNES', 1),
(1, '07:00:00', '08:00:00', 'MARTES', 1),
(2, '07:00:00', '08:00:00', 'MIERCOLES', 1),
(3, '07:00:00', '08:00:00', 'JUEVES', 1),
(4, '07:00:00', '08:00:00', 'VIERNES', 1),
(10, '08:00:00', '09:00:00', 'LUNES', 2),
(11, '08:00:00', '09:00:00', 'MARTES', 2),
(12, '08:00:00', '09:00:00', 'MIERCOLES', 2),
(13, '08:00:00', '09:00:00', 'JUEVES', 2),
(14, '08:00:00', '09:00:00', 'VIERNES', 2),
(20, '09:00:00', '10:00:00', 'LUNES', 3),
(21, '09:00:00', '10:00:00', 'MARTES', 3),
(22, '09:00:00', '10:00:00', 'MIERCOLES', 3),
(23, '09:00:00', '10:00:00', 'JUEVES', 3),
(24, '09:00:00', '10:00:00', 'VIERNES', 3),
(30, '10:30:00', '11:30:00', 'LUNES', 4),
(31, '10:30:00', '11:30:00', 'MARTES', 4),
(32, '10:30:00', '11:30:00', 'MIERCOLES', 4),
(33, '10:30:00', '11:30:00', 'JUEVES', 4),
(34, '10:30:00', '11:30:00', 'VIERNES', 4),
(40, '11:30:00', '12:30:00', 'LUNES', 5),
(41, '11:30:00', '12:30:00', 'MARTES', 5),
(42, '11:30:00', '12:30:00', 'MIERCOLES', 5),
(43, '11:30:00', '12:30:00', 'JUEVES', 5),
(44, '11:30:00', '12:30:00', 'VIERNES', 5),
(50, '12:30:00', '13:30:00', 'LUNES', 6),
(51, '12:30:00', '13:30:00', 'MARTES', 6),
(52, '12:30:00', '13:30:00', 'MIERCOLES', 6),
(53, '12:30:00', '13:30:00', 'JUEVES', 6),
(54, '12:30:00', '13:30:00', 'VIERNES', 6),
(60, '13:30:00', '14:30:00', 'LUNES', 7),
(61, '13:30:00', '14:30:00', 'MARTES', 7),
(62, '13:30:00', '14:30:00', 'MIERCOLES', 7),
(63, '13:30:00', '14:30:00', 'JUEVES', 7),
(64, '13:30:00', '14:30:00', 'VIERNES', 7),
(70, '14:30:00', '15:30:00', 'LUNES', 8),
(71, '14:30:00', '15:30:00', 'MARTES', 8),
(72, '14:30:00', '15:30:00', 'MIERCOLES', 8),
(73, '14:30:00', '15:30:00', 'JUEVES', 8),
(74, '14:30:00', '15:30:00', 'VIERNES', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intentos`
--

CREATE TABLE `intentos` (
  `usuario` varchar(20) NOT NULL,
  `intentos` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `MAT_ID` int(11) NOT NULL,
  `MAT_NOMBRE` varchar(20) NOT NULL,
  `MAT_HORAS` int(11) DEFAULT NULL,
  `MAT_NIVEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`MAT_ID`, `MAT_NOMBRE`, `MAT_HORAS`, `MAT_NIVEL`) VALUES
(1, 'LENGUA Y LITERATURA', 6, 8),
(2, 'MATEMATICA', 6, 8),
(3, 'CIENCIAS NATURALES', 4, 8),
(4, 'ESTUDIOS SOCIALES', 4, 8),
(5, 'EDUCACIÓN ARTÍSTICA', 2, 8),
(6, 'EDUCACIÓN FÍSICA', 6, 8),
(7, 'INGLES', 6, 8),
(8, 'LENGUA Y LITERATURA', 6, 9),
(9, 'MATEMATICA', 6, 9),
(10, 'CIENCIAS NATURALES', 4, 9),
(11, 'ESTUDIOS SOCIALES', 4, 9),
(12, 'EDUCACIÓN ARTÍSTICA', 2, 9),
(13, 'EDUCACIÓN FÍSICA', 6, 9),
(14, 'INGLES', 6, 9),
(15, 'OPTATIVA', 4, 8),
(16, 'PROYECTOS', 2, 8),
(17, 'OPTATIVA', 4, 9),
(18, 'PROYECTOS', 2, 9),
(19, 'LENGUA Y LITERATURA', 6, 10),
(20, 'MATEMATICA', 6, 10),
(21, 'CIENCIAS NATURALES', 4, 10),
(22, 'ESTUDIOS SOCIALES', 4, 10),
(23, 'EDUCACIÓN ARTÍSTICA', 2, 10),
(24, 'EDUCACIÓN FÍSICA', 6, 10),
(25, 'INGLES', 6, 10),
(26, 'OPTATIVA', 4, 10),
(27, 'PROYECTOS', 2, 10),
(28, 'FISICA', 4, 4),
(29, 'QUIMICA', 4, 4),
(30, 'HISTORIA', 4, 4),
(31, 'LENGUA Y LITERATURA', 4, 4),
(32, 'MATEMATICA', 4, 4),
(33, 'INGLES', 6, 4),
(34, 'FILOSOFIA', 4, 4),
(35, 'EDUCACIÓN FÍSICA', 2, 4),
(36, 'EDUCACIÓN ARTÍSTICA', 2, 4),
(37, 'INFORMÁTICA', 2, 4),
(38, 'OPTATIVA', 4, 4),
(39, 'FÍSICO-QUÍMICA', 4, 5),
(40, 'BIOLOGÍA', 4, 5),
(41, 'HISTORIA', 4, 5),
(42, 'LENGUA Y LITERATURA', 4, 5),
(43, 'MATEMATICA', 4, 5),
(44, 'INGLES', 6, 5),
(45, 'EMPRENDIMIENTO ', 2, 5),
(46, 'E. CIUDADANA', 4, 5),
(47, 'EDUCACIÓN ARTÍSTICA', 2, 5),
(48, 'ED. FÍSICA', 2, 5),
(49, 'OPTATIVA', 4, 4),
(50, 'LENGUA Y LITERATURA', 4, 6),
(51, 'MATEMATICA', 4, 6),
(52, 'INGLES', 6, 6),
(53, 'E. CIUDADANA', 4, 6),
(54, 'ED. FÍSICA', 2, 6),
(55, 'OPTATIVA1', 6, 6),
(56, 'OPTATIVA2', 6, 6),
(57, 'OPTATIVA3', 4, 6),
(58, 'OPTATIVA4', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paralelo`
--

CREATE TABLE `paralelo` (
  `PAR_ID` int(11) NOT NULL,
  `PAR_CAPACIDAD` int(11) DEFAULT NULL,
  `PAR_NIVEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paralelo`
--

INSERT INTO `paralelo` (`PAR_ID`, `PAR_CAPACIDAD`, `PAR_NIVEL`) VALUES
(1, 30, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `PROF_ID` int(11) NOT NULL,
  `ARE_ID` int(11) NOT NULL,
  `PROF_NOMBRE` varchar(20) NOT NULL,
  `PROF_TELEFONO` bigint(20) DEFAULT NULL,
  `PROF_APELLIDO` varchar(20) NOT NULL,
  `PROF_CORREO` varchar(30) DEFAULT NULL,
  `PROF_NUMHORAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`PROF_ID`, `ARE_ID`, `PROF_NOMBRE`, `PROF_TELEFONO`, `PROF_APELLIDO`, `PROF_CORREO`, `PROF_NUMHORAS`) VALUES
(1, 1, 'BYRON ', 3202630, 'CONDOR', 'byron1@gmail.com', 30),
(2, 1, 'DAYANA ', 3201524, 'GOMEZ', 'dayana3@hotmail.com', 30),
(3, 2, 'LUIS', 99805472, 'LOACHAMIN', 'lucho2@gmail.com', 30),
(4, 2, 'PEDRO', 3203356, 'FERNANDEZ', 'pedrito@yahoo.com', 30),
(5, 3, 'LEONARDO', 2425971, 'FERNANDEZ', 'leo123@gmail.com', 30),
(6, 3, 'RICARDO', 998097564, 'MILOS', 'ricardo6@gmail.com', 30),
(7, 4, 'ELENA', 845126742, 'GONZALES', 'elenag1@gmail.com', 30),
(8, 4, 'BENJAMIN', 994256074, 'CHAVEZ', 'benjaminch@gmail.com', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_nombre` varchar(20) NOT NULL,
  `usu_apellido` varchar(20) NOT NULL,
  `usu_correo` varchar(30) NOT NULL,
  `usu_contraseña` varchar(20) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `usu_estado` int(11) NOT NULL DEFAULT '0',
  `usu_intentos` int(11) NOT NULL DEFAULT '3',
  `usu_acceso` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_nombre`, `usu_apellido`, `usu_correo`, `usu_contraseña`, `usu_id`, `usu_estado`, `usu_intentos`, `usu_acceso`) VALUES
('JORDY', 'CONDOR', 'jordy@espe.edu.ec', '1234', 2, 1, 2, '00:00:00'),
('VINICIO', 'CONDOR', 'byroncondor@espe.com', 'n5Sspg==', 3, 1, 3, '00:00:00'),
('STEVEN', 'BOMBON', 'pocho@espe.com', 'n5Sspg==', 4, 1, 3, '00:00:00'),
('STEVEN', 'BOMBON', 'pocho1@espe.com', 'opWrow==', 5, 0, 3, '00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ARE_ID`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`MAT_ID`,`PAR_ID`,`PROF_ID`,`HOR_ID`),
  ADD KEY `FK_EDUCA` (`PROF_ID`),
  ADD KEY `FK_LE_PERTENECE` (`HOR_ID`),
  ADD KEY `FK_TIENE` (`PAR_ID`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`HOR_ID`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`MAT_ID`);

--
-- Indices de la tabla `paralelo`
--
ALTER TABLE `paralelo`
  ADD PRIMARY KEY (`PAR_ID`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`PROF_ID`),
  ADD KEY `FK_PERTENECE` (`ARE_ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `FK_EDUCA` FOREIGN KEY (`PROF_ID`) REFERENCES `profesor` (`PROF_ID`),
  ADD CONSTRAINT `FK_LE_PERTENECE` FOREIGN KEY (`HOR_ID`) REFERENCES `horario` (`HOR_ID`),
  ADD CONSTRAINT `FK_SE_IMPARTE` FOREIGN KEY (`MAT_ID`) REFERENCES `materia` (`MAT_ID`),
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`PAR_ID`) REFERENCES `paralelo` (`PAR_ID`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `FK_PERTENECE` FOREIGN KEY (`ARE_ID`) REFERENCES `area` (`ARE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
