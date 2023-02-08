<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detail extends CI_Controller{

    public function index(){
        $data=array();
        $data['content']="Details/details";
        $this->load->view('accueil',$data);
    }

}
?>