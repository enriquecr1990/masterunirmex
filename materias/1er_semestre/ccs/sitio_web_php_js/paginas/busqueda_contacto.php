<div class="contenedor" id="cntBusquedaContacto">
    <fieldset>
        <legend>Busqueda de contactos</legend>
        <form id="frmBusquedaContacto" >
            <table class="table">
                <tr>
                    <td><strong>Nombre del contacto:</strong></td>
                    <td><input type="text" placeholder="Nombre" name="buscar_nombre" id="buscar_nombre" value=""></td>
                    <td><strong>Genero:</strong></td>
                    <td>
                        <input id="buscarRdoMasculino" type="radio" name="buscar_id_genero" value="1"> Masculino
                        <input id="buscarRdoFemenino" type="radio" name="buscar_id_genero" value="2"> Femenino
                    </td>
                </tr>
                <tr>
                    <td><strong>Número de telefono:</strong></td>
                    <td>
                        <input type="text" placeholder="Número de telefono" name="buscar_numeroTelefono" value="" id="buscar_numeroTelefono" required>
                    </td>
                    <td class="busqueda_avanzada" style="display: none;"><strong>Fecha de nacimiento:</strong></td>
                    <td class="busqueda_avanzada" style="display: none;"><input type="date" name="buscar_nacimiento" id="buscar_nacimiento" value="" required></td>
                </tr>
                <tr class="busqueda_avanzada" style="display: none;">
                    <td><strong>Tipo de teléfono:</strong></td>
                    <td>
                        <!-- las opciones se llenan por medio del JS cuando se carga el JS -->
                        <select name="buscar_idTipoTelefono" id="buscar_sltTipoTelefono" required>
                            <option value="">--Seleccione tipo--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right !important;">
                        <a href="#" id="lnkBusquedaAvanzada">Busqueda avanzada</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right !important;">
                        <button id="btnBuscarFormContacto" class="boton boton-verde" type="button">Buscar</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>