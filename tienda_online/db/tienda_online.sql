-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-08-2016 a las 00:20:56
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `prod_nombre`, `descripcion`, `cant_disp`, `precio`, `foto`) VALUES
(6, 'Samsung Galaxy J5', 'Elegancia y robustez a partes iguales. Su marco metálico protegerá tu Smartphone para que puedas admirar la belleza de tu Galaxy J5 por más tiempo.', 100, '249.01', 'J5.jpeg'),
(7, 'Samsung Galaxy A7', 'Te presentamos el primer smartphone de Samsung con cuerpo completamente metálico: Samsung Galaxy A7, un teléfono con diseño innovador disponible en 4 colores, y una impresionante pantalla Full HD sAMOLED de 5,5”, al que no podrás resistirte en cuanto lo tengas en tus manos.', 75, '400.15', 'A7.jpeg'),
(8, 'Samsung Galaxy A5', 'El nuevo smartphone Galaxy A5 2016 tiene un diseño que combina elegancia y sutileza gracias a sus materiales Premium, metal y cristal Gorilla Glass. Disfruta de un teléfono con un diseño estilizado, un marco más estrecho y un agarre más cómodo.', 50, '358.99', 'A5.jpeg'),
(9, 'Samsung Galaxy Note Edge', 'Note Edge tiene una segunda pantalla curva desde donde accedes a las aplicaciones más frecuentes y a las alertas incluso si la tapa de tu funda está cerrada, o recibir notificaciones mientras disfrutas de un vídeo pero sin interferir en él.', 150, '532.57', 'Note_Edge.jpeg'),
(12, 'Samsung Galaxy S5 4G+', 'Galaxy S5 es un smartphone pensado para ofrecer la más completa experiencia de uso que puedas imaginar, con soluciones como su pulsómetro que te ayudan a mantenerte en forma, y un atractivo diseño resistente al agua y al polvo.', 87, '375.99', 'S5_4G+.jpeg'),
(13, 'Samsung Galaxy S5 Neo', 'Ahora tus contenidos con colores más nítidos y brillantes. Galaxy S5 Neo optimiza automáticamente la pantalla para disfrutar la mejor experiencia multimedia sin importar donde te encuentres.', 46, '379.00', 'S5_Neo.jpeg'),
(14, 'Samsung Galaxy S6 edge+ ', 'La pantalla del Samsung Galaxy edge S6 + con doble curva no solo es bonita, además añade profundidad a tus películas y te permite sumergirte en tus videojuegos.', 100, '500.15', 'S6_Edge.jpeg'),
(16, 'Samsung Galaxy J3', 'Gracias al nuevo frontal rediseñado de Galaxy J3, con un marco negro de 4,56 mm, disfrutarás de una mejor experiencia visual en su pantalla de 5”.', 50, '179.00', 'J3.jpeg'),
(17, 'Samsung Galaxy J7', 'Elegancia y robustez a partes iguales. Su marco metálico protegerá tu smartphone para que puedas admirar la belleza de tu Galaxy J7 por más tiempo', 60, '299.00', 'J7.jpeg'),
(18, 'Samsung Galaxy Core Prime', 'El nuevo Galaxy Core Prime te ofrece todo lo que esperas de un smartphone. Equipado con un potente procesador Quad Core de 1,2 GHz y conexión 4G, podrás navegar y ver contenidos con fluidez. Disfruta del cine, series, tu música favorita y de más de un millón de aplicaciones que podrás descargarte.', 40, '75.99', 'Core_Prime.jpeg'),
(19, 'Samsung Galaxy Pocket Neo', 'Galaxy Pocket Neo incluye la última versión del sistema operativo Android, Jelly Bean, que permite una experiencia más cómoda con el navegador Chrome, búsquedas más rápidas, transiciones más suaves, navegar por internet mediante Wi-Fi y descargar contenidos más rápido con la conexión HSUPA. Además, su potente procesador te permite realizar varias tareas a la vez de forma rápida, fácil y multitarea sin ningún esfuerzo.', 20, '55.99', 'Pocket_Neo.jpeg'),
(20, 'Samsung Galaxy Young 2', 'Samsung GALAXY Young 2 es el teléfono perfecto para aquellos usuarios que utilizan por vez primera un smartphone. Está equipado con las características imprescindibles de un teléfono inteligente, por lo que se trata de una excelente opción para los que buscan un teléfono funcional y con garantías.', 75, '120.68', 'Young2.jpeg'),
(21, 'Samsung Galaxy Trend 2 Lite', 'Si lo que buscas es un smartphone sencillo y potente, Samsung Galaxy Trend 2 Lite es la elección perfecta. Un teléfono que integra características propias de muchos modelos de gama alta para que disfrutes al máximo.', 67, '90.15', 'Trend2_Lite.jpeg'),
(22, 'Samsung Galaxy Ace Style', 'Samsung GALAXY Ace Style es el smartphone que se convertirá en el centro de todas las miradas por su diseño único y por la textura de su parte trasera. Si eliges estilo, eliges Galaxy Ace Style.', 15, '129.99', 'Ace_Style.jpeg'),
(23, 'Samsung Galaxy Trend 2', 'Si estás buscando un smartphone sencillo pero potente, Samsung Galaxy Trend 2 es la solución perfecta para ti. Cuenta con todas las características principales que buscas en un smartphone de gama superior con herramientas que te ayudarán en tus tareas diarias', 27, '150.00', 'Trend_2.jpeg'),
(24, 'Samsung Galaxy Core Plus', 'GALAXY Core Plus cuenta con un diseño premium, así como un aspecto similar al de GALAXY S4. Cuenta con la interfaz UX y las mejores características con las que sacar el máximo provecho a tu smartphone. Además, es muy cómodo de sujetar, por lo que podrás llevarlo a todas partes. Con GALAXY Core Plus, tu vida siempre irá contigo.', 100, '179.99', 'Core_Plus.jpeg'),
(25, 'Samsung Galaxy Core 2', 'Su parte trasera con aspecto de cuero le da a tu Galaxy Core 2 un aspecto elegante. Además, es muy cómodo de agarrar y muy sencillo de utilizar con una sola mano.', 36, '210.99', 'Core2.jpeg'),
(26, 'Samsung Galaxy Ace 4', 'Samsung GALAXY Ace 4 es el smartphone 4G que se convertirá en el centro de todas las miradas por su diseño único y por la textura de su parte trasera. Si eliges estilo, eliges Galaxy Ace 4. Si estás buscando un Smartphone simple y potente, el Samsung Galaxy Ace 4 es perfecto para ti, equipado con un procesador de 1.2 GHz, pantalla de 4", batería de 1,500 mAh, cuenta con tecnología NFC y el último sistema operativo Android KitKat 4.4.', 45, '119.99', 'Ace4.jpeg'),
(27, 'Samsung Galaxy Express 2', 'Un smartphone 4G que te permite navegar más rápido y acceder a divertidas y originales herramientas con las que estarás en contacto con los tuyos y tu vida será un poco más sencilla.', 10, '250.00', 'Express2.jpeg'),
(28, 'Samsung Galaxy Grand Neo', 'Galaxy Grand Neo es el nuevo smartphone Android Dual SIM de Samsung con pantalla de 5” y un potente procesador Quad Core para que disfrutes al máximo de tus contenidos y de las más divertidas aplicaciones y juegos. Gracias a la opción Multiwindow podrás usar varias aplicaciones a la vez y con la función Dual SIM podrás mantener tu vida personal y profesional separadas en 2 números diferentes cómodamente. ', 120, '275.76', 'Grand_Neo.jpeg'),
(29, 'Samsung Galaxy Grand Neo Plus', 'El nuevo Galaxy Grand Neo Plus de Samsung lleva en su diseño el sello reconocible de la familia Galaxy. Encontrarás todo lo que necesitas de un smartphone en un modelo ligero, compacto, con un perfil más delgado y con unas líneas limpias y redondeadas. Gracias a su función Dual SIM podrás tener tu numero personal y profesional cómodamente en un mismo terminal.', 132, '315.50', 'Grand_Neo_Plus.jpeg'),
(30, 'Samsung Galaxy Alpha', 'Te presentamos el primer smartphone Galaxy con borde metálico. Galaxy Alpha tiene un diseño sofisticado y un acabado impecable que dan como resultado un smartphone con personalidad propia.', 80, '450.67', 'Alpha.jpeg'),
(31, 'Samsung Galaxy K Zoom', 'Gracias a la nueva tecnología retráctil de Galaxy K Zoom de Samsung podrás disfrutar de un zoom óptico de 10 aumentos en un cuerpo realmente delgado. Consigue imágenes de extraordinaria nitidez sin renunciar a un dispositivo de tamaño compacto y ligero. Además, es muy sencillo de utilizar gracias a las funciones Pinch Zoom y Quick Zoom.', 19, '509.99', 'K_Zoom.jpeg'),
(32, 'Samsung Galaxy Galaxy Grand 2', 'Disfruta mucho más de las aplicaciones y contenidos de tu smartphone gracias a su espectacular pantalla HD de 5,25” con un ratio de 16:9, perfecta para que puedas ver películas o sacar el máximo partido a tus videojuegos favoritos. Un smartphone delgado y fácil de manejardel que no querrás separarte.', 76, '350.00', 'Grand2.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;