<?php

require_once '../modelo/ContactoModelo.php';
require_once '../helper/comun.php';
require_once '../helper/FormValidacionHelper.php';

class ContactoFunciones{

    private $contactoModel;

    function __construct(){
        $this->contactoModel = new ContactoModelo();
    }

    public function getListaContactos(){
        $formContactoBusqueda = $_POST;
        $contactos = $this->contactoModel->getListaContactos($formContactoBusqueda);
        foreach ($contactos as $c){
            $c->genero = $c->id_genero == 1 ? 'Masculino' : 'Femenino';
            $c->cumpleanios = fechaCumpleanios($c->nacimiento);
        }
        return $contactos;
    }

    public function guardarNuevoActualizarContacto(){
        $response['success'] = false;
        $response['msg'] = array();
        $formContacto = $_POST;
        $validacion = FormValidacionHelper::validarFormNuevoContacto($formContacto);
        if($validacion['success']){
            if($this->contactoModel->guardarContacto($formContacto)){
                $response['success'] = true;
                $response['msg'][] = 'Se guardo el contacto con éxito';
            }
        }else{
            $response['msg'] = $validacion['msg'];
        }
        return $response;
    }

    public function eliminarContacto($idContacto){
        $response['success'] = true;
        $response['msg'] = array('Se eliminó el contacto correctamente');
        if(!$this->contactoModel->eliminarContacto($idContacto)){
            $response['success'] = false;
            $response['msg'] = array('No fue posible eliminar el contacto, favor de intentar más tarde');
        }
        return $response;
    }

}