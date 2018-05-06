-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2018 a las 23:14:56
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caralcarro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `vehiculo_id` int(11) UNSIGNED NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`id`, `user_id`, `vehiculo_id`, `fecha_inicio`, `fecha_fin`, `status`) VALUES
(1, 3, 6, '2018-05-08 00:00:00', '2018-05-17 00:00:00', 0),
(2, 3, 3, '2018-05-08 00:00:00', '2018-05-17 00:00:00', 0),
(3, 2, 1, '2018-05-06 22:30:09', '2018-06-06 22:30:09', 0),
(4, 2, 2, '2018-05-06 22:30:13', '2018-06-06 22:30:13', 0),
(5, 2, 8, '2018-05-06 22:31:38', '2018-06-06 22:31:38', 0),
(6, 2, 5, '2018-05-06 22:47:15', '2018-06-06 22:47:15', 0),
(7, 2, 4, '2018-05-06 22:47:32', '2018-06-06 22:47:32', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leasing`
--

CREATE TABLE `leasing` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `vehiculo_id` int(11) UNSIGNED NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL,
  `cuerpo_noticia` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `autor`, `fecha`, `cuerpo_noticia`) VALUES
(11, 'Coche to flama', 'Miguel', '0000-00-00 00:00:00', 'qwwrw d d sdcsd hasdsabs bchjasb hcsbah dbahb dahsb d'),
(13, 'Buga to guapo', 'Miguel', '0000-00-00 00:00:00', 'qwwrw d d sdcsd hasdsabs bchjasb hcsbah dbahb dahsb d aknfjsn sdnj njnvjdldnbdjbdnd  '),
(15, 'Coche ultimo modelo', 'Paco', '0000-00-00 00:00:00', 'hjsd hfshdi fjjifÃ± eiwj jh   hvueowÂ´periutgireyt84ytvf j'),
(16, 'Mega coche', 'Alonso', '0000-00-00 00:00:00', 'hjsd hfshdi fjjifÃ± eiwj jh   hvueowÂ´periutgireyt84ytvf j djsabf d uweh dcnsjcuhfluwhej  wseu wh'),
(17, 'Ejemplo1', 'Marta Perez', '0000-00-00 00:00:00', 'qteb trucuh chwuhgqcuqhufhuhcgqhecgqherchqgiqchgirhcrighqcoghqcuhgrcuhgreqhcgrhchihqeichgierchghcighcqihcgi hcigrhcqiqghc q hg iqh i gh cqihc qh grh vqvn '),
(18, 'hola', 'hola', '2018-05-05 14:46:04', 'hola'),
(19, 'noel', 'noticia prueba', '2018-05-06 21:26:45', 'noel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` int(9) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `apellido`, `email`, `password`, `telefono`, `descripcion`, `user_type`) VALUES
(1, 'carlos', 'martin', 'carlos@hotmail.com', 'carlos', 679696231, 'Soy Carlos y me encantan los lambos!', 0),
(2, 'paco', 'peña', 'pepe', 'pepe', 645789542, 'Me encantan los ferraris', 1),
(3, 'hola', 'caracola', 'caracola@adfjkas.com', 'hola', 12345678, 'hola me llamo hola', 0),
(4, 'hola', 'peña', 'pepe', 'hola', 645789542, 'Me encantan los ferraris', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_alquiler`
--

CREATE TABLE `vehiculo_alquiler` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `matricula` varchar(255) COLLATE utf8_bin NOT NULL,
  `marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `motor` varchar(255) COLLATE utf8_bin NOT NULL,
  `cambio` varchar(255) COLLATE utf8_bin NOT NULL,
  `color` varchar(255) COLLATE utf8_bin NOT NULL,
  `combustible` varchar(255) COLLATE utf8_bin NOT NULL,
  `list_img` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculo_alquiler`
--

INSERT INTO `vehiculo_alquiler` (`id`, `user_id`, `matricula`, `marca`, `modelo`, `motor`, `cambio`, `color`, `combustible`, `list_img`, `descripcion`) VALUES
(1, NULL, '5814hdp', 'seat', 'ibiza', 'v8', 'manual', 'blanco', 'gasolina', '', ''),
(2, NULL, '8965xt', 'bmw', 'Serie 1', 'v6', 'manual', 'granate', 'diesel', '', ''),
(3, 3, '7845gf', 'ford', 'focus', 'v4', 'automatico', 'azul', 'diesel', '', ''),
(4, NULL, '1598rpy', 'citroen', 'cactus', 'v3', 'automatico', 'blanco', 'gasolina', '', ''),
(5, NULL, '7480pt', 'volskwagen', 'golf', 'v6', 'manual', 'negro', 'gasolina', '', ''),
(6, NULL, '1234xcv', 'porsche', 'panamera', 'v12', 'automatico', 'azul electrico', 'gasolina', '', ''),
(7, NULL, '4536tp', 'ford', 'mustang', 'v8', 'automatico', 'rojo', 'gasolina', '', ''),
(8, NULL, '8426bnp', 'ford', 'kuga', 'v4', 'manual', 'gris', 'diesel', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_leasing`
--

CREATE TABLE `vehiculo_leasing` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `matricula` varchar(255) COLLATE utf8_bin NOT NULL,
  `marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `motor` varchar(255) COLLATE utf8_bin NOT NULL,
  `cambio` varchar(255) COLLATE utf8_bin NOT NULL,
  `color` varchar(255) COLLATE utf8_bin NOT NULL,
  `combustible` varchar(255) COLLATE utf8_bin NOT NULL,
  `list_img` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculo_leasing`
--

INSERT INTO `vehiculo_leasing` (`id`, `user_id`, `matricula`, `marca`, `modelo`, `motor`, `cambio`, `color`, `combustible`, `list_img`, `descripcion`) VALUES
(2, NULL, '1234ABC', 'Toyota', 'Prado', '2.1 TDI 145Cv', 'Manual', 'Gris oscuro', 'Diesel', 'Prado1.png', 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.'),
(4, NULL, '1234ABC', 'Audi', 'TT S-Line Edition', '2.0 TDI ', 'Automatico', 'Blanco', 'Diesel', 'Tt1.png', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.'),
(5, NULL, '1234abc', 'Ford', 'Escape', '2.0 TDI 140Cv ', 'Manual ', 'Gris', 'Diesel', 'Escape1.png', 'Proin eget tortor risus. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, NULL, '1234abc', 'Suzuki', 'Jimny', '1.9i 115Cv', 'Automatico', 'Gris', 'Gasolina', 'Jimny1.png', 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.'),
(7, NULL, '1234ABC', 'Toyota', 'Corolla', '1.8 FSI 125Cv', 'Manual', 'Gris Oscuro', 'Diesel', 'Corolla1.png', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.'),
(8, NULL, '1234ABC', 'Fiat', 'Siena', '1.6i 105Cv', 'Manual', 'Rojo', 'Gasolina', 'Siena1.png', 'Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `vehiculo_id` (`vehiculo_id`);

--
-- Indices de la tabla `leasing`
--
ALTER TABLE `leasing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `vehiculo_id` (`vehiculo_id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo_alquiler`
--
ALTER TABLE `vehiculo_alquiler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `leasing`
--
ALTER TABLE `leasing`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `vehiculo_alquiler`
--
ALTER TABLE `vehiculo_alquiler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo_alquiler` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `leasing`
--
ALTER TABLE `leasing`
  ADD CONSTRAINT `leasing_ibfk_1` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo_leasing` (`id`),
  ADD CONSTRAINT `leasing_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `vehiculo_alquiler`
--
ALTER TABLE `vehiculo_alquiler`
  ADD CONSTRAINT `vehiculo_alquiler_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  ADD CONSTRAINT `vehiculo_leasing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
