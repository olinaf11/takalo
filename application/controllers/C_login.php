<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller{

    public function index(){
        $this->load->view('Login/login');
    }

}
?>