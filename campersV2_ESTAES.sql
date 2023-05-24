-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-05-2023 a las 09:46:15
-- Versión del servidor: 8.0.33-0ubuntu0.22.04.2
-- Versión de PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campers`
--

CREATE TABLE `campers` (
  `id` int NOT NULL,
  `NOMBRES` varchar(50) NOT NULL,
  `DIRECCION` varchar(40) NOT NULL,
  `LOGROS` varchar(60) NOT NULL,
  `INGLES` varchar(30) NOT NULL,
  `SER` varchar(30) NOT NULL,
  `SKILLS` varchar(30) NOT NULL,
  `REVIEW` float NOT NULL,
  `ESPECIALIDAD` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `campers`
--

INSERT INTO `campers` (`id`, `NOMBRES`, `DIRECCION`, `LOGROS`, `INGLES`, `SER`, `SKILLS`, `REVIEW`, `ESPECIALIDAD`) VALUES
(12, 'Santiago', 'Cll 111 #45-56', 'Resucito en php', 'Middle', 'Vanessa', 'Intermedio', 4.7, 'BackEnd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campers`
--
ALTER TABLE `campers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campers`
--
ALTER TABLE `campers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
