<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <!-- etiqueta meta para especificar lo de un sitio web responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name="author" content="Enrique Corona Ricaño">
    <meta name="description"
          content="Repositorio para las materias de la Maestría en Dirección e Ingenieria de Sitios Web de UNIR México por el alumno Enrique Corona Ricaño">
    <meta name="keywords"
          content="Enrique Corona Ricaño, Estudiante de Maestria ecoronar en UNIR México, Maestría en Dirección e Ingenieria de Sitios Web ">

    <title>Sitio Web PHP</title>

    <?php if(isset($_GET['css']) && $_GET['css'] == 1): ?>
        <link rel="stylesheet" href="css/comun.css">
    <?php endif;?>

    <link rel="icon" href="imagenes/logo/logo_php.png">

</head>
<body>

<h1 class="centrado" >
    <img src="imagenes/logo/logo_agenda.jpg" width="35px">
    Sistema para Agenda Telefónica
</h1>

<!-- mensajes para el sistema -->
<?php include_once 'paginas/mensajes_sistema.php' ?>