<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class LoginAdmin_model extends CI_Model{
        public function checkLogin($mail, $password){
            $sql = "select * from admin where mail= '%s' and mdp='%s'";
            $sql = sprintf($sql, $mail, $password);
            $query = $this->db->query($sql);
                return $query->row_array();

        }

    }