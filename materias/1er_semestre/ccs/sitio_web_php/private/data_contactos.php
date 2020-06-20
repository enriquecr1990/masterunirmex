<?php
//cargamos el comun
require_once ('private/helper/comun.php');

//HardCode para la lista de contactos en la tabla
$listaContactos = array(
    array(
        'id' => 1,
        'nombre' => 'Enrique',
        'paterno' => 'Corona',
        'materno' => 'Ricaño',
        'nacimiento' => '1990-04-06',
        'cumpleanios' => fechaCumpleanios('1990-04-06'),
        'idGenero' => 1,
        'genero' => getGenero(1),
        'idTipoTelefono' => 2,
        'tipoTelefono' => getTipoNumero(2),
        'numeroTelefono'=>'246 757 5099',
        'correo' => 'enrique_cr1990@hotmail.com',
        'facebook' => 'https://www.facebook.com/un_face'
    ),
    array(
        'id' => 2,
        'nombre' => 'Gamaliel',
        'paterno' => 'Ricaño',
        'materno' => 'Flores',
        'nacimiento' => '1980-10-14',
        'cumpleanios' => fechaCumpleanios('1980-10-14'),
        'idGenero' => 1,
        'genero' => getGenero(1),
        'idTipoTelefono' => 1,
        'tipoTelefono' => getTipoNumero(1),
        'numeroTelefono'=>'222 123 88 74',
        'correo' => 'gama1980@hotmail.com',
        'facebook' => 'https://www.facebook.com/otro_face'
    ),
    array(
        'id' => 3,
        'nombre' => 'Vianey Adriana',
        'paterno' => 'Montiel',
        'materno' => 'Herrera',
        'nacimiento' => '1995-09-09',
        'cumpleanios' => fechaCumpleanios('1995-09-09'),
        'idGenero' => 1,
        'genero' => getGenero(2),
        'idTipoTelefono' => 2,
        'tipoTelefono' => getTipoNumero(2),
        'numeroTelefono'=>'241 222 3399',
        'correo' => 'vianeyam@gmail.com',
        'facebook' => 'https://www.facebook.com/un_otro_face'
    ),
);
?>