<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Objet_model extends CI_Model{
        
        public function get_all_object($id){
            $sql = "select * from objet where id_user=%s";
            $sql = sprintf($sql,$id);
            $query = $this->db->query($sql);
            return $query->result_array();

        }

    }