create database takalo;

select objet.id, objet.nom, objet.prix, objet.id_cat, objet.id_user, c.nom, li.lien from objet
join categorie c on c.id = objet.id_cat
join lien_image li on li.id_objet = objet.id
where objet.id not in (select p.idObject_demander
                       from echange
                       join proposition p on p.id = echange.idProposition)
and objet.id not in (select p.idObject_echanger
                      from echange
                               join proposition p on p.id = echange.idProposition);
select *
from lien_image;
create or replace view getObjetImage as
select li.id, id_objet, lien, nom, prix, id_cat, id_user
from lien_image li join objet o on o.id = li.id_objet;

create table echange(
    id int not null auto_increment primary key,
    idProposition int not null references proposition(id),
    userDemande int not null references client(id),
    userEchange int not null references client(id),
    date datetime,
    etat int
);

select *
from proposition p
join objet o on o.id = p.idObject_demander;

select objet.id idObjet, objet.nom nomObjet, objet.prix prix, objet.id_cat idCat, objet.id_user idUser, c.nom nomCat, li.lien lien, objet.id_user, c2.nom nomUser from objet
                                                                                                                                            join categorie c on c.id = objet.id_cat
                                                                                                                                            join lien_image li on li.id_objet = objet.id
                                                                                                                                            join client c2 on c2.id = objet.id_user
where (objet.id not in (select p.idObject_demander
                       from echange
                                join proposition p on p.id = echange.idProposition)
   or objet.id not in (select p.idObject_echanger
                       from echange
                                join proposition p on p.id = echange.idProposition))
    and objet.id_user=1;


    ///////////////////////
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
insert into proposition(idObject_proposer,idObject_demander)values(1,2);
insert into proposition(idObject_proposer,idObject_demander)values(2,1);
insert into proposition(idObject_proposer,idObject_demander)values(3,3);
insert into proposition(idObject_proposer,idObject_demander)values(5,4);

-- 
insert into lien_image(id_objet,lien)values(1,'LandCruiserV8.png');
insert into lien_image(id_objet,lien)values(2,'Touareg.png');
insert into lien_image(id_objet,lien)values(3,'VXR.png');
insert into lien_image(id_objet,lien)values(4,'Mac.png');
insert into lien_image(id_objet,lien)values(5,'AsusRog.png');
insert into lien_image(id_objet,lien)values(6,'AcerNitro.png');
insert into lien_image(id_objet,lien)values(7,'iphone.png');
insert into lien_image(id_objet,lien)values(8,'samsung.png');
insert into lien_image(id_objet,lien)values(9,'googlePixel.png');
-- 
 CREATE or REPLACE view recherche (id,nom,prix,id_cat,nomCat,id_user) as
 select o.id,o.nom,o.prix,o.id_cat,c.nom,o.id_user from  objet as o  JOIN
 categorie as c on  o.id_cat = c.id; 
 



