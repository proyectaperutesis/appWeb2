<?php

class M_utils extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCategorias() {
        $sql = 'SELECT * FROM "Gestion"."fn_gs_get_categoria"()';
        $result = $this->db->query($sql);
        if($result->num_rows() != 0) {
            return array('error'  => EXIT_SUCCESS,
                         'result' => $result->result());
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }

    function searchPL($titulo, $categoria, $fecha, $tipo) {
        $result = $this->db->query('SELECT * FROM "Gestion"."fn_gs_select_proyectos_ley_publicados"(?,?,?,?)', array($titulo, $categoria, $fecha, $tipo));
        if($result->num_rows() != 0) {
            return array('error'  => EXIT_SUCCESS, 'result' => $result->result());
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }

    function getTipoPersona() {
        $sql = 'SELECT * FROM "Seguridad"."fn_seg_get_roles"()';
        $result = $this->db->query($sql);
        if($result->num_rows() != 0) {
            return array('error'  => EXIT_SUCCESS,
                         'result' => $result->result());
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }

}
