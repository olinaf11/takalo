<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('objet_model', 'objet');
    }
    public function index(){
        $data=array();
        $data['content']="Details/details";
        $data['active']=3;
        $data['dropdown']="Categories";
        $idobjet = $this->input->get('idObjet');
        $data['objet']=$this->objet->getObjetByIdobj($idobjet);
        $this->load->view('index',$data);
    }
}
?>