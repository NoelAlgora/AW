-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 08:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caralcarro`
--

-- --------------------------------------------------------

--
-- Table structure for table `alquiler`
--

CREATE TABLE `alquiler` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `vehiculo_id` int(11) UNSIGNED NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `alquiler`
--

INSERT INTO `alquiler` (`id`, `user_id`, `vehiculo_id`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 3, 6, '2018-05-08 00:00:00', '2018-05-17 00:00:00'),
(2, 3, 3, '2018-05-08 00:00:00', '2018-05-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leasing`
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
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL,
  `cuerpo_noticia` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `autor`, `fecha`, `cuerpo_noticia`) VALUES
(11, 'Coche to flama', 'Miguel', '0000-00-00 00:00:00', 'qwwrw d d sdcsd hasdsabs bchjasb hcsbah dbahb dahsb d'),
(13, 'Buga to guapo', 'Miguel', '0000-00-00 00:00:00', 'qwwrw d d sdcsd hasdsabs bchjasb hcsbah dbahb dahsb d aknfjsn sdnj njnvjdldnbdjbdnd  '),
(15, 'Coche ultimo modelo', 'Paco', '0000-00-00 00:00:00', 'hjsd hfshdi fjjifÃ± eiwj jh   hvueowÂ´periutgireyt84ytvf j'),
(16, 'Mega coche', 'Alonso', '0000-00-00 00:00:00', 'hjsd hfshdi fjjifÃ± eiwj jh   hvueowÂ´periutgireyt84ytvf j djsabf d uweh dcnsjcuhfluwhej  wseu wh'),
(17, 'Ejemplo1', 'Marta Perez', '0000-00-00 00:00:00', 'qteb trucuh chwuhgqcuqhufhuhcgqhecgqherchqgiqchgirhcrighqcoghqcuhgrcuhgreqhcgrhchihqeichgierchghcighcqihcgi hcigrhcqiqghc q hg iqh i gh cqihc qh grh vqvn '),
(18, 'hola', 'hola', '2018-05-05 14:46:04', 'hola');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` int(9) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `apellido`, `email`, `password`, `telefono`, `descripcion`) VALUES
(1, 'carlos', 'martin', 'carlos@hotmail.com', 'carlos', 679696231, 'Soy Carlos y me encantan los lambos!'),
(2, 'paco', 'peña', 'pepe', 'pepe', 645789542, 'Me encantan los ferraris'),
(3, 'hola', 'caracola', 'caracola@adfjkas.com', 'hola', 12345678, 'hola me llamo hola'),
(4, 'hola', 'peña', 'pepe', 'hola', 645789542, 'Me encantan los ferraris');

-- --------------------------------------------------------

--
-- Table structure for table `vehiculo_alquiler`
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
  `list_img` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vehiculo_alquiler`
--

INSERT INTO `vehiculo_alquiler` (`id`, `user_id`, `matricula`, `marca`, `modelo`, `motor`, `cambio`, `color`, `combustible`, `list_img`) VALUES
(1, NULL, '5814hdp', 'seat', 'ibiza', 'v8', 'manual', 'blanco', 'gasolina', ''),
(2, NULL, '8965xt', 'bmw', 'Serie 1', 'v6', 'manual', 'granate', 'diesel', ''),
(3, 3, '7845gf', 'ford', 'focus', 'v4', 'automatico', 'azul', 'diesel', ''),
(4, NULL, '1598rpy', 'citroen', 'cactus', 'v3', 'automatico', 'blanco', 'gasolina', ''),
(5, NULL, '7480pt', 'volskwagen', 'golf', 'v6', 'manual', 'negro', 'gasolina', ''),
(6, NULL, '1234xcv', 'porsche', 'panamera', 'v12', 'automatico', 'azul electrico', 'gasolina', ''),
(7, NULL, '4536tp', 'ford', 'mustang', 'v8', 'automatico', 'rojo', 'gasolina', ''),
(8, NULL, '8426bnp', 'ford', 'kuga', 'v4', 'manual', 'gris', 'diesel', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehiculo_leasing`
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
-- Dumping data for table `vehiculo_leasing`
--

INSERT INTO `vehiculo_leasing` (`id`, `user_id`, `matricula`, `marca`, `modelo`, `motor`, `cambio`, `color`, `combustible`, `list_img`, `descripcion`) VALUES
(2, NULL, '1234ABC', 'Toyota', 'Prado', '2.1 TDI 145Cv', 'Manual', 'Gris oscuro', 'Diesel', 'Prado1.png', 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.'),
(4, NULL, '1234ABC', 'Audi', 'TT S-Line Edition', '2.0 TDI ', 'Automatico', 'Blanco', 'Diesel', 'Tt1.png', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.'),
(5, NULL, '1234abc', 'Ford', 'Escape', '2.0 TDI 140Cv ', 'Manual ', 'Gris', 'Diesel', 'Escape1.png', 'Proin eget tortor risus. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, NULL, '1234abc', 'Suzuki', 'Jimny', '1.9i 115Cv', 'Automatico', 'Gris', 'Gasolina', 'Jimny1.png', 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.'),
(7, NULL, '1234ABC', 'Toyota', 'Corolla', '1.8 FSI 125Cv', 'Manual', 'Gris Oscuro', 'Diesel', 'Corolla1.png', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.'),
(8, NULL, '1234ABC', 'Fiat', 'Siena', '1.6i 105Cv', 'Manual', 'Rojo', 'Gasolina', 'Siena1.png', 'Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `vehiculo_id` (`vehiculo_id`);

--
-- Indexes for table `leasing`
--
ALTER TABLE `leasing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `vehiculo_id` (`vehiculo_id`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehiculo_alquiler`
--
ALTER TABLE `vehiculo_alquiler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leasing`
--
ALTER TABLE `leasing`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehiculo_alquiler`
--
ALTER TABLE `vehiculo_alquiler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo_alquiler` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leasing`
--
ALTER TABLE `leasing`
  ADD CONSTRAINT `leasing_ibfk_1` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo_leasing` (`id`),
  ADD CONSTRAINT `leasing_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `vehiculo_alquiler`
--
ALTER TABLE `vehiculo_alquiler`
  ADD CONSTRAINT `vehiculo_alquiler_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  ADD CONSTRAINT `vehiculo_leasing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
