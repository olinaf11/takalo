<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_categorie extends CI_Controller{

    public function index(){
        $data=array();
        $data['content']="Details/categorie";
        $this->load->view('accueil',$data);
    }

}
?>