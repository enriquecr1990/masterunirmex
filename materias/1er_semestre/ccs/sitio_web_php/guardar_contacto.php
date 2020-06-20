<?php
//se carga el helper que nos ayuda a validar el formulario
include_once('private/data_info.php');
include_once('private/data_contactos.php');
require_once('private/helper/comun.php');
require_once('private/helper/FormValidacionHelper.php');

$formContacto = $_POST;
//validamos que tenga información el post dado que tambien hay un submit por el css
if(!empty($formContacto)){
    $validacion = FormValidacionHelper::validarFormNuevoContacto($formContacto);

    //validamos el formulario recibido con el helper creado
    if($validacion['success']){
        $urlLocation = 'index.php?'.$css;
        $dataContacto = array(
            'id' => sizeof($listaContactos),
            'nombre' => $formContacto['nombre'],
            'paterno' => $formContacto['paterno'],
            'materno' => $formContacto['materno'],
            'nacimiento' => $formContacto['nacimiento'],
            'cumpleanios' => fechaCumpleanios($formContacto['nacimiento']),
            'idGenero' => $formContacto['idGenero'],
            'genero' => getGenero($formContacto['idGenero']),
            'idTipoTelefono' => $formContacto['idTipoTelefono'],
            'tipoTelefono' => getTipoNumero($formContacto['idTipoTelefono']),
            'numeroTelefono'=>$formContacto['numeroTelefono'],
            'correo' => $formContacto['correo'],
            'facebook' => $formContacto['facebook']
        );
        if(isset($_GET['id']) && $_GET['id'] != ''){
            //contacto a modificar
            $urlLocation .= '&tipoOp=actualizar&id='.$_GET['id'];
        }else{
            //cpntacto nuevo
            $urlLocation .= '&tipoOp=nuevo';
        }
        $dataContacto = base64_encode(json_encode($dataContacto));
        $urlLocation .= '&dataContacto='.$dataContacto;
        header('Location: '.$urlLocation);
    }else{
        //se envian los mensajes
        $msgValidaciones = $validacion['msg'];
        $tipoMensaje = 'error';
        include_once 'paginas/header.php';
        include_once 'formulario_contacto.php';
        include_once 'paginas/footer.php';
    }
}else{
    $msgValidaciones[] = 'Se limpia el formulario cuando se activa/desactiva el css';
    include_once 'paginas/header.php';
    include_once 'formulario_contacto.php';
    include_once 'paginas/footer.php';
}