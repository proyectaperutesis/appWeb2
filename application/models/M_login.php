<?php

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function login($datos_login) {

        //$sql = 'SELECT * FROM "MDB_SEG"."SEG_LOGIN_INTRANET"(?,?) ';

        //$resultado = $this->db->query($sql,$datos_login);
        $resultado = 1;
        //if($resultado->num_rows() == 1)
        if($resultado == 1)
        {   
            //$r = $resultado->row();

            $usuario_session = array( //1 congresista 2 ciudadano
                'usuario_id' => 2
            );

            $this->session->set_userdata($usuario_session);

            return array('error'=> EXIT_SUCCESS);

        } else { return array('error'=> EXIT_ERROR);}
    }





    
}