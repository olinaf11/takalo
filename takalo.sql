create database takalo;
create or replace view objetCat(idObjet, nom, prix, idcat, iduser, nomCat) as
select objet.id, objet.nom, objet.prix, objet.id_cat, objet.id_user, c.nom from objet
join categorie c on c.id = objet.id_cat;

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