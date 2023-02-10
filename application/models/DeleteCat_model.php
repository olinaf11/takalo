<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class DeleteCat_model extends CI_Model{
        public function delete($id){
            $sql = "DELETE FROM categorie where id = %s";
            $sql = sprintf($sql, $id);
            $query = $this->db->query($sql);

        }

    }