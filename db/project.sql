-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 26 août 2018 à 10:21
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `inscription_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Chapitre 1   ', 'Dans lequel Phileas Fogg et Passepartout s’acceptent réciproquement, l’un comme maître, l’autre comme domestique\r\nEn l’année 1872, la maison portant le numéro 7 de Saville-row, Burlington Gardens – maison dans laquelle Sheridan mourut en 1814 –, était habitée par Phileas Fogg, esq., l’un des membres les plus singuliers et les plus remarqués du Reform-Club de Londres, bien qu’il semblât prendre à tâche de ne rien faire qui pût attirer l’attention.\r\nÀ l’un des plus grands orateurs qui honorent l’Angleterre, succédait donc ce Phileas Fogg, personnage énigmatique, dont on ne savait rien, sinon que c’était un fort galant homme et l’un des plus beaux gentlemen de la haute société anglaise.\r\nOn disait qu’il ressemblait à Byron – par la tête, car il était irréprochable quant aux pieds –, mais un Byron à moustaches et à favoris, un Byron impassible, qui aurait vécu mille ans sans vieillir.\r\nAnglais, à coup sûr, Phileas Fogg n’était peut-être pas Londonner. On ne l’avait jamais vu ni à la Bourse, ni à la Banque, ni dans aucun des comptoirs de la Cité. Ni les bassins ni les docks de Londres n’avaient jamais reçu un navire ayant pour armateur Phileas Fogg. Ce gentleman ne figurait dans aucun comité d’administration. Son nom n’avait jamais retenti dans un collège d’avocats, ni au Temple, ni à Lincoln’s-inn, ni à Gray’s-inn. Jamais il ne plaida ni à la Cour du chancelier, ni au Banc de la Reine, ni à l’Échiquier ni en Cour ecclésiastique. Il n’était ni industriel, ni négociant, ni marchand, ni agriculteur. Il ne faisait partie ni de l’Institution royale de la Grande-Bretagne, ni de l’Institution de Londres, ni de l’Institution des Artisans, ni de l’Institution Russell, ni de l’Institution littéraire de l’Ouest, ni de l’Institution du Droit, ni de cette Institution des Arts et des Sciences réunis, qui est placée sous le patronage direct de Sa Gracieuse Majesté. Il n’appartenait enfin à aucune des nombreuses sociétés qui pullulent dans la capitale de l’Angleterre, depuis la Société de l’Armonica jusqu’à la Société entomologique, fondée principalement dans le but de détruire les insectes nuisibles.\r\nPhileas Fogg était membre du Reform-Club, et voilà tout.\r\nÀ qui s’étonnerait de ce qu’un gentleman aussi mystérieux comptât parmi les membres de cette honorable association, on répondra qu’il passa sur la recommandation de MM. Baring frères, chez lesquels il avait un crédit ouvert. De là une certaine « surface », due à ce que ses chèques étaient régulièrement payés à vue par le débit de son compte courant invariablement créditeur.\r\nCe Phileas Fogg était-il riche ?\r\nIncontestablement. Mais comment il avait fait fortune, c’est ce que les mieux informés ne pouvaient dire, et Mr. Fogg était le dernier auquel il convînt de s’adresser pour l’apprendre. En tout cas, il n’était prodigue de rien, mais non avare, car partout où il manquait un appoint pour une chose noble, utile ou généreuse, il l’apportait silencieusement et même anonymement. En somme, rien de moins communicatif que ce gentleman. Il parlait aussi peu que possible, et semblait d’autant plus mystérieux qu’il était silencieux. Cependant sa vie était à jour, mais ce qu’il faisait était si mathématiquement toujours la même chose, que l’imagination, mécontente, cherchait au-delà.\r\nAvait-il voyagé ? C’était probable, car personne ne possédait mieux que lui la carte du monde. Il n’était endroit si reculé dont il ne parût avoir une connaissance spéciale. Quelquefois, mais en peu de mots, brefs et clairs, il redressait les mille propos qui circulaient dans le club au sujet des voyageurs perdus ou égarés ; il indiquait les vraies probabilités, et ses paroles s’étaient trouvées souvent comme inspirées par une seconde vue, tant l’événement finissait toujours par les justifier. C’était un homme qui avait dû voyager partout, – en esprit, tout au moins.\r\nCe qui était certain toutefois, c’est que, depuis de longues années, Phileas Fogg n’avait pas quitté Londres. Ceux qui avaient l’honneur de le connaître un peu plus que les autres attestaient que – si ce n’est sur ce chemin direct qu’il parcourait chaque jour pour venir de sa maison au club – personne ne pouvait prétendre l’avoir jamais vu ailleurs. Son seul passe-temps était de lire les journaux et de jouer au whist. À ce jeu du silence, si bien approprié à sa nature, il gagnait souvent, mais ses gains n’entraient jamais dans sa bourse et figuraient pour une somme importante à son budget de charité. D’ailleurs, il faut le remarquer, Mr. Fogg jouait évidemment pour jouer, non pour gagner. Le jeu était pour lui un combat, une lutte contre une difficulté, mais une lutte sans mouvement, sans déplacement, sans fatigue, et cela allait à son caractère.\r\nOn ne connaissait à Phileas Fogg ni femme ni enfants, – ce qui peut arriver aux gens les plus honnêtes, – ni parents ni amis, – ce qui est plus rare en vérité. Phileas Fogg vivait seul dans sa maison de Saville-row, où personne ne pénétrait.\r\nDe son intérieur, jamais il n’était question. Un seul domestique suffisait à le servir. Déjeunant, dînant au club à des heures chronométriquement déterminées, dans la même salle, à la même table, ne traitant point ses collègues, n’invitant aucun étranger, il ne rentrait chez lui que pour se coucher, à minuit précis, sans jamais user de ces chambres confortables que le Reform-Club tient à la disposition des membres du cercle. Sur vingtquatre heures, il en passait dix à son domicile, soit qu’il dormît, soit qu’il s’occupât de sa toilette. S’il se promenait, c’était invariablement, d’un pas égal, dans la salle d’entrée parquetée en marqueterie, ou sur la galerie circulaire, audessus de laquelle s’arrondit un dôme à vitraux bleus, que supportent vingt colonnes ioniques en porphyre rouge. S’il dînait ou déjeunait, c’étaient les cuisines, le garde-manger, l’office, la poissonnerie, la laiterie du club, qui fournissaient à sa table leurs succulentes réserves ; c’étaient les domestiques du club, graves personnages en habit noir, chaussés de souliers à semelles de molleton, qui le servaient dans une porcelaine spéciale et sur un admirable linge en toile de Saxe ; c’étaient les cristaux à moule perdu du club qui contenaient son sherry, son porto ou son claret mélangé de cannelle, de capillaire et de cinnamome ; c’était enfin la glace du club – glace venue à grands frais des lacs d’Amérique – qui entretenait ses boissons dans un satisfaisant état de fraîcheur.\r\nSi vivre dans ces conditions, c’est être un excentrique, il faut convenir que l’excentricité a du bon !\r\nLa maison de Saville-row, sans être somptueuse, se recommandait par un extrême confort. D’ailleurs, avec les habitudes invariables du locataire, le service s’y  réduisait à peu.\r\nToutefois, Phileas Fogg exigeait de son unique domestique une ponctualité, une régularité  extraordinaires. Ce jour-là même, 2 octobre, Phileas Fogg avait donné son congé à James Forster – ce garçon s’étant rendu coupable de lui avoir apporté pour sa barbe de l’eau à quatrevingt- quatre degrés Fahrenheit au lieu de quatrevingt-six –, et il attendait son successeur, qui devait se présenter entre onze heures et onze heures et demie.\r\nPhileas Fogg, carrément assis dans son fauteuil, les deux pieds rapprochés comme ceux d’un soldat à la parade, les mains appuyées sur les genoux, le corps droit, la tête haute, regardait marcher l’aiguille de la pendule, – appareil compliqué qui indiquait les heures, les minutes, les secondes, les jours, les quantièmes et l’année.\r\nÀ onze heures et demie sonnantes, Mr. Fogg devait, suivant sa quotidienne habitude, quitter la maison et se rendre au Reform-Club.\r\nEn ce moment, on frappa à la porte du petit salon dans lequel se tenait Phileas Fogg.\r\nJames Forster, le congédié, apparut.\r\n« Le nouveau domestique », dit-il.\r\nUn garçon âgé d’une trentaine d’années se montra et salua.\r\n« Vous êtes Français et vous vous nommez John ? », lui demanda Phileas Fogg.\r\n– Jean, n’en déplaise à monsieur, répondit le nouveau venu, Jean Passepartout, un surnom qui m’est resté, et que justifiait mon aptitude naturelle à me tirer d’affaire. Je crois être un honnête garçon, monsieur, mais, pour être franc, j’ai fait plusieurs métiers. J’ai été chanteur ambulant, écuyer dans un cirque, faisant de la voltige comme Léotard, et dansant sur la corde comme Blondin ; puis je suis devenu professeur de gymnastique, afin de rendre mes talents plus utiles, et, en dernier lieu, j’étais sergent de pompiers, à Paris. J’ai même dans mon dossier des incendies remarquables. Mais voilà cinq ans que j’ai quitté la France et que, voulant goûter de la vie de famille, je suis valet de chambre en Angleterre. Or, me trouvant sans place et ayant appris que M. Phileas Fogg était l’homme le plus exact et le plus sédentaire du Royaume-Uni, je me suis présenté chez monsieur avec l’espérance d’y vivre tranquille et d’oublier jusqu’à ce nom de Passepartout...\r\n– Passepartout me convient, répondit le gentleman. Vous m’êtes recommandé. J’ai de bons renseignements sur votre compte. Vous connaissez mes conditions ?\r\n– Oui, monsieur.\r\n– Bien. Quelle heure avez-vous ?\r\n– Onze heures vingt-deux, répondit Passepartout, en tirant des profondeurs de son gousset une énorme montre d’argent.\r\n– Vous retardez, dit Mr. Fogg.\r\n– Que monsieur me pardonne, mais c’est impossible.\r\n– Vous retardez de quatre minutes. N’importe. Il suffit de constater l’écart. Donc, à partir de ce moment, onze heures vingt-neuf du matin, ce mercredi 2 octobre 1872, vous êtes à mon service. »\r\nCela dit, Phileas Fogg se leva, prit son chapeau de la main gauche, le plaça sur sa tête avec un mouvement d’automate et disparut sans ajouter une parole.\r\nPassepartout entendit la porte de la rue se fermer une première fois : c’était son nouveau maître qui sortait ; puis une seconde fois : c’était son prédécesseur, James Forster, qui s’en allait à son tour.\r\nPassepartout demeura seul dans la maison de Saville-row.', '2018-08-22 17:48:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
