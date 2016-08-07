-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-08-2016 a las 04:39:12
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `prod_nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `cant_disp` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `prod_nombre`, `descripcion`, `cant_disp`, `precio`, `foto`) VALUES
(5, 'Samsung Galaxy Note 6', 'Celular Note 6 2016', 99, '800.00', ''),
(6, 'Samsung Galaxy J5', 'Elegancia y robustez a partes iguales. Su marco metálico protegerá tu Smartphone para que puedas admirar la belleza de tu Galaxy J5 por más tiempo.', 100, '249.01', 'img/productos/Samsung_J5.jpeg'),
(7, 'Samsung Galaxy A7', 'Te presentamos el primer smartphone de Samsung con cuerpo completamente metálico: Samsung Galaxy A7, un teléfono con diseño innovador disponible en 4 colores, y una impresionante pantalla Full HD sAMOLED de 5,5”, al que no podrás resistirte en cuanto lo tengas en tus manos.', 75, '400.15', 'img/productos/Samsung_A7.jpeg'),
(8, 'Samsung Galaxy A5', 'El nuevo smartphone Galaxy A5 2016 tiene un diseño que combina elegancia y sutileza gracias a sus materiales Premium, metal y cristal Gorilla Glass. Disfruta de un teléfono con un diseño estilizado, un marco más estrecho y un agarre más cómodo.', 50, '358.99', 'img/productos/Samsung_A5.jpeg'),
(9, 'Samsung Galaxy Note Edge', 'Note Edge tiene una segunda pantalla curva desde donde accedes a las aplicaciones más frecuentes y a las alertas incluso si la tapa de tu funda está cerrada, o recibir notificaciones mientras disfrutas de un vídeo pero sin interferir en él.', 150, '532.57', 'img/productos/Samsung_Note_Edge.jpeg'),
(10, 'Samsung Galaxy Note 4', 'La pantalla Quad HD Super AMOLED de 5,7” es capaz de reproducir las imágenes con una calidad extraordinaria, con colores intensos, llenos de matices, y un nivel de saturación y de contraste tan preciso, que pensarás que lo que sucede en la pantalla escompletamente real. La resolución Quad HD, además, te ofrece una experiencia visual muy nítida y definida, perfecta para navegar en Internet o leer documentos.', 89, '599.00', 'img/productos/Samsung_Note4.jpeg'),
(11, 'Samsung Galaxy Note 7', 'Si lo tuyo es estar siempre conectado y utilizar tu smartphone para todo (para trabajo y ocio), necesitas un dispositivo que siga tu ritmo. Por eso hemos diseñado Galaxy Note7, el smartphone que marca la diferencia.', 200, '799.00', 'img/productos/Samsung_Note7.jpeg'),
(12, 'Samsung Galaxy S5 4G+', 'Galaxy S5 es un smartphone pensado para ofrecer la más completa experiencia de uso que puedas imaginar, con soluciones como su pulsómetro que te ayudan a mantenerte en forma, y un atractivo diseño resistente al agua y al polvo.', 87, '375.99', 'img/productos/Samsung_S5_4G+.jpeg'),
(13, 'Samsung Galaxy S5 Neo', 'Ahora tus contenidos con colores más nítidos y brillantes. Galaxy S5 Neo optimiza automáticamente la pantalla para disfrutar la mejor experiencia multimedia sin importar donde te encuentres.', 46, '379.00', 'img/productos/Samsung_S5_Neo.jpeg'),
(14, 'Samsung Galaxy S6 edge+ ', 'La pantalla del Samsung Galaxy edge S6 + con doble curva no solo es bonita, además añade profundidad a tus películas y te permite sumergirte en tus videojuegos.', 100, '500.15', 'img/productos/Samsung_S6_Edge.jpeg'),
(15, 'Samsung Galaxy S7 Edge', 'Estamos cambiando por completo la forma de compartir experiencias y recuerdos. Y esto se debe a que hemos cambiado por completo los límites de tu teléfono. Y esto no ha hecho más que comenzar.', 90, '699.00', 'img/productos/Samsung_S7_Edge.jpeg'),
(16, 'Samsung Galaxy J3', 'Gracias al nuevo frontal rediseñado de Galaxy J3, con un marco negro de 4,56 mm, disfrutarás de una mejor experiencia visual en su pantalla de 5”.', 50, '179.00', 'img/productos/Samsung_J3.jpeg'),
(17, 'Samsung Galaxy J7', 'Elegancia y robustez a partes iguales. Su marco metálico protegerá tu smartphone para que puedas admirar la belleza de tu Galaxy J7 por más tiempo', 60, '299.00', 'img/productos/Samsung_J7.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
