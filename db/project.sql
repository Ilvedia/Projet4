-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db751318455.db.1and1.com
-- Généré le :  Mar 09 Octobre 2018 à 18:05
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db751318455`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'valid',
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `member_id`, `comment`, `status`, `comment_date`) VALUES
(1, 1, 1, 'Pas mal pour un premier chapitre !', 'warning', '2018-09-10 11:28:00'),
(3, 1, 1, 'Plutôt pas mal !', 'warning', '2018-09-17 17:36:34'),
(4, 5, 2, 'trop hâte', 'valid', '2018-10-02 09:44:03'),
(11, 8, 1, 'Vite, vite, vite !!!!', 'valid', '2018-10-09 17:01:48');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userLevel` varchar(50) NOT NULL DEFAULT 'Member',
  `inscription_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `pseudo`, `pass`, `email`, `userLevel`, `inscription_date`) VALUES
(1, 'Jean', '$2y$10$rHksOLICBrhddLXs55WV0.GuQRUiIntbkGWb36.Hw02Xf3utSQky.', 'test@test.com', 'admin', '2018-08-27 00:00:00'),
(2, 'Caro', '$2y$10$jc9HHogywusqHm5PlWQ6RO86JXqJvNoUAqPM2F4NFlFjotlA.zBh6', 'test@test.fr', 'Member', '2018-10-02 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Dans lequel Phileas Fogg et Passepartout s’acceptent réciproquement, l’un comme maître, l’autre comme domestique', ' En l’année 1872, la maison portant le numéro 7 de Saville-row, Burlington Gardens – maison dans laquelle Sheridan mourut en 1814 –, était habitée par Phileas Fogg, esq., l’un des membres les plus singuliers et les plus remarqués du Reform-Club de Londres, bien qu’il semblât prendre à tâche de ne rien faire qui pût attirer l’attention.\r\n À l’un des plus grands orateurs qui honorent l’Angleterre, succédait donc ce Phileas Fogg, personnage énigmatique, dont on ne savait rien, sinon que c’était un fort galant homme et l’un des plus beaux gentlemen de la haute société anglaise.\r\n On disait qu’il ressemblait à Byron – par la tête, car il était irréprochable quant aux pieds –, mais un Byron à moustaches et à favoris, un Byron impassible, qui aurait vécu mille ans sans vieillir.\r\n Anglais, à coup sûr, Phileas Fogg n’était peut-être pas Londonner. On ne l’avait jamais vu ni à la Bourse, ni à la Banque, ni dans aucun des comptoirs de la Cité. Ni les bassins ni les docks de Londres n’avaient jamais reçu un navire ayant pour armateur Phileas Fogg. Ce gentleman ne figurait dans aucun comité d’administration. Son nom n’avait jamais retenti dans un collège d’avocats, ni au Temple, ni à Lincoln’s-inn, ni à Gray’s-inn. Jamais il ne plaida ni à la Cour du chancelier, ni au Banc de la Reine, ni à l’Échiquier ni en Cour ecclésiastique. Il n’était ni industriel, ni négociant, ni marchand, ni agriculteur. Il ne faisait partie ni de l’Institution royale de la Grande-Bretagne, ni de l’Institution de Londres, ni de l’Institution des Artisans, ni de l’Institution Russell, ni de l’Institution littéraire de l’Ouest, ni de l’Institution du Droit, ni de cette Institution des Arts et des Sciences réunis, qui est placée sous le patronage direct de Sa Gracieuse Majesté. Il n’appartenait enfin à aucune des nombreuses sociétés qui pullulent dans la capitale de l’Angleterre, depuis la Société de l’Armonica jusqu’à la Société entomologique, fondée principalement dans le but de détruire les insectes nuisibles.\r\n Phileas Fogg était membre du Reform-Club, et voilà tout.\r\n À qui s’étonnerait de ce qu’un gentleman aussi mystérieux comptât parmi les membres de cette honorable association, on répondra qu’il passa sur la recommandation de MM. Baring frères, chez lesquels il avait un crédit ouvert. De là une certaine « surface », due à ce que ses chèques étaient régulièrement payés à vue par le débit de son compte courant invariablement créditeur.\r\n Ce Phileas Fogg était-il riche ?\r\n Incontestablement. Mais comment il avait fait fortune, c’est ce que les mieux informés ne pouvaient dire, et Mr. Fogg était le dernier auquel il convînt de s’adresser pour l’apprendre. En tout cas, il n’était prodigue de rien, mais non avare, car partout où il manquait un appoint pour une chose noble, utile ou généreuse, il l’apportait silencieusement et même anonymement. En somme, rien de moins communicatif que ce gentleman. Il parlait aussi peu que possible, et semblait d’autant plus mystérieux qu’il était silencieux. Cependant sa vie était à jour, mais ce qu’il faisait était si mathématiquement toujours la même chose, que l’imagination, mécontente, cherchait au-delà.\r\n Avait-il voyagé ? C’était probable, car personne ne possédait mieux que lui la carte du monde. Il n’était endroit si reculé dont il ne parût avoir une connaissance spéciale. Quelquefois, mais en peu de mots, brefs et clairs, il redressait les mille propos qui circulaient dans le club au sujet des voyageurs perdus ou égarés ; il indiquait les vraies probabilités, et ses paroles s’étaient trouvées souvent comme inspirées par une seconde vue, tant l’événement finissait toujours par les justifier. C’était un homme qui avait dû voyager partout, – en esprit, tout au moins.\r\n Ce qui était certain toutefois, c’est que, depuis de longues années, Phileas Fogg n’avait pas quitté Londres. Ceux qui avaient l’honneur de le connaître un peu plus que les autres attestaient que – si ce n’est sur ce chemin direct qu’il parcourait chaque jour pour venir de sa maison au club – personne ne pouvait prétendre l’avoir jamais vu ailleurs. Son seul passe-temps était de lire les journaux et de jouer au whist. À ce jeu du silence, si bien approprié à sa nature, il gagnait souvent, mais ses gains n’entraient jamais dans sa bourse et figuraient pour une somme importante à son budget de charité. D’ailleurs, il faut le remarquer, Mr. Fogg jouait évidemment pour jouer, non pour gagner. Le jeu était pour lui un combat, une lutte contre une difficulté, mais une lutte sans mouvement, sans déplacement, sans fatigue, et cela allait à son caractère.\r\n On ne connaissait à Phileas Fogg ni femme ni enfants, – ce qui peut arriver aux gens les plus honnêtes, – ni parents ni amis, – ce qui est plus rare en vérité. Phileas Fogg vivait seul dans sa maison de Saville-row, où personne ne pénétrait.\r\n De son intérieur, jamais il n’était question. Un seul domestique suffisait à le servir. Déjeunant, dînant au club à des heures chronométriquement déterminées, dans la même salle, à la même table, ne traitant point ses collègues, n’invitant aucun étranger, il ne rentrait chez lui que pour se coucher, à minuit précis, sans jamais user de ces chambres confortables que le Reform-Club tient à la disposition des membres du cercle. Sur vingtquatre heures, il en passait dix à son domicile, soit qu’il dormît, soit qu’il s’occupât de sa toilette. S’il se promenait, c’était invariablement, d’un pas égal, dans la salle d’entrée parquetée en marqueterie, ou sur la galerie circulaire, audessus de laquelle s’arrondit un dôme à vitraux bleus, que supportent vingt colonnes ioniques en porphyre rouge. S’il dînait ou déjeunait, c’étaient les cuisines, le garde-manger, l’office, la poissonnerie, la laiterie du club, qui fournissaient à sa table leurs succulentes réserves ; c’étaient les domestiques du club, graves personnages en habit noir, chaussés de souliers à semelles de molleton, qui le servaient dans une porcelaine spéciale et sur un admirable linge en toile de Saxe ; c’étaient les cristaux à moule perdu du club qui contenaient son sherry, son porto ou son claret mélangé de cannelle, de capillaire et de cinnamome ; c’était enfin la glace du club – glace venue à grands frais des lacs d’Amérique – qui entretenait ses boissons dans un satisfaisant état de fraîcheur.\r\n Si vivre dans ces conditions, c’est être un excentrique, il faut convenir que l’excentricité a du bon !\r\n La maison de Saville-row, sans être somptueuse, se recommandait par un extrême confort. D’ailleurs, avec les habitudes invariables du locataire, le service s’y réduisait à peu.\r\n Toutefois, Phileas Fogg exigeait de son unique domestique une ponctualité, une régularité extraordinaires. Ce jour-là même, 2 octobre, Phileas Fogg avait donné son congé à James Forster – ce garçon s’étant rendu coupable de lui avoir apporté pour sa barbe de l’eau à quatrevingt- quatre degrés Fahrenheit au lieu de quatrevingt-six –, et il attendait son successeur, qui devait se présenter entre onze heures et onze heures et demie.\r\n Phileas Fogg, carrément assis dans son fauteuil, les deux pieds rapprochés comme ceux d’un soldat à la parade, les mains appuyées sur les genoux, le corps droit, la tête haute, regardait marcher l’aiguille de la pendule, – appareil compliqué qui indiquait les heures, les minutes, les secondes, les jours, les quantièmes et l’année.\r\n À onze heures et demie sonnantes, Mr. Fogg devait, suivant sa quotidienne habitude, quitter la maison et se rendre au Reform-Club.\r\n En ce moment, on frappa à la porte du petit salon dans lequel se tenait Phileas Fogg.\r\n James Forster, le congédié, apparut.\r\n « Le nouveau domestique », dit-il.\r\n Un garçon âgé d’une trentaine d’années se montra et salua.\r\n « Vous êtes Français et vous vous nommez John ? », lui demanda Phileas Fogg.\r\n – Jean, n’en déplaise à monsieur, répondit le nouveau venu, Jean Passepartout, un surnom qui m’est resté, et que justifiait mon aptitude naturelle à me tirer d’affaire. Je crois être un honnête garçon, monsieur, mais, pour être franc, j’ai fait plusieurs métiers. J’ai été chanteur ambulant, écuyer dans un cirque, faisant de la voltige comme Léotard, et dansant sur la corde comme Blondin ; puis je suis devenu professeur de gymnastique, afin de rendre mes talents plus utiles, et, en dernier lieu, j’étais sergent de pompiers, à Paris. J’ai même dans mon dossier des incendies remarquables. Mais voilà cinq ans que j’ai quitté la France et que, voulant goûter de la vie de famille, je suis valet de chambre en Angleterre. Or, me trouvant sans place et ayant appris que M. Phileas Fogg était l’homme le plus exact et le plus sédentaire du Royaume-Uni, je me suis présenté chez monsieur avec l’espérance d’y vivre tranquille et d’oublier jusqu’à ce nom de Passepartout...\r\n – Passepartout me convient, répondit le gentleman. Vous m’êtes recommandé. J’ai de bons renseignements sur votre compte. Vous connaissez mes conditions ?\r\n – Oui, monsieur.\r\n – Bien. Quelle heure avez-vous ?\r\n – Onze heures vingt-deux, répondit Passepartout, en tirant des profondeurs de son gousset une énorme montre d’argent.\r\n – Vous retardez, dit Mr. Fogg.\r\n – Que monsieur me pardonne, mais c’est impossible.\r\n – Vous retardez de quatre minutes. N’importe. Il suffit de constater l’écart. Donc, à partir de ce moment, onze heures vingt-neuf du matin, ce mercredi 2 octobre 1872, vous êtes à mon service. »\r\n Cela dit, Phileas Fogg se leva, prit son chapeau de la main gauche, le plaça sur sa tête avec un mouvement d’automate et disparut sans ajouter une parole.\r\n Passepartout entendit la porte de la rue se fermer une première fois : c’était son nouveau maître qui sortait ; puis une seconde fois : c’était son prédécesseur, James Forster, qui s’en allait à son tour.\r\n Passepartout demeura seul dans la maison de Saville-row. ', '2018-08-22 17:48:59'),
(3, 'Où Passepartout est convaincu qu’il a enfin trouvé son idéal', '« Sur ma foi, se dit Passepartout, un peu ahuri tout d’abord, j’ai connu chez Mme Tussaud des bonshommes aussi vivants que mon nouveau maître ! » Il convient de dire ici que les « bonshommes » de Mme Tussaud sont des figures de cire, fort visitées à Londres, et auxquelles il ne manque vraiment que la parole. Pendant les quelques instants qu’il venait d’entrevoir Phileas Fogg, Passepartout avait rapidement, mais soigneusement examiné son futur maître. C’était un homme qui pouvait avoir quarante ans, de figure noble et belle, haut de taille, que ne déparait pas un léger embonpoint, blond de cheveux et de favoris, front uni sans apparences de rides aux tempes, figure plutôt pâle que colorée, dents magnifiques. Il paraissait posséder au plus haut degré ce que les physionomistes appellent « le repos dans l’action », faculté commune à tous ceux qui font plus de besogne que de bruit. Calme, flegmatique, l’oeil pur, la paupière immobile, c’était le type achevé de ces Anglais à sang-froid qui se rencontrent assez fréquemment dans le Royaume-Uni, et dont Angelica Kauffmann a merveilleusement rendu sous son pinceau l’attitude un peu académique. Vu dans les divers actes de son existence, ce gentleman donnait l’idée d’un être bien équilibré dans toutes ses parties, justement pondéré, aussi parfait qu’un chronomètre de Leroy ou de Earnshaw. C’est qu’en effet, Phileas Fogg était l’exactitude personnifiée, ce qui se voyait clairement à « l’expression de ses pieds et de ses mains », car chez l’homme, aussi bien que chez les animaux, les membres eux-mêmes sont des organes expressifs des passions. Phileas Fogg était de ces gens mathématiquement exacts, qui, jamais pressés et toujours prêts, sont économes de leurs pas et de leurs mouvements. Il ne faisait pas une enjambée de trop, allant toujours par le plus court. Il ne perdait pas un regard au plafond. Il ne se permettait aucun geste superflu. On ne l’avait jamais vu ému ni troublé. C’était l’homme le moins hâté du monde, mais il arrivait toujours à temps. Toutefois, on comprendra qu’il vécût seul et pour ainsi dire en dehors de toute relation sociale. Il savait que dans la vie il faut faire la part des frottements, et comme les frottements retardent, il ne se frottait à personne. Quant à Jean, dit Passepartout, un vrai Parisien de Paris, depuis cinq ans qu’il habitait l’Angleterre et y faisait à Londres le métier de valet de chambre, il avait cherché vainement un maître auquel il pût s’attacher. Passepartout n’était point un de ces Frontins ou Mascarilles qui, les épaules hautes, le nez au vent, le regard assuré, l’oeil sec, ne sont que d’impudents drôles. Non. Passepartout était un brave garçon, de physionomie aimable, aux lèvres un peu saillantes, toujours prêtes à goûter ou à caresser, un être doux et serviable, avec une de ces bonnes têtes rondes que l’on aime à voir sur les épaules d’un ami. Il avait les yeux bleus, le teint animé, la figure assez grasse pour qu’il pût lui-même voir les pommettes de ses joues, la poitrine large, la taille forte, une musculature vigoureuse, et il possédait une force herculéenne que les exercices de sa jeunesse avaient admirablement développée. Ses cheveux bruns étaient un peu rageurs. Si les sculpteurs de l’Antiquité connaissaient dix-huit façons d’arranger la chevelure de Minerve, Passepartout n’en connaissait qu’une pour disposer la sienne :  trois coups de démêloir, et il était coiffé. De dire si le caractère expansif de ce garçon s’accorderait avec celui de Phileas Fogg, c’est ce que la prudence la plus élémentaire ne permet pas. Passepartout serait-il ce domestique foncièrement exact qu’il fallait à son maître ? On ne le verrait qu’à l’user. Après avoir eu, on le sait, une jeunesse assez vagabonde, il aspirait au repos. Ayant entendu vanter le méthodisme anglais et la froideur proverbiale des gentlemen, il vint chercher fortune en Angleterre. Mais, jusqu’alors, le sort l’avait mal servi. Il n’avait pu prendre racine nulle part. II avait fait dix maisons. Dans toutes, on était fantasque, inégal, coureur d’aventures ou coureur de pays, – ce qui ne pouvait plus convenir à Passepartout. Son dernier maître, le jeune Lord Longsferry, membre du Parlement, après avoir passé ses nuits dans les « oysters-rooms » d’Hay-Market, rentrait trop souvent au logis sur les épaules des policemen. Passepartout, voulant avant tout pouvoir respecter son maître, risqua quelques respectueuses observations qui furent mal reçues, et il rompit. Il apprit, sur les entrefaites, que Phileas Fogg, esq., cherchait un domestique. Il prit des renseignements sur ce gentleman. Un personnage dont l’existence était si régulière, qui ne découchait pas, qui ne voyageait pas, qui ne s’absentait jamais, pas même un jour, ne pouvait que lui convenir. Il se présenta et fut admis dans les circonstances que l’on sait. Passepartout – onze heures et demie étant sonnées – se trouvait donc seul dans la maison de Saville-row. Aussitôt il en commença l’inspection. Il la parcourut de la cave au grenier. Cette maison propre, rangée, sévère, puritaine, bien organisée pour le service, lui plut. Elle lui fit l’effet d’une belle coquille de colimaçon, mais d’une coquille éclairée et chauffée au gaz, car l’hydrogène carburé y suffisait à tous les besoins de lumière et de chaleur. Passepartout trouva sans peine, au second étage, la chambre qui lui était destinée. Elle lui convint. Des timbres électriques et des tuyaux acoustiques la mettaient en communication avec les appartements de l’entresol et du premier étage. Sur la cheminée, une pendule électrique correspondait avec la pendule de la chambre à coucher de Phileas Fogg, et les deux appareils battaient au même instant la même seconde. « Cela me va, cela me va ! » se dit Passepartout. Il remarqua aussi, dans sa chambre, une notice affichée au-dessus de la pendule. C’était le programme du service quotidien. Il comprenait – depuis huit heures du matin, heure réglementaire à laquelle se levait Phileas Fogg, jusqu’à onze heures et demie, heure à laquelle il quittait sa maison pour aller déjeuner au Reform-Club – tous les détails du service, le thé et les rôties de huit heures vingt-trois, l’eau pour la barbe de neuf heures trente-sept, la coiffure de dix heures moins vingt, etc. Puis de onze heures et demie du matin à minuit – heure à laquelle se couchait le méthodique gentleman –, tout était noté, prévu, régularisé. Passepartout se fit une joie de méditer ce programme et d’en graver les divers articles dans son esprit. Quant à la garde-robe de monsieur, elle était fort bien montée et merveilleusement comprise. Chaque pantalon, habit ou gilet portait un numéro d’ordre reproduit sur un registre d’entrée et de sortie, indiquant la date à laquelle, suivant la saison, ces vêtements devaient être tour à tour portés. Même réglementation pour les chaussures. En somme, dans cette maison de Saville-row – qui devait être le temple du désordre à l’époque de l’illustre mais dissipé Sheridan –, ameublement confortable, annonçant une belle aisance. Pas de bibliothèque, pas de livres, qui eussent été sans utilité pour Mr. Fogg, puisque le Reform-Club mettait à sa disposition deux bibliothèques, l’une consacrée aux lettres, l’autre au droit et à la politique. Dans la chambre à coucher, un coffre-fort de moyenne grandeur, que sa construction défendait aussi bien de l’incendie que du vol. Point d’armes dans la maison, aucun ustensile de chasse ou de guerre. Tout y dénotait les habitudes les plus pacifiques. Après avoir examiné cette demeure en détail, Passepartout se frotta les mains, sa large figure s’épanouit, et il répéta joyeusement : « Cela me va ! voilà mon affaire ! Nous nous entendrons parfaitement, Mr. Fogg et moi ! Un homme casanier et régulier ! Une véritable mécanique ! Eh bien, je ne suis pas fâché de servir une mécanique ! »', '2018-08-31 17:47:38'),
(5, 'Des nouvelles du prochain chapitre', 'Un peu de patience, il arrive bientôt ! ', '2018-09-25 18:02:46'),
(8, 'Bientôt', '<p>Passepartout et Phileas Fog reviennent <strong>bient&ocirc;t</strong>.</p>', '2018-10-09 17:01:28');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Delete comments with post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
