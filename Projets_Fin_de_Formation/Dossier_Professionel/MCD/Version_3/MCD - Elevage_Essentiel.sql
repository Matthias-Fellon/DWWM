#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Portee
#------------------------------------------------------------

CREATE TABLE Portee(
        ID_Portee      Int  Auto_increment  NOT NULL ,
        Nombre_Chatons Int
	,CONSTRAINT Portee_PK PRIMARY KEY (ID_Portee)
)ENGINE=InnoDB;


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
        Resultat Blob NOT NULL
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
        Telephone   Numeric ,
        Email       Varchar (150)
	,CONSTRAINT Personne_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Eleveur
#------------------------------------------------------------

CREATE TABLE Eleveur(
        ID_Personne  Int NOT NULL ,
        Nom_Elevage  Varchar (50) ,
        Numero_Siret Numeric ,
        Description  Text ,
        Nom          Varchar (50) ,
        Prenom       Varchar (50) ,
        Adresse      Varchar (150) ,
        Telephone    Numeric ,
        Email        Varchar (150)
	,CONSTRAINT Eleveur_PK PRIMARY KEY (ID_Personne)

    ,CONSTRAINT Eleveur_Personne0_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Adoptant
#------------------------------------------------------------

CREATE TABLE Adoptant(
        ID_Personne   Int NOT NULL ,
        Date_Adoption Date ,
        Nom           Varchar (50) ,
        Prenom        Varchar (50) ,
        Adresse       Varchar (150) ,
        Telephone     Numeric ,
        Email         Varchar (150)
	,CONSTRAINT Adoptant_PK PRIMARY KEY (ID_Personne)
    
    ,CONSTRAINT Adoptant_Personne0_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Privilege
#------------------------------------------------------------

CREATE TABLE Privilege(
        ID_Privilege Int  Auto_increment  NOT NULL ,
        Nom          Varchar (50) NOT NULL
	,CONSTRAINT Privilege_PK PRIMARY KEY (ID_Privilege)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        ID_Personne  Int NOT NULL ,
        Mot_De_Passe Varchar (255) NOT NULL ,
        Nom          Varchar (50) ,
        Prenom       Varchar (50) ,
        Adresse      Varchar (150) ,
        Telephone    Numeric ,
        Email        Varchar (150) ,
        ID_Privilege Int NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (ID_Personne)

    ,CONSTRAINT Utilisateur_Personne0_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
    ,CONSTRAINT Utilisateur_Privilege1_FK FOREIGN KEY (ID_Privilege) REFERENCES Privilege(ID_Privilege)
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
        Image    Blob NOT NULL
	,CONSTRAINT Image_PK PRIMARY KEY (ID_Image)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal
#------------------------------------------------------------

CREATE TABLE Animal(
        ID_Animal                    Int  Auto_increment  NOT NULL ,
        Nom                          Varchar (50) ,
        Espece                       Varchar (50) NOT NULL ,
        Race                         Varchar (50) ,
        Date_Naissance               Date ,
        Sexe                         Char (1) ,
        Image                        Blob ,
        Puce_Electronique            Varchar (30) ,
        Livre_Origine                Varchar (30) ,
        ADN                          Varchar (30) ,
        Statut                       Varchar (30) ,
        Date_Naissance_Animal_Portee Date ,
        Date_Adoption                Date NOT NULL ,
        ID_Portee                    Int NOT NULL ,
        ID_Animal_A_Pour_Mere        Int ,
        ID_Animal_A_Pour_Pere        Int ,
        ID_Personne                  Int NOT NULL
	,CONSTRAINT Animal_PK PRIMARY KEY (ID_Animal)

    ,CONSTRAINT Animal_Portee0_FK FOREIGN KEY (ID_Portee) REFERENCES Portee(ID_Portee)
	,CONSTRAINT Animal_Animal1_FK FOREIGN KEY (ID_Animal_A_Pour_Mere) REFERENCES Animal(ID_Animal)
	,CONSTRAINT Animal_Animal2_FK FOREIGN KEY (ID_Animal_A_Pour_Pere) REFERENCES Animal(ID_Animal)
	,CONSTRAINT Animal_Personne3_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Effectuer
#------------------------------------------------------------

CREATE TABLE Effectuer(
        ID_Test   Int NOT NULL ,
        ID_Animal Int NOT NULL
	,CONSTRAINT Effectuer_PK PRIMARY KEY (ID_Test,ID_Animal)

    ,CONSTRAINT Effectuer_Test0_FK FOREIGN KEY (ID_Test) REFERENCES Test(ID_Test)
	,CONSTRAINT Effectuer_Animal1_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal_Vaccin
#------------------------------------------------------------

CREATE TABLE Animal_Vaccin(
        ID_Vaccin           Int NOT NULL ,
        ID_Animal           Int NOT NULL ,
        Date_Administration Date NOT NULL
	,CONSTRAINT Animal_Vaccin_PK PRIMARY KEY (ID_Vaccin,ID_Animal)

    ,CONSTRAINT Animal_Vaccin_Vaccin0_FK FOREIGN KEY (ID_Vaccin) REFERENCES Vaccin(ID_Vaccin)
	,CONSTRAINT Animal_Vaccin_Animal1_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal_Titre
#------------------------------------------------------------

CREATE TABLE Animal_Titre(
        ID_Titre  Int NOT NULL ,
        ID_Animal Int NOT NULL ,
        Date      Date NOT NULL
	,CONSTRAINT Animal_Titre_PK PRIMARY KEY (ID_Titre,ID_Animal)

    ,CONSTRAINT Animal_Titre_Titre0_FK FOREIGN KEY (ID_Titre) REFERENCES Titre(ID_Titre)
	,CONSTRAINT Animal_Titre_Animal1_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal_Image
#------------------------------------------------------------

CREATE TABLE Animal_Image(
        ID_Image  Int NOT NULL ,
        ID_Animal Int NOT NULL
	,CONSTRAINT Animal_Image_PK PRIMARY KEY (ID_Image,ID_Animal)

    ,CONSTRAINT Animal_Image_Image0_FK FOREIGN KEY (ID_Image) REFERENCES Image(ID_Image)
	,CONSTRAINT Animal_Image_Animal1_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
)ENGINE=InnoDB;