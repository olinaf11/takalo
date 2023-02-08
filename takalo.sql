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