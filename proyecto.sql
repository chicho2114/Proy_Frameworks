-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-04-2015 a las 00:33:36
-- Versión del servidor: 5.5.41
-- Versión de PHP: 5.5.23-1~dotdeb.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alergia`
--

CREATE TABLE IF NOT EXISTS `Alergia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Alergia`
--

INSERT INTO `Alergia` (`id`, `nombre`) VALUES
(1, 'jafasjfhasfasf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cita`
--

CREATE TABLE IF NOT EXISTS `Cita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paciente_id` int(11) DEFAULT NULL,
  `motivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9E05355C7310DAD4` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ContEmergencia`
--

CREATE TABLE IF NOT EXISTS `ContEmergencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paciente_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_27FA4C9D7310DAD4` (`paciente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ContEmergencia`
--

INSERT INTO `ContEmergencia` (`id`, `paciente_id`, `nombre`, `apellido`, `relacion`, `fecha`) VALUES
(8, 1, 'Genesis', 'Garcia', 'familiar', '2015-04-22'),
(9, NULL, 'Juan', 'Lopez', 'amigo', '2015-04-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Diagnostico`
--

CREATE TABLE IF NOT EXISTS `Diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visita_id` int(11) DEFAULT NULL,
  `historia_id` int(11) DEFAULT NULL,
  `descripccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D0D5B9F4EA74B0E` (`visita_id`),
  UNIQUE KEY `UNIQ_1D0D5B9FF8FA80EF` (`historia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Diagnostico`
--

INSERT INTO `Diagnostico` (`id`, `visita_id`, `historia_id`, `descripccion`, `fecha`) VALUES
(1, NULL, NULL, 'dgdgdgdg', '2010-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `fos_user_group`
--

INSERT INTO `fos_user_group` (`id`, `name`, `roles`) VALUES
(1, 'Administrador', 'a:0:{}'),
(2, 'Personal Administrativo', 'a:0:{}'),
(3, 'Personal Médico', 'a:0:{}'),
(4, 'Médico', 'a:0:{}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'admin', 'admin', 'admin@admin', 'admin@admin', 1, 'dtsa8lneyr4s0c04wc44kos0ssg4kow', 'xdYGlLkcDvC0Jo8OHqUqYAcvR3h+4UXwPl3jCf3+xlhET9cBlfGgE55DKTXvXr5nQnXGqfL2QcveGxw5GOrg1g==', '2015-04-23 00:32:41', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2015-04-22 22:26:14', '2015-04-23 00:32:41', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL),
(2, 'deivis1', 'deivis1', 'deivis@gmail.com', 'deivis@gmail.com', 1, '5t2xy9q2yfocwg0cwwks44g4o0w48c0', 'WCTEcBi5hZgeYZ8TUEiXe7cRekcYaWMQV8TBff+Jvx33yOf4pkXhUOLhTGqWtFDwkMkiDZMjuJxBIVkp8Mjp/g==', '2015-04-23 00:18:05', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:17:"ROLE_ADMIN_MEDICO";}', 0, NULL, '2015-04-22 23:23:56', '2015-04-23 00:18:05', NULL, 'Deivis', 'Rodriguez', NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL),
(3, 'daniel1', 'daniel1', 'daniel@gmail.com', 'daniel@gmail.com', 1, 'g2vfg005x08c8swo0o8koccwo0gcgsg', 'iEvt/gepKlrcX2HaTiJNuMcM+FYUnYxQMSBpcw2o9DfUvTLmDP6n0LD+yKnMAMYbBzP++l0vn/8zq3SbingFhw==', '2015-04-23 00:25:43', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:26:"ROLE_ADMIN_PERSONAL_MEDICO";}', 0, NULL, '2015-04-22 23:24:46', '2015-04-23 00:25:43', NULL, 'Daniel', 'Rodriguez', NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL),
(4, 'miguel1', 'miguel1', 'miguel@gmail.com', 'miguel@gmail.com', 1, 'mqlrkot9x80s808co4k4occ84w048ws', '11O23TsYIMgf0m9O6AQWjdvaA6O3XtFsrql1ncHukyrJIIZr3DJe9bty/VkNH6Ys68FllAKr6d3fErnJjMvwWw==', '2015-04-23 00:23:41', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:25:"ROLE_ADMIN_ADMINISTRATIVO";}', 0, NULL, '2015-04-22 23:27:45', '2015-04-23 00:23:41', NULL, 'Miguel', 'Olivo', NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL),
(5, 'marcano1', 'marcano1', 'marcano@gmail.com', 'marcano@gmail.com', 1, 'jrdeg45g9a80044gsggskw880o08o4c', 'EOwRbm0IqgcPKhi3OFj50MaSeiTEeg/A8qKXOcqIzNPSrYRLme0CZHXfCfJI0FR2wBztVIdlc6sfmXJ19fUY7w==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2015-04-22 23:29:41', '2015-04-22 23:29:41', NULL, 'Jose', 'Marcano', NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fos_user_user_group`
--

INSERT INTO `fos_user_user_group` (`user_id`, `group_id`) VALUES
(2, 4),
(3, 3),
(4, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Historia`
--

CREATE TABLE IF NOT EXISTS `Historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) DEFAULT NULL,
  `alergia_id` int(11) DEFAULT NULL,
  `medicamento_id` int(11) DEFAULT NULL,
  `notacita_id` int(11) DEFAULT NULL,
  `medico_id` int(11) DEFAULT NULL,
  `condicion_medica` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tabaco` tinyint(1) NOT NULL,
  `alcohol` tinyint(1) NOT NULL,
  `altura` double NOT NULL,
  `peso` double NOT NULL,
  `presion_arterial` double NOT NULL,
  `frecuenta_cardiaca` double NOT NULL,
  `temperatura` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BA2AEC2C7BAAA372` (`notacita_id`),
  KEY `IDX_BA2AEC2C54F853F8` (`receta_id`),
  KEY `IDX_BA2AEC2C1F4DBCCF` (`alergia_id`),
  KEY `IDX_BA2AEC2CDECC3FDC` (`medicamento_id`),
  KEY `IDX_BA2AEC2CA7FB1C0C` (`medico_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Medicamento`
--

CREATE TABLE IF NOT EXISTS `Medicamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `presentacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NotaCita`
--

CREATE TABLE IF NOT EXISTS `NotaCita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente`
--

CREATE TABLE IF NOT EXISTS `Paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medico_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `direccion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `seguro_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `forma_actual` longtext COLLATE utf8_unicode_ci NOT NULL,
  `historia_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3FBDCB08F8FA80EF` (`historia_id`),
  KEY `IDX_3FBDCB08A7FB1C0C` (`medico_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Paciente`
--

INSERT INTO `Paciente` (`id`, `medico_id`, `nombre`, `apellido`, `edad`, `fecha_nac`, `direccion`, `seguro_social`, `forma_actual`, `historia_id`) VALUES
(1, NULL, 'Xiomira', 'Gonzalez', 50, '2010-01-01', 'mariara', '9000000', 'asfasfasf', NULL),
(2, NULL, 'Xiomira', 'Gonzalez', 50, '2010-01-01', 'mariara', '9000000', 'bien', NULL),
(3, NULL, 'Luis', 'Leon', 30, '2010-01-01', 'valencia', '1111122233333444', 'fagagadgad', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Receta`
--

CREATE TABLE IF NOT EXISTS `Receta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instrucciones` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Receta`
--

INSERT INTO `Receta` (`id`, `nombre`, `instrucciones`, `fecha`) VALUES
(1, 'comida', 'tomarlo', '2010-01-01'),
(2, 'asfasfs', 'afasdgdagda', '2010-01-01'),
(3, 'blah blah', 'ojakjajkfhasfasfggd', '2010-01-01'),
(4, 'afasfasfafafa', 'ggggggggggggggggggggggggggggggggggggg', '2010-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Referencia`
--

CREATE TABLE IF NOT EXISTS `Referencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visita_id` int(11) DEFAULT NULL,
  `historia_id` int(11) DEFAULT NULL,
  `medico_id` int(11) DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8F4F10084EA74B0E` (`visita_id`),
  UNIQUE KEY `UNIQ_8F4F1008F8FA80EF` (`historia_id`),
  KEY `IDX_8F4F1008A7FB1C0C` (`medico_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Referencia`
--

INSERT INTO `Referencia` (`id`, `visita_id`, `historia_id`, `medico_id`, `descripcion`, `fecha`) VALUES
(1, NULL, NULL, 2, 'egegegeggeegegg', '1920-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Telefono`
--

CREATE TABLE IF NOT EXISTS `Telefono` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paciente_id` int(11) DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contEmerg_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_389168297310DAD4` (`paciente_id`),
  KEY `IDX_38916829EA92A301` (`contEmerg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `Telefono`
--

INSERT INTO `Telefono` (`id`, `paciente_id`, `telefono`, `tipo`, `contEmerg_id`) VALUES
(3, 1, '04128662655', 'movil', NULL),
(6, 2, '04128662655', 'movil', NULL),
(9, 3, '04125556688', 'movil', NULL),
(11, NULL, '02432635366', 'casa', 8),
(12, NULL, '052022566', 'casa', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Visita`
--

CREATE TABLE IF NOT EXISTS `Visita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) DEFAULT NULL,
  `historia_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B05D4D9454F853F8` (`receta_id`),
  KEY `IDX_B05D4D94F8FA80EF` (`historia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Filtros para la tabla `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Cita`
--
ALTER TABLE `Cita`
  ADD CONSTRAINT `FK_9E05355C7310DAD4` FOREIGN KEY (`paciente_id`) REFERENCES `Paciente` (`id`);

--
-- Filtros para la tabla `ContEmergencia`
--
ALTER TABLE `ContEmergencia`
  ADD CONSTRAINT `FK_27FA4C9D7310DAD4` FOREIGN KEY (`paciente_id`) REFERENCES `Paciente` (`id`);

--
-- Filtros para la tabla `Diagnostico`
--
ALTER TABLE `Diagnostico`
  ADD CONSTRAINT `FK_1D0D5B9FF8FA80EF` FOREIGN KEY (`historia_id`) REFERENCES `Historia` (`id`),
  ADD CONSTRAINT `FK_1D0D5B9F4EA74B0E` FOREIGN KEY (`visita_id`) REFERENCES `Visita` (`id`);

--
-- Filtros para la tabla `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Historia`
--
ALTER TABLE `Historia`
  ADD CONSTRAINT `FK_BA2AEC2CA7FB1C0C` FOREIGN KEY (`medico_id`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_BA2AEC2C1F4DBCCF` FOREIGN KEY (`alergia_id`) REFERENCES `Alergia` (`id`),
  ADD CONSTRAINT `FK_BA2AEC2C54F853F8` FOREIGN KEY (`receta_id`) REFERENCES `Receta` (`id`),
  ADD CONSTRAINT `FK_BA2AEC2C7BAAA372` FOREIGN KEY (`notacita_id`) REFERENCES `NotaCita` (`id`),
  ADD CONSTRAINT `FK_BA2AEC2CDECC3FDC` FOREIGN KEY (`medicamento_id`) REFERENCES `Medicamento` (`id`);

--
-- Filtros para la tabla `Paciente`
--
ALTER TABLE `Paciente`
  ADD CONSTRAINT `FK_3FBDCB08F8FA80EF` FOREIGN KEY (`historia_id`) REFERENCES `Historia` (`id`),
  ADD CONSTRAINT `FK_3FBDCB08A7FB1C0C` FOREIGN KEY (`medico_id`) REFERENCES `fos_user_user` (`id`);

--
-- Filtros para la tabla `Referencia`
--
ALTER TABLE `Referencia`
  ADD CONSTRAINT `FK_8F4F1008A7FB1C0C` FOREIGN KEY (`medico_id`) REFERENCES `fos_user_user` (`id`),
  ADD CONSTRAINT `FK_8F4F10084EA74B0E` FOREIGN KEY (`visita_id`) REFERENCES `Visita` (`id`),
  ADD CONSTRAINT `FK_8F4F1008F8FA80EF` FOREIGN KEY (`historia_id`) REFERENCES `Historia` (`id`);

--
-- Filtros para la tabla `Telefono`
--
ALTER TABLE `Telefono`
  ADD CONSTRAINT `FK_38916829EA92A301` FOREIGN KEY (`contEmerg_id`) REFERENCES `ContEmergencia` (`id`),
  ADD CONSTRAINT `FK_389168297310DAD4` FOREIGN KEY (`paciente_id`) REFERENCES `Paciente` (`id`);

--
-- Filtros para la tabla `Visita`
--
ALTER TABLE `Visita`
  ADD CONSTRAINT `FK_B05D4D94F8FA80EF` FOREIGN KEY (`historia_id`) REFERENCES `Historia` (`id`),
  ADD CONSTRAINT `FK_B05D4D9454F853F8` FOREIGN KEY (`receta_id`) REFERENCES `Receta` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
