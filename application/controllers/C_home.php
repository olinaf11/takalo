<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller{

    public function index(){
        $data=array();
        $data['content']="Accueil/index";
        $this->load->view('accueil',$data);
    }

}
?>