<?php

class SignUp extends CI_Controller{
    public function __construct(){
        $this->load->model('signUp_model','signup');
    }
    public function index(){
        $this->load->view('signUp');
    }
    public function sign(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->signup->insert($email, $password);
        redirect('login');
    }
}