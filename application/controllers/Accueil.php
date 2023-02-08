<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accueil extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('objet_model', 'objet');
    }

    public function index(){
        if (!$_SESSION['id']){
            redirect('login');
        }
        $data=array();
        $data['content']="Accueil/accueil";
        $data['active']=0;
        $data['dropdown']="Categories";
        $data['listObjet'] = $this->objet->getAllObject();
        $data['categories'] = $this->objet->getCategorie();
        $this->load->view('index',$data);
    }
}
?>