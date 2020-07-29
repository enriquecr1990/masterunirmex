<?php
//contralador para obtener informacion del listado de contactos
require_once 'ContactoFunciones.php';

$funciones = new ContactoFunciones();

$response = $funciones->eliminarContacto($_GET['idContacto']);

echo json_encode($response);exit;