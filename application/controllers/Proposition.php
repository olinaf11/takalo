<?php

class Proposition extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('objet_model', 'objet');
        $this->load->model('proposition_model', 'proposition');
        $data = array();
    }
    public function index(){
        $data['myObject'] = $this->objet->getObjectByUser($_SESSION['id']);
        $this->load->view('proposition', $data);
    }
    public function saveProp(){
        $objetDemander=$this->input->get('objet');
        $objetProposer=$this->objet->getObjectByUser($_SESSION['user']);
        $this->proposition->insert($objetProposer, $objetDemander);
    }
}