-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-05-2026 a las 20:18:32
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbgrosic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `extension_territorial` int NOT NULL,
  `gentilicio` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `numero_municipios` int NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen_escudo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fauna`
--

DROP TABLE IF EXISTS `fauna`;
CREATE TABLE IF NOT EXISTS `fauna` (
  `id_fauna` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_cientfico` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No se especifica',
  `promedio_vida` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No se especifica',
  `descripcion_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_fauna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fauna_imagenes`
--

DROP TABLE IF EXISTS `fauna_imagenes`;
CREATE TABLE IF NOT EXISTS `fauna_imagenes` (
  `id_fauna` int UNSIGNED NOT NULL,
  `id_imagen` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_fauna_has_imagenes_fauna1_idx` (`id_fauna`),
  KEY `fk_fauna_has_imagenes_imagenes1_idx` (`id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fauna_municipios`
--

DROP TABLE IF EXISTS `fauna_municipios`;
CREATE TABLE IF NOT EXISTS `fauna_municipios` (
  `id_Fauna` int UNSIGNED NOT NULL,
  `id_municipio` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_Fauna_has_municipios_municipios1_idx` (`id_municipio`),
  KEY `fk_Fauna_has_municipios_Fauna1_idx` (`id_Fauna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flora`
--

DROP TABLE IF EXISTS `flora`;
CREATE TABLE IF NOT EXISTS `flora` (
  `id_flora` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_cientifico` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `genero` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `familia` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `especie` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `descripcion_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_flora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flora_imagenes`
--

DROP TABLE IF EXISTS `flora_imagenes`;
CREATE TABLE IF NOT EXISTS `flora_imagenes` (
  `id_flora` int UNSIGNED NOT NULL,
  `id_imagen` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_Flora_has_imagenes_Flora1_idx` (`id_flora`),
  KEY `fk_Flora_has_imagenes_imagenes1_idx` (`id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flora_municipios`
--

DROP TABLE IF EXISTS `flora_municipios`;
CREATE TABLE IF NOT EXISTS `flora_municipios` (
  `id_flora` int UNSIGNED NOT NULL,
  `id_municipio` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_Flora_has_municipios_municipios1_idx` (`id_municipio`),
  KEY `fk_Flora_has_municipios_Flora1_idx` (`id_flora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagen` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ruta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intereses_culturales`
--

DROP TABLE IF EXISTS `intereses_culturales`;
CREATE TABLE IF NOT EXISTS `intereses_culturales` (
  `id_interes_cult` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `direccion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_municipio` int UNSIGNED NOT NULL,
  `id_tipo_interes` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_interes_cult`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_int_culturales_municipios_idx` (`id_municipio`),
  KEY `fk_tipo_intereses_culturales_idx` (`id_tipo_interes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intereses_culturales_has_imagenes`
--

DROP TABLE IF EXISTS `intereses_culturales_has_imagenes`;
CREATE TABLE IF NOT EXISTS `intereses_culturales_has_imagenes` (
  `id_interes_cult` int UNSIGNED NOT NULL,
  `id_imagen` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_intereses_culturales_has_imagenes_imagenes1_idx` (`id_imagen`),
  KEY `fk_intereses_culturales_has_imagenes_intereses_culturales1_idx` (`id_interes_cult`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes`
--

DROP TABLE IF EXISTS `lenguajes`;
CREATE TABLE IF NOT EXISTS `lenguajes` (
  `id_lengua` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_lengua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_17_121520_create_imagens_table', 1),
(4, '2019_02_17_121520_create_usuarios_table', 1),
(5, '2019_02_17_121521_create_estados_table', 1),
(6, '2019_02_17_121521_create_faunas_table', 1),
(7, '2019_02_17_121521_create_floras_table', 1),
(8, '2019_02_17_121521_create_lenguajes_table', 1),
(9, '2019_02_17_121521_create_religions_table', 1),
(10, '2019_02_17_121521_create_tipo_sitio_interes_table', 1),
(11, '2019_02_17_121521_create_tipo_tradicions_table', 1),
(12, '2019_02_17_121620_create_regions_table', 1),
(13, '2019_02_17_121720_create_municipios_table', 1),
(14, '2019_02_17_121822_create_sitio_interes_table', 1),
(15, '2019_02_17_121822_create_tradicions_table', 1),
(16, '2019_02_17_121837_create_fauna_has_imagens_table', 1),
(17, '2019_02_17_121921_create_sitio_interes_has_imagens_table', 1),
(18, '2019_02_17_122026_create_flora_has_imagens_table', 1),
(19, '2019_02_17_122257_create_municipio_has_faunas_table', 1),
(20, '2019_02_17_122446_create_municipio_has_floras_table', 1),
(21, '2019_02_17_122545_create_municipio_has_lenguajes_table', 1),
(22, '2019_02_17_122720_create_municipio_has_religions_table', 1),
(23, '2019_02_17_122745_create_municipio_has_tradicions_table', 1),
(24, '2019_02_17_123036_create_tradicion_has_imagens_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

DROP TABLE IF EXISTS `municipios`;
CREATE TABLE IF NOT EXISTS `municipios` (
  `id_municipio` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clima` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `numero_habitantes` int NOT NULL,
  `historia_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `escudo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_region` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_municipio`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_municipios_regiones1_idx` (`id_region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios_lenguajes`
--

DROP TABLE IF EXISTS `municipios_lenguajes`;
CREATE TABLE IF NOT EXISTS `municipios_lenguajes` (
  `id_lengua` int UNSIGNED NOT NULL,
  `id_municipio` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_municipio_municipio_idx` (`id_municipio`),
  KEY `fk_lengua_lengua_idx` (`id_lengua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios_religiones`
--

DROP TABLE IF EXISTS `municipios_religiones`;
CREATE TABLE IF NOT EXISTS `municipios_religiones` (
  `id_municipio` int UNSIGNED NOT NULL,
  `id_religion` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_municipio_religion_municipios_idx` (`id_municipio`),
  KEY `fk_municipio_religion_religiones_idx` (`id_religion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios_tradiciones`
--

DROP TABLE IF EXISTS `municipios_tradiciones`;
CREATE TABLE IF NOT EXISTS `municipios_tradiciones` (
  `id_municipio` int UNSIGNED NOT NULL,
  `id_tradicion` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_muni_tradi_municipios_idx` (`id_municipio`),
  KEY `fk_muni_tradi_tradiciones_idx` (`id_tradicion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

DROP TABLE IF EXISTS `regiones`;
CREATE TABLE IF NOT EXISTS `regiones` (
  `id_region` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital_regional` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `extension_territorial` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `ubicacion_geografica` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `numero_habitantes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Información no disponible',
  `disponibilidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disponible',
  `numero_municipios` int NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_estado` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_region`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_regiones_estados1_idx` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `religiones`
--

DROP TABLE IF EXISTS `religiones`;
CREATE TABLE IF NOT EXISTS `religiones` (
  `id_religion` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_religion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_intereses_culturales`
--

DROP TABLE IF EXISTS `tipo_intereses_culturales`;
CREATE TABLE IF NOT EXISTS `tipo_intereses_culturales` (
  `id_tipo_interes` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_interes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tradicion`
--

DROP TABLE IF EXISTS `tipo_tradicion`;
CREATE TABLE IF NOT EXISTS `tipo_tradicion` (
  `id_tipo_tradicion` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_tradicion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tradiciones`
--

DROP TABLE IF EXISTS `tradiciones`;
CREATE TABLE IF NOT EXISTS `tradiciones` (
  `id_tradicion` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_festejo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `id_tipo_tradicion` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tradicion`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_tradiciones_tipo_tradicion_idx` (`id_tipo_tradicion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tradiciones_has_imagenes`
--

DROP TABLE IF EXISTS `tradiciones_has_imagenes`;
CREATE TABLE IF NOT EXISTS `tradiciones_has_imagenes` (
  `tradiciones_id_tradicion` int UNSIGNED NOT NULL,
  `imagenes_id_imagen` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_tradiciones_has_imagenes_tradiciones1_idx` (`tradiciones_id_tradicion`),
  KEY `fk_tradiciones_has_imagenes_imagenes1_idx` (`imagenes_id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fauna_imagenes`
--
ALTER TABLE `fauna_imagenes`
  ADD CONSTRAINT `fauna_imagenes_id_fauna` FOREIGN KEY (`id_fauna`) REFERENCES `fauna` (`id_fauna`),
  ADD CONSTRAINT `fk_fauna_has_imagenes_imagenes1_idx` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`);

--
-- Filtros para la tabla `fauna_municipios`
--
ALTER TABLE `fauna_municipios`
  ADD CONSTRAINT `fauna_municipios_id_Fauna` FOREIGN KEY (`id_Fauna`) REFERENCES `fauna` (`id_fauna`),
  ADD CONSTRAINT `fk_Fauna_has_municipios_municipios1_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`);

--
-- Filtros para la tabla `flora_imagenes`
--
ALTER TABLE `flora_imagenes`
  ADD CONSTRAINT `fk_Flora_has_imagenes_imagenes1_idx` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`),
  ADD CONSTRAINT `flora_imagenes_id_flora` FOREIGN KEY (`id_flora`) REFERENCES `flora` (`id_flora`);

--
-- Filtros para la tabla `flora_municipios`
--
ALTER TABLE `flora_municipios`
  ADD CONSTRAINT `fk_Flora_has_municipios_municipios1_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`),
  ADD CONSTRAINT `flora_municipios_id_flora` FOREIGN KEY (`id_flora`) REFERENCES `flora` (`id_flora`);

--
-- Filtros para la tabla `intereses_culturales`
--
ALTER TABLE `intereses_culturales`
  ADD CONSTRAINT `fk_int_culturales_municipios_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`),
  ADD CONSTRAINT `fk_tipo_intereses_culturales_idx` FOREIGN KEY (`id_tipo_interes`) REFERENCES `tipo_intereses_culturales` (`id_tipo_interes`);

--
-- Filtros para la tabla `intereses_culturales_has_imagenes`
--
ALTER TABLE `intereses_culturales_has_imagenes`
  ADD CONSTRAINT `fk_intereses_culturales_has_imagenes_imagenes1_idx` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`),
  ADD CONSTRAINT `fk_intereses_culturales_has_imagenes_intereses_culturales1_idx` FOREIGN KEY (`id_interes_cult`) REFERENCES `intereses_culturales` (`id_interes_cult`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `fk_municipios_regiones1_idx` FOREIGN KEY (`id_region`) REFERENCES `regiones` (`id_region`);

--
-- Filtros para la tabla `municipios_lenguajes`
--
ALTER TABLE `municipios_lenguajes`
  ADD CONSTRAINT `fk_municipio_municipio_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`),
  ADD CONSTRAINT `municipios_lenguajes_id_lengua` FOREIGN KEY (`id_lengua`) REFERENCES `lenguajes` (`id_lengua`);

--
-- Filtros para la tabla `municipios_religiones`
--
ALTER TABLE `municipios_religiones`
  ADD CONSTRAINT `fk_municipio_religion_religiones_idx` FOREIGN KEY (`id_religion`) REFERENCES `religiones` (`id_religion`),
  ADD CONSTRAINT `municipios_religiones_id_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`);

--
-- Filtros para la tabla `municipios_tradiciones`
--
ALTER TABLE `municipios_tradiciones`
  ADD CONSTRAINT `fk_muni_tradi_municipios_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`),
  ADD CONSTRAINT `fk_muni_tradi_tradiciones_idx` FOREIGN KEY (`id_tradicion`) REFERENCES `tradiciones` (`id_tradicion`);

--
-- Filtros para la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD CONSTRAINT `fk_regiones_estados1_idx` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `tradiciones`
--
ALTER TABLE `tradiciones`
  ADD CONSTRAINT `fk_tradiciones_tipo_tradicion_idx` FOREIGN KEY (`id_tipo_tradicion`) REFERENCES `tipo_tradicion` (`id_tipo_tradicion`);

--
-- Filtros para la tabla `tradiciones_has_imagenes`
--
ALTER TABLE `tradiciones_has_imagenes`
  ADD CONSTRAINT `fk_tradiciones_has_imagenes_imagenes1_idx` FOREIGN KEY (`imagenes_id_imagen`) REFERENCES `imagenes` (`id_imagen`),
  ADD CONSTRAINT `fk_tradiciones_has_imagenes_tradiciones1_idx` FOREIGN KEY (`tradiciones_id_tradicion`) REFERENCES `tradiciones` (`id_tradicion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
