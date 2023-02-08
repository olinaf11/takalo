<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_modifier extends CI_Controller{

    public function index(){
        $data=array();
        $data['content']="User/Modifier";
        $this->load->view('accueil',$data);
    }

}
?>