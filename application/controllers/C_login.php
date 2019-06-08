<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //1: Congresista 2: Ciudadano
        $data = array(
            'tipo_usuario' => 1
        );
        $this->load->view('V_login',$data);
    }

}