-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2022 a las 17:35:33
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `icanh_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `com_id` int(11) NOT NULL,
  `tramite_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_exh`
--

CREATE TABLE `comentarios_exh` (
  `com_id` int(11) NOT NULL,
  `tramite_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

CREATE TABLE `tramite` (
  `id_tramite` int(11) NOT NULL,
  `tipodoc` varchar(30) NOT NULL,
  `otrotip` varchar(30) DEFAULT NULL,
  `numdoc` varchar(30) NOT NULL,
  `pnombre` varchar(30) NOT NULL,
  `snombre` varchar(30) DEFAULT NULL,
  `papellido` varchar(30) DEFAULT NULL,
  `sapellido` varchar(30) DEFAULT NULL,
  `profesion` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `entidadvinc` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `numaut` varchar(30) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `numcert` varchar(30) NOT NULL,
  `nomproyecto` varchar(30) NOT NULL,
  `desctipo` varchar(150) NOT NULL,
  `descmet` varchar(150) NOT NULL,
  `descmate` varchar(150) NOT NULL,
  `cantidad` int(30) NOT NULL,
  `anexos` varchar(150) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `institucion` varchar(30) NOT NULL,
  `lugar` varchar(30) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_retorno` date NOT NULL,
  `nombre_encargado` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite_detalle`
--

CREATE TABLE `tramite_detalle` (
  `tick_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `tick_estado` varchar(30) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite_det_exh`
--

CREATE TABLE `tramite_det_exh` (
  `tick_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `tick_estado` varchar(30) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite_exh`
--

CREATE TABLE `tramite_exh` (
  `id_tramite` int(11) NOT NULL,
  `num_certf` varchar(30) NOT NULL,
  `nom_solic` varchar(150) NOT NULL,
  `tipo_doc` varchar(30) NOT NULL,
  `cual` varchar(30) DEFAULT NULL,
  `num_doc` varchar(150) NOT NULL,
  `num_piezas` int(30) NOT NULL,
  `p_nombre` varchar(30) NOT NULL,
  `s_nombre` varchar(30) DEFAULT NULL,
  `p_apellido` varchar(30) NOT NULL,
  `s_apellido` varchar(30) DEFAULT NULL,
  `tipo_doc_r` varchar(30) NOT NULL,
  `cual_r` varchar(30) DEFAULT NULL,
  `num_doc_r` varchar(30) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `f_inicion_exp` date NOT NULL,
  `f_final_exp` date NOT NULL,
  `pais` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `lugar` varchar(150) NOT NULL,
  `nombre_exp` varchar(150) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_retorno` date NOT NULL,
  `anexos` varchar(150) NOT NULL,
  `piezas` varchar(150) NOT NULL,
  `datos_adic` varchar(150) DEFAULT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_mod` date DEFAULT NULL,
  `fecha_elim` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nombre`, `apellido`, `correo`, `pass`, `rol_id`, `fecha_creacion`, `fecha_mod`, `fecha_elim`, `estado`) VALUES
(1, 'admin', 'admin', 'correopruebasphp2022@gmail.com', '$2y$10$E6llurAZ.3NUalzKNTTR1OOzyQ5hCt.93q.ieqX1UpJjVy9LirT7K', 2, '2022-03-08', '0000-00-00', '0000-00-00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `tramite_id` (`tramite_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `comentarios_exh`
--
ALTER TABLE `comentarios_exh`
  ADD PRIMARY KEY (`com_id`);

--
-- Indices de la tabla `tramite`
--
ALTER TABLE `tramite`
  ADD PRIMARY KEY (`id_tramite`);

--
-- Indices de la tabla `tramite_detalle`
--
ALTER TABLE `tramite_detalle`
  ADD PRIMARY KEY (`tick_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tramite_det_exh`
--
ALTER TABLE `tramite_det_exh`
  ADD PRIMARY KEY (`tick_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tramite_exh`
--
ALTER TABLE `tramite_exh`
  ADD PRIMARY KEY (`id_tramite`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios_exh`
--
ALTER TABLE `comentarios_exh`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramite`
--
ALTER TABLE `tramite`
  MODIFY `id_tramite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramite_detalle`
--
ALTER TABLE `tramite_detalle`
  MODIFY `tick_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramite_det_exh`
--
ALTER TABLE `tramite_det_exh`
  MODIFY `tick_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramite_exh`
--
ALTER TABLE `tramite_exh`
  MODIFY `id_tramite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`tramite_id`) REFERENCES `tramite` (`id_tramite`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);

--
-- Filtros para la tabla `tramite_detalle`
--
ALTER TABLE `tramite_detalle`
  ADD CONSTRAINT `tramite_detalle_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tramite_detalle_ibfk_2` FOREIGN KEY (`tick_id`) REFERENCES `tramite` (`id_tramite`);

--
-- Filtros para la tabla `tramite_det_exh`
--
ALTER TABLE `tramite_det_exh`
  ADD CONSTRAINT `tramite_det_exh_ibfk_1` FOREIGN KEY (`tick_id`) REFERENCES `tramite_exh` (`id_tramite`),
  ADD CONSTRAINT `tramite_det_exh_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
