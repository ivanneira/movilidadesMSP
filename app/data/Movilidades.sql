-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-01-2017 a las 11:24:00
-- Versión del servidor: 5.7.16-0ubuntu0.16.10.1
-- Versión de PHP: 7.0.8-3ubuntu3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Movilidades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Carnet`
--

CREATE TABLE `Tbl_Carnet` (
  `CarnetID` int(10) NOT NULL,
  `PersonaID` int(10) NOT NULL,
  `FechaOtorgado` date DEFAULT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `LicenciaNro` int(11) DEFAULT NULL,
  `Categoria` char(50) DEFAULT NULL,
  `Clase` char(10) DEFAULT NULL,
  `Observaciones` longtext,
  `GrupoYFactor` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Departamentos`
--

CREATE TABLE `Tbl_Departamentos` (
  `DepartamentoID` int(10) NOT NULL,
  `ProvinciaID` int(10) NOT NULL,
  `Nombre` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_FichaTecnica`
--

CREATE TABLE `Tbl_FichaTecnica` (
  `FichaTecnicaID` int(10) NOT NULL,
  `VehiculoID` int(10) DEFAULT NULL,
  `KmLitro` float DEFAULT NULL COMMENT 'Capacidad por litro rendida por el vehiculo',
  `CapacidadCombustible` float DEFAULT NULL COMMENT 'Capacidad de litros del tanque de combustible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Incidentes`
--

CREATE TABLE `Tbl_Incidentes` (
  `IncidenteID` int(10) NOT NULL,
  `MovilidadID` int(10) DEFAULT NULL,
  `TipoIncidenteID` int(10) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `ProvinciaID` int(10) DEFAULT NULL,
  `DepartamentoID` int(10) DEFAULT NULL,
  `LocalidadID` int(10) DEFAULT NULL,
  `Detalle` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Localidades`
--

CREATE TABLE `Tbl_Localidades` (
  `LocalidadID` int(10) UNSIGNED NOT NULL,
  `DepartamentoID` int(10) DEFAULT NULL,
  `Nombre` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Mantenimientos`
--

CREATE TABLE `Tbl_Mantenimientos` (
  `MantenimientoID` int(10) NOT NULL,
  `VehiculoID` int(10) DEFAULT NULL,
  `FechaSolicitada` date DEFAULT NULL,
  `FechaProgramada` date DEFAULT NULL,
  `FechaRealizada` date DEFAULT NULL,
  `Detalle` longtext,
  `DiasDeAviso` int(10) DEFAULT NULL,
  `KmDeAviso` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Movilidad`
--

CREATE TABLE `Tbl_Movilidad` (
  `MovilidadID` int(10) NOT NULL,
  `VehiculoID` int(10) DEFAULT NULL,
  `PersonaID` int(10) NOT NULL,
  `PlanDeRutaID` int(10) DEFAULT NULL,
  `FechaHoraPartida` datetime DEFAULT NULL,
  `FechaHoraRegreso` varchar(255) DEFAULT NULL,
  `Destino` longtext,
  `KmLlegada` bigint(20) DEFAULT NULL,
  `KmSalida` bigint(20) DEFAULT NULL,
  `KmRecorrido` bigint(20) DEFAULT NULL,
  `Observaciones` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Perfiles`
--

CREATE TABLE `Tbl_Perfiles` (
  `PerfilID` int(11) NOT NULL COMMENT 'llave primaria de la tabla',
  `Nombre` varchar(45) DEFAULT NULL COMMENT 'Descripción del perfil',
  `FechaRegistro` datetime DEFAULT NULL COMMENT 'fecha de registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_PerfilesRecursos`
--

CREATE TABLE `Tbl_PerfilesRecursos` (
  `Consultar` tinyint(1) DEFAULT '0',
  `Agregar` tinyint(1) DEFAULT '0',
  `Editar` tinyint(1) DEFAULT '0',
  `Eliminar` tinyint(1) DEFAULT '0',
  `RecursoID` int(11) NOT NULL,
  `PerfilID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Personas`
--

CREATE TABLE `Tbl_Personas` (
  `PersonaID` int(10) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Documento` int(8) DEFAULT NULL,
  `Sexo` longblob,
  `Mail` varchar(255) DEFAULT NULL,
  `Domicilio` varchar(255) DEFAULT NULL,
  `LocalidadID` int(10) DEFAULT NULL,
  `ProvinciaID` int(10) NOT NULL,
  `DepartamentoID` int(10) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_PlanDeRutas`
--

CREATE TABLE `Tbl_PlanDeRutas` (
  `PlanDeRutaID` int(10) NOT NULL,
  `MovilidadID` int(11) DEFAULT NULL,
  `FechaHoraSalida` datetime DEFAULT NULL,
  `FechaHoraLlegada` datetime DEFAULT NULL,
  `Desde` varchar(100) DEFAULT NULL,
  `Hasta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Provincias`
--

CREATE TABLE `Tbl_Provincias` (
  `ProvinciaID` int(10) NOT NULL,
  `Nombre` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Recursos`
--

CREATE TABLE `Tbl_Recursos` (
  `RecursoID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL COMMENT 'nombre del recurso',
  `FechaRegistro` datetime DEFAULT NULL COMMENT 'Fecha en la que se registro el recurso',
  `Parent` int(11) DEFAULT '1',
  `Link` varchar(50) DEFAULT '#',
  `Icon` varchar(30) DEFAULT NULL,
  `Orden` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Reparaciones`
--

CREATE TABLE `Tbl_Reparaciones` (
  `ReparacionID` int(10) NOT NULL,
  `VehiculoID` int(10) DEFAULT NULL,
  `FechaReparacion` date DEFAULT NULL,
  `Detalle` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Seguro`
--

CREATE TABLE `Tbl_Seguro` (
  `SeguroID` int(10) NOT NULL,
  `VehiculoID` int(10) DEFAULT NULL,
  `FechaOtorgado` date DEFAULT NULL,
  `FechaVencimiento` date NOT NULL,
  `PolizaNumero` char(50) NOT NULL,
  `Aseguradora` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_TarjetaVerde`
--

CREATE TABLE `Tbl_TarjetaVerde` (
  `TarjetaVerdeID` int(10) NOT NULL,
  `VehiculoID` int(10) DEFAULT NULL,
  `Dominio` char(10) DEFAULT NULL,
  `Color` char(10) DEFAULT NULL,
  `Marca` char(30) DEFAULT NULL,
  `Tipo` char(30) DEFAULT NULL,
  `Modelo` date DEFAULT NULL,
  `Motor` char(50) DEFAULT NULL,
  `MotorNumero` char(50) DEFAULT NULL,
  `ChasisNumero` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Usuarios`
--

CREATE TABLE `Tbl_Usuarios` (
  `UsuarioID` int(11) NOT NULL COMMENT 'LLave primaria de la tabla',
  `Nombre` varchar(100) DEFAULT NULL COMMENT 'Nombre completo del usuario',
  `Email` varchar(75) DEFAULT NULL COMMENT 'Login del usuario',
  `Password` varchar(45) DEFAULT NULL COMMENT 'Clave del usuario',
  `FechaRegistro` datetime DEFAULT NULL COMMENT 'Fecha en la que se registro el usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Tbl_Usuarios`
--

INSERT INTO `Tbl_Usuarios` (`UsuarioID`, `Nombre`, `Email`, `Password`, `FechaRegistro`) VALUES
(2, 'Ivan, Neira', 'ien1983@gmail.com', '202cb962ac59075b964b07152d234b70', '2017-01-11 00:00:00'),
(3, 'Sebastian, Mendoza', 'pseba20@gmail.com', '202cb962ac59075b964b07152d234b70', '2017-01-11 00:00:00'),
(4, 'Prueba, Prueba', 'prueba@gmail.com', '202cb962ac59075b964b07152d234b70', '2017-01-11 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_UsuariosPerfiles`
--

CREATE TABLE `Tbl_UsuariosPerfiles` (
  `UsuarioID` int(11) NOT NULL,
  `PerfilID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tbl_Vehiculo`
--

CREATE TABLE `Tbl_Vehiculo` (
  `VehiculoID` int(10) NOT NULL,
  `SeguroID` int(10) DEFAULT NULL,
  `Kilometraje` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Tbl_Carnet`
--
ALTER TABLE `Tbl_Carnet`
  ADD PRIMARY KEY (`CarnetID`),
  ADD KEY `PersonaID` (`PersonaID`);

--
-- Indices de la tabla `Tbl_Departamentos`
--
ALTER TABLE `Tbl_Departamentos`
  ADD PRIMARY KEY (`DepartamentoID`),
  ADD KEY `ProvinciaID` (`ProvinciaID`);

--
-- Indices de la tabla `Tbl_FichaTecnica`
--
ALTER TABLE `Tbl_FichaTecnica`
  ADD PRIMARY KEY (`FichaTecnicaID`),
  ADD UNIQUE KEY `VehiculoID` (`VehiculoID`) USING BTREE;

--
-- Indices de la tabla `Tbl_Incidentes`
--
ALTER TABLE `Tbl_Incidentes`
  ADD PRIMARY KEY (`IncidenteID`),
  ADD UNIQUE KEY `MovilidadID` (`MovilidadID`) USING BTREE;

--
-- Indices de la tabla `Tbl_Localidades`
--
ALTER TABLE `Tbl_Localidades`
  ADD PRIMARY KEY (`LocalidadID`),
  ADD KEY `FK_Departamentos` (`DepartamentoID`);

--
-- Indices de la tabla `Tbl_Mantenimientos`
--
ALTER TABLE `Tbl_Mantenimientos`
  ADD PRIMARY KEY (`MantenimientoID`),
  ADD UNIQUE KEY `VehiculoID` (`VehiculoID`) USING BTREE;

--
-- Indices de la tabla `Tbl_Movilidad`
--
ALTER TABLE `Tbl_Movilidad`
  ADD PRIMARY KEY (`MovilidadID`);

--
-- Indices de la tabla `Tbl_Perfiles`
--
ALTER TABLE `Tbl_Perfiles`
  ADD PRIMARY KEY (`PerfilID`);

--
-- Indices de la tabla `Tbl_Personas`
--
ALTER TABLE `Tbl_Personas`
  ADD PRIMARY KEY (`PersonaID`);

--
-- Indices de la tabla `Tbl_PlanDeRutas`
--
ALTER TABLE `Tbl_PlanDeRutas`
  ADD PRIMARY KEY (`PlanDeRutaID`),
  ADD UNIQUE KEY `MovilidadID` (`MovilidadID`) USING BTREE;

--
-- Indices de la tabla `Tbl_Provincias`
--
ALTER TABLE `Tbl_Provincias`
  ADD PRIMARY KEY (`ProvinciaID`);

--
-- Indices de la tabla `Tbl_Recursos`
--
ALTER TABLE `Tbl_Recursos`
  ADD PRIMARY KEY (`RecursoID`);

--
-- Indices de la tabla `Tbl_Reparaciones`
--
ALTER TABLE `Tbl_Reparaciones`
  ADD PRIMARY KEY (`ReparacionID`),
  ADD UNIQUE KEY `VehiculoID` (`VehiculoID`) USING BTREE;

--
-- Indices de la tabla `Tbl_Seguro`
--
ALTER TABLE `Tbl_Seguro`
  ADD PRIMARY KEY (`SeguroID`),
  ADD UNIQUE KEY `VehiculoID` (`VehiculoID`) USING BTREE;

--
-- Indices de la tabla `Tbl_TarjetaVerde`
--
ALTER TABLE `Tbl_TarjetaVerde`
  ADD PRIMARY KEY (`TarjetaVerdeID`),
  ADD UNIQUE KEY `VehiculoID` (`VehiculoID`) USING BTREE;

--
-- Indices de la tabla `Tbl_Usuarios`
--
ALTER TABLE `Tbl_Usuarios`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- Indices de la tabla `Tbl_UsuariosPerfiles`
--
ALTER TABLE `Tbl_UsuariosPerfiles`
  ADD KEY `fk_usuarios_perfiles_usuarios_idx` (`UsuarioID`),
  ADD KEY `fk_usuarios_perfiles_perfiles1_idx` (`PerfilID`);

--
-- Indices de la tabla `Tbl_Vehiculo`
--
ALTER TABLE `Tbl_Vehiculo`
  ADD PRIMARY KEY (`VehiculoID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Tbl_Carnet`
--
ALTER TABLE `Tbl_Carnet`
  MODIFY `CarnetID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Departamentos`
--
ALTER TABLE `Tbl_Departamentos`
  MODIFY `DepartamentoID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_FichaTecnica`
--
ALTER TABLE `Tbl_FichaTecnica`
  MODIFY `FichaTecnicaID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Incidentes`
--
ALTER TABLE `Tbl_Incidentes`
  MODIFY `IncidenteID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Localidades`
--
ALTER TABLE `Tbl_Localidades`
  MODIFY `LocalidadID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Mantenimientos`
--
ALTER TABLE `Tbl_Mantenimientos`
  MODIFY `MantenimientoID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Movilidad`
--
ALTER TABLE `Tbl_Movilidad`
  MODIFY `MovilidadID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Perfiles`
--
ALTER TABLE `Tbl_Perfiles`
  MODIFY `PerfilID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria de la tabla', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Tbl_Personas`
--
ALTER TABLE `Tbl_Personas`
  MODIFY `PersonaID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_PlanDeRutas`
--
ALTER TABLE `Tbl_PlanDeRutas`
  MODIFY `PlanDeRutaID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Provincias`
--
ALTER TABLE `Tbl_Provincias`
  MODIFY `ProvinciaID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Reparaciones`
--
ALTER TABLE `Tbl_Reparaciones`
  MODIFY `ReparacionID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Seguro`
--
ALTER TABLE `Tbl_Seguro`
  MODIFY `SeguroID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_TarjetaVerde`
--
ALTER TABLE `Tbl_TarjetaVerde`
  MODIFY `TarjetaVerdeID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tbl_Usuarios`
--
ALTER TABLE `Tbl_Usuarios`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'LLave primaria de la tabla', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Tbl_Vehiculo`
--
ALTER TABLE `Tbl_Vehiculo`
  MODIFY `VehiculoID` int(10) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Tbl_Departamentos`
--
ALTER TABLE `Tbl_Departamentos`
  ADD CONSTRAINT `Tbl_Departamentos_ibfk_1` FOREIGN KEY (`ProvinciaID`) REFERENCES `Tbl_Provincias` (`ProvinciaID`);

--
-- Filtros para la tabla `Tbl_Localidades`
--
ALTER TABLE `Tbl_Localidades`
  ADD CONSTRAINT `FK_Departamentos` FOREIGN KEY (`DepartamentoID`) REFERENCES `Tbl_Departamentos` (`DepartamentoID`);

--
-- Filtros para la tabla `Tbl_Movilidad`
--
ALTER TABLE `Tbl_Movilidad`
  ADD CONSTRAINT `FK_Incidentes` FOREIGN KEY (`MovilidadID`) REFERENCES `Tbl_Incidentes` (`MovilidadID`),
  ADD CONSTRAINT `FK_PlanDeRutas` FOREIGN KEY (`MovilidadID`) REFERENCES `Tbl_PlanDeRutas` (`MovilidadID`);

--
-- Filtros para la tabla `Tbl_Personas`
--
ALTER TABLE `Tbl_Personas`
  ADD CONSTRAINT `FK_Carnet` FOREIGN KEY (`PersonaID`) REFERENCES `Tbl_Carnet` (`PersonaID`);

--
-- Filtros para la tabla `Tbl_UsuariosPerfiles`
--
ALTER TABLE `Tbl_UsuariosPerfiles`
  ADD CONSTRAINT `fk_usuarios_perfiles_perfiles1` FOREIGN KEY (`PerfilID`) REFERENCES `Tbl_Perfiles` (`PerfilID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_perfiles_usuarios` FOREIGN KEY (`UsuarioID`) REFERENCES `Tbl_Usuarios` (`UsuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Tbl_Vehiculo`
--
ALTER TABLE `Tbl_Vehiculo`
  ADD CONSTRAINT `FK_FichaTecnica` FOREIGN KEY (`VehiculoID`) REFERENCES `Tbl_FichaTecnica` (`VehiculoID`),
  ADD CONSTRAINT `FK_Mantenimiento` FOREIGN KEY (`VehiculoID`) REFERENCES `Tbl_Mantenimientos` (`VehiculoID`),
  ADD CONSTRAINT `FK_Reparaciones` FOREIGN KEY (`VehiculoID`) REFERENCES `Tbl_Reparaciones` (`VehiculoID`),
  ADD CONSTRAINT `FK_Seguro` FOREIGN KEY (`VehiculoID`) REFERENCES `Tbl_Seguro` (`VehiculoID`),
  ADD CONSTRAINT `FK_TarjetaVerde` FOREIGN KEY (`VehiculoID`) REFERENCES `Tbl_TarjetaVerde` (`VehiculoID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
