
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercicePHP`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'Devant vos yeux ébahis...', 'Bienvenue sur ce blog, à la découverte de PHP et MySQL avec la PrepFullstack d\'OpenClassrooms !\r\nLe summum de l\'interactivité avec ce blog commentable et ces articles plus profonds les uns que les autres !\r\n', '2021-05-01 07:42:01'),
(2, 'Et même des commentaires !', 'Vous pouvez même commenter cet article passionnant à propos des commentaires pour une mîse en abîme du commentaire et un immersion complète !', '2021-05-01 11:27:14'),
(3, 'Toujours plus de commmentaires', 'Commentez ! Il faut bien que quelqu\'un remplisse ce blog ! ', '2021-05-01 15:25:17'),
(4, 'The place to be !', 'Admirez ce design époustouflant, ces couleurs, cette ergonomie et cette interactivité encore inégalée...\r\n', '2021-05-03 09:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int NOT NULL,
  `id_billet` int NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'Bullus', 'Waaaw, comme ce blog est sophistiqué !', '2021-05-01 13:12:23'),
(2, 1, 'JMG', 'Incroyable, bravo ! Quelle innovation...', '2021-05-01 14:27:36'),
(3, 1, 'Massimo', 'Merci pour ce super blog interactif', '2021-05-01 18:02:54'),
(4, 2, 'Pomme', 'Mouais.', '2021-05-02 10:29:19'),
(5, 2, 'Massimo', 'Je suis sans voix', '2021-05-01 15:21:17'),
(6, 3, 'Pomme', 'Bonne chance avec ça !', '2021-05-02 13:05:49'),
(7, 3, 'Truc', 'Il y a de quoi faire', '2021-05-02 14:11:41'),
(8, 1, 'Truc', 'Stupéfiant', '2021-05-02 14:23:41'),
(9, 2, 'Truc', 'Hâte de voir la suite', '2021-05-02 14:31:02'),
(10, 2, 'Marco', 'Trop bien !', '2021-05-02 15:10:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
