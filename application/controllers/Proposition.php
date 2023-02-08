<?php

class Proposition extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('objet_model', 'objet');
        $data = array();
    }
    public function index(){
        $data['myObject'] = $this->objet->getObjectByUser($_SESSION['id']);
        $this->load->view('proposition', $data);
    }
}