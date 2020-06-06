-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2020 a las 23:10:52
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seven`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(11) NOT NULL,
  `colorName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `colorName`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A3.5'),
(5, 'A4'),
(6, 'B1'),
(7, 'B2'),
(8, 'B3'),
(9, 'B4'),
(10, 'C1'),
(11, 'C2'),
(12, 'C3'),
(13, 'C4'),
(14, 'D2'),
(15, 'D3'),
(16, 'D4'),
(17, '62'),
(18, '65'),
(19, '66'),
(20, '81'),
(21, 'Rosa Original'),
(22, 'Rosa Translucido'),
(23, 'R1 Nictone'),
(24, 'R2 Nictone'),
(25, 'Acrílico R2V Kemdent'),
(26, 'Acrílico 26 Pink Vein'),
(27, 'Acrílico Transparente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dentistas`
--

CREATE TABLE `dentistas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `telPersonal` varchar(20) DEFAULT NULL,
  `telConsultorio` varchar(20) DEFAULT NULL,
  `domicilio` varchar(200) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `nUsado` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dentistas`
--

INSERT INTO `dentistas` (`id`, `nombre`, `email`, `telPersonal`, `telConsultorio`, `domicilio`, `color`, `nUsado`, `status`) VALUES
(1, 'MELY', '  ', '  ', '  ', '  ', '#ff0000', 25, 1),
(2, 'ANEEL', '      ', '      ', '      ', '      ', '#276c12', 3, 1),
(3, ' DULCE', '      ', '    ', '      ', '    ', '#9a8d8d', 0, 1),
(4, 'ISABEL', '  ', '  ', '  ', '  ', '#62ecf1', 7, 1),
(5, ' MIRYAM', '    ', '    ', '      ', '    ', '#e5fb3c', 3, 1),
(6, ' BRISA', '      ', '      ', '      ', '      ', '#14616c', NULL, 1),
(7, 'KARLA', '      ', '      ', '      ', '      ', '#804000', 5, 1),
(8, ' SERVANDO', '    ', '    ', '    ', '    ', '#6a6afb', 1, 1),
(9, 'PATRICIA', '    ', '    ', '    ', '    ', '#e18c47', 0, 1),
(10, ' LAURA', '      ', '      ', '      ', '      ', '#ffe747', 0, 1),
(11, 'ROCIO', '    ', '  ', '   ', '   ', '#ff9ffb', 0, 1),
(12, 'LUIS', '          ', '      ', '        ', '        ', '#800040', 1, 1),
(13, 'MARISA', '  ', '  ', '  ', '  ', '#000000', 0, 1),
(14, ' MARYSOL', '    ', '    ', '    ', '    ', '#fb4e04', 1, 1),
(15, 'TERESA', '     ', '     ', '     ', '     ', '#630b9d', 14, 1),
(16, 'IRASEMA', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(17, 'DELTA', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(18, 'ENRIQUE', '        ', '        ', '        ', '        ', '#a5fb3c', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_cabeza`
--

CREATE TABLE `orden_cabeza` (
  `id` int(11) NOT NULL,
  `paciente` varchar(150) NOT NULL,
  `id_dentista` int(11) DEFAULT NULL,
  `fechaEntrante` varchar(150) NOT NULL,
  `fechaSaliente` varchar(150) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_cabeza`
--

INSERT INTO `orden_cabeza` (`id`, `paciente`, `id_dentista`, `fechaEntrante`, `fechaSaliente`, `comentario`, `status`) VALUES
(1, 'ENRIQUETA', 15, '2020-05-25', '2020-05-25', 'INDIVIDUALES PRUEBA DE METAL', 3),
(2, 'gustavo', 15, '2020-05-25', '2020-05-25', '', 1),
(3, '', 8, '2020-05-25', '2020-05-25', '', 1),
(4, 'sara lopez ', 17, '2020-05-25', '2020-05-25', '', 1),
(5, 'margarita', 1, '2020-05-25', '2020-05-25', '', 4),
(6, 'lina godinez', 2, '2020-05-25', '2020-05-25', 'puente', 1),
(7, '', 7, '2020-05-25', '2020-05-25', '', 1),
(8, 'jazmin fragozo', 5, '2020-05-25', '2020-05-25', 'a prueba de metal', 1),
(9, 'DOLORES', 5, '2020-05-25', '2020-05-25', '', 1),
(10, 'PAZ', 7, '2020-05-25', '2020-05-25', 'INFERIOR', 1),
(11, 'REYES', 15, '2020-05-25', '2020-05-25', '', 1),
(12, '', 15, '2020-05-25', '2020-05-25', '', 1),
(13, 'RICARDO RODRIGUEZ', 4, '2020-05-25', '2020-05-25', '', 1),
(14, 'PLACIDO PERALTA', 4, '2020-05-25', '', '', 1),
(15, 'DANIELA MENDOZA', 4, '2020-05-25', '2020-05-25', '', 1),
(16, 'RICARDO RODRIGUEZ', 4, '2020-05-25', '2020-05-25', '', 1),
(17, 'MARLEN GARCIA', 4, '2020-05-25', '2020-05-25', '', 1),
(18, 'ANA MA. CORONA', 18, '2020-05-25', '2020-05-25', '13 14 15 16 17. GANCHOS WIPLA EN 12 Y 26', 1),
(19, 'GLORIA', 7, '2020-05-25', '2020-05-28', '31 35 36 41 44 45 46', 1),
(20, 'ZENAIDA', 7, '2020-05-25', '2020-05-25', 'PRUEBA DE CERA\r\n17 14 13 12 11 - 22 24 25', 3),
(21, 'ALICIA CRUZ', 19, '2020-05-25', '2020-05-27', 'INDIVIDUALES', 3),
(22, 'KAROL', 15, '2020-05-25', '2020-05-28', '', 4),
(23, 'MIGUEL', 1, '2020-05-25', '2020-05-29', '', 1),
(24, 'EDGAR', 1, '2020-05-25', '2020-05-29', '', 1),
(25, 'PAOLA', 1, '2020-05-25', '2020-05-29', '', 1),
(26, 'SERGIO', 1, '2020-05-25', '2020-05-29', 'PREPARADA PARA RECIBIR GANCHO SERA PILAR', 1),
(27, 'MIGUEL ALGEL', 15, '2020-05-25', '2020-05-28', 'PLACA SUPERIOR E INFERIOR  A PRUEBA PARA RODILLOS', 2),
(28, 'MAYRA', 15, '2020-05-25', '2020-05-28', '', 4),
(29, 'griselda', 7, '2020-05-26', '2020-05-28', '', 1),
(30, 'luis salvador montiel', 4, '2020-05-27', '2020-06-02', 'checar puntos de contacto', 1),
(31, 'yenny ramos', 4, '2020-05-27', '2020-06-02', '', 1),
(32, 'adela', 1, '2020-05-27', '2020-06-04', '', 1),
(33, 'homero', 1, '2020-05-27', '2020-06-04', '', 1),
(34, 'rosa maria', 15, '2020-05-28', '2020-06-04', 'a nivel de canino dejar preraparado para colocar nichos para descanso de removible ', 1),
(35, 'Lucia elena sanchez', 17, '2020-05-28', '2020-05-29', '', 1),
(36, 'dolores', 15, '2020-05-28', '2020-06-04', '', 1),
(37, 'ana maria', 15, '2020-05-28', '2020-06-04', ' / o.d. 46 me equivoque dayen', 1),
(38, '', 0, '2020-05-28', '', '', 1),
(39, 'LOURDES', 5, '2020-06-01', '2020-06-03', 'MIERCOLES A LAS 9:30', 1),
(40, '', 14, '2020-06-01', '', 'ganchos en el 23 y ganchos en 13 15 y 16', 1),
(41, 'rocio', 15, '2020-06-01', '2020-06-04', '', 1),
(42, 'jesus', 15, '2020-06-01', '2020-06-04', 'colocar nichos para descansos de removible', 1),
(43, 'lilia hernandez', 18, '2020-06-03', '2020-06-09', 'a prueba de metal', 1),
(44, 'xxx', 12, '2020-06-03', '2020-06-10', 'pasa x el a las 11 am', 1),
(45, 'EDUARDO', 15, '2020-06-04', '2020-06-11', 'INDIVIDUALES', 1),
(46, 'CARLOS', 15, '2020-06-04', '2020-06-11', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_productos_description`
--

CREATE TABLE `orden_productos_description` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_producto` int(11) NOT NULL,
  `color` varchar(15) DEFAULT NULL,
  `od` varchar(150) DEFAULT NULL,
  `id_orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_productos_description`
--

INSERT INTO `orden_productos_description` (`id`, `cantidad`, `id_producto`, `color`, `od`, `id_orden`) VALUES
(1, 2, 7, ' ', '21  11  ', 1),
(2, 1, 34, '', '14  ', 2),
(3, 1, 55, 'A3', '12  ', 3),
(4, 2, 32, '', '38  37  ', 4),
(5, 1, 13, '', '27  ', 5),
(6, 4, 7, '', '12  13  14  15  ', 6),
(7, 1, 37, '', '', 7),
(8, 1, 7, 'A2', '16  ', 8),
(9, 1, 20, '', '23  ', 9),
(10, 1, 43, '62', '', 10),
(11, 1, 32, '', '35  ', 11),
(12, 1, 20, 'A3', '21  ', 12),
(13, 1, 33, '', '17  ', 13),
(14, 1, 34, '', '14  ', 14),
(15, 1, 15, '', '15  ', 14),
(16, 1, 12, 'A2 Y A1', '24  ', 15),
(17, 1, 12, '', '37  ', 16),
(18, 1, 34, '', '35  ', 17),
(19, 1, 44, 'A3', '', 18),
(20, 1, 23, 'A3', '', 19),
(21, 1, 22, '62', '', 20),
(22, 6, 7, ' ', '35  34  33  43  16  47  ', 21),
(23, 1, 36, 'A2', '14  ', 22),
(24, 0, 0, '', '', 23),
(25, 1, 13, '', '14  ', 23),
(26, 1, 36, 'A2', '47  ', 24),
(27, 1, 36, 'A2', '16  ', 25),
(28, 1, 7, 'A2', '24  ', 26),
(29, 2, 43, '', '', 27),
(30, 1, 40, '', '14  ', 28),
(31, 1, 36, 'A2', '16  ', 29),
(32, 2, 34, '', '17  18  ', 30),
(33, 1, 33, '', '24  ', 31),
(34, 1, 7, 'A3', '25  ', 32),
(35, 1, 12, 'A2', '11  ', 33),
(36, 2, 7, '', '23  22  ', 34),
(37, 10, 22, 'A2', '26  25  22  21  11  12  13  14  15  16  ', 35),
(38, 7, 23, 'A2', '37  36  35  34  45  16  47  ', 35),
(39, 1, 40, '', '23  ', 36),
(40, 4, 44, 'A2', '27  26  25  24  23', 37),
(41, 1, 40, ' ', '15  12', 38),
(42, 1, 45, 'A2', '12  ', 39),
(43, 4, 44, 'A2', '27  26  25  24  ', 40),
(44, 1, 40, ' ', '15 ', 41),
(45, 2, 14, '', '23  13  ', 42),
(46, 1, 7, 'A3', 'd', 43),
(47, 1, 55, 'C2', '32  ', 44),
(48, 2, 57, '', '27  26  ', 45),
(49, 1, 32, '', '48  ', 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `nUsado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `producto`, `precio`, `nUsado`) VALUES
(1, ' ARTICULADO DIENTES  MONOMAXILAR', ' 750.0 ', NULL),
(2, ' CARILLA DE RESINA ', ' 700.0 ', NULL),
(3, ' CARILLA MAQUILLADA E MAX ', ' 1150 ', NULL),
(4, ' CORONA DE RESINA ', '', 0),
(5, '  CORONA ZR CON PORCELANA', '  ', NULL),
(6, ' CORONA ESTRATIFICADA E MAX ', ' 1400 ', 0),
(7, '  CORONA METAL PORCELANA ', ' ', 8),
(10, ' CORONA PORCELANA PIVOTADA', ' 850.0 ', NULL),
(11, ' CORONA MONOLITICA ZR', ' 1050 ', 0),
(12, '  CORONA E MAX', '  1150  ', 3),
(13, ' CORONA TOTAL METALICA V.B', ' 420.0 ', 2),
(14, '  CORONA TOTAL PLATA', '  430.0  ', 1),
(15, '  CORONA TOTAL DORADA', '  420.0  ', 1),
(16, '  CORONA TOTAL ORO', '  430.0  ', NULL),
(17, ' CUCHARILLA ACRILICO PARA PLACA', ' 180.0 ', NULL),
(18, 'FLEXIBLE HIBRIDO SUPERIOR', '', NULL),
(19, 'FLEXIBLE HIBRIDO INFERIOR', '', NULL),
(20, 'FLEXIBLE UNILATERAL SUPERIOR', '1000', 2),
(21, 'FLEXIBLE  UNILATERAL INFERIOR', '1000', NULL),
(22, 'FLEXIBLE BILATERAL SUPERIOR', '2000', 2),
(23, 'FLEXIBLE BILATERAL INFERIOR', '2000', 2),
(24, 'FLEXIBLE TOTAL SUPERIOR', '2600', NULL),
(25, 'FLEXIBLE TOTAL INFERIOR', '2600', NULL),
(26, 'GANCHO DE ORTODONCIA', '130.0', NULL),
(27, 'GANCHO VACIADO', '250.0', 0),
(28, 'GANCHO WIPLA', '180.0', NULL),
(29, 'GUARDA DE ACETATO', '320.0', NULL),
(30, ' GUARDA BLANQUEAMIENTO', ' 320.0 ', NULL),
(31, 'GUARDA PROCESADA DE ACRILICO', '750.0', 0),
(32, ' INCRUSTACION ', ' 320.0 ', 3),
(33, 'INCRUSTACION DE PLATA', '330.0', 2),
(34, ' INCRUSTACION DORADA', ' 320.0 ', 4),
(35, ' INCRUSTACION ORO', ' 330.0 ', 0),
(36, ' INCRUSTACION DE E-MAX', '', 5),
(37, ' INCRUSTACION RESINA ', ' 500.0 ', 1),
(38, ' POSTE RESINA ', ' 500.0 ', NULL),
(39, ' POSTE ', ' 320.0 ', NULL),
(40, ' POSTE PLATA', ' 330.0 ', 3),
(41, ' POSTE DORADA', ' 320.0 ', 0),
(42, ' PROCESADO PLACA ', ' 850.0 ', NULL),
(43, 'PROSTODONCIA TOTAL ', '1650', 2),
(44, 'PROSTODONCIA PARCIAL', '', 2),
(45, 'PROVISIONAL RAPIDO', '120.0', 1),
(46, 'PROVISIONAL PROCESADO', '190.0', NULL),
(49, '  REBASE DE PLACA', '  800.0  ', NULL),
(50, 'REFUERZO LINGUAL EN WIPLA', '250.0', NULL),
(51, 'REMOVIBLE METILICO ', '170.0', NULL),
(52, ' REPARACION DE PLACA', ' 250.0 ', NULL),
(53, 'REPOSICION DIENTE', '180.0', 0),
(54, 'MAQUILA EMAX INCRUSTACION', '750.0', NULL),
(55, 'MAQUILA EMAX CORONA', '850.0', 2),
(57, ' PRUEBA METAL PORCELANA', ' ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'Oscar', 'O=m');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dentistas`
--
ALTER TABLE `dentistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden_cabeza`
--
ALTER TABLE `orden_cabeza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden_productos_description`
--
ALTER TABLE `orden_productos_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orden` (`id_orden`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `dentistas`
--
ALTER TABLE `dentistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `orden_cabeza`
--
ALTER TABLE `orden_cabeza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `orden_productos_description`
--
ALTER TABLE `orden_productos_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden_productos_description`
--
ALTER TABLE `orden_productos_description`
  ADD CONSTRAINT `orden_productos_description_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `orden_cabeza` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
