<?php

class Login extends CI_Controller{

    public function __construct(){
        $this->load->model('login_model','login');
    }

    public function index(){
        $this->load->view('login');
    }

    public function log(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if (!$this->login->checkLogin($email, $password)){
            $_SESSION['erreur'] = "Erreur de mot de passe ou mail";
            redirect(base_url('login'));
        }else{
            redirect(base_url('accueil'));
        }
    }
}