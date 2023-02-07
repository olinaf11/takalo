<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accueil extends CI_Controller{
    public function index(){
        if (!$_SESSION['id']){
            redirect('login');
        }
        $data=array();
        $data['content']="Accueil/accueil";
        $data['active']=0;
        $data['dropdown']="Categories";
        $this->load->view('index',$data);
    }
}
?>