-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2022 at 12:43 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdemodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `age`, `dob`, `profile`, `country`, `state`, `city`, `password`) VALUES
(5, 'Parth', 'parthpatel', 'abc@gmail.com', 25, '2002-02-04', 'girl-g9ff848c34_1920.jpg', 'India', 'Gujarat', 'Rajkot', 'Parth@123'),
(6, 'Hetal patel', 'hetal', 'hetal@gmail.com', 20, '2002-05-07', '', 'India', 'Gujarat', 'Rajkot', 'Parth@123'),
(7, 'Raj', 'raj', 'raj@gmail.com', 20, '2002-05-07', '', 'India', 'Gujarat', 'Rajkot', 'Parth@123'),
(10, 'Donia Astling', 'dastling2', 'dastling2@java.com', 18, '24/03/1967', '', 'India', 'Gujarat', 'R S', 'yMIaUGU'),
(11, 'Leonardo Sanford', 'lsanford3', 'lsanford3@wordpress.org', 11, '06/10/1925', '', 'India', 'Gujarat', 'R S', 'Df9XG3Ql0'),
(12, 'Elisabet Brayley', 'ebrayley4', 'ebrayley4@blogtalkradio.com', 12, '10/07/2010', '', 'India', 'Gujarat', 'R S', 'oVC3wsmIwu'),
(13, 'Allegra Mighele', 'amighele5', 'amighele5@sakura.ne.jp', 9, '09/11/1949', '', 'India', 'Gujarat', 'R S', '0HccC0'),
(15, 'Adorne Jozsika', 'ajozsika7', 'ajozsika7@dropbox.com', 4, '07/11/1900', '', 'India', 'Gujarat', 'R S', 'lafI3W6E3X0'),
(18, 'Lenora Chartres', 'lchartresa', 'lchartresa@europa.eu', 23, '01/11/1964', '', 'India', 'Gujarat', 'R S', 'zqi5Dmh'),
(22, 'Travus Gallichan', 'tgallichane', 'tgallichane@simplemachines.org', 7, '06/08/1978', '', 'India', 'Gujarat', 'R S', 'Oq5JMY1UCqHu'),
(30, 'Ernst Desporte', 'edesportem', 'edesportem@deliciousdays.com', 14, '29/01/1914', '', 'India', 'Gujarat', 'R S', 'K8yr3SOPD22I'),
(31, 'Marlane Mahood', 'mmahoodn', 'mmahoodn@cocolog-nifty.com', 14, '09/06/1963', '', 'India', 'Gujarat', 'R S', 'QNeNdPMgk'),
(36, 'Martha Burnhams', 'mburnhamss', 'mburnhamss@last.fm', 8, '17/11/1911', '', 'India', 'Gujarat', 'R S', 'ALNOie'),
(52, 'Collen Evitts', 'cevitts18', 'cevitts18@dedecms.com', 11, '21/04/2006', '', 'India', 'Gujarat', 'R S', 'ZwNC3EcC'),
(53, 'Dorolice McCerery', 'dmccerery19', 'dmccerery19@zdnet.com', 9, '01/01/1903', '', 'India', 'Gujarat', 'R S', 'oY1fY3goPK'),
(54, 'Mordy Warters', 'mwarters1a', 'mwarters1a@tumblr.com', 13, '07/11/1946', '', 'India', 'Gujarat', 'R S', 'Gg38Is'),
(58, 'Mattias Mingardi', 'mmingardi1e', 'mmingardi1e@example.com', 12, '23/07/1958', '', 'India', 'Gujarat', 'R S', '4on2vnB'),
(68, 'Kania Beswetherick', 'kbeswetherick1o', 'kbeswetherick1o@goo.gl', 14, '22/01/2021', '', 'India', 'Gujarat', 'R S', 'wzeJM2yM613o'),
(69, 'Shelagh Corder', 'scorder1p', 'scorder1p@mail.ru', 15, '31/07/1946', '', 'India', 'Gujarat', 'R S', 'IFnTVDW3X'),
(71, 'Dewie Burbridge', 'dburbridge1r', 'dburbridge1r@pagesperso-orange.fr', 26, '09/01/1918', '', 'India', 'Gujarat', 'R S', 'ZdiBUkrQQ1'),
(76, 'Ileana Ventham', 'iventham1w', 'iventham1w@netscape.com', 19, '30/08/1957', '', 'India', 'Gujarat', 'R S', 'bplH5gimyF'),
(77, 'Padraig Goodyear', 'pgoodyear1x', 'pgoodyear1x@smugmug.com', 11, '29/04/1983', '', 'India', 'Gujarat', 'R S', '76jTWpK'),
(80, 'Sunny Belk', 'sbelk20', 'sbelk20@adobe.com', 30, '15/07/1997', '', 'India', 'Gujarat', 'R S', 'HUPBRS4'),
(84, 'Mamie Allnutt', 'mallnutt24', 'mallnutt24@nymag.com', 18, '18/05/1962', '', 'India', 'Gujarat', 'R S', 'Hj9Y2q5Dl7p3'),
(91, 'Had Schohier', 'hschohier2b', 'hschohier2b@bluehost.com', 14, '10/02/1960', '', 'India', 'Gujarat', 'R S', 'nJYXyKz'),
(105, 'Morgana Etherson', 'metherson2p', 'metherson2p@apple.com', 25, '16/06/1962', '', 'India', 'Gujarat', 'R S', 'DorCIsv'),
(110, 'Susana Quadling', 'squadling2u', 'squadling2u@apple.com', 7, '09/12/2011', '', 'India', 'Gujarat', 'R S', 'ycoUCEJX'),
(111, 'Shandie Beautyman', 'sbeautyman2v', 'sbeautyman2v@linkedin.com', 22, '07/04/1964', '', 'India', 'Gujarat', 'R S', 'vpQYLPsd5NqF'),
(118, 'Maximilianus Gilbanks', 'mgilbanks32', 'mgilbanks32@un.org', 14, '15/01/2004', '', 'India', 'Gujarat', 'R S', 'ln42H9Rc'),
(126, 'Katherina Sugarman', 'ksugarman3a', 'ksugarman3a@jigsy.com', 15, '16/10/1965', '', 'India', 'Gujarat', 'R S', 'ea6Wh2G'),
(133, 'Penni Mantione', 'pmantione3h', 'pmantione3h@icio.us', 13, '27/05/2005', '', 'India', 'Gujarat', 'R S', 'reQkPJQLzj'),
(137, 'Kane Kirke', 'kkirke3l', 'kkirke3l@bloomberg.com', 22, '20/09/1933', '', 'India', 'Gujarat', 'R S', 'bwnqlC'),
(138, 'Ricoriki Thams', 'rthams3m', 'rthams3m@prlog.org', 11, '30/11/1915', '', 'India', 'Gujarat', 'R S', 'bKY2bufa'),
(140, 'Staffard Pluck', 'spluck3o', 'spluck3o@gizmodo.com', 14, '16/06/1924', '', 'India', 'Gujarat', 'R S', 'SmJT0KPS5r59'),
(142, 'Nelie Hamlington', 'nhamlington3q', 'nhamlington3q@howstuffworks.com', 23, '17/02/1909', '', 'India', 'Gujarat', 'R S', 'dtq3sJE'),
(145, 'Helaina Greatham', 'hgreatham3t', 'hgreatham3t@twitpic.com', 6, '24/12/1907', '', 'India', 'Gujarat', 'R S', '7GLw8Y65DJ'),
(146, 'Wallis Mordie', 'wmordie3u', 'wmordie3u@reference.com', 22, '02/05/2003', '', 'India', 'Gujarat', 'R S', 'iHQxg6DU6'),
(151, 'Silva Huyhton', 'shuyhton3z', 'shuyhton3z@yandex.ru', 15, '05/06/1956', '', 'India', 'Gujarat', 'R S', 'mCS7AED'),
(158, 'rutvik', 'rutvik', 'rutvik@gmail.com', 21, '2002-12-12', 'computer tables.jpg', 'India', 'Goa', 'Rajkot', 'rutvik');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
