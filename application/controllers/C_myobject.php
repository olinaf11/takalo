<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_myobject extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('objet_model', 'objet');
    }
    public function index(){
        $data=array();
        $data['content']="User/myObject";
        $data['active']=3;
        $data['dropdown']="Categories";
        $data['listObjet'] = $this->objet->getObjectByUser($_SESSION['id']);
        $this->load->view('index',$data);
    }

}
?>