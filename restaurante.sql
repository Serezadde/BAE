-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2024 a las 10:56:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--
CREATE DATABASE restaurante;
USE restaurante;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--
DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(3, 'Batidos'),
(4, 'Bocadillos'),
(2, 'Cervezas'),
(5, 'Combinados'),
(8, 'Hamburguesas'),
(7, 'Menús'),
(1, 'Refrescos'),
(6, 'Sandwiches2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comanda`
--

CREATE TABLE `comanda` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comanda`
--

INSERT INTO `comanda` (`id`, `id_pedido`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comanda_producto`
--

CREATE TABLE `comanda_producto` (
  `id_comanda` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comanda_producto`
--

INSERT INTO `comanda_producto` (`id_comanda`, `id_producto`, `cantidad`) VALUES
(1, 1, 2),
(1, 2, 1),
(1, 4, 1),
(1, 10, 1),
(1, 11, 1),
(2, 13, 1),
(2, 16, 1),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 1),
(4, 6, 1),
(4, 8, 1),
(5, 1, 1),
(5, 2, 1),
(5, 3, 1),
(5, 4, 1),
(6, 13, 1),
(6, 14, 1),
(7, 1, 1),
(7, 2, 1),
(7, 3, 1),
(7, 4, 1),
(8, 13, 1),
(8, 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `nombre`) VALUES
(1, 'mesa 1'),
(2, 'mesa 2');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `en_curso` varchar(5) NOT NULL,
  `fecha` date NOT NULL,
  `id_mesa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `precio`, `en_curso`, `fecha`, `id_mesa`) VALUES
(1, 21, 'false', '2024-04-10', 1),
(2, 13, 'false', '2024-04-10', 1),
(3, 17, 'false', '2024-04-11', 1),
(4, 17, 'true', '2024-04-15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `id_categoria`) VALUES
(1, 'CocaCola', 2, 1),
(2, 'CocaCola Zero', 2, 1),
(3, 'Fanta Naranja', 2, 1),
(4, 'Fanta Limon', 2, 1),
(5, 'Red Bull', 3, 1),
(6, 'Mahou Clásica', 1, 2),
(7, 'Mahou Cinco Estrellas', 1, 2),
(8, 'Mahou Sin', 3, 2),
(9, 'Mahou Negra', 2, 2),
(10, 'Batido Fresa', 2, 3),
(11, 'Batido Chocolate', 2, 3),
(12, 'Batido Vainilla', 2, 3),
(13, 'Bocata Jamon Serrano', 5, 4),
(14, 'Bocata Lomo', 4, 4),
(15, 'Bocata Panceta', 4, 4),
(16, 'Bocata Tortilla', 4, 4);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuario` (`id`, `nombre`, `password`, `disponible`) VALUES
(1, 'Pepe', 'qwer', 1),
(2, 'Serena', 'nier', 1),
(3, 'Fernando', 'mgs2', 1),
(4, 'Moises', 'zeldatp', 0);
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--



ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `comanda`
--
ALTER TABLE `comanda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `comanda_producto`
--
ALTER TABLE `comanda_producto`
  ADD PRIMARY KEY (`id_comanda`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `mesa`
--

ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mesa` (`id_mesa`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `categoria` MODIFY COLUMN `id` INT AUTO_INCREMENT;
ALTER TABLE `mesa` MODIFY COLUMN `id` INT AUTO_INCREMENT;




ALTER TABLE `producto`
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comanda`
--
ALTER TABLE `comanda`
  ADD CONSTRAINT `comanda_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comanda_producto`
--
ALTER TABLE `comanda_producto`
  ADD CONSTRAINT `comanda_producto_ibfk_1` FOREIGN KEY (`id_comanda`) REFERENCES `comanda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comanda_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE;

  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
