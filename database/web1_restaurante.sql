-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2020 at 03:17 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web1_restaurante`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`, `description`) VALUES
(1, 'Entradas', 'Entradas'),
(3, 'Postres', 'Postres edit'),
(4, 'Eventos', 'Platos para eventos'),
(6, 'Principales', 'Principales');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id_dish` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `dish_name` varchar(40) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `price` int(5) NOT NULL,
  `in_menu` char(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id_dish`, `id_category`, `dish_name`, `description`, `price`, `in_menu`) VALUES
(8, 1, 'Trucha Curada', 'Crocante de sésamo, cebolla de verdeo, mayonesa alminonada.', 390, 'P'),
(11, 1, 'Cazuela del Bosque', 'Queso azul, hongos de pino, huevo poché, puerro frito.', 390, 'A'),
(12, 1, 'Provoleta Granjera', 'Panceta ahumada, cebolla caramelizada, tomates asados y verdes.', 390, 'P'),
(20, 6, 'Cordero braseado', 'puré de papas, cebolla morada, confitura de tomates', 379, 'P'),
(21, 6, 'Entraña con salsa criolla', 'con ensalada o papas fritas', 234, 'A'),
(22, 6, 'Bondiola a la cerveza negra', 'con puré de papas, ensalada de repollo, vinagreta de Dijon', 456, 'A'),
(23, 6, 'Polenta frita y salsa de pistacho', 'con salsa de pistachos, cebolla al orégano, verdes y tomates.', 234, 'A'),
(24, 6, 'Goulash con Spatzle', 'estofado de carne a la paprika con ñoquis hungaros en manteca de hierbas', 454, 'A'),
(25, 1, 'Ensalada verde', 'mix de verdes, pancetta ahumada, queso sardo, tomates secos, croutones, reducción de aceto', 784, 'A'),
(26, 3, 'Tibio de manzana', 'con salsa de sauco, crumble de almendras, helado de canela, crema batida', 324, 'A'),
(27, 3, 'Cremoso de Limón', 'Con merengue flambeado, crocante de pistachos, ganache de chocolate blanco', 300, 'P'),
(28, 3, 'Flan de campo', 'con dulce de leche o crema', 453, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'juan', '$2y$10$q63utjbtM8K8GPp3Mz1x9.buOIO9Nuk2zrzZclXCceKe3b6U3A6f.'),
(2, 'user', '$2y$10$r1qhxIMIg0dIh4OgvXmK2.FgggW4.Wp5J7Tl1HXC2Qc7GjBRZ/Jjm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id_dish`) USING BTREE,
  ADD KEY `fk_dish_category` (`id_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id_dish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `fk_dish_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
