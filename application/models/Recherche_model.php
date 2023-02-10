<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Recherche_model extends CI_Model{
        public function rechercher($motcles,$categorie){
            $sql = "select nom from recherche where nom  like'%$motcles%'and nomCat = '$categorie' ";
           $query = $this->db->query($sql);
           return $query->result_array();

        }

    }