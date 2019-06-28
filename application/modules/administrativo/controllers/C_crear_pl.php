<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crear_pl extends MX_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('utils');        		
		$this->load->model('M_crear_pl');
		$sesionU = $this->session->userdata('id_usuario');
        if (empty($sesionU)) {
            redirect('/');
        }
	}
	
	public function index()
	{
		$data = array(
            'select_categoria' => getCategorias(),
        );
		$this->load->view('V_crear_pl', $data);
	}

	public function registrarPL()
	{
		$titulo = $this->input->post('titulo');
		$fundamento = $this->input->post('fundamento');
		$vigencia = $this->input->post('vigencia');
		$costo = $this->input->post('costo');
		$formulalegal = $this->input->post('formulalegal');
		$categoria = $this->input->post('categoria');

		$datos_pl = array(
			'p_titulo' => $titulo,
			'p_objeto_ley' => null,
			'p_efecto_vigencia_norma' => $vigencia,
			'p_costo_beneficio' => $costo,
			'p_usuario_ins' => $this->session->userdata('nombre_usuario'),
			'p_fh_cierre_participacion' => null,
			'p_json_fundamento_ley' => $fundamento,
			'p_json_forma_legal' => $formulalegal,
			'p_id_categoria' => $categoria,
			'p_archivo' => null,
		);

		$data = $this->M_crear_pl->insertarPL($datos_pl);
		
		echo json_encode($data);
	}
}



