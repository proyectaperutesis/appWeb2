<?php

function getCategorias()
{
    $ci = &get_instance();

    $ci->load->model('M_utils');
    $data = $ci->M_utils->getCategorias();
    $html = "";
    foreach ($data['result'] as $datos) {
        $html .= "<option value=" . $datos->idcategoria . ">" . $datos->nombre . "</option>";
    }

    return $html;
}

function getParametros($categoria)
{
    $ci = &get_instance();

    $ci->load->model('M_utils');
    $data = $ci->M_utils->getParametros($categoria);
    $html = "";
    foreach ($data['result'] as $datos) {
        $html .= "<option value=" . $datos->idparametro . ">" . $datos->parametro_salida . "</option>";
    }

    return $html;
}

function getTipoPersona()
{
    $ci = &get_instance();

    $ci->load->model('M_utils');
    $data = $ci->M_utils->getTipoPersona();
    $html = "";
    foreach ($data['result'] as $datos) {
        $html .= "<option value=" . $datos->idrol . ">" . $datos->nombre . "</option>";
    }

    return $html;
}