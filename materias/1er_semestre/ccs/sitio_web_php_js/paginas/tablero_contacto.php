<div class="contenedor" id="fltListaContactos">
    <!-- fieldset para el listado de contactos -->
    <fieldset class="derecha">
        <legend>Listado de contactos</legend>

        <button id="btnNuevoContacto" class="boton boton-verde derecha" type="button">Nuevo Contacto</button>
        <hr>

        <table id="tblListaContactos" class="table table-even">
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
            <!-- tbody de la tabla que contendra los registros de contactos, estos se llenan a partir del JS -->
            <tbody id="tbobyListaContactos">
            </tbody>
        </table>
    </fieldset>
</div>