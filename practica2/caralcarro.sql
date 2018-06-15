-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2018 a las 22:28:25
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
(20, 'AsÃ­ podrÃ­a ser un renacido Audi A2', 'admin', '2018-06-15 21:59:12', 'Ahora que, en plena fiebre SUV -cuyo Ã©xito seguimos sin entender muy bien-, hay algunos fabricantes empeÃ±ados en rescatar modelos antiguos -como el glorioso Alpine A110 2017-, podrÃ­a ser el momento perfecto para el regreso del Audi A2. Â¿No te suena de nada? Es normal... porque pasÃ³ sin pena ni gloria por el mercado y supuso uno de los golpes mÃ¡s duros a la moral de la marca al no entender el pÃºblico su producto. Ni su precio, claro. \r\n\r\nPuede que creas que todos los modelo que Audi ha lanzado al mercado han sido siempre Ã©xitos rotundos... y no vas demasiado desencaminado o desencaminada. Pero en toda trayectoria brillante siempre existen algunos borrones... y el Audi A2 es, sin duda alguna, uno de los mÃ¡s grandes del fabricante de Ingolstadt. ApareciÃ³ en el aÃ±o 2000 bajo la forma de un pequeÃ±o monovolumen que, fabricado en aluminio y con una riquÃ­sima dotaciÃ³n en materia de seguridad, no resultaba nada barato en comparaciÃ³n con sus rivales. Como siempre suele suceder con este tipo de apuestas... el mercado respondiÃ³ con el peor de sus castigos: la indiferencia. \r\n\r\nAhora un artista grÃ¡fico ha imaginado cÃ³mo podrÃ­a ser el regreso del Audi A2... y lo ha hecho a travÃ©s de unos cuantos renders -los mejores de 2016-. El autor se llama Pino Cazetta y, segÃºn sus estimaciones, el modelo creado sÃ³lo serÃ­a unos cuatro centÃ­metros mÃ¡s largo que el original, por lo que sus medidas quedarÃ­an en unos escuetos 3,86 metros por 1,67 de ancho y 1,55 de alto. Â¿Sabes lo mejor? Que se ha animado a hacerlo tras saber que en el aÃ±o 2011 la propia marca quiso jugar con la posibilidad de traerlo de nuevo entre nosotros a travÃ©s del A2 Concept presentado en el SalÃ³n de Frankfurt. Como te habrÃ¡s imaginado al no verle el aspecto SUV por ninguna parte, la idea no pasÃ³ del papel.', 'AudiA2Nuevo.png'),
(21, 'Â¿CuÃ¡l es el coche mÃ¡s vendido de todos los tiempos?', 'admin', '2018-06-15 22:01:03', 'La tecnologÃ­a japonesa se alza con el primer puesto en el pÃ³dium de los coches mÃ¡s vendidos de todos los tiempos. Durante dÃ©cadas, el Volkswagen Beetle se mantuvo como lÃ­der indiscutible, pero el cambio de siglo ha traÃ­do consigo nuevos lÃ­deres.\r\n\r\nAsÃ­, en el &quot;top ten&quot; de los coches mÃ¡s vendidos en todo el mundo, el Toyota Corolla (que en Europa se conoce ahora como Toyota Auris) encabeza la lista con mÃ¡s de 41 millones de unidades. Los primeros modelos datan de los aÃ±os sesenta y, a dÃ­a de hoy, sigue siendo un lÃ­der en ventas de la marca.', 'Corolla1996.png'),
(22, 'Cambio de aceite Ford Focus: todo lo que debes saber', 'admin', '2018-06-15 22:05:20', 'Si has comprado un Ford Focus o tienes uno hace unos aÃ±os estas lÃ­neas te interesan.\r\n\r\nSi quieres disfrutar de tu vehÃ­culo en buenas condiciones, debes de ser riguroso en las fechas de cambio de aceite. Y es que, el cambio de aceite es una operaciÃ³n que no podemos descuidar. SerÃ¡ siempre aconsejable entonces respetar estas fechas, el no hacer esta operaciÃ³n en los plazos indicados puede acortar la vida de tu coche de manera considerable. Si has comprado un Ford Focus o tienes uno hace unos aÃ±os estas lÃ­neas te interesan, pues vamos a hablar del cambio de aceite del Ford Focus.\r\n\r\nAunque Ford nos de unos plazos para cambiar el aceite y el filtro, es importante que revisemos de manera periÃ³dica los niveles. SerÃ¡ siempre recomendable que abramos el capÃ³ y revisemos el nivel de aceite del motor. Si descubrimos que no es el Ã³ptimo serÃ­a necesario acudir a un taller para una revisiÃ³n. Si en estas revisiones particulares todo estÃ¡ correcto, la marca americana nos recomienda que procedamos al cambio de aceite y filtro cada 20.000 km o 12 meses.', 'FordFocus.png'),
(23, 'EntÃ©rate de los neumÃ¡ticos que necesitas segÃºn el coche que tengas', 'admin', '2018-06-15 22:16:03', 'Los neumÃ¡ticos son muy importantes para la seguridad en la carretera, asÃ­ como para el consumo de los vehÃ­culos. Es por eso que, a la hora de cambiar las ruedas, debemos tener en cuenta determinados factores, con el fin de escoger las mejores y las mÃ¡s adecuadas para nuestro vehÃ­culo. Estas son las recomendaciones de la OrganizaciÃ³n de Consumidores y Usuarios (OCU) para el cambio de neumÃ¡ticos:\r\n\r\nCada neumÃ¡tico tiene un nÃºmero grabado en el lateral que indica la medida\r\n\r\n- 175/65 R14T: estÃ¡n indicados para coches pequeÃ±os, como Fiat Panda, Volkswagen Up, Toyota Yaris, Nissan Micra o Lancia Ypsilon.\r\n\r\n- 185/60 R14H y 185/65 R15H: suelen ser adecuados para coches como Seat Ibiza, Fiat Punto, Volkswagen Polo.\r\n\r\n- 195/65 R15V: este neumÃ¡tico estÃ¡ pensado para coches medianos.\r\n\r\n- 205/55 R 16 V: suelen usarse en coches como Audi A3, Opel Astra o Mercedes Classe B.\r\n\r\n- 225/45 R17W: este tipo se utiliza en berlinas, AudiA4, Mercedes Classe C, BMW Serie 3 o Volkswagen Passat.\r\n\r\nLos neumÃ¡ticos tambiÃ©n cuentan con unos cÃ³digos en la banda lateral\r\n\r\n- 175: Es la anchura del neumÃ¡tico.\r\n\r\n- 65: Perfil. RelaciÃ³n altura del flanco/anchura.\r\n\r\n- R: Arquitectura. Indica que el neumÃ¡tico es radial.\r\n\r\n- 15: Indica el diÃ¡metro exterior de la llanta.\r\n\r\n- 91: Es el Ã­ndice de carga.\r\n\r\n- H: indica la velocidad mÃ¡xima que puede soportar el neumÃ¡tico.\r\n\r\nCuÃ¡ndo debemos cambiar los neumÃ¡ticos\r\n\r\nCada cierto tiempo revisa el testigo de desgaste, un indicador situado entre las bandas de rodamiento. Si ambas se encuentran al mismo nivel es una clara seÃ±al de que debemos cambiar las ruedas (el lÃ­mite legal de profundidad es de 1,6 mm).', 'rueda.png'),
(24, 'Ford Kuga, Â¿mejor diÃ©sel o gasolina?', 'admin', '2018-06-15 22:21:17', 'En primer lugar, analicemos las motorizaciones del Ford Kuga. La firma del Ã³valo azul ha dispuesto una gama de propulsores compuesta por seis unidades diferentes. Tenemos tres opciones de gasolina, todas ellas sobre la base del conocido motor 1.5 EcoBoost turbo con potencias de 120, 150 y 180 CV, asÃ­ como un nivel de par de 240 Nm que es comÃºn en las tres motorizaciones. Los consumos medios homologados son de entre 6,2 y 7,4 litros a los 100 km.\r\n\r\nPor otro lado, Ford tambiÃ©n ofrece propulsores diÃ©sel. El primero de ellos es un 1.5 TDCI de 120 CV con 270 Nm de par motor, seguido de una unidad de 2.0 litros TDCI con 150 y 180 CV, asÃ­ como un nivel de par de 370 y 400 Nm, respectivamente, mientras que los consumos medios homologados oscilan entre los 4,4 y los 5,2 litros a los 100 km. TambiÃ©n encontramos transmisiones manuales y automÃ¡ticas de seis velocidades que envÃ­an la potencia bien al tren delantero o bien a un sistema de tracciÃ³n a las cuatro ruedas, lo que tambiÃ©n puede afectar al consumo tanto en el Ford Kuga gasolina como diÃ©sel.\r\n\r\nTambiÃ©n te dirÃ© que el Kuga es un SUV con 4.541 mm de longitud, 1.856 mm de anchura y 1.694 mm de altura, asÃ­ como una distancia entre ejes de 2.690 mm. Se trata de un todocamino de tamaÃ±o medio que rivaliza con modelos como el Nissan Qashqai o el Peugeot 3008, entre otros muchos, y que registra pesos que van desde los 1.579 a los 1.716 kilogramos.\r\n\r\nEntonces, con estos datos, Â¿quÃ© interesa mÃ¡s, diÃ©sel o gasolina? Las opciones mÃ¡s interesantes son las intermedias para un coche de sus caracterÃ­sticas, es decir, el 1.5 EcoBoost de 150 CV (desde 23.200 euros) y el 2.0 TDCI de 150 CV (desde 26.240 euros). Por consumos, el diÃ©sel siempre va a salir victorioso, ademÃ¡s de que el par, en este caso 370 Nm, favorecerÃ¡ enormemente en recuperaciones o trabajando a plena carga. Mi recomendaciÃ³n es que, si no vas a hacer menos de 10.000-12.000 kilÃ³metros anuales, puedes elegir el diÃ©sel. \r\n\r\nSi te encuentras en la franja de los 15.000 kilÃ³metros anuales y tus desplazamientos por autovÃ­a son esporÃ¡dico, aÃºn podrÃ¡s elegir el 1.5 EcoBoost, el cual, ademÃ¡s, tiene un mantenimiento mÃ¡s asequible y pagarÃ¡s menos impuestos y tasas en la ITV. La elecciÃ³n de transmisiÃ³n y sistemas de tracciÃ³n es una percepciÃ³n personal, pero ambas mecÃ¡nicas estÃ¡n disponibles con todas las opciones.', 'ford-kuga-diesel-gasolina.jpg');

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
(7, 'admin', 'admin', 'admin@gmail.com', '$2y$10$5ZueKswdE.KxEgITtWYCTeff88NzmMiHHSO98vE6AElgtD7nrVx8O', 900000000, 'Soy el admin del sitio', 1);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
