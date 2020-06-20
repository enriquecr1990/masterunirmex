<?php

//se inyectan los valores de los catalogos
require_once('private/data_info.php');
require_once('private/helper/comun.php');

$formContacto = json_decode(base64_decode($_GET['dataContactoModificar']),true);
?>

<!-- se agrega el formulario de contacto -->
<?php include_once ('formulario_contacto.php')?>


