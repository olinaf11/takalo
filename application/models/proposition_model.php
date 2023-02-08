<?php

class proposition_model extends CI_Model{
    public function insert($objProposer, $obj_demander){
        $sql = "insert into proposition(idObject_proposer, idObject_demander) values (%i,%i)";
        $sql = sprintf($sql, $objProposer, $obj_demander);
        $this->db->query($sql);
        $this->db->affected_rows();
    }
}