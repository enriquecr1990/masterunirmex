<?php
//se pone el idioma en español y la zona horario de mexico
// se realiza para que el formato de la fecha sea en español
date_default_timezone_set("America/Mexico_City");
setlocale(LC_ALL,'es_MX.UTF-8');
/* ************************
 * se carga el comun helper creado para el sitio contiene las funciones:
 * 1.- fechaCumpleanios: devuelve la cadena de texto de la fecha de cumpleaños del contacto
 * 2.- getGenero: devuelve la cadena de texto de "masculino/femenino" del contacto
 * 3.- getTipoNumero: devuelve la cadena de texto "Celular/Casa/Oficina/Fax" del tipo de teléfono
 * */
require_once ('private/helper/comun.php');
//array hardcodeado de datos ficticios de contactos
include_once ('private/data_contactos.php');

//logica para agregar a la tabla el data del nuevo contacto que se agrego del formulario o la logica de la operacion
if(isset($_GET['tipoOp'])){
    $tipoMensaje = 'exito';
    //logica de negocio para el dummy del sistema para cuando se agrega, modifica o elimina en la operacion
    switch ($_GET['tipoOp']){
        case 'nuevo':
            $msgValidaciones[] = 'Se guardo el nuevo contacto con éxito';
            $listaContactos[] = json_decode(base64_decode($_GET['dataContacto']),true);
            break;
        case 'actualizar':
            $msgValidaciones[] = 'Se actualizó el contacto con éxito';
            $listaContactos[$_GET['id']] = json_decode(base64_decode($_GET['dataContacto']),true);
            break;
        case 'eliminar':
            $msgValidaciones[] = 'Se eliminó el contacto con exito';
            unset($listaContactos[$_GET['id']]);
            break;
    }
}
?>

<!--
todo el contenido html de página se agregan con los include de php (sistema dummy llamado normalmente)
 -->

<!-- cabecera de la página del html del sitio -->
<?php include_once('paginas/header.php') ?>

<!-- tablero de registros de la agenda de contactos -->
<?php include_once ('paginas/lista_contactos.php'); ?>

<!-- boton submit - get para decidir si se toma las hojas de estitlo al sitio o no
 por default el sitio no carga el comun.css-->
<form method="get">
    <?php if(isset($_GET['css']) && $_GET['css'] == 1):?>
        <button type="submit" class="boton boton-rojo">Sin CSS</button>
    <?php else: ?>
        <input type="hidden" name="css" value="1">
        <button type="submit" class="boton boton-verde">Con CSS</button>
    <?php endif; ?>
</form>

<!-- pie de la página del html del sitio -->
<?php include_once('paginas/footer.php') ?>

<!--
Mini sistema de contactos que tiene funcionalidad de un CRUD (Consultar, Registrar, Actualizar y Eliminar) registros;
este sistema al ser en código duro sin uso de una Base de Datos se le conoce como Sistema Dummy.
1.	En la pantalla principal se muestra un tablero de 3 registros de contactos hardcodeados (funcionalidad de consultar).
2.	En el index del sitio se aprecia el botón “Nuevo Contacto” que al dar clic se mostrará un formulario de contacto
    (se usa para nuevo y modificar) y en los registros el botón de modificar y eliminar.
3.	Para el nuevo/modificar contacto, se hacen uso de las validaciones de lado del cliente HTML5 y del lado del servidor
    por medio de un helper de php creado y se valida campo por campo; para el nombre, apellidos, teléfono, correo, y
    link de Facebook se hace uso de expresiones regulares para aceptar cierto tipo de formatos en los campos.
4.	La información de modificar/eliminar/datos de contacto, viajan por GET, en formulario de contacto viajan por POST
5.	Se integra la opción de ver el sistema con hoja de estilos muy básica o sin ella (botón con dato css por GET en
    la pantalla principal).
 -->
