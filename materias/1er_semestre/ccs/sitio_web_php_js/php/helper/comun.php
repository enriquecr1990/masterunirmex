<?php
function fechaCumpleanios($fecha){
    return strftime('%d de %B',strtotime(date($fecha)));
}

function getGenero($genero = 1){
    return $genero == 1 ? 'Masculino': 'Femenino';
}

function getTipoNumero($idTipo){
    $tipo = '';
    switch ($idTipo){
        case 1: $tipo = 'Celular';break;
        case 2: $tipo = 'Casa';break;
        case 3: $tipo = 'Oficina';break;
        case 4: $tipo = 'Fax';break;
    }
    return $tipo;
}