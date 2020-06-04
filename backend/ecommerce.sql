-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2020 a las 03:34:45
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `estado`, `fecha`) VALUES
(1, 'Tienda Virtual', 'dayanna@gmail.com', 'vistas/img/perfiles/499.png', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'administrador', 1, '2019-12-06 02:00:53'),
(2, 'Editor de la Tienda', 'adrian@gmail.com', 'vistas/img/perfiles/477.png', '$2a$07$asxx54ahjppf45sd87a5auBnK0T8g/TaNYrkZQmRmlyohJLox8X9S', 'editor', 1, '2019-12-06 06:46:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `ruta`, `tipo`, `img`, `estado`, `fecha`) VALUES
(1, '', 'sin-categoria', 'vistas/img/banner/.jpg', 1, '2019-12-06 00:27:54'),
(3, 'faros-montana', 'subcategorias', 'vistas/img/banner/faros-montana.jpg', 1, '2019-12-06 00:28:16'),
(4, 'faros', 'categorias', 'vistas/img/banner/faros.jpg', 1, '2019-12-06 00:28:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabeceras`
--

CREATE TABLE `cabeceras` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `palabrasClaves` text COLLATE utf8_spanish_ci NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cabeceras`
--

INSERT INTO `cabeceras` (`id`, `ruta`, `titulo`, `descripcion`, `palabrasClaves`, `portada`, `fecha`) VALUES
(1, 'inicio', 'Tienda Virtual', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/default.jpg', '2017-11-17 14:58:16'),
(2, 'desarrollo-web', 'Desarrollo Web', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/web.jpg', '2017-11-17 14:59:28'),
(3, 'peliculas', 'peliculas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris felis velit, volutpat nec molestie id, tempus eu enim. V', 'lorem,ipsum,sit', 'vistas/img/cabeceras/peliculas.jpg', '2018-03-15 22:22:27'),
(4, 'bicicletas', 'bicicletas', 'bicicleta azul', 'azul,rojo,gratis', 'vistas/img/cabeceras/bicicletas.jpg', '2019-12-05 23:45:15'),
(5, 'categoria-3', 'categoria 3', 'categoria 3 descp', 'categoria 3 pc', 'vistas/img/cabeceras/faros.jpg', '2020-05-31 05:21:36'),
(7, 'faro-amarilla', 'faro amarilla', 'faro amarilla', 'amarilla,faro,blanca,gratis', 'vistas/img/cabeceras/faro-amarilla.jpg', '2019-12-06 00:25:54'),
(8, 'bicicleta', 'bicicleta', 'jbsd hjdf', 'rojo,gratis', 'vistas/img/cabeceras/bicicleta.jpg', '2019-12-06 03:04:04'),
(10, 'efsdf', 'efsdf', 'dsf', 'sdfds', 'vistas/img/cabeceras/default/default.jpg', '2020-05-28 02:00:57'),
(11, 'efsdf', 'efsdf', 'dsf', 'sdfds', 'vistas/img/cabeceras/default/default.jpg', '2020-05-28 02:01:25'),
(12, 'efsdf', 'efsdf', 'dsf', 'sdfds', 'vistas/img/cabeceras/default/default.jpg', '2020-05-28 02:02:05'),
(13, 'gdfg', 'gdfg', 'dfgdfg', 'gdfg', 'vistas/img/cabeceras/default/default.jpg', '2020-05-28 02:04:51'),
(14, 'dsfs', 'dsfs', 'dsf', 'sdfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-29 02:22:01'),
(15, 'asa', 'asa', 'asasas', 'sas', 'vistas/img/cabeceras/default/default.jpg', '2020-05-29 02:23:02'),
(16, 'asa', 'asa', 'asasas', 'sas', 'vistas/img/cabeceras/default/default.jpg', '2020-05-29 02:23:18'),
(17, 'asa', 'asa', 'asasas', 'sas', 'vistas/img/cabeceras/default/default.jpg', '2020-05-29 02:23:31'),
(18, 'dsf', 'dsf', 'sdf', 'sdf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-29 03:21:01'),
(19, 'dsf', 'dsf', 'sdf', 'sdf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-29 03:22:05'),
(20, 'dsf', 'dsf', 'sdf', 'sdf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-29 03:30:35'),
(21, 'poigtuy', 'poigtuy', 'sasgdfgdfegdfgdfg', 'asas,sdfsdfs', 'undefined', '2020-05-29 04:25:45'),
(22, 'prueba2', 'Prueba2', 'Hola Prueba de jhjghj,\r\nhytfghfgthgfhfghfghfghfgh', '11,j1,1,15', 'undefined', '2020-06-01 18:45:24'),
(23, 'prueba-todo', 'PRUEBA TODO', 'holakuuuuuuuuuuuuuu\r\nkhjhjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'DFSDFDFD,DSF,SDFF', 'undefined', '2020-06-01 18:41:49'),
(24, 'fgfd', 'fgfd', 'descragrrrrrrrrrrrrrrrrrrhbj\nb gggggggggggggggggf\nbfggggggggggggggggggggb', 'asdaaa,pv', 'undefined', '2020-06-01 18:27:51'),
(25, 'categoria-2-nane-', 'categoria 2 nane ', 'categoria 2 desc', 'categoria 2 pc', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:21:14'),
(26, 'categoria-1-name', 'categoria 1 name', 'categoria 1 descp', 'categoria 1 pc', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:20:53'),
(27, 'subcategoria-3', 'subcategoria 3', 'subcategoria 3', 'subcategoria 3', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:45:36'),
(28, 'subcategoria-2', 'subcategoria 2', 'subcategoria 2', 'subcategoria 2', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:45:48'),
(29, 'subcategoria-1', 'subcategoria 1', 'subcategoria-1', 'fghf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:44:13'),
(36, 'stok', 'stok', 'stokstok', 'stok', 'vistas/img/cabeceras/default/default.jpg', '2020-05-30 20:24:15'),
(37, 'fgdf', 'FGDF', 'FGD', 'DFGD', 'vistas/img/cabeceras/default/default.jpg', '2020-05-30 20:51:44'),
(38, 'fgdf', 'FGDF', 'FGD', 'DFGD', 'vistas/img/cabeceras/default/default.jpg', '2020-05-30 23:35:18'),
(39, 'cdfdsf', 'cdfdsf', 'sdfs', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-30 23:46:34'),
(40, 'fgdf', 'FGDF', 'sfesdf', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 01:49:43'),
(41, 'fgdf', 'FGDF', 'sfesdf', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 01:49:46'),
(42, 'ssdfs', 'ssdfs', 'dfd', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:32:34'),
(43, 'ssdfs', 'ssdfs', 'dfd', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:32:48'),
(44, 'ssdfs', 'ssdfs', 'dfd', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:32:59'),
(45, 'ssdfs', 'ssdfs', 'dfd', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:33:20'),
(46, 'ssdfs', 'ssdfs', 'dfd', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:34:13'),
(47, 'ssdfs', 'ssdfs', 'dfd', 'dsfs', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 03:34:19'),
(48, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:41:41'),
(49, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:41:46'),
(50, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:41:50'),
(51, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:41:58'),
(52, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:42:45'),
(53, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:42:52'),
(54, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:43:34'),
(55, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:43:42'),
(56, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:45:36'),
(57, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:48:48'),
(58, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:49:06'),
(59, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:49:19'),
(60, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:49:26'),
(61, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:49:36'),
(62, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:49:47'),
(63, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:49:59'),
(64, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:55:04'),
(65, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:55:09'),
(66, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:55:30'),
(67, 'ssdfs', 'ssdfs', 'cvb', 'cvb', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 05:55:50'),
(68, 'prub', 'PRUB', 'PRUB', 'PRUB', 'vistas/img/cabeceras/prub.jpg', '2020-05-31 13:56:05'),
(69, 'prub', 'PRUB', 'PRUB', 'PRUB', 'vistas/img/cabeceras/prub.jpg', '2020-05-31 13:56:09'),
(73, 'ssdfs', 'ssdfs', 'sdf', 'sdf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:37:20'),
(74, 'ssdfs', 'ssdfs', 'sdf', 'sdf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:39:21'),
(75, 'ssdfs', 'ssdfs', 'sdf', 'sdf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:39:41'),
(76, 'ssdfs', 'ssdfs', 'fghff', 'gh', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:39:58'),
(77, 'ssdfs', 'ssdfs', 'fghff', 'gh', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:42:26'),
(78, 'ssdfs', 'ssdfs', 'fghff', 'gh', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:42:33'),
(79, 'ssdfs', 'ssdfs', 'fghff', 'gh', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:42:38'),
(80, 'gre', 'gre', 'fgd', 'dfgd', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:42:54'),
(81, 'gre', 'gre', 'fgd', 'dfgd', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 14:43:13'),
(84, 'as', 'as', 'asas', 'sas', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 17:30:38'),
(85, 'as', 'as', 'asas', 'sas', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 17:30:46'),
(86, 'as', 'as', 'asas', 'sas', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 17:30:56'),
(87, 'ssdfs', 'ssdfs', 'jnmkhjk', 'hjkh', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 17:44:51'),
(89, 'fgdf', 'FGDF', 'gfh', 'gfhf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:29:27'),
(90, 'fgdf', 'FGDF', 'gfh', 'gfhf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:30:16'),
(91, 'fgdf', 'FGDF', 'gfh', 'gfhf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:30:41'),
(92, 'fgdf', 'FGDF', 'gfh', 'gfhf', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:30:45'),
(93, 'asasas', 'asasas', 'asas', 'asa', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:30:57'),
(94, 'asasas', 'asasas', 'asas', 'asa', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:31:01'),
(95, 'asasas', 'asasas', 'asas', 'asa', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:31:05'),
(96, 'asasas', 'asasas', 'asas', 'asa', 'vistas/img/cabeceras/default/default.jpg', '2020-05-31 18:34:07'),
(97, 'hg', 'hg', 'ghj', 'ghj', 'vistas/img/cabeceras/default/default.jpg', '2020-06-01 18:46:46'),
(98, 'hg', 'hg', 'ghj', 'ghj', 'vistas/img/cabeceras/default/default.jpg', '2020-06-01 18:46:50'),
(99, 'hg', 'hg', 'fgh', 'fgh', 'vistas/img/cabeceras/hg.jpg', '2020-06-01 22:35:59'),
(100, 'hg', 'hg', 'fgh', 'fgh', 'vistas/img/cabeceras/hg.jpg', '2020-06-01 22:39:38'),
(101, 'hg', 'hg', 'fgh', 'fgh', 'vistas/img/cabeceras/hg.jpg', '2020-06-01 22:39:45'),
(105, 'ersder', 'ersder', 'hgyjgggggggggg', 'uhui', 'undefined', '2020-06-02 03:27:58'),
(106, 'ad', 'ad', 'af', 'dfg', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 01:27:26'),
(107, 'jlo', 'jlo', 'uyik', 'yui', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 01:28:01'),
(108, 'gtgft', 'gtgft', 'tygyt', 'hui', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 03:31:26'),
(109, 'nñññññ', 'ññññññ', 'tgftt', 'hyuh', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 03:33:19'),
(110, 'hjbhjb', 'hjbhjb', 'hgfh', 'fhg', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 03:34:17'),
(111, 'jjjjjjjj', 'jjjjjjjj', 'njjjjjjjjj', 'jju', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 03:37:39'),
(112, 'hgf', 'hgf', 'fgh', 'fgh', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 03:46:10'),
(113, 'jy', 'jy', 'jy', 'tyj', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 03:54:56'),
(116, 'look-like-readable-english', 'look like readable English', 'This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"', 'jgh', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 04:19:10'),
(117, 'lorem-ipsum-passage', 'Lorem Ipsum passage', 'This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"', 'hose inte', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 04:22:04'),
(118, 'subsub1', 'Subsub1', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer u', 'anera,galería', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 22:49:22'),
(119, 'subsub2', 'subsub2', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\".', 'contenido', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 22:50:37'),
(120, 'subsub2', 'subsub2', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\".', 'punto', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 22:52:32'),
(121, 'subsub2', 'subsub2', 'No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum', 'asd', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 22:54:15'),
(122, 'subsub3', 'subsub3', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinido', 'hgfh', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 22:56:24'),
(123, 'subsub2', 'subsub2', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinido', 'sdf', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 22:57:43'),
(124, 'subsub33', 'subsub33', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinido', 'hrt', 'vistas/img/cabeceras/default/default.jpg', '2020-06-02 22:59:28'),
(125, 'sub2sub', 'sub2sub', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinido', 'fgh', 'undefined', '2020-06-02 23:03:51'),
(127, 'dfgb', 'dfgb', 'bgf', 'fgb', 'vistas/img/cabeceras/default/default.jpg', '2020-06-04 00:49:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `ruta`, `estado`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `fecha`) VALUES
(7, 'CATEGORIA ', 'categoria', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 00:14:10'),
(8, 'CATEGORIA 2', 'categoria-2', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 00:14:21'),
(9, 'CATEGORIA 3', 'categoria-3', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 00:14:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `calificacion` float NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_usuario`, `id_producto`, `calificacion`, `comentario`, `fecha`) VALUES
(1, 86, 496, 3.5, 'Lo mejor de PHP', '2018-02-13 16:39:25'),
(2, 86, 464, 4.5, 'Excelente', '2018-02-13 15:55:14'),
(3, 87, 496, 4, 'El curso es muy bueno, pero puede ser mejor.', '2018-02-13 16:10:50'),
(4, 88, 496, 4.5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur', '2018-02-13 17:17:48'),
(6, 5, 496, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. ', '2018-02-13 17:21:30'),
(7, 12, 500, 0, '', '2018-03-27 23:19:33'),
(8, 2, 502, 5, 'buen producto', '2019-12-06 00:35:52'),
(9, 2, 502, 0, '', '2019-12-06 01:16:25'),
(10, 2, 502, 0, '', '2019-12-06 01:17:51'),
(11, 2, 502, 0, '', '2019-12-06 01:20:05'),
(12, 2, 502, 0, '', '2019-12-06 01:54:21'),
(13, 13, 502, 0, '', '2019-12-06 02:16:53'),
(14, 1, 502, 0, '', '2019-12-06 02:53:13'),
(15, 1, 503, 0, '', '2019-12-06 03:04:59'),
(16, 1, 503, 0, '', '2019-12-06 03:13:17'),
(17, 16, 503, 0, '', '2019-12-06 03:27:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercio`
--

CREATE TABLE `comercio` (
  `id` int(11) NOT NULL,
  `impuesto` float NOT NULL,
  `envioNacional` float NOT NULL,
  `envioInternacional` float NOT NULL,
  `tasaMinimaNal` float NOT NULL,
  `tasaMinimaInt` float NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `clienteIdPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `llaveSecretaPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPayu` text COLLATE utf8_spanish_ci NOT NULL,
  `merchantIdPayu` int(11) NOT NULL,
  `accountIdPayu` int(11) NOT NULL,
  `apiKeyPayu` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comercio`
--

INSERT INTO `comercio` (`id`, `impuesto`, `envioNacional`, `envioInternacional`, `tasaMinimaNal`, `tasaMinimaInt`, `pais`, `modoPaypal`, `clienteIdPaypal`, `llaveSecretaPaypal`, `modoPayu`, `merchantIdPayu`, `accountIdPayu`, `apiKeyPayu`) VALUES
(1, 15, 150, 250, 110, 120, 'MX', 'sandbox', 'AecffvSZfOgj6g1MkrVmz12ACMES2-InggmWCpU5CblR-z5WwkYBYjmLsh9yPRLuRape1ahjqpcJet4N', 'EAx1SVMHGV6MJKwl-pnOSzaJASlAINZdYRdS--wkgaPYLevcGw88V0PU_W_rg00xLkBknybCjsO_xzA0', 'live', 508029, 512321, '4Vj8eK4rloUd272L48hsrarnUA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `envio` int(11) NOT NULL,
  `metodo` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `id_usuario`, `id_producto`, `envio`, `metodo`, `email`, `direccion`, `pais`, `cantidad`, `detalle`, `pago`, `fecha`) VALUES
(29, 2, 13, 10, 'paypal', 'sb-0fivk657767@personal.example.com', 'Calle Juarez 1, Miguel Hidalgo, Ciudad de Mexico, 11580', 'MX', 2, NULL, '2', '2020-06-02 19:58:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deseos`
--

CREATE TABLE `deseos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deseos`
--

INSERT INTO `deseos` (`id`, `id_usuario`, `id_producto`, `fecha`) VALUES
(1, 9, 469, '2018-03-26 22:03:34'),
(2, 9, 469, '2018-03-26 22:03:35'),
(3, 9, 467, '2018-03-26 22:03:39'),
(4, 9, 3, '2018-03-26 22:03:43'),
(5, 9, 469, '2018-03-26 22:03:54'),
(6, 9, 470, '2018-03-26 22:03:57'),
(7, 9, 467, '2018-03-26 22:04:00'),
(8, 9, 4, '2018-03-26 22:04:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `nuevosUsuarios` int(11) NOT NULL,
  `nuevasVentas` int(11) NOT NULL,
  `nuevasVisitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `nuevosUsuarios`, `nuevasVentas`, `nuevasVisitas`) VALUES
(1, 0, 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `barraSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `textoSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `colorFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `colorTexto` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `redesSociales` text COLLATE utf8_spanish_ci NOT NULL,
  `apiFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `pixelFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `googleAnalytics` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logo`, `icono`, `redesSociales`, `apiFacebook`, `pixelFacebook`, `googleAnalytics`, `fecha`) VALUES
(1, '#48cf32', '#ffffff', '#2e6ba3', '#ffffff', 'vistas/img/plantilla/logo.jpg', 'vistas/img/plantilla/icono.png', '[{\"red\":\"fa-facebook\",\"estilo\":\"facebookNegro\",\"url\":\"http://facebook.com/\",\"activo\":1},{\"red\":\"fa-youtube\",\"estilo\":\"youtubeNegro\",\"url\":\"http://youtube.com/\",\"activo\":1},{\"red\":\"fa-twitter\",\"estilo\":\"twitterNegro\",\"url\":\"http://twitter.com/\",\"activo\":0},{\"red\":\"fa-google-plus\",\"estilo\":\"google-plusNegro\",\"url\":\"http://google.com/\",\"activo\":0},{\"red\":\"fa-instagram\",\"estilo\":\"instagramNegro\",\"url\":\"http://instagram.com/\",\"activo\":1}]', '\r\n      		<script>   window.fbAsyncInit = function() {     FB.init({       appId      : \'131737410786111\',       cookie     : true,       xfbml      : true,       version    : \'v2.10\'     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = \"https://connect.facebook.net/en_US/sdk.js\";      fjs.parentNode.insertBefore(js, fjs);    }(document, \'script\', \'facebook-jssdk\'));  </script>\r\n      		', '\r\n  			<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\'; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,\'script\', 	  \'https://connect.facebook.net/en_US/fbevents.js\'); 	  fbq(\'init\', \'131737410786111\'); 	  fbq(\'track\', \'PageView\'); 	</script> 	<noscript><img height=\"1\" width=\"1\" style=\"display:none\" 	  src=\"https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1\" 	/></noscript> <!-- End Facebook Pixel Code -->    \r\n  			', '  \r\n  				<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-999999-1\"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(\'js\', new Date());  	  gtag(\'config\', \'UA-9999999-1\'); 	</script>      \r\n            \r\n            \r\n            \r\n      ', '2019-12-05 23:53:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `id_subcategoria2` int(11) NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `titular` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `multimedia` text COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `costo` float NOT NULL,
  `utilidad` float NOT NULL,
  `comision` float NOT NULL,
  `paypal` float NOT NULL,
  `ancho` float NOT NULL DEFAULT 0,
  `altura` float NOT NULL DEFAULT 0,
  `largo` float NOT NULL,
  `stock` int(111) NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `vistas` int(11) NOT NULL,
  `ventas` int(11) NOT NULL,
  `vistasGratis` int(11) NOT NULL,
  `ventasGratis` int(11) NOT NULL,
  `ofertadoPorCategoria` int(11) NOT NULL,
  `ofertadoPorSubCategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `entrega` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `id_subcategoria`, `id_subcategoria2`, `tipo`, `ruta`, `estado`, `titulo`, `titular`, `descripcion`, `multimedia`, `detalles`, `precio`, `costo`, `utilidad`, `comision`, `paypal`, `ancho`, `altura`, `largo`, `stock`, `portada`, `vistas`, `ventas`, `vistasGratis`, `ventasGratis`, `ofertadoPorCategoria`, `ofertadoPorSubCategoria`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `entrega`, `fecha`) VALUES
(17, 7, 24, 32, 'fisico', 'subsub11', 1, 'Subsub11', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ...', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer u', '[{\"foto\":\"vistas/img/multimedia/subsub1/ayuda.jpg\"}]', '{\"Color\":[\"d\"],\"Marca\":[\"s\"],\"Medidas\":[\"d\"]}', 260, 0, 0, 0, 0, 5, 6, 5, 10, 'vistas/img/productos/subsub1.jpg', 5, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, '2020-06-02 23:50:43'),
(21, 9, 26, 33, 'fisico', 'subsub3', 1, 'subsub3', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos...', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinido', '[{\"foto\":\"vistas/img/multimedia/subsub3/esit_6.jpg\"}]', '{\"Color\":[\"hfgt\"],\"Marca\":[\"fgh\"],\"Medidas\":[\"52\"]}', 230, 0, 0, 0, 0, 526, 566, 262, 10, 'vistas/img/productos/subsub3.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 2, '2020-06-02 22:56:24'),
(23, 9, 26, 34, 'fisico', 'subsub33', 1, 'subsub33', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos...', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinido', '[{\"foto\":\"vistas/img/multimedia/subsub33/producto3.jpg\"}]', '{\"Color\":[\"xbf\"],\"Marca\":[\"dfb\"],\"Medidas\":[\"dfb\"]}', 263, 0, 0, 0, 0, 54, 45, 45, 1, 'vistas/img/productos/subsub33.jpg', 2, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, '2020-06-02 23:07:33'),
(24, 8, 25, 35, 'fisico', 'sub2sub', 1, 'sub2sub', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos...', 'porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinido', '[{\"foto\":\"vistas/img/multimedia/sub2sub/sus.jpg\"}]', '{\"Color\":[\"hgf\"],\"Marca\":[\"fhg\"],\"Medidas\":[\"256\"]}', 26, 0, 0, 0, 0, 51, 51, 51, 1, 'vistas/img/productos/sub2sub.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 1, '2020-06-02 23:07:43'),
(26, 9, 26, 34, 'fisico', 'dfgb', 1, 'dfgb', 'bgf...', 'bgf', '[{\"foto\":\"vistas/img/multimedia/dfgb/esit_6.jpg\"}]', '{\"Color\":[\"bgf\"],\"Marca\":[\"fgb\"],\"Medidas\":[\"25\"]}', 0, 30, 0.3, 4, 0.4, 255, 452, 452, 25, 'vistas/img/productos/dfgb.jpg', 0, 0, 1, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 3, '2020-06-04 00:57:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `imgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloImgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloTextoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `boton` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `nombre`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `titulo1`, `titulo2`, `titulo3`, `boton`, `url`, `orden`, `fecha`) VALUES
(1, 'Bicicletas', 'vistas/img/slide/slide1/fondo.jpg', 'slideOpcion2', 'vistas/img/slide/slide1/producto.jpg', '{\"top\":\"15\",\"right\":\"\",\"left\":\"15\",\"width\":\"25\"}', '{\"top\":\"20\",\"right\":\"15\",\"left\":\"\",\"width\":\"45\"}', '{\"texto\":\"ofertas\",\"color\":\"#f0dede\"}', '{\"texto\":\"De\",\"color\":\"#f5e8e8\"}', '{\"texto\":\"Fin de año\",\"color\":\"#faf4f4\"}', 'VER PRODUCTO', 'http://localhost/frontend/bicicletas', 2, '2019-12-06 05:50:44'),
(3, 'Montaña', 'vistas/img/slide/slide3/fondo.jpg', 'slideOpcion2', 'vistas/img/slide/slide3/producto.png', '{\"top\":\"20\",\"right\":\"\",\"left\":\"10\",\"width\":\"30\"}', '{\"top\":\"15\",\"right\":\"15\",\"left\":\"\",\"width\":\"40\"}', '{\"texto\":\"Bicicletas\",\"color\":\"#eceef0\"}', '{\"texto\":\"50% de descuento\",\"color\":\"#1c1c1c\"}', '{\"texto\":\"De temporada\",\"color\":\"#f0e3e3\"}', 'VER PRODUCTO', '#', 1, '2019-12-06 05:50:44'),
(4, 'faros', 'vistas/img/slide/slide4/fondo.jpg', 'slideOpcion1', '', '{\"top\":\"\",\"right\":\"\",\"left\":\"\",\"width\":\"\"}', '{\"top\":\"20\",\"right\":\"\",\"left\":\"15\",\"width\":\"40\"}', '{\"texto\":\"Faros\",\"color\":\"#333\"}', '{\"texto\":\"Navideños\",\"color\":\"#777\"}', '{\"texto\":\"Conocelos\",\"color\":\"#888\"}', 'ver producto', '#', 3, '2019-12-06 05:50:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `subcategoria` text COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ofertadoPorCategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `subcategoria`, `id_categoria`, `ruta`, `estado`, `ofertadoPorCategoria`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `fecha`) VALUES
(24, 'subcategoria ', 7, 'subcategoria', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:42:34'),
(25, 'subcategoria 2', 8, 'subcategoria-2', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-05-31 03:45:48'),
(26, 'subcategoria 3', 9, 'subcategoria-3', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:42:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias2`
--

CREATE TABLE `subcategorias2` (
  `id` int(11) NOT NULL,
  `subcategoria2` text COLLATE utf8_spanish_ci NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ofertadoPorSubcategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategorias2`
--

INSERT INTO `subcategorias2` (`id`, `subcategoria2`, `id_subcategoria`, `ruta`, `estado`, `ofertadoPorSubcategoria`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `fecha`) VALUES
(27, 'subsub3 hg', 26, 'subsub3-hg', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:45:09'),
(30, 'subsub2 ad', 25, 'subsub2-ad', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:44:08'),
(31, 'subsub2 jlo', 25, 'subsub2-jlo', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:44:36'),
(32, 'subsub1', 24, 'subsub1', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:43:13'),
(33, 'subsub3 ññ', 26, 'subsub3-ññ', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:45:29'),
(34, 'subsub3', 26, 'subsub3', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:45:38'),
(35, 'subsub2 jy', 25, 'subsub2-jy', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2020-06-02 22:44:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nombrefiscal` text COLLATE utf8_spanish_ci NOT NULL,
  `emailfac` text COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `rfc` text COLLATE utf8_spanish_ci NOT NULL,
  `regimenfiscal` text COLLATE utf8_spanish_ci NOT NULL,
  `correofact` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `email`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`, `nombrefiscal`, `emailfac`, `cp`, `rfc`, `regimenfiscal`, `correofact`) VALUES
(2, 'pepe', '$2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe', 'pepe@gmail.com', 'directo', '', 0, '6b0becddecd5a06042b3f8078c97f2e0', '2019-12-16 05:32:20', '', '', 0, '', '', ''),
(17, 'sheila', '$2a$07$asxx54ahjppf45sd87a5auSFuHPq3ZGSopXFgdE2d.w3JOLfYhtKu', 'sheila@gmail.com', 'directo', '', 0, 'd3731f6d859b1101d09263d8bb9a09fe', '2019-12-13 03:00:16', '', '', 0, '', 'fisica', ''),
(18, 'Adrian W-Tech', 'null', 'dinopiza@gmail.com', 'google', 'https://lh3.googleusercontent.com/a-/AAuE7mBQ9Kj9bSjm2PRHgCg32IPDfY6FOvJp9H4rhxGPFHc=s96-c', 0, 'null', '2019-12-16 05:24:26', '', 'web@gmail.com', 1220, 'rahj980403hdfmrs02', 'fosica', 'facrt@prueba.com'),
(19, 'josue Ramirez', 'null', 'adrianwebtech@gmail.com', 'google', 'https://lh3.googleusercontent.com/a-/AAuE7mBNdxlAC9mKtmtM2l0iZm4UT2EqUdNM6kxtfyh8=s96-c', 0, 'null', '2020-02-25 04:34:45', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitaspaises`
--

CREATE TABLE `visitaspaises` (
  `id` int(11) NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `visitaspaises`
--

INSERT INTO `visitaspaises` (`id`, `pais`, `codigo`, `cantidad`, `fecha`) VALUES
(1, 'United States', 'US', 2, '2017-12-05 21:02:46'),
(2, 'Japan', 'JP', 65, '2018-03-27 13:26:30'),
(3, 'Spain', 'ES', 10, '2017-12-05 21:02:53'),
(4, 'Colombia', 'CO', 5, '2017-12-05 21:02:55'),
(5, 'China', 'CN', 3, '2017-12-05 21:04:32'),
(6, 'Germany', 'DE', 34, '2017-12-05 21:04:39'),
(7, 'Mexico', 'MX', 14, '2019-12-06 05:57:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitaspersonas`
--

CREATE TABLE `visitaspersonas` (
  `id` int(11) NOT NULL,
  `ip` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `visitaspersonas`
--

INSERT INTO `visitaspersonas` (`id`, `ip`, `pais`, `visitas`, `fecha`) VALUES
(1, '153.202.197.216', 'Japan', 1, '2017-11-08 18:37:07'),
(3, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:16'),
(5, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:19'),
(6, '234.13.198.119', 'Colombia', 1, '2017-11-28 19:16:03'),
(7, '141.46.61.241', 'Germany', 1, '2017-11-28 19:13:45'),
(8, '40.179.75.60', 'United States', 1, '2017-11-28 19:14:05'),
(9, '153.205.198.22', 'Japan', 1, '2017-11-01 19:14:18'),
(10, '148.21.177.158', 'United States', 1, '2017-10-28 19:14:34'),
(11, '40.224.125.226', 'United States', 1, '2017-11-28 19:14:56'),
(12, '10.98.135.68', 'China', 1, '2017-11-28 19:15:57'),
(13, '23.121.157.131', 'United States', 1, '2017-11-28 19:15:37'),
(17, '8.12.238.123', 'United States', 1, '2017-11-28 19:28:27'),
(18, '148.21.177.158', 'United States', 1, '2017-11-28 19:33:05'),
(19, '153.202.197.216', 'Japan', 1, '2017-11-28 19:33:50'),
(27, '153.205.198.22', 'Japan', 1, '2017-10-28 20:05:19'),
(31, '153.205.198.22', 'Japan', 1, '2017-11-28 20:09:49'),
(32, '153.205.198.22', 'Japan', 1, '2017-11-29 19:23:07'),
(33, '153.205.198.22', 'Japan', 1, '2017-11-30 23:01:27'),
(34, '153.205.198.22', 'Japan', 1, '2017-12-04 14:55:27'),
(35, '153.205.198.22', 'Japan', 1, '2017-12-05 20:58:04'),
(36, '153.205.198.22', 'Japan', 1, '2017-12-06 21:11:13'),
(37, '153.205.198.22', 'Japan', 1, '2017-12-07 22:32:13'),
(38, '153.205.198.22', 'Japan', 1, '2017-12-11 15:32:10'),
(39, '153.205.198.22', 'Japan', 1, '2017-12-13 15:45:58'),
(40, '153.205.198.22', 'Japan', 1, '2017-12-19 02:37:45'),
(41, '153.205.198.22', 'Japan', 1, '2017-12-19 12:54:21'),
(42, '153.205.198.22', 'Unknown', 1, '2017-12-30 15:41:47'),
(43, '153.205.198.22', 'Japan', 1, '2018-01-02 15:46:52'),
(44, '153.205.198.22', 'Japan', 1, '2018-01-03 13:54:29'),
(45, '153.205.198.22', 'Japan', 1, '2018-01-04 16:54:03'),
(46, '153.205.198.22', 'Japan', 1, '2018-01-05 17:17:05'),
(47, '153.205.198.22', 'Japan', 1, '2018-01-08 13:57:21'),
(48, '153.205.198.22', 'Japan', 1, '2018-01-09 15:46:40'),
(49, '153.205.198.22', 'Japan', 1, '2018-01-10 20:34:12'),
(50, '153.205.198.22', 'Japan', 1, '2018-01-11 14:08:56'),
(51, '153.205.198.22', 'Japan', 1, '2018-01-15 18:10:09'),
(52, '153.205.198.22', 'Japan', 1, '2018-01-16 16:15:33'),
(53, '153.205.198.22', 'Japan', 1, '2018-01-17 21:39:17'),
(54, '153.205.198.22', 'Japan', 1, '2018-01-18 20:16:09'),
(55, '153.205.198.22', 'Japan', 1, '2018-01-19 15:05:32'),
(56, '153.205.198.22', 'Japan', 1, '2018-01-22 14:38:48'),
(57, '153.205.198.22', 'Japan', 1, '2018-01-25 15:44:30'),
(58, '153.205.198.22', 'Japan', 1, '2018-01-26 21:24:38'),
(59, '153.205.198.22', 'Japan', 1, '2018-01-29 20:45:50'),
(60, '153.205.198.22', 'Japan', 1, '2018-01-30 22:32:35'),
(61, '153.205.198.22', 'Japan', 1, '2018-01-31 18:35:33'),
(62, '153.205.198.22', 'Japan', 1, '2018-02-07 17:37:45'),
(63, '153.205.198.22', 'Japan', 1, '2018-02-13 16:52:37'),
(64, '153.205.198.22', 'Japan', 1, '2018-02-14 13:33:04'),
(65, '153.205.198.22', 'Japan', 1, '2018-02-16 13:50:44'),
(66, '153.205.198.22', 'Japan', 1, '2018-02-23 17:06:23'),
(67, '153.205.198.22', 'Japan', 1, '2018-03-02 17:25:19'),
(68, '153.205.198.22', 'Japan', 1, '2018-03-03 12:06:54'),
(69, '153.205.198.22', 'Japan', 1, '2018-03-05 16:27:57'),
(70, '153.205.198.22', 'Japan', 1, '2018-03-06 17:59:36'),
(71, '153.205.198.22', 'Japan', 1, '2018-03-08 14:56:34'),
(72, '153.205.198.22', 'Japan', 1, '2018-03-08 14:56:34'),
(73, '153.205.198.22', 'Japan', 1, '2018-03-12 19:38:37'),
(74, '153.205.198.22', 'Japan', 1, '2018-03-13 20:35:47'),
(75, '153.205.198.22', 'Japan', 1, '2018-03-14 19:41:17'),
(76, '153.205.198.22', 'Japan', 1, '2018-03-15 16:41:11'),
(77, '153.205.198.22', 'Japan', 1, '2018-03-16 19:21:45'),
(78, '153.205.198.22', 'Japan', 1, '2018-03-17 12:23:58'),
(79, '153.205.198.22', 'Japan', 1, '2018-03-19 00:38:47'),
(80, '153.205.198.22', 'Japan', 1, '2018-03-19 12:57:20'),
(81, '153.205.198.22', 'Japan', 1, '2018-03-20 20:33:33'),
(82, '153.205.198.22', 'Japan', 1, '2018-03-21 19:30:58'),
(83, '153.205.198.22', 'Japan', 1, '2018-03-23 19:41:03'),
(84, '153.205.198.22', 'Japan', 1, '2018-03-26 12:42:06'),
(85, '153.205.198.22', 'Japan', 1, '2018-03-27 13:26:30'),
(86, '163.172.160.190', 'France', 1, '2018-03-27 23:23:14'),
(87, '189.183.96.0', 'Mexico', 1, '2019-12-06 04:21:13'),
(88, '189.183.96.0', 'Mexico', 1, '2019-12-06 05:55:10'),
(89, '189.183.96.0', 'Mexico', 1, '2019-12-06 05:55:27'),
(90, '189.183.96.0', 'Mexico', 1, '2019-12-06 05:55:58'),
(91, '189.183.96.0', 'Mexico', 1, '2019-12-06 05:56:17'),
(92, '189.183.96.0', 'Mexico', 1, '2019-12-06 05:57:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cabeceras`
--
ALTER TABLE `cabeceras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deseos`
--
ALTER TABLE `deseos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias2`
--
ALTER TABLE `subcategorias2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitaspaises`
--
ALTER TABLE `visitaspaises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitaspersonas`
--
ALTER TABLE `visitaspersonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cabeceras`
--
ALTER TABLE `cabeceras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `comercio`
--
ALTER TABLE `comercio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `deseos`
--
ALTER TABLE `deseos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `subcategorias2`
--
ALTER TABLE `subcategorias2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `visitaspaises`
--
ALTER TABLE `visitaspaises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `visitaspersonas`
--
ALTER TABLE `visitaspersonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
