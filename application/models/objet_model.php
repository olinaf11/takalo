<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Objet_model extends CI_Model{
        
        public function get_all_object($id){
            $sql = "select * from objet where id_user=%s";
            $sql = sprintf($sql,$id);
            $query = $this->db->query($sql);
            return $query->result_array();

<<<<<<< HEAD
        }
=======
class Objet_model extends CI_Model{
    public function getAllObject(){
        $sql = "select objet.id idObjet, objet.nom nomObjet, objet.prix prix, objet.id_cat idCat, objet.id_user idUser, c.nom nomCat, li.lien lien, objet.id_user, c2.nom nomUser from objet
                    join categorie c on c.id = objet.id_cat
                    join lien_image li on li.id_objet = objet.id     
                    join client c2 on c2.id = objet.id_user                                                                                                                                    
                    where (objet.id not in (select p.idObject_demander
                                           from echange
                                           join proposition p on p.id = echange.idProposition)
                    and objet.id not in (select p.idObject_echanger
                                          from echange
                                                   join proposition p on p.id = echange.idProposition)";
        $requete = $this->db->query($sql);
        return $requete->result_array();
    }
    public function getCategorie(){
        $requete = $this->db->get('categorie');
        return $requete->result_array();
    }
    public function getObjectByUser($user){
        $sql = "select objet.id idObjet, objet.nom nomObjet, objet.prix prix, objet.id_cat idCat, objet.id_user idUser, c.nom nomCat, li.lien lien, objet.id_user, c2.nom nomUser from objet
                    join categorie c on c.id = objet.id_cat
                    join lien_image li on li.id_objet = objet.id     
                    join client c2 on c2.id = objet.id_user                                                                                                                                    
                    where (objet.id not in (select p.idObject_demander
                                           from echange
                                           join proposition p on p.id = echange.idProposition)
                    or objet.id not in (select p.idObject_echanger
                                          from echange
                                                   join proposition p on p.id = echange.idProposition))
                    and objet.id_user=%d";
        $sql = sprintf($sql, $user);
        $requete = $this->db->query($sql);
        return $requete->result_array();
    }
    public function getObjetByIdobj($objet){
        $sql = "select objet.id idObjet, objet.nom nomObjet, objet.prix prix, objet.id_cat idCat, objet.id_user idUser, c.nom nomCat, li.lien lien, objet.id_user, c2.nom nomUser from objet
                    join categorie c on c.id = objet.id_cat
                    join lien_image li on li.id_objet = objet.id     
                    join client c2 on c2.id = objet.id_user                                                                                                                                    
                    where (objet.id not in (select p.idObject_demander
                                           from echange
                                           join proposition p on p.id = echange.idProposition)
                    or objet.id not in (select p.idObject_echanger
                                          from echange
                                                   join proposition p on p.id = echange.idProposition))
                    and objet.id=%d";
        $sql = sprintf($sql, $objet);
        $requete = $this->db->query($sql);
        return $requete->row_array();
    }
>>>>>>> 20f0f0d5e4afe447abea8f447611c1430688f1d9

    }