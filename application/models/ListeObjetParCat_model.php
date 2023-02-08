<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class ListeObjetParCat_model extends CI_Model{
        
        public function get_all_objet($id){
            // $sql = "select * from objet where id_user=%s";
            $sql = "select *from objet where id_cat = %s ;";
            $sql = sprintf($sql,$id);
           $query = $this->db->query($sql);
           return $query->result_array();

        }

    }