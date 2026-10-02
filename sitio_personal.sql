-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2026 a las 06:14:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atestados`
--

CREATE TABLE `atestados` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `institucion` varchar(150) NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atestados`
--

INSERT INTO `atestados` (`id`, `titulo`, `institucion`, `anio`, `descripcion`, `imagen`) VALUES
(1, 'Introducción a la Ciberseguridad', 'UISIL', 2025, 'Curso de Introducción a la Ciberseguridad con una duración de 48 horas.', 'imagenes/ciberseguridad.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `imagen`, `descripcion`) VALUES
(1, 'imagenes/perfil.jpeg', 'Fotografía personal'),
(2, 'imagenes/ciberseguridad.jpeg', 'Certificado del curso Introducción a la Ciberseguridad'),
(3, 'imagenes/tryhackme.png', 'Aprendizaje de Fundamentos de Linux en TryHackMe'),
(4, 'imagenes/aprendizajeTry.png', 'Práctica de aprendizaje en ciberseguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(150) NOT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL,
  `descripcion_personal` text DEFAULT NULL,
  `presentacion` text DEFAULT NULL,
  `acerca_de_mi` text DEFAULT NULL,
  `intereses` text DEFAULT NULL,
  `habilidades` text DEFAULT NULL,
  `experiencia_conocimientos` text DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `redes_sociales` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre_completo`, `foto_perfil`, `descripcion_personal`, `presentacion`, `acerca_de_mi`, `intereses`, `habilidades`, `experiencia_conocimientos`, `correo`, `telefono`, `redes_sociales`) VALUES
(1, 'Ronald Araya', 'imagenes/perfil.jpeg', 'Soy estudiante de Ingeniería en Sistemas y me interesa aprender sobre tecnología y programación. Me gusta aprender.', 'Actualmente estudio Ingeniería en Sistemas y continúo desarrollando mis conocimientos en diferentes áreas de la tecnología.', 'Soy una persona interesada en la tecnología y actualmente me encuentro estudiando Ingeniería en Sistemas. Me gusta aprender nuevas herramientas y mejorar mis conocimientos en programación.', 'Programación, ciberseguridad, desarrollo web y tecnología.', 'Python, Java, C#, SQL, HTML y CSS.', 'Tengo conocimientos en programación, bases de datos, redes y actualmente estoy aprendiendo sobre ciberseguridad y desarrollo web.', 'arayaronald207@gmail.com', '(+506) 63760750', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atestados`
--
ALTER TABLE `atestados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atestados`
--
ALTER TABLE `atestados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
