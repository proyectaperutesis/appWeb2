<?php

class M_utils extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCategorias()
    {
        $sql = 'SELECT * FROM "Gestion"."fn_gs_get_categoria"()';
        $result = $this->db->query($sql);
        if ($result->num_rows() != 0) {
            return array('error' => EXIT_SUCCESS,
                'result' => $result->result());
        } else {
            return array('error' => EXIT_ERROR);
        }
    }

    public function searchPL($titulo, $categoria, $fecha, $tipo)
    {
        $result = $this->db->query('SELECT * FROM "Gestion"."fn_gs_select_proyectos_ley_publicados"(?,?,?,?)', array($titulo, $categoria, $fecha, $tipo));
        if ($result->num_rows() != 0) {
            return array('error' => EXIT_SUCCESS, 'result' => $result->result());
        } else {
            return array('error' => EXIT_ERROR);
        }
    }

    public function getTipoPersona()
    {
        $sql = 'SELECT * FROM "Seguridad"."fn_seg_get_roles"()';
        $result = $this->db->query($sql);
        if ($result->num_rows() != 0) {
            return array('error' => EXIT_SUCCESS,
                'result' => $result->result());
        } else {
            return array('error' => EXIT_ERROR);
        }
    }

    public function getParametros($categoria)
    {
        $sql = 'SELECT * FROM "public"."fn_parametros"(?)';
        $result = $this->db->query($sql, $categoria);
        if ($result->num_rows() != 0) {
            return array('error' => EXIT_SUCCESS,
                'result' => $result->result());
        } else {
            return array('error' => EXIT_ERROR);
        }
    }

    public function buscarProyectoLey($usuario, $idproyecto, $estado)
    {
        $sql = 'SELECT * FROM "Gestion"."fn_gs_select_proyectos_ley"(?,?,?)';
        $result = $this->db->query($sql, array($usuario, $idproyecto, $estado));
        log_message('error', print_r($result->result(), true));

        if ($result->num_rows() != 0) {
            return array('error' => EXIT_SUCCESS,
                'result' => $result->result());
        } else {
            return array('error' => EXIT_ERROR);
        }
    }

    public function asignarVotacionProyectoLey($usuario, $idproyecto, $valoracion)
    {
        $sql = 'SELECT * FROM "Gestion"."fn_gs_insert_valoracion_proyecto_ley"(?,?,?)';
        $result = $this->db->query($sql, array($usuario, $idproyecto, $valoracion));
        log_message('error', print_r($result->result(), true));

        if ($result->num_rows() != 0) {
            return array('error' => EXIT_SUCCESS,
                'result' => $result->result());
        } else {
            return array('error' => EXIT_ERROR);
        }
    }

}
