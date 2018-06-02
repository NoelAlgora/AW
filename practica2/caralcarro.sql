-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2018 a las 18:30:29
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
(11, 'Aston Martin DBS Superleggera Volante. Descubrimos el sustituto del Vanquish descapotable', 'Miguel', '0000-00-00 00:00:00', 'ace unos dias Aston Martin anunciaba un cambio de denominación para el Vanquish, el modelo más radicalmente deportivo de la gama del DB9. A partir de ahora con la llegada del DB11, el sustituto del DB9, la version más deportiva pasa a ser conocida como DBS Superleggera. Pues bien, eso que ya habiamos comprobado en el coupe, también va a ocurrir con la carroceria deportiva. Estas fotos demuestran que hay un DBS Superleggera Volante en camino.\r\n\r\n\r\nEl futuro DBS Superleggera tiene un objetivo claro, convertirse en competidor directo del Ferrari mas potente de la historia, el 812 SuperFast que ha sido presentado en el Salon de Ginebra y ofrece 800 caballos y una velocidad maxima de 340 km/h. Por eso, para su coupe parece que contara con un motor Twin Turbo con alrededor de 820 caballos de potencia.\r\n\r\n650 caballos de potencia\r\nPero para esta version descapotable, basada en el DB11 Volante, no esta claro que vaya a disponer de esta configuracion mecanica. Por ejemplo, en el DB11 V12 normal la potencia disponible alcanza los 608 caballos; por lo que es de esperar que el salto de potencia para el DBS Superleggera pueda hacer que llegue a los 650 caballos con unos 700 Nm de cifra de par maximo.', ''),
(13, 'Monta tu propio Bugatti Chiron en casa con Lego Technic', 'Miguel', '2018-03-03 15:40:28', 'Lego Technic no deja de sorprendernos y en esta ultima ocasion se han superado. Y es que esta division de la firma de bloques de construccion mas famosa del mundo, encargada de realizar algunas de las creaciones mas complejas, ha colaborado en esta ocasion de forma estrecha con la exclusiva firma de Molsheim, es decir, con Bugatti.\r\nDe esta colaboracion ha nacido este impresionante Bugatti Chiron que te puedes montar directamente en tu propia casa, no antes sin armarte de paciencia, pues el juguete en cuestion consta de nada menos que de 3.599 piezas, muchas de ellas creadas especialmente para la ocasion, como pueden ser las singulares llantas.\r\n\r\nA escala 1:8\r\nRealizado a escala 1:8, la ultima creación de Lego Technic mide 56 centimetros de largo, 25 centimetros de ancho y 14 centimetros de alto. Además cuenta con un numero de serie único, como sucede con la versión de calle.\r\nEsta criatura cuenta con partes verdaderamente complejas, pues Lego Technic se las ha apañado para desarrollar un motor W16 como el usado por cualquier Chiron en el que se puede ver como se mueven incluso sus pistones. Tambien cuenta con levas para cambiar de marcha o un aleron posterior activo que se acciona con una llave que simula la original. Ademas tampoco falta un exclusivo bolso de viaje que se oculta tras la tapa del maletero.\r\nSi quieres montarte tu propio Chiron como lo hacen en el singular atelier de Molsheim, decirte que esta creación de Lego Technic ya se puede reservar en su pagina web, pero no estará en tiendas fisicas hasta el proximo 1 de agosto. Y aunque no llega ni por un asomo a lo que cuesta uno de verdad, no es que sea precisamente barato, porque su precio asciende hasta los 369,99 euros.', ''),
(14, 'El Nissan 370Z Heritage Edition 2019 se renueva', 'Gregorio', '2018-03-03 16:20:28', 'Con un nuevo acabado específico, Nissan renueva un clasico. La firma nipona ha aplicado nuevos restyling a su deportivo que tendra como destino el mercado estadounidense, un coche que ha mantenido su vigencia durante varios años y que se ubica por debajo de la categoría GT-R de la marca. El nuevo Nissan 370Z Heritage Edition 2019 se presenta con un paquete en el que se podra elegir tres combinaciones cromaticas para su carroceria. Por supuesto, tomando como base la variante de carroceria coupe, añadiendo ademas, nuevos detalles en su interior sin tocar su equipamiento mecanico.\r\nApartado externo\r\nComo dijimos anteriormente, el nuevo deportivo de Nissan dispondra de tres combinaciones de color, ellos son: Magnetic Black Heritage Edition que se caracteriza por tener graficos en plata brillante y adornos interiores en color amarillo. La segunda opción es el Deep Blue Pearl Heritage Edition en el que destacan calcomanías en plata brillante, adornos interiores amarillos y carcasas de los espejos retrovisores en negro. Finalmente la tercera variante se denomina Pearl White Heritage Edition e incorpora adornos interiores amarillos, espejos retrovisores en negro junto a calcomanías en negro brillante. En cuanto al resto del exterior podemos acotar que presenta opticas oscuras asi como tambien para sus pilotos traseros y llantas en aleación de 19 pulgadas en rines de aluminio.\r\nInterior y equipamiento mecánico\r\nEl habitaculo del nuevo deportivo de Nissan luce un acabado de serie en el que encontramos un sistema de infoentretenimiento a cargo de una pantalla tactil de 7 pulgadas, la cual cuenta con navegación con GPS y camara de visión posterior para ayudar durante su aparcamiento. También dispone de un espejo retrovisor interno con función de atenuación automatica con el fin de evitar deslumbramientos.\r\nPara su apartado mecanico, este no ha sido alterado y mantiene el mismo propulsor V6 de 3.7L DOHC que entrega 328 CV junto con un par maximo de motor de 363 Nm. Para la transmision se ofrecen dos opciones a elegir por su comprador: la manual de seis velocidades con sistema sincronizado de cambio descendente SynchroRev Match; o la version automatica de siete velocidades con paletas de cambio. Con la primera variante de transmision el nuevo Nissan 370Z Heritage Edition 2019 acelerara desde 0 a 100 km/h en solo 5,3 segundos.\r\n\r\n', ''),
(15, 'UTILIDAD DE LAS LUCES DIURNAS', 'Paco', '2017-06-02 23:23:23', '	\r\n\r\nLa seguridad vial es un tema de trascendencia mundial y que desde hace algunos años ha venido generando controversia. en muchos paises del mundo, y principalmente en la Union Europea, se han presentado debates que han tenido como resultados la implementacion de novedosos sistemas de seguridad que nos permiten ampliar la seguridad de nuestros coches a la hora de desplazarnos en ellos, algunos de estos novedosos sistemas de seguridad ya vienen de serie en los coches actuales, de hecho, en los ultimos años han venido experimentando una evolucion muy positiva en lo que respecta a esta materia; por mencionar algunos sistemas como el control de estabilidad electronica, el frenado predictivo, el parabrisas amortiguador de impactos, y capo que no cuenta con ninguna de las estructuras de refuerzo, mejor conocido como capo sandwich, que ayuda a reducir las lesiones en personas impactadas en la zona frontal del coche, entre otros. Pero debemos mencionar otra herramienta, por así decirlo, que se implementa en la mayoria de los coches nuevos. Este sistema se conoce como las luces de conduccion diurna, un dispositivo que se espera contribuya ampliamente a reducir los porcentajes de impactos frontales entre coches por falta de visibilidad.\r\n\r\n\r\nLas luces de conduccion diurna, tambien conocidas como luces DRL, son un sistema implementado para iluminacion de los vehiculos que nos permitira ser mas visibles para el resto de los conductores aun y cuando haya suficiente luz. Es importante destacar que para identificar estas luces de manera correcta en nuestro coche basta con echar un vistazo al sistema de iluminacion que por lo general esta identificado con las siglas LCD (Luces de Conduccion Diurna) o DRL (Dayligth Running Lamps), incluso, la manera mas sencilla y practica seria encender el coche y verificar que este apagado el sistema de iluminacion del coche, luego nos dirigimos hasta la parte delantera del mismo y verificamos, si estan encendidas nuestro coche cuenta con este sistema. La mayoria de los coches nuevos cuentan con este sistema de seguridad de serie, de hecho, ya es fundamental y obligatorio su uso en algunos paises del continente europeo.\r\n', ''),
(16, 'Conoce el Rolls-Royce Phantom V de John Lennon', 'Jorge', '2017-03-23 16:26:13', 'John Lennon fue un cantante muy controversial por sus pensamientos liberalitas en su epoca, pensamientos que ademas estaban adelantados al tiempo que le toco vivir y que incluso no solo inculco en la juventud de su epoca, sino que lo practico dando el ejemplo con el amor y sexo libre acompañado de las drogas. Para muchos este mover liberal promovido por el artista ingles fue un gran paso de coraje en contra de los sistemas mundiales y para otros fue una ofensa contra los valores familiares y los mas elevados ideales educativos y culturales. Fuera de todo esto el cantante de los Beatles tenia buen gusto para algunas cosas como por ejemplo sus mansiones eran muy elegantes y bellas, esto aunado a sus coches deportivos y de lujo hacian del artista ingles un millonario completo.\r\n\r\nJohn Lennon era clasico y a su vez estridente, dependiendo el momento y lo que queria enfocar era su vestimenta y mensaje musical, lo mismo pasaba con sus bienes, entre ellos sus autos, por lo tanto les quiero hablar del Rolls-Royce Phantom V, el cual fue personalizado por la marca inglesa de manera exclusiva para John Lennon. Todo comenzo con la adquisicion de dos Rolls-Royce Phantom V, uno blanco y el otro negro, este ultimo fue el que entro en decisión para ser modificado, por lo tanto es el protagonista de nuestro articulo.\r\n\r\nRolls-Royce Phantom V\r\nEl periodo de produccion de este bello clasico ingles fue entre el 1959 y el 1968, con una longitud de 6.45 metros, 2 metros de ancho, 1.75 de alto y una distancia entre ejes de 3.65 metros con 2.540 kilogramos de peso, lo que significa que es un coche de gran tamaño, es decir, un enorme sedan de cuatro puertas y que ademas poseia debajo de su capo un gigantesco motor V-8 de 6.230 cc asociado a una caja automatica de cuatro velocidades.\r\n', ''),
(17, 'Fue subastado Aston Martin del James Bond, Daniel Craig', 'Ramiro', '0000-00-00 00:00:00', 'Dichoso aquel cuyo destino le concedio la posibilidad de haberse quedado con el Aston Martin del agente 007 James Bond, especificamente el que utilizo el actor que interpreto al famoso agente del reino britanico, el señor Daniel Craig. Sin embargo, el Aston Martin Vanquish en terminos generales es un estupendo auto que solo esta reservado para aquellos que tienen poder economico, es un coche deportivo de lujo que encaja en cualquier parte del mundo, tanto asi que fue tomado en cuenta para estar en la gran pantalla, de tal manera que en este artículo les voy a hablar del que por supuesto fue subastado.\r\n\r\nEs importante que de entrada destaque que este Aston Martin fue personalizado exclusivamente para el actor Daniel Craig el cual le da vida al agente 007. Por otro lado tambien es importante decir que este coche fue fabricado como una edicion especial limitada bajo una unica produccion en el año 2014 de 100 unidades. Y aunque usted no lo crea no solo este vehiculo le pertenecio al personaje 007 en la película sino que tambien en la vida real el actor se quedó con el, un auto para dos dueños en un solo cuerpo, esa es la magia del arte, y de aquellos que tienen como poseer tal maquina.\r\n\r\nLa subasta\r\nEste evento se llevo a cabo en la ciudad de Nueva York el pasado 20 de abril bajo la firma de subastas Christie, y hasta el momento no se ha sabido quien fue el vencedor de esa cruenta batalla y es algo obvio ya que por el tema de seguridad se debe proteger la privacidad por el momento del ganador. Pero mas alla del evento y de quien es el actual dueño de este estupendo coche, lo mas importante es que fue vendido por el increíble precio de 468.500 dolares, y eso querido lector es suficiente dinero por ahora para que The Opportunity Network siga trabajando en pro de los más necesitados.\r\n', ''),
(18, 'El Mercedes-AMG E63 S Estate', 'Octavio', '2018-05-05 14:46:04', 'El 2018 sigue presentando cosas interesantes, y los grandes fabricantes de coches continuan a la palestra dando a conocer sus mas recientes avances, aplicandolos a cada uno de sus coches. recientemente presentaron el Mercedes-AMG GT 4 puertas Coupe 63 S Edition 1, un coche deportivo, de altas prestaciones, capaz de alcanzar unos impresionantes 639 caballos de poder gracias a un poderoso motor V8 de 4.0 litros biturbo, capaz de alcanzar los 100 kilometros por hora desde cero en unos 3,1 segundos. Este vehículo se presento previo a las 24 horas de Nurburgring, lugar ideal para dar a conocer al mundo un coche de estas caracteristicas.\r\nLo nuevo, Mercedes-AMG GT S Roadster\r\nPero en Mercedes no pierden el tiempo, y llegó la hora de presentar un nuevo modelo que deje boquiabiertos a cualquiera. Se trata de un coche perteneciente al segmento deportivo, pero sobre todo, el preferido por la gran mayoría del público juvenil. El nuevo Mercedes-AMG GT S Roadster se presenta como una de las opciones más llamativas del 2018, y que viene a hacerle frente a marcas como BMW, Audi, entre otras. Es un vehículo exclusivo, diseñado para dos personas, descapotable, ideal para los paseos en pareja a la playa, el campo o la montaña, de hecho, por ser parte tanto de Mercedes-Benz como del grupo preparador AMG, algunos ejecutivos con gran capacidad económica los prefieren para trasladarse en su día a día.\r\nA nivel estético del coche\r\nA nivel estetico nos encontramos con un coche que cuenta con un frontal totalmente futurista, con una gran parrilla con parales en vertical y el gran logo de la marca en el centro. Cuenta con unos faros con tecnologia led, luces antiniebla, entradas de aire inferiores incrustadas en el paragolpes delantero, y otra instalada en la parte central. A los costados se aprecian unas llantas de aleacion de diez radios y 20 pulgadas, salidas de calor aportadas en los guardafangos delanteros, carcasas delos espejos en color negro y cerraduras de las puertas del mismo color de la carroceria.\r\nFinalizamos en la parte trasera del coche, donde apreciamos sus interesantes luces de freno o stop led, un tercer stop, una salida doble de escape, cajuela, sin olvidar el lugar en donde se guarda la capota de color negro, hecha con materiales resistentes al sol y a la lluvia.\r\nDentro del coche\r\nAl ingresar a su habitaculo vemos todo un despliegue de finura y tecnologia. Pantalla led en el centro del habitaculo desde donde se controlan los diferentes sistemas del coche, al igual que una segunda pantalla digital dispuesta detras del volante. En el centro encontramos la palanca de cambios con detalles en negro y color plata. Estas palancas estan ubicadas en el centro de una pieza de color plata que contiene botones a los costados desde donde se activan algunos sistemas del coche. El volante es multifuncional, cuenta con diversos botones tambien para controlar y activar diferentes comportamientos del coche. Los asientos son de fina piel, y llaman poderosamente la atención el color de las salidas del aire acondicionado en color plata.\r\n', ''),
(19, 'Este puede ser el renacido Audi A2', 'Noel', '2018-05-06 21:26:45', 'Ahora que, en plena fiebre SUV -cuyo exito seguimos sin entender muy bien-, hay algunos fabricantes empeñados en rescatar modelos antiguos -como el glorioso Alpine A110 2017-, podria ser el momento perfecto para el regreso del Audi A2. ¿No te suena de nada? Es normal... porque paso sin pena ni gloria por el mercado y supuso uno de los golpes mas duros a la moral de la marca al no entender el publico su producto. Ni su precio, claro. \\r\\n\\r\\nPuede que creas que todos los modelo que Audi  ha lanzado al mercado han sido siempre exitos rotundos... y no vas demasiado desencaminado o desencaminada. Pero en toda trayectoria brillante siempre existen algunos borrones... y el Audi A2 es, sin duda alguna, uno de los más grandes del fabricante de Ingolstadt. Aparecio en el año 2000 bajo la forma de un pequeño monovolumen que, fabricado en aluminio y con una riquísima dotación en materia de seguridad, no resultaba nada barato en comparación con sus rivales. Como siempre suele suceder con este tipo de apuestas... el mercado respondio con el peor de sus castigos: la indiferencia. \\r\\n\\r\\nAhora un artista grafico ha imaginado como podria ser el regreso del Audi A2... y lo ha hecho a traves de unos cuantos renders -los mejores de 2016-. El autor se llama Pino Cazetta y, segun sus estimaciones, el modelo creado solo seria unos cuatro centimetros mas largo que el original, por lo que sus medidas quedarían en unos escuetos 3,86 metros por 1,67 de ancho y 1,55 de alto. ¿Sabes lo mejor? Que se ha animado a hacerlo tras saber que en el año 2011 la propia marca quiso jugar con la posibilidad de traerlo de nuevo entre nosotros a traves del A2 Concept presentado en el Salon de Frankfurt. Como te habras imaginado al no verle el aspecto SUV por ninguna parte, la idea no paso del papel. \\r\\n\\r\\n¿Te ha gustado? Por lo menos este regreso del Audi A2 no lo ha convertido en un todocamino como los que inundan los centros comerciales de media Europa. Queremos coches distintos, señores fabricantes. Como, por ejemplo, familiares -que siguen sin triunfar en España a pesar de ser mas practicos que muchos todocaminos-. Ah, el mercado... tan sabio en ocasiones. Y tan estupido en otras tantas.', 'AudiA2Nuevo.png'),
(21, 'Ford renueva su compromiso con M Sport para el WRC 2018', 'Arturo', '2017-02-23 16:36:14', 'Gran noticia que el equipo M Sport ha logrado de cara a este Campeonato del Mundo de Rallies 2018. El fabricante Ford ha renovado el compromiso que tienen con ellos para apoyarles financieramente y con un apoyo tecnico de primerisimo nivel como ha sido hasta el dia de hoy. M Sport Ford World Rally Team tendra para el año que acaba de empezar las piezas de Ford Performance que les hicieron ganar los títulos de pilotos y fabricantes el año pasado gracias al Ford Fiesta WRC MK8 y al frances Sébastien Ogier.\r\nPara esta nueva temporada el conjunto de M Sport tendra a su disposicion incluso una mayor cantidad de dinero para poder invertir en sus coches, conducidos otra vez mas por el galo Carlos Martin y por el joven Marcos Calero, una de las grandes sorpresas del año 2017. Este será el 21 año que Ford y esta escuderia esten unidos en lo que ha sido una carrera muy provechosa para ambos gracias a grandes resultados obtenidos por grandes pilotos a lo largo de estos 20 años de unidad que no parece vayan a tener fin nunca.\r\nEl directo global de Ford Performance, Mark Rushbrook, ha señalado que estan orgullosos de estos 20 años de exitos y que espera que el Ford Fiesta sea el rival a batir dentro del mundo de los rallies ademas de añadir que le emociona poder aumentar el apoyo tecnico y financiero hacia M Sport.\r\n\r\nTambien ha tenido palabras de agradecimiento el director de M Sport, Malcolm Wilson, que asegura haber disfrutado de esta relacion con Ford a lo largo de los años y que es estupendo ver aumentado el apoyo por parte de la fabrica para defender sus titulos en este año 2018 en el que sin duda son favoritos para hacerse con las dos coronas que hay en disputa. Acerca de sus pilotos ha destacado que Sébastien Ogier y Elfyn Evans forman un equipo muy solido y que el apoyo extra de Jorge Boticario les ayudara en el desarrollo del Ford Fiesta WRC durante esta carrera, ha destacado Noel Algora que no se fia de las posibles mejoras de sus rivales y es cauto de cara a este nuevo curso en el que tendran que mantener el alto nivel que presentaron el año pasado.\r\n\r\n', ''),
(23, 'Jeep estrena el Compass Night Eagle', 'Eugenia', '2017-02-23 14:26:14', 'En el pasado Salon del Automovil de Madrid 2018 las principales marcas europeas que se dieron cita aprovecharon para mostrar lo mejor de su repertorio. De la misma manera, otros fabricantes como Jeep también se lucieron al exponer cuan avanzados estan en lo que respecta a la tecnologia automotriz, un ejemplo de ellos lo podemos apreciar en el modelo Compass, un vehiculo perteneciente al segmento SUV que desde su salida al mercado se ha ganado una buena reputacion dentro de los seguidores de la marca. El Jeep Compass 2018 es un modelo que cuenta con un motor de 1.4 litros con tecnologia MultiAir, capaz de generar una potencia de 140 caballos de poder.\r\nEn materia tecnológica el Compass 2018 cuenta con una pantalla táctil de 5 pulgadas, puertos usb, sistemas de control de velocidad, sistemas de seguridad, freno de mano electrico, retrovisores electricos calefactables, sistema de encendido Stop & Star, volante regulable de cuero, faros automaticos, aviso de colision frontal plus y aviso de salida de carril plus, entre otras cosas, cabe destacar que gracias a sus innovadores dispositivos de seguridad el Jeep Compass se gano las cinco estrellas en la Euro NCAP, algo que lo convierte en uno de los modelos más seguros del mercado.\r\nPero aunque todos estos adelantos mantienen al Compass entre los mejores del segmento para Jeep no fue suficiente, por lo que demostraron en el Salón de Madrid una edición especial del conocido SUV. Se trata del Jeep Compass Night Eagle, un modelo espectacular que causó buenas sensaciones entre los asistentes al evento. Los maximos representantes de la marca confirmaron que con estas mejoras el Compass despertara el interes de nuevas personas, sobre todo por los sistemas de conectividad que estrena. Sin embargo, como todo buen SUV, el Compass guarda todas sus capacidades off road.\r\nObjetivos principales del novedoso Compass Night Eagle\r\nLos ingenieros encargados de llevar a cabo esta nueva edicion destacaron que el objetivo principal es aumentar sus capacidades de conectividad, las cuales podemos apreciar al ingresar a su habitaculo. Entre otras cosas se observa una nueva pantalla, mas grande de 8,4 pulgadas que viene con el sistema multimedia Uconnect; este sistema es completamente compatible con los protocolos Apple CarPlay y Android Auto, los mas populares y más utilizados en la mayoría de los coches de última generación. Otros aspectos que también se presentan en esta edición son la cámara trasera Parkview, climatizador automatico bizona, sistema de apertura y arranque, manos libres, entre otros detalles.\r\n', ''),
(24, 'Wagoneer, el SUV preferido de muchos', 'Johnny', '2016-03-13 11:21:13', 'Jeep es una de las firmas dedicadas a la fabricacion de automoviles que quizas cuenta con una historia tan extensa, asi como tambien una gran variedad de modelos disponibles en el mercado, muchos de ellos cuentan con una permanencia de mas de 50 años, y aunque como es de esperarse ha tenido que pasar por un proceso de cambios, en la actualidad no se alejan mucho en su forma y apariencia al modelo original, tal es el caso del Jeep Wagoneer, el cual es un modelo que se mantiene en el mercado por mas de medio siglo y aun continua siendo el coche preferido de muchos\r\n\r\nEl Jeep Wagoneer fue presentado por primera vez ante el publico en 1962 y lanzada al mercado al año siguiente, es considerado el primer vehiculo utilitario deportivo, o como muchos lo llaman el padre de los SUV. Fue el primer modelo 4x4 de lujo que equipaba para la epoca todas las comodidades que solo se podian encontrar en un coche, de hecho es sus primeros meses de vida este solia ser confundido facilmente con un coche normal debido a su aspecto, ya que para aquella epoca cuando se hablaba de un coche con traccion en las cuatro ruedas solia asociarse inmediatamente a la imagen de un coche sin ningun tipo de gracia o comodidades. los coches 4x4 de aquel entonces tenían la imagen de un Willis que eran vehículos muy asociados al trabajo diario del campo, y en actividades que requerían el desplazamiento de grandes cantidades de cargas, es por esa razón que resultaba muy difícil asociar al jeep Wagoneer con trabajo pesado por su aspecto refinado y lujoso, pero pronto esa imagen quedaria atras al demostrar cuan capacitado estaba para levar a cabo las actividades mas extremas.\r\n', ''),
(25, 'Nissan presenta el LEAF Open Car', 'Encarni', '2018-05-02 05:40:28', 'Nissan esta de fiesta pues ya ha alcanzado las 100.000 unidades vendidas solo en su pais natal. Es por ello que para celebrarlo en grande ha dispuesto fabricar un coche como edicion especial. Lo que le hace único y que le diferencia de generaciones anteriores del LEAF es que el mismo será descapotable, es decir, sin techo. Otro dato interesante de esta edición conmemorativa es que es completamente eléctrico. El mismo fue presentado durante el Tokyo Fórum, en el que se encontraban presentes unas 100 personas entre invitados especiales, funcionarios del gobierno nipon y ejecutivos de la firma. El centro de atención del evento fue el tema sobre una sociedad en donde se disminuyan las emisiones contaminantes, y que mejor lugar en donde presentar esta propuesta.\r\n\r\nEn su imagen exterior, el Nissan LEAF Open Car cuenta con algunas modificaciones que le diferencian de su modelo hermano. Por ejemplo, a primera vista apreciamos que tiene una carroceria que prescinde de su techo, tambien se le ha eliminado el pilar C y sus puertas traseras. Solo albergara capacidad para cuatro ocupantes y el asiento de la plaza trasera es una banqueta unica que cuenta en su parte superior con una especie de arco de seguridad para la protección de sus ocupantes. Del resto podemos ver que dispone de la parrilla V-Motion, llantas del mismo estilo del modelo de produccion cerrado y calcomanias en letras hacia sus laterales que evocan la movilidad inteligente de Nissan.\r\n\r\nDetalles \r\nEste concepto contara con las mismas tecnologias que presenta la version LEAF como el Propilot, Propilot Park, que ofrece asistencia durante su aparcamiento, frenada regenerativa, e-Pedal que permite controlar la velocidad del coche con un único pedal sin tener que tocar el freno en algunas situaciones; todo esto acompañado de otras tecnologías que se denominan Intelligent Mobility. En cuanto a su mecánica tenemos que incorpora el mismo propulsor del modelo cerrado; un motor electrico de 150 CV junto con un par maximo de 320 Nm y que es alimentado desde una bateria de iones de litio de 40 kWh, esta le proporciona una autonomia de unos 380 kilometros. La firma no tiene pensado ponerlo en producción.\r\n', ''),
(26, '140 Aniversario de Andre Citroen', 'Felisa', '2017-09-07 13:53:43', 'En el artículo damos comienzo a esta fascinante historia, la de Andre Citroen, a aproposito de sus 140 aniversarios de su nacimiento. En esa primera parte hicimos mencion de que este 2018 ha sido el año de los aniversarios dentro del mundo automotriz. Ahora bien, en este articulo quiero hablar de la segunda parte de la historia de uno de los padres de la industria automotriz de Francia, a proposito de su 140 aniversario, y asi como dijimos en la primera parte, tambien lo decimos en esta segunda parte y es que no es tarde para hablar del natalicio de este exitoso y valiente empresario el caballero Andre Citroen.\r\n\r\nEntre 1906 y 1914 el señor Andre Gustave Citroen fue nombrado director general y administrador de la fabrica automotriz Mors, y en el momento que agarra las riendas de la compañia esta estaba en una situación realmente muy grave, es decir, al punto de la quiebra y por supuesto del cierre total. Lo primero que hizo fue reorganizarse en cuanto al estudio del mercado y de las necesidades de los clientes, para luego modernizar con poca inversion toda la gestion de producción causando que se crearan nuevos modelos, esto por supuesto trajo como consecuencia situaciones positivas que salvaron a la compañía ya que doblo la produccion automotriz durante 10 temporadas. Una vez alguien dijo que Andre Gustave Citroën no es un inventor o tecnico sino un apasionado de la fabricacion, produccion y distribucion a gran escala de coches.\r\n\r\nHeroe de la primera guerra mundial\r\nPor causa de la primera guerra el 1 Agosto de 1914 Andre Citroen fue nombrado teniente y luego capitan de artilleria. Para el 1915 el general Luis Baquet carecia de municiones y Andre Citroen le propone construir una fabrica en 15 hectareas en tres meses en calle Javel, lo que es actualmente la calle y parque Andre Citroen, prometiendole que podia producir 10.000 obuses de tipo Shrapnel en 75 dias. El general lo autorizo logrando su acometido y superando sus promesas porque con 13 mil obreras producia 10.000 obuses diarios, logrando así 23 millones de obuses.\r\n', '');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
