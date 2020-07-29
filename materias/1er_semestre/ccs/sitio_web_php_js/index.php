<?php

include_once ('paginas/header.php');
include_once ('paginas/busqueda_contacto.php');
include_once ('paginas/tablero_contacto.php');
include_once ('paginas/formulario_contacto.php');
include_once ('paginas/footer.php');

?>

<!--
Mistema de contactos que tiene funcionalidad tipo CRUD (Consultar, Registrar, Actualizar y Eliminar) registros;
este sistema al ser en código duro sin uso de una Base de Datos se le conoce como Sistema Dummy.
1.  En la pantalla principal se muestra un tablero de 3 registros de contactos hardcodeados (funcionalidad de consultar).
2.  En el index del sitio se aprecia el botón “Nuevo Contacto” que al dar clic se mostrará un formulario de contacto
    (se usa para nuevo y modificar) y en los registros el botón de modificar y eliminar.
3.  Para el nuevo/modificar contacto, se hacen uso de las validaciones de lado del cliente en HTML5 y por JavaScript
    el formulario de contacto, para los apellidos, telefeno, correo, link de Facebook se hace uso de expresiones
    regulares para aceptar cierto tipo de formatos en los campos. Los datos de modificar
4.  La información de modificar/eliminar/datos de contacto, viajan van codificados en Base64 para pasar un objeto al JS.
5.  Los JavaScript estan divididos conforme al tipos de operaciones que realiza cada JS, como los catalogos, los datos
    que podrian ser las opciones de guardar, los eventos de los elementos DOM del HTML y el formateo de datos a HTML.
 -->