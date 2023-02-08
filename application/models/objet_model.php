<?php

class Objet_model extends CI_Model{
    public function getAllObject(){
        $requete = $this->db->get('objetCat');
        return $requete->result_array();
    }
    public function getCategorie(){
        $requete = $this->db->get('categorie');
        return $requete->result_array();
    }
    public function getObjectByUser($user){
        $sql = "select * from objet where id_user=%i";
        $sql = sprintf($sql, $user);
        $requete = $this->db->query($sql);
        return $requete->result_array();
    }
    public function getObjetByIdobj($objet){
        $sql = "select * from objet where id=%i";
        $sql = sprintf($sql, $objet);
        $requete = $this->db->query($sql);
        return $requete->row_array();
    }

}
