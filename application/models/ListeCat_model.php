<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class ListeCat_model extends CI_Model{
        public function get_all_categorie(){
            $sql = "select * from categorie";
           $query = $this->db->query($sql);
           return $query->result_array();

        }

    }