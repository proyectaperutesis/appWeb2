<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_utils extends MX_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
    }

    public function logout() 
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}