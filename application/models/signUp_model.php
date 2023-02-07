<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class signUp_model extends CI_Model{
    public function insert($email, $password){
        $sql = "insert into user(email,password) values (%s,%s)";
        $sql = sprintf($sql, $email, $password);
        $this->db->query($sql);
        $this->db->affected_rows();
    }
}