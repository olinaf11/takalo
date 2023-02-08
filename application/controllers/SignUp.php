<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignUp extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('signUp_model','signup');
    }

    public function index(){
        $data=array();
        $data['content']="signup/signup";
        $data['dropdown']="Sign up";
        $data['active']=1;
        $this->load->view('index', $data);
    }
    public function sign(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $this->signup->insert($email, $password, $name);
        redirect('login');
    }
}