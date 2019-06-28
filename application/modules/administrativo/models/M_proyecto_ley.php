<?php

class M_proyecto_ley extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function buscarProyectoLey($usuario,$idproyecto, $estado) {
        $sql = 'SELECT * FROM "Gestion"."fn_gs_select_proyectos_ley"(?,?,?)';
        $result = $this->db->query($sql, array($usuario,$idproyecto,$estado));
			log_message('error', print_r($result->result(), true));

        if($result->num_rows() != 0) {
            return array('error'  => EXIT_SUCCESS,
                         'result' => $result->result());
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }

    function publicarProyectoLey($idproyecto,$descripcion, $fecha_cierre) {
        $sql = 'SELECT * FROM "Gestion"."fn_gs_update_publicar_proyecto_ley"(?,?,?)';
        $result = $this->db->query($sql, array($idproyecto,$descripcion, $fecha_cierre));
			log_message('error', print_r($result->num_rows(), true));

        if($result->num_rows() != 0) {
            return array('error'  => EXIT_SUCCESS,
                         'result' => $result->result());
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }
}
