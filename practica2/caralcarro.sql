-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2018 a las 12:06:50
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `fecha_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `cuerpo_noticia` varchar(10000) COLLATE utf8_bin NOT NULL,
  `list_img` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `autor`, `fecha`, `cuerpo_noticia`, `list_img`) VALUES
(11, 'Coche to flama', 'Miguel', '0000-00-00 00:00:00', 'qwwrw d d sdcsd hasdsabs bchjasb hcsbah dbahb dahsb d', ''),
(13, 'Buga to guapo', 'Miguel', '0000-00-00 00:00:00', 'qwwrw d d sdcsd hasdsabs bchjasb hcsbah dbahb dahsb d aknfjsn sdnj njnvjdldnbdjbdnd  ', ''),
(15, 'Coche ultimo modelo', 'Paco', '0000-00-00 00:00:00', 'hjsd hfshdi fjjifÃ± eiwj jh   hvueowÂ´periutgireyt84ytvf j', ''),
(16, 'Mega coche', 'Alonso', '0000-00-00 00:00:00', 'hjsd hfshdi fjjifÃ± eiwj jh   hvueowÂ´periutgireyt84ytvf j djsabf d uweh dcnsjcuhfluwhej  wseu wh', ''),
(17, 'Ejemplo1', 'Marta Perez', '0000-00-00 00:00:00', 'qteb trucuh chwuhgqcuqhufhuhcgqhecgqherchqgiqchgirhcrighqcoghqcuhgrcuhgreqhcgrhchihqeichgierchghcighcqihcgi hcigrhcqiqghc q hg iqh i gh cqihc qh grh vqvn ', ''),
(18, 'hola', 'hola', '2018-05-05 14:46:04', 'hola', ''),
(19, 'Así podría ser un renacido Audi A2', 'Noel', '2018-05-06 21:26:45', 'Ahora que, en plena fiebre SUV -cuyo éxito seguimos sin entender muy bien-, hay algunos fabricantes empeñados en rescatar modelos antiguos -como el glorioso Alpine A110 2017-, podría ser el momento perfecto para el regreso del Audi A2. ¿No te suena de nada? Es normal... porque pasó sin pena ni gloria por el mercado y supuso uno de los golpes más duros a la moral de la marca al no entender el público su producto. Ni su precio, claro. \\r\\n\\r\\nPuede que creas que todos los modelo que Audi -aquí tienes los mejores de la Historia- ha lanzado al mercado han sido siempre éxitos rotundos... y no vas demasiado desencaminado o desencaminada. Pero en toda trayectoria brillante siempre existen algunos borrones... y el Audi A2 es, sin duda alguna, uno de los más grandes del fabricante de Ingolstadt. Apareció en el año 2000 bajo la forma de un pequeño monovolumen que, fabricado en aluminio y con una riquísima dotación en materia de seguridad, no resultaba nada barato en comparación con sus rivales. Como siempre suele suceder con este tipo de apuestas... el mercado respondió con el peor de sus castigos: la indiferencia. \\r\\n\\r\\nAhora un artista gráfico ha imaginado cómo podría ser el regreso del Audi A2... y lo ha hecho a través de unos cuantos renders -los mejores de 2016-. El autor se llama Pino Cazetta y, según sus estimaciones, el modelo creado sólo sería unos cuatro centímetros más largo que el original, por lo que sus medidas quedarían en unos escuetos 3,86 metros por 1,67 de ancho y 1,55 de alto. ¿Sabes lo mejor? Que se ha animado a hacerlo tras saber que en el año 2011 la propia marca quiso jugar con la posibilidad de traerlo de nuevo entre nosotros a través del A2 Concept presentado en el Salón de Frankfurt. Como te habrás imaginado al no verle el aspecto SUV por ninguna parte, la idea no pasó del papel. \\r\\n\\r\\n¿Te ha gustado? Por lo menos este regreso del Audi A2 no lo ha convertido en un todocamino como los que inundan los centros comerciales de media Europa. Queremos coches distintos, señores fabricantes. Como, por ejemplo, familiares -que siguen sin triunfar en España a pesar de ser más prácticos que muchos todocaminos-. Ah, el mercado... tan sabio en ocasiones. Y tan estúpido en otras tantas. ', 'AudiA2Nuevo.png');

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
(4, 'mama', 'mama', 'mama', 'mama', 0, '', 0),
(5, 'koko', 'koko', 'koko', '$2y$10$vopN1cTKgWgTQ.clXx7HP.NjO5nwBFuBW7XBuMpNHDs3rRDYJdFgq', 0, 'koko', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_alquiler`
--

CREATE TABLE `vehiculo_alquiler` (
  `id` int(11) UNSIGNED NOT NULL,
  `owner_user_id` int(11) UNSIGNED DEFAULT NULL,
  `matricula` varchar(255) COLLATE utf8_bin NOT NULL,
  `marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `motor` varchar(255) COLLATE utf8_bin NOT NULL,
  `cambio` varchar(255) COLLATE utf8_bin NOT NULL,
  `color` varchar(255) COLLATE utf8_bin NOT NULL,
  `combustible` varchar(255) COLLATE utf8_bin NOT NULL,
  `plazas` int(255) UNSIGNED NOT NULL,
  `base_price_day` decimal(10,2) UNSIGNED NOT NULL,
  `list_img` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `img_folder_name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculo_alquiler`
--

INSERT INTO `vehiculo_alquiler` (`id`, `owner_user_id`, `matricula`, `marca`, `modelo`, `motor`, `cambio`, `color`, `combustible`, `plazas`, `base_price_day`, `list_img`, `descripcion`, `img_folder_name`) VALUES
(2, NULL, '8965xt', 'bmw', 'Serie 1', 'v6', 'manual', 'granate', 'diesel', 0, '0.00', '', '', ''),
(4, NULL, '1598rpy', 'citroen', 'cactus', 'v3', 'automatico', 'blanco', 'gasolina', 0, '0.00', '', '', ''),
(5, NULL, '7480pt', 'volskwagen', 'golf', 'v6', 'manual', 'negro', 'gasolina', 0, '0.00', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_leasing`
--

CREATE TABLE `vehiculo_leasing` (
  `id` int(11) UNSIGNED NOT NULL,
  `owner_user_id` int(11) UNSIGNED DEFAULT NULL,
  `matricula` varchar(255) COLLATE utf8_bin NOT NULL,
  `marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `motor` varchar(255) COLLATE utf8_bin NOT NULL,
  `cambio` varchar(255) COLLATE utf8_bin NOT NULL,
  `color` varchar(255) COLLATE utf8_bin NOT NULL,
  `combustible` varchar(255) COLLATE utf8_bin NOT NULL,
  `plazas` int(255) UNSIGNED NOT NULL,
  `base_price_day` decimal(10,2) UNSIGNED NOT NULL,
  `list_img` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_bin NOT NULL,
  `img_folder_name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculo_leasing`
--

INSERT INTO `vehiculo_leasing` (`id`, `owner_user_id`, `matricula`, `marca`, `modelo`, `motor`, `cambio`, `color`, `combustible`, `plazas`, `base_price_day`, `list_img`, `descripcion`, `img_folder_name`) VALUES
(4, NULL, '1234ABC', 'Audi', 'TT S-Line Edition', '2.0 TDI ', 'Automatico', 'Blanco', 'Diesel', 2, '36.95', 'Tt1.png', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.', 'tt_s_line'),
(5, NULL, '1234abc', 'Ford', 'Escape', '2.0 TDI 140Cv ', 'Manual ', 'Gris', 'Diesel', 5, '23.95', 'Escape1.png', 'Proin eget tortor risus. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'ford_escape'),
(6, NULL, '1234abc', 'Suzuki', 'Jimny', '1.9i 115Cv', 'Automatico', 'Gris', 'Gasolina', 3, '21.95', 'Jimny1.png', 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.', 'suziki_jimny'),
(8, NULL, '1234ABC', 'Fiat', 'Siena', '1.6i 105Cv', 'Manual', 'Rojo', 'Gasolina', 5, '23.95', 'Siena1.png', 'Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'fiat_siena'),
(11, NULL, '1374CBA', 'Toyota', 'Corolla', '2.0 TDI 130Cv', 'Manual', 'Gris', 'Diesel', 5, '25.95', 'Corolla1.png', 'Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus.', 'to_corolla'),
(12, NULL, '4689AHB', 'Toyota', 'Prado', '2.5 TDI 160Cv', 'Automatico', 'Antracita', 'Diesel', 7, '28.95', 'Prado1.png', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.', 'to_prado'),
(13, NULL, '4985AHD', 'Ferrari', 'Testarossa', 'V12 4943cc 390CV', 'Manual', 'Rojo Ferrari', 'Gasolina', 2, '289.99', 'ferrari_testa1.png', 'Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat.', 'fer_testa');

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
  ADD KEY `user_id` (`owner_user_id`);

--
-- Indices de la tabla `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`owner_user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vehiculo_alquiler`
--
ALTER TABLE `vehiculo_alquiler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  ADD CONSTRAINT `vehiculo_alquiler_ibfk_1` FOREIGN KEY (`owner_user_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo_leasing`
--
ALTER TABLE `vehiculo_leasing`
  ADD CONSTRAINT `vehiculo_leasing_ibfk_1` FOREIGN KEY (`owner_user_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
