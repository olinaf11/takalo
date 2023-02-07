<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignUp extends CI_Controller{
    public function index(){
        $data=array();
        $data['content']="signup/signup";
        $data['dropdown']="Sign up";
        $data['active']=1;
        $this->load->view('index', $data);
    }
    public function sign(){
        $this->load->model('signUp_model','signup');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->signup->insert($email, $password);
        redirect('login');
    }
}