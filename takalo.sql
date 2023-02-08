create database takalo;
create or replace view objetCat(idObjet, nom, prix, idcat, iduser, nomCat) as
select objet.id, objet.nom, objet.prix, objet.id_cat, objet.id_user, c.nom from objet
join categorie c on c.id = objet.id_cat;

create or replace view getObjetImage as
select li.id, id_objet, lien, nom, prix, id_cat, id_user
from lien_image li join objet o on o.id = li.id_objet;