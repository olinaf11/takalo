<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model','login');
    }

    public function index(){
        $data=array();
        $data['content']="Login/login";
        $data['dropdown']="Log in";
        $data['active']=1;
        $this->load->view('index', $data);
    }

    public function log(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if (!$this->login->checkLogin($email, $password)){
            $_SESSION['erreur'] = "Erreur de mot de passe ou mail";
            redirect(base_url('login'));
        }else{
            $_SESSION['id'] = $this->login->getId($email, $password);
            redirect(base_url('accueil'));
        }
    }
}