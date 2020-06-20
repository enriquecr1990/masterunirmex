<?php

$listaTipoTelefono = array(
    array('value' => 1,'label' => 'Celular'),
    array('value' => 2,'label' => 'Casa'),
    array('value' => 3,'label' => 'Oficina'),
    array('value' => 4,'label' => 'Fax'),
);

//segemento de codigo para poder controlar la hoja de estilo para la pagina y el id de registro
$css = '';
$id = '';
if(isset($_GET['css'])){
    $css .= '&css='.$_GET['css'];
}if(isset($_GET['id'])){
    $id .= '&id='.$_GET['id'];
}
//fin segmento estilo pagina