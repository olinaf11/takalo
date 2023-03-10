<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{



    public function index(){
        $this->load->view('log');
    }
// 
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('login_model');
        $this->load->library('session');
    }
   // 
     public function traitForm(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array();
        $data = $this->login_model->checkLogin($email, $password);
        // $this->load->view('accueil',$data);
        if(!$data){
            $_SESSION['erreur'] = "Erreur de mot de passe ou mail";
            Redirect(base_url('login'));
        }else{
            $_SESSION['id'] = $data['id'];
            Redirect(base_url('login/load_acceuil'));
        }
    }

    public function load_acceuil(){
         $this->load->model('objet_model');
        $data['val'] = $this->objet_model->get_all_object($_SESSION['id']);
        // 
         $this->load->model('listeCat_model');
        $data['valiny'] = $this->listeCat_model->get_all_categorie();
        // 
        $this->load->model('objetAutre_model');
        $data['autre'] = $this->objetAutre_model->autre($_SESSION['id']);
        // 
        $this->load->view('acceuil',$data);

    }
   
public function traitmodif(){
$data['ide'] = $this->input->get('id');
$data['nom'] = $this->input->get('nom');
$data['prix'] = $this->input->get('prix');


$this->load->view('modif',$data);
}
public function donnermodif(){
        $nom = $this->input->get('nom');
        $prix = $this->input->get('prix');
        $id = $this->input->get('id');
         $this->load->model('modif_model');
         $this->modif_model->get_object_by_id($nom,$prix,$id);
        Redirect(base_url("login/load_acceuil"));

    }
public function controlDelete(){
         $this->load->model('delete_model');
         $this->delete_model->delete_by_id($this->input->get('id'));
         Redirect(base_url("login/load_acceuil"));

}
public function objetParCat(){

        $id = $this->input->get('idCat');
        $this->load->model('listeObjetParCat_model');
       $data['rep'] = $this->listeObjetParCat_model->get_all_objet($id);
        $this->load->view('listeObjet',$data);
}





}