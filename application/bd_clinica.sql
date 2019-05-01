-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2018 a las 16:28:52
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `tipo_area` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `tipo_area`) VALUES
(1, 'HIDROTERAPIA'),
(2, 'MECANOTERAPIA'),
(3, 'ELECTROTERAPIA'),
(4, 'ELECTRO / MECANO'),
(5, 'VALORACIÓN'),
(6, 'REINGRESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `id` int(11) NOT NULL,
  `numExpediente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `talla` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `masa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edoCivil` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `escolaridad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `colonia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(100) NOT NULL,
  `municipio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telCasa` int(10) NOT NULL,
  `celular` int(10) NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `aviso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `primerVal` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `inicioTto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechaAlt` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `freCardiaca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `freRespiratoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tensArterial` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `temperatura` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `motivoCons` text COLLATE utf8_spanish_ci NOT NULL,
  `antHeredo` text COLLATE utf8_spanish_ci NOT NULL,
  `tratamiento` text COLLATE utf8_spanish_ci NOT NULL,
  `antPersonal` text COLLATE utf8_spanish_ci NOT NULL,
  `conEntorno` text COLLATE utf8_spanish_ci NOT NULL,
  `inspGlobal` text COLLATE utf8_spanish_ci NOT NULL,
  `descLocal` text COLLATE utf8_spanish_ci NOT NULL,
  `expFisica` text COLLATE utf8_spanish_ci NOT NULL,
  `problemaFisio` text COLLATE utf8_spanish_ci NOT NULL,
  `cortoPlazo` text COLLATE utf8_spanish_ci NOT NULL,
  `medianoPlazo` text COLLATE utf8_spanish_ci NOT NULL,
  `largoPlazo` text COLLATE utf8_spanish_ci NOT NULL,
  `diagFuncional` text COLLATE utf8_spanish_ci NOT NULL,
  `planInter` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(160) COLLATE utf8_spanish_ci NOT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(160) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(48) COLLATE utf8_spanish_ci NOT NULL,
  `start` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `start_normal` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `end_normal` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `id_terapeuta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `descripcion`) VALUES
(1, 'SANTA ROSA JAUREGUI'),
(2, 'FELIPE CARRILLO PUERTO'),
(3, 'FELIX FLORES'),
(4, 'EPIGMENIO GONZALEZ'),
(5, 'CENTRO HISTORICO'),
(6, 'CAYETANO RUBIO'),
(7, 'JOSEFA VERGARA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `descripcion`) VALUES
(1, 'AMEALCO DE BONFIL'),
(2, 'APASEO EL ALTO'),
(3, 'ARROYO SECO'),
(4, 'CADEREYTA DE MONTES'),
(5, 'CELAYA, GTO'),
(6, 'COLON'),
(7, 'CORREGIDORA'),
(8, 'EDO DE MEXICO'),
(9, 'EL MARQUES'),
(10, 'EZEQUIEL MONTES'),
(11, 'HUICHAPAN, HIDALGO'),
(12, 'HUIMILPAN'),
(13, 'JALPAN DE SERRA'),
(14, 'LANDA DE MATAMOROS'),
(15, 'PEDRO ESCOBEDO'),
(16, 'PEÑAMILLER'),
(17, 'PINAL DE AMOLES'),
(18, 'QUERETARO'),
(19, 'SAN JOAQUIN'),
(20, 'SAN JUAN DEL RIO'),
(21, 'TEQUISQUIAPAN'),
(22, 'TOLIMAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupacion`
--

CREATE TABLE `ocupacion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ocupacion`
--

INSERT INTO `ocupacion` (`id`, `descripcion`) VALUES
(1, 'ESTUDIANTE'),
(2, 'PEDIATRICO'),
(3, 'EMPLEADO/OBRERO'),
(4, 'JUBILADO'),
(5, 'HOGAR'),
(6, 'PROFESIONISTA'),
(7, 'DESEMPLEADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `num_expediente` varchar(25) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nac` varchar(25) NOT NULL,
  `edad` int(25) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `paciente`
--
DELIMITER $$
CREATE TRIGGER `newID` BEFORE INSERT ON `paciente` FOR EACH ROW BEGIN
	DECLARE contador INT;
	 BEGIN
        SET contador = (SELECT COUNT(*)+1 FROM paciente); 
     IF(contador < 10) THEN
     	SET NEW.num_expediente = CONCAT('000', contador, '/', DATE_FORMAT(NOW(),'%y'));
     ELSE IF(contador < 100) THEN
        SET NEW.num_expediente = CONCAT('00', contador, '/', DATE_FORMAT(NOW(),'%y'));
     ELSE IF(contador < 1000) THEN
        SET NEW.num_expediente = CONCAT('0', contador, '/', DATE_FORMAT(NOW(),'%y'));
     END IF;
     END IF;
     END IF; 
     END;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terapeuta`
--

CREATE TABLE `terapeuta` (
  `id_terapeuta` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `terapeuta`
--

INSERT INTO `terapeuta` (`id_terapeuta`, `nombre_completo`) VALUES
(1, 'LFT. LINA GRIZEL MARIN ROBLES'),
(2, 'LFT. FRANCISCO JAVIER CRUZ GUTIERREZ'),
(3, 'LFT. MARIANA CONCEPCION ELÍAS RAMÍREZ'),
(4, 'LFT. LORENA  ELIZABETH GARDUÑO FONSECA'),
(5, 'LFT. MAYRA PATRICIA GONZALEZ HERNANDEZ'),
(6, 'LFT. CHRISTIAN FERNANDO ARTEAGA ORTIZ'),
(7, 'LFT. CRUZ DEL CARMER SIERRA TAPIA '),
(8, 'LFT. MARIA DOLORES ESTELA YAÑEZ CONTRERAS'),
(12, 'LFT. MARIA GUADALUPE MONRROY PADILLA'),
(13, 'LFT. ROSALINDA ROBLES HERNANDEZ'),
(14, 'LFT. MIRIAN NEGRETE ANDRADE'),
(15, 'LFT. GUSTAVO ARGENIS HERNANDEZ SEGURA'),
(16, 'LFT. SHERIDAN DENNISE ELJURE FLORES '),
(17, 'ESS. NANCY PAOLA FRIAS TREJO '),
(18, 'ESS. JOVANNY GRANO DE GABRIEL'),
(19, 'ESS. JUAN PABLO NIETO LANDEROZ'),
(20, 'ESS. STEPHANIE LEDEZMA TORRES'),
(21, 'ESS. DANIEL ALEJANDRO DE SANTIAGO AGUILAR'),
(22, 'ESS. DANTE MAURICIO POLA SANTOLLO'),
(23, 'ESS. GABRIELA PEREZ OSORNIO'),
(24, 'ESS. JULIO BARRERA MARMOLEJO'),
(25, 'ESS. DANIELA GONZALEZ MEZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cveUsu` varchar(6) NOT NULL,
  `pasUsu` varchar(50) NOT NULL,
  `nomUsu` varchar(50) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `cveUsu`, `pasUsu`, `nomUsu`, `rol`) VALUES
(1, 'recep', '123456', 'Recepcion Clinica', 'RECEPCION'),
(2, 'gus', '123456', 'Gustavo Hernandez', 'FISIOTERAPEUTA'),
(3, 'coor', '123456', 'Coordinador Clinica', 'COORDINADOR'),
(4, 'ensain', '123456', 'Ensain Clinica', 'ENSAIN'),
(5, 'admon', '123456', 'Lilian Galindo', 'ADMINISTRADOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_terapeuta` (`id_terapeuta`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terapeuta`
--
ALTER TABLE `terapeuta`
  ADD PRIMARY KEY (`id_terapeuta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `terapeuta`
--
ALTER TABLE `terapeuta`
  MODIFY `id_terapeuta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_terapeuta`) REFERENCES `terapeuta` (`id_terapeuta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
