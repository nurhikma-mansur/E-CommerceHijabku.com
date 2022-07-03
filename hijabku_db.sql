-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 06:15 AM
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
-- Database: `hijabku_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hijab`
--

CREATE TABLE `hijab` (
  `id` int(11) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `desk_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hijab`
--

INSERT INTO `hijab` (`id`, `produk`, `id_kategori`, `gambar`, `harga`, `desk_produk`) VALUES
(1, 'jilbab 1 byRahmatt', 1, 'jilbab-1-byRahmatt-jilbab.jpg', 81000, '                                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas corporis provident magni rerum expedita tenetur natus cumque, enim modi. Sint repudiandae, laborum veritatis voluptatum aliquam porro suscipit illo, numquam eum culpa facere at soluta, magnam nesciunt accusantium ratione quia vel eius nostrum amet voluptatibus! Explicabo officiis in dolorum totam libero nisi beatae aut fugit quo illo architecto, asperiores mollitia temporibus esse excepturi quod omnis sit? Magnam molestiae aspernatur inventore, sit nostrum veniam earum ad sunt sed, dolores ea quae odit laboriosam, ullam praesentium fugiat quas iure unde ipsam error. Aliquid accusantium sit maxime harum earum pariatur in quod tempore. Explicabo.                                                                                                                                                                                                                                                                                                            '),
(2, 'jilbab 2 byNurhikmaaa', 1, 'jilbab-2-byNurhikmaaa-jilbab2.jpg', 120000, '                                                                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas corporis provident magni rerum expedita tenetur natus cumque, enim modi. Sint repudiandae, laborum veritatis voluptatum aliquam porro suscipit illo, numquam eum culpa facere at soluta, magnam nesciunt accusantium ratione quia vel eius nostrum amet voluptatibus! Explicabo officiis in dolorum totam libero nisi beatae aut fugit quo illo architecto, asperiores mollitia temporibus esse excepturi quod omnis sit? Magnam molestiae aspernatur inventore, sit nostrum veniam earum ad sunt sed, dolores ea quae odit laboriosam, ullam praesentium fugiat quas iure unde ipsam error. Aliquid accusantium sit maxime harum earum pariatur in quod tempore. Explicabo.                                                                                                    '),
(3, 'jilbab 3 byRiyadi', 2, 'jilbab-3-byRiyadi-jilbab3.jpg', 35000, '                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas corporis provident magni rerum expedita tenetur natus cumque, enim modi. Sint repudiandae, laborum veritatis voluptatum aliquam porro suscipit illo, numquam eum culpa facere at soluta, magnam nesciunt accusantium ratione quia vel eius nostrum amet voluptatibus! Explicabo officiis in dolorum totam libero nisi beatae aut fugit quo illo architecto, asperiores mollitia temporibus esse excepturi quod omnis sit? Magnam molestiae aspernatur inventore, sit nostrum veniam earum ad sunt sed, dolores ea quae odit laboriosam, ullam praesentium fugiat quas iure unde ipsam error. Aliquid accusantium sit maxime harum earum pariatur in quod tempore. Explicabo.                    '),
(4, 'jilbab 4 byRh', 2, 'jilbab-4-byRh-jilbab4.jpg', 210000, '                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas corporis provident magni rerum expedita tenetur natus cumque, enim modi. Sint repudiandae, laborum veritatis voluptatum aliquam porro suscipit illo, numquam eum culpa facere at soluta, magnam nesciunt accusantium ratione quia vel eius nostrum amet voluptatibus! Explicabo officiis in dolorum totam libero nisi beatae aut fugit quo illo architecto, asperiores mollitia temporibus esse excepturi quod omnis sit? Magnam molestiae aspernatur inventore, sit nostrum veniam earum ad sunt sed, dolores ea quae odit laboriosam, ullam praesentium fugiat quas iure unde ipsam error. Aliquid accusantium sit maxime harum earum pariatur in quod tempore. Explicabo.                    '),
(5, 'jilbab 5 byAccung', 3, 'jilbab-5-byAccung-jilbab5.jpg', 73000, '                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas corporis provident magni rerum expedita tenetur natus cumque, enim modi. Sint repudiandae, laborum veritatis voluptatum aliquam porro suscipit illo, numquam eum culpa facere at soluta, magnam nesciunt accusantium ratione quia vel eius nostrum amet voluptatibus! Explicabo officiis in dolorum totam libero nisi beatae aut fugit quo illo architecto, asperiores mollitia temporibus esse excepturi quod omnis sit? Magnam molestiae aspernatur inventore, sit nostrum veniam earum ad sunt sed, dolores ea quae odit laboriosam, ullam praesentium fugiat quas iure unde ipsam error. Aliquid accusantium sit maxime harum earum pariatur in quod tempore. Explicabo.                                        '),
(6, 'jilbab 6 byCallu\'', 3, 'jilbab6.jpg', 250000, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas corporis provident magni rerum expedita tenetur natus cumque, enim modi. Sint repudiandae, laborum veritatis voluptatum aliquam porro suscipit illo, numquam eum culpa facere at soluta, magnam nesciunt accusantium ratione quia vel eius nostrum amet voluptatibus! Explicabo officiis in dolorum totam libero nisi beatae aut fugit quo illo architecto, asperiores mollitia temporibus esse excepturi quod omnis sit? Magnam molestiae aspernatur inventore, sit nostrum veniam earum ad sunt sed, dolores ea quae odit laboriosam, ullam praesentium fugiat quas iure unde ipsam error. Aliquid accusantium sit maxime harum earum pariatur in quod tempore. Explicabo.'),
(7, 'jilbab 7 byAppi\'', 1, 'jilbab7.jpg', 10000, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas corporis provident magni rerum expedita tenetur natus cumque, enim modi. Sint repudiandae, laborum veritatis voluptatum aliquam porro suscipit illo, numquam eum culpa facere at soluta, magnam nesciunt accusantium ratione quia vel eius nostrum amet voluptatibus! Explicabo officiis in dolorum totam libero nisi beatae aut fugit quo illo architecto, asperiores mollitia temporibus esse excepturi quod omnis sit? Magnam molestiae aspernatur inventore, sit nostrum veniam earum ad sunt sed, dolores ea quae odit laboriosam, ullam praesentium fugiat quas iure unde ipsam error. Aliquid accusantium sit maxime harum earum pariatur in quod tempore. Explicabo.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'pasminah'),
(2, 'rabbani'),
(3, 'bego');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `waktu_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `user_id`, `produk_id`, `kuantitas`, `tanggal_pembelian`) VALUES
(3, 1, 2, 1, '2022-06-05'),
(4, 1, 3, 1, '2022-06-05'),
(5, 2, 4, 1, '2022-06-05'),
(6, 2, 7, 1, '2022-06-07'),
(9, 1, 2, 1, '2022-07-03'),
(10, 1, 1, 1, '2022-07-03'),
(11, 1, 7, 1, '2022-07-03'),
(12, 1, 7, 1, '2022-07-03'),
(13, 1, 2, 1, '2022-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_transaksi` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `password_transaksi`, `gambar`) VALUES
(1, 'Rahmat Riyadi Syam', 'rahmatriyadi171102@gmail.com', 'rahmatriyadi', '171102', '171102', 'Rahmat-Riyadi-Syam-IMG20220514165745.jpg'),
(2, 'nurhikma', 'nurhikmamansur113@gmail.com', 'nurhikma', '010103', '010222', NULL),
(4, 'hikma', 'nurhikma1133@gmail.com', 'hikma', '010103', '010103', 'hikma-IMG_4902.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hijab`
--
ALTER TABLE `hijab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hijab`
--
ALTER TABLE `hijab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hijab`
--
ALTER TABLE `hijab`
  ADD CONSTRAINT `hijab_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `hijab` (`id`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `hijab` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
