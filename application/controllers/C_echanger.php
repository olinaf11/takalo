<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_echanger extends CI_Controller{

    public function index(){
        $data=array();
        $data['content']="User/Echanger";
        $this->load->view('accueil',$data);
    }

}
?>