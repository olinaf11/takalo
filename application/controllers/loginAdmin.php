<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class loginAdmin extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->model('logAdmin_model','logAdmin');
    }

    public function index(){
        $this->load->view('logAdmin');
    }

    public function log(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if (!$this->login->checkLogAdmin($email, $password)){
            $_SESSION['erreur'] = "Erreur de mot de passe ou mail";
            redirect(base_url('logAdmin'));
        }else{
            $_SESSION['id'] = $this->login->getId($email, $password);
            redirect(base_url('gestionObjet'));
        }
    }
}