<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_myobject extends CI_Controller{

    public function index(){
        $data=array();
        $data['content']="User/myObject";
        $this->load->view('accueil',$data);
    }

}
?>