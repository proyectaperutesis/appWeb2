<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_proyectos_ley extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
		$this->load->model('M_proyecto_ley');
		$sesionU = $this->session->userdata('id_usuario');
        if (empty($sesionU)) {
            redirect('/');
        }
    }

    public function index()
    {
        /*$data = array(
        'select_estado_pl' => getParametros('ESTADO_PROYECTO'),
        );*/
        $this->load->view('V_proyectos_ley');
    }

    public function getProyectosLey()
    {
        $estado = $this->input->post('estado');
        $usuario = $this->session->userdata('id_usuario');

        $data['error'] = EXIT_ERROR;

        try {
            $data = $this->M_proyecto_ley->buscarProyectoLey($usuario, null, $estado);
            $data["html"] = "";
            if ($data['error'] == EXIT_ERROR) {
                $data["html"] .= "<tr style='text-align: center'><td colspan='6'>No tiene proyectos de ley en este estado.</td></tr>";
                echo json_encode($data);
                return;
			}
			$cont = 1;
            if ($estado == 'B') {
                $data["html"] .= " <table id='example' class='table table-striped table-bordered' style='width:100%'>
								<thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titulo</th>
                                        <th>Fecha de creación</th>
                                        <th>Categoría</th>
                                        <th>Visualizar</th>
                                        <th>Publicar</th>
                                    </tr>
								</thead>
								<tbody id='body_proyectos'>
				";
				if ($data['result'] != null) {
					foreach ($data['result'] as $dat) {
						$date = date_create($dat->fecha_creacion);
						$data["html"] .=
						"<tr>
								<td attr=''>" . $cont . "</td>
								<td attr=''>" . $dat->titulo . "</td>
								<td attr=''>" . date_format($date, 'd/m/y') . "</td>
								<td attr=''>" . $dat->nombre_categoria . "</td>
								<td>
									<div class='block_container' style='text-align: center' onclick='verProyecto(" . $dat->id_proyecto_ley . ")'>
										<div class='block'>
											<a style='color:blue'>
												<span data-feather='eye' style='color: green'></span>
											</a>
										</div>
									</div>
								</td>
								<td>
									<div class='block_container' style='text-align: center' onclick='openPublish(" . $dat->id_proyecto_ley . ",\"" . $dat->titulo . "\")'>
										<div class='block'>
											<a style='color:blue'>
												<span data-feather='check-square' style='color: blue'></span>
											</a>
										</div>
									</div>
								</td>
							</tr>";
						$cont++;
					}
					$data["html"] .= "</tbody>
					</table>";
				}
            } elseif ($estado == 'P') {
                $data["html"] .= " <table id='example' class='table table-striped table-bordered' style='width:100%'>
								<thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titulo</th>
										<th>Fecha de publicacion</th>
										<th>Fecha de cierre</th>
                                        <th>Categoría</th>
                                        <th>Visualizar</th>
                                        <th>Compartir</th>
                                    </tr>
								</thead>
								<tbody id='body_proyectos'>
				";
				if ($data['result'] != null) {
					foreach ($data['result'] as $dat) {
						$datePublicacion = date_create($dat->fecha_publicacion);
						$dateCierre = date_create($dat->fh_cierre_participacion);

						$data["html"] .=
						"<tr>
								<td attr=''>" . $cont . "</td>
								<td attr=''>" . $dat->titulo . "</td>
								<td attr=''>" . date_format($datePublicacion, 'd/m/y') . "</td>
								<td attr=''>" . date_format($dateCierre, 'd/m/y') . "</td>
								<td attr=''>" . $dat->nombre_categoria . "</td>
								<td>
									<div class='block_container' style='text-align: center' onclick='verProyecto(" . $dat->id_proyecto_ley . ")'>
										<div class='block'>
											<a style='color:blue'>
												<span data-feather='eye' style='color: green'></span>
											</a>
										</div>
									</div>
								</td>
								<td>
									<div class='block_container' style='text-align: center' onclick='openPublish(" . $dat->id_proyecto_ley . ",\"" . $dat->titulo . "\")'>
										<div class='block'>
											<a style='color:blue'>
												<span data-feather='share-2' style='color: blue'></span>
											</a>
										</div>
									</div>
								</td>
							</tr>";
						$cont++;
					}
					$data["html"] .= "</tbody>
					</table>";
				}
            }

            
            

            echo json_encode($data);
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function publicarProyectoLey()
    {
        $descripcion = $this->input->post('descripcion');
        $fecha = $this->input->post('fecha');
        $id = $this->input->post('id');

        $fecha = explode('/', $fecha);
        $fecha = $fecha[2] . $fecha[1] . $fecha[0];

        $data = $this->M_proyecto_ley->publicarProyectoLey($id, $descripcion, $fecha);
        echo json_encode($data);
    }

}
