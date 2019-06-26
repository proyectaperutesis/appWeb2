<?php

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function login($datos_login) {

        $sql = 'SELECT * FROM "Seguridad"."fn_seg_login"(?,?) ';

        $resultado = $this->db->query($sql,$datos_login);
        
        if($resultado->num_rows() == 1)
        {   
            $r = $resultado->row();

            $usuario_session = array( //1 congresista 2 ciudadano
                'id_usuario' => $r->id_usuario,
                'nombre_persona' => $r->nombre_persona,
                'apellido_paterno' => $r->apellido_paterno,
                'apellido_materno' => $r->apellido_materno,
                'id_rol' => $r->id_rol,
            );

            $this->session->set_userdata($usuario_session);

            return array('error'=> EXIT_SUCCESS);

        } else { return array('error'=> EXIT_ERROR);}
    }




    
}