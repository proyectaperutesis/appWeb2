<?php

class M_crear_pl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertarPL($datos) {
        $sql = 'SELECT * FROM "Gestion"."fn_gs_insert_proyecto_ley"(?,?,?,?,?,?,?,?,?,?)';
        $result = $this->db->query($sql, $datos);
        if($result->num_rows() != 0) {
            return array('error'  => EXIT_SUCCESS,
                         'result' => $result->result());
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }
}
