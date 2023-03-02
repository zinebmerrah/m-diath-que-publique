CREATE TABLE Adherent(
    code_adherent INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(25) NOT NULL,
    prenom VARCHAR(25) NOT NULL,
    adresse VARCHAR(225) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telephone VARCHAR(10) NOT NULL,
    CIN VARCHAR(8) NOT NULL,
    date_de_naissance VARCHAR(12) NOT NULL,
    type VARCHAR(20) NOT NULL,
    user_name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    date_creation_compte date NOT NULL,
    score VARCHAR(1) NOT NULL
);


CREATE TABLE Ouvrage (
  code_ouvrage INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  titre VARCHAR(30) NOT NULL,
  nom_auteur VARCHAR(30) NOT NULL,
  image VARCHAR(225) NOT NULL,
  etat VARCHAR(225) NOT NULL,
  type VARCHAR(20) NOT NULL,
  date_edition date NOT NULL,
  date_achat date NOT NULL,
  nombre_pages VARCHAR(5) NOT NULL
);

CREATE TABLE Gerant(
  code_gerant INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  user_name VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL 
);

CREATE TABLE Reservation (
  code_reservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  date_reservation date NOT NULL,
  code_adherent INT NOT NULL,
  code_ouvrage INT NOT NULL,  
  FOREIGN KEY (code_adherent) REFERENCES Adherent(code_adherent),
  FOREIGN KEY (code_ouvrage) REFERENCES Ouvrage(code_ouvrage)
);

CREATE TABLE Emprunt (
  code_emprunt INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  date_emprunt date NOT NULL,
  date_retour date NOT NULL,
  code_reservation INT NOT NULL,
  code_gerant_emprunt INT NOT NULL,
  code_gerant_retour INT NOT NULL,
  FOREIGN KEY (code_reservation) REFERENCES Reservation(code_reservation),
  FOREIGN KEY (code_gerant) REFERENCES Gerant(code_gerant),
  FOREIGN KEY (code_gerant_retour) REFERENCES Gerant(code_gerant)

);
