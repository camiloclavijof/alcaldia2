-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 20:40:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebasu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `id_datospersonales` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido1` varchar(25) DEFAULT NULL,
  `apellido2` varchar(25) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_documento` varchar(10) DEFAULT NULL,
  `numero_documento1` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `edad` varchar(25) DEFAULT NULL,
  `correo_electronico` varchar(15) DEFAULT NULL,
  `correo_electronico_name` varchar(15) DEFAULT NULL,
  `id_nucleofamiliar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`id_datospersonales`, `nombre`, `apellido1`, `apellido2`, `sexo`, `fecha_nacimiento`, `tipo_documento`, `numero_documento1`, `telefono`, `estado_civil`, `edad`, `correo_electronico`, `correo_electronico_name`, `id_nucleofamiliar`) VALUES
(1, 'Camilo Andrés', 'Clavijo', 'Fernández', 'Hombre', '1997-01-19', 'CC', '1121941590', '3023572837', 'Soltero/a', '25', 'NO', 'no', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo_social`
--

CREATE TABLE `desarrollo_social` (
  `id_desarrollo_social` int(11) NOT NULL,
  `pension_adulto_mayor` varchar(50) DEFAULT NULL,
  `pension_discapacitados` varchar(25) DEFAULT NULL,
  `id_salud` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desarrollo_social`
--

INSERT INTO `desarrollo_social` (`id_desarrollo_social`, `pension_adulto_mayor`, `pension_discapacitados`, `id_salud`) VALUES
(1, 'NO', 'NO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gobierno`
--

CREATE TABLE `gobierno` (
  `id_gobierno` int(11) NOT NULL,
  `comite_gdr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gobierno`
--

INSERT INTO `gobierno` (`id_gobierno`, `comite_gdr`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacienda`
--

CREATE TABLE `hacienda` (
  `id_hacienda` int(11) NOT NULL,
  `beneficio_descuento` varchar(50) DEFAULT NULL,
  `id_umata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hacienda`
--

INSERT INTO `hacienda` (`id_hacienda`, `beneficio_descuento`, `id_umata`) VALUES
(1, 'PREDIAL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nucleofamiliar`
--

CREATE TABLE `nucleofamiliar` (
  `id_nucleofamiliar` int(11) NOT NULL,
  `nombre_conyugue` varchar(50) DEFAULT NULL,
  `primer_apellido` varchar(25) DEFAULT NULL,
  `segundo_apellido` varchar(25) DEFAULT NULL,
  `numero_documento` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `hijos` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `hijos_menores` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `hijos_mayores` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `personas_acargo` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `id_victimas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nucleofamiliar`
--

INSERT INTO `nucleofamiliar` (`id_nucleofamiliar`, `nombre_conyugue`, `primer_apellido`, `segundo_apellido`, `numero_documento`, `hijos`, `hijos_menores`, `hijos_mayores`, `personas_acargo`, `id_victimas`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planeacion`
--

CREATE TABLE `planeacion` (
  `id_planeacion` int(11) NOT NULL,
  `mejoramiento_vivienda` varchar(50) DEFAULT NULL,
  `banco_materiales` varchar(25) DEFAULT NULL,
  `placa_huella` varchar(25) DEFAULT NULL,
  `vivienda_nueva` varchar(25) DEFAULT NULL,
  `polideportivo` varchar(25) DEFAULT NULL,
  `mejoramiento_escuela` varchar(25) NOT NULL,
  `id_hacienda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planeacion`
--

INSERT INTO `planeacion` (`id_planeacion`, `mejoramiento_vivienda`, `banco_materiales`, `placa_huella`, `vivienda_nueva`, `polideportivo`, `mejoramiento_escuela`, `id_hacienda`) VALUES
(1, '0', '0', 'NO', 'NO', 'NO', 'NO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE `salud` (
  `id_salud` int(11) NOT NULL,
  `eps` varchar(50) DEFAULT NULL,
  `eps_name` varchar(25) DEFAULT NULL,
  `sisben` varchar(25) DEFAULT NULL,
  `cl_sisben` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `id_planeacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salud`
--

INSERT INTO `salud` (`id_salud`, `eps`, `eps_name`, `sisben`, `cl_sisben`, `id_planeacion`) VALUES
(1, 'NO', '0', 'NO', 'NOTIENE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sena`
--

CREATE TABLE `sena` (
  `id_sena` int(11) NOT NULL,
  `cursos_tecnicos` varchar(50) DEFAULT NULL,
  `id_turismo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sena`
--

INSERT INTO `sena` (`id_sena`, `cursos_tecnicos`, `id_turismo`) VALUES
(1, '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turismo`
--

CREATE TABLE `turismo` (
  `id_turismo` int(11) NOT NULL,
  `nombre_turistico` varchar(50) DEFAULT NULL,
  `telefono_turistico` varchar(25) DEFAULT NULL,
  `direccion_turistico` varchar(25) DEFAULT NULL,
  `id_gobierno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turismo`
--

INSERT INTO `turismo` (`id_turismo`, `nombre_turistico`, `telefono_turistico`, `direccion_turistico`, `id_gobierno`) VALUES
(1, '0', '0', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `umata`
--

CREATE TABLE `umata` (
  `id_umata` int(11) NOT NULL,
  `subsidio_cafe` varchar(50) DEFAULT NULL,
  `cantidad_plantas` varchar(25) DEFAULT NULL,
  `veterinaria` varchar(25) DEFAULT NULL,
  `tipo_animal` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `tipo_remedio` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `feria_ganadera` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_finca` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `cantidad_reses` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `insumos_comagu` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `credito_agropecuario` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `vivero` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `mejoramiento_genetico` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `asistencia_tecnica` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `perdida_agropecuaria` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `huerta_casera` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `apoyo_proyectos` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `mercado_campesino` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `id_sena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `umata`
--

INSERT INTO `umata` (`id_umata`, `subsidio_cafe`, `cantidad_plantas`, `veterinaria`, `tipo_animal`, `tipo_remedio`, `feria_ganadera`, `nombre_finca`, `cantidad_reses`, `insumos_comagu`, `credito_agropecuario`, `vivero`, `mejoramiento_genetico`, `asistencia_tecnica`, `perdida_agropecuaria`, `huerta_casera`, `apoyo_proyectos`, `mercado_campesino`, `id_sena`) VALUES
(1, 'NO', '0', '0', '0', '0', 'NO', '0', '0', '0', 'NO', 'NO', 'NO', 'NO', '0', '0', '0', 'NO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `role` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `UserName` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `UserEmail` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `UserPass` varchar(191) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `role`, `UserName`, `UserEmail`, `UserPass`) VALUES
(1, 'admin', 'camilo', 'camilo@gmail.com', 'ee8ef8fb6af83af1e05f9815578df674'),
(2, 'admin', 'jose', 'jose@soporte.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `victimas`
--

CREATE TABLE `victimas` (
  `id_victimas` int(11) NOT NULL,
  `beneficiario_victimas` varchar(50) DEFAULT NULL,
  `id_desarrollo_social` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `victimas`
--

INSERT INTO `victimas` (`id_victimas`, `beneficiario_victimas`, `id_desarrollo_social`) VALUES
(1, 'NO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  ADD PRIMARY KEY (`id_datospersonales`),
  ADD KEY `id_nucleofamiliar` (`id_nucleofamiliar`);

--
-- Indices de la tabla `desarrollo_social`
--
ALTER TABLE `desarrollo_social`
  ADD PRIMARY KEY (`id_desarrollo_social`),
  ADD KEY `id_salud` (`id_salud`);

--
-- Indices de la tabla `gobierno`
--
ALTER TABLE `gobierno`
  ADD PRIMARY KEY (`id_gobierno`);

--
-- Indices de la tabla `hacienda`
--
ALTER TABLE `hacienda`
  ADD PRIMARY KEY (`id_hacienda`),
  ADD KEY `id_umata` (`id_umata`);

--
-- Indices de la tabla `nucleofamiliar`
--
ALTER TABLE `nucleofamiliar`
  ADD PRIMARY KEY (`id_nucleofamiliar`),
  ADD KEY `id_victimas` (`id_victimas`);

--
-- Indices de la tabla `planeacion`
--
ALTER TABLE `planeacion`
  ADD PRIMARY KEY (`id_planeacion`),
  ADD KEY `id_hacienda` (`id_hacienda`),
  ADD KEY `id_hacienda_2` (`id_hacienda`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
  ADD PRIMARY KEY (`id_salud`),
  ADD KEY `id_planeacion` (`id_planeacion`);

--
-- Indices de la tabla `sena`
--
ALTER TABLE `sena`
  ADD PRIMARY KEY (`id_sena`),
  ADD KEY `id_turismo` (`id_turismo`);

--
-- Indices de la tabla `turismo`
--
ALTER TABLE `turismo`
  ADD PRIMARY KEY (`id_turismo`),
  ADD KEY `id_gobierno` (`id_gobierno`);

--
-- Indices de la tabla `umata`
--
ALTER TABLE `umata`
  ADD PRIMARY KEY (`id_umata`),
  ADD KEY `id_sena` (`id_sena`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indices de la tabla `victimas`
--
ALTER TABLE `victimas`
  ADD PRIMARY KEY (`id_victimas`),
  ADD KEY `id_desarrollo_social` (`id_desarrollo_social`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  MODIFY `id_datospersonales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desarrollo_social`
--
ALTER TABLE `desarrollo_social`
  MODIFY `id_desarrollo_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gobierno`
--
ALTER TABLE `gobierno`
  MODIFY `id_gobierno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hacienda`
--
ALTER TABLE `hacienda`
  MODIFY `id_hacienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nucleofamiliar`
--
ALTER TABLE `nucleofamiliar`
  MODIFY `id_nucleofamiliar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `planeacion`
--
ALTER TABLE `planeacion`
  MODIFY `id_planeacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salud`
--
ALTER TABLE `salud`
  MODIFY `id_salud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sena`
--
ALTER TABLE `sena`
  MODIFY `id_sena` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `turismo`
--
ALTER TABLE `turismo`
  MODIFY `id_turismo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `umata`
--
ALTER TABLE `umata`
  MODIFY `id_umata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `victimas`
--
ALTER TABLE `victimas`
  MODIFY `id_victimas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  ADD CONSTRAINT `datospersonales_ibfk_1` FOREIGN KEY (`id_nucleofamiliar`) REFERENCES `nucleofamiliar` (`id_nucleofamiliar`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `desarrollo_social`
--
ALTER TABLE `desarrollo_social`
  ADD CONSTRAINT `desarrollo_social_ibfk_1` FOREIGN KEY (`id_salud`) REFERENCES `salud` (`id_salud`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `hacienda`
--
ALTER TABLE `hacienda`
  ADD CONSTRAINT `hacienda_ibfk_1` FOREIGN KEY (`id_umata`) REFERENCES `umata` (`id_umata`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `nucleofamiliar`
--
ALTER TABLE `nucleofamiliar`
  ADD CONSTRAINT `nucleofamiliar_ibfk_1` FOREIGN KEY (`id_victimas`) REFERENCES `victimas` (`id_victimas`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `planeacion`
--
ALTER TABLE `planeacion`
  ADD CONSTRAINT `planeacion_ibfk_1` FOREIGN KEY (`id_hacienda`) REFERENCES `hacienda` (`id_hacienda`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `salud`
--
ALTER TABLE `salud`
  ADD CONSTRAINT `salud_ibfk_1` FOREIGN KEY (`id_planeacion`) REFERENCES `planeacion` (`id_planeacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sena`
--
ALTER TABLE `sena`
  ADD CONSTRAINT `sena_ibfk_1` FOREIGN KEY (`id_turismo`) REFERENCES `turismo` (`id_turismo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `turismo`
--
ALTER TABLE `turismo`
  ADD CONSTRAINT `turismo_ibfk_1` FOREIGN KEY (`id_gobierno`) REFERENCES `gobierno` (`id_gobierno`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `umata`
--
ALTER TABLE `umata`
  ADD CONSTRAINT `umata_ibfk_1` FOREIGN KEY (`id_sena`) REFERENCES `sena` (`id_sena`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `victimas`
--
ALTER TABLE `victimas`
  ADD CONSTRAINT `victimas_ibfk_1` FOREIGN KEY (`id_desarrollo_social`) REFERENCES `desarrollo_social` (`id_desarrollo_social`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
