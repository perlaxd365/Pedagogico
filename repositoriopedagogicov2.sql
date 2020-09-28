-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2020 a las 02:11:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repositoriopedagogicov2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nombre_area` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre_area`) VALUES
(1, 'Gestion Educativa'),
(2, 'Curriculo Educativo'),
(3, 'Educacion para el desarrollo Sostenible'),
(4, 'Interculturalidad'),
(5, 'Cultura de Paz e Inclusion'),
(6, 'Formacion, desarrollo Personal y Academico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` varchar(50) NOT NULL,
  `id_tipo_autor` int(11) DEFAULT NULL,
  `especialidad` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `id_tipo_autor`, `especialidad`, `nombre`, `apellido`, `dni`, `telefono`, `correo`) VALUES
('AU00825749', 2, 'no tiene', 'Juan Carlos', 'Tenor', '55434355', '932325665', 'pepe@mail.comn'),
('AU015080835', 1, 'no tiene', 'j', 'jj', 'j', 'jj', 'j'),
('AU015660912', 1, 'educación secundaria', 'xaxadx', 'qcwcwc', '32233223', '23232323', 'cdcecceded'),
('AU016455036', 1, 'educación fisica', 'j', 'jj', 'j', 'j', 'j'),
('AU02803752', 3, 'computación informática', 'Raul Baca', 'Santa Cruz', '323232232', '9318777179', 'cesaer@gmail.com'),
('AU031280044', 1, 'computación informática', 'Perla Sthefany NELLY', 'García Amenguar', '76432549', '900407353', 'perlaxd365@gmail.com'),
('AU06262164', 1, 'educación secundaria', 'luciano', 'baca', '81282182', '912122231212', 'cesarxd365@gmail.com'),
('AU063175820', 1, 'no tiene', 'dffdafw2', 'h', 'h', 'h', 'gy'),
('AU074701645', 2, 'no tiene', 'cesar baca', 'gamarra', '42442342', '043 324322', 'casccas@gmail.com'),
('AU07778186', 2, 'no tiene', 'Luis Eduardo', 'Angeles Caballero', '32522342', '932232323', 'luisxd365@gmail.com'),
('AU115110633', 1, 'educación primaria', 'jj', 'x', 'jxj', 'j', 'xj'),
('AU11849465', 2, 'no tiene', 'jsjsj', 'jjdsj', 'jsdjd', 'jdjjdj', 'dwndnwnndnnw'),
('AU144405138', 1, 'educación primaria', 'jxjjx', 'j', 'xjxj', 'x', 'jxj'),
('AU170011034', 1, 'no tiene', 'n', 'b', 'h', 'hb', 'j'),
('AU172399039', 1, 'no tiene', 'nn', 'sn', 'sns', 'ns', 'n'),
('AU189170028', 1, 'educación secundaria', 'j', 'sj', 'sj', 'sjs', 'j'),
('AU197346523', 1, 'educación primaria', 'j', 's', 'shj', 'jh', 'jhnj'),
('AU226913818', 2, 'no tiene', 'BBACBACB', 'CB', 'BCABAB', 'BCBSAB', 'BCBAS'),
('AU289912925', 1, 'educación secundaria', 'jsjsj', 'jsjsj', 'jjs', 'jjs', 'j'),
('AU290061414', 1, 'no tiene', '$_FILES\'archivo\'\'type\'', '$_FILES\'archivo\'\'type\'', '332243', '344', 'afasfasf@mail.c,mom'),
('AU303419331', 1, 'educación secundaria', 'sd', 's', '', 's', 'ss'),
('AU309416313', 1, 'no tiene', '$_FILES\'archivo\'\'type\'', '$_FILES\'archivo\'\'type\'', '332243', '344', 'afasfasf@mail.c,mom'),
('AU395441727', 1, 'ingles', 'mss', 'hs', 'hsh', 's', 'sbb'),
('AU427990141', 1, 'no tiene', 'kkeke', 'kekek', 'keek', 'k', 'kee'),
('AU451909124', 1, 'educación secundaria', 'jsjs', 'js', 'jjsj', 'js', 'jj'),
('AU470323840', 1, 'no tiene', 'nn', 'sn', 'sns', 'ns', 'n'),
('AU504656616', 1, 'ingles', 'njnnjj', 'nnj', 'jnjn', 'jn', 'jnjn'),
('AU519407622', 1, 'educación primaria', 'jsjsajsaj', 'jsajsajsaj', 'jsjja', 'jsjj', 'j'),
('AU535307717', 1, 'educación primaria', 'SSJ', 'J', 'SJ', 'S', 'J'),
('AU545660729', 1, 'no tiene', 'n', 'n', 'n n', 'n', 'j'),
('AU555363942', 1, 'no tiene', 'kk', 'k', 'dk', 'kdk', 'd'),
('AU634612343', 1, 'no tiene', 'jej', 'j', 'jjejjj', 'j', 'jej'),
('AU659302926', 2, 'no tiene', 'jsjs', 's', 'j', 'sjsj', 'sjj'),
('AU67832397', 1, 'educación primaria', 'Cesar Raul', 'Baca Gamarra', '93294292', '043143222', 'cesarxd365@gmail.com'),
('AU729417315', 1, 'no tiene', 'efwwef', 'efewf1we', '24343234', '92392342349', '23949324324'),
('AU744580521', 1, 'educación primaria', 'as s bhb', '', 'hbshb', 'shbshbhbshb', 'shh'),
('AU75448568', 1, 'educación secundaria', 'Luis Eduardo', 'Quiñones', '23422342', '900234253', 'luisxd365@gmail.com'),
('AU769478510', 3, 'educación inicial', 'Valencia', 'Ordoñez', '23323223', '9322322312', 'vale.1@gmail.com'),
('AU80598643', 3, 'computación informática', 'cesar baca', 'gamarra', '10209322', '93293232', 'caecede@gmail.comd'),
('AU808864832', 1, 'computación informática', 'sjn', 'js', 'js', 'jn', 'sjnj'),
('AU82119051', 2, 'no tiene', 'Jesus', 'Cristo', '99999999', '931228288282', 'cesar@gmail.com'),
('AU822716219', 2, 'no tiene', 'BBACBACB', 'CB', 'BCABAB', 'BCBSAB', 'BCBAS'),
('AU889389711', 1, 'ingles', 'Mio', 'Sid', '34343432', '912012313', 'h.k@gmail.com'),
('AU928234330', 1, 'educación primaria', 'h', 'hsh', 'sh', 'sh', 'shh'),
('AU987825037', 1, 'no tiene', 'jj', 'j', 'jj', 'j', 'j');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`) VALUES
(1, 'Inicial'),
(2, 'Primaria'),
(3, 'C.T.A.'),
(4, 'Computacion e Infiormatica'),
(5, 'Idiomas: Ingles'),
(6, 'Educacion Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` varchar(50) NOT NULL,
  `id_tipo_doc` int(11) DEFAULT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `resumen` longtext DEFAULT NULL,
  `id_lineas` int(11) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `id_tipo_doc`, `titulo`, `resumen`, `id_lineas`, `fecha`, `estado`) VALUES
('DO00989066', 3, 'Rey es un personaje ficticio de la franquicia de interpretada por la actriz británica .', 'Rey es un personaje ficticio de la franquicia de Star Wars interpretada por la actriz británica Daisy Ridley.Rey es un personaje ficticio de la franquicia de Star Wars interpretada por la actriz británica Daisy Ridley.Rey es un personaje ficticio de la franquicia de Star Wars interpretada por la actriz británica Daisy Ridley.', 25, '2020-09-09 10:21:12', 'Activo'),
('DO016694821', 1, 'asjsjajjsa', 'jasjsa', 20, '2020-09-09 11:36:36', 'Activo'),
('DO02925139', 4, 'Un trabajo académico, científico, serio y aprobable requiere de tiempo. La única manera de hacer la tesis en menos de seis meses', 'Un trabajo académico, científico, serio y aprobable requiere de tiempo. La única manera de hacer la tesis en menos de seis meses es que te dediques enteramente a la tesis, con un mínimo de 6 / 8 horas de trabajo diario.', 18, '2020-09-09 10:42:15', 'Activo'),
('DO106132622', 1, 'asjsajaa', 'jaxj', 23, '2020-09-09 11:37:42', 'Activo'),
('DO118972938', 1, 'jaxjj', 'ksjjs', 22, '2020-09-09 12:19:54', 'Activo'),
('DO127609413', 1, '$_FILES\'archivo\'\'type\'', '$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'', 24, '2020-09-09 11:04:34', 'Activo'),
('DO165324424', 1, 'kkkxk', 'ax', 18, '2020-09-09 11:39:38', 'Activo'),
('DO170531225', 1, 'jasksasj', 'jajssja', 25, '2020-09-09 11:42:21', 'Activo'),
('DO19296371', 3, 'Dios Incomparable', 'ascasccccccccccccccccccccccccccccccccccccccccccc', 3, '2020-09-06 08:20:59', 'Activo'),
('DO201947335', 1, 'j', 'jsj', 22, '2020-09-09 12:11:36', 'Activo'),
('DO21393133', 4, 'Las profesoras van a hacer bolsas con el material que dejaron los niños en las cajoneras que será entregado a las familias en el momento de la recepción de los libros.  Los libros podrán ser entregados por cualquier persona mayor de edad.', 'Las profesoras van a hacer bolsas con el material que dejaron los niños en las cajoneras que será entregado a las familias en el momento de la recepción de los libros.\r\n\r\nLos libros podrán ser entregados por cualquier persona mayor de edad..', 15, '2020-09-06 11:00:35', 'Activo'),
('DO235066818', 2, 'BACA', '$server=SERVERURL\r\n								$id_doc=substr($id_doc, 0, 10)\r\n								$tipodeImagen=explode(\".\", $_FILES\"archivo\"\"type\")\r\n								$ruta_img =\'../vistas/images/fotoportada/\'.$id_doc.\'/\'\r\n								$ruta_pdf =\'../vistas/images/pdf/\'.$id_doc.\'/\'\r\n								$archivo_img = $ruta_img.$id_doc.\'.\'.$tipodeImagen1\r\n								$archivo_pdf = $ruta_pdf.$_FILES\"archivo_pdf\"\"name\"\r\n	$server=SERVERURL\r\n								$id_doc=substr($id_doc, 0, 10)\r\n								$tipodeImagen=explode(\".\", $_FILES\"archivo\"\"type\")\r\n								$ruta_img =\'../vistas/images/fotoportada/\'.$id_doc.\'/\'\r\n								$ruta_pdf =\'../vistas/images/pdf/\'.$id_doc.\'/\'\r\n								$archivo_img = $ruta_img.$id_doc.\'.\'.$tipodeImagen1\r\n								$archivo_pdf = $ruta_pdf.$_FILES\"archivo_pdf\"\"name\"', 18, '2020-09-09 11:28:48', 'Activo'),
('DO268081028', 1, 'jaajss', 'sjjsa', 22, '2020-09-09 11:58:06', 'Activo'),
('DO274723936', 1, 'jj', 'nm', 22, '2020-09-09 12:13:53', 'Activo'),
('DO281266712', 1, '$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"', '$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"$_FILES\"archivo\"\"name\"', 20, '2020-09-09 11:00:59', 'Activo'),
('DO284812243', 1, 'ejejj', 'njeje.', 22, '2020-09-09 13:07:22', 'Activo'),
('DO285317939', 1, 'nsns', 'ejjee', 22, '2020-09-09 12:20:44', 'Activo'),
('DO297978437', 1, 'jejej', 'jssj', 23, '2020-09-09 12:16:06', 'Activo'),
('DO330412419', 2, 'BACA', '$server=SERVERURL\r\n								$id_doc=substr($id_doc, 0, 10)\r\n								$tipodeImagen=explode(\".\", $_FILES\"archivo\"\"type\")\r\n								$ruta_img =\'../vistas/images/fotoportada/\'.$id_doc.\'/\'\r\n								$ruta_pdf =\'../vistas/images/pdf/\'.$id_doc.\'/\'\r\n								$archivo_img = $ruta_img.$id_doc.\'.\'.$tipodeImagen1\r\n								$archivo_pdf = $ruta_pdf.$_FILES\"archivo_pdf\"\"name\"\r\n	$server=SERVERURL\r\n								$id_doc=substr($id_doc, 0, 10)\r\n								$tipodeImagen=explode(\".\", $_FILES\"archivo\"\"type\")\r\n								$ruta_img =\'../vistas/images/fotoportada/\'.$id_doc.\'/\'\r\n								$ruta_pdf =\'../vistas/images/pdf/\'.$id_doc.\'/\'\r\n								$archivo_img = $ruta_img.$id_doc.\'.\'.$tipodeImagen1\r\n								$archivo_pdf = $ruta_pdf.$_FILES\"archivo_pdf\"\"name\"', 18, '2020-09-09 11:30:12', 'Activo'),
('DO353276127', 2, 'kakas', 'jaxjxa', 22, '2020-09-09 11:57:33', 'Activo'),
('DO362006831', 1, 'asas', 'ss', 22, '2020-09-09 12:04:55', 'Activo'),
('DO394941245', 6, 'Los mejores', 'Address :Your address goes here, your demo address.\r\n\r\nPhone : +8880 44338899\r\nEmail : info@colorlib.com', 22, '2020-09-21 14:55:34', 'Activo'),
('DO39507318', 2, 'Proposición u opinión, especialmente de carácter científico, que se mantiene y se intenta demostrar con razonamientos.', 'Proposición u opinión, especialmente de carácter científico, que se mantiene y se intenta demostrar con razonamientos.Proposición u opinión, especialmente de carácter científico, que se mantiene y se intenta demostrar con razonamientos.Proposición u opinión, especialmente de carácter científico, que se mantiene y se intenta demostrar con razonamientos.', 20, '2020-09-09 10:37:52', 'Activo'),
('DO436778444', 4, 'Tus labios, CHEQUETO', 'Ay que frio', 18, '2020-09-19 19:30:12', 'Activo'),
('DO444089440', 1, 'nsns', 'ejjee', 22, '2020-09-09 12:21:37', 'Activo'),
('DO46077767', 1, 'Una tesis es el inicio de un texto argumentativo, una afirmación cuya veracidad ha sido argumentada, demostrada o justificada de algun', 'Una tesis es el inicio de un texto argumentativo, una afirmación cuya veracidad ha sido argumentada, demostrada o justificada de alguna manera. Generalmente enuncia una proposición científica, un axioma o un hecho demostrable.', 22, '2020-09-09 10:35:31', 'Activo'),
('DO490655534', 1, '', 'asjs', 22, '2020-09-09 12:08:56', 'Activo'),
('DO546952411', 1, 'Esta variable de entorno también se puede utilizar para asegurarse de que las demás operaciones están trabajando sobre los ficheros subidos.', 'Esta variable de entorno también se puede utilizar para asegurarse de que las demás operaciones están trabajando sobre los ficheros subidos.Esta variable de entorno también se puede utilizar para asegurarse de que las demás operaciones están trabajando sobre los ficheros subidos..', 23, '2020-09-09 10:52:21', 'Activo'),
('DO598726715', 1, 'efe', 'golden-gategolden-gateadgolden-gategolden-gategolden-gategolden-gategolden-gategolden-gategolden-gategolden-gategolden-gate', 20, '2020-09-09 11:13:53', 'Activo'),
('DO603429016', 1, 'jnjjnj', 'iasjajajja$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"', 23, '2020-09-09 11:17:23', 'Activo'),
('DO612845523', 1, 'nxaaxj', 'nne', 20, '2020-09-09 11:38:48', 'Activo'),
('DO615567717', 1, 'JJ', 'ASJJSAJSAJASJSAJASJ$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"$_FILES\"archivo_pdf\"\"name\"', 23, '2020-09-09 11:20:08', 'Activo'),
('DO640432829', 1, 'na', 'hhssh', 22, '2020-09-09 11:59:16', 'Activo'),
('DO689804942', 1, 'kdkkdk', 'kdkkd', 22, '2020-09-09 13:06:37', 'Activo'),
('DO689893832', 1, 'sjs', 'ma', 20, '2020-09-09 12:07:24', 'Activo'),
('DO772571041', 1, '', 'dmdmd', 22, '2020-09-09 13:06:09', 'Activo'),
('DO78422465', 6, 'jjasjasj', 'ndndsndnsdndsnjsdnsdjsdjndjdsjnssdsdjsdsdsjdjdsjndjndsjndsjndsjndsjndsjnsdjnsdjndsjsdjsj.', 23, '2020-09-07 13:18:47', 'Activo'),
('DO836033014', 1, '$_FILES\'archivo\'\'type\'', '$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'$_FILES\'archivo\'\'type\'', 24, '2020-09-09 11:07:18', 'Activo'),
('DO849627920', 1, 'sadsfsaw', 'sbahs', 22, '2020-09-09 11:35:48', 'Activo'),
('DO860376510', 3, 'Se puede cambiar el directorio predeterminado del servidor estableciendo la variable de entorno', 'Se puede cambiar el directorio predeterminado del servidor estableciendo la variable de entorno Se puede cambiar el directorio predeterminado del servidor estableciendo la variable de entorno Se puede cambiar el directorio predeterminado del servidor estableciendo la variable de entorno', 20, '2020-09-09 10:47:42', 'Activo'),
('DO883974133', 1, 'jxjjxjjxjx', 'mms', 22, '2020-09-09 12:08:15', 'Activo'),
('DO913395126', 2, 'kasksaj', 'maxmsa', 22, '2020-09-09 11:54:48', 'Activo'),
('DO938618330', 1, 'nxahsa', 'aah', 22, '2020-09-09 11:59:59', 'Activo'),
('DO97160144', 5, 'Número 1 en actualidad y tendencias de moda, belleza y estilo de vida. Noticias diarias sobre las estrellas de cine, la música, tendencias de moda, consejos de ... ‎Actualidad · ‎Casas Reales · ‎¡HOLA! México · ‎En imágenes', 'Número 1 en actualidad y tendencias de moda, belleza y estilo de vida. Noticias diarias sobre las estrellas de cine, la música, tendencias de moda, consejos de ...\r\n‎Actualidad · ‎Casas Reales · ‎¡HOLA! México · ‎En imágenesNúmero 1 en actualidad y tendencias de moda, belleza y estilo de vida. Noticias diarias sobre las estrellas de cine, la música, tendencias de moda, consejos de ...\r\n‎Actualidad · ‎Casas Reales · ‎¡HOLA! México · ‎En imágenes', 20, '2020-09-06 21:12:18', 'Activo'),
('DO99042722', 5, 'Para la entrega de libros se entrará al centro por la puerta en la cual se encuentra el portero automático, se deberán guardar los dos metros de distancia y venir con mascarilla', 'Los libros serán recogidos en el porche principal del centro.\r\n\r\nPara la entrega de libros se entrará al centro por la puerta en la cual se encuentra el portero automático, se deberán guardar los dos metros de distancia y venir con mascarilla....', 14, '2020-09-06 08:37:17', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion`
--

CREATE TABLE `investigacion` (
  `id_investigacion` int(11) NOT NULL,
  `id_documento` varchar(50) DEFAULT NULL,
  `id_autor` varchar(50) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `estado_investigacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `investigacion`
--

INSERT INTO `investigacion` (`id_investigacion`, `id_documento`, `id_autor`, `fecha`, `estado_investigacion`) VALUES
(7, 'DO46077767', 'AU67832397', '2020-09-09 10:35:31', 'Activo'),
(8, 'DO39507318', 'AU75448568', '2020-09-09 10:37:52', 'Inactivo'),
(9, 'DO02925139', 'AU00825749', '2020-09-09 10:42:15', 'Activo'),
(10, 'DO860376510', 'AU769478510', '2020-09-09 10:47:42', 'Inactivo'),
(11, 'DO546952411', 'AU889389711', '2020-09-09 10:52:21', 'Inactivo'),
(12, 'DO281266712', 'AU015660912', '2020-09-09 11:00:59', 'Inactivo'),
(13, 'DO127609413', 'AU309416313', '2020-09-09 11:04:34', 'Inactivo'),
(14, 'DO836033014', 'AU290061414', '2020-09-09 11:07:18', 'Inactivo'),
(15, 'DO598726715', 'AU729417315', '2020-09-09 11:13:53', 'Inactivo'),
(16, 'DO603429016', 'AU504656616', '2020-09-09 11:17:23', 'Inactivo'),
(17, 'DO615567717', 'AU535307717', '2020-09-09 11:20:08', 'Inactivo'),
(18, 'DO235066818', 'AU226913818', '2020-09-09 11:28:48', 'Inactivo'),
(19, 'DO330412419', 'AU822716219', '2020-09-09 11:30:12', 'Inactivo'),
(20, 'DO849627920', 'AU063175820', '2020-09-09 11:35:48', 'Inactivo'),
(21, 'DO016694821', 'AU744580521', '2020-09-09 11:36:36', 'Inactivo'),
(22, 'DO106132622', 'AU519407622', '2020-09-09 11:37:42', 'Inactivo'),
(23, 'DO612845523', 'AU197346523', '2020-09-09 11:38:48', 'Inactivo'),
(24, 'DO165324424', 'AU451909124', '2020-09-09 11:39:38', 'Inactivo'),
(25, 'DO170531225', 'AU289912925', '2020-09-09 11:42:21', 'Inactivo'),
(26, 'DO913395126', 'AU659302926', '2020-09-09 11:54:48', 'Inactivo'),
(27, 'DO353276127', 'AU395441727', '2020-09-09 11:57:33', 'Inactivo'),
(28, 'DO268081028', 'AU189170028', '2020-09-09 11:58:06', 'Inactivo'),
(29, 'DO640432829', 'AU545660729', '2020-09-09 11:59:16', 'Inactivo'),
(30, 'DO938618330', 'AU928234330', '2020-09-09 11:59:59', 'Inactivo'),
(31, 'DO362006831', 'AU303419331', '2020-09-09 12:04:55', 'Inactivo'),
(32, 'DO689893832', 'AU808864832', '2020-09-09 12:07:24', 'Inactivo'),
(33, 'DO883974133', 'AU115110633', '2020-09-09 12:08:15', 'Inactivo'),
(34, 'DO490655534', 'AU170011034', '2020-09-09 12:08:57', 'Inactivo'),
(35, 'DO201947335', 'AU015080835', '2020-09-09 12:11:36', 'Inactivo'),
(36, 'DO274723936', 'AU016455036', '2020-09-09 12:13:53', 'Inactivo'),
(37, 'DO297978437', 'AU987825037', '2020-09-09 12:16:06', 'Inactivo'),
(38, 'DO118972938', 'AU144405138', '2020-09-09 12:19:54', 'Inactivo'),
(39, 'DO285317939', 'AU172399039', '2020-09-09 12:20:44', 'Inactivo'),
(40, 'DO444089440', 'AU470323840', '2020-09-09 12:21:37', 'Inactivo'),
(41, 'DO772571041', 'AU427990141', '2020-09-09 13:06:09', 'Inactivo'),
(42, 'DO689804942', 'AU555363942', '2020-09-09 13:06:37', 'Inactivo'),
(43, 'DO284812243', 'AU634612343', '2020-09-09 13:07:22', 'Inactivo'),
(44, 'DO436778444', 'AU031280044', '2020-09-19 19:30:12', 'Inactivo'),
(45, 'DO394941245', 'AU074701645', '2020-09-21 14:55:34', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasinvestigacion`
--

CREATE TABLE `lineasinvestigacion` (
  `id_lineas` int(11) NOT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `nombre_linea` varchar(100) DEFAULT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lineasinvestigacion`
--

INSERT INTO `lineasinvestigacion` (`id_lineas`, `id_carrera`, `id_area`, `nombre_linea`, `estado`) VALUES
(1, 1, 1, 'jeje', ''),
(2, 1, 2, 'mama', ''),
(3, 1, 6, 'hola :D', ''),
(4, 2, 4, 'hola', ''),
(5, 1, 1, 'bb', ''),
(6, 3, 5, 'fogon', ''),
(7, 4, 6, 'ndnd', ''),
(8, 6, 2, 'ivo', 'Inactivo'),
(9, 1, 1, 'uno', 'Inactivo'),
(10, 1, 2, 'dos', 'Inactivo'),
(11, 1, 1, 'unos', 'Inactivo'),
(12, 1, 6, 'bbitoos', 'Inactivo'),
(13, 4, 6, 'cofor', 'Inactivo'),
(14, 6, 6, 'edufor', 'Inactivo'),
(15, 6, 6, 'edufor2', 'Inactivo'),
(16, 6, 6, 'bla bla', 'Inactivo'),
(17, 6, 1, 'bla', 'Inactivo'),
(18, 6, 1, 'baa', 'Inactivo'),
(19, 6, 6, 'msacjcjnscjcsnjanjacsnjascnacscaacjncjnacjnsacjsacjcasj', 'Inactivo'),
(20, 6, 6, 'xnssna sn csa n csn acsn ascn acn acsn acs', 'Activo'),
(21, 1, 1, 'Linea 1', 'Inactivo'),
(22, 1, 1, 'Linea 2', 'Activo'),
(23, 1, 1, 'Linea 3', 'Inactivo'),
(24, 1, 1, 'Jaja', 'Inactivo'),
(25, 1, 1, 'umhh', 'Inactivo'),
(26, 4, 5, 'Linea de tu corazon', 'Activo'),
(27, 5, 2, 'perla', 'Activo'),
(28, 1, 1, 'gest1', 'Activo'),
(29, 3, 1, 'gest2', 'Activo'),
(30, 3, 2, 'curr1', 'Activo'),
(31, 3, 2, 'curr2', 'Inactivo'),
(32, 3, 3, 'edu1', 'Activo'),
(33, 3, 4, 'inter1', 'Activo'),
(34, 3, 5, 'cultu3', 'Inactivo'),
(35, 3, 5, 'cultu3', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sysdiagrams`
--

CREATE TABLE `sysdiagrams` (
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `principal_id` int(11) NOT NULL,
  `diagram_id` int(11) NOT NULL,
  `version` int(11) DEFAULT NULL,
  `definition` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sysdiagrams`
--

INSERT INTO `sysdiagrams` (`name`, `principal_id`, `diagram_id`, `version`, `definition`) VALUES
('D_repositorio', 1, 1, 1, 0xd0cf11e0a1b11ae1000000000000000000000000000000003e000300feff0900060000000000000000000000010000000100000000000000001000000200000001000000feffffff0000000000000000fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffdffffff16000000feffffff0400000005000000060000002300000008000000090000000a0000000b0000000c0000000d0000000e0000000f000000100000001100000012000000130000001400000015000000fefffffffeffffff18000000190000001a0000001b0000001c0000001d0000001e0000001f000000200000002100000022000000feffffff2400000025000000feffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff52006f006f007400200045006e00740072007900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000016000500ffffffffffffffff0200000000000000000000000000000000000000000000000000000000000000301dd3d0e082d60103000000400c0000000000006600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000004000201ffffffffffffffffffffffff00000000000000000000000000000000000000000000000000000000000000000000000000000000ce060000000000006f000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000040002010100000004000000ffffffff00000000000000000000000000000000000000000000000000000000000000000000000007000000041c000000000000010043006f006d0070004f0062006a0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000012000201ffffffffffffffffffffffff0000000000000000000000000000000000000000000000000000000000000000000000001c0000005f000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a0000000b0000000c0000000d0000000e0000000f000000100000001100000012000000130000001400000015000000160000001700000018000000190000001a0000001b000000feffffff1d000000fefffffffeffffff200000002100000022000000230000002400000025000000260000002700000028000000290000002a0000002b0000002c0000002d0000002e0000002f000000fefffffffeffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff000430000a1e100c05000080220000000f00ffff22000000007d0000b16e0000d44a0000d291000055710000000000003e070000de805b10f195d011b0a000aa00bdcb5c000008003000000000020000030000003c006b0000000900000000000000d9e6b0e91c81d011ad5100a0c90f5739f43b7f847f61c74385352986e1d552f8a0327db2d86295428d98273c25a2da2d00002800430000000000000053444dd2011fd1118e63006097d2df4834c9d2777977d811907000065b840d9c00002800430000000000000051444dd2011fd1118e63006097d2df4834c9d2777977d811907000065b840d9c15000000dc0500000095010000003000a50900000700008001000000a002000000800000070000805363684772696400f22b0000ee0200005573756172696f0000003000a509000007000080020000009c0200000080000005000080536368477269640060090000b61c00006175746f7269640000003400a50900000700008003000000a4020000008000000900008053636847726964006affffff600900007469706f6175746f7200000000003400a50900000700008006000000a402000000800000090000805363684772696400863d0000a60e0000646f63756d656e746f00000000006c00a50900000700008007000000520000000180000041000080436f6e74726f6c005f0800002115000052656c6174696f6e736869702027464b5f6175746f725f7469706f6175746f7227206265747765656e20277469706f6175746f722720616e6420276175746f722700000000002800b50100000700008008000000310000005700000002800000436f6e74726f6c00b1feffff9919000000003000a50900000700008009000000a2020000008000000800008053636847726964000a410000302a00007469706f5f646f6300007000a5090000070000800b000000520000000180000047000080436f6e74726f6c63954a0000ca26000052656c6174696f6e736869702027464b5f646f63756d656e746f5f7469706f5f646f6327206265747765656e20277469706f5f646f632720616e642027646f63756d656e746f270000002800b5010000070000800c000000310000005d00000002800000436f6e74726f6c63db4c00002d29000000003800a5090000070000800d000000ac020000008000000d0000805363684772696463fe100000d20f0000696e7665737469676163696f6e09000000007c00a50900000700008018000000520000000180000052000080436f6e74726f6c00f4380000d10e000052656c6174696f6e736869702027464b5f696e7665737469676163696f6e5f646f63756d656e746f3127206265747765656e2027646f63756d656e746f2720616e642027696e7665737469676163696f6e27720000002800b50100000700008019000000310000006900000002800000436f6e74726f6c009a2e0000610e000000007400a5090000070000801a000000520000000180000049000080436f6e74726f6c636d2700000023000052656c6174696f6e736869702027464b5f696e7665737469676163696f6e5f6175746f7227206265747765656e20276175746f722720616e642027696e7665737469676163696f6e2700610000002800b5010000070000801b000000310000005f00000002800000436f6e74726f6c00b3290000392f000000003000a5090000070000801c000000a002000000800000070000805363684772696463b04f0000de3f0000636172726572616300002c00a5090000070000801d0000009a02000000800000040000805363684772696400a60e0000c43b00006172656100003c00a5090000070000801e000000b802000000800000130000805363684772696400ce3100005a3c00006c696e656173496e7665737469676163696f6e0000008400a5090000070000801f000000520000000180000059000080436f6e74726f6c00db4300001147000052656c6174696f6e736869702027464b5f6c696e656173496e7665737469676163696f6e5f6361727265726127206265747765656e2027636172726572612720616e6420276c696e656173496e7665737469676163696f6e2700000000002800b50100000700008020000000310000006f00000002800000436f6e74726f6c00744000005749000000007c00a50900000700008021000000520000000180000053000080436f6e74726f6c00b32000000940000052656c6174696f6e736869702027464b5f6c696e656173496e7665737469676163696f6e5f6172656127206265747765656e2027617265612720616e6420276c696e656173496e7665737469676163696f6e270000002800b50100000700008022000000310000006900000002800000436f6e74726f6c633a220000993f000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000100feff030a0000ffffffff00000000000000000000000000000000170000004d6963726f736f66742044445320466f726d20322e300010000000456d626564646564204f626a6563740000000000f439b271000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000010003000000000000000c0000000b0000004e61bc00000000000000000000000000000000000000000000000000000000000000000000000000000000000000dbe6b0e91c81d011ad5100a0c90f57390000020040d3d0d0e082d601020200001048450000000000000000000000000000000000d601000044006100740061002143341208000000a72900006e1300007856341207000000140100005500730075006100720069006f0000000000803febea6a3ff1f0703f0000803f0000803f0000000000000000000000005c141d6a5c141d6a68141d6a68141d6a7c141d6a7c141d6a88141d6a88141d6a94141d6a94141d6aa0141d6aa0141d6aac141d6aac141d6ab8141d6ab8141d6ac4141d6ac4141d6ad0141d6ad0141d6adc141d6adc141d6ae8141d6ae8141d6af4141d6af4141d6a00151d6a00151d6a0c151d6a0c151d6a18151d6a18151d6a24151d6a24151d6a38151d6a38151d6a44151d6a44151d6a50151d6a50151d6a64151d6a64151d6a78151d6a78151d6a8c151d6a8c151d6aa0151d6aa015000000000000000000000000000005000000540000002c0000002c0000002c000000340000000000000000000000a72900006e130000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb07000055050000000000000100000039130000930e000000000000040000000400000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005800000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000080000005500730075006100720069006f0000002143341208000000222900005a1d00007856341207000000140100006100750074006f00720000000000803f0000803febea6a3ff1f0703f0000803f0000803f0000803fd7d6563fdcdb5b3feae9693f0000803f720020004d0061006e006100670065006d0065006e0074002000530074007500640069006f000000ff7f000001000350000000004900330032000e000100ffff800041006300650070007400610072000000000000000150000000008100330032000e000900ffff8000410079007500640061000000000003000250000000000e000e00000000001400ffff8200ffff017f0000802002500000000025000e007e001100ffffffff820043006f006c0075006d006e00000000000000000000000000000005000000540000002c0000002c0000002c000000340000000000000000000000222900005a1d0000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000391300007f18000000000000080000000800000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005400000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000060000006100750074006f0072000000214334120800000022290000780e00007856341207000000140100007400690070006f006100750074006f007200000019000000a09d310e000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000005000000540000002c0000002c0000002c00000034000000000000000000000022290000780e0000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000391300009d09000000000000020000000200000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005c00000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f0000000a0000007400690070006f006100750074006f0072000000214334120800000022290000df1a000078563412070000001401000064006f00630075006d0065006e0074006f0000008ccfbe19000000000000000000000000000000000000000000000000006071400000000000407040000000000000f03f00000000000000000000000001000000010000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000f03f0000000000000000983b626d0000000000000000a03c626dd858626da8cfbe19a8cfbe190200000002000000000000000000000070eaa819000000000200000000000000000000000000000000008243000082c30000000000000000000000000000000000000000000000000000000005000000540000002c0000002c0000002c00000034000000000000000000000022290000df1a0000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000391300000416000000000000070000000700000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005c00000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f0000000a00000064006f00630075006d0065006e0074006f00000002000b00f6090000d8170000f6090000b61c00000000000002000000f0f0f00000000000000000000000000000000000010000000800000000000000b1feffff99190000960a00005801000032000000010000020000960a000058010000020000000000050000800800008001000000150001000000900144420100065461686f6d61120046004b005f006100750074006f0072005f007400690070006f006100750074006f007200214334120800000022290000780e00007856341207000000140100007400690070006f005f0064006f006300000000001900000008a3880e000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000005000000540000002c0000002c0000002c00000034000000000000000000000022290000780e0000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000391300009d09000000000000020000000200000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005a00000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000090000007400690070006f005f0064006f006300000002000b002c4c0000302a00002c4c0000852900000000000002000000f0f0f00000000000000000000000000000000000010000000c00000000000000db4c00002d2900004a0d000058010000320000000100000200004a0d000058010000020000000000050000800800008001000000150001000000900144420100065461686f6d61150046004b005f0064006f00630075006d0065006e0074006f005f007400690070006f005f0064006f006300214334120800000022290000e915000078563412070000001401000069006e007600650073007400690067006100630069006f006e000000eae9693f0000803f0000803fd7d6563fdcdb5b3feae9693f0000803f62006c0079005c004700410043005f004d00530049004c005c004d006900630072006f0073006f00660074002e0041006e0061006c007900730069007300530065007200760069006300650073002e00410064006f006d00640043006c00690065006e0074005c00760034002e0030005f00310034002e0030002e0030002e0030005f005f0038003900380034003500640063006400380030003800300063006300390031005c004d006900630072006f0073006f00000000000000000000000000000005000000540000002c0000002c0000002c00000034000000000000000000000022290000e9150000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000391300000e11000000000000050000000500000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000006400000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f0000000e00000069006e007600650073007400690067006100630069006f006e00000002000b00863d000068100000203a0000681000000000000002000000f0f0f000000000000000000000000000000000000100000019000000000000009a2e0000610e000055100000580100000b0000000100000200005510000058010000020000000000050000800800008001000000150001000000900144420100065461686f6d611b0046004b005f0069006e007600650073007400690067006100630069006f006e005f0064006f00630075006d0065006e0074006f00310002000b0004290000103a000004290000bb2500000000000002000000f0f0f00000000000000000000000000000000000010000001b00000000000000b3290000392f00009d0c000058010000320000000100000200009d0c000058010000020000000000ffffff000800008001000000150001000000900144420100065461686f6d61160046004b005f0069006e007600650073007400690067006100630069006f006e005f006100750074006f0072002143341208000000391300009d09000078563412070000001401000063006100720072006500720061000000084e2672f6000000000000002400000002000000030000000400000008000000f60000000000000024000000fdffffff030000000400000004000000f6000000000000002400000000000000000000000100000004000000f6000000240000007400000000000000000000000600000004000000f6000000240000007f0000000200000003000000050000000c000000f600000066000000b0000000050000000300000005000000d0fffffff600000024000000ca000000fdffffff030000000500000008000000f600000024000000d700000001000000030000000500000000000000000000000100000005000000540000002c0000002c0000002c00000034000000000000000000000022290000f3100000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000391300009d09000000000000030000000300000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005800000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f00000008000000630061007200720065007200610000002143341208000000391300009d09000078563412070000001401000061007200650061000000693f0000803f9a99993ed7d6563fdcdb5b3feae9693f0000803f0000803fd7d6563fdcdb5b3feae9693f0000803f0000803ffefd7d3ff5f4743fc0bf3f3f0000803f550041004c002000530054005500440049004f002000310034002e0030005c0043004f004d004d004f004e0037005c004900440045005c0065006e005c004d006900630072006f0073006f00660074002e00530071006c005300650072007600650072002e00470072006900640043006f006e00740072006f006c002e007200650073006f00750072006300650073005c004d006900630072006f0073006f006600000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000009230000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000391300009d09000000000000020000000200000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005200000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f0000000500000061007200650061000000214334120800000039130000d91000007856341207000000140100006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e000000d7d6563fdcdb5b3feae9693f0000803f020000005815d7110e0100005f15d711000000000000000000000000000000000000000000000000000000000b00000060cca811f0140f000000051a7dfbfdacdffcf0140f001600000000009a25d402000000006f0100008916d711e9fdb309000000001a0000000718d7111102b40900000000310000003018d7114802b40900000000790000007018d711937ab5090000000016000000f218d711eb7cb50900000000040000001119d711d37bb509000000003a00000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000009230000000000002d0100000d0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb07000055050000000000000100000039130000d910000000000000040000000400000002000000020000001c010000150900000000000001000000391300003403000000000000000000000000000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000007000000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000140000006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e00000002000b00b04f0000a848000007450000a84800000000000002000000f0f0f000000000000000000000000000000000000100000020000000000000007440000057490000e6100000580100001b000000010000020000e610000058010000020000000000ffffff000800008001000000150001000000900144420100065461686f6d611e0046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f00630061007200720065007200610002000b00df210000a0410000ce310000a04100000000000002000000f0f0f000000000000000000000000000000000000100000022000000000000003a220000993f00006f0f000058010000480000000100000200006f0f000058010000020000000000ffffff000800008001000000150001000000900144420100065461686f6d611b0046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f006100720065006100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000300440064007300530074007200650061006d000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000160002000300000006000000ffffffff00000000000000000000000000000000000000000000000000000000000000000000000017000000a61600000000000053006300680065006d00610020005500440056002000440065006600610075006c0074000000000000000000000000000000000000000000000000000000000026000200ffffffffffffffffffffffff0000000000000000000000000000000000000000000000000000000000000000000000001e0000001600000000000000440053005200450046002d0053004300480045004d0041002d0043004f004e00540045004e0054005300000000000000000000000000000000000000000000002c0002010500000007000000ffffffff0000000000000000000000000000000000000000000000000000000000000000000000001f000000020400000000000053006300680065006d00610020005500440056002000440065006600610075006c007400200050006f007300740020005600360000000000000000000000000036000200ffffffffffffffffffffffff0000000000000000000000000000000000000000000000000000000000000000000000003000000012000000000000000c000000000000003e0700000100260000007300630068005f006c006100620065006c0073005f00760069007300690062006c0065000000010000000b0000001e000000000000000000000000000000000000006400000000000000000000000000000000000000000000000000010000000100000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000030000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000020000000200000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000030000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000030000000300000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000030000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000060000000600000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000030000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000070000000700000000000000360000000179737401000000640062006f00000046004b005f006100750074006f0072005f007400690070006f006100750074006f00720000000000000000000000c4020000000008000000080000000700000008000000013ccc11903ccc110000000000000000ad070000000000090000000900000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000030000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c00310036003800300000000b0000000b000000000000003c000000013f815f01000000640062006f00000046004b005f0064006f00630075006d0065006e0074006f005f007400690070006f005f0064006f00630000000000000000000000c402000000000c0000000c0000000b00000008000000013bcc11903bcc110000000000000000ad0700000000000d0000000d00000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000030000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000180000001800000000000000480000000100000001000000640062006f00000046004b005f0069006e007600650073007400690067006100630069006f006e005f0064006f00630075006d0065006e0074006f00310000000000000000000000c4020000000019000000190000001800000008000000013ccc11503ccc110000000000000000ad0700000000001a0000001a000000000000003e000000017f785f01000000640062006f00000046004b005f0069006e007600650073007400690067006100630069006f006e005f006100750074006f00720000000000000000000000c402000000001b0000001b0000001a000000080000000138cc119038cc110000000000000000ad0700000000001c0000001c00000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c00310036003800300000001d0000001d00000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c00310036003800300000001e0000001e00000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300320035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c00310036003800300000001f0000001f000000000000004e000000013f815f01000000640062006f00000046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f00630061007200720065007200610000000000000000000000c4020000000020000000200000001f000000080000000179bb09c879bb090000000000000000ad0f000001000021000000210000000000000048000000012a7f6f01000000640062006f00000046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f00610072006500610000000000000000000000c402000000002200000022000000210000000800000001a3c41118a3c4110000000000000000ad0f00000100001e0000001a000000020000000d0000006b00000051000000070000000300000002000000230000000000000018000000060000000d0000008e0000008b0000000b000000090000000600000024000000310000001f0000001c0000001e0000005c00000069000000210000001d0000001e000000530000005000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000200053006f0075007200630065003d00430045005300410052003b0049006e0069007400690061006c00200043006100740061006c006f0067003d005200650070006f007300690074006f00720069006f00500065006400610067006f006700690063006f003b0049006e00740065006700720061007400650064002000530065006300750072006900740079003d0054007200750065003b004d0075006c007400690070006c00650041006300740069007600650052006500730075006c00740053006500740073003d00460061006c00730065003b0043006f006e006e006500630074002000540069006d0065006f00750074003d00330030003b0054007200750073007400530065007200760065007200430065007200740069006600690063006100740065003d00460061006c00730065003b005000610063006b00650074002000530069007a0065003d0034003000390036003b004100700070006c00690063006100740069006f006e0020004e0061006d0065003d0022004d006900630072006f0073006f00660074002000530051004c00200053006500720076006500720020004d0061006e006100670065006d0065006e0074002000530074007500640069006f0022000000008005001c00000044005f007200650070006f007300690074006f00720069006f000000000226001c00000069006e007600650073007400690067006100630069006f006e00000008000000640062006f00000000022600120000007400690070006f005f0064006f006300000008000000640062006f000000000226001400000064006f00630075006d0065006e0074006f00000008000000640062006f00000000022600140000007400690070006f006100750074006f007200000008000000640062006f000000000226000c0000006100750074006f007200000008000000640062006f00000000022600100000005500730075006100720069006f00000008000000640062006f00000000022600100000006300610072007200650072006100000008000000640062006f000000000226000a0000006100720065006100000008000000640062006f00000000022400280000006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e00000008000000640062006f00000001000000d68509b3bb6bf2459ab8371664f0327008004e0000007b00310036003300340043004400440037002d0030003800380038002d0034003200450033002d0039004600410032002d004200360044003300320035003600330042003900310044007d0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000010003000000000000000c0000000b000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000062885214);
INSERT INTO `sysdiagrams` (`name`, `principal_id`, `diagram_id`, `version`, `definition`) VALUES
('Diagram_0', 1, 2, 1, 0xd0cf11e0a1b11ae1000000000000000000000000000000003e000300feff0900060000000000000000000000010000000100000000000000001000000200000001000000feffffff0000000000000000fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffdffffff17000000feffffff0400000005000000060000001600000008000000090000000a0000000b0000000c0000000d0000000e0000000f000000100000001100000012000000130000001400000015000000feffffff24000000feffffff190000001a0000001b0000001c0000001d0000001e0000001f00000020000000210000002200000023000000feffffff25000000feffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff52006f006f007400200045006e00740072007900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000016000500ffffffffffffffff0200000000000000000000000000000000000000000000000000000000000000c0d17bdc9b83d60103000000c00c0000000000006600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000004000201ffffffffffffffffffffffff00000000000000000000000000000000000000000000000000000000000000000000000000000000b2070000000000006f000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000040002010100000004000000ffffffff000000000000000000000000000000000000000000000000000000000000000000000000070000004c1d000000000000010043006f006d0070004f0062006a0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000012000201ffffffffffffffffffffffff0000000000000000000000000000000000000000000000000000000000000000000000001f0000005f000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a0000000b0000000c0000000d0000000e0000000f000000100000001100000012000000130000001400000015000000160000001700000018000000190000001a0000001b0000001c0000001d0000001e000000feffffff20000000fefffffffeffffff230000002400000025000000260000002700000028000000290000002a0000002b0000002c0000002d0000002e0000002f0000003000000031000000fefffffffeffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff000430000a1e100c05000080180000000f00ffff18000000007d0000825600002f3d0000daaf0000417e00007616000018150000de805b10f195d011b0a000aa00bdcb5c0000080030000000000200000300000038002b00000009000000d9e6b0e91c81d011ad5100a0c90f5739f43b7f847f61c74385352986e1d552f8a0327db2d86295428d98273c25a2da2d00002c0043200000000000000000000053444dd2011fd1118e63006097d2df4834c9d2777977d811907000065b840d9c00002c0043200000000000000000000051444dd2011fd1118e63006097d2df4834c9d2777977d811907000065b840d9c18000000bc0600000098010000002c00a509000007000080010000009a0200000080000004000080536368477269640042720000d02000006172656100003000a509000007000080020000009c02000000800000050000805363684772696400a41f0000dc5000006175746f7269640000003000a50900000700008003000000a00200000080000007000080536368477269640008520000e8350000636172726572610000003400a50900000700008004000000a402000000800000090000805363684772696400042900000c300000646f63756d656e746f00000000003800a50900000700008005000000ac020000008000000d0000805363684772696400d20f0000302a0000696e7665737469676163696f6e00000000007c00a509000007000080060000006a0000000180000052000080436f6e74726f6c002e2200000b2f000052656c6174696f6e736869702027464b5f696e7665737469676163696f6e5f646f63756d656e746f3127206265747765656e2027646f63756d656e746f2720616e642027696e7665737469676163696f6e27000000002800b50100000700008007000000310000006900000002800000436f6e74726f6c00561200001f36000000007400a50900000700008008000000620000000180000049000080436f6e74726f6c00791900008338000052656c6174696f6e736869702027464b5f696e7665737469676163696f6e5f6175746f7227206265747765656e20276175746f722720616e642027696e7665737469676163696f6e2700000000002800b50100000700008009000000310000005f00000002800000436f6e74726f6c00a31b0000304c000000003c00a5090000070000800a000000b802000000800000130000805363684772696400465000000e1f00006c696e656173496e7665737469676163696f6e0000008400a5090000070000800b000000520000000180000059000080436f6e74726f6c00935b0000e62a000052656c6174696f6e736869702027464b5f6c696e656173496e7665737469676163696f6e5f6361727265726127206265747765656e2027636172726572612720616e6420276c696e656173496e7665737469676163696f6e2700000000002800b5010000070000800c000000310000006f00000002800000436f6e74726f6c00d95d00009830000000007c00a5090000070000800d000000520000000180000053000080436f6e74726f6c00a2650000e923000052656c6174696f6e736869702027464b5f6c696e656173496e7665737469676163696f6e5f6172656127206265747765656e2027617265612720616e6420276c696e656173496e7665737469676163696f6e270000002800b5010000070000800e000000310000006900000002800000436f6e74726f6c00336500007923000000003000a5090000070000800f000000a2020000008000000800008053636847726964000c300000781e00007469706f5f646f6300007000a50900000700008010000000520000000180000047000080436f6e74726f6c630b2f00005e25000052656c6174696f6e736869702027464b5f646f63756d656e746f5f7469706f5f646f6327206265747765656e20277469706f5f646f632720616e642027646f63756d656e746f270000002800b50100000700008011000000310000005d00000002800000436f6e74726f6c63a92200005a2a000000003400a50900000700008012000000a40200000080000009000080536368477269646300000000e45700007469706f6175746f7200000000006c00a50900000700008013000000520000000180000041000080436f6e74726f6c635c150000fd5a000052656c6174696f6e736869702027464b5f6175746f725f7469706f6175746f7227206265747765656e20277469706f6175746f722720616e6420276175746f7227006f0000002800b50100000700008014000000310000005700000002800000436f6e74726f6c00cb150000435d000000003000a50900000700008015000000a002000000800000070000805363684772696400821400002a1200005573756172696f0000002400a501000007000080160000003b00000002800000436f6e74726f6c005f510000c742000000008800a5090000070000801700000072000000018000005d000080436f6e74726f6c00603e0000872b000052656c6174696f6e736869702027464b5f646f63756d656e746f5f6c696e656173496e7665737469676163696f6e27206265747765656e20276c696e656173496e7665737469676163696f6e2720616e642027646f63756d656e746f2705000000002800b50100000700008018000000310000007300000002800000436f6e74726f6c63d03e00009b2e000000000000000000000000000000000100feff030a0000ffffffff00000000000000000000000000000000170000004d6963726f736f66742044445320466f726d20322e300010000000456d6265642143341208000000881600009d09000078563412070000001401000061007200650061000000653f0000803f0000003fd0cf4f3fd7d6563fe6e5653f0000803f0000803fd0cf4f3fd7d6563fe6e5653f0000803fe0f0860be0f0860be8f0860be8f0860bf0f0860bf0f0860bf8f0860bf8f0860b00f1860b00f1860b08f1860b08f1860b10f1860b10f1860b18f1860b18f1860b20f1860b20f1860b28f1860b28f1860b30f1860b30f1860b38f1860b38f1860b40f1860b40f1860b08f2860b08f2860bd0f0860bd0f0860b48f1860b48f1860b54f1860b54f1860b60f1860b60f1860b6cf1860b6cf1860b78f1860b78f1860b84f1860b84f1860b90f1860b90f1860b9cf1860b9cf1000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000065150000000000002d010000070000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000881600009d09000000000000020000000200000002000000020000001c010000f50a00000000000001000000391300007a05000000000000010000000100000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005200000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f00000005000000610072006500610000002143341208000000881600007f1800007856341207000000140100006100750074006f007200000000000000084ef4733422810b0022810b2c9d6c0be49c6c0bb823810b7423810b4016810b0416810bbc15810b5c15810bb816810b8416810be47d6c0b2c7d6c0bac25810b6825810bdc28810b9828810b4c1e810b101e810bf82d810bb42d810b6827810b2427810b7c30810b4830810ba432810b5032810b807e6c0b287e6c0b4c24810b1024810b3023810bf022810bb429810b7029810b0428810bc027810b8c2a810b482a810bcc1d810b8c1d810b202d810bdc2c810bbc1c810b741c810b642b810b202b810b389a6c0bf8996c0b481d810b0c1d810bac22810b7822810bb42f000000000000000000000100000005000000540000002c0000002c0000002c00000034000000000000000000000022290000371c0000000000002d0100000a0000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000881600007f18000000000000080000000800000002000000020000001c010000f50a0000000000000100000039130000c007000000000000020000000200000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005400000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000060000006100750074006f00720000002143341208000000881600009d090000785634120700000014010000630061007200720065007200610000002f00500072006f006700720061006d002000460069006c00650073002000280078003800360029002f004d006900630072006f0073006f00660074002000530051004c0020005300650072007600650072002f003100340030002f0054006f006f006c0073002f00420069006e006e002f004d0061006e006100670065006d0065006e007400530074007500640069006f002f004900440045002f0053007400610072007400500061006700650041007300730065006d0062006c006900650073002f004d006900630072006f0073006f00660074002e00530071006c00000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000065150000000000002d010000070000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000881600009d09000000000000020000000200000002000000020000001c010000f50a00000000000001000000391300007a05000000000000010000000100000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005800000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f00000008000000630061007200720065007200610000002143341208000000881600000416000078563412070000001401000064006f00630075006d0065006e0074006f00000072006f006700720061006d002000460069006c00650073002000280078003800360029002f004d006900630072006f0073006f00660074002000530051004c0020005300650072007600650072002f003100340030002f0054006f006f006c0073002f00420069006e006e002f004d0061006e006100670065006d0065006e007400530074007500640069006f002f0045007800740065006e00730069006f006e0073002f004100700070006c00690063006100740069006f006e002f004d006900630072006f0073006f00660074002e00530071006c005300000000000000000000000100000005000000540000002c0000002c0000002c00000034000000000000000000000022290000df1a0000000000002d010000090000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000881600000416000000000000070000000700000002000000020000001c010000f50a0000000000000100000039130000c007000000000000020000000200000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005c00000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f0000000a00000064006f00630075006d0065006e0074006f0000002143341208000000881600000e11000078563412070000001401000069006e007600650073007400690067006100630069006f006e00000061006d002000460069006c00650073002000280078003800360029002f004d006900630072006f0073006f00660074002000530051004c0020005300650072007600650072002f003100340030002f0054006f006f006c0073002f00420069006e006e002f004d0061006e006100670065006d0065006e007400530074007500640069006f002f0045007800740065006e00730069006f006e0073002f004100700070006c00690063006100740069006f006e002f004d006900630072006f0073006f00660074002e00530071006c005300000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000065150000000000002d010000070000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000881600000e11000000000000050000000500000002000000020000001c010000f50a0000000000000100000039130000060a000000000000030000000300000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000006400000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f0000000e00000069006e007600650073007400690067006100630069006f006e00000005000b0004290000a23000005a230000a23000005a230000ce3c0000ea240000ce3c0000ea2400003e3b00000000000002000000f0f0f00000000000000000000000000000000000010000000700000000000000561200001f3600005510000058010000380000000100000200005510000058010000020000000000050000800800008001000000150001000000900144420100065461686f6d611b0046004b005f0069006e007600650073007400690067006100630069006f006e005f0064006f00630075006d0065006e0074006f00310004000b00c62a0000dc500000c62a0000064f0000f41a0000064f0000f41a00003e3b00000000000002000000f0f0f00000000000000000000000000000000000010000000900000000000000a31b0000304c00009d0c000058010000320000000100000200009d0c000058010000020000000000050000800800008001000000150001000000900144420100065461686f6d61160046004b005f0069006e007600650073007400690067006100630069006f006e005f006100750074006f007200214334120800000088160000930e00007856341207000000140100006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e000000650073002000280078003800360029002f004d006900630072006f0073006f00660074002000530051004c0020005300650072007600650072002f003100340030002f0054006f006f006c0073002f00420069006e006e002f004d0061006e006100670065006d0065006e007400530074007500640069006f002f004900440045002f005000750062006c006900630041007300730065006d0062006c006900650073002f004d006900630072006f0073006f00660074002e00530071006c00530065007200000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000065150000000000002d010000070000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb07000055050000000000000100000088160000930e000000000000040000000400000002000000020000001c010000f50a0000000000000100000039130000060a000000000000030000000300000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000007000000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000140000006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e00000002000b002a5d0000e83500002a5d0000a12d00000000000002000000f0f0f00000000000000000000000000000000000010000000c00000000000000d95d000098300000e61000005801000039000000010000020000e610000058010000020000000000050000800800008001000000150001000000900144420100065461686f6d611e0046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f00630061007200720065007200610002000b004272000080250000ce660000802500000000000002000000f0f0f00000000000000000000000000000000000010000000e0000000000000033650000792300006f0f0000580100003c0000000100000200006f0f000058010000020000000000050000800800008001000000150001000000900144420100065461686f6d611b0046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f0061007200650061002143341208000000881600009d0900007856341207000000140100007400690070006f005f0064006f0063000000500072006f006700720061006d002000460069006c00650073002000280078003800360029002f004d006900630072006f0073006f00660074002000530051004c0020005300650072007600650072002f003100340030002f0054006f006f006c0073002f00420069006e006e002f004d0061006e006100670065006d0065006e007400530074007500640069006f002f004900440045002f00500072006900760061007400650041007300730065006d0062006c006900650073002f004d006900630072006f0073006f00660074002e00530071006c0053006500000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000065150000000000002d010000070000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000881600009d09000000000000020000000200000002000000020000001c010000f50a00000000000001000000391300007a05000000000000010000000100000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005a00000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000090000007400690070006f005f0064006f006300000002000b00a230000015280000a23000000c3000000000000002000000f0f0f00000000000000000000000000000000000010000001100000000000000a92200005a2a00004a0d000058010000220000000100000200004a0d000058010000020000000000ffffff000800008001000000150001000000900144420100065461686f6d61150046004b005f0064006f00630075006d0065006e0074006f005f007400690070006f005f0064006f0063002143341208000000881600009d0900007856341207000000140100007400690070006f006100750074006f0072000000931b42746700720061006d002000460069006c00650073002000280078003800360029002f004d00490000009cce6c0baccd6c0b0000000000000000000000000c005300650072007600650049000000a4ce6c0bb8cd6c0b0000000000000000000000000c0069006e006e002f004d004900000094ce6c0bc4cd6c0b000000000000000000000000080069006f002f004900440049000000d0ce6c0bd0cd6c0b00000000000000000000000008006f006e0065006e00740049000000acce6c0bdccd6c0b000000000000000000000000080071006c0053006500000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000065150000000000002d010000070000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb070000550500000000000001000000881600009d09000000000000020000000200000002000000020000001c010000f50a00000000000001000000391300007a05000000000000010000000100000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005c00000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f0000000a0000007400690070006f006100750074006f007200000002000b0088160000945c0000a41f0000945c00000000000002000000f0f0f00000000000000000000000000000000000010000001400000000000000cb150000435d0000960a00005801000032000000010000020000960a000058010000020000000000ffffff000800008001000000150001000000900144420100065461686f6d61120046004b005f006100750074006f0072005f007400690070006f006100750074006f007200214334120800000088160000930e00007856341207000000140100005500730075006100720069006f0000000a0000000c0000000e00000010000000120000001400000016000000180000001a0000001c0000001e00000020000000220000002400000026000000280000002a0000002c0000002e00000030000000320000003400000036000000380000003a0000003c0000003e00000040000000420000004400000046000000480000004b0000004d0000004f00000051000000530000005500000057000000590000005b0000005d0000005f00000061000000630000006500000067000000690000006b0000006d0000006f000000710000007300000075000000770000007900000000000000000000000100000005000000540000002c0000002c0000002c0000003400000000000000000000002229000065150000000000002d010000070000000c000000070000001c0100000609000062070000480300001a040000df020000ec04000027060000b103000027060000cb07000055050000000000000100000088160000930e000000000000040000000400000002000000020000001c010000f50a00000000000001000000391300007a05000000000000010000000100000002000000020000001c010000060900000100000000000000391300003403000000000000000000000000000002000000020000001c010000060900000000000000000000d13100000923000000000000000000000d00000004000000040000001c01000006090000aa0a00009006000078563412040000005800000001000000010000000b000000000000000100000002000000030000000400000005000000060000000700000008000000090000000a00000004000000640062006f000000080000005500730075006100720069006f0000000002000070170000dc050000020064000000ffffff0000000000000000003a00010000009001c0d40100085365676f6520554903006f006b00200006000b00465000001e2d0000b64e00001e2d0000b64e0000952e00009c4f0000952e00009c4f0000a23000008c3f0000a23000000000000002000000f0f0f00000000000000000000000000000000000010000001800000000000000d03e00009b2e0000ed1200005801000055000000010000020000ed12000058010000020000000000ffffff000800008001000000150001000000900144420100065461686f6d61200046004b005f0064006f00630075006d0065006e0074006f005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000646564204f626a6563740000000000f439b271000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000010003000000000000000c0000000b0000004e61bc00000000000000000000000000000000000000000000000000000000000000000000000000000000000000dbe6b0e91c81d011ad5100a0c90f573900000200f0fa5edc9b83d601020200001048450000000000000000000000000000000000d60100004400610074006100200053006f0075007200630065003d00430045005300410052003b0049006e0069007400690061006c00200043006100740061006c006f0067003d005200650070006f007300690074006f00720069006f00500065006400610067006f006700690063006f003b0049006e00740065006700720061007400650064002000530065006300750072006900740079003d0054007200750065003b004d0075006c007400690070006c00650041006300740069007600650052006500730075006c00740053006500740073003d00460061006c00730065003b0043006f006e006e006500630074002000540069006d0065006f00750074003d00330030003b0054007200750073007400530065007200760065007200430065007200740069006600690063006100740065003d00460061006c00730065003b005000610063006b000300440064007300530074007200650061006d000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000160002000300000006000000ffffffff00000000000000000000000000000000000000000000000000000000000000000000000018000000781700000000000053006300680065006d00610020005500440056002000440065006600610075006c0074000000000000000000000000000000000000000000000000000000000026000200ffffffffffffffffffffffff000000000000000000000000000000000000000000000000000000000000000000000000210000001600000000000000440053005200450046002d0053004300480045004d0041002d0043004f004e00540045004e0054005300000000000000000000000000000000000000000000002c0002010500000007000000ffffffff00000000000000000000000000000000000000000000000000000000000000000000000022000000fa0300000000000053006300680065006d00610020005500440056002000440065006600610075006c007400200050006f007300740020005600360000000000000000000000000036000200ffffffffffffffffffffffff0000000000000000000000000000000000000000000000000000000000000000000000003200000012000000000000000c00000076160000181500000100260000007300630068005f006c006100620065006c0073005f00760069007300690062006c0065000000010000000b0000001e000000000000000000000000000000000000006400000000000000000000000000000000000000000000000000010000000100000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000020000000200000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000030000000300000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000040000000400000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000050000000500000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000060000000600000000000000480000000100000001000000640062006f00000046004b005f0069006e007600650073007400690067006100630069006f006e005f0064006f00630075006d0065006e0074006f00310000000000000000000000c402000000000700000007000000060000000800000001b4421a88b4421a0000000000000000ad0f00000100000800000008000000000000003e000000017f3d6101000000640062006f00000046004b005f0069006e007600650073007400690067006100630069006f006e005f006100750074006f00720000000000000000000000c402000000000900000009000000080000000800000001b9421ac8b9421a0000000000000000ad0f00000100000a0000000a00000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c00310036003800300000000b0000000b000000000000004e000000013f466101000000640062006f00000046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f00630061007200720065007200610000000000000000000000c402000000000c0000000c0000000b0000000800000001b7421a48b7421a0000000000000000ad0f00000100000d0000000d0000000000000048000000012a197401000000640062006f00000046004b005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e005f00610072006500610000000000000000000000c402000000000e0000000e0000000d0000000800000001b6421a48b6421a0000000000000000ad0f00000100000f0000000f00000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c00310036003800300000001000000010000000000000003c0000000100000001000000640062006f00000046004b005f0064006f00630075006d0065006e0074006f005f007400690070006f005f0064006f00630000000000000000000000c402000000001100000011000000100000000800000001b9421a88b9421a0000000000000000ad0f0000010000120000001200000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c0031003600380030000000130000001300000000000000360000000100000001000000640062006f00000046004b005f006100750074006f0072005f007400690070006f006100750074006f00720000000000000000000000c402000000001400000014000000130000000800000001b8421a48b8421a0000000000000000ad0f0000010000150000001500000000000000000000000000000000000000d00200000600280000004100630074006900760065005400610062006c00650056006900650077004d006f006400650000000100000008000400000031000000200000005400610062006c00650056006900650077004d006f00640065003a00300000000100000008003a00000034002c0030002c003200380034002c0030002c0032003300310030002c0031002c0031003800390030002c0035002c0031003200360030000000200000005400610062006c00650056006900650077004d006f00640065003a00310000000100000008001e00000032002c0030002c003200380034002c0030002c0032003800300035000000200000005400610062006c00650056006900650077004d006f00640065003a00320000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00330000000100000008001e00000032002c0030002c003200380034002c0030002c0032003300310030000000200000005400610062006c00650056006900650077004d006f00640065003a00340000000100000008003e00000034002c0030002c003200380034002c0030002c0032003300310030002c00310032002c0032003700330030002c00310031002c00310036003800300000001600000016000000000000000800000001b1421ac8b1421a0000000000000000e40f0000010000170000001700000000000000520000000100000001000000640062006f00000046004b005f0064006f00630075006d0065006e0074006f005f006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e0000000000000000000000c402000000001800000018000000170000000800000001b1711ab8b1711a0000000000000000ad0f0000010000230000000d000000010000000a000000580000005f00000008000000020000000500000024000000250000000b000000030000000a000000240000002b0000000600000004000000050000004a00000047000000170000000a00000004000000780000004b000000100000000f000000040000000100000018000000130000001200000002000000590000007000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000650074002000530069007a0065003d0034003000390036003b004100700070006c00690063006100740069006f006e0020004e0061006d0065003d0022004d006900630072006f0073006f00660074002000530051004c00200053006500720076006500720020004d0061006e006100670065006d0065006e0074002000530074007500640069006f002200000000800500140000004400690061006700720061006d005f0030000000000226000a0000006100720065006100000008000000640062006f000000000226000c0000006100750074006f007200000008000000640062006f00000000022600100000006300610072007200650072006100000008000000640062006f000000000226001400000064006f00630075006d0065006e0074006f00000008000000640062006f000000000226001c00000069006e007600650073007400690067006100630069006f006e00000008000000640062006f00000000022600280000006c0069006e0065006100730049006e007600650073007400690067006100630069006f006e00000008000000640062006f00000000022600120000007400690070006f005f0064006f006300000008000000640062006f00000000022600140000007400690070006f006100750074006f007200000008000000640062006f00000000022400100000005500730075006100720069006f00000008000000640062006f00000001000000d68509b3bb6bf2459ab8371664f0327008004e0000007b00310036003300340043004400440037002d0030003800380038002d0034003200450033002d0039004600410032002d004200360044003300320035003600330042003900310044007d000000000000000000010003000000000000000c0000000b00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000062885214);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoautor`
--

CREATE TABLE `tipoautor` (
  `id_tipo_autor` int(11) NOT NULL,
  `nombre_tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoautor`
--

INSERT INTO `tipoautor` (`id_tipo_autor`, `nombre_tipo`) VALUES
(1, 'Estudiante'),
(2, 'Formador'),
(3, 'Cogestionado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `id_tipo_doc` int(11) NOT NULL,
  `nombre_tipo_doc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`id_tipo_doc`, `nombre_tipo_doc`) VALUES
(1, 'investigaciones con fines de titulación'),
(2, 'investigaciones científicas'),
(3, 'proyecto de innovación'),
(4, 'monografías'),
(5, 'artículos científicos'),
(6, 'producción de libros'),
(7, 'producción de revistas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipo_usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'cesarxd365', 'bacaxd365', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`),
  ADD KEY `ix_tmp_autoinc` (`id_area`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`),
  ADD KEY `fk_autor_tipoautor` (`id_tipo_autor`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `ix_tmp_autoinc` (`id_carrera`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `fk_documento_lineasinvestigacion` (`id_lineas`),
  ADD KEY `fk_documento_tipo_doc` (`id_tipo_doc`);

--
-- Indices de la tabla `investigacion`
--
ALTER TABLE `investigacion`
  ADD PRIMARY KEY (`id_investigacion`),
  ADD KEY `ix_tmp_autoinc` (`id_investigacion`),
  ADD KEY `fk_investigacion_autor` (`id_autor`),
  ADD KEY `fk_investigacion_documento1` (`id_documento`);

--
-- Indices de la tabla `lineasinvestigacion`
--
ALTER TABLE `lineasinvestigacion`
  ADD PRIMARY KEY (`id_lineas`),
  ADD KEY `ix_tmp_autoinc` (`id_lineas`),
  ADD KEY `fk_lineasinvestigacion_area` (`id_area`),
  ADD KEY `fk_lineasinvestigacion_carrera` (`id_carrera`);

--
-- Indices de la tabla `sysdiagrams`
--
ALTER TABLE `sysdiagrams`
  ADD PRIMARY KEY (`diagram_id`),
  ADD UNIQUE KEY `uk_principal_name` (`principal_id`,`name`),
  ADD KEY `ix_tmp_autoinc` (`diagram_id`);

--
-- Indices de la tabla `tipoautor`
--
ALTER TABLE `tipoautor`
  ADD PRIMARY KEY (`id_tipo_autor`),
  ADD KEY `ix_tmp_autoinc` (`id_tipo_autor`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`id_tipo_doc`),
  ADD KEY `ix_tmp_autoinc` (`id_tipo_doc`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `ix_tmp_autoinc` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `investigacion`
--
ALTER TABLE `investigacion`
  MODIFY `id_investigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `lineasinvestigacion`
--
ALTER TABLE `lineasinvestigacion`
  MODIFY `id_lineas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `sysdiagrams`
--
ALTER TABLE `sysdiagrams`
  MODIFY `diagram_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipoautor`
--
ALTER TABLE `tipoautor`
  MODIFY `id_tipo_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor`
--
ALTER TABLE `autor`
  ADD CONSTRAINT `fk_autor_tipoautor` FOREIGN KEY (`id_tipo_autor`) REFERENCES `tipoautor` (`id_tipo_autor`);

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_documento_lineasinvestigacion` FOREIGN KEY (`id_lineas`) REFERENCES `lineasinvestigacion` (`id_lineas`),
  ADD CONSTRAINT `fk_documento_tipo_doc` FOREIGN KEY (`id_tipo_doc`) REFERENCES `tipo_doc` (`id_tipo_doc`);

--
-- Filtros para la tabla `investigacion`
--
ALTER TABLE `investigacion`
  ADD CONSTRAINT `fk_investigacion_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`),
  ADD CONSTRAINT `fk_investigacion_documento1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Filtros para la tabla `lineasinvestigacion`
--
ALTER TABLE `lineasinvestigacion`
  ADD CONSTRAINT `fk_lineasinvestigacion_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`),
  ADD CONSTRAINT `fk_lineasinvestigacion_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
