-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 11:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinosauriosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinos`
--

CREATE TABLE `dinos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre_cientifico` text COLLATE utf8_unicode_ci NOT NULL,
  `velocidad` decimal(10,0) NOT NULL,
  `clase` text COLLATE utf8_unicode_ci NOT NULL,
  `filo` text COLLATE utf8_unicode_ci NOT NULL,
  `peso` decimal(10,0) NOT NULL,
  `altura` decimal(10,0) NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `ofertas` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dinos`
--

INSERT INTO `dinos` (`id`, `nombre`, `descripcion`, `nombre_cientifico`, `velocidad`, `clase`, `filo`, `peso`, `altura`, `imagen`, `ofertas`) VALUES
(1, 'Tiranosaurio Rex', 'Tyrannosaurus rex, ​ es la única especie conocida del género fósil Tyrannosaurus de dinosaurio terópodo tiranosáurido, que vivió a finales del período Cretácico, hace aproximadamente entre 68 y 66 millones de años, ​​ en el Maastrichtiense, en lo que es hoy América del Norte.', 'Tyrannosaurus rex', '19', 'Sauropsida', 'Chordata', '4', '4', 'https://static.dw.com/image/57221127_101.jpg', 1),
(2, 'Triceratops', 'Triceratops, o el tricerátops, es un género de dinosaurios ceratopsianos ceratópsidos, que vivieron a finales del período Cretácico, hace aproximadamente 68 y 66 millones de años, en el Maastrichtiense, en lo que hoy es Norteamérica.', 'Triceratops', '32', 'Sauropsida', 'Chordata', '8', '3', 'https://d7lju56vlbdri.cloudfront.net/var/ezwebin_site/storage/images/_aliases/img_1col/noticias/asi-evoluciono-el-escudo-del-triceratops/8337940-1-esl-MX/Asi-evoluciono-el-escudo-del-triceratops.jpg', 0),
(3, 'Velociraptor', 'Velociraptor es un género de dinosaurios terópodos dromeosáuridos que vivieron durante el Campaniaense, hacia finales del período Cretácico, hace unos 75 a 71 millones de años, en lo que es hoy Asia.​', 'Velociraptor', '1', 'Sauropsida', 'Cordados', '1', '2', 'https://st2.depositphotos.com/1121376/8665/i/950/depositphotos_86655218-stock-photo-velociraptor-the-dinosaur.jpg', 1),
(4, 'Estegosaurios', 'Los estegosáuridos son un clado de animales de apariencia similar en postura y en forma corporal, y se distinguen principalmente por la disposición de las placas del lomo y las espinas de la cola.', 'Stegosaurus', '7', 'Sauropsida', 'Chordata', '5', '4', 'https://mh-2-banco-de-imagen.panthermedia.net/media/previews/0011000000/11789000/~dinosaurio-stegosaurus_11789761_high.jpg', 1),
(5, 'pterosaurios', 'Los pterosaurios son un orden extinto de saurópsidos arcosaurios voladores que existieron durante casi toda la Era Mesozoica. Fueron los primeros vertebrados en conquistar el aire. Sus alas estaban formadas por una compleja membrana sostenida por el cuarto dedo de la mano, que estaba hipertrofiado.', 'Pterosauria', '120', 'Reptiles', 'Cordados', '1', '3', 'https://como-funciona.com/wp-content/uploads/2020/11/pterosaurios-800x400.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ofertas`
--

CREATE TABLE `ofertas` (
  `id_dino` int(11) NOT NULL,
  `nombres` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `valor` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ofertas`
--

INSERT INTO `ofertas` (`id_dino`, `nombres`, `apellidos`, `correo`, `direccion`, `valor`) VALUES
(5, 'Juan David', 'Meneses Oliva', 'juan12@gmail.com', '', 2100),
(5, 'Juan David', 'Meneses Oliva', 'juan12@gmail.com', '', 2000),
(5, 'David', 'Oliva', 'oljuan12@gmail.com', '', 2000),
(5, 'Carlos Hernn', 'Diz', 'carherz@gmail.com', '', 1200),
(5, 'da', 'fds', 'dfas@gmail.com', '', 2000),
(5, 'Daniel Hernan', 'Tutalha', 'danha12@gmail.com', '', 1200),
(3, 'Brayan David', 'Tobar Tonguino', 'davvidta98@gmail.com', '', 1200),
(1, 'Brayan ', 'Tobar', 'davidtobar@gmail.com', '', 200),
(4, 'Juan David', 'Meneses Oliva', 'juanmenese12@gmail.com', '', 9000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dinos`
--
ALTER TABLE `dinos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dinos`
--
ALTER TABLE `dinos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
