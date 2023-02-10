<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class ObjetAutre_model extends CI_Model{
        public function autre($id){
            $sql = "select  * from objet where id!=$id";
           $query = $this->db->query($sql);
           return $query->result_array();

        }

    }