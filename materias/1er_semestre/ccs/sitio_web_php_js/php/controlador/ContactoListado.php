<?php
//contralador para obtener informacion del listado de contactos
require_once 'ContactoFunciones.php';

$funciones = new ContactoFunciones();

$listaContactos = $funciones->getListaContactos();
echo json_encode($listaContactos);exit;