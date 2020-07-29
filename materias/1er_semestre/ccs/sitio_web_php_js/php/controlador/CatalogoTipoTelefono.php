<?php

//se incluyen los archivos php necesarios para el controlador de catalogoTipo telefono

include_once ('../modelo/CatalogoTipoTelefono.php');

$catalogoTipoTelefono = new CatalogoTipoTelefono();

$resultado = $catalogoTipoTelefono->getCatalogoTipoTelefono();

echo json_encode($resultado);exit;