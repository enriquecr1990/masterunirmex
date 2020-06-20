<?php
//logica dummy de agenda telefonica
$urlLocation = 'index.php?'.$css;
$urlLocation .= '&tipoOp=eliminar&id='.$_GET['id'];
header('Location: '.$urlLocation);