<?php

class Echange extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $data = array();
        $this->load->model('objet_model', 'objet');
        $this->load->model('echange_model', 'echange');
    }
    public function index(){
        $data['listEchange'] = $this->echange->getEchangeUser($_SESSION['id']);
        $this->load->view('listEchange', $data);
    }
    public function action(){
        $proposition=$this->input->get('proposition');
        $etat=$this->input->get('etat');
        $userDemande=$_SESSION['id'];
        $userEchange = $this->objet->getUserByProp($proposition);
        $this->db->insertEchange($proposition, $userDemande, $userEchange, $etat);
        redirect('echange');
    }
}