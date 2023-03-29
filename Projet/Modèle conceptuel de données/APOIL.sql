DROP DATABASE IF EXISTS apoils;
CREATE DATABASE apoils;
USE apoils;

/*DROP TABLE IF EXISTS Animal;
DROP TABLE IF EXISTS Espece;
DROP TABLE IF EXISTS Race ;
DROP TABLE IF EXISTS Utilisateur;
DROP TABLE IF EXISTS Agir;
*/

CREATE TABLE Utilisateur(
	id INT PRIMARY KEY,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    age INT,
    mail VARCHAR(20),
    telephone CHAR(10),
    role_u VARCHAR(20),
    mdp VARCHAR(50),
    photo_id VARCHAR(100)
);

SELECT * FROM Animal;

CREATE TABLE Espece(
	id INT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE Race(
	id INT PRIMARY KEY,
	nom_r VARCHAR(50),
	idEspece INT,
    particularite_physique VARCHAR(90),
    esperance_vie INT,
    education VARCHAR(90),
    activite_physique VARCHAR(200),
    entretien_hygiene VARCHAR(200),
    res_race text, /* résumé sur la ce ra	*/
    FOREIGN KEY fk_idEspece(idEspece) REFERENCES Espece(id)
);


CREATE TABLE Animal(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    idEspece INT,
    idRace INT,
    age INT,
    adjectif VARCHAR(50),
    prix INT,
	etat_sante VARCHAR(50),
    photo text,
    idUti INT,
   
    FOREIGN KEY fk_iduti(idUti) REFERENCES Utilisateur(id),
    FOREIGN KEY fk_idrace(idRace) REFERENCES Race(id),
	FOREIGN KEY fk_idesp(idEspece) REFERENCES Espece(id)
);

SELECT * FROM Utilisateur;

INSERT INTO Utilisateur VALUES(12,"Henry", "Bizou", 25,"didier@gmail.com","0660504522","adoptant","vivelesanimaux","image.jpg");
INSERT INTO Utilisateur VALUES(48,"Douglas", "Le Normand", 185,"prout@gmail.com","0760504522","detenteur","monmdp","image.jpg");
INSERT INTO Utilisateur VALUES(77,"Doman", "Le Norvégien", 12,"prut@gmail.com","076050522","adoptant","monmdp","image.jpg");
INSERT INTO Espece VALUES (01,"Chien");
INSERT INTO Espece VALUES (02,"Chat");
INSERT INTO Espece VALUES (03,"Oiseau");
INSERT INTO Espece VALUES (04,"Dinosaure");

INSERT INTO Race VALUES (01,"Berger allemand",1,"Poilu", 15, "bonne", "bcp", "longtemps");
INSERT INTO Race VALUES (02,"Berger angalis",1,"Gros", 150, "bonne", "bcp", "longtemps");
INSERT INTO Race VALUES (07,"Rotweiler",1,"Gros", 150, "bonne", "bcp", "longtemps");
INSERT INTO Race VALUES (03,"Chat americain",2,"Gros", 150, "bonne", "bcp", "longtemps");

SELECT * FROM Race;

SELECT R.nom FROM Race R, Espece E WHERE R.idEspece=E.id AND E.nom="Chien";



