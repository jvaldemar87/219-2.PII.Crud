

CREATE TABLE `contacto_cont` (
  `Nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Comentario` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `contacto_cont` (`Nombre`, `email`, `Comentario`, `id`) VALUES
('Luis Rogelio', 'gallegos.rogelio8@gmail.com', 'Gran pagina espero y les pongan un 10 ', 1),
('Luis Rogelio', 'gallegos.rogelio8@gmail.com', 'Vuelvo a ser yo no es que este probando cosas ni nada solo es por que esta muy bonito hacer esta pag', 2),
('NoRogelio', 'nogallegos.rogelio8@gmail.com', 'No soy Rogelio', 3),
('Luis Gallegos', 'gallegos.rogelio8@gmail.com', 'Una prueba mas por si las dudas', 4),
('Luis Gallegos', 'gallegos.rogelio8@gmail.com', 'quiero ver que tanto puedo escribir en este texto, y veo que es condierable la cantidad', 5),
('Luis Gallegos', 'gallegos.rogelio8@gmail.com', 'problema', 6),
('Luis Gallegos', 'gallegos.rogelio8@gmail.com', ' Comen123 123 13tarios', 7);


CREATE TABLE `footer_cont` (
  `Texto` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `footer_cont` (`Texto`, `id`) VALUES
('	Pagina web creada por Valdemar y Rogelio El Guapo', 1);

CREATE TABLE `header_cont` (
  `Logo_dir` varchar(200) NOT NULL,
  `Texto` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `header_cont` (`Logo_dir`, `Texto`, `id`) VALUES
('Recursos/Imagen/icono.png\r\n', 'APPMAR', 1);

CREATE TABLE `inicio_cont` (
  `Imagen_dir` varchar(200) NOT NULL,
  `Text` text NOT NULL,
  `id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `inicio_cont` (`Imagen_dir`, `Text`, `id`) VALUES
('Recursos/Imagen/imagen_index.jpg', 'Probando 1 2 3 Probando', 1);


CREATE TABLE `nosotros_cont` (
  `Imagen_dir` varchar(200) NOT NULL,
  `Texto` text NOT NULL,
  `id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `nosotros_cont` (`Imagen_dir`, `Texto`, `id`) VALUES
('Recursos/Imagen/imagen_nosotros.jpg', 'Este texto intenta ser lo suficientemente largo \r\ny tiene saltos de linea para ver el acomodo \r\ndel texto\r\n\r\nDenos dinero PLz', 1);

CREATE TABLE `servicios_cont` (
  `Imagen1_dir` varchar(200) NOT NULL,
  `Imagen1_Text` text NOT NULL,
  `Imagen1_link` varchar(200) NOT NULL,
  `Imagen2_dir` varchar(200) NOT NULL,
  `Imagen2_Text` text NOT NULL,
  `Imagen2_link` varchar(200) NOT NULL,
  `Imagen3_dir` varchar(200) NOT NULL,
  `Imagen3_Text` text NOT NULL,
  `Imagen3_link` varchar(200) NOT NULL,
  `Imagen4_dir` varchar(200) NOT NULL,
  `Imagen4_Text` text NOT NULL,
  `Imagen4_link` varchar(200) NOT NULL,
  `id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `servicios_cont` (`Imagen1_dir`, `Imagen1_Text`, `Imagen1_link`, `Imagen2_dir`, `Imagen2_Text`, `Imagen2_link`, `Imagen3_dir`, `Imagen3_Text`, `Imagen3_link`, `Imagen4_dir`, `Imagen4_Text`, `Imagen4_link`, `id`) VALUES
('Recursos/Imagen/imagen_servicio1.jpg', 'Gran viaje a francia Podran ver la Torre ifiel 5000$ precios bajor', 'https://es.wikipedia.org/wiki/Francia', 'Recursos/Imagen/imagen_servicio2.jpg', 'Gran viaje a egipto Podran ver las priamides 15000$ precios razonables para conocer las antiguas culturas', 'https://www.nationalgeographic.com.es/destinos/egipto', 'Recursos/Imagen/imagen_servicio3.jpg', 'Gran viaje a rusia para conocer uno de los paises mas extensos y diversos del mundo', 'https://www.youtube.com/watch?v=G83hAD95LDw', 'Recursos/Imagen/imagen_servicio4.jpg', 'viaje a reino unido 2000 todo tranquilo todo bien y todo clasico', 'http://www.fishinships.com/', 1);

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `uemail` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'yoshi', '0ac6cd34e2fac333bf0ee3cd06bdcf96', 'Luis Gallegos', 'gallegos.rogelio8@gmail.com');


CREATE TABLE `usuarios` (
  `Email` varchar(50) NOT NULL,
  `Contra` varchar(15) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`Email`, `Contra`, `id`) VALUES
('gallegos.rogelio8@gmail.com', 'Holi', 1),
('galletas@gmail.com', 'Hola', 2);

ALTER TABLE `contacto_cont`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `footer_cont`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `header_cont`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contacto_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `footer_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `header_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;
