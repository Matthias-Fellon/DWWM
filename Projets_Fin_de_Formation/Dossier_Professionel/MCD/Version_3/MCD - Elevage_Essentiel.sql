#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Vaccin
#------------------------------------------------------------

CREATE TABLE Vaccin(
        ID_Vaccin Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) NOT NULL
	,CONSTRAINT Vaccin_PK PRIMARY KEY (ID_Vaccin)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Test
#------------------------------------------------------------

CREATE TABLE Test(
        ID_Test  Int  Auto_increment  NOT NULL ,
        Nom      Varchar (50) ,
        Resultat Varchar (50) NOT NULL
	,CONSTRAINT Test_PK PRIMARY KEY (ID_Test)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Personne
#------------------------------------------------------------

CREATE TABLE Personne(
        ID_Personne Int  Auto_increment  NOT NULL ,
        Nom         Varchar (50) ,
        Prenom      Varchar (50) ,
        Adresse     Varchar (150) ,
        Telephone   Varchar (15) ,
        Email       Varchar (150)
	,CONSTRAINT Personne_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Eleveur
#------------------------------------------------------------

CREATE TABLE Eleveur(
        ID_Personne  Int NOT NULL ,
        Nom_Elevage  Varchar (50) ,
        Numero_Siret Varchar (30) NOT NULL ,
        Description  Text NOT NULL ,
        Nom          Varchar (50) ,
        Prenom       Varchar (50) ,
        Adresse      Varchar (150) ,
        Telephone    Varchar (15) ,
        Email        Varchar (150)
	,CONSTRAINT Eleveur_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Adoptant
#------------------------------------------------------------

CREATE TABLE Adoptant(
        ID_Personne Int NOT NULL ,
        Description Varchar (50) NOT NULL ,
        Nom         Varchar (50) ,
        Prenom      Varchar (50) ,
        Adresse     Varchar (150) ,
        Telephone   Varchar (15) ,
        Email       Varchar (150)
	,CONSTRAINT Adoptant_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Privilege
#------------------------------------------------------------

CREATE TABLE Privilege(
        ID_Privilege Int  Auto_increment  NOT NULL ,
        Nom          Varchar (50) NOT NULL
	,CONSTRAINT Privilege_PK PRIMARY KEY (ID_Privilege)
)ENGINE=InnoDB COMMENT "SuperAdministrateur Administrateur Utilisateur" ;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        ID_Personne  Int NOT NULL ,
        Mot_De_Passe Varchar (255) ,
        Nom          Varchar (50) ,
        Prenom       Varchar (50) ,
        Adresse      Varchar (150) ,
        Telephone    Varchar (15) ,
        Email        Varchar (150) ,
        ID_Privilege Int NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Titre
#------------------------------------------------------------

CREATE TABLE Titre(
        ID_Titre Int  Auto_increment  NOT NULL ,
        Nom      Varchar (30) NOT NULL
	,CONSTRAINT Titre_PK PRIMARY KEY (ID_Titre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Image
#------------------------------------------------------------

CREATE TABLE Image(
        ID_Image Int  Auto_increment  NOT NULL ,
        Image    Varchar (50) NOT NULL
	,CONSTRAINT Image_PK PRIMARY KEY (ID_Image)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat
#------------------------------------------------------------

CREATE TABLE Chat(
        ID_Animal                  Int  Auto_increment  NOT NULL ,
        Nom                        Varchar (50) ,
        Race                       Varchar (50) NOT NULL ,
        Date_Naissance             Date NOT NULL ,
        Sexe                       Char (1) NOT NULL ,
        Image                      Varchar (50) NOT NULL ,
        Puce_Electronique          Varchar (30) NOT NULL ,
        Livre_Origine              Varchar (30) NOT NULL ,
        ADN                        Varchar (30) NOT NULL ,
        Statut                     Varchar (30) ,
        Date_Adoption              Date NOT NULL ,
        ID_Animal_Chat             Int ,
        ID_Animal_Chat_A_Pour_Pere Int ,
        ID_Personne                Int NOT NULL
	,CONSTRAINT Chat_PK PRIMARY KEY (ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Test
#------------------------------------------------------------

CREATE TABLE Chat_Test(
        ID_Test   Int NOT NULL ,
        ID_Animal Int NOT NULL
	,CONSTRAINT Chat_Test_PK PRIMARY KEY (ID_Test,ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Vaccin
#------------------------------------------------------------

CREATE TABLE Chat_Vaccin(
        ID_Vaccin           Int NOT NULL ,
        ID_Animal           Int NOT NULL ,
        Date_Administration Date NOT NULL
	,CONSTRAINT Chat_Vaccin_PK PRIMARY KEY (ID_Vaccin,ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Titre
#------------------------------------------------------------

CREATE TABLE Chat_Titre(
        ID_Titre  Int NOT NULL ,
        ID_Animal Int NOT NULL ,
        Date      Date NOT NULL
	,CONSTRAINT Chat_Titre_PK PRIMARY KEY (ID_Titre,ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Image
#------------------------------------------------------------

CREATE TABLE Chat_Image(
        ID_Image  Int NOT NULL ,
        ID_Animal Int NOT NULL
	,CONSTRAINT Chat_Image_PK PRIMARY KEY (ID_Image,ID_Animal)
)ENGINE=InnoDB;




ALTER TABLE Eleveur
	ADD CONSTRAINT Eleveur_Personne0_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Adoptant
	ADD CONSTRAINT Adoptant_Personne0_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Utilisateur
	ADD CONSTRAINT Utilisateur_Personne0_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Utilisateur
	ADD CONSTRAINT Utilisateur_Privilege1_FK
	FOREIGN KEY (ID_Privilege)
	REFERENCES Privilege(ID_Privilege);

ALTER TABLE Chat
	ADD CONSTRAINT Chat_Chat0_FK
	FOREIGN KEY (ID_Animal_Chat)
	REFERENCES Chat(ID_Animal);

ALTER TABLE Chat
	ADD CONSTRAINT Chat_Chat1_FK
	FOREIGN KEY (ID_Animal_Chat_A_Pour_Pere)
	REFERENCES Chat(ID_Animal);

ALTER TABLE Chat
	ADD CONSTRAINT Chat_Personne2_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Chat_Test
	ADD CONSTRAINT Chat_Test_Test0_FK
	FOREIGN KEY (ID_Test)
	REFERENCES Test(ID_Test);

ALTER TABLE Chat_Test
	ADD CONSTRAINT Chat_Test_Chat1_FK
	FOREIGN KEY (ID_Animal)
	REFERENCES Chat(ID_Animal);

ALTER TABLE Chat_Vaccin
	ADD CONSTRAINT Chat_Vaccin_Vaccin0_FK
	FOREIGN KEY (ID_Vaccin)
	REFERENCES Vaccin(ID_Vaccin);

ALTER TABLE Chat_Vaccin
	ADD CONSTRAINT Chat_Vaccin_Chat1_FK
	FOREIGN KEY (ID_Animal)
	REFERENCES Chat(ID_Animal);

ALTER TABLE Chat_Titre
	ADD CONSTRAINT Chat_Titre_Titre0_FK
	FOREIGN KEY (ID_Titre)
	REFERENCES Titre(ID_Titre);

ALTER TABLE Chat_Titre
	ADD CONSTRAINT Chat_Titre_Chat1_FK
	FOREIGN KEY (ID_Animal)
	REFERENCES Chat(ID_Animal);

ALTER TABLE Chat_Image
	ADD CONSTRAINT Chat_Image_Image0_FK
	FOREIGN KEY (ID_Image)
	REFERENCES Image(ID_Image);

ALTER TABLE Chat_Image
	ADD CONSTRAINT Chat_Image_Chat1_FK
	FOREIGN KEY (ID_Animal)
	REFERENCES Chat(ID_Animal);