<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Delete_model extends CI_Model{
        
        public function delete_by_id($id){
            // $sql = "select * from objet where id_user=%s";
            $sql = "delete from objet where id = %s";
            $sql = sprintf($sql,$id);
            $query = $this->db->query($sql);

        }

    }