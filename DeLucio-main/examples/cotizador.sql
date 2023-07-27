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
-- Base de datos: `cotizador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dolly`
--

CREATE TABLE `dolly` (
  `id_config` int(11) NOT NULL,
  `modelo` int(6) DEFAULT NULL,
  `alto` varchar(10) DEFAULT NULL,
  `ancho` varchar(10) DEFAULT NULL,
  `largo` varchar(10) DEFAULT NULL,
  `ojillo` varchar(250) DEFAULT NULL,
  `largodelanza` varchar(20) DEFAULT NULL,
  `quinta` varchar(250) DEFAULT NULL,
  `alturaquinta` varchar(25) DEFAULT NULL,
  `soportequinta` varchar(25) DEFAULT NULL,
  `llantas` varchar(10) DEFAULT NULL,
  `llantamedida` varchar(25) DEFAULT NULL,
  `rin` varchar(25) DEFAULT NULL,
  `rinmedida` varchar(25) DEFAULT NULL,
  `material_rin` varchar(25) DEFAULT NULL,
  `ejes` varchar(250) DEFAULT NULL,
  `birlos` varchar(250) DEFAULT NULL,
  `lubricacion` varchar(50) DEFAULT NULL,
  `suspension` varchar(250) DEFAULT NULL,
  `portaplacas` varchar(10) DEFAULT NULL,
  `autoinflado` varchar(10) DEFAULT NULL,
  `portaloderas` varchar(10) DEFAULT NULL,
  `retractil` varchar(10) DEFAULT NULL,
  `precio_total` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dolly`
--

INSERT INTO `dolly` (`id_config`, `modelo`, `alto`, `ancho`, `largo`, `ojillo`, `largodelanza`, `quinta`, `alturaquinta`, `soportequinta`, `llantas`, `llantamedida`, `rin`, `rinmedida`, `material_rin`, `ejes`, `birlos`, `lubricacion`, `suspension`, `portaplacas`, `autoinflado`, `portaloderas`, `retractil`, `precio_total`) VALUES
(1, 2019, 'Fijo', '2.60 m', '2.47 m', 'Premier 245 DB-3 (3 pulgadas para gancho Premier 880/2880)', '.70 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R24.5', '8', '11R24.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Aceite', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', '4600'),
(2, 2019, 'Fijo', '2.60 m', '2.47 m', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', '4470');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimodal`
--

CREATE TABLE `multimodal` (
  `id_config` int(11) NOT NULL,
  `modelo` int(6) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `cabezal_frontal` varchar(10) DEFAULT NULL,
  `cabezal_trasero` varchar(10) DEFAULT NULL,
  `piso` varchar(250) DEFAULT NULL,
  `mensulas_centrales` varchar(20) DEFAULT NULL,
  `manivelas` varchar(200) NOT NULL,
  `llantas` varchar(10) DEFAULT NULL,
  `llantamedida` varchar(25) DEFAULT NULL,
  `rin` varchar(25) DEFAULT NULL,
  `rinmedida` varchar(25) DEFAULT NULL,
  `material` varchar(25) DEFAULT NULL,
  `gancho_arrastre` varchar(250) DEFAULT NULL,
  `perno_rey` varchar(25) DEFAULT NULL,
  `porta_llantas` varchar(25) DEFAULT NULL,
  `caja_herramientas` varchar(10) DEFAULT NULL,
  `susp_neu` varchar(25) DEFAULT NULL,
  `ejes` varchar(25) DEFAULT NULL,
  `frenos_neu` varchar(25) DEFAULT NULL,
  `eje_retractil` varchar(25) DEFAULT NULL,
  `guarda` varchar(250) DEFAULT NULL,
  `precio_total` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `multimodal`
--

INSERT INTO `multimodal` (`id_config`, `modelo`, `color`, `cabezal_frontal`, `cabezal_trasero`, `piso`, `mensulas_centrales`, `manivelas`, `llantas`, `llantamedida`, `rin`, `rinmedida`, `material`, `gancho_arrastre`, `perno_rey`, `porta_llantas`, `caja_herramientas`, `susp_neu`, `ejes`, `frenos_neu`, `eje_retractil`, `guarda`, `precio_total`) VALUES
(1, 2020, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '8', '11R22.5', 'acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', '1', 'Si', ''),
(2, 2020, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado Copiloto', '8', '11R22.5', '8', '11R22.5', 'acero', 'Colocar placa con gancho de arranque Wallace Forge R50-10 (2 pulgadas 10', 'Wallace Forge de 3/8', 'Si', 'Entre viga', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', '1', 'Si', ''),
(3, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '1880'),
(4, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '1980'),
(5, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2030'),
(6, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2030'),
(7, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '1880'),
(8, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '1930'),
(9, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2030'),
(10, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2030'),
(11, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2130'),
(12, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2130'),
(13, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2230'),
(14, 2019, 'rojo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '8', '11R22.5', '', '11R22.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '2330'),
(15, 2019, 'amarillo', 'Con 1 par ', 'Con 1 par ', 'Canaleta antiderrapante C-10', 'Si', 'Lado piloto', '12', '11R24.5', '12', '11R24.5', 'Acero', 'Colocar placa sin gancho de arranque', 'Wallace Forge de 3/8', 'Si', 'Interior', 'Azteca King Ak-300 de 30,', 'De 30,000 lbscon 77.5 pul', 'Sistema ABS - 2S1M de acu', 'Brazo central con camara ', 'Si', '3130');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plana`
--

CREATE TABLE `plana` (
  `id_config` int(11) NOT NULL,
  `modelo` int(10) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `largo` varchar(100) DEFAULT NULL,
  `piso` varchar(200) DEFAULT NULL,
  `patines` varchar(250) DEFAULT NULL,
  `llantas` varchar(20) DEFAULT NULL,
  `medida` varchar(25) DEFAULT NULL,
  `rin` varchar(25) DEFAULT NULL,
  `rin_medida` varchar(25) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `frenos_neu` varchar(250) DEFAULT NULL,
  `frente_lam` varchar(250) DEFAULT NULL,
  `loderas` varchar(25) DEFAULT NULL,
  `guarda` varchar(250) DEFAULT NULL,
  `ejes` varchar(250) DEFAULT NULL,
  `perno_rey` varchar(50) DEFAULT NULL,
  `manivelas` varchar(250) DEFAULT NULL,
  `gancho_arrastre` varchar(350) DEFAULT NULL,
  `susp_neu` varchar(200) DEFAULT NULL,
  `matracas` varchar(200) DEFAULT NULL,
  `caja_herramientas` varchar(300) DEFAULT NULL,
  `letrero` varchar(200) NOT NULL,
  `placa_perso` varchar(10) NOT NULL,
  `precio_total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plana`
--

INSERT INTO `plana` (`id_config`, `modelo`, `color`, `largo`, `piso`, `patines`, `llantas`, `medida`, `rin`, `rin_medida`, `material`, `frenos_neu`, `frente_lam`, `loderas`, `guarda`, `ejes`, `perno_rey`, `manivelas`, `gancho_arrastre`, `susp_neu`, `matracas`, `caja_herramientas`, `letrero`, `placa_perso`, `precio_total`) VALUES
(1, 2020, 'blanco', '26 ft', 'Plasti tabla\r\n                            C-10 ', '2 juegos de patines', '8', '11R22.5', '8', '11R22.5', 'Aluminio', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.80 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado copiloto', 'Colocar placa con gancho de arranque Premier 2400(2 pulgadas 10 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Fijas', 'Lateral', 'Si', 'No', '2230'),
(2, 2020, 'blanco', '26 ft', 'Plasti tabla\r\n                            C-10 ', '2 juegos de patines', '8', '11R22.5', '8', '11R22.5', 'Aluminio', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.80 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado copiloto', 'Colocar placa con gancho de arranque Premier 2400(2 pulgadas 10 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Fijas', 'Lateral', 'Si', 'No', '2430'),
(3, 2020, 'blanco', '26 ft', 'Plasti tabla\r\n                            C-10 ', '2 juegos de patines', '8', '11R22.5', '8', '11R22.5', 'Aluminio', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.80 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado copiloto', 'Colocar placa con gancho de arranque Premier 2400(2 pulgadas 10 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Fijas', 'Lateral', 'Si', 'No', '2530'),
(4, 2024, 'Verde o', '42 ft', 'Plastitabla C-10', '2 juegos de patines', '8', '11R24.5', '8', '11R24.5', 'Acero', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.10 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado piloto', 'Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Corrediza (Riel logistico)', 'Lateral', 'Si', 'No', '2840'),
(5, 2024, 'Verde o', '42 ft', 'Plastitabla C-10', '2 juegos de patines', '8', '11R24.5', '8', '11R24.5', 'Acero', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.10 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado piloto', 'Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Corrediza (Riel logistico)', 'Lateral', 'Si', 'No', '2840'),
(6, 2024, 'Verde o', '42 ft', 'Plastitabla C-10', '2 juegos de patines', '8', '11R24.5', '8', '11R24.5', 'Acero', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.10 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado piloto', 'Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Corrediza (Riel logistico)', 'Lateral', 'Si', 'No', '3440'),
(7, 2024, 'Verde o', '42 ft', 'Plastitabla C-10', '2 juegos de patines', '8', '11R24.5', '8', '11R24.5', 'Acero', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.10 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado piloto', 'Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Corrediza (Riel logistico)', 'Lateral', 'Si', 'No', '3840'),
(8, 2024, 'Verde o', '42 ft', 'Plastitabla C-10', '2 juegos de patines', '8', '11R24.5', '8', '11R24.5', 'Acero', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.10 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado piloto', 'Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Corrediza (Riel logistico)', 'Lateral', 'Si', 'No', '3840'),
(9, 2024, 'Verde o', '42 ft', 'Plastitabla C-10', '2 juegos de patines', '8', '11R24.5', '8', '11R24.5', 'Acero', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.10 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado piloto', 'Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Corrediza (Riel logistico)', 'Lateral', 'Si', 'Si', '3840'),
(10, 2024, 'Verde o', '42 ft', 'Plastitabla C-10', '2 juegos de patines', '8', '11R24.5', '8', '11R24.5', 'Acero', 'Sistema ABS - 2S1M de acuerdo a SCT', '1.10 m', 'Si', 'Si', 'De 30,000 lb,77.5 pulgadas de Track', 'Wallace Forge de 3/8', 'Lado piloto', 'Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)', 'Azteca King AK-300 de 30,000 lbs de capacidad', 'Corrediza (Riel logistico)', 'Lateral', 'Si', 'Si', '3940');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id_config` int(11) NOT NULL,
  `modelo` int(6) DEFAULT NULL,
  `alto` varchar(10) DEFAULT NULL,
  `ancho` varchar(10) DEFAULT NULL,
  `largo` varchar(10) DEFAULT NULL,
  `ojillo` varchar(250) DEFAULT NULL,
  `largodelanza` varchar(20) DEFAULT NULL,
  `quinta` varchar(250) DEFAULT NULL,
  `alturaquinta` varchar(25) DEFAULT NULL,
  `soportequinta` varchar(25) DEFAULT NULL,
  `llantas` varchar(10) DEFAULT NULL,
  `llantamedida` varchar(25) DEFAULT NULL,
  `rin` varchar(25) DEFAULT NULL,
  `rinmedida` varchar(25) DEFAULT NULL,
  `material` varchar(25) DEFAULT NULL,
  `ejes` varchar(250) DEFAULT NULL,
  `birlos` varchar(250) DEFAULT NULL,
  `lubricacion` varchar(50) DEFAULT NULL,
  `suspension` varchar(250) DEFAULT NULL,
  `portaplacas` varchar(10) DEFAULT NULL,
  `autoniflado` varchar(10) DEFAULT NULL,
  `portaloderas` varchar(10) DEFAULT NULL,
  `retractil` varchar(10) DEFAULT NULL,
  `precio` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id_config`, `modelo`, `alto`, `ancho`, `largo`, `ojillo`, `largodelanza`, `quinta`, `alturaquinta`, `soportequinta`, `llantas`, `llantamedida`, `rin`, `rinmedida`, `material`, `ejes`, `birlos`, `lubricacion`, `suspension`, `portaplacas`, `autoniflado`, `portaloderas`, `retractil`, `precio`) VALUES
(1, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', '', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(2, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', '', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(3, 0, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R24.5', '8', '11R24.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', '', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(4, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', '', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(5, 2019, 'Fijo', '2', '0', '', '', '', '', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', '', '', 'Grasa', '', '', '', '', 'Si', ''),
(6, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', '', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(7, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(8, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(9, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(10, 0, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(11, 0, '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(13, 0, '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 2019, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(15, 2019, 'Fijo', '2', '2', 'Premier 245 DB-3 (3 pulgadas para gancho Premier 880/2880)', '.70 m', 'Holland FW35', '8 pulgadas', 'Fijo', '8', '11R24.5', '8', '11R24.5', 'Aluminio', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Largo (AL)', 'Aceite', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'No', 'No', 'No', ''),
(16, 2022, 'Fijo', '2', '2', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', 'Holland FW35', '6 pulgadas', 'Fijo', '8', '11R22.5', '8', '11R22.5', 'Acero', 'De 30,000 lbs, 77.5 pulgadas de Track', 'Corto (AC)', 'Grasa', 'Azteca King Ak-300 de 30,000 lbs de capacidad', 'Si', 'Si', 'Si', 'Si', ''),
(17, 2019, 'Fijo', '0', '0', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', '', '6 pulgadas', '', '', '', '', '', 'Acero', '', '', '', '', '', '', '', '', ''),
(18, 2019, 'Fijo', '0', '0', 'Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)', '.60 m', '', '6 pulgadas', '', '', '', '', '', 'Acero', '', '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dolly`
--
ALTER TABLE `dolly`
  ADD PRIMARY KEY (`id_config`);

--
-- Indices de la tabla `multimodal`
--
ALTER TABLE `multimodal`
  ADD PRIMARY KEY (`id_config`);

--
-- Indices de la tabla `plana`
--
ALTER TABLE `plana`
  ADD PRIMARY KEY (`id_config`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id_config`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dolly`
--
ALTER TABLE `dolly`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `multimodal`
--
ALTER TABLE `multimodal`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `plana`
--
ALTER TABLE `plana`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
