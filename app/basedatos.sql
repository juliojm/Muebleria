-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.10 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para muebleria
CREATE DATABASE IF NOT EXISTS `muebleria` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `muebleria`;


-- Volcando estructura para tabla muebleria.archivos
CREATE TABLE IF NOT EXISTS `archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_archivo` varchar(255) DEFAULT NULL,
  `modelo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.archivos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `archivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `archivos` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.compras
CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `piezas` float DEFAULT NULL,
  `monto_compra` float DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.compras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.consumibles
CREATE TABLE IF NOT EXISTS `consumibles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) DEFAULT NULL,
  `modelo_id` int(11) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.consumibles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `consumibles` DISABLE KEYS */;
/*!40000 ALTER TABLE `consumibles` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.materials
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `costo` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.materials: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` (`id`, `nombre`, `costo`) VALUES
	(7, 'Tornillos', 34.67);
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.materials_suppliers
CREATE TABLE IF NOT EXISTS `materials_suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.materials_suppliers: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `materials_suppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `materials_suppliers` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.modelos
CREATE TABLE IF NOT EXISTS `modelos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `cantidad_en_bodega` float DEFAULT NULL,
  `cantidad_en_fabrica` float DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `costo` float DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.modelos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.suppliers: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` (`id`, `nombre`, `telefono`, `email`, `contacto`) VALUES
	(3, 'Juan', '4641234567', 'juan@gmail.com', 'Llamar a Celular'),
	(4, 'rosa', '4641234567', 'rosa@hotmail.com', 'Es una proveedore'),
	(5, 'Brenda', '4641239078', 'brendina@gmail.com', 'su mama y su tia');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.tipos
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.tipos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.users: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `password`, `created`, `modified`) VALUES
	(7, 'Julio', 'yulius', 'd2904b255e5b79508081744ce6589b05a11da41d', '2014-05-12 13:24:52', '2014-05-12 13:24:52'),
	(13, 'Nuevo Juana', 'juana', 'd2904b255e5b79508081744ce6589b05a11da41d', '2014-05-26 12:44:59', '2014-06-01 23:52:22'),
	(14, 'Juana', 'juana', 'd2904b255e5b79508081744ce6589b05a11da41d', '2014-05-26 12:45:50', '2014-06-01 23:52:39'),
	(15, 'Julio', 'yulius1', 'd2904b255e5b79508081744ce6589b05a11da41d', '2014-05-26 14:48:20', '2014-05-26 14:51:12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Volcando estructura para tabla muebleria.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla muebleria.ventas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
