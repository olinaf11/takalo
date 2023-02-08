<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class signUp_model extends CI_Model{
    public function insert($email, $password, $name){
        $sql = "insert into client(mdp,mail,nom) values ('%s','%s','%s')";
        $sql = sprintf($sql, $password, $email, $name);
        $this->db->query($sql);
        $this->db->affected_rows();
    }
    public function getUserByMail($email){
        $query = $this->db->get_where('client', array('mail'=>$email));
        return count($query->result_array());
    }
}