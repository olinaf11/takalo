<?php

class proposition_model extends CI_Model{
    public function insert($objEchanger, $obj_demander){
        $sql = "insert into proposition(idObject_echanger, idObject_demander, date) values (%i,%i,now)";
        $sql = sprintf($sql, $objEchanger, $obj_demander);
        $this->db->query($sql);
        $this->db->affected_rows();
    }
}