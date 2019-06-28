<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_principal extends MX_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');        
        $this->load->model('M_utils');

    }

    public function index()
    {
        $data = array(
            'select_categoria' => getCategorias(),
            'select_roles' => getTipoPersona(),
        );
        $this->load->view('V_principal',$data);
        
    }

    function buscarPL(){
        $data['error'] = EXIT_ERROR;
        try {
            $titulo  =  $this->input->post('titulo')!= null ? $this->input->post('titulo') : null;
            $categoria  =  ($this->input->post('categoria') != null | $this->input->post('categoria') != '') ? $this->input->post('categoria') : null;
            $fecha  =  $this->input->post('fecha')!= null ? $this->input->post('fecha') : null;
            $tipo  =  ($this->input->post('tipo')!= null | $this->input->post('tipo')!= '') ? $this->input->post('tipo') : null;
            
            if($fecha  != null) {
                $fecha = explode('/',$fecha);
                $fecha = $fecha[2].$fecha[1].$fecha[0];               
            }

            $data = $this->M_utils->searchPL($titulo, $categoria, $fecha, $tipo);

            $data["html"] = "";
            if ($data['error'] == EXIT_ERROR){
                $data["html"] = "<p>Aún no hay proyectos de ley registrados</p>";
                echo json_encode($data);
                return;
            }
            $cont = 0;        
            foreach($data['result'] as $dat){
                $cont++;
                $data["html"] .= "
                <div class='card col-md-8 mx-auto' style='margin-bottom: 10px' onclick='openFullProyecto(".$dat->id_proyecto_ley.")'>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col-md-3'>
                                <span class='helper'></span>
                                <img src='".base_url()."public/utils/img/categorias/".$dat->imagen."'
                                    alt='img_categoria' height='80' width='80'>
                            </div>
                            <div class='col-md-9'>
                                <p style='text-align: start; color: red; margin-bottom: 0'>Cierre de participaciones: ".$dat->fh_cierre_participacion."</p>
                                <h5 class='card-title' style='text-align: start;color: black; font-weight: bold'>
                                    ".$dat->titulo."</h5>
                                <p class='card-text' style='text-align: justify;float: left; color: black'>
                                ".$dat->descripcion."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            echo json_encode($data);
        }
        catch (\Throwable $th) {
            throw $th;
        }
    }

}