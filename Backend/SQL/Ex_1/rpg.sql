DROP DATABASE IF EXISTS rpg;

CREATE DATABASE IF NOT EXISTS rpg;

USE rpg;

CREATE TABLE arme(
  idArme int(11) NOT NULL,
  nom varchar(60) NOT NULL,
  levelMin int(11) NOT NULL,
  degat int(11) NOT NULL,
  idTypeArme int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `arme`
--

INSERT INTO `arme` (`idArme`, `nom`, `levelMin`, `degat`, `idTypeArme`) VALUES
(1, 'HacheDuLyon', 1, 10, 1),
(2, 'HacheDeFeu', 3, 20, 1),
(3, 'HachedeGlace', 7, 35, 1),
(4, 'Arc en bois', 1, 5, 2),
(5, 'Arc en bois debene', 5, 15, 2),
(6, 'Arc des anges', 9, 30, 2),
(7, 'Excalibur', 10, 65, 3),
(8, 'Arbalete givrante', 4, 15, 4),
(9, 'Dague de voleur', 2, 7, 6),
(10, 'Dage de contrebandier', 6, 14, 6);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE classe (
  idClasse int(11) NOT NULL,
  nom varchar(60) NOT NULL,
  baseForce int(11) NOT NULL,
  baseAgi int(11) NOT NULL,
  baseIntel int(11) NOT NULL,
  description text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `classe` (`idClasse`, `nom`, `baseForce`, `baseAgi`, `baseIntel`, `description`) VALUES
(1, 'Guerrier', 6, 2, 2, 'Classe de CaC, avec une bonne résistance et maniant pratiquement tous les types armes'),
(2, 'Archer', 3, 5, 3, 'Classe à distance maniant les épées et les armes à distance'),
(3, 'Voleur', 4, 4, 4, 'Classe furtive, équilibrée mais ne maniant que les dagues');



CREATE TABLE dispose (
  idPersonnage int(11) NOT NULL,
  idArme int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `dispose` (`idPersonnage`, `idArme`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 9),
(2, 1),
(2, 2),
(2, 3),
(3, 2),
(3, 3),
(3, 7),
(4, 4),
(4, 5),
(5, 7),
(6, 4),
(6, 8),
(7, 9),
(7, 10);



CREATE TABLE personnage (
  idPersonnage int(11) NOT NULL,
  nom varchar(60) NOT NULL,
  surnom varchar(60) DEFAULT NULL,
  level int(11) NOT NULL,
  idArmeUtilise int(11) NOT NULL,
  idClasse int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `personnage` (`idPersonnage`, `nom`, `surnom`, `level`, `idArmeUtilise`, `idClasse`) VALUES
(1, 'wawaf', 'BestWarrior', 10, 7, 1),
(2, 'leWar', 'ptitWar', 8, 3, 1),
(3, 'guerrierDu09', 'baba', 10, 2, 1),
(4, 'headhunter', 'HH', 10, 6, 2),
(5, 'larcher', NULL, 5, 5, 2),
(6, 'lartificier', 'lartificier', 7, 8, 2),
(7, 'roguiBalbao', 'elBoxor', 10, 10, 3);



CREATE TABLE typearme (
  idTypeArme int(11) NOT NULL,
  libelle varchar(60) NOT NULL,
  estDistance tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `typearme` (`idTypeArme`, `libelle`, `estDistance`) VALUES
(1, 'Hache', 0),
(2, 'Arc', 1),
(3, 'Epee', 0),
(4, 'Arbalete', 1),
(5, 'Masse', 0),
(6, 'Dague', 0);


ALTER TABLE arme
  ADD PRIMARY KEY (`idArme`),
  ADD KEY `FK_TYPE_ARME` (`idTypeArme`);


ALTER TABLE classe
  ADD PRIMARY KEY (`idClasse`);


ALTER TABLE dispose
  ADD PRIMARY KEY (`idPersonnage`,`idArme`),
  ADD KEY `FK_ARME` (`idArme`);


ALTER TABLE personnage
  ADD PRIMARY KEY (`idPersonnage`),
  ADD KEY `FK_CLASSE` (`idClasse`),
  ADD KEY `FK_ARME_UTILISE` (`idArmeUtilise`);


ALTER TABLE typearme
  ADD PRIMARY KEY (`idTypeArme`);


ALTER TABLE arme
  MODIFY `idArme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE classe
  MODIFY `idClasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE personnage
  MODIFY `idPersonnage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE typearme
  MODIFY `idTypeArme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE arme
  ADD CONSTRAINT `FK_TYPE_ARME` FOREIGN KEY (`idTypeArme`) REFERENCES `typearme` (`idTypeArme`);

ALTER TABLE dispose
  ADD CONSTRAINT `FK_ARME` FOREIGN KEY (`idArme`) REFERENCES `arme` (`idArme`),
  ADD CONSTRAINT `FK_PERSONNAGE` FOREIGN KEY (`idPersonnage`) REFERENCES `personnage` (`idPersonnage`);


ALTER TABLE personnage
  ADD CONSTRAINT `FK_ARME_UTILISE` FOREIGN KEY (`idArmeUtilise`) REFERENCES `arme` (`idArme`),
  ADD CONSTRAINT `FK_CLASSE` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`);
COMMIT;


