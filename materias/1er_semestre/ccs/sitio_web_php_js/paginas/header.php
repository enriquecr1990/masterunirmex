<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <!-- etiqueta meta para especificar lo de un sitio web responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name="author" content="Enrique Corona Ricaño">
    <meta name="description"
          content="Tarea Realización de una pagina web con JavaScript de la materia de Computación, cliente y servidor">
    <meta name="keywords"
          content="Enrique Corona Ricaño, Estudiante de Maestria ecoronar en UNIR México, Maestría en Dirección e Ingenieria de Sitios Web ">

    <title>Sitio Web PHP y JS</title>

    <link rel="stylesheet" href="css/comun.css">
    <link rel="icon" href="imagenes/favicon.png">

</head>

<div id="backgroundImage" class="fullscreen-bg"></div>
<!-- por medio del js se procesan los catalogos utilizados en el formulario -->
<body onload="iniciarJS()">

<h1 class="centrado" >
    <img class="img_agenda" src="imagenes/logo/logo_agenda.jpg" alt="Logo Agenda">
    <span id="titulo_sistema">Sistema para Agenda Telefónica</span>
    <img class="img_agenda" src="imagenes/logo/logo_agenda.jpg" alt="Logo Agenda">
</h1>

<div class="izquierda mensajes_sistema" id="fltMensajesSistema">
    <!-- fieldset para los mensajes del sistema -->
    <fieldset >
        <legend>Mensajes del sistema</legend>
        <ul id="ulMsgSistema"></ul>
    </fieldset>
</div>