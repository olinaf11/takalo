<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Login_model extends CI_Model{
        public function checkLogin($mail, $password){
            $sql = "select * from client where mail= '%s' and mdp='%s'";
            $sql = sprintf($sql, $mail, $password);
            $query = $this->db->query($sql);
            // if($row!=null){
                return $query->row_array();
            // }
            // $count = count($query->result_array());
            // if ($count==0 || $count==null) return false;
            // return true;
        }

    }