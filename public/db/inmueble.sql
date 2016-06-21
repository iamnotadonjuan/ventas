-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2016 a las 22:21:26
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmueble`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `come_iden` int(11) NOT NULL,
  `usua_iden` int(11) NOT NULL,
  `inmu_iden` int(11) NOT NULL,
  `come_fech` date NOT NULL,
  `come_come` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Comentarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `inmu_iden` int(11) NOT NULL,
  `inmu_nomb` varchar(100) NOT NULL,
  `inmu_desc` text NOT NULL,
  `inmu_valo` double NOT NULL,
  `inmu_tine` enum('Arriendo','Venta') NOT NULL,
  `inmu_npla` int(11) NOT NULL,
  `inmu_fech` date NOT NULL,
  `inmu_nhab` smallint(6) NOT NULL,
  `inmu_nban` smallint(6) NOT NULL,
  `inmu_npar` smallint(6) NOT NULL,
  `inmu_npis` smallint(6) NOT NULL,
  `inmu_m2c` int(11) NOT NULL,
  `inmu_m2nc` int(11) NOT NULL,
  `inmu_terr` tinyint(1) NOT NULL,
  `inmu_estr` int(11) NOT NULL,
  `inmu_agua` tinyint(1) NOT NULL,
  `inmu_luz` tinyint(1) NOT NULL,
  `inmu_gas` tinyint(1) NOT NULL,
  `inmu_tele` int(1) NOT NULL,
  `inmu_bbq` tinyint(1) NOT NULL,
  `inmu_prop` enum('Oferta','Demanda') NOT NULL,
  `inmu_feed` date NOT NULL,
  `inmu_fefi` date NOT NULL,
  `inmu_est` enum('Activo','Desactivado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Inmuebles';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles_fotos`
--

CREATE TABLE `inmuebles_fotos` (
  `info_iden` int(11) NOT NULL,
  `inmu_iden` int(11) DEFAULT NULL,
  `info_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_deseos`
--

CREATE TABLE `lista_deseos` (
  `lide_iden` int(11) NOT NULL,
  `inmu_iden` int(11) NOT NULL,
  `usua_iden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Lista de deseos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `tius_iden` int(11) NOT NULL,
  `tius_nomb` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Tipo Usuarios';

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`tius_iden`, `tius_nomb`) VALUES
(1, 'Administrador'),
(2, 'Oferente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tius_iden` int(11) NOT NULL,
  `usua_nomb` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `usua_tele` varchar(20) NOT NULL,
  `usua_dire` varchar(100) NOT NULL,
  `usua_conf` tinyint(1) DEFAULT NULL,
  `usua_regi` tinyint(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Usuarios';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tius_iden`, `usua_nomb`, `email`, `password`, `usua_tele`, `usua_dire`, `usua_conf`, `usua_regi`, `updated_at`, `created_at`) VALUES
(6, 2, 'Juan', 'juancamargo93@outlook.com', '$2y$10$I/JQZgvx2nf8BepEUd.P7.YgW.x5aDcu6u3nUz.JxQNLChDd88OUu', '3013096569', 'Cra 3 # 42 - 36', NULL, NULL, '2016-06-22 00:58:19', '2016-06-22 00:58:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`come_iden`),
  ADD KEY `usua_iden` (`usua_iden`),
  ADD KEY `inmu_iden` (`inmu_iden`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`inmu_iden`);

--
-- Indices de la tabla `inmuebles_fotos`
--
ALTER TABLE `inmuebles_fotos`
  ADD PRIMARY KEY (`info_iden`),
  ADD KEY `info_inmu` (`inmu_iden`);

--
-- Indices de la tabla `lista_deseos`
--
ALTER TABLE `lista_deseos`
  ADD PRIMARY KEY (`lide_iden`),
  ADD KEY `inmu_iden` (`inmu_iden`),
  ADD KEY `usua_iden` (`usua_iden`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`tius_iden`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tius_iden` (`tius_iden`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `come_iden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `inmu_iden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inmuebles_fotos`
--
ALTER TABLE `inmuebles_fotos`
  MODIFY `info_iden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lista_deseos`
--
ALTER TABLE `lista_deseos`
  MODIFY `lide_iden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `tius_iden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`usua_iden`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`inmu_iden`) REFERENCES `inmuebles` (`inmu_iden`);

--
-- Filtros para la tabla `inmuebles_fotos`
--
ALTER TABLE `inmuebles_fotos`
  ADD CONSTRAINT `info_inmu` FOREIGN KEY (`inmu_iden`) REFERENCES `inmuebles` (`inmu_iden`);

--
-- Filtros para la tabla `lista_deseos`
--
ALTER TABLE `lista_deseos`
  ADD CONSTRAINT `lista_deseos_ibfk_1` FOREIGN KEY (`inmu_iden`) REFERENCES `inmuebles` (`inmu_iden`),
  ADD CONSTRAINT `lista_deseos_ibfk_2` FOREIGN KEY (`usua_iden`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tius_iden`) REFERENCES `tipos_usuarios` (`tius_iden`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
