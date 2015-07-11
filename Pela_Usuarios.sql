SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pela_Usuarios`
--

CREATE TABLE IF NOT EXISTS `Pela_Usuarios` (
  `idUsuario` int(2) NOT NULL AUTO_INCREMENT,
  `emailUsuario` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Pela_Usuarios`
--

INSERT INTO `Pela_Usuarios` (`idUsuario`, `emailUsuario`, `password`) VALUES
(1, 'admin@admin.com', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
