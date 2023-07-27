-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2023 a las 19:25:52
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: cotizador
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla dolly
--
CREATE TABLE dolly (
  id_config int(11) NOT NULL,
  modelo int(6) DEFAULT NULL,
  color varchar(50) DEFAULT NULL,
  alto varchar(10) DEFAULT NULL,
  ancho varchar(10) DEFAULT NULL,
  largo varchar(10) DEFAULT NULL,
  ojillo varchar(250) DEFAULT NULL,
  largodelanza varchar(20) DEFAULT NULL,
  quinta varchar(250) DEFAULT NULL,
  alturaquinta varchar(25) DEFAULT NULL,
  soportequinta varchar(25) DEFAULT NULL,
  llantas varchar(10) DEFAULT NULL,
  llantamedida varchar(25) DEFAULT NULL,
  rin varchar(25) DEFAULT NULL,
  rinmedida varchar(25) DEFAULT NULL,
  material_rin varchar(25) DEFAULT NULL,
  ejes varchar(250) DEFAULT NULL,
  birlos varchar(250) DEFAULT NULL,
  lubricacion varchar(50) DEFAULT NULL,
  suspension varchar(250) DEFAULT NULL,
  portaplacas varchar(10) DEFAULT NULL,
  autoinflado varchar(10) DEFAULT NULL,
  portaloderas varchar(10) DEFAULT NULL,
  retractil varchar(10) DEFAULT NULL,
  precio_total varchar(1000) NOT NULL
);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla multimodal
--
CREATE TABLE multimodal (
  id_config int(11) NOT NULL,
  modelo int(6) DEFAULT NULL,
  color varchar(10) DEFAULT NULL,
  cabezal_frontal varchar(200) DEFAULT NULL,
  cabezal_trasero varchar(200) DEFAULT NULL,
  piso varchar(250) DEFAULT NULL,
  mensulas_centrales varchar(200) DEFAULT NULL,
  manivelas varchar(200) NOT NULL,
  llantas varchar(10) DEFAULT NULL,
  llantamedida varchar(25) DEFAULT NULL,
  rin varchar(25) DEFAULT NULL,
  rinmedida varchar(25) DEFAULT NULL,
  material varchar(25) DEFAULT NULL,
  gancho_arrastre varchar(350) DEFAULT NULL,
  perno_rey varchar(25) DEFAULT NULL,
  porta_llantas varchar(100) DEFAULT NULL,
  caja_herramientas varchar(30) DEFAULT NULL,
  susp_neu varchar(250) DEFAULT NULL,
  ejes varchar(250) DEFAULT NULL,
  frenos_neu varchar(100) DEFAULT NULL,
  eje_retractil varchar(100) DEFAULT NULL,
  guarda varchar(250) DEFAULT NULL,
  precio_total varchar(1000) NOT NULL
);

--
-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla portaEstandar
--
CREATE TABLE portaEstandar (
  id_config int(11) NOT NULL,
  modelo int(6) DEFAULT NULL,
  configuracion varchar(10) DEFAULT NULL,
  color varchar(10) DEFAULT NULL,
  cabezal_frontal varchar(250) DEFAULT NULL,
  cabezal_trasero varchar(250) DEFAULT NULL,
  mesnulas varchar(250) DEFAULT NULL,
  llantas varchar(10) DEFAULT NULL,
  llantamedida varchar(25) DEFAULT NULL,
  rin varchar(25) DEFAULT NULL,
  rinmedida varchar(25) DEFAULT NULL,
  material varchar(25) DEFAULT NULL,
  birlo varchar(20) NOT NULL,
  lubricacion varchar(20) NOT NULL,
  patines varchar(100) NOT NULL,
  gancho_arrastre varchar(350) DEFAULT NULL,
  ejes varchar(100) DEFAULT NULL,
  porta_llantas varchar(25) DEFAULT NULL,
  perno_rey varchar(25) DEFAULT NULL,
  susp_neu varchar(25) DEFAULT NULL,
  caja_herramientas varchar(100) DEFAULT NULL,
  frenos_neu varchar(250) DEFAULT NULL,
  eje_retractil varchar(250) DEFAULT NULL,
  tipo varchar(70) DEFAULT NULL,
  guarda varchar(250) DEFAULT NULL,
  precio_total varchar(1000) NOT NULL
);

--
-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla portaExtensible
--
CREATE TABLE portaextensible (
  id_config int(11) NOT NULL,
  modelo int(6) DEFAULT NULL,
  color varchar(100) DEFAULT NULL,
  cabezal_frontal varchar(350) DEFAULT NULL,
  cabezal_trasero varchar(350) DEFAULT NULL,
  llantas varchar(10) DEFAULT NULL,
  llantamedida varchar(25) DEFAULT NULL,
  rin varchar(25) DEFAULT NULL,
  rinmedida varchar(25) DEFAULT NULL,
  material varchar(25) DEFAULT NULL,
  birlo varchar(200) NOT NULL,
  lubricacion varchar(100) NOT NULL,
  ejes varchar(250) DEFAULT NULL,
  portaloderas varchar(10) DEFAULT NULL,
  perno_rey varchar(250) DEFAULT NULL,
  patines varchar(500) NOT NULL,
  manivelas varchar(100) NOT NULL,
  gancho_arrastre varchar(500) DEFAULT NULL,
  frenos_neu varchar(25) DEFAULT NULL,
  eje_retractil varchar(25) DEFAULT NULL,
  tipo varchar(70) DEFAULT NULL,
  porta_llantas varchar(100) DEFAULT NULL,
  susp_neu varchar(500) DEFAULT NULL,
  precio_total varchar(1000) NOT NULL
);

--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla plana
--
CREATE TABLE plana (
  id_config int(11) NOT NULL,
  modelo int(10) DEFAULT NULL,
  color varchar(100) DEFAULT NULL,
  largo varchar(100) DEFAULT NULL,
  piso varchar(200) DEFAULT NULL,
  patines varchar(250) DEFAULT NULL,
  llantas varchar(20) DEFAULT NULL,
  medida varchar(25) DEFAULT NULL,
  rin varchar(25) DEFAULT NULL,
  rin_medida varchar(25) DEFAULT NULL,
  material varchar(250) DEFAULT NULL,
  frenos_neu varchar(250) DEFAULT NULL,
  frente_lam varchar(250) DEFAULT NULL,
  loderas varchar(25) DEFAULT NULL,
  guarda varchar(250) DEFAULT NULL,
  ejes varchar(250) DEFAULT NULL,
  perno_rey varchar(50) DEFAULT NULL,
  manivelas varchar(250) DEFAULT NULL,
  gancho_arrastre varchar(350) DEFAULT NULL,
  susp_neu varchar(200) DEFAULT NULL,
  matracas varchar(200) DEFAULT NULL,
  caja_herramientas varchar(300) DEFAULT NULL,
  letrero varchar(200) NOT NULL,
  placa_perso varchar(10) NOT NULL,
  precio_total varchar(200) NOT NULL
);

--
-- Volcado de datos para la tabla plana
--


--
-- Estructura de tabla para la tabla gondola
--
CREATE TABLE gondola (
  id_config int(11) NOT NULL,
  modelo int(10) DEFAULT NULL,
  color varchar(100) DEFAULT NULL,
  capacidad varchar(20) DEFAULT NULL,
  alto varchar(100) DEFAULT NULL,
  ancho varchar(100) DEFAULT NULL,
  largo varchar(100) DEFAULT NULL,
  patines varchar(250) DEFAULT NULL,
  manivelas varchar(250) DEFAULT NULL,
  llantas varchar(20) DEFAULT NULL,
  medida varchar(25) DEFAULT NULL,
  rin varchar(25) DEFAULT NULL,
  rin_medida varchar(25) DEFAULT NULL,
  material varchar(250) DEFAULT NULL,
  birlo varchar(250) DEFAULT NULL,
  caja_herramientas varchar(300) DEFAULT NULL,
  letrero varchar(200) NOT NULL,
  perno_rey varchar(50) DEFAULT NULL,
  porta_llantas varchar(20) DEFAULT NULL,
  gancho_arrastre varchar(350) DEFAULT NULL,
  no_ejes varchar(20) DEFAULT NULL,
  ejes varchar(250) DEFAULT NULL,
  placa_perso varchar(10) NOT NULL,
  susp_neu varchar(200) DEFAULT NULL,
  eje_retractil varchar(20) DEFAULT NULL,
  tipo varchar(100) DEAULT NULL,
  frenos_neu varchar(100) DEFAULT NULL,
  guarda varchar(250) DEFAULT NULL,
  autoinflado varchar(20) DEFAULT NULL,
  precio_total varchar(200) NOT NULL
);

--
-- Volcado de datos para la tabla plana

-- --------------------------------------------------------

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla dolly
--
ALTER TABLE dolly
  ADD PRIMARY KEY (id_config);

--
-- Indices de la tabla multimodal
--
ALTER TABLE multimodal
  ADD PRIMARY KEY (id_config);

--
-- Indices de la tabla plana
--
ALTER TABLE plana
  ADD PRIMARY KEY (id_config);

--
-- Indices de la tabla portaEstandar
--
ALTER TABLE portaEstandar
  ADD PRIMARY KEY (id_config);

--
-- Indices de la tabla portaEstandar
--
ALTER TABLE portaextensible
  ADD PRIMARY KEY (id_config);

--
-- Indices de la tabla gondola
--
ALTER TABLE gondola
  ADD PRIMARY KEY (id_config);

--


-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla dolly
--
ALTER TABLE dolly
  MODIFY id_config int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT de la tabla multimodal
--
ALTER TABLE multimodal
  MODIFY id_config int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT de la tabla portaEstandar
--
ALTER TABLE portaEstandar
  MODIFY id_config int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT de la tabla portaExtensible
--
ALTER TABLE portaextensible
  MODIFY id_config int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT de la tabla plana
--
ALTER TABLE plana
  MODIFY id_config int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT de la tabla gondola
--
ALTER TABLE gondola
  MODIFY id_config int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
