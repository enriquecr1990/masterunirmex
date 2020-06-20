<?php
//se inyectan los valores de los catalogos
include_once('private/data_info.php');
require_once('private/helper/comun.php');

?>

<?php include_once ('paginas/header.php')?>

<fieldset>
    <legend><?=$id != '' ? 'Modificar':'Nuevo'?> Contacto</legend>
    <form method="post" action="guardar_contacto.php?<?=$css.$id?>">
        <table width="100%">
            <input type="hidden" name="id" value="<?=isset($formContacto['id']) ? $formContacto['id'] : ''?>">
            <tr>
                <td><strong>Nombre:</strong></td>
                <td><input type="text" placeholder="Nombre" name="nombre" value="<?=isset($formContacto['nombre']) ? $formContacto['nombre'] : ''?>" required></td>
                <td><strong>Apellido Paterno:</strong></td>
                <td><input type="text" placeholder="Paterno" name="paterno" value="<?=isset($formContacto['paterno']) ? $formContacto['paterno'] : ''?>" required></td>
            </tr>
            <tr>
                <td><strong>Apellido Materno:</strong></td>
                <td><input type="text" placeholder="Materno" name="materno" value="<?=isset($formContacto['materno']) ? $formContacto['materno'] : ''?>" required></td>
                <td><strong>Genero:</strong></td>
                <td>
                    <input type="radio" name="idGenero" value="1" <?=isset($formContacto['idGenero']) && $formContacto['idGenero'] == 1 ? 'checked="checked"' : ''?> required > Masculino
                    <input type="radio" name="idGenero" value="2"> Femenino
                </td>
            </tr>
            <tr>
                <td><strong>Fecha de nacimiento:</strong></td>
                <td><input type="date" placeholder="Fecha de Nacimiento" name="nacimiento" value="<?=isset($formContacto['nacimiento']) ? $formContacto['nacimiento'] : '' ?>" required></td>
                <td><strong>Número de telefono:</strong></td>
                <td>
                    <select name="idTipoTelefono" required>
                        <option value="">--Seleccione tipo--</option>
                        <?php foreach ($listaTipoTelefono as $it): ?>
                            <option value="<?=$it['value']?>" <?=isset($formContacto['idTipoTelefono']) && $formContacto['idTipoTelefono'] == $it['value'] ? 'selected="selected"':''?> ><?=$it['label']?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" placeholder="Número de telefono" name="numeroTelefono" value="<?=isset($formContacto['numeroTelefono']) ? $formContacto['numeroTelefono']:''?>" required>
                </td>
            </tr>
            <tr>
                <td><strong>e-mail:</strong></td>
                <td><input type="email" placeholder="Correo Electrónico" name="correo" value="<?=isset($formContacto['correo']) ? $formContacto['correo']:''?>" required></td>
                <td><strong>Facebook</strong></td>
                <td><input type="url" placeholder="Link de Facebook" name="facebook" value="<?=isset($formContacto['facebook']) ? $formContacto['facebook']:''?>" required></td>
            </tr>
            <tr>
                <td colspan="3" class="izquierda">
                    <button class="boton boton-gris" type="reset">Limpiar formulario</button>
                </td>
                <td colspan="3" class="derecha">
                    <button class="boton boton-verde" type="submit">Guardar</button>
                    <a href="index.php?<?=$css?>"><button class="boton boton-rojo" type="button">Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</fieldset>

<?php include_once ('paginas/footer.php')?>