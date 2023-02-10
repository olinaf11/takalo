<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller{
    
    public function index(){
        $this->load->view('indexAdmin');
    }
      public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('loginAdmin_model');
        $this->load->library('session');
    }
  public function traitForm(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array();
        $data = $this->loginAdmin_model->checkLogin($email, $password);
        // $this->load->view('accueil',$data);
        if(!$data){
            $_SESSION['erreur'] = "Erreur de mot de passe ou mail";
            Redirect(base_url('loginAdmin'));
        }else{
            $_SESSION['id'] = $data['id'];
            Redirect(base_url('loginAdmin/load_home'));
        }
    }
    public function load_home(){
        $this->load->model('listeCat_model');
        $data = array();
        $data['valiny'] =$this->listeCat_model->get_all_categorie();
    	$this->load->view('acceuilAdmin',$data);
    	// $this->load->view('acceuilAdmin');
    }
    public function ajoutCat(){
    	 $nom =$this->input->get('categorie');
        $this->load->model('ajoutCat_model');
        $this->ajoutCat_model->ajout($nom);
        Redirect(base_url('loginAdmin/load_home'));

    }
    public function deleteCat(){
        $id =$this->input->get('id');
       $this->load->model('deleteCat_model');
       $this->deleteCat_model->delete($id);
       Redirect(base_url('loginAdmin/load_home'));

   }
   public function rechercher(){
    $mot =$this->input->get('mot');
    $cat = $this->input->get('cat');
    // 
    $this->load->model('listeCat_model');
    $data = array();
    $data['valiny'] =$this->listeCat_model->get_all_categorie();
    // 
   $this->load->model('recherche_model');
    $data['R'] = $this->recherche_model->rechercher($mot,$cat);
    // 
    $this->load->view('acceuilAdmin',$data);
}
}