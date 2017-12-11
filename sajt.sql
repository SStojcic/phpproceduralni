-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2016 at 09:37 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sajt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE IF NOT EXISTS `anketa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` float NOT NULL,
  `odgovor` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`id`, `rate`, `odgovor`) VALUES
(1, 6, 'Vikings'),
(2, 4, 'Suits'),
(3, 3, 'Arrow'),
(4, 0, 'BreakingBad');

-- --------------------------------------------------------

--
-- Table structure for table `galerije`
--

CREATE TABLE IF NOT EXISTS `galerije` (
  `id_galerije` int(5) NOT NULL AUTO_INCREMENT,
  `naziv_galerije` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_galerije`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `galerije`
--

INSERT INTO `galerije` (`id_galerije`, `naziv_galerije`) VALUES
(1, 'Galerija 1'),
(2, 'Galerija 2');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `user_level` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `user`, `pass`, `user_level`) VALUES
(8, 'stefan', 'stefan12', 2),
(5, 'user', 'user', 2),
(4, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `serije`
--

CREATE TABLE IF NOT EXISTS `serije` (
  `id_serije` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) CHARACTER SET latin1 NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_serije`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `serije`
--

INSERT INTO `serije` (`id_serije`, `naziv`, `opis`, `slika`) VALUES
(2, 'Suits', 'Serija Suits, komicna drama o advokatima i njihovim parnicama.', 'suitss.jpg'),
(14, 'Arrow', 'Arrow je osvetnik izvan zakona, iznimno spretan lik koji pod okriljem noci i zelene kapuljace traga za zlocincima u Starling Cityju i, ne obaziruci se na snage reda i zakona, pokusava svoj grad resiti svih negativaca. ', 'Stram-Arrow-TV-Show-On-Project-Free-TV.jpg'),
(13, 'Vikings', 'Jednostavnog naziva Vikings, prva originalna serija History Channela ekranizovace pricu o vikinskom kralju Ragnaru Lodbroku, legendarnom nordijskom osvajacu. Bit ce smestena u pocetne dane njegove vladavine s pocetkom dolaska na vlast.', 'vikings_s2_ragnar_hero-AB.jpeg'),
(15, 'Breaking Bad', 'Suocen s kronicnim nedostatkom love, nezanimljivim zivotom Amerikanca nizeg srednjeg ekonomskog soja, teskim slucajem krize srednjih godina iskorom smrcu od raka pluca, Walter H. White (Bryan Cranston) krece neocekivanim putem kako bi osigurao svoju obitelj, trudnu suprugu i bolesnog sina.', '09430691d85962f59c4bc0dd4c50025d.jpg'),
(16, 'Black Sails', 'Serija je smestenu na početak 18. veka, a inspiraciju vuce iz klasicnog romana Roberta Louisa Stevensona, "Otok s blagom", te  se bavi periodom dvadeset godina pre radnje u romanu, a prati zloglasnog kapetana Flinta, "najkrvolocnijeg gusara koji je ikad ziveo" i njegovu posadu.', 'Teaser_Poster_for_Black_Sails.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE IF NOT EXISTS `slike` (
  `id_slike` int(5) NOT NULL AUTO_INCREMENT,
  `id_galerije` int(5) NOT NULL,
  `naziv_slike` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_slike`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id_slike`, `id_galerije`, `naziv_slike`, `slika`) VALUES
(1, 1, 'slika 1', 'galerija_1Desert.jpg'),
(2, 1, 'slika 2', 'galerija_1Tulips.jpg'),
(3, 1, 'slika 3', 'galerija_1Penguins.jpg'),
(4, 1, 'slika 4', 'galerija_1Koala.jpg'),
(5, 1, 'Stefi', 'galerija_1slika2.jpg'),
(6, 1, 'sTEF', 'galerija_1slika1.jpg'),
(7, 1, 'gag', 'galerija_1slika3.jpg'),
(8, 0, '', 'galerija_0galerija_1Tulips.jpg'),
(9, 1, 'sgsg', 'galerija_1slika5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
