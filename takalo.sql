create database takalo;
create or replace view objetCat(idObjet, nom, prix, idcat, iduser, nomCat) as
select objet.id, objet.nom, objet.prix, objet.id_cat, objet.id_user, c.nom from objet
join categorie c on c.id = objet.id_cat;