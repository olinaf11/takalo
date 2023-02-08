<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class AjoutCat_model extends CI_Model{
        public function ajout($nom){
            $sql = "insert  into categorie(nom)values('%s')";
            $sql = sprintf($sql, $nom);
            $query = $this->db->query($sql);

        }

    }