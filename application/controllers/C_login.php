<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends MX_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('V_login');
    }

    public function login() 
    {
        $data['error'] = EXIT_ERROR;
        try 
        {
            $user = $this->input->post('usuario');
            $pass = $this->input->post('password');
            
            $datos_login = array(
                'username' => $user,
                'password' => $pass
            );
            $data = $this->M_login->login($datos_login);
            
            echo json_encode($data);

        } catch (\Throwable $th) {throw $th;}
    }

}