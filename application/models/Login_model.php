<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Login_model extends CI_Model{
        public function checkLogin($mail, $password){
            $sql = "select * from user where email=%s and password=%s";
            $sql = sprintf($sql, $mail, $password);
            $query = $this->db->query($sql);
            $count = count($query->result_array());
            if ($count==0 || $count==null) return false;
            return true;
        }
        public function getId($mail, $password){
            $sql = "select * from user where email=%s and password=%s";
            $sql = sprintf($sql, $mail, $password);
            $query = $this->db->query($sql);
            return $query->row_array();
        }
    }