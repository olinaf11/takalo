<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignUp extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('signUp_model','signup');
        $this->load->helper('sign_helper');
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
        if ($this->signup->getUserByMail($email)>0){
            echo json_encode(false);
        }else{
            $this->signup->insert($email, $password, $name);
            echo json_encode(true);
        }
    }
}