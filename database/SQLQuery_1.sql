-- --------------------------------------------------------
--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
    `admin_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(20) NOT NULL,
    `clave` VARCHAR(50) NOT NULL,
    `imagen` VARCHAR(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `administrador` (`admin_id`, `nombre`, `clave`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');
-- --------------------------------------------------------
--
-- Table structure for table `pintor`
--
CREATE TABLE `pintor` (
    `pintor_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(65) NOT NULL,
    `imagen` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `pinturas`
--
CREATE TABLE `pinturas` (
    `pintura_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `nombre_pintura` VARCHAR(100) NOT NULL,
    `precio_estandar` INT(10) NOT NULL,
    `precio_oferta` INT(10) NULL,
    `imagen` VARCHAR(100) NOT NULL,
    `estado` VARCHAR(10) NOT NULL DEFAULT 'activa', -- o inactiva
    `pintor_id` INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `usuario`
--
CREATE TABLE `usuario` (
    `usuario_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(65) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `clave` VARCHAR(50) NOT NULL,
    `imagen` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `carrito`
--
CREATE TABLE `carrito` (
  `carrito_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(100) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `precio` INT(10) NOT NULL,
  `image` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------
--
-- Table structure for table `favoritos`
--
CREATE TABLE `favoritos` (
  `favorito_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(100) NOT NULL,
  `pintor_id` INT(100) NOT NULL,
  `nombre_pintura` VARCHAR(100) NOT NULL,
  `precio` INT(100) NOT NULL,
  `image` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `orden`
--
CREATE TABLE `orden` (
  `orden_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(100) NOT NULL,
  `nombre` VARCHAR(20) NOT NULL,
  `telefono` VARCHAR(17) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `metodo_pago` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(500) NOT NULL,
  `total_pinturas` VARCHAR(100) NOT NULL,
  `total_precio` INT(100) NOT NULL,
  `fecha_pedido` DATE NOT NULL DEFAULT current_timestamp(),
  `estado_pago` VARCHAR(20) NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `mensajes`
--
CREATE TABLE `mensajes` (
  `mensaje_id` INT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(17) NOT NULL,
  `mensaje` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;