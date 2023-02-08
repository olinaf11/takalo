<?php

class echange_model extends CI_Model{
    public function getEchangeUser($user){
        $sql = "select * from echange where userEchange=%i";
        $sql = sprintf($sql, $user);
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function insertEchange($proposition, $userDemande, $userEchange, $etat){
        $sql = "insert into echange(idProposition, userDemande, userEchange, date, etat) values (%i,%i,%i,now,%i)";
        $sql = sprintf($sql, $proposition, $userDemande, $userEchange, $etat);
        $this->db->query($sql);
        $this->db->affected_rows();
    }
    public function getUserByProp($proposition){
        $sql = "select o.id_user as id from proposition p join objet o on o.id = p.idObject_echanger where p.id=%i";
        $sql = sprintf($sql, $proposition);
        $this->db->query($sql);
        return $this->db->result_array()['id'];
    }
}