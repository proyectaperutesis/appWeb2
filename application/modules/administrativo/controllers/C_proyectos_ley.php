<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_proyectos_ley extends MX_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('utils');        		
        $this->load->model('M_crear_pl');
	}
	
	public function index()
	{
		$data = array(
            'select_categoria' => getCategorias(),
        );
		$this->load->view('V_crear_pl');
	}

	
}



