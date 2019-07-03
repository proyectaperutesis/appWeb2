<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_perfil_pl extends MX_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');        
        $this->load->model('M_utils');
        /*$sesionU = $this->session->userdata('id_usuario');
        if (empty($sesionU)) {
            redirect('/');
        }*/
    }

    public function index()
    {
        $this->load->view('V_perfil_pl');
    }

    function getAllDataProfile() {
        $id = $this->input->post('c');
        $data = $this->M_utils->buscarProyectoLey(null, $id, null);
        echo json_encode($data);
    }

    function votacion() {
        $voto = $this->input->post('like');
        $id = $this->input->post('id_proyecto');
        $usuario = $this->session->userdata('id_usuario');

        if(empty($usuario)) {
            $data['error'] = 5;
            echo json_encode($data);
        } else {
            $data = $this->M_utils->asignarVotacionProyectoLey($usuario,$id,$voto);
            echo json_encode($data);    
        } 
    }

    function checkIfUserIsLogged() {
        $usuario = $this->session->userdata('id_usuario');
        if(empty($usuario)) {
            $data['error'] = 5;
            echo json_encode($data);
        } else {
            $data['error'] = 1;
            echo json_encode($data);
        }
    }
}