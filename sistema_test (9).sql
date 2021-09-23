-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2021 a las 03:45:41
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_test`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_areas_fechas` (IN `f_inicio` DATE, IN `f_fin` DATE)  BEGIN 
SELECT * FROM areas WHERE fec_insercion BETWEEN f_inicio ANd f_fin AND estado=1;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_reclamo_confirmados` (IN `f_inicio` DATE, IN `f_fin` DATE)  BEGIN 
SELECT * FROM reclamo_confirmados WHERE fec_insercion BETWEEN f_inicio ANd f_fin AND estado=1;
 END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `contar_empleados` () RETURNS INT(11) BEGIN
DECLARE resultado INT;

SELECT COUNT(id_empleado) INTO resultado
FROM empleados WHERE estado=1;
RETURN resultado;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `contar_reclamos` () RETURNS INT(11) BEGIN
DECLARE resultado INT;

SELECT COUNT(id_reclamo) INTO resultado
FROM reclamos WHERE estado=1;
RETURN resultado;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `id_acceso` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `permisos` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id_acceso`, `id_grupo`, `id_opcion`, `id_rol`, `permisos`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(292, 1, 1, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(293, 1, 2, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(294, 1, 3, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(295, 1, 4, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(296, 1, 5, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(297, 1, 6, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(298, 1, 7, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(299, 2, 8, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(300, 3, 9, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(301, 3, 10, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(302, 3, 11, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(303, 3, 12, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(304, 3, 13, 1, 'a', '2021-07-30 22:40:34', '2021-07-30 22:40:34', 1, '1'),
(305, 3, 18, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(306, 3, 19, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(307, 3, 20, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(308, 3, 21, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(309, 3, 22, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(310, 3, 23, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(311, 4, 14, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(312, 4, 15, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(313, 4, 16, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(314, 4, 17, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(315, 4, 24, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(316, 4, 25, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(317, 4, 26, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1'),
(318, 4, 27, 1, 'a', '2021-07-30 22:40:35', '2021-07-30 22:40:35', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `id_sistema_reclamo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `id_sistema_reclamo`, `nombre`, `descripcion`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, 'Mantenimientosssss', 'Mantenimiento de tuberias de agua potable y a', '2021-06-30 08:16:34', '2021-06-30 08:16:34', 1, '1'),
(2, 1, 'Comercialssdddd', 'Odecos cobros de morasddddddddddddddddddddddd', '2021-06-30 08:31:54', '2021-06-30 08:31:54', 1, '1'),
(3, 1, 'ererererddddddddddddddddddddd', 'erererer', '2021-06-30 08:31:46', '2021-06-30 08:31:46', 1, '1'),
(4, 1, 'rgtrsh', 'ghgfh', '2021-06-30 08:13:18', '2021-06-30 08:13:18', 1, '0'),
(5, 1, 'rrrrrddddddddddddddd', 'fffff', '2021-06-30 08:31:35', '2021-06-30 08:31:35', 1, '0'),
(6, 1, 'ssssaaa', 'dddd', '2021-06-30 08:29:51', '2021-06-30 08:29:51', 1, '0'),
(7, 1, 'hjygy', 'hjghyjhbbcccccccccccccccccccccc', '2021-06-30 08:31:23', '2021-06-30 08:31:23', 1, '0'),
(8, 1, 'tryj', 'tyyjkuyl', '2021-06-30 07:57:26', '2021-06-30 07:57:26', 1, '0'),
(9, 1, 'ertyr', 'tytuiu', '2021-06-30 08:14:39', '2021-06-30 08:14:39', 1, '0'),
(10, 1, 'ertyr', 'armandocccc', '2021-06-30 07:56:46', '2021-06-30 07:56:46', 1, '0'),
(11, 1, 'ertyr', 'armandohjjj', '2021-06-30 08:08:30', '2021-06-30 08:08:30', 1, '0'),
(12, 1, 'ertyr', 'armandohjjjdf', '2021-06-30 07:55:59', '2021-06-30 07:55:59', 1, '0'),
(13, 1, 'ertyr', 'armandohjjjdf', '2021-06-30 08:22:50', '2021-06-30 08:22:50', 1, '0'),
(14, 1, 'rosa', 'armandocccc', '2021-06-30 08:18:31', '2021-06-30 08:18:31', 1, '0'),
(15, 1, 'rosaliadfdf', 'armandocccc', '2021-06-30 08:18:18', '2021-06-30 08:18:18', 1, '0'),
(16, 1, 'rosaliaccccccc', 'armandocccc', '2021-06-30 08:16:45', '2021-06-30 08:16:45', 1, '0'),
(17, 1, 'teamo', 'armandocccc', '2021-06-30 08:24:41', '2021-06-30 08:24:41', 1, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `id_asignar` int(11) NOT NULL,
  `id_conf` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fec_inicio` date NOT NULL,
  `fec_fin` date NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`id_asignar`, `id_conf`, `id_empleado`, `descripcion`, `fec_inicio`, `fec_fin`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, 1, 'kgkjgfgfh', '2021-06-10', '2021-06-12', '2021-06-17 21:25:10', '2021-06-17 21:25:10', 1, '1'),
(2, 2, 1, 'gffndsfg', '2021-07-02', '2021-07-03', '2021-07-02 22:58:41', '2021-07-02 22:58:41', 1, '1');

--
-- Disparadores `asignaciones`
--
DELIMITER $$
CREATE TRIGGER `inserta_registro_asignaciones` BEFORE INSERT ON `asignaciones` FOR EACH ROW BEGIN 
INSERT INTO registro_huellas(consulta, fec_insercion,usuario) VALUES ("INSERT-ASIGNACIONES", NEW.fec_insercion, NEW.usuario); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `id_tipo_empleado` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_sistema_reclamo` int(11) NOT NULL,
  `nombres` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `am` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ci` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tel_fijo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tel_cel` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `id_tipo_empleado`, `id_area`, `id_sistema_reclamo`, `nombres`, `ap`, `am`, `ci`, `tel_fijo`, `tel_cel`, `direccion`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, 1, 1, 'Ariel', 'Mendieta', 'ddd', '778', '3534', '5343', 'uuuuggggffffff', '2021-06-10 20:07:09', '2021-06-10 20:07:09', 1, '1'),
(2, 1, 1, 1, 'rrr', 'rrr', 'fdsg', '722', '25', '454', 'hgmh', '2021-07-02 02:16:10', '2021-07-02 02:16:10', 1, '0'),
(3, 1, 2, 1, 'hjy', 'jhj', 'hj', '27', '2525', '25275', 'jfj', '2021-06-29 21:19:19', '2021-06-29 21:19:19', 1, '0'),
(4, 1, 2, 1, 'gfh', 'ghgf', 'gh', '45', '0042', '254', 'fggfxngf', '2021-06-29 21:18:33', '2021-06-29 21:18:33', 1, '0'),
(5, 1, 1, 1, 'tjtyj', 'jytjyt', 'jytjtyjuu', '252', '2572', '5272', 'yet5yuhtr', '2021-06-29 21:19:14', '2021-06-29 21:19:14', 1, '0'),
(6, 1, 3, 1, 'thth', 'yhyt', 'yjtyj', '72', '2572', '4242', 'dtyrth', '2021-06-29 21:19:05', '2021-06-29 21:19:05', 1, '0'),
(7, 1, 1, 1, 'jhghhj', 'hgj', 'ytjuj', '252', '42424', '24424', 'uykt', '2021-07-02 02:17:05', '2021-07-02 02:17:05', 1, '0'),
(8, 2, 1, 1, 'Santos ', 'Ramos', 'Tejerina', '4544', '5454', '655', 'La florida', '2021-07-31 00:08:39', '2021-07-31 00:08:39', 1, '1'),
(9, 3, 1, 1, 'LIdio', 'Bejarano', 'Senteno', '6644', '6445', '484', 'La florida', '2021-07-31 00:09:30', '2021-07-31 00:09:30', 1, '1');

--
-- Disparadores `empleados`
--
DELIMITER $$
CREATE TRIGGER `inserta_registro_empleados` BEFORE INSERT ON `empleados` FOR EACH ROW BEGIN 
INSERT INTO registro_huellas(consulta, fec_insercion,usuario) VALUES ("INSERT-EMPLEADOS", NEW.fec_insercion, NEW.usuario); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `grupo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `icono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `gr_estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `grupo`, `icono`, `fec_insercion`, `fec_modificacion`, `usuario`, `gr_estado`) VALUES
(1, 'Herramientas', 'fa  fa-cog', '2021-06-09 07:05:53', '2021-06-09 07:05:53', 1, '1'),
(2, 'Parametros', 'fa fa-list', '2021-06-09 07:06:35', '2021-06-09 07:06:35', 1, '1'),
(3, 'Sistema', 'fa fa-windows', '2021-06-09 07:07:14', '2021-06-09 07:07:14', 1, '1'),
(4, 'Reportes', 'fa fa-table', '2021-06-09 07:07:42', '2021-06-09 07:07:42', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefes_areas`
--

CREATE TABLE `jefes_areas` (
  `id_jefe_area` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `nombres` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `am` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ci` int(11) NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `fec_inicio` date NOT NULL,
  `fec_fin` date NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jefes_areas`
--

INSERT INTO `jefes_areas` (`id_jefe_area`, `id_area`, `nombres`, `ap`, `am`, `ci`, `telefono`, `correo`, `fec_inicio`, `fec_fin`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, 'fff', 'dddgggggggggg', 'ffff', 42, '4252', 'd@gmail.com', '2021-06-05', '2021-06-10', '2021-06-17 21:13:59', '2021-06-17 21:13:59', 1, '1'),
(2, 2, 'gttrYTYTRY', 'bgb', 'bgd', 46044, '4446', 'd@gmail.com', '2021-06-04', '2021-06-05', '2021-06-17 21:15:14', '2021-06-17 21:15:14', 1, '1'),
(3, 2, 'ytjy', 'yjyu', 'thtyuythhty', 353, '33', 'g@gmail.com', '2021-06-17', '2021-06-20', '2021-06-17 21:47:28', '2021-06-17 21:47:28', 1, '1'),
(4, 3, 'ukuy', 'kuyki', 'uykuyik', 753, '873', 'e@gmail.com', '2021-06-09', '2021-06-18', '2021-06-17 21:48:03', '2021-06-17 21:48:03', 1, '1'),
(5, 2, 'iuyiuyi', 'iuyiy', 'iuyiuyiu', 5873, '36536', 'd@gmail.com', '2021-06-16', '2021-06-18', '2021-06-17 21:48:35', '2021-06-17 21:48:35', 1, '1'),
(6, 1, 'kuiu', 'yuyi', 'yytuytu', 33, '35433', 'c@gmail.com', '2021-06-17', '2021-06-25', '2021-06-17 21:49:07', '2021-06-17 21:49:07', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id_opcion` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `op_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `mostrar` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(100) NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `op_estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id_opcion`, `id_grupo`, `nombre`, `op_url`, `mostrar`, `orden`, `fec_insercion`, `fec_modificacion`, `usuario`, `op_estado`) VALUES
(1, 1, 'Personas', '../tablaSeguridad/personas.php', 'si', 1, '2021-06-09 07:00:25', '2021-06-09 07:00:25', 1, '1'),
(2, 1, 'Usuario', '../tablaSeguridad/usuario.php', 'si', 2, '2021-06-10 04:18:19', '2021-06-10 04:18:19', 1, '1'),
(3, 1, 'Usuario roles', '../tablaSeguridad/usuario_roles.php', 'si', 3, '2021-06-10 04:38:14', '2021-06-10 04:38:14', 1, '1'),
(4, 1, 'Roles', '../tablaSeguridad/roles.php', 'si', 4, '2021-06-09 07:03:33', '2021-06-09 07:03:33', 1, '1'),
(5, 1, 'Accesos', '../tablaSeguridad/accesos.php', 'si', 5, '2021-06-09 07:04:04', '2021-06-09 07:04:04', 1, '1'),
(6, 1, 'Opciones', '../tablaSeguridad/opciones.php', 'si', 6, '2021-06-09 07:04:39', '2021-06-09 07:04:39', 1, '1'),
(7, 1, 'Grupos', '../tablaSeguridad/grupos.php', 'si', 7, '2021-06-09 07:05:03', '2021-06-09 07:05:03', 1, '1'),
(8, 2, 'Parametro', 'ss', 'si', 1, '2021-06-09 07:08:19', '2021-06-09 07:08:19', 1, '1'),
(9, 3, 'Sistema', '../tablas_sistema/mostrar.php', 'si', 1, '2021-06-09 07:10:10', '2021-06-09 07:10:10', 1, '1'),
(10, 3, 'Areas', '../tablas_sistema/tabla_areas.php', 'si', 2, '2021-06-09 07:20:51', '2021-06-09 07:20:51', 1, '1'),
(11, 3, 'Jefe de Areas', '../tablas_sistema/tabla_jefe_areas.php', 'si', 3, '2021-06-09 07:15:28', '2021-06-09 07:15:28', 1, '1'),
(12, 3, 'Empleados', '../tablas_sistema/tabla_empleados.php', 'si', 4, '2021-06-09 07:17:29', '2021-06-09 07:17:29', 1, '1'),
(13, 3, 'Asignaciones', '../tablas_sistema/tabla_asignacion.php', 'si', 5, '2021-06-09 07:18:28', '2021-06-09 07:18:28', 1, '1'),
(14, 4, 'Rep. Personas Usuarios', '	../reportes/persona_usuarios.php', 'si', 1, '2021-06-09 07:23:53', '2021-06-09 07:23:53', 1, '1'),
(15, 4, 'Rep. Personas Fehcas', '../reportes/persona_fecha.php', 'si', 2, '2021-06-09 07:24:45', '2021-06-09 07:24:45', 1, '1'),
(16, 4, 'Rep. Areas y Jefes de Areas', '../reportes/areas_jef.php', 'si', 3, '2021-06-09 07:26:40', '2021-06-09 07:26:40', 1, '1'),
(17, 4, 'Areas y Fechas', '../reportes/areas_fech.php', 'si', 4, '2021-06-09 07:27:29', '2021-06-09 07:27:29', 1, '1'),
(18, 3, 'Tipo de empleados', '../formularios/tipo_empleados.php', 'si', 6, '2021-06-09 08:05:09', '2021-06-09 08:05:09', 1, '1'),
(19, 3, 'Reclamos', '../formularios/reclamos.php', 'si', 7, '2021-06-09 08:10:00', '2021-06-09 08:10:00', 1, '1'),
(20, 3, 'Reclamos confirmados', '../formularios/reclamo_confirmados.php', 'si', 8, '2021-06-09 08:10:58', '2021-06-09 08:10:58', 1, '1'),
(21, 3, 'mvc', '../view/personas.php', 'si', 24, '2021-06-17 02:53:13', '2021-06-17 02:53:13', 1, '1'),
(22, 3, 'sistem', '../view/sistem.php', 'si', 28, '2021-06-17 02:55:53', '2021-06-17 02:55:53', 1, '1'),
(23, 3, 'sisresp', '../menu_sistema_responsive/', 'si', 30, '2021-06-18 05:38:38', '2021-06-18 05:38:38', 1, '1'),
(24, 4, 'REP. Empleados - Tipo de empleados', '../reportes/empleados_tipo.php', 'si', 5, '2021-06-29 21:33:22', '2021-06-29 21:33:22', 1, '1'),
(25, 4, 'RP. Empleados - Fechas', '../reportes/empleados_fechas.php', 'si', 6, '2021-06-29 22:10:50', '2021-06-29 22:10:50', 1, '1'),
(26, 4, 'Persona genero', '../formularios/reporte_genero.php', 'si', 8, '2021-07-30 20:48:34', '2021-07-30 20:48:34', 1, '1'),
(27, 4, 'Reporte_tipo_empleado_param', '../formularios/reporte_tipo_empleado.php', 'si', 9, '2021-07-30 22:40:17', '2021-07-30 22:40:17', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `id_sistema_reclamo` int(11) NOT NULL,
  `ci` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `am` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `id_sistema_reclamo`, `ci`, `nombres`, `ap`, `am`, `telefono`, `direccion`, `genero`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, '5435', 'Juan', 'Perez', 'Vejarano', '687', 'La florida', 'M', '2021-07-30 21:57:20', '2021-07-30 21:57:20', 1, '1'),
(2, 1, '733', 'Maria', 'Tapia', 'Rivera', '7852', 'El Molino', 'F', '2021-07-30 21:58:00', '2021-07-30 21:58:00', 1, '1'),
(3, 1, '7373', 'Mirta', 'Quevedo', 'Lozano', '7852857', 'Cenac', 'F', '2021-07-30 21:58:34', '2021-07-30 21:58:34', 1, '1'),
(4, 1, '5421', 'Ricardo', 'Arancibia', 'Portal', '454545', 'Luis de Fuentes', 'M', '2021-07-30 21:59:46', '2021-07-30 21:59:46', 1, '1'),
(5, 1, '22', 'Fabio', 'Zambrana', 'zeta', '75', 'Tomatitas', 'M', '2021-07-30 22:00:29', '2021-07-30 22:00:29', 1, '1'),
(6, 1, '45', 'Lidia', 'Sanches', 'Saabedra', '55', 'El Constructor', 'F', '2021-07-30 22:01:26', '2021-07-30 22:01:26', 1, '1'),
(7, 1, '453', 'hjk', 'kh', 'gfhgfgh', '52', 'jh', 'm', '2021-08-03 11:33:15', '2021-08-03 11:33:15', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `id_reclamo` int(11) NOT NULL,
  `nombres` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `am` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(45) NOT NULL,
  `correo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `barrio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `calle_avenida` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `entre_que_calles` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `numero_de_casa` int(11) NOT NULL,
  `referencias` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_del_reclamo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `map` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `otro_recurrente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_del_recurrente` int(11) NOT NULL,
  `tipo_de_calzada` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reclamos`
--

INSERT INTO `reclamos` (`id_reclamo`, `nombres`, `ap`, `am`, `telefono`, `correo`, `codigo_usuario`, `barrio`, `calle_avenida`, `entre_que_calles`, `numero_de_casa`, `referencias`, `descripcion_del_reclamo`, `map`, `otro_recurrente`, `telefono_del_recurrente`, `tipo_de_calzada`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 'hgsfh', 'hdgfh', 'gdh', 0, 'h', 'hdgfh', 'ghd', 'hdhg', '', 0, '', '', '', '', 0, '..........', '2021-06-09 08:11:36', '2021-06-09 08:11:36', 1, '1'),
(2, 'dddddd', 'fffffffff', 'gggggggggg', 27227, 'f', '142', 'nnnnn', 'kkkkk', 'xxxxxx', 45, 'thrjyujyfjmuyh', 'hthgjhrdgcbv', 'no', 'dfhfgfvc', 2542, 'hnhg', '2021-06-30 00:06:24', '2021-06-30 00:06:24', 1, '1'),
(3, 'rgrthgf', 'hgfhgjhg', 'jghjh', 27527, 'd', '2527', 'ghggh', 'jgjhjgh', 'jhjh', 45, 'hfjgyjfjtku', 'jytgkuuyjy', 'no', 'trhyttr', 2727, 'Cemento', '2021-07-02 22:57:27', '2021-07-02 22:57:27', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo_confirmados`
--

CREATE TABLE `reclamo_confirmados` (
  `id_conf` int(11) NOT NULL,
  `id_reclamo` int(11) NOT NULL,
  `nombres` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `am` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(45) NOT NULL,
  `correo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `barrio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `calle_avenida` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `entre_que_calles` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `numero_de_casa` int(11) NOT NULL,
  `referencias` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_del_reclamo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotos` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `map` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `otro_recurrente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_del_recurrente` int(11) NOT NULL,
  `tipo_de_calzada` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reclamo_confirmados`
--

INSERT INTO `reclamo_confirmados` (`id_conf`, `id_reclamo`, `nombres`, `ap`, `am`, `telefono`, `correo`, `codigo_usuario`, `barrio`, `calle_avenida`, `entre_que_calles`, `numero_de_casa`, `referencias`, `descripcion_del_reclamo`, `fotos`, `map`, `otro_recurrente`, `telefono_del_recurrente`, `tipo_de_calzada`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, 'hgfd', 'ghdf', 'hgf', 0, 'h', 'ghd', 'dhf', 'hgdf', 'dhg', 0, 'hgfhh', 'ghd', 'fotosbd/cosal.jpg', 'hjh', 'hjfhj', 27275, 'Adoquin', '2021-06-09 08:12:19', '2021-06-09 08:12:19', 1, '1'),
(2, 1, 'nghjggbvg', 'hfjhmj,hg', 'jjjhg', 27527, 'd', '2527', 'ghggh', 'jgjhjgh', 'jhjh', 45, 'rtykuyrtrdt', 'e5yr6ut7rytr', 'fotosbd/cosal17.jpg', 'no', 'uytuyikujyu', 2727, 'Cemento', '2021-07-02 22:58:12', '2021-07-02 22:58:12', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_huellas`
--

CREATE TABLE `registro_huellas` (
  `id_registro_huellas` int(11) NOT NULL,
  `consulta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro_huellas`
--

INSERT INTO `registro_huellas` (`id_registro_huellas`, `consulta`, `fec_insercion`, `usuario`) VALUES
(1, 'INSERT-EMPLEADOS', '2021-06-16 00:41:22', 1),
(2, 'INSERT-EMPLEADOS', '2021-06-16 00:42:09', 1),
(3, 'INSERT-EMPLEADOS', '2021-06-16 00:43:00', 1),
(4, 'INSERT-EMPLEADOS', '2021-07-02 02:16:57', 1),
(5, 'INSERT-ASIGNACIONES', '2021-07-02 22:58:41', 1),
(6, 'INSERT-EMPLEADOS', '2021-07-31 00:08:39', 1),
(7, 'INSERT-EMPLEADOS', '2021-07-31 00:09:30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 'super_administrador', '2021-06-09 06:56:47', '2021-06-09 06:56:47', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema_reclamos`
--

CREATE TABLE `sistema_reclamos` (
  `id_sistema_reclamo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_creador` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sistema_reclamos`
--

INSERT INTO `sistema_reclamos` (`id_sistema_reclamo`, `nombre`, `nombre_creador`, `logo`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 'Cosaalt R.L.', 'Armando', '../fotos/cosaalt.jpg', '2021-06-10 21:58:35', '2021-06-10 21:58:35', 1, '1'),
(2, 'dddd', 'ssssfffff', '../fotos/', '2021-07-02 07:58:55', '2021-07-02 07:58:55', 1, '1'),
(3, 'dddd', 'ssss', '../fotos/IMG-20200726-WA0015.jpg', '2021-06-12 02:39:59', '2021-06-12 02:39:59', 1, '0'),
(4, 'dddd', 'ssss', '../fotos/foto2.jpg', '2021-06-12 02:39:14', '2021-06-12 02:39:14', 1, '0'),
(5, 'eric', 'herlan', '../fotos/', '2021-07-07 02:24:37', '2021-07-07 02:24:37', 1, '0'),
(6, 'sdf', 'dsf', '../fotos/', '2021-06-30 04:10:05', '2021-06-30 04:10:05', 1, '1'),
(7, 'ghg', 'tytj', '../fotos/', '2021-06-30 04:20:12', '2021-06-30 04:20:12', 1, '1'),
(8, 'ghg', 'tytj', '../fotos/', '2021-06-30 04:32:14', '2021-06-30 04:32:14', 1, '1'),
(9, 'ghg', 'tytj', '../fotos/', '2021-06-30 04:39:20', '2021-06-30 04:39:20', 1, '1'),
(10, 'ghg', 'tytj', '../fotos/', '2021-06-30 04:40:01', '2021-06-30 04:40:01', 1, '1'),
(11, 'ghg', 'tytj', '../fotos/', '2021-06-30 04:40:09', '2021-06-30 04:40:09', 1, '1'),
(12, 'ghg', 'tytj', '../fotos/', '2021-06-30 05:53:17', '2021-06-30 05:53:17', 1, '0'),
(13, 'ghg', 'tytj', '../fotos/', '2021-06-30 04:40:30', '2021-06-30 04:40:30', 1, '1'),
(14, 'gfn', 'fgn', '../fotos/', '2021-06-30 04:43:05', '2021-06-30 04:43:05', 1, '1'),
(15, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:44:39', '2021-06-30 05:44:39', 1, '0'),
(16, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:54:03', '2021-06-30 05:54:03', 1, '0'),
(17, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:44:40', '2021-06-30 05:44:40', 1, '0'),
(18, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:54:02', '2021-06-30 05:54:02', 1, '0'),
(19, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:55:26', '2021-06-30 05:55:26', 1, '0'),
(20, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:46:06', '2021-06-30 05:46:06', 1, '0'),
(21, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:46:04', '2021-06-30 05:46:04', 1, '0'),
(22, 'gfn', 'fgn', '../fotos/', '2021-06-30 05:44:02', '2021-06-30 05:44:02', 1, '0'),
(23, 'ddfgf', 'hgjhg', '../fotos/', '2021-06-30 06:43:08', '2021-06-30 06:43:08', 1, '1'),
(24, 'fff', 'ddd', '../fotos/', '2021-07-02 03:33:34', '2021-07-02 03:33:34', 1, '1'),
(25, 'fff', 'ddd', '../fotos/', '2021-07-02 03:38:18', '2021-07-02 03:38:18', 1, '1'),
(26, 'fff', 'ddd', '../fotos/', '2021-07-02 03:38:42', '2021-07-02 03:38:42', 1, '1'),
(27, 'fff', 'ddd', '../fotos/', '2021-07-02 03:40:18', '2021-07-02 03:40:18', 1, '1'),
(28, 'fff', 'ddd', '../fotos/', '2021-07-02 03:40:22', '2021-07-02 03:40:22', 1, '1'),
(29, 'fff', 'ddd', '../fotos/', '2021-07-02 03:41:15', '2021-07-02 03:41:15', 1, '1'),
(30, 'fff', 'ddd', '../fotos/', '2021-07-02 03:42:19', '2021-07-02 03:42:19', 1, '1'),
(31, 'fff', 'ddd', '../fotos/', '2021-07-02 03:43:34', '2021-07-02 03:43:34', 1, '1'),
(32, 'fff', 'ddd', './fotos/', '2021-07-07 02:24:59', '2021-07-07 02:24:59', 1, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleados`
--

CREATE TABLE `tipo_empleados` (
  `id_tipo_empleado` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_empleados`
--

INSERT INTO `tipo_empleados` (`id_tipo_empleado`, `nombre`, `descripcion`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 'Plomero', 'mantenimiento de red de agua potable', '2021-06-09 08:05:56', '2021-06-09 08:05:56', 1, '1'),
(2, 'albanil', 'limpieza y mantenimiento de la red de alcanta', '2021-07-31 00:07:02', '2021-07-31 00:07:02', 1, '1'),
(3, 'cortador', 'cortes de agua potable', '2021-07-31 00:07:15', '2021-07-31 00:07:15', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `nom_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_persona`, `nom_usuario`, `clave`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, 'eric', '29988429c481f219b8c5ba8c071440e1', '2021-06-09 06:56:04', '2021-06-09 06:56:04', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_roles`
--

CREATE TABLE `usuario_roles` (
  `id_usuario_rol` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fec_insercion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fec_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_roles`
--

INSERT INTO `usuario_roles` (`id_usuario_rol`, `id_usuario`, `id_rol`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES
(1, 1, 1, '2021-06-09 06:57:37', '2021-06-09 06:57:37', 1, '1');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_areas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_areas` (
`nombre` varchar(45)
,`descripcion` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_tipo_empleados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_tipo_empleados` (
`nombre` varchar(45)
,`descripcion` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_areas`
--
DROP TABLE IF EXISTS `vista_areas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_areas`  AS SELECT `areas`.`nombre` AS `nombre`, `areas`.`descripcion` AS `descripcion` FROM `areas` WHERE `areas`.`estado` = 1 ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_tipo_empleados`
--
DROP TABLE IF EXISTS `vista_tipo_empleados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_tipo_empleados`  AS SELECT `tipo_empleados`.`nombre` AS `nombre`, `tipo_empleados`.`descripcion` AS `descripcion` FROM `tipo_empleados` WHERE `tipo_empleados`.`estado` = 1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id_acceso`),
  ADD KEY `id_opcion` (`id_opcion`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`),
  ADD KEY `id_sistema_reclamo` (`id_sistema_reclamo`);

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id_asignar`),
  ADD KEY `id_conf` (`id_conf`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_tipo_empleado` (`id_tipo_empleado`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_sistema_reclamo` (`id_sistema_reclamo`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `jefes_areas`
--
ALTER TABLE `jefes_areas`
  ADD PRIMARY KEY (`id_jefe_area`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id_opcion`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_sistema_reclamo` (`id_sistema_reclamo`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`id_reclamo`);

--
-- Indices de la tabla `reclamo_confirmados`
--
ALTER TABLE `reclamo_confirmados`
  ADD PRIMARY KEY (`id_conf`),
  ADD KEY `id_reclamo` (`id_reclamo`);

--
-- Indices de la tabla `registro_huellas`
--
ALTER TABLE `registro_huellas`
  ADD PRIMARY KEY (`id_registro_huellas`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sistema_reclamos`
--
ALTER TABLE `sistema_reclamos`
  ADD PRIMARY KEY (`id_sistema_reclamo`);

--
-- Indices de la tabla `tipo_empleados`
--
ALTER TABLE `tipo_empleados`
  ADD PRIMARY KEY (`id_tipo_empleado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  ADD PRIMARY KEY (`id_usuario_rol`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id_asignar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jefes_areas`
--
ALTER TABLE `jefes_areas`
  MODIFY `id_jefe_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `id_reclamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reclamo_confirmados`
--
ALTER TABLE `reclamo_confirmados`
  MODIFY `id_conf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro_huellas`
--
ALTER TABLE `registro_huellas`
  MODIFY `id_registro_huellas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sistema_reclamos`
--
ALTER TABLE `sistema_reclamos`
  MODIFY `id_sistema_reclamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tipo_empleados`
--
ALTER TABLE `tipo_empleados`
  MODIFY `id_tipo_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  MODIFY `id_usuario_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD CONSTRAINT `accesos_ibfk_1` FOREIGN KEY (`id_opcion`) REFERENCES `opciones` (`id_opcion`),
  ADD CONSTRAINT `accesos_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`),
  ADD CONSTRAINT `accesos_ibfk_3` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`id_sistema_reclamo`) REFERENCES `sistema_reclamos` (`id_sistema_reclamo`);

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`id_conf`) REFERENCES `reclamo_confirmados` (`id_conf`),
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_tipo_empleado`) REFERENCES `tipo_empleados` (`id_tipo_empleado`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`),
  ADD CONSTRAINT `empleados_ibfk_3` FOREIGN KEY (`id_sistema_reclamo`) REFERENCES `sistema_reclamos` (`id_sistema_reclamo`);

--
-- Filtros para la tabla `jefes_areas`
--
ALTER TABLE `jefes_areas`
  ADD CONSTRAINT `jefes_areas_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`);

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`id_sistema_reclamo`) REFERENCES `sistema_reclamos` (`id_sistema_reclamo`);

--
-- Filtros para la tabla `reclamo_confirmados`
--
ALTER TABLE `reclamo_confirmados`
  ADD CONSTRAINT `reclamo_confirmados_ibfk_1` FOREIGN KEY (`id_reclamo`) REFERENCES `reclamos` (`id_reclamo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`);

--
-- Filtros para la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  ADD CONSTRAINT `usuario_roles_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `usuario_roles_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
