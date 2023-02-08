<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Modif_model extends CI_Model{
        
        public function get_object_by_id($nom,$prix,$id){
            // $sql = "select * from objet where id_user=%s";
            $sql = "update objet set nom = '%s', prix = '%s' where id = %s";
            $sql = sprintf($sql,$nom,$prix,$id);
            $query = $this->db->query($sql);

        }

    }