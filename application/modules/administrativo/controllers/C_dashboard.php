<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
        $sesionU = $this->session->userdata('id_usuario');
        if (empty($sesionU)) {
            redirect('/');
        }
	}
	
	public function index()
	{
		$this->load->view('V_dashboard');
	}
}
