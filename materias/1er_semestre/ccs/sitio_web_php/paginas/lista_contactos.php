<?php
//array hardcodeado de datos ficticios de contactos
include_once ('private/data_info.php');
include_once ('private/data_contactos.php');

?>
<fieldset>
    <legend>Listado de contactos</legend>

    <table width="100%">
        <tr>
            <td class="derecha">
                <a href="formulario_contacto.php?<?=$css?>"><button class="boton boton-verde" type="button">Nuevo Contacto</button></a>
            </td>
        </tr>
    </table>

    <hr>

    <table width="100%" class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Nombre completo</td>
            <td>Genero</td>
            <td>Cumpleaños</td>
            <td>Número(s)</td>
            <td>Contacto</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
            <?php if(isset($listaContactos) && sizeof($listaContactos) > 0): ?>
                <?php foreach ($listaContactos as $index => $contacto): ?>
                    <tr>
                        <td><?=$index + 1?></td>
                        <td><?=$contacto['nombre'].' '.$contacto['paterno'].' '.$contacto['materno']?></td>
                        <td><?=$contacto['genero']?></td>
                        <td><?=$contacto['cumpleanios']?></td>
                        <td>
                            <?=$contacto['tipoTelefono'] . ': '.$contacto['numeroTelefono']?>
                        </td>
                        <td>
                            <ul>
                                <li><strong>Correo: </strong><?=$contacto['correo']?></li>
                                <li><strong>Facebook: </strong><a href="<?=$contacto['facebook']?>"><?=$contacto['facebook']?></a></li>
                            </ul>
                        </td>
                        <td class="centrado">
                            <a href="contacto_modificar.php?<?=$css?>&id=<?=$index?>&dataContactoModificar=<?=base64_encode(json_encode($contacto))?>"><button type="button" class="boton boton-amarillo">Modificar</button></a><br>
                            <a href="contacto_eliminar.php?<?=$css?>&id=<?=$index?>&dataContactoModificar=<?=base64_encode(json_encode($contacto))?>"><button type="button" class="boton boton-rojo">Eliminar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>
            <tr>
                <td colspan="5" class="centrado">Sin Registros</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</fieldset>
