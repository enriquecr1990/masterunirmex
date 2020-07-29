<div class="contenedor" id="fltFormularioContacto">
    <!-- fieldset para el formulario de contacto -->
    <fieldset >
        <legend><span id="spnTituloFormulario"></span> de Contacto</legend>
        <form id="frmRegistroContacto" method="post">
            <table class="table">
                <tr>
                    <td>
                        <input type="hidden" id="idContacto" name="id" value="">
                        <strong>Nombre:</strong>
                    </td>
                    <td><input type="text" placeholder="Nombre" name="nombre" id="nombre" value="" required></td>
                    <td><strong>Apellido Paterno:</strong></td>
                    <td><input type="text" placeholder="Paterno" name="paterno" id="paterno" value="" required></td>
                </tr>
                <tr>
                    <td><strong>Apellido Materno:</strong></td>
                    <td><input type="text" placeholder="Materno" name="materno" value="" id="materno" required></td>
                    <td><strong>Genero:</strong></td>
                    <td>
                        <input id="rdoMasculino" type="radio" name="idGenero" value="1" required> Masculino
                        <input id="rdoFemenino" type="radio" name="idGenero" value="2"> Femenino
                    </td>
                </tr>
                <tr>
                    <td><strong>Fecha de nacimiento:</strong></td>
                    <td><input type="date" name="nacimiento" id="nacimiento" value="" required></td>
                    <td><strong>Número de telefono:</strong></td>
                    <td>
                        <!-- las opciones se llenan por medio del JS cuando se carga el JS -->
                        <select name="idTipoTelefono" id="sltTipoTelefono" required>
                            <option value="">--Seleccione tipo--</option>
                        </select>
                        <input type="text" placeholder="Número de telefono" name="numeroTelefono" value="" id="numeroTelefono" required>
                    </td>
                </tr>
                <tr>
                    <td><strong>e-mail:</strong></td>
                    <td><input type="email" placeholder="Correo Electrónico" name="correo" value="" id="correo" required></td>
                    <td><strong>Facebook</strong></td>
                    <td><input type="url" placeholder="Link de Facebook" name="facebook" value="" id="facebook" required></td>
                </tr>
                <tr>
                    <td class="izquierda">
                        <button id="btnLimpiarFormulario" class="boton boton-gris" type="reset">Limpiar formulario</button>
                    </td>
                    <td colspan="3" style="text-align: right !important;">
                        <button id="btnGuardarFormContacto" class="boton boton-verde" type="button">Guardar</button>
                        <button id="btnCancelarFormContacto" class="boton boton-rojo" type="button">Cancelar</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>