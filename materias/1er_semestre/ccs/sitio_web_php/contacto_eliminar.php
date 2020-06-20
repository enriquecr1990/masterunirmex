<?php

//se inyectan los valores de los catalogos
require_once('private/data_info.php');
require_once('private/helper/comun.php');

if (isset($id) && $id == '') {
    header('Location: index.php?' . $css);
} else {
    $formContacto = json_decode(base64_decode($_GET['dataContactoModificar']), true);
}

?>

<?php include_once('paginas/header.php') ?>

<!-- se agrega el form para eliminar contacto -->
<fieldset>
    <legend>Mensaje del sistema</legend>
    <h3>Está a punto de eliminar el contacto "<?= $formContacto['nombre'] . ' ' . $formContacto['paterno'] . ' ' . $formContacto['materno'] ?>", ¿Desea Continuar?</h3>
    <a href="eliminar_contacto.php?<?= $css . $id ?>"><button type="button" class="boton boton-rojo">Si</button></a>
    <a href="index.php?<?= $css ?>"><button type="button" class="boton boton-verde">No</button></a>
</fieldset>

<?php include_once('paginas/footer.php') ?>


