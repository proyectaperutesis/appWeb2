<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_perfil_pl extends MX_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');        
        $this->load->model('M_utils');
    }

    public function index()
    {
        $this->load->view('V_perfil_pl');
    }
}