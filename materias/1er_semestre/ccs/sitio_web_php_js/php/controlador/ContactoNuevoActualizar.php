<?php
//contralador para obtener informacion del listado de contactos
require_once 'ContactoFunciones.php';

$funciones = new ContactoFunciones();

$response = $funciones->guardarNuevoActualizarContacto();

echo json_encode($response);exit;