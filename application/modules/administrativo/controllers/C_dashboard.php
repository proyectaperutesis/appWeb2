<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends MX_Controller {

	public function index()
	{
		$this->load->view('V_dashboard');
	}
}