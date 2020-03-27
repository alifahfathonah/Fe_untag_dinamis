-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Mar 2020 pada 03.43
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fe_untag`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(2) DEFAULT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `sumber` mediumtext NOT NULL,
  `tanggal` datetime NOT NULL,
  `teks` mediumtext NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `tgl_edit` datetime NOT NULL,
  `arsip` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `gambar`, `sumber`, `tanggal`, `teks`, `id_user`, `slug`, `tgl_edit`, `arsip`) VALUES
(1, 1, 'Ini adalah Contoh Artikel pertama', 'Ini_adalah_Contoh_Artikel_pertama-5417.jpg', '', '2020-03-25 06:25:42', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'ini-adalah-contoh-artikel-pertama', '2020-03-25 01:03:36', 0),
(2, 2, 'Hari Masuk', '', '', '2020-03-25 07:04:03', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'hari-masuk', '2020-03-27 03:28:31', 0),
(4, 3, 'Lowongan Kerja 1 ', '', '', '2020-03-25 07:06:50', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'lowongan-kerja-1', '2020-03-27 03:27:12', 0),
(5, 1, 'Berita ke 4 ini ya ', 'Berita_ke_4_ini_ya_-8858.jpg', '', '2020-03-25 07:16:56', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'berita-ke-4-ini-ya', '0000-00-00 00:00:00', 0),
(6, 1, 'berita ke 2', '', '', '2020-03-25 07:17:47', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'berita-ke-2', '0000-00-00 00:00:00', 0),
(7, 1, 'Berita ke 3 ya', 'Berita_ke_3_ya-3004.jpg', '', '2020-03-25 07:18:18', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'berita-ke-3-ya', '0000-00-00 00:00:00', 0),
(8, 1, 'Berita Ke 5', 'Berita_Ke_5-50344.jpg', '', '2020-03-25 07:18:52', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'berita-ke-5', '2020-03-26 08:46:54', 0),
(9, 1, 'Berita ke7', 'Berita_ke7-38972.jpg', '', '2020-03-25 07:19:44', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'berita-ke7', '0000-00-00 00:00:00', 0),
(10, 1, 'Berita ke 8', 'Berita_ke_8-1729.jpg', '', '2020-03-25 07:20:04', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'berita-ke-8', '2020-03-25 16:57:18', 0),
(11, 2, 'Jadwal Baru', '', '', '2020-03-25 07:20:21', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'jadwal-baru', '2020-03-27 03:28:44', 0),
(12, 2, 'Kuliah Umum', '', '', '2020-03-25 07:20:48', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'kuliah-umum', '2020-03-27 03:28:55', 0),
(13, 3, 'Loker', '', '', '2020-03-25 07:21:01', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 1, 'loker', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `arsip` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `h1`, `h2`, `foto`, `arsip`) VALUES
(1, 'Memberikan', 'Kualitas terbaik', 'Memberikan-53372.jpeg', 0),
(2, 'Selamat Datang', 'di Fakultas Ekonomi', 'Selamat_Datang-7793.jpg', 0),
(3, 'Untag Banyuwangi', 'Fakultas Ekonomi', 'Fakultas_Ekonomi-80694.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `direktori`
--

CREATE TABLE `direktori` (
  `id_direktori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `arsip` tinyint(1) NOT NULL,
  `tanggal_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `direktori`
--

INSERT INTO `direktori` (`id_direktori`, `judul`, `link`, `arsip`, `tanggal_input`) VALUES
(1, 'Untag Banyuwangi', 'http://untag-banyuwangi.ac.id', 0, '2020-03-25 21:27:10'),
(3, 'Kemendikbud', 'http://www.kemdikbud.go.id ', 0, '2020-03-25 21:28:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_area`
--

CREATE TABLE `download_area` (
  `id_download` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `teks` text NOT NULL,
  `arsip` tinyint(1) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `tanggal_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `download_area`
--

INSERT INTO `download_area` (`id_download`, `judul`, `file`, `teks`, `arsip`, `slug`, `tanggal_input`) VALUES
(1, 'Contoh File 1', 'Contoh_File_1-47661.pdf', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 0, 'contoh-file-1', '2020-03-25 22:10:16'),
(3, 'Contoh file 2', 'Contoh_File_2-51924.xlsx', '<p>File untuk acara</p>\r\n', 0, 'contoh-file-2', '2020-03-26 13:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id_kategori` int(11) NOT NULL,
  `kategori_artikel` varchar(25) NOT NULL,
  `slug_k` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori`, `kategori_artikel`, `slug_k`) VALUES
(1, 'berita', 'berita'),
(2, 'papan pengumuman', 'papan-pengumuman'),
(3, 'lowongan kerja', 'lowongan-kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerja_sama`
--

CREATE TABLE `kerja_sama` (
  `id_kerja_sama` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `arsip` tinyint(1) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kerja_sama`
--

INSERT INTO `kerja_sama` (`id_kerja_sama`, `deskripsi`, `foto`, `arsip`, `tanggal`) VALUES
(1, 'Logo 1', 'Logo_1-64566.png', 0, '2020-03-25 20:14:50'),
(3, 'Logo 3', 'Logo_3-6222.png', 0, '2020-03-25 20:26:37'),
(4, 'Logo 4', 'Logo_4-62576.png', 0, '2020-03-25 20:27:03'),
(6, 'Logo 5', 'Logo_5-19432.png', 0, '2020-03-25 20:33:30'),
(7, 'Logo 6', 'Logo_6-39909.png', 0, '2020-03-25 20:33:45'),
(8, 'Logo 6', 'Logo_6-55912.png', 0, '2020-03-25 20:34:09'),
(9, 'Logo 7', 'Logo_7-98921.png', 0, '2020-03-25 20:34:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `alamat` mediumtext NOT NULL,
  `jam_buka` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `favicon` varchar(80) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `bg` varchar(200) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `teks` mediumtext NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `sambutan` varchar(200) NOT NULL,
  `foto_sambutan` varchar(100) NOT NULL,
  `caption_1` varchar(200) NOT NULL,
  `caption_2` varchar(50) NOT NULL,
  `link_pendaftaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `nama_website`, `alamat`, `jam_buka`, `email`, `facebook`, `favicon`, `instagram`, `logo`, `bg`, `no_telp`, `teks`, `icon`, `sambutan`, `foto_sambutan`, `caption_1`, `caption_2`, `link_pendaftaran`) VALUES
(1, 'Fakultas Ekonomi Untag Banyuwangi', 'Jl. Laksda Adi Sucipto, Taman Baru, Kec. Banyuwangi ', 'Senin - Sabtu 08.00 - 19.00 WIB', 'fe@untag-banyuwangi.ac.id', 'Untag Banyuwangi', 'Fakultas_Ekonomi_Untag_Banyuwangi-3511.jpg', '@untag_banyuwangi', 'logo_univ-5145.png', 'gajah_uling.png', '(0333) 411248', '<p>Selamat datang di website Fakultas Ekonomi Universitas 17 Agustus Banyuwangi</p>\r\n', 'logo_fakultas-152.png', 'Selamat Datang ya', 'Selamat_Datang_ya-5500.jpg', '<p>Selamat Datang di Fakultas Ekonomi Untag Banyuwangi</p>\r\n', 'Prof. Edward', 'pbm.untag-banyuwangi.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `slug_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `slug_menu`) VALUES
(1, 'Profil', 'profil'),
(2, 'Pendidikan', 'pendidikan'),
(3, 'Kemahasiswaan', 'kemahasiswaan'),
(4, 'Penelitian', 'penelitian'),
(5, 'Layanan', 'layanan'),
(6, 'Fasilitas', 'fasilitas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id_sub_menu` int(11) NOT NULL,
  `nama_sub_menu` varchar(100) NOT NULL,
  `slug_sub_menu` varchar(100) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `teks` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `arsip` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_menu`
--

INSERT INTO `sub_menu` (`id_sub_menu`, `nama_sub_menu`, `slug_sub_menu`, `id_menu`, `teks`, `gambar`, `arsip`) VALUES
(2, 'Lab Kom 1', 'lab-kom-1', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', '', 0),
(3, 'Lab Bahasa', 'lab-bahasa', 6, '<p>Taas</p>\r\n', 'Lab_Bahasa-46159.jpg', 0),
(4, 'Lab Komputer', 'lab-komputer', 6, '<p>jhkjfkj</p>\r\n', 'Lab_Komputer-96137.jpg', 0),
(5, 'Organisasi Mahasiswa', 'organisasi-mahasiswa', 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', '', 0),
(6, 'Layanan Online', 'layanan-online', 5, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', 'Layanan_Online-70360.jpg', 0),
(7, 'Fakultas Ekonomi', 'fakultas-ekonomi', 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', '', 0),
(8, 'S1 Fakultas Ekonomi', 's1-fakultas-ekonomi', 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', '', 0),
(9, 'Penelitian 1', 'penelitian-1', 4, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', '', 0),
(10, 'Penelitian 2', 'penelitian-2', 4, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat nisl in purus aliquam, sed vulputate ligula volutpat. Curabitur fermentum ante nec neque scelerisque, et porta lectus scelerisque. In blandit rutrum aliquet. Aliquam ac dui posuere, semper mi et, commodo ex. Vivamus finibus ex consectetur lorem ornare, sit amet dapibus velit feugiat. Vivamus sed nibh elit. Etiam nec sodales tellus, sed varius ante. Cras congue, neque a pulvinar tincidunt, neque urna imperdiet neque, ac vehicula velit ligula nec mauris. Cras congue vulputate mauris, sed sollicitudin est vestibulum eu. Pellentesque ac massa magna. Maecenas vestibulum ex ex, aliquam faucibus elit pretium non. Proin eleifend erat dolor, quis ultrices erat condimentum et. Nunc posuere tincidunt lacinia. Aenean ligula massa, placerat quis porta ac, blandit eu quam. Donec eleifend felis non mollis congue.</p>\r\n\r\n<p>Nulla tempor, sapien vel sollicitudin pellentesque, magna neque consequat ante, sed fringilla nulla odio a ex. Sed imperdiet vestibulum auctor. Quisque tincidunt mi ac fermentum bibendum. Suspendisse bibendum viverra convallis. Sed laoreet lorem id elit cursus ultricies. Maecenas at quam at ligula mollis ornare vitae non elit. Sed vitae libero eu felis fringilla vehicula. Sed lacinia nibh vitae tristique elementum. Sed semper vitae purus vel vulputate. Suspendisse rhoncus, lectus eu dapibus auctor, lorem dolor malesuada urna, vitae rhoncus ligula nulla sit amet lectus. Vivamus sit amet justo eget tellus tempus laoreet.</p>\r\n\r\n<p>Mauris elementum magna velit, eget pulvinar enim ornare ut. Suspendisse nec mi eu ex sollicitudin pulvinar. Fusce in justo volutpat, rutrum diam in, consectetur arcu. Etiam hendrerit metus erat, non vestibulum arcu iaculis at. Nulla sed odio nisi. Nullam mollis augue egestas elit condimentum sodales. Cras euismod scelerisque libero, at scelerisque nisi dignissim ut. Mauris quis arcu suscipit, vehicula lorem eu, feugiat augue. Vivamus posuere ex ut ipsum dapibus, a lobortis urna cursus.</p>\r\n\r\n<p>Nam commodo ac turpis sit amet posuere. Nunc metus lacus, tincidunt vitae massa vitae, condimentum pulvinar nisl. Phasellus mattis nisl tempor elementum accumsan. Cras orci nunc, accumsan in varius eget, efficitur vitae neque. Phasellus mollis malesuada lacus et auctor. Mauris finibus posuere tellus ut sagittis. Sed sapien libero, mollis at hendrerit non, sodales non tellus. Vestibulum placerat mauris sem, nec luctus risus malesuada vel. Ut elit est, euismod non finibus vitae, ornare at purus. Pellentesque fermentum pulvinar faucibus.</p>\r\n\r\n<p>Quisque pellentesque malesuada molestie. Donec finibus placerat quam, ac sollicitudin nisi blandit non. Nullam sem tellus, fermentum ut efficitur posuere, molestie vitae ante. Morbi lorem justo, tristique sed enim nec, fermentum rhoncus ipsum. Maecenas gravida, nunc at pharetra volutpat, erat dolor imperdiet arcu, et efficitur magna lorem vel ligula. Proin in dolor eu ipsum molestie hendrerit. Suspendisse eros lectus, venenatis at tempor vitae, tristique a ipsum. Sed et libero vitae est consequat pretium vel vel metus. Cras vitae tortor eget quam vestibulum auctor.</p>\r\n', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_role` tinyint(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `paswd` varchar(300) NOT NULL,
  `active` varchar(11) NOT NULL,
  `foto_ktp` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `profesi` tinyint(4) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `alamat` mediumtext NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `asal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `nama`, `email`, `paswd`, `active`, `foto_ktp`, `photo`, `no_hp`, `profesi`, `tgl_daftar`, `lastlogin`, `alamat`, `facebook`, `instagram`, `asal`) VALUES
(1, 1, 'Fakultas Ekonomi Untag Banyuwangi', 'admin_fe@untag-banyuwangi.ac.id', '$2y$05$jT8zqnZ6b9ZjPxm252smwO2R2Np2ypNmRo2Itx.13MD8TliAhOWmy', '1', '', 'favicon.jpg', '', 0, '2019-08-11 00:00:00', '2020-03-24 12:18:10', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indeks untuk tabel `direktori`
--
ALTER TABLE `direktori`
  ADD PRIMARY KEY (`id_direktori`);

--
-- Indeks untuk tabel `download_area`
--
ALTER TABLE `download_area`
  ADD PRIMARY KEY (`id_download`);

--
-- Indeks untuk tabel `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kerja_sama`
--
ALTER TABLE `kerja_sama`
  ADD PRIMARY KEY (`id_kerja_sama`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id_sub_menu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `direktori`
--
ALTER TABLE `direktori`
  MODIFY `id_direktori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `download_area`
--
ALTER TABLE `download_area`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kerja_sama`
--
ALTER TABLE `kerja_sama`
  MODIFY `id_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
