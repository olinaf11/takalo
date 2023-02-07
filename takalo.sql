drop database takalo;
create database takalo;

create database takalo;
use takalo;
create TABLE admin(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    mdp VARCHAR(250) NOT NULL ,
    mail VARCHAR(250) NOT NULL
);
create TABLE client(
     id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    mdp VARCHAR(250) NOT NULL ,
    mail VARCHAR(250) NOT NULL
);


 CREATE TABLE categorie(
     id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(250) NOT NULL
 );
  CREATE TABLE objet(
     id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
     nom VARCHAR(250) NOT NULL,
     prix FLOAT NOT NULL,
     id_cat int REFERENCES categorie(id),
     id_user INT REFERENCES client(id)

  );

  CREATE TABLE lien_image(
      id  int  PRIMARY KEY NOT NULL AUTO_INCREMENT,
      id_objet INT REFERENCES objet(id),
      lien VARCHAR(250) not null

  );
   CREATE TABLE proposition(
       id  int PRIMARY KEY NOT NULL AUTO_INCREMENT,
       idObject_proposer int NOT NULL REFERENCES objet(id),
       idObject_demander int  not null REFERENCES objet(id)
   );


insert into admin(mdp,mail)values('admin','admin@gmail.com');
-- 
insert into client(mdp,mail)values('fanilo','fanilo@gmail.com');
insert into client(mdp,mail)values('elysee','elysee@gmail.com');
insert into  client(mdp,mail)values('sabi','sabi@gmail.com');
-- 
insert into categorie(nom)values('voiture');
insert into categorie(nom)values('ordinateur');
insert into categorie(nom)values('telephone');
-- 
insert into objet(nom,prix,id_cat,id_user) value('LandCruiserV8','100',1,1);
insert into objet(nom,prix,id_cat,id_user) value('Touareg','100',1,2);
insert into objet(nom,prix,id_cat,id_user) value('VXR','100',1,3);
-- 
insert into objet(nom,prix,id_cat,id_user) value('Mac','200',2,1);
insert into objet(nom,prix,id_cat,id_user) value('AsusRog','200',2,2);
insert into objet(nom,prix,id_cat,id_user) value('AcerNitro','200',2,3);
-- 
insert into objet(nom,prix,id_cat,id_user) value('iphone','300',3,1);
insert into objet(nom,prix,id_cat,id_user) value('samsung','300',3,2);
insert into objet(nom,prix,id_cat,id_user) value('googlePixel','300',3,3);
-- 
-- insert into proposition(idObject_proposer,idObject_demander)values(1,2);
-- insert into proposition(idObject_proposer,idObject_demander)values(2,1);
-- insert into proposition(idObject_proposer,idObject_demander)values(3,3);
-- insert into proposition(idObject_proposer,idObject_demander)values(5,4);

-- lien_image
insert into lien_image(id_objet,lien)values(1,'LandCruiserV8.png');
insert into lien_image(id_objet,lien)values(2,'Touareg.png');
insert into lien_image(id_objet,lien)values(3,'VXR.png');
insert into lien_image(id_objet,lien)values(4,'Mac.png');
insert into lien_image(id_objet,lien)values(5,'AsusRog.png');
insert into lien_image(id_objet,lien)values(6,'AcerNitro.png');
insert into lien_image(id_objet,lien)values(7,'iphone.png');
insert into lien_image(id_objet,lien)values(8,'samsung.png');
insert into lien_image(id_objet,lien)values(9,'googlePixel.png');



