<?php
$sentenciasql="
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2017 a las 12:08:43
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET time_zone = '+00:00';



/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alimentos32019`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos32019`
--

CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,0) NOT NULL,
  `proteina` decimal(10,0) NOT NULL,
  `hidratocarbono` decimal(10,0) NOT NULL,
  `fibra` decimal(10,0) NOT NULL,
  `grasatotal` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `nombre`,`energia`,`proteina`,`hidratocarbono`,`fibra`,`grasatotal`) VALUES
(1, 'Pata' ,325,7.2,78,12,65),
(2, 'Tomate' ,20,10.4,32,25,150),
(3, 'Pringless' ,2146,51,78,12,32),
(4, 'Miel' ,1367,11,84,12,400),
(5, 'Coca-Cola' ,600,54,320,18,550),
(6, 'Pipas' ,752,7.4,42,17,652),
(7, 'Nesquik' ,1400,20,89,20,800),
(8, 'Leche',500,12,56,40,600);

-- --------------------------------------------------------
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--


/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
";

?>